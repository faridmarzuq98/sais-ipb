<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Students;

/**
 * StudentsSearch represents the model behind the search form of `app\models\Students`.
 */
class StudentsSearch extends Students
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'NIM', 'FacultyIDStud', 'ProgramIDStud', 'CourseIDStud'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Students::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'NIM', $this->NIM])
            ->andFilterWhere(['like', 'FacultyIDStud', $this->FacultyIDStud])
            ->andFilterWhere(['like', 'ProgramIDStud', $this->ProgramIDStud])
            ->andFilterWhere(['like', 'CourseIDStud', $this->CourseIDStud]);

        return $dataProvider;
    }
}
