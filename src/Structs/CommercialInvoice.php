<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommercialInvoice Structs
 * Meta informations extracted from the WSDL
 * - documentation: CommercialInvoice element is required for electronic upload of CI data. It will serve to create/transmit an Electronic Commercial Invoice through the FedEx Systems. Customers are responsible for printing their own Commercial
 * Invoice.If you would likeFedEx to generate a Commercial Invoice and transmit it to Customs. for clearance purposes, you need to specify that in the ShippingDocumentSpecification element. If you would like a copy of the Commercial Invoice that FedEx
 * generated returned to you in reply it needs to be specified in the ETDDetail/RequestedDocumentCopies element. Commercial Invoice support consists of maximum of 99 commodity line items.
 * @subpackage Structs
 */
class CommercialInvoice extends AbstractStructBase
{
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - documentation: Any comments that need to be communicated about this shipment.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var string
     */
    public $Comments;
    /**
     * The FreightCharge
     * Meta informations extracted from the WSDL
     * - documentation: Any freight charges that are associated with this shipment.
     * - minOccurs: 0
     * - documentation: The descriptive data for the medium of exchange for FedEx services.
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $FreightCharge;
    /**
     * The TaxesOrMiscellaneousCharge
     * Meta informations extracted from the WSDL
     * - documentation: Any taxes or miscellaneous charges(other than Freight charges or Insurance charges) that are associated with this shipment.
     * - minOccurs: 0
     * - documentation: The descriptive data for the medium of exchange for FedEx services.
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TaxesOrMiscellaneousCharge;
    /**
     * The TaxesOrMiscellaneousChargeType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies which kind of charge is being recorded in the preceding field.
     * - minOccurs: 0
     * @var string
     */
    public $TaxesOrMiscellaneousChargeType;
    /**
     * The PackingCosts
     * Meta informations extracted from the WSDL
     * - documentation: Any packing costs that are associated with this shipment.
     * - minOccurs: 0
     * - documentation: The descriptive data for the medium of exchange for FedEx services.
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $PackingCosts;
    /**
     * The HandlingCosts
     * Meta informations extracted from the WSDL
     * - documentation: Any handling costs that are associated with this shipment.
     * - minOccurs: 0
     * - documentation: The descriptive data for the medium of exchange for FedEx services.
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $HandlingCosts;
    /**
     * The SpecialInstructions
     * Meta informations extracted from the WSDL
     * - documentation: Free-form text.
     * - minOccurs: 0
     * @var string
     */
    public $SpecialInstructions;
    /**
     * The DeclarationStatement
     * Meta informations extracted from the WSDL
     * - documentation: Free-form text.
     * - minOccurs: 0
     * @var string
     */
    public $DeclarationStatement;
    /**
     * The PaymentTerms
     * Meta informations extracted from the WSDL
     * - documentation: Free-form text.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentTerms;
    /**
     * The Purpose
     * Meta informations extracted from the WSDL
     * - documentation: The reason for the shipment. Note: SOLD is not a valid purpose for a Proforma Invoice.
     * - minOccurs: 0
     * - documentation: Test for the Commercial Invoice. Note that Sold is not a valid Purpose for a Proforma Invoice.
     * @var string
     */
    public $Purpose;
    /**
     * The CustomerReferences
     * Meta informations extracted from the WSDL
     * - documentation: Additional customer reference data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Reference information to be associated with this package.
     * @var \Arkitecht\FedEx\Structs\CustomerReference
     */
    public $CustomerReferences;
    /**
     * The OriginatorName
     * Meta informations extracted from the WSDL
     * - documentation: Name of the International Expert that completed the Commercial Invoice different from Sender.
     * - minOccurs: 0
     * @var string
     */
    public $OriginatorName;
    /**
     * The TermsOfSale
     * Meta informations extracted from the WSDL
     * - documentation: Required for dutiable international Express or Ground shipments. This field is not applicable to an international PIB(document) or a non-document which does not require a Commercial Invoice.
     * - minOccurs: 0
     * @var string
     */
    public $TermsOfSale;
    /**
     * Constructor method for CommercialInvoice
     * @uses CommercialInvoice::setComments()
     * @uses CommercialInvoice::setFreightCharge()
     * @uses CommercialInvoice::setTaxesOrMiscellaneousCharge()
     * @uses CommercialInvoice::setTaxesOrMiscellaneousChargeType()
     * @uses CommercialInvoice::setPackingCosts()
     * @uses CommercialInvoice::setHandlingCosts()
     * @uses CommercialInvoice::setSpecialInstructions()
     * @uses CommercialInvoice::setDeclarationStatement()
     * @uses CommercialInvoice::setPaymentTerms()
     * @uses CommercialInvoice::setPurpose()
     * @uses CommercialInvoice::setCustomerReferences()
     * @uses CommercialInvoice::setOriginatorName()
     * @uses CommercialInvoice::setTermsOfSale()
     * @param string $comments
     * @param \Arkitecht\FedEx\Structs\Money $freightCharge
     * @param \Arkitecht\FedEx\Structs\Money $taxesOrMiscellaneousCharge
     * @param string $taxesOrMiscellaneousChargeType
     * @param \Arkitecht\FedEx\Structs\Money $packingCosts
     * @param \Arkitecht\FedEx\Structs\Money $handlingCosts
     * @param string $specialInstructions
     * @param string $declarationStatement
     * @param string $paymentTerms
     * @param string $purpose
     * @param \Arkitecht\FedEx\Structs\CustomerReference $customerReferences
     * @param string $originatorName
     * @param string $termsOfSale
     */
    public function __construct($comments = null, \Arkitecht\FedEx\Structs\Money $freightCharge = null, \Arkitecht\FedEx\Structs\Money $taxesOrMiscellaneousCharge = null, $taxesOrMiscellaneousChargeType = null, \Arkitecht\FedEx\Structs\Money $packingCosts = null, \Arkitecht\FedEx\Structs\Money $handlingCosts = null, $specialInstructions = null, $declarationStatement = null, $paymentTerms = null, $purpose = null, \Arkitecht\FedEx\Structs\CustomerReference $customerReferences = null, $originatorName = null, $termsOfSale = null)
    {
        $this
            ->setComments($comments)
            ->setFreightCharge($freightCharge)
            ->setTaxesOrMiscellaneousCharge($taxesOrMiscellaneousCharge)
            ->setTaxesOrMiscellaneousChargeType($taxesOrMiscellaneousChargeType)
            ->setPackingCosts($packingCosts)
            ->setHandlingCosts($handlingCosts)
            ->setSpecialInstructions($specialInstructions)
            ->setDeclarationStatement($declarationStatement)
            ->setPaymentTerms($paymentTerms)
            ->setPurpose($purpose)
            ->setCustomerReferences($customerReferences)
            ->setOriginatorName($originatorName)
            ->setTermsOfSale($termsOfSale);
    }
    /**
     * Get Comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param string $comments
     * @return \Arkitecht\FedEx\Structs\CommercialInvoice
     */
    public function setComments($comments = null)
    {
        $this->Comments = $comments;
        return $this;
    }
    /**
     * Get FreightCharge value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getFreightCharge()
    {
        return $this->FreightCharge;
    }
    /**
     * Set FreightCharge value
     * @param \Arkitecht\FedEx\Structs\Money $freightCharge
     * @return \Arkitecht\FedEx\Structs\CommercialInvoice
     */
    public function setFreightCharge(\Arkitecht\FedEx\Structs\Money $freightCharge = null)
    {
        $this->FreightCharge = $freightCharge;
        return $this;
    }
    /**
     * Get TaxesOrMiscellaneousCharge value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getTaxesOrMiscellaneousCharge()
    {
        return $this->TaxesOrMiscellaneousCharge;
    }
    /**
     * Set TaxesOrMiscellaneousCharge value
     * @param \Arkitecht\FedEx\Structs\Money $taxesOrMiscellaneousCharge
     * @return \Arkitecht\FedEx\Structs\CommercialInvoice
     */
    public function setTaxesOrMiscellaneousCharge(\Arkitecht\FedEx\Structs\Money $taxesOrMiscellaneousCharge = null)
    {
        $this->TaxesOrMiscellaneousCharge = $taxesOrMiscellaneousCharge;
        return $this;
    }
    /**
     * Get TaxesOrMiscellaneousChargeType value
     * @return string|null
     */
    public function getTaxesOrMiscellaneousChargeType()
    {
        return $this->TaxesOrMiscellaneousChargeType;
    }
    /**
     * Set TaxesOrMiscellaneousChargeType value
     * @uses \Arkitecht\FedEx\Enums\TaxesOrMiscellaneousChargeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\TaxesOrMiscellaneousChargeType::getValidValues()
     * @param string $taxesOrMiscellaneousChargeType
     * @return \Arkitecht\FedEx\Structs\CommercialInvoice
     */
    public function setTaxesOrMiscellaneousChargeType($taxesOrMiscellaneousChargeType = null)
    {
        if (!\Arkitecht\FedEx\Enums\TaxesOrMiscellaneousChargeType::valueIsValid($taxesOrMiscellaneousChargeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $taxesOrMiscellaneousChargeType, implode(', ', \Arkitecht\FedEx\Enums\TaxesOrMiscellaneousChargeType::getValidValues())), __LINE__);
        }
        $this->TaxesOrMiscellaneousChargeType = $taxesOrMiscellaneousChargeType;
        return $this;
    }
    /**
     * Get PackingCosts value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getPackingCosts()
    {
        return $this->PackingCosts;
    }
    /**
     * Set PackingCosts value
     * @param \Arkitecht\FedEx\Structs\Money $packingCosts
     * @return \Arkitecht\FedEx\Structs\CommercialInvoice
     */
    public function setPackingCosts(\Arkitecht\FedEx\Structs\Money $packingCosts = null)
    {
        $this->PackingCosts = $packingCosts;
        return $this;
    }
    /**
     * Get HandlingCosts value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getHandlingCosts()
    {
        return $this->HandlingCosts;
    }
    /**
     * Set HandlingCosts value
     * @param \Arkitecht\FedEx\Structs\Money $handlingCosts
     * @return \Arkitecht\FedEx\Structs\CommercialInvoice
     */
    public function setHandlingCosts(\Arkitecht\FedEx\Structs\Money $handlingCosts = null)
    {
        $this->HandlingCosts = $handlingCosts;
        return $this;
    }
    /**
     * Get SpecialInstructions value
     * @return string|null
     */
    public function getSpecialInstructions()
    {
        return $this->SpecialInstructions;
    }
    /**
     * Set SpecialInstructions value
     * @param string $specialInstructions
     * @return \Arkitecht\FedEx\Structs\CommercialInvoice
     */
    public function setSpecialInstructions($specialInstructions = null)
    {
        $this->SpecialInstructions = $specialInstructions;
        return $this;
    }
    /**
     * Get DeclarationStatement value
     * @return string|null
     */
    public function getDeclarationStatement()
    {
        return $this->DeclarationStatement;
    }
    /**
     * Set DeclarationStatement value
     * @param string $declarationStatement
     * @return \Arkitecht\FedEx\Structs\CommercialInvoice
     */
    public function setDeclarationStatement($declarationStatement = null)
    {
        $this->DeclarationStatement = $declarationStatement;
        return $this;
    }
    /**
     * Get PaymentTerms value
     * @return string|null
     */
    public function getPaymentTerms()
    {
        return $this->PaymentTerms;
    }
    /**
     * Set PaymentTerms value
     * @param string $paymentTerms
     * @return \Arkitecht\FedEx\Structs\CommercialInvoice
     */
    public function setPaymentTerms($paymentTerms = null)
    {
        $this->PaymentTerms = $paymentTerms;
        return $this;
    }
    /**
     * Get Purpose value
     * @return string|null
     */
    public function getPurpose()
    {
        return $this->Purpose;
    }
    /**
     * Set Purpose value
     * @uses \Arkitecht\FedEx\Enums\PurposeOfShipmentType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\PurposeOfShipmentType::getValidValues()
     * @param string $purpose
     * @return \Arkitecht\FedEx\Structs\CommercialInvoice
     */
    public function setPurpose($purpose = null)
    {
        if (!\Arkitecht\FedEx\Enums\PurposeOfShipmentType::valueIsValid($purpose)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $purpose, implode(', ', \Arkitecht\FedEx\Enums\PurposeOfShipmentType::getValidValues())), __LINE__);
        }
        $this->Purpose = $purpose;
        return $this;
    }
    /**
     * Get CustomerReferences value
     * @return \Arkitecht\FedEx\Structs\CustomerReference|null
     */
    public function getCustomerReferences()
    {
        return $this->CustomerReferences;
    }
    /**
     * Set CustomerReferences value
     * @param \Arkitecht\FedEx\Structs\CustomerReference $customerReferences
     * @return \Arkitecht\FedEx\Structs\CommercialInvoice
     */
    public function setCustomerReferences(\Arkitecht\FedEx\Structs\CustomerReference $customerReferences = null)
    {
        $this->CustomerReferences = $customerReferences;
        return $this;
    }
    /**
     * Get OriginatorName value
     * @return string|null
     */
    public function getOriginatorName()
    {
        return $this->OriginatorName;
    }
    /**
     * Set OriginatorName value
     * @param string $originatorName
     * @return \Arkitecht\FedEx\Structs\CommercialInvoice
     */
    public function setOriginatorName($originatorName = null)
    {
        $this->OriginatorName = $originatorName;
        return $this;
    }
    /**
     * Get TermsOfSale value
     * @return string|null
     */
    public function getTermsOfSale()
    {
        return $this->TermsOfSale;
    }
    /**
     * Set TermsOfSale value
     * @param string $termsOfSale
     * @return \Arkitecht\FedEx\Structs\CommercialInvoice
     */
    public function setTermsOfSale($termsOfSale = null)
    {
        $this->TermsOfSale = $termsOfSale;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CommercialInvoice
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
