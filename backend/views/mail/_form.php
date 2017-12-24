<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use mihaildev\ckeditor\CKEditor;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Mail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'authority')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'in_date')->widget(DatePicker::className(),[
        'name' => 'check_issue_date',
        'value' => date('d-M-Y', time()),
        'options' => ['placeholder' => 'Select out date mail'],
        'pluginOptions' => [
            'format' => 'dd-mm-yyyy',
            'todayHighlight' => true
        ]
    ]) ?>

    <?= $form->field($model, 'out_date')->widget(DatePicker::className(),[
        'name' => 'check_issue_date',
        'value' => date('d-M-Y', time()),
        'options' => ['placeholder' => 'Select in date mail'],
        'pluginOptions' => [
            'format' => 'dd-mm-yyyy',
            'todayHighlight' => true
        ]
    ]) ?> 

    <?= $form->field($model, 'in_info')->widget(CKEditor::className(), [
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ]) ?>

    <?= $form->field($model, 'out_info')->widget(CKEditor::className(), [
        'editorOptions' => [
            'preset' => 'full',
            'inline' => false,
        ],
    ]) ?>
    <?php if($model->isNewRecord){ ?>
        <?= $form->field($model, 'customer_id')->widget(Select2::className(),[
            'data' => $customer,
            'language' => 'ru',
            'options' => ['placeholder' => Yii::t('app','Select customer')],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]) ?>
    <?php }else{ ?>
        <?php echo Select2::widget([
            'name' => 'Mail[customer_id]',
            'value' => $model->customer->fullName,
            'data' => $customer,
            'options' => ['placeholder' => 'Select states ...']
        ]) ?>
    <?php } ?>

    <?php if($model->isNewRecord){ ?>
        <?= $form->field($model,'user_id')->widget(Select2::className(), [
            'data' => $user,
            'language' => 'ru',
            'options' => ['placeholder' => Yii::t('app','Select user')],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]) ?>
    <?php }else{ ?>
        <?php echo Select2::widget([
            'name' => 'User[user_id]',
            'value' => $model->user->userame,
            'data' => $user,
            'options' => ['placeholder' => Yii::t('app','Select user')]
        ]) ?>
    <?php } ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
