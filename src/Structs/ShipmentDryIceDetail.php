<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentDryIceDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Shipment-level totals of dry ice data across all packages.
 * @subpackage Structs
 */
class ShipmentDryIceDetail extends AbstractStructBase
{
    /**
     * The PackageCount
     * Meta informations extracted from the WSDL
     * - documentation: Total number of packages in the shipment that contain dry ice.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $PackageCount;
    /**
     * The TotalWeight
     * Meta informations extracted from the WSDL
     * - documentation: Total shipment dry ice weight for all packages.
     * - minOccurs: 0
     * - documentation: The descriptive data for the heaviness of an object.
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $TotalWeight;
    /**
     * Constructor method for ShipmentDryIceDetail
     * @uses ShipmentDryIceDetail::setPackageCount()
     * @uses ShipmentDryIceDetail::setTotalWeight()
     * @param nonNegativeInteger $packageCount
     * @param \Arkitecht\FedEx\Structs\Weight $totalWeight
     */
    public function __construct($packageCount = null, \Arkitecht\FedEx\Structs\Weight $totalWeight = null)
    {
        $this
            ->setPackageCount($packageCount)
            ->setTotalWeight($totalWeight);
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
     * @return \Arkitecht\FedEx\Structs\ShipmentDryIceDetail
     */
    public function setPackageCount($packageCount = null)
    {
        $this->PackageCount = $packageCount;
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
     * @return \Arkitecht\FedEx\Structs\ShipmentDryIceDetail
     */
    public function setTotalWeight(\Arkitecht\FedEx\Structs\Weight $totalWeight = null)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ShipmentDryIceDetail
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
