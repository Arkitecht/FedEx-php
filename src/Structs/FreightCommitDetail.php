<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightCommitDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Information about the Freight Service Centers associated with this shipment.
 * @subpackage Structs
 */
class FreightCommitDetail extends AbstractStructBase
{
    /**
     * The OriginDetail
     * Meta informations extracted from the WSDL
     * - documentation: Information about the origin Freight Service Center.
     * - minOccurs: 0
     * - documentation: This class describes the relationship between a customer-specified address and the FedEx Freight / FedEx National Freight Service Center that supports that address.
     * @var \Arkitecht\FedEx\Structs\FreightServiceCenterDetail
     */
    public $OriginDetail;
    /**
     * The DestinationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Information about the destination Freight Service Center.
     * - minOccurs: 0
     * - documentation: This class describes the relationship between a customer-specified address and the FedEx Freight / FedEx National Freight Service Center that supports that address.
     * @var \Arkitecht\FedEx\Structs\FreightServiceCenterDetail
     */
    public $DestinationDetail;
    /**
     * The TotalDistance
     * Meta informations extracted from the WSDL
     * - documentation: The distance between the origin and destination FreightService Centers
     * - minOccurs: 0
     * - documentation: Driving or other transportation distances, distinct from dimension measurements.
     * @var \Arkitecht\FedEx\Structs\Distance
     */
    public $TotalDistance;
    /**
     * Constructor method for FreightCommitDetail
     * @uses FreightCommitDetail::setOriginDetail()
     * @uses FreightCommitDetail::setDestinationDetail()
     * @uses FreightCommitDetail::setTotalDistance()
     * @param \Arkitecht\FedEx\Structs\FreightServiceCenterDetail $originDetail
     * @param \Arkitecht\FedEx\Structs\FreightServiceCenterDetail $destinationDetail
     * @param \Arkitecht\FedEx\Structs\Distance $totalDistance
     */
    public function __construct(\Arkitecht\FedEx\Structs\FreightServiceCenterDetail $originDetail = null, \Arkitecht\FedEx\Structs\FreightServiceCenterDetail $destinationDetail = null, \Arkitecht\FedEx\Structs\Distance $totalDistance = null)
    {
        $this
            ->setOriginDetail($originDetail)
            ->setDestinationDetail($destinationDetail)
            ->setTotalDistance($totalDistance);
    }
    /**
     * Get OriginDetail value
     * @return \Arkitecht\FedEx\Structs\FreightServiceCenterDetail|null
     */
    public function getOriginDetail()
    {
        return $this->OriginDetail;
    }
    /**
     * Set OriginDetail value
     * @param \Arkitecht\FedEx\Structs\FreightServiceCenterDetail $originDetail
     * @return \Arkitecht\FedEx\Structs\FreightCommitDetail
     */
    public function setOriginDetail(\Arkitecht\FedEx\Structs\FreightServiceCenterDetail $originDetail = null)
    {
        $this->OriginDetail = $originDetail;
        return $this;
    }
    /**
     * Get DestinationDetail value
     * @return \Arkitecht\FedEx\Structs\FreightServiceCenterDetail|null
     */
    public function getDestinationDetail()
    {
        return $this->DestinationDetail;
    }
    /**
     * Set DestinationDetail value
     * @param \Arkitecht\FedEx\Structs\FreightServiceCenterDetail $destinationDetail
     * @return \Arkitecht\FedEx\Structs\FreightCommitDetail
     */
    public function setDestinationDetail(\Arkitecht\FedEx\Structs\FreightServiceCenterDetail $destinationDetail = null)
    {
        $this->DestinationDetail = $destinationDetail;
        return $this;
    }
    /**
     * Get TotalDistance value
     * @return \Arkitecht\FedEx\Structs\Distance|null
     */
    public function getTotalDistance()
    {
        return $this->TotalDistance;
    }
    /**
     * Set TotalDistance value
     * @param \Arkitecht\FedEx\Structs\Distance $totalDistance
     * @return \Arkitecht\FedEx\Structs\FreightCommitDetail
     */
    public function setTotalDistance(\Arkitecht\FedEx\Structs\Distance $totalDistance = null)
    {
        $this->TotalDistance = $totalDistance;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\FreightCommitDetail
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
