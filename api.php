<?php

$students = [
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
];

// Dico al client che la risposta contiene un json
header('Content-Type: application/json');

// Rispondo con il json preso dal file
echo json_encode($students);
