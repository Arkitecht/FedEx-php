<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Dimensions Structs
 * @subpackage Structs
 */
class Dimensions extends AbstractStructBase
{
    /**
     * The Length
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $Length;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $Width;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $Height;
    /**
     * The Units
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Units;
    /**
     * Constructor method for Dimensions
     * @uses Dimensions::setLength()
     * @uses Dimensions::setWidth()
     * @uses Dimensions::setHeight()
     * @uses Dimensions::setUnits()
     * @param nonNegativeInteger $length
     * @param nonNegativeInteger $width
     * @param nonNegativeInteger $height
     * @param string $units
     */
    public function __construct($length = null, $width = null, $height = null, $units = null)
    {
        $this
            ->setLength($length)
            ->setWidth($width)
            ->setHeight($height)
            ->setUnits($units);
    }
    /**
     * Get Length value
     * @return nonNegativeInteger|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param nonNegativeInteger $length
     * @return \Arkitecht\FedEx\Structs\Dimensions
     */
    public function setLength($length = null)
    {
        $this->Length = $length;
        return $this;
    }
    /**
     * Get Width value
     * @return nonNegativeInteger|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param nonNegativeInteger $width
     * @return \Arkitecht\FedEx\Structs\Dimensions
     */
    public function setWidth($width = null)
    {
        $this->Width = $width;
        return $this;
    }
    /**
     * Get Height value
     * @return nonNegativeInteger|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param nonNegativeInteger $height
     * @return \Arkitecht\FedEx\Structs\Dimensions
     */
    public function setHeight($height = null)
    {
        $this->Height = $height;
        return $this;
    }
    /**
     * Get Units value
     * @return string|null
     */
    public function getUnits()
    {
        return $this->Units;
    }
    /**
     * Set Units value
     * @uses \Arkitecht\FedEx\Enums\LinearUnits::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\LinearUnits::getValidValues()
     * @param string $units
     * @return \Arkitecht\FedEx\Structs\Dimensions
     */
    public function setUnits($units = null)
    {
        if (!\Arkitecht\FedEx\Enums\LinearUnits::valueIsValid($units)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $units, implode(', ', \Arkitecht\FedEx\Enums\LinearUnits::getValidValues())), __LINE__);
        }
        $this->Units = $units;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\Dimensions
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
