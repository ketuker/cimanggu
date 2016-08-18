<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "influence".
 *
 * @property string $id
 * @property string $nilai
 * @property string $bobot
 * @property string $id_faktor
 * @property string $id_stakeholder
 *
 * @property Faktor $idFaktor
 * @property Stakeholder $idStakeholder
 */
class Influence extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'influence';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nilai', 'id_faktor', 'id_stakeholder'], 'integer'],
            [['bobot'], 'number'],
            [['id_faktor', 'id_stakeholder'], 'required'],
            [['id_faktor'], 'unique'],
            [['id_stakeholder'], 'unique'],
            [['id_faktor'], 'exist', 'skipOnError' => true, 'targetClass' => Faktor::className(), 'targetAttribute' => ['id_faktor' => 'id']],
            [['id_stakeholder'], 'exist', 'skipOnError' => true, 'targetClass' => Stakeholder::className(), 'targetAttribute' => ['id_stakeholder' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nilai' => 'Nilai',
            'bobot' => 'Bobot',
            'id_faktor' => 'Faktor',
            'id_stakeholder' => 'Stakeholder',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdFaktor()
    {
        return $this->hasOne(Faktor::className(), ['id' => 'id_faktor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdStakeholder()
    {
        return $this->hasOne(Stakeholder::className(), ['id' => 'id_stakeholder']);
    }
}
