<?php


$stringaJSONPresaDalDB = file_get_contents('db/db.json');

$strutturaDatiArray = json_decode($stringaJSONPresaDalDB, true);

$newtodo = [
    'do' => $_POST['do'],
    "alreadyDid" => false
];


$strutturaDatiArray[] = $newtodo;

$alltodoNewJson = json_encode($strutturaDatiArray);

file_put_contents('db/db.json', $alltodoNewJson)

?>