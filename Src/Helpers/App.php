<?php

declare(strict_types=1);

namespace App\Helpers;

use DateTime;
use DateTimeInterface;
use DateTimeZone;
use Exception;

class App{

    private $config =[];

    public function __construct(){
        $this->config=Config::get('app');
    }

    public function isDebugMode():bool{
        if(!isset ($this->config['debug'])){
            return false;
        }
    return $this->config['debug'];
    }

    public function isEnvironment():string{
        if(!isset ($this->config['env'])){
            return "production";
        }
    return $this->config['env'];
    }
    
    public function isLogPath():string{
        if(!isset ($this->config['debug'])){
            throw new Exception('Log path not defined');
        }
    return $this->config['log_path'];
    }

    public function isRunningFromConsole():bool{
        return php_sapi_name()=='cli' || php_sapi_name()=='phpbg';
    }

    public function getServerTime():DateTimeInterface{
        return new DateTime('now',new DateTimeZone('Europe/Berlin'));
    }



}