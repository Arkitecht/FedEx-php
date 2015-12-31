<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactAndAddress Structs
 * @subpackage Structs
 */
class ContactAndAddress extends AbstractStructBase
{
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Contact
     */
    public $Contact;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Address
     */
    public $Address;
    /**
     * Constructor method for ContactAndAddress
     * @uses ContactAndAddress::setContact()
     * @uses ContactAndAddress::setAddress()
     * @param \Arkitecht\FedEx\Structs\Contact $contact
     * @param \Arkitecht\FedEx\Structs\Address $address
     */
    public function __construct(\Arkitecht\FedEx\Structs\Contact $contact = null, \Arkitecht\FedEx\Structs\Address $address = null)
    {
        $this
            ->setContact($contact)
            ->setAddress($address);
    }
    /**
     * Get Contact value
     * @return \Arkitecht\FedEx\Structs\Contact|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \Arkitecht\FedEx\Structs\Contact $contact
     * @return \Arkitecht\FedEx\Structs\ContactAndAddress
     */
    public function setContact(\Arkitecht\FedEx\Structs\Contact $contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Get Address value
     * @return \Arkitecht\FedEx\Structs\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Arkitecht\FedEx\Structs\Address $address
     * @return \Arkitecht\FedEx\Structs\ContactAndAddress
     */
    public function setAddress(\Arkitecht\FedEx\Structs\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ContactAndAddress
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
