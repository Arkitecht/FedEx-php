<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentVariationOptionDetail Structs
 * @subpackage Structs
 */
class ShipmentVariationOptionDetail extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the name or the key for the shipment variation.
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The Values
     * Meta informations extracted from the WSDL
     * - documentation: The values that are valid for the specified shipment variation in the context of the current shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $Values;
    /**
     * Constructor method for ShipmentVariationOptionDetail
     * @uses ShipmentVariationOptionDetail::setId()
     * @uses ShipmentVariationOptionDetail::setValues()
     * @param string $id
     * @param string $values
     */
    public function __construct($id = null, $values = null)
    {
        $this
            ->setId($id)
            ->setValues($values);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Arkitecht\FedEx\Structs\ShipmentVariationOptionDetail
     */
    public function setId($id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Values value
     * @return string|null
     */
    public function getValues()
    {
        return $this->Values;
    }
    /**
     * Set Values value
     * @param string $values
     * @return \Arkitecht\FedEx\Structs\ShipmentVariationOptionDetail
     */
    public function setValues($values = null)
    {
        $this->Values = $values;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ShipmentVariationOptionDetail
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
