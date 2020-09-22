<?php

require_once __DIR__ . '/Spices.php';
require_once __DIR__ . '/SpicesCollection.php';
require_once __DIR__ . '/Spices/Salt.php';
require_once __DIR__ . '/Spices/Chili.php';
require_once __DIR__ . '/Spices/Paprica.php';

use \App\SpicesCollection;
use \App\Spices\Salt;
use \App\Spices\Paprica;
use \App\Spices\Chili;


$spices = new SpicesCollection();

$spices->add(new Salt());
$spices->add(new Chili());
$spices->add(new Paprica());

foreach ($spices->all() as $spice) {

    echo $spice->getName() . PHP_EOL;
}




