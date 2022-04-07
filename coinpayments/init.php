<?php

require "Coin.php";
require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => "mysql",
    'host' => "localhost",
    'database' => "thebtcge_coinpayment",
    'username' => "",
    'password' => ""
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

require "Payment.php";

$coin = new CoinPaymentsAPI();
$coin->Setup("API_KEY","API_PRIVATE_KEY");
