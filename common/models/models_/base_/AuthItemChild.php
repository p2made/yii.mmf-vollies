<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "mmf_auth_item_child".
 *
 * @property string $parent
 * @property string $child
 *
 * @property \common\models\AuthItem $parent0
 * @property \common\models\AuthItem $child0
 * @property string $aliasModel
 */
abstract class AuthItemChild extends \yii\db\ActiveRecord
{



	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'mmf_auth_item_child';
	}


	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['parent', 'child'], 'required'],
			[['parent', 'child'], 'string', 'max' => 64],
			[['parent'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\AuthItem::className(), 'targetAttribute' => ['parent' => 'name']],
			[['child'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\AuthItem::className(), 'targetAttribute' => ['child' => 'name']]
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
		return $this->hasOne(\common\models\AuthItem::className(), ['name' => 'parent']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getChild0()
	{
		return $this->hasOne(\common\models\AuthItem::className(), ['name' => 'child']);
	}




}