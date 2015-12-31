<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomLabelTextBoxEntry Structs
 * Meta informations extracted from the WSDL
 * - documentation: Constructed string, based on format and zero or more data fields, printed in specified printer font (for thermal labels) or generic font/size (for plain paper labels).
 * @subpackage Structs
 */
class CustomLabelTextBoxEntry extends AbstractStructBase
{
    /**
     * The TopLeftCorner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CustomLabelPosition
     */
    public $TopLeftCorner;
    /**
     * The BottomRightCorner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CustomLabelPosition
     */
    public $BottomRightCorner;
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CustomLabelPosition
     */
    public $Position;
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Format;
    /**
     * The DataFields
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $DataFields;
    /**
     * The ThermalFontId
     * Meta informations extracted from the WSDL
     * - documentation: Printer-specific font name for use with thermal printer labels.
     * - minOccurs: 0
     * @var string
     */
    public $ThermalFontId;
    /**
     * The FontName
     * Meta informations extracted from the WSDL
     * - documentation: Generic font name for use with plain paper labels.
     * - minOccurs: 0
     * @var string
     */
    public $FontName;
    /**
     * The FontSize
     * Meta informations extracted from the WSDL
     * - documentation: Generic font size for use with plain paper labels.
     * - minOccurs: 0
     * @var positiveInteger
     */
    public $FontSize;
    /**
     * The Rotation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Describes the rotation of an item from its default orientation.
     * @var string
     */
    public $Rotation;
    /**
     * Constructor method for CustomLabelTextBoxEntry
     * @uses CustomLabelTextBoxEntry::setTopLeftCorner()
     * @uses CustomLabelTextBoxEntry::setBottomRightCorner()
     * @uses CustomLabelTextBoxEntry::setPosition()
     * @uses CustomLabelTextBoxEntry::setFormat()
     * @uses CustomLabelTextBoxEntry::setDataFields()
     * @uses CustomLabelTextBoxEntry::setThermalFontId()
     * @uses CustomLabelTextBoxEntry::setFontName()
     * @uses CustomLabelTextBoxEntry::setFontSize()
     * @uses CustomLabelTextBoxEntry::setRotation()
     * @param \Arkitecht\FedEx\Structs\CustomLabelPosition $topLeftCorner
     * @param \Arkitecht\FedEx\Structs\CustomLabelPosition $bottomRightCorner
     * @param \Arkitecht\FedEx\Structs\CustomLabelPosition $position
     * @param string $format
     * @param string $dataFields
     * @param string $thermalFontId
     * @param string $fontName
     * @param positiveInteger $fontSize
     * @param string $rotation
     */
    public function __construct(\Arkitecht\FedEx\Structs\CustomLabelPosition $topLeftCorner = null, \Arkitecht\FedEx\Structs\CustomLabelPosition $bottomRightCorner = null, \Arkitecht\FedEx\Structs\CustomLabelPosition $position = null, $format = null, $dataFields = null, $thermalFontId = null, $fontName = null, $fontSize = null, $rotation = null)
    {
        $this
            ->setTopLeftCorner($topLeftCorner)
            ->setBottomRightCorner($bottomRightCorner)
            ->setPosition($position)
            ->setFormat($format)
            ->setDataFields($dataFields)
            ->setThermalFontId($thermalFontId)
            ->setFontName($fontName)
            ->setFontSize($fontSize)
            ->setRotation($rotation);
    }
    /**
     * Get TopLeftCorner value
     * @return \Arkitecht\FedEx\Structs\CustomLabelPosition|null
     */
    public function getTopLeftCorner()
    {
        return $this->TopLeftCorner;
    }
    /**
     * Set TopLeftCorner value
     * @param \Arkitecht\FedEx\Structs\CustomLabelPosition $topLeftCorner
     * @return \Arkitecht\FedEx\Structs\CustomLabelTextBoxEntry
     */
    public function setTopLeftCorner(\Arkitecht\FedEx\Structs\CustomLabelPosition $topLeftCorner = null)
    {
        $this->TopLeftCorner = $topLeftCorner;
        return $this;
    }
    /**
     * Get BottomRightCorner value
     * @return \Arkitecht\FedEx\Structs\CustomLabelPosition|null
     */
    public function getBottomRightCorner()
    {
        return $this->BottomRightCorner;
    }
    /**
     * Set BottomRightCorner value
     * @param \Arkitecht\FedEx\Structs\CustomLabelPosition $bottomRightCorner
     * @return \Arkitecht\FedEx\Structs\CustomLabelTextBoxEntry
     */
    public function setBottomRightCorner(\Arkitecht\FedEx\Structs\CustomLabelPosition $bottomRightCorner = null)
    {
        $this->BottomRightCorner = $bottomRightCorner;
        return $this;
    }
    /**
     * Get Position value
     * @return \Arkitecht\FedEx\Structs\CustomLabelPosition|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param \Arkitecht\FedEx\Structs\CustomLabelPosition $position
     * @return \Arkitecht\FedEx\Structs\CustomLabelTextBoxEntry
     */
    public function setPosition(\Arkitecht\FedEx\Structs\CustomLabelPosition $position = null)
    {
        $this->Position = $position;
        return $this;
    }
    /**
     * Get Format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param string $format
     * @return \Arkitecht\FedEx\Structs\CustomLabelTextBoxEntry
     */
    public function setFormat($format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get DataFields value
     * @return string|null
     */
    public function getDataFields()
    {
        return $this->DataFields;
    }
    /**
     * Set DataFields value
     * @param string $dataFields
     * @return \Arkitecht\FedEx\Structs\CustomLabelTextBoxEntry
     */
    public function setDataFields($dataFields = null)
    {
        $this->DataFields = $dataFields;
        return $this;
    }
    /**
     * Get ThermalFontId value
     * @return string|null
     */
    public function getThermalFontId()
    {
        return $this->ThermalFontId;
    }
    /**
     * Set ThermalFontId value
     * @param string $thermalFontId
     * @return \Arkitecht\FedEx\Structs\CustomLabelTextBoxEntry
     */
    public function setThermalFontId($thermalFontId = null)
    {
        $this->ThermalFontId = $thermalFontId;
        return $this;
    }
    /**
     * Get FontName value
     * @return string|null
     */
    public function getFontName()
    {
        return $this->FontName;
    }
    /**
     * Set FontName value
     * @param string $fontName
     * @return \Arkitecht\FedEx\Structs\CustomLabelTextBoxEntry
     */
    public function setFontName($fontName = null)
    {
        $this->FontName = $fontName;
        return $this;
    }
    /**
     * Get FontSize value
     * @return positiveInteger|null
     */
    public function getFontSize()
    {
        return $this->FontSize;
    }
    /**
     * Set FontSize value
     * @param positiveInteger $fontSize
     * @return \Arkitecht\FedEx\Structs\CustomLabelTextBoxEntry
     */
    public function setFontSize($fontSize = null)
    {
        $this->FontSize = $fontSize;
        return $this;
    }
    /**
     * Get Rotation value
     * @return string|null
     */
    public function getRotation()
    {
        return $this->Rotation;
    }
    /**
     * Set Rotation value
     * @uses \Arkitecht\FedEx\Enums\RotationType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\RotationType::getValidValues()
     * @param string $rotation
     * @return \Arkitecht\FedEx\Structs\CustomLabelTextBoxEntry
     */
    public function setRotation($rotation = null)
    {
        if (!\Arkitecht\FedEx\Enums\RotationType::valueIsValid($rotation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $rotation, implode(', ', \Arkitecht\FedEx\Enums\RotationType::getValidValues())), __LINE__);
        }
        $this->Rotation = $rotation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CustomLabelTextBoxEntry
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
