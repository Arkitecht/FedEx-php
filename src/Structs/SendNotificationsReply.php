<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendNotificationsReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:SendNotificationsReply
 * @subpackage Structs
 */
class SendNotificationsReply extends AbstractStructBase
{
    /**
     * The HighestSeverity
     * Meta informations extracted from the WSDL
     * - documentation: This contains the severity type of the most severe Notification in the Notifications array.
     * - minOccurs: 1
     * - documentation: Identifies the set of severity values for a Notification.
     * @var string
     */
    public $HighestSeverity;
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - documentation: Information about the request/reply such was the transaction successful or not, and any additional information relevant to the request and/or reply. There may be multiple Notifications in a reply.
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - documentation: The descriptive data regarding the result of the submitted transaction.
     * @var \Arkitecht\FedEx\Structs\Notification
     */
    public $Notifications;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: Contains the version of the reply being used.
     * - minOccurs: 1
     * - documentation: Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     * @var \Arkitecht\FedEx\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Contains the CustomerTransactionDetail that is echoed back to the caller for matching requests and replies and a Localization element for defining the language/translation used in the reply data.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The DuplicateWaybill
     * Meta informations extracted from the WSDL
     * - documentation: True if duplicate packages (more than one package with the same tracking number) have been found, the packages array contains information about each duplicate. Use this information to determine which of the tracking numbers is the
     * one you need and resend your request using the tracking number and TrackingNumberUniqueIdentifier for that package.
     * - minOccurs: 0
     * @var boolean
     */
    public $DuplicateWaybill;
    /**
     * The MoreDataAvailable
     * Meta informations extracted from the WSDL
     * - documentation: True if additional packages remain to be retrieved.
     * - minOccurs: 0
     * @var boolean
     */
    public $MoreDataAvailable;
    /**
     * The PagingToken
     * Meta informations extracted from the WSDL
     * - documentation: Value that must be passed in a TrackNotification request to retrieve the next set of packages (when MoreDataAvailable = true).
     * - minOccurs: 0
     * @var string
     */
    public $PagingToken;
    /**
     * The Packages
     * Meta informations extracted from the WSDL
     * - documentation: Information about the notifications that are available for this tracking number. If there are duplicates the ship date and destination address information is returned for determining which TrackingNumberUniqueIdentifier to use on a
     * subsequent request.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackNotificationPackage
     */
    public $Packages;
    /**
     * Constructor method for SendNotificationsReply
     * @uses SendNotificationsReply::setHighestSeverity()
     * @uses SendNotificationsReply::setNotifications()
     * @uses SendNotificationsReply::setVersion()
     * @uses SendNotificationsReply::setTransactionDetail()
     * @uses SendNotificationsReply::setDuplicateWaybill()
     * @uses SendNotificationsReply::setMoreDataAvailable()
     * @uses SendNotificationsReply::setPagingToken()
     * @uses SendNotificationsReply::setPackages()
     * @param string $highestSeverity
     * @param \Arkitecht\FedEx\Structs\Notification $notifications
     * @param \Arkitecht\FedEx\Structs\VersionId $version
     * @param \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail
     * @param boolean $duplicateWaybill
     * @param boolean $moreDataAvailable
     * @param string $pagingToken
     * @param \Arkitecht\FedEx\Structs\TrackNotificationPackage $packages
     */
    public function __construct($highestSeverity = null, \Arkitecht\FedEx\Structs\Notification $notifications = null, \Arkitecht\FedEx\Structs\VersionId $version = null, \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null, $duplicateWaybill = null, $moreDataAvailable = null, $pagingToken = null, \Arkitecht\FedEx\Structs\TrackNotificationPackage $packages = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setDuplicateWaybill($duplicateWaybill)
            ->setMoreDataAvailable($moreDataAvailable)
            ->setPagingToken($pagingToken)
            ->setPackages($packages);
    }
    /**
     * Get HighestSeverity value
     * @return string
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
     * @return \Arkitecht\FedEx\Structs\SendNotificationsReply
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
     * @return \Arkitecht\FedEx\Structs\Notification
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @param \Arkitecht\FedEx\Structs\Notification $notifications
     * @return \Arkitecht\FedEx\Structs\SendNotificationsReply
     */
    public function setNotifications(\Arkitecht\FedEx\Structs\Notification $notifications = null)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Get Version value
     * @return \Arkitecht\FedEx\Structs\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \Arkitecht\FedEx\Structs\VersionId $version
     * @return \Arkitecht\FedEx\Structs\SendNotificationsReply
     */
    public function setVersion(\Arkitecht\FedEx\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \Arkitecht\FedEx\Structs\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail
     * @return \Arkitecht\FedEx\Structs\SendNotificationsReply
     */
    public function setTransactionDetail(\Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
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
     * @return \Arkitecht\FedEx\Structs\SendNotificationsReply
     */
    public function setDuplicateWaybill($duplicateWaybill = null)
    {
        $this->DuplicateWaybill = $duplicateWaybill;
        return $this;
    }
    /**
     * Get MoreDataAvailable value
     * @return boolean|null
     */
    public function getMoreDataAvailable()
    {
        return $this->MoreDataAvailable;
    }
    /**
     * Set MoreDataAvailable value
     * @param boolean $moreDataAvailable
     * @return \Arkitecht\FedEx\Structs\SendNotificationsReply
     */
    public function setMoreDataAvailable($moreDataAvailable = null)
    {
        $this->MoreDataAvailable = $moreDataAvailable;
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
     * @return \Arkitecht\FedEx\Structs\SendNotificationsReply
     */
    public function setPagingToken($pagingToken = null)
    {
        $this->PagingToken = $pagingToken;
        return $this;
    }
    /**
     * Get Packages value
     * @return \Arkitecht\FedEx\Structs\TrackNotificationPackage|null
     */
    public function getPackages()
    {
        return $this->Packages;
    }
    /**
     * Set Packages value
     * @param \Arkitecht\FedEx\Structs\TrackNotificationPackage $packages
     * @return \Arkitecht\FedEx\Structs\SendNotificationsReply
     */
    public function setPackages(\Arkitecht\FedEx\Structs\TrackNotificationPackage $packages = null)
    {
        $this->Packages = $packages;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\SendNotificationsReply
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
