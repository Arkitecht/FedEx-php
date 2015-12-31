<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EtdDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Electronic Trade document references used with the ETD special service.
 * @subpackage Structs
 */
class EtdDetail extends AbstractStructBase
{
    /**
     * The RequestedDocumentCopies
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the types of shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $RequestedDocumentCopies;
    /**
     * The DocumentReferences
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail
     */
    public $DocumentReferences;
    /**
     * Constructor method for EtdDetail
     * @uses EtdDetail::setRequestedDocumentCopies()
     * @uses EtdDetail::setDocumentReferences()
     * @param string $requestedDocumentCopies
     * @param \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail
     * $documentReferences
     */
    public function __construct($requestedDocumentCopies = null, \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail $documentReferences = null)
    {
        $this
            ->setRequestedDocumentCopies($requestedDocumentCopies)
            ->setDocumentReferences($documentReferences);
    }
    /**
     * Get RequestedDocumentCopies value
     * @return string|null
     */
    public function getRequestedDocumentCopies()
    {
        return $this->RequestedDocumentCopies;
    }
    /**
     * Set RequestedDocumentCopies value
     * @uses \Arkitecht\FedEx\Enums\RequestedShippingDocumentType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\RequestedShippingDocumentType::getValidValues()
     * @param string $requestedDocumentCopies
     * @return \Arkitecht\FedEx\Structs\EtdDetail
     */
    public function setRequestedDocumentCopies($requestedDocumentCopies = null)
    {
        if (!\Arkitecht\FedEx\Enums\RequestedShippingDocumentType::valueIsValid($requestedDocumentCopies)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $requestedDocumentCopies, implode(', ', \Arkitecht\FedEx\Enums\RequestedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->RequestedDocumentCopies = $requestedDocumentCopies;
        return $this;
    }
    /**
     * Get DocumentReferences value
     * @return \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail|null
     */
    public function getDocumentReferences()
    {
        return $this->DocumentReferences;
    }
    /**
     * Set DocumentReferences value
     * @param \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail
     * $documentReferences
     * @return \Arkitecht\FedEx\Structs\EtdDetail
     */
    public function setDocumentReferences(\Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail $documentReferences = null)
    {
        $this->DocumentReferences = $documentReferences;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\EtdDetail
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
