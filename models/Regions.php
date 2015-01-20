<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "regions".
 *
 * @property string $id
 * @property string $iso
 * @property string $iso3
 * @property string $fips
 * @property string $country
 * @property string $continent
 * @property string $currency_code
 * @property string $currency_name
 * @property string $phone_prefix
 * @property string $postal_code
 * @property string $languages
 * @property string $geonameid
 *
 * @property Subregions[] $subregions
 */
class Regions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'regions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['iso', 'iso3', 'fips', 'country', 'continent', 'currency_code', 'currency_name', 'phone_prefix', 'postal_code', 'languages', 'geonameid'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'iso' => 'Iso',
            'iso3' => 'Iso3',
            'fips' => 'Fips',
            'country' => 'Country',
            'continent' => 'Continent',
            'currency_code' => 'Currency Code',
            'currency_name' => 'Currency Name',
            'phone_prefix' => 'Phone Prefix',
            'postal_code' => 'Postal Code',
            'languages' => 'Languages',
            'geonameid' => 'Geonameid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubregions()
    {
        return $this->hasMany(Subregions::className(), ['region_id' => 'id']);
    }
}
