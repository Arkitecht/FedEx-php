<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomLabelBarcodeEntry Structs
 * Meta informations extracted from the WSDL
 * - documentation: Constructed string, based on format and zero or more data fields, printed in specified barcode symbology.
 * @subpackage Structs
 */
class CustomLabelBarcodeEntry extends AbstractStructBase
{
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
     * The BarHeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BarHeight;
    /**
     * The ThinBarWidth
     * Meta informations extracted from the WSDL
     * - documentation: Width of thinnest bar/space element in the barcode.
     * - minOccurs: 0
     * @var int
     */
    public $ThinBarWidth;
    /**
     * The BarcodeSymbology
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identification of the type of barcode (symbology) used on FedEx documents and labels.
     * @var string
     */
    public $BarcodeSymbology;
    /**
     * Constructor method for CustomLabelBarcodeEntry
     * @uses CustomLabelBarcodeEntry::setPosition()
     * @uses CustomLabelBarcodeEntry::setFormat()
     * @uses CustomLabelBarcodeEntry::setDataFields()
     * @uses CustomLabelBarcodeEntry::setBarHeight()
     * @uses CustomLabelBarcodeEntry::setThinBarWidth()
     * @uses CustomLabelBarcodeEntry::setBarcodeSymbology()
     * @param \Arkitecht\FedEx\Structs\CustomLabelPosition $position
     * @param string $format
     * @param string $dataFields
     * @param int $barHeight
     * @param int $thinBarWidth
     * @param string $barcodeSymbology
     */
    public function __construct(\Arkitecht\FedEx\Structs\CustomLabelPosition $position = null, $format = null, $dataFields = null, $barHeight = null, $thinBarWidth = null, $barcodeSymbology = null)
    {
        $this
            ->setPosition($position)
            ->setFormat($format)
            ->setDataFields($dataFields)
            ->setBarHeight($barHeight)
            ->setThinBarWidth($thinBarWidth)
            ->setBarcodeSymbology($barcodeSymbology);
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
     * @return \Arkitecht\FedEx\Structs\CustomLabelBarcodeEntry
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
     * @return \Arkitecht\FedEx\Structs\CustomLabelBarcodeEntry
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
     * @return \Arkitecht\FedEx\Structs\CustomLabelBarcodeEntry
     */
    public function setDataFields($dataFields = null)
    {
        $this->DataFields = $dataFields;
        return $this;
    }
    /**
     * Get BarHeight value
     * @return int|null
     */
    public function getBarHeight()
    {
        return $this->BarHeight;
    }
    /**
     * Set BarHeight value
     * @param int $barHeight
     * @return \Arkitecht\FedEx\Structs\CustomLabelBarcodeEntry
     */
    public function setBarHeight($barHeight = null)
    {
        $this->BarHeight = $barHeight;
        return $this;
    }
    /**
     * Get ThinBarWidth value
     * @return int|null
     */
    public function getThinBarWidth()
    {
        return $this->ThinBarWidth;
    }
    /**
     * Set ThinBarWidth value
     * @param int $thinBarWidth
     * @return \Arkitecht\FedEx\Structs\CustomLabelBarcodeEntry
     */
    public function setThinBarWidth($thinBarWidth = null)
    {
        $this->ThinBarWidth = $thinBarWidth;
        return $this;
    }
    /**
     * Get BarcodeSymbology value
     * @return string|null
     */
    public function getBarcodeSymbology()
    {
        return $this->BarcodeSymbology;
    }
    /**
     * Set BarcodeSymbology value
     * @uses \Arkitecht\FedEx\Enums\BarcodeSymbologyType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\BarcodeSymbologyType::getValidValues()
     * @param string $barcodeSymbology
     * @return \Arkitecht\FedEx\Structs\CustomLabelBarcodeEntry
     */
    public function setBarcodeSymbology($barcodeSymbology = null)
    {
        if (!\Arkitecht\FedEx\Enums\BarcodeSymbologyType::valueIsValid($barcodeSymbology)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $barcodeSymbology, implode(', ', \Arkitecht\FedEx\Enums\BarcodeSymbologyType::getValidValues())), __LINE__);
        }
        $this->BarcodeSymbology = $barcodeSymbology;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CustomLabelBarcodeEntry
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
