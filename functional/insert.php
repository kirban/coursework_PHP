<?php
include_once "User.php";
    
$pathToDb = "../db/base.txt";

$data = file_get_contents($pathToDb) or exit("ERROR! Unable to open database file!");

if($data == ""){
    
    $arrUsers = array();
    
}
else{
    
    $arrUsers = unserialize($data);
    
}