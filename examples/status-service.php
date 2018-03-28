<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 28/03/18
 * Time: 14:54
 */
require_once ('../vendor/autoload.php');

use MatheusHack\SefazSP\SefazSP;

$sefaz = new SefazSP();
$status = $sefaz->status();
dd($status);