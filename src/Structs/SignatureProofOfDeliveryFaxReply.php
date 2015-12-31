<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureProofOfDeliveryFaxReply Structs
 * Meta informations extracted from the WSDL
 * - documentation: FedEx Signature Proof Of Delivery Fax reply.
 * - type: ns:SignatureProofOfDeliveryFaxReply
 * @subpackage Structs
 */
class SignatureProofOfDeliveryFaxReply extends AbstractStructBase
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
     * The FaxConfirmationNumber
     * Meta informations extracted from the WSDL
     * - documentation: Confirmation of fax transmission.
     * - minOccurs: 0
     * @var string
     */
    public $FaxConfirmationNumber;
    /**
     * Constructor method for SignatureProofOfDeliveryFaxReply
     * @uses SignatureProofOfDeliveryFaxReply::setHighestSeverity()
     * @uses SignatureProofOfDeliveryFaxReply::setNotifications()
     * @uses SignatureProofOfDeliveryFaxReply::setVersion()
     * @uses SignatureProofOfDeliveryFaxReply::setTransactionDetail()
     * @uses SignatureProofOfDeliveryFaxReply::setFaxConfirmationNumber()
     * @param string $highestSeverity
     * @param \Arkitecht\FedEx\Structs\Notification $notifications
     * @param \Arkitecht\FedEx\Structs\VersionId $version
     * @param \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail
     * @param string $faxConfirmationNumber
     */
    public function __construct($highestSeverity = null, \Arkitecht\FedEx\Structs\Notification $notifications = null, \Arkitecht\FedEx\Structs\VersionId $version = null, \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null, $faxConfirmationNumber = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setFaxConfirmationNumber($faxConfirmationNumber);
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
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxReply
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
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxReply
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
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxReply
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
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxReply
     */
    public function setTransactionDetail(\Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get FaxConfirmationNumber value
     * @return string|null
     */
    public function getFaxConfirmationNumber()
    {
        return $this->FaxConfirmationNumber;
    }
    /**
     * Set FaxConfirmationNumber value
     * @param string $faxConfirmationNumber
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxReply
     */
    public function setFaxConfirmationNumber($faxConfirmationNumber = null)
    {
        $this->FaxConfirmationNumber = $faxConfirmationNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxReply
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
