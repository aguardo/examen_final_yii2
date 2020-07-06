<?php

namespace app\controllers;

class PruebasController extends \yii\web\Controller
{
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

}
