<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Student Academic Information System - Bogor Agricultural University';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Academic Information System</h1>
        <h2>Bogor Agricultural University</h2>
        <h4>For Undergraduate and Diploma Student</h4>
      </br>
        <marquee scrollamount="5" width="50%"><p class="lead">Welcome to student academic information system app, a project by LidMarzuq.</p></marquee>
    </div>
    <div class="body-content">
        <div class="row">
            <div class="col-lg-3">
                <h2>Students</h2>
                <p>See student data in Bogor Agricultural University</p>
                <?= Html::a('Student', ['/students'], ['class'=>'btn btn-primary']) ?>
            </div>
            <div class="col-lg-3">
                <h2>Courses</h2>
                <p>See all course from all programs in Bogor Agricultural University</p>
                <?= Html::a('Course', ['/courses'], ['class'=>'btn btn-primary']) ?>
            </div>
            <div class="col-lg-3">
                <h2>Programs</h2>
                <p>See all programs for undergraduate and diploma students</p>
                <?= Html::a('Program', ['/programs'], ['class'=>'btn btn-primary']) ?>
            </div>
            <div class="col-lg-3">
                <h2>Faculties</h2>
                <p>See all faculties in Bogor Agricultural University</p>
                <?= Html::a('Faculty', ['/faculties'], ['class'=>'btn btn-primary']) ?>
            </div>
        </div>

    </div>
</div>
