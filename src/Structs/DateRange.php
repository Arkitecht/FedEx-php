<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DateRange Structs
 * @subpackage Structs
 */
class DateRange extends AbstractStructBase
{
    /**
     * The Begins
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var date
     */
    public $Begins;
    /**
     * The Ends
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var date
     */
    public $Ends;
    /**
     * Constructor method for DateRange
     * @uses DateRange::setBegins()
     * @uses DateRange::setEnds()
     * @param date $begins
     * @param date $ends
     */
    public function __construct($begins = null, $ends = null)
    {
        $this
            ->setBegins($begins)
            ->setEnds($ends);
    }
    /**
     * Get Begins value
     * @return date|null
     */
    public function getBegins()
    {
        return $this->Begins;
    }
    /**
     * Set Begins value
     * @param date $begins
     * @return \Arkitecht\FedEx\Structs\DateRange
     */
    public function setBegins($begins = null)
    {
        $this->Begins = $begins;
        return $this;
    }
    /**
     * Get Ends value
     * @return date|null
     */
    public function getEnds()
    {
        return $this->Ends;
    }
    /**
     * Set Ends value
     * @param date $ends
     * @return \Arkitecht\FedEx\Structs\DateRange
     */
    public function setEnds($ends = null)
    {
        $this->Ends = $ends;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\DateRange
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
