<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phone".
 *
 * @property integer $id
 * @property integer $No
 * @property integer $contact_id
 * @property string $created_at
 * @property string $Type
 */
class Phone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phone';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['No', 'contact_id'], 'required'],
            [['No', 'contact_id'], 'integer'],
            [['created_at'], 'safe'],
            [['Type', ''], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'No' => 'No',
            'contact_id' => 'Contact ID',
            'created_at' => 'Created At',
            'Type' => 'Type',
        ];
    }
}
