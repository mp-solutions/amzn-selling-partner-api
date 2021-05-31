<?php
namespace MPSolutions\AmznSellingPartnerApi;

use GuzzleHttp\Psr7\Request;

class AmazonRequest extends Request
{
    protected $config;

    /**
     * 
     * @param type $method
     * @param type $uri
     * @param array $headers
     * @param type $query
     * @param type $body
     * @param type $config
     * @param type $version
     */
    public function __construct($method, $uri, array $headers = [], $query = '', $body = null, $config = null, $version = '1.1')
    {
        $this->config = $config;

        $signatureHeader = $this->createSignatureHeader(
            str_replace('https://', '', $config->getHost()),
            $method,
            $uri,
            $query,
            (string) $body
        );

        parent::__construct(
            $method,
            $config->getHost() . $uri . ($query ? "?{$query}" : ''),
            array_merge($headers, $signatureHeader),
            $body,
            $version
        );
    }

    /**
     * Creates signature header
     * @param string $host
     * @param string $method
     * @param type $uri
     * @param type $queryString
     * @param type $data
     * @return array
     */
    protected function createSignatureHeader(string $host, string $method, $uri, $queryString, $data): array
    {
        $terminationString = 'aws4_request';
        $algorithm = 'AWS4-HMAC-SHA256';
        $amzdate = gmdate('Ymd\THis\Z');
        $date = substr($amzdate, 0, 8);

        // Prepare payload
        if (is_array($data)) {
            $param = json_encode($data);
            if ('[]' == $param) {
                $requestPayload = '';
            } else {
                $requestPayload = $param;
            }
        } else {
            $requestPayload = $data;
        }

        // Hashed payload
        $hashedPayload = hash('sha256', $requestPayload);

        //Compute Canonical Headers
        $canonicalHeaders = [
            'host' => $host,
            'user-agent' => $this->config->getUserAgent(),
        ];

        // Check and attach access token to request header
        if (!is_null($this->config->getAccessToken())) {
            $canonicalHeaders['x-amz-access-token'] = $this->config->getAccessToken();
        }
        $canonicalHeaders['x-amz-date'] = $amzdate;
        // Check and attach STS token to request header
        if (!is_null($this->config->getSecurityToken())) {
            $canonicalHeaders['x-amz-security-token'] = $this->config->getSecurityToken();
        }

        $canonicalHeadersStr = '';
        foreach ($canonicalHeaders as $h => $v) {
            $canonicalHeadersStr .= $h.':'.$v."\n";
        }
        $signedHeadersStr = join(';', array_keys($canonicalHeaders));

        //Prepare credentials scope
        $credentialScope = $date.'/'.$this->config->getRegion().'/'.$this->config->getService().'/'.$terminationString;

        //prepare canonical request
        $canonicalRequest = $method."\n".$uri."\n".$queryString."\n".$canonicalHeadersStr."\n".$signedHeadersStr."\n".$hashedPayload;

        //Prepare the string to sign
        $stringToSign = $algorithm."\n".$amzdate."\n".$credentialScope."\n".hash('sha256', $canonicalRequest);

        //Start signing locker process
        $kSecret = 'AWS4'.$this->config->getSecretKey();
        $kDate = hash_hmac('sha256', $date, $kSecret, true);
        $kRegion = hash_hmac('sha256', $this->config->getRegion(), $kDate, true);
        $kService = hash_hmac('sha256', $this->config->getService(), $kRegion, true);
        $kSigning = hash_hmac('sha256', $terminationString, $kService, true);

        //Compute the signature
        $signature = trim(hash_hmac('sha256', $stringToSign, $kSigning));

        $signatureHeader = $algorithm." Credential={$this->config->getAccessKey()}/{$credentialScope}, SignedHeaders={$signedHeadersStr}, Signature={$signature}";

        return array_merge($canonicalHeaders, [
            'Authorization' => $signatureHeader,
        ]);
    }

    // from github
    private function createSignature_github($secretKey) { // $secretKey is the AWS secret key from IAM user
	$stringToSign = $this->createStringToSign(); // Derived according to docs: https://docs.aws.amazon.com/general/latest/gr/sigv4-create-string-to-sign.html
	$algorithm = 'sha256';
	$kSecret = "AWS4".$secretKey;
	$date = $this->credentials->date; // Date derived per amazon documentation eg. 20201020 for 20 Oct 2020
	$region = $this->credentials->region; // Region for request eg. us-east-1
	$service = $this->credentials->service; // Service eg. execute-api
	$terminationString = $this->credentials->terminationString; // Signature termination string eg. aws4_request
	$kDate = hash_hmac($algorithm, $date, $kSecret, true);
	$kRegion = hash_hmac($algorithm, $region, $kDate, true);
	$kService = hash_hmac($algorithm, $service, $kRegion, true);
	$kSigning = hash_hmac($algorithm, $terminationString, $kService, true);

	$signature = hash_hmac($algorithm, $stringToSign, $kSigning); // Without fourth parameter passed as true, returns lowercase hexits as called for by docs
	return trim($signature); // Trimming maybe not necessary here but can't hurt.
    }

}