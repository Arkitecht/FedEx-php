<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommitDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Information about the transit time and delivery commitment date and time.
 * @subpackage Structs
 */
class CommitDetail extends AbstractStructBase
{
    /**
     * The CommodityName
     * Meta informations extracted from the WSDL
     * - documentation: The Commodity applicable to this commitment.
     * - minOccurs: 0
     * @var string
     */
    public $CommodityName;
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - documentation: The FedEx service type applicable to this commitment.
     * - minOccurs: 0
     * @var string
     */
    public $ServiceType;
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
     * The DerivedShipmentSignatureOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\SignatureOptionDetail
     */
    public $DerivedShipmentSignatureOption;
    /**
     * The DerivedPackageSignatureOptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\SignatureOptionDetail
     */
    public $DerivedPackageSignatureOptions;
    /**
     * The CommitTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: THe delivery commitment date/time. Express Only.
     * - minOccurs: 0
     * @var dateTime
     */
    public $CommitTimestamp;
    /**
     * The DayOfWeek
     * Meta informations extracted from the WSDL
     * - documentation: The delivery commitment day of the week.
     * - minOccurs: 0
     * @var string
     */
    public $DayOfWeek;
    /**
     * The TransitTime
     * Meta informations extracted from the WSDL
     * - documentation: The number of transit days; applies to Ground and LTL Freight; indicates minimum transit time for SmartPost.
     * - minOccurs: 0
     * @var string
     */
    public $TransitTime;
    /**
     * The MaximumTransitTime
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of transit days, for SmartPost shipments.
     * - minOccurs: 0
     * @var string
     */
    public $MaximumTransitTime;
    /**
     * The DestinationServiceArea
     * Meta informations extracted from the WSDL
     * - documentation: The service area code for the destination of this shipment. Express only.
     * - minOccurs: 0
     * @var string
     */
    public $DestinationServiceArea;
    /**
     * The BrokerAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address of the broker to be used for this shipment.
     * - minOccurs: 0
     * - documentation: Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within
     * the US).
     * @var \Arkitecht\FedEx\Structs\Address
     */
    public $BrokerAddress;
    /**
     * The BrokerLocationId
     * Meta informations extracted from the WSDL
     * - documentation: The FedEx location identifier for the broker.
     * - minOccurs: 0
     * @var string
     */
    public $BrokerLocationId;
    /**
     * The BrokerCommitTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: The delivery commitment date/time the shipment will arrive at the border.
     * - minOccurs: 0
     * @var dateTime
     */
    public $BrokerCommitTimestamp;
    /**
     * The BrokerCommitDayOfWeek
     * Meta informations extracted from the WSDL
     * - documentation: The delivery commitment day of the week the shipment will arrive at the border.
     * - minOccurs: 0
     * @var string
     */
    public $BrokerCommitDayOfWeek;
    /**
     * The BrokerToDestinationDays
     * Meta informations extracted from the WSDL
     * - documentation: The number of days it will take for the shipment to make it from broker to destination
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $BrokerToDestinationDays;
    /**
     * The ProofOfDeliveryDate
     * Meta informations extracted from the WSDL
     * - documentation: The delivery commitment date for shipment served by GSP (Global Service Provider)
     * - minOccurs: 0
     * @var date
     */
    public $ProofOfDeliveryDate;
    /**
     * The ProofOfDeliveryDayOfWeek
     * Meta informations extracted from the WSDL
     * - documentation: The delivery commitment day of the week for the shipment served by GSP (Global Service Provider)
     * - minOccurs: 0
     * @var string
     */
    public $ProofOfDeliveryDayOfWeek;
    /**
     * The CommitMessages
     * Meta informations extracted from the WSDL
     * - documentation: Messages concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be messages providing information about why a commitment could not be returned or a successful message such as
     * "REQUEST COMPLETED"
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: The descriptive data regarding the result of the submitted transaction.
     * @var \Arkitecht\FedEx\Structs\Notification
     */
    public $CommitMessages;
    /**
     * The DeliveryMessages
     * Meta informations extracted from the WSDL
     * - documentation: Messages concerning the delivery commitment on an International commit quote such as "0:00 A.M. IF NO CUSTOMS DELAY"
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryMessages;
    /**
     * The DelayDetails
     * Meta informations extracted from the WSDL
     * - documentation: Information about why a shipment delivery is delayed and at what level (country/service etc.).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Information about why a shipment delivery is delayed and at what level( country/service etc.).
     * @var \Arkitecht\FedEx\Structs\DelayDetail
     */
    public $DelayDetails;
    /**
     * The DocumentContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentContent;
    /**
     * The RequiredDocuments
     * Meta informations extracted from the WSDL
     * - documentation: Required documentation for this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $RequiredDocuments;
    /**
     * The FreightCommitDetail
     * Meta informations extracted from the WSDL
     * - documentation: Freight origin and destination city center information and total distance between origin and destination city centers.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\FreightCommitDetail
     */
    public $FreightCommitDetail;
    /**
     * Constructor method for CommitDetail
     * @uses CommitDetail::setCommodityName()
     * @uses CommitDetail::setServiceType()
     * @uses CommitDetail::setAppliedOptions()
     * @uses CommitDetail::setAppliedSubOptions()
     * @uses CommitDetail::setDerivedShipmentSignatureOption()
     * @uses CommitDetail::setDerivedPackageSignatureOptions()
     * @uses CommitDetail::setCommitTimestamp()
     * @uses CommitDetail::setDayOfWeek()
     * @uses CommitDetail::setTransitTime()
     * @uses CommitDetail::setMaximumTransitTime()
     * @uses CommitDetail::setDestinationServiceArea()
     * @uses CommitDetail::setBrokerAddress()
     * @uses CommitDetail::setBrokerLocationId()
     * @uses CommitDetail::setBrokerCommitTimestamp()
     * @uses CommitDetail::setBrokerCommitDayOfWeek()
     * @uses CommitDetail::setBrokerToDestinationDays()
     * @uses CommitDetail::setProofOfDeliveryDate()
     * @uses CommitDetail::setProofOfDeliveryDayOfWeek()
     * @uses CommitDetail::setCommitMessages()
     * @uses CommitDetail::setDeliveryMessages()
     * @uses CommitDetail::setDelayDetails()
     * @uses CommitDetail::setDocumentContent()
     * @uses CommitDetail::setRequiredDocuments()
     * @uses CommitDetail::setFreightCommitDetail()
     * @param string $commodityName
     * @param string $serviceType
     * @param string $appliedOptions
     * @param \Arkitecht\FedEx\Structs\ServiceSubOptionDetail $appliedSubOptions
     * @param \Arkitecht\FedEx\Structs\SignatureOptionDetail
     * $derivedShipmentSignatureOption
     * @param \Arkitecht\FedEx\Structs\SignatureOptionDetail
     * $derivedPackageSignatureOptions
     * @param dateTime $commitTimestamp
     * @param string $dayOfWeek
     * @param string $transitTime
     * @param string $maximumTransitTime
     * @param string $destinationServiceArea
     * @param \Arkitecht\FedEx\Structs\Address $brokerAddress
     * @param string $brokerLocationId
     * @param dateTime $brokerCommitTimestamp
     * @param string $brokerCommitDayOfWeek
     * @param nonNegativeInteger $brokerToDestinationDays
     * @param date $proofOfDeliveryDate
     * @param string $proofOfDeliveryDayOfWeek
     * @param \Arkitecht\FedEx\Structs\Notification $commitMessages
     * @param string $deliveryMessages
     * @param \Arkitecht\FedEx\Structs\DelayDetail $delayDetails
     * @param string $documentContent
     * @param string $requiredDocuments
     * @param \Arkitecht\FedEx\Structs\FreightCommitDetail $freightCommitDetail
     */
    public function __construct($commodityName = null, $serviceType = null, $appliedOptions = null, \Arkitecht\FedEx\Structs\ServiceSubOptionDetail $appliedSubOptions = null, \Arkitecht\FedEx\Structs\SignatureOptionDetail $derivedShipmentSignatureOption = null, \Arkitecht\FedEx\Structs\SignatureOptionDetail $derivedPackageSignatureOptions = null, $commitTimestamp = null, $dayOfWeek = null, $transitTime = null, $maximumTransitTime = null, $destinationServiceArea = null, \Arkitecht\FedEx\Structs\Address $brokerAddress = null, $brokerLocationId = null, $brokerCommitTimestamp = null, $brokerCommitDayOfWeek = null, $brokerToDestinationDays = null, $proofOfDeliveryDate = null, $proofOfDeliveryDayOfWeek = null, \Arkitecht\FedEx\Structs\Notification $commitMessages = null, $deliveryMessages = null, \Arkitecht\FedEx\Structs\DelayDetail $delayDetails = null, $documentContent = null, $requiredDocuments = null, \Arkitecht\FedEx\Structs\FreightCommitDetail $freightCommitDetail = null)
    {
        $this
            ->setCommodityName($commodityName)
            ->setServiceType($serviceType)
            ->setAppliedOptions($appliedOptions)
            ->setAppliedSubOptions($appliedSubOptions)
            ->setDerivedShipmentSignatureOption($derivedShipmentSignatureOption)
            ->setDerivedPackageSignatureOptions($derivedPackageSignatureOptions)
            ->setCommitTimestamp($commitTimestamp)
            ->setDayOfWeek($dayOfWeek)
            ->setTransitTime($transitTime)
            ->setMaximumTransitTime($maximumTransitTime)
            ->setDestinationServiceArea($destinationServiceArea)
            ->setBrokerAddress($brokerAddress)
            ->setBrokerLocationId($brokerLocationId)
            ->setBrokerCommitTimestamp($brokerCommitTimestamp)
            ->setBrokerCommitDayOfWeek($brokerCommitDayOfWeek)
            ->setBrokerToDestinationDays($brokerToDestinationDays)
            ->setProofOfDeliveryDate($proofOfDeliveryDate)
            ->setProofOfDeliveryDayOfWeek($proofOfDeliveryDayOfWeek)
            ->setCommitMessages($commitMessages)
            ->setDeliveryMessages($deliveryMessages)
            ->setDelayDetails($delayDetails)
            ->setDocumentContent($documentContent)
            ->setRequiredDocuments($requiredDocuments)
            ->setFreightCommitDetail($freightCommitDetail);
    }
    /**
     * Get CommodityName value
     * @return string|null
     */
    public function getCommodityName()
    {
        return $this->CommodityName;
    }
    /**
     * Set CommodityName value
     * @param string $commodityName
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setCommodityName($commodityName = null)
    {
        $this->CommodityName = $commodityName;
        return $this;
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
     * @return \Arkitecht\FedEx\Structs\CommitDetail
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
     * @return \Arkitecht\FedEx\Structs\CommitDetail
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
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setAppliedSubOptions(\Arkitecht\FedEx\Structs\ServiceSubOptionDetail $appliedSubOptions = null)
    {
        $this->AppliedSubOptions = $appliedSubOptions;
        return $this;
    }
    /**
     * Get DerivedShipmentSignatureOption value
     * @return \Arkitecht\FedEx\Structs\SignatureOptionDetail|null
     */
    public function getDerivedShipmentSignatureOption()
    {
        return $this->DerivedShipmentSignatureOption;
    }
    /**
     * Set DerivedShipmentSignatureOption value
     * @param \Arkitecht\FedEx\Structs\SignatureOptionDetail
     * $derivedShipmentSignatureOption
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setDerivedShipmentSignatureOption(\Arkitecht\FedEx\Structs\SignatureOptionDetail $derivedShipmentSignatureOption = null)
    {
        $this->DerivedShipmentSignatureOption = $derivedShipmentSignatureOption;
        return $this;
    }
    /**
     * Get DerivedPackageSignatureOptions value
     * @return \Arkitecht\FedEx\Structs\SignatureOptionDetail|null
     */
    public function getDerivedPackageSignatureOptions()
    {
        return $this->DerivedPackageSignatureOptions;
    }
    /**
     * Set DerivedPackageSignatureOptions value
     * @param \Arkitecht\FedEx\Structs\SignatureOptionDetail
     * $derivedPackageSignatureOptions
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setDerivedPackageSignatureOptions(\Arkitecht\FedEx\Structs\SignatureOptionDetail $derivedPackageSignatureOptions = null)
    {
        $this->DerivedPackageSignatureOptions = $derivedPackageSignatureOptions;
        return $this;
    }
    /**
     * Get CommitTimestamp value
     * @return dateTime|null
     */
    public function getCommitTimestamp()
    {
        return $this->CommitTimestamp;
    }
    /**
     * Set CommitTimestamp value
     * @param dateTime $commitTimestamp
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setCommitTimestamp($commitTimestamp = null)
    {
        $this->CommitTimestamp = $commitTimestamp;
        return $this;
    }
    /**
     * Get DayOfWeek value
     * @return string|null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @uses \Arkitecht\FedEx\Enums\DayOfWeekType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\DayOfWeekType::getValidValues()
     * @param string $dayOfWeek
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        if (!\Arkitecht\FedEx\Enums\DayOfWeekType::valueIsValid($dayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dayOfWeek, implode(', ', \Arkitecht\FedEx\Enums\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DayOfWeek = $dayOfWeek;
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
     * @return \Arkitecht\FedEx\Structs\CommitDetail
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
     * @return \Arkitecht\FedEx\Structs\CommitDetail
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
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setDestinationServiceArea($destinationServiceArea = null)
    {
        $this->DestinationServiceArea = $destinationServiceArea;
        return $this;
    }
    /**
     * Get BrokerAddress value
     * @return \Arkitecht\FedEx\Structs\Address|null
     */
    public function getBrokerAddress()
    {
        return $this->BrokerAddress;
    }
    /**
     * Set BrokerAddress value
     * @param \Arkitecht\FedEx\Structs\Address $brokerAddress
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setBrokerAddress(\Arkitecht\FedEx\Structs\Address $brokerAddress = null)
    {
        $this->BrokerAddress = $brokerAddress;
        return $this;
    }
    /**
     * Get BrokerLocationId value
     * @return string|null
     */
    public function getBrokerLocationId()
    {
        return $this->BrokerLocationId;
    }
    /**
     * Set BrokerLocationId value
     * @param string $brokerLocationId
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setBrokerLocationId($brokerLocationId = null)
    {
        $this->BrokerLocationId = $brokerLocationId;
        return $this;
    }
    /**
     * Get BrokerCommitTimestamp value
     * @return dateTime|null
     */
    public function getBrokerCommitTimestamp()
    {
        return $this->BrokerCommitTimestamp;
    }
    /**
     * Set BrokerCommitTimestamp value
     * @param dateTime $brokerCommitTimestamp
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setBrokerCommitTimestamp($brokerCommitTimestamp = null)
    {
        $this->BrokerCommitTimestamp = $brokerCommitTimestamp;
        return $this;
    }
    /**
     * Get BrokerCommitDayOfWeek value
     * @return string|null
     */
    public function getBrokerCommitDayOfWeek()
    {
        return $this->BrokerCommitDayOfWeek;
    }
    /**
     * Set BrokerCommitDayOfWeek value
     * @uses \Arkitecht\FedEx\Enums\DayOfWeekType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\DayOfWeekType::getValidValues()
     * @param string $brokerCommitDayOfWeek
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setBrokerCommitDayOfWeek($brokerCommitDayOfWeek = null)
    {
        if (!\Arkitecht\FedEx\Enums\DayOfWeekType::valueIsValid($brokerCommitDayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $brokerCommitDayOfWeek, implode(', ', \Arkitecht\FedEx\Enums\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->BrokerCommitDayOfWeek = $brokerCommitDayOfWeek;
        return $this;
    }
    /**
     * Get BrokerToDestinationDays value
     * @return nonNegativeInteger|null
     */
    public function getBrokerToDestinationDays()
    {
        return $this->BrokerToDestinationDays;
    }
    /**
     * Set BrokerToDestinationDays value
     * @param nonNegativeInteger $brokerToDestinationDays
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setBrokerToDestinationDays($brokerToDestinationDays = null)
    {
        $this->BrokerToDestinationDays = $brokerToDestinationDays;
        return $this;
    }
    /**
     * Get ProofOfDeliveryDate value
     * @return date|null
     */
    public function getProofOfDeliveryDate()
    {
        return $this->ProofOfDeliveryDate;
    }
    /**
     * Set ProofOfDeliveryDate value
     * @param date $proofOfDeliveryDate
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setProofOfDeliveryDate($proofOfDeliveryDate = null)
    {
        $this->ProofOfDeliveryDate = $proofOfDeliveryDate;
        return $this;
    }
    /**
     * Get ProofOfDeliveryDayOfWeek value
     * @return string|null
     */
    public function getProofOfDeliveryDayOfWeek()
    {
        return $this->ProofOfDeliveryDayOfWeek;
    }
    /**
     * Set ProofOfDeliveryDayOfWeek value
     * @uses \Arkitecht\FedEx\Enums\DayOfWeekType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\DayOfWeekType::getValidValues()
     * @param string $proofOfDeliveryDayOfWeek
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setProofOfDeliveryDayOfWeek($proofOfDeliveryDayOfWeek = null)
    {
        if (!\Arkitecht\FedEx\Enums\DayOfWeekType::valueIsValid($proofOfDeliveryDayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $proofOfDeliveryDayOfWeek, implode(', ', \Arkitecht\FedEx\Enums\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->ProofOfDeliveryDayOfWeek = $proofOfDeliveryDayOfWeek;
        return $this;
    }
    /**
     * Get CommitMessages value
     * @return \Arkitecht\FedEx\Structs\Notification|null
     */
    public function getCommitMessages()
    {
        return $this->CommitMessages;
    }
    /**
     * Set CommitMessages value
     * @param \Arkitecht\FedEx\Structs\Notification $commitMessages
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setCommitMessages(\Arkitecht\FedEx\Structs\Notification $commitMessages = null)
    {
        $this->CommitMessages = $commitMessages;
        return $this;
    }
    /**
     * Get DeliveryMessages value
     * @return string|null
     */
    public function getDeliveryMessages()
    {
        return $this->DeliveryMessages;
    }
    /**
     * Set DeliveryMessages value
     * @param string $deliveryMessages
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setDeliveryMessages($deliveryMessages = null)
    {
        $this->DeliveryMessages = $deliveryMessages;
        return $this;
    }
    /**
     * Get DelayDetails value
     * @return \Arkitecht\FedEx\Structs\DelayDetail|null
     */
    public function getDelayDetails()
    {
        return $this->DelayDetails;
    }
    /**
     * Set DelayDetails value
     * @param \Arkitecht\FedEx\Structs\DelayDetail $delayDetails
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setDelayDetails(\Arkitecht\FedEx\Structs\DelayDetail $delayDetails = null)
    {
        $this->DelayDetails = $delayDetails;
        return $this;
    }
    /**
     * Get DocumentContent value
     * @return string|null
     */
    public function getDocumentContent()
    {
        return $this->DocumentContent;
    }
    /**
     * Set DocumentContent value
     * @uses \Arkitecht\FedEx\Enums\InternationalDocumentContentType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\InternationalDocumentContentType::getValidValues()
     * @param string $documentContent
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setDocumentContent($documentContent = null)
    {
        if (!\Arkitecht\FedEx\Enums\InternationalDocumentContentType::valueIsValid($documentContent)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentContent, implode(', ', \Arkitecht\FedEx\Enums\InternationalDocumentContentType::getValidValues())), __LINE__);
        }
        $this->DocumentContent = $documentContent;
        return $this;
    }
    /**
     * Get RequiredDocuments value
     * @return string|null
     */
    public function getRequiredDocuments()
    {
        return $this->RequiredDocuments;
    }
    /**
     * Set RequiredDocuments value
     * @uses \Arkitecht\FedEx\Enums\RequiredShippingDocumentType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\RequiredShippingDocumentType::getValidValues()
     * @param string $requiredDocuments
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setRequiredDocuments($requiredDocuments = null)
    {
        if (!\Arkitecht\FedEx\Enums\RequiredShippingDocumentType::valueIsValid($requiredDocuments)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $requiredDocuments, implode(', ', \Arkitecht\FedEx\Enums\RequiredShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->RequiredDocuments = $requiredDocuments;
        return $this;
    }
    /**
     * Get FreightCommitDetail value
     * @return \Arkitecht\FedEx\Structs\FreightCommitDetail|null
     */
    public function getFreightCommitDetail()
    {
        return $this->FreightCommitDetail;
    }
    /**
     * Set FreightCommitDetail value
     * @param \Arkitecht\FedEx\Structs\FreightCommitDetail $freightCommitDetail
     * @return \Arkitecht\FedEx\Structs\CommitDetail
     */
    public function setFreightCommitDetail(\Arkitecht\FedEx\Structs\FreightCommitDetail $freightCommitDetail = null)
    {
        $this->FreightCommitDetail = $freightCommitDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CommitDetail
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
