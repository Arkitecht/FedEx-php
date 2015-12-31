<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureImageDetail Structs
 * @subpackage Structs
 */
class SignatureImageDetail extends AbstractStructBase
{
    /**
     * The Image
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var base64Binary
     */
    public $Image;
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: The descriptive data regarding the result of the submitted transaction.
     * @var \Arkitecht\FedEx\Structs\Notification
     */
    public $Notifications;
    /**
     * Constructor method for SignatureImageDetail
     * @uses SignatureImageDetail::setImage()
     * @uses SignatureImageDetail::setNotifications()
     * @param base64Binary $image
     * @param \Arkitecht\FedEx\Structs\Notification $notifications
     */
    public function __construct(base64Binary $image = null, \Arkitecht\FedEx\Structs\Notification $notifications = null)
    {
        $this
            ->setImage($image)
            ->setNotifications($notifications);
    }
    /**
     * Get Image value
     * @return base64Binary|null
     */
    public function getImage()
    {
        return $this->Image;
    }
    /**
     * Set Image value
     * @param base64Binary $image
     * @return \Arkitecht\FedEx\Structs\SignatureImageDetail
     */
    public function setImage(base64Binary $image = null)
    {
        $this->Image = $image;
        return $this;
    }
    /**
     * Get Notifications value
     * @return \Arkitecht\FedEx\Structs\Notification|null
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @param \Arkitecht\FedEx\Structs\Notification $notifications
     * @return \Arkitecht\FedEx\Structs\SignatureImageDetail
     */
    public function setNotifications(\Arkitecht\FedEx\Structs\Notification $notifications = null)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\SignatureImageDetail
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
