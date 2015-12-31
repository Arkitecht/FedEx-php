<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackAdvanceNotificationDetail Structs
 * @subpackage Structs
 */
class TrackAdvanceNotificationDetail extends AbstractStructBase
{
    /**
     * The EstimatedTimeOfArrival
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $EstimatedTimeOfArrival;
    /**
     * The Reason
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Reason;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The StatusDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusDescription;
    /**
     * The StatusTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $StatusTime;
    /**
     * Constructor method for TrackAdvanceNotificationDetail
     * @uses TrackAdvanceNotificationDetail::setEstimatedTimeOfArrival()
     * @uses TrackAdvanceNotificationDetail::setReason()
     * @uses TrackAdvanceNotificationDetail::setStatus()
     * @uses TrackAdvanceNotificationDetail::setStatusDescription()
     * @uses TrackAdvanceNotificationDetail::setStatusTime()
     * @param dateTime $estimatedTimeOfArrival
     * @param string $reason
     * @param string $status
     * @param string $statusDescription
     * @param dateTime $statusTime
     */
    public function __construct($estimatedTimeOfArrival = null, $reason = null, $status = null, $statusDescription = null, $statusTime = null)
    {
        $this
            ->setEstimatedTimeOfArrival($estimatedTimeOfArrival)
            ->setReason($reason)
            ->setStatus($status)
            ->setStatusDescription($statusDescription)
            ->setStatusTime($statusTime);
    }
    /**
     * Get EstimatedTimeOfArrival value
     * @return dateTime|null
     */
    public function getEstimatedTimeOfArrival()
    {
        return $this->EstimatedTimeOfArrival;
    }
    /**
     * Set EstimatedTimeOfArrival value
     * @param dateTime $estimatedTimeOfArrival
     * @return \Arkitecht\FedEx\Structs\TrackAdvanceNotificationDetail
     */
    public function setEstimatedTimeOfArrival($estimatedTimeOfArrival = null)
    {
        $this->EstimatedTimeOfArrival = $estimatedTimeOfArrival;
        return $this;
    }
    /**
     * Get Reason value
     * @return string|null
     */
    public function getReason()
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string $reason
     * @return \Arkitecht\FedEx\Structs\TrackAdvanceNotificationDetail
     */
    public function setReason($reason = null)
    {
        $this->Reason = $reason;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Arkitecht\FedEx\Enums\TrackAdvanceNotificationStatusType::valueIsValid()
     * @uses
     * \Arkitecht\FedEx\Enums\TrackAdvanceNotificationStatusType::getValidValues()
     * @param string $status
     * @return \Arkitecht\FedEx\Structs\TrackAdvanceNotificationDetail
     */
    public function setStatus($status = null)
    {
        if (!\Arkitecht\FedEx\Enums\TrackAdvanceNotificationStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Arkitecht\FedEx\Enums\TrackAdvanceNotificationStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get StatusDescription value
     * @return string|null
     */
    public function getStatusDescription()
    {
        return $this->StatusDescription;
    }
    /**
     * Set StatusDescription value
     * @param string $statusDescription
     * @return \Arkitecht\FedEx\Structs\TrackAdvanceNotificationDetail
     */
    public function setStatusDescription($statusDescription = null)
    {
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    /**
     * Get StatusTime value
     * @return dateTime|null
     */
    public function getStatusTime()
    {
        return $this->StatusTime;
    }
    /**
     * Set StatusTime value
     * @param dateTime $statusTime
     * @return \Arkitecht\FedEx\Structs\TrackAdvanceNotificationDetail
     */
    public function setStatusTime($statusTime = null)
    {
        $this->StatusTime = $statusTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TrackAdvanceNotificationDetail
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
