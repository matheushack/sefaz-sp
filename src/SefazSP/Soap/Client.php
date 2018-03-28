<?php

namespace MatheusHack\SefazSP\Soap;


abstract class Client extends \SoapClient
{

    public function __construct($wsdl)
    {
        parent::__construct($wsdl, [
            'exceptions' => 0,
            'trace' => 1,
            'connection_timeout' => 1800,
            'compression' =>  SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
            'encoding' => 'UTF-8',
            'cache_wsdl' => WSDL_CACHE_BOTH,
        ]);
    }

}