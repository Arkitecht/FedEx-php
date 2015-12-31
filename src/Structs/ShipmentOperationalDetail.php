<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentOperationalDetail Structs
 * @subpackage Structs
 */
class ShipmentOperationalDetail extends AbstractStructBase
{
    /**
     * The UrsaPrefixCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UrsaPrefixCode;
    /**
     * The UrsaSuffixCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UrsaSuffixCode;
    /**
     * The OriginLocationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginLocationId;
    /**
     * The OriginLocationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OriginLocationNumber;
    /**
     * The OriginServiceArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginServiceArea;
    /**
     * The DestinationLocationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationLocationId;
    /**
     * The DestinationLocationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DestinationLocationNumber;
    /**
     * The DestinationServiceArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationServiceArea;
    /**
     * The DestinationLocationStateOrProvinceCode
     * Meta informations extracted from the WSDL
     * - documentation: This is the state of the destination location ID, and is not necessarily the same as the postal state.
     * - minOccurs: 0
     * @var string
     */
    public $DestinationLocationStateOrProvinceCode;
    /**
     * The DeliveryDate
     * Meta informations extracted from the WSDL
     * - documentation: Expected/estimated date of delivery.
     * - minOccurs: 0
     * @var date
     */
    public $DeliveryDate;
    /**
     * The DeliveryDay
     * Meta informations extracted from the WSDL
     * - documentation: Expected/estimated day of week of delivery.
     * - minOccurs: 0
     * - documentation: Valid values for DayofWeekType
     * @var string
     */
    public $DeliveryDay;
    /**
     * The PublishedDeliveryTime
     * Meta informations extracted from the WSDL
     * - documentation: Delivery time, as published in Service Guide.
     * - minOccurs: 0
     * @var time
     */
    public $PublishedDeliveryTime;
    /**
     * The CommitDate
     * Meta informations extracted from the WSDL
     * - documentation: Committed date of delivery.
     * - minOccurs: 0
     * @var date
     */
    public $CommitDate;
    /**
     * The CommitDay
     * Meta informations extracted from the WSDL
     * - documentation: Committed day of week of delivery.
     * - minOccurs: 0
     * - documentation: Valid values for DayofWeekType
     * @var string
     */
    public $CommitDay;
    /**
     * The TransitTime
     * Meta informations extracted from the WSDL
     * - documentation: Standard transit time per origin, destination, and service.
     * - minOccurs: 0
     * - documentation: Identifies the set of valid shipment transit time values.
     * @var string
     */
    public $TransitTime;
    /**
     * The MaximumTransitTime
     * Meta informations extracted from the WSDL
     * - documentation: Maximum expected transit time
     * - minOccurs: 0
     * - documentation: Identifies the set of valid shipment transit time values.
     * @var string
     */
    public $MaximumTransitTime;
    /**
     * The CustomTransitTime
     * Meta informations extracted from the WSDL
     * - documentation: Transit time based on customer eligibility.
     * - minOccurs: 0
     * - documentation: Identifies the set of valid shipment transit time values.
     * @var string
     */
    public $CustomTransitTime;
    /**
     * The IneligibleForMoneyBackGuarantee
     * Meta informations extracted from the WSDL
     * - documentation: Indicates that this shipment is not eligible for money back guarantee.
     * - minOccurs: 0
     * @var boolean
     */
    public $IneligibleForMoneyBackGuarantee;
    /**
     * The DeliveryEligibilities
     * Meta informations extracted from the WSDL
     * - documentation: FedEx Ground delivery features for which this shipment may be eligible.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Represents features of FedEx Ground delivery for which the shipment is eligible.
     * @var string
     */
    public $DeliveryEligibilities;
    /**
     * The AstraPlannedServiceLevel
     * Meta informations extracted from the WSDL
     * - documentation: Text describing planned delivery.
     * - minOccurs: 0
     * @var string
     */
    public $AstraPlannedServiceLevel;
    /**
     * The AstraDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AstraDescription;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * The StateOrProvinceCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StateOrProvinceCode;
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CountryCode;
    /**
     * The AirportId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AirportId;
    /**
     * The ServiceCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceCode;
    /**
     * The PackagingCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackagingCode;
    /**
     * The Scac
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Scac;
    /**
     * Constructor method for ShipmentOperationalDetail
     * @uses ShipmentOperationalDetail::setUrsaPrefixCode()
     * @uses ShipmentOperationalDetail::setUrsaSuffixCode()
     * @uses ShipmentOperationalDetail::setOriginLocationId()
     * @uses ShipmentOperationalDetail::setOriginLocationNumber()
     * @uses ShipmentOperationalDetail::setOriginServiceArea()
     * @uses ShipmentOperationalDetail::setDestinationLocationId()
     * @uses ShipmentOperationalDetail::setDestinationLocationNumber()
     * @uses ShipmentOperationalDetail::setDestinationServiceArea()
     * @uses ShipmentOperationalDetail::setDestinationLocationStateOrProvinceCode()
     * @uses ShipmentOperationalDetail::setDeliveryDate()
     * @uses ShipmentOperationalDetail::setDeliveryDay()
     * @uses ShipmentOperationalDetail::setPublishedDeliveryTime()
     * @uses ShipmentOperationalDetail::setCommitDate()
     * @uses ShipmentOperationalDetail::setCommitDay()
     * @uses ShipmentOperationalDetail::setTransitTime()
     * @uses ShipmentOperationalDetail::setMaximumTransitTime()
     * @uses ShipmentOperationalDetail::setCustomTransitTime()
     * @uses ShipmentOperationalDetail::setIneligibleForMoneyBackGuarantee()
     * @uses ShipmentOperationalDetail::setDeliveryEligibilities()
     * @uses ShipmentOperationalDetail::setAstraPlannedServiceLevel()
     * @uses ShipmentOperationalDetail::setAstraDescription()
     * @uses ShipmentOperationalDetail::setPostalCode()
     * @uses ShipmentOperationalDetail::setStateOrProvinceCode()
     * @uses ShipmentOperationalDetail::setCountryCode()
     * @uses ShipmentOperationalDetail::setAirportId()
     * @uses ShipmentOperationalDetail::setServiceCode()
     * @uses ShipmentOperationalDetail::setPackagingCode()
     * @uses ShipmentOperationalDetail::setScac()
     * @param string $ursaPrefixCode
     * @param string $ursaSuffixCode
     * @param string $originLocationId
     * @param int $originLocationNumber
     * @param string $originServiceArea
     * @param string $destinationLocationId
     * @param int $destinationLocationNumber
     * @param string $destinationServiceArea
     * @param string $destinationLocationStateOrProvinceCode
     * @param date $deliveryDate
     * @param string $deliveryDay
     * @param time $publishedDeliveryTime
     * @param date $commitDate
     * @param string $commitDay
     * @param string $transitTime
     * @param string $maximumTransitTime
     * @param string $customTransitTime
     * @param boolean $ineligibleForMoneyBackGuarantee
     * @param string $deliveryEligibilities
     * @param string $astraPlannedServiceLevel
     * @param string $astraDescription
     * @param string $postalCode
     * @param string $stateOrProvinceCode
     * @param string $countryCode
     * @param string $airportId
     * @param string $serviceCode
     * @param string $packagingCode
     * @param string $scac
     */
    public function __construct($ursaPrefixCode = null, $ursaSuffixCode = null, $originLocationId = null, $originLocationNumber = null, $originServiceArea = null, $destinationLocationId = null, $destinationLocationNumber = null, $destinationServiceArea = null, $destinationLocationStateOrProvinceCode = null, $deliveryDate = null, $deliveryDay = null, time $publishedDeliveryTime = null, $commitDate = null, $commitDay = null, $transitTime = null, $maximumTransitTime = null, $customTransitTime = null, $ineligibleForMoneyBackGuarantee = null, $deliveryEligibilities = null, $astraPlannedServiceLevel = null, $astraDescription = null, $postalCode = null, $stateOrProvinceCode = null, $countryCode = null, $airportId = null, $serviceCode = null, $packagingCode = null, $scac = null)
    {
        $this
            ->setUrsaPrefixCode($ursaPrefixCode)
            ->setUrsaSuffixCode($ursaSuffixCode)
            ->setOriginLocationId($originLocationId)
            ->setOriginLocationNumber($originLocationNumber)
            ->setOriginServiceArea($originServiceArea)
            ->setDestinationLocationId($destinationLocationId)
            ->setDestinationLocationNumber($destinationLocationNumber)
            ->setDestinationServiceArea($destinationServiceArea)
            ->setDestinationLocationStateOrProvinceCode($destinationLocationStateOrProvinceCode)
            ->setDeliveryDate($deliveryDate)
            ->setDeliveryDay($deliveryDay)
            ->setPublishedDeliveryTime($publishedDeliveryTime)
            ->setCommitDate($commitDate)
            ->setCommitDay($commitDay)
            ->setTransitTime($transitTime)
            ->setMaximumTransitTime($maximumTransitTime)
            ->setCustomTransitTime($customTransitTime)
            ->setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee)
            ->setDeliveryEligibilities($deliveryEligibilities)
            ->setAstraPlannedServiceLevel($astraPlannedServiceLevel)
            ->setAstraDescription($astraDescription)
            ->setPostalCode($postalCode)
            ->setStateOrProvinceCode($stateOrProvinceCode)
            ->setCountryCode($countryCode)
            ->setAirportId($airportId)
            ->setServiceCode($serviceCode)
            ->setPackagingCode($packagingCode)
            ->setScac($scac);
    }
    /**
     * Get UrsaPrefixCode value
     * @return string|null
     */
    public function getUrsaPrefixCode()
    {
        return $this->UrsaPrefixCode;
    }
    /**
     * Set UrsaPrefixCode value
     * @param string $ursaPrefixCode
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setUrsaPrefixCode($ursaPrefixCode = null)
    {
        $this->UrsaPrefixCode = $ursaPrefixCode;
        return $this;
    }
    /**
     * Get UrsaSuffixCode value
     * @return string|null
     */
    public function getUrsaSuffixCode()
    {
        return $this->UrsaSuffixCode;
    }
    /**
     * Set UrsaSuffixCode value
     * @param string $ursaSuffixCode
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setUrsaSuffixCode($ursaSuffixCode = null)
    {
        $this->UrsaSuffixCode = $ursaSuffixCode;
        return $this;
    }
    /**
     * Get OriginLocationId value
     * @return string|null
     */
    public function getOriginLocationId()
    {
        return $this->OriginLocationId;
    }
    /**
     * Set OriginLocationId value
     * @param string $originLocationId
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setOriginLocationId($originLocationId = null)
    {
        $this->OriginLocationId = $originLocationId;
        return $this;
    }
    /**
     * Get OriginLocationNumber value
     * @return int|null
     */
    public function getOriginLocationNumber()
    {
        return $this->OriginLocationNumber;
    }
    /**
     * Set OriginLocationNumber value
     * @param int $originLocationNumber
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setOriginLocationNumber($originLocationNumber = null)
    {
        $this->OriginLocationNumber = $originLocationNumber;
        return $this;
    }
    /**
     * Get OriginServiceArea value
     * @return string|null
     */
    public function getOriginServiceArea()
    {
        return $this->OriginServiceArea;
    }
    /**
     * Set OriginServiceArea value
     * @param string $originServiceArea
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setOriginServiceArea($originServiceArea = null)
    {
        $this->OriginServiceArea = $originServiceArea;
        return $this;
    }
    /**
     * Get DestinationLocationId value
     * @return string|null
     */
    public function getDestinationLocationId()
    {
        return $this->DestinationLocationId;
    }
    /**
     * Set DestinationLocationId value
     * @param string $destinationLocationId
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setDestinationLocationId($destinationLocationId = null)
    {
        $this->DestinationLocationId = $destinationLocationId;
        return $this;
    }
    /**
     * Get DestinationLocationNumber value
     * @return int|null
     */
    public function getDestinationLocationNumber()
    {
        return $this->DestinationLocationNumber;
    }
    /**
     * Set DestinationLocationNumber value
     * @param int $destinationLocationNumber
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setDestinationLocationNumber($destinationLocationNumber = null)
    {
        $this->DestinationLocationNumber = $destinationLocationNumber;
        return $this;
    }
    /**
     * Get DestinationServiceArea value
     * @return string|null
     */
    public function getDestinationServiceArea()
    {
        return $this->DestinationServiceArea;
    }
    /**
     * Set DestinationServiceArea value
     * @param string $destinationServiceArea
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setDestinationServiceArea($destinationServiceArea = null)
    {
        $this->DestinationServiceArea = $destinationServiceArea;
        return $this;
    }
    /**
     * Get DestinationLocationStateOrProvinceCode value
     * @return string|null
     */
    public function getDestinationLocationStateOrProvinceCode()
    {
        return $this->DestinationLocationStateOrProvinceCode;
    }
    /**
     * Set DestinationLocationStateOrProvinceCode value
     * @param string $destinationLocationStateOrProvinceCode
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setDestinationLocationStateOrProvinceCode($destinationLocationStateOrProvinceCode = null)
    {
        $this->DestinationLocationStateOrProvinceCode = $destinationLocationStateOrProvinceCode;
        return $this;
    }
    /**
     * Get DeliveryDate value
     * @return date|null
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    /**
     * Set DeliveryDate value
     * @param date $deliveryDate
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Get DeliveryDay value
     * @return string|null
     */
    public function getDeliveryDay()
    {
        return $this->DeliveryDay;
    }
    /**
     * Set DeliveryDay value
     * @uses \Arkitecht\FedEx\Enums\DayOfWeekType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\DayOfWeekType::getValidValues()
     * @param string $deliveryDay
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setDeliveryDay($deliveryDay = null)
    {
        if (!\Arkitecht\FedEx\Enums\DayOfWeekType::valueIsValid($deliveryDay)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryDay, implode(', ', \Arkitecht\FedEx\Enums\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DeliveryDay = $deliveryDay;
        return $this;
    }
    /**
     * Get PublishedDeliveryTime value
     * @return time|null
     */
    public function getPublishedDeliveryTime()
    {
        return $this->PublishedDeliveryTime;
    }
    /**
     * Set PublishedDeliveryTime value
     * @param time $publishedDeliveryTime
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setPublishedDeliveryTime(time $publishedDeliveryTime = null)
    {
        $this->PublishedDeliveryTime = $publishedDeliveryTime;
        return $this;
    }
    /**
     * Get CommitDate value
     * @return date|null
     */
    public function getCommitDate()
    {
        return $this->CommitDate;
    }
    /**
     * Set CommitDate value
     * @param date $commitDate
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setCommitDate($commitDate = null)
    {
        $this->CommitDate = $commitDate;
        return $this;
    }
    /**
     * Get CommitDay value
     * @return string|null
     */
    public function getCommitDay()
    {
        return $this->CommitDay;
    }
    /**
     * Set CommitDay value
     * @uses \Arkitecht\FedEx\Enums\DayOfWeekType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\DayOfWeekType::getValidValues()
     * @param string $commitDay
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setCommitDay($commitDay = null)
    {
        if (!\Arkitecht\FedEx\Enums\DayOfWeekType::valueIsValid($commitDay)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $commitDay, implode(', ', \Arkitecht\FedEx\Enums\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->CommitDay = $commitDay;
        return $this;
    }
    /**
     * Get TransitTime value
     * @return string|null
     */
    public function getTransitTime()
    {
        return $this->TransitTime;
    }
    /**
     * Set TransitTime value
     * @uses \Arkitecht\FedEx\Enums\TransitTimeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\TransitTimeType::getValidValues()
     * @param string $transitTime
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setTransitTime($transitTime = null)
    {
        if (!\Arkitecht\FedEx\Enums\TransitTimeType::valueIsValid($transitTime)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $transitTime, implode(', ', \Arkitecht\FedEx\Enums\TransitTimeType::getValidValues())), __LINE__);
        }
        $this->TransitTime = $transitTime;
        return $this;
    }
    /**
     * Get MaximumTransitTime value
     * @return string|null
     */
    public function getMaximumTransitTime()
    {
        return $this->MaximumTransitTime;
    }
    /**
     * Set MaximumTransitTime value
     * @uses \Arkitecht\FedEx\Enums\TransitTimeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\TransitTimeType::getValidValues()
     * @param string $maximumTransitTime
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setMaximumTransitTime($maximumTransitTime = null)
    {
        if (!\Arkitecht\FedEx\Enums\TransitTimeType::valueIsValid($maximumTransitTime)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $maximumTransitTime, implode(', ', \Arkitecht\FedEx\Enums\TransitTimeType::getValidValues())), __LINE__);
        }
        $this->MaximumTransitTime = $maximumTransitTime;
        return $this;
    }
    /**
     * Get CustomTransitTime value
     * @return string|null
     */
    public function getCustomTransitTime()
    {
        return $this->CustomTransitTime;
    }
    /**
     * Set CustomTransitTime value
     * @uses \Arkitecht\FedEx\Enums\TransitTimeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\TransitTimeType::getValidValues()
     * @param string $customTransitTime
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setCustomTransitTime($customTransitTime = null)
    {
        if (!\Arkitecht\FedEx\Enums\TransitTimeType::valueIsValid($customTransitTime)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $customTransitTime, implode(', ', \Arkitecht\FedEx\Enums\TransitTimeType::getValidValues())), __LINE__);
        }
        $this->CustomTransitTime = $customTransitTime;
        return $this;
    }
    /**
     * Get IneligibleForMoneyBackGuarantee value
     * @return boolean|null
     */
    public function getIneligibleForMoneyBackGuarantee()
    {
        return $this->IneligibleForMoneyBackGuarantee;
    }
    /**
     * Set IneligibleForMoneyBackGuarantee value
     * @param boolean $ineligibleForMoneyBackGuarantee
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee = null)
    {
        $this->IneligibleForMoneyBackGuarantee = $ineligibleForMoneyBackGuarantee;
        return $this;
    }
    /**
     * Get DeliveryEligibilities value
     * @return string|null
     */
    public function getDeliveryEligibilities()
    {
        return $this->DeliveryEligibilities;
    }
    /**
     * Set DeliveryEligibilities value
     * @uses \Arkitecht\FedEx\Enums\GroundDeliveryEligibilityType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\GroundDeliveryEligibilityType::getValidValues()
     * @param string $deliveryEligibilities
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setDeliveryEligibilities($deliveryEligibilities = null)
    {
        if (!\Arkitecht\FedEx\Enums\GroundDeliveryEligibilityType::valueIsValid($deliveryEligibilities)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryEligibilities, implode(', ', \Arkitecht\FedEx\Enums\GroundDeliveryEligibilityType::getValidValues())), __LINE__);
        }
        $this->DeliveryEligibilities = $deliveryEligibilities;
        return $this;
    }
    /**
     * Get AstraPlannedServiceLevel value
     * @return string|null
     */
    public function getAstraPlannedServiceLevel()
    {
        return $this->AstraPlannedServiceLevel;
    }
    /**
     * Set AstraPlannedServiceLevel value
     * @param string $astraPlannedServiceLevel
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setAstraPlannedServiceLevel($astraPlannedServiceLevel = null)
    {
        $this->AstraPlannedServiceLevel = $astraPlannedServiceLevel;
        return $this;
    }
    /**
     * Get AstraDescription value
     * @return string|null
     */
    public function getAstraDescription()
    {
        return $this->AstraDescription;
    }
    /**
     * Set AstraDescription value
     * @param string $astraDescription
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setAstraDescription($astraDescription = null)
    {
        $this->AstraDescription = $astraDescription;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setPostalCode($postalCode = null)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get StateOrProvinceCode value
     * @return string|null
     */
    public function getStateOrProvinceCode()
    {
        return $this->StateOrProvinceCode;
    }
    /**
     * Set StateOrProvinceCode value
     * @param string $stateOrProvinceCode
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setStateOrProvinceCode($stateOrProvinceCode = null)
    {
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setCountryCode($countryCode = null)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get AirportId value
     * @return string|null
     */
    public function getAirportId()
    {
        return $this->AirportId;
    }
    /**
     * Set AirportId value
     * @param string $airportId
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setAirportId($airportId = null)
    {
        $this->AirportId = $airportId;
        return $this;
    }
    /**
     * Get ServiceCode value
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->ServiceCode;
    }
    /**
     * Set ServiceCode value
     * @param string $serviceCode
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setServiceCode($serviceCode = null)
    {
        $this->ServiceCode = $serviceCode;
        return $this;
    }
    /**
     * Get PackagingCode value
     * @return string|null
     */
    public function getPackagingCode()
    {
        return $this->PackagingCode;
    }
    /**
     * Set PackagingCode value
     * @param string $packagingCode
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setPackagingCode($packagingCode = null)
    {
        $this->PackagingCode = $packagingCode;
        return $this;
    }
    /**
     * Get Scac value
     * @return string|null
     */
    public function getScac()
    {
        return $this->Scac;
    }
    /**
     * Set Scac value
     * @param string $scac
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public function setScac($scac = null)
    {
        $this->Scac = $scac;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
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
