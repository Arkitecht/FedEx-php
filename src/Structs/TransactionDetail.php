<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionDetail Structs
 * @subpackage Structs
 */
class TransactionDetail extends AbstractStructBase
{
    /**
     * The CustomerTransactionId
     * Meta informations extracted from the WSDL
     * - documentation: Free form text to be echoed back in the reply. Used to match requests and replies.
     * - minOccurs: 0
     * @var string
     */
    public $CustomerTransactionId;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Governs data payload language/translations (contrasted with ClientDetail.localization, which governs Notification.localizedMessage language selection).
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Localization
     */
    public $Localization;
    /**
     * Constructor method for TransactionDetail
     * @uses TransactionDetail::setCustomerTransactionId()
     * @uses TransactionDetail::setLocalization()
     * @param string $customerTransactionId
     * @param \Arkitecht\FedEx\Structs\Localization $localization
     */
    public function __construct($customerTransactionId = null, \Arkitecht\FedEx\Structs\Localization $localization = null)
    {
        $this
            ->setCustomerTransactionId($customerTransactionId)
            ->setLocalization($localization);
    }
    /**
     * Get CustomerTransactionId value
     * @return string|null
     */
    public function getCustomerTransactionId()
    {
        return $this->CustomerTransactionId;
    }
    /**
     * Set CustomerTransactionId value
     * @param string $customerTransactionId
     * @return \Arkitecht\FedEx\Structs\TransactionDetail
     */
    public function setCustomerTransactionId($customerTransactionId = null)
    {
        $this->CustomerTransactionId = $customerTransactionId;
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
     * @return \Arkitecht\FedEx\Structs\TransactionDetail
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
     * @return \Arkitecht\FedEx\Structs\TransactionDetail
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
