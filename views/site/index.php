<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
?>
<div class="site-index">

    <h1>Cursos destacados</h1>
    <p>En el siguiente listado podemos ver los cursos principales que Alpe Formación tiene actualmente</p>

    <?php
    NavBar::begin();
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
           
            ['label' => 'Comienzo inmimente', 'url' => ['/site/comienzo']],
            ['label' => 'Todos', 'url' => ['/site/todos']],
            ['label' => 'Buscar', 'url' => ['/site/buscador']],
                  
            
        ],
    ]);
    NavBar::end();
    ?>
    
</div>
