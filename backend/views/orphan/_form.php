<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Orphan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orphan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'home')->textInput() ?>

    <?= $form->field($model, 'availability')->textInput() ?>

    <?= $form->field($model, 'check_in')->textInput() ?>

    <?= $form->field($model, 'housing_account')->textInput() ?>

    <?= $form->field($model, 'working')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
