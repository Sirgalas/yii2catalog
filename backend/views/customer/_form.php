<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'family_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_of_birth')->textInput() ?>

    <?= $form->field($model, 'town')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'home')->textInput() ?>

    <?= $form->field($model, 'apartment')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_parent_family')->textInput() ?>

    <?= $form->field($model, 'type_family_member')->textInput() ?>

    <?= $form->field($model, 'type_child')->textInput() ?>

    <?= $form->field($model, 'family_income')->textInput() ?>

    <?= $form->field($model, 'char_of_housing')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'accompanying')->textInput() ?>

    <?= $form->field($model, 'info_family')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'snils')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer_doc')->textInput() ?>

    <?= $form->field($model, 'work')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'out_shcool')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
