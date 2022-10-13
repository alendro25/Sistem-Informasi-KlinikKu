<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "domisili".
 *
 * @property int $id_domisili
 * @property string $nama_domisili
 */
class Domisili extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'domisili';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_domisili'], 'required'],
            [['nama_domisili'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_domisili' => 'Id Domisili',
            'nama_domisili' => 'Domisili',
        ];
    }
}
