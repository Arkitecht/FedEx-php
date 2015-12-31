<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Commodity Structs
 * @subpackage Structs
 */
class Commodity extends AbstractStructBase
{
    /**
     * The CommodityId
     * Meta informations extracted from the WSDL
     * - documentation: Value used to identify a commodity description; must be unique within the containing shipment.
     * - minOccurs: 0
     * @var string
     */
    public $CommodityId;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The NumberOfPieces
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $NumberOfPieces;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The CountryOfManufacture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CountryOfManufacture;
    /**
     * The HarmonizedCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HarmonizedCode;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $Weight;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: This field is used for enterprise transactions.
     * - minOccurs: 0
     * @var decimal
     */
    public $Quantity;
    /**
     * The QuantityUnits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $QuantityUnits;
    /**
     * The AdditionalMeasures
     * Meta informations extracted from the WSDL
     * - documentation: Contains only additional quantitative information other than weight and quantity to calculate duties and taxes.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Measure
     */
    public $AdditionalMeasures;
    /**
     * The UnitPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $UnitPrice;
    /**
     * The CustomsValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $CustomsValue;
    /**
     * The ExciseConditions
     * Meta informations extracted from the WSDL
     * - documentation: Defines additional characteristic of commodity used to calculate duties and taxes
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\EdtExciseCondition
     */
    public $ExciseConditions;
    /**
     * The ExportLicenseNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExportLicenseNumber;
    /**
     * The ExportLicenseExpirationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var date
     */
    public $ExportLicenseExpirationDate;
    /**
     * The CIMarksAndNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CIMarksAndNumbers;
    /**
     * The PartNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PartNumber;
    /**
     * The NaftaDetail
     * Meta informations extracted from the WSDL
     * - documentation: All data required for this commodity in NAFTA Certificate of Origin.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\NaftaCommodityDetail
     */
    public $NaftaDetail;
    /**
     * Constructor method for Commodity
     * @uses Commodity::setCommodityId()
     * @uses Commodity::setName()
     * @uses Commodity::setNumberOfPieces()
     * @uses Commodity::setDescription()
     * @uses Commodity::setCountryOfManufacture()
     * @uses Commodity::setHarmonizedCode()
     * @uses Commodity::setWeight()
     * @uses Commodity::setQuantity()
     * @uses Commodity::setQuantityUnits()
     * @uses Commodity::setAdditionalMeasures()
     * @uses Commodity::setUnitPrice()
     * @uses Commodity::setCustomsValue()
     * @uses Commodity::setExciseConditions()
     * @uses Commodity::setExportLicenseNumber()
     * @uses Commodity::setExportLicenseExpirationDate()
     * @uses Commodity::setCIMarksAndNumbers()
     * @uses Commodity::setPartNumber()
     * @uses Commodity::setNaftaDetail()
     * @param string $commodityId
     * @param string $name
     * @param nonNegativeInteger $numberOfPieces
     * @param string $description
     * @param string $countryOfManufacture
     * @param string $harmonizedCode
     * @param \Arkitecht\FedEx\Structs\Weight $weight
     * @param decimal $quantity
     * @param string $quantityUnits
     * @param \Arkitecht\FedEx\Structs\Measure $additionalMeasures
     * @param \Arkitecht\FedEx\Structs\Money $unitPrice
     * @param \Arkitecht\FedEx\Structs\Money $customsValue
     * @param \Arkitecht\FedEx\Structs\EdtExciseCondition $exciseConditions
     * @param string $exportLicenseNumber
     * @param date $exportLicenseExpirationDate
     * @param string $cIMarksAndNumbers
     * @param string $partNumber
     * @param \Arkitecht\FedEx\Structs\NaftaCommodityDetail $naftaDetail
     */
    public function __construct($commodityId = null, $name = null, $numberOfPieces = null, $description = null, $countryOfManufacture = null, $harmonizedCode = null, \Arkitecht\FedEx\Structs\Weight $weight = null, $quantity = null, $quantityUnits = null, \Arkitecht\FedEx\Structs\Measure $additionalMeasures = null, \Arkitecht\FedEx\Structs\Money $unitPrice = null, \Arkitecht\FedEx\Structs\Money $customsValue = null, \Arkitecht\FedEx\Structs\EdtExciseCondition $exciseConditions = null, $exportLicenseNumber = null, $exportLicenseExpirationDate = null, $cIMarksAndNumbers = null, $partNumber = null, \Arkitecht\FedEx\Structs\NaftaCommodityDetail $naftaDetail = null)
    {
        $this
            ->setCommodityId($commodityId)
            ->setName($name)
            ->setNumberOfPieces($numberOfPieces)
            ->setDescription($description)
            ->setCountryOfManufacture($countryOfManufacture)
            ->setHarmonizedCode($harmonizedCode)
            ->setWeight($weight)
            ->setQuantity($quantity)
            ->setQuantityUnits($quantityUnits)
            ->setAdditionalMeasures($additionalMeasures)
            ->setUnitPrice($unitPrice)
            ->setCustomsValue($customsValue)
            ->setExciseConditions($exciseConditions)
            ->setExportLicenseNumber($exportLicenseNumber)
            ->setExportLicenseExpirationDate($exportLicenseExpirationDate)
            ->setCIMarksAndNumbers($cIMarksAndNumbers)
            ->setPartNumber($partNumber)
            ->setNaftaDetail($naftaDetail);
    }
    /**
     * Get CommodityId value
     * @return string|null
     */
    public function getCommodityId()
    {
        return $this->CommodityId;
    }
    /**
     * Set CommodityId value
     * @param string $commodityId
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setCommodityId($commodityId = null)
    {
        $this->CommodityId = $commodityId;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get NumberOfPieces value
     * @return nonNegativeInteger|null
     */
    public function getNumberOfPieces()
    {
        return $this->NumberOfPieces;
    }
    /**
     * Set NumberOfPieces value
     * @param nonNegativeInteger $numberOfPieces
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setNumberOfPieces($numberOfPieces = null)
    {
        $this->NumberOfPieces = $numberOfPieces;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get CountryOfManufacture value
     * @return string|null
     */
    public function getCountryOfManufacture()
    {
        return $this->CountryOfManufacture;
    }
    /**
     * Set CountryOfManufacture value
     * @param string $countryOfManufacture
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setCountryOfManufacture($countryOfManufacture = null)
    {
        $this->CountryOfManufacture = $countryOfManufacture;
        return $this;
    }
    /**
     * Get HarmonizedCode value
     * @return string|null
     */
    public function getHarmonizedCode()
    {
        return $this->HarmonizedCode;
    }
    /**
     * Set HarmonizedCode value
     * @param string $harmonizedCode
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setHarmonizedCode($harmonizedCode = null)
    {
        $this->HarmonizedCode = $harmonizedCode;
        return $this;
    }
    /**
     * Get Weight value
     * @return \Arkitecht\FedEx\Structs\Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Arkitecht\FedEx\Structs\Weight $weight
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setWeight(\Arkitecht\FedEx\Structs\Weight $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Quantity value
     * @return decimal|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param decimal $quantity
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setQuantity($quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get QuantityUnits value
     * @return string|null
     */
    public function getQuantityUnits()
    {
        return $this->QuantityUnits;
    }
    /**
     * Set QuantityUnits value
     * @param string $quantityUnits
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setQuantityUnits($quantityUnits = null)
    {
        $this->QuantityUnits = $quantityUnits;
        return $this;
    }
    /**
     * Get AdditionalMeasures value
     * @return \Arkitecht\FedEx\Structs\Measure|null
     */
    public function getAdditionalMeasures()
    {
        return $this->AdditionalMeasures;
    }
    /**
     * Set AdditionalMeasures value
     * @param \Arkitecht\FedEx\Structs\Measure $additionalMeasures
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setAdditionalMeasures(\Arkitecht\FedEx\Structs\Measure $additionalMeasures = null)
    {
        $this->AdditionalMeasures = $additionalMeasures;
        return $this;
    }
    /**
     * Get UnitPrice value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }
    /**
     * Set UnitPrice value
     * @param \Arkitecht\FedEx\Structs\Money $unitPrice
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setUnitPrice(\Arkitecht\FedEx\Structs\Money $unitPrice = null)
    {
        $this->UnitPrice = $unitPrice;
        return $this;
    }
    /**
     * Get CustomsValue value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getCustomsValue()
    {
        return $this->CustomsValue;
    }
    /**
     * Set CustomsValue value
     * @param \Arkitecht\FedEx\Structs\Money $customsValue
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setCustomsValue(\Arkitecht\FedEx\Structs\Money $customsValue = null)
    {
        $this->CustomsValue = $customsValue;
        return $this;
    }
    /**
     * Get ExciseConditions value
     * @return \Arkitecht\FedEx\Structs\EdtExciseCondition|null
     */
    public function getExciseConditions()
    {
        return $this->ExciseConditions;
    }
    /**
     * Set ExciseConditions value
     * @param \Arkitecht\FedEx\Structs\EdtExciseCondition $exciseConditions
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setExciseConditions(\Arkitecht\FedEx\Structs\EdtExciseCondition $exciseConditions = null)
    {
        $this->ExciseConditions = $exciseConditions;
        return $this;
    }
    /**
     * Get ExportLicenseNumber value
     * @return string|null
     */
    public function getExportLicenseNumber()
    {
        return $this->ExportLicenseNumber;
    }
    /**
     * Set ExportLicenseNumber value
     * @param string $exportLicenseNumber
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setExportLicenseNumber($exportLicenseNumber = null)
    {
        $this->ExportLicenseNumber = $exportLicenseNumber;
        return $this;
    }
    /**
     * Get ExportLicenseExpirationDate value
     * @return date|null
     */
    public function getExportLicenseExpirationDate()
    {
        return $this->ExportLicenseExpirationDate;
    }
    /**
     * Set ExportLicenseExpirationDate value
     * @param date $exportLicenseExpirationDate
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setExportLicenseExpirationDate($exportLicenseExpirationDate = null)
    {
        $this->ExportLicenseExpirationDate = $exportLicenseExpirationDate;
        return $this;
    }
    /**
     * Get CIMarksAndNumbers value
     * @return string|null
     */
    public function getCIMarksAndNumbers()
    {
        return $this->CIMarksAndNumbers;
    }
    /**
     * Set CIMarksAndNumbers value
     * @param string $cIMarksAndNumbers
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setCIMarksAndNumbers($cIMarksAndNumbers = null)
    {
        $this->CIMarksAndNumbers = $cIMarksAndNumbers;
        return $this;
    }
    /**
     * Get PartNumber value
     * @return string|null
     */
    public function getPartNumber()
    {
        return $this->PartNumber;
    }
    /**
     * Set PartNumber value
     * @param string $partNumber
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setPartNumber($partNumber = null)
    {
        $this->PartNumber = $partNumber;
        return $this;
    }
    /**
     * Get NaftaDetail value
     * @return \Arkitecht\FedEx\Structs\NaftaCommodityDetail|null
     */
    public function getNaftaDetail()
    {
        return $this->NaftaDetail;
    }
    /**
     * Set NaftaDetail value
     * @param \Arkitecht\FedEx\Structs\NaftaCommodityDetail $naftaDetail
     * @return \Arkitecht\FedEx\Structs\Commodity
     */
    public function setNaftaDetail(\Arkitecht\FedEx\Structs\NaftaCommodityDetail $naftaDetail = null)
    {
        $this->NaftaDetail = $naftaDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\Commodity
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
