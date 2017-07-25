<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "mmf_user".
 *
 * @property integer $id
 * @property string $email
 * @property string $password_hash
 * @property string $auth_key
 * @property integer $confirmed_at
 * @property string $unconfirmed_email
 * @property string $registration_ip
 * @property integer $flags
 * @property integer $last_login_at
 * @property integer $blocked_at
 * @property string $username
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property \common\models\Profile $profile
 * @property \common\models\SocialAccount[] $socialAccounts
 * @property \common\models\Token[] $tokens
 * @property string $aliasModel
 */
abstract class User extends \yii\db\ActiveRecord
{



	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'mmf_user';
	}


	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
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
			[['email', 'password_hash', 'auth_key', 'username'], 'required'],
			[['confirmed_at', 'flags', 'last_login_at', 'blocked_at'], 'integer'],
			[['email', 'unconfirmed_email'], 'string', 'max' => 255],
			[['password_hash', 'username'], 'string', 'max' => 60],
			[['auth_key'], 'string', 'max' => 32],
			[['registration_ip'], 'string', 'max' => 45],
			[['username'], 'unique'],
			[['email'], 'unique']
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'email' => 'Email',
			'password_hash' => 'Password Hash',
			'auth_key' => 'Auth Key',
			'confirmed_at' => 'Confirmed At',
			'unconfirmed_email' => 'Unconfirmed Email',
			'registration_ip' => 'Registration Ip',
			'flags' => 'Flags',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'last_login_at' => 'Last Login At',
			'blocked_at' => 'Blocked At',
			'username' => 'Username',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProfile()
	{
		return $this->hasOne(\common\models\Profile::className(), ['user_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getSocialAccounts()
	{
		return $this->hasMany(\common\models\SocialAccount::className(), ['user_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTokens()
	{
		return $this->hasMany(\common\models\Token::className(), ['user_id' => 'id']);
	}



	/**
	 * @inheritdoc
	 * @return \common\models\UserQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new \common\models\UserQuery(get_called_class());
	}


}
