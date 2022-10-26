<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id_order
 * @property int $id_pegawai
 * @property int $id_biodata
 * @property int $id_obat
 *
 * @property Biodata $biodata
 * @property Obat $obat
 * @property Pegawai $pegawai
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pegawai', 'id_biodata', 'id_obat'], 'required'],
            [['id_pegawai', 'id_biodata', 'id_obat', 'id_tindakan'], 'integer'],
            [['id_biodata'], 'exist', 'skipOnError' => true, 'targetClass' => Biodata::className(), 'targetAttribute' => ['id_biodata' => 'id_biodata']],
            [['id_obat'], 'exist', 'skipOnError' => true, 'targetClass' => Obat::className(), 'targetAttribute' => ['id_obat' => 'id_obat']],
            [['id_pegawai'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['id_pegawai' => 'id_pegawai']],
            [['id_tindakan'], 'exist', 'skipOnError' => true, 'targetClass' => Tindakan::className(), 'targetAttribute' => ['id_tindakan' => 'id_tindakan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_order' => 'Id Order',
            'id_pegawai' => 'Id Pegawai',
            'id_biodata' => 'Id Biodata',
            'id_obat' => 'Id Obat',
        ];
    }

    /**
     * Gets query for [[Biodata]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBiodata()
    {
        return $this->hasOne(Biodata::className(), ['id_biodata' => 'id_biodata']);
    }

    /**
     * Gets query for [[Obat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObat()
    {
        return $this->hasOne(Obat::className(), ['id_obat' => 'id_obat']);
    }

    /**
     * Gets query for [[Pegawai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(Pegawai::className(), ['id_pegawai' => 'id_pegawai']);
    }

    /**
     * Gets query for [[Personal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonal()
    {
        return $this->hasOne(Personal::className(), ['id_personal' => 'id_personal']);
    }

    /**
     * Gets query for [[Tindakan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTindakan()
    {
        return $this->hasOne(Tindakan::className(), ['id_tindakan' => 'id_tindakan']);
    }
}
