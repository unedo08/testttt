<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ruangan_m".
 *
 * @property int $ruangan_id
 * @property string $nama_ruangan
 * @property int $jumlah_kamar
 */
class RuanganM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ruangan_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_ruangan', 'jumlah_kamar'], 'required'],
            [['nama_ruangan'], 'string'],
            [['jumlah_kamar'], 'default', 'value' => null],
            [['jumlah_kamar'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ruangan_id' => 'Ruangan ID',
            'nama_ruangan' => 'Nama Ruangan',
            'jumlah_kamar' => 'Jumlah Kamar',
        ];
    }
}
