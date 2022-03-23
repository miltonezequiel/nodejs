<?php

/*  MODIFICADORES DE ACCESOS 
-PUBLIC: se pueden llamar desde cualquier lugar 
-PRIVATE: solo se pueden llamar dentro de la misma clase
-PROTECTED : se pueden obtener desde sus clases hijas heredadas  */

class usuario {
 
  private $nombre;
  private $apellido;
  private $correo;

    public function __constructor($nombre,$apellido,$correo){
        $this->nombre=$nombre;
        $this->apellido=$apeliido;
        $this->correo=$correo;

    }  
    public function setNombre($nomb){
         $this->nombre = $nomb;
    }
    public function setApellido($apell){
        $this->apellido = $apell;
    }
    public function setCorreo($corr){
        $this->correo = $corr;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getCorreo(){
        return $this->correo;
    }
 

}

?>