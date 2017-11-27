<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TypeServices */

$this->title = 'Create Type Services';
$this->params['breadcrumbs'][] = ['label' => 'Type Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-services-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
