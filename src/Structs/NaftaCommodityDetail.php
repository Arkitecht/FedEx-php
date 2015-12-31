<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NaftaCommodityDetail Structs
 * @subpackage Structs
 */
class NaftaCommodityDetail extends AbstractStructBase
{
    /**
     * The PreferenceCriterion
     * Meta informations extracted from the WSDL
     * - documentation: Defined by NAFTA regulations.
     * - minOccurs: 0
     * - documentation: See instructions for NAFTA Certificate of Origin for code definitions.
     * @var string
     */
    public $PreferenceCriterion;
    /**
     * The ProducerDetermination
     * Meta informations extracted from the WSDL
     * - documentation: Defined by NAFTA regulations.
     * - minOccurs: 0
     * - documentation: See instructions for NAFTA Certificate of Origin for code definitions.
     * @var string
     */
    public $ProducerDetermination;
    /**
     * The ProducerId
     * Meta informations extracted from the WSDL
     * - documentation: Identification of which producer is associated with this commodity (if multiple producers are used in a single shipment).
     * - minOccurs: 0
     * @var string
     */
    public $ProducerId;
    /**
     * The NetCostMethod
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NetCostMethod;
    /**
     * The NetCostDateRange
     * Meta informations extracted from the WSDL
     * - documentation: Date range over which RVC net cost was calculated.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\DateRange
     */
    public $NetCostDateRange;
    /**
     * Constructor method for NaftaCommodityDetail
     * @uses NaftaCommodityDetail::setPreferenceCriterion()
     * @uses NaftaCommodityDetail::setProducerDetermination()
     * @uses NaftaCommodityDetail::setProducerId()
     * @uses NaftaCommodityDetail::setNetCostMethod()
     * @uses NaftaCommodityDetail::setNetCostDateRange()
     * @param string $preferenceCriterion
     * @param string $producerDetermination
     * @param string $producerId
     * @param string $netCostMethod
     * @param \Arkitecht\FedEx\Structs\DateRange $netCostDateRange
     */
    public function __construct($preferenceCriterion = null, $producerDetermination = null, $producerId = null, $netCostMethod = null, \Arkitecht\FedEx\Structs\DateRange $netCostDateRange = null)
    {
        $this
            ->setPreferenceCriterion($preferenceCriterion)
            ->setProducerDetermination($producerDetermination)
            ->setProducerId($producerId)
            ->setNetCostMethod($netCostMethod)
            ->setNetCostDateRange($netCostDateRange);
    }
    /**
     * Get PreferenceCriterion value
     * @return string|null
     */
    public function getPreferenceCriterion()
    {
        return $this->PreferenceCriterion;
    }
    /**
     * Set PreferenceCriterion value
     * @uses \Arkitecht\FedEx\Enums\NaftaPreferenceCriterionCode::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\NaftaPreferenceCriterionCode::getValidValues()
     * @param string $preferenceCriterion
     * @return \Arkitecht\FedEx\Structs\NaftaCommodityDetail
     */
    public function setPreferenceCriterion($preferenceCriterion = null)
    {
        if (!\Arkitecht\FedEx\Enums\NaftaPreferenceCriterionCode::valueIsValid($preferenceCriterion)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $preferenceCriterion, implode(', ', \Arkitecht\FedEx\Enums\NaftaPreferenceCriterionCode::getValidValues())), __LINE__);
        }
        $this->PreferenceCriterion = $preferenceCriterion;
        return $this;
    }
    /**
     * Get ProducerDetermination value
     * @return string|null
     */
    public function getProducerDetermination()
    {
        return $this->ProducerDetermination;
    }
    /**
     * Set ProducerDetermination value
     * @uses \Arkitecht\FedEx\Enums\NaftaProducerDeterminationCode::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\NaftaProducerDeterminationCode::getValidValues()
     * @param string $producerDetermination
     * @return \Arkitecht\FedEx\Structs\NaftaCommodityDetail
     */
    public function setProducerDetermination($producerDetermination = null)
    {
        if (!\Arkitecht\FedEx\Enums\NaftaProducerDeterminationCode::valueIsValid($producerDetermination)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $producerDetermination, implode(', ', \Arkitecht\FedEx\Enums\NaftaProducerDeterminationCode::getValidValues())), __LINE__);
        }
        $this->ProducerDetermination = $producerDetermination;
        return $this;
    }
    /**
     * Get ProducerId value
     * @return string|null
     */
    public function getProducerId()
    {
        return $this->ProducerId;
    }
    /**
     * Set ProducerId value
     * @param string $producerId
     * @return \Arkitecht\FedEx\Structs\NaftaCommodityDetail
     */
    public function setProducerId($producerId = null)
    {
        $this->ProducerId = $producerId;
        return $this;
    }
    /**
     * Get NetCostMethod value
     * @return string|null
     */
    public function getNetCostMethod()
    {
        return $this->NetCostMethod;
    }
    /**
     * Set NetCostMethod value
     * @uses \Arkitecht\FedEx\Enums\NaftaNetCostMethodCode::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\NaftaNetCostMethodCode::getValidValues()
     * @param string $netCostMethod
     * @return \Arkitecht\FedEx\Structs\NaftaCommodityDetail
     */
    public function setNetCostMethod($netCostMethod = null)
    {
        if (!\Arkitecht\FedEx\Enums\NaftaNetCostMethodCode::valueIsValid($netCostMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $netCostMethod, implode(', ', \Arkitecht\FedEx\Enums\NaftaNetCostMethodCode::getValidValues())), __LINE__);
        }
        $this->NetCostMethod = $netCostMethod;
        return $this;
    }
    /**
     * Get NetCostDateRange value
     * @return \Arkitecht\FedEx\Structs\DateRange|null
     */
    public function getNetCostDateRange()
    {
        return $this->NetCostDateRange;
    }
    /**
     * Set NetCostDateRange value
     * @param \Arkitecht\FedEx\Structs\DateRange $netCostDateRange
     * @return \Arkitecht\FedEx\Structs\NaftaCommodityDetail
     */
    public function setNetCostDateRange(\Arkitecht\FedEx\Structs\DateRange $netCostDateRange = null)
    {
        $this->NetCostDateRange = $netCostDateRange;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\NaftaCommodityDetail
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
