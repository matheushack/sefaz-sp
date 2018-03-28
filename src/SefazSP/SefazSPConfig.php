<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 28/03/18
 * Time: 14:43
 */

namespace MatheusHack\SefazSP;

use Illuminate\Support\Facades\Config;
use MatheusHack\SefazSP\Services\ServiceConfig;


class SefazSPConfig
{
    private $config;

    function __construct()
    {
        $this->config = new ServiceConfig();
    }

    public function getWsdlStatusService()
    {
        $path = $this->getPathWsdl();
        return $path.$this->getConfig('wsdl.status');
    }

    private function getPathWsdl()
    {
        return $this->getConfig('sefaz.wsdlPath');
    }

    private function getConfig($config)
    {
        return $this->config->get($config);
    }
}