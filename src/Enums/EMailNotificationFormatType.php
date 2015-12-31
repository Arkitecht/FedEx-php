<?php

namespace Arkitecht\FedEx\Enums;

/**
 * This class stands for EMailNotificationFormatType Enums
 * Meta informations extracted from the WSDL
 * - documentation: The format of the email
 * @subpackage Enumerations
 */
class EMailNotificationFormatType
{
    /**
     * Constant for value 'HTML'
     * @return string 'HTML'
     */
    const VALUE_HTML = 'HTML';
    /**
     * Constant for value 'TEXT'
     * @return string 'TEXT'
     */
    const VALUE_TEXT = 'TEXT';
    /**
     * Constant for value 'WIRELESS'
     * @return string 'WIRELESS'
     */
    const VALUE_WIRELESS = 'WIRELESS';
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
     * @uses self::VALUE_HTML
     * @uses self::VALUE_TEXT
     * @uses self::VALUE_WIRELESS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HTML,
            self::VALUE_TEXT,
            self::VALUE_WIRELESS,
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
