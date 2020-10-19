<?php


require_once 'html.php';
require_once 'Data.php';
require_once 'Phonebook.php';


$data = new Data();

$number = $_GET['Phone'];


if($number == ""){
    echo 'Number not entered';
}



$searchPerson =  $data->getByNumber($number);


echo $searchPerson->getName() . ', ' . $searchPerson->getSurname();