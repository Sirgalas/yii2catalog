<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\Orphan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orphan-form">

    <?php

    $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'home')->dropDownList($model::$home_status) ?>

    <?= $form->field($model, 'availability')->dropDownList($model::$suitable_status) ?>

    <?= $form->field($model, 'check_in')->dropDownList($model::$check_in) ?>

    <?= $form->field($model, 'housing_account')->dropDownList($model::$housing_account_status) ?>

    <?= $form->field($model, 'working')->dropDownList($model::$Working_status) ?>

    <?= $form->field($model,'id_customer')->widget(Select2::className(), [
        'data' => $customer,
        'language' => 'ru',
        'options' => ['placeholder' => Yii::t('app','Select customer')],
        'pluginOptions' => [
            'allowClear' => true
        ],]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
