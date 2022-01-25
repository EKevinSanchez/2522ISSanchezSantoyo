<?php
namespace App\Models;
use App\Models\Animal;

class Gato extends Animal{
    public $raza;
    public $color;

    public function generarRaza(){
        $this->raza = "Siames";
        return $this->raza;
    }
    public function generarColor(){
        $this->color = "Naranja";
        return $this->color;
    }
    public function mostrarDatos(){
        return "Nombre: ".$this->generarNombre("Garlfield")." "."especie: ".$this->generarEspecie("Gato").
         " edad: ".$this->generarEdad("5 años").
         " peso: ".$this->generarPeso("12 kg").
         " talla: ".$this->generarTalla("50 cm").
         " alimento: ".$this->generarAlimento("Croquetas").
         " raza: ".$this->generarRaza().
         " color: ".$this->generarColor();
    }
}