<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sis_auth_item_child".
 *
 * @property string $parent
 * @property string $child
 *
 * @property SisAuthItem $parent0
 * @property SisAuthItem $child0
 */
class SisAuthItemChild extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sis_auth_item_child';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent', 'child'], 'required'],
            [['parent', 'child'], 'string', 'max' => 64],
            [['parent'], 'exist', 'skipOnError' => true, 'targetClass' => SisAuthItem::className(), 'targetAttribute' => ['parent' => 'name']],
            [['child'], 'exist', 'skipOnError' => true, 'targetClass' => SisAuthItem::className(), 'targetAttribute' => ['child' => 'name']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'parent' => 'Parent',
            'child' => 'Child',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent0()
    {
        return $this->hasOne(SisAuthItem::className(), ['name' => 'parent']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChild0()
    {
        return $this->hasOne(SisAuthItem::className(), ['name' => 'child']);
    }
}
