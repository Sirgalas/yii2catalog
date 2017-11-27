<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Orphan */

$this->title = 'Create Orphan';
$this->params['breadcrumbs'][] = ['label' => 'Orphans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orphan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>