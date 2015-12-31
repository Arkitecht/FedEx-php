<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedTagDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Provides reply information specific to a tag request.
 * @subpackage Structs
 */
class CompletedTagDetail extends AbstractStructBase
{
    /**
     * The ConfirmationNumber
     * Meta informations extracted from the WSDL
     * - documentation: .
     * - minOccurs: 1
     * @var string
     */
    public $ConfirmationNumber;
    /**
     * The AccessTime
     * Meta informations extracted from the WSDL
     * - documentation: As of June 2007, returned only for FedEx Express services.
     * - minOccurs: 0
     * @var duration
     */
    public $AccessTime;
    /**
     * The CutoffTime
     * Meta informations extracted from the WSDL
     * - documentation: As of June 2007, returned only for FedEx Express services.
     * - minOccurs: 0
     * @var time
     */
    public $CutoffTime;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - documentation: As of June 2007, returned only for FedEx Express services.
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The DeliveryCommitment
     * Meta informations extracted from the WSDL
     * - documentation: As of June 2007, returned only for FedEx Express services.
     * - minOccurs: 0
     * @var dateTime
     */
    public $DeliveryCommitment;
    /**
     * The DispatchDate
     * Meta informations extracted from the WSDL
     * - documentation: FEDEX INTERNAL USE ONLY: for use by INET.
     * - minOccurs: 0
     * @var date
     */
    public $DispatchDate;
    /**
     * Constructor method for CompletedTagDetail
     * @uses CompletedTagDetail::setConfirmationNumber()
     * @uses CompletedTagDetail::setAccessTime()
     * @uses CompletedTagDetail::setCutoffTime()
     * @uses CompletedTagDetail::setLocation()
     * @uses CompletedTagDetail::setDeliveryCommitment()
     * @uses CompletedTagDetail::setDispatchDate()
     * @param string $confirmationNumber
     * @param duration $accessTime
     * @param time $cutoffTime
     * @param string $location
     * @param dateTime $deliveryCommitment
     * @param date $dispatchDate
     */
    public function __construct($confirmationNumber = null, $accessTime = null, time $cutoffTime = null, $location = null, $deliveryCommitment = null, $dispatchDate = null)
    {
        $this
            ->setConfirmationNumber($confirmationNumber)
            ->setAccessTime($accessTime)
            ->setCutoffTime($cutoffTime)
            ->setLocation($location)
            ->setDeliveryCommitment($deliveryCommitment)
            ->setDispatchDate($dispatchDate);
    }
    /**
     * Get ConfirmationNumber value
     * @return string
     */
    public function getConfirmationNumber()
    {
        return $this->ConfirmationNumber;
    }
    /**
     * Set ConfirmationNumber value
     * @param string $confirmationNumber
     * @return \Arkitecht\FedEx\Structs\CompletedTagDetail
     */
    public function setConfirmationNumber($confirmationNumber = null)
    {
        $this->ConfirmationNumber = $confirmationNumber;
        return $this;
    }
    /**
     * Get AccessTime value
     * @return duration|null
     */
    public function getAccessTime()
    {
        return $this->AccessTime;
    }
    /**
     * Set AccessTime value
     * @param duration $accessTime
     * @return \Arkitecht\FedEx\Structs\CompletedTagDetail
     */
    public function setAccessTime($accessTime = null)
    {
        $this->AccessTime = $accessTime;
        return $this;
    }
    /**
     * Get CutoffTime value
     * @return time|null
     */
    public function getCutoffTime()
    {
        return $this->CutoffTime;
    }
    /**
     * Set CutoffTime value
     * @param time $cutoffTime
     * @return \Arkitecht\FedEx\Structs\CompletedTagDetail
     */
    public function setCutoffTime(time $cutoffTime = null)
    {
        $this->CutoffTime = $cutoffTime;
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Arkitecht\FedEx\Structs\CompletedTagDetail
     */
    public function setLocation($location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Get DeliveryCommitment value
     * @return dateTime|null
     */
    public function getDeliveryCommitment()
    {
        return $this->DeliveryCommitment;
    }
    /**
     * Set DeliveryCommitment value
     * @param dateTime $deliveryCommitment
     * @return \Arkitecht\FedEx\Structs\CompletedTagDetail
     */
    public function setDeliveryCommitment($deliveryCommitment = null)
    {
        $this->DeliveryCommitment = $deliveryCommitment;
        return $this;
    }
    /**
     * Get DispatchDate value
     * @return date|null
     */
    public function getDispatchDate()
    {
        return $this->DispatchDate;
    }
    /**
     * Set DispatchDate value
     * @param date $dispatchDate
     * @return \Arkitecht\FedEx\Structs\CompletedTagDetail
     */
    public function setDispatchDate($dispatchDate = null)
    {
        $this->DispatchDate = $dispatchDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CompletedTagDetail
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
