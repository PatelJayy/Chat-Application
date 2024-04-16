<?php

require_once("classes/autoload.php");

// json_decode(json)= JSON.parse()
// json_encode(value) = JSON.strinfigy()

$DB=new Database();

$DATA_RAW=file_get_contents("php://input");
$DATA_OBJ=json_decode($data);

//process the data


?>