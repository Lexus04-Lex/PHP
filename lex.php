<?php

declare(strict_types=1);
require_once 'transact.php';



$transaction = new Transaction(100, 'Transaction1');
// $transaction-> amount = 100;
$transaction-> addTax(8);
$transaction->discount(10);
var_dump($transaction-> getAmount );





?>