<?php
/**
 * Configuration expand
 * PHP version 7.2
 *
 * @category Class
 * @package  MPSolutions\AmznSellingPartnerApi
 */

namespace MPSolutions\AmznSellingPartnerApi;

/**
 * Configuration expand
 *
 * @category Class
 * @package  MPSolutions\AmznSellingPartnerApi
 */
trait ConfigurationTrait
{
    /** @var string|null */
    protected $refreshToken;
    /** @var string|null */
    protected $clientId;
    /** @var string|null */
    protected $clientSecret;
    /** @var string|null */
    protected $tempFolderPath;
    /** @var string|null */
    protected $securityToken;
    /** @var string|null */
    protected $accessKey;
    /** @var string|null */
    protected $secretKey;
    /** @var string|null */
    protected $region;
    /** @var string|null */
    protected $roleArn;
    /** @var string|null */
    protected $service;

    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }

    public function setRefreshToken(?string $refreshToken): void
    {
        $this->refreshToken = $refreshToken;
    }

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function setClientId(?string $clientId): void
    {
        $this->clientId = $clientId;
    }

    public function getClientSecret(): ?string
    {
        return $this->clientSecret;
    }

    public function setClientSecret(?string $clientSecret): void
    {
        $this->clientSecret = $clientSecret;
    }

    public function getSecurityToken(): ?string
    {
        return $this->securityToken;
    }

    public function setSecurityToken(?string $securityToken): void
    {
        $this->securityToken = $securityToken;
    }

    public function getAccessKey(): ?string
    {
        return $this->accessKey;
    }

    public function setAccessKey(?string $accessKey): void
    {
        $this->accessKey = $accessKey;
    }

    public function getSecretKey(): ?string
    {
        return $this->secretKey;
    }

    public function setSecretKey(?string $secretKey): void
    {
        $this->secretKey = $secretKey;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }

    public function getRoleArn(): ?string
    {
        return $this->roleArn;
    }

    public function setRoleArn(?string $roleArn): void
    {
        $this->roleArn = $roleArn;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(?string $service): void
    {
        if ('' != $service) {
            $this->service = $service;
        } else {
            $this->setDefaultService();
        }
    }

    public function setServiceDefault(): void
    {
        $this->service = 'execute-api';
    }

}
