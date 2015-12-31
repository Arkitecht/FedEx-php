<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureProofOfDeliveryFaxRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: FedEx Signature Proof Of Delivery Fax request.
 * - type: ns:SignatureProofOfDeliveryFaxRequest
 * @subpackage Structs
 */
class SignatureProofOfDeliveryFaxRequest extends AbstractStructBase
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
     * - documentation: The version of the request being used.
     * - minOccurs: 1
     * - documentation: Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     * @var \Arkitecht\FedEx\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The QualifiedTrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\QualifiedTrackingNumber
     */
    public $QualifiedTrackingNumber;
    /**
     * The AdditionalComments
     * Meta informations extracted from the WSDL
     * - documentation: Additional customer-supplied text to be added to the body of the letter.
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalComments;
    /**
     * The FaxSender
     * Meta informations extracted from the WSDL
     * - documentation: Contact and address information about the person requesting the fax to be sent.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ContactAndAddress
     */
    public $FaxSender;
    /**
     * The FaxRecipient
     * Meta informations extracted from the WSDL
     * - documentation: Contact and address information, including the fax number, about the person to receive the fax.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ContactAndAddress
     */
    public $FaxRecipient;
    /**
     * Constructor method for SignatureProofOfDeliveryFaxRequest
     * @uses SignatureProofOfDeliveryFaxRequest::setWebAuthenticationDetail()
     * @uses SignatureProofOfDeliveryFaxRequest::setClientDetail()
     * @uses SignatureProofOfDeliveryFaxRequest::setVersion()
     * @uses SignatureProofOfDeliveryFaxRequest::setTransactionDetail()
     * @uses SignatureProofOfDeliveryFaxRequest::setQualifiedTrackingNumber()
     * @uses SignatureProofOfDeliveryFaxRequest::setAdditionalComments()
     * @uses SignatureProofOfDeliveryFaxRequest::setFaxSender()
     * @uses SignatureProofOfDeliveryFaxRequest::setFaxRecipient()
     * @param \Arkitecht\FedEx\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \Arkitecht\FedEx\Structs\ClientDetail $clientDetail
     * @param \Arkitecht\FedEx\Structs\VersionId $version
     * @param \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail
     * @param \Arkitecht\FedEx\Structs\QualifiedTrackingNumber $qualifiedTrackingNumber
     * @param string $additionalComments
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress $faxSender
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress $faxRecipient
     */
    public function __construct(\Arkitecht\FedEx\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \Arkitecht\FedEx\Structs\ClientDetail $clientDetail = null, \Arkitecht\FedEx\Structs\VersionId $version = null, \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null, \Arkitecht\FedEx\Structs\QualifiedTrackingNumber $qualifiedTrackingNumber = null, $additionalComments = null, \Arkitecht\FedEx\Structs\ContactAndAddress $faxSender = null, \Arkitecht\FedEx\Structs\ContactAndAddress $faxRecipient = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setQualifiedTrackingNumber($qualifiedTrackingNumber)
            ->setAdditionalComments($additionalComments)
            ->setFaxSender($faxSender)
            ->setFaxRecipient($faxRecipient);
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
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxRequest
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
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxRequest
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
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxRequest
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
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxRequest
     */
    public function setTransactionDetail(\Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get QualifiedTrackingNumber value
     * @return \Arkitecht\FedEx\Structs\QualifiedTrackingNumber|null
     */
    public function getQualifiedTrackingNumber()
    {
        return $this->QualifiedTrackingNumber;
    }
    /**
     * Set QualifiedTrackingNumber value
     * @param \Arkitecht\FedEx\Structs\QualifiedTrackingNumber $qualifiedTrackingNumber
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxRequest
     */
    public function setQualifiedTrackingNumber(\Arkitecht\FedEx\Structs\QualifiedTrackingNumber $qualifiedTrackingNumber = null)
    {
        $this->QualifiedTrackingNumber = $qualifiedTrackingNumber;
        return $this;
    }
    /**
     * Get AdditionalComments value
     * @return string|null
     */
    public function getAdditionalComments()
    {
        return $this->AdditionalComments;
    }
    /**
     * Set AdditionalComments value
     * @param string $additionalComments
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxRequest
     */
    public function setAdditionalComments($additionalComments = null)
    {
        $this->AdditionalComments = $additionalComments;
        return $this;
    }
    /**
     * Get FaxSender value
     * @return \Arkitecht\FedEx\Structs\ContactAndAddress|null
     */
    public function getFaxSender()
    {
        return $this->FaxSender;
    }
    /**
     * Set FaxSender value
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress $faxSender
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxRequest
     */
    public function setFaxSender(\Arkitecht\FedEx\Structs\ContactAndAddress $faxSender = null)
    {
        $this->FaxSender = $faxSender;
        return $this;
    }
    /**
     * Get FaxRecipient value
     * @return \Arkitecht\FedEx\Structs\ContactAndAddress|null
     */
    public function getFaxRecipient()
    {
        return $this->FaxRecipient;
    }
    /**
     * Set FaxRecipient value
     * @param \Arkitecht\FedEx\Structs\ContactAndAddress $faxRecipient
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxRequest
     */
    public function setFaxRecipient(\Arkitecht\FedEx\Structs\ContactAndAddress $faxRecipient = null)
    {
        $this->FaxRecipient = $faxRecipient;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxRequest
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
