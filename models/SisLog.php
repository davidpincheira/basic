<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sis_log".
 *
 * @property integer $id
 * @property string $action
 * @property string $model
 * @property integer $model_id
 * @property string $field
 * @property string $creation_date
 * @property string $old_value
 * @property string $new_value
 * @property string $user_id
 * @property string $user_name
 * @property string $ip_address
 */
class SisLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sis_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model_id'], 'integer'],
            [['creation_date'], 'safe'],
            [['user_name', 'ip_address'], 'required'],
            [['action', 'ip_address'], 'string', 'max' => 20],
            [['model', 'field', 'user_id'], 'string', 'max' => 45],
            [['old_value', 'new_value'], 'string', 'max' => 500],
            [['user_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'action' => 'Action',
            'model' => 'Model',
            'model_id' => 'Model ID',
            'field' => 'Field',
            'creation_date' => 'Creation Date',
            'old_value' => 'Old Value',
            'new_value' => 'New Value',
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'ip_address' => 'Ip Address',
        ];
    }
}
