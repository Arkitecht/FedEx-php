<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tax Structs
 * @subpackage Structs
 */
class Tax extends AbstractStructBase
{
    /**
     * The TaxType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TaxType;
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
     * Constructor method for Tax
     * @uses Tax::setTaxType()
     * @uses Tax::setDescription()
     * @uses Tax::setAmount()
     * @param string $taxType
     * @param string $description
     * @param \Arkitecht\FedEx\Structs\Money $amount
     */
    public function __construct($taxType = null, $description = null, \Arkitecht\FedEx\Structs\Money $amount = null)
    {
        $this
            ->setTaxType($taxType)
            ->setDescription($description)
            ->setAmount($amount);
    }
    /**
     * Get TaxType value
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->TaxType;
    }
    /**
     * Set TaxType value
     * @uses \Arkitecht\FedEx\Enums\TaxType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\TaxType::getValidValues()
     * @param string $taxType
     * @return \Arkitecht\FedEx\Structs\Tax
     */
    public function setTaxType($taxType = null)
    {
        if (!\Arkitecht\FedEx\Enums\TaxType::valueIsValid($taxType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $taxType, implode(', ', \Arkitecht\FedEx\Enums\TaxType::getValidValues())), __LINE__);
        }
        $this->TaxType = $taxType;
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
     * @return \Arkitecht\FedEx\Structs\Tax
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
     * @return \Arkitecht\FedEx\Structs\Tax
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
     * @return \Arkitecht\FedEx\Structs\Tax
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
