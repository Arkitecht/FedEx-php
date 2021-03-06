<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodAddTransportationChargesDetail Structs
 * @subpackage Structs
 */
class CodAddTransportationChargesDetail extends AbstractStructBase
{
    /**
     * The RateTypeBasis
     * Meta informations extracted from the WSDL
     * - documentation: Select the type of rate from which the element is to be selected.
     * - minOccurs: 0
     * - documentation: Select the type of rate from which the element is to be selected.
     * @var string
     */
    public $RateTypeBasis;
    /**
     * The ChargeBasis
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ChargeBasis;
    /**
     * The ChargeBasisLevel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ChargeBasisLevel;
    /**
     * Constructor method for CodAddTransportationChargesDetail
     * @uses CodAddTransportationChargesDetail::setRateTypeBasis()
     * @uses CodAddTransportationChargesDetail::setChargeBasis()
     * @uses CodAddTransportationChargesDetail::setChargeBasisLevel()
     * @param string $rateTypeBasis
     * @param string $chargeBasis
     * @param string $chargeBasisLevel
     */
    public function __construct($rateTypeBasis = null, $chargeBasis = null, $chargeBasisLevel = null)
    {
        $this
            ->setRateTypeBasis($rateTypeBasis)
            ->setChargeBasis($chargeBasis)
            ->setChargeBasisLevel($chargeBasisLevel);
    }
    /**
     * Get RateTypeBasis value
     * @return string|null
     */
    public function getRateTypeBasis()
    {
        return $this->RateTypeBasis;
    }
    /**
     * Set RateTypeBasis value
     * @uses \Arkitecht\FedEx\Enums\RateTypeBasisType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\RateTypeBasisType::getValidValues()
     * @param string $rateTypeBasis
     * @return \Arkitecht\FedEx\Structs\CodAddTransportationChargesDetail
     */
    public function setRateTypeBasis($rateTypeBasis = null)
    {
        if (!\Arkitecht\FedEx\Enums\RateTypeBasisType::valueIsValid($rateTypeBasis)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $rateTypeBasis, implode(', ', \Arkitecht\FedEx\Enums\RateTypeBasisType::getValidValues())), __LINE__);
        }
        $this->RateTypeBasis = $rateTypeBasis;
        return $this;
    }
    /**
     * Get ChargeBasis value
     * @return string|null
     */
    public function getChargeBasis()
    {
        return $this->ChargeBasis;
    }
    /**
     * Set ChargeBasis value
     * @uses \Arkitecht\FedEx\Enums\CodAddTransportationChargeBasisType::valueIsValid()
     * @uses
     * \Arkitecht\FedEx\Enums\CodAddTransportationChargeBasisType::getValidValues()
     * @param string $chargeBasis
     * @return \Arkitecht\FedEx\Structs\CodAddTransportationChargesDetail
     */
    public function setChargeBasis($chargeBasis = null)
    {
        if (!\Arkitecht\FedEx\Enums\CodAddTransportationChargeBasisType::valueIsValid($chargeBasis)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $chargeBasis, implode(', ', \Arkitecht\FedEx\Enums\CodAddTransportationChargeBasisType::getValidValues())), __LINE__);
        }
        $this->ChargeBasis = $chargeBasis;
        return $this;
    }
    /**
     * Get ChargeBasisLevel value
     * @return string|null
     */
    public function getChargeBasisLevel()
    {
        return $this->ChargeBasisLevel;
    }
    /**
     * Set ChargeBasisLevel value
     * @uses \Arkitecht\FedEx\Enums\ChargeBasisLevelType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\ChargeBasisLevelType::getValidValues()
     * @param string $chargeBasisLevel
     * @return \Arkitecht\FedEx\Structs\CodAddTransportationChargesDetail
     */
    public function setChargeBasisLevel($chargeBasisLevel = null)
    {
        if (!\Arkitecht\FedEx\Enums\ChargeBasisLevelType::valueIsValid($chargeBasisLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $chargeBasisLevel, implode(', ', \Arkitecht\FedEx\Enums\ChargeBasisLevelType::getValidValues())), __LINE__);
        }
        $this->ChargeBasisLevel = $chargeBasisLevel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CodAddTransportationChargesDetail
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
