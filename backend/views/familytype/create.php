<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FamilyType */

$this->title = 'Create Family Type';
$this->params['breadcrumbs'][] = ['label' => 'Family Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="family-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
