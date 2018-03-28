<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 28/03/18
 * Time: 14:57
 */

namespace MatheusHack\SefazSP\Services;

use MatheusHack\SefazSP\Soap\StatusClient;

class ServiceSefaz
{
    public function status()
    {
        $statusClient = new StatusClient();

        try {
            $statusResponse = $statusClient->__soapCall('nfeStatusServicoNF2',[]);
            return $this->makeStatus($statusResponse);

        } catch (\SoapFault $e) {
            return $e->getMessage();
        }
    }

    private function makeStatus($statusResponse)
    {
        return $statusResponse;
    }
}