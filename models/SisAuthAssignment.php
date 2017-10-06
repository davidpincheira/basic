<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sis_auth_assignment".
 *
 * @property string $itemname
 * @property string $userid
 * @property string $bizrule
 * @property string $data
 *
 * @property SisAuthItem $itemname0
 */
class SisAuthAssignment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sis_auth_assignment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['itemname', 'userid'], 'required'],
            [['bizrule', 'data'], 'string'],
            [['itemname', 'userid'], 'string', 'max' => 64],
            [['itemname'], 'exist', 'skipOnError' => true, 'targetClass' => SisAuthItem::className(), 'targetAttribute' => ['itemname' => 'name']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'itemname' => 'Itemname',
            'userid' => 'Userid',
            'bizrule' => 'Bizrule',
            'data' => 'Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemname0()
    {
        return $this->hasOne(SisAuthItem::className(), ['name' => 'itemname']);
    }
}
