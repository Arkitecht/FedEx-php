<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackNotificationPackage Structs
 * @subpackage Structs
 */
class TrackNotificationPackage extends AbstractStructBase
{
    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: FedEx assigned identifier for a package/shipment.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumber;
    /**
     * The TrackingNumberUniqueIdentifiers
     * Meta informations extracted from the WSDL
     * - documentation: When duplicate tracking numbers exist this data is returned with summary information for each of the duplicates. The summary information is used to determine which of the duplicates the intended tracking number is. This identifier is
     * used on a subsequent track request to retrieve the tracking data for the desired tracking number.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumberUniqueIdentifiers;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: Identification of a FedEx operating company (transportation).
     * - minOccurs: 0
     * - documentation: Identification of a FedEx operating company (transportation).
     * @var string
     */
    public $CarrierCode;
    /**
     * The ShipDate
     * Meta informations extracted from the WSDL
     * - documentation: The date the package was shipped (tendered to FedEx).
     * - minOccurs: 0
     * @var date
     */
    public $ShipDate;
    /**
     * The Destination
     * Meta informations extracted from the WSDL
     * - documentation: The destination address of this package. Only city, state/province, and country are returned.
     * - minOccurs: 0
     * - documentation: Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within
     * the US).
     * @var \Arkitecht\FedEx\Structs\Address
     */
    public $Destination;
    /**
     * The RecipientDetails
     * Meta informations extracted from the WSDL
     * - documentation: Options available for a tracking notification recipient.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Options available for a tracking notification recipient.
     * @var \Arkitecht\FedEx\Structs\TrackNotificationRecipientDetail
     */
    public $RecipientDetails;
    /**
     * Constructor method for TrackNotificationPackage
     * @uses TrackNotificationPackage::setTrackingNumber()
     * @uses TrackNotificationPackage::setTrackingNumberUniqueIdentifiers()
     * @uses TrackNotificationPackage::setCarrierCode()
     * @uses TrackNotificationPackage::setShipDate()
     * @uses TrackNotificationPackage::setDestination()
     * @uses TrackNotificationPackage::setRecipientDetails()
     * @param string $trackingNumber
     * @param string $trackingNumberUniqueIdentifiers
     * @param string $carrierCode
     * @param date $shipDate
     * @param \Arkitecht\FedEx\Structs\Address $destination
     * @param \Arkitecht\FedEx\Structs\TrackNotificationRecipientDetail
     * $recipientDetails
     */
    public function __construct($trackingNumber = null, $trackingNumberUniqueIdentifiers = null, $carrierCode = null, $shipDate = null, \Arkitecht\FedEx\Structs\Address $destination = null, \Arkitecht\FedEx\Structs\TrackNotificationRecipientDetail $recipientDetails = null)
    {
        $this
            ->setTrackingNumber($trackingNumber)
            ->setTrackingNumberUniqueIdentifiers($trackingNumberUniqueIdentifiers)
            ->setCarrierCode($carrierCode)
            ->setShipDate($shipDate)
            ->setDestination($destination)
            ->setRecipientDetails($recipientDetails);
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
     * @return \Arkitecht\FedEx\Structs\TrackNotificationPackage
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Get TrackingNumberUniqueIdentifiers value
     * @return string|null
     */
    public function getTrackingNumberUniqueIdentifiers()
    {
        return $this->TrackingNumberUniqueIdentifiers;
    }
    /**
     * Set TrackingNumberUniqueIdentifiers value
     * @param string $trackingNumberUniqueIdentifiers
     * @return \Arkitecht\FedEx\Structs\TrackNotificationPackage
     */
    public function setTrackingNumberUniqueIdentifiers($trackingNumberUniqueIdentifiers = null)
    {
        $this->TrackingNumberUniqueIdentifiers = $trackingNumberUniqueIdentifiers;
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
     * @return \Arkitecht\FedEx\Structs\TrackNotificationPackage
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
     * Get ShipDate value
     * @return date|null
     */
    public function getShipDate()
    {
        return $this->ShipDate;
    }
    /**
     * Set ShipDate value
     * @param date $shipDate
     * @return \Arkitecht\FedEx\Structs\TrackNotificationPackage
     */
    public function setShipDate($shipDate = null)
    {
        $this->ShipDate = $shipDate;
        return $this;
    }
    /**
     * Get Destination value
     * @return \Arkitecht\FedEx\Structs\Address|null
     */
    public function getDestination()
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param \Arkitecht\FedEx\Structs\Address $destination
     * @return \Arkitecht\FedEx\Structs\TrackNotificationPackage
     */
    public function setDestination(\Arkitecht\FedEx\Structs\Address $destination = null)
    {
        $this->Destination = $destination;
        return $this;
    }
    /**
     * Get RecipientDetails value
     * @return \Arkitecht\FedEx\Structs\TrackNotificationRecipientDetail|null
     */
    public function getRecipientDetails()
    {
        return $this->RecipientDetails;
    }
    /**
     * Set RecipientDetails value
     * @param \Arkitecht\FedEx\Structs\TrackNotificationRecipientDetail
     * $recipientDetails
     * @return \Arkitecht\FedEx\Structs\TrackNotificationPackage
     */
    public function setRecipientDetails(\Arkitecht\FedEx\Structs\TrackNotificationRecipientDetail $recipientDetails = null)
    {
        $this->RecipientDetails = $recipientDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TrackNotificationPackage
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
