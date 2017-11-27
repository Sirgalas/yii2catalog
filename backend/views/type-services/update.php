<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TypeServices */

$this->title = 'Update Type Services: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Type Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-services-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
