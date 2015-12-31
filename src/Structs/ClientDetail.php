<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Descriptive data for the client submitting a transaction.
 * @subpackage Structs
 */
class ClientDetail extends AbstractStructBase
{
    /**
     * The AccountNumber
     * Meta informations extracted from the WSDL
     * - documentation: The FedEx account number associated with this transaction.
     * - minOccurs: 1
     * @var string
     */
    public $AccountNumber;
    /**
     * The MeterNumber
     * Meta informations extracted from the WSDL
     * - documentation: This number is assigned by FedEx and identifies the unique device from which the request is originating
     * - minOccurs: 1
     * @var string
     */
    public $MeterNumber;
    /**
     * The IntegratorId
     * Meta informations extracted from the WSDL
     * - documentation: Only used in transactions which require identification of the FedEx Office integrator.
     * - minOccurs: 0
     * @var string
     */
    public $IntegratorId;
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the region from which the transaction is submitted.
     * - minOccurs: 0
     * - documentation: Indicates a FedEx Express operating region.
     * @var string
     */
    public $Region;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: The language to be used for human-readable Notification.localizedMessages in responses to the request containing this ClientDetail object. Different requests from the same client may contain different Localization data. (Contrast
     * with TransactionDetail.localization, which governs data payload language/translation.)
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Localization
     */
    public $Localization;
    /**
     * Constructor method for ClientDetail
     * @uses ClientDetail::setAccountNumber()
     * @uses ClientDetail::setMeterNumber()
     * @uses ClientDetail::setIntegratorId()
     * @uses ClientDetail::setRegion()
     * @uses ClientDetail::setLocalization()
     * @param string $accountNumber
     * @param string $meterNumber
     * @param string $integratorId
     * @param string $region
     * @param \Arkitecht\FedEx\Structs\Localization $localization
     */
    public function __construct($accountNumber = null, $meterNumber = null, $integratorId = null, $region = null, \Arkitecht\FedEx\Structs\Localization $localization = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setMeterNumber($meterNumber)
            ->setIntegratorId($integratorId)
            ->setRegion($region)
            ->setLocalization($localization);
    }
    /**
     * Get AccountNumber value
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param string $accountNumber
     * @return \Arkitecht\FedEx\Structs\ClientDetail
     */
    public function setAccountNumber($accountNumber = null)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get MeterNumber value
     * @return string
     */
    public function getMeterNumber()
    {
        return $this->MeterNumber;
    }
    /**
     * Set MeterNumber value
     * @param string $meterNumber
     * @return \Arkitecht\FedEx\Structs\ClientDetail
     */
    public function setMeterNumber($meterNumber = null)
    {
        $this->MeterNumber = $meterNumber;
        return $this;
    }
    /**
     * Get IntegratorId value
     * @return string|null
     */
    public function getIntegratorId()
    {
        return $this->IntegratorId;
    }
    /**
     * Set IntegratorId value
     * @param string $integratorId
     * @return \Arkitecht\FedEx\Structs\ClientDetail
     */
    public function setIntegratorId($integratorId = null)
    {
        $this->IntegratorId = $integratorId;
        return $this;
    }
    /**
     * Get Region value
     * @return string|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @uses \Arkitecht\FedEx\Enums\ExpressRegionCode::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ExpressRegionCode::getValidValues()
     * @param string $region
     * @return \Arkitecht\FedEx\Structs\ClientDetail
     */
    public function setRegion($region = null)
    {
        if (!\Arkitecht\FedEx\Enums\ExpressRegionCode::valueIsValid($region)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $region, implode(', ', \Arkitecht\FedEx\Enums\ExpressRegionCode::getValidValues())), __LINE__);
        }
        $this->Region = $region;
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
     * @return \Arkitecht\FedEx\Structs\ClientDetail
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
     * @return \Arkitecht\FedEx\Structs\ClientDetail
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
