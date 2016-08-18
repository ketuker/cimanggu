<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stakeholder".
 *
 * @property string $id
 * @property string $nama
 * @property string $instansi
 * @property string $grup
 *
 * @property Hasil $hasil
 * @property Influence $influence
 * @property InfluenceBobot $influenceBobot
 * @property Interest $interest
 * @property InterestBobot $interestBobot
 */
class Stakeholder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stakeholder';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'instansi', 'grup'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'instansi' => 'Instansi',
            'grup' => 'Grup',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHasil()
    {
        return $this->hasOne(Hasil::className(), ['id_stakeholder' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfluence()
    {
        return $this->hasOne(Influence::className(), ['id_stakeholder' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfluenceBobot()
    {
        return $this->hasOne(InfluenceBobot::className(), ['id_stakeholder' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInterest()
    {
        return $this->hasOne(Interest::className(), ['id_stakeholder' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInterestBobot()
    {
        return $this->hasOne(InterestBobot::className(), ['id_stakeholder' => 'id']);
    }
}
