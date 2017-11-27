<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OrphanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orphan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'home') ?>

    <?= $form->field($model, 'availability') ?>

    <?= $form->field($model, 'check_in') ?>

    <?= $form->field($model, 'housing_account') ?>

    <?php // echo $form->field($model, 'working') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
