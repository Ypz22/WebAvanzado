<?php
$url = "http://localhost:8888/helloWorldService.php"; 

$option =[
    'uri' => "http://localhost:8888/soap-server",
    'location' => $url,
    'trace' => 1,
];

try{
    $client = new SoapClient(null, $option);
    $response = $client->helloWorld("Lucho Sagnay");
    echo "Response: $response";
}catch(SoapFault $fault){
    echo "Exception: {$fault->getMessage()}";
}

?>