<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestedShipment Structs
 * @subpackage Structs
 */
class RequestedShipment extends AbstractStructBase
{
    /**
     * The ShipTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $ShipTimestamp;
    /**
     * The DropoffType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DropoffType;
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
     * The VariationOptions
     * Meta informations extracted from the WSDL
     * - documentation: The shipment variations for the current shipment expressed in key-value pairs.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ShipmentVariationOptionDetail
     */
    public $VariationOptions;
    /**
     * The TotalWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The descriptive data for the heaviness of an object.
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $TotalWeight;
    /**
     * The TotalInsuredValue
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the total declared value for carriage of the shipment. The declared value for carriage represents the maximum liability of FedEx in connection with a shipment, including, but not limited to, any loss, damage, delay,
     * mis-delivery, nondelivery, misinformation, any failure to provide information, or mis-delivery of information relating to the shipment.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TotalInsuredValue;
    /**
     * The PreferredCurrency
     * Meta informations extracted from the WSDL
     * - documentation: This attribute indicates the currency the caller requests to have used in all returned monetary values (when a choice is possible).
     * - minOccurs: 0
     * @var string
     */
    public $PreferredCurrency;
    /**
     * The Shipper
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Party
     */
    public $Shipper;
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Party
     */
    public $Recipient;
    /**
     * The RecipientLocationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RecipientLocationNumber;
    /**
     * The Origin
     * Meta informations extracted from the WSDL
     * - documentation: Physical starting address for the shipment, if different from shipper's address.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ContactAndAddress
     */
    public $Origin;
    /**
     * The SoldTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Party
     */
    public $SoldTo;
    /**
     * The ShippingChargesPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Payment
     */
    public $ShippingChargesPayment;
    /**
     * The SpecialServicesRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: These special services are available at the shipment level for some or all service types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must
     * be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
     * @var \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     */
    public $SpecialServicesRequested;
    /**
     * The ExpressFreightDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ExpressFreightDetail
     */
    public $ExpressFreightDetail;
    /**
     * The FreightShipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Data applicable to shipments using FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\FreightShipmentDetail
     */
    public $FreightShipmentDetail;
    /**
     * The DeliveryInstructions
     * Meta informations extracted from the WSDL
     * - documentation: Used with Ground Home Delivery and Freight.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryInstructions;
    /**
     * The VariableHandlingChargeDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\VariableHandlingChargeDetail
     */
    public $VariableHandlingChargeDetail;
    /**
     * The CustomsClearanceDetail
     * Meta informations extracted from the WSDL
     * - documentation: Customs clearance data, used for both international and intra-country shipping.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CustomsClearanceDetail
     */
    public $CustomsClearanceDetail;
    /**
     * The PickupDetail
     * Meta informations extracted from the WSDL
     * - documentation: For use in "process tag" transaction.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\PickupDetail
     */
    public $PickupDetail;
    /**
     * The SmartPostDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the characteristics of a shipment pertaining to SmartPost services.
     * - minOccurs: 0
     * - documentation: Data required for shipments handled under the SMART_POST and GROUND_SMART_POST service types.
     * @var \Arkitecht\FedEx\Structs\SmartPostShipmentDetail
     */
    public $SmartPostDetail;
    /**
     * The BlockInsightVisibility
     * Meta informations extracted from the WSDL
     * - documentation: If true, only the shipper/payor will have visibility of this shipment.
     * - minOccurs: 0
     * @var boolean
     */
    public $BlockInsightVisibility;
    /**
     * The LabelSpecification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\LabelSpecification
     */
    public $LabelSpecification;
    /**
     * The ShippingDocumentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Contains data used to create additional (non-label) shipping documents.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ShippingDocumentSpecification
     */
    public $ShippingDocumentSpecification;
    /**
     * The RateRequestTypes
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether and what kind of rates the customer wishes to have quoted on this shipment. The reply will also be constrained by other data on the shipment and customer.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $RateRequestTypes;
    /**
     * The EdtRequestType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether the customer wishes to have Estimated Duties and Taxes provided with the rate quotation on this shipment. Only applies with shipments moving under international services.
     * - minOccurs: 0
     * @var string
     */
    public $EdtRequestType;
    /**
     * The PackageCount
     * Meta informations extracted from the WSDL
     * - documentation: The total number of packages in the entire shipment (even when the shipment spans multiple transactions.)
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $PackageCount;
    /**
     * The ShipmentOnlyFields
     * Meta informations extracted from the WSDL
     * - documentation: Specifies which package-level data values are provided at the shipment-level only. The package-level data values types specified here will not be provided at the package-level.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: These values identify which package-level data values will be provided at the shipment-level.
     * @var string
     */
    public $ShipmentOnlyFields;
    /**
     * The ConfigurationData
     * Meta informations extracted from the WSDL
     * - documentation: Specifies data structures that may be re-used multiple times with s single shipment.
     * - minOccurs: 0
     * - documentation: Specifies data structures that may be re-used multiple times with s single shipment.
     * @var \Arkitecht\FedEx\Structs\ShipmentConfigurationData
     */
    public $ConfigurationData;
    /**
     * The RequestedPackageLineItems
     * Meta informations extracted from the WSDL
     * - documentation: One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics all packages in the shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: This class rationalizes RequestedPackage and RequestedPackageSummary from previous interfaces.
     * @var \Arkitecht\FedEx\Structs\RequestedPackageLineItem
     */
    public $RequestedPackageLineItems;
    /**
     * Constructor method for RequestedShipment
     * @uses RequestedShipment::setShipTimestamp()
     * @uses RequestedShipment::setDropoffType()
     * @uses RequestedShipment::setServiceType()
     * @uses RequestedShipment::setPackagingType()
     * @uses RequestedShipment::setVariationOptions()
     * @uses RequestedShipment::setTotalWeight()
     * @uses RequestedShipment::setTotalInsuredValue()
     * @uses RequestedShipment::setPreferredCurrency()
     * @uses RequestedShipment::setShipper()
     * @uses RequestedShipment::setRecipient()
     * @uses RequestedShipment::setRecipientLocationNumber()
     * @uses RequestedShipment::setOrigin()
     * @uses RequestedShipment::setSoldTo()
     * @uses RequestedShipment::setShippingChargesPayment()
     * @uses RequestedShipment::setSpecialServicesRequested()
     * @uses RequestedShipment::setExpressFreightDetail()
     * @uses RequestedShipment::setFreightShipmentDetail()
     * @uses RequestedShipment::setDeliveryInstructions()
     * @uses RequestedShipment::setVariableHandlingChargeDetail()
     * @uses RequestedShipment::setCustomsClearanceDetail()
     * @uses RequestedShipment::setPickupDetail()
     * @uses RequestedShipment::setSmartPostDetail()
     * @uses RequestedShipment::setBlockInsightVisibility()
     * @uses RequestedShipment::setLabelSpecification()
     * @uses RequestedShipment::setShippingDocumentSpecification()
     * @uses RequestedShipment::setRateRequestTypes()
     * @uses RequestedShipment::setEdtRequestType()
     * @uses RequestedShipment::setPackageCount()
     * @uses RequestedShipment::setShipmentOnlyFields()
     * @uses RequestedShipment::setConfigurationData()
     * @uses RequestedShipment::setRequestedPackageLineItems()
     * @param dateTime $shipTimestamp
     * @param string $dropoffType
     * @param string $serviceType
     * @param string $packagingType
     * @param \Arkitecht\FedEx\Structs\ShipmentVariationOptionDetail $variationOptions
     * @param \Arkitecht\FedEx\Structs\Weight $totalWeight
     * @param \Arkitecht\FedEx\Structs\Money $totalInsuredValue
     * @param string $preferredCurrency
     * @param \Arkitecht\FedEx\Structs\Party $shipper
     * @param \Arkitecht\FedEx\Structs\Party $recipient
     * @param string $recipientLocationNumber
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress $origin
     * @param \Arkitecht\FedEx\Structs\Party $soldTo
     * @param \Arkitecht\FedEx\Structs\Payment $shippingChargesPayment
     * @param \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     * $specialServicesRequested
     * @param \Arkitecht\FedEx\Structs\ExpressFreightDetail $expressFreightDetail
     * @param \Arkitecht\FedEx\Structs\FreightShipmentDetail $freightShipmentDetail
     * @param string $deliveryInstructions
     * @param \Arkitecht\FedEx\Structs\VariableHandlingChargeDetail
     * $variableHandlingChargeDetail
     * @param \Arkitecht\FedEx\Structs\CustomsClearanceDetail $customsClearanceDetail
     * @param \Arkitecht\FedEx\Structs\PickupDetail $pickupDetail
     * @param \Arkitecht\FedEx\Structs\SmartPostShipmentDetail $smartPostDetail
     * @param boolean $blockInsightVisibility
     * @param \Arkitecht\FedEx\Structs\LabelSpecification $labelSpecification
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentSpecification
     * $shippingDocumentSpecification
     * @param string $rateRequestTypes
     * @param string $edtRequestType
     * @param nonNegativeInteger $packageCount
     * @param string $shipmentOnlyFields
     * @param \Arkitecht\FedEx\Structs\ShipmentConfigurationData $configurationData
     * @param \Arkitecht\FedEx\Structs\RequestedPackageLineItem
     * $requestedPackageLineItems
     */
    public function __construct($shipTimestamp = null, $dropoffType = null, $serviceType = null, $packagingType = null, \Arkitecht\FedEx\Structs\ShipmentVariationOptionDetail $variationOptions = null, \Arkitecht\FedEx\Structs\Weight $totalWeight = null, \Arkitecht\FedEx\Structs\Money $totalInsuredValue = null, $preferredCurrency = null, \Arkitecht\FedEx\Structs\Party $shipper = null, \Arkitecht\FedEx\Structs\Party $recipient = null, $recipientLocationNumber = null, \Arkitecht\FedEx\Structs\ContactAndAddress $origin = null, \Arkitecht\FedEx\Structs\Party $soldTo = null, \Arkitecht\FedEx\Structs\Payment $shippingChargesPayment = null, \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested $specialServicesRequested = null, \Arkitecht\FedEx\Structs\ExpressFreightDetail $expressFreightDetail = null, \Arkitecht\FedEx\Structs\FreightShipmentDetail $freightShipmentDetail = null, $deliveryInstructions = null, \Arkitecht\FedEx\Structs\VariableHandlingChargeDetail $variableHandlingChargeDetail = null, \Arkitecht\FedEx\Structs\CustomsClearanceDetail $customsClearanceDetail = null, \Arkitecht\FedEx\Structs\PickupDetail $pickupDetail = null, \Arkitecht\FedEx\Structs\SmartPostShipmentDetail $smartPostDetail = null, $blockInsightVisibility = null, \Arkitecht\FedEx\Structs\LabelSpecification $labelSpecification = null, \Arkitecht\FedEx\Structs\ShippingDocumentSpecification $shippingDocumentSpecification = null, $rateRequestTypes = null, $edtRequestType = null, $packageCount = null, $shipmentOnlyFields = null, \Arkitecht\FedEx\Structs\ShipmentConfigurationData $configurationData = null, \Arkitecht\FedEx\Structs\RequestedPackageLineItem $requestedPackageLineItems = null)
    {
        $this
            ->setShipTimestamp($shipTimestamp)
            ->setDropoffType($dropoffType)
            ->setServiceType($serviceType)
            ->setPackagingType($packagingType)
            ->setVariationOptions($variationOptions)
            ->setTotalWeight($totalWeight)
            ->setTotalInsuredValue($totalInsuredValue)
            ->setPreferredCurrency($preferredCurrency)
            ->setShipper($shipper)
            ->setRecipient($recipient)
            ->setRecipientLocationNumber($recipientLocationNumber)
            ->setOrigin($origin)
            ->setSoldTo($soldTo)
            ->setShippingChargesPayment($shippingChargesPayment)
            ->setSpecialServicesRequested($specialServicesRequested)
            ->setExpressFreightDetail($expressFreightDetail)
            ->setFreightShipmentDetail($freightShipmentDetail)
            ->setDeliveryInstructions($deliveryInstructions)
            ->setVariableHandlingChargeDetail($variableHandlingChargeDetail)
            ->setCustomsClearanceDetail($customsClearanceDetail)
            ->setPickupDetail($pickupDetail)
            ->setSmartPostDetail($smartPostDetail)
            ->setBlockInsightVisibility($blockInsightVisibility)
            ->setLabelSpecification($labelSpecification)
            ->setShippingDocumentSpecification($shippingDocumentSpecification)
            ->setRateRequestTypes($rateRequestTypes)
            ->setEdtRequestType($edtRequestType)
            ->setPackageCount($packageCount)
            ->setShipmentOnlyFields($shipmentOnlyFields)
            ->setConfigurationData($configurationData)
            ->setRequestedPackageLineItems($requestedPackageLineItems);
    }
    /**
     * Get ShipTimestamp value
     * @return dateTime|null
     */
    public function getShipTimestamp()
    {
        return $this->ShipTimestamp;
    }
    /**
     * Set ShipTimestamp value
     * @param dateTime $shipTimestamp
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setShipTimestamp($shipTimestamp = null)
    {
        $this->ShipTimestamp = $shipTimestamp;
        return $this;
    }
    /**
     * Get DropoffType value
     * @return string|null
     */
    public function getDropoffType()
    {
        return $this->DropoffType;
    }
    /**
     * Set DropoffType value
     * @uses \Arkitecht\FedEx\Enums\DropoffType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\DropoffType::getValidValues()
     * @param string $dropoffType
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setDropoffType($dropoffType = null)
    {
        if (!\Arkitecht\FedEx\Enums\DropoffType::valueIsValid($dropoffType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dropoffType, implode(', ', \Arkitecht\FedEx\Enums\DropoffType::getValidValues())), __LINE__);
        }
        $this->DropoffType = $dropoffType;
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
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
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
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
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
     * Get VariationOptions value
     * @return \Arkitecht\FedEx\Structs\ShipmentVariationOptionDetail|null
     */
    public function getVariationOptions()
    {
        return $this->VariationOptions;
    }
    /**
     * Set VariationOptions value
     * @param \Arkitecht\FedEx\Structs\ShipmentVariationOptionDetail $variationOptions
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setVariationOptions(\Arkitecht\FedEx\Structs\ShipmentVariationOptionDetail $variationOptions = null)
    {
        $this->VariationOptions = $variationOptions;
        return $this;
    }
    /**
     * Get TotalWeight value
     * @return \Arkitecht\FedEx\Structs\Weight|null
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    /**
     * Set TotalWeight value
     * @param \Arkitecht\FedEx\Structs\Weight $totalWeight
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setTotalWeight(\Arkitecht\FedEx\Structs\Weight $totalWeight = null)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    /**
     * Get TotalInsuredValue value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getTotalInsuredValue()
    {
        return $this->TotalInsuredValue;
    }
    /**
     * Set TotalInsuredValue value
     * @param \Arkitecht\FedEx\Structs\Money $totalInsuredValue
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setTotalInsuredValue(\Arkitecht\FedEx\Structs\Money $totalInsuredValue = null)
    {
        $this->TotalInsuredValue = $totalInsuredValue;
        return $this;
    }
    /**
     * Get PreferredCurrency value
     * @return string|null
     */
    public function getPreferredCurrency()
    {
        return $this->PreferredCurrency;
    }
    /**
     * Set PreferredCurrency value
     * @param string $preferredCurrency
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setPreferredCurrency($preferredCurrency = null)
    {
        $this->PreferredCurrency = $preferredCurrency;
        return $this;
    }
    /**
     * Get Shipper value
     * @return \Arkitecht\FedEx\Structs\Party|null
     */
    public function getShipper()
    {
        return $this->Shipper;
    }
    /**
     * Set Shipper value
     * @param \Arkitecht\FedEx\Structs\Party $shipper
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setShipper(\Arkitecht\FedEx\Structs\Party $shipper = null)
    {
        $this->Shipper = $shipper;
        return $this;
    }
    /**
     * Get Recipient value
     * @return \Arkitecht\FedEx\Structs\Party|null
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \Arkitecht\FedEx\Structs\Party $recipient
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setRecipient(\Arkitecht\FedEx\Structs\Party $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get RecipientLocationNumber value
     * @return string|null
     */
    public function getRecipientLocationNumber()
    {
        return $this->RecipientLocationNumber;
    }
    /**
     * Set RecipientLocationNumber value
     * @param string $recipientLocationNumber
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setRecipientLocationNumber($recipientLocationNumber = null)
    {
        $this->RecipientLocationNumber = $recipientLocationNumber;
        return $this;
    }
    /**
     * Get Origin value
     * @return \Arkitecht\FedEx\Structs\ContactAndAddress|null
     */
    public function getOrigin()
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress $origin
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setOrigin(\Arkitecht\FedEx\Structs\ContactAndAddress $origin = null)
    {
        $this->Origin = $origin;
        return $this;
    }
    /**
     * Get SoldTo value
     * @return \Arkitecht\FedEx\Structs\Party|null
     */
    public function getSoldTo()
    {
        return $this->SoldTo;
    }
    /**
     * Set SoldTo value
     * @param \Arkitecht\FedEx\Structs\Party $soldTo
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setSoldTo(\Arkitecht\FedEx\Structs\Party $soldTo = null)
    {
        $this->SoldTo = $soldTo;
        return $this;
    }
    /**
     * Get ShippingChargesPayment value
     * @return \Arkitecht\FedEx\Structs\Payment|null
     */
    public function getShippingChargesPayment()
    {
        return $this->ShippingChargesPayment;
    }
    /**
     * Set ShippingChargesPayment value
     * @param \Arkitecht\FedEx\Structs\Payment $shippingChargesPayment
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setShippingChargesPayment(\Arkitecht\FedEx\Structs\Payment $shippingChargesPayment = null)
    {
        $this->ShippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    /**
     * Get SpecialServicesRequested value
     * @return \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested|null
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }
    /**
     * Set SpecialServicesRequested value
     * @param \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     * $specialServicesRequested
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setSpecialServicesRequested(\Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested $specialServicesRequested = null)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    /**
     * Get ExpressFreightDetail value
     * @return \Arkitecht\FedEx\Structs\ExpressFreightDetail|null
     */
    public function getExpressFreightDetail()
    {
        return $this->ExpressFreightDetail;
    }
    /**
     * Set ExpressFreightDetail value
     * @param \Arkitecht\FedEx\Structs\ExpressFreightDetail $expressFreightDetail
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setExpressFreightDetail(\Arkitecht\FedEx\Structs\ExpressFreightDetail $expressFreightDetail = null)
    {
        $this->ExpressFreightDetail = $expressFreightDetail;
        return $this;
    }
    /**
     * Get FreightShipmentDetail value
     * @return \Arkitecht\FedEx\Structs\FreightShipmentDetail|null
     */
    public function getFreightShipmentDetail()
    {
        return $this->FreightShipmentDetail;
    }
    /**
     * Set FreightShipmentDetail value
     * @param \Arkitecht\FedEx\Structs\FreightShipmentDetail $freightShipmentDetail
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setFreightShipmentDetail(\Arkitecht\FedEx\Structs\FreightShipmentDetail $freightShipmentDetail = null)
    {
        $this->FreightShipmentDetail = $freightShipmentDetail;
        return $this;
    }
    /**
     * Get DeliveryInstructions value
     * @return string|null
     */
    public function getDeliveryInstructions()
    {
        return $this->DeliveryInstructions;
    }
    /**
     * Set DeliveryInstructions value
     * @param string $deliveryInstructions
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setDeliveryInstructions($deliveryInstructions = null)
    {
        $this->DeliveryInstructions = $deliveryInstructions;
        return $this;
    }
    /**
     * Get VariableHandlingChargeDetail value
     * @return \Arkitecht\FedEx\Structs\VariableHandlingChargeDetail|null
     */
    public function getVariableHandlingChargeDetail()
    {
        return $this->VariableHandlingChargeDetail;
    }
    /**
     * Set VariableHandlingChargeDetail value
     * @param \Arkitecht\FedEx\Structs\VariableHandlingChargeDetail
     * $variableHandlingChargeDetail
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setVariableHandlingChargeDetail(\Arkitecht\FedEx\Structs\VariableHandlingChargeDetail $variableHandlingChargeDetail = null)
    {
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * Get CustomsClearanceDetail value
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail|null
     */
    public function getCustomsClearanceDetail()
    {
        return $this->CustomsClearanceDetail;
    }
    /**
     * Set CustomsClearanceDetail value
     * @param \Arkitecht\FedEx\Structs\CustomsClearanceDetail $customsClearanceDetail
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setCustomsClearanceDetail(\Arkitecht\FedEx\Structs\CustomsClearanceDetail $customsClearanceDetail = null)
    {
        $this->CustomsClearanceDetail = $customsClearanceDetail;
        return $this;
    }
    /**
     * Get PickupDetail value
     * @return \Arkitecht\FedEx\Structs\PickupDetail|null
     */
    public function getPickupDetail()
    {
        return $this->PickupDetail;
    }
    /**
     * Set PickupDetail value
     * @param \Arkitecht\FedEx\Structs\PickupDetail $pickupDetail
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setPickupDetail(\Arkitecht\FedEx\Structs\PickupDetail $pickupDetail = null)
    {
        $this->PickupDetail = $pickupDetail;
        return $this;
    }
    /**
     * Get SmartPostDetail value
     * @return \Arkitecht\FedEx\Structs\SmartPostShipmentDetail|null
     */
    public function getSmartPostDetail()
    {
        return $this->SmartPostDetail;
    }
    /**
     * Set SmartPostDetail value
     * @param \Arkitecht\FedEx\Structs\SmartPostShipmentDetail $smartPostDetail
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setSmartPostDetail(\Arkitecht\FedEx\Structs\SmartPostShipmentDetail $smartPostDetail = null)
    {
        $this->SmartPostDetail = $smartPostDetail;
        return $this;
    }
    /**
     * Get BlockInsightVisibility value
     * @return boolean|null
     */
    public function getBlockInsightVisibility()
    {
        return $this->BlockInsightVisibility;
    }
    /**
     * Set BlockInsightVisibility value
     * @param boolean $blockInsightVisibility
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setBlockInsightVisibility($blockInsightVisibility = null)
    {
        $this->BlockInsightVisibility = $blockInsightVisibility;
        return $this;
    }
    /**
     * Get LabelSpecification value
     * @return \Arkitecht\FedEx\Structs\LabelSpecification|null
     */
    public function getLabelSpecification()
    {
        return $this->LabelSpecification;
    }
    /**
     * Set LabelSpecification value
     * @param \Arkitecht\FedEx\Structs\LabelSpecification $labelSpecification
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setLabelSpecification(\Arkitecht\FedEx\Structs\LabelSpecification $labelSpecification = null)
    {
        $this->LabelSpecification = $labelSpecification;
        return $this;
    }
    /**
     * Get ShippingDocumentSpecification value
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentSpecification|null
     */
    public function getShippingDocumentSpecification()
    {
        return $this->ShippingDocumentSpecification;
    }
    /**
     * Set ShippingDocumentSpecification value
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentSpecification
     * $shippingDocumentSpecification
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setShippingDocumentSpecification(\Arkitecht\FedEx\Structs\ShippingDocumentSpecification $shippingDocumentSpecification = null)
    {
        $this->ShippingDocumentSpecification = $shippingDocumentSpecification;
        return $this;
    }
    /**
     * Get RateRequestTypes value
     * @return string|null
     */
    public function getRateRequestTypes()
    {
        return $this->RateRequestTypes;
    }
    /**
     * Set RateRequestTypes value
     * @uses \Arkitecht\FedEx\Enums\RateRequestType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\RateRequestType::getValidValues()
     * @param string $rateRequestTypes
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setRateRequestTypes($rateRequestTypes = null)
    {
        if (!\Arkitecht\FedEx\Enums\RateRequestType::valueIsValid($rateRequestTypes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $rateRequestTypes, implode(', ', \Arkitecht\FedEx\Enums\RateRequestType::getValidValues())), __LINE__);
        }
        $this->RateRequestTypes = $rateRequestTypes;
        return $this;
    }
    /**
     * Get EdtRequestType value
     * @return string|null
     */
    public function getEdtRequestType()
    {
        return $this->EdtRequestType;
    }
    /**
     * Set EdtRequestType value
     * @uses \Arkitecht\FedEx\Enums\EdtRequestType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\EdtRequestType::getValidValues()
     * @param string $edtRequestType
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setEdtRequestType($edtRequestType = null)
    {
        if (!\Arkitecht\FedEx\Enums\EdtRequestType::valueIsValid($edtRequestType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $edtRequestType, implode(', ', \Arkitecht\FedEx\Enums\EdtRequestType::getValidValues())), __LINE__);
        }
        $this->EdtRequestType = $edtRequestType;
        return $this;
    }
    /**
     * Get PackageCount value
     * @return nonNegativeInteger|null
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }
    /**
     * Set PackageCount value
     * @param nonNegativeInteger $packageCount
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setPackageCount($packageCount = null)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    /**
     * Get ShipmentOnlyFields value
     * @return string|null
     */
    public function getShipmentOnlyFields()
    {
        return $this->ShipmentOnlyFields;
    }
    /**
     * Set ShipmentOnlyFields value
     * @uses \Arkitecht\FedEx\Enums\ShipmentOnlyFieldsType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ShipmentOnlyFieldsType::getValidValues()
     * @param string $shipmentOnlyFields
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setShipmentOnlyFields($shipmentOnlyFields = null)
    {
        if (!\Arkitecht\FedEx\Enums\ShipmentOnlyFieldsType::valueIsValid($shipmentOnlyFields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shipmentOnlyFields, implode(', ', \Arkitecht\FedEx\Enums\ShipmentOnlyFieldsType::getValidValues())), __LINE__);
        }
        $this->ShipmentOnlyFields = $shipmentOnlyFields;
        return $this;
    }
    /**
     * Get ConfigurationData value
     * @return \Arkitecht\FedEx\Structs\ShipmentConfigurationData|null
     */
    public function getConfigurationData()
    {
        return $this->ConfigurationData;
    }
    /**
     * Set ConfigurationData value
     * @param \Arkitecht\FedEx\Structs\ShipmentConfigurationData $configurationData
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setConfigurationData(\Arkitecht\FedEx\Structs\ShipmentConfigurationData $configurationData = null)
    {
        $this->ConfigurationData = $configurationData;
        return $this;
    }
    /**
     * Get RequestedPackageLineItems value
     * @return \Arkitecht\FedEx\Structs\RequestedPackageLineItem|null
     */
    public function getRequestedPackageLineItems()
    {
        return $this->RequestedPackageLineItems;
    }
    /**
     * Set RequestedPackageLineItems value
     * @param \Arkitecht\FedEx\Structs\RequestedPackageLineItem
     * $requestedPackageLineItems
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public function setRequestedPackageLineItems(\Arkitecht\FedEx\Structs\RequestedPackageLineItem $requestedPackageLineItems = null)
    {
        $this->RequestedPackageLineItems = $requestedPackageLineItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\RequestedShipment
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
