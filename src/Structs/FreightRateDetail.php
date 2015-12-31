<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightRateDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Rate data specific to FedEx Freight or FedEx National Freight services.
 * @subpackage Structs
 */
class FreightRateDetail extends AbstractStructBase
{
    /**
     * The QuoteNumber
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for a specific rate quotation.
     * - minOccurs: 0
     * @var string
     */
    public $QuoteNumber;
    /**
     * The QuoteType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether the rate quote was automated or manual.
     * - minOccurs: 0
     * - documentation: Specifies the type of rate quote
     * @var string
     */
    public $QuoteType;
    /**
     * The BaseChargeCalculation
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how total base charge is determined.
     * - minOccurs: 0
     * - documentation: Specifies the way in which base charges for a Freight shipment or shipment leg are calculated.
     * @var string
     */
    public $BaseChargeCalculation;
    /**
     * The BaseCharges
     * Meta informations extracted from the WSDL
     * - documentation: Freight charges which accumulate to the total base charge for the shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Individual charge which contributes to the total base charge for the shipment.
     * @var \Arkitecht\FedEx\Structs\FreightBaseCharge
     */
    public $BaseCharges;
    /**
     * The Notations
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable descriptions of additional information on this shipment rating.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Additional non-monetary data returned with Freight rates.
     * @var \Arkitecht\FedEx\Structs\FreightRateNotation
     */
    public $Notations;
    /**
     * Constructor method for FreightRateDetail
     * @uses FreightRateDetail::setQuoteNumber()
     * @uses FreightRateDetail::setQuoteType()
     * @uses FreightRateDetail::setBaseChargeCalculation()
     * @uses FreightRateDetail::setBaseCharges()
     * @uses FreightRateDetail::setNotations()
     * @param string $quoteNumber
     * @param string $quoteType
     * @param string $baseChargeCalculation
     * @param \Arkitecht\FedEx\Structs\FreightBaseCharge $baseCharges
     * @param \Arkitecht\FedEx\Structs\FreightRateNotation $notations
     */
    public function __construct($quoteNumber = null, $quoteType = null, $baseChargeCalculation = null, \Arkitecht\FedEx\Structs\FreightBaseCharge $baseCharges = null, \Arkitecht\FedEx\Structs\FreightRateNotation $notations = null)
    {
        $this
            ->setQuoteNumber($quoteNumber)
            ->setQuoteType($quoteType)
            ->setBaseChargeCalculation($baseChargeCalculation)
            ->setBaseCharges($baseCharges)
            ->setNotations($notations);
    }
    /**
     * Get QuoteNumber value
     * @return string|null
     */
    public function getQuoteNumber()
    {
        return $this->QuoteNumber;
    }
    /**
     * Set QuoteNumber value
     * @param string $quoteNumber
     * @return \Arkitecht\FedEx\Structs\FreightRateDetail
     */
    public function setQuoteNumber($quoteNumber = null)
    {
        $this->QuoteNumber = $quoteNumber;
        return $this;
    }
    /**
     * Get QuoteType value
     * @return string|null
     */
    public function getQuoteType()
    {
        return $this->QuoteType;
    }
    /**
     * Set QuoteType value
     * @uses \Arkitecht\FedEx\Enums\FreightRateQuoteType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\FreightRateQuoteType::getValidValues()
     * @param string $quoteType
     * @return \Arkitecht\FedEx\Structs\FreightRateDetail
     */
    public function setQuoteType($quoteType = null)
    {
        if (!\Arkitecht\FedEx\Enums\FreightRateQuoteType::valueIsValid($quoteType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $quoteType, implode(', ', \Arkitecht\FedEx\Enums\FreightRateQuoteType::getValidValues())), __LINE__);
        }
        $this->QuoteType = $quoteType;
        return $this;
    }
    /**
     * Get BaseChargeCalculation value
     * @return string|null
     */
    public function getBaseChargeCalculation()
    {
        return $this->BaseChargeCalculation;
    }
    /**
     * Set BaseChargeCalculation value
     * @uses \Arkitecht\FedEx\Enums\FreightBaseChargeCalculationType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\FreightBaseChargeCalculationType::getValidValues()
     * @param string $baseChargeCalculation
     * @return \Arkitecht\FedEx\Structs\FreightRateDetail
     */
    public function setBaseChargeCalculation($baseChargeCalculation = null)
    {
        if (!\Arkitecht\FedEx\Enums\FreightBaseChargeCalculationType::valueIsValid($baseChargeCalculation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $baseChargeCalculation, implode(', ', \Arkitecht\FedEx\Enums\FreightBaseChargeCalculationType::getValidValues())), __LINE__);
        }
        $this->BaseChargeCalculation = $baseChargeCalculation;
        return $this;
    }
    /**
     * Get BaseCharges value
     * @return \Arkitecht\FedEx\Structs\FreightBaseCharge|null
     */
    public function getBaseCharges()
    {
        return $this->BaseCharges;
    }
    /**
     * Set BaseCharges value
     * @param \Arkitecht\FedEx\Structs\FreightBaseCharge $baseCharges
     * @return \Arkitecht\FedEx\Structs\FreightRateDetail
     */
    public function setBaseCharges(\Arkitecht\FedEx\Structs\FreightBaseCharge $baseCharges = null)
    {
        $this->BaseCharges = $baseCharges;
        return $this;
    }
    /**
     * Get Notations value
     * @return \Arkitecht\FedEx\Structs\FreightRateNotation|null
     */
    public function getNotations()
    {
        return $this->Notations;
    }
    /**
     * Set Notations value
     * @param \Arkitecht\FedEx\Structs\FreightRateNotation $notations
     * @return \Arkitecht\FedEx\Structs\FreightRateDetail
     */
    public function setNotations(\Arkitecht\FedEx\Structs\FreightRateNotation $notations = null)
    {
        $this->Notations = $notations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\FreightRateDetail
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
