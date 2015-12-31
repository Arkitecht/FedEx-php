<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PendingShipmentAccessDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: This information describes how and when a pending shipment may be accessed for completion.
 * @subpackage Structs
 */
class PendingShipmentAccessDetail extends AbstractStructBase
{
    /**
     * The AccessorDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Specifies the details to be used by the user of the pending shipment
     * @var \Arkitecht\FedEx\Structs\PendingShipmentAccessorDetail
     */
    public $AccessorDetails;
    /**
     * Constructor method for PendingShipmentAccessDetail
     * @uses PendingShipmentAccessDetail::setAccessorDetails()
     * @param \Arkitecht\FedEx\Structs\PendingShipmentAccessorDetail $accessorDetails
     */
    public function __construct(\Arkitecht\FedEx\Structs\PendingShipmentAccessorDetail $accessorDetails = null)
    {
        $this
            ->setAccessorDetails($accessorDetails);
    }
    /**
     * Get AccessorDetails value
     * @return \Arkitecht\FedEx\Structs\PendingShipmentAccessorDetail|null
     */
    public function getAccessorDetails()
    {
        return $this->AccessorDetails;
    }
    /**
     * Set AccessorDetails value
     * @param \Arkitecht\FedEx\Structs\PendingShipmentAccessorDetail $accessorDetails
     * @return \Arkitecht\FedEx\Structs\PendingShipmentAccessDetail
     */
    public function setAccessorDetails(\Arkitecht\FedEx\Structs\PendingShipmentAccessorDetail $accessorDetails = null)
    {
        $this->AccessorDetails = $accessorDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\PendingShipmentAccessDetail
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
