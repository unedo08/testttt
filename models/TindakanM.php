<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan_m".
 *
 * @property int $tindakan_id
 * @property string $nama_tindakan
 */
class TindakanM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_tindakan'], 'required'],
            [['nama_tindakan'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tindakan_id' => 'Tindakan ID',
            'nama_tindakan' => 'Nama Tindakan',
        ];
    }
}
