<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatedPackageDetail Structs
 * @subpackage Structs
 */
class RatedPackageDetail extends AbstractStructBase
{
    /**
     * The TrackingIds
     * Meta informations extracted from the WSDL
     * - documentation: Echoed from the corresponding package in the rate request (if provided).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackingId
     */
    public $TrackingIds;
    /**
     * The GroupNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $GroupNumber;
    /**
     * The EffectiveNetDiscount
     * Meta informations extracted from the WSDL
     * - documentation: The difference between "list" and "account" net charge.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $EffectiveNetDiscount;
    /**
     * The AdjustedCodCollectionAmount
     * Meta informations extracted from the WSDL
     * - documentation: Ground COD is shipment level.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $AdjustedCodCollectionAmount;
    /**
     * The OversizeClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OversizeClass;
    /**
     * The PackageRateDetail
     * Meta informations extracted from the WSDL
     * - documentation: Rate data that are tied to a specific package and rate type combination.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public $PackageRateDetail;
    /**
     * Constructor method for RatedPackageDetail
     * @uses RatedPackageDetail::setTrackingIds()
     * @uses RatedPackageDetail::setGroupNumber()
     * @uses RatedPackageDetail::setEffectiveNetDiscount()
     * @uses RatedPackageDetail::setAdjustedCodCollectionAmount()
     * @uses RatedPackageDetail::setOversizeClass()
     * @uses RatedPackageDetail::setPackageRateDetail()
     * @param \Arkitecht\FedEx\Structs\TrackingId $trackingIds
     * @param nonNegativeInteger $groupNumber
     * @param \Arkitecht\FedEx\Structs\Money $effectiveNetDiscount
     * @param \Arkitecht\FedEx\Structs\Money $adjustedCodCollectionAmount
     * @param string $oversizeClass
     * @param \Arkitecht\FedEx\Structs\PackageRateDetail $packageRateDetail
     */
    public function __construct(\Arkitecht\FedEx\Structs\TrackingId $trackingIds = null, $groupNumber = null, \Arkitecht\FedEx\Structs\Money $effectiveNetDiscount = null, \Arkitecht\FedEx\Structs\Money $adjustedCodCollectionAmount = null, $oversizeClass = null, \Arkitecht\FedEx\Structs\PackageRateDetail $packageRateDetail = null)
    {
        $this
            ->setTrackingIds($trackingIds)
            ->setGroupNumber($groupNumber)
            ->setEffectiveNetDiscount($effectiveNetDiscount)
            ->setAdjustedCodCollectionAmount($adjustedCodCollectionAmount)
            ->setOversizeClass($oversizeClass)
            ->setPackageRateDetail($packageRateDetail);
    }
    /**
     * Get TrackingIds value
     * @return \Arkitecht\FedEx\Structs\TrackingId|null
     */
    public function getTrackingIds()
    {
        return $this->TrackingIds;
    }
    /**
     * Set TrackingIds value
     * @param \Arkitecht\FedEx\Structs\TrackingId $trackingIds
     * @return \Arkitecht\FedEx\Structs\RatedPackageDetail
     */
    public function setTrackingIds(\Arkitecht\FedEx\Structs\TrackingId $trackingIds = null)
    {
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    /**
     * Get GroupNumber value
     * @return nonNegativeInteger|null
     */
    public function getGroupNumber()
    {
        return $this->GroupNumber;
    }
    /**
     * Set GroupNumber value
     * @param nonNegativeInteger $groupNumber
     * @return \Arkitecht\FedEx\Structs\RatedPackageDetail
     */
    public function setGroupNumber($groupNumber = null)
    {
        $this->GroupNumber = $groupNumber;
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
     * @return \Arkitecht\FedEx\Structs\RatedPackageDetail
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
     * @return \Arkitecht\FedEx\Structs\RatedPackageDetail
     */
    public function setAdjustedCodCollectionAmount(\Arkitecht\FedEx\Structs\Money $adjustedCodCollectionAmount = null)
    {
        $this->AdjustedCodCollectionAmount = $adjustedCodCollectionAmount;
        return $this;
    }
    /**
     * Get OversizeClass value
     * @return string|null
     */
    public function getOversizeClass()
    {
        return $this->OversizeClass;
    }
    /**
     * Set OversizeClass value
     * @uses \Arkitecht\FedEx\Enums\OversizeClassType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\OversizeClassType::getValidValues()
     * @param string $oversizeClass
     * @return \Arkitecht\FedEx\Structs\RatedPackageDetail
     */
    public function setOversizeClass($oversizeClass = null)
    {
        if (!\Arkitecht\FedEx\Enums\OversizeClassType::valueIsValid($oversizeClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $oversizeClass, implode(', ', \Arkitecht\FedEx\Enums\OversizeClassType::getValidValues())), __LINE__);
        }
        $this->OversizeClass = $oversizeClass;
        return $this;
    }
    /**
     * Get PackageRateDetail value
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail|null
     */
    public function getPackageRateDetail()
    {
        return $this->PackageRateDetail;
    }
    /**
     * Set PackageRateDetail value
     * @param \Arkitecht\FedEx\Structs\PackageRateDetail $packageRateDetail
     * @return \Arkitecht\FedEx\Structs\RatedPackageDetail
     */
    public function setPackageRateDetail(\Arkitecht\FedEx\Structs\PackageRateDetail $packageRateDetail = null)
    {
        $this->PackageRateDetail = $packageRateDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\RatedPackageDetail
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
