<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightBaseCharge Structs
 * Meta informations extracted from the WSDL
 * - documentation: Individual charge which contributes to the total base charge for the shipment.
 * @subpackage Structs
 */
class FreightBaseCharge extends AbstractStructBase
{
    /**
     * The FreightClass
     * Meta informations extracted from the WSDL
     * - documentation: Freight class for this line item.
     * - minOccurs: 0
     * - documentation: These values represent the industry-standard freight classes used for FedEx Freight and FedEx National Freight shipment description. (Note: The alphabetic prefixes are required to distinguish these values from decimal numbers on some
     * client platforms.)
     * @var string
     */
    public $FreightClass;
    /**
     * The RatedAsClass
     * Meta informations extracted from the WSDL
     * - documentation: Effective freight class used for rating this line item.
     * - minOccurs: 0
     * - documentation: These values represent the industry-standard freight classes used for FedEx Freight and FedEx National Freight shipment description. (Note: The alphabetic prefixes are required to distinguish these values from decimal numbers on some
     * client platforms.)
     * @var string
     */
    public $RatedAsClass;
    /**
     * The NmfcCode
     * Meta informations extracted from the WSDL
     * - documentation: NMFC Code for commodity.
     * - minOccurs: 0
     * @var string
     */
    public $NmfcCode;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Customer-provided description for this commodity or class line.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - documentation: Weight for this commodity or class line.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $Weight;
    /**
     * The ChargeRate
     * Meta informations extracted from the WSDL
     * - documentation: Rate or factor applied to this line item.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $ChargeRate;
    /**
     * The ChargeBasis
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the manner in which the chargeRate for this line item was applied.
     * - minOccurs: 0
     * @var string
     */
    public $ChargeBasis;
    /**
     * The ExtendedAmount
     * Meta informations extracted from the WSDL
     * - documentation: The net or extended charge for this line item.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $ExtendedAmount;
    /**
     * Constructor method for FreightBaseCharge
     * @uses FreightBaseCharge::setFreightClass()
     * @uses FreightBaseCharge::setRatedAsClass()
     * @uses FreightBaseCharge::setNmfcCode()
     * @uses FreightBaseCharge::setDescription()
     * @uses FreightBaseCharge::setWeight()
     * @uses FreightBaseCharge::setChargeRate()
     * @uses FreightBaseCharge::setChargeBasis()
     * @uses FreightBaseCharge::setExtendedAmount()
     * @param string $freightClass
     * @param string $ratedAsClass
     * @param string $nmfcCode
     * @param string $description
     * @param \Arkitecht\FedEx\Structs\Weight $weight
     * @param \Arkitecht\FedEx\Structs\Money $chargeRate
     * @param string $chargeBasis
     * @param \Arkitecht\FedEx\Structs\Money $extendedAmount
     */
    public function __construct($freightClass = null, $ratedAsClass = null, $nmfcCode = null, $description = null, \Arkitecht\FedEx\Structs\Weight $weight = null, \Arkitecht\FedEx\Structs\Money $chargeRate = null, $chargeBasis = null, \Arkitecht\FedEx\Structs\Money $extendedAmount = null)
    {
        $this
            ->setFreightClass($freightClass)
            ->setRatedAsClass($ratedAsClass)
            ->setNmfcCode($nmfcCode)
            ->setDescription($description)
            ->setWeight($weight)
            ->setChargeRate($chargeRate)
            ->setChargeBasis($chargeBasis)
            ->setExtendedAmount($extendedAmount);
    }
    /**
     * Get FreightClass value
     * @return string|null
     */
    public function getFreightClass()
    {
        return $this->FreightClass;
    }
    /**
     * Set FreightClass value
     * @uses \Arkitecht\FedEx\Enums\FreightClassType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\FreightClassType::getValidValues()
     * @param string $freightClass
     * @return \Arkitecht\FedEx\Structs\FreightBaseCharge
     */
    public function setFreightClass($freightClass = null)
    {
        if (!\Arkitecht\FedEx\Enums\FreightClassType::valueIsValid($freightClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $freightClass, implode(', ', \Arkitecht\FedEx\Enums\FreightClassType::getValidValues())), __LINE__);
        }
        $this->FreightClass = $freightClass;
        return $this;
    }
    /**
     * Get RatedAsClass value
     * @return string|null
     */
    public function getRatedAsClass()
    {
        return $this->RatedAsClass;
    }
    /**
     * Set RatedAsClass value
     * @uses \Arkitecht\FedEx\Enums\FreightClassType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\FreightClassType::getValidValues()
     * @param string $ratedAsClass
     * @return \Arkitecht\FedEx\Structs\FreightBaseCharge
     */
    public function setRatedAsClass($ratedAsClass = null)
    {
        if (!\Arkitecht\FedEx\Enums\FreightClassType::valueIsValid($ratedAsClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ratedAsClass, implode(', ', \Arkitecht\FedEx\Enums\FreightClassType::getValidValues())), __LINE__);
        }
        $this->RatedAsClass = $ratedAsClass;
        return $this;
    }
    /**
     * Get NmfcCode value
     * @return string|null
     */
    public function getNmfcCode()
    {
        return $this->NmfcCode;
    }
    /**
     * Set NmfcCode value
     * @param string $nmfcCode
     * @return \Arkitecht\FedEx\Structs\FreightBaseCharge
     */
    public function setNmfcCode($nmfcCode = null)
    {
        $this->NmfcCode = $nmfcCode;
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
     * @return \Arkitecht\FedEx\Structs\FreightBaseCharge
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Weight value
     * @return \Arkitecht\FedEx\Structs\Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Arkitecht\FedEx\Structs\Weight $weight
     * @return \Arkitecht\FedEx\Structs\FreightBaseCharge
     */
    public function setWeight(\Arkitecht\FedEx\Structs\Weight $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get ChargeRate value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getChargeRate()
    {
        return $this->ChargeRate;
    }
    /**
     * Set ChargeRate value
     * @param \Arkitecht\FedEx\Structs\Money $chargeRate
     * @return \Arkitecht\FedEx\Structs\FreightBaseCharge
     */
    public function setChargeRate(\Arkitecht\FedEx\Structs\Money $chargeRate = null)
    {
        $this->ChargeRate = $chargeRate;
        return $this;
    }
    /**
     * Get ChargeBasis value
     * @return string|null
     */
    public function getChargeBasis()
    {
        return $this->ChargeBasis;
    }
    /**
     * Set ChargeBasis value
     * @uses \Arkitecht\FedEx\Enums\FreightChargeBasisType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\FreightChargeBasisType::getValidValues()
     * @param string $chargeBasis
     * @return \Arkitecht\FedEx\Structs\FreightBaseCharge
     */
    public function setChargeBasis($chargeBasis = null)
    {
        if (!\Arkitecht\FedEx\Enums\FreightChargeBasisType::valueIsValid($chargeBasis)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $chargeBasis, implode(', ', \Arkitecht\FedEx\Enums\FreightChargeBasisType::getValidValues())), __LINE__);
        }
        $this->ChargeBasis = $chargeBasis;
        return $this;
    }
    /**
     * Get ExtendedAmount value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getExtendedAmount()
    {
        return $this->ExtendedAmount;
    }
    /**
     * Set ExtendedAmount value
     * @param \Arkitecht\FedEx\Structs\Money $extendedAmount
     * @return \Arkitecht\FedEx\Structs\FreightBaseCharge
     */
    public function setExtendedAmount(\Arkitecht\FedEx\Structs\Money $extendedAmount = null)
    {
        $this->ExtendedAmount = $extendedAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\FreightBaseCharge
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
