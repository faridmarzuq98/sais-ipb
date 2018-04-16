<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Faculties;
use app\models\Programs;

/* @var $this yii\web\View */
/* @var $model backend\models\Courses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="courses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CourseID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FacultyIDCourse')->dropDownList(
              ArrayHelper::map(Faculties::find()->all(),'FacultyID','FacultyName'),
              [
                    'prompt'=>'Select Faculty',
                    'onchange'=>'
                        $.post("index.php?r=programs/lists&id='.'"+$(this).val(), function(data) {
                              $("select#courses-programidcourse").html(data);
                        });'
      ]) ?>

    <?= $form->field($model, 'ProgramIDCourse')->dropDownList(
              ArrayHelper::map(Programs::find()->all(),'ProgramID','ProgramName'),
              ['prompt'=>'Select Program']
      )  ?>

    <?= $form->field($model, 'CourseName')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
