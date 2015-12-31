<?php

namespace Arkitecht\FedEx\Enums;

/**
 * This class stands for BarcodeSymbologyType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identification of the type of barcode (symbology) used on FedEx documents and labels.
 * @subpackage Enumerations
 */
class BarcodeSymbologyType
{
    /**
     * Constant for value 'CODABAR'
     * @return string 'CODABAR'
     */
    const VALUE_CODABAR = 'CODABAR';
    /**
     * Constant for value 'CODE128'
     * @return string 'CODE128'
     */
    const VALUE_CODE128 = 'CODE128';
    /**
     * Constant for value 'CODE128B'
     * @return string 'CODE128B'
     */
    const VALUE_CODE128B = 'CODE128B';
    /**
     * Constant for value 'CODE128C'
     * @return string 'CODE128C'
     */
    const VALUE_CODE128C = 'CODE128C';
    /**
     * Constant for value 'CODE128_WIDEBAR'
     * @return string 'CODE128_WIDEBAR'
     */
    const VALUE_CODE128_WIDEBAR = 'CODE128_WIDEBAR';
    /**
     * Constant for value 'CODE39'
     * @return string 'CODE39'
     */
    const VALUE_CODE39 = 'CODE39';
    /**
     * Constant for value 'CODE93'
     * @return string 'CODE93'
     */
    const VALUE_CODE93 = 'CODE93';
    /**
     * Constant for value 'I2OF5'
     * @return string 'I2OF5'
     */
    const VALUE_I2OF5 = 'I2OF5';
    /**
     * Constant for value 'MANUAL'
     * @return string 'MANUAL'
     */
    const VALUE_MANUAL = 'MANUAL';
    /**
     * Constant for value 'PDF417'
     * @return string 'PDF417'
     */
    const VALUE_PDF417 = 'PDF417';
    /**
     * Constant for value 'POSTNET'
     * @return string 'POSTNET'
     */
    const VALUE_POSTNET = 'POSTNET';
    /**
     * Constant for value 'QR_CODE'
     * @return string 'QR_CODE'
     */
    const VALUE_QR_CODE = 'QR_CODE';
    /**
     * Constant for value 'UCC128'
     * @return string 'UCC128'
     */
    const VALUE_UCC128 = 'UCC128';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_CODABAR
     * @uses self::VALUE_CODE128
     * @uses self::VALUE_CODE128B
     * @uses self::VALUE_CODE128C
     * @uses self::VALUE_CODE128_WIDEBAR
     * @uses self::VALUE_CODE39
     * @uses self::VALUE_CODE93
     * @uses self::VALUE_I2OF5
     * @uses self::VALUE_MANUAL
     * @uses self::VALUE_PDF417
     * @uses self::VALUE_POSTNET
     * @uses self::VALUE_QR_CODE
     * @uses self::VALUE_UCC128
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CODABAR,
            self::VALUE_CODE128,
            self::VALUE_CODE128B,
            self::VALUE_CODE128C,
            self::VALUE_CODE128_WIDEBAR,
            self::VALUE_CODE39,
            self::VALUE_CODE93,
            self::VALUE_I2OF5,
            self::VALUE_MANUAL,
            self::VALUE_PDF417,
            self::VALUE_POSTNET,
            self::VALUE_QR_CODE,
            self::VALUE_UCC128,
        );
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
