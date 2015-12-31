<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EdtExciseCondition Structs
 * @subpackage Structs
 */
class EdtExciseCondition extends AbstractStructBase
{
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Category;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: Customer-declared value, with data type and legal values depending on excise condition, used in defining the taxable value of the item.
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * Constructor method for EdtExciseCondition
     * @uses EdtExciseCondition::setCategory()
     * @uses EdtExciseCondition::setValue()
     * @param string $category
     * @param string $value
     */
    public function __construct($category = null, $value = null)
    {
        $this
            ->setCategory($category)
            ->setValue($value);
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Arkitecht\FedEx\Structs\EdtExciseCondition
     */
    public function setCategory($category = null)
    {
        $this->Category = $category;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Arkitecht\FedEx\Structs\EdtExciseCondition
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\EdtExciseCondition
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
