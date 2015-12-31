<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomsClearanceDetail Structs
 * @subpackage Structs
 */
class CustomsClearanceDetail extends AbstractStructBase
{
    /**
     * The Brokers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\BrokerDetail
     */
    public $Brokers;
    /**
     * The ClearanceBrokerage
     * Meta informations extracted from the WSDL
     * - documentation: Interacts both with properties of the shipment and contractual relationship with the shipper.
     * - minOccurs: 0
     * - documentation: Specifies the type of brokerage to be applied to a shipment.
     * @var string
     */
    public $ClearanceBrokerage;
    /**
     * The CustomsOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CustomsOptionDetail
     */
    public $CustomsOptions;
    /**
     * The ImporterOfRecord
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Party
     */
    public $ImporterOfRecord;
    /**
     * The RecipientCustomsId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how the recipient is identified for customs purposes; the requirements on this information vary with destination country.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\RecipientCustomsId
     */
    public $RecipientCustomsId;
    /**
     * The DutiesPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Payment
     */
    public $DutiesPayment;
    /**
     * The DocumentContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentContent;
    /**
     * The CustomsValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $CustomsValue;
    /**
     * The FreightOnValue
     * Meta informations extracted from the WSDL
     * - documentation: Identifies responsibilities with respect to loss, damage, etc.
     * - minOccurs: 0
     * - documentation: Identifies responsibilities with respect to loss, damage, etc.
     * @var string
     */
    public $FreightOnValue;
    /**
     * The InsuranceCharges
     * Meta informations extracted from the WSDL
     * - documentation: Documents amount paid to third party for coverage of shipment content.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $InsuranceCharges;
    /**
     * The PartiesToTransactionAreRelated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $PartiesToTransactionAreRelated;
    /**
     * The CommercialInvoice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CommercialInvoice
     */
    public $CommercialInvoice;
    /**
     * The Commodities
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Commodity
     */
    public $Commodities;
    /**
     * The ExportDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ExportDetail
     */
    public $ExportDetail;
    /**
     * The RegulatoryControls
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $RegulatoryControls;
    /**
     * Constructor method for CustomsClearanceDetail
     * @uses CustomsClearanceDetail::setBrokers()
     * @uses CustomsClearanceDetail::setClearanceBrokerage()
     * @uses CustomsClearanceDetail::setCustomsOptions()
     * @uses CustomsClearanceDetail::setImporterOfRecord()
     * @uses CustomsClearanceDetail::setRecipientCustomsId()
     * @uses CustomsClearanceDetail::setDutiesPayment()
     * @uses CustomsClearanceDetail::setDocumentContent()
     * @uses CustomsClearanceDetail::setCustomsValue()
     * @uses CustomsClearanceDetail::setFreightOnValue()
     * @uses CustomsClearanceDetail::setInsuranceCharges()
     * @uses CustomsClearanceDetail::setPartiesToTransactionAreRelated()
     * @uses CustomsClearanceDetail::setCommercialInvoice()
     * @uses CustomsClearanceDetail::setCommodities()
     * @uses CustomsClearanceDetail::setExportDetail()
     * @uses CustomsClearanceDetail::setRegulatoryControls()
     * @param \Arkitecht\FedEx\Structs\BrokerDetail $brokers
     * @param string $clearanceBrokerage
     * @param \Arkitecht\FedEx\Structs\CustomsOptionDetail $customsOptions
     * @param \Arkitecht\FedEx\Structs\Party $importerOfRecord
     * @param \Arkitecht\FedEx\Structs\RecipientCustomsId $recipientCustomsId
     * @param \Arkitecht\FedEx\Structs\Payment $dutiesPayment
     * @param string $documentContent
     * @param \Arkitecht\FedEx\Structs\Money $customsValue
     * @param string $freightOnValue
     * @param \Arkitecht\FedEx\Structs\Money $insuranceCharges
     * @param boolean $partiesToTransactionAreRelated
     * @param \Arkitecht\FedEx\Structs\CommercialInvoice $commercialInvoice
     * @param \Arkitecht\FedEx\Structs\Commodity $commodities
     * @param \Arkitecht\FedEx\Structs\ExportDetail $exportDetail
     * @param string $regulatoryControls
     */
    public function __construct(\Arkitecht\FedEx\Structs\BrokerDetail $brokers = null, $clearanceBrokerage = null, \Arkitecht\FedEx\Structs\CustomsOptionDetail $customsOptions = null, \Arkitecht\FedEx\Structs\Party $importerOfRecord = null, \Arkitecht\FedEx\Structs\RecipientCustomsId $recipientCustomsId = null, \Arkitecht\FedEx\Structs\Payment $dutiesPayment = null, $documentContent = null, \Arkitecht\FedEx\Structs\Money $customsValue = null, $freightOnValue = null, \Arkitecht\FedEx\Structs\Money $insuranceCharges = null, $partiesToTransactionAreRelated = null, \Arkitecht\FedEx\Structs\CommercialInvoice $commercialInvoice = null, \Arkitecht\FedEx\Structs\Commodity $commodities = null, \Arkitecht\FedEx\Structs\ExportDetail $exportDetail = null, $regulatoryControls = null)
    {
        $this
            ->setBrokers($brokers)
            ->setClearanceBrokerage($clearanceBrokerage)
            ->setCustomsOptions($customsOptions)
            ->setImporterOfRecord($importerOfRecord)
            ->setRecipientCustomsId($recipientCustomsId)
            ->setDutiesPayment($dutiesPayment)
            ->setDocumentContent($documentContent)
            ->setCustomsValue($customsValue)
            ->setFreightOnValue($freightOnValue)
            ->setInsuranceCharges($insuranceCharges)
            ->setPartiesToTransactionAreRelated($partiesToTransactionAreRelated)
            ->setCommercialInvoice($commercialInvoice)
            ->setCommodities($commodities)
            ->setExportDetail($exportDetail)
            ->setRegulatoryControls($regulatoryControls);
    }
    /**
     * Get Brokers value
     * @return \Arkitecht\FedEx\Structs\BrokerDetail|null
     */
    public function getBrokers()
    {
        return $this->Brokers;
    }
    /**
     * Set Brokers value
     * @param \Arkitecht\FedEx\Structs\BrokerDetail $brokers
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail
     */
    public function setBrokers(\Arkitecht\FedEx\Structs\BrokerDetail $brokers = null)
    {
        $this->Brokers = $brokers;
        return $this;
    }
    /**
     * Get ClearanceBrokerage value
     * @return string|null
     */
    public function getClearanceBrokerage()
    {
        return $this->ClearanceBrokerage;
    }
    /**
     * Set ClearanceBrokerage value
     * @uses \Arkitecht\FedEx\Enums\ClearanceBrokerageType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ClearanceBrokerageType::getValidValues()
     * @param string $clearanceBrokerage
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail
     */
    public function setClearanceBrokerage($clearanceBrokerage = null)
    {
        if (!\Arkitecht\FedEx\Enums\ClearanceBrokerageType::valueIsValid($clearanceBrokerage)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $clearanceBrokerage, implode(', ', \Arkitecht\FedEx\Enums\ClearanceBrokerageType::getValidValues())), __LINE__);
        }
        $this->ClearanceBrokerage = $clearanceBrokerage;
        return $this;
    }
    /**
     * Get CustomsOptions value
     * @return \Arkitecht\FedEx\Structs\CustomsOptionDetail|null
     */
    public function getCustomsOptions()
    {
        return $this->CustomsOptions;
    }
    /**
     * Set CustomsOptions value
     * @param \Arkitecht\FedEx\Structs\CustomsOptionDetail $customsOptions
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail
     */
    public function setCustomsOptions(\Arkitecht\FedEx\Structs\CustomsOptionDetail $customsOptions = null)
    {
        $this->CustomsOptions = $customsOptions;
        return $this;
    }
    /**
     * Get ImporterOfRecord value
     * @return \Arkitecht\FedEx\Structs\Party|null
     */
    public function getImporterOfRecord()
    {
        return $this->ImporterOfRecord;
    }
    /**
     * Set ImporterOfRecord value
     * @param \Arkitecht\FedEx\Structs\Party $importerOfRecord
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail
     */
    public function setImporterOfRecord(\Arkitecht\FedEx\Structs\Party $importerOfRecord = null)
    {
        $this->ImporterOfRecord = $importerOfRecord;
        return $this;
    }
    /**
     * Get RecipientCustomsId value
     * @return \Arkitecht\FedEx\Structs\RecipientCustomsId|null
     */
    public function getRecipientCustomsId()
    {
        return $this->RecipientCustomsId;
    }
    /**
     * Set RecipientCustomsId value
     * @param \Arkitecht\FedEx\Structs\RecipientCustomsId $recipientCustomsId
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail
     */
    public function setRecipientCustomsId(\Arkitecht\FedEx\Structs\RecipientCustomsId $recipientCustomsId = null)
    {
        $this->RecipientCustomsId = $recipientCustomsId;
        return $this;
    }
    /**
     * Get DutiesPayment value
     * @return \Arkitecht\FedEx\Structs\Payment|null
     */
    public function getDutiesPayment()
    {
        return $this->DutiesPayment;
    }
    /**
     * Set DutiesPayment value
     * @param \Arkitecht\FedEx\Structs\Payment $dutiesPayment
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail
     */
    public function setDutiesPayment(\Arkitecht\FedEx\Structs\Payment $dutiesPayment = null)
    {
        $this->DutiesPayment = $dutiesPayment;
        return $this;
    }
    /**
     * Get DocumentContent value
     * @return string|null
     */
    public function getDocumentContent()
    {
        return $this->DocumentContent;
    }
    /**
     * Set DocumentContent value
     * @uses \Arkitecht\FedEx\Enums\InternationalDocumentContentType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\InternationalDocumentContentType::getValidValues()
     * @param string $documentContent
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail
     */
    public function setDocumentContent($documentContent = null)
    {
        if (!\Arkitecht\FedEx\Enums\InternationalDocumentContentType::valueIsValid($documentContent)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentContent, implode(', ', \Arkitecht\FedEx\Enums\InternationalDocumentContentType::getValidValues())), __LINE__);
        }
        $this->DocumentContent = $documentContent;
        return $this;
    }
    /**
     * Get CustomsValue value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getCustomsValue()
    {
        return $this->CustomsValue;
    }
    /**
     * Set CustomsValue value
     * @param \Arkitecht\FedEx\Structs\Money $customsValue
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail
     */
    public function setCustomsValue(\Arkitecht\FedEx\Structs\Money $customsValue = null)
    {
        $this->CustomsValue = $customsValue;
        return $this;
    }
    /**
     * Get FreightOnValue value
     * @return string|null
     */
    public function getFreightOnValue()
    {
        return $this->FreightOnValue;
    }
    /**
     * Set FreightOnValue value
     * @uses \Arkitecht\FedEx\Enums\FreightOnValueType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\FreightOnValueType::getValidValues()
     * @param string $freightOnValue
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail
     */
    public function setFreightOnValue($freightOnValue = null)
    {
        if (!\Arkitecht\FedEx\Enums\FreightOnValueType::valueIsValid($freightOnValue)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $freightOnValue, implode(', ', \Arkitecht\FedEx\Enums\FreightOnValueType::getValidValues())), __LINE__);
        }
        $this->FreightOnValue = $freightOnValue;
        return $this;
    }
    /**
     * Get InsuranceCharges value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getInsuranceCharges()
    {
        return $this->InsuranceCharges;
    }
    /**
     * Set InsuranceCharges value
     * @param \Arkitecht\FedEx\Structs\Money $insuranceCharges
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail
     */
    public function setInsuranceCharges(\Arkitecht\FedEx\Structs\Money $insuranceCharges = null)
    {
        $this->InsuranceCharges = $insuranceCharges;
        return $this;
    }
    /**
     * Get PartiesToTransactionAreRelated value
     * @return boolean|null
     */
    public function getPartiesToTransactionAreRelated()
    {
        return $this->PartiesToTransactionAreRelated;
    }
    /**
     * Set PartiesToTransactionAreRelated value
     * @param boolean $partiesToTransactionAreRelated
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail
     */
    public function setPartiesToTransactionAreRelated($partiesToTransactionAreRelated = null)
    {
        $this->PartiesToTransactionAreRelated = $partiesToTransactionAreRelated;
        return $this;
    }
    /**
     * Get CommercialInvoice value
     * @return \Arkitecht\FedEx\Structs\CommercialInvoice|null
     */
    public function getCommercialInvoice()
    {
        return $this->CommercialInvoice;
    }
    /**
     * Set CommercialInvoice value
     * @param \Arkitecht\FedEx\Structs\CommercialInvoice $commercialInvoice
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail
     */
    public function setCommercialInvoice(\Arkitecht\FedEx\Structs\CommercialInvoice $commercialInvoice = null)
    {
        $this->CommercialInvoice = $commercialInvoice;
        return $this;
    }
    /**
     * Get Commodities value
     * @return \Arkitecht\FedEx\Structs\Commodity|null
     */
    public function getCommodities()
    {
        return $this->Commodities;
    }
    /**
     * Set Commodities value
     * @param \Arkitecht\FedEx\Structs\Commodity $commodities
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail
     */
    public function setCommodities(\Arkitecht\FedEx\Structs\Commodity $commodities = null)
    {
        $this->Commodities = $commodities;
        return $this;
    }
    /**
     * Get ExportDetail value
     * @return \Arkitecht\FedEx\Structs\ExportDetail|null
     */
    public function getExportDetail()
    {
        return $this->ExportDetail;
    }
    /**
     * Set ExportDetail value
     * @param \Arkitecht\FedEx\Structs\ExportDetail $exportDetail
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail
     */
    public function setExportDetail(\Arkitecht\FedEx\Structs\ExportDetail $exportDetail = null)
    {
        $this->ExportDetail = $exportDetail;
        return $this;
    }
    /**
     * Get RegulatoryControls value
     * @return string|null
     */
    public function getRegulatoryControls()
    {
        return $this->RegulatoryControls;
    }
    /**
     * Set RegulatoryControls value
     * @uses \Arkitecht\FedEx\Enums\RegulatoryControlType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\RegulatoryControlType::getValidValues()
     * @param string $regulatoryControls
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail
     */
    public function setRegulatoryControls($regulatoryControls = null)
    {
        if (!\Arkitecht\FedEx\Enums\RegulatoryControlType::valueIsValid($regulatoryControls)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $regulatoryControls, implode(', ', \Arkitecht\FedEx\Enums\RegulatoryControlType::getValidValues())), __LINE__);
        }
        $this->RegulatoryControls = $regulatoryControls;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CustomsClearanceDetail
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
