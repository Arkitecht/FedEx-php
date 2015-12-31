<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PendingShipmentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: This information describes the kind of pending shipment being requested.
 * @subpackage Structs
 */
class PendingShipmentDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The ExpirationDate
     * Meta informations extracted from the WSDL
     * - documentation: Date after which the pending shipment will no longer be available for completion.
     * - minOccurs: 0
     * @var date
     */
    public $ExpirationDate;
    /**
     * The EmailLabelDetail
     * Meta informations extracted from the WSDL
     * - documentation: Only used with type of EMAIL.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\EMailLabelDetail
     */
    public $EmailLabelDetail;
    /**
     * The ProcessingOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\PendingShipmentProcessingOptionsRequested
     */
    public $ProcessingOptions;
    /**
     * The RecommendedDocumentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: These are documents that are recommended to be included with the shipment.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\RecommendedDocumentSpecification
     */
    public $RecommendedDocumentSpecification;
    /**
     * Constructor method for PendingShipmentDetail
     * @uses PendingShipmentDetail::setType()
     * @uses PendingShipmentDetail::setExpirationDate()
     * @uses PendingShipmentDetail::setEmailLabelDetail()
     * @uses PendingShipmentDetail::setProcessingOptions()
     * @uses PendingShipmentDetail::setRecommendedDocumentSpecification()
     * @param string $type
     * @param date $expirationDate
     * @param \Arkitecht\FedEx\Structs\EMailLabelDetail $emailLabelDetail
     * @param \Arkitecht\FedEx\Structs\PendingShipmentProcessingOptionsRequested
     * $processingOptions
     * @param \Arkitecht\FedEx\Structs\RecommendedDocumentSpecification
     * $recommendedDocumentSpecification
     */
    public function __construct($type = null, $expirationDate = null, \Arkitecht\FedEx\Structs\EMailLabelDetail $emailLabelDetail = null, \Arkitecht\FedEx\Structs\PendingShipmentProcessingOptionsRequested $processingOptions = null, \Arkitecht\FedEx\Structs\RecommendedDocumentSpecification $recommendedDocumentSpecification = null)
    {
        $this
            ->setType($type)
            ->setExpirationDate($expirationDate)
            ->setEmailLabelDetail($emailLabelDetail)
            ->setProcessingOptions($processingOptions)
            ->setRecommendedDocumentSpecification($recommendedDocumentSpecification);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Arkitecht\FedEx\Enums\PendingShipmentType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\PendingShipmentType::getValidValues()
     * @param string $type
     * @return \Arkitecht\FedEx\Structs\PendingShipmentDetail
     */
    public function setType($type = null)
    {
        if (!\Arkitecht\FedEx\Enums\PendingShipmentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Arkitecht\FedEx\Enums\PendingShipmentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return date|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param date $expirationDate
     * @return \Arkitecht\FedEx\Structs\PendingShipmentDetail
     */
    public function setExpirationDate($expirationDate = null)
    {
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Get EmailLabelDetail value
     * @return \Arkitecht\FedEx\Structs\EMailLabelDetail|null
     */
    public function getEmailLabelDetail()
    {
        return $this->EmailLabelDetail;
    }
    /**
     * Set EmailLabelDetail value
     * @param \Arkitecht\FedEx\Structs\EMailLabelDetail $emailLabelDetail
     * @return \Arkitecht\FedEx\Structs\PendingShipmentDetail
     */
    public function setEmailLabelDetail(\Arkitecht\FedEx\Structs\EMailLabelDetail $emailLabelDetail = null)
    {
        $this->EmailLabelDetail = $emailLabelDetail;
        return $this;
    }
    /**
     * Get ProcessingOptions value
     * @return \Arkitecht\FedEx\Structs\PendingShipmentProcessingOptionsRequested|null
     */
    public function getProcessingOptions()
    {
        return $this->ProcessingOptions;
    }
    /**
     * Set ProcessingOptions value
     * @param \Arkitecht\FedEx\Structs\PendingShipmentProcessingOptionsRequested
     * $processingOptions
     * @return \Arkitecht\FedEx\Structs\PendingShipmentDetail
     */
    public function setProcessingOptions(\Arkitecht\FedEx\Structs\PendingShipmentProcessingOptionsRequested $processingOptions = null)
    {
        $this->ProcessingOptions = $processingOptions;
        return $this;
    }
    /**
     * Get RecommendedDocumentSpecification value
     * @return \Arkitecht\FedEx\Structs\RecommendedDocumentSpecification|null
     */
    public function getRecommendedDocumentSpecification()
    {
        return $this->RecommendedDocumentSpecification;
    }
    /**
     * Set RecommendedDocumentSpecification value
     * @param \Arkitecht\FedEx\Structs\RecommendedDocumentSpecification
     * $recommendedDocumentSpecification
     * @return \Arkitecht\FedEx\Structs\PendingShipmentDetail
     */
    public function setRecommendedDocumentSpecification(\Arkitecht\FedEx\Structs\RecommendedDocumentSpecification $recommendedDocumentSpecification = null)
    {
        $this->RecommendedDocumentSpecification = $recommendedDocumentSpecification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\PendingShipmentDetail
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
