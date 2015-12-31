<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NaftaCertificateOfOriginDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Data required to produce a Certificate of Origin document. Remaining content (business data) to be defined once requirements have been completed.
 * @subpackage Structs
 */
class NaftaCertificateOfOriginDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Specifies characteristics of a shipping document to be produced.
     * @var \Arkitecht\FedEx\Structs\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The BlanketPeriod
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\DateRange
     */
    public $BlanketPeriod;
    /**
     * The ImporterSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which Party (if any) from the shipment is to be used as the source of importer data on the NAFTA COO form.
     * - minOccurs: 0
     * @var string
     */
    public $ImporterSpecification;
    /**
     * The SignatureContact
     * Meta informations extracted from the WSDL
     * - documentation: Contact information for "Authorized Signature" area of form.
     * - minOccurs: 0
     * - documentation: The descriptive data for a point-of-contact person.
     * @var \Arkitecht\FedEx\Structs\Contact
     */
    public $SignatureContact;
    /**
     * The ProducerSpecification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProducerSpecification;
    /**
     * The Producers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\NaftaProducer
     */
    public $Producers;
    /**
     * The CustomerImageUsages
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CustomerImageUsage
     */
    public $CustomerImageUsages;
    /**
     * Constructor method for NaftaCertificateOfOriginDetail
     * @uses NaftaCertificateOfOriginDetail::setFormat()
     * @uses NaftaCertificateOfOriginDetail::setBlanketPeriod()
     * @uses NaftaCertificateOfOriginDetail::setImporterSpecification()
     * @uses NaftaCertificateOfOriginDetail::setSignatureContact()
     * @uses NaftaCertificateOfOriginDetail::setProducerSpecification()
     * @uses NaftaCertificateOfOriginDetail::setProducers()
     * @uses NaftaCertificateOfOriginDetail::setCustomerImageUsages()
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentFormat $format
     * @param \Arkitecht\FedEx\Structs\DateRange $blanketPeriod
     * @param string $importerSpecification
     * @param \Arkitecht\FedEx\Structs\Contact $signatureContact
     * @param string $producerSpecification
     * @param \Arkitecht\FedEx\Structs\NaftaProducer $producers
     * @param \Arkitecht\FedEx\Structs\CustomerImageUsage $customerImageUsages
     */
    public function __construct(\Arkitecht\FedEx\Structs\ShippingDocumentFormat $format = null, \Arkitecht\FedEx\Structs\DateRange $blanketPeriod = null, $importerSpecification = null, \Arkitecht\FedEx\Structs\Contact $signatureContact = null, $producerSpecification = null, \Arkitecht\FedEx\Structs\NaftaProducer $producers = null, \Arkitecht\FedEx\Structs\CustomerImageUsage $customerImageUsages = null)
    {
        $this
            ->setFormat($format)
            ->setBlanketPeriod($blanketPeriod)
            ->setImporterSpecification($importerSpecification)
            ->setSignatureContact($signatureContact)
            ->setProducerSpecification($producerSpecification)
            ->setProducers($producers)
            ->setCustomerImageUsages($customerImageUsages);
    }
    /**
     * Get Format value
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentFormat|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentFormat $format
     * @return \Arkitecht\FedEx\Structs\NaftaCertificateOfOriginDetail
     */
    public function setFormat(\Arkitecht\FedEx\Structs\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get BlanketPeriod value
     * @return \Arkitecht\FedEx\Structs\DateRange|null
     */
    public function getBlanketPeriod()
    {
        return $this->BlanketPeriod;
    }
    /**
     * Set BlanketPeriod value
     * @param \Arkitecht\FedEx\Structs\DateRange $blanketPeriod
     * @return \Arkitecht\FedEx\Structs\NaftaCertificateOfOriginDetail
     */
    public function setBlanketPeriod(\Arkitecht\FedEx\Structs\DateRange $blanketPeriod = null)
    {
        $this->BlanketPeriod = $blanketPeriod;
        return $this;
    }
    /**
     * Get ImporterSpecification value
     * @return string|null
     */
    public function getImporterSpecification()
    {
        return $this->ImporterSpecification;
    }
    /**
     * Set ImporterSpecification value
     * @uses \Arkitecht\FedEx\Enums\NaftaImporterSpecificationType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\NaftaImporterSpecificationType::getValidValues()
     * @param string $importerSpecification
     * @return \Arkitecht\FedEx\Structs\NaftaCertificateOfOriginDetail
     */
    public function setImporterSpecification($importerSpecification = null)
    {
        if (!\Arkitecht\FedEx\Enums\NaftaImporterSpecificationType::valueIsValid($importerSpecification)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $importerSpecification, implode(', ', \Arkitecht\FedEx\Enums\NaftaImporterSpecificationType::getValidValues())), __LINE__);
        }
        $this->ImporterSpecification = $importerSpecification;
        return $this;
    }
    /**
     * Get SignatureContact value
     * @return \Arkitecht\FedEx\Structs\Contact|null
     */
    public function getSignatureContact()
    {
        return $this->SignatureContact;
    }
    /**
     * Set SignatureContact value
     * @param \Arkitecht\FedEx\Structs\Contact $signatureContact
     * @return \Arkitecht\FedEx\Structs\NaftaCertificateOfOriginDetail
     */
    public function setSignatureContact(\Arkitecht\FedEx\Structs\Contact $signatureContact = null)
    {
        $this->SignatureContact = $signatureContact;
        return $this;
    }
    /**
     * Get ProducerSpecification value
     * @return string|null
     */
    public function getProducerSpecification()
    {
        return $this->ProducerSpecification;
    }
    /**
     * Set ProducerSpecification value
     * @uses \Arkitecht\FedEx\Enums\NaftaProducerSpecificationType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\NaftaProducerSpecificationType::getValidValues()
     * @param string $producerSpecification
     * @return \Arkitecht\FedEx\Structs\NaftaCertificateOfOriginDetail
     */
    public function setProducerSpecification($producerSpecification = null)
    {
        if (!\Arkitecht\FedEx\Enums\NaftaProducerSpecificationType::valueIsValid($producerSpecification)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $producerSpecification, implode(', ', \Arkitecht\FedEx\Enums\NaftaProducerSpecificationType::getValidValues())), __LINE__);
        }
        $this->ProducerSpecification = $producerSpecification;
        return $this;
    }
    /**
     * Get Producers value
     * @return \Arkitecht\FedEx\Structs\NaftaProducer|null
     */
    public function getProducers()
    {
        return $this->Producers;
    }
    /**
     * Set Producers value
     * @param \Arkitecht\FedEx\Structs\NaftaProducer $producers
     * @return \Arkitecht\FedEx\Structs\NaftaCertificateOfOriginDetail
     */
    public function setProducers(\Arkitecht\FedEx\Structs\NaftaProducer $producers = null)
    {
        $this->Producers = $producers;
        return $this;
    }
    /**
     * Get CustomerImageUsages value
     * @return \Arkitecht\FedEx\Structs\CustomerImageUsage|null
     */
    public function getCustomerImageUsages()
    {
        return $this->CustomerImageUsages;
    }
    /**
     * Set CustomerImageUsages value
     * @param \Arkitecht\FedEx\Structs\CustomerImageUsage $customerImageUsages
     * @return \Arkitecht\FedEx\Structs\NaftaCertificateOfOriginDetail
     */
    public function setCustomerImageUsages(\Arkitecht\FedEx\Structs\CustomerImageUsage $customerImageUsages = null)
    {
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\NaftaCertificateOfOriginDetail
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
