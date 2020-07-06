<?php

namespace app\components;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cadena
 *
 * @author Agus
 */
class Cadena extends \yii\base\BaseObject{
    private $nombre;
    private $vocales;
    
    public function __construct($name="") {
        $this->setNombre($name);
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }
    
    public static function calcularVocales($cadena){

        $vocalesEncontradas = 0;

	$cadena = strtolower($cadena);

	
	$longitud = mb_strlen($cadena);
        
        $cadena = str_replace(["á","é","í","ó","ú"], ["a", "e", "i", "o", "u"], $cadena);


	for ($indice = 0; $indice < $longitud; $indice++) { 
		
		if (in_array($cadena[$indice], ["a", "e", "i", "o", "u"])) {
			$vocalesEncontradas++;
		}
	}

	return $vocalesEncontradas;
        

    }
    
    public function getVocales() {
        
        return self::calcularVocales($this->getNombre());
    }
    
    public function getLongitud(){
        
        return mb_strlen($this->getNombre());        
    }







    
    
}
