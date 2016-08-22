<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "influence_bobot".
 *
 * @property string $id
 * @property string $nilai
 * @property string $id_faktor
 *
 * @property Faktor $idFaktor
 */
class InfluenceBobot extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'influence_bobot';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nilai', 'id_faktor'], 'integer'],
            [['id_faktor'], 'required'],
            [['id_faktor'], 'exist', 'skipOnError' => true, 'targetClass' => Faktor::className(), 'targetAttribute' => ['id_faktor' => 'id']],
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
            'id_faktor' => 'Id Faktor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdFaktor()
    {
        return $this->hasOne(Faktor::className(), ['id' => 'id_faktor']);
    }
}
