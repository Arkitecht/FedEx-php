<?php

namespace Arkitecht\FedEx\Services;


class RateService extends FedExService
{

	public function __construct(array $wsdlOptions = array(), $resetSoapClient = true, $beta = false) {
		$default_options = [
			\WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl'.DIRECTORY_SEPARATOR.'RateService_v18.wsdl',
	    	\WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Arkitecht\FedEx\ClassMap::get(),
		];
		$options = array_merge($default_options,$wsdlOptions);
		parent::__construct($options,$resetSoapClient,$beta);

        $this->version = new \Arkitecht\FedEx\Structs\VersionId('crs',18,0,0);
	}


    /**
     * Method to call the operation originally named getRates
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Arkitecht\FedEx\Structs\RateRequest $rateRequest
     * @return \Arkitecht\FedEx\Structs\RateReply|bool
     */
    public function getRates(\Arkitecht\FedEx\Structs\RateRequest $rateRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getRates($rateRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Arkitecht\FedEx\Structs\RateReply
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
