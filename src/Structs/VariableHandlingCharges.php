<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariableHandlingCharges Structs
 * @subpackage Structs
 */
class VariableHandlingCharges extends AbstractStructBase
{
    /**
     * The VariableHandlingCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $VariableHandlingCharge;
    /**
     * The FixedVariableHandlingCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $FixedVariableHandlingCharge;
    /**
     * The PercentVariableHandlingCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $PercentVariableHandlingCharge;
    /**
     * The TotalCustomerCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\Money
     */
    public $TotalCustomerCharge;
    /**
     * Constructor method for VariableHandlingCharges
     * @uses VariableHandlingCharges::setVariableHandlingCharge()
     * @uses VariableHandlingCharges::setFixedVariableHandlingCharge()
     * @uses VariableHandlingCharges::setPercentVariableHandlingCharge()
     * @uses VariableHandlingCharges::setTotalCustomerCharge()
     * @param \Arkitecht\FedEx\Structs\Money $variableHandlingCharge
     * @param \Arkitecht\FedEx\Structs\Money $fixedVariableHandlingCharge
     * @param \Arkitecht\FedEx\Structs\Money $percentVariableHandlingCharge
     * @param \Arkitecht\FedEx\Structs\Money $totalCustomerCharge
     */
    public function __construct(\Arkitecht\FedEx\Structs\Money $variableHandlingCharge = null, \Arkitecht\FedEx\Structs\Money $fixedVariableHandlingCharge = null, \Arkitecht\FedEx\Structs\Money $percentVariableHandlingCharge = null, \Arkitecht\FedEx\Structs\Money $totalCustomerCharge = null)
    {
        $this
            ->setVariableHandlingCharge($variableHandlingCharge)
            ->setFixedVariableHandlingCharge($fixedVariableHandlingCharge)
            ->setPercentVariableHandlingCharge($percentVariableHandlingCharge)
            ->setTotalCustomerCharge($totalCustomerCharge);
    }
    /**
     * Get VariableHandlingCharge value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getVariableHandlingCharge()
    {
        return $this->VariableHandlingCharge;
    }
    /**
     * Set VariableHandlingCharge value
     * @param \Arkitecht\FedEx\Structs\Money $variableHandlingCharge
     * @return \Arkitecht\FedEx\Structs\VariableHandlingCharges
     */
    public function setVariableHandlingCharge(\Arkitecht\FedEx\Structs\Money $variableHandlingCharge = null)
    {
        $this->VariableHandlingCharge = $variableHandlingCharge;
        return $this;
    }
    /**
     * Get FixedVariableHandlingCharge value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getFixedVariableHandlingCharge()
    {
        return $this->FixedVariableHandlingCharge;
    }
    /**
     * Set FixedVariableHandlingCharge value
     * @param \Arkitecht\FedEx\Structs\Money $fixedVariableHandlingCharge
     * @return \Arkitecht\FedEx\Structs\VariableHandlingCharges
     */
    public function setFixedVariableHandlingCharge(\Arkitecht\FedEx\Structs\Money $fixedVariableHandlingCharge = null)
    {
        $this->FixedVariableHandlingCharge = $fixedVariableHandlingCharge;
        return $this;
    }
    /**
     * Get PercentVariableHandlingCharge value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getPercentVariableHandlingCharge()
    {
        return $this->PercentVariableHandlingCharge;
    }
    /**
     * Set PercentVariableHandlingCharge value
     * @param \Arkitecht\FedEx\Structs\Money $percentVariableHandlingCharge
     * @return \Arkitecht\FedEx\Structs\VariableHandlingCharges
     */
    public function setPercentVariableHandlingCharge(\Arkitecht\FedEx\Structs\Money $percentVariableHandlingCharge = null)
    {
        $this->PercentVariableHandlingCharge = $percentVariableHandlingCharge;
        return $this;
    }
    /**
     * Get TotalCustomerCharge value
     * @return \Arkitecht\FedEx\Structs\Money|null
     */
    public function getTotalCustomerCharge()
    {
        return $this->TotalCustomerCharge;
    }
    /**
     * Set TotalCustomerCharge value
     * @param \Arkitecht\FedEx\Structs\Money $totalCustomerCharge
     * @return \Arkitecht\FedEx\Structs\VariableHandlingCharges
     */
    public function setTotalCustomerCharge(\Arkitecht\FedEx\Structs\Money $totalCustomerCharge = null)
    {
        $this->TotalCustomerCharge = $totalCustomerCharge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\VariableHandlingCharges
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
