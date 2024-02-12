<?php

/*$students = [
    [
        'do' => 'Fare i compiti',
        'alreadyDid' => false
    ],
    [
        'do' => 'Fare la spesa',
        'alreadyDid' => true
    ],
    [
        'do' => 'Fare la lavatrice',
        'alreadyDid' => false
    ],
];*/

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With");

$stringaJSONPresaDalDB = file_get_contents('db/db.json');

// Dico al client che la risposta contiene un json
header('Content-Type: application/json');


if(isset($_GET['used'])) {
    $strutturaDatiArray = json_decode($stringaJSONPresaDalDB, true);

    for($i = 0; $i < count($strutturaDatiArray); $i ++){
        $strutturaDatiArray[$i]['used'] = rand(0, 50);
    }
    // Rispondo con il json preso dal file
    echo json_encode($strutturaDatiArray);


}
else{
    echo $stringaJSONPresaDalDB;
}



