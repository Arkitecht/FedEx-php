<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociatedShipmentDetail Structs
 * @subpackage Structs
 */
class AssociatedShipmentDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Sender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The descriptive data for a person or company entitiy doing business with FedEx.
     * @var \Arkitecht\FedEx\Structs\Party
     */
    public $Sender;
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The descriptive data for a person or company entitiy doing business with FedEx.
     * @var \Arkitecht\FedEx\Structs\Party
     */
    public $Recipient;
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
     * The TrackingId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the tracking id for the payment on the return.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackingId
     */
    public $TrackingId;
    /**
     * The CustomerReferences
     * Meta informations extracted from the WSDL
     * - documentation: Specifies additional customer reference data about the associated shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Reference information to be associated with this package.
     * @var \Arkitecht\FedEx\Structs\CustomerReference
     */
    public $CustomerReferences;
    /**
     * The ShipmentOperationalDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies shipment level operational information.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     */
    public $ShipmentOperationalDetail;
    /**
     * The PackageOperationalDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies package level operational information on the associated shipment. This information is not tied to an individual outbound package.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\PackageOperationalDetail
     */
    public $PackageOperationalDetail;
    /**
     * The Label
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: All package-level shipping documents (other than labels and barcodes).
     * @var \Arkitecht\FedEx\Structs\ShippingDocument
     */
    public $Label;
    /**
     * Constructor method for AssociatedShipmentDetail
     * @uses AssociatedShipmentDetail::setType()
     * @uses AssociatedShipmentDetail::setSender()
     * @uses AssociatedShipmentDetail::setRecipient()
     * @uses AssociatedShipmentDetail::setServiceType()
     * @uses AssociatedShipmentDetail::setPackagingType()
     * @uses AssociatedShipmentDetail::setTrackingId()
     * @uses AssociatedShipmentDetail::setCustomerReferences()
     * @uses AssociatedShipmentDetail::setShipmentOperationalDetail()
     * @uses AssociatedShipmentDetail::setPackageOperationalDetail()
     * @uses AssociatedShipmentDetail::setLabel()
     * @param string $type
     * @param \Arkitecht\FedEx\Structs\Party $sender
     * @param \Arkitecht\FedEx\Structs\Party $recipient
     * @param string $serviceType
     * @param string $packagingType
     * @param \Arkitecht\FedEx\Structs\TrackingId $trackingId
     * @param \Arkitecht\FedEx\Structs\CustomerReference $customerReferences
     * @param \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     * $shipmentOperationalDetail
     * @param \Arkitecht\FedEx\Structs\PackageOperationalDetail
     * $packageOperationalDetail
     * @param \Arkitecht\FedEx\Structs\ShippingDocument $label
     */
    public function __construct($type = null, \Arkitecht\FedEx\Structs\Party $sender = null, \Arkitecht\FedEx\Structs\Party $recipient = null, $serviceType = null, $packagingType = null, \Arkitecht\FedEx\Structs\TrackingId $trackingId = null, \Arkitecht\FedEx\Structs\CustomerReference $customerReferences = null, \Arkitecht\FedEx\Structs\ShipmentOperationalDetail $shipmentOperationalDetail = null, \Arkitecht\FedEx\Structs\PackageOperationalDetail $packageOperationalDetail = null, \Arkitecht\FedEx\Structs\ShippingDocument $label = null)
    {
        $this
            ->setType($type)
            ->setSender($sender)
            ->setRecipient($recipient)
            ->setServiceType($serviceType)
            ->setPackagingType($packagingType)
            ->setTrackingId($trackingId)
            ->setCustomerReferences($customerReferences)
            ->setShipmentOperationalDetail($shipmentOperationalDetail)
            ->setPackageOperationalDetail($packageOperationalDetail)
            ->setLabel($label);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Arkitecht\FedEx\Enums\AssociatedShipmentType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\AssociatedShipmentType::getValidValues()
     * @param string $type
     * @return \Arkitecht\FedEx\Structs\AssociatedShipmentDetail
     */
    public function setType($type = null)
    {
        if (!\Arkitecht\FedEx\Enums\AssociatedShipmentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Arkitecht\FedEx\Enums\AssociatedShipmentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Sender value
     * @return \Arkitecht\FedEx\Structs\Party|null
     */
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \Arkitecht\FedEx\Structs\Party $sender
     * @return \Arkitecht\FedEx\Structs\AssociatedShipmentDetail
     */
    public function setSender(\Arkitecht\FedEx\Structs\Party $sender = null)
    {
        $this->Sender = $sender;
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
     * @return \Arkitecht\FedEx\Structs\AssociatedShipmentDetail
     */
    public function setRecipient(\Arkitecht\FedEx\Structs\Party $recipient = null)
    {
        $this->Recipient = $recipient;
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
     * @return \Arkitecht\FedEx\Structs\AssociatedShipmentDetail
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
     * @return \Arkitecht\FedEx\Structs\AssociatedShipmentDetail
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
     * Get TrackingId value
     * @return \Arkitecht\FedEx\Structs\TrackingId|null
     */
    public function getTrackingId()
    {
        return $this->TrackingId;
    }
    /**
     * Set TrackingId value
     * @param \Arkitecht\FedEx\Structs\TrackingId $trackingId
     * @return \Arkitecht\FedEx\Structs\AssociatedShipmentDetail
     */
    public function setTrackingId(\Arkitecht\FedEx\Structs\TrackingId $trackingId = null)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    /**
     * Get CustomerReferences value
     * @return \Arkitecht\FedEx\Structs\CustomerReference|null
     */
    public function getCustomerReferences()
    {
        return $this->CustomerReferences;
    }
    /**
     * Set CustomerReferences value
     * @param \Arkitecht\FedEx\Structs\CustomerReference $customerReferences
     * @return \Arkitecht\FedEx\Structs\AssociatedShipmentDetail
     */
    public function setCustomerReferences(\Arkitecht\FedEx\Structs\CustomerReference $customerReferences = null)
    {
        $this->CustomerReferences = $customerReferences;
        return $this;
    }
    /**
     * Get ShipmentOperationalDetail value
     * @return \Arkitecht\FedEx\Structs\ShipmentOperationalDetail|null
     */
    public function getShipmentOperationalDetail()
    {
        return $this->ShipmentOperationalDetail;
    }
    /**
     * Set ShipmentOperationalDetail value
     * @param \Arkitecht\FedEx\Structs\ShipmentOperationalDetail
     * $shipmentOperationalDetail
     * @return \Arkitecht\FedEx\Structs\AssociatedShipmentDetail
     */
    public function setShipmentOperationalDetail(\Arkitecht\FedEx\Structs\ShipmentOperationalDetail $shipmentOperationalDetail = null)
    {
        $this->ShipmentOperationalDetail = $shipmentOperationalDetail;
        return $this;
    }
    /**
     * Get PackageOperationalDetail value
     * @return \Arkitecht\FedEx\Structs\PackageOperationalDetail|null
     */
    public function getPackageOperationalDetail()
    {
        return $this->PackageOperationalDetail;
    }
    /**
     * Set PackageOperationalDetail value
     * @param \Arkitecht\FedEx\Structs\PackageOperationalDetail
     * $packageOperationalDetail
     * @return \Arkitecht\FedEx\Structs\AssociatedShipmentDetail
     */
    public function setPackageOperationalDetail(\Arkitecht\FedEx\Structs\PackageOperationalDetail $packageOperationalDetail = null)
    {
        $this->PackageOperationalDetail = $packageOperationalDetail;
        return $this;
    }
    /**
     * Get Label value
     * @return \Arkitecht\FedEx\Structs\ShippingDocument|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param \Arkitecht\FedEx\Structs\ShippingDocument $label
     * @return \Arkitecht\FedEx\Structs\AssociatedShipmentDetail
     */
    public function setLabel(\Arkitecht\FedEx\Structs\ShippingDocument $label = null)
    {
        $this->Label = $label;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\AssociatedShipmentDetail
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
