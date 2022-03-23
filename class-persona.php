<?php 

class Persona {
    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $genero;
    protected $carrera;

    public function __construct($n,$a,$e,$g,$c){

        $this->nombre=$n;
        $this->apellido=$a;
        $this->edad=$e;
        $this->genero=$g;
        $this->carrera=$c;
    }
    public function setNombre($nomb){
        $this->nombre = $nomb;
    }
    public function setApellido($apell){
       $this->apellido = $apell;
    }
    public function setEdad($edad){
       $this->edad = $edad;
    }
    public function setGenero($genero){
        $this->genero = $genero;
    }
    public function setCarrera($carrera){
        $this->carrera = $carrera;
    }
    public function getNombre(){
       return $this->nombre;
    }
    public function getApellido(){
       return $this->apellido;
    }
    public function getEdad(){
       return $this->edad;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function getCarrera(){
        return $this->carrera;
    }
    public function matricular(){}
    public function aprobar(){}
    public function reprobar(){}


}




?>