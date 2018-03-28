<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 28/03/18
 * Time: 17:27
 */

namespace MatheusHack\SefazSP\Soap;

use MatheusHack\SefazSP\SefazSPConfig;

class StatusClient extends Client
{
    public function __construct()
    {
        $config = new SefazSPConfig();
        parent::__construct($config->getWsdlStatusService());
    }
}