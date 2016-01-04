<?php
/**
 * User: sutter
 * Date: 12/31/15
 * Time: 1:51 PM
 */

namespace Arkitecht\FedEx\Services;
use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

class FedExService extends AbstractSoapClientBase
{
    public $version;

    public function __construct(array $wsdlOptions = array(), $resetSoapClient = true, $beta = false) {
        parent::__construct($wsdlOptions,$resetSoapClient);
        if ( !$beta ) $this->setLocation('https://ws.fedex.com:443/web-services');
    }

    public static function version() {
        $service = new static;
        return $service->version;
    }

}