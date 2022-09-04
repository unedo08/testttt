<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat_m".
 *
 * @property int $obat_id
 * @property string $nama_obat
 * @property int $stok
 * @property int $harga
 */
class ObatM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_obat', 'stok', 'harga'], 'required'],
            [['nama_obat'], 'string'],
            [['stok', 'harga'], 'default', 'value' => null],
            [['stok', 'harga'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'obat_id' => 'Obat ID',
            'nama_obat' => 'Nama Obat',
            'stok' => 'Stok',
            'harga' => 'Harga',
        ];
    }
}
