<?php

$wsdl = "http://www.dneonline.com/calculator.asmx?WSDL";

try {

    $client = new SoapClient($wsdl);

    echo "Funciones disponibles";
    $functions = $client->__getFunctions();

    foreach ($functions as $function) {
        echo "<br>" . $function;
    }

    echo "<br><br>Tipos Disponibles";

    $types = $client->__getTypes();
    foreach ($types as $type) {
        echo "<br>" . $type;
    }

    echo "<br><br>Ejecutando la función Add";
    $params = [
        'intA' => 5,
        'intB' => 10
    ];
    $result = $client->__soapCall("Add", array($params));
    echo "<br>Parámetros: ";
    echo "<br>intA: " . $params['intA'];
    echo "<br>intB: " . $params['intB'];    
    echo "<br>Resultado: " . $result->AddResult;

} catch(SoapFault $fault) {
    echo "Error: {$fault->faultcode}, String: {$fault->faultstring}";
} catch(Exception $e) {
    echo "Error: {$e->getMessage()}";
}

?>