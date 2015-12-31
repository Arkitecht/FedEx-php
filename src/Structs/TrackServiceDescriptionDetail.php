<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackServiceDescriptionDetail Structs
 * @subpackage Structs
 */
class TrackServiceDescriptionDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The service type of the package/shipment.
     * @var string
     */
    public $Type;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The ShortDescription
     * Meta informations extracted from the WSDL
     * - documentation: Specifies a shorter description for the service that is calculated per the service code.
     * - minOccurs: 0
     * @var string
     */
    public $ShortDescription;
    /**
     * Constructor method for TrackServiceDescriptionDetail
     * @uses TrackServiceDescriptionDetail::setType()
     * @uses TrackServiceDescriptionDetail::setDescription()
     * @uses TrackServiceDescriptionDetail::setShortDescription()
     * @param string $type
     * @param string $description
     * @param string $shortDescription
     */
    public function __construct($type = null, $description = null, $shortDescription = null)
    {
        $this
            ->setType($type)
            ->setDescription($description)
            ->setShortDescription($shortDescription);
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
     * @uses \Arkitecht\FedEx\Enums\ServiceType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ServiceType::getValidValues()
     * @param string $type
     * @return \Arkitecht\FedEx\Structs\TrackServiceDescriptionDetail
     */
    public function setType($type = null)
    {
        if (!\Arkitecht\FedEx\Enums\ServiceType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Arkitecht\FedEx\Enums\ServiceType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Arkitecht\FedEx\Structs\TrackServiceDescriptionDetail
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get ShortDescription value
     * @return string|null
     */
    public function getShortDescription()
    {
        return $this->ShortDescription;
    }
    /**
     * Set ShortDescription value
     * @param string $shortDescription
     * @return \Arkitecht\FedEx\Structs\TrackServiceDescriptionDetail
     */
    public function setShortDescription($shortDescription = null)
    {
        $this->ShortDescription = $shortDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TrackServiceDescriptionDetail
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
