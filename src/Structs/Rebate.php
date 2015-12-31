<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rebate Structs
 * @subpackage Structs
 */
class Rebate extends AbstractStructBase
{
    /**
     * The RebateType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RebateType;
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
     * Constructor method for Rebate
     * @uses Rebate::setRebateType()
     * @uses Rebate::setDescription()
     * @uses Rebate::setAmount()
     * @uses Rebate::setPercent()
     * @param string $rebateType
     * @param string $description
     * @param \Arkitecht\FedEx\Structs\Money $amount
     * @param decimal $percent
     */
    public function __construct($rebateType = null, $description = null, \Arkitecht\FedEx\Structs\Money $amount = null, $percent = null)
    {
        $this
            ->setRebateType($rebateType)
            ->setDescription($description)
            ->setAmount($amount)
            ->setPercent($percent);
    }
    /**
     * Get RebateType value
     * @return string|null
     */
    public function getRebateType()
    {
        return $this->RebateType;
    }
    /**
     * Set RebateType value
     * @uses \Arkitecht\FedEx\Enums\RebateType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\RebateType::getValidValues()
     * @param string $rebateType
     * @return \Arkitecht\FedEx\Structs\Rebate
     */
    public function setRebateType($rebateType = null)
    {
        if (!\Arkitecht\FedEx\Enums\RebateType::valueIsValid($rebateType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $rebateType, implode(', ', \Arkitecht\FedEx\Enums\RebateType::getValidValues())), __LINE__);
        }
        $this->RebateType = $rebateType;
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
     * @return \Arkitecht\FedEx\Structs\Rebate
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
     * @return \Arkitecht\FedEx\Structs\Rebate
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
     * @return \Arkitecht\FedEx\Structs\Rebate
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
     * @return \Arkitecht\FedEx\Structs\Rebate
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
