<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomsDeclarationStatementDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: This provides the information necessary to identify the different statements, declarations, acts, and/or certifications that apply to this shipment.
 * @subpackage Structs
 */
class CustomsDeclarationStatementDetail extends AbstractStructBase
{
    /**
     * The Types
     * Meta informations extracted from the WSDL
     * - documentation: This indicates the different statements, declarations, acts, and/or certifications that apply to this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: This indicates the different statements, declarations, acts, and certifications that may apply to a shipment.
     * @var string
     */
    public $Types;
    /**
     * The NaftaLowValueStatementDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the NAFTA low value statement information.
     * - minOccurs: 0
     * @var \Arkitecht\FedEx\Structs\NaftaLowValueStatementDetail
     */
    public $NaftaLowValueStatementDetail;
    /**
     * Constructor method for CustomsDeclarationStatementDetail
     * @uses CustomsDeclarationStatementDetail::setTypes()
     * @uses CustomsDeclarationStatementDetail::setNaftaLowValueStatementDetail()
     * @param string $types
     * @param \Arkitecht\FedEx\Structs\NaftaLowValueStatementDetail
     * $naftaLowValueStatementDetail
     */
    public function __construct($types = null, \Arkitecht\FedEx\Structs\NaftaLowValueStatementDetail $naftaLowValueStatementDetail = null)
    {
        $this
            ->setTypes($types)
            ->setNaftaLowValueStatementDetail($naftaLowValueStatementDetail);
    }
    /**
     * Get Types value
     * @return string|null
     */
    public function getTypes()
    {
        return $this->Types;
    }
    /**
     * Set Types value
     * @uses \Arkitecht\FedEx\Enums\CustomsDeclarationStatementType::valueIsValid()
     * @uses \Arkitecht\FedEx\Enums\CustomsDeclarationStatementType::getValidValues()
     * @param string $types
     * @return \Arkitecht\FedEx\Structs\CustomsDeclarationStatementDetail
     */
    public function setTypes($types = null)
    {
        if (!\Arkitecht\FedEx\Enums\CustomsDeclarationStatementType::valueIsValid($types)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $types, implode(', ', \Arkitecht\FedEx\Enums\CustomsDeclarationStatementType::getValidValues())), __LINE__);
        }
        $this->Types = $types;
        return $this;
    }
    /**
     * Get NaftaLowValueStatementDetail value
     * @return \Arkitecht\FedEx\Structs\NaftaLowValueStatementDetail|null
     */
    public function getNaftaLowValueStatementDetail()
    {
        return $this->NaftaLowValueStatementDetail;
    }
    /**
     * Set NaftaLowValueStatementDetail value
     * @param \Arkitecht\FedEx\Structs\NaftaLowValueStatementDetail
     * $naftaLowValueStatementDetail
     * @return \Arkitecht\FedEx\Structs\CustomsDeclarationStatementDetail
     */
    public function setNaftaLowValueStatementDetail(\Arkitecht\FedEx\Structs\NaftaLowValueStatementDetail $naftaLowValueStatementDetail = null)
    {
        $this->NaftaLowValueStatementDetail = $naftaLowValueStatementDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CustomsDeclarationStatementDetail
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
