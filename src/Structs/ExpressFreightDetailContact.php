<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpressFreightDetailContact Structs
 * @subpackage Structs
 */
class ExpressFreightDetailContact extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Phone;
    /**
     * Constructor method for ExpressFreightDetailContact
     * @uses ExpressFreightDetailContact::setName()
     * @uses ExpressFreightDetailContact::setPhone()
     * @param string $name
     * @param string $phone
     */
    public function __construct($name = null, $phone = null)
    {
        $this
            ->setName($name)
            ->setPhone($phone);
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
     * @return \Arkitecht\FedEx\Structs\ExpressFreightDetailContact
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param string $phone
     * @return \Arkitecht\FedEx\Structs\ExpressFreightDetailContact
     */
    public function setPhone($phone = null)
    {
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ExpressFreightDetailContact
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
