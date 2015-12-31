<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageRating Structs
 * Meta informations extracted from the WSDL
 * - documentation: This class groups together for a single package all package-level rate data (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
 * @subpackage Structs
 */
class PackageRating extends AbstractStructBase
{
    /**
     * The ActualRateType
     * Meta informations extracted from the WSDL
     * - documentation: This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the package.
     * - minOccurs: 0
     * - documentation: The "PAYOR..." rates are expressed in the currency identified in the payor's rate table(s). The "RATED..." rates are expressed in the currency of the origin country. Former "...COUNTER..." values have become "...RETAIL..." values,
     * except for PAYOR_COUNTER and RATED_COUNTER, which have been removed.
     * @var string
     */
    public $ActualRateType;
    /**
     * The EffectiveNetDiscount
     * Meta informations extracted from the WSDL
     * - documentation: The "list" net charge minus "actual" net charge.
     * - minOccurs: 0
     * - documentation: The descriptive data for the medium of exchange for FedEx services.
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $EffectiveNetDiscount;
    /**
     * The PackageRateDetails
     * Meta informations extracted from the WSDL
     * - documentation: Each element of this field provides package-level rate data for a specific rate type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Data for a package's rates, as calculated per a specific rate type.
     * @var \Arkitecht\FedEx\Structs\PackageRateDetail
     */
    public $PackageRateDetails;
    /**
     * Constructor method for PackageRating
     * @uses PackageRating::setActualRateType()
     * @uses PackageRating::setEffectiveNetDiscount()
     * @uses PackageRating::setPackageRateDetails()
     * @param string $actualRateType
     * @param \Arkitecht\FedEx\Structs\Money $effectiveNetDiscount
     * @param \Arkitecht\FedEx\Structs\PackageRateDetail $packageRateDetails
     */
    public function __construct($actualRateType = null, \Arkitecht\FedEx\Structs\Money $effectiveNetDiscount = null, \Arkitecht\FedEx\Structs\PackageRateDetail $packageRateDetails = null)
    {
        $this
            ->setActualRateType($actualRateType)
            ->setEffectiveNetDiscount($effectiveNetDiscount)
            ->setPackageRateDetails($packageRateDetails);
    }
    /**
     * Get ActualRateType value
     * @return string|null
     */
    public function getActualRateType()
    {
        return $this->ActualRateType;
    }
    /**
     * Set ActualRateType value
     * @uses \Arkitecht\FedEx\Enums\ReturnedRateType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ReturnedRateType::getValidValues()
     * @param string $actualRateType
     * @return \Arkitecht\FedEx\Structs\PackageRating
     */
    public function setActualRateType($actualRateType = null)
    {
        if (!\Arkitecht\FedEx\Enums\ReturnedRateType::valueIsValid($actualRateType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $actualRateType, implode(', ', \Arkitecht\FedEx\Enums\ReturnedRateType::getValidValues())), __LINE__);
        }
        $this->ActualRateType = $actualRateType;
        return $this;
    }
    /**
     * Get EffectiveNetDiscount value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getEffectiveNetDiscount()
    {
        return $this->EffectiveNetDiscount;
    }
    /**
     * Set EffectiveNetDiscount value
     * @param \Arkitecht\FedEx\Structs\Money $effectiveNetDiscount
     * @return \Arkitecht\FedEx\Structs\PackageRating
     */
    public function setEffectiveNetDiscount(\Arkitecht\FedEx\Structs\Money $effectiveNetDiscount = null)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    /**
     * Get PackageRateDetails value
     * @return \Arkitecht\FedEx\Structs\PackageRateDetail|null
     */
    public function getPackageRateDetails()
    {
        return $this->PackageRateDetails;
    }
    /**
     * Set PackageRateDetails value
     * @param \Arkitecht\FedEx\Structs\PackageRateDetail $packageRateDetails
     * @return \Arkitecht\FedEx\Structs\PackageRating
     */
    public function setPackageRateDetails(\Arkitecht\FedEx\Structs\PackageRateDetail $packageRateDetails = null)
    {
        $this->PackageRateDetails = $packageRateDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\PackageRating
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
