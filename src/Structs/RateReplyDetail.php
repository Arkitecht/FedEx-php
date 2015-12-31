<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateReplyDetail Structs
 * @subpackage Structs
 */
class RateReplyDetail extends AbstractStructBase
{
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceType;
    /**
     * The PackagingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackagingType;
    /**
     * The AppliedOptions
     * Meta informations extracted from the WSDL
     * - documentation: Shows the specific combination of service options combined with the service type that produced this committment in the set returned to the caller.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: These values control the optional features of service that may be combined in a commitment/rate comparision transaction.
     * @var string
     */
    public $AppliedOptions;
    /**
     * The AppliedSubOptions
     * Meta informations extracted from the WSDL
     * - documentation: Supporting detail for applied options identified in preceding field.
     * - minOccurs: 0
     * - documentation: Supporting detail for applied options identified in a rate quote.
     * @var \Arkitecht\FedEx\Structs\ServiceSubOptionDetail
     */
    public $AppliedSubOptions;
    /**
     * The DeliveryStation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryStation;
    /**
     * The DeliveryDayOfWeek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryDayOfWeek;
    /**
     * The DeliveryTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $DeliveryTimestamp;
    /**
     * The CommitDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Information about the transit time and delivery commitment date and time.
     * @var \Arkitecht\FedEx\Structs\CommitDetail
     */
    public $CommitDetails;
    /**
     * The DestinationAirportId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationAirportId;
    /**
     * The IneligibleForMoneyBackGuarantee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IneligibleForMoneyBackGuarantee;
    /**
     * The OriginServiceArea
     * Meta informations extracted from the WSDL
     * - documentation: Not populated by FAST service in Jan07.
     * - minOccurs: 0
     * @var string
     */
    public $OriginServiceArea;
    /**
     * The DestinationServiceArea
     * Meta informations extracted from the WSDL
     * - documentation: Not populated by FAST service in Jan07.
     * - minOccurs: 0
     * @var string
     */
    public $DestinationServiceArea;
    /**
     * The TransitTime
     * Meta informations extracted from the WSDL
     * - documentation: Not populated by FAST service in Jan07.
     * - minOccurs: 0
     * @var string
     */
    public $TransitTime;
    /**
     * The MaximumTransitTime
     * Meta informations extracted from the WSDL
     * - documentation: Maximum expected transit time
     * - minOccurs: 0
     * @var string
     */
    public $MaximumTransitTime;
    /**
     * The SignatureOption
     * Meta informations extracted from the WSDL
     * - documentation: Not populated by FAST service in Jan07. Actual signature option applied, to allow for cases in wihch the original value conflicted with other service features in the shipment.
     * - minOccurs: 0
     * @var string
     */
    public $SignatureOption;
    /**
     * The ActualRateType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The "PAYOR..." rates are expressed in the currency identified in the payor's rate table(s). The "RATED..." rates are expressed in the currency of the origin country. Former "...COUNTER..." values have become "...RETAIL..." values,
     * except for PAYOR_COUNTER and RATED_COUNTER, which have been removed.
     * @var string
     */
    public $ActualRateType;
    /**
     * The RatedShipmentDetails
     * Meta informations extracted from the WSDL
     * - documentation: Each element contains all rate data for a single rate type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: This class groups the shipment and package rating data for a specific rate type for use in a rating reply, which groups result data by rate type.
     * @var \Arkitecht\FedEx\Structs\RatedShipmentDetail
     */
    public $RatedShipmentDetails;
    /**
     * Constructor method for RateReplyDetail
     * @uses RateReplyDetail::setServiceType()
     * @uses RateReplyDetail::setPackagingType()
     * @uses RateReplyDetail::setAppliedOptions()
     * @uses RateReplyDetail::setAppliedSubOptions()
     * @uses RateReplyDetail::setDeliveryStation()
     * @uses RateReplyDetail::setDeliveryDayOfWeek()
     * @uses RateReplyDetail::setDeliveryTimestamp()
     * @uses RateReplyDetail::setCommitDetails()
     * @uses RateReplyDetail::setDestinationAirportId()
     * @uses RateReplyDetail::setIneligibleForMoneyBackGuarantee()
     * @uses RateReplyDetail::setOriginServiceArea()
     * @uses RateReplyDetail::setDestinationServiceArea()
     * @uses RateReplyDetail::setTransitTime()
     * @uses RateReplyDetail::setMaximumTransitTime()
     * @uses RateReplyDetail::setSignatureOption()
     * @uses RateReplyDetail::setActualRateType()
     * @uses RateReplyDetail::setRatedShipmentDetails()
     * @param string $serviceType
     * @param string $packagingType
     * @param string $appliedOptions
     * @param \Arkitecht\FedEx\Structs\ServiceSubOptionDetail $appliedSubOptions
     * @param string $deliveryStation
     * @param string $deliveryDayOfWeek
     * @param dateTime $deliveryTimestamp
     * @param \Arkitecht\FedEx\Structs\CommitDetail $commitDetails
     * @param string $destinationAirportId
     * @param boolean $ineligibleForMoneyBackGuarantee
     * @param string $originServiceArea
     * @param string $destinationServiceArea
     * @param string $transitTime
     * @param string $maximumTransitTime
     * @param string $signatureOption
     * @param string $actualRateType
     * @param \Arkitecht\FedEx\Structs\RatedShipmentDetail $ratedShipmentDetails
     */
    public function __construct($serviceType = null, $packagingType = null, $appliedOptions = null, \Arkitecht\FedEx\Structs\ServiceSubOptionDetail $appliedSubOptions = null, $deliveryStation = null, $deliveryDayOfWeek = null, $deliveryTimestamp = null, \Arkitecht\FedEx\Structs\CommitDetail $commitDetails = null, $destinationAirportId = null, $ineligibleForMoneyBackGuarantee = null, $originServiceArea = null, $destinationServiceArea = null, $transitTime = null, $maximumTransitTime = null, $signatureOption = null, $actualRateType = null, \Arkitecht\FedEx\Structs\RatedShipmentDetail $ratedShipmentDetails = null)
    {
        $this
            ->setServiceType($serviceType)
            ->setPackagingType($packagingType)
            ->setAppliedOptions($appliedOptions)
            ->setAppliedSubOptions($appliedSubOptions)
            ->setDeliveryStation($deliveryStation)
            ->setDeliveryDayOfWeek($deliveryDayOfWeek)
            ->setDeliveryTimestamp($deliveryTimestamp)
            ->setCommitDetails($commitDetails)
            ->setDestinationAirportId($destinationAirportId)
            ->setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee)
            ->setOriginServiceArea($originServiceArea)
            ->setDestinationServiceArea($destinationServiceArea)
            ->setTransitTime($transitTime)
            ->setMaximumTransitTime($maximumTransitTime)
            ->setSignatureOption($signatureOption)
            ->setActualRateType($actualRateType)
            ->setRatedShipmentDetails($ratedShipmentDetails);
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @uses \Arkitecht\FedEx\Enums\ServiceType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ServiceType::getValidValues()
     * @param string $serviceType
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
     */
    public function setServiceType($serviceType = null)
    {
        if (!\Arkitecht\FedEx\Enums\ServiceType::valueIsValid($serviceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $serviceType, implode(', ', \Arkitecht\FedEx\Enums\ServiceType::getValidValues())), __LINE__);
        }
        $this->ServiceType = $serviceType;
        return $this;
    }
    /**
     * Get PackagingType value
     * @return string|null
     */
    public function getPackagingType()
    {
        return $this->PackagingType;
    }
    /**
     * Set PackagingType value
     * @uses \Arkitecht\FedEx\Enums\PackagingType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\PackagingType::getValidValues()
     * @param string $packagingType
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
     */
    public function setPackagingType($packagingType = null)
    {
        if (!\Arkitecht\FedEx\Enums\PackagingType::valueIsValid($packagingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packagingType, implode(', ', \Arkitecht\FedEx\Enums\PackagingType::getValidValues())), __LINE__);
        }
        $this->PackagingType = $packagingType;
        return $this;
    }
    /**
     * Get AppliedOptions value
     * @return string|null
     */
    public function getAppliedOptions()
    {
        return $this->AppliedOptions;
    }
    /**
     * Set AppliedOptions value
     * @uses \Arkitecht\FedEx\Enums\ServiceOptionType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ServiceOptionType::getValidValues()
     * @param string $appliedOptions
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
     */
    public function setAppliedOptions($appliedOptions = null)
    {
        if (!\Arkitecht\FedEx\Enums\ServiceOptionType::valueIsValid($appliedOptions)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $appliedOptions, implode(', ', \Arkitecht\FedEx\Enums\ServiceOptionType::getValidValues())), __LINE__);
        }
        $this->AppliedOptions = $appliedOptions;
        return $this;
    }
    /**
     * Get AppliedSubOptions value
     * @return \Arkitecht\FedEx\Structs\ServiceSubOptionDetail|null
     */
    public function getAppliedSubOptions()
    {
        return $this->AppliedSubOptions;
    }
    /**
     * Set AppliedSubOptions value
     * @param \Arkitecht\FedEx\Structs\ServiceSubOptionDetail $appliedSubOptions
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
     */
    public function setAppliedSubOptions(\Arkitecht\FedEx\Structs\ServiceSubOptionDetail $appliedSubOptions = null)
    {
        $this->AppliedSubOptions = $appliedSubOptions;
        return $this;
    }
    /**
     * Get DeliveryStation value
     * @return string|null
     */
    public function getDeliveryStation()
    {
        return $this->DeliveryStation;
    }
    /**
     * Set DeliveryStation value
     * @param string $deliveryStation
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
     */
    public function setDeliveryStation($deliveryStation = null)
    {
        $this->DeliveryStation = $deliveryStation;
        return $this;
    }
    /**
     * Get DeliveryDayOfWeek value
     * @return string|null
     */
    public function getDeliveryDayOfWeek()
    {
        return $this->DeliveryDayOfWeek;
    }
    /**
     * Set DeliveryDayOfWeek value
     * @uses \Arkitecht\FedEx\Enums\DayOfWeekType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\DayOfWeekType::getValidValues()
     * @param string $deliveryDayOfWeek
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
     */
    public function setDeliveryDayOfWeek($deliveryDayOfWeek = null)
    {
        if (!\Arkitecht\FedEx\Enums\DayOfWeekType::valueIsValid($deliveryDayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryDayOfWeek, implode(', ', \Arkitecht\FedEx\Enums\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DeliveryDayOfWeek = $deliveryDayOfWeek;
        return $this;
    }
    /**
     * Get DeliveryTimestamp value
     * @return dateTime|null
     */
    public function getDeliveryTimestamp()
    {
        return $this->DeliveryTimestamp;
    }
    /**
     * Set DeliveryTimestamp value
     * @param dateTime $deliveryTimestamp
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
     */
    public function setDeliveryTimestamp($deliveryTimestamp = null)
    {
        $this->DeliveryTimestamp = $deliveryTimestamp;
        return $this;
    }
    /**
     * Get CommitDetails value
     * @return \Arkitecht\FedEx\Structs\CommitDetail|null
     */
    public function getCommitDetails()
    {
        return $this->CommitDetails;
    }
    /**
     * Set CommitDetails value
     * @param \Arkitecht\FedEx\Structs\CommitDetail $commitDetails
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
     */
    public function setCommitDetails(\Arkitecht\FedEx\Structs\CommitDetail $commitDetails = null)
    {
        $this->CommitDetails = $commitDetails;
        return $this;
    }
    /**
     * Get DestinationAirportId value
     * @return string|null
     */
    public function getDestinationAirportId()
    {
        return $this->DestinationAirportId;
    }
    /**
     * Set DestinationAirportId value
     * @param string $destinationAirportId
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
     */
    public function setDestinationAirportId($destinationAirportId = null)
    {
        $this->DestinationAirportId = $destinationAirportId;
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
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
     */
    public function setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee = null)
    {
        $this->IneligibleForMoneyBackGuarantee = $ineligibleForMoneyBackGuarantee;
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
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
     */
    public function setOriginServiceArea($originServiceArea = null)
    {
        $this->OriginServiceArea = $originServiceArea;
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
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
     */
    public function setDestinationServiceArea($destinationServiceArea = null)
    {
        $this->DestinationServiceArea = $destinationServiceArea;
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
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
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
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
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
     * Get SignatureOption value
     * @return string|null
     */
    public function getSignatureOption()
    {
        return $this->SignatureOption;
    }
    /**
     * Set SignatureOption value
     * @uses \Arkitecht\FedEx\Enums\SignatureOptionType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\SignatureOptionType::getValidValues()
     * @param string $signatureOption
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
     */
    public function setSignatureOption($signatureOption = null)
    {
        if (!\Arkitecht\FedEx\Enums\SignatureOptionType::valueIsValid($signatureOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $signatureOption, implode(', ', \Arkitecht\FedEx\Enums\SignatureOptionType::getValidValues())), __LINE__);
        }
        $this->SignatureOption = $signatureOption;
        return $this;
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
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
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
     * Get RatedShipmentDetails value
     * @return \Arkitecht\FedEx\Structs\RatedShipmentDetail|null
     */
    public function getRatedShipmentDetails()
    {
        return $this->RatedShipmentDetails;
    }
    /**
     * Set RatedShipmentDetails value
     * @param \Arkitecht\FedEx\Structs\RatedShipmentDetail $ratedShipmentDetails
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
     */
    public function setRatedShipmentDetails(\Arkitecht\FedEx\Structs\RatedShipmentDetail $ratedShipmentDetails = null)
    {
        $this->RatedShipmentDetails = $ratedShipmentDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail
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
