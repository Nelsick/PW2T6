<?php 

include_once './newCar.php';

$patente = $_POST['patente'];
$serial_motor = $_POST['serialMotor'];
$serial_carroceria = $_POST['serialCarroceria'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$year = $_POST['year'];
$color = $_POST['color'];
$precio = $_POST['precio'];

if(isset($patente,$serial_motor,$serial_carroceria,$marca,$modelo,$year,$color,$precio)){
    $autoIngresado = new Car();
    $autoIngresado->setNewCar($patente,$serial_motor,$serial_carroceria,$marca,$modelo,$year,$color,$precio);
    echo json_encode("Auto ingresado correctamente");
}else{
    echo 'Faltan datos';
}

?>