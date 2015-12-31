<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadDocumentReferenceDetail Structs
 * @subpackage Structs
 */
class UploadDocumentReferenceDetail extends AbstractStructBase
{
    /**
     * The LineNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $LineNumber;
    /**
     * The CustomerReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerReference;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Description of the uploaded document.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The DocumentProducer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentProducer;
    /**
     * The DocumentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentType;
    /**
     * The DocumentId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentId;
    /**
     * The DocumentIdProducer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Specifies the application that is responsible for managing the document id.
     * @var string
     */
    public $DocumentIdProducer;
    /**
     * Constructor method for UploadDocumentReferenceDetail
     * @uses UploadDocumentReferenceDetail::setLineNumber()
     * @uses UploadDocumentReferenceDetail::setCustomerReference()
     * @uses UploadDocumentReferenceDetail::setDescription()
     * @uses UploadDocumentReferenceDetail::setDocumentProducer()
     * @uses UploadDocumentReferenceDetail::setDocumentType()
     * @uses UploadDocumentReferenceDetail::setDocumentId()
     * @uses UploadDocumentReferenceDetail::setDocumentIdProducer()
     * @param nonNegativeInteger $lineNumber
     * @param string $customerReference
     * @param string $description
     * @param string $documentProducer
     * @param string $documentType
     * @param string $documentId
     * @param string $documentIdProducer
     */
    public function __construct($lineNumber = null, $customerReference = null, $description = null, $documentProducer = null, $documentType = null, $documentId = null, $documentIdProducer = null)
    {
        $this
            ->setLineNumber($lineNumber)
            ->setCustomerReference($customerReference)
            ->setDescription($description)
            ->setDocumentProducer($documentProducer)
            ->setDocumentType($documentType)
            ->setDocumentId($documentId)
            ->setDocumentIdProducer($documentIdProducer);
    }
    /**
     * Get LineNumber value
     * @return nonNegativeInteger|null
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }
    /**
     * Set LineNumber value
     * @param nonNegativeInteger $lineNumber
     * @return \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail
     */
    public function setLineNumber($lineNumber = null)
    {
        $this->LineNumber = $lineNumber;
        return $this;
    }
    /**
     * Get CustomerReference value
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->CustomerReference;
    }
    /**
     * Set CustomerReference value
     * @param string $customerReference
     * @return \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail
     */
    public function setCustomerReference($customerReference = null)
    {
        $this->CustomerReference = $customerReference;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get DocumentProducer value
     * @return string|null
     */
    public function getDocumentProducer()
    {
        return $this->DocumentProducer;
    }
    /**
     * Set DocumentProducer value
     * @uses \Arkitecht\FedEx\Enums\UploadDocumentProducerType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\UploadDocumentProducerType::getValidValues()
     * @param string $documentProducer
     * @return \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail
     */
    public function setDocumentProducer($documentProducer = null)
    {
        if (!\Arkitecht\FedEx\Enums\UploadDocumentProducerType::valueIsValid($documentProducer)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentProducer, implode(', ', \Arkitecht\FedEx\Enums\UploadDocumentProducerType::getValidValues())), __LINE__);
        }
        $this->DocumentProducer = $documentProducer;
        return $this;
    }
    /**
     * Get DocumentType value
     * @return string|null
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }
    /**
     * Set DocumentType value
     * @uses \Arkitecht\FedEx\Enums\UploadDocumentType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\UploadDocumentType::getValidValues()
     * @param string $documentType
     * @return \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail
     */
    public function setDocumentType($documentType = null)
    {
        if (!\Arkitecht\FedEx\Enums\UploadDocumentType::valueIsValid($documentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentType, implode(', ', \Arkitecht\FedEx\Enums\UploadDocumentType::getValidValues())), __LINE__);
        }
        $this->DocumentType = $documentType;
        return $this;
    }
    /**
     * Get DocumentId value
     * @return string|null
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }
    /**
     * Set DocumentId value
     * @param string $documentId
     * @return \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail
     */
    public function setDocumentId($documentId = null)
    {
        $this->DocumentId = $documentId;
        return $this;
    }
    /**
     * Get DocumentIdProducer value
     * @return string|null
     */
    public function getDocumentIdProducer()
    {
        return $this->DocumentIdProducer;
    }
    /**
     * Set DocumentIdProducer value
     * @uses \Arkitecht\FedEx\Enums\UploadDocumentIdProducer::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\UploadDocumentIdProducer::getValidValues()
     * @param string $documentIdProducer
     * @return \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail
     */
    public function setDocumentIdProducer($documentIdProducer = null)
    {
        if (!\Arkitecht\FedEx\Enums\UploadDocumentIdProducer::valueIsValid($documentIdProducer)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentIdProducer, implode(', ', \Arkitecht\FedEx\Enums\UploadDocumentIdProducer::getValidValues())), __LINE__);
        }
        $this->DocumentIdProducer = $documentIdProducer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail
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
