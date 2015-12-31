<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMailRecipient Structs
 * Meta informations extracted from the WSDL
 * - documentation: Information describing the address of of the email recipient, role of the email recipient and languages that are requested to be supported.
 * @subpackage Structs
 */
class EMailRecipient extends AbstractStructBase
{
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - documentation: EMail address of the recipient.
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - documentation: The relationship that the customer has to the pending shipment.
     * - minOccurs: 0
     * - documentation: Specifies the role that identifies the permissions the accessor of the pending shipment.
     * @var string
     */
    public $Role;
    /**
     * The OptionsRequested
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how the email notification for the pending shipment need to be processed.
     * - minOccurs: 0
     * - documentation: Specifies how to apply the localization detail to the current context.
     * @var \Arkitecht\FedEx\Structs\EmailOptionsRequested
     */
    public $OptionsRequested;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Localization and language details specified by the recipient of the EMail.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Localization
     */
    public $Localization;
    /**
     * Constructor method for EMailRecipient
     * @uses EMailRecipient::setEmailAddress()
     * @uses EMailRecipient::setRole()
     * @uses EMailRecipient::setOptionsRequested()
     * @uses EMailRecipient::setLocalization()
     * @param string $emailAddress
     * @param string $role
     * @param \Arkitecht\FedEx\Structs\EmailOptionsRequested $optionsRequested
     * @param \Arkitecht\FedEx\Structs\Localization $localization
     */
    public function __construct($emailAddress = null, $role = null, \Arkitecht\FedEx\Structs\EmailOptionsRequested $optionsRequested = null, \Arkitecht\FedEx\Structs\Localization $localization = null)
    {
        $this
            ->setEmailAddress($emailAddress)
            ->setRole($role)
            ->setOptionsRequested($optionsRequested)
            ->setLocalization($localization);
    }
    /**
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \Arkitecht\FedEx\Structs\EMailRecipient
     */
    public function setEmailAddress($emailAddress = null)
    {
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get Role value
     * @return string|null
     */
    public function getRole()
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @uses \Arkitecht\FedEx\Enums\AccessorRoleType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\AccessorRoleType::getValidValues()
     * @param string $role
     * @return \Arkitecht\FedEx\Structs\EMailRecipient
     */
    public function setRole($role = null)
    {
        if (!\Arkitecht\FedEx\Enums\AccessorRoleType::valueIsValid($role)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $role, implode(', ', \Arkitecht\FedEx\Enums\AccessorRoleType::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Get OptionsRequested value
     * @return \Arkitecht\FedEx\Structs\EmailOptionsRequested|null
     */
    public function getOptionsRequested()
    {
        return $this->OptionsRequested;
    }
    /**
     * Set OptionsRequested value
     * @param \Arkitecht\FedEx\Structs\EmailOptionsRequested $optionsRequested
     * @return \Arkitecht\FedEx\Structs\EMailRecipient
     */
    public function setOptionsRequested(\Arkitecht\FedEx\Structs\EmailOptionsRequested $optionsRequested = null)
    {
        $this->OptionsRequested = $optionsRequested;
        return $this;
    }
    /**
     * Get Localization value
     * @return \Arkitecht\FedEx\Structs\Localization|null
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    /**
     * Set Localization value
     * @param \Arkitecht\FedEx\Structs\Localization $localization
     * @return \Arkitecht\FedEx\Structs\EMailRecipient
     */
    public function setLocalization(\Arkitecht\FedEx\Structs\Localization $localization = null)
    {
        $this->Localization = $localization;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\EMailRecipient
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
