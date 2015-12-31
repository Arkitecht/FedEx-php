<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedEtdDetail Structs
 * @subpackage Structs
 */
class CompletedEtdDetail extends AbstractStructBase
{
    /**
     * The FolderId
     * Meta informations extracted from the WSDL
     * - documentation: The identifier for all clearance documents associated with this shipment.
     * - minOccurs: 0
     * @var string
     */
    public $FolderId;
    /**
     * The UploadDocumentReferenceDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail
     */
    public $UploadDocumentReferenceDetails;
    /**
     * Constructor method for CompletedEtdDetail
     * @uses CompletedEtdDetail::setFolderId()
     * @uses CompletedEtdDetail::setUploadDocumentReferenceDetails()
     * @param string $folderId
     * @param \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail
     * $uploadDocumentReferenceDetails
     */
    public function __construct($folderId = null, \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail $uploadDocumentReferenceDetails = null)
    {
        $this
            ->setFolderId($folderId)
            ->setUploadDocumentReferenceDetails($uploadDocumentReferenceDetails);
    }
    /**
     * Get FolderId value
     * @return string|null
     */
    public function getFolderId()
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param string $folderId
     * @return \Arkitecht\FedEx\Structs\CompletedEtdDetail
     */
    public function setFolderId($folderId = null)
    {
        $this->FolderId = $folderId;
        return $this;
    }
    /**
     * Get UploadDocumentReferenceDetails value
     * @return \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail|null
     */
    public function getUploadDocumentReferenceDetails()
    {
        return $this->UploadDocumentReferenceDetails;
    }
    /**
     * Set UploadDocumentReferenceDetails value
     * @param \Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail
     * $uploadDocumentReferenceDetails
     * @return \Arkitecht\FedEx\Structs\CompletedEtdDetail
     */
    public function setUploadDocumentReferenceDetails(\Arkitecht\FedEx\Structs\UploadDocumentReferenceDetail $uploadDocumentReferenceDetails = null)
    {
        $this->UploadDocumentReferenceDetails = $uploadDocumentReferenceDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CompletedEtdDetail
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
