<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EdtTaxDetail Structs
 * @subpackage Structs
 */
class EdtTaxDetail extends AbstractStructBase
{
    /**
     * The TaxType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TaxType;
    /**
     * The EffectiveDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var date
     */
    public $EffectiveDate;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The TaxableValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TaxableValue;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Formula
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Formula;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $Amount;
    /**
     * Constructor method for EdtTaxDetail
     * @uses EdtTaxDetail::setTaxType()
     * @uses EdtTaxDetail::setEffectiveDate()
     * @uses EdtTaxDetail::setName()
     * @uses EdtTaxDetail::setTaxableValue()
     * @uses EdtTaxDetail::setDescription()
     * @uses EdtTaxDetail::setFormula()
     * @uses EdtTaxDetail::setAmount()
     * @param string $taxType
     * @param date $effectiveDate
     * @param string $name
     * @param \Arkitecht\FedEx\Structs\Money $taxableValue
     * @param string $description
     * @param string $formula
     * @param \Arkitecht\FedEx\Structs\Money $amount
     */
    public function __construct($taxType = null, $effectiveDate = null, $name = null, \Arkitecht\FedEx\Structs\Money $taxableValue = null, $description = null, $formula = null, \Arkitecht\FedEx\Structs\Money $amount = null)
    {
        $this
            ->setTaxType($taxType)
            ->setEffectiveDate($effectiveDate)
            ->setName($name)
            ->setTaxableValue($taxableValue)
            ->setDescription($description)
            ->setFormula($formula)
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
     * @uses \Arkitecht\FedEx\Enums\EdtTaxType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\EdtTaxType::getValidValues()
     * @param string $taxType
     * @return \Arkitecht\FedEx\Structs\EdtTaxDetail
     */
    public function setTaxType($taxType = null)
    {
        if (!\Arkitecht\FedEx\Enums\EdtTaxType::valueIsValid($taxType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $taxType, implode(', ', \Arkitecht\FedEx\Enums\EdtTaxType::getValidValues())), __LINE__);
        }
        $this->TaxType = $taxType;
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return date|null
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param date $effectiveDate
     * @return \Arkitecht\FedEx\Structs\EdtTaxDetail
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Arkitecht\FedEx\Structs\EdtTaxDetail
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get TaxableValue value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getTaxableValue()
    {
        return $this->TaxableValue;
    }
    /**
     * Set TaxableValue value
     * @param \Arkitecht\FedEx\Structs\Money $taxableValue
     * @return \Arkitecht\FedEx\Structs\EdtTaxDetail
     */
    public function setTaxableValue(\Arkitecht\FedEx\Structs\Money $taxableValue = null)
    {
        $this->TaxableValue = $taxableValue;
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
     * @return \Arkitecht\FedEx\Structs\EdtTaxDetail
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Formula value
     * @return string|null
     */
    public function getFormula()
    {
        return $this->Formula;
    }
    /**
     * Set Formula value
     * @param string $formula
     * @return \Arkitecht\FedEx\Structs\EdtTaxDetail
     */
    public function setFormula($formula = null)
    {
        $this->Formula = $formula;
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
     * @return \Arkitecht\FedEx\Structs\EdtTaxDetail
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
     * @return \Arkitecht\FedEx\Structs\EdtTaxDetail
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
