<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendNotificationsRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:SendNotificationsRequest
 * @subpackage Structs
 */
class SendNotificationsRequest extends AbstractStructBase
{
    /**
     * The WebAuthenticationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     * - minOccurs: 1
     * @var \Arkitecht\FedEx\Structs\WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;
    /**
     * The ClientDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data identifying the client submitting the transaction.
     * - minOccurs: 1
     * @var \Arkitecht\FedEx\Structs\ClientDetail
     */
    public $ClientDetail;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - documentation: Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     * @var \Arkitecht\FedEx\Structs\VersionId
     */
    public $Version;
    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: The tracking number to which the notifications will be triggered from.
     * - minOccurs: 1
     * @var string
     */
    public $TrackingNumber;
    /**
     * The SenderContactName
     * Meta informations extracted from the WSDL
     * - documentation: Included in the email notification identifying the requester of this notification.
     * - minOccurs: 1
     * @var string
     */
    public $SenderContactName;
    /**
     * The NotificationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Who to send the email notifications to and for which events. The notificationRecipientType and NotifyOnShipment fields are not used in this request.
     * - minOccurs: 1
     * - documentation: Information describing email notifications that will be sent in relation to events that occur during package movement
     * @var \Arkitecht\FedEx\Structs\EMailNotificationDetail
     */
    public $NotificationDetail;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The MultiPiece
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether to return tracking information for all associated packages.
     * - minOccurs: 0
     * @var boolean
     */
    public $MultiPiece;
    /**
     * The PagingToken
     * Meta informations extracted from the WSDL
     * - documentation: When the MoreDataAvailable field is true in a TrackNotificationReply the PagingToken must be sent in the subsequent TrackNotificationRequest to retrieve the next page of data.
     * - minOccurs: 0
     * @var string
     */
    public $PagingToken;
    /**
     * The TrackingNumberUniqueId
     * Meta informations extracted from the WSDL
     * - documentation: Use this field when your original request informs you that there are duplicates of this tracking number. If you get duplicates you will also receive some information about each of the duplicate tracking numbers to enable you to chose
     * one and resend that number along with the TrackingNumberUniqueId to get notifications for that tracking number.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumberUniqueId;
    /**
     * The ShipDateRangeBegin
     * Meta informations extracted from the WSDL
     * - documentation: To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     * - minOccurs: 0
     * @var date
     */
    public $ShipDateRangeBegin;
    /**
     * The ShipDateRangeEnd
     * Meta informations extracted from the WSDL
     * - documentation: To narrow the search to a period in time the ShipDateRangeBegin and ShipDateRangeEnd can be used to help eliminate duplicates.
     * - minOccurs: 0
     * @var date
     */
    public $ShipDateRangeEnd;
    /**
     * The SenderEMailAddress
     * Meta informations extracted from the WSDL
     * - documentation: Included in the email notification identifying the requester of this notification.
     * - minOccurs: 0
     * @var string
     */
    public $SenderEMailAddress;
    /**
     * Constructor method for SendNotificationsRequest
     * @uses SendNotificationsRequest::setWebAuthenticationDetail()
     * @uses SendNotificationsRequest::setClientDetail()
     * @uses SendNotificationsRequest::setVersion()
     * @uses SendNotificationsRequest::setTrackingNumber()
     * @uses SendNotificationsRequest::setSenderContactName()
     * @uses SendNotificationsRequest::setNotificationDetail()
     * @uses SendNotificationsRequest::setTransactionDetail()
     * @uses SendNotificationsRequest::setMultiPiece()
     * @uses SendNotificationsRequest::setPagingToken()
     * @uses SendNotificationsRequest::setTrackingNumberUniqueId()
     * @uses SendNotificationsRequest::setShipDateRangeBegin()
     * @uses SendNotificationsRequest::setShipDateRangeEnd()
     * @uses SendNotificationsRequest::setSenderEMailAddress()
     * @param \Arkitecht\FedEx\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \Arkitecht\FedEx\Structs\ClientDetail $clientDetail
     * @param \Arkitecht\FedEx\Structs\VersionId $version
     * @param string $trackingNumber
     * @param string $senderContactName
     * @param \Arkitecht\FedEx\Structs\EMailNotificationDetail $notificationDetail
     * @param \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail
     * @param boolean $multiPiece
     * @param string $pagingToken
     * @param string $trackingNumberUniqueId
     * @param date $shipDateRangeBegin
     * @param date $shipDateRangeEnd
     * @param string $senderEMailAddress
     */
    public function __construct(\Arkitecht\FedEx\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \Arkitecht\FedEx\Structs\ClientDetail $clientDetail = null, \Arkitecht\FedEx\Structs\VersionId $version = null, $trackingNumber = null, $senderContactName = null, \Arkitecht\FedEx\Structs\EMailNotificationDetail $notificationDetail = null, \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null, $multiPiece = null, $pagingToken = null, $trackingNumberUniqueId = null, $shipDateRangeBegin = null, $shipDateRangeEnd = null, $senderEMailAddress = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTrackingNumber($trackingNumber)
            ->setSenderContactName($senderContactName)
            ->setNotificationDetail($notificationDetail)
            ->setTransactionDetail($transactionDetail)
            ->setMultiPiece($multiPiece)
            ->setPagingToken($pagingToken)
            ->setTrackingNumberUniqueId($trackingNumberUniqueId)
            ->setShipDateRangeBegin($shipDateRangeBegin)
            ->setShipDateRangeEnd($shipDateRangeEnd)
            ->setSenderEMailAddress($senderEMailAddress);
    }
    /**
     * Get WebAuthenticationDetail value
     * @return \Arkitecht\FedEx\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \Arkitecht\FedEx\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \Arkitecht\FedEx\Structs\SendNotificationsRequest
     */
    public function setWebAuthenticationDetail(\Arkitecht\FedEx\Structs\WebAuthenticationDetail $webAuthenticationDetail = null)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    /**
     * Get ClientDetail value
     * @return \Arkitecht\FedEx\Structs\ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \Arkitecht\FedEx\Structs\ClientDetail $clientDetail
     * @return \Arkitecht\FedEx\Structs\SendNotificationsRequest
     */
    public function setClientDetail(\Arkitecht\FedEx\Structs\ClientDetail $clientDetail = null)
    {
        $this->ClientDetail = $clientDetail;
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
     * @return \Arkitecht\FedEx\Structs\SendNotificationsRequest
     */
    public function setVersion(\Arkitecht\FedEx\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TrackingNumber value
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    /**
     * Set TrackingNumber value
     * @param string $trackingNumber
     * @return \Arkitecht\FedEx\Structs\SendNotificationsRequest
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Get SenderContactName value
     * @return string
     */
    public function getSenderContactName()
    {
        return $this->SenderContactName;
    }
    /**
     * Set SenderContactName value
     * @param string $senderContactName
     * @return \Arkitecht\FedEx\Structs\SendNotificationsRequest
     */
    public function setSenderContactName($senderContactName = null)
    {
        $this->SenderContactName = $senderContactName;
        return $this;
    }
    /**
     * Get NotificationDetail value
     * @return \Arkitecht\FedEx\Structs\EMailNotificationDetail
     */
    public function getNotificationDetail()
    {
        return $this->NotificationDetail;
    }
    /**
     * Set NotificationDetail value
     * @param \Arkitecht\FedEx\Structs\EMailNotificationDetail $notificationDetail
     * @return \Arkitecht\FedEx\Structs\SendNotificationsRequest
     */
    public function setNotificationDetail(\Arkitecht\FedEx\Structs\EMailNotificationDetail $notificationDetail = null)
    {
        $this->NotificationDetail = $notificationDetail;
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
     * @return \Arkitecht\FedEx\Structs\SendNotificationsRequest
     */
    public function setTransactionDetail(\Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get MultiPiece value
     * @return boolean|null
     */
    public function getMultiPiece()
    {
        return $this->MultiPiece;
    }
    /**
     * Set MultiPiece value
     * @param boolean $multiPiece
     * @return \Arkitecht\FedEx\Structs\SendNotificationsRequest
     */
    public function setMultiPiece($multiPiece = null)
    {
        $this->MultiPiece = $multiPiece;
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
     * @return \Arkitecht\FedEx\Structs\SendNotificationsRequest
     */
    public function setPagingToken($pagingToken = null)
    {
        $this->PagingToken = $pagingToken;
        return $this;
    }
    /**
     * Get TrackingNumberUniqueId value
     * @return string|null
     */
    public function getTrackingNumberUniqueId()
    {
        return $this->TrackingNumberUniqueId;
    }
    /**
     * Set TrackingNumberUniqueId value
     * @param string $trackingNumberUniqueId
     * @return \Arkitecht\FedEx\Structs\SendNotificationsRequest
     */
    public function setTrackingNumberUniqueId($trackingNumberUniqueId = null)
    {
        $this->TrackingNumberUniqueId = $trackingNumberUniqueId;
        return $this;
    }
    /**
     * Get ShipDateRangeBegin value
     * @return date|null
     */
    public function getShipDateRangeBegin()
    {
        return $this->ShipDateRangeBegin;
    }
    /**
     * Set ShipDateRangeBegin value
     * @param date $shipDateRangeBegin
     * @return \Arkitecht\FedEx\Structs\SendNotificationsRequest
     */
    public function setShipDateRangeBegin($shipDateRangeBegin = null)
    {
        $this->ShipDateRangeBegin = $shipDateRangeBegin;
        return $this;
    }
    /**
     * Get ShipDateRangeEnd value
     * @return date|null
     */
    public function getShipDateRangeEnd()
    {
        return $this->ShipDateRangeEnd;
    }
    /**
     * Set ShipDateRangeEnd value
     * @param date $shipDateRangeEnd
     * @return \Arkitecht\FedEx\Structs\SendNotificationsRequest
     */
    public function setShipDateRangeEnd($shipDateRangeEnd = null)
    {
        $this->ShipDateRangeEnd = $shipDateRangeEnd;
        return $this;
    }
    /**
     * Get SenderEMailAddress value
     * @return string|null
     */
    public function getSenderEMailAddress()
    {
        return $this->SenderEMailAddress;
    }
    /**
     * Set SenderEMailAddress value
     * @param string $senderEMailAddress
     * @return \Arkitecht\FedEx\Structs\SendNotificationsRequest
     */
    public function setSenderEMailAddress($senderEMailAddress = null)
    {
        $this->SenderEMailAddress = $senderEMailAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\SendNotificationsRequest
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
