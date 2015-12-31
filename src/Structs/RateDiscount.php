<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateDiscount Structs
 * @subpackage Structs
 */
class RateDiscount extends AbstractStructBase
{
    /**
     * The RateDiscountType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RateDiscountType;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $Amount;
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var decimal
     */
    public $Percent;
    /**
     * Constructor method for RateDiscount
     * @uses RateDiscount::setRateDiscountType()
     * @uses RateDiscount::setDescription()
     * @uses RateDiscount::setAmount()
     * @uses RateDiscount::setPercent()
     * @param string $rateDiscountType
     * @param string $description
     * @param \Arkitecht\FedEx\Structs\Money $amount
     * @param decimal $percent
     */
    public function __construct($rateDiscountType = null, $description = null, \Arkitecht\FedEx\Structs\Money $amount = null, $percent = null)
    {
        $this
            ->setRateDiscountType($rateDiscountType)
            ->setDescription($description)
            ->setAmount($amount)
            ->setPercent($percent);
    }
    /**
     * Get RateDiscountType value
     * @return string|null
     */
    public function getRateDiscountType()
    {
        return $this->RateDiscountType;
    }
    /**
     * Set RateDiscountType value
     * @uses \Arkitecht\FedEx\Enums\RateDiscountType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\RateDiscountType::getValidValues()
     * @param string $rateDiscountType
     * @return \Arkitecht\FedEx\Structs\RateDiscount
     */
    public function setRateDiscountType($rateDiscountType = null)
    {
        if (!\Arkitecht\FedEx\Enums\RateDiscountType::valueIsValid($rateDiscountType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $rateDiscountType, implode(', ', \Arkitecht\FedEx\Enums\RateDiscountType::getValidValues())), __LINE__);
        }
        $this->RateDiscountType = $rateDiscountType;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Arkitecht\FedEx\Structs\RateDiscount
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Amount value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \Arkitecht\FedEx\Structs\Money $amount
     * @return \Arkitecht\FedEx\Structs\RateDiscount
     */
    public function setAmount(\Arkitecht\FedEx\Structs\Money $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get Percent value
     * @return decimal|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param decimal $percent
     * @return \Arkitecht\FedEx\Structs\RateDiscount
     */
    public function setPercent($percent = null)
    {
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\RateDiscount
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
