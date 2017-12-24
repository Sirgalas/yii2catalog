<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\widgets\MaskedInput;
use dosamigos\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model common\models\Customer */
/* @var $form yii\widgets\ActiveForm */
/**
 * @var $parent common\models\Customer;
 */
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

    <?= $form->field($model, 'phone')->widget(MaskedInput::className(), ['mask' => '+9-(999)-999-99-99']); ?>

    <?= $form->field($model, 'id_parent_family')->widget(Select2::className(),[
        'data' => $parent,
        'language' => 'ru',
        'options' => ['placeholder' => 'Выбирите семью'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'type_family_member')->widget(Select2::className(),[
        'data' => $familyType,
        'language' => 'ru',
        'options' => ['placeholder' => 'Выбирите тип семьи'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?= $form->field($model, 'type_child')->widget(Select2::className(),[
        'data' => $childType,
        'language' => 'ru',
        'options' => ['placeholder' => 'Выбирите категорию ребенка'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'family_income')->textInput() ?>

    <?= $form->field($model, 'char_of_housing')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>

    <?= $form->field($model, 'accompanying')->textInput() ?>

    <?= $form->field($model, 'info_family')->textInput() ?>

    <?= $form->field($model, 'user_id')->widget(Select2::className(),[
        'data' => $user,
        'language' => 'ru',
        'options' => ['placeholder' => 'Выбирите специалиста'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'snils')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer_doc')->textInput() ?>

    <?= $form->field($model, 'work')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'out_shcool')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
