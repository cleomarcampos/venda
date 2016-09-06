<?php 
require_once("class/truck.php");
require_once("class/car.php");

try {
	$db = new \PDO("mysql:host=localhost;dbname=bisxyz_system;", "bisxyz_system", "qofH&C]6@xiS");
} catch (PDOException $e) {
	echo 'Erro ao se conectar no bd, code: '. $e->getCode();
}

$truck = new Truck($db);
$listTruck = $truck->listTruck();

$car = new Car($db);
$listCar = $car->listCar();

 ?>