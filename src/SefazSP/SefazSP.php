<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 28/03/18
 * Time: 14:34
 */

namespace MatheusHack\SefazSP;

use MatheusHack\SefazSP\Services\ServiceSefaz;

class SefazSP
{
    private $service;

    function __construct()
    {
        $this->service = new ServiceSefaz();
    }

    public function status()
    {
        return $this->service->status();
    }

}