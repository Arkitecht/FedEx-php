<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Surcharge Structs
 * @subpackage Structs
 */
class Surcharge extends AbstractStructBase
{
    /**
     * The SurchargeType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SurchargeType;
    /**
     * The Level
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Level;
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
     * Constructor method for Surcharge
     * @uses Surcharge::setSurchargeType()
     * @uses Surcharge::setLevel()
     * @uses Surcharge::setDescription()
     * @uses Surcharge::setAmount()
     * @param string $surchargeType
     * @param string $level
     * @param string $description
     * @param \Arkitecht\FedEx\Structs\Money $amount
     */
    public function __construct($surchargeType = null, $level = null, $description = null, \Arkitecht\FedEx\Structs\Money $amount = null)
    {
        $this
            ->setSurchargeType($surchargeType)
            ->setLevel($level)
            ->setDescription($description)
            ->setAmount($amount);
    }
    /**
     * Get SurchargeType value
     * @return string|null
     */
    public function getSurchargeType()
    {
        return $this->SurchargeType;
    }
    /**
     * Set SurchargeType value
     * @uses \Arkitecht\FedEx\Enums\SurchargeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\SurchargeType::getValidValues()
     * @param string $surchargeType
     * @return \Arkitecht\FedEx\Structs\Surcharge
     */
    public function setSurchargeType($surchargeType = null)
    {
        if (!\Arkitecht\FedEx\Enums\SurchargeType::valueIsValid($surchargeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $surchargeType, implode(', ', \Arkitecht\FedEx\Enums\SurchargeType::getValidValues())), __LINE__);
        }
        $this->SurchargeType = $surchargeType;
        return $this;
    }
    /**
     * Get Level value
     * @return string|null
     */
    public function getLevel()
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @uses \Arkitecht\FedEx\Enums\SurchargeLevelType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\SurchargeLevelType::getValidValues()
     * @param string $level
     * @return \Arkitecht\FedEx\Structs\Surcharge
     */
    public function setLevel($level = null)
    {
        if (!\Arkitecht\FedEx\Enums\SurchargeLevelType::valueIsValid($level)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $level, implode(', ', \Arkitecht\FedEx\Enums\SurchargeLevelType::getValidValues())), __LINE__);
        }
        $this->Level = $level;
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
     * @return \Arkitecht\FedEx\Structs\Surcharge
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
     * @return \Arkitecht\FedEx\Structs\Surcharge
     */
    public function setAmount(\Arkitecht\FedEx\Structs\Money $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\Surcharge
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
