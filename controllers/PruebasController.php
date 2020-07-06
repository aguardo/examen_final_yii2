<?php

namespace app\controllers;

class PruebasController extends \yii\web\Controller
{
    
    public $layout = 'second';
    
    
    public function actionUno()
    {
        return "Hola Mundo";
    }
    
    public function actionDos()
    {
                
        return (function(){
            $fecha = new \DateTime();
            $fecha->modify('+2 day');
            $fecha->add(new \DateInterval('PT10M'));

            
            return $fecha->format('Y-m-d H:i:s');
        })();
            
    }
    
    public function actionTres(){
        
        return $this->render('tres');
        
        
    }
    
    public function actionCuatro(){
        
        $Cadena = new \app\components\Cadena("ejemplo de camión");
        
        $texto = $Cadena->getNombre();
        $numero = $Cadena->getVocales();
        $longitud = $Cadena->getLongitud();
        
        return $this->render('cuatro',[
            'texto' => $texto,
            'numero' => $numero,
            'longitud' => $longitud,
        ]);
        
        
    }

}
