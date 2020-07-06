<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Destacados', 'url' => ['/site/index']],
            ['label' => 'Comienzo inmimente', 'url' => ['/site/comienzo']],
            ['label' => 'Todos', 'url' => ['/site/todos']],
            ['label' => 'Buscar', 'url' => ['/site/buscador']],
            ['label' => 'Solicitar información', 'url' => ['/site/informacion']],
            
            
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <?php
    NavBar::begin([
        'brandImage' => '@web/imgs/alpe.png',
        'brandUrl' => "https://www.alpeformacion.es",
        'options' => [
            'class' => 'navbar-inverse .navbar-fixed-bottom',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Portal educativo', 'url' => "http://educa.alpeformacion.es"],
            ['label' => 'Wweb Alpe', 'url' => "https:/www.alpeformacion.es"],
            ['label' => 'Donde estamos', 'url' => "https://www.alpeformacion.es/contacto"],
            ['label' => 'Datos de Contacto', 'url' => "https://www.alpeformacion.es/contacto"],
            
            
            
        ],
    ]);
    NavBar::end();
    ?>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
