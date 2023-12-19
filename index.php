<?php

declare(strict_types=1);

require_once __DIR__.'/vendor/autoload.php';

header('Content-type:text/plain',true);


/*$config=\App\Helpers\Config::get('app');
var_dump($config);*/

set_exception_handler([new \App\Exception\ExceptionHandler(),'convertWarningAndNoticesToException']);

set_exception_handler([new \App\Exception\ExceptionHandler(),'handle']);

$db=new mysqli('lkdsnp','root','','bug');
exit;

$config=\App\Helpers\Config::getFileContent('jbfli');
var_dump($config);

$app=new \App\Helpers\App();
echo $app->getServerTime()->format('Y-m-d H:i:s').PHP_EOL;
echo $app->isLogPath().PHP_EOL;
echo $app->isEnvironment().PHP_EOL;
echo $app->isDebugMode().PHP_EOL;
echo $app->isRunningFromConsole().PHP_EOL;

if($app->isRunningFromConsole()){
    echo "from console";
}
else{
    echo "from broeser";
}