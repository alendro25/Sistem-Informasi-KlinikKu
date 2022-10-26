<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan".
 *
 * @property int $id_tindakan
 * @property string $nama_tindakan
 * @property string $keterangan_tindakan
 * @property int $biaya_tindakan
 *
 * @property Order[] $orders
 */
class Tindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_tindakan', 'keterangan_tindakan', 'biaya_tindakan'], 'required'],
            [['biaya_tindakan'], 'integer'],
            [['nama_tindakan'], 'string', 'max' => 256],
            [['keterangan_tindakan'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tindakan' => 'Id Tindakan',
            'nama_tindakan' => 'Nama Tindakan',
            'keterangan_tindakan' => 'Keterangan Tindakan',
            'biaya_tindakan' => 'Biaya Tindakan',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['id_tindakan' => 'id_tindakan']);
    }
}
