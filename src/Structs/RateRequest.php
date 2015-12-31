<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:RateRequest
 * @subpackage Structs
 */
class RateRequest extends AbstractStructBase
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
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The ReturnTransitAndCommit
     * Meta informations extracted from the WSDL
     * - documentation: Allows the caller to specify that the transit time and commit data are to be returned in the reply.
     * - minOccurs: 0
     * @var boolean
     */
    public $ReturnTransitAndCommit;
    /**
     * The CarrierCodes
     * Meta informations extracted from the WSDL
     * - documentation: Candidate carriers for rate-shopping use case. This field is only considered if requestedShipment/serviceType is omitted.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Identification of a FedEx operating company (transportation).
     * @var string
     */
    public $CarrierCodes;
    /**
     * The VariableOptions
     * Meta informations extracted from the WSDL
     * - documentation: Contains zero or more service options whose combinations are to be considered when replying with available services.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: These values control the optional features of service that may be combined in a commitment/rate comparision transaction.
     * @var string
     */
    public $VariableOptions;
    /**
     * The ConsolidationKey
     * Meta informations extracted from the WSDL
     * - documentation: If provided, identifies the consolidation to which this open shipment should be added after successful creation.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ConsolidationKey
     */
    public $ConsolidationKey;
    /**
     * The RequestedShipment
     * Meta informations extracted from the WSDL
     * - documentation: The shipment for which a rate quote (or rate-shopping comparison) is desired.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\RequestedShipment
     */
    public $RequestedShipment;
    /**
     * Constructor method for RateRequest
     * @uses RateRequest::setWebAuthenticationDetail()
     * @uses RateRequest::setClientDetail()
     * @uses RateRequest::setVersion()
     * @uses RateRequest::setTransactionDetail()
     * @uses RateRequest::setReturnTransitAndCommit()
     * @uses RateRequest::setCarrierCodes()
     * @uses RateRequest::setVariableOptions()
     * @uses RateRequest::setConsolidationKey()
     * @uses RateRequest::setRequestedShipment()
     * @param \Arkitecht\FedEx\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \Arkitecht\FedEx\Structs\ClientDetail $clientDetail
     * @param \Arkitecht\FedEx\Structs\VersionId $version
     * @param \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail
     * @param boolean $returnTransitAndCommit
     * @param string $carrierCodes
     * @param string $variableOptions
     * @param \Arkitecht\FedEx\Structs\ConsolidationKey $consolidationKey
     * @param \Arkitecht\FedEx\Structs\RequestedShipment $requestedShipment
     */
    public function __construct(\Arkitecht\FedEx\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \Arkitecht\FedEx\Structs\ClientDetail $clientDetail = null, \Arkitecht\FedEx\Structs\VersionId $version = null, \Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null, $returnTransitAndCommit = null, $carrierCodes = null, $variableOptions = null, \Arkitecht\FedEx\Structs\ConsolidationKey $consolidationKey = null, \Arkitecht\FedEx\Structs\RequestedShipment $requestedShipment = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setReturnTransitAndCommit($returnTransitAndCommit)
            ->setCarrierCodes($carrierCodes)
            ->setVariableOptions($variableOptions)
            ->setConsolidationKey($consolidationKey)
            ->setRequestedShipment($requestedShipment);
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
     * @return \Arkitecht\FedEx\Structs\RateRequest
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
     * @return \Arkitecht\FedEx\Structs\RateRequest
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
     * @return \Arkitecht\FedEx\Structs\RateRequest
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
     * @return \Arkitecht\FedEx\Structs\RateRequest
     */
    public function setTransactionDetail(\Arkitecht\FedEx\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ReturnTransitAndCommit value
     * @return boolean|null
     */
    public function getReturnTransitAndCommit()
    {
        return $this->ReturnTransitAndCommit;
    }
    /**
     * Set ReturnTransitAndCommit value
     * @param boolean $returnTransitAndCommit
     * @return \Arkitecht\FedEx\Structs\RateRequest
     */
    public function setReturnTransitAndCommit($returnTransitAndCommit = null)
    {
        $this->ReturnTransitAndCommit = $returnTransitAndCommit;
        return $this;
    }
    /**
     * Get CarrierCodes value
     * @return string|null
     */
    public function getCarrierCodes()
    {
        return $this->CarrierCodes;
    }
    /**
     * Set CarrierCodes value
     * @uses \Arkitecht\FedEx\Enums\CarrierCodeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\CarrierCodeType::getValidValues()
     * @param string $carrierCodes
     * @return \Arkitecht\FedEx\Structs\RateRequest
     */
    public function setCarrierCodes($carrierCodes = null)
    {
        if (!\Arkitecht\FedEx\Enums\CarrierCodeType::valueIsValid($carrierCodes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCodes, implode(', ', \Arkitecht\FedEx\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCodes = $carrierCodes;
        return $this;
    }
    /**
     * Get VariableOptions value
     * @return string|null
     */
    public function getVariableOptions()
    {
        return $this->VariableOptions;
    }
    /**
     * Set VariableOptions value
     * @uses \Arkitecht\FedEx\Enums\ServiceOptionType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ServiceOptionType::getValidValues()
     * @param string $variableOptions
     * @return \Arkitecht\FedEx\Structs\RateRequest
     */
    public function setVariableOptions($variableOptions = null)
    {
        if (!\Arkitecht\FedEx\Enums\ServiceOptionType::valueIsValid($variableOptions)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $variableOptions, implode(', ', \Arkitecht\FedEx\Enums\ServiceOptionType::getValidValues())), __LINE__);
        }
        $this->VariableOptions = $variableOptions;
        return $this;
    }
    /**
     * Get ConsolidationKey value
     * @return \Arkitecht\FedEx\Structs\ConsolidationKey|null
     */
    public function getConsolidationKey()
    {
        return $this->ConsolidationKey;
    }
    /**
     * Set ConsolidationKey value
     * @param \Arkitecht\FedEx\Structs\ConsolidationKey $consolidationKey
     * @return \Arkitecht\FedEx\Structs\RateRequest
     */
    public function setConsolidationKey(\Arkitecht\FedEx\Structs\ConsolidationKey $consolidationKey = null)
    {
        $this->ConsolidationKey = $consolidationKey;
        return $this;
    }
    /**
     * Get RequestedShipment value
     * @return \Arkitecht\FedEx\Structs\RequestedShipment|null
     */
    public function getRequestedShipment()
    {
        return $this->RequestedShipment;
    }
    /**
     * Set RequestedShipment value
     * @param \Arkitecht\FedEx\Structs\RequestedShipment $requestedShipment
     * @return \Arkitecht\FedEx\Structs\RateRequest
     */
    public function setRequestedShipment(\Arkitecht\FedEx\Structs\RequestedShipment $requestedShipment = null)
    {
        $this->RequestedShipment = $requestedShipment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\RateRequest
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
