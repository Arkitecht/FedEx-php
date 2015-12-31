<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightGuaranteeDetail Structs
 * @subpackage Structs
 */
class FreightGuaranteeDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - documentation: Date for all Freight guarantee types.
     * - minOccurs: 0
     * @var date
     */
    public $Date;
    /**
     * Constructor method for FreightGuaranteeDetail
     * @uses FreightGuaranteeDetail::setType()
     * @uses FreightGuaranteeDetail::setDate()
     * @param string $type
     * @param date $date
     */
    public function __construct($type = null, $date = null)
    {
        $this
            ->setType($type)
            ->setDate($date);
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
     * @uses \Arkitecht\FedEx\Enums\FreightGuaranteeType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\FreightGuaranteeType::getValidValues()
     * @param string $type
     * @return \Arkitecht\FedEx\Structs\FreightGuaranteeDetail
     */
    public function setType($type = null)
    {
        if (!\Arkitecht\FedEx\Enums\FreightGuaranteeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Arkitecht\FedEx\Enums\FreightGuaranteeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Date value
     * @return date|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param date $date
     * @return \Arkitecht\FedEx\Structs\FreightGuaranteeDetail
     */
    public function setDate($date = null)
    {
        $this->Date = $date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\FreightGuaranteeDetail
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
