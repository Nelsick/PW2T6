<?php 

include_once './db.php';

class Car extends db{
    private $patente;
    private $serialMotor;
    private $serialCarroceria;
    private $marca;
    private $modelo;
    private $year;
    private $color;
    private $precio;

    public function setNewCar($patente,$serialMotor,$serialCarroceria,$marca,$modelo,$year,$color,$precio){
        $query = $this->connect()->prepare('INSERT INTO pw2t6 (patente, serial_motor, serial_carroceria, marca, modelo, year, color, precio) VALUES (:patente, :serialMotor, :serialCarroceria, :marca, :modelo, :year, :color, :precio)');
        $query->execute(['patente'=>$patente,'serialMotor'=>$serialMotor,'serialCarroceria'=>$serialCarroceria,'marca'=>$marca,'modelo'=>$modelo,'year'=>$year,'color'=>$color,'precio'=>$precio]);
    }

    public function getCars(){
        $result = [];
        $query = $this->connect()->query('SELECT * FROM pw2t6');
        if(!$query){
            print "Error al realizar la consulta";
        }
        while($auto = $query->fetch()){
            array_push($result,['id'=>$auto['id'],'patente'=>$auto['patente'],'serial_motor'=>$auto['serial_motor'],'serial_carroceria'=>$auto['serial_carroceria'],'marca'=>$auto['marca'],'modelo'=>$auto['modelo'],'year'=>$auto['year'],'color'=>$auto['color'],'precio'=>$auto['precio']]);
        }
        return $result;
    }

    public function editSelectedCar($id,$patente,$serialMotor,$serialCarroceria,$marca,$modelo,$year,$color,$precio){
        $query = $this->connect()->prepare('UPDATE pw2t6 SET patente=:patente, serial_motor=:serial_motor, serial_carroceria=:serial_carroceria, marca=:marca, modelo=:modelo, year=:year, color=:color, precio=:precio WHERE id=:id');
        $query->execute(['id'=>$id,'patente'=>$patente,'serialMotor'=>$serialMotor,'serialCarroceria'=>$serialCarroceria,'marca'=>$marca,'modelo'=>$modelo,'year'=>$year,'color'=>$color,'precio'=>$precio]);
    }

    public function removeSelectedCar($id){
        $query = $this->connect()->prepare('DELETE FROM pw2t6 WHERE id=:id');
        $query->execute(['id'=>$id]);
        return 'Automovil eliminado de forma exitosa';
    }
}
?>