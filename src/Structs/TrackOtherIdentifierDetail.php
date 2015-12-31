<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackOtherIdentifierDetail Structs
 * @subpackage Structs
 */
class TrackOtherIdentifierDetail extends AbstractStructBase
{
    /**
     * The PackageIdentifier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The type and value of the package identifier that is to be used to retrieve the tracking information for a package.
     * @var \Arkitecht\FedEx\Structs\TrackPackageIdentifier
     */
    public $PackageIdentifier;
    /**
     * The TrackingNumberUniqueIdentifier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumberUniqueIdentifier;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identification of a FedEx operating company (transportation).
     * @var string
     */
    public $CarrierCode;
    /**
     * Constructor method for TrackOtherIdentifierDetail
     * @uses TrackOtherIdentifierDetail::setPackageIdentifier()
     * @uses TrackOtherIdentifierDetail::setTrackingNumberUniqueIdentifier()
     * @uses TrackOtherIdentifierDetail::setCarrierCode()
     * @param \Arkitecht\FedEx\Structs\TrackPackageIdentifier $packageIdentifier
     * @param string $trackingNumberUniqueIdentifier
     * @param string $carrierCode
     */
    public function __construct(\Arkitecht\FedEx\Structs\TrackPackageIdentifier $packageIdentifier = null, $trackingNumberUniqueIdentifier = null, $carrierCode = null)
    {
        $this
            ->setPackageIdentifier($packageIdentifier)
            ->setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
            ->setCarrierCode($carrierCode);
    }
    /**
     * Get PackageIdentifier value
     * @return \Arkitecht\FedEx\Structs\TrackPackageIdentifier|null
     */
    public function getPackageIdentifier()
    {
        return $this->PackageIdentifier;
    }
    /**
     * Set PackageIdentifier value
     * @param \Arkitecht\FedEx\Structs\TrackPackageIdentifier $packageIdentifier
     * @return \Arkitecht\FedEx\Structs\TrackOtherIdentifierDetail
     */
    public function setPackageIdentifier(\Arkitecht\FedEx\Structs\TrackPackageIdentifier $packageIdentifier = null)
    {
        $this->PackageIdentifier = $packageIdentifier;
        return $this;
    }
    /**
     * Get TrackingNumberUniqueIdentifier value
     * @return string|null
     */
    public function getTrackingNumberUniqueIdentifier()
    {
        return $this->TrackingNumberUniqueIdentifier;
    }
    /**
     * Set TrackingNumberUniqueIdentifier value
     * @param string $trackingNumberUniqueIdentifier
     * @return \Arkitecht\FedEx\Structs\TrackOtherIdentifierDetail
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier = null)
    {
        $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @uses \Arkitecht\FedEx\Enums\CarrierCodeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\CarrierCodeType::getValidValues()
     * @param string $carrierCode
     * @return \Arkitecht\FedEx\Structs\TrackOtherIdentifierDetail
     */
    public function setCarrierCode($carrierCode = null)
    {
        if (!\Arkitecht\FedEx\Enums\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \Arkitecht\FedEx\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\TrackOtherIdentifierDetail
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
