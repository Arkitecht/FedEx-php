<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnAssociationDetail Structs
 * @subpackage Structs
 */
class ReturnAssociationDetail extends AbstractStructBase
{
    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the tracking number of the master associated with the return shipment.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumber;
    /**
     * The ShipDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var date
     */
    public $ShipDate;
    /**
     * Constructor method for ReturnAssociationDetail
     * @uses ReturnAssociationDetail::setTrackingNumber()
     * @uses ReturnAssociationDetail::setShipDate()
     * @param string $trackingNumber
     * @param date $shipDate
     */
    public function __construct($trackingNumber = null, $shipDate = null)
    {
        $this
            ->setTrackingNumber($trackingNumber)
            ->setShipDate($shipDate);
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
     * @return \Arkitecht\FedEx\Structs\ReturnAssociationDetail
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
     * @return \Arkitecht\FedEx\Structs\ReturnAssociationDetail
     */
    public function setShipDate($shipDate = null)
    {
        $this->ShipDate = $shipDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ReturnAssociationDetail
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
