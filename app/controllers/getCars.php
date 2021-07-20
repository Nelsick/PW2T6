<?php

include_once './newCar.php';
$autos = new Car();
$cars = $autos->getCars();

echo json_encode($cars);

?>