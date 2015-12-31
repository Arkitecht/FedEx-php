<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentSpecialServicesRequested Structs
 * Meta informations extracted from the WSDL
 * - documentation: These special services are available at the shipment level for some or all service types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must
 * be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 * @subpackage Structs
 */
class ShipmentSpecialServicesRequested extends AbstractStructBase
{
    /**
     * The SpecialServiceTypes
     * Meta informations extracted from the WSDL
     * - documentation: The types of all special services requested for the enclosing shipment (or other shipment-level transaction).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Identifies the collection of special service offered by FedEx. BROKER_SELECT_OPTION should be used for Express shipments only.
     * @var string
     */
    public $SpecialServiceTypes;
    /**
     * The CodDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment. This element is required when SpecialServiceType.COD is present in the SpecialServiceTypes collection.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CodDetail
     */
    public $CodDetail;
    /**
     * The DeliveryOnInvoiceAcceptanceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\DeliveryOnInvoiceAcceptanceDetail
     */
    public $DeliveryOnInvoiceAcceptanceDetail;
    /**
     * The HoldAtLocationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data required for a FedEx shipment that is to be held at the destination FedEx location for pickup by the recipient. This element is required when SpecialServiceType.HOLD_AT_LOCATION is present in the SpecialServiceTypes
     * collection.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\HoldAtLocationDetail
     */
    public $HoldAtLocationDetail;
    /**
     * The EMailNotificationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data required for FedEx to provide email notification to the customer regarding the shipment. This element is required when SpecialServiceType.EMAIL_NOTIFICATION is present in the SpecialServiceTypes collection.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\EMailNotificationDetail
     */
    public $EMailNotificationDetail;
    /**
     * The ReturnShipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: The descriptive data required for FedEx Printed Return Label. This element is required when SpecialServiceType.PRINTED_RETURN_LABEL is present in the SpecialServiceTypes collection
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ReturnShipmentDetail
     */
    public $ReturnShipmentDetail;
    /**
     * The PendingShipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: This field should be populated for pending shipments (e.g. e-mail label) It is required by a PENDING_SHIPMENT special service type.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\PendingShipmentDetail
     */
    public $PendingShipmentDetail;
    /**
     * The InternationalControlledExportDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\InternationalControlledExportDetail
     */
    public $InternationalControlledExportDetail;
    /**
     * The InternationalTrafficInArmsRegulationsDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\InternationalTrafficInArmsRegulationsDetail
     */
    public $InternationalTrafficInArmsRegulationsDetail;
    /**
     * The ShipmentDryIceDetail
     * Meta informations extracted from the WSDL
     * - documentation: Number of packages in this shipment which contain dry ice and the total weight of the dry ice for this shipment.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ShipmentDryIceDetail
     */
    public $ShipmentDryIceDetail;
    /**
     * The HomeDeliveryPremiumDetail
     * Meta informations extracted from the WSDL
     * - documentation: The descriptive data required for FedEx Home Delivery options. This element is required when SpecialServiceType.HOME_DELIVERY_PREMIUM is present in the SpecialServiceTypes collection
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\HomeDeliveryPremiumDetail
     */
    public $HomeDeliveryPremiumDetail;
    /**
     * The FreightGuaranteeDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\FreightGuaranteeDetail
     */
    public $FreightGuaranteeDetail;
    /**
     * The EtdDetail
     * Meta informations extracted from the WSDL
     * - documentation: Electronic Trade document references.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\EtdDetail
     */
    public $EtdDetail;
    /**
     * The CustomDeliveryWindowDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specification for date or range of dates on which delivery is to be attempted.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CustomDeliveryWindowDetail
     */
    public $CustomDeliveryWindowDetail;
    /**
     * Constructor method for ShipmentSpecialServicesRequested
     * @uses ShipmentSpecialServicesRequested::setSpecialServiceTypes()
     * @uses ShipmentSpecialServicesRequested::setCodDetail()
     * @uses ShipmentSpecialServicesRequested::setDeliveryOnInvoiceAcceptanceDetail()
     * @uses ShipmentSpecialServicesRequested::setHoldAtLocationDetail()
     * @uses ShipmentSpecialServicesRequested::setEMailNotificationDetail()
     * @uses ShipmentSpecialServicesRequested::setReturnShipmentDetail()
     * @uses ShipmentSpecialServicesRequested::setPendingShipmentDetail()
     * @uses ShipmentSpecialServicesRequested::setInternationalControlledExportDetail()
     * @uses
     * ShipmentSpecialServicesRequested::setInternationalTrafficInArmsRegulationsDetail
     * ()
     * @uses ShipmentSpecialServicesRequested::setShipmentDryIceDetail()
     * @uses ShipmentSpecialServicesRequested::setHomeDeliveryPremiumDetail()
     * @uses ShipmentSpecialServicesRequested::setFreightGuaranteeDetail()
     * @uses ShipmentSpecialServicesRequested::setEtdDetail()
     * @uses ShipmentSpecialServicesRequested::setCustomDeliveryWindowDetail()
     * @param string $specialServiceTypes
     * @param \Arkitecht\FedEx\Structs\CodDetail $codDetail
     * @param \Arkitecht\FedEx\Structs\DeliveryOnInvoiceAcceptanceDetail
     * $deliveryOnInvoiceAcceptanceDetail
     * @param \Arkitecht\FedEx\Structs\HoldAtLocationDetail $holdAtLocationDetail
     * @param \Arkitecht\FedEx\Structs\EMailNotificationDetail $eMailNotificationDetail
     * @param \Arkitecht\FedEx\Structs\ReturnShipmentDetail $returnShipmentDetail
     * @param \Arkitecht\FedEx\Structs\PendingShipmentDetail $pendingShipmentDetail
     * @param \Arkitecht\FedEx\Structs\InternationalControlledExportDetail
     * $internationalControlledExportDetail
     * @param \Arkitecht\FedEx\Structs\InternationalTrafficInArmsRegulationsDetail
     * $internationalTrafficInArmsRegulationsDetail
     * @param \Arkitecht\FedEx\Structs\ShipmentDryIceDetail $shipmentDryIceDetail
     * @param \Arkitecht\FedEx\Structs\HomeDeliveryPremiumDetail
     * $homeDeliveryPremiumDetail
     * @param \Arkitecht\FedEx\Structs\FreightGuaranteeDetail $freightGuaranteeDetail
     * @param \Arkitecht\FedEx\Structs\EtdDetail $etdDetail
     * @param \Arkitecht\FedEx\Structs\CustomDeliveryWindowDetail
     * $customDeliveryWindowDetail
     */
    public function __construct($specialServiceTypes = null, \Arkitecht\FedEx\Structs\CodDetail $codDetail = null, \Arkitecht\FedEx\Structs\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail = null, \Arkitecht\FedEx\Structs\HoldAtLocationDetail $holdAtLocationDetail = null, \Arkitecht\FedEx\Structs\EMailNotificationDetail $eMailNotificationDetail = null, \Arkitecht\FedEx\Structs\ReturnShipmentDetail $returnShipmentDetail = null, \Arkitecht\FedEx\Structs\PendingShipmentDetail $pendingShipmentDetail = null, \Arkitecht\FedEx\Structs\InternationalControlledExportDetail $internationalControlledExportDetail = null, \Arkitecht\FedEx\Structs\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail = null, \Arkitecht\FedEx\Structs\ShipmentDryIceDetail $shipmentDryIceDetail = null, \Arkitecht\FedEx\Structs\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail = null, \Arkitecht\FedEx\Structs\FreightGuaranteeDetail $freightGuaranteeDetail = null, \Arkitecht\FedEx\Structs\EtdDetail $etdDetail = null, \Arkitecht\FedEx\Structs\CustomDeliveryWindowDetail $customDeliveryWindowDetail = null)
    {
        $this
            ->setSpecialServiceTypes($specialServiceTypes)
            ->setCodDetail($codDetail)
            ->setDeliveryOnInvoiceAcceptanceDetail($deliveryOnInvoiceAcceptanceDetail)
            ->setHoldAtLocationDetail($holdAtLocationDetail)
            ->setEMailNotificationDetail($eMailNotificationDetail)
            ->setReturnShipmentDetail($returnShipmentDetail)
            ->setPendingShipmentDetail($pendingShipmentDetail)
            ->setInternationalControlledExportDetail($internationalControlledExportDetail)
            ->setInternationalTrafficInArmsRegulationsDetail($internationalTrafficInArmsRegulationsDetail)
            ->setShipmentDryIceDetail($shipmentDryIceDetail)
            ->setHomeDeliveryPremiumDetail($homeDeliveryPremiumDetail)
            ->setFreightGuaranteeDetail($freightGuaranteeDetail)
            ->setEtdDetail($etdDetail)
            ->setCustomDeliveryWindowDetail($customDeliveryWindowDetail);
    }
    /**
     * Get SpecialServiceTypes value
     * @return string|null
     */
    public function getSpecialServiceTypes()
    {
        return $this->SpecialServiceTypes;
    }
    /**
     * Set SpecialServiceTypes value
     * @uses \Arkitecht\FedEx\Enums\ShipmentSpecialServiceType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ShipmentSpecialServiceType::getValidValues()
     * @param string $specialServiceTypes
     * @return \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     */
    public function setSpecialServiceTypes($specialServiceTypes = null)
    {
        if (!\Arkitecht\FedEx\Enums\ShipmentSpecialServiceType::valueIsValid($specialServiceTypes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $specialServiceTypes, implode(', ', \Arkitecht\FedEx\Enums\ShipmentSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * Get CodDetail value
     * @return \Arkitecht\FedEx\Structs\CodDetail|null
     */
    public function getCodDetail()
    {
        return $this->CodDetail;
    }
    /**
     * Set CodDetail value
     * @param \Arkitecht\FedEx\Structs\CodDetail $codDetail
     * @return \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     */
    public function setCodDetail(\Arkitecht\FedEx\Structs\CodDetail $codDetail = null)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    /**
     * Get DeliveryOnInvoiceAcceptanceDetail value
     * @return \Arkitecht\FedEx\Structs\DeliveryOnInvoiceAcceptanceDetail|null
     */
    public function getDeliveryOnInvoiceAcceptanceDetail()
    {
        return $this->DeliveryOnInvoiceAcceptanceDetail;
    }
    /**
     * Set DeliveryOnInvoiceAcceptanceDetail value
     * @param \Arkitecht\FedEx\Structs\DeliveryOnInvoiceAcceptanceDetail
     * $deliveryOnInvoiceAcceptanceDetail
     * @return \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     */
    public function setDeliveryOnInvoiceAcceptanceDetail(\Arkitecht\FedEx\Structs\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail = null)
    {
        $this->DeliveryOnInvoiceAcceptanceDetail = $deliveryOnInvoiceAcceptanceDetail;
        return $this;
    }
    /**
     * Get HoldAtLocationDetail value
     * @return \Arkitecht\FedEx\Structs\HoldAtLocationDetail|null
     */
    public function getHoldAtLocationDetail()
    {
        return $this->HoldAtLocationDetail;
    }
    /**
     * Set HoldAtLocationDetail value
     * @param \Arkitecht\FedEx\Structs\HoldAtLocationDetail $holdAtLocationDetail
     * @return \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     */
    public function setHoldAtLocationDetail(\Arkitecht\FedEx\Structs\HoldAtLocationDetail $holdAtLocationDetail = null)
    {
        $this->HoldAtLocationDetail = $holdAtLocationDetail;
        return $this;
    }
    /**
     * Get EMailNotificationDetail value
     * @return \Arkitecht\FedEx\Structs\EMailNotificationDetail|null
     */
    public function getEMailNotificationDetail()
    {
        return $this->EMailNotificationDetail;
    }
    /**
     * Set EMailNotificationDetail value
     * @param \Arkitecht\FedEx\Structs\EMailNotificationDetail $eMailNotificationDetail
     * @return \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     */
    public function setEMailNotificationDetail(\Arkitecht\FedEx\Structs\EMailNotificationDetail $eMailNotificationDetail = null)
    {
        $this->EMailNotificationDetail = $eMailNotificationDetail;
        return $this;
    }
    /**
     * Get ReturnShipmentDetail value
     * @return \Arkitecht\FedEx\Structs\ReturnShipmentDetail|null
     */
    public function getReturnShipmentDetail()
    {
        return $this->ReturnShipmentDetail;
    }
    /**
     * Set ReturnShipmentDetail value
     * @param \Arkitecht\FedEx\Structs\ReturnShipmentDetail $returnShipmentDetail
     * @return \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     */
    public function setReturnShipmentDetail(\Arkitecht\FedEx\Structs\ReturnShipmentDetail $returnShipmentDetail = null)
    {
        $this->ReturnShipmentDetail = $returnShipmentDetail;
        return $this;
    }
    /**
     * Get PendingShipmentDetail value
     * @return \Arkitecht\FedEx\Structs\PendingShipmentDetail|null
     */
    public function getPendingShipmentDetail()
    {
        return $this->PendingShipmentDetail;
    }
    /**
     * Set PendingShipmentDetail value
     * @param \Arkitecht\FedEx\Structs\PendingShipmentDetail $pendingShipmentDetail
     * @return \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     */
    public function setPendingShipmentDetail(\Arkitecht\FedEx\Structs\PendingShipmentDetail $pendingShipmentDetail = null)
    {
        $this->PendingShipmentDetail = $pendingShipmentDetail;
        return $this;
    }
    /**
     * Get InternationalControlledExportDetail value
     * @return \Arkitecht\FedEx\Structs\InternationalControlledExportDetail|null
     */
    public function getInternationalControlledExportDetail()
    {
        return $this->InternationalControlledExportDetail;
    }
    /**
     * Set InternationalControlledExportDetail value
     * @param \Arkitecht\FedEx\Structs\InternationalControlledExportDetail
     * $internationalControlledExportDetail
     * @return \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     */
    public function setInternationalControlledExportDetail(\Arkitecht\FedEx\Structs\InternationalControlledExportDetail $internationalControlledExportDetail = null)
    {
        $this->InternationalControlledExportDetail = $internationalControlledExportDetail;
        return $this;
    }
    /**
     * Get InternationalTrafficInArmsRegulationsDetail value
     * @return
     * \Arkitecht\FedEx\Structs\InternationalTrafficInArmsRegulationsDetail|null
     */
    public function getInternationalTrafficInArmsRegulationsDetail()
    {
        return $this->InternationalTrafficInArmsRegulationsDetail;
    }
    /**
     * Set InternationalTrafficInArmsRegulationsDetail value
     * @param \Arkitecht\FedEx\Structs\InternationalTrafficInArmsRegulationsDetail
     * $internationalTrafficInArmsRegulationsDetail
     * @return \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     */
    public function setInternationalTrafficInArmsRegulationsDetail(\Arkitecht\FedEx\Structs\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail = null)
    {
        $this->InternationalTrafficInArmsRegulationsDetail = $internationalTrafficInArmsRegulationsDetail;
        return $this;
    }
    /**
     * Get ShipmentDryIceDetail value
     * @return \Arkitecht\FedEx\Structs\ShipmentDryIceDetail|null
     */
    public function getShipmentDryIceDetail()
    {
        return $this->ShipmentDryIceDetail;
    }
    /**
     * Set ShipmentDryIceDetail value
     * @param \Arkitecht\FedEx\Structs\ShipmentDryIceDetail $shipmentDryIceDetail
     * @return \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     */
    public function setShipmentDryIceDetail(\Arkitecht\FedEx\Structs\ShipmentDryIceDetail $shipmentDryIceDetail = null)
    {
        $this->ShipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
    /**
     * Get HomeDeliveryPremiumDetail value
     * @return \Arkitecht\FedEx\Structs\HomeDeliveryPremiumDetail|null
     */
    public function getHomeDeliveryPremiumDetail()
    {
        return $this->HomeDeliveryPremiumDetail;
    }
    /**
     * Set HomeDeliveryPremiumDetail value
     * @param \Arkitecht\FedEx\Structs\HomeDeliveryPremiumDetail
     * $homeDeliveryPremiumDetail
     * @return \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     */
    public function setHomeDeliveryPremiumDetail(\Arkitecht\FedEx\Structs\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail = null)
    {
        $this->HomeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
        return $this;
    }
    /**
     * Get FreightGuaranteeDetail value
     * @return \Arkitecht\FedEx\Structs\FreightGuaranteeDetail|null
     */
    public function getFreightGuaranteeDetail()
    {
        return $this->FreightGuaranteeDetail;
    }
    /**
     * Set FreightGuaranteeDetail value
     * @param \Arkitecht\FedEx\Structs\FreightGuaranteeDetail $freightGuaranteeDetail
     * @return \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     */
    public function setFreightGuaranteeDetail(\Arkitecht\FedEx\Structs\FreightGuaranteeDetail $freightGuaranteeDetail = null)
    {
        $this->FreightGuaranteeDetail = $freightGuaranteeDetail;
        return $this;
    }
    /**
     * Get EtdDetail value
     * @return \Arkitecht\FedEx\Structs\EtdDetail|null
     */
    public function getEtdDetail()
    {
        return $this->EtdDetail;
    }
    /**
     * Set EtdDetail value
     * @param \Arkitecht\FedEx\Structs\EtdDetail $etdDetail
     * @return \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     */
    public function setEtdDetail(\Arkitecht\FedEx\Structs\EtdDetail $etdDetail = null)
    {
        $this->EtdDetail = $etdDetail;
        return $this;
    }
    /**
     * Get CustomDeliveryWindowDetail value
     * @return \Arkitecht\FedEx\Structs\CustomDeliveryWindowDetail|null
     */
    public function getCustomDeliveryWindowDetail()
    {
        return $this->CustomDeliveryWindowDetail;
    }
    /**
     * Set CustomDeliveryWindowDetail value
     * @param \Arkitecht\FedEx\Structs\CustomDeliveryWindowDetail
     * $customDeliveryWindowDetail
     * @return \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
     */
    public function setCustomDeliveryWindowDetail(\Arkitecht\FedEx\Structs\CustomDeliveryWindowDetail $customDeliveryWindowDetail = null)
    {
        $this->CustomDeliveryWindowDetail = $customDeliveryWindowDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ShipmentSpecialServicesRequested
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
