<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessShipmentReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ProcessShipmentReply
 * @subpackage Structs
 */
class ProcessShipmentReply extends AbstractStructBase
{
    /**
     * The HighestSeverity
     * Meta informations extracted from the WSDL
     * - documentation: This indicates the highest level of severity of all the notifications returned in this reply
     * - minOccurs: 1
     * - documentation: Identifies the set of severity values for a Notification.
     * @var string
     */
    public $HighestSeverity;
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - documentation: The descriptive data regarding the results of the submitted transaction.
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - documentation: The descriptive data regarding the result of the submitted transaction.
     * @var \Arkitecht\FedEx\Structs\Notification
     */
    public $Notifications;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     * - minOccurs: 1
     * - documentation: Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     * @var \Arkitecht\FedEx\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The JobId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $JobId;
    /**
     * The CompletedShipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: The reply payload. All of the returned information about this shipment/package.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CompletedShipmentDetail
     */
    public $CompletedShipmentDetail;
    /**
     * The ErrorLabels
     * Meta informations extracted from the WSDL
     * - documentation: Empty unless error label behavior is PACKAGE_ERROR_LABELS and one or more errors occured during transaction processing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: All package-level shipping documents (other than labels and barcodes).
     * @var \Arkitecht\FedEx\Structs\ShippingDocument
     */
    public $ErrorLabels;
    /**
     * Constructor method for ProcessShipmentReply
     * @uses ProcessShipmentReply::setHighestSeverity()
     * @uses ProcessShipmentReply::setNotifications()
     * @uses ProcessShipmentReply::setVersion()
     * @uses ProcessShipmentReply::setTransactionDetail()
     * @uses ProcessShipmentReply::setJobId()
     * @uses ProcessShipmentReply::setCompletedShipmentDetail()
     * @uses ProcessShipmentReply::setErrorLabels()
     * @param string $highestSeverity
     * @param \Arkitecht\FedEx\Structs\Notification $notifications
     * @param \Arkitecht\FedEx\Structs\VersionId $version
     * @param \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail
     * @param string $jobId
     * @param \Arkitecht\FedEx\Structs\CompletedShipmentDetail $completedShipmentDetail
     * @param \Arkitecht\FedEx\Structs\ShippingDocument $errorLabels
     */
    public function __construct($highestSeverity = null, \Arkitecht\FedEx\Structs\Notification $notifications = null, \Arkitecht\FedEx\Structs\VersionId $version = null, \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null, $jobId = null, \Arkitecht\FedEx\Structs\CompletedShipmentDetail $completedShipmentDetail = null, \Arkitecht\FedEx\Structs\ShippingDocument $errorLabels = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setJobId($jobId)
            ->setCompletedShipmentDetail($completedShipmentDetail)
            ->setErrorLabels($errorLabels);
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
     * @return \Arkitecht\FedEx\Structs\ProcessShipmentReply
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
     * @return \Arkitecht\FedEx\Structs\ProcessShipmentReply
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
     * @return \Arkitecht\FedEx\Structs\ProcessShipmentReply
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
     * @return \Arkitecht\FedEx\Structs\ProcessShipmentReply
     */
    public function setTransactionDetail(\Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get JobId value
     * @return string|null
     */
    public function getJobId()
    {
        return $this->JobId;
    }
    /**
     * Set JobId value
     * @param string $jobId
     * @return \Arkitecht\FedEx\Structs\ProcessShipmentReply
     */
    public function setJobId($jobId = null)
    {
        $this->JobId = $jobId;
        return $this;
    }
    /**
     * Get CompletedShipmentDetail value
     * @return \Arkitecht\FedEx\Structs\CompletedShipmentDetail|null
     */
    public function getCompletedShipmentDetail()
    {
        return $this->CompletedShipmentDetail;
    }
    /**
     * Set CompletedShipmentDetail value
     * @param \Arkitecht\FedEx\Structs\CompletedShipmentDetail $completedShipmentDetail
     * @return \Arkitecht\FedEx\Structs\ProcessShipmentReply
     */
    public function setCompletedShipmentDetail(\Arkitecht\FedEx\Structs\CompletedShipmentDetail $completedShipmentDetail = null)
    {
        $this->CompletedShipmentDetail = $completedShipmentDetail;
        return $this;
    }
    /**
     * Get ErrorLabels value
     * @return \Arkitecht\FedEx\Structs\ShippingDocument|null
     */
    public function getErrorLabels()
    {
        return $this->ErrorLabels;
    }
    /**
     * Set ErrorLabels value
     * @param \Arkitecht\FedEx\Structs\ShippingDocument $errorLabels
     * @return \Arkitecht\FedEx\Structs\ProcessShipmentReply
     */
    public function setErrorLabels(\Arkitecht\FedEx\Structs\ShippingDocument $errorLabels = null)
    {
        $this->ErrorLabels = $errorLabels;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ProcessShipmentReply
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
