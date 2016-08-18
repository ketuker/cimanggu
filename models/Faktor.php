<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "faktor".
 *
 * @property string $id
 * @property string $faktor
 *
 * @property Influence[] $influences
 * @property InfluenceBobot[] $influenceBobots
 * @property Interest[] $interests
 * @property InterestBobot[] $interestBobots
 */
class Faktor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faktor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['faktor'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'faktor' => 'Faktor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfluences()
    {
        return $this->hasMany(Influence::className(), ['id_faktor' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfluenceBobots()
    {
        return $this->hasMany(InfluenceBobot::className(), ['id_faktor' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInterests()
    {
        return $this->hasMany(Interest::className(), ['id_faktor' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInterestBobots()
    {
        return $this->hasMany(InterestBobot::className(), ['id_faktor' => 'id']);
    }
}
