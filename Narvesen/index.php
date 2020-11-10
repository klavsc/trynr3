<?php

declare(strict_types=1);

require_once './Products.php';
require_once './Store.php';
require_once './PriceFormatter.php';
require_once './Person.php';
require_once './ProductStorage.php';
require_once './CustomerLog.php';


$storage = new ProductStorage('./StoreInfo.txt');
$persons = new CustomerLog('./PersonInfo.txt');
$person = new Person ('Juris', 1000);


$store = new Store('Narvesen Kengarags!', $storage->load());

echo $person->getName() . ' ' . Formatter::price($person->getMoney());

echo PHP_EOL;

foreach ($store->getAllProducts() as $product) {

    echo $product->getName() . ' ' .
        Formatter::price($product->getPrice()) . ' ' .
        Formatter::amount($product->getAmount())  .
        PHP_EOL;
}

$products = $store->getAllProducts()[2];


if($person->getMoney() >= $products->getPrice() || $products->getAmount() > 0)
{
    $moneyLeft = $person->getMoney() - $products->getPrice();
    $productsLeft = $products->getAmount() - 1;
    $bag = $products->getName();

    echo 'Funds left : ' . Formatter::price($moneyLeft), PHP_EOL;
    echo 'Product in bag:' . $bag;
}









