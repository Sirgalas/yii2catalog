<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \kartik\select2\Select2;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Deputy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deputy-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php if($model->isNewRecord){ ?>
        <?= $form->field($model, 'id_deputy')->widget(Select2::className(),[
            'data' => $user,
            'language' => 'ru',
            'options' => ['placeholder' => Yii::t('app','Select customer')],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]) ?>
    <?php }else{ ?>
        <?php echo Select2::widget([
            'name' => 'Mail[id_deputy]',
            'value' => $model->deputy->username,
            'data' => $user,
            'options' => ['placeholder' => 'Select deputy']
        ]) ?>
    <?php } ?>

    <?php if($model->isNewRecord){ ?>
        <?= $form->field($model,'id_user')->widget(Select2::className(), [
            'data' => $user,
            'language' => 'ru',
            'options' => ['placeholder' => Yii::t('app','Select user')],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]) ?>
    <?php }else{ ?>
        <?php echo Select2::widget([
            'name' => 'User[id_user]',
            'value' => $model->user->userame,
            'data' => $user,
            'options' => ['placeholder' => Yii::t('app','Select user')]
        ]) ?>
    <?php } ?>

    <?= $form->field($model, 'created_at')->widget(DatePicker::className(),[
        'name' => 'check_issue_date',
        'value' => date('d-M-Y', time()),
        'options' => ['placeholder' => 'Select start date '],
        'pluginOptions' => [
            'format' => 'dd-mm-yyyy',
            'todayHighlight' => true
        ]
    ]) ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
