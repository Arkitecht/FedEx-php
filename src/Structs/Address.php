<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address Structs
 * Meta informations extracted from the WSDL
 * - documentation: Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within
 * the US).
 * @subpackage Structs
 */
class Address extends AbstractStructBase
{
    /**
     * The StreetLines
     * Meta informations extracted from the WSDL
     * - documentation: Combination of number, street name, etc. At least one line is required for a valid physical address; empty lines should not be included.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $StreetLines;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - documentation: Name of city, town, etc.
     * - minOccurs: 0
     * @var string
     */
    public $City;
    /**
     * The StateOrProvinceCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifying abbreviation for US state, Canada province, etc. Format and presence of this field will vary, depending on country.
     * - minOccurs: 0
     * @var string
     */
    public $StateOrProvinceCode;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - documentation: Identification of a region (usually small) for mail/package delivery. Format and presence of this field will vary, depending on country.
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * The UrbanizationCode
     * Meta informations extracted from the WSDL
     * - documentation: Relevant only to addresses in Puerto Rico.
     * - minOccurs: 0
     * @var string
     */
    public $UrbanizationCode;
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - documentation: The two-letter code used to identify a country.
     * - minOccurs: 0
     * @var string
     */
    public $CountryCode;
    /**
     * The CountryName
     * Meta informations extracted from the WSDL
     * - documentation: The fully spelt out name of a country.
     * - minOccurs: 0
     * @var string
     */
    public $CountryName;
    /**
     * The Residential
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether this address residential (as opposed to commercial).
     * - minOccurs: 0
     * @var boolean
     */
    public $Residential;
    /**
     * Constructor method for Address
     * @uses Address::setStreetLines()
     * @uses Address::setCity()
     * @uses Address::setStateOrProvinceCode()
     * @uses Address::setPostalCode()
     * @uses Address::setUrbanizationCode()
     * @uses Address::setCountryCode()
     * @uses Address::setCountryName()
     * @uses Address::setResidential()
     * @param string $streetLines
     * @param string $city
     * @param string $stateOrProvinceCode
     * @param string $postalCode
     * @param string $urbanizationCode
     * @param string $countryCode
     * @param string $countryName
     * @param boolean $residential
     */
    public function __construct($streetLines = null, $city = null, $stateOrProvinceCode = null, $postalCode = null, $urbanizationCode = null, $countryCode = null, $countryName = null, $residential = null)
    {
        $this
            ->setStreetLines($streetLines)
            ->setCity($city)
            ->setStateOrProvinceCode($stateOrProvinceCode)
            ->setPostalCode($postalCode)
            ->setUrbanizationCode($urbanizationCode)
            ->setCountryCode($countryCode)
            ->setCountryName($countryName)
            ->setResidential($residential);
    }
    /**
     * Get StreetLines value
     * @return string|null
     */
    public function getStreetLines()
    {
        return $this->StreetLines;
    }
    /**
     * Set StreetLines value
     * @param string $streetLines
     * @return \Arkitecht\FedEx\Structs\Address
     */
    public function setStreetLines($streetLines = null)
    {
        $this->StreetLines = $streetLines;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \Arkitecht\FedEx\Structs\Address
     */
    public function setCity($city = null)
    {
        $this->City = $city;
        return $this;
    }
    /**
     * Get StateOrProvinceCode value
     * @return string|null
     */
    public function getStateOrProvinceCode()
    {
        return $this->StateOrProvinceCode;
    }
    /**
     * Set StateOrProvinceCode value
     * @param string $stateOrProvinceCode
     * @return \Arkitecht\FedEx\Structs\Address
     */
    public function setStateOrProvinceCode($stateOrProvinceCode = null)
    {
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \Arkitecht\FedEx\Structs\Address
     */
    public function setPostalCode($postalCode = null)
    {
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get UrbanizationCode value
     * @return string|null
     */
    public function getUrbanizationCode()
    {
        return $this->UrbanizationCode;
    }
    /**
     * Set UrbanizationCode value
     * @param string $urbanizationCode
     * @return \Arkitecht\FedEx\Structs\Address
     */
    public function setUrbanizationCode($urbanizationCode = null)
    {
        $this->UrbanizationCode = $urbanizationCode;
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Arkitecht\FedEx\Structs\Address
     */
    public function setCountryCode($countryCode = null)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get CountryName value
     * @return string|null
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param string $countryName
     * @return \Arkitecht\FedEx\Structs\Address
     */
    public function setCountryName($countryName = null)
    {
        $this->CountryName = $countryName;
        return $this;
    }
    /**
     * Get Residential value
     * @return boolean|null
     */
    public function getResidential()
    {
        return $this->Residential;
    }
    /**
     * Set Residential value
     * @param boolean $residential
     * @return \Arkitecht\FedEx\Structs\Address
     */
    public function setResidential($residential = null)
    {
        $this->Residential = $residential;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\Address
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
