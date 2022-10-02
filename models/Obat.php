<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id_obat
 * @property string $nama_obat
 * @property string $keterangan_obat
 * @property string $kategori_obat
 * @property string $exp_obat
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_obat', 'keterangan_obat', 'kategori_obat', 'exp_obat'], 'required'],
            [['exp_obat'], 'safe'],
            [['nama_obat', 'keterangan_obat', 'kategori_obat'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_obat' => 'Id Obat',
            'nama_obat' => 'Nama Obat',
            'keterangan_obat' => 'Keterangan Obat',
            'kategori_obat' => 'Kategori Obat',
            'exp_obat' => 'Exp Obat',
        ];
    }
}
