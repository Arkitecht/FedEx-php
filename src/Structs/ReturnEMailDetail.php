<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnEMailDetail Structs
 * @subpackage Structs
 */
class ReturnEMailDetail extends AbstractStructBase
{
    /**
     * The MerchantPhoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MerchantPhoneNumber;
    /**
     * The AllowedSpecialServices
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the allowed (merchant-authorized) special services which may be selected when the subsequent shipment is created. Only services represented in EMailLabelAllowedSpecialServiceType will be controlled by this list.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: These values are used to control the availability of certain special services at the time when a customer uses the e-mail label link to create a return shipment.
     * @var string
     */
    public $AllowedSpecialServices;
    /**
     * Constructor method for ReturnEMailDetail
     * @uses ReturnEMailDetail::setMerchantPhoneNumber()
     * @uses ReturnEMailDetail::setAllowedSpecialServices()
     * @param string $merchantPhoneNumber
     * @param string $allowedSpecialServices
     */
    public function __construct($merchantPhoneNumber = null, $allowedSpecialServices = null)
    {
        $this
            ->setMerchantPhoneNumber($merchantPhoneNumber)
            ->setAllowedSpecialServices($allowedSpecialServices);
    }
    /**
     * Get MerchantPhoneNumber value
     * @return string|null
     */
    public function getMerchantPhoneNumber()
    {
        return $this->MerchantPhoneNumber;
    }
    /**
     * Set MerchantPhoneNumber value
     * @param string $merchantPhoneNumber
     * @return \Arkitecht\FedEx\Structs\ReturnEMailDetail
     */
    public function setMerchantPhoneNumber($merchantPhoneNumber = null)
    {
        $this->MerchantPhoneNumber = $merchantPhoneNumber;
        return $this;
    }
    /**
     * Get AllowedSpecialServices value
     * @return string|null
     */
    public function getAllowedSpecialServices()
    {
        return $this->AllowedSpecialServices;
    }
    /**
     * Set AllowedSpecialServices value
     * @uses
     * \Arkitecht\FedEx\Enums\ReturnEMailAllowedSpecialServiceType::valueIsValid()
     * @uses
     * \Arkitecht\FedEx\Enums\ReturnEMailAllowedSpecialServiceType::getValidValues()
     * @param string $allowedSpecialServices
     * @return \Arkitecht\FedEx\Structs\ReturnEMailDetail
     */
    public function setAllowedSpecialServices($allowedSpecialServices = null)
    {
        if (!\Arkitecht\FedEx\Enums\ReturnEMailAllowedSpecialServiceType::valueIsValid($allowedSpecialServices)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $allowedSpecialServices, implode(', ', \Arkitecht\FedEx\Enums\ReturnEMailAllowedSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->AllowedSpecialServices = $allowedSpecialServices;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ReturnEMailDetail
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
