<?php

namespace WeDevBr\Bankly\Inputs;

/**
 * Business Customer class
 *
 * PHP version 8.0|8.1
 *
 * @author    WeDev Brasil Team <contato@wedev.software>
 * @author    Rafael Teixeira <marco.santos@wedev.softwarem>
 * @copyright 2020 We Dev Tecnologia Ltda
 * @link      https://github.com/wedevBr/bankly-laravel
 */
class BusinessCustomer
{
    /** @var string */
    protected $businessName;

    /** @var string */
    protected $tradingName;

    /** @var string */
    protected $businessEmail;

    /** @var string */
    protected $businessType;

    /** @var string */
    protected $businessSize;

    /** @var string */
    protected $declaredAnnualBilling;

    /** @var CustomerAddress */
    protected $businessAddress;

    /** @var LegalRepresentative */
    protected $legalRepresentative;

    /**
     * @param string $businessName
     * @return BusinessCustomer
     */
    public function setBusinessName(string $businessName): BusinessCustomer
    {
        $this->businessName = $businessName;
        return $this;
    }

    /**
     * @param string $tradingName
     * @return BusinessCustomer
     */
    public function setTradingName(string $tradingName): BusinessCustomer
    {
        $this->tradingName = $tradingName;
        return $this;
    }

    /**
     * @param string $businessEmail
     * @return BusinessCustomer
     */
    public function setBusinessEmail(string $businessEmail): BusinessCustomer
    {
        $this->businessEmail = $businessEmail;
        return $this;
    }

    /**
     * @param string $businessType
     * @return BusinessCustomer
     */
    public function setBusinessType(string $businessType): BusinessCustomer
    {
        $this->businessType = $businessType;
        return $this;
    }

    /**
     * @param string $businessSize
     * @return BusinessCustomer
     */
    public function setBusinessSize(string $businessSize): BusinessCustomer
    {
        $this->businessSize = $businessSize;
        return $this;
    }

    /**
     * @param string $declaredAnnualBilling
     * @return BusinessCustomer
     */
    public function setDeclaredAnnualBilling(string $declaredAnnualBilling): BusinessCustomer
    {
        $this->declaredAnnualBilling = $declaredAnnualBilling;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessName(): string
    {
        return $this->businessName;
    }

    /**
     * @return string
     */
    public function getTradingName(): string
    {
        return $this->tradingName;
    }

    /**
     * @return string
     */
    public function getBusinessEmail(): string
    {
        return $this->businessEmail;
    }

    /**
     * @return string
     */
    public function getBusinessType(): string
    {
        return $this->businessType;
    }

    /**
     * @return string
     */
    public function getBusinessSize(): string
    {
        return $this->businessSize;
    }

    /**
     * @return string
     */
    public function getDeclaredAnnualBilling(): string
    {
        return $this->declaredAnnualBilling;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'businessAddress' => $this->businessAddress->toArray(),
            'legalRepresentative' => $this->legalRepresentative->toArray(),
            'tradingName' => $this->tradingName,
            'businessName' => $this->businessName,
            'businessEmail' => $this->businessEmail,
            'declaredAnnualBilling' => $this->declaredAnnualBilling,
            'businessSize' => $this->businessSize,
            'businessType' => $this->businessType
        ];
    }
}