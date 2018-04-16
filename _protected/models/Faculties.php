<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Faculties".
 *
 * @property string $FacultyID
 * @property string $FacultyName
 */
class Faculties extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Faculties';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FacultyID', 'FacultyName'], 'required'],
            [['FacultyID'], 'string', 'max' => 1],
            [['FacultyName'], 'string', 'max' => 255],
            [['FacultyID'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'FacultyID' => 'Faculty ID',
            'FacultyName' => 'Faculty Name',
        ];
    }
}
