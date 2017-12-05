<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Customer */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app','Customers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-view">

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
            'name',
            'last_name',
            'family_name',
            'date_of_birth',
            'town',
            'street',
            'home',
            'apartment',
            'created_at',
            'deleted_at',
            'phone',
            'id_parent_family',
            'type_family_member',
            'type_child',
            'family_income',
            'char_of_housing:ntext',
            'accompanying',
            'info_family',
            'user_id',
            'snils',
            'customer_doc',
            'work',
            'out_shcool',
        ],
    ]) ?>

</div>
