<?php

namespace Arkitecht\FedEx\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Process Services
 * @subpackage Services
 */
class ShipService extends FedExService
{

    public function __construct(array $wsdlOptions = array(), $resetSoapClient = true, $beta = false) {
        $default_options = [
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl'.DIRECTORY_SEPARATOR.'ShipService_v17.wsdl',
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Arkitecht\FedEx\ClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions,$beta);
        parent::__construct($options,$resetSoapClient);

        $this->version = new \Arkitecht\FedEx\Structs\VersionId('ship',17,0,0);
    }

    /**
     * Method to call the operation originally named processTag
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Arkitecht\FedEx\Structs\ProcessTagRequest $processTagRequest
     * @return \Arkitecht\FedEx\Structs\ProcessTagReply|bool
     */
    public function processTag(\Arkitecht\FedEx\Structs\ProcessTagRequest $processTagRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->processTag($processTagRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named processShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Arkitecht\FedEx\Structs\ProcessShipmentRequest $processShipmentRequest
     * @return \Arkitecht\FedEx\Structs\ProcessShipmentReply|bool
     */
    public function processShipment(\Arkitecht\FedEx\Structs\ProcessShipmentRequest $processShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->processShipment($processShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named deleteTag
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Arkitecht\FedEx\Structs\DeleteTagRequest $deleteTagRequest
     * @return \Arkitecht\FedEx\Structs\ShipmentReply|bool
     */
    public function deleteTag(\Arkitecht\FedEx\Structs\DeleteTagRequest $deleteTagRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteTag($deleteTagRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Arkitecht\FedEx\Structs\DeleteShipmentRequest $deleteShipmentRequest
     * @return \Arkitecht\FedEx\Structs\ShipmentReply|bool
     */
    public function deleteShipment(\Arkitecht\FedEx\Structs\DeleteShipmentRequest $deleteShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteShipment($deleteShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named validateShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Arkitecht\FedEx\Structs\ValidateShipmentRequest $validateShipmentRequest
     * @return \Arkitecht\FedEx\Structs\ShipmentReply|bool
     */
    public function validateShipment(\Arkitecht\FedEx\Structs\ValidateShipmentRequest $validateShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->validateShipment($validateShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Arkitecht\FedEx\Structs\ProcessShipmentReply|\Arkitecht\FedEx\Structs\ProcessTagReply
     */
    public function getResult()
    {
        return parent::getResult();
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
