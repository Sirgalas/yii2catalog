<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CustomerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'family_name') ?>

    <?= $form->field($model, 'date_of_birth') ?>

    <?php // echo $form->field($model, 'town') ?>

    <?php // echo $form->field($model, 'street') ?>

    <?php // echo $form->field($model, 'home') ?>

    <?php // echo $form->field($model, 'apartment') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'deleted_at') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'id_parent_family') ?>

    <?php // echo $form->field($model, 'type_family_member') ?>

    <?php // echo $form->field($model, 'type_child') ?>

    <?php // echo $form->field($model, 'family_income') ?>

    <?php // echo $form->field($model, 'char_of_housing') ?>

    <?php // echo $form->field($model, 'accompanying') ?>

    <?php // echo $form->field($model, 'info_family') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'snils') ?>

    <?php // echo $form->field($model, 'customer_doc') ?>

    <?php // echo $form->field($model, 'work') ?>

    <?php // echo $form->field($model, 'out_shcool') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
