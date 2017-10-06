<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sis_auth_item".
 *
 * @property string $name
 * @property integer $type
 * @property string $description
 * @property string $bizrule
 * @property string $data
 *
 * @property SisAuthAssignment[] $sisAuthAssignments
 * @property SisAuthItemChild[] $sisAuthItemChildren
 * @property SisAuthItemChild[] $sisAuthItemChildren0
 * @property SisAuthItem[] $children
 * @property SisAuthItem[] $parents
 */
class SisAuthItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sis_auth_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'type'], 'required'],
            [['type'], 'integer'],
            [['description', 'bizrule', 'data'], 'string'],
            [['name'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'type' => 'Type',
            'description' => 'Description',
            'bizrule' => 'Bizrule',
            'data' => 'Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSisAuthAssignments()
    {
        return $this->hasMany(SisAuthAssignment::className(), ['itemname' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSisAuthItemChildren()
    {
        return $this->hasMany(SisAuthItemChild::className(), ['parent' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSisAuthItemChildren0()
    {
        return $this->hasMany(SisAuthItemChild::className(), ['child' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChildren()
    {
        return $this->hasMany(SisAuthItem::className(), ['name' => 'child'])->viaTable('sis_auth_item_child', ['parent' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParents()
    {
        return $this->hasMany(SisAuthItem::className(), ['name' => 'parent'])->viaTable('sis_auth_item_child', ['child' => 'name']);
    }
}
