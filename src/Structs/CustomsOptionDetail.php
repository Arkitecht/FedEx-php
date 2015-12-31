<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomsOptionDetail Structs
 * @subpackage Structs
 */
class CustomsOptionDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Specifies additional description about customs options. This is a required field when the customs options type is "OTHER".
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for CustomsOptionDetail
     * @uses CustomsOptionDetail::setType()
     * @uses CustomsOptionDetail::setDescription()
     * @param string $type
     * @param string $description
     */
    public function __construct($type = null, $description = null)
    {
        $this
            ->setType($type)
            ->setDescription($description);
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
     * @uses \Arkitecht\FedEx\Enums\CustomsOptionType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\CustomsOptionType::getValidValues()
     * @param string $type
     * @return \Arkitecht\FedEx\Structs\CustomsOptionDetail
     */
    public function setType($type = null)
    {
        if (!\Arkitecht\FedEx\Enums\CustomsOptionType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Arkitecht\FedEx\Enums\CustomsOptionType::getValidValues())), __LINE__);
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
     * @return \Arkitecht\FedEx\Structs\CustomsOptionDetail
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CustomsOptionDetail
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
