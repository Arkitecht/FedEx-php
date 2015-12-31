<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedShipmentDetail Structs
 * @subpackage Structs
 */
class CompletedShipmentDetail extends AbstractStructBase
{
    /**
     * The UsDomestic
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether or not this is a US Domestic shipment.
     * - minOccurs: 0
     * @var boolean
     */
    public $UsDomestic;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the carrier that will be used to deliver this shipment.
     * - minOccurs: 0
     * - documentation: Identification of a FedEx operating company (transportation).
     * @var string
     */
    public $CarrierCode;
    /**
     * The MasterTrackingId
     * Meta informations extracted from the WSDL
     * - documentation: The master tracking number and form id of this multiple piece shipment. This information is to be provided for each subsequent of a multiple piece shipment.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackingId
     */
    public $MasterTrackingId;
    /**
     * The ServiceTypeDescription
     * Meta informations extracted from the WSDL
     * - documentation: Description of the FedEx service used for this shipment. Currently not supported.
     * - minOccurs: 0
     * @var string
     */
    public $ServiceTypeDescription;
    /**
     * The PackagingDescription
     * Meta informations extracted from the WSDL
     * - documentation: Description of the packaging used for this shipment. Currently not supported.
     * - minOccurs: 0
     * @var string
     */
    public $PackagingDescription;
    /**
     * The OperationalDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public $OperationalDetail;
    /**
     * The AccessDetail
     * Meta informations extracted from the WSDL
     * - documentation: Only used with pending shipments.
     * - minOccurs: 0
     * - documentation: This information describes how and when a pending shipment may be accessed for completion.
     * @var \Arkitecht\FedEx\Structs\PendingShipmentAccessDetail
     */
    public $AccessDetail;
    /**
     * The TagDetail
     * Meta informations extracted from the WSDL
     * - documentation: Only used in the reply to tag requests.
     * - minOccurs: 0
     * - documentation: Provides reply information specific to a tag request.
     * @var \Arkitecht\FedEx\Structs\CompletedTagDetail
     */
    public $TagDetail;
    /**
     * The SmartPostDetail
     * Meta informations extracted from the WSDL
     * - documentation: Provides reply information specific to SmartPost shipments.
     * - minOccurs: 0
     * - documentation: Provides reply information specific to SmartPost shipments.
     * @var \Arkitecht\FedEx\Structs\CompletedSmartPostDetail
     */
    public $SmartPostDetail;
    /**
     * The HazardousShipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Computed shipment level information about hazarous commodities.
     * - minOccurs: 0
     * - documentation: Computed shipment level hazardous commodity information.
     * @var \Arkitecht\FedEx\Structs\CompletedHazardousShipmentDetail
     */
    public $HazardousShipmentDetail;
    /**
     * The ShipmentRating
     * Meta informations extracted from the WSDL
     * - documentation: All shipment-level rating data for this shipment, which may include data for multiple rate types.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ShipmentRating
     */
    public $ShipmentRating;
    /**
     * The CompletedHoldAtLocationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Returns the default holding location information when HOLD_AT_LOCATION special service is requested and the client does not specify the hold location address.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CompletedHoldAtLocationDetail
     */
    public $CompletedHoldAtLocationDetail;
    /**
     * The ExportComplianceStatement
     * Meta informations extracted from the WSDL
     * - documentation: Returns any defaults or updates applied to RequestedShipment.exportDetail.exportComplianceStatement.
     * - minOccurs: 0
     * @var string
     */
    public $ExportComplianceStatement;
    /**
     * The CompletedEtdDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CompletedEtdDetail
     */
    public $CompletedEtdDetail;
    /**
     * The ShipmentDocuments
     * Meta informations extracted from the WSDL
     * - documentation: All shipment-level shipping documents (other than labels and barcodes).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: All package-level shipping documents (other than labels and barcodes).
     * @var \Arkitecht\FedEx\Structs\ShippingDocument
     */
    public $ShipmentDocuments;
    /**
     * The AssociatedShipments
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\AssociatedShipmentDetail
     */
    public $AssociatedShipments;
    /**
     * The CompletedCodDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CompletedCodDetail
     */
    public $CompletedCodDetail;
    /**
     * The CompletedPackageDetails
     * Meta informations extracted from the WSDL
     * - documentation: Package level details about this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CompletedPackageDetail
     */
    public $CompletedPackageDetails;
    /**
     * Constructor method for CompletedShipmentDetail
     * @uses CompletedShipmentDetail::setUsDomestic()
     * @uses CompletedShipmentDetail::setCarrierCode()
     * @uses CompletedShipmentDetail::setMasterTrackingId()
     * @uses CompletedShipmentDetail::setServiceTypeDescription()
     * @uses CompletedShipmentDetail::setPackagingDescription()
     * @uses CompletedShipmentDetail::setOperationalDetail()
     * @uses CompletedShipmentDetail::setAccessDetail()
     * @uses CompletedShipmentDetail::setTagDetail()
     * @uses CompletedShipmentDetail::setSmartPostDetail()
     * @uses CompletedShipmentDetail::setHazardousShipmentDetail()
     * @uses CompletedShipmentDetail::setShipmentRating()
     * @uses CompletedShipmentDetail::setCompletedHoldAtLocationDetail()
     * @uses CompletedShipmentDetail::setExportComplianceStatement()
     * @uses CompletedShipmentDetail::setCompletedEtdDetail()
     * @uses CompletedShipmentDetail::setShipmentDocuments()
     * @uses CompletedShipmentDetail::setAssociatedShipments()
     * @uses CompletedShipmentDetail::setCompletedCodDetail()
     * @uses CompletedShipmentDetail::setCompletedPackageDetails()
     * @param boolean $usDomestic
     * @param string $carrierCode
     * @param \Arkitecht\FedEx\Structs\TrackingId $masterTrackingId
     * @param string $serviceTypeDescription
     * @param string $packagingDescription
     * @param \Arkitecht\FedEx\Structs\ShipmentOperationalDetail $operationalDetail
     * @param \Arkitecht\FedEx\Structs\PendingShipmentAccessDetail $accessDetail
     * @param \Arkitecht\FedEx\Structs\CompletedTagDetail $tagDetail
     * @param \Arkitecht\FedEx\Structs\CompletedSmartPostDetail $smartPostDetail
     * @param \Arkitecht\FedEx\Structs\CompletedHazardousShipmentDetail
     * $hazardousShipmentDetail
     * @param \Arkitecht\FedEx\Structs\ShipmentRating $shipmentRating
     * @param \Arkitecht\FedEx\Structs\CompletedHoldAtLocationDetail
     * $completedHoldAtLocationDetail
     * @param string $exportComplianceStatement
     * @param \Arkitecht\FedEx\Structs\CompletedEtdDetail $completedEtdDetail
     * @param \Arkitecht\FedEx\Structs\ShippingDocument $shipmentDocuments
     * @param \Arkitecht\FedEx\Structs\AssociatedShipmentDetail $associatedShipments
     * @param \Arkitecht\FedEx\Structs\CompletedCodDetail $completedCodDetail
     * @param \Arkitecht\FedEx\Structs\CompletedPackageDetail $completedPackageDetails
     */
    public function __construct($usDomestic = null, $carrierCode = null, \Arkitecht\FedEx\Structs\TrackingId $masterTrackingId = null, $serviceTypeDescription = null, $packagingDescription = null, \Arkitecht\FedEx\Structs\ShipmentOperationalDetail $operationalDetail = null, \Arkitecht\FedEx\Structs\PendingShipmentAccessDetail $accessDetail = null, \Arkitecht\FedEx\Structs\CompletedTagDetail $tagDetail = null, \Arkitecht\FedEx\Structs\CompletedSmartPostDetail $smartPostDetail = null, \Arkitecht\FedEx\Structs\CompletedHazardousShipmentDetail $hazardousShipmentDetail = null, \Arkitecht\FedEx\Structs\ShipmentRating $shipmentRating = null, \Arkitecht\FedEx\Structs\CompletedHoldAtLocationDetail $completedHoldAtLocationDetail = null, $exportComplianceStatement = null, \Arkitecht\FedEx\Structs\CompletedEtdDetail $completedEtdDetail = null, \Arkitecht\FedEx\Structs\ShippingDocument $shipmentDocuments = null, \Arkitecht\FedEx\Structs\AssociatedShipmentDetail $associatedShipments = null, \Arkitecht\FedEx\Structs\CompletedCodDetail $completedCodDetail = null, \Arkitecht\FedEx\Structs\CompletedPackageDetail $completedPackageDetails = null)
    {
        $this
            ->setUsDomestic($usDomestic)
            ->setCarrierCode($carrierCode)
            ->setMasterTrackingId($masterTrackingId)
            ->setServiceTypeDescription($serviceTypeDescription)
            ->setPackagingDescription($packagingDescription)
            ->setOperationalDetail($operationalDetail)
            ->setAccessDetail($accessDetail)
            ->setTagDetail($tagDetail)
            ->setSmartPostDetail($smartPostDetail)
            ->setHazardousShipmentDetail($hazardousShipmentDetail)
            ->setShipmentRating($shipmentRating)
            ->setCompletedHoldAtLocationDetail($completedHoldAtLocationDetail)
            ->setExportComplianceStatement($exportComplianceStatement)
            ->setCompletedEtdDetail($completedEtdDetail)
            ->setShipmentDocuments($shipmentDocuments)
            ->setAssociatedShipments($associatedShipments)
            ->setCompletedCodDetail($completedCodDetail)
            ->setCompletedPackageDetails($completedPackageDetails);
    }
    /**
     * Get UsDomestic value
     * @return boolean|null
     */
    public function getUsDomestic()
    {
        return $this->UsDomestic;
    }
    /**
     * Set UsDomestic value
     * @param boolean $usDomestic
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setUsDomestic($usDomestic = null)
    {
        $this->UsDomestic = $usDomestic;
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
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
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
     * Get MasterTrackingId value
     * @return \Arkitecht\FedEx\Structs\TrackingId|null
     */
    public function getMasterTrackingId()
    {
        return $this->MasterTrackingId;
    }
    /**
     * Set MasterTrackingId value
     * @param \Arkitecht\FedEx\Structs\TrackingId $masterTrackingId
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setMasterTrackingId(\Arkitecht\FedEx\Structs\TrackingId $masterTrackingId = null)
    {
        $this->MasterTrackingId = $masterTrackingId;
        return $this;
    }
    /**
     * Get ServiceTypeDescription value
     * @return string|null
     */
    public function getServiceTypeDescription()
    {
        return $this->ServiceTypeDescription;
    }
    /**
     * Set ServiceTypeDescription value
     * @param string $serviceTypeDescription
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setServiceTypeDescription($serviceTypeDescription = null)
    {
        $this->ServiceTypeDescription = $serviceTypeDescription;
        return $this;
    }
    /**
     * Get PackagingDescription value
     * @return string|null
     */
    public function getPackagingDescription()
    {
        return $this->PackagingDescription;
    }
    /**
     * Set PackagingDescription value
     * @param string $packagingDescription
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setPackagingDescription($packagingDescription = null)
    {
        $this->PackagingDescription = $packagingDescription;
        return $this;
    }
    /**
     * Get OperationalDetail value
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail|null
     */
    public function getOperationalDetail()
    {
        return $this->OperationalDetail;
    }
    /**
     * Set OperationalDetail value
     * @param \Arkitecht\FedEx\Structs\ShipmentOperationalDetail $operationalDetail
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setOperationalDetail(\Arkitecht\FedEx\Structs\ShipmentOperationalDetail $operationalDetail = null)
    {
        $this->OperationalDetail = $operationalDetail;
        return $this;
    }
    /**
     * Get AccessDetail value
     * @return \Arkitecht\FedEx\Structs\PendingShipmentAccessDetail|null
     */
    public function getAccessDetail()
    {
        return $this->AccessDetail;
    }
    /**
     * Set AccessDetail value
     * @param \Arkitecht\FedEx\Structs\PendingShipmentAccessDetail $accessDetail
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setAccessDetail(\Arkitecht\FedEx\Structs\PendingShipmentAccessDetail $accessDetail = null)
    {
        $this->AccessDetail = $accessDetail;
        return $this;
    }
    /**
     * Get TagDetail value
     * @return \Arkitecht\FedEx\Structs\CompletedTagDetail|null
     */
    public function getTagDetail()
    {
        return $this->TagDetail;
    }
    /**
     * Set TagDetail value
     * @param \Arkitecht\FedEx\Structs\CompletedTagDetail $tagDetail
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setTagDetail(\Arkitecht\FedEx\Structs\CompletedTagDetail $tagDetail = null)
    {
        $this->TagDetail = $tagDetail;
        return $this;
    }
    /**
     * Get SmartPostDetail value
     * @return \Arkitecht\FedEx\Structs\CompletedSmartPostDetail|null
     */
    public function getSmartPostDetail()
    {
        return $this->SmartPostDetail;
    }
    /**
     * Set SmartPostDetail value
     * @param \Arkitecht\FedEx\Structs\CompletedSmartPostDetail $smartPostDetail
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setSmartPostDetail(\Arkitecht\FedEx\Structs\CompletedSmartPostDetail $smartPostDetail = null)
    {
        $this->SmartPostDetail = $smartPostDetail;
        return $this;
    }
    /**
     * Get HazardousShipmentDetail value
     * @return \Arkitecht\FedEx\Structs\CompletedHazardousShipmentDetail|null
     */
    public function getHazardousShipmentDetail()
    {
        return $this->HazardousShipmentDetail;
    }
    /**
     * Set HazardousShipmentDetail value
     * @param \Arkitecht\FedEx\Structs\CompletedHazardousShipmentDetail
     * $hazardousShipmentDetail
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setHazardousShipmentDetail(\Arkitecht\FedEx\Structs\CompletedHazardousShipmentDetail $hazardousShipmentDetail = null)
    {
        $this->HazardousShipmentDetail = $hazardousShipmentDetail;
        return $this;
    }
    /**
     * Get ShipmentRating value
     * @return \Arkitecht\FedEx\Structs\ShipmentRating|null
     */
    public function getShipmentRating()
    {
        return $this->ShipmentRating;
    }
    /**
     * Set ShipmentRating value
     * @param \Arkitecht\FedEx\Structs\ShipmentRating $shipmentRating
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setShipmentRating(\Arkitecht\FedEx\Structs\ShipmentRating $shipmentRating = null)
    {
        $this->ShipmentRating = $shipmentRating;
        return $this;
    }
    /**
     * Get CompletedHoldAtLocationDetail value
     * @return \Arkitecht\FedEx\Structs\CompletedHoldAtLocationDetail|null
     */
    public function getCompletedHoldAtLocationDetail()
    {
        return $this->CompletedHoldAtLocationDetail;
    }
    /**
     * Set CompletedHoldAtLocationDetail value
     * @param \Arkitecht\FedEx\Structs\CompletedHoldAtLocationDetail
     * $completedHoldAtLocationDetail
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setCompletedHoldAtLocationDetail(\Arkitecht\FedEx\Structs\CompletedHoldAtLocationDetail $completedHoldAtLocationDetail = null)
    {
        $this->CompletedHoldAtLocationDetail = $completedHoldAtLocationDetail;
        return $this;
    }
    /**
     * Get ExportComplianceStatement value
     * @return string|null
     */
    public function getExportComplianceStatement()
    {
        return $this->ExportComplianceStatement;
    }
    /**
     * Set ExportComplianceStatement value
     * @param string $exportComplianceStatement
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setExportComplianceStatement($exportComplianceStatement = null)
    {
        $this->ExportComplianceStatement = $exportComplianceStatement;
        return $this;
    }
    /**
     * Get CompletedEtdDetail value
     * @return \Arkitecht\FedEx\Structs\CompletedEtdDetail|null
     */
    public function getCompletedEtdDetail()
    {
        return $this->CompletedEtdDetail;
    }
    /**
     * Set CompletedEtdDetail value
     * @param \Arkitecht\FedEx\Structs\CompletedEtdDetail $completedEtdDetail
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setCompletedEtdDetail(\Arkitecht\FedEx\Structs\CompletedEtdDetail $completedEtdDetail = null)
    {
        $this->CompletedEtdDetail = $completedEtdDetail;
        return $this;
    }
    /**
     * Get ShipmentDocuments value
     * @return \Arkitecht\FedEx\Structs\ShippingDocument|null
     */
    public function getShipmentDocuments()
    {
        return $this->ShipmentDocuments;
    }
    /**
     * Set ShipmentDocuments value
     * @param \Arkitecht\FedEx\Structs\ShippingDocument $shipmentDocuments
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setShipmentDocuments(\Arkitecht\FedEx\Structs\ShippingDocument $shipmentDocuments = null)
    {
        $this->ShipmentDocuments = $shipmentDocuments;
        return $this;
    }
    /**
     * Get AssociatedShipments value
     * @return \Arkitecht\FedEx\Structs\AssociatedShipmentDetail|null
     */
    public function getAssociatedShipments()
    {
        return $this->AssociatedShipments;
    }
    /**
     * Set AssociatedShipments value
     * @param \Arkitecht\FedEx\Structs\AssociatedShipmentDetail $associatedShipments
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setAssociatedShipments(\Arkitecht\FedEx\Structs\AssociatedShipmentDetail $associatedShipments = null)
    {
        $this->AssociatedShipments = $associatedShipments;
        return $this;
    }
    /**
     * Get CompletedCodDetail value
     * @return \Arkitecht\FedEx\Structs\CompletedCodDetail|null
     */
    public function getCompletedCodDetail()
    {
        return $this->CompletedCodDetail;
    }
    /**
     * Set CompletedCodDetail value
     * @param \Arkitecht\FedEx\Structs\CompletedCodDetail $completedCodDetail
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setCompletedCodDetail(\Arkitecht\FedEx\Structs\CompletedCodDetail $completedCodDetail = null)
    {
        $this->CompletedCodDetail = $completedCodDetail;
        return $this;
    }
    /**
     * Get CompletedPackageDetails value
     * @return \Arkitecht\FedEx\Structs\CompletedPackageDetail|null
     */
    public function getCompletedPackageDetails()
    {
        return $this->CompletedPackageDetails;
    }
    /**
     * Set CompletedPackageDetails value
     * @param \Arkitecht\FedEx\Structs\CompletedPackageDetail $completedPackageDetails
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public function setCompletedPackageDetails(\Arkitecht\FedEx\Structs\CompletedPackageDetail $completedPackageDetails = null)
    {
        $this->CompletedPackageDetails = $completedPackageDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail
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
