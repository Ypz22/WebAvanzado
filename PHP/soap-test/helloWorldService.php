<?php

class HelloWorldService
{
    public function helloWorld($name)
    {
        return "Adios, $name!";
    }
}

$options = [
    'uri' => 'http://10.40.20.0:8888/soap-server' 
];

header("Content-Type: text/xml"); 

$server = new SoapServer(null, $options);
$server->setClass('HelloWorldService');
$server->handle(); 

?>
