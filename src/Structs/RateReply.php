<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateReply Structs
 * Meta informations extracted from the WSDL
 * - documentation: The response to a RateRequest. The Notifications indicate whether the request was successful or not.
 * - type: ns:RateReply
 * @subpackage Structs
 */
class RateReply extends AbstractStructBase
{
    /**
     * The HighestSeverity
     * Meta informations extracted from the WSDL
     * - documentation: This indicates the highest level of severity of all the notifications returned in this reply.
     * - minOccurs: 1
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
     * - documentation: The version of this reply.
     * - minOccurs: 1
     * - documentation: Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     * @var \Arkitecht\FedEx\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Contains the CustomerTransactionId that was sent in the request.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The RateReplyDetails
     * Meta informations extracted from the WSDL
     * - documentation: Each element contains all rate data for a single service. If service was specified in the request, there will be a single entry in this array; if service was omitted in the request, there will be a separate entry in this array for
     * each service being compared.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\RateReplyDetail
     */
    public $RateReplyDetails;
    /**
     * Constructor method for RateReply
     * @uses RateReply::setHighestSeverity()
     * @uses RateReply::setNotifications()
     * @uses RateReply::setVersion()
     * @uses RateReply::setTransactionDetail()
     * @uses RateReply::setRateReplyDetails()
     * @param string $highestSeverity
     * @param \Arkitecht\FedEx\Structs\Notification $notifications
     * @param \Arkitecht\FedEx\Structs\VersionId $version
     * @param \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail
     * @param \Arkitecht\FedEx\Structs\RateReplyDetail $rateReplyDetails
     */
    public function __construct($highestSeverity = null, \Arkitecht\FedEx\Structs\Notification $notifications = null, \Arkitecht\FedEx\Structs\VersionId $version = null, \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null, \Arkitecht\FedEx\Structs\RateReplyDetail $rateReplyDetails = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setRateReplyDetails($rateReplyDetails);
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
     * @return \Arkitecht\FedEx\Structs\RateReply
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
     * @return \Arkitecht\FedEx\Structs\RateReply
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
     * @return \Arkitecht\FedEx\Structs\RateReply
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
     * @return \Arkitecht\FedEx\Structs\RateReply
     */
    public function setTransactionDetail(\Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get RateReplyDetails value
     * @return \Arkitecht\FedEx\Structs\RateReplyDetail|null
     */
    public function getRateReplyDetails()
    {
        return $this->RateReplyDetails;
    }
    /**
     * Set RateReplyDetails value
     * @param \Arkitecht\FedEx\Structs\RateReplyDetail $rateReplyDetails
     * @return \Arkitecht\FedEx\Structs\RateReply
     */
    public function setRateReplyDetails(\Arkitecht\FedEx\Structs\RateReplyDetail $rateReplyDetails = null)
    {
        $this->RateReplyDetails = $rateReplyDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\RateReply
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
