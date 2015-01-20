<?php
use app\models\UserRole;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 98]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 98]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 390]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 390]) 
	?>
	<?= $form->field($model, 'account_type')->dropDownList(ArrayHelper::map(UserRole::find()->all(), 'role_id', 'role'))  ?>
	  
    <?= $form->field($model, 'city')->textInput(['maxlength' => 55]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => 55]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'pincode')->textInput(['maxlength' => 7]) ?>

    <?= $form->field($model, 'contact')->textInput(['maxlength' => 15]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>