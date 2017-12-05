<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app','Customers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

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
            'name',
            'last_name',
            'family_name',
            'date_of_birth',
            // 'town',
            // 'street',
            // 'home',
            // 'apartment',
            // 'created_at',
            // 'deleted_at',
            // 'phone',
            // 'id_parent_family',
            // 'type_family_member',
            // 'type_child',
            // 'family_income',
            // 'char_of_housing:ntext',
            // 'accompanying',
            // 'info_family',
            // 'user_id',
            // 'snils',
            // 'customer_doc',
            // 'work',
            // 'out_shcool',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
