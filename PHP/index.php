<?php
require_once('Car.php');
require_once('UberX.php');
require_once('UberPool.php');
require_once("Account.php");

$uberX = new UberX("KUCHAU12",new Account("Juan Fuentes","ANDY76"),"VW","Jetta");
$uberX->printDataCar();
$uberPool = new UberPool("KUCHAU12",new Account("Juan A. Fuentes","ANDY76"),"Dodge","Attitude");
$uberPool->printDataCar();