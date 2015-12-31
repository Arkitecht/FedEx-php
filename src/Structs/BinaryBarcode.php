<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BinaryBarcode Structs
 * Meta informations extracted from the WSDL
 * - documentation: Each instance of this data type represents a barcode whose content must be represented as binary data (i.e. not ASCII text).
 * @subpackage Structs
 */
class BinaryBarcode extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: The kind of barcode data in this instance.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: The data content of this instance.
     * - minOccurs: 0
     * @var base64Binary
     */
    public $Value;
    /**
     * Constructor method for BinaryBarcode
     * @uses BinaryBarcode::setType()
     * @uses BinaryBarcode::setValue()
     * @param string $type
     * @param base64Binary $value
     */
    public function __construct($type = null, base64Binary $value = null)
    {
        $this
            ->setType($type)
            ->setValue($value);
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
     * @uses \Arkitecht\FedEx\Enums\BinaryBarcodeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\BinaryBarcodeType::getValidValues()
     * @param string $type
     * @return \Arkitecht\FedEx\Structs\BinaryBarcode
     */
    public function setType($type = null)
    {
        if (!\Arkitecht\FedEx\Enums\BinaryBarcodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Arkitecht\FedEx\Enums\BinaryBarcodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Value value
     * @return base64Binary|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param base64Binary $value
     * @return \Arkitecht\FedEx\Structs\BinaryBarcode
     */
    public function setValue(base64Binary $value = null)
    {
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\BinaryBarcode
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
