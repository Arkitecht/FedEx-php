<?php

namespace Arkitecht\FedEx\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerExceptionRequestDetail Structs
 * @subpackage Structs
 */
class CustomerExceptionRequestDetail extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for the customer exception request.
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusCode;
    /**
     * The StatusDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusDescription;
    /**
     * The CreateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $CreateTime;
    /**
     * Constructor method for CustomerExceptionRequestDetail
     * @uses CustomerExceptionRequestDetail::setId()
     * @uses CustomerExceptionRequestDetail::setStatusCode()
     * @uses CustomerExceptionRequestDetail::setStatusDescription()
     * @uses CustomerExceptionRequestDetail::setCreateTime()
     * @param string $id
     * @param string $statusCode
     * @param string $statusDescription
     * @param dateTime $createTime
     */
    public function __construct($id = null, $statusCode = null, $statusDescription = null, $createTime = null)
    {
        $this
            ->setId($id)
            ->setStatusCode($statusCode)
            ->setStatusDescription($statusDescription)
            ->setCreateTime($createTime);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Arkitecht\FedEx\Structs\CustomerExceptionRequestDetail
     */
    public function setId($id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \Arkitecht\FedEx\Structs\CustomerExceptionRequestDetail
     */
    public function setStatusCode($statusCode = null)
    {
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get StatusDescription value
     * @return string|null
     */
    public function getStatusDescription()
    {
        return $this->StatusDescription;
    }
    /**
     * Set StatusDescription value
     * @param string $statusDescription
     * @return \Arkitecht\FedEx\Structs\CustomerExceptionRequestDetail
     */
    public function setStatusDescription($statusDescription = null)
    {
        $this->StatusDescription = $statusDescription;
        return $this;
    }
    /**
     * Get CreateTime value
     * @return dateTime|null
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }
    /**
     * Set CreateTime value
     * @param dateTime $createTime
     * @return \Arkitecht\FedEx\Structs\CustomerExceptionRequestDetail
     */
    public function setCreateTime($createTime = null)
    {
        $this->CreateTime = $createTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Arkitecht\FedEx\Structs\CustomerExceptionRequestDetail
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
