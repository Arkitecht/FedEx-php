<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatedShipmentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: This class groups the shipment and package rating data for a specific rate type for use in a rating reply, which groups result data by rate type.
 * @subpackage Structs
 */
class RatedShipmentDetail extends AbstractStructBase
{
    /**
     * The EffectiveNetDiscount
     * Meta informations extracted from the WSDL
     * - documentation: The difference between "list" and "account" total net charge.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $EffectiveNetDiscount;
    /**
     * The AdjustedCodCollectionAmount
     * Meta informations extracted from the WSDL
     * - documentation: Express COD is shipment level.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $AdjustedCodCollectionAmount;
    /**
     * The ShipmentRateDetail
     * Meta informations extracted from the WSDL
     * - documentation: The shipment-level totals for this rate type.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ShipmentRateDetail
     */
    public $ShipmentRateDetail;
    /**
     * The RatedPackages
     * Meta informations extracted from the WSDL
     * - documentation: The package-level data for this rate type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\RatedPackageDetail
     */
    public $RatedPackages;
    /**
     * Constructor method for RatedShipmentDetail
     * @uses RatedShipmentDetail::setEffectiveNetDiscount()
     * @uses RatedShipmentDetail::setAdjustedCodCollectionAmount()
     * @uses RatedShipmentDetail::setShipmentRateDetail()
     * @uses RatedShipmentDetail::setRatedPackages()
     * @param \Arkitecht\FedEx\Structs\Money $effectiveNetDiscount
     * @param \Arkitecht\FedEx\Structs\Money $adjustedCodCollectionAmount
     * @param \Arkitecht\FedEx\Structs\ShipmentRateDetail $shipmentRateDetail
     * @param \Arkitecht\FedEx\Structs\RatedPackageDetail $ratedPackages
     */
    public function __construct(\Arkitecht\FedEx\Structs\Money $effectiveNetDiscount = null, \Arkitecht\FedEx\Structs\Money $adjustedCodCollectionAmount = null, \Arkitecht\FedEx\Structs\ShipmentRateDetail $shipmentRateDetail = null, \Arkitecht\FedEx\Structs\RatedPackageDetail $ratedPackages = null)
    {
        $this
            ->setEffectiveNetDiscount($effectiveNetDiscount)
            ->setAdjustedCodCollectionAmount($adjustedCodCollectionAmount)
            ->setShipmentRateDetail($shipmentRateDetail)
            ->setRatedPackages($ratedPackages);
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
     * @return \Arkitecht\FedEx\Structs\RatedShipmentDetail
     */
    public function setEffectiveNetDiscount(\Arkitecht\FedEx\Structs\Money $effectiveNetDiscount = null)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    /**
     * Get AdjustedCodCollectionAmount value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getAdjustedCodCollectionAmount()
    {
        return $this->AdjustedCodCollectionAmount;
    }
    /**
     * Set AdjustedCodCollectionAmount value
     * @param \Arkitecht\FedEx\Structs\Money $adjustedCodCollectionAmount
     * @return \Arkitecht\FedEx\Structs\RatedShipmentDetail
     */
    public function setAdjustedCodCollectionAmount(\Arkitecht\FedEx\Structs\Money $adjustedCodCollectionAmount = null)
    {
        $this->AdjustedCodCollectionAmount = $adjustedCodCollectionAmount;
        return $this;
    }
    /**
     * Get ShipmentRateDetail value
     * @return \Arkitecht\FedEx\Structs\ShipmentRateDetail|null
     */
    public function getShipmentRateDetail()
    {
        return $this->ShipmentRateDetail;
    }
    /**
     * Set ShipmentRateDetail value
     * @param \Arkitecht\FedEx\Structs\ShipmentRateDetail $shipmentRateDetail
     * @return \Arkitecht\FedEx\Structs\RatedShipmentDetail
     */
    public function setShipmentRateDetail(\Arkitecht\FedEx\Structs\ShipmentRateDetail $shipmentRateDetail = null)
    {
        $this->ShipmentRateDetail = $shipmentRateDetail;
        return $this;
    }
    /**
     * Get RatedPackages value
     * @return \Arkitecht\FedEx\Structs\RatedPackageDetail|null
     */
    public function getRatedPackages()
    {
        return $this->RatedPackages;
    }
    /**
     * Set RatedPackages value
     * @param \Arkitecht\FedEx\Structs\RatedPackageDetail $ratedPackages
     * @return \Arkitecht\FedEx\Structs\RatedShipmentDetail
     */
    public function setRatedPackages(\Arkitecht\FedEx\Structs\RatedPackageDetail $ratedPackages = null)
    {
        $this->RatedPackages = $ratedPackages;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\RatedShipmentDetail
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
