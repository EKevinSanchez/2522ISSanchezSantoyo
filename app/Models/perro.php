<?php
namespace App\Models;
use App\Models\Animal;

class Perro extends Animal{
    public $raza;
    public $color;
    
    public function generarRaza(){
        $this->raza = "Golden Retriever";
        return $this->raza;
    }
    public function generarColor(){
        $this->color = "Blanco";
        return $this->color;
    }
    public function mostrarDatos(){
        return "Nombre: ".$this->generarNombre("Firulais")." "."especie: ".$this->generarEspecie("Perro").
         " edad: ".$this->generarEdad("3 años").
         " peso: ".$this->generarPeso("20 kg").
         " talla: ".$this->generarTalla("150 cm").
         " alimento: ".$this->generarAlimento("Carne").
         " raza: ".$this->generarRaza().
         " color: ".$this->generarColor();
    }
}
?>