<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightRateNotation Structs
 * Meta informations extracted from the WSDL
 * - documentation: Additional non-monetary data returned with Freight rates.
 * @subpackage Structs
 */
class FreightRateNotation extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for notation.
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable explanation of notation.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for FreightRateNotation
     * @uses FreightRateNotation::setCode()
     * @uses FreightRateNotation::setDescription()
     * @param string $code
     * @param string $description
     */
    public function __construct($code = null, $description = null)
    {
        $this
            ->setCode($code)
            ->setDescription($description);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Arkitecht\FedEx\Structs\FreightRateNotation
     */
    public function setCode($code = null)
    {
        $this->Code = $code;
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
     * @return \Arkitecht\FedEx\Structs\FreightRateNotation
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
     * @return \Arkitecht\FedEx\Structs\FreightRateNotation
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
