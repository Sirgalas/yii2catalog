<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Mail */

$this->title = Yii::t('app','Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Mails'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'customer'=>$customer,
        'user'=>$user
    ]) ?>

</div>
