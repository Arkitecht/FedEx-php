<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationControlDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Data required to complete the Destionation Control Statement for US exports.
 * @subpackage Structs
 */
class DestinationControlDetail extends AbstractStructBase
{
    /**
     * The StatementTypes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $StatementTypes;
    /**
     * The DestinationCountries
     * Meta informations extracted from the WSDL
     * - documentation: Comma-separated list of up to four country codes, required for DEPARTMENT_OF_STATE statement.
     * - minOccurs: 0
     * @var string
     */
    public $DestinationCountries;
    /**
     * The EndUser
     * Meta informations extracted from the WSDL
     * - documentation: Name of end user, required for DEPARTMENT_OF_STATE statement.
     * - minOccurs: 0
     * @var string
     */
    public $EndUser;
    /**
     * Constructor method for DestinationControlDetail
     * @uses DestinationControlDetail::setStatementTypes()
     * @uses DestinationControlDetail::setDestinationCountries()
     * @uses DestinationControlDetail::setEndUser()
     * @param string $statementTypes
     * @param string $destinationCountries
     * @param string $endUser
     */
    public function __construct($statementTypes = null, $destinationCountries = null, $endUser = null)
    {
        $this
            ->setStatementTypes($statementTypes)
            ->setDestinationCountries($destinationCountries)
            ->setEndUser($endUser);
    }
    /**
     * Get StatementTypes value
     * @return string|null
     */
    public function getStatementTypes()
    {
        return $this->StatementTypes;
    }
    /**
     * Set StatementTypes value
     * @uses \Arkitecht\FedEx\Enums\DestinationControlStatementType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\DestinationControlStatementType::getValidValues()
     * @param string $statementTypes
     * @return \Arkitecht\FedEx\Structs\DestinationControlDetail
     */
    public function setStatementTypes($statementTypes = null)
    {
        if (!\Arkitecht\FedEx\Enums\DestinationControlStatementType::valueIsValid($statementTypes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $statementTypes, implode(', ', \Arkitecht\FedEx\Enums\DestinationControlStatementType::getValidValues())), __LINE__);
        }
        $this->StatementTypes = $statementTypes;
        return $this;
    }
    /**
     * Get DestinationCountries value
     * @return string|null
     */
    public function getDestinationCountries()
    {
        return $this->DestinationCountries;
    }
    /**
     * Set DestinationCountries value
     * @param string $destinationCountries
     * @return \Arkitecht\FedEx\Structs\DestinationControlDetail
     */
    public function setDestinationCountries($destinationCountries = null)
    {
        $this->DestinationCountries = $destinationCountries;
        return $this;
    }
    /**
     * Get EndUser value
     * @return string|null
     */
    public function getEndUser()
    {
        return $this->EndUser;
    }
    /**
     * Set EndUser value
     * @param string $endUser
     * @return \Arkitecht\FedEx\Structs\DestinationControlDetail
     */
    public function setEndUser($endUser = null)
    {
        $this->EndUser = $endUser;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\DestinationControlDetail
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
