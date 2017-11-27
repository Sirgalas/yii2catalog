<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ServicesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_customer') ?>

    <?= $form->field($model, 'id_type_services') ?>

    <?= $form->field($model, 'id_user_responsible') ?>

    <?= $form->field($model, 'id_user_spec') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'result') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'type_user') ?>

    <?php // echo $form->field($model, 'type_services') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
