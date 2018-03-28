<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 28/03/18
 * Time: 16:42
 */

namespace MatheusHack\SefazSP\Services;

use Illuminate\Support\Arr;
use Symfony\Component\Finder\Finder;


class ServiceConfig
{
    private $listConfig = [];

    function __construct()
    {

        $this->loadFiles();
    }

    private function loadFiles()
    {
        $path = realpath(dirname(__FILE__)."/../../resources/config");
        $finder = new Finder();
        $finder->files()->name('*.php')->in($path);

        foreach ($finder as $file) {
            $key = str_replace('.php', '', $file->getFilename());
            $this->listConfig[$key] = require $file;
        }
    }

    public function get($config, $default = null)
    {
        return Arr::get($this->listConfig, $config, $default);
    }
}