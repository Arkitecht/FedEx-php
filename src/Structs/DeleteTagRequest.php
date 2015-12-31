<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTagRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:DeleteTagRequest
 * @subpackage Structs
 */
class DeleteTagRequest extends AbstractStructBase
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
     * - documentation: Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     * - minOccurs: 1
     * - documentation: Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     * @var \Arkitecht\FedEx\Structs\VersionId
     */
    public $Version;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - documentation: If the original ProcessTagRequest specified third-party payment, then the delete request must contain the same pay type and payor account number for security purposes.
     * - minOccurs: 1
     * @var \Arkitecht\FedEx\Structs\Payment
     */
    public $Payment;
    /**
     * The ConfirmationNumber
     * Meta informations extracted from the WSDL
     * - documentation: Also known as Pickup Confirmation Number or Dispatch Number
     * - minOccurs: 1
     * @var string
     */
    public $ConfirmationNumber;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The DispatchLocationId
     * Meta informations extracted from the WSDL
     * - documentation: Only used for tags which had FedEx Express services.
     * - minOccurs: 0
     * @var string
     */
    public $DispatchLocationId;
    /**
     * The DispatchDate
     * Meta informations extracted from the WSDL
     * - documentation: Only used for tags which had FedEx Express services.
     * - minOccurs: 0
     * @var date
     */
    public $DispatchDate;
    /**
     * Constructor method for DeleteTagRequest
     * @uses DeleteTagRequest::setWebAuthenticationDetail()
     * @uses DeleteTagRequest::setClientDetail()
     * @uses DeleteTagRequest::setVersion()
     * @uses DeleteTagRequest::setPayment()
     * @uses DeleteTagRequest::setConfirmationNumber()
     * @uses DeleteTagRequest::setTransactionDetail()
     * @uses DeleteTagRequest::setDispatchLocationId()
     * @uses DeleteTagRequest::setDispatchDate()
     * @param \Arkitecht\FedEx\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \Arkitecht\FedEx\Structs\ClientDetail $clientDetail
     * @param \Arkitecht\FedEx\Structs\VersionId $version
     * @param \Arkitecht\FedEx\Structs\Payment $payment
     * @param string $confirmationNumber
     * @param \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail
     * @param string $dispatchLocationId
     * @param date $dispatchDate
     */
    public function __construct(\Arkitecht\FedEx\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \Arkitecht\FedEx\Structs\ClientDetail $clientDetail = null, \Arkitecht\FedEx\Structs\VersionId $version = null, \Arkitecht\FedEx\Structs\Payment $payment = null, $confirmationNumber = null, \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null, $dispatchLocationId = null, $dispatchDate = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setPayment($payment)
            ->setConfirmationNumber($confirmationNumber)
            ->setTransactionDetail($transactionDetail)
            ->setDispatchLocationId($dispatchLocationId)
            ->setDispatchDate($dispatchDate);
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
     * @return \Arkitecht\FedEx\Structs\DeleteTagRequest
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
     * @return \Arkitecht\FedEx\Structs\DeleteTagRequest
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
     * @return \Arkitecht\FedEx\Structs\DeleteTagRequest
     */
    public function setVersion(\Arkitecht\FedEx\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get Payment value
     * @return \Arkitecht\FedEx\Structs\Payment
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \Arkitecht\FedEx\Structs\Payment $payment
     * @return \Arkitecht\FedEx\Structs\DeleteTagRequest
     */
    public function setPayment(\Arkitecht\FedEx\Structs\Payment $payment = null)
    {
        $this->Payment = $payment;
        return $this;
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
     * @return \Arkitecht\FedEx\Structs\DeleteTagRequest
     */
    public function setConfirmationNumber($confirmationNumber = null)
    {
        $this->ConfirmationNumber = $confirmationNumber;
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
     * @return \Arkitecht\FedEx\Structs\DeleteTagRequest
     */
    public function setTransactionDetail(\Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get DispatchLocationId value
     * @return string|null
     */
    public function getDispatchLocationId()
    {
        return $this->DispatchLocationId;
    }
    /**
     * Set DispatchLocationId value
     * @param string $dispatchLocationId
     * @return \Arkitecht\FedEx\Structs\DeleteTagRequest
     */
    public function setDispatchLocationId($dispatchLocationId = null)
    {
        $this->DispatchLocationId = $dispatchLocationId;
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
     * @return \Arkitecht\FedEx\Structs\DeleteTagRequest
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
     * @return \Arkitecht\FedEx\Structs\DeleteTagRequest
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
