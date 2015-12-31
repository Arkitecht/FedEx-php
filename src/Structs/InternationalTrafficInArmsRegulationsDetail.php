<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalTrafficInArmsRegulationsDetail Structs
 * @subpackage Structs
 */
class InternationalTrafficInArmsRegulationsDetail extends AbstractStructBase
{
    /**
     * The LicenseOrExemptionNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LicenseOrExemptionNumber;
    /**
     * Constructor method for InternationalTrafficInArmsRegulationsDetail
     * @uses InternationalTrafficInArmsRegulationsDetail::setLicenseOrExemptionNumber()
     * @param string $licenseOrExemptionNumber
     */
    public function __construct($licenseOrExemptionNumber = null)
    {
        $this
            ->setLicenseOrExemptionNumber($licenseOrExemptionNumber);
    }
    /**
     * Get LicenseOrExemptionNumber value
     * @return string|null
     */
    public function getLicenseOrExemptionNumber()
    {
        return $this->LicenseOrExemptionNumber;
    }
    /**
     * Set LicenseOrExemptionNumber value
     * @param string $licenseOrExemptionNumber
     * @return \Arkitecht\FedEx\Structs\InternationalTrafficInArmsRegulationsDetail
     */
    public function setLicenseOrExemptionNumber($licenseOrExemptionNumber = null)
    {
        $this->LicenseOrExemptionNumber = $licenseOrExemptionNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\InternationalTrafficInArmsRegulationsDetail
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
