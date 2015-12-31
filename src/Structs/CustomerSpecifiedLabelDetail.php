<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerSpecifiedLabelDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Allows customer-specified control of label content.
 * @subpackage Structs
 */
class CustomerSpecifiedLabelDetail extends AbstractStructBase
{
    /**
     * The DocTabContent
     * Meta informations extracted from the WSDL
     * - documentation: If omitted, no doc tab will be produced (i.e. default is former NONE type).
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\DocTabContent
     */
    public $DocTabContent;
    /**
     * The CustomContentPosition
     * Meta informations extracted from the WSDL
     * - documentation: Controls the position of the customer specified content relative to the FedEx portion.
     * - minOccurs: 0
     * - documentation: Describes the vertical position of an item relative to another item.
     * @var string
     */
    public $CustomContentPosition;
    /**
     * The CustomContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CustomLabelDetail
     */
    public $CustomContent;
    /**
     * The ConfigurableReferenceEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ConfigurableLabelReferenceEntry
     */
    public $ConfigurableReferenceEntries;
    /**
     * The MaskedData
     * Meta informations extracted from the WSDL
     * - documentation: Controls which data/sections will be suppressed.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Names for data elements / areas which may be suppressed from printing on labels.
     * @var string
     */
    public $MaskedData;
    /**
     * The SecondaryBarcode
     * Meta informations extracted from the WSDL
     * - documentation: For customers producing their own Ground labels, this field specifies which secondary barcode will be printed on the label; so that the primary barcode produced by FedEx has the correct SCNC.
     * - minOccurs: 0
     * @var string
     */
    public $SecondaryBarcode;
    /**
     * The TermsAndConditionsLocalization
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifies the representation of human-readable text.
     * @var \Arkitecht\FedEx\Structs\Localization
     */
    public $TermsAndConditionsLocalization;
    /**
     * The RegulatoryLabels
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Specifies details needed to generate any label artifacts required due to regulatory requirements.
     * @var \Arkitecht\FedEx\Structs\RegulatoryLabelContentDetail
     */
    public $RegulatoryLabels;
    /**
     * The AdditionalLabels
     * Meta informations extracted from the WSDL
     * - documentation: Controls the number of additional copies of supplemental labels.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Specifies additional labels to be produced. All required labels for shipments will be produced without the need to request additional labels. These are only available as thermal labels.
     * @var \Arkitecht\FedEx\Structs\AdditionalLabelsDetail
     */
    public $AdditionalLabels;
    /**
     * The AirWaybillSuppressionCount
     * Meta informations extracted from the WSDL
     * - documentation: This value reduces the default quantity of destination/consignee air waybill labels. A value of zero indicates no change to default. A minimum of one copy will always be produced.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $AirWaybillSuppressionCount;
    /**
     * Constructor method for CustomerSpecifiedLabelDetail
     * @uses CustomerSpecifiedLabelDetail::setDocTabContent()
     * @uses CustomerSpecifiedLabelDetail::setCustomContentPosition()
     * @uses CustomerSpecifiedLabelDetail::setCustomContent()
     * @uses CustomerSpecifiedLabelDetail::setConfigurableReferenceEntries()
     * @uses CustomerSpecifiedLabelDetail::setMaskedData()
     * @uses CustomerSpecifiedLabelDetail::setSecondaryBarcode()
     * @uses CustomerSpecifiedLabelDetail::setTermsAndConditionsLocalization()
     * @uses CustomerSpecifiedLabelDetail::setRegulatoryLabels()
     * @uses CustomerSpecifiedLabelDetail::setAdditionalLabels()
     * @uses CustomerSpecifiedLabelDetail::setAirWaybillSuppressionCount()
     * @param \Arkitecht\FedEx\Structs\DocTabContent $docTabContent
     * @param string $customContentPosition
     * @param \Arkitecht\FedEx\Structs\CustomLabelDetail $customContent
     * @param \Arkitecht\FedEx\Structs\ConfigurableLabelReferenceEntry
     * $configurableReferenceEntries
     * @param string $maskedData
     * @param string $secondaryBarcode
     * @param \Arkitecht\FedEx\Structs\Localization $termsAndConditionsLocalization
     * @param \Arkitecht\FedEx\Structs\RegulatoryLabelContentDetail $regulatoryLabels
     * @param \Arkitecht\FedEx\Structs\AdditionalLabelsDetail $additionalLabels
     * @param nonNegativeInteger $airWaybillSuppressionCount
     */
    public function __construct(\Arkitecht\FedEx\Structs\DocTabContent $docTabContent = null, $customContentPosition = null, \Arkitecht\FedEx\Structs\CustomLabelDetail $customContent = null, \Arkitecht\FedEx\Structs\ConfigurableLabelReferenceEntry $configurableReferenceEntries = null, $maskedData = null, $secondaryBarcode = null, \Arkitecht\FedEx\Structs\Localization $termsAndConditionsLocalization = null, \Arkitecht\FedEx\Structs\RegulatoryLabelContentDetail $regulatoryLabels = null, \Arkitecht\FedEx\Structs\AdditionalLabelsDetail $additionalLabels = null, $airWaybillSuppressionCount = null)
    {
        $this
            ->setDocTabContent($docTabContent)
            ->setCustomContentPosition($customContentPosition)
            ->setCustomContent($customContent)
            ->setConfigurableReferenceEntries($configurableReferenceEntries)
            ->setMaskedData($maskedData)
            ->setSecondaryBarcode($secondaryBarcode)
            ->setTermsAndConditionsLocalization($termsAndConditionsLocalization)
            ->setRegulatoryLabels($regulatoryLabels)
            ->setAdditionalLabels($additionalLabels)
            ->setAirWaybillSuppressionCount($airWaybillSuppressionCount);
    }
    /**
     * Get DocTabContent value
     * @return \Arkitecht\FedEx\Structs\DocTabContent|null
     */
    public function getDocTabContent()
    {
        return $this->DocTabContent;
    }
    /**
     * Set DocTabContent value
     * @param \Arkitecht\FedEx\Structs\DocTabContent $docTabContent
     * @return \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail
     */
    public function setDocTabContent(\Arkitecht\FedEx\Structs\DocTabContent $docTabContent = null)
    {
        $this->DocTabContent = $docTabContent;
        return $this;
    }
    /**
     * Get CustomContentPosition value
     * @return string|null
     */
    public function getCustomContentPosition()
    {
        return $this->CustomContentPosition;
    }
    /**
     * Set CustomContentPosition value
     * @uses \Arkitecht\FedEx\Enums\RelativeVerticalPositionType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\RelativeVerticalPositionType::getValidValues()
     * @param string $customContentPosition
     * @return \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail
     */
    public function setCustomContentPosition($customContentPosition = null)
    {
        if (!\Arkitecht\FedEx\Enums\RelativeVerticalPositionType::valueIsValid($customContentPosition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $customContentPosition, implode(', ', \Arkitecht\FedEx\Enums\RelativeVerticalPositionType::getValidValues())), __LINE__);
        }
        $this->CustomContentPosition = $customContentPosition;
        return $this;
    }
    /**
     * Get CustomContent value
     * @return \Arkitecht\FedEx\Structs\CustomLabelDetail|null
     */
    public function getCustomContent()
    {
        return $this->CustomContent;
    }
    /**
     * Set CustomContent value
     * @param \Arkitecht\FedEx\Structs\CustomLabelDetail $customContent
     * @return \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail
     */
    public function setCustomContent(\Arkitecht\FedEx\Structs\CustomLabelDetail $customContent = null)
    {
        $this->CustomContent = $customContent;
        return $this;
    }
    /**
     * Get ConfigurableReferenceEntries value
     * @return \Arkitecht\FedEx\Structs\ConfigurableLabelReferenceEntry|null
     */
    public function getConfigurableReferenceEntries()
    {
        return $this->ConfigurableReferenceEntries;
    }
    /**
     * Set ConfigurableReferenceEntries value
     * @param \Arkitecht\FedEx\Structs\ConfigurableLabelReferenceEntry
     * $configurableReferenceEntries
     * @return \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail
     */
    public function setConfigurableReferenceEntries(\Arkitecht\FedEx\Structs\ConfigurableLabelReferenceEntry $configurableReferenceEntries = null)
    {
        $this->ConfigurableReferenceEntries = $configurableReferenceEntries;
        return $this;
    }
    /**
     * Get MaskedData value
     * @return string|null
     */
    public function getMaskedData()
    {
        return $this->MaskedData;
    }
    /**
     * Set MaskedData value
     * @uses \Arkitecht\FedEx\Enums\LabelMaskableDataType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\LabelMaskableDataType::getValidValues()
     * @param string $maskedData
     * @return \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail
     */
    public function setMaskedData($maskedData = null)
    {
        if (!\Arkitecht\FedEx\Enums\LabelMaskableDataType::valueIsValid($maskedData)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $maskedData, implode(', ', \Arkitecht\FedEx\Enums\LabelMaskableDataType::getValidValues())), __LINE__);
        }
        $this->MaskedData = $maskedData;
        return $this;
    }
    /**
     * Get SecondaryBarcode value
     * @return string|null
     */
    public function getSecondaryBarcode()
    {
        return $this->SecondaryBarcode;
    }
    /**
     * Set SecondaryBarcode value
     * @uses \Arkitecht\FedEx\Enums\SecondaryBarcodeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\SecondaryBarcodeType::getValidValues()
     * @param string $secondaryBarcode
     * @return \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail
     */
    public function setSecondaryBarcode($secondaryBarcode = null)
    {
        if (!\Arkitecht\FedEx\Enums\SecondaryBarcodeType::valueIsValid($secondaryBarcode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $secondaryBarcode, implode(', ', \Arkitecht\FedEx\Enums\SecondaryBarcodeType::getValidValues())), __LINE__);
        }
        $this->SecondaryBarcode = $secondaryBarcode;
        return $this;
    }
    /**
     * Get TermsAndConditionsLocalization value
     * @return \Arkitecht\FedEx\Structs\Localization|null
     */
    public function getTermsAndConditionsLocalization()
    {
        return $this->TermsAndConditionsLocalization;
    }
    /**
     * Set TermsAndConditionsLocalization value
     * @param \Arkitecht\FedEx\Structs\Localization $termsAndConditionsLocalization
     * @return \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail
     */
    public function setTermsAndConditionsLocalization(\Arkitecht\FedEx\Structs\Localization $termsAndConditionsLocalization = null)
    {
        $this->TermsAndConditionsLocalization = $termsAndConditionsLocalization;
        return $this;
    }
    /**
     * Get RegulatoryLabels value
     * @return \Arkitecht\FedEx\Structs\RegulatoryLabelContentDetail|null
     */
    public function getRegulatoryLabels()
    {
        return $this->RegulatoryLabels;
    }
    /**
     * Set RegulatoryLabels value
     * @param \Arkitecht\FedEx\Structs\RegulatoryLabelContentDetail $regulatoryLabels
     * @return \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail
     */
    public function setRegulatoryLabels(\Arkitecht\FedEx\Structs\RegulatoryLabelContentDetail $regulatoryLabels = null)
    {
        $this->RegulatoryLabels = $regulatoryLabels;
        return $this;
    }
    /**
     * Get AdditionalLabels value
     * @return \Arkitecht\FedEx\Structs\AdditionalLabelsDetail|null
     */
    public function getAdditionalLabels()
    {
        return $this->AdditionalLabels;
    }
    /**
     * Set AdditionalLabels value
     * @param \Arkitecht\FedEx\Structs\AdditionalLabelsDetail $additionalLabels
     * @return \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail
     */
    public function setAdditionalLabels(\Arkitecht\FedEx\Structs\AdditionalLabelsDetail $additionalLabels = null)
    {
        $this->AdditionalLabels = $additionalLabels;
        return $this;
    }
    /**
     * Get AirWaybillSuppressionCount value
     * @return nonNegativeInteger|null
     */
    public function getAirWaybillSuppressionCount()
    {
        return $this->AirWaybillSuppressionCount;
    }
    /**
     * Set AirWaybillSuppressionCount value
     * @param nonNegativeInteger $airWaybillSuppressionCount
     * @return \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail
     */
    public function setAirWaybillSuppressionCount($airWaybillSuppressionCount = null)
    {
        $this->AirWaybillSuppressionCount = $airWaybillSuppressionCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CustomerSpecifiedLabelDetail
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
