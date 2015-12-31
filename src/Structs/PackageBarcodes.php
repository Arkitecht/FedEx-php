<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageBarcodes Structs
 * Meta informations extracted from the WSDL
 * - documentation: Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
 * @subpackage Structs
 */
class PackageBarcodes extends AbstractStructBase
{
    /**
     * The BinaryBarcodes
     * Meta informations extracted from the WSDL
     * - documentation: Binary-style barcodes for this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Each instance of this data type represents a barcode whose content must be represented as binary data (i.e. not ASCII text).
     * @var \Arkitecht\FedEx\Structs\BinaryBarcode
     */
    public $BinaryBarcodes;
    /**
     * The StringBarcodes
     * Meta informations extracted from the WSDL
     * - documentation: String-style barcodes for this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Each instance of this data type represents a barcode whose content must be represented as ASCII text (i.e. not binary data).
     * @var \Arkitecht\FedEx\Structs\StringBarcode
     */
    public $StringBarcodes;
    /**
     * Constructor method for PackageBarcodes
     * @uses PackageBarcodes::setBinaryBarcodes()
     * @uses PackageBarcodes::setStringBarcodes()
     * @param \Arkitecht\FedEx\Structs\BinaryBarcode $binaryBarcodes
     * @param \Arkitecht\FedEx\Structs\StringBarcode $stringBarcodes
     */
    public function __construct(\Arkitecht\FedEx\Structs\BinaryBarcode $binaryBarcodes = null, \Arkitecht\FedEx\Structs\StringBarcode $stringBarcodes = null)
    {
        $this
            ->setBinaryBarcodes($binaryBarcodes)
            ->setStringBarcodes($stringBarcodes);
    }
    /**
     * Get BinaryBarcodes value
     * @return \Arkitecht\FedEx\Structs\BinaryBarcode|null
     */
    public function getBinaryBarcodes()
    {
        return $this->BinaryBarcodes;
    }
    /**
     * Set BinaryBarcodes value
     * @param \Arkitecht\FedEx\Structs\BinaryBarcode $binaryBarcodes
     * @return \Arkitecht\FedEx\Structs\PackageBarcodes
     */
    public function setBinaryBarcodes(\Arkitecht\FedEx\Structs\BinaryBarcode $binaryBarcodes = null)
    {
        $this->BinaryBarcodes = $binaryBarcodes;
        return $this;
    }
    /**
     * Get StringBarcodes value
     * @return \Arkitecht\FedEx\Structs\StringBarcode|null
     */
    public function getStringBarcodes()
    {
        return $this->StringBarcodes;
    }
    /**
     * Set StringBarcodes value
     * @param \Arkitecht\FedEx\Structs\StringBarcode $stringBarcodes
     * @return \Arkitecht\FedEx\Structs\PackageBarcodes
     */
    public function setStringBarcodes(\Arkitecht\FedEx\Structs\StringBarcode $stringBarcodes = null)
    {
        $this->StringBarcodes = $stringBarcodes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\PackageBarcodes
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
