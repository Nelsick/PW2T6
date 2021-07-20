<?php

class vehiculo{
    function __construct($patente,$serialMotor,$serialCarroceria,$marca,$modelo,$year,$color,$precio){
        $this->patente = $patente;
        $this->serialMotor = $serialMotor;
        $this->serialCarroceria = $serialCarroceria;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->year = $year;
        $this->color = $color;
        $this->precio = $precio;
    }
}

if(isset($_POST['patente'],$_POST['serialMotor'],$_POST['serialCarroceria'],$_POST['marca'],$_POST['modelo'],$_POST['year'],$_POST['color'],$_POST['precio'])){
    $patente = $_POST['patente'];
    $serialMotor = $_POST['serialMotor'];
    $serialCarroceria = $_POST['serialCarroceria'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $year = $_POST['year'];
    $color = $_POST['color'];
    $precio = $_POST['precio'];

    $autoPHP = new vehiculo($patente,$serialMotor,$serialCarroceria,$marca,$modelo,$year,$color,$precio);
}else{
    echo 'Los datos ingresados no son validos';
}

function sendData($auto){
    echo json_encode($auto);
}

sendData($autoPHP);

?>