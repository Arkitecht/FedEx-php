<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: The descriptive data sent by a client to track a FedEx package.
 * - type: ns:TrackRequest
 * @subpackage Structs
 */
class TrackRequest extends AbstractStructBase
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
     * The SelectionDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details needed to select the shipment being requested to be tracked.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TrackSelectionDetail
     */
    public $SelectionDetails;
    /**
     * The TransactionTimeOutValueInMilliseconds
     * Meta informations extracted from the WSDL
     * - documentation: The customer can specify a desired time out value for this particular transaction.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $TransactionTimeOutValueInMilliseconds;
    /**
     * The ProcessingOptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $ProcessingOptions;
    /**
     * Constructor method for TrackRequest
     * @uses TrackRequest::setWebAuthenticationDetail()
     * @uses TrackRequest::setClientDetail()
     * @uses TrackRequest::setVersion()
     * @uses TrackRequest::setTransactionDetail()
     * @uses TrackRequest::setSelectionDetails()
     * @uses TrackRequest::setTransactionTimeOutValueInMilliseconds()
     * @uses TrackRequest::setProcessingOptions()
     * @param \Arkitecht\FedEx\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \Arkitecht\FedEx\Structs\ClientDetail $clientDetail
     * @param \Arkitecht\FedEx\Structs\VersionId $version
     * @param \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail
     * @param \Arkitecht\FedEx\Structs\TrackSelectionDetail $selectionDetails
     * @param nonNegativeInteger $transactionTimeOutValueInMilliseconds
     * @param string $processingOptions
     */
    public function __construct(\Arkitecht\FedEx\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \Arkitecht\FedEx\Structs\ClientDetail $clientDetail = null, \Arkitecht\FedEx\Structs\VersionId $version = null, \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null, \Arkitecht\FedEx\Structs\TrackSelectionDetail $selectionDetails = null, $transactionTimeOutValueInMilliseconds = null, $processingOptions = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setSelectionDetails($selectionDetails)
            ->setTransactionTimeOutValueInMilliseconds($transactionTimeOutValueInMilliseconds)
            ->setProcessingOptions($processingOptions);
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
     * @return \Arkitecht\FedEx\Structs\TrackRequest
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
     * @return \Arkitecht\FedEx\Structs\TrackRequest
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
     * @return \Arkitecht\FedEx\Structs\TrackRequest
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
     * @return \Arkitecht\FedEx\Structs\TrackRequest
     */
    public function setTransactionDetail(\Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get SelectionDetails value
     * @return \Arkitecht\FedEx\Structs\TrackSelectionDetail|null
     */
    public function getSelectionDetails()
    {
        return $this->SelectionDetails;
    }
    /**
     * Set SelectionDetails value
     * @param \Arkitecht\FedEx\Structs\TrackSelectionDetail $selectionDetails
     * @return \Arkitecht\FedEx\Structs\TrackRequest
     */
    public function setSelectionDetails(\Arkitecht\FedEx\Structs\TrackSelectionDetail $selectionDetails = null)
    {
        $this->SelectionDetails = $selectionDetails;
        return $this;
    }
    /**
     * Get TransactionTimeOutValueInMilliseconds value
     * @return nonNegativeInteger|null
     */
    public function getTransactionTimeOutValueInMilliseconds()
    {
        return $this->TransactionTimeOutValueInMilliseconds;
    }
    /**
     * Set TransactionTimeOutValueInMilliseconds value
     * @param nonNegativeInteger $transactionTimeOutValueInMilliseconds
     * @return \Arkitecht\FedEx\Structs\TrackRequest
     */
    public function setTransactionTimeOutValueInMilliseconds($transactionTimeOutValueInMilliseconds = null)
    {
        $this->TransactionTimeOutValueInMilliseconds = $transactionTimeOutValueInMilliseconds;
        return $this;
    }
    /**
     * Get ProcessingOptions value
     * @return string|null
     */
    public function getProcessingOptions()
    {
        return $this->ProcessingOptions;
    }
    /**
     * Set ProcessingOptions value
     * @uses \Arkitecht\FedEx\Enums\TrackRequestProcessingOptionType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\TrackRequestProcessingOptionType::getValidValues()
     * @param string $processingOptions
     * @return \Arkitecht\FedEx\Structs\TrackRequest
     */
    public function setProcessingOptions($processingOptions = null)
    {
        if (!\Arkitecht\FedEx\Enums\TrackRequestProcessingOptionType::valueIsValid($processingOptions)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $processingOptions, implode(', ', \Arkitecht\FedEx\Enums\TrackRequestProcessingOptionType::getValidValues())), __LINE__);
        }
        $this->ProcessingOptions = $processingOptions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TrackRequest
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
