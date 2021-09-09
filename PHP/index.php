<?php
require_once('car.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('account.php');

$uberX = new UberX("VCB234", new Account("Astrik Sem", "AST453"), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("KFE344", new Account("Karina Garcia", "KRG436"), "Dogde", "Attitude");
$uberPool->printDataCar();
?>