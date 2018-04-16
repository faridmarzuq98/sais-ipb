<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Faculties;
use app\models\Programs;
use app\models\Courses;

/* @var $this yii\web\View */
/* @var $model app\models\Students */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FacultyIDStud')->dropDownList(
              ArrayHelper::map(Faculties::find()->all(),'FacultyID','FacultyName'),
              [
                    'prompt'=>'Select Faculty',
                    'onchange'=>'
                        $.post("index.php?r=programs/lists&id='.'"+$(this).val(), function(data) {
                              $("select#students-programidstud").html(data);
                        });'
      ]) ?>

    <?= $form->field($model, 'ProgramIDStud')->dropDownList(
              ArrayHelper::map(Programs::find()->all(),'ProgramID','ProgramName'),
              [
                    'prompt'=>'Select Program',
                    'onchange'=>'
                        $.post("index.php?r=courses/lists&id='.'"+$(this).val(), function(data) {
                              $("select#students-courseidstud").html(data);
                        });'
      ]) ?>

    <?= $form->field($model, 'CourseIDStud')->dropDownList(
              ArrayHelper::map(Courses::find()->all(),'CourseID','CourseName'),
              ['prompt'=>'Select Course']
      )  ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
