<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentRating Structs
 * Meta informations extracted from the WSDL
 * - documentation: This class groups together all shipment-level rate data (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
 * @subpackage Structs
 */
class ShipmentRating extends AbstractStructBase
{
    /**
     * The ActualRateType
     * Meta informations extracted from the WSDL
     * - documentation: This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the shipment.
     * - minOccurs: 0
     * - documentation: The "PAYOR..." rates are expressed in the currency identified in the payor's rate table(s). The "RATED..." rates are expressed in the currency of the origin country. Former "...COUNTER..." values have become "...RETAIL..." values,
     * except for PAYOR_COUNTER and RATED_COUNTER, which have been removed.
     * @var string
     */
    public $ActualRateType;
    /**
     * The EffectiveNetDiscount
     * Meta informations extracted from the WSDL
     * - documentation: The "list" total net charge minus "actual" total net charge.
     * - minOccurs: 0
     * - documentation: The descriptive data for the medium of exchange for FedEx services.
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $EffectiveNetDiscount;
    /**
     * The ShipmentRateDetails
     * Meta informations extracted from the WSDL
     * - documentation: Each element of this field provides shipment-level rate totals for a specific rate type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Data for a shipment's total/summary rates, as calculated per a specific rate type. The "total..." fields may differ from the sum of corresponding package data for Multiweight or Express MPS.
     * @var \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public $ShipmentRateDetails;
    /**
     * Constructor method for ShipmentRating
     * @uses ShipmentRating::setActualRateType()
     * @uses ShipmentRating::setEffectiveNetDiscount()
     * @uses ShipmentRating::setShipmentRateDetails()
     * @param string $actualRateType
     * @param \Arkitecht\FedEx\Structs\Money $effectiveNetDiscount
     * @param \Arkitecht\FedEx\Structs\ShipmentRateDetail $shipmentRateDetails
     */
    public function __construct($actualRateType = null, \Arkitecht\FedEx\Structs\Money $effectiveNetDiscount = null, \Arkitecht\FedEx\Structs\ShipmentRateDetail $shipmentRateDetails = null)
    {
        $this
            ->setActualRateType($actualRateType)
            ->setEffectiveNetDiscount($effectiveNetDiscount)
            ->setShipmentRateDetails($shipmentRateDetails);
    }
    /**
     * Get ActualRateType value
     * @return string|null
     */
    public function getActualRateType()
    {
        return $this->ActualRateType;
    }
    /**
     * Set ActualRateType value
     * @uses \Arkitecht\FedEx\Enums\ReturnedRateType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ReturnedRateType::getValidValues()
     * @param string $actualRateType
     * @return \Arkitecht\FedEx\Structs\ShipmentRating
     */
    public function setActualRateType($actualRateType = null)
    {
        if (!\Arkitecht\FedEx\Enums\ReturnedRateType::valueIsValid($actualRateType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $actualRateType, implode(', ', \Arkitecht\FedEx\Enums\ReturnedRateType::getValidValues())), __LINE__);
        }
        $this->ActualRateType = $actualRateType;
        return $this;
    }
    /**
     * Get EffectiveNetDiscount value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getEffectiveNetDiscount()
    {
        return $this->EffectiveNetDiscount;
    }
    /**
     * Set EffectiveNetDiscount value
     * @param \Arkitecht\FedEx\Structs\Money $effectiveNetDiscount
     * @return \Arkitecht\FedEx\Structs\ShipmentRating
     */
    public function setEffectiveNetDiscount(\Arkitecht\FedEx\Structs\Money $effectiveNetDiscount = null)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    /**
     * Get ShipmentRateDetails value
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail|null
     */
    public function getShipmentRateDetails()
    {
        return $this->ShipmentRateDetails;
    }
    /**
     * Set ShipmentRateDetails value
     * @param \Arkitecht\FedEx\Structs\ShipmentRateDetail $shipmentRateDetails
     * @return \Arkitecht\FedEx\Structs\ShipmentRating
     */
    public function setShipmentRateDetails(\Arkitecht\FedEx\Structs\ShipmentRateDetail $shipmentRateDetails = null)
    {
        $this->ShipmentRateDetails = $shipmentRateDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ShipmentRating
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
