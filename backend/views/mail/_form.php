<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Mail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'authority')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'in_date')->textInput() ?>

    <?= $form->field($model, 'out_date')->textInput() ?>

    <?= $form->field($model, 'in_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'out_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
