<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ordinat".
 *
 * @property integer $id
 * @property string $nama
 * @property string $interest
 * @property string $influence
 */
class Ordinat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ordinat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nama', 'interest', 'influence'], 'required'],
            [['id'], 'integer'],
            [['interest', 'influence'], 'number'],
            [['nama'], 'string', 'max' => 30],
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
            'interest' => 'Interest',
            'influence' => 'Influence',
        ];
    }
}
