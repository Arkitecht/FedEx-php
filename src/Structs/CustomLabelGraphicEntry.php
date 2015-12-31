<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomLabelGraphicEntry Structs
 * Meta informations extracted from the WSDL
 * - documentation: Image to be included from printer's memory, or from a local file for offline clients.
 * @subpackage Structs
 */
class CustomLabelGraphicEntry extends AbstractStructBase
{
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\CustomLabelPosition
     */
    public $Position;
    /**
     * The PrinterGraphicId
     * Meta informations extracted from the WSDL
     * - documentation: Printer-specific index of graphic image to be printed.
     * - minOccurs: 0
     * @var string
     */
    public $PrinterGraphicId;
    /**
     * The FileGraphicFullName
     * Meta informations extracted from the WSDL
     * - documentation: Fully-qualified path and file name for graphic image to be printed.
     * - minOccurs: 0
     * @var string
     */
    public $FileGraphicFullName;
    /**
     * Constructor method for CustomLabelGraphicEntry
     * @uses CustomLabelGraphicEntry::setPosition()
     * @uses CustomLabelGraphicEntry::setPrinterGraphicId()
     * @uses CustomLabelGraphicEntry::setFileGraphicFullName()
     * @param \Arkitecht\FedEx\Structs\CustomLabelPosition $position
     * @param string $printerGraphicId
     * @param string $fileGraphicFullName
     */
    public function __construct(\Arkitecht\FedEx\Structs\CustomLabelPosition $position = null, $printerGraphicId = null, $fileGraphicFullName = null)
    {
        $this
            ->setPosition($position)
            ->setPrinterGraphicId($printerGraphicId)
            ->setFileGraphicFullName($fileGraphicFullName);
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
     * @return \Arkitecht\FedEx\Structs\CustomLabelGraphicEntry
     */
    public function setPosition(\Arkitecht\FedEx\Structs\CustomLabelPosition $position = null)
    {
        $this->Position = $position;
        return $this;
    }
    /**
     * Get PrinterGraphicId value
     * @return string|null
     */
    public function getPrinterGraphicId()
    {
        return $this->PrinterGraphicId;
    }
    /**
     * Set PrinterGraphicId value
     * @param string $printerGraphicId
     * @return \Arkitecht\FedEx\Structs\CustomLabelGraphicEntry
     */
    public function setPrinterGraphicId($printerGraphicId = null)
    {
        $this->PrinterGraphicId = $printerGraphicId;
        return $this;
    }
    /**
     * Get FileGraphicFullName value
     * @return string|null
     */
    public function getFileGraphicFullName()
    {
        return $this->FileGraphicFullName;
    }
    /**
     * Set FileGraphicFullName value
     * @param string $fileGraphicFullName
     * @return \Arkitecht\FedEx\Structs\CustomLabelGraphicEntry
     */
    public function setFileGraphicFullName($fileGraphicFullName = null)
    {
        $this->FileGraphicFullName = $fileGraphicFullName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CustomLabelGraphicEntry
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
