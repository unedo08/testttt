<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien_m".
 *
 * @property int $pasien_id
 * @property string $nama_pasien
 * @property string $nik
 * @property string $alamat
 * @property string $no_rm
 * @property string $no_hp
 * @property string $pekerjaan
 */
class PasienM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'nik', 'alamat', 'no_rm', 'no_hp', 'pekerjaan'], 'required'],
            [['nama_pasien', 'alamat', 'no_rm', 'no_hp', 'pekerjaan'], 'string'],
            [['nik'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pasien_id' => 'Pasien ID',
            'nama_pasien' => 'Nama Pasien',
            'nik' => 'Nik',
            'alamat' => 'Alamat',
            'no_rm' => 'No Rm',
            'no_hp' => 'No Hp',
            'pekerjaan' => 'Pekerjaan',
        ];
    }
}
