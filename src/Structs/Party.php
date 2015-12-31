<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Party Structs
 * @subpackage Structs
 */
class Party extends AbstractStructBase
{
    /**
     * The AccountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccountNumber;
    /**
     * The Tins
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\TaxpayerIdentification
     */
    public $Tins;
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
     * Constructor method for Party
     * @uses Party::setAccountNumber()
     * @uses Party::setTins()
     * @uses Party::setContact()
     * @uses Party::setAddress()
     * @param string $accountNumber
     * @param \Arkitecht\FedEx\Structs\TaxpayerIdentification $tins
     * @param \Arkitecht\FedEx\Structs\Contact $contact
     * @param \Arkitecht\FedEx\Structs\Address $address
     */
    public function __construct($accountNumber = null, \Arkitecht\FedEx\Structs\TaxpayerIdentification $tins = null, \Arkitecht\FedEx\Structs\Contact $contact = null, \Arkitecht\FedEx\Structs\Address $address = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setTins($tins)
            ->setContact($contact)
            ->setAddress($address);
    }
    /**
     * Get AccountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param string $accountNumber
     * @return \Arkitecht\FedEx\Structs\Party
     */
    public function setAccountNumber($accountNumber = null)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get Tins value
     * @return \Arkitecht\FedEx\Structs\TaxpayerIdentification|null
     */
    public function getTins()
    {
        return $this->Tins;
    }
    /**
     * Set Tins value
     * @param \Arkitecht\FedEx\Structs\TaxpayerIdentification $tins
     * @return \Arkitecht\FedEx\Structs\Party
     */
    public function setTins(\Arkitecht\FedEx\Structs\TaxpayerIdentification $tins = null)
    {
        $this->Tins = $tins;
        return $this;
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
     * @return \Arkitecht\FedEx\Structs\Party
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
     * @return \Arkitecht\FedEx\Structs\Party
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
     * @return \Arkitecht\FedEx\Structs\Party
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
