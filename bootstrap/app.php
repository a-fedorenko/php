<?php
require_once realpath(__DIR__.'/../config').'/app.php';


function render($template, $data=[], $layout='site'){
    if($data){
        extract($data);
    }
    $template .= '.php';
    include_once VIEWS."/layouts/${layout}.php";
}

function init(){
    date_default_timezone_set('Europe/Kiev');
    setlocale(LC_ALL, 'uk_UA');
}

function setErrorLogging(){

    if(APP_ENV == 'dev'){
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL| E_WARNING | E_PARSE | E_NOTICE | E_DEPRECATED);
        ini_set('display_errors', 1);

    }else{
        error_reporting(E_ALL);
        ini_set('display_errors', 0);
    }

    ini_set('log_errors', 1);
    ini_set('error_log', LOGS.'/error.log');
}

init();
setErrorLogging();
// error_log("Hello Error");

function config($mix){
    $url = CONFIG."/".$mix.".json";
    $jsonFile = file_get_contents($url);
    return json_decode($jsonFile, true);
}

require_once CORE.'/Router.php';



