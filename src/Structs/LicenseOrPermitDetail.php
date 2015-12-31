<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LicenseOrPermitDetail Structs
 * @subpackage Structs
 */
class LicenseOrPermitDetail extends AbstractStructBase
{
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - documentation: License or Permit Number.
     * - minOccurs: 0
     * @var string
     */
    public $Number;
    /**
     * The EffectiveDate
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the effective date of the license.
     * - minOccurs: 0
     * @var date
     */
    public $EffectiveDate;
    /**
     * The ExpirationDate
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the expiration date of the license.
     * - minOccurs: 0
     * @var date
     */
    public $ExpirationDate;
    /**
     * Constructor method for LicenseOrPermitDetail
     * @uses LicenseOrPermitDetail::setNumber()
     * @uses LicenseOrPermitDetail::setEffectiveDate()
     * @uses LicenseOrPermitDetail::setExpirationDate()
     * @param string $number
     * @param date $effectiveDate
     * @param date $expirationDate
     */
    public function __construct($number = null, $effectiveDate = null, $expirationDate = null)
    {
        $this
            ->setNumber($number)
            ->setEffectiveDate($effectiveDate)
            ->setExpirationDate($expirationDate);
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Arkitecht\FedEx\Structs\LicenseOrPermitDetail
     */
    public function setNumber($number = null)
    {
        $this->Number = $number;
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return date|null
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param date $effectiveDate
     * @return \Arkitecht\FedEx\Structs\LicenseOrPermitDetail
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return date|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param date $expirationDate
     * @return \Arkitecht\FedEx\Structs\LicenseOrPermitDetail
     */
    public function setExpirationDate($expirationDate = null)
    {
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\LicenseOrPermitDetail
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
