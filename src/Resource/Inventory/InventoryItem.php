<?php


namespace Slince\Shopify\Resource\Inventory;


class InventoryItem
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @var bool
     */
    protected $requiresShipping;

    /**
     * @var string
     */
    protected $cost;

    /**
     * @var string
     */
    protected $countryCodeOfOrigin;

    /**
     * @var string
     */
    protected $provinceCodeOfOrigin;

    /**
     * @var int
     */
    protected $harmonizedSystemCode;

    /**
     * @var boolean
     */
    protected $tracked;

    /**
     * @var array
     */
    protected $countryHarmonizedSystemCodes;

    /**
     * @var string
     */
    protected $adminGraphqlApiId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt(): \DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeInterface $updatedAt
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return bool
     */
    public function isRequiresShipping(): bool
    {
        return $this->requiresShipping;
    }

    /**
     * @param bool $requiresShipping
     */
    public function setRequiresShipping(bool $requiresShipping): void
    {
        $this->requiresShipping = $requiresShipping;
    }

    /**
     * @return string
     */
    public function getCost(): string
    {
        return $this->cost;
    }

    /**
     * @param string $cost
     */
    public function setCost(string $cost): void
    {
        $this->cost = $cost;
    }

    /**
     * @return string
     */
    public function getCountryCodeOfOrigin(): string
    {
        return $this->countryCodeOfOrigin;
    }

    /**
     * @param string $countryCodeOfOrigin
     */
    public function setCountryCodeOfOrigin(string $countryCodeOfOrigin): void
    {
        $this->countryCodeOfOrigin = $countryCodeOfOrigin;
    }

    /**
     * @return string
     */
    public function getProvinceCodeOfOrigin(): string
    {
        return $this->provinceCodeOfOrigin;
    }

    /**
     * @param string $provinceCodeOfOrigin
     */
    public function setProvinceCodeOfOrigin(string $provinceCodeOfOrigin): void
    {
        $this->provinceCodeOfOrigin = $provinceCodeOfOrigin;
    }

    /**
     * @return int
     */
    public function getHarmonizedSystemCode(): int
    {
        return $this->harmonizedSystemCode;
    }

    /**
     * @param int $harmonizedSystemCode
     */
    public function setHarmonizedSystemCode(int $harmonizedSystemCode): void
    {
        $this->harmonizedSystemCode = $harmonizedSystemCode;
    }

    /**
     * @return bool
     */
    public function isTracked(): bool
    {
        return $this->tracked;
    }

    /**
     * @param bool $tracked
     */
    public function setTracked(bool $tracked): void
    {
        $this->tracked = $tracked;
    }

    /**
     * @return array
     */
    public function getCountryHarmonizedSystemCodes(): array
    {
        return $this->countryHarmonizedSystemCodes;
    }

    /**
     * @param array $countryHarmonizedSystemCodes
     */
    public function setCountryHarmonizedSystemCodes(array $countryHarmonizedSystemCodes): void
    {
        $this->countryHarmonizedSystemCodes = $countryHarmonizedSystemCodes;
    }

    /**
     * @return string
     */
    public function getAdminGraphqlApiId(): string
    {
        return $this->adminGraphqlApiId;
    }

    /**
     * @param string $adminGraphqlApiId
     */
    public function setAdminGraphqlApiId(string $adminGraphqlApiId): void
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
    }
}