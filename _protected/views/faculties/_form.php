<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Faculties */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="faculties-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FacultyID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FacultyName')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
