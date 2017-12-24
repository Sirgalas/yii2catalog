<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Deputy */

$this->title = Yii::t('app','Update').': ' . $model->deputy->user_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Deputies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="deputy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user'  =>  $user
    ]) ?>

</div>
