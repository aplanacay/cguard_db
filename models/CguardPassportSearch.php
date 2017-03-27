<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CguardPassport;

/**
 * CguardPassportSearch represents the model behind the search form about `app\models\CguardPassport`.
 */
class CguardPassportSearch extends CguardPassport
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cguard_id'], 'integer'],
            [['region_no', 'region_name', 'collection_no', 'collectors', 'institute', 'date_collected', 'province', 'municipality', 'barangay', 'sitio_purok', 'latitude', 'longitude', 'altitude', 'crop', 'variety', 'meaning_of_name', 'language_dialect', 'date_planted', 'date_harvested', 'source_grower_name', 'contact_info', 'photograph_no', 'collecting_src', 'sample_type', 'genetic_status', 'sampling_method', 'topography', 'site', 'soil_texture', 'soil_color', 'stoniness', 'farming_cultural_practice', 'sowing', 'irrigation_water_src', 'drainage', 'crop_sequence', 'fertilizer_mgt_practice', 'pest_weed_mgt_practice', 'usage_1', 'key_desc_of_cultivar', 'years_in_possession', 'addtl_notes'], 'safe'],
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
        $query = CguardPassport::find();

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
        $query->andFilterWhere([
            'cguard_id' => $this->cguard_id,
            'date_collected' => $this->date_collected,
            'region_no' => $this->region_no,
        ]);

        $query//->andFilterWhere(['ilike', 'region_no', $this->region_no])
            ->andFilterWhere(['ilike', 'region_name', $this->region_name])
            ->andFilterWhere(['ilike', 'collection_no', $this->collection_no])
            ->andFilterWhere(['ilike', 'collectors', $this->collectors])
            ->andFilterWhere(['ilike', 'institute', $this->institute])
            ->andFilterWhere(['ilike', 'province', $this->province])
            ->andFilterWhere(['ilike', 'municipality', $this->municipality])
            ->andFilterWhere(['ilike', 'barangay', $this->barangay])
            ->andFilterWhere(['ilike', 'sitio_purok', $this->sitio_purok])
            ->andFilterWhere(['ilike', 'latitude', $this->latitude])
            ->andFilterWhere(['ilike', 'longitude', $this->longitude])
            ->andFilterWhere(['ilike', 'altitude', $this->altitude])
            ->andFilterWhere(['ilike', 'crop', $this->crop])
            ->andFilterWhere(['ilike', 'variety', $this->variety])
            ->andFilterWhere(['ilike', 'meaning_of_name', $this->meaning_of_name])
            ->andFilterWhere(['ilike', 'language_dialect', $this->language_dialect])
            ->andFilterWhere(['ilike', 'date_planted', $this->date_planted])
            ->andFilterWhere(['ilike', 'date_harvested', $this->date_harvested])
            ->andFilterWhere(['ilike', 'source_grower_name', $this->source_grower_name])
            ->andFilterWhere(['ilike', 'contact_info', $this->contact_info])
            ->andFilterWhere(['ilike', 'photograph_no', $this->photograph_no])
            ->andFilterWhere(['ilike', 'collecting_src', $this->collecting_src])
            ->andFilterWhere(['ilike', 'sample_type', $this->sample_type])
            ->andFilterWhere(['ilike', 'genetic_status', $this->genetic_status])
            ->andFilterWhere(['ilike', 'sampling_method', $this->sampling_method])
            ->andFilterWhere(['ilike', 'topography', $this->topography])
            ->andFilterWhere(['ilike', 'site', $this->site])
            ->andFilterWhere(['ilike', 'soil_texture', $this->soil_texture])
            ->andFilterWhere(['ilike', 'soil_color', $this->soil_color])
            ->andFilterWhere(['ilike', 'stoniness', $this->stoniness])
            ->andFilterWhere(['ilike', 'farming_cultural_practice', $this->farming_cultural_practice])
            ->andFilterWhere(['ilike', 'sowing', $this->sowing])
            ->andFilterWhere(['ilike', 'irrigation_water_src', $this->irrigation_water_src])
            ->andFilterWhere(['ilike', 'drainage', $this->drainage])
            ->andFilterWhere(['ilike', 'crop_sequence', $this->crop_sequence])
            ->andFilterWhere(['ilike', 'fertilizer_mgt_practice', $this->fertilizer_mgt_practice])
            ->andFilterWhere(['ilike', 'pest_weed_mgt_practice', $this->pest_weed_mgt_practice])
            ->andFilterWhere(['ilike', 'usage_1', $this->usage_1])
            ->andFilterWhere(['ilike', 'key_desc_of_cultivar', $this->key_desc_of_cultivar])
            ->andFilterWhere(['ilike', 'years_in_possession', $this->years_in_possession])
            ->andFilterWhere(['ilike', 'addtl_notes', $this->addtl_notes]);

        return $dataProvider;
    }
}
