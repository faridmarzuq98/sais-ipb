<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Faculties;

/* @var $this yii\web\View */
/* @var $model backend\models\Programs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProgramID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FacultyIDProg')->dropDownList(
              ArrayHelper::map(Faculties::find()->all(),'FacultyID','FacultyName'),
              ['prompt'=>'Select Faculty']
      ) ?>

    <?= $form->field($model, 'ProgramName')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
