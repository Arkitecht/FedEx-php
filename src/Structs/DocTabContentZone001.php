<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocTabContentZone001 Structs
 * @subpackage Structs
 */
class DocTabContentZone001 extends AbstractStructBase
{
    /**
     * The DocTabZoneSpecifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\DocTabZoneSpecification
     */
    public $DocTabZoneSpecifications;
    /**
     * Constructor method for DocTabContentZone001
     * @uses DocTabContentZone001::setDocTabZoneSpecifications()
     * @param \Arkitecht\FedEx\Structs\DocTabZoneSpecification
     * $docTabZoneSpecifications
     */
    public function __construct(\Arkitecht\FedEx\Structs\DocTabZoneSpecification $docTabZoneSpecifications = null)
    {
        $this
            ->setDocTabZoneSpecifications($docTabZoneSpecifications);
    }
    /**
     * Get DocTabZoneSpecifications value
     * @return \Arkitecht\FedEx\Structs\DocTabZoneSpecification|null
     */
    public function getDocTabZoneSpecifications()
    {
        return $this->DocTabZoneSpecifications;
    }
    /**
     * Set DocTabZoneSpecifications value
     * @param \Arkitecht\FedEx\Structs\DocTabZoneSpecification
     * $docTabZoneSpecifications
     * @return \Arkitecht\FedEx\Structs\DocTabContentZone001
     */
    public function setDocTabZoneSpecifications(\Arkitecht\FedEx\Structs\DocTabZoneSpecification $docTabZoneSpecifications = null)
    {
        $this->DocTabZoneSpecifications = $docTabZoneSpecifications;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\DocTabContentZone001
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
