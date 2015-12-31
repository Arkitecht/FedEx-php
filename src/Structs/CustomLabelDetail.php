<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomLabelDetail Structs
 * @subpackage Structs
 */
class CustomLabelDetail extends AbstractStructBase
{
    /**
     * The CoordinateUnits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CoordinateUnits;
    /**
     * The TextEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Constructed string, based on format and zero or more data fields, printed in specified printer font (for thermal labels) or generic font/size (for plain paper labels).
     * @var \Arkitecht\FedEx\Structs\CustomLabelTextEntry
     */
    public $TextEntries;
    /**
     * The GraphicEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Image to be included from printer's memory, or from a local file for offline clients.
     * @var \Arkitecht\FedEx\Structs\CustomLabelGraphicEntry
     */
    public $GraphicEntries;
    /**
     * The BoxEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Solid (filled) rectangular area on label.
     * @var \Arkitecht\FedEx\Structs\CustomLabelBoxEntry
     */
    public $BoxEntries;
    /**
     * The TextBoxEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Constructed string, based on format and zero or more data fields, printed in specified printer font (for thermal labels) or generic font/size (for plain paper labels).
     * @var \Arkitecht\FedEx\Structs\CustomLabelTextBoxEntry
     */
    public $TextBoxEntries;
    /**
     * The BarcodeEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Constructed string, based on format and zero or more data fields, printed in specified barcode symbology.
     * @var \Arkitecht\FedEx\Structs\CustomLabelBarcodeEntry
     */
    public $BarcodeEntries;
    /**
     * Constructor method for CustomLabelDetail
     * @uses CustomLabelDetail::setCoordinateUnits()
     * @uses CustomLabelDetail::setTextEntries()
     * @uses CustomLabelDetail::setGraphicEntries()
     * @uses CustomLabelDetail::setBoxEntries()
     * @uses CustomLabelDetail::setTextBoxEntries()
     * @uses CustomLabelDetail::setBarcodeEntries()
     * @param string $coordinateUnits
     * @param \Arkitecht\FedEx\Structs\CustomLabelTextEntry $textEntries
     * @param \Arkitecht\FedEx\Structs\CustomLabelGraphicEntry $graphicEntries
     * @param \Arkitecht\FedEx\Structs\CustomLabelBoxEntry $boxEntries
     * @param \Arkitecht\FedEx\Structs\CustomLabelTextBoxEntry $textBoxEntries
     * @param \Arkitecht\FedEx\Structs\CustomLabelBarcodeEntry $barcodeEntries
     */
    public function __construct($coordinateUnits = null, \Arkitecht\FedEx\Structs\CustomLabelTextEntry $textEntries = null, \Arkitecht\FedEx\Structs\CustomLabelGraphicEntry $graphicEntries = null, \Arkitecht\FedEx\Structs\CustomLabelBoxEntry $boxEntries = null, \Arkitecht\FedEx\Structs\CustomLabelTextBoxEntry $textBoxEntries = null, \Arkitecht\FedEx\Structs\CustomLabelBarcodeEntry $barcodeEntries = null)
    {
        $this
            ->setCoordinateUnits($coordinateUnits)
            ->setTextEntries($textEntries)
            ->setGraphicEntries($graphicEntries)
            ->setBoxEntries($boxEntries)
            ->setTextBoxEntries($textBoxEntries)
            ->setBarcodeEntries($barcodeEntries);
    }
    /**
     * Get CoordinateUnits value
     * @return string|null
     */
    public function getCoordinateUnits()
    {
        return $this->CoordinateUnits;
    }
    /**
     * Set CoordinateUnits value
     * @uses \Arkitecht\FedEx\Enums\CustomLabelCoordinateUnits::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\CustomLabelCoordinateUnits::getValidValues()
     * @param string $coordinateUnits
     * @return \Arkitecht\FedEx\Structs\CustomLabelDetail
     */
    public function setCoordinateUnits($coordinateUnits = null)
    {
        if (!\Arkitecht\FedEx\Enums\CustomLabelCoordinateUnits::valueIsValid($coordinateUnits)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $coordinateUnits, implode(', ', \Arkitecht\FedEx\Enums\CustomLabelCoordinateUnits::getValidValues())), __LINE__);
        }
        $this->CoordinateUnits = $coordinateUnits;
        return $this;
    }
    /**
     * Get TextEntries value
     * @return \Arkitecht\FedEx\Structs\CustomLabelTextEntry|null
     */
    public function getTextEntries()
    {
        return $this->TextEntries;
    }
    /**
     * Set TextEntries value
     * @param \Arkitecht\FedEx\Structs\CustomLabelTextEntry $textEntries
     * @return \Arkitecht\FedEx\Structs\CustomLabelDetail
     */
    public function setTextEntries(\Arkitecht\FedEx\Structs\CustomLabelTextEntry $textEntries = null)
    {
        $this->TextEntries = $textEntries;
        return $this;
    }
    /**
     * Get GraphicEntries value
     * @return \Arkitecht\FedEx\Structs\CustomLabelGraphicEntry|null
     */
    public function getGraphicEntries()
    {
        return $this->GraphicEntries;
    }
    /**
     * Set GraphicEntries value
     * @param \Arkitecht\FedEx\Structs\CustomLabelGraphicEntry $graphicEntries
     * @return \Arkitecht\FedEx\Structs\CustomLabelDetail
     */
    public function setGraphicEntries(\Arkitecht\FedEx\Structs\CustomLabelGraphicEntry $graphicEntries = null)
    {
        $this->GraphicEntries = $graphicEntries;
        return $this;
    }
    /**
     * Get BoxEntries value
     * @return \Arkitecht\FedEx\Structs\CustomLabelBoxEntry|null
     */
    public function getBoxEntries()
    {
        return $this->BoxEntries;
    }
    /**
     * Set BoxEntries value
     * @param \Arkitecht\FedEx\Structs\CustomLabelBoxEntry $boxEntries
     * @return \Arkitecht\FedEx\Structs\CustomLabelDetail
     */
    public function setBoxEntries(\Arkitecht\FedEx\Structs\CustomLabelBoxEntry $boxEntries = null)
    {
        $this->BoxEntries = $boxEntries;
        return $this;
    }
    /**
     * Get TextBoxEntries value
     * @return \Arkitecht\FedEx\Structs\CustomLabelTextBoxEntry|null
     */
    public function getTextBoxEntries()
    {
        return $this->TextBoxEntries;
    }
    /**
     * Set TextBoxEntries value
     * @param \Arkitecht\FedEx\Structs\CustomLabelTextBoxEntry $textBoxEntries
     * @return \Arkitecht\FedEx\Structs\CustomLabelDetail
     */
    public function setTextBoxEntries(\Arkitecht\FedEx\Structs\CustomLabelTextBoxEntry $textBoxEntries = null)
    {
        $this->TextBoxEntries = $textBoxEntries;
        return $this;
    }
    /**
     * Get BarcodeEntries value
     * @return \Arkitecht\FedEx\Structs\CustomLabelBarcodeEntry|null
     */
    public function getBarcodeEntries()
    {
        return $this->BarcodeEntries;
    }
    /**
     * Set BarcodeEntries value
     * @param \Arkitecht\FedEx\Structs\CustomLabelBarcodeEntry $barcodeEntries
     * @return \Arkitecht\FedEx\Structs\CustomLabelDetail
     */
    public function setBarcodeEntries(\Arkitecht\FedEx\Structs\CustomLabelBarcodeEntry $barcodeEntries = null)
    {
        $this->BarcodeEntries = $barcodeEntries;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CustomLabelDetail
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
