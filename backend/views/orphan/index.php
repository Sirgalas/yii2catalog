<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OrphanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orphans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orphan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Orphan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'home',
            'availability',
            'check_in',
            'housing_account',
            // 'working',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
