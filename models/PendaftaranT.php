<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pendaftaran_t".
 *
 * @property int $pendaftaran_id
 * @property string $nama_pasien
 * @property string $nik
 * @property string $no_rm
 * @property string $tgl_pendaftaran
 * @property string $tindakan
 * @property string $obat
 * @property int $harga
 * @property int $total
 */
class PendaftaranT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendaftaran_t';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'nik', 'no_rm', 'tgl_pendaftaran', 'tindakan', 'obat', 'harga', 'total'], 'required'],
            [['nama_pasien', 'no_rm', 'tindakan', 'obat'], 'string'],
            [['tgl_pendaftaran'], 'safe'],
            [['harga', 'total'], 'default', 'value' => null],
            [['harga', 'total'], 'integer'],
            [['nik'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pendaftaran_id' => 'Pendaftaran ID',
            'nama_pasien' => 'Nama Pasien',
            'nik' => 'Nik',
            'no_rm' => 'No Rm',
            'tgl_pendaftaran' => 'Tgl Pendaftaran',
            'tindakan' => 'Tindakan',
            'obat' => 'Obat',
            'harga' => 'Harga',
            'total' => 'Total',
        ];
    }
}
