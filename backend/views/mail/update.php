<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mail */

$this->title = Yii::t('app','Update');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Mails'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app','Update');
?>
<div class="mail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'customer'=>$customer,
        'user'=>$user
    ]) ?>

</div>
