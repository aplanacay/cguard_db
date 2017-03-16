<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cguard_passport".
 *
 * @property integer $cguard_id
 * @property string $region_no
 * @property string $region_name
 * @property string $collection_no
 * @property string $collectors
 * @property string $institute
 * @property string $date_collected
 * @property string $province
 * @property string $municipality
 * @property string $barangay
 * @property string $sitio_purok
 * @property string $latitude
 * @property string $longitude
 * @property string $altitude
 * @property string $crop
 * @property string $variety
 * @property string $meaning_of_name
 * @property string $language_dialect
 * @property string $date_planted
 * @property string $date_harvested
 * @property string $source_grower_name
 * @property string $contact_info
 * @property string $photograph_no
 * @property string $collecting_src
 * @property string $sample_type
 * @property string $genetic_status
 * @property string $sampling_method
 * @property string $topography
 * @property string $site
 * @property string $soil_texture
 * @property string $soil_color
 * @property string $stoniness
 * @property string $farming_cultural_practice
 * @property string $sowing
 * @property string $irrigation_water_src
 * @property string $drainage
 * @property string $crop_sequence
 * @property string $fertilizer_mgt_practice
 * @property string $pest_weed_mgt_practice
 * @property string $usage_1
 * @property string $key_desc_of_cultivar
 * @property string $years_in_possession
 * @property string $addtl_notes
 */
class CguardPassport extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cguard_passport';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_collected'], 'safe'],
            [['region_no'], 'string', 'max' => 5],
            [['region_name', 'collection_no', 'institute', 'province', 'municipality', 'barangay', 'sitio_purok', 'crop', 'variety', 'language_dialect', 'collecting_src', 'sample_type', 'genetic_status', 'sampling_method', 'topography', 'site', 'soil_texture', 'soil_color', 'stoniness', 'sowing', 'drainage', 'years_in_possession'], 'string', 'max' => 30],
            [['collectors', 'meaning_of_name', 'source_grower_name', 'farming_cultural_practice', 'irrigation_water_src', 'crop_sequence'], 'string', 'max' => 100],
            [['latitude', 'longitude', 'altitude', 'date_planted', 'date_harvested', 'photograph_no'], 'string', 'max' => 20],
            [['contact_info'], 'string', 'max' => 50],
            [['fertilizer_mgt_practice', 'pest_weed_mgt_practice', 'usage_1', 'key_desc_of_cultivar', 'addtl_notes'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cguard_id' => 'Cguard ID',
            'region_no' => 'Region No',
            'region_name' => 'Region Name',
            'collection_no' => 'Collection No',
            'collectors' => 'Collectors',
            'institute' => 'Institute',
            'date_collected' => 'Date Collected',
            'province' => 'Province',
            'municipality' => 'Municipality',
            'barangay' => 'Barangay',
            'sitio_purok' => 'Sitio Purok',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'altitude' => 'Altitude',
            'crop' => 'Crop',
            'variety' => 'Variety',
            'meaning_of_name' => 'Meaning Of Name',
            'language_dialect' => 'Language or Dialect',
            'date_planted' => 'Date Planted',
            'date_harvested' => 'Date Harvested',
            'source_grower_name' => 'Source or Grower Name',
            'contact_info' => 'Contact Info',
            'photograph_no' => 'Photograph No',
            'collecting_src' => 'Collecting Source',
            'sample_type' => 'Sample Type',
            'genetic_status' => 'Genetic Status',
            'sampling_method' => 'Sampling Method',
            'topography' => 'Topography',
            'site' => 'Site',
            'soil_texture' => 'Soil Texture',
            'soil_color' => 'Soil Color',
            'stoniness' => 'Stoniness',
            'farming_cultural_practice' => 'Farming Cultural Practice',
            'sowing' => 'Sowing',
            'irrigation_water_src' => 'Irrigation Water Source',
            'drainage' => 'Drainage',
            'crop_sequence' => 'Crop Sequence',
            'fertilizer_mgt_practice' => 'Fertilizer Mgt Practice',
            'pest_weed_mgt_practice' => 'Pest and Weed Mgt Practice',
            'usage_1' => 'Usage',
            'key_desc_of_cultivar' => 'Key Description Of Cultivar',
            'years_in_possession' => 'Years In Possession',
            'addtl_notes' => 'Additional Notes',
        ];
    }
}
