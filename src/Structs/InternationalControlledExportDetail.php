<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalControlledExportDetail Structs
 * @subpackage Structs
 */
class InternationalControlledExportDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The ForeignTradeZoneCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ForeignTradeZoneCode;
    /**
     * The EntryNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EntryNumber;
    /**
     * The LicenseOrPermitNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LicenseOrPermitNumber;
    /**
     * The LicenseOrPermitExpirationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var date
     */
    public $LicenseOrPermitExpirationDate;
    /**
     * Constructor method for InternationalControlledExportDetail
     * @uses InternationalControlledExportDetail::setType()
     * @uses InternationalControlledExportDetail::setForeignTradeZoneCode()
     * @uses InternationalControlledExportDetail::setEntryNumber()
     * @uses InternationalControlledExportDetail::setLicenseOrPermitNumber()
     * @uses InternationalControlledExportDetail::setLicenseOrPermitExpirationDate()
     * @param string $type
     * @param string $foreignTradeZoneCode
     * @param string $entryNumber
     * @param string $licenseOrPermitNumber
     * @param date $licenseOrPermitExpirationDate
     */
    public function __construct($type = null, $foreignTradeZoneCode = null, $entryNumber = null, $licenseOrPermitNumber = null, $licenseOrPermitExpirationDate = null)
    {
        $this
            ->setType($type)
            ->setForeignTradeZoneCode($foreignTradeZoneCode)
            ->setEntryNumber($entryNumber)
            ->setLicenseOrPermitNumber($licenseOrPermitNumber)
            ->setLicenseOrPermitExpirationDate($licenseOrPermitExpirationDate);
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
     * @uses \Arkitecht\FedEx\Enums\InternationalControlledExportType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\InternationalControlledExportType::getValidValues()
     * @param string $type
     * @return \Arkitecht\FedEx\Structs\InternationalControlledExportDetail
     */
    public function setType($type = null)
    {
        if (!\Arkitecht\FedEx\Enums\InternationalControlledExportType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Arkitecht\FedEx\Enums\InternationalControlledExportType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ForeignTradeZoneCode value
     * @return string|null
     */
    public function getForeignTradeZoneCode()
    {
        return $this->ForeignTradeZoneCode;
    }
    /**
     * Set ForeignTradeZoneCode value
     * @param string $foreignTradeZoneCode
     * @return \Arkitecht\FedEx\Structs\InternationalControlledExportDetail
     */
    public function setForeignTradeZoneCode($foreignTradeZoneCode = null)
    {
        $this->ForeignTradeZoneCode = $foreignTradeZoneCode;
        return $this;
    }
    /**
     * Get EntryNumber value
     * @return string|null
     */
    public function getEntryNumber()
    {
        return $this->EntryNumber;
    }
    /**
     * Set EntryNumber value
     * @param string $entryNumber
     * @return \Arkitecht\FedEx\Structs\InternationalControlledExportDetail
     */
    public function setEntryNumber($entryNumber = null)
    {
        $this->EntryNumber = $entryNumber;
        return $this;
    }
    /**
     * Get LicenseOrPermitNumber value
     * @return string|null
     */
    public function getLicenseOrPermitNumber()
    {
        return $this->LicenseOrPermitNumber;
    }
    /**
     * Set LicenseOrPermitNumber value
     * @param string $licenseOrPermitNumber
     * @return \Arkitecht\FedEx\Structs\InternationalControlledExportDetail
     */
    public function setLicenseOrPermitNumber($licenseOrPermitNumber = null)
    {
        $this->LicenseOrPermitNumber = $licenseOrPermitNumber;
        return $this;
    }
    /**
     * Get LicenseOrPermitExpirationDate value
     * @return date|null
     */
    public function getLicenseOrPermitExpirationDate()
    {
        return $this->LicenseOrPermitExpirationDate;
    }
    /**
     * Set LicenseOrPermitExpirationDate value
     * @param date $licenseOrPermitExpirationDate
     * @return \Arkitecht\FedEx\Structs\InternationalControlledExportDetail
     */
    public function setLicenseOrPermitExpirationDate($licenseOrPermitExpirationDate = null)
    {
        $this->LicenseOrPermitExpirationDate = $licenseOrPermitExpirationDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\InternationalControlledExportDetail
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
