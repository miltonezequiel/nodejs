<?php 
include_once('class-persona.php');
class Alumno extends Persona{
    private $cuenta;
    private $promedio;
    //Para extender la clase Persona debo pasarle las variables en el constuctor local $nombre,$apellido,$edad,$genero,$carrera
    //Luego en el cuerpo debo llamar al constructor padre para instanciar las variables 
    public function __construct($nombre,$apellido,$edad,$genero,$carrera,$c,$p){
        parent::__construct($nombre,$apellido,$edad,$genero,$carrera);
        $this->cuenta=$c;
        $this->promedio=$p;
    }

    public function cancelarClase(){
        return 'cancelo la clase el profesor '.$this->nombre;
    }
    public function cambiarCarrera(){
        return 'cambiar carrera';
    }
    
    public function setCuenta($cta){
      $this->cuenta=$cta;
    }
    public function setPromedio($prom){
      $this->promedi=$prom;
    }
    public function getCuenta(){
        return $this->cuenta;
    }
    public function getPromedio(){
        return $this->promedio;
    }

}




?>