<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Volume Structs
 * Meta informations extracted from the WSDL
 * - documentation: Three-dimensional volume/cubic measurement.
 * @subpackage Structs
 */
class Volume extends AbstractStructBase
{
    /**
     * The Units
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Units of three-dimensional volume/cubic measure.
     * @var string
     */
    public $Units;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var decimal
     */
    public $Value;
    /**
     * Constructor method for Volume
     * @uses Volume::setUnits()
     * @uses Volume::setValue()
     * @param string $units
     * @param decimal $value
     */
    public function __construct($units = null, $value = null)
    {
        $this
            ->setUnits($units)
            ->setValue($value);
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
     * @uses \Arkitecht\FedEx\Enums\VolumeUnits::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\VolumeUnits::getValidValues()
     * @param string $units
     * @return \Arkitecht\FedEx\Structs\Volume
     */
    public function setUnits($units = null)
    {
        if (!\Arkitecht\FedEx\Enums\VolumeUnits::valueIsValid($units)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $units, implode(', ', \Arkitecht\FedEx\Enums\VolumeUnits::getValidValues())), __LINE__);
        }
        $this->Units = $units;
        return $this;
    }
    /**
     * Get Value value
     * @return decimal|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param decimal $value
     * @return \Arkitecht\FedEx\Structs\Volume
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\Volume
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
