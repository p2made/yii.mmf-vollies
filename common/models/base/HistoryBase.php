<?php

namespace common\models\base;

use Yii;
use common\models\Profile;

/**
 * This is the model class for table "{{%history}}".
*
    * @property integer $id
    * @property integer $profile_id
    * @property string $givenName
    * @property string $familyName
    * @property string $preferredName
    * @property string $email
    * @property string $phone1
    * @property string $phone2
    * @property string $address1
    * @property string $address2
    * @property string $locality
    * @property string $state
    * @property string $postcode
    * @property string $country
    * @property string $emergencyContact
    * @property string $emergencyPhone1
    * @property string $emergencyPhone2
    * @property integer $rsa
    * @property integer $dl_c
    * @property integer $dl_h
    * @property integer $cse
    * @property integer $ohs
    * @property integer $vol
    * @property integer $mmfVol
    * @property integer $mmfAtt
    * @property integer $returned
    * @property string $preferredJobs
    * @property string $availability
    * @property string $commentsInfo
    * @property string $discovery
    * @property integer $id_orig
    * @property string $ip
    * @property string $key_orig
    * @property string $created_orig
    * @property string $updated_orig
    * @property string $created_at
    * @property integer $created_by
    * @property string $updated_at
    * @property integer $updated_by
    *
            * @property Profile $profile
    */
class HistoryBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return '{{%history}}';
}

/**
* @inheritdoc
*/
public function rules()
{
        return [
            [['profile_id', 'rsa', 'dl_c', 'dl_h', 'cse', 'ohs', 'vol', 'mmfVol', 'mmfAtt', 'returned', 'id_orig', 'created_by', 'updated_by'], 'integer'],
            [['givenName', 'familyName', 'email', 'locality', 'emergencyContact', 'emergencyPhone1', 'id_orig'], 'required'],
            [['preferredJobs', 'availability', 'commentsInfo', 'discovery'], 'string'],
            [['created_orig', 'updated_orig', 'created_at', 'updated_at'], 'safe'],
            [['givenName', 'familyName', 'preferredName', 'country'], 'string', 'max' => 32],
            [['email', 'locality', 'emergencyContact'], 'string', 'max' => 64],
            [['phone1', 'phone2', 'emergencyPhone1', 'emergencyPhone2'], 'string', 'max' => 24],
            [['address1', 'address2'], 'string', 'max' => 255],
            [['state', 'ip'], 'string', 'max' => 16],
            [['postcode'], 'string', 'max' => 12],
            [['key_orig'], 'string', 'max' => 8],
            [['profile_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['profile_id' => 'id']],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'id' => 'ID',
    'profile_id' => 'Profile ID',
    'givenName' => 'Given Name',
    'familyName' => 'Family Name',
    'preferredName' => 'Preferred Name',
    'email' => 'Email',
    'phone1' => 'Phone1',
    'phone2' => 'Phone2',
    'address1' => 'Address1',
    'address2' => 'Address2',
    'locality' => 'Locality',
    'state' => 'State',
    'postcode' => 'Postcode',
    'country' => 'Country',
    'emergencyContact' => 'Emergency Contact',
    'emergencyPhone1' => 'Emergency Phone1',
    'emergencyPhone2' => 'Emergency Phone2',
    'rsa' => 'Rsa',
    'dl_c' => 'Dl C',
    'dl_h' => 'Dl H',
    'cse' => 'Cse',
    'ohs' => 'Ohs',
    'vol' => 'Vol',
    'mmfVol' => 'Mmf Vol',
    'mmfAtt' => 'Mmf Att',
    'returned' => 'Returned',
    'preferredJobs' => 'Preferred Jobs',
    'availability' => 'Availability',
    'commentsInfo' => 'Comments Info',
    'discovery' => 'Discovery',
    'id_orig' => 'Id Orig',
    'ip' => 'Ip',
    'key_orig' => 'Key Orig',
    'created_orig' => 'Created Orig',
    'updated_orig' => 'Updated Orig',
    'created_at' => 'Created At',
    'created_by' => 'Created By',
    'updated_at' => 'Updated At',
    'updated_by' => 'Updated By',
];
}

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getProfile()
    {
    return $this->hasOne(Profile::className(), ['id' => 'profile_id']);
    }

    /**
     * @inheritdoc
     * @return HistoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HistoryQuery(get_called_class());
}
}