<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContentRecord Structs
 * @subpackage Structs
 */
class ContentRecord extends AbstractStructBase
{
    /**
     * The PartNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PartNumber;
    /**
     * The ItemNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ItemNumber;
    /**
     * The ReceivedQuantity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var nonNegativeInteger
     */
    public $ReceivedQuantity;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for ContentRecord
     * @uses ContentRecord::setPartNumber()
     * @uses ContentRecord::setItemNumber()
     * @uses ContentRecord::setReceivedQuantity()
     * @uses ContentRecord::setDescription()
     * @param string $partNumber
     * @param string $itemNumber
     * @param nonNegativeInteger $receivedQuantity
     * @param string $description
     */
    public function __construct($partNumber = null, $itemNumber = null, $receivedQuantity = null, $description = null)
    {
        $this
            ->setPartNumber($partNumber)
            ->setItemNumber($itemNumber)
            ->setReceivedQuantity($receivedQuantity)
            ->setDescription($description);
    }
    /**
     * Get PartNumber value
     * @return string|null
     */
    public function getPartNumber()
    {
        return $this->PartNumber;
    }
    /**
     * Set PartNumber value
     * @param string $partNumber
     * @return \Arkitecht\FedEx\Structs\ContentRecord
     */
    public function setPartNumber($partNumber = null)
    {
        $this->PartNumber = $partNumber;
        return $this;
    }
    /**
     * Get ItemNumber value
     * @return string|null
     */
    public function getItemNumber()
    {
        return $this->ItemNumber;
    }
    /**
     * Set ItemNumber value
     * @param string $itemNumber
     * @return \Arkitecht\FedEx\Structs\ContentRecord
     */
    public function setItemNumber($itemNumber = null)
    {
        $this->ItemNumber = $itemNumber;
        return $this;
    }
    /**
     * Get ReceivedQuantity value
     * @return nonNegativeInteger|null
     */
    public function getReceivedQuantity()
    {
        return $this->ReceivedQuantity;
    }
    /**
     * Set ReceivedQuantity value
     * @param nonNegativeInteger $receivedQuantity
     * @return \Arkitecht\FedEx\Structs\ContentRecord
     */
    public function setReceivedQuantity($receivedQuantity = null)
    {
        $this->ReceivedQuantity = $receivedQuantity;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Arkitecht\FedEx\Structs\ContentRecord
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\ContentRecord
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
