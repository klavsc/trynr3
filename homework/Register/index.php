<?php

require_once 'Person.php';
require_once 'PersonData.php';
require_once 'Html.php';

$personData = new PersonData();

$id = $_POST ?? 'Klavs';

$search = $_GET;





$person = new Person($id['name'],$id['surname'],$id['id'],$id['address']);

$personData->putIn($person);



if($search == $person['id']){
    echo $person->getName() . ' | ' . $person->getSurname() . ' | ' . $person->getID() . ' | ' . $person->getAddress();

}










