<?php

require_once 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;
use App\Person;


$person = new Person('Klavs');

echo $person->getName() . ' ' . 'id: ' . Uuid::uuid1();





