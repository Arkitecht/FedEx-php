<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomLabelPosition Structs
 * @subpackage Structs
 */
class CustomLabelPosition extends AbstractStructBase
{
    /**
     * The X
     * Meta informations extracted from the WSDL
     * - documentation: Horizontal position, relative to left edge of custom area.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $X;
    /**
     * The Y
     * Meta informations extracted from the WSDL
     * - documentation: Vertical position, relative to top edge of custom area.
     * - minOccurs: 0
     * @var int
     */
    public $Y;
    /**
     * Constructor method for CustomLabelPosition
     * @uses CustomLabelPosition::setX()
     * @uses CustomLabelPosition::setY()
     * @param nonNegativeInteger $x
     * @param int $y
     */
    public function __construct($x = null, $y = null)
    {
        $this
            ->setX($x)
            ->setY($y);
    }
    /**
     * Get X value
     * @return nonNegativeInteger|null
     */
    public function getX()
    {
        return $this->X;
    }
    /**
     * Set X value
     * @param nonNegativeInteger $x
     * @return \Arkitecht\FedEx\Structs\CustomLabelPosition
     */
    public function setX($x = null)
    {
        $this->X = $x;
        return $this;
    }
    /**
     * Get Y value
     * @return int|null
     */
    public function getY()
    {
        return $this->Y;
    }
    /**
     * Set Y value
     * @param int $y
     * @return \Arkitecht\FedEx\Structs\CustomLabelPosition
     */
    public function setY($y = null)
    {
        $this->Y = $y;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CustomLabelPosition
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
