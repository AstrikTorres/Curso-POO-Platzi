<?php
require_once('car.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('account.php');
require_once('user.php');
require_once('driver.php');

$uberX = new UberX("VCB234", new Account("Astrik Sem", "AST453", "astrik@sem.com"), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("KFE344", new Account("Karina Garcia", "KRG436", "karina@garcia.com"), "Dogde", "Attitude");
$uberPool->printDataCar();

$user = new User("Ricardo Garcia", "RGM653", "ricardo@garcia.com", "12345678");
$user->printDataUser();
?>