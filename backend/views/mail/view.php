<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Mail */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app','Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app','Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'authority',
            'in_date',
            'out_date',
            'in_info:ntext',
            'out_info:ntext',
            'customer_id',
            'user_id',
        ],
    ]) ?>

</div>
