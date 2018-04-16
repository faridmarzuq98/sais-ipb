<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Programs".
 *
 * @property string $ProgramID
 * @property string $FacultyIDProg
 * @property string $ProgramName
 */
class Programs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Programs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProgramID', 'FacultyIDProg', 'ProgramName'], 'required'],
            [['ProgramID'], 'string', 'max' => 3],
            [['FacultyIDProg'], 'string', 'max' => 1],
            [['ProgramName'], 'string', 'max' => 255],
            [['ProgramID'], 'unique'],
            [['FacultyIDProg'], 'exist', 'skipOnError' => true, 'targetClass' => Faculties::className(), 'targetAttribute' => ['FacultyIDProg' => 'FacultyID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProgramID' => 'Program ID',
            'FacultyIDProg' => 'Faculty Idprog',
            'ProgramName' => 'Program Name',
        ];
    }
}
