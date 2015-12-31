<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AppointmentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the different appointment times on a specific date.
 * @subpackage Structs
 */
class AppointmentDetail extends AbstractStructBase
{
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var date
     */
    public $Date;
    /**
     * The WindowDetails
     * Meta informations extracted from the WSDL
     * - documentation: Different appointment time windows on the date specified.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Specifies the details about the appointment time window.
     * @var \Arkitecht\FedEx\Structs\AppointmentTimeDetail
     */
    public $WindowDetails;
    /**
     * Constructor method for AppointmentDetail
     * @uses AppointmentDetail::setDate()
     * @uses AppointmentDetail::setWindowDetails()
     * @param date $date
     * @param \Arkitecht\FedEx\Structs\AppointmentTimeDetail $windowDetails
     */
    public function __construct($date = null, \Arkitecht\FedEx\Structs\AppointmentTimeDetail $windowDetails = null)
    {
        $this
            ->setDate($date)
            ->setWindowDetails($windowDetails);
    }
    /**
     * Get Date value
     * @return date|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param date $date
     * @return \Arkitecht\FedEx\Structs\AppointmentDetail
     */
    public function setDate($date = null)
    {
        $this->Date = $date;
        return $this;
    }
    /**
     * Get WindowDetails value
     * @return \Arkitecht\FedEx\Structs\AppointmentTimeDetail|null
     */
    public function getWindowDetails()
    {
        return $this->WindowDetails;
    }
    /**
     * Set WindowDetails value
     * @param \Arkitecht\FedEx\Structs\AppointmentTimeDetail $windowDetails
     * @return \Arkitecht\FedEx\Structs\AppointmentDetail
     */
    public function setWindowDetails(\Arkitecht\FedEx\Structs\AppointmentTimeDetail $windowDetails = null)
    {
        $this->WindowDetails = $windowDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\AppointmentDetail
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
