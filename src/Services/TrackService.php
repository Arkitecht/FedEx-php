<?php

namespace Arkitecht\FedEx\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Track Services
 * @subpackage Services
 */
class TrackService extends AbstractSoapClientBase
{
    public function __construct(array $wsdlOptions = array(), $resetSoapClient = true) {
        $default_options = [
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl'.DIRECTORY_SEPARATOR.'TrackService_v10.wsdl',
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Arkitecht\FedEx\ClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient);
    }

    /**
     * Method to call the operation originally named track
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Arkitecht\FedEx\Structs\TrackRequest $trackRequest
     * @return \Arkitecht\FedEx\Structs\TrackReply|bool
     */
    public function track(\Arkitecht\FedEx\Structs\TrackRequest $trackRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->track($trackRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named
     * retrieveSignatureProofOfDeliveryLetter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryLetterRequest
     * $signatureProofOfDeliveryLetterRequest
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryLetterReply|bool
     */
    public function retrieveSignatureProofOfDeliveryLetter(\Arkitecht\FedEx\Structs\SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->retrieveSignatureProofOfDeliveryLetter($signatureProofOfDeliveryLetterRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named sendSignatureProofOfDeliveryFax
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxRequest
     * $signatureProofOfDeliveryFaxRequest
     * @return \Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxReply|bool
     */
    public function sendSignatureProofOfDeliveryFax(\Arkitecht\FedEx\Structs\SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->sendSignatureProofOfDeliveryFax($signatureProofOfDeliveryFaxRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendNotifications
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Arkitecht\FedEx\Structs\SendNotificationsRequest
     * $sendNotificationsRequest
     * @return \Arkitecht\FedEx\Structs\SendNotificationsReply|bool
     */
    public function sendNotifications(\Arkitecht\FedEx\Structs\SendNotificationsRequest $sendNotificationsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->sendNotifications($sendNotificationsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Arkitecht\FedEx\Structs\TrackReply
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
