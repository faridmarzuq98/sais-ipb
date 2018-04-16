<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Students".
 *
 * @property string $Name
 * @property string $NIM
 * @property string $FacultyIDStud
 * @property string $ProgramIDStud
 * @property string $CourseIDStud
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'NIM', 'FacultyIDStud', 'ProgramIDStud', 'CourseIDStud'], 'required'],
            [['Name'], 'string', 'max' => 255],
            [['NIM'], 'string', 'max' => 9],
            [['FacultyIDStud'], 'string', 'max' => 1],
            [['ProgramIDStud'], 'string', 'max' => 3],
            [['CourseIDStud'], 'string', 'max' => 6],
            [['NIM'], 'unique'],
            [['FacultyIDStud'], 'exist', 'skipOnError' => true, 'targetClass' => Faculties::className(), 'targetAttribute' => ['FacultyIDStud' => 'FacultyID']],
            [['ProgramIDStud'], 'exist', 'skipOnError' => true, 'targetClass' => Programs::className(), 'targetAttribute' => ['ProgramIDStud' => 'ProgramID']],
            [['CourseIDStud'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::className(), 'targetAttribute' => ['CourseIDStud' => 'CourseID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Name' => 'Name',
            'NIM' => 'Nim',
            'FacultyIDStud' => 'Faculty Idstud',
            'ProgramIDStud' => 'Program Idstud',
            'CourseIDStud' => 'Course Idstud',
        ];
    }
}
