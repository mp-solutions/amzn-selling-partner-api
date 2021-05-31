<?php
namespace MPSolutions\AmznSellingPartnerApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use MPSolutions\AmznSellingPartnerApi\AmazonRequest as Request;
use GuzzleHttp\RequestOptions;
use MPSolutions\AmznSellingPartnerApi\Configuration;
use MPSolutions\AmznSellingPartnerApi\HeaderSelector;

class AuthorizationOauthApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * Predefined amazon regions and endpoints
     * with sandbox
     */
    const REGIONS = [
        'EUROPE' => [
            'AWS_Region' => 'eu-west-1',
            'Endpoint' => 'https://sellingpartnerapi-eu.amazon.com',
        ],
        'FAR_EAST' => [
            'AWS_Region' => 'us-west-2',
            'Endpoint' => 'https://sellingpartnerapi-fe.amazon.com',
        ],
        'NORTH_AMERICA' => [
            'AWS_Region' => 'us-east-1',
            'Endpoint' => 'https://sellingpartnerapi-na.amazon.com',
        ],

        'EUROPE_SNDBX' => [
            'AWS_Region' => 'eu-west-1',
            'Endpoint' => 'https://sandbox.sellingpartnerapi-eu.amazon.com',
        ],
        'FAR_EAST_SNDBX' => [
            'AWS_Region' => 'us-west-2',
            'Endpoint' => 'https://sandbox.sellingpartnerapi-fe.amazon.com',
        ],
        'NORTH_AMERICA_SNDBX' => [
            'AWS_Region' => 'us-east-1',
            'Endpoint' => 'https://sandbox.sellingpartnerapi-na.amazon.com',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param string          $regionCode
     * @param integer         $sessionDurationSeconds
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        string $regionCode = '',
        int $sessionDurationSeconds = 3600
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();

        if ('' != $regionCode) {
            $this->setRegionByRegionCode($regionCode);
        }
        if ('' == $this->config->getRegion()
            || '' == $this->config->getHost()) {
            throw new \Exception('Configuration region and host must be set.');
        }

        $this->setAccessTokenFromRefreshToken();
        $this->setSecurityToken($sessionDurationSeconds);
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Set the region by predefined codes
     */
    public function setRegionByRegionCode($regionCode): void
    {
        if (!in_array($regionCode, $regionCodes = array_keys(self::REGIONS))) {
            throw new \Exception('Region Code must be one of [' . implode(',', $regionCodes) . '].');
        }
        $region = self::REGIONS[$regionCode];
        $this->config->setRegion($region['AWS_Region']);
        $this->config->setHost($region['Endpoint']);
    }

    /**
     * Get AccessToken from amazon
     * @throws \Exception
     */
    public function setAccessTokenFromRefreshToken(): void
    {
        $formParams = [
            'grant_type' => 'refresh_token',
            'refresh_token' => $this->config->getRefreshToken(),
            'client_id' => $this->config->getClientId(),
            'client_secret' => $this->config->getClientSecret(),
        ];

        $options = array_merge([
            RequestOptions::HEADERS => ['Accept' => 'application/json'],
            RequestOptions::HTTP_ERRORS => false,
            'curl' => [
                CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_2,
            ],
        ], $formParams ? [RequestOptions::FORM_PARAMS => $formParams] : []);

        try {
            $response = $this->client->request('POST', 'https://api.amazon.com/auth/o2/token', $options);

            $body = $response->getBody()->getContents();
            $bodyDecoded = json_decode($body, true);

            $this->config->setAccessToken($bodyDecoded['access_token']);
        } catch (\Exception $e) {
            \Yii::error("Error on getting access token: {$e->getMessage()}");
            throw $e;
        }
    }

    /**
     * Get SecurityTken from amazon
     * and save to config
     * @param int $durationSeconds
     */
    public function setSecurityToken(int $durationSeconds = 3600): void
    {
        // reconfig for special request for credentials
        $origHost = $this->config->getHost();
        $this->config->setService('sts');

        $origRegion = $this->config->getRegion();
        $this->config->setRegion(self::REGIONS['NORTH_AMERICA']['AWS_Region']);

        // get credentials
        $credentials = $this->getCredentialsByRole($durationSeconds);

        // restore original config values
        $this->config->setServiceDefault();
        $this->config->setHost($origHost);
        $this->config->setRegion($origRegion);

        $this->config->setAccessKey($credentials['AccessKeyId']);
        $this->config->setSecretKey($credentials['SecretAccessKey']);
        $this->config->setSecurityToken($credentials['SessionToken']);
    }

    /**
     * Get Credentials from amazon
     * @param int $durationSeconds
     * @throws \Exception
     */
    protected function getCredentialsByRole(int $durationSeconds = 3600): array
    {
        $request = $this->createSecurityTokenRequest($durationSeconds);
        try {
            $response = $this->client->send($request);

            $json = json_decode($response->getBody(), true);
            $credentials = $json['AssumeRoleResponse']['AssumeRoleResult']['Credentials'] ?? null;
            return $credentials;
        } catch (\Exception $e) {
            \Yii::error("Error on getting credentials: {$e->getMessage()}");
            throw $e;
        }
    }

    /**
     * Create request for operation 'getCredentialsByRole'
     * @param int $durationSeconds
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createSecurityTokenRequest($durationSeconds = 3600)
    {
        $formParams = [
            'Action' => 'AssumeRole',
            'DurationSeconds' => $durationSeconds,
            'RoleArn' => $this->config->getRoleArn(),
            'RoleSessionName' => 'amazon-sp-api-php',
            'Version' => '2011-06-15',
        ];

        $method = 'POST';
        $host = 'https://sts.amazonaws.com';
        $resourcePath = '/';

        $this->config->setHost($host);

        $headers = [
            'accept' => 'application/json',
            'Content-Type' => 'application/x-www-form-urlencoded',
        ];

        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);

        return new Request(
            $method,
            $resourcePath,
            $headers,
            '',
            $httpBody,
            $this->config
        );
    }

}