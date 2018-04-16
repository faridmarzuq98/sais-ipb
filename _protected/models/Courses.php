<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Courses".
 *
 * @property string $CourseID
 * @property string $ProgramIDCourse
 * @property string $FacultyIDCourse
 * @property string $CourseName
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Courses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CourseID', 'ProgramIDCourse', 'FacultyIDCourse', 'CourseName'], 'required'],
            [['CourseID'], 'string', 'max' => 6],
            [['ProgramIDCourse'], 'string', 'max' => 3],
            [['FacultyIDCourse'], 'string', 'max' => 1],
            [['CourseName'], 'string', 'max' => 255],
            [['CourseID'], 'unique'],
            [['FacultyIDCourse'], 'exist', 'skipOnError' => true, 'targetClass' => Faculties::className(), 'targetAttribute' => ['FacultyIDCourse' => 'FacultyID']],
            [['ProgramIDCourse'], 'exist', 'skipOnError' => true, 'targetClass' => Programs::className(), 'targetAttribute' => ['ProgramIDCourse' => 'ProgramID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CourseID' => 'Course ID',
            'ProgramIDCourse' => 'Program Idcourse',
            'FacultyIDCourse' => 'Faculty Idcourse',
            'CourseName' => 'Course Name',
        ];
    }
}
