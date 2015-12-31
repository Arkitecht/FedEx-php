<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentLineItem Structs
 * Meta informations extracted from the WSDL
 * - documentation: Description of an individual commodity or class of content in a shipment.
 * @subpackage Structs
 */
class FreightShipmentLineItem extends AbstractStructBase
{
    /**
     * The FreightClass
     * Meta informations extracted from the WSDL
     * - documentation: Freight class for this line item.
     * - minOccurs: 0
     * - documentation: These values represent the industry-standard freight classes used for FedEx Freight and FedEx National Freight shipment description. (Note: The alphabetic prefixes are required to distinguish these values from decimal numbers on some
     * client platforms.)
     * @var string
     */
    public $FreightClass;
    /**
     * The Packaging
     * Meta informations extracted from the WSDL
     * - documentation: Specification of handling-unit packaging for this commodity or class line.
     * - minOccurs: 0
     * - documentation: This enumeration rationalizes the former FedEx Express international "admissibility package" types (based on ANSI X.12) and the FedEx Freight packaging types. The values represented are those common to both carriers.
     * @var string
     */
    public $Packaging;
    /**
     * The Pieces
     * Meta informations extracted from the WSDL
     * - documentation: Number of pieces for this commodity or class line.
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $Pieces;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Customer-provided description for this commodity or class line.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - documentation: Weight for this commodity or class line.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Weight
     */
    public $Weight;
    /**
     * The Dimensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Dimensions
     */
    public $Dimensions;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - documentation: Volume (cubic measure) for this commodity or class line.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Volume
     */
    public $Volume;
    /**
     * Constructor method for FreightShipmentLineItem
     * @uses FreightShipmentLineItem::setFreightClass()
     * @uses FreightShipmentLineItem::setPackaging()
     * @uses FreightShipmentLineItem::setPieces()
     * @uses FreightShipmentLineItem::setDescription()
     * @uses FreightShipmentLineItem::setWeight()
     * @uses FreightShipmentLineItem::setDimensions()
     * @uses FreightShipmentLineItem::setVolume()
     * @param string $freightClass
     * @param string $packaging
     * @param nonNegativeInteger $pieces
     * @param string $description
     * @param \Arkitecht\FedEx\Structs\Weight $weight
     * @param \Arkitecht\FedEx\Structs\Dimensions $dimensions
     * @param \Arkitecht\FedEx\Structs\Volume $volume
     */
    public function __construct($freightClass = null, $packaging = null, $pieces = null, $description = null, \Arkitecht\FedEx\Structs\Weight $weight = null, \Arkitecht\FedEx\Structs\Dimensions $dimensions = null, \Arkitecht\FedEx\Structs\Volume $volume = null)
    {
        $this
            ->setFreightClass($freightClass)
            ->setPackaging($packaging)
            ->setPieces($pieces)
            ->setDescription($description)
            ->setWeight($weight)
            ->setDimensions($dimensions)
            ->setVolume($volume);
    }
    /**
     * Get FreightClass value
     * @return string|null
     */
    public function getFreightClass()
    {
        return $this->FreightClass;
    }
    /**
     * Set FreightClass value
     * @uses \Arkitecht\FedEx\Enums\FreightClassType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\FreightClassType::getValidValues()
     * @param string $freightClass
     * @return \Arkitecht\FedEx\Structs\FreightShipmentLineItem
     */
    public function setFreightClass($freightClass = null)
    {
        if (!\Arkitecht\FedEx\Enums\FreightClassType::valueIsValid($freightClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $freightClass, implode(', ', \Arkitecht\FedEx\Enums\FreightClassType::getValidValues())), __LINE__);
        }
        $this->FreightClass = $freightClass;
        return $this;
    }
    /**
     * Get Packaging value
     * @return string|null
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    /**
     * Set Packaging value
     * @uses \Arkitecht\FedEx\Enums\PhysicalPackagingType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\PhysicalPackagingType::getValidValues()
     * @param string $packaging
     * @return \Arkitecht\FedEx\Structs\FreightShipmentLineItem
     */
    public function setPackaging($packaging = null)
    {
        if (!\Arkitecht\FedEx\Enums\PhysicalPackagingType::valueIsValid($packaging)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packaging, implode(', ', \Arkitecht\FedEx\Enums\PhysicalPackagingType::getValidValues())), __LINE__);
        }
        $this->Packaging = $packaging;
        return $this;
    }
    /**
     * Get Pieces value
     * @return nonNegativeInteger|null
     */
    public function getPieces()
    {
        return $this->Pieces;
    }
    /**
     * Set Pieces value
     * @param nonNegativeInteger $pieces
     * @return \Arkitecht\FedEx\Structs\FreightShipmentLineItem
     */
    public function setPieces($pieces = null)
    {
        $this->Pieces = $pieces;
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
     * @return \Arkitecht\FedEx\Structs\FreightShipmentLineItem
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
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
     * @return \Arkitecht\FedEx\Structs\FreightShipmentLineItem
     */
    public function setWeight(\Arkitecht\FedEx\Structs\Weight $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Dimensions value
     * @return \Arkitecht\FedEx\Structs\Dimensions|null
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    /**
     * Set Dimensions value
     * @param \Arkitecht\FedEx\Structs\Dimensions $dimensions
     * @return \Arkitecht\FedEx\Structs\FreightShipmentLineItem
     */
    public function setDimensions(\Arkitecht\FedEx\Structs\Dimensions $dimensions = null)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    /**
     * Get Volume value
     * @return \Arkitecht\FedEx\Structs\Volume|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param \Arkitecht\FedEx\Structs\Volume $volume
     * @return \Arkitecht\FedEx\Structs\FreightShipmentLineItem
     */
    public function setVolume(\Arkitecht\FedEx\Structs\Volume $volume = null)
    {
        $this->Volume = $volume;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\FreightShipmentLineItem
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
