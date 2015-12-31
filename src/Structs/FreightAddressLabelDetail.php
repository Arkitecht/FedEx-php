<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightAddressLabelDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Data required to produce the Freight handling-unit-level address labels. Note that the number of UNIQUE labels (the N as in 1 of N, 2 of N, etc.) is determined by total handling units.
 * @subpackage Structs
 */
class FreightAddressLabelDetail extends AbstractStructBase
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
     * The Copies
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the number of copies to be produced for each unique label.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $Copies;
    /**
     * The StartingPosition
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the quadrant of the page on which the label printing will start.
     * - minOccurs: 0
     * @var string
     */
    public $StartingPosition;
    /**
     * The DocTabContent
     * Meta informations extracted from the WSDL
     * - documentation: If omitted, no doc tab will be produced (i.e. default = former NONE type).
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
     * Constructor method for FreightAddressLabelDetail
     * @uses FreightAddressLabelDetail::setFormat()
     * @uses FreightAddressLabelDetail::setCopies()
     * @uses FreightAddressLabelDetail::setStartingPosition()
     * @uses FreightAddressLabelDetail::setDocTabContent()
     * @uses FreightAddressLabelDetail::setCustomContentPosition()
     * @uses FreightAddressLabelDetail::setCustomContent()
     * @param \Arkitecht\FedEx\Structs\ShippingDocumentFormat $format
     * @param nonNegativeInteger $copies
     * @param string $startingPosition
     * @param \Arkitecht\FedEx\Structs\DocTabContent $docTabContent
     * @param string $customContentPosition
     * @param \Arkitecht\FedEx\Structs\CustomLabelDetail $customContent
     */
    public function __construct(\Arkitecht\FedEx\Structs\ShippingDocumentFormat $format = null, $copies = null, $startingPosition = null, \Arkitecht\FedEx\Structs\DocTabContent $docTabContent = null, $customContentPosition = null, \Arkitecht\FedEx\Structs\CustomLabelDetail $customContent = null)
    {
        $this
            ->setFormat($format)
            ->setCopies($copies)
            ->setStartingPosition($startingPosition)
            ->setDocTabContent($docTabContent)
            ->setCustomContentPosition($customContentPosition)
            ->setCustomContent($customContent);
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
     * @return \Arkitecht\FedEx\Structs\FreightAddressLabelDetail
     */
    public function setFormat(\Arkitecht\FedEx\Structs\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get Copies value
     * @return nonNegativeInteger|null
     */
    public function getCopies()
    {
        return $this->Copies;
    }
    /**
     * Set Copies value
     * @param nonNegativeInteger $copies
     * @return \Arkitecht\FedEx\Structs\FreightAddressLabelDetail
     */
    public function setCopies($copies = null)
    {
        $this->Copies = $copies;
        return $this;
    }
    /**
     * Get StartingPosition value
     * @return string|null
     */
    public function getStartingPosition()
    {
        return $this->StartingPosition;
    }
    /**
     * Set StartingPosition value
     * @uses \Arkitecht\FedEx\Enums\PageQuadrantType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\PageQuadrantType::getValidValues()
     * @param string $startingPosition
     * @return \Arkitecht\FedEx\Structs\FreightAddressLabelDetail
     */
    public function setStartingPosition($startingPosition = null)
    {
        if (!\Arkitecht\FedEx\Enums\PageQuadrantType::valueIsValid($startingPosition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $startingPosition, implode(', ', \Arkitecht\FedEx\Enums\PageQuadrantType::getValidValues())), __LINE__);
        }
        $this->StartingPosition = $startingPosition;
        return $this;
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
     * @return \Arkitecht\FedEx\Structs\FreightAddressLabelDetail
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
     * @return \Arkitecht\FedEx\Structs\FreightAddressLabelDetail
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
     * @return \Arkitecht\FedEx\Structs\FreightAddressLabelDetail
     */
    public function setCustomContent(\Arkitecht\FedEx\Structs\CustomLabelDetail $customContent = null)
    {
        $this->CustomContent = $customContent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\FreightAddressLabelDetail
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
