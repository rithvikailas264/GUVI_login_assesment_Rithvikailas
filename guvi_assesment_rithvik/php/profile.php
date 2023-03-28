<?php
require '../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {


    header('Content-Type: application/json');


    $email = $_GET['email'];
 
    $redis = new Predis\Client();
    $cacheentry = $redis->get("email");
 

    if ($cacheentry == null) {


    $client = new MongoDB\Client("mongodb://localhost:27017");

    $collection = $client->guvidb->users;


    $cursor = $collection->find([
        'email'=>$cacheentry
    ]);

    $data = array();

    foreach ($cursor as $document) {
        $data[] = $document;
    }
    $json =  json_encode($data);
    echo $json;

    $redis->set($data, json_encode($c));
 
    }
}

exit;
?>
