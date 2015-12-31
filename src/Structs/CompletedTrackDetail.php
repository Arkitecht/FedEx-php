<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedTrackDetail Structs
 * @subpackage Structs
 */
class CompletedTrackDetail extends AbstractStructBase
{
    /**
     * The HighestSeverity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifies the set of severity values for a Notification.
     * @var string
     */
    public $HighestSeverity;
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: The descriptive data regarding the result of the submitted transaction.
     * @var \Arkitecht\FedEx\Structs\Notification
     */
    public $Notifications;
    /**
     * The DuplicateWaybill
     * Meta informations extracted from the WSDL
     * - documentation: True if duplicate packages (more than one package with the same tracking number) have been found, and only limited data will be provided for each one.
     * - minOccurs: 0
     * @var boolean
     */
    public $DuplicateWaybill;
    /**
     * The MoreData
     * Meta informations extracted from the WSDL
     * - documentation: True if additional packages remain to be retrieved.
     * - minOccurs: 0
     * @var boolean
     */
    public $MoreData;
    /**
     * The PagingToken
     * Meta informations extracted from the WSDL
     * - documentation: Value that must be passed in a TrackNotification request to retrieve the next set of packages (when MoreDataAvailable = true).
     * - minOccurs: 0
     * @var string
     */
    public $PagingToken;
    /**
     * The TrackDetailsCount
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the total number of available track details across all pages.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $TrackDetailsCount;
    /**
     * The TrackDetails
     * Meta informations extracted from the WSDL
     * - documentation: Contains detailed tracking information for the requested packages(s).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Detailed tracking information about a particular package.
     * @var \Arkitecht\FedEx\Structs\TrackDetail
     */
    public $TrackDetails;
    /**
     * Constructor method for CompletedTrackDetail
     * @uses CompletedTrackDetail::setHighestSeverity()
     * @uses CompletedTrackDetail::setNotifications()
     * @uses CompletedTrackDetail::setDuplicateWaybill()
     * @uses CompletedTrackDetail::setMoreData()
     * @uses CompletedTrackDetail::setPagingToken()
     * @uses CompletedTrackDetail::setTrackDetailsCount()
     * @uses CompletedTrackDetail::setTrackDetails()
     * @param string $highestSeverity
     * @param \Arkitecht\FedEx\Structs\Notification $notifications
     * @param boolean $duplicateWaybill
     * @param boolean $moreData
     * @param string $pagingToken
     * @param nonNegativeInteger $trackDetailsCount
     * @param \Arkitecht\FedEx\Structs\TrackDetail $trackDetails
     */
    public function __construct($highestSeverity = null, \Arkitecht\FedEx\Structs\Notification $notifications = null, $duplicateWaybill = null, $moreData = null, $pagingToken = null, $trackDetailsCount = null, \Arkitecht\FedEx\Structs\TrackDetail $trackDetails = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setDuplicateWaybill($duplicateWaybill)
            ->setMoreData($moreData)
            ->setPagingToken($pagingToken)
            ->setTrackDetailsCount($trackDetailsCount)
            ->setTrackDetails($trackDetails);
    }
    /**
     * Get HighestSeverity value
     * @return string|null
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    /**
     * Set HighestSeverity value
     * @uses \Arkitecht\FedEx\Enums\NotificationSeverityType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\NotificationSeverityType::getValidValues()
     * @param string $highestSeverity
     * @return \Arkitecht\FedEx\Structs\CompletedTrackDetail
     */
    public function setHighestSeverity($highestSeverity = null)
    {
        if (!\Arkitecht\FedEx\Enums\NotificationSeverityType::valueIsValid($highestSeverity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $highestSeverity, implode(', ', \Arkitecht\FedEx\Enums\NotificationSeverityType::getValidValues())), __LINE__);
        }
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    /**
     * Get Notifications value
     * @return \Arkitecht\FedEx\Structs\Notification|null
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @param \Arkitecht\FedEx\Structs\Notification $notifications
     * @return \Arkitecht\FedEx\Structs\CompletedTrackDetail
     */
    public function setNotifications(\Arkitecht\FedEx\Structs\Notification $notifications = null)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Get DuplicateWaybill value
     * @return boolean|null
     */
    public function getDuplicateWaybill()
    {
        return $this->DuplicateWaybill;
    }
    /**
     * Set DuplicateWaybill value
     * @param boolean $duplicateWaybill
     * @return \Arkitecht\FedEx\Structs\CompletedTrackDetail
     */
    public function setDuplicateWaybill($duplicateWaybill = null)
    {
        $this->DuplicateWaybill = $duplicateWaybill;
        return $this;
    }
    /**
     * Get MoreData value
     * @return boolean|null
     */
    public function getMoreData()
    {
        return $this->MoreData;
    }
    /**
     * Set MoreData value
     * @param boolean $moreData
     * @return \Arkitecht\FedEx\Structs\CompletedTrackDetail
     */
    public function setMoreData($moreData = null)
    {
        $this->MoreData = $moreData;
        return $this;
    }
    /**
     * Get PagingToken value
     * @return string|null
     */
    public function getPagingToken()
    {
        return $this->PagingToken;
    }
    /**
     * Set PagingToken value
     * @param string $pagingToken
     * @return \Arkitecht\FedEx\Structs\CompletedTrackDetail
     */
    public function setPagingToken($pagingToken = null)
    {
        $this->PagingToken = $pagingToken;
        return $this;
    }
    /**
     * Get TrackDetailsCount value
     * @return nonNegativeInteger|null
     */
    public function getTrackDetailsCount()
    {
        return $this->TrackDetailsCount;
    }
    /**
     * Set TrackDetailsCount value
     * @param nonNegativeInteger $trackDetailsCount
     * @return \Arkitecht\FedEx\Structs\CompletedTrackDetail
     */
    public function setTrackDetailsCount($trackDetailsCount = null)
    {
        $this->TrackDetailsCount = $trackDetailsCount;
        return $this;
    }
    /**
     * Get TrackDetails value
     * @return \Arkitecht\FedEx\Structs\TrackDetail|null
     */
    public function getTrackDetails()
    {
        return $this->TrackDetails;
    }
    /**
     * Set TrackDetails value
     * @param \Arkitecht\FedEx\Structs\TrackDetail $trackDetails
     * @return \Arkitecht\FedEx\Structs\CompletedTrackDetail
     */
    public function setTrackDetails(\Arkitecht\FedEx\Structs\TrackDetail $trackDetails = null)
    {
        $this->TrackDetails = $trackDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CompletedTrackDetail
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
