<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DeputySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app','Deputies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deputy-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app','Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_deputy',
            'id_user',
            'created_at',
            'update_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
