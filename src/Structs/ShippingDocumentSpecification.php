<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentSpecification Structs
 * Meta informations extracted from the WSDL
 * - documentation: Contains all data required for additional (non-label) shipping documents to be produced in conjunction with a specific shipment.
 * @subpackage Structs
 */
class ShippingDocumentSpecification extends AbstractStructBase
{
    /**
     * The ShippingDocumentTypes
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the types of shipping documents requested by the shipper.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $ShippingDocumentTypes;
    /**
     * The CertificateOfOrigin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...)
     * @var \Arkitecht\FedEx\Structs\CertificateOfOriginDetail
     */
    public $CertificateOfOrigin;
    /**
     * The CommercialInvoiceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CommercialInvoiceDetail
     */
    public $CommercialInvoiceDetail;
    /**
     * The CustomPackageDocumentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of each package-level custom document (the same specification is used for all packages).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Data required to produce a custom-specified document, either at shipment or package level.
     * @var \Arkitecht\FedEx\Structs\CustomDocumentDetail
     */
    public $CustomPackageDocumentDetail;
    /**
     * The CustomShipmentDocumentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of a shipment-level custom document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Data required to produce a custom-specified document, either at shipment or package level.
     * @var \Arkitecht\FedEx\Structs\CustomDocumentDetail
     */
    public $CustomShipmentDocumentDetail;
    /**
     * The ExportDeclarationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ExportDeclarationDetail
     */
    public $ExportDeclarationDetail;
    /**
     * The GeneralAgencyAgreementDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\GeneralAgencyAgreementDetail
     */
    public $GeneralAgencyAgreementDetail;
    /**
     * The NaftaCertificateOfOriginDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\NaftaCertificateOfOriginDetail
     */
    public $NaftaCertificateOfOriginDetail;
    /**
     * The Op900Detail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the OP-900 document for hazardous materials packages.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Op900Detail
     */
    public $Op900Detail;
    /**
     * The DangerousGoodsShippersDeclarationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the 1421c document for dangerous goods shipment.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\DangerousGoodsShippersDeclarationDetail
     */
    public $DangerousGoodsShippersDeclarationDetail;
    /**
     * The FreightAddressLabelDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the OP-900 document for hazardous materials.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\FreightAddressLabelDetail
     */
    public $FreightAddressLabelDetail;
    /**
     * The ReturnInstructionsDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the return instructions document.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ReturnInstructionsDetail
     */
    public $ReturnInstructionsDetail;
    /**
     * Constructor method for ShippingDocumentSpecification
     * @uses ShippingDocumentSpecification::setShippingDocumentTypes()
     * @uses ShippingDocumentSpecification::setCertificateOfOrigin()
     * @uses ShippingDocumentSpecification::setCommercialInvoiceDetail()
     * @uses ShippingDocumentSpecification::setCustomPackageDocumentDetail()
     * @uses ShippingDocumentSpecification::setCustomShipmentDocumentDetail()
     * @uses ShippingDocumentSpecification::setExportDeclarationDetail()
     * @uses ShippingDocumentSpecification::setGeneralAgencyAgreementDetail()
     * @uses ShippingDocumentSpecification::setNaftaCertificateOfOriginDetail()
     * @uses ShippingDocumentSpecification::setOp900Detail()
     * @uses
     * ShippingDocumentSpecification::setDangerousGoodsShippersDeclarationDetail()
     * @uses ShippingDocumentSpecification::setFreightAddressLabelDetail()
     * @uses ShippingDocumentSpecification::setReturnInstructionsDetail()
     * @param string $shippingDocumentTypes
     * @param \Arkitecht\FedEx\Structs\CertificateOfOriginDetail $certificateOfOrigin
     * @param \Arkitecht\FedEx\Structs\CommercialInvoiceDetail $commercialInvoiceDetail
     * @param \Arkitecht\FedEx\Structs\CustomDocumentDetail
     * $customPackageDocumentDetail
     * @param \Arkitecht\FedEx\Structs\CustomDocumentDetail
     * $customShipmentDocumentDetail
     * @param \Arkitecht\FedEx\Structs\ExportDeclarationDetail $exportDeclarationDetail
     * @param \Arkitecht\FedEx\Structs\GeneralAgencyAgreementDetail
     * $generalAgencyAgreementDetail
     * @param \Arkitecht\FedEx\Structs\NaftaCertificateOfOriginDetail
     * $naftaCertificateOfOriginDetail
     * @param \Arkitecht\FedEx\Structs\Op900Detail $op900Detail
     * @param \Arkitecht\FedEx\Structs\DangerousGoodsShippersDeclarationDetail
     * $dangerousGoodsShippersDeclarationDetail
     * @param \Arkitecht\FedEx\Structs\FreightAddressLabelDetail
     * $freightAddressLabelDetail
     * @param \Arkitecht\FedEx\Structs\ReturnInstructionsDetail
     * $returnInstructionsDetail
     */
    public function __construct($shippingDocumentTypes = null, \Arkitecht\FedEx\Structs\CertificateOfOriginDetail $certificateOfOrigin = null, \Arkitecht\FedEx\Structs\CommercialInvoiceDetail $commercialInvoiceDetail = null, \Arkitecht\FedEx\Structs\CustomDocumentDetail $customPackageDocumentDetail = null, \Arkitecht\FedEx\Structs\CustomDocumentDetail $customShipmentDocumentDetail = null, \Arkitecht\FedEx\Structs\ExportDeclarationDetail $exportDeclarationDetail = null, \Arkitecht\FedEx\Structs\GeneralAgencyAgreementDetail $generalAgencyAgreementDetail = null, \Arkitecht\FedEx\Structs\NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail = null, \Arkitecht\FedEx\Structs\Op900Detail $op900Detail = null, \Arkitecht\FedEx\Structs\DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail = null, \Arkitecht\FedEx\Structs\FreightAddressLabelDetail $freightAddressLabelDetail = null, \Arkitecht\FedEx\Structs\ReturnInstructionsDetail $returnInstructionsDetail = null)
    {
        $this
            ->setShippingDocumentTypes($shippingDocumentTypes)
            ->setCertificateOfOrigin($certificateOfOrigin)
            ->setCommercialInvoiceDetail($commercialInvoiceDetail)
            ->setCustomPackageDocumentDetail($customPackageDocumentDetail)
            ->setCustomShipmentDocumentDetail($customShipmentDocumentDetail)
            ->setExportDeclarationDetail($exportDeclarationDetail)
            ->setGeneralAgencyAgreementDetail($generalAgencyAgreementDetail)
            ->setNaftaCertificateOfOriginDetail($naftaCertificateOfOriginDetail)
            ->setOp900Detail($op900Detail)
            ->setDangerousGoodsShippersDeclarationDetail($dangerousGoodsShippersDeclarationDetail)
            ->setFreightAddressLabelDetail($freightAddressLabelDetail)
            ->setReturnInstructionsDetail($returnInstructionsDetail);
    }
    /**
     * Get ShippingDocumentTypes value
     * @return string|null
     */
    public function getShippingDocumentTypes()
    {
        return $this->ShippingDocumentTypes;
    }
    /**
     * Set ShippingDocumentTypes value
     * @uses \Arkitecht\FedEx\Enums\RequestedShippingDocumentType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\RequestedShippingDocumentType::getValidValues()
     * @param string $shippingDocumentTypes
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentSpecification
     */
    public function setShippingDocumentTypes($shippingDocumentTypes = null)
    {
        if (!\Arkitecht\FedEx\Enums\RequestedShippingDocumentType::valueIsValid($shippingDocumentTypes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingDocumentTypes, implode(', ', \Arkitecht\FedEx\Enums\RequestedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->ShippingDocumentTypes = $shippingDocumentTypes;
        return $this;
    }
    /**
     * Get CertificateOfOrigin value
     * @return \Arkitecht\FedEx\Structs\CertificateOfOriginDetail|null
     */
    public function getCertificateOfOrigin()
    {
        return $this->CertificateOfOrigin;
    }
    /**
     * Set CertificateOfOrigin value
     * @param \Arkitecht\FedEx\Structs\CertificateOfOriginDetail $certificateOfOrigin
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentSpecification
     */
    public function setCertificateOfOrigin(\Arkitecht\FedEx\Structs\CertificateOfOriginDetail $certificateOfOrigin = null)
    {
        $this->CertificateOfOrigin = $certificateOfOrigin;
        return $this;
    }
    /**
     * Get CommercialInvoiceDetail value
     * @return \Arkitecht\FedEx\Structs\CommercialInvoiceDetail|null
     */
    public function getCommercialInvoiceDetail()
    {
        return $this->CommercialInvoiceDetail;
    }
    /**
     * Set CommercialInvoiceDetail value
     * @param \Arkitecht\FedEx\Structs\CommercialInvoiceDetail $commercialInvoiceDetail
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentSpecification
     */
    public function setCommercialInvoiceDetail(\Arkitecht\FedEx\Structs\CommercialInvoiceDetail $commercialInvoiceDetail = null)
    {
        $this->CommercialInvoiceDetail = $commercialInvoiceDetail;
        return $this;
    }
    /**
     * Get CustomPackageDocumentDetail value
     * @return \Arkitecht\FedEx\Structs\CustomDocumentDetail|null
     */
    public function getCustomPackageDocumentDetail()
    {
        return $this->CustomPackageDocumentDetail;
    }
    /**
     * Set CustomPackageDocumentDetail value
     * @param \Arkitecht\FedEx\Structs\CustomDocumentDetail
     * $customPackageDocumentDetail
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentSpecification
     */
    public function setCustomPackageDocumentDetail(\Arkitecht\FedEx\Structs\CustomDocumentDetail $customPackageDocumentDetail = null)
    {
        $this->CustomPackageDocumentDetail = $customPackageDocumentDetail;
        return $this;
    }
    /**
     * Get CustomShipmentDocumentDetail value
     * @return \Arkitecht\FedEx\Structs\CustomDocumentDetail|null
     */
    public function getCustomShipmentDocumentDetail()
    {
        return $this->CustomShipmentDocumentDetail;
    }
    /**
     * Set CustomShipmentDocumentDetail value
     * @param \Arkitecht\FedEx\Structs\CustomDocumentDetail
     * $customShipmentDocumentDetail
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentSpecification
     */
    public function setCustomShipmentDocumentDetail(\Arkitecht\FedEx\Structs\CustomDocumentDetail $customShipmentDocumentDetail = null)
    {
        $this->CustomShipmentDocumentDetail = $customShipmentDocumentDetail;
        return $this;
    }
    /**
     * Get ExportDeclarationDetail value
     * @return \Arkitecht\FedEx\Structs\ExportDeclarationDetail|null
     */
    public function getExportDeclarationDetail()
    {
        return $this->ExportDeclarationDetail;
    }
    /**
     * Set ExportDeclarationDetail value
     * @param \Arkitecht\FedEx\Structs\ExportDeclarationDetail $exportDeclarationDetail
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentSpecification
     */
    public function setExportDeclarationDetail(\Arkitecht\FedEx\Structs\ExportDeclarationDetail $exportDeclarationDetail = null)
    {
        $this->ExportDeclarationDetail = $exportDeclarationDetail;
        return $this;
    }
    /**
     * Get GeneralAgencyAgreementDetail value
     * @return \Arkitecht\FedEx\Structs\GeneralAgencyAgreementDetail|null
     */
    public function getGeneralAgencyAgreementDetail()
    {
        return $this->GeneralAgencyAgreementDetail;
    }
    /**
     * Set GeneralAgencyAgreementDetail value
     * @param \Arkitecht\FedEx\Structs\GeneralAgencyAgreementDetail
     * $generalAgencyAgreementDetail
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentSpecification
     */
    public function setGeneralAgencyAgreementDetail(\Arkitecht\FedEx\Structs\GeneralAgencyAgreementDetail $generalAgencyAgreementDetail = null)
    {
        $this->GeneralAgencyAgreementDetail = $generalAgencyAgreementDetail;
        return $this;
    }
    /**
     * Get NaftaCertificateOfOriginDetail value
     * @return \Arkitecht\FedEx\Structs\NaftaCertificateOfOriginDetail|null
     */
    public function getNaftaCertificateOfOriginDetail()
    {
        return $this->NaftaCertificateOfOriginDetail;
    }
    /**
     * Set NaftaCertificateOfOriginDetail value
     * @param \Arkitecht\FedEx\Structs\NaftaCertificateOfOriginDetail
     * $naftaCertificateOfOriginDetail
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentSpecification
     */
    public function setNaftaCertificateOfOriginDetail(\Arkitecht\FedEx\Structs\NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail = null)
    {
        $this->NaftaCertificateOfOriginDetail = $naftaCertificateOfOriginDetail;
        return $this;
    }
    /**
     * Get Op900Detail value
     * @return \Arkitecht\FedEx\Structs\Op900Detail|null
     */
    public function getOp900Detail()
    {
        return $this->Op900Detail;
    }
    /**
     * Set Op900Detail value
     * @param \Arkitecht\FedEx\Structs\Op900Detail $op900Detail
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentSpecification
     */
    public function setOp900Detail(\Arkitecht\FedEx\Structs\Op900Detail $op900Detail = null)
    {
        $this->Op900Detail = $op900Detail;
        return $this;
    }
    /**
     * Get DangerousGoodsShippersDeclarationDetail value
     * @return \Arkitecht\FedEx\Structs\DangerousGoodsShippersDeclarationDetail|null
     */
    public function getDangerousGoodsShippersDeclarationDetail()
    {
        return $this->DangerousGoodsShippersDeclarationDetail;
    }
    /**
     * Set DangerousGoodsShippersDeclarationDetail value
     * @param \Arkitecht\FedEx\Structs\DangerousGoodsShippersDeclarationDetail
     * $dangerousGoodsShippersDeclarationDetail
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentSpecification
     */
    public function setDangerousGoodsShippersDeclarationDetail(\Arkitecht\FedEx\Structs\DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail = null)
    {
        $this->DangerousGoodsShippersDeclarationDetail = $dangerousGoodsShippersDeclarationDetail;
        return $this;
    }
    /**
     * Get FreightAddressLabelDetail value
     * @return \Arkitecht\FedEx\Structs\FreightAddressLabelDetail|null
     */
    public function getFreightAddressLabelDetail()
    {
        return $this->FreightAddressLabelDetail;
    }
    /**
     * Set FreightAddressLabelDetail value
     * @param \Arkitecht\FedEx\Structs\FreightAddressLabelDetail
     * $freightAddressLabelDetail
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentSpecification
     */
    public function setFreightAddressLabelDetail(\Arkitecht\FedEx\Structs\FreightAddressLabelDetail $freightAddressLabelDetail = null)
    {
        $this->FreightAddressLabelDetail = $freightAddressLabelDetail;
        return $this;
    }
    /**
     * Get ReturnInstructionsDetail value
     * @return \Arkitecht\FedEx\Structs\ReturnInstructionsDetail|null
     */
    public function getReturnInstructionsDetail()
    {
        return $this->ReturnInstructionsDetail;
    }
    /**
     * Set ReturnInstructionsDetail value
     * @param \Arkitecht\FedEx\Structs\ReturnInstructionsDetail
     * $returnInstructionsDetail
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentSpecification
     */
    public function setReturnInstructionsDetail(\Arkitecht\FedEx\Structs\ReturnInstructionsDetail $returnInstructionsDetail = null)
    {
        $this->ReturnInstructionsDetail = $returnInstructionsDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ShippingDocumentSpecification
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
