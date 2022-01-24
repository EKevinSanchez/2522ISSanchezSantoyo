<?php
namespace App\Models;


class Animal{
    public $nombre;
    public $especie;
    public $edad;
    public $peso;
    public $talla;
    public $alimento;

    public function generarNombre($nom){
        $this->nombre = $nom;
        return $this->nombre;
    }
    public function generarEspecie($esp){
        $this->especie = $esp;
        return $this->especie;
    }
    public function generarEdad($edad){
        $this->edad = $edad;
        return $this->edad;
    }
    public function generarPeso($peso){
        $this->peso = $peso;
        return $this->peso;
    }
    public function generarTalla($talla){
        $this->talla = $talla;
        return $this->talla;
    }
    public function generarAlimento($ali){
        $this->alimento = $ali;
        return $this->alimento;
    }

}



?>
