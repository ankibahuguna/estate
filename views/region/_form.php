<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Regions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="regions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'iso')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'iso3')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'fips')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'continent')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'currency_code')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'currency_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'phone_prefix')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'postal_code')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'languages')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'geonameid')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
