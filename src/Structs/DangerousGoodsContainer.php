<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DangerousGoodsContainer Structs
 * Meta informations extracted from the WSDL
 * - documentation: Describes an approved container used to package dangerous goods commodities. This does not describe any individual inner receptacles that may be within this container.
 * @subpackage Structs
 */
class DangerousGoodsContainer extends AbstractStructBase
{
    /**
     * The PackingType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether there are additional inner receptacles within this container.
     * - minOccurs: 0
     * @var string
     */
    public $PackingType;
    /**
     * The ContainerType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of this dangerous goods container, as specified by the IATA packing instructions. For example, steel cylinder, fiberboard box, plastic jerrican and steel drum.
     * - minOccurs: 0
     * @var string
     */
    public $ContainerType;
    /**
     * The RadioactiveContainerClass
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the packaging type of the container used to package the radioactive materials.
     * - minOccurs: 0
     * - documentation: Indicates the packaging type of the container used to package radioactive hazardous materials.
     * @var string
     */
    public $RadioactiveContainerClass;
    /**
     * The NumberOfContainers
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the number of occurrences of this container with identical dangerous goods configuration.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $NumberOfContainers;
    /**
     * The HazardousCommodities
     * Meta informations extracted from the WSDL
     * - documentation: Documents the kinds and quantities of all hazardous commodities in the current container.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Documents the kind and quantity of an individual hazardous commodity in a package.
     * @var \Arkitecht\FedEx\Structs\HazardousCommodityContent
     */
    public $HazardousCommodities;
    /**
     * Constructor method for DangerousGoodsContainer
     * @uses DangerousGoodsContainer::setPackingType()
     * @uses DangerousGoodsContainer::setContainerType()
     * @uses DangerousGoodsContainer::setRadioactiveContainerClass()
     * @uses DangerousGoodsContainer::setNumberOfContainers()
     * @uses DangerousGoodsContainer::setHazardousCommodities()
     * @param string $packingType
     * @param string $containerType
     * @param string $radioactiveContainerClass
     * @param nonNegativeInteger $numberOfContainers
     * @param \Arkitecht\FedEx\Structs\HazardousCommodityContent $hazardousCommodities
     */
    public function __construct($packingType = null, $containerType = null, $radioactiveContainerClass = null, $numberOfContainers = null, \Arkitecht\FedEx\Structs\HazardousCommodityContent $hazardousCommodities = null)
    {
        $this
            ->setPackingType($packingType)
            ->setContainerType($containerType)
            ->setRadioactiveContainerClass($radioactiveContainerClass)
            ->setNumberOfContainers($numberOfContainers)
            ->setHazardousCommodities($hazardousCommodities);
    }
    /**
     * Get PackingType value
     * @return string|null
     */
    public function getPackingType()
    {
        return $this->PackingType;
    }
    /**
     * Set PackingType value
     * @uses \Arkitecht\FedEx\Enums\HazardousContainerPackingType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\HazardousContainerPackingType::getValidValues()
     * @param string $packingType
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsContainer
     */
    public function setPackingType($packingType = null)
    {
        if (!\Arkitecht\FedEx\Enums\HazardousContainerPackingType::valueIsValid($packingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packingType, implode(', ', \Arkitecht\FedEx\Enums\HazardousContainerPackingType::getValidValues())), __LINE__);
        }
        $this->PackingType = $packingType;
        return $this;
    }
    /**
     * Get ContainerType value
     * @return string|null
     */
    public function getContainerType()
    {
        return $this->ContainerType;
    }
    /**
     * Set ContainerType value
     * @param string $containerType
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsContainer
     */
    public function setContainerType($containerType = null)
    {
        $this->ContainerType = $containerType;
        return $this;
    }
    /**
     * Get RadioactiveContainerClass value
     * @return string|null
     */
    public function getRadioactiveContainerClass()
    {
        return $this->RadioactiveContainerClass;
    }
    /**
     * Set RadioactiveContainerClass value
     * @uses \Arkitecht\FedEx\Enums\RadioactiveContainerClassType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\RadioactiveContainerClassType::getValidValues()
     * @param string $radioactiveContainerClass
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsContainer
     */
    public function setRadioactiveContainerClass($radioactiveContainerClass = null)
    {
        if (!\Arkitecht\FedEx\Enums\RadioactiveContainerClassType::valueIsValid($radioactiveContainerClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $radioactiveContainerClass, implode(', ', \Arkitecht\FedEx\Enums\RadioactiveContainerClassType::getValidValues())), __LINE__);
        }
        $this->RadioactiveContainerClass = $radioactiveContainerClass;
        return $this;
    }
    /**
     * Get NumberOfContainers value
     * @return nonNegativeInteger|null
     */
    public function getNumberOfContainers()
    {
        return $this->NumberOfContainers;
    }
    /**
     * Set NumberOfContainers value
     * @param nonNegativeInteger $numberOfContainers
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsContainer
     */
    public function setNumberOfContainers($numberOfContainers = null)
    {
        $this->NumberOfContainers = $numberOfContainers;
        return $this;
    }
    /**
     * Get HazardousCommodities value
     * @return \Arkitecht\FedEx\Structs\HazardousCommodityContent|null
     */
    public function getHazardousCommodities()
    {
        return $this->HazardousCommodities;
    }
    /**
     * Set HazardousCommodities value
     * @param \Arkitecht\FedEx\Structs\HazardousCommodityContent $hazardousCommodities
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsContainer
     */
    public function setHazardousCommodities(\Arkitecht\FedEx\Structs\HazardousCommodityContent $hazardousCommodities = null)
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
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsContainer
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
