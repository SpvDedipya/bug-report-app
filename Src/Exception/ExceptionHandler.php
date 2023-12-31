<?php

namespace App\Exception;

use App\Helpers\App;
use Exception;
use Throwable,ErrorException;


class ExceptionHandler{
    public  function handle (Throwable $exception):void{
        $application =new App;

        if ($application->isDebugMode()){
            var_dump($exception);
        }
        else{
            echo "This  should not have happend, please try again";
        }
        exit;
    }

    public function convertWarningAndNoticesToException($severity,$message,$file,$line){
        throw  new ErrorException($message,$severity,$file,$line);
    }
}