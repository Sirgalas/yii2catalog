<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'authority',
            'in_date',
            'out_date',
            'in_info:ntext',
            // 'out_info:ntext',
            // 'customer_id',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
