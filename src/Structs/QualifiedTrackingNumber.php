<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QualifiedTrackingNumber Structs
 * Meta informations extracted from the WSDL
 * - documentation: Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
 * @subpackage Structs
 */
class QualifiedTrackingNumber extends AbstractStructBase
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
     * The ShipDate
     * Meta informations extracted from the WSDL
     * - documentation: The date the package was shipped.
     * - minOccurs: 0
     * @var date
     */
    public $ShipDate;
    /**
     * The AccountNumber
     * Meta informations extracted from the WSDL
     * - documentation: If the account number used to ship the package is provided in the request the shipper and recipient information is included on the letter or fax.
     * - minOccurs: 0
     * @var string
     */
    public $AccountNumber;
    /**
     * The Carrier
     * Meta informations extracted from the WSDL
     * - documentation: FedEx operating company that delivered the package.
     * - minOccurs: 0
     * - documentation: Identification of a FedEx operating company (transportation).
     * @var string
     */
    public $Carrier;
    /**
     * The Destination
     * Meta informations extracted from the WSDL
     * - documentation: Only country is used for elimination of duplicate tracking numbers.
     * - minOccurs: 0
     * - documentation: Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within
     * the US).
     * @var \Arkitecht\FedEx\Structs\Address
     */
    public $Destination;
    /**
     * Constructor method for QualifiedTrackingNumber
     * @uses QualifiedTrackingNumber::setTrackingNumber()
     * @uses QualifiedTrackingNumber::setShipDate()
     * @uses QualifiedTrackingNumber::setAccountNumber()
     * @uses QualifiedTrackingNumber::setCarrier()
     * @uses QualifiedTrackingNumber::setDestination()
     * @param string $trackingNumber
     * @param date $shipDate
     * @param string $accountNumber
     * @param string $carrier
     * @param \Arkitecht\FedEx\Structs\Address $destination
     */
    public function __construct($trackingNumber = null, $shipDate = null, $accountNumber = null, $carrier = null, \Arkitecht\FedEx\Structs\Address $destination = null)
    {
        $this
            ->setTrackingNumber($trackingNumber)
            ->setShipDate($shipDate)
            ->setAccountNumber($accountNumber)
            ->setCarrier($carrier)
            ->setDestination($destination);
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
     * @return \Arkitecht\FedEx\Structs\QualifiedTrackingNumber
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        $this->TrackingNumber = $trackingNumber;
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
     * @return \Arkitecht\FedEx\Structs\QualifiedTrackingNumber
     */
    public function setShipDate($shipDate = null)
    {
        $this->ShipDate = $shipDate;
        return $this;
    }
    /**
     * Get AccountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param string $accountNumber
     * @return \Arkitecht\FedEx\Structs\QualifiedTrackingNumber
     */
    public function setAccountNumber($accountNumber = null)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get Carrier value
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @uses \Arkitecht\FedEx\Enums\CarrierCodeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\CarrierCodeType::getValidValues()
     * @param string $carrier
     * @return \Arkitecht\FedEx\Structs\QualifiedTrackingNumber
     */
    public function setCarrier($carrier = null)
    {
        if (!\Arkitecht\FedEx\Enums\CarrierCodeType::valueIsValid($carrier)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrier, implode(', ', \Arkitecht\FedEx\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->Carrier = $carrier;
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
     * @return \Arkitecht\FedEx\Structs\QualifiedTrackingNumber
     */
    public function setDestination(\Arkitecht\FedEx\Structs\Address $destination = null)
    {
        $this->Destination = $destination;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\QualifiedTrackingNumber
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
