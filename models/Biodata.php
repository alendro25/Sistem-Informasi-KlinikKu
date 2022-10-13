<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "biodata".
 *
 * @property int $id_biodata
 * @property string $nama
 * @property string $alamat
 * @property string $usia
 */
class Biodata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'biodata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'usia', 'id_domisili'], 'required'],
            [['nama', 'alamat'], 'string', 'max' => 250],
            [['usia'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_biodata' => 'Id Biodata',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'usia' => 'Usia',
            'id_domisili' => 'Domisili',
        ];
    }

    public function getDomisili()
    {
        return $this->hasOne(Domisili::class, ['id_domisili' => 'id_domisili']); //Tabel Biodata => Tabel Domisili
    }

}
