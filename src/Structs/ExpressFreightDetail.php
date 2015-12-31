<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpressFreightDetail Structs
 * @subpackage Structs
 */
class ExpressFreightDetail extends AbstractStructBase
{
    /**
     * The PackingListEnclosed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $PackingListEnclosed;
    /**
     * The ShippersLoadAndCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var positiveInteger
     */
    public $ShippersLoadAndCount;
    /**
     * The BookingConfirmationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BookingConfirmationNumber;
    /**
     * The ReferenceLabelRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $ReferenceLabelRequested;
    /**
     * The BeforeDeliveryContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ExpressFreightDetailContact
     */
    public $BeforeDeliveryContact;
    /**
     * The UndeliverableContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\ExpressFreightDetailContact
     */
    public $UndeliverableContact;
    /**
     * Constructor method for ExpressFreightDetail
     * @uses ExpressFreightDetail::setPackingListEnclosed()
     * @uses ExpressFreightDetail::setShippersLoadAndCount()
     * @uses ExpressFreightDetail::setBookingConfirmationNumber()
     * @uses ExpressFreightDetail::setReferenceLabelRequested()
     * @uses ExpressFreightDetail::setBeforeDeliveryContact()
     * @uses ExpressFreightDetail::setUndeliverableContact()
     * @param boolean $packingListEnclosed
     * @param positiveInteger $shippersLoadAndCount
     * @param string $bookingConfirmationNumber
     * @param boolean $referenceLabelRequested
     * @param \Arkitecht\FedEx\Structs\ExpressFreightDetailContact
     * $beforeDeliveryContact
     * @param \Arkitecht\FedEx\Structs\ExpressFreightDetailContact
     * $undeliverableContact
     */
    public function __construct($packingListEnclosed = null, $shippersLoadAndCount = null, $bookingConfirmationNumber = null, $referenceLabelRequested = null, \Arkitecht\FedEx\Structs\ExpressFreightDetailContact $beforeDeliveryContact = null, \Arkitecht\FedEx\Structs\ExpressFreightDetailContact $undeliverableContact = null)
    {
        $this
            ->setPackingListEnclosed($packingListEnclosed)
            ->setShippersLoadAndCount($shippersLoadAndCount)
            ->setBookingConfirmationNumber($bookingConfirmationNumber)
            ->setReferenceLabelRequested($referenceLabelRequested)
            ->setBeforeDeliveryContact($beforeDeliveryContact)
            ->setUndeliverableContact($undeliverableContact);
    }
    /**
     * Get PackingListEnclosed value
     * @return boolean|null
     */
    public function getPackingListEnclosed()
    {
        return $this->PackingListEnclosed;
    }
    /**
     * Set PackingListEnclosed value
     * @param boolean $packingListEnclosed
     * @return \Arkitecht\FedEx\Structs\ExpressFreightDetail
     */
    public function setPackingListEnclosed($packingListEnclosed = null)
    {
        $this->PackingListEnclosed = $packingListEnclosed;
        return $this;
    }
    /**
     * Get ShippersLoadAndCount value
     * @return positiveInteger|null
     */
    public function getShippersLoadAndCount()
    {
        return $this->ShippersLoadAndCount;
    }
    /**
     * Set ShippersLoadAndCount value
     * @param positiveInteger $shippersLoadAndCount
     * @return \Arkitecht\FedEx\Structs\ExpressFreightDetail
     */
    public function setShippersLoadAndCount($shippersLoadAndCount = null)
    {
        $this->ShippersLoadAndCount = $shippersLoadAndCount;
        return $this;
    }
    /**
     * Get BookingConfirmationNumber value
     * @return string|null
     */
    public function getBookingConfirmationNumber()
    {
        return $this->BookingConfirmationNumber;
    }
    /**
     * Set BookingConfirmationNumber value
     * @param string $bookingConfirmationNumber
     * @return \Arkitecht\FedEx\Structs\ExpressFreightDetail
     */
    public function setBookingConfirmationNumber($bookingConfirmationNumber = null)
    {
        $this->BookingConfirmationNumber = $bookingConfirmationNumber;
        return $this;
    }
    /**
     * Get ReferenceLabelRequested value
     * @return boolean|null
     */
    public function getReferenceLabelRequested()
    {
        return $this->ReferenceLabelRequested;
    }
    /**
     * Set ReferenceLabelRequested value
     * @param boolean $referenceLabelRequested
     * @return \Arkitecht\FedEx\Structs\ExpressFreightDetail
     */
    public function setReferenceLabelRequested($referenceLabelRequested = null)
    {
        $this->ReferenceLabelRequested = $referenceLabelRequested;
        return $this;
    }
    /**
     * Get BeforeDeliveryContact value
     * @return \Arkitecht\FedEx\Structs\ExpressFreightDetailContact|null
     */
    public function getBeforeDeliveryContact()
    {
        return $this->BeforeDeliveryContact;
    }
    /**
     * Set BeforeDeliveryContact value
     * @param \Arkitecht\FedEx\Structs\ExpressFreightDetailContact
     * $beforeDeliveryContact
     * @return \Arkitecht\FedEx\Structs\ExpressFreightDetail
     */
    public function setBeforeDeliveryContact(\Arkitecht\FedEx\Structs\ExpressFreightDetailContact $beforeDeliveryContact = null)
    {
        $this->BeforeDeliveryContact = $beforeDeliveryContact;
        return $this;
    }
    /**
     * Get UndeliverableContact value
     * @return \Arkitecht\FedEx\Structs\ExpressFreightDetailContact|null
     */
    public function getUndeliverableContact()
    {
        return $this->UndeliverableContact;
    }
    /**
     * Set UndeliverableContact value
     * @param \Arkitecht\FedEx\Structs\ExpressFreightDetailContact
     * $undeliverableContact
     * @return \Arkitecht\FedEx\Structs\ExpressFreightDetail
     */
    public function setUndeliverableContact(\Arkitecht\FedEx\Structs\ExpressFreightDetailContact $undeliverableContact = null)
    {
        $this->UndeliverableContact = $undeliverableContact;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ExpressFreightDetail
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
