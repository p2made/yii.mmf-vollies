<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "mmf_auth_item".
 *
 * @property string $name
 * @property integer $type
 * @property string $description
 * @property string $rule_name
 * @property resource $data
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property \common\models\AuthAssignment[] $authAssignments
 * @property \common\models\AuthRule $ruleName
 * @property \common\models\AuthItemChild[] $authItemChildren
 * @property \common\models\AuthItemChild[] $authItemChildren0
 * @property \common\models\AuthItem[] $children
 * @property \common\models\AuthItem[] $parents
 * @property string $aliasModel
 */
abstract class AuthItem extends \yii\db\ActiveRecord
{



	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'mmf_auth_item';
	}


	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
			[
				'class' => BlameableBehavior::className(),
			],
			[
				'class' => TimestampBehavior::className(),
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['name', 'type'], 'required'],
			[['type'], 'integer'],
			[['description', 'data'], 'string'],
			[['name', 'rule_name'], 'string', 'max' => 64],
			[['rule_name'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\AuthRule::className(), 'targetAttribute' => ['rule_name' => 'name']]
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
			'rule_name' => 'Rule Name',
			'data' => 'Data',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAuthAssignments()
	{
		return $this->hasMany(\common\models\AuthAssignment::className(), ['item_name' => 'name']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getRuleName()
	{
		return $this->hasOne(\common\models\AuthRule::className(), ['name' => 'rule_name']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAuthItemChildren()
	{
		return $this->hasMany(\common\models\AuthItemChild::className(), ['parent' => 'name']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAuthItemChildren0()
	{
		return $this->hasMany(\common\models\AuthItemChild::className(), ['child' => 'name']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getChildren()
	{
		return $this->hasMany(\common\models\AuthItem::className(), ['name' => 'child'])->viaTable('mmf_auth_item_child', ['parent' => 'name']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getParents()
	{
		return $this->hasMany(\common\models\AuthItem::className(), ['name' => 'parent'])->viaTable('mmf_auth_item_child', ['child' => 'name']);
	}




}