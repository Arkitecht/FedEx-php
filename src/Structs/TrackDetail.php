<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Detailed tracking information about a particular package.
 * @subpackage Structs
 */
class TrackDetail extends AbstractStructBase
{
    /**
     * The Notification
     * Meta informations extracted from the WSDL
     * - documentation: To report soft error on an individual track detail.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Notification
     */
    public $Notification;
    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: The FedEx package identifier.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumber;
    /**
     * The Barcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Each instance of this data type represents a barcode whose content must be represented as ASCII text (i.e. not binary data).
     * @var \Arkitecht\FedEx\Structs\StringBarcode
     */
    public $Barcode;
    /**
     * The TrackingNumberUniqueIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: When duplicate tracking numbers exist this data is returned with summary information for each of the duplicates. The summary information is used to determine which of the duplicates the intended tracking number is. This identifier is
     * used on a subsequent track request to retrieve the tracking data for the desired tracking number.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumberUniqueIdentifier;
    /**
     * The StatusDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies details about the status of the shipment being tracked.
     * - minOccurs: 0
     * - documentation: Specifies the details about the status of the track information for the shipments being tracked.
     * @var \Arkitecht\FedEx\Structs\TrackStatusDetail
     */
    public $StatusDetail;
    /**
     * The CustomerExceptionRequests
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CustomerExceptionRequestDetail
     */
    public $CustomerExceptionRequests;
    /**
     * The Reconciliation
     * Meta informations extracted from the WSDL
     * - documentation: Used to report the status of a piece of a multiple piece shipment which is no longer traveling with the rest of the packages in the shipment or has not been accounted for.
     * - minOccurs: 0
     * - documentation: Used to report the status of a piece of a multiple piece shipment which is no longer traveling with the rest of the packages in the shipment or has not been accounted for.
     * @var \Arkitecht\FedEx\Structs\TrackReconciliation
     */
    public $Reconciliation;
    /**
     * The ServiceCommitMessage
     * Meta informations extracted from the WSDL
     * - documentation: Used to convey information such as. 1. FedEx has received information about a package but has not yet taken possession of it. 2. FedEx has handed the package off to a third party for final delivery. 3. The package delivery has been
     * cancelled
     * - minOccurs: 0
     * @var string
     */
    public $ServiceCommitMessage;
    /**
     * The DestinationServiceArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationServiceArea;
    /**
     * The DestinationServiceAreaDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationServiceAreaDescription;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies a FedEx operating company (transportation).
     * - minOccurs: 0
     * - documentation: Identification of a FedEx operating company (transportation).
     * @var string
     */
    public $CarrierCode;
    /**
     * The OperatingCompany
     * Meta informations extracted from the WSDL
     * - documentation: Identifies operating transportation company that is the specific to the carrier code.
     * - minOccurs: 0
     * - documentation: Identification for a FedEx operating company (transportation and non-transportation).
     * @var string
     */
    public $OperatingCompany;
    /**
     * The OperatingCompanyOrCarrierDescription
     * Meta informations extracted from the WSDL
     * - documentation: Specifies a detailed description about the carrier or the operating company.
     * - minOccurs: 0
     * @var string
     */
    public $OperatingCompanyOrCarrierDescription;
    /**
     * The CartageAgentCompanyName
     * Meta informations extracted from the WSDL
     * - documentation: If the package was interlined to a cartage agent, this is the name of the cartage agent. (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var string
     */
    public $CartageAgentCompanyName;
    /**
     * The ProductionLocationContactAndAddress
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the FXO production centre contact and address.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ContactAndAddress
     */
    public $ProductionLocationContactAndAddress;
    /**
     * The OtherIdentifiers
     * Meta informations extracted from the WSDL
     * - documentation: Other related identifiers for this package such as reference numbers.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackOtherIdentifierDetail
     */
    public $OtherIdentifiers;
    /**
     * The FormId
     * Meta informations extracted from the WSDL
     * - documentation: (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var string
     */
    public $FormId;
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - documentation: Specifies details about service such as service description and type.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackServiceDescriptionDetail
     */
    public $Service;
    /**
     * The PackageWeight
     * Meta informations extracted from the WSDL
     * - documentation: The weight of this package.
     * - minOccurs: 0
     * - documentation: The descriptive data for the heaviness of an object.
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $PackageWeight;
    /**
     * The PackageDimensions
     * Meta informations extracted from the WSDL
     * - documentation: Physical dimensions of the package.
     * - minOccurs: 0
     * - documentation: The dimensions of this package and the unit type used for the measurements.
     * @var \Arkitecht\FedEx\Structs\Dimensions
     */
    public $PackageDimensions;
    /**
     * The PackageDimensionalWeight
     * Meta informations extracted from the WSDL
     * - documentation: The dimensional weight of the package.
     * - minOccurs: 0
     * - documentation: The descriptive data for the heaviness of an object.
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $PackageDimensionalWeight;
    /**
     * The ShipmentWeight
     * Meta informations extracted from the WSDL
     * - documentation: The weight of the entire shipment.
     * - minOccurs: 0
     * - documentation: The descriptive data for the heaviness of an object.
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $ShipmentWeight;
    /**
     * The Packaging
     * Meta informations extracted from the WSDL
     * - documentation: Retained for legacy compatibility only.
     * - minOccurs: 0
     * @var string
     */
    public $Packaging;
    /**
     * The PackagingType
     * Meta informations extracted from the WSDL
     * - documentation: Strict representation of the Packaging type (e.g. FEDEX_BOX, YOUR_PACKAGING).
     * - minOccurs: 0
     * @var string
     */
    public $PackagingType;
    /**
     * The PackageSequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: The sequence number of this package in a shipment. This would be 2 if it was package number 2 of 4.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $PackageSequenceNumber;
    /**
     * The PackageCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of packages in this shipment.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $PackageCount;
    /**
     * The Charges
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about the SPOC details.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackChargeDetail
     */
    public $Charges;
    /**
     * The NickName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NickName;
    /**
     * The Notes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Notes;
    /**
     * The Attributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $Attributes;
    /**
     * The ShipmentContents
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ContentRecord
     */
    public $ShipmentContents;
    /**
     * The PackageContents
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $PackageContents;
    /**
     * The ClearanceLocationCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClearanceLocationCode;
    /**
     * The Commodities
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Commodity
     */
    public $Commodities;
    /**
     * The ReturnDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackReturnDetail
     */
    public $ReturnDetail;
    /**
     * The CustomsOptionDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the reason for return.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CustomsOptionDetail
     */
    public $CustomsOptionDetails;
    /**
     * The AdvanceNotificationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackAdvanceNotificationDetail
     */
    public $AdvanceNotificationDetail;
    /**
     * The SpecialHandlings
     * Meta informations extracted from the WSDL
     * - documentation: List of special handlings that applied to this package. (Returned for CSR SL only.)
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackSpecialHandling
     */
    public $SpecialHandlings;
    /**
     * The Shipper
     * Meta informations extracted from the WSDL
     * - documentation: (Returned for CSR SL only.)
     * - minOccurs: 0
     * - documentation: The descriptive data for a point-of-contact person.
     * @var \Arkitecht\FedEx\Structs\Contact
     */
    public $Shipper;
    /**
     * The PossessionStatus
     * Meta informations extracted from the WSDL
     * - documentation: Indicates last-known possession of package (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var string
     */
    public $PossessionStatus;
    /**
     * The ShipperAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address information for the shipper.
     * - minOccurs: 0
     * - documentation: Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within
     * the US).
     * @var \Arkitecht\FedEx\Structs\Address
     */
    public $ShipperAddress;
    /**
     * The OriginLocationAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address of the FedEx pickup location/facility.
     * - minOccurs: 0
     * - documentation: Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within
     * the US).
     * @var \Arkitecht\FedEx\Structs\Address
     */
    public $OriginLocationAddress;
    /**
     * The OriginStationId
     * Meta informations extracted from the WSDL
     * - documentation: (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var string
     */
    public $OriginStationId;
    /**
     * The EstimatedPickupTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: Estimated package pickup time for shipments that haven't been picked up.
     * - minOccurs: 0
     * @var dateTime
     */
    public $EstimatedPickupTimestamp;
    /**
     * The ShipTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: Time package was shipped/tendered over to FedEx. Time portion will be populated if available, otherwise will be set to midnight.
     * - minOccurs: 0
     * @var dateTime
     */
    public $ShipTimestamp;
    /**
     * The TotalTransitDistance
     * Meta informations extracted from the WSDL
     * - documentation: The distance from the origin to the destination. Returned for Custom Critical shipments.
     * - minOccurs: 0
     * - documentation: Driving or other transportation distances, distinct from dimension measurements.
     * @var \Arkitecht\FedEx\Structs\Distance
     */
    public $TotalTransitDistance;
    /**
     * The DistanceToDestination
     * Meta informations extracted from the WSDL
     * - documentation: Total distance package still has to travel. Returned for Custom Critical shipments.
     * - minOccurs: 0
     * - documentation: Driving or other transportation distances, distinct from dimension measurements.
     * @var \Arkitecht\FedEx\Structs\Distance
     */
    public $DistanceToDestination;
    /**
     * The SpecialInstructions
     * Meta informations extracted from the WSDL
     * - documentation: Provides additional details about package delivery.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackSpecialInstruction
     */
    public $SpecialInstructions;
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - documentation: (Returned for CSR SL only.)
     * - minOccurs: 0
     * - documentation: The descriptive data for a point-of-contact person.
     * @var \Arkitecht\FedEx\Structs\Contact
     */
    public $Recipient;
    /**
     * The LastUpdatedDestinationAddress
     * Meta informations extracted from the WSDL
     * - documentation: This is the latest updated destination address.
     * - minOccurs: 0
     * - documentation: Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within
     * the US).
     * @var \Arkitecht\FedEx\Structs\Address
     */
    public $LastUpdatedDestinationAddress;
    /**
     * The DestinationAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address this package is to be (or has been) delivered.
     * - minOccurs: 0
     * - documentation: Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within
     * the US).
     * @var \Arkitecht\FedEx\Structs\Address
     */
    public $DestinationAddress;
    /**
     * The HoldAtLocationContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The descriptive data for a point-of-contact person.
     * @var \Arkitecht\FedEx\Structs\Contact
     */
    public $HoldAtLocationContact;
    /**
     * The HoldAtLocationAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address this package is requested to placed on hold.
     * - minOccurs: 0
     * - documentation: Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within
     * the US).
     * @var \Arkitecht\FedEx\Structs\Address
     */
    public $HoldAtLocationAddress;
    /**
     * The DestinationStationId
     * Meta informations extracted from the WSDL
     * - documentation: (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var string
     */
    public $DestinationStationId;
    /**
     * The DestinationLocationAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address of the FedEx delivery location/facility.
     * - minOccurs: 0
     * - documentation: Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within
     * the US).
     * @var \Arkitecht\FedEx\Structs\Address
     */
    public $DestinationLocationAddress;
    /**
     * The DestinationLocationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifies a kind of FedEx facility.
     * @var string
     */
    public $DestinationLocationType;
    /**
     * The DestinationLocationTimeZoneOffset
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationLocationTimeZoneOffset;
    /**
     * The CommitmentTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: Date and time the package should be (or should have been) delivered. (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var dateTime
     */
    public $CommitmentTimestamp;
    /**
     * The AppointmentDeliveryTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: Date and time the package would be delivered if the package has appointment delivery as a special service.
     * - minOccurs: 0
     * @var dateTime
     */
    public $AppointmentDeliveryTimestamp;
    /**
     * The EstimatedDeliveryTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: Projected package delivery time based on ship time stamp, service and destination. Not populated if delivery has already occurred.
     * - minOccurs: 0
     * @var dateTime
     */
    public $EstimatedDeliveryTimestamp;
    /**
     * The ActualDeliveryTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: The time the package was actually delivered.
     * - minOccurs: 0
     * @var dateTime
     */
    public $ActualDeliveryTimestamp;
    /**
     * The ActualDeliveryAddress
     * Meta informations extracted from the WSDL
     * - documentation: Actual address where package was delivered. Differs from destinationAddress, which indicates where the package was to be delivered; This field tells where delivery actually occurred (next door, at station, etc.)
     * - minOccurs: 0
     * - documentation: Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within
     * the US).
     * @var \Arkitecht\FedEx\Structs\Address
     */
    public $ActualDeliveryAddress;
    /**
     * The OfficeOrderDeliveryMethod
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the method of office order delivery.
     * - minOccurs: 0
     * @var string
     */
    public $OfficeOrderDeliveryMethod;
    /**
     * The DeliveryLocationType
     * Meta informations extracted from the WSDL
     * - documentation: Strict text indicating the delivery location at the delivered to address.
     * - minOccurs: 0
     * - documentation: The delivery location at the delivered to address.
     * @var string
     */
    public $DeliveryLocationType;
    /**
     * The DeliveryLocationDescription
     * Meta informations extracted from the WSDL
     * - documentation: User/screen friendly representation of the DeliveryLocationType (delivery location at the delivered to address). Can be returned in localized text.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryLocationDescription;
    /**
     * The DeliveryAttempts
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the number of delivery attempts made to deliver the shipment.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $DeliveryAttempts;
    /**
     * The DeliverySignatureName
     * Meta informations extracted from the WSDL
     * - documentation: This is either the name of the person that signed for the package or "Signature not requested" or "Signature on file".
     * - minOccurs: 0
     * @var string
     */
    public $DeliverySignatureName;
    /**
     * The PieceCountVerificationDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about the count of the packages delivered at the delivery location and the count of the packages at the origin.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\PieceCountVerificationDetail
     */
    public $PieceCountVerificationDetails;
    /**
     * The TotalUniqueAddressCountInConsolidation
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the total number of unique addresses on the CRNs in a consolidation.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $TotalUniqueAddressCountInConsolidation;
    /**
     * The AvailableImages
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $AvailableImages;
    /**
     * The Signature
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\SignatureImageDetail
     */
    public $Signature;
    /**
     * The NotificationEventsAvailable
     * Meta informations extracted from the WSDL
     * - documentation: The types of email notifications that are available for the package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $NotificationEventsAvailable;
    /**
     * The SplitShipmentParts
     * Meta informations extracted from the WSDL
     * - documentation: Returned for cargo shipments only when they are currently split across vehicles.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Used when a cargo shipment is split across vehicles. This is used to give the status of each part of the shipment.
     * @var \Arkitecht\FedEx\Structs\TrackSplitShipmentPart
     */
    public $SplitShipmentParts;
    /**
     * The DeliveryOptionEligibilityDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about the eligibility for different delivery options.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Details about the eligibility for a delivery option.
     * @var \Arkitecht\FedEx\Structs\DeliveryOptionEligibilityDetail
     */
    public $DeliveryOptionEligibilityDetails;
    /**
     * The Events
     * Meta informations extracted from the WSDL
     * - documentation: Event information for a tracking number.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: FedEx scanning information about a package.
     * @var \Arkitecht\FedEx\Structs\TrackEvent
     */
    public $Events;
    /**
     * Constructor method for TrackDetail
     * @uses TrackDetail::setNotification()
     * @uses TrackDetail::setTrackingNumber()
     * @uses TrackDetail::setBarcode()
     * @uses TrackDetail::setTrackingNumberUniqueIdentifier()
     * @uses TrackDetail::setStatusDetail()
     * @uses TrackDetail::setCustomerExceptionRequests()
     * @uses TrackDetail::setReconciliation()
     * @uses TrackDetail::setServiceCommitMessage()
     * @uses TrackDetail::setDestinationServiceArea()
     * @uses TrackDetail::setDestinationServiceAreaDescription()
     * @uses TrackDetail::setCarrierCode()
     * @uses TrackDetail::setOperatingCompany()
     * @uses TrackDetail::setOperatingCompanyOrCarrierDescription()
     * @uses TrackDetail::setCartageAgentCompanyName()
     * @uses TrackDetail::setProductionLocationContactAndAddress()
     * @uses TrackDetail::setOtherIdentifiers()
     * @uses TrackDetail::setFormId()
     * @uses TrackDetail::setService()
     * @uses TrackDetail::setPackageWeight()
     * @uses TrackDetail::setPackageDimensions()
     * @uses TrackDetail::setPackageDimensionalWeight()
     * @uses TrackDetail::setShipmentWeight()
     * @uses TrackDetail::setPackaging()
     * @uses TrackDetail::setPackagingType()
     * @uses TrackDetail::setPackageSequenceNumber()
     * @uses TrackDetail::setPackageCount()
     * @uses TrackDetail::setCharges()
     * @uses TrackDetail::setNickName()
     * @uses TrackDetail::setNotes()
     * @uses TrackDetail::setAttributes()
     * @uses TrackDetail::setShipmentContents()
     * @uses TrackDetail::setPackageContents()
     * @uses TrackDetail::setClearanceLocationCode()
     * @uses TrackDetail::setCommodities()
     * @uses TrackDetail::setReturnDetail()
     * @uses TrackDetail::setCustomsOptionDetails()
     * @uses TrackDetail::setAdvanceNotificationDetail()
     * @uses TrackDetail::setSpecialHandlings()
     * @uses TrackDetail::setShipper()
     * @uses TrackDetail::setPossessionStatus()
     * @uses TrackDetail::setShipperAddress()
     * @uses TrackDetail::setOriginLocationAddress()
     * @uses TrackDetail::setOriginStationId()
     * @uses TrackDetail::setEstimatedPickupTimestamp()
     * @uses TrackDetail::setShipTimestamp()
     * @uses TrackDetail::setTotalTransitDistance()
     * @uses TrackDetail::setDistanceToDestination()
     * @uses TrackDetail::setSpecialInstructions()
     * @uses TrackDetail::setRecipient()
     * @uses TrackDetail::setLastUpdatedDestinationAddress()
     * @uses TrackDetail::setDestinationAddress()
     * @uses TrackDetail::setHoldAtLocationContact()
     * @uses TrackDetail::setHoldAtLocationAddress()
     * @uses TrackDetail::setDestinationStationId()
     * @uses TrackDetail::setDestinationLocationAddress()
     * @uses TrackDetail::setDestinationLocationType()
     * @uses TrackDetail::setDestinationLocationTimeZoneOffset()
     * @uses TrackDetail::setCommitmentTimestamp()
     * @uses TrackDetail::setAppointmentDeliveryTimestamp()
     * @uses TrackDetail::setEstimatedDeliveryTimestamp()
     * @uses TrackDetail::setActualDeliveryTimestamp()
     * @uses TrackDetail::setActualDeliveryAddress()
     * @uses TrackDetail::setOfficeOrderDeliveryMethod()
     * @uses TrackDetail::setDeliveryLocationType()
     * @uses TrackDetail::setDeliveryLocationDescription()
     * @uses TrackDetail::setDeliveryAttempts()
     * @uses TrackDetail::setDeliverySignatureName()
     * @uses TrackDetail::setPieceCountVerificationDetails()
     * @uses TrackDetail::setTotalUniqueAddressCountInConsolidation()
     * @uses TrackDetail::setAvailableImages()
     * @uses TrackDetail::setSignature()
     * @uses TrackDetail::setNotificationEventsAvailable()
     * @uses TrackDetail::setSplitShipmentParts()
     * @uses TrackDetail::setDeliveryOptionEligibilityDetails()
     * @uses TrackDetail::setEvents()
     * @param \Arkitecht\FedEx\Structs\Notification $notification
     * @param string $trackingNumber
     * @param \Arkitecht\FedEx\Structs\StringBarcode $barcode
     * @param string $trackingNumberUniqueIdentifier
     * @param \Arkitecht\FedEx\Structs\TrackStatusDetail $statusDetail
     * @param \Arkitecht\FedEx\Structs\CustomerExceptionRequestDetail
     * $customerExceptionRequests
     * @param \Arkitecht\FedEx\Structs\TrackReconciliation $reconciliation
     * @param string $serviceCommitMessage
     * @param string $destinationServiceArea
     * @param string $destinationServiceAreaDescription
     * @param string $carrierCode
     * @param string $operatingCompany
     * @param string $operatingCompanyOrCarrierDescription
     * @param string $cartageAgentCompanyName
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress
     * $productionLocationContactAndAddress
     * @param \Arkitecht\FedEx\Structs\TrackOtherIdentifierDetail $otherIdentifiers
     * @param string $formId
     * @param \Arkitecht\FedEx\Structs\TrackServiceDescriptionDetail $service
     * @param \Arkitecht\FedEx\Structs\Weight $packageWeight
     * @param \Arkitecht\FedEx\Structs\Dimensions $packageDimensions
     * @param \Arkitecht\FedEx\Structs\Weight $packageDimensionalWeight
     * @param \Arkitecht\FedEx\Structs\Weight $shipmentWeight
     * @param string $packaging
     * @param string $packagingType
     * @param nonNegativeInteger $packageSequenceNumber
     * @param nonNegativeInteger $packageCount
     * @param \Arkitecht\FedEx\Structs\TrackChargeDetail $charges
     * @param string $nickName
     * @param string $notes
     * @param string $attributes
     * @param \Arkitecht\FedEx\Structs\ContentRecord $shipmentContents
     * @param string $packageContents
     * @param string $clearanceLocationCode
     * @param \Arkitecht\FedEx\Structs\Commodity $commodities
     * @param \Arkitecht\FedEx\Structs\TrackReturnDetail $returnDetail
     * @param \Arkitecht\FedEx\Structs\CustomsOptionDetail $customsOptionDetails
     * @param \Arkitecht\FedEx\Structs\TrackAdvanceNotificationDetail
     * $advanceNotificationDetail
     * @param \Arkitecht\FedEx\Structs\TrackSpecialHandling $specialHandlings
     * @param \Arkitecht\FedEx\Structs\Contact $shipper
     * @param string $possessionStatus
     * @param \Arkitecht\FedEx\Structs\Address $shipperAddress
     * @param \Arkitecht\FedEx\Structs\Address $originLocationAddress
     * @param string $originStationId
     * @param dateTime $estimatedPickupTimestamp
     * @param dateTime $shipTimestamp
     * @param \Arkitecht\FedEx\Structs\Distance $totalTransitDistance
     * @param \Arkitecht\FedEx\Structs\Distance $distanceToDestination
     * @param \Arkitecht\FedEx\Structs\TrackSpecialInstruction $specialInstructions
     * @param \Arkitecht\FedEx\Structs\Contact $recipient
     * @param \Arkitecht\FedEx\Structs\Address $lastUpdatedDestinationAddress
     * @param \Arkitecht\FedEx\Structs\Address $destinationAddress
     * @param \Arkitecht\FedEx\Structs\Contact $holdAtLocationContact
     * @param \Arkitecht\FedEx\Structs\Address $holdAtLocationAddress
     * @param string $destinationStationId
     * @param \Arkitecht\FedEx\Structs\Address $destinationLocationAddress
     * @param string $destinationLocationType
     * @param string $destinationLocationTimeZoneOffset
     * @param dateTime $commitmentTimestamp
     * @param dateTime $appointmentDeliveryTimestamp
     * @param dateTime $estimatedDeliveryTimestamp
     * @param dateTime $actualDeliveryTimestamp
     * @param \Arkitecht\FedEx\Structs\Address $actualDeliveryAddress
     * @param string $officeOrderDeliveryMethod
     * @param string $deliveryLocationType
     * @param string $deliveryLocationDescription
     * @param nonNegativeInteger $deliveryAttempts
     * @param string $deliverySignatureName
     * @param \Arkitecht\FedEx\Structs\PieceCountVerificationDetail
     * $pieceCountVerificationDetails
     * @param nonNegativeInteger $totalUniqueAddressCountInConsolidation
     * @param string $availableImages
     * @param \Arkitecht\FedEx\Structs\SignatureImageDetail $signature
     * @param string $notificationEventsAvailable
     * @param \Arkitecht\FedEx\Structs\TrackSplitShipmentPart $splitShipmentParts
     * @param \Arkitecht\FedEx\Structs\DeliveryOptionEligibilityDetail
     * $deliveryOptionEligibilityDetails
     * @param \Arkitecht\FedEx\Structs\TrackEvent $events
     */
    public function __construct(\Arkitecht\FedEx\Structs\Notification $notification = null, $trackingNumber = null, \Arkitecht\FedEx\Structs\StringBarcode $barcode = null, $trackingNumberUniqueIdentifier = null, \Arkitecht\FedEx\Structs\TrackStatusDetail $statusDetail = null, \Arkitecht\FedEx\Structs\CustomerExceptionRequestDetail $customerExceptionRequests = null, \Arkitecht\FedEx\Structs\TrackReconciliation $reconciliation = null, $serviceCommitMessage = null, $destinationServiceArea = null, $destinationServiceAreaDescription = null, $carrierCode = null, $operatingCompany = null, $operatingCompanyOrCarrierDescription = null, $cartageAgentCompanyName = null, \Arkitecht\FedEx\Structs\ContactAndAddress $productionLocationContactAndAddress = null, \Arkitecht\FedEx\Structs\TrackOtherIdentifierDetail $otherIdentifiers = null, $formId = null, \Arkitecht\FedEx\Structs\TrackServiceDescriptionDetail $service = null, \Arkitecht\FedEx\Structs\Weight $packageWeight = null, \Arkitecht\FedEx\Structs\Dimensions $packageDimensions = null, \Arkitecht\FedEx\Structs\Weight $packageDimensionalWeight = null, \Arkitecht\FedEx\Structs\Weight $shipmentWeight = null, $packaging = null, $packagingType = null, $packageSequenceNumber = null, $packageCount = null, \Arkitecht\FedEx\Structs\TrackChargeDetail $charges = null, $nickName = null, $notes = null, $attributes = null, \Arkitecht\FedEx\Structs\ContentRecord $shipmentContents = null, $packageContents = null, $clearanceLocationCode = null, \Arkitecht\FedEx\Structs\Commodity $commodities = null, \Arkitecht\FedEx\Structs\TrackReturnDetail $returnDetail = null, \Arkitecht\FedEx\Structs\CustomsOptionDetail $customsOptionDetails = null, \Arkitecht\FedEx\Structs\TrackAdvanceNotificationDetail $advanceNotificationDetail = null, \Arkitecht\FedEx\Structs\TrackSpecialHandling $specialHandlings = null, \Arkitecht\FedEx\Structs\Contact $shipper = null, $possessionStatus = null, \Arkitecht\FedEx\Structs\Address $shipperAddress = null, \Arkitecht\FedEx\Structs\Address $originLocationAddress = null, $originStationId = null, $estimatedPickupTimestamp = null, $shipTimestamp = null, \Arkitecht\FedEx\Structs\Distance $totalTransitDistance = null, \Arkitecht\FedEx\Structs\Distance $distanceToDestination = null, \Arkitecht\FedEx\Structs\TrackSpecialInstruction $specialInstructions = null, \Arkitecht\FedEx\Structs\Contact $recipient = null, \Arkitecht\FedEx\Structs\Address $lastUpdatedDestinationAddress = null, \Arkitecht\FedEx\Structs\Address $destinationAddress = null, \Arkitecht\FedEx\Structs\Contact $holdAtLocationContact = null, \Arkitecht\FedEx\Structs\Address $holdAtLocationAddress = null, $destinationStationId = null, \Arkitecht\FedEx\Structs\Address $destinationLocationAddress = null, $destinationLocationType = null, $destinationLocationTimeZoneOffset = null, $commitmentTimestamp = null, $appointmentDeliveryTimestamp = null, $estimatedDeliveryTimestamp = null, $actualDeliveryTimestamp = null, \Arkitecht\FedEx\Structs\Address $actualDeliveryAddress = null, $officeOrderDeliveryMethod = null, $deliveryLocationType = null, $deliveryLocationDescription = null, $deliveryAttempts = null, $deliverySignatureName = null, \Arkitecht\FedEx\Structs\PieceCountVerificationDetail $pieceCountVerificationDetails = null, $totalUniqueAddressCountInConsolidation = null, $availableImages = null, \Arkitecht\FedEx\Structs\SignatureImageDetail $signature = null, $notificationEventsAvailable = null, \Arkitecht\FedEx\Structs\TrackSplitShipmentPart $splitShipmentParts = null, \Arkitecht\FedEx\Structs\DeliveryOptionEligibilityDetail $deliveryOptionEligibilityDetails = null, \Arkitecht\FedEx\Structs\TrackEvent $events = null)
    {
        $this
            ->setNotification($notification)
            ->setTrackingNumber($trackingNumber)
            ->setBarcode($barcode)
            ->setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
            ->setStatusDetail($statusDetail)
            ->setCustomerExceptionRequests($customerExceptionRequests)
            ->setReconciliation($reconciliation)
            ->setServiceCommitMessage($serviceCommitMessage)
            ->setDestinationServiceArea($destinationServiceArea)
            ->setDestinationServiceAreaDescription($destinationServiceAreaDescription)
            ->setCarrierCode($carrierCode)
            ->setOperatingCompany($operatingCompany)
            ->setOperatingCompanyOrCarrierDescription($operatingCompanyOrCarrierDescription)
            ->setCartageAgentCompanyName($cartageAgentCompanyName)
            ->setProductionLocationContactAndAddress($productionLocationContactAndAddress)
            ->setOtherIdentifiers($otherIdentifiers)
            ->setFormId($formId)
            ->setService($service)
            ->setPackageWeight($packageWeight)
            ->setPackageDimensions($packageDimensions)
            ->setPackageDimensionalWeight($packageDimensionalWeight)
            ->setShipmentWeight($shipmentWeight)
            ->setPackaging($packaging)
            ->setPackagingType($packagingType)
            ->setPackageSequenceNumber($packageSequenceNumber)
            ->setPackageCount($packageCount)
            ->setCharges($charges)
            ->setNickName($nickName)
            ->setNotes($notes)
            ->setAttributes($attributes)
            ->setShipmentContents($shipmentContents)
            ->setPackageContents($packageContents)
            ->setClearanceLocationCode($clearanceLocationCode)
            ->setCommodities($commodities)
            ->setReturnDetail($returnDetail)
            ->setCustomsOptionDetails($customsOptionDetails)
            ->setAdvanceNotificationDetail($advanceNotificationDetail)
            ->setSpecialHandlings($specialHandlings)
            ->setShipper($shipper)
            ->setPossessionStatus($possessionStatus)
            ->setShipperAddress($shipperAddress)
            ->setOriginLocationAddress($originLocationAddress)
            ->setOriginStationId($originStationId)
            ->setEstimatedPickupTimestamp($estimatedPickupTimestamp)
            ->setShipTimestamp($shipTimestamp)
            ->setTotalTransitDistance($totalTransitDistance)
            ->setDistanceToDestination($distanceToDestination)
            ->setSpecialInstructions($specialInstructions)
            ->setRecipient($recipient)
            ->setLastUpdatedDestinationAddress($lastUpdatedDestinationAddress)
            ->setDestinationAddress($destinationAddress)
            ->setHoldAtLocationContact($holdAtLocationContact)
            ->setHoldAtLocationAddress($holdAtLocationAddress)
            ->setDestinationStationId($destinationStationId)
            ->setDestinationLocationAddress($destinationLocationAddress)
            ->setDestinationLocationType($destinationLocationType)
            ->setDestinationLocationTimeZoneOffset($destinationLocationTimeZoneOffset)
            ->setCommitmentTimestamp($commitmentTimestamp)
            ->setAppointmentDeliveryTimestamp($appointmentDeliveryTimestamp)
            ->setEstimatedDeliveryTimestamp($estimatedDeliveryTimestamp)
            ->setActualDeliveryTimestamp($actualDeliveryTimestamp)
            ->setActualDeliveryAddress($actualDeliveryAddress)
            ->setOfficeOrderDeliveryMethod($officeOrderDeliveryMethod)
            ->setDeliveryLocationType($deliveryLocationType)
            ->setDeliveryLocationDescription($deliveryLocationDescription)
            ->setDeliveryAttempts($deliveryAttempts)
            ->setDeliverySignatureName($deliverySignatureName)
            ->setPieceCountVerificationDetails($pieceCountVerificationDetails)
            ->setTotalUniqueAddressCountInConsolidation($totalUniqueAddressCountInConsolidation)
            ->setAvailableImages($availableImages)
            ->setSignature($signature)
            ->setNotificationEventsAvailable($notificationEventsAvailable)
            ->setSplitShipmentParts($splitShipmentParts)
            ->setDeliveryOptionEligibilityDetails($deliveryOptionEligibilityDetails)
            ->setEvents($events);
    }
    /**
     * Get Notification value
     * @return \Arkitecht\FedEx\Structs\Notification|null
     */
    public function getNotification()
    {
        return $this->Notification;
    }
    /**
     * Set Notification value
     * @param \Arkitecht\FedEx\Structs\Notification $notification
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setNotification(\Arkitecht\FedEx\Structs\Notification $notification = null)
    {
        $this->Notification = $notification;
        return $this;
    }
    /**
     * Get TrackingNumber value
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    /**
     * Set TrackingNumber value
     * @param string $trackingNumber
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Get Barcode value
     * @return \Arkitecht\FedEx\Structs\StringBarcode|null
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }
    /**
     * Set Barcode value
     * @param \Arkitecht\FedEx\Structs\StringBarcode $barcode
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setBarcode(\Arkitecht\FedEx\Structs\StringBarcode $barcode = null)
    {
        $this->Barcode = $barcode;
        return $this;
    }
    /**
     * Get TrackingNumberUniqueIdentifier value
     * @return string|null
     */
    public function getTrackingNumberUniqueIdentifier()
    {
        return $this->TrackingNumberUniqueIdentifier;
    }
    /**
     * Set TrackingNumberUniqueIdentifier value
     * @param string $trackingNumberUniqueIdentifier
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier = null)
    {
        $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
        return $this;
    }
    /**
     * Get StatusDetail value
     * @return \Arkitecht\FedEx\Structs\TrackStatusDetail|null
     */
    public function getStatusDetail()
    {
        return $this->StatusDetail;
    }
    /**
     * Set StatusDetail value
     * @param \Arkitecht\FedEx\Structs\TrackStatusDetail $statusDetail
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setStatusDetail(\Arkitecht\FedEx\Structs\TrackStatusDetail $statusDetail = null)
    {
        $this->StatusDetail = $statusDetail;
        return $this;
    }
    /**
     * Get CustomerExceptionRequests value
     * @return \Arkitecht\FedEx\Structs\CustomerExceptionRequestDetail|null
     */
    public function getCustomerExceptionRequests()
    {
        return $this->CustomerExceptionRequests;
    }
    /**
     * Set CustomerExceptionRequests value
     * @param \Arkitecht\FedEx\Structs\CustomerExceptionRequestDetail
     * $customerExceptionRequests
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setCustomerExceptionRequests(\Arkitecht\FedEx\Structs\CustomerExceptionRequestDetail $customerExceptionRequests = null)
    {
        $this->CustomerExceptionRequests = $customerExceptionRequests;
        return $this;
    }
    /**
     * Get Reconciliation value
     * @return \Arkitecht\FedEx\Structs\TrackReconciliation|null
     */
    public function getReconciliation()
    {
        return $this->Reconciliation;
    }
    /**
     * Set Reconciliation value
     * @param \Arkitecht\FedEx\Structs\TrackReconciliation $reconciliation
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setReconciliation(\Arkitecht\FedEx\Structs\TrackReconciliation $reconciliation = null)
    {
        $this->Reconciliation = $reconciliation;
        return $this;
    }
    /**
     * Get ServiceCommitMessage value
     * @return string|null
     */
    public function getServiceCommitMessage()
    {
        return $this->ServiceCommitMessage;
    }
    /**
     * Set ServiceCommitMessage value
     * @param string $serviceCommitMessage
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setServiceCommitMessage($serviceCommitMessage = null)
    {
        $this->ServiceCommitMessage = $serviceCommitMessage;
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
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setDestinationServiceArea($destinationServiceArea = null)
    {
        $this->DestinationServiceArea = $destinationServiceArea;
        return $this;
    }
    /**
     * Get DestinationServiceAreaDescription value
     * @return string|null
     */
    public function getDestinationServiceAreaDescription()
    {
        return $this->DestinationServiceAreaDescription;
    }
    /**
     * Set DestinationServiceAreaDescription value
     * @param string $destinationServiceAreaDescription
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setDestinationServiceAreaDescription($destinationServiceAreaDescription = null)
    {
        $this->DestinationServiceAreaDescription = $destinationServiceAreaDescription;
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @uses \Arkitecht\FedEx\Enums\CarrierCodeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\CarrierCodeType::getValidValues()
     * @param string $carrierCode
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setCarrierCode($carrierCode = null)
    {
        if (!\Arkitecht\FedEx\Enums\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \Arkitecht\FedEx\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get OperatingCompany value
     * @return string|null
     */
    public function getOperatingCompany()
    {
        return $this->OperatingCompany;
    }
    /**
     * Set OperatingCompany value
     * @uses \Arkitecht\FedEx\Enums\OperatingCompanyType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\OperatingCompanyType::getValidValues()
     * @param string $operatingCompany
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setOperatingCompany($operatingCompany = null)
    {
        if (!\Arkitecht\FedEx\Enums\OperatingCompanyType::valueIsValid($operatingCompany)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $operatingCompany, implode(', ', \Arkitecht\FedEx\Enums\OperatingCompanyType::getValidValues())), __LINE__);
        }
        $this->OperatingCompany = $operatingCompany;
        return $this;
    }
    /**
     * Get OperatingCompanyOrCarrierDescription value
     * @return string|null
     */
    public function getOperatingCompanyOrCarrierDescription()
    {
        return $this->OperatingCompanyOrCarrierDescription;
    }
    /**
     * Set OperatingCompanyOrCarrierDescription value
     * @param string $operatingCompanyOrCarrierDescription
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setOperatingCompanyOrCarrierDescription($operatingCompanyOrCarrierDescription = null)
    {
        $this->OperatingCompanyOrCarrierDescription = $operatingCompanyOrCarrierDescription;
        return $this;
    }
    /**
     * Get CartageAgentCompanyName value
     * @return string|null
     */
    public function getCartageAgentCompanyName()
    {
        return $this->CartageAgentCompanyName;
    }
    /**
     * Set CartageAgentCompanyName value
     * @param string $cartageAgentCompanyName
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setCartageAgentCompanyName($cartageAgentCompanyName = null)
    {
        $this->CartageAgentCompanyName = $cartageAgentCompanyName;
        return $this;
    }
    /**
     * Get ProductionLocationContactAndAddress value
     * @return \Arkitecht\FedEx\Structs\ContactAndAddress|null
     */
    public function getProductionLocationContactAndAddress()
    {
        return $this->ProductionLocationContactAndAddress;
    }
    /**
     * Set ProductionLocationContactAndAddress value
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress
     * $productionLocationContactAndAddress
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setProductionLocationContactAndAddress(\Arkitecht\FedEx\Structs\ContactAndAddress $productionLocationContactAndAddress = null)
    {
        $this->ProductionLocationContactAndAddress = $productionLocationContactAndAddress;
        return $this;
    }
    /**
     * Get OtherIdentifiers value
     * @return \Arkitecht\FedEx\Structs\TrackOtherIdentifierDetail|null
     */
    public function getOtherIdentifiers()
    {
        return $this->OtherIdentifiers;
    }
    /**
     * Set OtherIdentifiers value
     * @param \Arkitecht\FedEx\Structs\TrackOtherIdentifierDetail $otherIdentifiers
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setOtherIdentifiers(\Arkitecht\FedEx\Structs\TrackOtherIdentifierDetail $otherIdentifiers = null)
    {
        $this->OtherIdentifiers = $otherIdentifiers;
        return $this;
    }
    /**
     * Get FormId value
     * @return string|null
     */
    public function getFormId()
    {
        return $this->FormId;
    }
    /**
     * Set FormId value
     * @param string $formId
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setFormId($formId = null)
    {
        $this->FormId = $formId;
        return $this;
    }
    /**
     * Get Service value
     * @return \Arkitecht\FedEx\Structs\TrackServiceDescriptionDetail|null
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @param \Arkitecht\FedEx\Structs\TrackServiceDescriptionDetail $service
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setService(\Arkitecht\FedEx\Structs\TrackServiceDescriptionDetail $service = null)
    {
        $this->Service = $service;
        return $this;
    }
    /**
     * Get PackageWeight value
     * @return \Arkitecht\FedEx\Structs\Weight|null
     */
    public function getPackageWeight()
    {
        return $this->PackageWeight;
    }
    /**
     * Set PackageWeight value
     * @param \Arkitecht\FedEx\Structs\Weight $packageWeight
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setPackageWeight(\Arkitecht\FedEx\Structs\Weight $packageWeight = null)
    {
        $this->PackageWeight = $packageWeight;
        return $this;
    }
    /**
     * Get PackageDimensions value
     * @return \Arkitecht\FedEx\Structs\Dimensions|null
     */
    public function getPackageDimensions()
    {
        return $this->PackageDimensions;
    }
    /**
     * Set PackageDimensions value
     * @param \Arkitecht\FedEx\Structs\Dimensions $packageDimensions
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setPackageDimensions(\Arkitecht\FedEx\Structs\Dimensions $packageDimensions = null)
    {
        $this->PackageDimensions = $packageDimensions;
        return $this;
    }
    /**
     * Get PackageDimensionalWeight value
     * @return \Arkitecht\FedEx\Structs\Weight|null
     */
    public function getPackageDimensionalWeight()
    {
        return $this->PackageDimensionalWeight;
    }
    /**
     * Set PackageDimensionalWeight value
     * @param \Arkitecht\FedEx\Structs\Weight $packageDimensionalWeight
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setPackageDimensionalWeight(\Arkitecht\FedEx\Structs\Weight $packageDimensionalWeight = null)
    {
        $this->PackageDimensionalWeight = $packageDimensionalWeight;
        return $this;
    }
    /**
     * Get ShipmentWeight value
     * @return \Arkitecht\FedEx\Structs\Weight|null
     */
    public function getShipmentWeight()
    {
        return $this->ShipmentWeight;
    }
    /**
     * Set ShipmentWeight value
     * @param \Arkitecht\FedEx\Structs\Weight $shipmentWeight
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setShipmentWeight(\Arkitecht\FedEx\Structs\Weight $shipmentWeight = null)
    {
        $this->ShipmentWeight = $shipmentWeight;
        return $this;
    }
    /**
     * Get Packaging value
     * @return string|null
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    /**
     * Set Packaging value
     * @param string $packaging
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setPackaging($packaging = null)
    {
        $this->Packaging = $packaging;
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
     * @return \Arkitecht\FedEx\Structs\TrackDetail
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
     * Get PackageSequenceNumber value
     * @return nonNegativeInteger|null
     */
    public function getPackageSequenceNumber()
    {
        return $this->PackageSequenceNumber;
    }
    /**
     * Set PackageSequenceNumber value
     * @param nonNegativeInteger $packageSequenceNumber
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setPackageSequenceNumber($packageSequenceNumber = null)
    {
        $this->PackageSequenceNumber = $packageSequenceNumber;
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
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setPackageCount($packageCount = null)
    {
        $this->PackageCount = $packageCount;
        return $this;
    }
    /**
     * Get Charges value
     * @return \Arkitecht\FedEx\Structs\TrackChargeDetail|null
     */
    public function getCharges()
    {
        return $this->Charges;
    }
    /**
     * Set Charges value
     * @param \Arkitecht\FedEx\Structs\TrackChargeDetail $charges
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setCharges(\Arkitecht\FedEx\Structs\TrackChargeDetail $charges = null)
    {
        $this->Charges = $charges;
        return $this;
    }
    /**
     * Get NickName value
     * @return string|null
     */
    public function getNickName()
    {
        return $this->NickName;
    }
    /**
     * Set NickName value
     * @param string $nickName
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setNickName($nickName = null)
    {
        $this->NickName = $nickName;
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setNotes($notes = null)
    {
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Get Attributes value
     * @return string|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @uses \Arkitecht\FedEx\Enums\TrackDetailAttributeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\TrackDetailAttributeType::getValidValues()
     * @param string $attributes
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setAttributes($attributes = null)
    {
        if (!\Arkitecht\FedEx\Enums\TrackDetailAttributeType::valueIsValid($attributes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $attributes, implode(', ', \Arkitecht\FedEx\Enums\TrackDetailAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Get ShipmentContents value
     * @return \Arkitecht\FedEx\Structs\ContentRecord|null
     */
    public function getShipmentContents()
    {
        return $this->ShipmentContents;
    }
    /**
     * Set ShipmentContents value
     * @param \Arkitecht\FedEx\Structs\ContentRecord $shipmentContents
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setShipmentContents(\Arkitecht\FedEx\Structs\ContentRecord $shipmentContents = null)
    {
        $this->ShipmentContents = $shipmentContents;
        return $this;
    }
    /**
     * Get PackageContents value
     * @return string|null
     */
    public function getPackageContents()
    {
        return $this->PackageContents;
    }
    /**
     * Set PackageContents value
     * @param string $packageContents
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setPackageContents($packageContents = null)
    {
        $this->PackageContents = $packageContents;
        return $this;
    }
    /**
     * Get ClearanceLocationCode value
     * @return string|null
     */
    public function getClearanceLocationCode()
    {
        return $this->ClearanceLocationCode;
    }
    /**
     * Set ClearanceLocationCode value
     * @param string $clearanceLocationCode
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setClearanceLocationCode($clearanceLocationCode = null)
    {
        $this->ClearanceLocationCode = $clearanceLocationCode;
        return $this;
    }
    /**
     * Get Commodities value
     * @return \Arkitecht\FedEx\Structs\Commodity|null
     */
    public function getCommodities()
    {
        return $this->Commodities;
    }
    /**
     * Set Commodities value
     * @param \Arkitecht\FedEx\Structs\Commodity $commodities
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setCommodities(\Arkitecht\FedEx\Structs\Commodity $commodities = null)
    {
        $this->Commodities = $commodities;
        return $this;
    }
    /**
     * Get ReturnDetail value
     * @return \Arkitecht\FedEx\Structs\TrackReturnDetail|null
     */
    public function getReturnDetail()
    {
        return $this->ReturnDetail;
    }
    /**
     * Set ReturnDetail value
     * @param \Arkitecht\FedEx\Structs\TrackReturnDetail $returnDetail
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setReturnDetail(\Arkitecht\FedEx\Structs\TrackReturnDetail $returnDetail = null)
    {
        $this->ReturnDetail = $returnDetail;
        return $this;
    }
    /**
     * Get CustomsOptionDetails value
     * @return \Arkitecht\FedEx\Structs\CustomsOptionDetail|null
     */
    public function getCustomsOptionDetails()
    {
        return $this->CustomsOptionDetails;
    }
    /**
     * Set CustomsOptionDetails value
     * @param \Arkitecht\FedEx\Structs\CustomsOptionDetail $customsOptionDetails
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setCustomsOptionDetails(\Arkitecht\FedEx\Structs\CustomsOptionDetail $customsOptionDetails = null)
    {
        $this->CustomsOptionDetails = $customsOptionDetails;
        return $this;
    }
    /**
     * Get AdvanceNotificationDetail value
     * @return \Arkitecht\FedEx\Structs\TrackAdvanceNotificationDetail|null
     */
    public function getAdvanceNotificationDetail()
    {
        return $this->AdvanceNotificationDetail;
    }
    /**
     * Set AdvanceNotificationDetail value
     * @param \Arkitecht\FedEx\Structs\TrackAdvanceNotificationDetail
     * $advanceNotificationDetail
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setAdvanceNotificationDetail(\Arkitecht\FedEx\Structs\TrackAdvanceNotificationDetail $advanceNotificationDetail = null)
    {
        $this->AdvanceNotificationDetail = $advanceNotificationDetail;
        return $this;
    }
    /**
     * Get SpecialHandlings value
     * @return \Arkitecht\FedEx\Structs\TrackSpecialHandling|null
     */
    public function getSpecialHandlings()
    {
        return $this->SpecialHandlings;
    }
    /**
     * Set SpecialHandlings value
     * @param \Arkitecht\FedEx\Structs\TrackSpecialHandling $specialHandlings
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setSpecialHandlings(\Arkitecht\FedEx\Structs\TrackSpecialHandling $specialHandlings = null)
    {
        $this->SpecialHandlings = $specialHandlings;
        return $this;
    }
    /**
     * Get Shipper value
     * @return \Arkitecht\FedEx\Structs\Contact|null
     */
    public function getShipper()
    {
        return $this->Shipper;
    }
    /**
     * Set Shipper value
     * @param \Arkitecht\FedEx\Structs\Contact $shipper
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setShipper(\Arkitecht\FedEx\Structs\Contact $shipper = null)
    {
        $this->Shipper = $shipper;
        return $this;
    }
    /**
     * Get PossessionStatus value
     * @return string|null
     */
    public function getPossessionStatus()
    {
        return $this->PossessionStatus;
    }
    /**
     * Set PossessionStatus value
     * @uses \Arkitecht\FedEx\Enums\TrackPossessionStatusType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\TrackPossessionStatusType::getValidValues()
     * @param string $possessionStatus
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setPossessionStatus($possessionStatus = null)
    {
        if (!\Arkitecht\FedEx\Enums\TrackPossessionStatusType::valueIsValid($possessionStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $possessionStatus, implode(', ', \Arkitecht\FedEx\Enums\TrackPossessionStatusType::getValidValues())), __LINE__);
        }
        $this->PossessionStatus = $possessionStatus;
        return $this;
    }
    /**
     * Get ShipperAddress value
     * @return \Arkitecht\FedEx\Structs\Address|null
     */
    public function getShipperAddress()
    {
        return $this->ShipperAddress;
    }
    /**
     * Set ShipperAddress value
     * @param \Arkitecht\FedEx\Structs\Address $shipperAddress
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setShipperAddress(\Arkitecht\FedEx\Structs\Address $shipperAddress = null)
    {
        $this->ShipperAddress = $shipperAddress;
        return $this;
    }
    /**
     * Get OriginLocationAddress value
     * @return \Arkitecht\FedEx\Structs\Address|null
     */
    public function getOriginLocationAddress()
    {
        return $this->OriginLocationAddress;
    }
    /**
     * Set OriginLocationAddress value
     * @param \Arkitecht\FedEx\Structs\Address $originLocationAddress
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setOriginLocationAddress(\Arkitecht\FedEx\Structs\Address $originLocationAddress = null)
    {
        $this->OriginLocationAddress = $originLocationAddress;
        return $this;
    }
    /**
     * Get OriginStationId value
     * @return string|null
     */
    public function getOriginStationId()
    {
        return $this->OriginStationId;
    }
    /**
     * Set OriginStationId value
     * @param string $originStationId
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setOriginStationId($originStationId = null)
    {
        $this->OriginStationId = $originStationId;
        return $this;
    }
    /**
     * Get EstimatedPickupTimestamp value
     * @return dateTime|null
     */
    public function getEstimatedPickupTimestamp()
    {
        return $this->EstimatedPickupTimestamp;
    }
    /**
     * Set EstimatedPickupTimestamp value
     * @param dateTime $estimatedPickupTimestamp
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setEstimatedPickupTimestamp($estimatedPickupTimestamp = null)
    {
        $this->EstimatedPickupTimestamp = $estimatedPickupTimestamp;
        return $this;
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
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setShipTimestamp($shipTimestamp = null)
    {
        $this->ShipTimestamp = $shipTimestamp;
        return $this;
    }
    /**
     * Get TotalTransitDistance value
     * @return \Arkitecht\FedEx\Structs\Distance|null
     */
    public function getTotalTransitDistance()
    {
        return $this->TotalTransitDistance;
    }
    /**
     * Set TotalTransitDistance value
     * @param \Arkitecht\FedEx\Structs\Distance $totalTransitDistance
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setTotalTransitDistance(\Arkitecht\FedEx\Structs\Distance $totalTransitDistance = null)
    {
        $this->TotalTransitDistance = $totalTransitDistance;
        return $this;
    }
    /**
     * Get DistanceToDestination value
     * @return \Arkitecht\FedEx\Structs\Distance|null
     */
    public function getDistanceToDestination()
    {
        return $this->DistanceToDestination;
    }
    /**
     * Set DistanceToDestination value
     * @param \Arkitecht\FedEx\Structs\Distance $distanceToDestination
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setDistanceToDestination(\Arkitecht\FedEx\Structs\Distance $distanceToDestination = null)
    {
        $this->DistanceToDestination = $distanceToDestination;
        return $this;
    }
    /**
     * Get SpecialInstructions value
     * @return \Arkitecht\FedEx\Structs\TrackSpecialInstruction|null
     */
    public function getSpecialInstructions()
    {
        return $this->SpecialInstructions;
    }
    /**
     * Set SpecialInstructions value
     * @param \Arkitecht\FedEx\Structs\TrackSpecialInstruction $specialInstructions
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setSpecialInstructions(\Arkitecht\FedEx\Structs\TrackSpecialInstruction $specialInstructions = null)
    {
        $this->SpecialInstructions = $specialInstructions;
        return $this;
    }
    /**
     * Get Recipient value
     * @return \Arkitecht\FedEx\Structs\Contact|null
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \Arkitecht\FedEx\Structs\Contact $recipient
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setRecipient(\Arkitecht\FedEx\Structs\Contact $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get LastUpdatedDestinationAddress value
     * @return \Arkitecht\FedEx\Structs\Address|null
     */
    public function getLastUpdatedDestinationAddress()
    {
        return $this->LastUpdatedDestinationAddress;
    }
    /**
     * Set LastUpdatedDestinationAddress value
     * @param \Arkitecht\FedEx\Structs\Address $lastUpdatedDestinationAddress
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setLastUpdatedDestinationAddress(\Arkitecht\FedEx\Structs\Address $lastUpdatedDestinationAddress = null)
    {
        $this->LastUpdatedDestinationAddress = $lastUpdatedDestinationAddress;
        return $this;
    }
    /**
     * Get DestinationAddress value
     * @return \Arkitecht\FedEx\Structs\Address|null
     */
    public function getDestinationAddress()
    {
        return $this->DestinationAddress;
    }
    /**
     * Set DestinationAddress value
     * @param \Arkitecht\FedEx\Structs\Address $destinationAddress
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setDestinationAddress(\Arkitecht\FedEx\Structs\Address $destinationAddress = null)
    {
        $this->DestinationAddress = $destinationAddress;
        return $this;
    }
    /**
     * Get HoldAtLocationContact value
     * @return \Arkitecht\FedEx\Structs\Contact|null
     */
    public function getHoldAtLocationContact()
    {
        return $this->HoldAtLocationContact;
    }
    /**
     * Set HoldAtLocationContact value
     * @param \Arkitecht\FedEx\Structs\Contact $holdAtLocationContact
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setHoldAtLocationContact(\Arkitecht\FedEx\Structs\Contact $holdAtLocationContact = null)
    {
        $this->HoldAtLocationContact = $holdAtLocationContact;
        return $this;
    }
    /**
     * Get HoldAtLocationAddress value
     * @return \Arkitecht\FedEx\Structs\Address|null
     */
    public function getHoldAtLocationAddress()
    {
        return $this->HoldAtLocationAddress;
    }
    /**
     * Set HoldAtLocationAddress value
     * @param \Arkitecht\FedEx\Structs\Address $holdAtLocationAddress
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setHoldAtLocationAddress(\Arkitecht\FedEx\Structs\Address $holdAtLocationAddress = null)
    {
        $this->HoldAtLocationAddress = $holdAtLocationAddress;
        return $this;
    }
    /**
     * Get DestinationStationId value
     * @return string|null
     */
    public function getDestinationStationId()
    {
        return $this->DestinationStationId;
    }
    /**
     * Set DestinationStationId value
     * @param string $destinationStationId
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setDestinationStationId($destinationStationId = null)
    {
        $this->DestinationStationId = $destinationStationId;
        return $this;
    }
    /**
     * Get DestinationLocationAddress value
     * @return \Arkitecht\FedEx\Structs\Address|null
     */
    public function getDestinationLocationAddress()
    {
        return $this->DestinationLocationAddress;
    }
    /**
     * Set DestinationLocationAddress value
     * @param \Arkitecht\FedEx\Structs\Address $destinationLocationAddress
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setDestinationLocationAddress(\Arkitecht\FedEx\Structs\Address $destinationLocationAddress = null)
    {
        $this->DestinationLocationAddress = $destinationLocationAddress;
        return $this;
    }
    /**
     * Get DestinationLocationType value
     * @return string|null
     */
    public function getDestinationLocationType()
    {
        return $this->DestinationLocationType;
    }
    /**
     * Set DestinationLocationType value
     * @uses \Arkitecht\FedEx\Enums\FedExLocationType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\FedExLocationType::getValidValues()
     * @param string $destinationLocationType
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setDestinationLocationType($destinationLocationType = null)
    {
        if (!\Arkitecht\FedEx\Enums\FedExLocationType::valueIsValid($destinationLocationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $destinationLocationType, implode(', ', \Arkitecht\FedEx\Enums\FedExLocationType::getValidValues())), __LINE__);
        }
        $this->DestinationLocationType = $destinationLocationType;
        return $this;
    }
    /**
     * Get DestinationLocationTimeZoneOffset value
     * @return string|null
     */
    public function getDestinationLocationTimeZoneOffset()
    {
        return $this->DestinationLocationTimeZoneOffset;
    }
    /**
     * Set DestinationLocationTimeZoneOffset value
     * @param string $destinationLocationTimeZoneOffset
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setDestinationLocationTimeZoneOffset($destinationLocationTimeZoneOffset = null)
    {
        $this->DestinationLocationTimeZoneOffset = $destinationLocationTimeZoneOffset;
        return $this;
    }
    /**
     * Get CommitmentTimestamp value
     * @return dateTime|null
     */
    public function getCommitmentTimestamp()
    {
        return $this->CommitmentTimestamp;
    }
    /**
     * Set CommitmentTimestamp value
     * @param dateTime $commitmentTimestamp
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setCommitmentTimestamp($commitmentTimestamp = null)
    {
        $this->CommitmentTimestamp = $commitmentTimestamp;
        return $this;
    }
    /**
     * Get AppointmentDeliveryTimestamp value
     * @return dateTime|null
     */
    public function getAppointmentDeliveryTimestamp()
    {
        return $this->AppointmentDeliveryTimestamp;
    }
    /**
     * Set AppointmentDeliveryTimestamp value
     * @param dateTime $appointmentDeliveryTimestamp
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setAppointmentDeliveryTimestamp($appointmentDeliveryTimestamp = null)
    {
        $this->AppointmentDeliveryTimestamp = $appointmentDeliveryTimestamp;
        return $this;
    }
    /**
     * Get EstimatedDeliveryTimestamp value
     * @return dateTime|null
     */
    public function getEstimatedDeliveryTimestamp()
    {
        return $this->EstimatedDeliveryTimestamp;
    }
    /**
     * Set EstimatedDeliveryTimestamp value
     * @param dateTime $estimatedDeliveryTimestamp
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setEstimatedDeliveryTimestamp($estimatedDeliveryTimestamp = null)
    {
        $this->EstimatedDeliveryTimestamp = $estimatedDeliveryTimestamp;
        return $this;
    }
    /**
     * Get ActualDeliveryTimestamp value
     * @return dateTime|null
     */
    public function getActualDeliveryTimestamp()
    {
        return $this->ActualDeliveryTimestamp;
    }
    /**
     * Set ActualDeliveryTimestamp value
     * @param dateTime $actualDeliveryTimestamp
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setActualDeliveryTimestamp($actualDeliveryTimestamp = null)
    {
        $this->ActualDeliveryTimestamp = $actualDeliveryTimestamp;
        return $this;
    }
    /**
     * Get ActualDeliveryAddress value
     * @return \Arkitecht\FedEx\Structs\Address|null
     */
    public function getActualDeliveryAddress()
    {
        return $this->ActualDeliveryAddress;
    }
    /**
     * Set ActualDeliveryAddress value
     * @param \Arkitecht\FedEx\Structs\Address $actualDeliveryAddress
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setActualDeliveryAddress(\Arkitecht\FedEx\Structs\Address $actualDeliveryAddress = null)
    {
        $this->ActualDeliveryAddress = $actualDeliveryAddress;
        return $this;
    }
    /**
     * Get OfficeOrderDeliveryMethod value
     * @return string|null
     */
    public function getOfficeOrderDeliveryMethod()
    {
        return $this->OfficeOrderDeliveryMethod;
    }
    /**
     * Set OfficeOrderDeliveryMethod value
     * @uses \Arkitecht\FedEx\Enums\OfficeOrderDeliveryMethodType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\OfficeOrderDeliveryMethodType::getValidValues()
     * @param string $officeOrderDeliveryMethod
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setOfficeOrderDeliveryMethod($officeOrderDeliveryMethod = null)
    {
        if (!\Arkitecht\FedEx\Enums\OfficeOrderDeliveryMethodType::valueIsValid($officeOrderDeliveryMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $officeOrderDeliveryMethod, implode(', ', \Arkitecht\FedEx\Enums\OfficeOrderDeliveryMethodType::getValidValues())), __LINE__);
        }
        $this->OfficeOrderDeliveryMethod = $officeOrderDeliveryMethod;
        return $this;
    }
    /**
     * Get DeliveryLocationType value
     * @return string|null
     */
    public function getDeliveryLocationType()
    {
        return $this->DeliveryLocationType;
    }
    /**
     * Set DeliveryLocationType value
     * @uses \Arkitecht\FedEx\Enums\TrackDeliveryLocationType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\TrackDeliveryLocationType::getValidValues()
     * @param string $deliveryLocationType
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setDeliveryLocationType($deliveryLocationType = null)
    {
        if (!\Arkitecht\FedEx\Enums\TrackDeliveryLocationType::valueIsValid($deliveryLocationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryLocationType, implode(', ', \Arkitecht\FedEx\Enums\TrackDeliveryLocationType::getValidValues())), __LINE__);
        }
        $this->DeliveryLocationType = $deliveryLocationType;
        return $this;
    }
    /**
     * Get DeliveryLocationDescription value
     * @return string|null
     */
    public function getDeliveryLocationDescription()
    {
        return $this->DeliveryLocationDescription;
    }
    /**
     * Set DeliveryLocationDescription value
     * @param string $deliveryLocationDescription
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setDeliveryLocationDescription($deliveryLocationDescription = null)
    {
        $this->DeliveryLocationDescription = $deliveryLocationDescription;
        return $this;
    }
    /**
     * Get DeliveryAttempts value
     * @return nonNegativeInteger|null
     */
    public function getDeliveryAttempts()
    {
        return $this->DeliveryAttempts;
    }
    /**
     * Set DeliveryAttempts value
     * @param nonNegativeInteger $deliveryAttempts
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setDeliveryAttempts($deliveryAttempts = null)
    {
        $this->DeliveryAttempts = $deliveryAttempts;
        return $this;
    }
    /**
     * Get DeliverySignatureName value
     * @return string|null
     */
    public function getDeliverySignatureName()
    {
        return $this->DeliverySignatureName;
    }
    /**
     * Set DeliverySignatureName value
     * @param string $deliverySignatureName
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setDeliverySignatureName($deliverySignatureName = null)
    {
        $this->DeliverySignatureName = $deliverySignatureName;
        return $this;
    }
    /**
     * Get PieceCountVerificationDetails value
     * @return \Arkitecht\FedEx\Structs\PieceCountVerificationDetail|null
     */
    public function getPieceCountVerificationDetails()
    {
        return $this->PieceCountVerificationDetails;
    }
    /**
     * Set PieceCountVerificationDetails value
     * @param \Arkitecht\FedEx\Structs\PieceCountVerificationDetail
     * $pieceCountVerificationDetails
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setPieceCountVerificationDetails(\Arkitecht\FedEx\Structs\PieceCountVerificationDetail $pieceCountVerificationDetails = null)
    {
        $this->PieceCountVerificationDetails = $pieceCountVerificationDetails;
        return $this;
    }
    /**
     * Get TotalUniqueAddressCountInConsolidation value
     * @return nonNegativeInteger|null
     */
    public function getTotalUniqueAddressCountInConsolidation()
    {
        return $this->TotalUniqueAddressCountInConsolidation;
    }
    /**
     * Set TotalUniqueAddressCountInConsolidation value
     * @param nonNegativeInteger $totalUniqueAddressCountInConsolidation
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setTotalUniqueAddressCountInConsolidation($totalUniqueAddressCountInConsolidation = null)
    {
        $this->TotalUniqueAddressCountInConsolidation = $totalUniqueAddressCountInConsolidation;
        return $this;
    }
    /**
     * Get AvailableImages value
     * @return string|null
     */
    public function getAvailableImages()
    {
        return $this->AvailableImages;
    }
    /**
     * Set AvailableImages value
     * @uses \Arkitecht\FedEx\Enums\AvailableImageType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\AvailableImageType::getValidValues()
     * @param string $availableImages
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setAvailableImages($availableImages = null)
    {
        if (!\Arkitecht\FedEx\Enums\AvailableImageType::valueIsValid($availableImages)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $availableImages, implode(', ', \Arkitecht\FedEx\Enums\AvailableImageType::getValidValues())), __LINE__);
        }
        $this->AvailableImages = $availableImages;
        return $this;
    }
    /**
     * Get Signature value
     * @return \Arkitecht\FedEx\Structs\SignatureImageDetail|null
     */
    public function getSignature()
    {
        return $this->Signature;
    }
    /**
     * Set Signature value
     * @param \Arkitecht\FedEx\Structs\SignatureImageDetail $signature
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setSignature(\Arkitecht\FedEx\Structs\SignatureImageDetail $signature = null)
    {
        $this->Signature = $signature;
        return $this;
    }
    /**
     * Get NotificationEventsAvailable value
     * @return string|null
     */
    public function getNotificationEventsAvailable()
    {
        return $this->NotificationEventsAvailable;
    }
    /**
     * Set NotificationEventsAvailable value
     * @uses \Arkitecht\FedEx\Enums\EMailNotificationEventType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\EMailNotificationEventType::getValidValues()
     * @param string $notificationEventsAvailable
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setNotificationEventsAvailable($notificationEventsAvailable = null)
    {
        if (!\Arkitecht\FedEx\Enums\EMailNotificationEventType::valueIsValid($notificationEventsAvailable)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $notificationEventsAvailable, implode(', ', \Arkitecht\FedEx\Enums\EMailNotificationEventType::getValidValues())), __LINE__);
        }
        $this->NotificationEventsAvailable = $notificationEventsAvailable;
        return $this;
    }
    /**
     * Get SplitShipmentParts value
     * @return \Arkitecht\FedEx\Structs\TrackSplitShipmentPart|null
     */
    public function getSplitShipmentParts()
    {
        return $this->SplitShipmentParts;
    }
    /**
     * Set SplitShipmentParts value
     * @param \Arkitecht\FedEx\Structs\TrackSplitShipmentPart $splitShipmentParts
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setSplitShipmentParts(\Arkitecht\FedEx\Structs\TrackSplitShipmentPart $splitShipmentParts = null)
    {
        $this->SplitShipmentParts = $splitShipmentParts;
        return $this;
    }
    /**
     * Get DeliveryOptionEligibilityDetails value
     * @return \Arkitecht\FedEx\Structs\DeliveryOptionEligibilityDetail|null
     */
    public function getDeliveryOptionEligibilityDetails()
    {
        return $this->DeliveryOptionEligibilityDetails;
    }
    /**
     * Set DeliveryOptionEligibilityDetails value
     * @param \Arkitecht\FedEx\Structs\DeliveryOptionEligibilityDetail
     * $deliveryOptionEligibilityDetails
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setDeliveryOptionEligibilityDetails(\Arkitecht\FedEx\Structs\DeliveryOptionEligibilityDetail $deliveryOptionEligibilityDetails = null)
    {
        $this->DeliveryOptionEligibilityDetails = $deliveryOptionEligibilityDetails;
        return $this;
    }
    /**
     * Get Events value
     * @return \Arkitecht\FedEx\Structs\TrackEvent|null
     */
    public function getEvents()
    {
        return $this->Events;
    }
    /**
     * Set Events value
     * @param \Arkitecht\FedEx\Structs\TrackEvent $events
     * @return \Arkitecht\FedEx\Structs\TrackDetail
     */
    public function setEvents(\Arkitecht\FedEx\Structs\TrackEvent $events = null)
    {
        $this->Events = $events;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TrackDetail
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
