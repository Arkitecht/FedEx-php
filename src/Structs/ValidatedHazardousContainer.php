<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidatedHazardousContainer Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the concept of a container used to package dangerous goods commodities.
 * @subpackage Structs
 */
class ValidatedHazardousContainer extends AbstractStructBase
{
    /**
     * The QValue
     * Meta informations extracted from the WSDL
     * - documentation: Indicates that the quantity of the dangerous goods packaged is permissible for shipping. This is used to ensure that the dangerous goods commodities do not exceed the net quantity per package restrictions.
     * - minOccurs: 0
     * @var decimal
     */
    public $QValue;
    /**
     * The HazardousCommodities
     * Meta informations extracted from the WSDL
     * - documentation: Documents the kinds and quantities of all hazardous commodities in the current package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Documents the kind and quantity of an individual hazardous commodity in a package.
     * @var \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityContent
     */
    public $HazardousCommodities;
    /**
     * Constructor method for ValidatedHazardousContainer
     * @uses ValidatedHazardousContainer::setQValue()
     * @uses ValidatedHazardousContainer::setHazardousCommodities()
     * @param decimal $qValue
     * @param \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityContent
     * $hazardousCommodities
     */
    public function __construct($qValue = null, \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityContent $hazardousCommodities = null)
    {
        $this
            ->setQValue($qValue)
            ->setHazardousCommodities($hazardousCommodities);
    }
    /**
     * Get QValue value
     * @return decimal|null
     */
    public function getQValue()
    {
        return $this->QValue;
    }
    /**
     * Set QValue value
     * @param decimal $qValue
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousContainer
     */
    public function setQValue($qValue = null)
    {
        $this->QValue = $qValue;
        return $this;
    }
    /**
     * Get HazardousCommodities value
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityContent|null
     */
    public function getHazardousCommodities()
    {
        return $this->HazardousCommodities;
    }
    /**
     * Set HazardousCommodities value
     * @param \Arkitecht\FedEx\Structs\ValidatedHazardousCommodityContent
     * $hazardousCommodities
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousContainer
     */
    public function setHazardousCommodities(\Arkitecht\FedEx\Structs\ValidatedHazardousCommodityContent $hazardousCommodities = null)
    {
        $this->HazardousCommodities = $hazardousCommodities;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ValidatedHazardousContainer
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
