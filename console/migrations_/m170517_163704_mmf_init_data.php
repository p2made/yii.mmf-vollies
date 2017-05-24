<?php

class m170517_163704_mmf_init_data extends \yii\db\Migration
{
	public function up()
	{
		$this->addUsersData();
		$this->addCommitmentsData();
		$this->addHistoryData();
	}

	public function down()
	{
		return true;
	}

	protected function addUsersData()
	{
		$security = Yii::$app->security;

		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'annmorris_oz@yahoo.com', 'username' => 'annmorris_oz',
			'password' => $security->generatePasswordHash('nebgyrXO9UEyLa1N'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 7, 'givenName' => 'Ann', 'familyName' => 'Morris', 'preferredName' => 'Ann',
			'phone1' => '0409 629 602', 'phone2' => null,
			'address1' => 'PO Box 257', 'address2' => null,
			'locality' => 'Eudlo', 'state' => 'Qld', 'postcode' => '4554', 'country' => 'Australia',
			'emergencyContact' => 'Bill Ross', 'emergencyPhone1' => '0438 154 144', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'annmorris_oz@yahoo.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'benjiridoo@yahoo.ca', 'username' => 'benjiridoo',
			'password' => $security->generatePasswordHash('UkAGlF1e09j9wjSP'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 8, 'givenName' => 'Ben', 'familyName' => 'Davison', 'preferredName' => 'Bennybowen',
			'phone1' => '0432 185 760', 'phone2' => null,
			'address1' => '69 Remington Shute Rd', 'address2' => null,
			'locality' => 'Montville', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Jon', 'emergencyPhone1' => '0431 203 675', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'benjiridoo@yahoo.ca',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'fringedwellers@live.com', 'username' => 'fringedwellers',
			'password' => $security->generatePasswordHash('iqSg2dfIRbIuqbnI'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 9, 'givenName' => 'Deborah', 'familyName' => 'Watson', 'preferredName' => 'Arabella',
			'phone1' => '0481 541 504', 'phone2' => null,
			'address1' => '27 Bergin St', 'address2' => null,
			'locality' => 'Booval', 'state' => 'Qld', 'postcode' => '4304', 'country' => 'Australia',
			'emergencyContact' => 'Margaret', 'emergencyPhone1' => '07 3282 9148', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'fringedwellers@live.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ireallylovethose@gmail.com', 'username' => 'ireallylovethose',
			'password' => $security->generatePasswordHash('bcP2B09yxlVkzVrl'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 10, 'givenName' => 'Natalie', 'familyName' => 'Brown', 'preferredName' => 'Natty',
			'phone1' => '0467 958 057', 'phone2' => null,
			'address1' => '1/24 Cedar Grove Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Eileen Brown', 'emergencyPhone1' => '0439 413 480', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'ireallylovethose@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'christopher.gwin@bigpond.com', 'username' => 'christopher.gwin',
			'password' => $security->generatePasswordHash('gJAgfT3sgD6y26uf'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 11, 'givenName' => 'Christopher', 'familyName' => 'Gwin', 'preferredName' => 'Chris',
			'phone1' => '07 5494 4743', 'phone2' => null,
			'address1' => 'Lot 46 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ela Linwood', 'emergencyPhone1' => '07 5499 9685', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'christopher.gwin@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'susan.ferrar7@bigpond.com', 'username' => 'susan.ferrar7',
			'password' => $security->generatePasswordHash('zGqbRQZ6KGtAsZ1X'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 12, 'givenName' => 'Susan', 'familyName' => 'Ferrar', 'preferredName' => 'Susan',
			'phone1' => '0419 776 088', 'phone2' => null,
			'address1' => '2687 Gympie Rd', 'address2' => null,
			'locality' => 'Beerwah', 'state' => 'Qld', 'postcode' => '4519', 'country' => 'Australia',
			'emergencyContact' => 'Lee Nash', 'emergencyPhone1' => '07 4979 4106', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'susan.ferrar7@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'dominic@numbernine.com.au', 'username' => 'dominic',
			'password' => $security->generatePasswordHash('FztTOnTQY4KQwpql'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 13, 'givenName' => 'Dominic', 'familyName' => 'Posner', 'preferredName' => 'Dominic',
			'phone1' => '0419 439 034', 'phone2' => '07 5499 9135',
			'address1' => 'PO Box 1250', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tanya Posner', 'emergencyPhone1' => '0438 255 077', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'dominic@numbernine.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kenmain1@optusnet.com.au', 'username' => 'kenmain1',
			'password' => $security->generatePasswordHash('CoX9D4n1ALMSmbP7'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 14, 'givenName' => 'Kenneth', 'familyName' => 'Main', 'preferredName' => 'Ken',
			'phone1' => '0429 345 617', 'phone2' => '07 5326 3086',
			'address1' => '33 Palm Dr', 'address2' => null,
			'locality' => 'Mooloolaba', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Carole', 'emergencyPhone1' => '0409 585 166', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'kenmain1@optusnet.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suzannec7@optusnet.com.au', 'username' => 'suzannec7',
			'password' => $security->generatePasswordHash('zVUgeqyQg0gxK0aQ'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 15, 'givenName' => 'Suzanne', 'familyName' => 'Chumbley', 'preferredName' => 'Suzanne',
			'phone1' => '0428 745 498', 'phone2' => '07 5309 5710',
			'address1' => '2/11 Suller St', 'address2' => null,
			'locality' => 'Caloundra', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Sam Dougall', 'emergencyPhone1' => '0408 671 583', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'suzannec7@optusnet.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'gabyluft@hotmail.com', 'username' => 'gabyluft',
			'password' => $security->generatePasswordHash('5nGyGeB1GR7GvJl1'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 16, 'givenName' => 'Gabrielle', 'familyName' => 'Luft', 'preferredName' => 'Gaby',
			'phone1' => '0434 039 452', 'phone2' => null,
			'address1' => '21 Tamarind St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Koa Wilmott', 'emergencyPhone1' => '0427 608 848', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'gabyluft@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'gabriel.monson@gmail.com', 'username' => 'gabriel.monson',
			'password' => $security->generatePasswordHash('8XJkvDiKuVcXZMBc'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 17, 'givenName' => 'Gabriel', 'familyName' => 'Monson', 'preferredName' => 'Gabe',
			'phone1' => '0477 008 518', 'phone2' => null,
			'address1' => 'Dicky Beach Park', 'address2' => null,
			'locality' => 'Dicky Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'gabriel.monson@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'allyson.williams007@gmail.com', 'username' => 'allyson.williams007',
			'password' => $security->generatePasswordHash('d6ZZaYx51iEMNZOD'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 18, 'givenName' => 'Allyson', 'familyName' => 'Williams', 'preferredName' => 'Allyson',
			'phone1' => '0428 942 224', 'phone2' => null,
			'address1' => '45 Mountain View Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Peter Thompson', 'emergencyPhone1' => '0429 061 444', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'allyson.williams007@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'tanya@numbernine.com.au', 'username' => 'tanya',
			'password' => $security->generatePasswordHash('q94UJkwIwpjQkIER'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 19, 'givenName' => 'Cvetanka', 'familyName' => 'Posner', 'preferredName' => 'Tanya',
			'phone1' => '0438 255 077', 'phone2' => '07 5499 9135',
			'address1' => '51 Murer Dr', 'address2' => null,
			'locality' => 'North Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Dominic Posner', 'emergencyPhone1' => '0419 439 034', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'tanya@numbernine.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'debrataylor@me.com', 'username' => 'debrataylor',
			'password' => $security->generatePasswordHash('Hzon34RGeowg56i8'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 20, 'givenName' => 'Debra', 'familyName' => 'Taylor', 'preferredName' => 'Debbie',
			'phone1' => '', 'phone2' => null,
			'address1' => '19 Oxenham Lane', 'address2' => null,
			'locality' => 'Reesville', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Philtaylor', 'emergencyPhone1' => '0427 636 720', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'debrataylor@me.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jacqui@studiohorizon.com', 'username' => 'jacqui',
			'password' => $security->generatePasswordHash('eaTSVARTSPYGbI6J'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 21, 'givenName' => 'Jacqueline', 'familyName' => 'O\'Connor', 'preferredName' => 'Jacqui',
			'phone1' => '0409 059 131', 'phone2' => '07 5445 7916',
			'address1' => '188 Flaxton Mill Rd', 'address2' => null,
			'locality' => 'Flaxton', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Lesley Campbell', 'emergencyPhone1' => '0432 507 228', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jacqui@studiohorizon.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lotussseed@gmail.com', 'username' => 'lotussseed',
			'password' => $security->generatePasswordHash('JLPmktaaHAd32I3t'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 22, 'givenName' => 'Michaela Rose', 'familyName' => 'Walker', 'preferredName' => 'Mikayla',
			'phone1' => '0468 326 962', 'phone2' => '07 5641 4624',
			'address1' => '776 Browns Creek Rd', 'address2' => null,
			'locality' => 'Eerwah Vale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Peter Walker', 'emergencyPhone1' => '0458 487 865', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'lotussseed@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suz_mcevoy@hotmail.com', 'username' => 'suz_mcevoy',
			'password' => $security->generatePasswordHash('UzOHvnm9sbBfq7rW'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 23, 'givenName' => 'Suzanne', 'familyName' => 'L', 'preferredName' => 'Suzanne',
			'phone1' => '0414 762 517', 'phone2' => '07 5445 7514',
			'address1' => '20 Nimbus Dr', 'address2' => null,
			'locality' => 'Flaxton', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Meagan & Michael McEvoy', 'emergencyPhone1' => '07 5445 7514', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'suz_mcevoy@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'christopher.marsh@bigpond.com', 'username' => 'christopher.marsh',
			'password' => $security->generatePasswordHash('zRQOJPv0KXeH871i'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 24, 'givenName' => 'Chris', 'familyName' => 'Marsh', 'preferredName' => 'Chris',
			'phone1' => '0400 029 406', 'phone2' => null,
			'address1' => '6 Downward Pl', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => 'Petrina Daniel', 'emergencyPhone1' => '07 4574 6090', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'christopher.marsh@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'shezoffice@gmail.com', 'username' => 'shezoffice',
			'password' => $security->generatePasswordHash('wuotp4DbfqlXmrif'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 25, 'givenName' => 'Sheryll', 'familyName' => 'Wright', 'preferredName' => 'Shez',
			'phone1' => '0407 964 948', 'phone2' => null,
			'address1' => '407 Cedar Creek Rd', 'address2' => null,
			'locality' => 'Cedar Creek', 'state' => 'Qld', 'postcode' => '4520', 'country' => 'Australia',
			'emergencyContact' => 'Laurie Kelly', 'emergencyPhone1' => '0414 671 990', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'shezoffice@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'marie.nicholette@gmail.com', 'username' => 'marie.nicholette',
			'password' => $security->generatePasswordHash('ZkiPXfTTy8aeRFWs'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 26, 'givenName' => 'Marie', 'familyName' => 'Blanch', 'preferredName' => 'Marie',
			'phone1' => '07 5435 2130', 'phone2' => null,
			'address1' => '3 Jabiru Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Deborah Yffer', 'emergencyPhone1' => '0411 389 727', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'marie.nicholette@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'chanteuse@xancorp.com.au', 'username' => 'chanteuse',
			'password' => $security->generatePasswordHash('wdrDuy3p6KolZ5bY'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 27, 'givenName' => 'Kelli', 'familyName' => 'Dendle', 'preferredName' => 'Kelli',
			'phone1' => '0488 952 722', 'phone2' => '07 5435 2939',
			'address1' => 'PO Box 867', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Greg', 'emergencyPhone1' => '07 5435 2939', 'emergencyPhone2' => '0418 127 342',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'chanteuse@xancorp.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'clayton@claytonstorey.com', 'username' => 'clayton',
			'password' => $security->generatePasswordHash('tsChYr6ybqjkSu6G'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 28, 'givenName' => 'Clayton', 'familyName' => 'Storey', 'preferredName' => 'Clayton',
			'phone1' => '0497 564 064', 'phone2' => '07 5499 9161',
			'address1' => '34 Bunya St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tika', 'emergencyPhone1' => '0481 546 328', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'clayton@claytonstorey.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'cardieboydell@bigpond.com', 'username' => 'cardieboydell',
			'password' => $security->generatePasswordHash('bmkC9z58pOYWNmlL'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 29, 'givenName' => 'Caroline', 'familyName' => 'Boydell', 'preferredName' => 'Cardie',
			'phone1' => '0400 101 797', 'phone2' => null,
			'address1' => '100 Kings Lane', 'address2' => null,
			'locality' => 'Reesville', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Pete Davies', 'emergencyPhone1' => '0457 085 198', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'cardieboydell@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => '4peacenlove@gmail.com', 'username' => '4peacenlove',
			'password' => $security->generatePasswordHash('A3zTwsakzBlXhl95'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 30, 'givenName' => 'Sonia', 'familyName' => 'Russell', 'preferredName' => 'Sonia',
			'phone1' => '0448 606 591', 'phone2' => null,
			'address1' => '52 Park Rd', 'address2' => null,
			'locality' => 'Nambour', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => '4peacenlove@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'marleyfrance1707@gmail.com', 'username' => 'marleyfrance1707',
			'password' => $security->generatePasswordHash('QGvCyeFDOnCx5K1g'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 31, 'givenName' => 'Valery', 'familyName' => 'France', 'preferredName' => 'Val',
			'phone1' => '0419 599 042', 'phone2' => null,
			'address1' => 'Lot 8 349 Balmoral Rd', 'address2' => null,
			'locality' => 'Montville', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Barbara Jones', 'emergencyPhone1' => '0439 660 458', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'marleyfrance1707@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'terrybishop42@gmail.com', 'username' => 'terrybishop42',
			'password' => $security->generatePasswordHash('a0r4MOpDCIizMHK3'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 32, 'givenName' => 'Terrence Michael', 'familyName' => 'Bishop', 'preferredName' => 'Terrence',
			'phone1' => '0409 262 858', 'phone2' => null,
			'address1' => '42 Brooks Rd', 'address2' => null,
			'locality' => 'Balmoral Ridge', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Arisa Inlakesh', 'emergencyPhone1' => '0413 461 178', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'terrybishop42@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'cherylvivian@gmail.com', 'username' => 'cherylvivian',
			'password' => $security->generatePasswordHash('0223bGgTLG2CVCFL'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 33, 'givenName' => 'Cheryl', 'familyName' => 'Vivian', 'preferredName' => 'Cheryl',
			'phone1' => '0400 551 919', 'phone2' => null,
			'address1' => '4/29 Russell St', 'address2' => null,
			'locality' => 'South Brisbane', 'state' => 'Qld', 'postcode' => '4101', 'country' => 'Australia',
			'emergencyContact' => 'Dan Raymond', 'emergencyPhone1' => '0400 551 920', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'cherylvivian@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'juliapeddie@icloud.com', 'username' => 'juliapeddie',
			'password' => $security->generatePasswordHash('v9QrCLkoMejwBFfu'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 34, 'givenName' => 'Julia', 'familyName' => 'Peddie', 'preferredName' => 'Julia',
			'phone1' => '0405 331 584', 'phone2' => null,
			'address1' => '35 Aquarius St', 'address2' => null,
			'locality' => 'North Lakes', 'state' => 'Qld', 'postcode' => '4509', 'country' => 'Australia',
			'emergencyContact' => 'Liz Peddie', 'emergencyPhone1' => '0429 878 041', 'emergencyPhone2' => '03 5772 2432',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'juliapeddie@icloud.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'goodwills@ozemail.com.au', 'username' => 'goodwills',
			'password' => $security->generatePasswordHash('NSmSFk413sThJSQG'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 35, 'givenName' => 'Laurel', 'familyName' => 'Wilson', 'preferredName' => 'Laurel',
			'phone1' => '0418 187 104', 'phone2' => '07 5435 2333',
			'address1' => '34 Palm St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Bob Wilson', 'emergencyPhone1' => '0438 525 119', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'goodwills@ozemail.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'mail@womenforchange.com', 'username' => 'mail',
			'password' => $security->generatePasswordHash('3rqM93KupHzOG2eq'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 36, 'givenName' => 'Arcadia', 'familyName' => 'Love', 'preferredName' => 'Arcadia',
			'phone1' => '0427 296 572', 'phone2' => null,
			'address1' => '14/395 Zillmere Rd', 'address2' => null,
			'locality' => 'Zillmere', 'state' => 'Qld', 'postcode' => '4034', 'country' => 'Australia',
			'emergencyContact' => 'Shaay Menay', 'emergencyPhone1' => '0457 968 875', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'mail@womenforchange.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'adpedler@gmail.com', 'username' => 'adpedler',
			'password' => $security->generatePasswordHash('IUpXHbgcwjJgUTcH'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 37, 'givenName' => 'Andrew', 'familyName' => 'Pedler', 'preferredName' => 'Andrew',
			'phone1' => '0412 122 778', 'phone2' => '07 5435 2856',
			'address1' => '135 Stanley River Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Margaret Longworth', 'emergencyPhone1' => '0438 794 252', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'adpedler@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'peter.cartwright@iinet.net.au', 'username' => 'peter.cartwright',
			'password' => $security->generatePasswordHash('UsMP75fthrolJJCh'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 38, 'givenName' => 'Peter', 'familyName' => 'Cartwright', 'preferredName' => 'Pete',
			'phone1' => '0438 432 909', 'phone2' => null,
			'address1' => '15 Robbies Ave', 'address2' => null,
			'locality' => 'Carina', 'state' => 'Qld', 'postcode' => '4152', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'peter.cartwright@iinet.net.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'amandala44@hotmail.com', 'username' => 'amandala44',
			'password' => $security->generatePasswordHash('sEI6yy3JlKKWxIh0'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 39, 'givenName' => 'Amanda', 'familyName' => 'Bailey', 'preferredName' => 'Amanda',
			'phone1' => '0409 066 180', 'phone2' => null,
			'address1' => '2/89 Albert St', 'address2' => null,
			'locality' => 'Kings Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Angeline Medland', 'emergencyPhone1' => '0409 066 180', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'amandala44@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kari@karicelebrations.com', 'username' => 'kari',
			'password' => $security->generatePasswordHash('jNPOFwrNHbDzQJ5b'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 40, 'givenName' => 'Kari', 'familyName' => '-', 'preferredName' => 'Kari',
			'phone1' => '0437 714 965', 'phone2' => '07 5445 0622',
			'address1' => '39 Jubilee Dr', 'address2' => null,
			'locality' => 'Palmwoods', 'state' => 'Qld', 'postcode' => '4555', 'country' => 'Australia',
			'emergencyContact' => 'Jessi Dunbar', 'emergencyPhone1' => '0402 374 846', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'kari@karicelebrations.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'deborahnewyou@gmail.com', 'username' => 'deborahnewyou',
			'password' => $security->generatePasswordHash('pTM6QzwV0ToX3BUQ'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 41, 'givenName' => 'Deborah', 'familyName' => 'Yffer', 'preferredName' => 'Deb',
			'phone1' => '0411 389 727', 'phone2' => '07 5494 2179',
			'address1' => '1 Jabiru Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tony Glazebrook', 'emergencyPhone1' => '0408 684 482', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'deborahnewyou@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'daveandmanda@gmail.com', 'username' => 'daveandmanda',
			'password' => $security->generatePasswordHash('dxAiKAgh2z2L2vyy'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 42, 'givenName' => 'Amanda', 'familyName' => 'McGrath', 'preferredName' => 'Amanda',
			'phone1' => '0435 232 451', 'phone2' => null,
			'address1' => '1/31 Saleng Cres', 'address2' => null,
			'locality' => 'Warana', 'state' => 'Qld', 'postcode' => '4575', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0435 232 451', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'daveandmanda@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'angellove12@bigpond.com', 'username' => 'angellove12',
			'password' => $security->generatePasswordHash('We0ViLuaEOteI8AT'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 43, 'givenName' => 'Angel', 'familyName' => 'Love', 'preferredName' => 'Angel',
			'phone1' => '0431 673 16?', 'phone2' => null,
			'address1' => '251 Hardwood Rd', 'address2' => null,
			'locality' => 'Landsborough', 'state' => 'Qld', 'postcode' => '4550', 'country' => 'Australia',
			'emergencyContact' => 'Cheryl Nicol', 'emergencyPhone1' => '0415 635 992', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'angellove12@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'angela1freedom@yahoo.com.au', 'username' => 'angela1freedom',
			'password' => $security->generatePasswordHash('mEa69JBdRtGWOHhu'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 44, 'givenName' => 'Angela', 'familyName' => 'May', 'preferredName' => 'Angela',
			'phone1' => '0459 495 650', 'phone2' => null,
			'address1' => 'Hooper Rd', 'address2' => null,
			'locality' => 'North Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Spencer Underwood', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'angela1freedom@yahoo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'judithbacon@optusnet.com.au', 'username' => 'judithbacon',
			'password' => $security->generatePasswordHash('fuMoEt7kODKVbgx5'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 45, 'givenName' => 'Judith', 'familyName' => 'Bacon', 'preferredName' => 'Juda',
			'phone1' => '0407 583 490', 'phone2' => null,
			'address1' => '8 Emu Creek Rd', 'address2' => null,
			'locality' => 'Crows Nest', 'state' => 'Qld', 'postcode' => '4355', 'country' => 'Australia',
			'emergencyContact' => 'Ryk Rostron', 'emergencyPhone1' => '07 4698 1831', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'judithbacon@optusnet.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ben@ecourban.com.au', 'username' => 'ben',
			'password' => $security->generatePasswordHash('AeZq0aYXKvZ383Q8'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 46, 'givenName' => 'Ben', 'familyName' => 'McGhee', 'preferredName' => 'Ben',
			'phone1' => '0428 752 958', 'phone2' => null,
			'address1' => 'Unit 4/29 Russell St', 'address2' => null,
			'locality' => 'South Brisbane', 'state' => 'Qld', 'postcode' => '4101', 'country' => 'Australia',
			'emergencyContact' => 'Cheryl Vivian', 'emergencyPhone1' => '0400 551 919', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'ben@ecourban.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'riccolclough@gmail.com', 'username' => 'riccolclough',
			'password' => $security->generatePasswordHash('Xt747EnxZrfn0LpE'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 47, 'givenName' => 'Richard', 'familyName' => 'Colclough', 'preferredName' => 'Ric, Ricco N .....',
			'phone1' => '0418 298 506', 'phone2' => null,
			'address1' => '24 Kings Lane', 'address2' => null,
			'locality' => 'Reesville', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Nick Francis', 'emergencyPhone1' => '0409 050 837', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'riccolclough@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'meander123@gmail.com', 'username' => 'meander123',
			'password' => $security->generatePasswordHash('lnF9hzOPak77O88O'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 48, 'givenName' => 'Julie', 'familyName' => 'Fullerton', 'preferredName' => 'Julie',
			'phone1' => '0467 550 029', 'phone2' => null,
			'address1' => 'PO Box 1002', 'address2' => null,
			'locality' => 'Tewantin', 'state' => 'Qld', 'postcode' => '4565', 'country' => 'Australia',
			'emergencyContact' => 'Ray Jack', 'emergencyPhone1' => '0467 550 049', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'meander123@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'becky@woodfordia.com', 'username' => 'becky',
			'password' => $security->generatePasswordHash('Y5stx2bdVTGzydTv'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 49, 'givenName' => 'Becky', 'familyName' => 'Wandell', 'preferredName' => 'Becky',
			'phone1' => '0418 782 489', 'phone2' => null,
			'address1' => '106 Evans Rd', 'address2' => null,
			'locality' => 'Black Mountain', 'state' => 'Qld', 'postcode' => '4563', 'country' => 'Australia',
			'emergencyContact' => 'Zak Burvill', 'emergencyPhone1' => '0411 846 561', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'becky@woodfordia.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'seedwalkabout@rediffmail.com', 'username' => 'seedwalkabout',
			'password' => $security->generatePasswordHash('xD1lMOo6z88ie4hU'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 50, 'givenName' => 'Julia', 'familyName' => 'Desbrosses', 'preferredName' => 'Julz',
			'phone1' => '0457 955 685', 'phone2' => null,
			'address1' => '13 Maipu Ct', 'address2' => null,
			'locality' => 'Eagle Heights', 'state' => 'Qld', 'postcode' => '4271', 'country' => 'Australia',
			'emergencyContact' => 'Sue Desbrosses', 'emergencyPhone1' => '0410 408 588', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'seedwalkabout@rediffmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kim@kimbanffy.com.au', 'username' => 'kim',
			'password' => $security->generatePasswordHash('MyuKlRzSADJTR3J7'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 51, 'givenName' => 'Kim', 'familyName' => 'Banffy', 'preferredName' => 'Kim!',
			'phone1' => '0425 363 589', 'phone2' => null,
			'address1' => '1/5 Barkala Ct', 'address2' => null,
			'locality' => 'Ocean Shores', 'state' => 'NSW', 'postcode' => '2483', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'kim@kimbanffy.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'sharynne.durbidge@au.nestle.com', 'username' => 'sharynne.durbidge',
			'password' => $security->generatePasswordHash('yN1ieZQodKYDtVcQ'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 52, 'givenName' => 'Sharynne', 'familyName' => 'Durbidge', 'preferredName' => 'Sharynne',
			'phone1' => '0418 742 449', 'phone2' => null,
			'address1' => '91 Stratford Park Dr', 'address2' => null,
			'locality' => 'Pomona', 'state' => 'Qld', 'postcode' => '4568', 'country' => 'Australia',
			'emergencyContact' => 'Ken Caven', 'emergencyPhone1' => '0404 074 661', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'sharynne.durbidge@au.nestle.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'michelle.bragg@epicentre.com.au', 'username' => 'michelle.bragg',
			'password' => $security->generatePasswordHash('u5kLzzxdPiZNBvMl'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 53, 'givenName' => 'Michelle', 'familyName' => 'Bragg', 'preferredName' => 'Michelle',
			'phone1' => '0407 152 182', 'phone2' => '07 3204 8118',
			'address1' => '8 Anembo Ct', 'address2' => null,
			'locality' => 'Deception Bay', 'state' => 'Qld', 'postcode' => '4508', 'country' => 'Australia',
			'emergencyContact' => 'Elaine Bragg', 'emergencyPhone1' => '07 3204 8118', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'michelle.bragg@epicentre.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kg4005@hotmail.com', 'username' => 'kg4005',
			'password' => $security->generatePasswordHash('eGoZK7PAwX31JTu0'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 54, 'givenName' => 'Kerry', 'familyName' => 'Germain', 'preferredName' => 'Kerry',
			'phone1' => '0406 866 800', 'phone2' => null,
			'address1' => '9 Ingle Ct', 'address2' => null,
			'locality' => 'Bli Bli', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Tay Germain', 'emergencyPhone1' => '0433 294 183', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'kg4005@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suec28@gmail.com', 'username' => 'suec28',
			'password' => $security->generatePasswordHash('kKfnLjCzHkRMKs19'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 55, 'givenName' => 'Susan', 'familyName' => 'Collins', 'preferredName' => 'Sue',
			'phone1' => '0405 558 153', 'phone2' => '07 5442 3441',
			'address1' => '40 Reids Rd', 'address2' => null,
			'locality' => 'Woombye', 'state' => 'Qld', 'postcode' => '4559', 'country' => 'Australia',
			'emergencyContact' => 'Daniel Collins', 'emergencyPhone1' => '07 5442 3441', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'suec28@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'resolve@tpg.com.au', 'username' => 'resolve',
			'password' => $security->generatePasswordHash('H95TQTuEkr8lfmXK'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 56, 'givenName' => 'Katherine', 'familyName' => 'Webb', 'preferredName' => 'Vici',
			'phone1' => '0412 170 669', 'phone2' => '07 5485 0260',
			'address1' => '13 Edward St', 'address2' => null,
			'locality' => 'Cooran', 'state' => 'Qld', 'postcode' => '4569', 'country' => 'Australia',
			'emergencyContact' => 'Madeleine Webb', 'emergencyPhone1' => '0423 433 889', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'resolve@tpg.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'dawson_lyn@hotmail.com', 'username' => 'dawson_lyn',
			'password' => $security->generatePasswordHash('BzCLL4FFotctSk4a'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 57, 'givenName' => 'Lynette', 'familyName' => 'Dawson', 'preferredName' => 'Lyn',
			'phone1' => '0409 628 261', 'phone2' => '07 3286 4781',
			'address1' => 'Unit 6/96 Wynyard St', 'address2' => null,
			'locality' => 'Cleveland', 'state' => 'Qld', 'postcode' => '4163', 'country' => 'Australia',
			'emergencyContact' => 'Kimberley Simmons', 'emergencyPhone1' => '0478 056 202', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'dawson_lyn@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'liran.s@hotmail.com', 'username' => 'liran.s',
			'password' => $security->generatePasswordHash('3Ord80McJV4qxLOw'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 58, 'givenName' => 'Liran', 'familyName' => 'Shachar', 'preferredName' => 'Precious',
			'phone1' => '0421 746 910', 'phone2' => null,
			'address1' => '63 Lynden St', 'address2' => null,
			'locality' => 'Camberwell', 'state' => 'Vic', 'postcode' => '3124', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'liran.s@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lindystemp@gmail.com', 'username' => 'lindystemp',
			'password' => $security->generatePasswordHash('yP9LDVAe6CuhGFIX'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 59, 'givenName' => 'Linda', 'familyName' => 'Stemp', 'preferredName' => 'Linda',
			'phone1' => '0414 505 444', 'phone2' => '07 3342 4807',
			'address1' => '18 Joywood St', 'address2' => null,
			'locality' => 'Tarragindi', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => 'Yazmin Stemp', 'emergencyPhone1' => '0435 639 133', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'lindystemp@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jeanette@lifestreamassociates.com.au', 'username' => 'jeanette',
			'password' => $security->generatePasswordHash('2YDMusB1Xaz2bNmQ'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 60, 'givenName' => 'Jeanette', 'familyName' => 'Isaacs-Young', 'preferredName' => 'Jeanette',
			'phone1' => '0438 562 118', 'phone2' => '07 5442 2484',
			'address1' => 'PO Box 134', 'address2' => null,
			'locality' => 'Woombye', 'state' => 'Qld', 'postcode' => '4559', 'country' => 'Australia',
			'emergencyContact' => 'John Isaacs-Young', 'emergencyPhone1' => '0468 333 137', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jeanette@lifestreamassociates.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'maynard678@gmail.com', 'username' => 'maynard678',
			'password' => $security->generatePasswordHash('76115uOOWxt0CfMf'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 61, 'givenName' => 'David', 'familyName' => 'Maynard', 'preferredName' => 'Dave',
			'phone1' => '0459 597 617', 'phone2' => null,
			'address1' => '8 Mellumview Dr', 'address2' => null,
			'locality' => 'Beerwah', 'state' => 'Qld', 'postcode' => '4519', 'country' => 'Australia',
			'emergencyContact' => 'Rose Maynard', 'emergencyPhone1' => '0448 633 470', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'maynard678@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'sharriefair@yahoo.com', 'username' => 'sharriefair',
			'password' => $security->generatePasswordHash('eC6nnSTL8v8GAI3H'),
			'status' => 1, 'banned_at' => date('Y-m-d H:i:s'), 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 62, 'givenName' => 'Sharrie', 'familyName' => 'Fair', 'preferredName' => 'Shazzy',
			'phone1' => '0413 469 687', 'phone2' => null,
			'address1' => '43A/23 Scholars Dr', 'address2' => null,
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Timothy Sima', 'emergencyPhone1' => '0413 469 687', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => 2020,
			'discovery' => 'Previous Volunteer', 'email' => 'sharriefair@yahoo.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'timsima@hotmail.com', 'username' => 'timsima',
			'password' => $security->generatePasswordHash('TVQ64mZ2IfVIthmw'),
			'status' => 1, 'banned_at' => date('Y-m-d H:i:s'), 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 63, 'givenName' => 'Timothy', 'familyName' => 'Sima', 'preferredName' => 'Tim',
			'phone1' => '0413 469 687', 'phone2' => null,
			'address1' => '43A/23 Scholars Dr', 'address2' => null,
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Carol Sima', 'emergencyPhone1' => '07 5483 8810', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => 2020,
			'discovery' => 'Previous Volunteer', 'email' => 'timsima@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jbillings477@gmail.com', 'username' => 'jbillings477',
			'password' => $security->generatePasswordHash('aszvGKECUmka0rSt'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 64, 'givenName' => 'Joy', 'familyName' => 'Billings', 'preferredName' => 'Joy',
			'phone1' => '0409 477 651', 'phone2' => null,
			'address1' => '6 Oceanic Dr', 'address2' => null,
			'locality' => 'Buddina', 'state' => 'Qld', 'postcode' => '4575', 'country' => 'Australia',
			'emergencyContact' => 'Lisa McBurnie', 'emergencyPhone1' => '0405 102 102', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jbillings477@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jessomine@westnet.com.au', 'username' => 'jessomine',
			'password' => $security->generatePasswordHash('tEApb9XyqrtpUuUg'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 65, 'givenName' => 'Lani', 'familyName' => 'Mercer', 'preferredName' => 'Lani',
			'phone1' => '0411 076 585', 'phone2' => null,
			'address1' => '44 Buzaki Rd', 'address2' => null,
			'locality' => 'Glass House Mountains', 'state' => 'Qld', 'postcode' => '4518', 'country' => 'Australia',
			'emergencyContact' => 'Craig', 'emergencyPhone1' => '0411 076 586', 'emergencyPhone2' => '07 5438 7795',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jessomine@westnet.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'clayton.d.otoole@gmail.com', 'username' => 'clayton.d.otoole',
			'password' => $security->generatePasswordHash('kNAOpSqT7Xh4Oz9v'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 66, 'givenName' => 'Clayton', 'familyName' => 'O\'Toole', 'preferredName' => 'Clayton',
			'phone1' => '0467 081 178', 'phone2' => '07 5492 9467',
			'address1' => '43 Paget St', 'address2' => null,
			'locality' => 'Mooloolah Valley', 'state' => 'Qld', 'postcode' => '4553', 'country' => 'Australia',
			'emergencyContact' => 'Lynda O\'Toole', 'emergencyPhone1' => '0420 455 260', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'clayton.d.otoole@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'rl.weston89@gmail.com', 'username' => 'rl.weston89',
			'password' => $security->generatePasswordHash('f9mK2tPJEo8WqbOW'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 67, 'givenName' => 'Rochelle', 'familyName' => 'Ragless', 'preferredName' => 'Shell',
			'phone1' => '0423 882 389', 'phone2' => '07 3272 7108',
			'address1' => '7 Bidder St', 'address2' => null,
			'locality' => 'Salisbury', 'state' => 'Qld', 'postcode' => '4107', 'country' => 'Australia',
			'emergencyContact' => 'Danny Ragless', 'emergencyPhone1' => '0447 120 013', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'rl.weston89@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'dp.ragless@gmail.com', 'username' => 'dp.ragless',
			'password' => $security->generatePasswordHash('Qok1j4Ny9zFnESEc'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 68, 'givenName' => 'Daniel', 'familyName' => 'Ragless', 'preferredName' => 'Danny',
			'phone1' => '0447 120 013', 'phone2' => '07 3272 7108',
			'address1' => '7 Bidder St', 'address2' => null,
			'locality' => 'Salisbury', 'state' => 'Qld', 'postcode' => '4107', 'country' => 'Australia',
			'emergencyContact' => 'Rochelle Ragless', 'emergencyPhone1' => '0423 882 389', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'dp.ragless@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'zenkenmassage@gmail.com', 'username' => 'zenkenmassage',
			'password' => $security->generatePasswordHash('448iRzoyX6WhfuJp'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 69, 'givenName' => 'Kendrick', 'familyName' => 'Gleeson', 'preferredName' => 'Ken',
			'phone1' => '0437 738 712', 'phone2' => null,
			'address1' => '1/41 Hynes St', 'address2' => null,
			'locality' => 'Fortitude Valley', 'state' => 'Qld', 'postcode' => '4006', 'country' => 'Australia',
			'emergencyContact' => 'Simon Gleeson', 'emergencyPhone1' => '0448 098 697', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'zenkenmassage@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'leoniew73@gmail.com', 'username' => 'leoniew73',
			'password' => $security->generatePasswordHash('HImQHqpXkeVLlE6G'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 70, 'givenName' => 'Leonie', 'familyName' => 'Wilson', 'preferredName' => 'Le',
			'phone1' => '0420 929 860', 'phone2' => '07 5456 1525',
			'address1' => '101 Lindsay Rd', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'John Grove', 'emergencyPhone1' => '07 5456 1525', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'leoniew73@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'carlabananas@hotmail.com', 'username' => 'carlabananas',
			'password' => $security->generatePasswordHash('u96lqNvhykLqtxMb'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 71, 'givenName' => 'Carla', 'familyName' => 'Sculthorpe', 'preferredName' => 'Carla',
			'phone1' => '0411 577 892', 'phone2' => null,
			'address1' => 'Unit 7/60 Edward St', 'address2' => null,
			'locality' => 'Alexandra Headland', 'state' => 'Qld', 'postcode' => '4572', 'country' => 'Australia',
			'emergencyContact' => 'Joshua Byrne', 'emergencyPhone1' => '0474 728 901', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'carlabananas@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'andylivesinoz@gmail.com', 'username' => 'andylivesinoz',
			'password' => $security->generatePasswordHash('Vb2Ec6JZTrZ0dtmO'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 72, 'givenName' => 'Andrew', 'familyName' => 'Makin', 'preferredName' => 'Andy',
			'phone1' => '0490 366 148', 'phone2' => null,
			'address1' => '5 Prince St', 'address2' => null,
			'locality' => 'Dinmore', 'state' => 'Qld', 'postcode' => '4303', 'country' => 'Australia',
			'emergencyContact' => 'James Makin', 'emergencyPhone1' => '0457 329 343', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'andylivesinoz@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jennyparenteau@gmail.com', 'username' => 'jennyparenteau',
			'password' => $security->generatePasswordHash('TLjD6RlkPH8hk1P5'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 73, 'givenName' => 'Jennifer', 'familyName' => 'Parenteau', 'preferredName' => 'Jenny',
			'phone1' => '0403 646 899', 'phone2' => null,
			'address1' => '28A Hardy Ave', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => 'Mary Sterling', 'emergencyPhone1' => '0417 605 655', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jennyparenteau@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'steve@serendigity.net', 'username' => 'steve',
			'password' => $security->generatePasswordHash('xFc9ntOoJJVBb3da'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 74, 'givenName' => 'Setphen', 'familyName' => 'Swayne', 'preferredName' => 'Steve',
			'phone1' => '0479 041 957', 'phone2' => '07 5435 2685',
			'address1' => '43 Tallowwood St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Karen Arnold', 'emergencyPhone1' => '0479 087 771', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'steve@serendigity.net',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'meefeefee@yahoo.co.uk', 'username' => 'meefeefee',
			'password' => $security->generatePasswordHash('oOmiWHCtH2QvjbOM'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 75, 'givenName' => 'Fiona', 'familyName' => 'Gray', 'preferredName' => 'Fiona',
			'phone1' => '0466 469 228', 'phone2' => null,
			'address1' => '12 Woodville Pl', 'address2' => null,
			'locality' => 'Annerley', 'state' => 'Qld', 'postcode' => '4103', 'country' => 'Australia',
			'emergencyContact' => 'Lawrence Agar', 'emergencyPhone1' => '0421 650 487', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'meefeefee@yahoo.co.uk',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'hicksstephanie@optusnet.com.au', 'username' => 'hicksstephanie',
			'password' => $security->generatePasswordHash('Xw8AZByaY4GTzq2P'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 76, 'givenName' => 'Stephanie', 'familyName' => 'Hicks', 'preferredName' => 'Stephanie',
			'phone1' => '0401 650 704', 'phone2' => '07 3352 5576',
			'address1' => '21 Bally St', 'address2' => null,
			'locality' => 'Kelvin Grove', 'state' => 'Qld', 'postcode' => '4059', 'country' => 'Australia',
			'emergencyContact' => 'Ed Wrigley', 'emergencyPhone1' => '07 3150 7547', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'hicksstephanie@optusnet.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'smnwlls58@gmail.com', 'username' => 'smnwlls58',
			'password' => $security->generatePasswordHash('7NB1Xy3P9J3Ej5i7'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 77, 'givenName' => 'Simon', 'familyName' => 'Wells', 'preferredName' => 'Simon',
			'phone1' => '0408 762 473', 'phone2' => null,
			'address1' => '88 Cambridge St', 'address2' => null,
			'locality' => 'Carina Heights', 'state' => 'Qld', 'postcode' => '4152', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0408 762 473', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'smnwlls58@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'yazistemp@gmail.com', 'username' => 'yazistemp',
			'password' => $security->generatePasswordHash('LnRKC3SZ1yelLgs0'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 78, 'givenName' => 'Yazmin', 'familyName' => 'Stemp Yacoubi', 'preferredName' => 'Yazmin',
			'phone1' => '0435 639 133', 'phone2' => '07 3342 4807',
			'address1' => '18 Joywood St', 'address2' => null,
			'locality' => 'Tarragindi', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => 'Linda Stemp', 'emergencyPhone1' => '0414 505 444', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'yazistemp@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'casslloyd2@yahoo.com.au', 'username' => 'casslloyd2',
			'password' => $security->generatePasswordHash('cYLUJPcU0j0Jr2za'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 79, 'givenName' => 'Caroline', 'familyName' => 'Lloyd', 'preferredName' => 'Cass',
			'phone1' => '0468 453 344', 'phone2' => null,
			'address1' => 'PO Box 1987', 'address2' => null,
			'locality' => 'Byron Bay', 'state' => 'NSW', 'postcode' => '2481', 'country' => 'Australia',
			'emergencyContact' => 'Jenny Parenteau', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'casslloyd2@yahoo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'karla.quinn@uqconnect.edu.au', 'username' => 'karla.quinn',
			'password' => $security->generatePasswordHash('Vm603xenXVuLTlQu'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 80, 'givenName' => 'Karla', 'familyName' => 'Quinn', 'preferredName' => 'Karla',
			'phone1' => '0419 653 502', 'phone2' => '07 3876 2569',
			'address1' => '4/13 Clermont St', 'address2' => null,
			'locality' => 'Bardon', 'state' => 'Qld', 'postcode' => '4065', 'country' => 'Australia',
			'emergencyContact' => 'Andrea Quinn', 'emergencyPhone1' => '0419 653 340', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'karla.quinn@uqconnect.edu.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'davo101lap@gmail.com', 'username' => 'davo101lap',
			'password' => $security->generatePasswordHash('2LG76DQvvDYCZWHL'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 81, 'givenName' => 'David', 'familyName' => 'Lapsley', 'preferredName' => 'David',
			'phone1' => '07 5494 4827', 'phone2' => null,
			'address1' => '186 Jager Dr', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Cheryl Laizans', 'emergencyPhone1' => '07 5429 6065', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'davo101lap@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'glenda-eade@hotmail.com', 'username' => 'glenda-eade',
			'password' => $security->generatePasswordHash('v2JOCNyASyb2vhTU'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 82, 'givenName' => 'Glenda', 'familyName' => 'Eade', 'preferredName' => 'Glenda',
			'phone1' => '0432 713 456', 'phone2' => null,
			'address1' => 'PO Box 200', 'address2' => null,
			'locality' => 'Eudlo', 'state' => 'Qld', 'postcode' => '4554', 'country' => 'Australia',
			'emergencyContact' => 'Laura Mahadevan', 'emergencyPhone1' => '0423 437 031', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'glenda-eade@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'caztpix@gmail.com', 'username' => 'caztpix',
			'password' => $security->generatePasswordHash('ERIg0LpKosJHcne5'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 83, 'givenName' => 'Carole', 'familyName' => 'Thomas', 'preferredName' => 'Caz',
			'phone1' => '0402 245 476', 'phone2' => null,
			'address1' => '57 Frederick St', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => 'Matt Thomas', 'emergencyPhone1' => '0414 243 883', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'caztpix@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 't.maree@hotmail.co.nz', 'username' => 't.maree',
			'password' => $security->generatePasswordHash('xBCrGheafvjyHc1O'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 84, 'givenName' => 'Tamara', 'familyName' => 'Tilling', 'preferredName' => 'Tamara',
			'phone1' => '0428 821 575', 'phone2' => null,
			'address1' => '34 Water Gum Cres', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sharon Ward', 'emergencyPhone1' => '0411 856 877', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 't.maree@hotmail.co.nz',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kathydavis1@bigpond.com', 'username' => 'kathydavis1',
			'password' => $security->generatePasswordHash('wpnQ5GiZUTnaNZJJ'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 85, 'givenName' => 'Kathleen', 'familyName' => 'Davis', 'preferredName' => 'Kathy',
			'phone1' => '0408 833 156', 'phone2' => '07 5435 2782',
			'address1' => '14 Ash St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Luke Grimshaw', 'emergencyPhone1' => '0422 694 079', 'emergencyPhone2' => '07 5435 2782',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'kathydavis1@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suzy@freeorganic.com.au', 'username' => 'suzy',
			'password' => $security->generatePasswordHash('PUR86nVGrrahjGz4'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 86, 'givenName' => 'Suzy', 'familyName' => 'Barry', 'preferredName' => 'Suzy',
			'phone1' => '0448 002 422', 'phone2' => '07 5435 0045',
			'address1' => '902 Aherns Rd', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Mark Kempster', 'emergencyPhone1' => '0417 722 995', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'suzy@freeorganic.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'trevjfranklin@gmail.com', 'username' => 'trevjfranklin',
			'password' => $security->generatePasswordHash('b6sBaeQ5E4aly6oD'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 87, 'givenName' => 'Trevor', 'familyName' => 'Franklin', 'preferredName' => 'Trev',
			'phone1' => '0419 667 269', 'phone2' => '07 4128 6672',
			'address1' => 'PO Box 5487', 'address2' => null,
			'locality' => 'Torquay', 'state' => 'Qld', 'postcode' => '4655', 'country' => 'Australia',
			'emergencyContact' => 'Erin Franklin', 'emergencyPhone1' => '0458 942 094', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'trevjfranklin@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'mark@foodsourcegroup.com.au', 'username' => 'mark',
			'password' => $security->generatePasswordHash('Mm42aUhg7oCm5Bbh'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 88, 'givenName' => 'Mark', 'familyName' => 'Kempster', 'preferredName' => 'Mark',
			'phone1' => '0417 722 995', 'phone2' => '07 5435 0045',
			'address1' => '902 Aherns Rd', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Suzy Barry', 'emergencyPhone1' => '0448 002 422', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'mark@foodsourcegroup.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'bibianastanfield@yahoo.de', 'username' => 'bibianastanfield',
			'password' => $security->generatePasswordHash('TpsP7EgNnpmobrWD'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 89, 'givenName' => 'Bibiana', 'familyName' => 'Stanfield', 'preferredName' => 'Bibi',
			'phone1' => '0437 238 223', 'phone2' => null,
			'address1' => 'Mossybank Rd', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'bibianastanfield@yahoo.de',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'rodneystoddart@gmail.com', 'username' => 'rodneystoddart',
			'password' => $security->generatePasswordHash('ns6pVSdWrxjPWmqI'),
			'status' => 1, 'banned_at' => date('Y-m-d H:i:s'), 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 90, 'givenName' => 'Rodney', 'familyName' => 'Stoddart', 'preferredName' => 'Rodney',
			'phone1' => '0420 824 173', 'phone2' => null,
			'address1' => 'PO Box 671', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Pam Dodson', 'emergencyPhone1' => '0407 955 480', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => 2020,
			'discovery' => 'Previous Volunteer', 'email' => 'rodneystoddart@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'barrym53@gmail.com', 'username' => 'barrym53',
			'password' => $security->generatePasswordHash('unVpMzc7Cs8a8rgN'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 91, 'givenName' => 'Barry', 'familyName' => 'Munyard', 'preferredName' => 'Barry',
			'phone1' => '0447 130 453', 'phone2' => null,
			'address1' => '18 Gardenvale St', 'address2' => null,
			'locality' => 'Holland Park West', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => 'Darcy Munyard', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'barrym53@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kennyo@westnet.com.au', 'username' => 'kennyo',
			'password' => $security->generatePasswordHash('ewmkzf8bxKid7mTz'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 92, 'givenName' => 'Kenneth', 'familyName' => 'O\'Flaherty', 'preferredName' => 'Ken',
			'phone1' => '0417 646 759', 'phone2' => '07 5476 9533',
			'address1' => '58 Townsend Rd', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Lois O\'Flaherty', 'emergencyPhone1' => '07 5476 8533', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'kennyo@westnet.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'syawruss@yahoo.com.au', 'username' => 'syawruss',
			'password' => $security->generatePasswordHash('EynMooTf3hvv6mLr'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 93, 'givenName' => 'Sya', 'familyName' => 'Wiersma', 'preferredName' => 'Sya',
			'phone1' => '0432 795 549', 'phone2' => null,
			'address1' => '572 Coolabine Creek Rd', 'address2' => null,
			'locality' => 'Coolabine', 'state' => 'Qld', 'postcode' => '4574', 'country' => 'Australia',
			'emergencyContact' => 'Paul Russell', 'emergencyPhone1' => '07 5472 3416', 'emergencyPhone2' => '0432 526 874',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'syawruss@yahoo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lovefromsarika@hotmail.com', 'username' => 'lovefromsarika',
			'password' => $security->generatePasswordHash('THpHcJvgtYBYL4PH'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 94, 'givenName' => 'Cecilie', 'familyName' => 'Schiotz', 'preferredName' => 'Cecilie',
			'phone1' => '0437 080 050', 'phone2' => '07 5429 6670',
			'address1' => '1/10 Cherry St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Peter Schiotz', 'emergencyPhone1' => '0407 942 428', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'lovefromsarika@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'wattlebeeblossom@gmsil.com', 'username' => 'wattlebeeblossom',
			'password' => $security->generatePasswordHash('tehhrKvm1TsEELnM'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 95, 'givenName' => 'Joanne', 'familyName' => 'Timbs', 'preferredName' => 'Joanne',
			'phone1' => '0428 426 243', 'phone2' => null,
			'address1' => 'Lot 65 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Christine Hartley', 'emergencyPhone1' => '0428 426 243', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'wattlebeeblossom@gmsil.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'a.tuddenham@yahoo.com', 'username' => 'a.tuddenham',
			'password' => $security->generatePasswordHash('UgFrgSDZJHrj5PHX'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 96, 'givenName' => 'Alicia', 'familyName' => 'Tuddenham', 'preferredName' => 'Ali',
			'phone1' => '0434 554 790', 'phone2' => null,
			'address1' => '6/15 Carinya Dr', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => 'Nils Michaelis', 'emergencyPhone1' => '0402 505 613', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'a.tuddenham@yahoo.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'juliefauser@bigpond.com', 'username' => 'juliefauser',
			'password' => $security->generatePasswordHash('B2vojPnph9sonGqs'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 97, 'givenName' => 'Julie', 'familyName' => 'Fauser', 'preferredName' => 'Julie',
			'phone1' => '07 5499 9313', 'phone2' => null,
			'address1' => '19 Cedar Grove Crt', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Todd Fauser', 'emergencyPhone1' => '07 5499 9313', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'juliefauser@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'berirock@optusnet.com.au', 'username' => 'berirock',
			'password' => $security->generatePasswordHash('uqhmrIfsf1SwN60N'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 98, 'givenName' => 'Jodie', 'familyName' => 'Rockliff', 'preferredName' => 'Jodie',
			'phone1' => '0438 128 038', 'phone2' => '07 5309 5790',
			'address1' => '47 King St', 'address2' => null,
			'locality' => 'Shelly Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Tim Beriman', 'emergencyPhone1' => '0413 435 160', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'berirock@optusnet.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'whittojnr@gmail.com', 'username' => 'whittojnr',
			'password' => $security->generatePasswordHash('L7ItrcpN6zYWWLsJ'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 99, 'givenName' => 'Jackson', 'familyName' => 'Whitton', 'preferredName' => 'Jackson',
			'phone1' => '0421 777 512', 'phone2' => '07 5445 5799',
			'address1' => '189/52 University Way', 'address2' => null,
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Noela', 'emergencyPhone1' => '07 5445 5799', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'whittojnr@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'planetbgirl@hotmail.com', 'username' => 'planetbgirl',
			'password' => $security->generatePasswordHash('w8lSUyfyrmnhPgzd'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 100, 'givenName' => 'Bianka', 'familyName' => 'Paunovic', 'preferredName' => 'B',
			'phone1' => '0467 249 743', 'phone2' => null,
			'address1' => '1965 Stanley River Rd', 'address2' => null,
			'locality' => 'Booroobin', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Terri-Anne Goodreid', 'emergencyPhone1' => '0488 914 101', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'planetbgirl@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'skye.ba.leong@gmail.com', 'username' => 'skye.ba.leong',
			'password' => $security->generatePasswordHash('dKgHRJpxQdeLWmx4'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 101, 'givenName' => 'Skye Leong', 'familyName' => 'Leong', 'preferredName' => 'Skye',
			'phone1' => '0438 486 666', 'phone2' => null,
			'address1' => '7-19 Beechwood Rd', 'address2' => null,
			'locality' => 'Balmoral Ridge', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'June Leong', 'emergencyPhone1' => '0438 872 571', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'skye.ba.leong@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'sarah_ann_m@hotmail.com', 'username' => 'sarah_ann_m',
			'password' => $security->generatePasswordHash('w9FTW6AcYoY5PD0J'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 102, 'givenName' => 'Kathleen', 'familyName' => 'McGovern', 'preferredName' => 'Sarah',
			'phone1' => '0434 809 316', 'phone2' => '07 5445 6064',
			'address1' => '31 Rim Rd', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Jennifer Sargent', 'emergencyPhone1' => '0407 125 779', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'sarah_ann_m@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'leigh.cam@hotmail.com', 'username' => 'leigh.cam',
			'password' => $security->generatePasswordHash('OQf0yIBkKIGBR6tD'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 103, 'givenName' => 'Leigh', 'familyName' => 'Campbell', 'preferredName' => 'Leigh',
			'phone1' => '0413 755 850', 'phone2' => null,
			'address1' => '35 Parkyn Parade', 'address2' => null,
			'locality' => 'Mooloolaba', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Georgia Campbell', 'emergencyPhone1' => '0406 007 794', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'leigh.cam@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'janeyonearth@yahoo.com', 'username' => 'janeyonearth',
			'password' => $security->generatePasswordHash('dUGqba8ezDDUbvt4'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 104, 'givenName' => 'Janey', 'familyName' => 'Monaghan', 'preferredName' => 'Janey',
			'phone1' => '0404 119 345', 'phone2' => '07 5429 6502',
			'address1' => 'PO Box 716', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Santosh Broom', 'emergencyPhone1' => '0415 103 882', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'janeyonearth@yahoo.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'colleen66cv@gmail.com', 'username' => 'colleen66cv',
			'password' => $security->generatePasswordHash('ZdgpzUxP3tzwGEdd'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 105, 'givenName' => 'Colleen', 'familyName' => 'Verhaaren', 'preferredName' => 'Gumala',
			'phone1' => '0448 845 266', 'phone2' => null,
			'address1' => '25 Cedar Grove Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Linda Williams', 'emergencyPhone1' => '0404 012 898', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'colleen66cv@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'brendan1968@gmail.com', 'username' => 'brendan1968',
			'password' => $security->generatePasswordHash('RNlq6pXYuEkvm6MK'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 106, 'givenName' => 'Brendan', 'familyName' => 'O\'Shea', 'preferredName' => 'Brendan',
			'phone1' => '0422 885 954', 'phone2' => null,
			'address1' => '19 Ash St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kerry Laizans', 'emergencyPhone1' => '0411 488 291', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'brendan1968@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'purplefeather15@bigpond.com', 'username' => 'purplefeather15',
			'password' => $security->generatePasswordHash('3thNDdMaH83Jmrqw'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 107, 'givenName' => 'Heather', 'familyName' => 'Nurser', 'preferredName' => 'Heather',
			'phone1' => '0413 223 031', 'phone2' => null,
			'address1' => '2/25 Iluka Ave', 'address2' => null,
			'locality' => 'Buddina', 'state' => 'Qld', 'postcode' => '4575', 'country' => 'Australia',
			'emergencyContact' => 'Jessica North', 'emergencyPhone1' => '0420 722 028', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'purplefeather15@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'allan.norman@live.com.au', 'username' => 'allan.norman',
			'password' => $security->generatePasswordHash('C47UUVp6qFJmvgHv'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 108, 'givenName' => 'Allan', 'familyName' => 'Norman', 'preferredName' => 'Al',
			'phone1' => '0407 626 246', 'phone2' => null,
			'address1' => 'Lot 308 Arborseven Rd', 'address2' => null,
			'locality' => 'Glenwood', 'state' => 'Qld', 'postcode' => '4570', 'country' => 'Australia',
			'emergencyContact' => 'Debra McKay', 'emergencyPhone1' => '0408 630 477', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'allan.norman@live.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suerobs43@gmail.com', 'username' => 'suerobs43',
			'password' => $security->generatePasswordHash('V5Xu0VO5e5usNekE'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 109, 'givenName' => 'Sue', 'familyName' => 'Robson', 'preferredName' => 'Sue',
			'phone1' => '0407 076 555', 'phone2' => null,
			'address1' => '411B', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0407 076 555', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'suerobs43@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'carsten@lifejoy.info', 'username' => 'carsten',
			'password' => $security->generatePasswordHash('dnl0Q5UlupvjBY8V'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 110, 'givenName' => 'Carsten', 'familyName' => 'Nielsen', 'preferredName' => 'Carsten',
			'phone1' => '07 5315 5445', 'phone2' => null,
			'address1' => '114 Browns Rd', 'address2' => null,
			'locality' => 'Belli Park', 'state' => 'Qld', 'postcode' => '4652', 'country' => 'Australia',
			'emergencyContact' => 'Joan McVilly', 'emergencyPhone1' => '07 5447 0181', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'carsten@lifejoy.info',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'garrywayne50@gmail.com', 'username' => 'garrywayne50',
			'password' => $security->generatePasswordHash('iWjiR2pfIx4B3WCj'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 111, 'givenName' => 'Garry', 'familyName' => 'Johnson', 'preferredName' => 'Garry',
			'phone1' => '0467 272 516', 'phone2' => '07 5429 6492',
			'address1' => '19 Rosella Rd', 'address2' => null,
			'locality' => 'North Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sue Johnson', 'emergencyPhone1' => '0467 244 712', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'garrywayne50@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'brendaholligan@yahoo.com.au', 'username' => 'brendaholligan',
			'password' => $security->generatePasswordHash('3y1jiVnAQWCH3Y6f'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 112, 'givenName' => 'Brenda', 'familyName' => 'Holligan', 'preferredName' => 'Bren',
			'phone1' => '07 5494 4769', 'phone2' => null,
			'address1' => 'Lot 2 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Neil Commins', 'emergencyPhone1' => '0404 146 319', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'brendaholligan@yahoo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'carmelstrphenson@gmail.com0', 'username' => 'carmelstrphenson',
			'password' => $security->generatePasswordHash('ygRIsnJLIDJzFiUa'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 113, 'givenName' => 'Carmel', 'familyName' => 'Stephenson', 'preferredName' => 'Carmel',
			'phone1' => '0432 605 751', 'phone2' => null,
			'address1' => '99 Yelgun Rd', 'address2' => null,
			'locality' => 'Yelgun', 'state' => 'NSW', 'postcode' => '2483', 'country' => 'Australia',
			'emergencyContact' => 'Rosemary Mitchell', 'emergencyPhone1' => '07 5445 7472', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'carmelstrphenson@gmail.com0',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'roydenfagan@gmail.com', 'username' => 'roydenfagan',
			'password' => $security->generatePasswordHash('BofYaM5MLJZOIjEc'),
			'status' => 1, 'banned_at' => date('Y-m-d H:i:s'), 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 114, 'givenName' => 'Royden', 'familyName' => 'Fagan', 'preferredName' => 'Royden',
			'phone1' => '0413 166 198', 'phone2' => '07 3299 4418',
			'address1' => '33 Minoa St', 'address2' => null,
			'locality' => 'Woodridge', 'state' => 'Qld', 'postcode' => '4114', 'country' => 'Australia',
			'emergencyContact' => 'Deanne Minniecon', 'emergencyPhone1' => '0423 072 836', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => 2020,
			'discovery' => 'Previous Volunteer', 'email' => 'roydenfagan@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'heidi@eclecticdreams.com.au', 'username' => 'heidi',
			'password' => $security->generatePasswordHash('B9aGGFyHFfiZnnSK'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 115, 'givenName' => 'Heidi', 'familyName' => 'Lawrence', 'preferredName' => 'Heidi',
			'phone1' => '0408 740 089', 'phone2' => null,
			'address1' => '14 Graham Dr', 'address2' => null,
			'locality' => 'Landsborough', 'state' => 'Qld', 'postcode' => '4550', 'country' => 'Australia',
			'emergencyContact' => 'Het Warrell', 'emergencyPhone1' => '07 5493 7901', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'heidi@eclecticdreams.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lschofield007@gmail.com', 'username' => 'lschofield007',
			'password' => $security->generatePasswordHash('GLcsxj3O9xjhqWnj'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 116, 'givenName' => 'Lynette', 'familyName' => 'Schofield', 'preferredName' => 'Leah',
			'phone1' => '0429 680 656', 'phone2' => null,
			'address1' => '130 Havava Rd West', 'address2' => null,
			'locality' => 'Peregian Springs', 'state' => 'Qld', 'postcode' => '4573', 'country' => 'Australia',
			'emergencyContact' => 'Aaron Thomas', 'emergencyPhone1' => '0411 136 925', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'lschofield007@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'eeco@bikerider.com', 'username' => 'eeco',
			'password' => $security->generatePasswordHash('efde8PPWWir4wrBk'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 117, 'givenName' => 'Nerissa', 'familyName' => 'Dowling', 'preferredName' => 'Neri/ Niz',
			'phone1' => '0420 887 886', 'phone2' => null,
			'address1' => '46B Water St', 'address2' => null,
			'locality' => 'Caringbah South', 'state' => 'NSW', 'postcode' => '2229', 'country' => 'Australia',
			'emergencyContact' => 'Nerissa Dowling', 'emergencyPhone1' => '07 9523 7587', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'eeco@bikerider.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'deanneminniecon@hotmail.com', 'username' => 'deanneminniecon',
			'password' => $security->generatePasswordHash('kSO8StXZaodxZOgZ'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 118, 'givenName' => 'Deanne', 'familyName' => 'Minniecon', 'preferredName' => 'Deanne',
			'phone1' => '0423 072 836', 'phone2' => '07 3299 4418',
			'address1' => '33 Minoa St', 'address2' => null,
			'locality' => 'Woodridge', 'state' => 'Qld', 'postcode' => '4114', 'country' => 'Australia',
			'emergencyContact' => 'Royden Fagan', 'emergencyPhone1' => '0413 166 198', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'deanneminniecon@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'hannahcondie@gmail.com', 'username' => 'hannahcondie',
			'password' => $security->generatePasswordHash('SSKgSGFOVKqzzCeE'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 119, 'givenName' => 'Hannah', 'familyName' => 'Condie', 'preferredName' => 'Hannah',
			'phone1' => '0475 523 301', 'phone2' => null,
			'address1' => '43C/23 Scholars Dr', 'address2' => null,
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Anne Pickering', 'emergencyPhone1' => '0400 181 107', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'hannahcondie@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jenniharmony@hotmail.com', 'username' => 'jenniharmony',
			'password' => $security->generatePasswordHash('YtSds2mNFKXba8ML'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 120, 'givenName' => 'Jenni', 'familyName' => 'Harmony', 'preferredName' => 'Jenni',
			'phone1' => '0435 128 421', 'phone2' => '07 5435 2357',
			'address1' => '11 Tamarind St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ernie Marcum', 'emergencyPhone1' => '0432 914 469', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jenniharmony@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jinnyzkec@outlook.com', 'username' => 'jinnyzkec',
			'password' => $security->generatePasswordHash('mPNSXAF39SNoMnj7'),
			'status' => 1, 'banned_at' => date('Y-m-d H:i:s'), 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 121, 'givenName' => 'Jeanette', 'familyName' => 'Roach', 'preferredName' => 'Jinny',
			'phone1' => '0481 122 173', 'phone2' => null,
			'address1' => '6A Myrtle St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kami Blok', 'emergencyPhone1' => '0423 796 845', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => 2020,
			'discovery' => 'Previous Volunteer', 'email' => 'jinnyzkec@outlook.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'damionwhite40@gmail.com', 'username' => 'damionwhite40',
			'password' => $security->generatePasswordHash('T4sgC0d1eAXNxBkm'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 122, 'givenName' => 'Damion', 'familyName' => 'Star', 'preferredName' => 'Starman',
			'phone1' => '', 'phone2' => null,
			'address1' => '44 Tamarind St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'damionwhite40@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ode.c.smith@gmail.com', 'username' => 'ode.c.smith',
			'password' => $security->generatePasswordHash('fpAVvEZ50HQzup3K'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 123, 'givenName' => 'Ode', 'familyName' => 'Claxton-Smith', 'preferredName' => 'Ode',
			'phone1' => '0467 753 705', 'phone2' => null,
			'address1' => 'Unit 2/1334 Landsborough-Maleny Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kevin Smith', 'emergencyPhone1' => '0429 621 362', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'ode.c.smith@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ottolechner52@gmail.com', 'username' => 'ottolechner52',
			'password' => $security->generatePasswordHash('2qUrnUJ4MtkyglX1'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 124, 'givenName' => 'Otto', 'familyName' => 'Lechner', 'preferredName' => 'Otto',
			'phone1' => '0412 273 211', 'phone2' => '07 5478 6818',
			'address1' => '18 Old Mill Lane', 'address2' => null,
			'locality' => 'Flaxton', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Phillipa Robertson', 'emergencyPhone1' => '0422 411 778', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'ottolechner52@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'annicha09@gmail.com', 'username' => 'annicha09',
			'password' => $security->generatePasswordHash('S0CMjQEnlVJ0ql0f'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 125, 'givenName' => 'Sonja', 'familyName' => 'Andrey', 'preferredName' => 'Sonja',
			'phone1' => '0433 804 389', 'phone2' => null,
			'address1' => 'Lot 25 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Rob Morrell', 'emergencyPhone1' => '07 5435 0142', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'annicha09@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'atccontractors@hotmail.com', 'username' => 'atccontractors',
			'password' => $security->generatePasswordHash('CCodflKOMEzLW9Yt'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 126, 'givenName' => 'Tim', 'familyName' => 'Clark', 'preferredName' => 'Tim',
			'phone1' => '0412 854 222', 'phone2' => null,
			'address1' => '651 Bald Knob Rd', 'address2' => null,
			'locality' => 'Bald Knob', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sharon Ward', 'emergencyPhone1' => '0411 856 877', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'atccontractors@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'shazward@hotmail.com.au', 'username' => 'shazward',
			'password' => $security->generatePasswordHash('iiJkXPHTVAF72CEk'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 127, 'givenName' => 'Sharon', 'familyName' => 'Ward', 'preferredName' => 'Sharon',
			'phone1' => '0411 856 877', 'phone2' => '07 5429 6787',
			'address1' => '34 Water Gum Cres', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tim Clark', 'emergencyPhone1' => '0412 854 222', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'shazward@hotmail.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'sheiladuncan2010@hotmail.com', 'username' => 'sheiladuncan2010',
			'password' => $security->generatePasswordHash('PvEutpnZAeG2pwBc'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 128, 'givenName' => 'Sheila', 'familyName' => 'Duncan', 'preferredName' => 'Sheila',
			'phone1' => '0459 453 358', 'phone2' => null,
			'address1' => '7 Russell St', 'address2' => null,
			'locality' => 'Caboolture', 'state' => 'Qld', 'postcode' => '4510', 'country' => 'Australia',
			'emergencyContact' => 'Heather Cameron', 'emergencyPhone1' => '07 5435 8978', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'sheiladuncan2010@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'iangordon2323@yahoo.com.au', 'username' => 'iangordon2323',
			'password' => $security->generatePasswordHash('OHQib224rHwkWAx2'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 129, 'givenName' => 'Ian', 'familyName' => 'Hitchcock', 'preferredName' => 'Ian',
			'phone1' => '0435 872 411', 'phone2' => null,
			'address1' => '47 Scotts Rd', 'address2' => null,
			'locality' => 'Wootha', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Baden Hitchcock', 'emergencyPhone1' => '07 5492 4880', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'iangordon2323@yahoo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lushcottage@gmail.com', 'username' => 'lushcottage',
			'password' => $security->generatePasswordHash('QrTlP6iJNEefVmxB'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 130, 'givenName' => 'Lea', 'familyName' => 'Bracker', 'preferredName' => 'Lea',
			'phone1' => '0488 679 880', 'phone2' => '07 5499 9405',
			'address1' => '2/24 Teak St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sue Johnson', 'emergencyPhone1' => '0467 244 712', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'lushcottage@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'mochelle@acenet.net.au', 'username' => 'mochelle',
			'password' => $security->generatePasswordHash('T9hHHsMcp8Nmm0dD'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 131, 'givenName' => 'Richard', 'familyName' => 'Mochelle', 'preferredName' => 'Richard',
			'phone1' => '07 5435 0378', 'phone2' => null,
			'address1' => 'Lot 7 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sandra Ferguson', 'emergencyPhone1' => '07 5435 0378', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'mochelle@acenet.net.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'bdk.gardens@gmail.com', 'username' => 'bdk.gardens',
			'password' => $security->generatePasswordHash('SHODH8aCFgEsbujZ'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 132, 'givenName' => 'Bruce', 'familyName' => 'King', 'preferredName' => 'Bruce',
			'phone1' => '0418 700 946', 'phone2' => '07 3285 6116',
			'address1' => '31 Rue Montaigne', 'address2' => null,
			'locality' => 'Petrie', 'state' => 'Qld', 'postcode' => '4502', 'country' => 'Australia',
			'emergencyContact' => 'Pauline King', 'emergencyPhone1' => '0418 700 986', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'bdk.gardens@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'gaymliddington@gmail.com', 'username' => 'gaymliddington',
			'password' => $security->generatePasswordHash('x7rGPIzmhJ6eAieh'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 133, 'givenName' => 'Ben', 'familyName' => 'Lyne', 'preferredName' => 'Ben',
			'phone1' => '0478 065 063', 'phone2' => null,
			'address1' => '1965 Stanley River Rd', 'address2' => null,
			'locality' => 'Booroobin', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'gaymliddington@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'annetterichardson27@gmail.com', 'username' => 'annetterichardson27',
			'password' => $security->generatePasswordHash('LEc5mByUjbEwepGK'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 134, 'givenName' => 'Annette', 'familyName' => 'Richardson', 'preferredName' => 'Annie',
			'phone1' => '0409 125 779', 'phone2' => null,
			'address1' => '62 Burgum Rd', 'address2' => null,
			'locality' => 'North Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Gabby Jackson', 'emergencyPhone1' => '0417 337 234', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'annetterichardson27@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'david.crowden.music@gmail.com', 'username' => 'david.crowden.music',
			'password' => $security->generatePasswordHash('faXOsLbxGEPGK7Qn'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 135, 'givenName' => 'David', 'familyName' => 'Crowden', 'preferredName' => 'David',
			'phone1' => '0457 311 388', 'phone2' => '07 5429 6653',
			'address1' => '498 Mountain View Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Andrew Crowden', 'emergencyPhone1' => '0429 801 465', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'david.crowden.music@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'tneira@gmail.com', 'username' => 'tneira',
			'password' => $security->generatePasswordHash('vtHUgzuO2tMB8DPZ'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 136, 'givenName' => 'Tom S Pablo', 'familyName' => 'Neira Iturrieta', 'preferredName' => 'Tom S',
			'phone1' => '0452 259 280', 'phone2' => null,
			'address1' => '251 Bridge Creek Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kamala Alister', 'emergencyPhone1' => '0400 222 887', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'tneira@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'stuart452@gmail.com', 'username' => 'stuart452',
			'password' => $security->generatePasswordHash('N4MyTPyNXhoKmSut'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 137, 'givenName' => 'Stuart', 'familyName' => 'Duncan', 'preferredName' => 'Stu',
			'phone1' => '0434 406 591', 'phone2' => '07 5435 2556',
			'address1' => '9 Mclean Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'David Duncan', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'stuart452@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'elleamani@gmail.com', 'username' => 'elleamani',
			'password' => $security->generatePasswordHash('kOHVsEd509LPW1w9'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 138, 'givenName' => 'Elle', 'familyName' => 'Hughes', 'preferredName' => 'Elle',
			'phone1' => '0425 151 788', 'phone2' => null,
			'address1' => '43 Stanley River Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'elleamani@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suzannemm01@gmail.com', 'username' => 'suzannemm01',
			'password' => $security->generatePasswordHash('6XZQIvlpqunLuyLl'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 139, 'givenName' => 'Suzanne', 'familyName' => 'Mustard', 'preferredName' => 'Suzanne',
			'phone1' => '0414 388 499', 'phone2' => '07 5435 2048',
			'address1' => '21 Mary Cairncross Ave', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jeff Mustard', 'emergencyPhone1' => '0405 182 796', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'suzannemm01@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'snovak@raq.org.au', 'username' => 'snovak',
			'password' => $security->generatePasswordHash('46epXpjIdDYohGvR'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 140, 'givenName' => 'Steven', 'familyName' => 'Novak', 'preferredName' => 'Steve',
			'phone1' => '0431 925 771', 'phone2' => null,
			'address1' => '11 Davis St', 'address2' => null,
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Eileen Gilbert', 'emergencyPhone1' => '0413 223 090', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'snovak@raq.org.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'coughlanpa@yahoo.com.au', 'username' => 'coughlanpa',
			'password' => $security->generatePasswordHash('OnbtyChYxouPJ1V9'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 141, 'givenName' => 'Paul', 'familyName' => 'Coughlan', 'preferredName' => 'Paul',
			'phone1' => '0438 111 525', 'phone2' => '07 5400 1643',
			'address1' => '7/52 School Rd', 'address2' => null,
			'locality' => 'Maroochydore', 'state' => 'Qld', 'postcode' => '4558', 'country' => 'Australia',
			'emergencyContact' => 'Joan Coughlan', 'emergencyPhone1' => '07 5494 7498', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'coughlanpa@yahoo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lachlan.smith184@hotmail.com', 'username' => 'lachlan.smith184',
			'password' => $security->generatePasswordHash('rX271M21Djv0Gbir'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 142, 'givenName' => 'Lachlan', 'familyName' => 'Smith', 'preferredName' => 'Lachi',
			'phone1' => '0413 221 798', 'phone2' => null,
			'address1' => '32 Tallebudgera Dr', 'address2' => null,
			'locality' => 'Palm Beach', 'state' => 'Qld', 'postcode' => '4221', 'country' => 'Australia',
			'emergencyContact' => 'Belinda Hodgkins', 'emergencyPhone1' => '0448 855 204', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'lachlan.smith184@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'vparl1@yahoo.com.au', 'username' => 'vparl1',
			'password' => $security->generatePasswordHash('QEyEDhCcblbGRul4'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 143, 'givenName' => 'Vanessa', 'familyName' => 'Parle', 'preferredName' => 'Vanessa',
			'phone1' => '0434 997 575', 'phone2' => null,
			'address1' => 'PO Box 617', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Amanda Parle', 'emergencyPhone1' => '07 4630 3843', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'vparl1@yahoo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ecmod123@gmail.com', 'username' => 'ecmod123',
			'password' => $security->generatePasswordHash('okFCoSSSFlFkpPgd'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 144, 'givenName' => 'Ernest', 'familyName' => 'Marcum', 'preferredName' => 'Ernie',
			'phone1' => '0432 914 469', 'phone2' => '07 5435 2357',
			'address1' => '11 Tamarind St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jenni Harmony', 'emergencyPhone1' => '0435 128 421', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'ecmod123@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jem_laur@hotmail.com', 'username' => 'jem_laur',
			'password' => $security->generatePasswordHash('HskllhUBDlkMeoNw'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 145, 'givenName' => 'Jemma', 'familyName' => 'Laurie', 'preferredName' => 'Jemma',
			'phone1' => '0423 138 837', 'phone2' => null,
			'address1' => '21 Ballybritt St', 'address2' => null,
			'locality' => 'The Gap', 'state' => 'Qld', 'postcode' => '4061', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jem_laur@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'emmasheppard1984@yahoo.co.uk', 'username' => 'emmasheppard1984',
			'password' => $security->generatePasswordHash('1qJ7z5gUsOtBX3MN'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 146, 'givenName' => 'Emma', 'familyName' => 'Sheppard', 'preferredName' => 'Emma',
			'phone1' => '0435 840 991', 'phone2' => null,
			'address1' => '99 Weller Rd', 'address2' => null,
			'locality' => 'Tarragindi', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => 'Matthew Sheppard', 'emergencyPhone1' => '0478 592 543', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'emmasheppard1984@yahoo.co.uk',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'morgan.mchugh@hotmail.com', 'username' => 'morgan.mchugh',
			'password' => $security->generatePasswordHash('J7lblpKp5dGsC7xa'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 147, 'givenName' => 'Morgan', 'familyName' => 'McHugh', 'preferredName' => 'Morgan',
			'phone1' => '0423 180 522', 'phone2' => null,
			'address1' => '108 Schultz Rd', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kim Brooks', 'emergencyPhone1' => '0414 623 734', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'morgan.mchugh@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jannyduff@gmail.com', 'username' => 'jannyduff',
			'password' => $security->generatePasswordHash('vEmedelCkeb7tCoQ'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 148, 'givenName' => 'Jan', 'familyName' => 'Duffield', 'preferredName' => 'Jan',
			'phone1' => '0427 834 649', 'phone2' => '07 5429 6570',
			'address1' => '68A Palm St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jon Woodlands', 'emergencyPhone1' => '07 5429 6570', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jannyduff@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'keirapeace1@bigpond.com', 'username' => 'keirapeace1',
			'password' => $security->generatePasswordHash('1h9YOew9y55glFnd'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 149, 'givenName' => 'Keira', 'familyName' => 'Peace', 'preferredName' => 'Keira',
			'phone1' => '0459 175 111', 'phone2' => '07 5494 4518',
			'address1' => 'Lot xx Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'keirapeace1@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jadeconboy@hotmail.com', 'username' => 'jadeconboy',
			'password' => $security->generatePasswordHash('78p56Cyq4EdmLkHN'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 150, 'givenName' => 'Jade', 'familyName' => 'Nicole', 'preferredName' => 'Jade',
			'phone1' => '0450 979 939', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => 'Kenilworth', 'state' => 'Qld', 'postcode' => '4574', 'country' => 'Australia',
			'emergencyContact' => 'Shaun', 'emergencyPhone1' => '0450 979 939', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jadeconboy@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jennyangel89@hotmail.com', 'username' => 'jennyangel89',
			'password' => $security->generatePasswordHash('VE6guNqLQdn5MsSO'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 151, 'givenName' => 'Jennifer', 'familyName' => 'Smith', 'preferredName' => 'Jenny',
			'phone1' => '0414 976 319', 'phone2' => null,
			'address1' => '26 Peninsular Dr', 'address2' => null,
			'locality' => 'Surfers Paradise', 'state' => 'Qld', 'postcode' => '4217', 'country' => 'Australia',
			'emergencyContact' => 'Daniel Giles', 'emergencyPhone1' => '0415 529 413', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jennyangel89@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'staceyfamily@hotmail.com', 'username' => 'staceyfamily',
			'password' => $security->generatePasswordHash('JHuozY2GnvLDJbbv'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 152, 'givenName' => 'Danielle', 'familyName' => 'Thomson', 'preferredName' => 'Danielle',
			'phone1' => '0452 389 424', 'phone2' => null,
			'address1' => '8 Chantilly Cres', 'address2' => null,
			'locality' => 'Beerwah', 'state' => 'Qld', 'postcode' => '4519', 'country' => 'Australia',
			'emergencyContact' => 'Chloe Stacey', 'emergencyPhone1' => '0473 929 188', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'staceyfamily@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'pomei2888@gmail.com', 'username' => 'pomei2888',
			'password' => $security->generatePasswordHash('gNnrrDUtoepeQev2'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 153, 'givenName' => 'Po Me', 'familyName' => 'Kwong', 'preferredName' => 'Pomei (Paul May)',
			'phone1' => '07 5435 0288', 'phone2' => null,
			'address1' => 'Lot 38 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Silvia Chan', 'emergencyPhone1' => '0408 781 304', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'pomei2888@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ali.maclean@hotmail.com', 'username' => 'ali.maclean',
			'password' => $security->generatePasswordHash('rjUgkafeluSLWoeL'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 154, 'givenName' => 'Alison', 'familyName' => 'MacLean', 'preferredName' => 'Ali',
			'phone1' => '0429 988 100', 'phone2' => null,
			'address1' => '3 Lark Circuit', 'address2' => null,
			'locality' => 'Mountain Creek', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Sam Maclean', 'emergencyPhone1' => '07 4654 8067', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'ali.maclean@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'georgia_sykes@hotmail.com', 'username' => 'georgia_sykes',
			'password' => $security->generatePasswordHash('NnxOQqdQUg1skhqP'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 155, 'givenName' => 'Georgia', 'familyName' => 'Sykes', 'preferredName' => 'Georgia',
			'phone1' => '0439 986 960', 'phone2' => null,
			'address1' => '3 Naroo Ct', 'address2' => null,
			'locality' => 'Mooloolaba', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Kerry Lade', 'emergencyPhone1' => '0488 636 311', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'georgia_sykes@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'claudia.oberholzer@yahoo.com.au', 'username' => 'claudia.oberholzer',
			'password' => $security->generatePasswordHash('ec70DH8llXovrzv8'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 156, 'givenName' => 'Claudia', 'familyName' => 'Oberholzer', 'preferredName' => 'Claudia',
			'phone1' => '0448 847 290', 'phone2' => null,
			'address1' => '7 Juan St', 'address2' => null,
			'locality' => 'Alexandra Headland', 'state' => 'Qld', 'postcode' => '4572', 'country' => 'Australia',
			'emergencyContact' => 'Lucas Neilsen', 'emergencyPhone1' => '0428 158 609', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'claudia.oberholzer@yahoo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'l_n022@student.usc.edu.au', 'username' => 'l_n022',
			'password' => $security->generatePasswordHash('QJ61lY3NC55PpDoR'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 157, 'givenName' => 'Levi', 'familyName' => 'Needham', 'preferredName' => 'Levi/Levius/ Pedro',
			'phone1' => '0409 619 333', 'phone2' => null,
			'address1' => '87 Creekside Rd', 'address2' => null,
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Madonna Bryant', 'emergencyPhone1' => '0402 564 162', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'l_n022@student.usc.edu.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'om3gad@hotmail.com', 'username' => 'om3gad',
			'password' => $security->generatePasswordHash('23NdH2ncqvWMNFPD'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 158, 'givenName' => 'Daniel', 'familyName' => 'Giles', 'preferredName' => 'Dan',
			'phone1' => '0415 529 413', 'phone2' => null,
			'address1' => '26 Peninsular Dr', 'address2' => null,
			'locality' => 'Surfers Paradise', 'state' => 'Qld', 'postcode' => '4217', 'country' => 'Australia',
			'emergencyContact' => 'Jenny Smith', 'emergencyPhone1' => '0414 976 319', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'om3gad@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'barbie.dee@hotmail.com.au', 'username' => 'barbie.dee',
			'password' => $security->generatePasswordHash('g0dTmrjeCMhV4RPH'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 159, 'givenName' => 'Barbara', 'familyName' => 'Dancey', 'preferredName' => 'Barb',
			'phone1' => '0437 766 659', 'phone2' => null,
			'address1' => '34 Water Gum Cres', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tamara Tilling', 'emergencyPhone1' => '0428 821 575', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'barbie.dee@hotmail.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'dicollier@hotmail.com', 'username' => 'dicollier',
			'password' => $security->generatePasswordHash('mB6ZUgATlZRQka1Y'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 160, 'givenName' => 'Dianne', 'familyName' => 'Collier', 'preferredName' => 'Di',
			'phone1' => '07 5494 4552', 'phone2' => null,
			'address1' => '430 Policeman Spur Rd', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Zahra Chaudhry', 'emergencyPhone1' => '07 5494 4552', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'dicollier@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'soula.giannitis@yahoo.com', 'username' => 'soula.giannitis',
			'password' => $security->generatePasswordHash('FtkUxnBgbiPuc8YK'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 161, 'givenName' => 'Soula', 'familyName' => 'Giannitis', 'preferredName' => 'Soula',
			'phone1' => '0416 578 771', 'phone2' => null,
			'address1' => '6 Pacey St', 'address2' => null,
			'locality' => 'Eumundi', 'state' => 'Qld', 'postcode' => '4562', 'country' => 'Australia',
			'emergencyContact' => 'Guenara Meril', 'emergencyPhone1' => '0481 088 853', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'soula.giannitis@yahoo.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'bushy.bensheppard@gmail.com', 'username' => 'bushy.bensheppard',
			'password' => $security->generatePasswordHash('kRw3psaGnN8cltKe'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 162, 'givenName' => 'Ben', 'familyName' => 'Sheppard', 'preferredName' => 'Ben',
			'phone1' => '0447 154 580', 'phone2' => null,
			'address1' => '40 Victoria St', 'address2' => null,
			'locality' => 'Kelvin Grove', 'state' => 'Qld', 'postcode' => '4059', 'country' => 'Australia',
			'emergencyContact' => 'Derek & Jo Sheppard', 'emergencyPhone1' => '07 5441 3275', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'bushy.bensheppard@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'fruityjune2@gmail.com', 'username' => 'fruityjune2',
			'password' => $security->generatePasswordHash('UQizMOgMDFzZIzSv'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 163, 'givenName' => 'June', 'familyName' => 'Doyle', 'preferredName' => 'June',
			'phone1' => '0422 617 365', 'phone2' => null,
			'address1' => 'PO Box 664', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Gay Liddington', 'emergencyPhone1' => '0424 379 338', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'fruityjune2@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'hlangfield1@gmail.com', 'username' => 'hlangfield1',
			'password' => $security->generatePasswordHash('TGmttAx33Hg2bWAk'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 164, 'givenName' => 'Holly', 'familyName' => 'Langfield', 'preferredName' => 'Holly',
			'phone1' => '0427 112 174', 'phone2' => null,
			'address1' => '111/15 Esplanade', 'address2' => null,
			'locality' => 'Bulcock Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Tosh Broom', 'emergencyPhone1' => '07 5429 6502', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'hlangfield1@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'christine55g@optusnet.com.au', 'username' => 'christine55g',
			'password' => $security->generatePasswordHash('Xu535Fxb3pPlhXhe'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 165, 'givenName' => 'Christine', 'familyName' => 'Golab', 'preferredName' => 'Christine',
			'phone1' => '0429 872 268', 'phone2' => null,
			'address1' => '21 Coolana St', 'address2' => null,
			'locality' => 'Lota', 'state' => 'Qld', 'postcode' => '4179', 'country' => 'Australia',
			'emergencyContact' => 'Dave Cleary', 'emergencyPhone1' => '0408 654 807', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'christine55g@optusnet.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'liana.vermast.95@live.com.au', 'username' => 'liana.vermast.95',
			'password' => $security->generatePasswordHash('sV5Fy59DFGLt49oB'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 166, 'givenName' => 'Liana', 'familyName' => 'Vermast', 'preferredName' => 'Liana',
			'phone1' => '0403 436 068', 'phone2' => null,
			'address1' => '27 Koala Ct', 'address2' => null,
			'locality' => 'Little Mountain', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Tanya Vermast', 'emergencyPhone1' => '0412 866 401', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'liana.vermast.95@live.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'leeza@peacockpaper.com.au', 'username' => 'leeza',
			'password' => $security->generatePasswordHash('499dkFzZplUUNax7'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 167, 'givenName' => 'Leeza', 'familyName' => 'Stratford', 'preferredName' => 'Leeza',
			'phone1' => '0408 065 110', 'phone2' => null,
			'address1' => '464 Maleny-Kenilworth Rd', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Paul Stratford', 'emergencyPhone1' => '0417 643 988', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'leeza@peacockpaper.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'chris_riordan@hotmail.com', 'username' => 'chris_riordan',
			'password' => $security->generatePasswordHash('cPxOo207WAsuujqt'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 168, 'givenName' => 'Christine', 'familyName' => 'Riordan', 'preferredName' => 'Chris',
			'phone1' => '0421 173 868', 'phone2' => '07 4124 2432',
			'address1' => '43 Long St', 'address2' => null,
			'locality' => 'Point Vernon', 'state' => 'Qld', 'postcode' => '4655', 'country' => 'Australia',
			'emergencyContact' => 'Joan Chenery', 'emergencyPhone1' => '0438 401 828', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'chris_riordan@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'tammynyree@hotmail.com', 'username' => 'tammynyree',
			'password' => $security->generatePasswordHash('Zc3cn8e73HL812K6'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 169, 'givenName' => 'Tammy', 'familyName' => 'Walker', 'preferredName' => 'Tam',
			'phone1' => '0447 353 109', 'phone2' => null,
			'address1' => '5/12 Rakumba Pl', 'address2' => null,
			'locality' => 'Mountain Creek', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Vicki Mitchell', 'emergencyPhone1' => '0405 156 846', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'tammynyree@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'contact.ntn@gmail.com', 'username' => 'contact.ntn',
			'password' => $security->generatePasswordHash('ZYm5sXOIc0ygJbJh'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 170, 'givenName' => 'Tyrone', 'familyName' => 'Evans', 'preferredName' => 'Ty',
			'phone1' => '0420 308 897', 'phone2' => null,
			'address1' => '5 Hovea Ct', 'address2' => null,
			'locality' => 'Shailer Park', 'state' => 'Qld', 'postcode' => '4128', 'country' => 'Australia',
			'emergencyContact' => 'Gordon', 'emergencyPhone1' => '0428 787 079', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'contact.ntn@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jordan.austin27@gmail.com', 'username' => 'jordan.austin27',
			'password' => $security->generatePasswordHash('xdUdmlXtRzQDRxmT'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 171, 'givenName' => 'Jordan', 'familyName' => 'Austin', 'preferredName' => 'Jordan',
			'phone1' => '0457 269 350', 'phone2' => null,
			'address1' => '26 Gympie Rd', 'address2' => null,
			'locality' => 'Tin Can Bay', 'state' => 'Qld', 'postcode' => '4580', 'country' => 'Australia',
			'emergencyContact' => 'Cinda Austin', 'emergencyPhone1' => '0428 583 727', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jordan.austin27@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'fun@playlearnplay.com.au', 'username' => 'fun',
			'password' => $security->generatePasswordHash('v3QeWA43T1yxxzjb'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 172, 'givenName' => 'Callie', 'familyName' => 'Fitzgibbon', 'preferredName' => 'Victoria',
			'phone1' => '0455 304 313', 'phone2' => '07 5494 3220',
			'address1' => 'PO Box 824', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0455 304 313', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'fun@playlearnplay.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'gnott47@gmail.com', 'username' => 'gnott47',
			'password' => $security->generatePasswordHash('z17db4z5MX310WV1'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 173, 'givenName' => 'Graham', 'familyName' => 'Nott', 'preferredName' => 'Graham',
			'phone1' => '0419 020 868', 'phone2' => '07 5494 2343',
			'address1' => '314 Burgum Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'gnott47@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'chevera1950@hotmail.com', 'username' => 'chevera1950',
			'password' => $security->generatePasswordHash('Io0bN90kZeuLKTUb'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 174, 'givenName' => 'Carlos', 'familyName' => 'Sanchez', 'preferredName' => 'Carlos',
			'phone1' => '0405 563 749', 'phone2' => '07 5445 9417',
			'address1' => '189 Lower Landershoot Rd', 'address2' => null,
			'locality' => 'Landers Shoot', 'state' => 'Qld', 'postcode' => '4555', 'country' => 'Australia',
			'emergencyContact' => 'Paco Sanchez', 'emergencyPhone1' => '0455 500 223', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'chevera1950@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'callingdave@hotmail.com', 'username' => 'callingdave',
			'password' => $security->generatePasswordHash('7LOs8ZUGiwUiStJd'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 175, 'givenName' => 'David', 'familyName' => 'Handley', 'preferredName' => 'Dave',
			'phone1' => '0417 130 556', 'phone2' => null,
			'address1' => '73 Mountain View Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Diane', 'emergencyPhone1' => '0438 538 389', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'callingdave@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'diane.somers-cook@bigpond.com', 'username' => 'diane.somers-cook',
			'password' => $security->generatePasswordHash('Dh9XEPJh64lnCTsr'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 176, 'givenName' => 'Diane', 'familyName' => 'Somers-Cook', 'preferredName' => 'Diane',
			'phone1' => '0438 538 389', 'phone2' => null,
			'address1' => 'C/- 13 Cedar Grove Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'David Handley', 'emergencyPhone1' => '0417 130 556', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'diane.somers-cook@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'nemiliajohnstone@gmail.com', 'username' => 'nemiliajohnstone',
			'password' => $security->generatePasswordHash('LW2N77Kj35rUjUsA'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 177, 'givenName' => 'Ninindi', 'familyName' => 'Johnstone', 'preferredName' => 'Ninindi',
			'phone1' => '0499 983 902', 'phone2' => null,
			'address1' => '23 Coral St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Yughali', 'emergencyPhone1' => '0490 178 867', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'nemiliajohnstone@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'nicolebachler@live.com.au', 'username' => 'nicolebachler',
			'password' => $security->generatePasswordHash('aHlh0kfpqtaZ4BBz'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 178, 'givenName' => 'Nicole', 'familyName' => 'Bachler', 'preferredName' => 'Nicole',
			'phone1' => '0422 506 824', 'phone2' => null,
			'address1' => '1734 David Low Way', 'address2' => null,
			'locality' => 'Coolum Beach', 'state' => 'Qld', 'postcode' => '4573', 'country' => 'Australia',
			'emergencyContact' => 'Ray Bachler', 'emergencyPhone1' => '0418 782 0300?', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'nicolebachler@live.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lark19@live.com.au', 'username' => 'lark19',
			'password' => $security->generatePasswordHash('ZJsPCWTv15Y5qKFP'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 179, 'givenName' => 'Lyndelle', 'familyName' => 'Lark', 'preferredName' => 'Lyndelle',
			'phone1' => '0425 393 014', 'phone2' => null,
			'address1' => '1/252 Alexandra Pde', 'address2' => null,
			'locality' => 'Alexandra Headland', 'state' => 'Qld', 'postcode' => '4572', 'country' => 'Australia',
			'emergencyContact' => 'Michael Recchia', 'emergencyPhone1' => '0410 258 802', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'lark19@live.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'angus.rotherham@live.com', 'username' => 'angus.rotherham',
			'password' => $security->generatePasswordHash('l7Y8TuaGitYHn5YI'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 180, 'givenName' => 'Angus', 'familyName' => 'Rotherham', 'preferredName' => 'Angus',
			'phone1' => '0434 876 885', 'phone2' => null,
			'address1' => '6 Carapook Cres', 'address2' => null,
			'locality' => 'Tallebudgera', 'state' => 'Qld', 'postcode' => '4228', 'country' => 'Australia',
			'emergencyContact' => 'Dave Rotherham', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'angus.rotherham@live.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'nikkoraffin@hotmail.com', 'username' => 'nikkoraffin',
			'password' => $security->generatePasswordHash('bqob4w3RqGY2ryVm'),
			'status' => 1, 'banned_at' => date('Y-m-d H:i:s'), 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 181, 'givenName' => 'Nikko', 'familyName' => 'Raffin', 'preferredName' => 'Nikko',
			'phone1' => '0434 004 069', 'phone2' => null,
			'address1' => '12A Myrtle St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => 2020,
			'discovery' => 'Previous Volunteer', 'email' => 'nikkoraffin@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'maxinesmith61@hotmail.com', 'username' => 'maxinesmith61',
			'password' => $security->generatePasswordHash('WUSrqIHoEUMD9e8k'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 182, 'givenName' => 'Maxine', 'familyName' => 'Smith', 'preferredName' => 'Maxine',
			'phone1' => '0402 202 897', 'phone2' => null,
			'address1' => '200 Petrie Creek Rd', 'address2' => null,
			'locality' => 'Rosemount', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Hannah Fabian', 'emergencyPhone1' => '0423 389 972', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'maxinesmith61@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'poweritdown@hotmail.com', 'username' => 'poweritdown',
			'password' => $security->generatePasswordHash('N0WsWDWAly3Da5uE'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 183, 'givenName' => 'Kevin', 'familyName' => 'Timney', 'preferredName' => 'Kevin',
			'phone1' => '0458 274 128', 'phone2' => null,
			'address1' => '200 Petrie Creek Rd', 'address2' => null,
			'locality' => 'Rosemount', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Maxine Smith', 'emergencyPhone1' => '0402 202 897', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'poweritdown@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'peta.goold@me.com', 'username' => 'peta.goold',
			'password' => $security->generatePasswordHash('v0BYq0XtClDWW9JE'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 184, 'givenName' => 'Peta', 'familyName' => 'Goold', 'preferredName' => 'Peta',
			'phone1' => '0474 788 540', 'phone2' => null,
			'address1' => '24 Cedar Grove Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Liz Goold', 'emergencyPhone1' => '07 5426 0100', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'peta.goold@me.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'aquatic.antara@gmail.com', 'username' => 'aquatic.antara',
			'password' => $security->generatePasswordHash('96TYkRzcRGwFKOmi'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 185, 'givenName' => 'Antara', 'familyName' => 'May', 'preferredName' => 'Antara',
			'phone1' => '0499 731 666', 'phone2' => '07 5313 8333',
			'address1' => '390 Scotts Rd', 'address2' => null,
			'locality' => 'Booroobin', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Josh May', 'emergencyPhone1' => '0438 988 871', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'aquatic.antara@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'matdie@hotmail.com', 'username' => 'matdie',
			'password' => $security->generatePasswordHash('7zmJXDK3QtbPNXbe'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 186, 'givenName' => 'Matthew', 'familyName' => 'Gillis', 'preferredName' => 'Matt',
			'phone1' => '0475 795 939', 'phone2' => null,
			'address1' => '5 Adriano Ct', 'address2' => null,
			'locality' => 'Palmview', 'state' => 'Qld', 'postcode' => '4553', 'country' => 'Australia',
			'emergencyContact' => 'Fiona Croft', 'emergencyPhone1' => '0417 992 086', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'matdie@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'yvonne.dipold@gmail.com', 'username' => 'yvonne.dipold',
			'password' => $security->generatePasswordHash('e2cVqLgY98xBNAvo'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 187, 'givenName' => 'Yvonne', 'familyName' => 'Dipold', 'preferredName' => 'Moonbeam',
			'phone1' => '0473 631 852', 'phone2' => null,
			'address1' => '4/1 Cherry St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Andrea Dipold', 'emergencyPhone1' => '0409 463 674', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'yvonne.dipold@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suewashere@hotmail.com', 'username' => 'suewashere',
			'password' => $security->generatePasswordHash('kSs2v4i9yw34NtCG'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 188, 'givenName' => 'Susan', 'familyName' => 'Haley', 'preferredName' => 'Sue',
			'phone1' => '0417 635 703', 'phone2' => '07 3366 9078',
			'address1' => '1 Parkland Ct', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Keith Haley', 'emergencyPhone1' => '0408 981 590', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'suewashere@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'catt8151@gmail.com', 'username' => 'catt8151',
			'password' => $security->generatePasswordHash('PwP0w4GE6irsbWU3'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 189, 'givenName' => 'Catherine', 'familyName' => 'Elder', 'preferredName' => 'Cat',
			'phone1' => '0477 950 876', 'phone2' => null,
			'address1' => '45 Mary Cairncross Ave', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ally Walters', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'catt8151@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'psmithcontact@gmail.com', 'username' => 'psmithcontact',
			'password' => $security->generatePasswordHash('DqwNykMXyht53r5b'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 190, 'givenName' => 'Pam', 'familyName' => 'Smith', 'preferredName' => 'Pam',
			'phone1' => '0410 405 029', 'phone2' => null,
			'address1' => '540 Reeseville Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ian Smith', 'emergencyPhone1' => '0410 405 029', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'psmithcontact@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'thripence44@gmail.com', 'username' => 'thripence44',
			'password' => $security->generatePasswordHash('9ru3bcOrjEL36yH9'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 191, 'givenName' => 'Patricia', 'familyName' => 'Morgan', 'preferredName' => 'Thripence',
			'phone1' => '0421 181 195', 'phone2' => null,
			'address1' => 'Site 213/1 Diura St', 'address2' => null,
			'locality' => 'Maroochydore', 'state' => 'Qld', 'postcode' => '4558', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0408 801 255', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'thripence44@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'smbrown@pghbricks.com.au', 'username' => 'smbrown',
			'password' => $security->generatePasswordHash('VwxDXwESBe8F2Rb5'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 192, 'givenName' => 'Susan M', 'familyName' => 'Brown', 'preferredName' => 'Susan',
			'phone1' => '0434 940 795', 'phone2' => '07 5478 2873',
			'address1' => '5/19 Akeringa Pl', 'address2' => null,
			'locality' => 'Mooloolaba', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Suzanne Chumbley', 'emergencyPhone1' => '0428 745 498', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'smbrown@pghbricks.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kerryannebourke@gmail.com', 'username' => 'kerryannebourke',
			'password' => $security->generatePasswordHash('iUSx6XTtzb5kpOBE'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 193, 'givenName' => 'Kerry-Anne', 'familyName' => 'Bourke', 'preferredName' => 'Kerry-Anne',
			'phone1' => '0402 139 944', 'phone2' => '07 3161 9683',
			'address1' => 'PO Box 7748', 'address2' => null,
			'locality' => 'East Brisbane', 'state' => 'Qld', 'postcode' => '4169', 'country' => 'Australia',
			'emergencyContact' => 'Kevin Narith', 'emergencyPhone1' => '07 3161 9683', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'kerryannebourke@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ianbbrady@gmail.com', 'username' => 'ianbbrady',
			'password' => $security->generatePasswordHash('wXUM8v9JNlOxY9AE'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 194, 'givenName' => 'Ian', 'familyName' => 'Brady', 'preferredName' => 'Ian',
			'phone1' => '0400 276 110', 'phone2' => '07 3161 9683',
			'address1' => 'C/- PO Box 7748', 'address2' => null,
			'locality' => 'East Brisbane', 'state' => 'Qld', 'postcode' => '4169', 'country' => 'Australia',
			'emergencyContact' => 'Kevin Narith', 'emergencyPhone1' => '07 3161 9683', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'ianbbrady@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'marian@keystonearchitects.com', 'username' => 'marian',
			'password' => $security->generatePasswordHash('G6G883mlsjItKCc2'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 195, 'givenName' => 'Marian', 'familyName' => 'Graham', 'preferredName' => 'Marian',
			'phone1' => '0427 769 727', 'phone2' => null,
			'address1' => '43 East St', 'address2' => null,
			'locality' => 'Scarness', 'state' => 'Qld', 'postcode' => '4655', 'country' => 'Australia',
			'emergencyContact' => 'Joan Chenery', 'emergencyPhone1' => '0438 401 828', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'marian@keystonearchitects.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ellcee8@yahoo.com', 'username' => 'ellcee8',
			'password' => $security->generatePasswordHash('Yif58iYXFinqOFSs'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 196, 'givenName' => 'Leanne', 'familyName' => 'Philipcollins', 'preferredName' => 'Lea',
			'phone1' => '0409 753 790', 'phone2' => null,
			'address1' => '565 Maleny-Montville Rd', 'address2' => null,
			'locality' => 'Balmoral Ridge', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Gavan McKew', 'emergencyPhone1' => '0439 856 890', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'ellcee8@yahoo.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'fiona.cooke92@gmail.com', 'username' => 'fiona.cooke92',
			'password' => $security->generatePasswordHash('7v88pBezWcLa5DSL'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 197, 'givenName' => 'Fiona', 'familyName' => 'Cooke', 'preferredName' => 'Fiona',
			'phone1' => '0402 360 444', 'phone2' => null,
			'address1' => '5/105 Vernon St', 'address2' => null,
			'locality' => 'Nundah', 'state' => 'Qld', 'postcode' => '4012', 'country' => 'Australia',
			'emergencyContact' => 'Erica', 'emergencyPhone1' => '0432 339 727', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'fiona.cooke92@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'tracylewis007@live.com', 'username' => 'tracylewis007',
			'password' => $security->generatePasswordHash('pZQw8uwZHsp1OZ2K'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 198, 'givenName' => 'Gillian Tracy', 'familyName' => 'Lewis', 'preferredName' => 'Tracy',
			'phone1' => '0476 961 932', 'phone2' => null,
			'address1' => '10/4 Meadow Lane', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Steve Markham', 'emergencyPhone1' => '0417 638 636', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'tracylewis007@live.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'marggrace@gmail.com', 'username' => 'marggrace',
			'password' => $security->generatePasswordHash('qKgc31WV6UzqsuqW'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 199, 'givenName' => 'Margaret', 'familyName' => 'Grace', 'preferredName' => 'Margaret',
			'phone1' => '0417 724 253', 'phone2' => '07 5477 1770',
			'address1' => '6 Timbertop St', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Nicholas Hendry', 'emergencyPhone1' => '0413 333 569', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'marggrace@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'sjoyce1@bordernet.com.au', 'username' => 'sjoyce1',
			'password' => $security->generatePasswordHash('QcYcrBR45cq85u0F'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 200, 'givenName' => 'Shane', 'familyName' => 'Joyce', 'preferredName' => 'Shane',
			'phone1' => '0428 931 880', 'phone2' => null,
			'address1' => '252 Mudlo Rd', 'address2' => null,
			'locality' => 'Kilkivan', 'state' => 'Qld', 'postcode' => '4600', 'country' => 'Australia',
			'emergencyContact' => 'Pomei Kwong', 'emergencyPhone1' => '07 5435 0288', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'sjoyce1@bordernet.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'mitch.c.tanner@outlook.com', 'username' => 'mitch.c.tanner',
			'password' => $security->generatePasswordHash('2f9oM4rzLHULVDP8'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 201, 'givenName' => 'Mitchell', 'familyName' => 'Tanner', 'preferredName' => 'Mitch',
			'phone1' => '0474 284 549', 'phone2' => null,
			'address1' => '531 Maleny-Kenilworth Rd', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sue Tanner', 'emergencyPhone1' => '07 5435 0348', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'mitch.c.tanner@outlook.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'gracedeanne8@gmail.com', 'username' => 'gracedeanne8',
			'password' => $security->generatePasswordHash('cTvxEtCStGjkEO68'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 202, 'givenName' => 'Deanne', 'familyName' => 'Grace', 'preferredName' => 'Deanne',
			'phone1' => '0408 756 904', 'phone2' => '07 5435 8614',
			'address1' => '531 Maleny-Kenilworth Rd', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'gracedeanne8@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lynda.rush@bigpond.com', 'username' => 'lynda.rush',
			'password' => $security->generatePasswordHash('9OxRvkMakLF392on'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 203, 'givenName' => 'Lynda', 'familyName' => 'Rush', 'preferredName' => 'Lynda',
			'phone1' => '0427 700 138', 'phone2' => null,
			'address1' => '28 Coral St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Skye Rush', 'emergencyPhone1' => '0477 278 921', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'lynda.rush@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'sadiegjones@yahoo.com.au', 'username' => 'sadiegjones',
			'password' => $security->generatePasswordHash('R6WlpY43CipLZhg7'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 204, 'givenName' => 'Sadie', 'familyName' => 'Jones', 'preferredName' => 'Sadie',
			'phone1' => '0405 169 745', 'phone2' => null,
			'address1' => '25 Mansfield St', 'address2' => null,
			'locality' => 'Coorparoo', 'state' => 'Qld', 'postcode' => '4151', 'country' => 'Australia',
			'emergencyContact' => 'David Jay Penman', 'emergencyPhone1' => '0420 221 089', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'sadiegjones@yahoo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'david.penman@gmail.com', 'username' => 'david.penman',
			'password' => $security->generatePasswordHash('vaI1hXNWUjzEDb5U'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 205, 'givenName' => 'David Jack', 'familyName' => 'Penman', 'preferredName' => 'Jay',
			'phone1' => '0420 221 089', 'phone2' => null,
			'address1' => '25 Mansfield St', 'address2' => null,
			'locality' => 'Coorparoo', 'state' => 'Qld', 'postcode' => '4151', 'country' => 'Australia',
			'emergencyContact' => 'Sadie Jones', 'emergencyPhone1' => '0405 169 745', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'david.penman@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'k.hinckfuss@gmail.com', 'username' => 'k.hinckfuss',
			'password' => $security->generatePasswordHash('7Zo3vtSMaeUwfYb2'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 206, 'givenName' => 'Kim', 'familyName' => 'Hinckfuss', 'preferredName' => 'Kimbo',
			'phone1' => '0424 229 020', 'phone2' => '07 5435 8139',
			'address1' => '13 Measberg Rd', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'David Hinckfuss', 'emergencyPhone1' => '0466 332 087', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'k.hinckfuss@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'maree1964@yahoo.com', 'username' => 'maree1964',
			'password' => $security->generatePasswordHash('45hxoEJVKy23S1xw'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 207, 'givenName' => 'Maree', 'familyName' => 'Robertson', 'preferredName' => 'Maree',
			'phone1' => '0427 122 608', 'phone2' => null,
			'address1' => '6 Pinewood Circuit', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Anne Craven', 'emergencyPhone1' => '0404 768 761', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'maree1964@yahoo.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'maria.zann@uqconnect.edu.au', 'username' => 'maria.zann',
			'password' => $security->generatePasswordHash('5rViLUQzP1sNLYBV'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 208, 'givenName' => 'Maria', 'familyName' => 'Zann', 'preferredName' => 'Maria',
			'phone1' => '0429 799 267', 'phone2' => null,
			'address1' => '318 Albert St', 'address2' => null,
			'locality' => 'Maryborough', 'state' => 'Qld', 'postcode' => '4650', 'country' => 'Australia',
			'emergencyContact' => 'Salko Mesic', 'emergencyPhone1' => '0490 159 209', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'maria.zann@uqconnect.edu.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'mazza.727@hotmail.com', 'username' => 'mazza.727',
			'password' => $security->generatePasswordHash('HK2ZfOKdmjDg0s4j'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 209, 'givenName' => 'Marilyn', 'familyName' => 'Marsh-Booth', 'preferredName' => 'Miss M',
			'phone1' => '0419 654 227', 'phone2' => null,
			'address1' => '20 Bilenda Cl', 'address2' => null,
			'locality' => 'Beerwah', 'state' => 'Qld', 'postcode' => '4519', 'country' => 'Australia',
			'emergencyContact' => 'Pat Comerford', 'emergencyPhone1' => '0411 835 579', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'mazza.727@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'bobwords@ozemail.com.au', 'username' => 'bobwords',
			'password' => $security->generatePasswordHash('Y6d2pnBEP6tfn5jG'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 210, 'givenName' => 'Robert', 'familyName' => 'Wilson', 'preferredName' => 'Bob',
			'phone1' => '0438 525 119', 'phone2' => '07 5435 2333',
			'address1' => '34 Palm St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Laurel Wilson', 'emergencyPhone1' => '0418 187 104', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'bobwords@ozemail.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'todd.brenda@bigpond.com', 'username' => 'todd.brenda',
			'password' => $security->generatePasswordHash('6Cf1mDPSepdcJvKn'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 211, 'givenName' => 'Brenda', 'familyName' => 'McGreevy', 'preferredName' => 'Brenda',
			'phone1' => '', 'phone2' => null,
			'address1' => '3 Cedar Grove Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'todd.brenda@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suesten@gmail.com', 'username' => 'suesten',
			'password' => $security->generatePasswordHash('6Y2lAnfaYqQtCY7U'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 212, 'givenName' => 'Sue-Ellen', 'familyName' => 'Stenning', 'preferredName' => 'Sue',
			'phone1' => '0428 215 816', 'phone2' => null,
			'address1' => 'PO Box 609', 'address2' => null,
			'locality' => 'Mullumbimby', 'state' => 'NSW', 'postcode' => '2482', 'country' => 'Australia',
			'emergencyContact' => 'Henry Stenning', 'emergencyPhone1' => '0411 456 331', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'suesten@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ftay5096@gmail.com', 'username' => 'ftay5096',
			'password' => $security->generatePasswordHash('71iNwfhjAidiIWqV'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 213, 'givenName' => 'Fiona', 'familyName' => 'Taylor', 'preferredName' => 'Fee',
			'phone1' => '0421 464 160', 'phone2' => null,
			'address1' => '38 Parfrey Rd', 'address2' => null,
			'locality' => 'Rochedale', 'state' => 'Qld', 'postcode' => '4123', 'country' => 'Australia',
			'emergencyContact' => 'Rob Taylor', 'emergencyPhone1' => '0427 557 050', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'ftay5096@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'marieb@gil.com.au', 'username' => 'marieb',
			'password' => $security->generatePasswordHash('MxLiKiielx9Gb8GP'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 214, 'givenName' => 'Ann', 'familyName' => 'Bermingham', 'preferredName' => 'Ann',
			'phone1' => '0401 683 830', 'phone2' => '07 3371 6507',
			'address1' => '4/50 Swann Rd', 'address2' => null,
			'locality' => 'Taringa', 'state' => 'Qld', 'postcode' => '4068', 'country' => 'Australia',
			'emergencyContact' => 'Marie Bermingham', 'emergencyPhone1' => '0400 650 789', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'marieb@gil.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'joliasta@hotmail.com', 'username' => 'joliasta',
			'password' => $security->generatePasswordHash('jCEB0vOWu8cvMw71'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 215, 'givenName' => 'Asta', 'familyName' => 'Joli', 'preferredName' => 'Asta',
			'phone1' => '0421 191 840', 'phone2' => null,
			'address1' => '741 Eastern Mary River Rd', 'address2' => null,
			'locality' => 'Cambroon', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jenny Evans', 'emergencyPhone1' => '0499 575 062', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'joliasta@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'fugliez78@icloud.com', 'username' => 'fugliez78',
			'password' => $security->generatePasswordHash('HeiesViWCamMviCw'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 216, 'givenName' => 'Jennifer', 'familyName' => 'Evans', 'preferredName' => 'Jen',
			'phone1' => '0499 575 062', 'phone2' => null,
			'address1' => '1525 Maleny Kenilworth Rd', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Asta Joli', 'emergencyPhone1' => '0421 191 840', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'fugliez78@icloud.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'judith.venn@optusnet.com.au', 'username' => 'judith.venn',
			'password' => $security->generatePasswordHash('oVCMUaahkrBQbzN8'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 217, 'givenName' => 'Judith', 'familyName' => 'Venn', 'preferredName' => 'Jude',
			'phone1' => '0408 459 798', 'phone2' => '07 5445 9791',
			'address1' => '190 Lower Landershute Rd', 'address2' => null,
			'locality' => 'Landers Shoot', 'state' => 'Qld', 'postcode' => '4555', 'country' => 'Australia',
			'emergencyContact' => 'Stuart Venn', 'emergencyPhone1' => '0475 914 240', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'judith.venn@optusnet.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'stuartv1@optusnet.com.au', 'username' => 'stuartv1',
			'password' => $security->generatePasswordHash('LsWQzsuukstylm0V'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 218, 'givenName' => 'Stuart', 'familyName' => 'Venn', 'preferredName' => 'Stuey',
			'phone1' => '0475 914 240', 'phone2' => '07 5445 9791',
			'address1' => '190 Lower Landershute Rd', 'address2' => null,
			'locality' => 'Landers Shoot', 'state' => 'Qld', 'postcode' => '4555', 'country' => 'Australia',
			'emergencyContact' => 'Jude Venn', 'emergencyPhone1' => '0408 459 798', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'stuartv1@optusnet.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ocohood@gmail.com', 'username' => 'ocohood',
			'password' => $security->generatePasswordHash('KybUS6idea2osUGD'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 219, 'givenName' => 'Margaret', 'familyName' => 'O\'Connell', 'preferredName' => 'Margi',
			'phone1' => '0468 381 212', 'phone2' => '07 5494 4742',
			'address1' => '1725 Maleny Kenilworth Rd', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Christie O\'Connell', 'emergencyPhone1' => '07 5494 4742', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'ocohood@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lina.hammond@lizz.com.au', 'username' => 'lina.hammond',
			'password' => $security->generatePasswordHash('uWN8XVvCfdvIinTI'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 220, 'givenName' => 'Caroline', 'familyName' => 'Hammond', 'preferredName' => 'Lina',
			'phone1' => '0418 794 475', 'phone2' => '07 3366 8867',
			'address1' => 'Unit 10/46 Dalmore St', 'address2' => null,
			'locality' => 'Ashgrove', 'state' => 'Qld', 'postcode' => '4060', 'country' => 'Australia',
			'emergencyContact' => 'Craig Claxton', 'emergencyPhone1' => '0434 951 307', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'lina.hammond@lizz.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kprfc69@optusnet.com.au', 'username' => 'kprfc69',
			'password' => $security->generatePasswordHash('CGB4RRuUq0BEkjJ9'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 221, 'givenName' => 'Sharon', 'familyName' => 'Jackson', 'preferredName' => 'Shaz',
			'phone1' => '0403 935 739', 'phone2' => null,
			'address1' => '69 Norman St', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => 'Jon Whitehead', 'emergencyPhone1' => '0432 122 155', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'kprfc69@optusnet.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'cheryll.62@hotmail.com', 'username' => 'cheryll.62',
			'password' => $security->generatePasswordHash('WgiKFcN9FYw9VjU7'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 222, 'givenName' => 'Cheryl', 'familyName' => 'Laurent', 'preferredName' => 'Cheryl',
			'phone1' => '0422 577 392', 'phone2' => null,
			'address1' => '216 Douglas Rd', 'address2' => null,
			'locality' => 'Salisbury', 'state' => 'Qld', 'postcode' => '4107', 'country' => 'Australia',
			'emergencyContact' => 'Rob Stewart', 'emergencyPhone1' => '0431 200 123', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'cheryll.62@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'andymet@gmail.com', 'username' => 'andymet',
			'password' => $security->generatePasswordHash('Sg8nzldcbfrYxFbA'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 223, 'givenName' => 'Andrew', 'familyName' => 'Metcalfe', 'preferredName' => 'Andrew',
			'phone1' => '0447 040 604', 'phone2' => null,
			'address1' => '85 Carter Rd', 'address2' => null,
			'locality' => 'Nambour', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'andymet@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'pdscharf@yahoo.com.au', 'username' => 'pdscharf',
			'password' => $security->generatePasswordHash('ObsiKHGZp8cKHppU'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 224, 'givenName' => 'Linda', 'familyName' => 'Scharf', 'preferredName' => 'Linda',
			'phone1' => '0429 654 033', 'phone2' => null,
			'address1' => '9 Meagan St', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Peter Scharf', 'emergencyPhone1' => '0428 562 615', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'pdscharf@yahoo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'janebrouet@westnet.com.au', 'username' => 'janebrouet',
			'password' => $security->generatePasswordHash('lSCDtL98cZqDBQTB'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 225, 'givenName' => 'Jane', 'familyName' => 'Brouet', 'preferredName' => 'Jane',
			'phone1' => '0488 942 553', 'phone2' => '07 5494 4787',
			'address1' => 'Lot 62 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jodie Lyn Brown', 'emergencyPhone1' => '0413 330 406', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'janebrouet@westnet.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'pjef2060@gmail.com', 'username' => 'pjef2060',
			'password' => $security->generatePasswordHash('z8dEovVeHU8LKtoB'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 226, 'givenName' => 'Patricia', 'familyName' => 'Jeffery', 'preferredName' => 'Trish',
			'phone1' => '0401 182 213', 'phone2' => null,
			'address1' => 'C/- 9 Pinewood St', 'address2' => null,
			'locality' => 'Little Mountain', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Morgan Jeffery', 'emergencyPhone1' => '0403 458 559', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'pjef2060@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kepaint07@gmail.com', 'username' => 'kepaint07',
			'password' => $security->generatePasswordHash('soNjFJeSbwcUiKFR'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 227, 'givenName' => 'Kevin', 'familyName' => 'Edwards', 'preferredName' => 'Kevin',
			'phone1' => '0491 841 77?', 'phone2' => null,
			'address1' => '7 Tamarind St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'kepaint07@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'aumrah.donash@gmail.com', 'username' => 'aumrah.donash',
			'password' => $security->generatePasswordHash('bnqYbwd0dNPF1m0J'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 228, 'givenName' => 'Daniel', 'familyName' => 'Peterson', 'preferredName' => 'Dan',
			'phone1' => '0498 055 440', 'phone2' => null,
			'address1' => '1181 Landsborough-Maleny Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Lisa Marie Fletcher', 'emergencyPhone1' => '0476 511 391', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'aumrah.donash@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'johndwoods@hotmail.com', 'username' => 'johndwoods',
			'password' => $security->generatePasswordHash('5Rymi0azcXp7Exyz'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 229, 'givenName' => 'John', 'familyName' => 'Woods', 'preferredName' => 'John',
			'phone1' => '0478 728 839', 'phone2' => null,
			'address1' => '168 Macdonnell Rd', 'address2' => null,
			'locality' => 'Eagle Heights', 'state' => 'Qld', 'postcode' => '4271', 'country' => 'Australia',
			'emergencyContact' => 'Ken Woods', 'emergencyPhone1' => '0417 726 789', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'johndwoods@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'perpetualstars1@gmail.com', 'username' => 'perpetualstars1',
			'password' => $security->generatePasswordHash('oEV6S7I3R9M8W8lq'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 230, 'givenName' => 'Zondrya', 'familyName' => 'Vyncent', 'preferredName' => 'Zondrya',
			'phone1' => '0408 788 873', 'phone2' => null,
			'address1' => '251 Bridge Creek Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Julie Stout', 'emergencyPhone1' => '0429 396 963', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'perpetualstars1@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'redcrowband@icloud.com', 'username' => 'redcrowband',
			'password' => $security->generatePasswordHash('ynFUAOuqmaq1Ym3k'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 231, 'givenName' => 'Sarah', 'familyName' => 'Calderwood', 'preferredName' => 'Sarah',
			'phone1' => '0417 633 212', 'phone2' => null,
			'address1' => '1/5 Norwood St', 'address2' => null,
			'locality' => 'Toowong', 'state' => 'Qld', 'postcode' => '4066', 'country' => 'Australia',
			'emergencyContact' => 'Paul Branodon', 'emergencyPhone1' => '0411 145 313', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'redcrowband@icloud.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'raineedennis.12@hotmail.com', 'username' => 'raineedennis.12',
			'password' => $security->generatePasswordHash('tRoXwqP7MIhGUkWR'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 232, 'givenName' => 'Lorraine', 'familyName' => 'Dennis', 'preferredName' => 'Rainee',
			'phone1' => '0475 000 353', 'phone2' => null,
			'address1' => '6 Macadamia Dr', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'raineedennis.12@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'mazziistarr@gmail.com', 'username' => 'mazziistarr',
			'password' => $security->generatePasswordHash('F6FzfJhilN0nooPT'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 233, 'givenName' => 'Marianne', 'familyName' => 'Voss', 'preferredName' => 'Maz',
			'phone1' => '0417 163 004', 'phone2' => null,
			'address1' => '38 Redwood Ave', 'address2' => null,
			'locality' => 'Marcus Beach', 'state' => 'Qld', 'postcode' => '4573', 'country' => 'Australia',
			'emergencyContact' => 'Sally-Ann Keating', 'emergencyPhone1' => '0400 054 413', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'mazziistarr@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'trangpham.wf@gmail.com', 'username' => 'trangpham.wf',
			'password' => $security->generatePasswordHash('whwn2opUPmF1jmkM'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 234, 'givenName' => 'Trang', 'familyName' => 'Pham', 'preferredName' => 'Naveen',
			'phone1' => '0481 713 332', 'phone2' => null,
			'address1' => '53 Valmar St', 'address2' => null,
			'locality' => 'Uppper Mount Gravatt', 'state' => 'Qld', 'postcode' => '4122', 'country' => 'Australia',
			'emergencyContact' => 'Anh Pham', 'emergencyPhone1' => '0410 047 339', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'trangpham.wf@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'christineradcliffe@yahoo.com', 'username' => 'christineradcliffe',
			'password' => $security->generatePasswordHash('alCGvgWOzppcv9gW'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 235, 'givenName' => 'Christine', 'familyName' => 'Radcliffe', 'preferredName' => 'Christine',
			'phone1' => '0411 414 294', 'phone2' => '07 5446 3416',
			'address1' => '25 Seagull Ave', 'address2' => null,
			'locality' => 'Coolum Beach', 'state' => 'Qld', 'postcode' => '4573', 'country' => 'Australia',
			'emergencyContact' => 'Bruce McKendry', 'emergencyPhone1' => '0401 792 812', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'christineradcliffe@yahoo.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'awok@bigpond.com', 'username' => 'awok',
			'password' => $security->generatePasswordHash('64nnukC4qG8Si78B'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 236, 'givenName' => 'Denise', 'familyName' => 'Chapple', 'preferredName' => 'Deni',
			'phone1' => '0417 740 218', 'phone2' => '07 4170 0731',
			'address1' => 'PO Box 236', 'address2' => null,
			'locality' => 'Blackbutt', 'state' => 'Qld', 'postcode' => '4306', 'country' => 'Australia',
			'emergencyContact' => 'Michael Whiticker', 'emergencyPhone1' => '0419 026 895', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'awok@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'mimiebejer@yahoo.com.au', 'username' => 'mimiebejer',
			'password' => $security->generatePasswordHash('IqRSY5HDDv7NEEjX'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 237, 'givenName' => 'Emelia', 'familyName' => 'Ebejer', 'preferredName' => 'Mimi',
			'phone1' => '', 'phone2' => null,
			'address1' => '7 Teak St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'mimiebejer@yahoo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'janeedit@gmail.com', 'username' => 'janeedit',
			'password' => $security->generatePasswordHash('YmZOGRTE0k1V9eOl'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 238, 'givenName' => 'Jane', 'familyName' => 'Todd', 'preferredName' => 'Jane',
			'phone1' => '0412 747 034', 'phone2' => '07 5435 2578',
			'address1' => '15 Tulip St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Michael Todd', 'emergencyPhone1' => '0412 593 547', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'janeedit@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'tnealson@gmail.com', 'username' => 'tnealson',
			'password' => $security->generatePasswordHash('GLE6MqWd7xria0xS'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 239, 'givenName' => 'Thomas', 'familyName' => 'Nealson', 'preferredName' => 'Tom',
			'phone1' => '0437 279 505', 'phone2' => '07 5494 4590',
			'address1' => 'Lot 81 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sybil Maclure', 'emergencyPhone1' => '07 5494 4590', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'tnealson@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'poolrenovation@bigpond.com', 'username' => 'poolrenovation',
			'password' => $security->generatePasswordHash('wc9gPy01ZAsgHRp3'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 240, 'givenName' => 'Leesa', 'familyName' => 'Fischer', 'preferredName' => 'Leesa',
			'phone1' => '0417 716 016', 'phone2' => null,
			'address1' => '7 Alstonville Way', 'address2' => null,
			'locality' => 'Currimundi', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Tony Fischer', 'emergencyPhone1' => '0407 577 527', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'poolrenovation@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'skyfox@live.com.au', 'username' => 'skyfox',
			'password' => $security->generatePasswordHash('NxoeEQuvGexJHSFx'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 241, 'givenName' => 'Denise', 'familyName' => 'Smith-Anderson', 'preferredName' => 'Sky',
			'phone1' => '0450 153 057', 'phone2' => '07 5447 0656',
			'address1' => '39 Jorgensens Rd', 'address2' => null,
			'locality' => 'Ridgewood', 'state' => 'Qld', 'postcode' => '4563', 'country' => 'Australia',
			'emergencyContact' => 'Robyn Humphries', 'emergencyPhone1' => '07 5485 3585', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'skyfox@live.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'patcraigie@gmail.com', 'username' => 'patcraigie',
			'password' => $security->generatePasswordHash('SmFa0HfdVpNx1ptl'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 242, 'givenName' => 'Patrick', 'familyName' => 'Craigie', 'preferredName' => 'Pat',
			'phone1' => '0417 207 642', 'phone2' => null,
			'address1' => '106 Evans Rd', 'address2' => null,
			'locality' => 'Black Mountain', 'state' => 'Qld', 'postcode' => '4563', 'country' => 'Australia',
			'emergencyContact' => 'Becky Wandell', 'emergencyPhone1' => '0418 782 489', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'patcraigie@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'tanyas_a_star@hotmail.com', 'username' => 'tanyas_a_star',
			'password' => $security->generatePasswordHash('NUa3QYxMzXi5hoZt'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 243, 'givenName' => 'Tanya', 'familyName' => 'Denholm', 'preferredName' => 'Tahnz',
			'phone1' => '0421 621 624', 'phone2' => null,
			'address1' => '40 Aspland St', 'address2' => null,
			'locality' => 'Nambour', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Trish Denholm', 'emergencyPhone1' => '0420 282 533', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'tanyas_a_star@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'foodthatsings@gmail.com', 'username' => 'foodthatsings',
			'password' => $security->generatePasswordHash('996MNX82NlE0jtK5'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 244, 'givenName' => 'Veronica', 'familyName' => 'Sheather', 'preferredName' => 'Roni',
			'phone1' => '0420 310 202', 'phone2' => null,
			'address1' => '3 Roberts St', 'address2' => null,
			'locality' => 'Palmwoods', 'state' => 'Qld', 'postcode' => '4555', 'country' => 'Australia',
			'emergencyContact' => 'Dayne Morley', 'emergencyPhone1' => '0433 916 994', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'foodthatsings@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jofleming48@gmail.com', 'username' => 'jofleming48',
			'password' => $security->generatePasswordHash('Dv50xC7GPPKGPNcA'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 245, 'givenName' => 'Joanne', 'familyName' => 'Fleming', 'preferredName' => 'Jo',
			'phone1' => '0403 686 028', 'phone2' => null,
			'address1' => '22 Sutherland St', 'address2' => null,
			'locality' => 'Dicky Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Veronica Sheather', 'emergencyPhone1' => '0420 310 202', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jofleming48@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'rrrr27au@yahoo.com', 'username' => 'rrrr27au',
			'password' => $security->generatePasswordHash('UNUP3PzIFnPFfUwJ'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 246, 'givenName' => 'Michelle', 'familyName' => 'McLucas', 'preferredName' => 'Michelle',
			'phone1' => '0406 754 640', 'phone2' => null,
			'address1' => '9 Montague Ct', 'address2' => null,
			'locality' => 'Everton Hills', 'state' => 'Qld', 'postcode' => '4053', 'country' => 'Australia',
			'emergencyContact' => 'Anna', 'emergencyPhone1' => '0406 754 640', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'rrrr27au@yahoo.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'su@wellnessonthemove.com.au', 'username' => 'su',
			'password' => $security->generatePasswordHash('Xx4AdDYkqAy56Mma'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 247, 'givenName' => 'Susan', 'familyName' => 'Tindall', 'preferredName' => 'Su',
			'phone1' => '0409 637 082', 'phone2' => null,
			'address1' => '1019 Winn Rd', 'address2' => null,
			'locality' => 'Mount Samson', 'state' => 'Qld', 'postcode' => '4520', 'country' => 'Australia',
			'emergencyContact' => 'Graham Finney', 'emergencyPhone1' => '0418 881 891', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'su@wellnessonthemove.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'markingtime@iinet.net.au', 'username' => 'markingtime',
			'password' => $security->generatePasswordHash('4qW5RTXCRI9vC1hU'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 248, 'givenName' => 'Mark', 'familyName' => 'Powlesland', 'preferredName' => 'Mark',
			'phone1' => '0401 869 190', 'phone2' => '07 5491 5360',
			'address1' => '20 Ridgehaven Ct', 'address2' => null,
			'locality' => 'Aroona', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Ingrid', 'emergencyPhone1' => '0403 550 136', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'markingtime@iinet.net.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'troybaxter@gmail.com', 'username' => 'troybaxter',
			'password' => $security->generatePasswordHash('AKlBZLMqXTNdNX0U'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 249, 'givenName' => 'Troy', 'familyName' => 'Baxter', 'preferredName' => 'Troy',
			'phone1' => '0417 720 038', 'phone2' => '07 5496 3435',
			'address1' => '669 Bellthorpe Range Rd', 'address2' => null,
			'locality' => 'Stanmore', 'state' => 'Qld', 'postcode' => '4514', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'troybaxter@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ian@f3-design.com.au', 'username' => 'ian',
			'password' => $security->generatePasswordHash('pFXq638KJFiA1yrO'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 250, 'givenName' => 'Ian', 'familyName' => 'Pollard', 'preferredName' => 'Ian',
			'phone1' => '0432 611 386', 'phone2' => '07 5499 9549',
			'address1' => '44 Meadow Rd', 'address2' => null,
			'locality' => 'Reesville', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Michele Crocker', 'emergencyPhone1' => '0413 470 913', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'ian@f3-design.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'find.briancurry@gmail.com', 'username' => 'find.briancurry',
			'password' => $security->generatePasswordHash('mnIHrJ46jFNO1RHc'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 251, 'givenName' => 'Brian', 'familyName' => 'Curry', 'preferredName' => 'Brian',
			'phone1' => '0414 544 661', 'phone2' => '07 5472 8163',
			'address1' => 'Starlight Community', 'address2' => '405 Browns Creek Rd',
			'locality' => 'Cooloolabin', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Lisa Williams', 'emergencyPhone1' => '0412 305 645', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'find.briancurry@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jade.cromwell@uqconnect.edu.au', 'username' => 'jade.cromwell',
			'password' => $security->generatePasswordHash('AdeblKYlsIXisVQ7'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 252, 'givenName' => 'Jade', 'familyName' => 'Cromwell', 'preferredName' => 'Jade',
			'phone1' => '0413 633 582', 'phone2' => null,
			'address1' => '4/159 Fairfield Rd', 'address2' => null,
			'locality' => 'Fairfield Brisbane', 'state' => 'Qld', 'postcode' => '4103', 'country' => 'Australia',
			'emergencyContact' => 'Karen', 'emergencyPhone1' => '0419 323 806', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jade.cromwell@uqconnect.edu.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jeerunt@gmail.com', 'username' => 'jeerunt',
			'password' => $security->generatePasswordHash('TJE0GhRoZwEt3dy5'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 253, 'givenName' => 'Hannah', 'familyName' => 'Young', 'preferredName' => 'Hannah',
			'phone1' => '', 'phone2' => null,
			'address1' => '41 Centenary Dr', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jodie Lyn', 'emergencyPhone1' => '0413 330 406', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jeerunt@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'travis@earsman.com', 'username' => 'travis',
			'password' => $security->generatePasswordHash('S1OGhGvcnK6MRPqr'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 254, 'givenName' => 'Travis', 'familyName' => 'Earsman', 'preferredName' => 'Travis',
			'phone1' => '0468 518 896', 'phone2' => '07 5435 2047',
			'address1' => '211 Bridge Creek Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kathy Earsman', 'emergencyPhone1' => '0405 204 044', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'travis@earsman.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'peterri@live.com.au', 'username' => 'peterri',
			'password' => $security->generatePasswordHash('C2ckpqa4v3Rv0YVo'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 255, 'givenName' => 'Lauren', 'familyName' => 'Manns', 'preferredName' => 'Lauren',
			'phone1' => '0454 399 961', 'phone2' => null,
			'address1' => '65 Calderwood Rd', 'address2' => null,
			'locality' => 'Landsborough', 'state' => 'Qld', 'postcode' => '4550', 'country' => 'Australia',
			'emergencyContact' => 'Terri Manns', 'emergencyPhone1' => '0410 499 978', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'peterri@live.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'aliciabryant13@gmail.com', 'username' => 'aliciabryant13',
			'password' => $security->generatePasswordHash('YqlvkE7z37qXzPfs'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 256, 'givenName' => 'Amelia', 'familyName' => 'Shirley', 'preferredName' => 'Amelia',
			'phone1' => '07 5492 9378', 'phone2' => null,
			'address1' => '16 Clancy Ct', 'address2' => null,
			'locality' => 'Mooloolah', 'state' => 'Qld', 'postcode' => '4553', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'aliciabryant13@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'timtam124@hotmail.com.au', 'username' => 'timtam124',
			'password' => $security->generatePasswordHash('yH1SMg8fZnlIKg9i'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 257, 'givenName' => 'Tameka', 'familyName' => 'Allen', 'preferredName' => 'Timtam',
			'phone1' => '0458 369 434', 'phone2' => '07 5435 0187',
			'address1' => '29 Kennedy Rd', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Fiona Small', 'emergencyPhone1' => '0419 193 101', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'timtam124@hotmail.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ancilytreesashaji222@gmail.com', 'username' => 'ancilytreesashaji222',
			'password' => $security->generatePasswordHash('hmqjTiu8w8ooPFTs'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 258, 'givenName' => 'Ancily', 'familyName' => 'Shaji', 'preferredName' => 'Ammu',
			'phone1' => '0470 088 055', 'phone2' => '07 5429 6885',
			'address1' => '2/21 Fig St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Nisha Shaji', 'emergencyPhone1' => '0469 268 255', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'ancilytreesashaji222@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'allie.knowles18@gmail.com', 'username' => 'allie.knowles18',
			'password' => $security->generatePasswordHash('jv7FKqqLPLDtt6RO'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 259, 'givenName' => 'Allison', 'familyName' => 'Knowles', 'preferredName' => 'Allie',
			'phone1' => '0415 233 771', 'phone2' => '07 5446 9278',
			'address1' => '618 Obi Obi Rd', 'address2' => null,
			'locality' => 'Obi Obi', 'state' => 'Qld', 'postcode' => '4574', 'country' => 'Australia',
			'emergencyContact' => 'Tom Ryan', 'emergencyPhone1' => '0418 730 649', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'allie.knowles18@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'clairemeraki@gmail.com', 'username' => 'clairemeraki',
			'password' => $security->generatePasswordHash('Jjtqyv5jHn0XUlTP'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 260, 'givenName' => 'Claire', 'familyName' => 'Meraki', 'preferredName' => 'Claire',
			'phone1' => '0421 205 672', 'phone2' => '07 5494 3472',
			'address1' => '40 Rosella Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kevin Babbage', 'emergencyPhone1' => '0438 006 055', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'clairemeraki@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'bfpio88@gmail.com', 'username' => 'bfpio88',
			'password' => $security->generatePasswordHash('5kBeJu4LJ97t9eQZ'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 261, 'givenName' => 'Bruno', 'familyName' => 'Azevedo', 'preferredName' => 'Bruno',
			'phone1' => '5511 99875 2506', 'phone2' => null,
			'address1' => 'Rua Joao Junior 900', 'address2' => null,
			'locality' => 'Sao Paulo', 'state' => null, 'postcode' => null, 'country' => 'Brazil',
			'emergencyContact' => 'Ivan Azevedo', 'emergencyPhone1' => '5511 98261 0087', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'bfpio88@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'mayara.pattoli@yahoo.com.br', 'username' => 'mayara.pattoli',
			'password' => $security->generatePasswordHash('RKFVgRAk6Aid4MWE'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 262, 'givenName' => 'Mayara', 'familyName' => 'Pattoli', 'preferredName' => 'Maya',
			'phone1' => '5511 99875 2506', 'phone2' => null,
			'address1' => 'Rua Joao Junior 900', 'address2' => null,
			'locality' => 'Sao Paulo', 'state' => null, 'postcode' => null, 'country' => 'Brazil',
			'emergencyContact' => 'Ivan Azevedo', 'emergencyPhone1' => '5511 98261 0087', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'mayara.pattoli@yahoo.com.br',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'agunt7@yahoo.com', 'username' => 'agunt7',
			'password' => $security->generatePasswordHash('I3SbTuVMumwZhBj2'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 263, 'givenName' => 'Adam', 'familyName' => 'Gunton', 'preferredName' => 'Adam',
			'phone1' => '0409 373 457', 'phone2' => null,
			'address1' => '36 Tamarind St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Leisa Gunton', 'emergencyPhone1' => '07 5446 0657', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'agunt7@yahoo.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'alexanderhendry1@gmail.com', 'username' => 'alexanderhendry1',
			'password' => $security->generatePasswordHash('trK1ApJHziXFU9Ff'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 264, 'givenName' => 'Alexander', 'familyName' => 'Hendry', 'preferredName' => 'Alexander',
			'phone1' => '0421 622 796', 'phone2' => null,
			'address1' => '6 Timbertop St', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Margaret Grace', 'emergencyPhone1' => '0417 724 253', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'alexanderhendry1@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jacquie.brydon@gmail.com', 'username' => 'jacquie.brydon',
			'password' => $security->generatePasswordHash('MrrxUJJzIBYmdCe7'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 265, 'givenName' => 'Jacquie', 'familyName' => 'Brydon', 'preferredName' => 'Jacquie',
			'phone1' => '0468 918 120', 'phone2' => null,
			'address1' => '22 Yaraan St', 'address2' => null,
			'locality' => 'Bracken Ridge', 'state' => 'Qld', 'postcode' => '4017', 'country' => 'Australia',
			'emergencyContact' => 'Mick Brydon', 'emergencyPhone1' => '0411 567 140', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jacquie.brydon@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'yvcampbell@eftel.net.au', 'username' => 'yvcampbell',
			'password' => $security->generatePasswordHash('bcx7ObK4Fk23yl6D'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 266, 'givenName' => 'Campbell', 'familyName' => 'Yvonne', 'preferredName' => 'Yvonne',
			'phone1' => '0423 954 180', 'phone2' => '07 5445 7774',
			'address1' => '26 Allara St', 'address2' => null,
			'locality' => 'Flaxton', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Sabine Vogel', 'emergencyPhone1' => '0426 094 441', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'yvcampbell@eftel.net.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'tinaterry@live.com.au', 'username' => 'tinaterry',
			'password' => $security->generatePasswordHash('24om8hf8xHkqZUgY'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 267, 'givenName' => 'Tina', 'familyName' => 'Terry', 'preferredName' => 'Tina',
			'phone1' => '0424 447 054', 'phone2' => null,
			'address1' => '25 North St', 'address2' => null,
			'locality' => 'Woorim', 'state' => 'Qld', 'postcode' => '4507', 'country' => 'Australia',
			'emergencyContact' => 'Mark Lugg', 'emergencyPhone1' => '0407 211 906', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'tinaterry@live.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'sahajadesigns@gmail.com', 'username' => 'sahajadesigns',
			'password' => $security->generatePasswordHash('eIrobxrlk3aldM42'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 268, 'givenName' => 'Bree-Anna', 'familyName' => 'Roberts', 'preferredName' => 'Bree',
			'phone1' => '', 'phone2' => null,
			'address1' => '69 Remington Shute Rd', 'address2' => null,
			'locality' => 'Montville', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Vicki Roberts', 'emergencyPhone1' => '07 6646 0208', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'sahajadesigns@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'joannefratus@gmail.com', 'username' => 'joannefratus',
			'password' => $security->generatePasswordHash('DstemqNyuiBfdn7m'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 269, 'givenName' => 'Jo-Anne', 'familyName' => 'Fratus', 'preferredName' => 'Jo',
			'phone1' => '0477 992 777', 'phone2' => null,
			'address1' => '13 Greenfields Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Egidio & Kerri Fratus', 'emergencyPhone1' => '07 5442 1909', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'joannefratus@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'rogergb33@hotmail.com', 'username' => 'rogergb33',
			'password' => $security->generatePasswordHash('Gek7QNTLLX4MTdU6'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 270, 'givenName' => 'Roger', 'familyName' => 'Brand', 'preferredName' => 'Roger',
			'phone1' => '0434 287 633', 'phone2' => null,
			'address1' => '23 Burnham Rd', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => 'Peter Brand', 'emergencyPhone1' => '0423 494 822', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'rogergb33@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'rosenberg.kim@gmail.com', 'username' => 'rosenberg.kim',
			'password' => $security->generatePasswordHash('D3UqFLjdihtJpUzD'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 271, 'givenName' => 'Ava Kim', 'familyName' => 'Rosenberg', 'preferredName' => 'Kim Or Ava',
			'phone1' => '0415 164 176', 'phone2' => '07 5435 0065',
			'address1' => 'Lot 4 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Debra Rosenberg', 'emergencyPhone1' => '0404 250 965', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'rosenberg.kim@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'khahan1809@gmail.com', 'username' => 'khahan1809',
			'password' => $security->generatePasswordHash('jfARFicB2qKmAlNv'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 272, 'givenName' => 'Han', 'familyName' => 'Mai', 'preferredName' => 'Han',
			'phone1' => '0420 689 698', 'phone2' => null,
			'address1' => '58 Leopard St', 'address2' => null,
			'locality' => 'Kangaroo Point', 'state' => 'Qld', 'postcode' => '4169', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'khahan1809@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'scopesponge@gmail.com', 'username' => 'scopesponge',
			'password' => $security->generatePasswordHash('BVHgRj2VXreMGxWI'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 273, 'givenName' => 'Lex', 'familyName' => 'Kocsis', 'preferredName' => 'Lex',
			'phone1' => '0431 680 014', 'phone2' => null,
			'address1' => '42 Aspland St', 'address2' => null,
			'locality' => 'Nambour', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Janis Lee', 'emergencyPhone1' => '0431 680 014', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'scopesponge@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'willowjoy11@gmail.com', 'username' => 'willowjoy11',
			'password' => $security->generatePasswordHash('bvj9ZyrrtoT0bxBB'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 274, 'givenName' => 'Barbara', 'familyName' => 'Salathiel', 'preferredName' => 'Willow',
			'phone1' => '0427 566 583', 'phone2' => null,
			'address1' => '8 Parkglen Ave', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ellen Salathiel', 'emergencyPhone1' => '03 5447 8696', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'willowjoy11@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'j.ross@uqconnect.edu.au', 'username' => 'j.ross',
			'password' => $security->generatePasswordHash('XlEutDUroh6oKuhE'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 275, 'givenName' => 'Jasmine', 'familyName' => 'Ross', 'preferredName' => 'Jasmine',
			'phone1' => '0427 006 274', 'phone2' => null,
			'address1' => '1 Water Gum Cres', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'j.ross@uqconnect.edu.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'am-qld@hotmail.com', 'username' => 'am-qld',
			'password' => $security->generatePasswordHash('Q0lD0mPPhsklXKUX'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 276, 'givenName' => 'Angela', 'familyName' => 'Mulgrew', 'preferredName' => 'Angie',
			'phone1' => '0421 764 978', 'phone2' => null,
			'address1' => '4 Azalea Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Brenda Mason', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'am-qld@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'traciejb8@gmail.com', 'username' => 'traciejb8',
			'password' => $security->generatePasswordHash('bNuX7yBCSayIVLyV'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 277, 'givenName' => 'Tracie', 'familyName' => 'Blazely', 'preferredName' => 'Tracie',
			'phone1' => '0418 715 650', 'phone2' => null,
			'address1' => '26 Slaughter Yard Rd', 'address2' => null,
			'locality' => 'Eudlo', 'state' => 'Qld', 'postcode' => '4554', 'country' => 'Australia',
			'emergencyContact' => 'Penny', 'emergencyPhone1' => '0436 722 439', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'traciejb8@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'phylos.fett@gmail.com', 'username' => 'phylos.fett',
			'password' => $security->generatePasswordHash('1L1kTuMmaIAmyRN1'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 278, 'givenName' => 'Andrew', 'familyName' => 'Sanderson', 'preferredName' => 'Drew',
			'phone1' => '07 5494 3896', 'phone2' => null,
			'address1' => '6 Jacaranda Pl', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'phylos.fett@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'bernardhort4876@gmail.com', 'username' => 'bernardhort4876',
			'password' => $security->generatePasswordHash('KYVwgLj9xXr5Pi79'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 279, 'givenName' => 'Bernard', 'familyName' => 'Hort', 'preferredName' => 'Bernie',
			'phone1' => '0490 436 464', 'phone2' => null,
			'address1' => '234 Avondale Rd', 'address2' => null,
			'locality' => 'Shelley', 'state' => 'Vic', 'postcode' => '3701', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'bernardhort4876@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'brittanymanaia@gmail.com', 'username' => 'brittanymanaia',
			'password' => $security->generatePasswordHash('eWhdx3EIxPpJM69C'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 280, 'givenName' => 'Brittany', 'familyName' => 'White', 'preferredName' => 'Britt',
			'phone1' => '0499 365 963', 'phone2' => null,
			'address1' => '68A Palm St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Thomas Pugh', 'emergencyPhone1' => '0448 192 258', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'brittanymanaia@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'fritzdummermuth@hotmail.com', 'username' => 'fritzdummermuth',
			'password' => $security->generatePasswordHash('dWBoeFUJiYAKKHPC'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 281, 'givenName' => 'Fritz', 'familyName' => 'Dummermuth', 'preferredName' => 'Fritz',
			'phone1' => '07 5429 6273', 'phone2' => null,
			'address1' => '62 Mc Carthy Shute Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Claire Booth', 'emergencyPhone1' => '0409 595 7007?', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'fritzdummermuth@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ross517@yahoo.com.au', 'username' => 'ross517',
			'password' => $security->generatePasswordHash('mvrNnUyFIOvYAqDe'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 282, 'givenName' => 'Kenneth Ross', 'familyName' => 'Herniman', 'preferredName' => 'Ross',
			'phone1' => '0417 695 114', 'phone2' => null,
			'address1' => '14 Blaxland St', 'address2' => null,
			'locality' => 'Golden Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Sally Herniman', 'emergencyPhone1' => '0427 005 676', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'ross517@yahoo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'soaringskyeorganics@gmail.com', 'username' => 'soaringskyeorganics',
			'password' => $security->generatePasswordHash('9OOUS84drdle5k4y'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 283, 'givenName' => 'Susan', 'familyName' => 'Ireland', 'preferredName' => 'Sky',
			'phone1' => '0419 743 163', 'phone2' => '07 5485 4368',
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'soaringskyeorganics@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'keeleynorman@gmail.com', 'username' => 'keeleynorman',
			'password' => $security->generatePasswordHash('o9a2RkXkPRqYnNFo'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 284, 'givenName' => 'Keeley', 'familyName' => 'Norman', 'preferredName' => 'Keeley',
			'phone1' => '0473 784 840', 'phone2' => null,
			'address1' => '1/21 Qualtrough St', 'address2' => null,
			'locality' => 'Woolloongabba', 'state' => 'Qld', 'postcode' => '4102', 'country' => 'Australia',
			'emergencyContact' => 'Corby Orford', 'emergencyPhone1' => '0418 700 006', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'keeleynorman@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'dipadesign@gmail.com', 'username' => 'dipadesign',
			'password' => $security->generatePasswordHash('5jzZTOwxZgINEb3n'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 285, 'givenName' => 'Esad', 'familyName' => 'Dipic', 'preferredName' => 'Esko',
			'phone1' => '0437 539 809', 'phone2' => '07 3269 4725',
			'address1' => '12/24 Flinders Pde', 'address2' => null,
			'locality' => 'Sandgate', 'state' => 'Qld', 'postcode' => '4017', 'country' => 'Australia',
			'emergencyContact' => 'Esko', 'emergencyPhone1' => '0424 708 205', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'dipadesign@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jennyx2804@yahoo.com', 'username' => 'jennyx2804',
			'password' => $security->generatePasswordHash('QsV4BXZ7k8rXLAJK'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 286, 'givenName' => 'Jenny', 'familyName' => 'Xiong', 'preferredName' => 'Jenny',
			'phone1' => '0455 365 595', 'phone2' => null,
			'address1' => '5 Melody St', 'address2' => null,
			'locality' => 'Marsden', 'state' => 'Qld', 'postcode' => '4132', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jennyx2804@yahoo.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'haider_ha@hotmail.com', 'username' => 'haider_ha',
			'password' => $security->generatePasswordHash('3lb9A1nC1FSggk39'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 287, 'givenName' => 'Haider', 'familyName' => 'Ali', 'preferredName' => 'Haider',
			'phone1' => '0426 138 372', 'phone2' => null,
			'address1' => '12 Dulwich Rd', 'address2' => null,
			'locality' => 'Yeronga', 'state' => 'Qld', 'postcode' => '4104', 'country' => 'Australia',
			'emergencyContact' => 'Abdullah Jutt', 'emergencyPhone1' => '0405 942 551', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'haider_ha@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'zbato1@gmail.com', 'username' => 'zbato1',
			'password' => $security->generatePasswordHash('TggjYSlfn9qTA7tq'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 288, 'givenName' => 'Zahra', 'familyName' => 'Batool', 'preferredName' => 'Zahra',
			'phone1' => '0422 023 458', 'phone2' => null,
			'address1' => '29 Devonhill St', 'address2' => null,
			'locality' => 'The Gap', 'state' => 'Qld', 'postcode' => '4061', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'zbato1@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'crissie.m@hotmail.com', 'username' => 'crissie.m',
			'password' => $security->generatePasswordHash('EPZX1d1xlJjaLPa1'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 289, 'givenName' => 'Crystal', 'familyName' => 'MacKay', 'preferredName' => 'Crystal',
			'phone1' => '0427 141 264', 'phone2' => null,
			'address1' => '34 Pinto Dr', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Calli Mackay', 'emergencyPhone1' => '07 5435 0399', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'crissie.m@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jules.g.sharp@gmail.com', 'username' => 'jules.g.sharp',
			'password' => $security->generatePasswordHash('mAICF8bKZHFuGMVG'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 290, 'givenName' => 'Juliette', 'familyName' => 'Sharp', 'preferredName' => 'Juliette',
			'phone1' => '', 'phone2' => null,
			'address1' => '56 Baroon Pocket Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ron Sharp', 'emergencyPhone1' => '0409 928 656', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jules.g.sharp@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'circleoflove@outlook.com', 'username' => 'circleoflove',
			'password' => $security->generatePasswordHash('tNYWSGnONNGMpSzM'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 291, 'givenName' => 'Gavin', 'familyName' => 'Moss', 'preferredName' => 'Gav',
			'phone1' => '0431 130 502', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => 'Mapleton', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'circleoflove@outlook.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'karma30m@yahoo.com', 'username' => 'karma30m',
			'password' => $security->generatePasswordHash('s0ZhMs6Um9WE1yXS'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 292, 'givenName' => 'Luke', 'familyName' => 'McLaverty', 'preferredName' => 'Luke',
			'phone1' => '0488 582 846', 'phone2' => null,
			'address1' => '11 Walsh St', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => 'Kat French', 'emergencyPhone1' => '07 3812 713?', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'karma30m@yahoo.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'eclairee@yahoo.com', 'username' => 'eclairee',
			'password' => $security->generatePasswordHash('1tM6hVzcH6DeGZe1'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 293, 'givenName' => 'Claire', 'familyName' => 'Smith', 'preferredName' => 'Claire',
			'phone1' => '0410 503 767', 'phone2' => null,
			'address1' => '30 Gumland Dr', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jorj Watt', 'emergencyPhone1' => '0416 039 603', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'eclairee@yahoo.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'tome.88@live.com', 'username' => 'tome.88',
			'password' => $security->generatePasswordHash('pNKA4XojnRgbKXBp'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 294, 'givenName' => 'Lucia', 'familyName' => 'Gibson', 'preferredName' => 'Lucia',
			'phone1' => '0412 869 354', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => 'Maroochydore', 'state' => 'Qld', 'postcode' => '4558', 'country' => 'Australia',
			'emergencyContact' => 'Ginetta', 'emergencyPhone1' => '0488 228 483', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'tome.88@live.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'atlantarosewessberg@gmail.com', 'username' => 'atlantarosewessberg',
			'password' => $security->generatePasswordHash('sPk6pDBWjZT59IiX'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 295, 'givenName' => 'Atlanta', 'familyName' => 'Wessberg', 'preferredName' => 'Atlanta',
			'phone1' => '0421 373 256', 'phone2' => null,
			'address1' => 'Unit 1/24 Murray Ave', 'address2' => null,
			'locality' => 'Enoggera', 'state' => 'Qld', 'postcode' => '4051', 'country' => 'Australia',
			'emergencyContact' => 'James Van de Grift', 'emergencyPhone1' => '0466 398 194', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'atlantarosewessberg@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'artistmcsm@gmail.com', 'username' => 'artistmcsm',
			'password' => $security->generatePasswordHash('Lg5rVEas7zkX5QIi'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 296, 'givenName' => 'John Rpy', 'familyName' => 'Wright', 'preferredName' => 'John',
			'phone1' => '0424 936 432', 'phone2' => '07 5435 0278',
			'address1' => 'Lot 62 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tom Neilsen', 'emergencyPhone1' => '07 5494 4590', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'artistmcsm@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jeff@coomooroo.net', 'username' => 'jeff',
			'password' => $security->generatePasswordHash('VG5Jk98wSXqNZRsc'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 297, 'givenName' => 'Jeffery', 'familyName' => 'Sheather', 'preferredName' => 'Jeff',
			'phone1' => '0488 007 099', 'phone2' => null,
			'address1' => '6 Browning Boulevard', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Veronica Sheather', 'emergencyPhone1' => '0420 310 202', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jeff@coomooroo.net',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'glenda@abeo.com.au', 'username' => 'glenda',
			'password' => $security->generatePasswordHash('dhuteWLqVYeJnZI4'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 298, 'givenName' => 'Glenda', 'familyName' => 'Sawtell', 'preferredName' => 'Glenda',
			'phone1' => '0410 606 821', 'phone2' => '07 5445 4292',
			'address1' => '76 Stringybark Rd', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Joel Davis', 'emergencyPhone1' => '0410 944 786', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'glenda@abeo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'emsilverthorne@hotmail.com', 'username' => 'emsilverthorne',
			'password' => $security->generatePasswordHash('phlQnIyjFv89112l'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 299, 'givenName' => 'Emma', 'familyName' => 'Silverthorne', 'preferredName' => 'Emma',
			'phone1' => '0414 634 890', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'emsilverthorne@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'catbirdgal@gmail.com', 'username' => 'catbirdgal',
			'password' => $security->generatePasswordHash('JCqBNh6LbCDjpeRn'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 300, 'givenName' => 'Helen', 'familyName' => 'Graham', 'preferredName' => 'Helen',
			'phone1' => '0428 923 448', 'phone2' => null,
			'address1' => '127 Kemp St', 'address2' => null,
			'locality' => 'Hamilton South', 'state' => 'NSW', 'postcode' => '2303', 'country' => 'Australia',
			'emergencyContact' => 'Emmanuel McClintock', 'emergencyPhone1' => '0413 896 525', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'catbirdgal@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'punyaji@gmail.com', 'username' => 'punyaji',
			'password' => $security->generatePasswordHash('FUcfntCGdTsAvrHc'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 301, 'givenName' => 'Pierre', 'familyName' => 'Nicol', 'preferredName' => 'Pierre',
			'phone1' => '0418 782 784', 'phone2' => null,
			'address1' => '92 Gillies St', 'address2' => null,
			'locality' => 'Zillmere', 'state' => 'Qld', 'postcode' => '4034', 'country' => 'Australia',
			'emergencyContact' => 'Mr Renzo Nicol', 'emergencyPhone1' => '07 3846 3114', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'punyaji@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'rossiebarr@hotmail.com', 'username' => 'rossiebarr',
			'password' => $security->generatePasswordHash('pQ4vH8FyKhDU6PYg'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 302, 'givenName' => 'Ros', 'familyName' => 'Barr', 'preferredName' => 'Ros',
			'phone1' => '0408 632 192', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'rossiebarr@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'clarebeverly@hotmail.com', 'username' => 'clarebeverly',
			'password' => $security->generatePasswordHash('4oML8fZQgUjZE3MN'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 303, 'givenName' => 'Clare', 'familyName' => 'Beverly', 'preferredName' => 'Clare',
			'phone1' => '', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'clarebeverly@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'windmilldc@yahoo.com', 'username' => 'windmilldc',
			'password' => $security->generatePasswordHash('iDRTdfAdWo4BttyA'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 304, 'givenName' => 'Donna', 'familyName' => 'Cervantes', 'preferredName' => 'Donna',
			'phone1' => '0416 865 263', 'phone2' => null,
			'address1' => '93A Obi Lane', 'address2' => null,
			'locality' => 'North Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'windmilldc@yahoo.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'orecrystaltheatre@live.com', 'username' => 'orecrystaltheatre',
			'password' => $security->generatePasswordHash('AKtEqHQgJgnER9ez'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 305, 'givenName' => 'Glenn', 'familyName' => 'Christie', 'preferredName' => 'Glenn',
			'phone1' => '0408 157 895', 'phone2' => '07 5445 7936',
			'address1' => '15 Carrington Dr', 'address2' => null,
			'locality' => 'Flaxton', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Lisa Rosso', 'emergencyPhone1' => '0432 762 033', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'orecrystaltheatre@live.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'markocimesa@yahoo.com.au', 'username' => 'markocimesa',
			'password' => $security->generatePasswordHash('jTmR3WoGUQPQgS0P'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 306, 'givenName' => 'Marko', 'familyName' => 'Cimesa', 'preferredName' => 'Marko',
			'phone1' => '', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'markocimesa@yahoo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'bdelaney@pacluth.qld.edu.au', 'username' => 'bdelaney',
			'password' => $security->generatePasswordHash('m9dZuRo90xtVovDm'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 307, 'givenName' => 'Brendan', 'familyName' => 'Delaney', 'preferredName' => 'Brendan',
			'phone1' => '0402 825 065', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'bdelaney@pacluth.qld.edu.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'toddfauser@bigpond.com', 'username' => 'toddfauser',
			'password' => $security->generatePasswordHash('6bLHswfle5l9MgTu'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 308, 'givenName' => 'Todd', 'familyName' => 'Fauser', 'preferredName' => 'Todd',
			'phone1' => '', 'phone2' => '07 5499 9313',
			'address1' => '19 Cedar Grove Crt', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Julie Fauser', 'emergencyPhone1' => '07 5499 9313', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'toddfauser@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'theasbook@gmail.com', 'username' => 'theasbook',
			'password' => $security->generatePasswordHash('l83WSQ48CXXZW0lC'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 309, 'givenName' => 'Thea', 'familyName' => 'Fietje', 'preferredName' => 'Thea',
			'phone1' => '', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'theasbook@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'hintertech@gmail.com', 'username' => 'hintertech',
			'password' => $security->generatePasswordHash('UfSL2voUGR7BaD96'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 310, 'givenName' => 'Kevin', 'familyName' => 'Finney', 'preferredName' => 'Kevin',
			'phone1' => '0427 345 033', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'hintertech@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'mike-fitzpatrick@hotmail.com', 'username' => 'mike-fitzpatrick',
			'password' => $security->generatePasswordHash('hEonsGbjVdPh02SV'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 311, 'givenName' => 'Mike', 'familyName' => 'Fitzpatrick', 'preferredName' => 'Michael',
			'phone1' => '0450 965 780', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'mike-fitzpatrick@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lesleymaureen@gmail.com', 'username' => 'lesleymaureen',
			'password' => $security->generatePasswordHash('edZ8JuJgNx8Lwc2r'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 312, 'givenName' => 'Lesley', 'familyName' => 'Halliday', 'preferredName' => 'Lesley',
			'phone1' => '', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'lesleymaureen@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kimh@goggo.com.au', 'username' => 'kimh',
			'password' => $security->generatePasswordHash('7bx6JSOoiqXyXNmP'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 313, 'givenName' => 'Kim', 'familyName' => 'Holcroft', 'preferredName' => 'Kim',
			'phone1' => '0438 714 770', 'phone2' => '07 5429 6402',
			'address1' => '1153 Maleny-Kenilworth Rd', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Paul Magee', 'emergencyPhone1' => '0438 766 896', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'kimh@goggo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'arisacarol@gmail.com', 'username' => 'arisacarol',
			'password' => $security->generatePasswordHash('OE1jO5vACVndFoDp'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 314, 'givenName' => 'Arisa', 'familyName' => 'Inlakesh', 'preferredName' => 'Arisa',
			'phone1' => '0413 461 178', 'phone2' => null,
			'address1' => '42 Brooks Rd', 'address2' => null,
			'locality' => 'Balmoral Ridge', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Terry Bishop', 'emergencyPhone1' => '0409 262 858', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'arisacarol@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'mjeff43@gmail.com.', 'username' => 'mjeff43',
			'password' => $security->generatePasswordHash('dUkUbrSUmtpMrgKf'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 315, 'givenName' => 'Morgan', 'familyName' => 'Jeffrey', 'preferredName' => 'Morgan',
			'phone1' => '0403 458 559', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'mjeff43@gmail.com.',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'johannalacy82@gmail.com', 'username' => 'johannalacy82',
			'password' => $security->generatePasswordHash('0SlmQDM3EFx33OHq'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 316, 'givenName' => 'Johanna', 'familyName' => 'Lacy', 'preferredName' => 'Johanna',
			'phone1' => '', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'johannalacy82@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'visionpower@aapt.net.au', 'username' => 'visionpower',
			'password' => $security->generatePasswordHash('oU9W27NRY1rIEMhl'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 317, 'givenName' => 'Gay', 'familyName' => 'Liddington', 'preferredName' => 'Gay',
			'phone1' => '0424 379 338', 'phone2' => '07 5422 9525',
			'address1' => 'PO Box 664', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Phil Hands', 'emergencyPhone1' => '0416 500 596', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'visionpower@aapt.net.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'margrl135@gmail.com', 'username' => 'margrl135',
			'password' => $security->generatePasswordHash('noZMUPcpq7If9IN8'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 318, 'givenName' => 'Margaret', 'familyName' => 'Longworth', 'preferredName' => 'Margaret',
			'phone1' => '0438 794 252', 'phone2' => '07 5435 2856',
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'margrl135@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'cobhearthome@gmail.com', 'username' => 'cobhearthome',
			'password' => $security->generatePasswordHash('teazYgh6cn54psHq'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 319, 'givenName' => 'Jodie', 'familyName' => 'Lyn', 'preferredName' => 'Jodie',
			'phone1' => '', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'cobhearthome@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'gavanmck@yahoo.com.au', 'username' => 'gavanmck',
			'password' => $security->generatePasswordHash('ALRtBwlncGSyBQvX'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 320, 'givenName' => 'Leanne', 'familyName' => 'McKew', 'preferredName' => 'Gavan',
			'phone1' => '0439 856 890', 'phone2' => null,
			'address1' => '565 Maleny-Montville Rd', 'address2' => null,
			'locality' => 'Balmoral Ridge', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Gavin Mckew', 'emergencyPhone1' => '0439 856 890', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'gavanmck@yahoo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'tombow51@hotmail.com', 'username' => 'tombow51',
			'password' => $security->generatePasswordHash('4krFTdq6JaRGKzDc'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 321, 'givenName' => 'Tom', 'familyName' => 'Nealson', 'preferredName' => 'Tom',
			'phone1' => '0437 279 505', 'phone2' => '07 5494 4590',
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'tombow51@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'rayloo@bigpond.net.au', 'username' => 'rayloo',
			'password' => $security->generatePasswordHash('OwQcdfX2a2Gr0vZ2'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 322, 'givenName' => 'Ray', 'familyName' => 'Oldfield', 'preferredName' => 'Ray',
			'phone1' => '', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'rayloo@bigpond.net.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jqk6448@yahoo.com.au', 'username' => 'jqk6448',
			'password' => $security->generatePasswordHash('S3tVdoGafFsDg2HY'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 323, 'givenName' => 'June', 'familyName' => 'Quinn-Kirk', 'preferredName' => 'June',
			'phone1' => '', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jqk6448@yahoo.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lisa.reye@hotmail.com', 'username' => 'lisa.reye',
			'password' => $security->generatePasswordHash('lmUZ2Srekz2zw0vG'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 324, 'givenName' => 'Lisa', 'familyName' => 'Reye', 'preferredName' => 'Lisa',
			'phone1' => '', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'lisa.reye@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lyndasimpson@bigpond.com', 'username' => 'lyndasimpson',
			'password' => $security->generatePasswordHash('JWnWD3ZCcb20TOKW'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 325, 'givenName' => 'Lynda', 'familyName' => 'Simpson', 'preferredName' => 'Lynda',
			'phone1' => '', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'lyndasimpson@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'squiresinn@hotmail.com', 'username' => 'squiresinn',
			'password' => $security->generatePasswordHash('TT5BoEv1Q5qYshmS'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 326, 'givenName' => 'Squire', 'familyName' => 'Skinner', 'preferredName' => 'John',
			'phone1' => '0427 231052', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'squiresinn@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'iansmith0802@gmail.com', 'username' => 'iansmith0802',
			'password' => $security->generatePasswordHash('GahyRz2qscMc35G1'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 327, 'givenName' => 'Ian', 'familyName' => 'Smith', 'preferredName' => 'Ian',
			'phone1' => '', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'iansmith0802@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'teekah@gmail.com', 'username' => 'teekah',
			'password' => $security->generatePasswordHash('vIzfAmPtrfGL56up'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 328, 'givenName' => 'Natika', 'familyName' => 'Storey', 'preferredName' => 'Teekah',
			'phone1' => '0481 546 328', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'teekah@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suskaj@yahoo.com', 'username' => 'suskaj',
			'password' => $security->generatePasswordHash('ZemySvMA2stdKYQo'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 329, 'givenName' => 'Jason', 'familyName' => 'Suska', 'preferredName' => 'Paul',
			'phone1' => '0467 274 138', 'phone2' => '07 4978 1322',
			'address1' => '49 Butler St', 'address2' => null,
			'locality' => 'New Auckland', 'state' => 'Qld', 'postcode' => '4680', 'country' => 'Australia',
			'emergencyContact' => 'Michael Suska', 'emergencyPhone1' => '0407 859 206', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'suskaj@yahoo.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'susie-t015@bigpond.com', 'username' => 'susie-t015',
			'password' => $security->generatePasswordHash('s8z510s304Oex22n'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 330, 'givenName' => 'Susan', 'familyName' => 'Tanner', 'preferredName' => 'Sue',
			'phone1' => '', 'phone2' => '07 5435 9348',
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'susie-t015@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'cmaryt17@yahoo.com', 'username' => 'cmaryt17',
			'password' => $security->generatePasswordHash('0cCePJMFNxpcr48O'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 331, 'givenName' => 'Cath', 'familyName' => 'Thomson', 'preferredName' => 'Cath',
			'phone1' => '0468 374 221', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'cmaryt17@yahoo.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'phil.watts@lwb.org.au', 'username' => 'phil.watts',
			'password' => $security->generatePasswordHash('DWeQyklkmRSHXZJS'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 332, 'givenName' => 'Phil', 'familyName' => 'Watts', 'preferredName' => 'Phil',
			'phone1' => '0467 749 404', 'phone2' => '02 4934 5617',
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'phil.watts@lwb.org.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'cowboyconnection@bigpond.com', 'username' => 'cowboyconnection',
			'password' => $security->generatePasswordHash('Vtx1D0LYndIAhk9N'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 333, 'givenName' => 'Mark', 'familyName' => 'White', 'preferredName' => 'Cowboy',
			'phone1' => '0418 762 440', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'cowboyconnection@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'allstringsattachedband@gmail.com', 'username' => 'allstringsattachedband',
			'password' => $security->generatePasswordHash('q9hRSFOtatos0vDC'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 334, 'givenName' => 'Emily', 'familyName' => 'Willis', 'preferredName' => 'Emily',
			'phone1' => '', 'phone2' => null,
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'allstringsattachedband@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'fineearthfoods@iprimus.com.au', 'username' => 'fineearthfoods',
			'password' => $security->generatePasswordHash('JKh0BLFhnfaBUV5x'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 335, 'givenName' => 'Phillip', 'familyName' => 'Boyle', 'preferredName' => 'Phil',
			'phone1' => '0419 701 396', 'phone2' => '07 5496 4305',
			'address1' => '6 Buckingham Rd', 'address2' => null,
			'locality' => 'Delaneys Creek', 'state' => 'Qld', 'postcode' => '4514', 'country' => 'Australia',
			'emergencyContact' => 'Michelle Coates', 'emergencyPhone1' => '0437 830 273', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'fineearthfoods@iprimus.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'woodfloria@gmail.com', 'username' => 'woodfloria',
			'password' => $security->generatePasswordHash('yj8KFAau6lo0Lcmi'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 336, 'givenName' => 'Michelle', 'familyName' => 'Coates', 'preferredName' => 'Michelle',
			'phone1' => '0419 701 396', 'phone2' => null,
			'address1' => '6 Buckingham Rd', 'address2' => null,
			'locality' => 'Delaneys Creek', 'state' => 'Qld', 'postcode' => '4514', 'country' => 'Australia',
			'emergencyContact' => 'Phil Boyle', 'emergencyPhone1' => '0419 701 396', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'woodfloria@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kwagner.1954@hotmail.com', 'username' => 'kwagner.1954',
			'password' => $security->generatePasswordHash('Y4Fg2joZm95nrKba'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 337, 'givenName' => 'Karin Luise', 'familyName' => 'Wagner', 'preferredName' => 'Karin',
			'phone1' => '0410 316 940', 'phone2' => null,
			'address1' => '6 Jimna Ct', 'address2' => null,
			'locality' => 'Deception Bay', 'state' => 'Qld', 'postcode' => '4508', 'country' => 'Australia',
			'emergencyContact' => 'Rainer Wagner', 'emergencyPhone1' => '0438 303 164', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'kwagner.1954@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'zarra15@hotmail.com', 'username' => 'zarra15',
			'password' => $security->generatePasswordHash('zRnKTzDZU9HFjbkY'),
			'status' => 1, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 338, 'givenName' => 'Rainer', 'familyName' => 'Wagner', 'preferredName' => 'Ron',
			'phone1' => '0438 303 164', 'phone2' => null,
			'address1' => '6 Jimna Ct', 'address2' => null,
			'locality' => 'Deception Bay', 'state' => 'Qld', 'postcode' => '4508', 'country' => 'Australia',
			'emergencyContact' => 'Karin Wagner', 'emergencyPhone1' => '0410 316 940', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'zarra15@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'cole_foureur@hotmail.com', 'username' => 'cole_foureur',
			'password' => $security->generatePasswordHash('bmkC9z58pOYWNmlL'),
			'status' => 0, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 339, 'givenName' => 'Corrina', 'familyName' => 'Cole', 'preferredName' => 'Corrina',
			'phone1' => '0476 245 023', 'phone2' => null,
			'address1' => '1538 Maleny Kenilworth Rd', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jacki Cole', 'emergencyPhone1' => '07 5496 5086', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'cole_foureur@hotmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jennypaul@activ8.net.au', 'username' => 'jennypaul',
			'password' => $security->generatePasswordHash('A3zTwsakzBlXhl95'),
			'status' => 0, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 340, 'givenName' => 'Paul', 'familyName' => 'Wightman', 'preferredName' => 'Paul',
			'phone1' => '07 5435 0313', 'phone2' => null,
			'address1' => 'Lot 69 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jennypaul@activ8.net.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'landmcraig@y7mail.com', 'username' => 'landmcraig',
			'password' => $security->generatePasswordHash('QGvCyeFDOnCx5K1g'),
			'status' => 0, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 341, 'givenName' => 'Mark', 'familyName' => 'Craig', 'preferredName' => 'Mark',
			'phone1' => '07 5499 9481', 'phone2' => null,
			'address1' => 'PO Box 669', 'address2' => null,
			'locality' => '', 'state' => null, 'postcode' => null, 'country' => 'Australia',
			'emergencyContact' => 'Lynda Craig', 'emergencyPhone1' => '07 5499 9481', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'landmcraig@y7mail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lenore808@gmail.com', 'username' => 'lenore808',
			'password' => $security->generatePasswordHash('a0r4MOpDCIizMHK3'),
			'status' => 0, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 342, 'givenName' => 'Lenore', 'familyName' => 'Suska', 'preferredName' => 'Lenore',
			'phone1' => '0422 936 469', 'phone2' => '07 4978 1322',
			'address1' => '49 Butler St', 'address2' => null,
			'locality' => 'New Auckland', 'state' => 'Qld', 'postcode' => '4680', 'country' => 'Australia',
			'emergencyContact' => 'Michael Suska', 'emergencyPhone1' => '0407 859 206', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'lenore808@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'leogra@westnet.com.au', 'username' => 'leogra',
			'password' => $security->generatePasswordHash('0223bGgTLG2CVCFL'),
			'status' => 0, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 343, 'givenName' => 'Leona', 'familyName' => 'Kirby', 'preferredName' => 'Leona',
			'phone1' => '0407 983 929', 'phone2' => null,
			'address1' => 'PO Box 509', 'address2' => null,
			'locality' => 'Noosaville', 'state' => 'Qld', 'postcode' => '4566', 'country' => 'Australia',
			'emergencyContact' => 'Ash Garvey', 'emergencyPhone1' => '0401 650 226', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'leogra@westnet.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'mickryan65@bigpond.com', 'username' => 'mickryan65',
			'password' => $security->generatePasswordHash('v9QrCLkoMejwBFfu'),
			'status' => 0, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 344, 'givenName' => 'Deb', 'familyName' => 'Ryan', 'preferredName' => 'Deb',
			'phone1' => '0407 766 744', 'phone2' => null,
			'address1' => '26 Burns Rd', 'address2' => null,
			'locality' => 'Goomboorian', 'state' => 'Qld', 'postcode' => '4570', 'country' => 'Australia',
			'emergencyContact' => 'Becci Fowler', 'emergencyPhone1' => '0422 403 646', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'mickryan65@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'scott.oldfield2@bigpond.com', 'username' => 'scott.oldfield2',
			'password' => $security->generatePasswordHash('NSmSFk413sThJSQG'),
			'status' => 0, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 345, 'givenName' => 'Lorena', 'familyName' => 'Oldfield', 'preferredName' => 'Lori',
			'phone1' => '0438 688 466', 'phone2' => '07 4170 0340',
			'address1' => 'Sutherland Dr', 'address2' => null,
			'locality' => 'Strathpine', 'state' => 'Qld', 'postcode' => '4500', 'country' => 'Australia',
			'emergencyContact' => 'Steve Simpson', 'emergencyPhone1' => '0419 010 234', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'scott.oldfield2@bigpond.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'synergymoon1@gmail.com', 'username' => 'synergymoon1',
			'password' => $security->generatePasswordHash('3rqM93KupHzOG2eq'),
			'status' => 0, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 346, 'givenName' => 'Austin', 'familyName' => 'Kerry', 'preferredName' => 'Kerry',
			'phone1' => '0413 663 619', 'phone2' => '07 3342 4836',
			'address1' => '44 Landor St', 'address2' => null,
			'locality' => 'Tarragindi', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => 'Iris Lane', 'emergencyPhone1' => '07 3356 2386', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'synergymoon1@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'tng1@tpg.com.au', 'username' => 'tng1',
			'password' => $security->generatePasswordHash('IUpXHbgcwjJgUTcH'),
			'status' => 0, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 347, 'givenName' => 'Tessa', 'familyName' => 'Nelson', 'preferredName' => 'Tessa',
			'phone1' => '0401 285 740', 'phone2' => null,
			'address1' => '22 Springfield Ave', 'address2' => null,
			'locality' => 'Coolum Beach', 'state' => 'Qld', 'postcode' => '4573', 'country' => 'Australia',
			'emergencyContact' => 'Les Kirkbride', 'emergencyPhone1' => '0432 062 767', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'tng1@tpg.com.au',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'zuf@hotmail.co.uk', 'username' => 'zuf',
			'password' => $security->generatePasswordHash('wdrDuy3p6KolZ5bY'),
			'status' => 0, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 348, 'givenName' => 'Rebecca', 'familyName' => 'Love', 'preferredName' => 'Beccs',
			'phone1' => '0405 387 093', 'phone2' => null,
			'address1' => '26 Peninsular Dr', 'address2' => null,
			'locality' => 'Surfers Paradise', 'state' => 'Qld', 'postcode' => '4217', 'country' => 'Australia',
			'emergencyContact' => 'Jack Lewis', 'emergencyPhone1' => '0432 114 513', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'zuf@hotmail.co.uk',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jessica.riggin@gmail.com', 'username' => 'jessica.riggin',
			'password' => $security->generatePasswordHash('tsChYr6ybqjkSu6G'),
			'status' => 0, 'banned_at' => null, 'created_at' => date('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 349, 'givenName' => 'Jessica', 'familyName' => 'Riggin', 'preferredName' => 'Jessica',
			'phone1' => '0421 231 599', 'phone2' => null,
			'address1' => '6 Bloodwood Close', 'address2' => null,
			'locality' => 'Mooloolah Valley', 'state' => 'Qld', 'postcode' => '4553', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0, 'bc' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0, 'dnr' => null,
			'discovery' => 'Previous Volunteer', 'email' => 'jessica.riggin@gmail.com',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
	}

	protected function addCommitmentsData()
	{
		$this->insert('{{%commitment}}', [
			'user_id' => 2, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 3, 'team_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 4, 'team_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 5, 'team_id' => 3, 'year' => 2015,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 6, 'team_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 7, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 8, 'team_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 9, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 10, 'team_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 11, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 12, 'team_id' => 8, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 13, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 13, 'team_id' => 7, 'year' => 2015,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 14, 'team_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 15, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 15, 'team_id' => 8, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 16, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 17, 'team_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 18, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 20, 'team_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 21, 'team_id' => 7, 'year' => 2015,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 22, 'team_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 25, 'team_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 25, 'team_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 26, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 27, 'team_id' => 7, 'year' => 2015,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 28, 'team_id' => 9, 'year' => 2015,
			'job' => 'Floater', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 28, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 28, 'team_id' => 8, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 30, 'team_id' => 9, 'year' => 2015,
			'job' => 'Billeting', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 30, 'team_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 31, 'team_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 32, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Security', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 33, 'team_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 36, 'team_id' => 7, 'year' => 2015,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 37, 'team_id' => 9, 'year' => 2015,
			'job' => 'Floater', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 37, 'team_id' => 8, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 38, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 39, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 41, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 43, 'team_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 43, 'team_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 44, 'team_id' => 2, 'year' => 2015,
			'job' => 'Children\'s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 45, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 46, 'team_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 46, 'team_id' => 7, 'year' => 2015,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 47, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 47, 'team_id' => 8, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 48, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 49, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 50, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 51, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 53, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 55, 'team_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 55, 'team_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 56, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 59, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 61, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 64, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 64, 'team_id' => 8, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 65, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 66, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 67, 'team_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 68, 'team_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 70, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 70, 'team_id' => 8, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 71, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 72, 'team_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 76, 'team_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 76, 'team_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 77, 'team_id' => 3, 'year' => 2015,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 79, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 84, 'team_id' => 8, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 85, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 86, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 87, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 88, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 89, 'team_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 90, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 91, 'team_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 93, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 96, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 97, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 98, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 100, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 101, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 102, 'team_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 105, 'team_id' => 3, 'year' => 2015,
			'job' => 'Bump Out', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 105, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 105, 'team_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 106, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 107, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 108, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 109, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 110, 'team_id' => 3, 'year' => 2015,
			'job' => 'Bump Out', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 110, 'team_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 111, 'team_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 112, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 113, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 115, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 117, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 118, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 121, 'team_id' => 9, 'year' => 2015,
			'job' => '', 'reinvite' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 122, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 122, 'team_id' => 8, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 123, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 124, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 125, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 126, 'team_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 127, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 128, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 129, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 132, 'team_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 133, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 134, 'team_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 135, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 138, 'team_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 138, 'team_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 140, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 141, 'team_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 142, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 143, 'team_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 144, 'team_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 146, 'team_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 147, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 149, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 152, 'team_id' => 3, 'year' => 2015,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 154, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 155, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 156, 'team_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 157, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 158, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 160, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 161, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 163, 'team_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 166, 'team_id' => 3, 'year' => 2015,
			'job' => 'Bump Out', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 166, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 166, 'team_id' => 8, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 167, 'team_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 168, 'team_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 170, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 170, 'team_id' => 8, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 171, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 172, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 172, 'team_id' => 3, 'year' => 2015,
			'job' => 'Bump Out', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 173, 'team_id' => 3, 'year' => 2015,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 174, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 174, 'team_id' => 3, 'year' => 2015,
			'job' => 'Bump Out', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 175, 'team_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 175, 'team_id' => 7, 'year' => 2015,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 175, 'team_id' => 8, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 176, 'team_id' => 3, 'year' => 2015,
			'job' => 'Bump Out', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 176, 'team_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 177, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 180, 'team_id' => 3, 'year' => 2015,
			'job' => 'Bump Out', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 180, 'team_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 180, 'team_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 182, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 183, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 184, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Security', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 184, 'team_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 184, 'team_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 185, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 186, 'team_id' => 3, 'year' => 2015,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 186, 'team_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 190, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 194, 'team_id' => 3, 'year' => 2015,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 195, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 197, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 201, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 204, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 205, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 206, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 210, 'team_id' => 3, 'year' => 2015,
			'job' => 'Fencing', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 212, 'team_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 214, 'team_id' => 9, 'year' => 2015,
			'job' => 'Performer', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 216, 'team_id' => 3, 'year' => 2015,
			'job' => 'Fencing', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 216, 'team_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 217, 'team_id' => 7, 'year' => 2015,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 217, 'team_id' => 8, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 220, 'team_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 220, 'team_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 221, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 222, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 224, 'team_id' => 9, 'year' => 2015,
			'job' => '', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 229, 'team_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 238, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 246, 'team_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 247, 'team_id' => 9, 'year' => 2015,
			'job' => '', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 249, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Security', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 252, 'team_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 253, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 254, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 257, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 267, 'team_id' => 2, 'year' => 2015,
			'job' => 'Children\'s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 268, 'team_id' => 2, 'year' => 2015,
			'job' => 'Children\'s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 285, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 287, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 318, 'team_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 328, 'team_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 329, 'team_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 331, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 332, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 333, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 334, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 336, 'team_id' => 3, 'year' => 2015,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 336, 'team_id' => 3, 'year' => 2015,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 340, 'team_id' => 6, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 349, 'team_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 342, 'team_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 343, 'team_id' => 9, 'year' => 2015,
			'job' => 'Committee', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 345, 'team_id' => 9, 'year' => 2015,
			'job' => 'Committee', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 348, 'team_id' => 9, 'year' => 2015,
			'job' => 'Committee', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 2, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 3, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 4, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 5, 'team_id' => 3, 'year' => 2016,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 6, 'team_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 7, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 10, 'team_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 11, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 17, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 18, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 20, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 22, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 23, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 26, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 27, 'team_id' => 7, 'year' => 2016,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 31, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 32, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Security', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 33, 'team_id' => 7, 'year' => 2016,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 35, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 37, 'team_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 40, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 44, 'team_id' => 2, 'year' => 2016,
			'job' => 'Children\'s Fest - Team Leader', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 46, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 50, 'team_id' => 2, 'year' => 2016,
			'job' => 'Children\'s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 62, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 63, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 67, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Security', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 68, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 72, 'team_id' => 3, 'year' => 2016,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 79, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 84, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 87, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 90, 'team_id' => 4, 'year' => 2016,
			'job' => 'Camp Gates', 'reinvite' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 91, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 100, 'team_id' => 3, 'year' => 2016,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 102, 'team_id' => 7, 'year' => 2016,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 109, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 110, 'team_id' => 3, 'year' => 2016,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 111, 'team_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 126, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 129, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 132, 'team_id' => 7, 'year' => 2016,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 134, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 140, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 143, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 146, 'team_id' => 7, 'year' => 2016,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 152, 'team_id' => 3, 'year' => 2016,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 155, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 156, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 175, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 176, 'team_id' => 4, 'year' => 2016,
			'job' => 'Camp Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 180, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 182, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 193, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 196, 'team_id' => 3, 'year' => 2016,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 198, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 199, 'team_id' => 2, 'year' => 2016,
			'job' => 'Children\'s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 201, 'team_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 202, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 203, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 204, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 207, 'team_id' => 3, 'year' => 2016,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 208, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 209, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Security', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 209, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 210, 'team_id' => 3, 'year' => 2016,
			'job' => 'Fencing', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 210, 'team_id' => 3, 'year' => 2016,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 212, 'team_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 213, 'team_id' => 3, 'year' => 2016,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 214, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 215, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 216, 'team_id' => 3, 'year' => 2016,
			'job' => 'Fencing', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 216, 'team_id' => 3, 'year' => 2016,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 218, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 219, 'team_id' => 7, 'year' => 2016,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 223, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 227, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 228, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 229, 'team_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 230, 'team_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 231, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 232, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 233, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 234, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 235, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 236, 'team_id' => 3, 'year' => 2016,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 237, 'team_id' => 2, 'year' => 2016,
			'job' => 'Children\'s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 239, 'team_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 241, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 242, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 244, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 245, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 248, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 249, 'team_id' => 7, 'year' => 2016,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 251, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 255, 'team_id' => 2, 'year' => 2016,
			'job' => 'Children\'s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 256, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 258, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 259, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 260, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 261, 'team_id' => 7, 'year' => 2016,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 264, 'team_id' => 2, 'year' => 2016,
			'job' => 'Children\'s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 269, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 270, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 274, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 275, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 277, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 278, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 282, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 283, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 284, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 286, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 288, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 289, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 290, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 292, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 293, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 294, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 295, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 297, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 298, 'team_id' => 3, 'year' => 2016,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 299, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 300, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 303, 'team_id' => 4, 'year' => 2016,
			'job' => 'Camp Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 311, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 313, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Security', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 314, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Security', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 315, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 316, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 318, 'team_id' => 9, 'year' => 2016,
			'job' => 'Committee', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 324, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 325, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 326, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 327, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 329, 'team_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 330, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 331, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 333, 'team_id' => 9, 'year' => 2016,
			'job' => 'President', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 334, 'team_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 339, 'team_id' => 3, 'year' => 2016,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 335, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 336, 'team_id' => 3, 'year' => 2016,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 341, 'team_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 343, 'team_id' => 9, 'year' => 2016,
			'job' => 'Festival Director', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 344, 'team_id' => 4, 'year' => 2016,
			'job' => 'Bins', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 344, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 346, 'team_id' => 6, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 347, 'team_id' => 2, 'year' => 2016,
			'job' => 'Children\'s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 337, 'team_id' => 7, 'year' => 2016,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 338, 'team_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
	}

	protected function addHistoryData()
	{
		$this->insert('{{%history}}', [
			'user_id' => 6, 'givenName' => 'Nahum', 'familyName' => 'Szumer', 'preferredName' => '',
			'email' => 'design@workingplanet.com.au', 'phone1' => '0412 767 978', 'phone2' => '07 5445 2699',
			'address1' => '14 Cottman St', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => null,
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 7, 'key_orig' => '7d5cyg', 'ip' => '58.110.55.119',
			'created_orig' => '2015-04-22 11:24:57', 'updated_orig' => '2015-04-22 11:24:57',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 7, 'givenName' => 'Ann', 'familyName' => 'Morris', 'preferredName' => '',
			'email' => 'annmorris_oz@yahoo.com', 'phone1' => '0409 629 602', 'phone2' => '',
			'address1' => 'PO Box 257', 'address2' => null,
			'locality' => 'Eudlo', 'state' => 'Qld', 'postcode' => '4554', 'country' => 'Australia',
			'emergencyContact' => 'Bill', 'emergencyPhone1' => '0438 154 144', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Traffic',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 14, 'key_orig' => '39n5e3', 'ip' => '101.169.170.142',
			'created_orig' => '2015-05-12 07:59:55', 'updated_orig' => '2015-05-12 07:59:55',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 8, 'givenName' => 'Davison', 'familyName' => 'Ben', 'preferredName' => 'Bennybowen',
			'email' => 'benjiridoo@yahoo.ca', 'phone1' => '0432 185 760', 'phone2' => '',
			'address1' => '69 Remington Shute Rd', 'address2' => null,
			'locality' => 'Montville', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Jon', 'emergencyPhone1' => '0431 203 675', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Artist services/care, MC, Stage management',
			'commentsInfo' => 'Multiple years volunteering at other folk festivals such as :Palm Creek; woodford; Earth Freq ;',
			'discovery' => 'Local knowledge',
			'id_orig' => 15, 'key_orig' => 'sgfeag', 'ip' => '49.182.33.190',
			'created_orig' => '2015-05-12 10:05:55', 'updated_orig' => '2015-05-12 10:05:55',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 9, 'givenName' => 'Deborah', 'familyName' => 'Watson', 'preferredName' => 'Bella',
			'email' => 'fringedwellers@live.com', 'phone1' => '0422 945 975', 'phone2' => '',
			'address1' => '27 Bergin St', 'address2' => null,
			'locality' => 'Booval', 'state' => 'Qld', 'postcode' => '4304', 'country' => 'Australia',
			'emergencyContact' => 'Jon Flach', 'emergencyPhone1' => '0434 930 721', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'MC is my preferred but happy to do other roles',
			'commentsInfo' => 'Hi, I have MC\'d at Woodford for many years and other festivals also, But happy to do anything , I also have years of experience in theatre and working with children',
			'discovery' => 'Through the BUG nights at New Farm Bowls club',
			'id_orig' => 19, 'key_orig' => 'qu8yka', 'ip' => '119.225.27.154',
			'created_orig' => '2015-05-12 14:05:16', 'updated_orig' => '2015-05-12 14:05:16',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 10, 'givenName' => 'Natalie', 'familyName' => 'Brown', 'preferredName' => 'Natty',
			'email' => 'ireallylovethose@gmail.com', 'phone1' => '0467 958 057', 'phone2' => '',
			'address1' => '49 Kennedy Rd', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Eileen Brown', 'emergencyPhone1' => '0439 413 480', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Stage Management (have Stage Managed plays in the theatre before), Shop, Ticketing',
			'commentsInfo' => null,
			'discovery' => 'I was on the Art Team in 2014, working with Bobbie Richardson and Glenn Christie, and my home was used to create some of the awesome bamboo decor for the event. I also assisted with set up.',
			'id_orig' => 22, 'key_orig' => '6m0tf1', 'ip' => '124.150.95.122',
			'created_orig' => '2015-05-12 16:48:21', 'updated_orig' => '2015-05-12 16:48:21',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 11, 'givenName' => 'Christopher', 'familyName' => 'Gwom', 'preferredName' => 'Chris',
			'email' => 'christopher.gwin@bigpond.com', 'phone1' => '07 5494 4743', 'phone2' => '',
			'address1' => 'Lot 46 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Steve Allen', 'emergencyPhone1' => '07 5494 4667', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'TREASURY',
			'commentsInfo' => 'I HAVE VOLUNTEERED INTREASURY AT EACH FESTIVAL',
			'discovery' => 'LOCAL....WHATARE THE DATES PLEASE?',
			'id_orig' => 31, 'key_orig' => '4q5jk6', 'ip' => '101.183.145.129',
			'created_orig' => '2015-05-14 03:58:51', 'updated_orig' => '2015-05-14 03:58:51',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 12, 'givenName' => 'Susan', 'familyName' => 'Ferrar', 'preferredName' => '',
			'email' => 'tropicalday@bigpond.com', 'phone1' => '0419 776 088', 'phone2' => '',
			'address1' => '39/24 Wirraway St', 'address2' => null,
			'locality' => 'Alexandra Headland', 'state' => 'Qld', 'postcode' => '4572', 'country' => 'Australia',
			'emergencyContact' => 'Lee Nash', 'emergencyPhone1' => '07 4979 4106', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'only one issue is standing in one spot for any length of time. walk all day is no problem.',
			'commentsInfo' => 'I can attain an RSA if needed. my address has changed from david low way, Marcoola.',
			'discovery' => 'internet',
			'id_orig' => 33, 'key_orig' => 'eeu1aw', 'ip' => '124.185.244.22',
			'created_orig' => '2015-05-14 06:16:55', 'updated_orig' => '2015-05-14 06:16:55',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 13, 'givenName' => 'Dominic', 'familyName' => 'Posner', 'preferredName' => '',
			'email' => 'dominic@numbernine.com.au', 'phone1' => '0419 439 034', 'phone2' => '07 5499 9135',
			'address1' => 'PO Box 1250', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tanya Posner', 'emergencyPhone1' => '0438 255 077', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Last year I helped Barb in Treasury and during my shift, I covered some breaks for ticket sales in the bar... which I really enjoyed! So if possible, I\'d love to be involved with the bar ticket sales. Otherwise, happy to be locked in the shed with the floats.',
			'commentsInfo' => 'Left arm injury prevents me from any heavy lifting.',
			'discovery' => null,
			'id_orig' => 35, 'key_orig' => 'es46e5', 'ip' => '124.186.224.183',
			'created_orig' => '2015-05-14 08:36:28', 'updated_orig' => '2015-05-14 08:36:28',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 14, 'givenName' => 'Kenneth', 'familyName' => 'Main', 'preferredName' => 'Ken',
			'email' => 'kenmain1@optusnet.com.au', 'phone1' => '0429 345 617', 'phone2' => '07 5326 3086',
			'address1' => '33 Palm Dr', 'address2' => null,
			'locality' => 'Mooloolaba', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Carole', 'emergencyPhone1' => '0409 585 166', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Traffic . Set Up/bump out',
			'commentsInfo' => 'There is a remote possibility that I may have to go interstate at this time, but I would let you know m=weeks prior.',
			'discovery' => 'Initially from a friend.',
			'id_orig' => 41, 'key_orig' => 'd638bs', 'ip' => '122.105.103.165',
			'created_orig' => '2015-05-15 12:19:47', 'updated_orig' => '2015-05-15 12:19:47',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 15, 'givenName' => 'Suzanne', 'familyName' => 'Chumbley', 'preferredName' => '',
			'email' => 'suzannec7@optusnet.com.au', 'phone1' => '0428 745 498', 'phone2' => '',
			'address1' => '2/11 Suller St', 'address2' => null,
			'locality' => 'Caloundra', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Sam Dougall', 'emergencyPhone1' => '0408 671 583', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Last year I worked as a Bar Cashier at this festival, selling drinks tickets at one of the music venues. I don\'t recall the name of it. I\'m happy to do the same at this year\'s festival.',
			'commentsInfo' => 'I\'m not sure of the time frame, but I may have still been going by the surname of Dougall at last year\'s event. I have since changed back to my maiden surname of \'Chumbley.\'',
			'discovery' => 'work of mouth.',
			'id_orig' => 42, 'key_orig' => 'cgpiy4', 'ip' => '114.78.42.102',
			'created_orig' => '2015-05-16 09:39:22', 'updated_orig' => '2015-05-16 09:39:22',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 16, 'givenName' => 'Gabrielle', 'familyName' => 'Luft', 'preferredName' => 'Gaby',
			'email' => 'gabyluft@hotmail.com', 'phone1' => '07 5499 9345', 'phone2' => '',
			'address1' => '21 Tamarind St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Rosemary Bower', 'emergencyPhone1' => '07 5494 3069', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Shop or Vollie tent or Ticketing or Traffic',
			'commentsInfo' => 'No heavy Lifting + i can\'t stand upright 4 long periods of time',
			'discovery' => 'From your wonderful email invite, Hi Gabriel, it\'ll be gr8 to see u again !!!!',
			'id_orig' => 44, 'key_orig' => 'kedg1d', 'ip' => '202.173.166.101',
			'created_orig' => '2015-05-16 10:19:32', 'updated_orig' => '2015-05-16 10:19:32',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 17, 'givenName' => 'Gabe', 'familyName' => 'Monson', 'preferredName' => 'Gabe',
			'email' => 'gabriel.monson@gmail.com', 'phone1' => '0477 008 518', 'phone2' => '',
			'address1' => 'Dicky Beach Park', 'address2' => null,
			'locality' => 'Dicky Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'VOls',
			'commentsInfo' => 'Its me',
			'discovery' => 'from me',
			'id_orig' => 52, 'key_orig' => 'v2pgil', 'ip' => '101.183.70.112',
			'created_orig' => '2015-05-19 22:39:57', 'updated_orig' => '2015-05-19 22:39:57',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 17, 'givenName' => 'Gabriel', 'familyName' => 'Knox', 'preferredName' => 'Gabe',
			'email' => 'gabriel.monson@gmail.com', 'phone1' => '0477 008 518', 'phone2' => '',
			'address1' => 'Dicky Beach Park', 'address2' => null,
			'locality' => 'Dicky Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'asdf',
			'commentsInfo' => 'asdf',
			'discovery' => 'asdf',
			'id_orig' => 53, 'key_orig' => 'uy9u0h', 'ip' => '101.183.70.112',
			'created_orig' => '2015-05-19 22:44:23', 'updated_orig' => '2015-05-19 22:44:23',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 18, 'givenName' => 'Allyson', 'familyName' => 'Williams', 'preferredName' => '',
			'email' => 'allyson.williams007@gmail.com', 'phone1' => '0428 942 224', 'phone2' => '',
			'address1' => '45 Mountain View Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Peter Thompson', 'emergencyPhone1' => '0429 061 444', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'My preferred work areas are:, 1. stage management,, 2. bar work., 3. in the shop.',
			'commentsInfo' => 'I have some skills and attributes (including humility and a sense of humour) that will make me invaluble to the festival:, 1. I\'m a musician and have stage experience (performing),, 2. I\'ve been to many music festivals (both as visitor and performer) and consequently have good knowledge of How They Work. , 3. I live locally and am fairly flexible with shifts etc.',
			'discovery' => 'Through friends involved in organising and performing at the festival, and also on facebook.',
			'id_orig' => 55, 'key_orig' => 'xwj2e0', 'ip' => '139.86.9.87',
			'created_orig' => '2015-05-20 18:15:03', 'updated_orig' => '2015-05-20 18:15:03',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 19, 'givenName' => 'Cvetanka', 'familyName' => 'Posner', 'preferredName' => 'Tanya',
			'email' => 'tanya@numbernine.com.au', 'phone1' => '0438 255 077', 'phone2' => '07 5499 9135',
			'address1' => '51 Murer Dr', 'address2' => null,
			'locality' => 'North Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Dominic Posner', 'emergencyPhone1' => '0419 439 034', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Bars, Site Decoration, Stage Management, Shop',
			'commentsInfo' => null,
			'discovery' => 'From my husband who volunteered last year',
			'id_orig' => 57, 'key_orig' => 'ga4z5b', 'ip' => '124.186.224.183',
			'created_orig' => '2015-05-20 21:10:55', 'updated_orig' => '2015-05-20 21:10:55',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 20, 'givenName' => 'Debra', 'familyName' => 'Taylor', 'preferredName' => 'Debbie',
			'email' => 'debrataylor@me.com', 'phone1' => '', 'phone2' => '',
			'address1' => '19 Oxenham Lane', 'address2' => null,
			'locality' => 'Reesville', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Philtaylor', 'emergencyPhone1' => '0427 636 720', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Ticketing. Assistant, coordinator. Set up/bump out',
			'commentsInfo' => 'Experience in admin, emergency management, hr, training and all sorts of other stuff : )',
			'discovery' => 'On your web site',
			'id_orig' => 58, 'key_orig' => 'hs0o98', 'ip' => '1.128.97.26',
			'created_orig' => '2015-05-20 22:26:30', 'updated_orig' => '2015-05-20 22:26:30',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 21, 'givenName' => 'Jacqueline', 'familyName' => 'O\'Connor', 'preferredName' => 'Jacqui',
			'email' => 'jacqui@studiohorizon.com', 'phone1' => '0409 059 131', 'phone2' => '07 5445 7916',
			'address1' => '188 Flaxton Mill Rd', 'address2' => null,
			'locality' => 'Flaxton', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Lesley Campbell', 'emergencyPhone1' => '0432 507 228', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Last year I worked with Brett Campbell on the gate and would be happy to do this again.',
			'commentsInfo' => null,
			'discovery' => 'Through Brett Campbell',
			'id_orig' => 59, 'key_orig' => 'e2wyk0', 'ip' => '120.151.20.221',
			'created_orig' => '2015-05-21 11:52:36', 'updated_orig' => '2015-05-21 11:52:36',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 22, 'givenName' => 'Michaela Rose', 'familyName' => 'Walker', 'preferredName' => 'Mikayla',
			'email' => 'colourful@live.com.au', 'phone1' => '0468 326 962', 'phone2' => '07 5641 4624',
			'address1' => 'Lot 34 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Peter Walker', 'emergencyPhone1' => '0458 487 865', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Stage managing, Ticketing',
			'commentsInfo' => 'Last year I volunteered as a Stage Manager for the Platypus Stage and really enjoyed it. I would love to do that again!, Or ticketing..., I really love working with people and thought it may also be fun to welcome and organize tickets at the gate :-), I look forward to hearing from you. Thanks.',
			'discovery' => 'I worked with Tom Nealson last year.',
			'id_orig' => 60, 'key_orig' => '7evqat', 'ip' => '124.170.85.134',
			'created_orig' => '2015-05-22 00:09:57', 'updated_orig' => '2015-05-22 00:09:57',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 23, 'givenName' => 'Suzanne', 'familyName' => 'L', 'preferredName' => 'Suzanne',
			'email' => 'suz_mcevoy@hotmail.com', 'phone1' => '0414 762 517', 'phone2' => '07 5445 7514',
			'address1' => '20 Nimbus Dr', 'address2' => null,
			'locality' => 'Flaxton', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Meagan & Michael McEvoy', 'emergencyPhone1' => '07 5445 7514', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Ticketing, Shop, Vollie tent',
			'commentsInfo' => 'Have some health issues in regards to my back, standing and sitting for too long can cause cramping. So somewhere I can combine both. Please, I\'d much rather work during the day, not at night again. I also do photography. , , https://www.facebook.com/MyBckYrdPhotog?ref=hl',
			'discovery' => null,
			'id_orig' => 63, 'key_orig' => 'q705im', 'ip' => '121.222.13.102',
			'created_orig' => '2015-05-23 14:28:38', 'updated_orig' => '2015-05-23 14:28:38',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 24, 'givenName' => 'Chris', 'familyName' => 'Marsh', 'preferredName' => 'Chris',
			'email' => 'christopher.marsh@bigpond.com', 'phone1' => '0400 029 406', 'phone2' => '',
			'address1' => '6 Downward Pl', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => 'Petrina Daniel', 'emergencyPhone1' => '07 4574 6090', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'stage management, set up/bumpout, traffic',
			'commentsInfo' => 'volunteered at a number of festivals. the national, kangaroo valley and cobargo. workplace health and safety coordinator for the national 211 -2013, pre festival admin for cobargo and traffic and workplace for kangaroo valley. have a construction card',
			'discovery' => 'grapevine',
			'id_orig' => 68, 'key_orig' => 'zl83k6', 'ip' => '121.223.199.181',
			'created_orig' => '2015-05-25 20:18:40', 'updated_orig' => '2015-05-25 20:18:40',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 25, 'givenName' => 'Sheryll', 'familyName' => 'Wright', 'preferredName' => 'Shez',
			'email' => 'shezoffice@gmail.com', 'phone1' => '0407 964 948', 'phone2' => '',
			'address1' => '93 Mcilwraith St', 'address2' => null,
			'locality' => 'Everton Park', 'state' => 'Qld', 'postcode' => '4053', 'country' => 'Australia',
			'emergencyContact' => 'Laurie Kelly', 'emergencyPhone1' => '0414 670 990', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'I have MC\'d at the last 2 festivals - would prefer to do that again',
			'commentsInfo' => 'Many years experience as volunteer and co-ordinator - wish to only volunteer now',
			'discovery' => null,
			'id_orig' => 70, 'key_orig' => 'kj6d5b', 'ip' => '139.168.162.135',
			'created_orig' => '2015-05-26 12:24:24', 'updated_orig' => '2015-05-26 12:24:24',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 26, 'givenName' => 'Marie', 'familyName' => 'Blanch', 'preferredName' => '',
			'email' => 'marie.nicholette@gmail.com', 'phone1' => '07 5435 2130', 'phone2' => '',
			'address1' => '3 Jabiru Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Deborah Yffer', 'emergencyPhone1' => '0411 389 727', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'ticketing',
			'commentsInfo' => null,
			'discovery' => 'facebook',
			'id_orig' => 74, 'key_orig' => 'eebt39', 'ip' => '123.211.147.42',
			'created_orig' => '2015-05-27 08:56:45', 'updated_orig' => '2015-05-27 08:56:45',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 27, 'givenName' => 'Kelli', 'familyName' => 'Dendle', 'preferredName' => '',
			'email' => 'chanteuse@xancorp.com.au', 'phone1' => '0488 952 722', 'phone2' => '07 5435 2939',
			'address1' => 'PO Box 867', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Greg', 'emergencyPhone1' => '07 5435 2939', 'emergencyPhone2' => '0418 127 342',
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'MC, site decoration or Vollie tent',
			'commentsInfo' => 'I was approached by John Wright about MCing, , I am not available Fri or prior to 3pm on Sat 29/8. , , Prefer not to have late night shifts if possible.',
			'discovery' => null,
			'id_orig' => 77, 'key_orig' => '7wuesp', 'ip' => '121.215.209.10',
			'created_orig' => '2015-05-28 09:15:03', 'updated_orig' => '2015-05-28 09:15:03',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 28, 'givenName' => 'Clayton', 'familyName' => 'Storey', 'preferredName' => 'Clayton',
			'email' => 'clayton@claytonstorey.com', 'phone1' => '0497 564 064', 'phone2' => '07 5499 9161',
			'address1' => '34 Bunya St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tika', 'emergencyPhone1' => '0481 546 328', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'MC at the Platypus Lounge',
			'commentsInfo' => null,
			'discovery' => 'I know John and Noel.',
			'id_orig' => 78, 'key_orig' => 'pex84m', 'ip' => '14.202.141.176',
			'created_orig' => '2015-05-28 12:44:31', 'updated_orig' => '2015-05-28 12:44:31',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 29, 'givenName' => 'Cardie', 'familyName' => 'Boydell', 'preferredName' => 'Cardie',
			'email' => 'cardieboydell@bigpond.com', 'phone1' => '0400 101 797', 'phone2' => '',
			'address1' => 'PO Box 771', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Pete Davies', 'emergencyPhone1' => '0457 085 198', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Organising and MC the youth spot.',
			'commentsInfo' => 'I would like to ask that it be in a smaller venue. The big stage is too large for a young performer. Even in a small tent is better than that stage for them.',
			'discovery' => null,
			'id_orig' => 79, 'key_orig' => 'u73o54', 'ip' => '124.187.74.141',
			'created_orig' => '2015-05-28 14:25:56', 'updated_orig' => '2015-05-28 14:25:56',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 30, 'givenName' => 'Sonia', 'familyName' => 'Russell', 'preferredName' => '',
			'email' => '4peacenlove@gmail.com', 'phone1' => '0448 606 591', 'phone2' => '',
			'address1' => '52 Park Rd', 'address2' => null,
			'locality' => 'Nambour', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'MC',
			'commentsInfo' => 'I will need a camp site for 2',
			'discovery' => 'John Wright invited me',
			'id_orig' => 87, 'key_orig' => 'sebuhi', 'ip' => '123.211.226.163',
			'created_orig' => '2015-05-30 18:50:02', 'updated_orig' => '2015-05-30 18:50:02',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 31, 'givenName' => 'Valery', 'familyName' => 'France', 'preferredName' => 'Val',
			'email' => 'marleyfrance1707@gmail.com', 'phone1' => '0419 599 042', 'phone2' => '',
			'address1' => 'Lot 8 349 Balmoral Rd', 'address2' => null,
			'locality' => 'Montville', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Barb', 'emergencyPhone1' => '0439 660 458', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Ticketing',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 90, 'key_orig' => 'pdirvn', 'ip' => '1.128.96.174',
			'created_orig' => '2015-06-01 20:35:35', 'updated_orig' => '2015-06-01 20:35:35',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 32, 'givenName' => 'Terrence Michael', 'familyName' => 'Bishop', 'preferredName' => 'Terrence',
			'email' => 'terrybishop42@gmail.com', 'phone1' => '0409 262 858', 'phone2' => '',
			'address1' => '42 Brooks Rd', 'address2' => null,
			'locality' => 'Balmoral Ridge', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Arisa Inlakesh', 'emergencyPhone1' => '0413 461 178', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Shop, MC, working with Arisa Inlakesh (who will sign up soon)',
			'commentsInfo' => 'I\'m comfortable working with people, with a mic on a stage if need be, but happy to do whatever. Arisa Inlakesh (another volunteer) and I have two teenagers (17 yo) who would like to help out (which I understand we will need to supervise because they are not yet 18), so if possible we would love for you to give us roles where the four of us can work as a little team.',
			'discovery' => 'I live here!',
			'id_orig' => 92, 'key_orig' => 'hqdtfr', 'ip' => '1.128.96.225',
			'created_orig' => '2015-06-02 11:49:36', 'updated_orig' => '2015-06-02 11:49:36',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 33, 'givenName' => 'Cheryl', 'familyName' => 'Vivian', 'preferredName' => '',
			'email' => 'cherylvivian@gmail.com', 'phone1' => '0400 551 919', 'phone2' => '',
			'address1' => '4/29 Russell St', 'address2' => null,
			'locality' => 'South Brisbane', 'state' => 'Qld', 'postcode' => '4101', 'country' => 'Australia',
			'emergencyContact' => 'Dan Raymond', 'emergencyPhone1' => '0400 551 920', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'bar, shop, vollie tent, ticketing, Anything involving customer service or food service',
			'commentsInfo' => null,
			'discovery' => 'newsletter',
			'id_orig' => 93, 'key_orig' => 'wdvxa7', 'ip' => '202.173.173.242',
			'created_orig' => '2015-06-02 12:08:14', 'updated_orig' => '2015-06-02 12:08:14',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 34, 'givenName' => 'Julia', 'familyName' => 'Peddie', 'preferredName' => 'Julia',
			'email' => 'juliapeddie@icloud.com', 'phone1' => '0405 331 584', 'phone2' => '',
			'address1' => '35 Aquarius St', 'address2' => null,
			'locality' => 'North Lakes', 'state' => 'Qld', 'postcode' => '4509', 'country' => 'Australia',
			'emergencyContact' => 'Liz Peddie', 'emergencyPhone1' => '0429 878 041', 'emergencyPhone2' => '03 5772 2432',
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Visual arts production - I am a stall holder at the festival so would love to volunteer in any community workshops before the event. I\'m an experienced arts facilitator (run lots of community art projects and workshops) and would be happy to lend my skills helping involve community/ kids in making stuff - please include me on the arts team :)',
			'commentsInfo' => null,
			'discovery' => 'Gay Liddington',
			'id_orig' => 94, 'key_orig' => 'onmvos', 'ip' => '14.202.56.21',
			'created_orig' => '2015-06-02 13:54:56', 'updated_orig' => '2015-06-02 13:54:56',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 35, 'givenName' => 'Laurel', 'familyName' => 'Wilson', 'preferredName' => '',
			'email' => 'goodwills@ozemail.com.au', 'phone1' => '0418 187 104', 'phone2' => '07 5435 2333',
			'address1' => '34 Palm St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Bob Wilson', 'emergencyPhone1' => '0438 525 119', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'MC Bar',
			'commentsInfo' => 'We\'ve applied to perform at the Festival - if we are accepted, I\'m happy to do one shift of MCing. If we aren\'t performing, I\'m happy to do two shifts MCing and/or Bar',
			'discovery' => 'We live here!',
			'id_orig' => 95, 'key_orig' => 'zryp3q', 'ip' => '124.170.137.89',
			'created_orig' => '2015-06-02 16:39:40', 'updated_orig' => '2015-06-02 16:39:40',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 36, 'givenName' => 'Arcadia', 'familyName' => 'Love', 'preferredName' => 'Arcadia',
			'email' => 'mail@womenforchange.com', 'phone1' => '0427 296 572', 'phone2' => '',
			'address1' => '21 Wirraway St', 'address2' => null,
			'locality' => 'Strathpine', 'state' => 'Qld', 'postcode' => '4500', 'country' => 'Australia',
			'emergencyContact' => 'Dorothy Bateson', 'emergencyPhone1' => '07 3273 3229', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'MC\'ing in the Platypus Lounge (for a change) :)',
			'commentsInfo' => 'Referred by John Wright :)',
			'discovery' => 'Been there - done that - loved it - want more!!',
			'id_orig' => 97, 'key_orig' => '1im8k3', 'ip' => '1.128.96.225',
			'created_orig' => '2015-06-02 17:42:25', 'updated_orig' => '2015-06-02 17:42:25',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 37, 'givenName' => 'Andrew', 'familyName' => 'Pedler', 'preferredName' => 'Andrew',
			'email' => 'adpedler@gmail.com', 'phone1' => '0412 122 778', 'phone2' => '07 5435 2856',
			'address1' => '135 Stanley River Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Margaret', 'emergencyPhone1' => '0438 794 252', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Traffic - this is what I did in 2014, and am happy to do again, Ticket sales (food/drinks) - also did some of this in 2014, , ... and happy to: also or alternatively, be involved in: , - Vollie tent, , - Set up / Bump-out',
			'commentsInfo' => null,
			'discovery' => 'Through friends.',
			'id_orig' => 98, 'key_orig' => 'py6mw1', 'ip' => '124.170.106.110',
			'created_orig' => '2015-06-02 18:47:58', 'updated_orig' => '2015-06-02 18:47:58',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 38, 'givenName' => 'Peter', 'familyName' => 'Cartwright', 'preferredName' => 'Pete',
			'email' => 'peter.cartwright@iinet.net.au', 'phone1' => '0438 432 909', 'phone2' => '',
			'address1' => '15 Robbies Ave', 'address2' => null,
			'locality' => 'Carina', 'state' => 'Qld', 'postcode' => '4152', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Helped Carmel G run treasury at MalenyMW for a couple of years. Ran treasury at the NFF in Canberra for a couple of years., Happy to do anything - as a CPA, I\'m good with transactional things (bars, ticketing, shop), but can do anything., I can obtain an RSA certificate.',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 101, 'key_orig' => '50920y', 'ip' => '58.7.216.232',
			'created_orig' => '2015-06-02 20:19:50', 'updated_orig' => '2015-06-02 20:19:50',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 39, 'givenName' => 'Amanda', 'familyName' => 'Bailey', 'preferredName' => 'Amanda',
			'email' => 'amandala44@hotmail.com', 'phone1' => '0409 066 180', 'phone2' => '',
			'address1' => '2/89 Albert St', 'address2' => null,
			'locality' => 'Kings Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Angeline Medland', 'emergencyPhone1' => '0409 066 180', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Site decoration, Ticketing, Shop, Vollie tent',
			'commentsInfo' => 'I have a back injury, so need to be careful with heavy lifting, sitting or standing too long. otherwise, I manage very well.',
			'discovery' => 'Email notification',
			'id_orig' => 102, 'key_orig' => 'enib90', 'ip' => '1.178.40.196',
			'created_orig' => '2015-06-02 21:56:48', 'updated_orig' => '2015-06-02 21:56:48',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 40, 'givenName' => 'Kari', 'familyName' => '-', 'preferredName' => '',
			'email' => 'kari@karicelebrations.com', 'phone1' => '0437 714 965', 'phone2' => '',
			'address1' => '39 Jubilee Dr', 'address2' => null,
			'locality' => 'Palmwoods', 'state' => 'Qld', 'postcode' => '4555', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'MC',
			'commentsInfo' => 'I have been approached by John Wright',
			'discovery' => 'Ah well, I been around....',
			'id_orig' => 106, 'key_orig' => 'i6f0ho', 'ip' => '124.170.108.152',
			'created_orig' => '2015-06-04 07:03:19', 'updated_orig' => '2015-06-04 07:03:19',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 41, 'givenName' => 'Deborah', 'familyName' => 'Yffer', 'preferredName' => 'Deb',
			'email' => 'deborahnewyou@gmail.com', 'phone1' => '0411 389 727', 'phone2' => '07 5494 2179',
			'address1' => '1 Jabiru Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tony Glazebrook', 'emergencyPhone1' => '0408 684 482', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Ticketing',
			'commentsInfo' => 'I\'m great with people and calm under pressure',
			'discovery' => 'Originally through one of the Committee in the first year',
			'id_orig' => 107, 'key_orig' => '613v7t', 'ip' => '101.169.127.230',
			'created_orig' => '2015-06-04 17:22:44', 'updated_orig' => '2015-06-04 17:22:44',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 42, 'givenName' => 'Amanda', 'familyName' => 'McGrath', 'preferredName' => '',
			'email' => 'daveandmanda@gmail.com', 'phone1' => '0435 232 451', 'phone2' => '',
			'address1' => '1/31 Saleng Cr', 'address2' => null,
			'locality' => 'Warana', 'state' => 'Qld', 'postcode' => '4575', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0435 232 451', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'site decoration, ticketing, shop, stage management',
			'commentsInfo' => 'Day job - event coordinator',
			'discovery' => 'Website',
			'id_orig' => 108, 'key_orig' => 't2zdip', 'ip' => '122.148.96.233',
			'created_orig' => '2015-06-04 20:22:17', 'updated_orig' => '2015-06-04 20:22:17',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 43, 'givenName' => 'Angel', 'familyName' => 'Love', 'preferredName' => '',
			'email' => 'angellove12@bigpond.com', 'phone1' => '0431 673 16?', 'phone2' => '',
			'address1' => '251 Hardwood Rd', 'address2' => null,
			'locality' => 'Landsborough', 'state' => 'Qld', 'postcode' => '4550', 'country' => 'Australia',
			'emergencyContact' => 'Cheryl Nicol', 'emergencyPhone1' => '0415 635 992', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Ticketing, shop, traffic, vollie tent',
			'commentsInfo' => 'Looking forward to it :)',
			'discovery' => 'A friend on Facebook',
			'id_orig' => 113, 'key_orig' => 'cyio31', 'ip' => '123.211.34.164',
			'created_orig' => '2015-06-05 17:39:32', 'updated_orig' => '2015-06-05 17:39:32',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 44, 'givenName' => 'Angela', 'familyName' => 'May', 'preferredName' => 'Angela',
			'email' => 'angela1freedom@yahoo.com.au', 'phone1' => '0459 495 650', 'phone2' => '',
			'address1' => 'Hooper Rd North', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Spencer Underwood', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'shop',
			'commentsInfo' => 'i have a blue card and volunteer at maleny neighbourhood centre every week.i am a good people person and communicator.',
			'discovery' => null,
			'id_orig' => 114, 'key_orig' => '7d0qj5', 'ip' => '101.169.85.56',
			'created_orig' => '2015-06-06 08:23:03', 'updated_orig' => '2015-06-06 08:23:03',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 45, 'givenName' => 'Judith', 'familyName' => 'Bacon', 'preferredName' => 'Juda',
			'email' => 'judithbacon@optusnet.com.au', 'phone1' => '0407 583 490', 'phone2' => '',
			'address1' => '8 Emu Creek Rd', 'address2' => null,
			'locality' => 'Crows Nest', 'state' => 'Qld', 'postcode' => '4355', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'I would prefer to work with Joan helping to run the bars.',
			'commentsInfo' => 'Well, Gabe, where do I start? It will be lovely to share a hug or two when I see you.',
			'discovery' => 'Noel',
			'id_orig' => 118, 'key_orig' => 'gmcf2x', 'ip' => '49.197.22.60',
			'created_orig' => '2015-06-09 12:25:45', 'updated_orig' => '2015-06-09 12:25:45',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 46, 'givenName' => 'Ben', 'familyName' => 'McGhee', 'preferredName' => '',
			'email' => 'ben@ecourban.com.au', 'phone1' => '0428 752 958', 'phone2' => '',
			'address1' => 'Unit 4/29 Russell St', 'address2' => null,
			'locality' => 'South Brisbane', 'state' => 'Qld', 'postcode' => '4101', 'country' => 'Australia',
			'emergencyContact' => 'Cheryl Vivian', 'emergencyPhone1' => '0400 551 919', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'MC, Bars, Stage Management',
			'commentsInfo' => 'I have previous MC experience at festivals and events, most recently Caloundra Music Festival. I have a love of folk festivals (Have been attending the National for 17 years now, where I worked in the bars this easter)., , I have extensive experience interacting with artists and presenting on stage through my work in radio stations and as a student ambassador at QUT. I am passionate about music and love working with artists and presenting on stage. I would love the opportunity to bring this passion and my youth (19 years old) to the festival by MC\'ing. , , My other roles also include bar work, I hold a current RSA and have worked in festival bars before.',
			'discovery' => 'I attended the festival last year and loved the community feel the volunteers helped provide. Would love to be apart of that this year.',
			'id_orig' => 119, 'key_orig' => 'vwz89k', 'ip' => '131.181.158.27',
			'created_orig' => '2015-06-09 14:05:39', 'updated_orig' => '2015-06-09 14:05:39',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 47, 'givenName' => 'Richard', 'familyName' => 'Colclough', 'preferredName' => 'Ric, Ricco N .....',
			'email' => 'riccolclough@gmail.com', 'phone1' => '0418 298 506', 'phone2' => '',
			'address1' => '24 Kings Lane', 'address2' => null,
			'locality' => 'Reesville', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Nick Francis', 'emergencyPhone1' => '0409 050 837', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'vollie tent, bar, ticketing, shop, MC.',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 120, 'key_orig' => '6wsi7p', 'ip' => '101.169.255.241',
			'created_orig' => '2015-06-09 15:45:15', 'updated_orig' => '2015-06-09 15:45:15',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 48, 'givenName' => 'Julie', 'familyName' => 'Fullerton', 'preferredName' => '',
			'email' => 'meander123@gmail.com', 'phone1' => '0467 550 029', 'phone2' => '',
			'address1' => 'PO Box 1002', 'address2' => null,
			'locality' => 'Tewantin', 'state' => 'Qld', 'postcode' => '4565', 'country' => 'Australia',
			'emergencyContact' => 'Ray Jack', 'emergencyPhone1' => '0467 550 049', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'MCing',
			'commentsInfo' => 'Invitation to MC from John Wright',
			'discovery' => 'John Wright invited me to MC',
			'id_orig' => 123, 'key_orig' => 'o4hjvm', 'ip' => '110.142.173.98',
			'created_orig' => '2015-06-10 08:38:43', 'updated_orig' => '2015-06-10 08:38:43',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 49, 'givenName' => 'Becky', 'familyName' => 'Wandell', 'preferredName' => '',
			'email' => 'becky@woodfordia.com', 'phone1' => '0418 782 489', 'phone2' => '',
			'address1' => '106 Evans Rd', 'address2' => null,
			'locality' => 'Black Mountain', 'state' => 'Qld', 'postcode' => '4563', 'country' => 'Australia',
			'emergencyContact' => 'Patrick Craigie', 'emergencyPhone1' => '0417 207 642', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Stage Management',
			'commentsInfo' => 'John phoned and asked me if I would stage manage again',
			'discovery' => null,
			'id_orig' => 124, 'key_orig' => '6dukyg', 'ip' => '1.128.96.106',
			'created_orig' => '2015-06-10 10:22:05', 'updated_orig' => '2015-06-10 10:22:05',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 50, 'givenName' => 'Julia', 'familyName' => 'Desbrosses', 'preferredName' => 'Julz',
			'email' => 'seedwalkabout@rediffmail.com', 'phone1' => '0457 955 685', 'phone2' => '',
			'address1' => '13 Maipu Ct', 'address2' => null,
			'locality' => 'Eagle Heights', 'state' => 'Qld', 'postcode' => '4271', 'country' => 'Australia',
			'emergencyContact' => 'Sue Desbrosses', 'emergencyPhone1' => '0410 408 588', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Ticketing, Shop, Campground, Vollie Tent, site decoration.. can t be there for the set up sorry',
			'commentsInfo' => 'I m responsible, nearly 50... can help counsel teens with drug-related issues... I love Maleny !',
			'discovery' => 'u emailed me, as a returning vollie i believe... thanks.. :)',
			'id_orig' => 126, 'key_orig' => '6ayv3j', 'ip' => '58.6.100.165',
			'created_orig' => '2015-06-10 11:25:50', 'updated_orig' => '2015-06-10 11:25:50',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 51, 'givenName' => 'Kim', 'familyName' => 'Banffy', 'preferredName' => 'Kim!',
			'email' => 'kim@kimbanffy.com.au', 'phone1' => '0425 363 589', 'phone2' => '',
			'address1' => '1/5 Barkala Ct', 'address2' => null,
			'locality' => 'Ocean Shores', 'state' => 'NSW', 'postcode' => '2483', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Ticketing, MC, Vollie Tent, Shop',
			'commentsInfo' => 'I\'ve volunteered at other festivals before & I\'m also a performer (singer/songwriter). I\'m little, so wouldn\'t make a good bouncer!',
			'discovery' => 'website',
			'id_orig' => 128, 'key_orig' => 'v1jshk', 'ip' => '58.168.79.223',
			'created_orig' => '2015-06-10 20:22:42', 'updated_orig' => '2015-06-10 20:22:42',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 29, 'givenName' => 'Caroline', 'familyName' => 'Boydell', 'preferredName' => 'Cardie',
			'email' => 'cardieboydell@bigpond.com', 'phone1' => '0400 101 797', 'phone2' => '',
			'address1' => '100 Kings Lane', 'address2' => null,
			'locality' => 'Reesville', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Pete Davies', 'emergencyPhone1' => '0457 085 198', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'MC and organising the Youth spot.',
			'commentsInfo' => 'I would like to request the session be held in a small tent or the smaller stage downstairs for the youth please. I will also get in contact with the other teachers in town to let them know of the youth spot and if they have anyone who would like to perform preferable original songs.',
			'discovery' => 'I have been doing the youth spot for a couple years.',
			'id_orig' => 129, 'key_orig' => '1x17yi', 'ip' => '124.185.74.144',
			'created_orig' => '2015-06-11 12:02:47', 'updated_orig' => '2015-06-11 12:02:47',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 52, 'givenName' => 'Sharynne', 'familyName' => 'Durbidge', 'preferredName' => 'Sharynne',
			'email' => 'sharynne.durbidge@au.nestle.com', 'phone1' => '0418 742 449', 'phone2' => '',
			'address1' => '91 Stratford Park Dr', 'address2' => null,
			'locality' => 'Pomona', 'state' => 'Qld', 'postcode' => '4568', 'country' => 'Australia',
			'emergencyContact' => 'Ken Caven', 'emergencyPhone1' => '0404 074 661', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'I am happy to do Ticketing, Traffic Management, Shop etc. , , I have a Diploma of OHS, and my current job is with Nestle as their Safety, Health & Environment Manager. I\'m happy to do work in this area too - doing Inductions or whatever else etc.',
			'commentsInfo' => 'I would prefer to volunteer on Friday or Saturday. Friday anytime, Saturday morning would be better but not essential.',
			'discovery' => 'A friend volunteered there last year and had a lot of fun doing it so we both want to do it this year. I live semi-locally in Pomona, and have wanted to come to the festival for a couple of years now but circumstances have prevented it.',
			'id_orig' => 131, 'key_orig' => 'lz8umq', 'ip' => '141.122.172.212',
			'created_orig' => '2015-06-12 09:21:33', 'updated_orig' => '2015-06-12 09:21:33',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 53, 'givenName' => 'Michelle', 'familyName' => 'Bragg', 'preferredName' => '',
			'email' => 'michelle.bragg@epicentre.com.au', 'phone1' => '0407 152 182', 'phone2' => '07 3204 8118',
			'address1' => '8 Anembo Ct', 'address2' => null,
			'locality' => 'Deception Bay', 'state' => 'Qld', 'postcode' => '4508', 'country' => 'Australia',
			'emergencyContact' => 'Elaine Bragg', 'emergencyPhone1' => '07 3204 8118', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => '2 years ago I volunteered on the main entry ticketing desk Happy to do so again. I have customer service and sales experince so could also work bar / shop',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 132, 'key_orig' => '1r5xr6', 'ip' => '203.30.33.59',
			'created_orig' => '2015-06-12 13:04:46', 'updated_orig' => '2015-06-12 13:04:46',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 54, 'givenName' => 'Kerry', 'familyName' => 'Germain', 'preferredName' => '',
			'email' => 'kg4005@hotmail.com', 'phone1' => '0406 866 800', 'phone2' => '',
			'address1' => '9 Ingle Ct', 'address2' => null,
			'locality' => 'Bli Bli', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Tay Germain', 'emergencyPhone1' => '0433 294 183', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Shop, Ticketing, Vollie Tent',
			'commentsInfo' => 'Ive been involved with hospitality industry for over 30yrs, all aspects.',
			'discovery' => 'web site.',
			'id_orig' => 133, 'key_orig' => 'fosxod', 'ip' => '122.148.213.1',
			'created_orig' => '2015-06-12 16:28:25', 'updated_orig' => '2015-06-12 16:28:25',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 55, 'givenName' => 'Sue', 'familyName' => 'Collins', 'preferredName' => '',
			'email' => 'suec28@gmail.com', 'phone1' => '0405 558 153', 'phone2' => '07 5442 3441',
			'address1' => '40 Reids Rd', 'address2' => null,
			'locality' => 'Woombye', 'state' => 'Qld', 'postcode' => '4559', 'country' => 'Australia',
			'emergencyContact' => 'Val & John English', 'emergencyPhone1' => '07 5442 1522', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Ticketing, Traffic, Vollie Tent',
			'commentsInfo' => null,
			'discovery' => 'Through your website I volunteered at your first one. Have volunteered at Maleny/Woodford Folk Festival many times (usually in Childrens Festival area).',
			'id_orig' => 135, 'key_orig' => 'lqa5ar', 'ip' => '202.173.166.4',
			'created_orig' => '2015-06-13 10:25:05', 'updated_orig' => '2015-06-13 10:25:05',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 56, 'givenName' => 'Katherine', 'familyName' => 'Webb', 'preferredName' => 'Vici',
			'email' => 'resolve@tpg.com.au', 'phone1' => '0412 170 669', 'phone2' => '07 5485 0260',
			'address1' => '13 Edward St', 'address2' => null,
			'locality' => 'Cooran', 'state' => 'Qld', 'postcode' => '4569', 'country' => 'Australia',
			'emergencyContact' => 'Madeleine Webb', 'emergencyPhone1' => '0423 433 889', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Vollie Tent, Shop, Ticketing',
			'commentsInfo' => 'I worked in the bar last time - a few years ago now - but I think my RSA has expired.',
			'discovery' => 'Email...',
			'id_orig' => 138, 'key_orig' => '3x881w', 'ip' => '110.238.5.213',
			'created_orig' => '2015-06-14 11:54:54', 'updated_orig' => '2015-06-14 11:54:54',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 57, 'givenName' => 'Lynette', 'familyName' => 'Dawson', 'preferredName' => 'Lyn',
			'email' => 'dawson_lyn@hotmail.com', 'phone1' => '0409 628 261', 'phone2' => '07 3286 4781',
			'address1' => 'Unit 6/96 Wynyard St', 'address2' => null,
			'locality' => 'Cleveland', 'state' => 'Qld', 'postcode' => '4163', 'country' => 'Australia',
			'emergencyContact' => 'Kimberley Simmons', 'emergencyPhone1' => '0478 056 202', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Shop, ticketing, site decoration',
			'commentsInfo' => null,
			'discovery' => 'From my friend who has volunteered',
			'id_orig' => 140, 'key_orig' => 'pzpbur', 'ip' => '122.105.109.33',
			'created_orig' => '2015-06-14 13:53:02', 'updated_orig' => '2015-06-14 13:53:02',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 58, 'givenName' => 'Liran', 'familyName' => 'Shachar', 'preferredName' => 'Precious',
			'email' => 'liran.s@hotmail.com', 'phone1' => '0421 746 910', 'phone2' => '',
			'address1' => '63 Lynden St', 'address2' => null,
			'locality' => 'Camberwell', 'state' => 'Vic', 'postcode' => '3124', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Set Up, vollie tent, ticketing',
			'commentsInfo' => 'The weekend sounds wonderful and I would LOVE to offer a helping hand! :-)',
			'discovery' => 'Folk News Brisbane',
			'id_orig' => 142, 'key_orig' => '7cu369', 'ip' => '27.33.5.144',
			'created_orig' => '2015-06-15 02:56:42', 'updated_orig' => '2015-06-15 02:56:42',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 59, 'givenName' => 'Linda', 'familyName' => 'Stemp', 'preferredName' => 'Linda',
			'email' => 'lindystemp@gmail.com', 'phone1' => '0414 505 444', 'phone2' => '07 3342 4807',
			'address1' => '18 Joywood St', 'address2' => null,
			'locality' => 'Tarragindi', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => 'Yazmin Stemp', 'emergencyPhone1' => '0435 639 133', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Session musician with Don Jarmey',
			'commentsInfo' => null,
			'discovery' => 'Don Jarmey',
			'id_orig' => 147, 'key_orig' => 'sfsn3g', 'ip' => '110.23.37.224',
			'created_orig' => '2015-06-16 15:53:32', 'updated_orig' => '2015-06-16 15:53:32',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 60, 'givenName' => 'Jeanette', 'familyName' => 'Isaacs-Young', 'preferredName' => '',
			'email' => 'jeanette@lifestreamassociates.com.au', 'phone1' => '0438 562 118', 'phone2' => '07 5442 2484',
			'address1' => 'PO Box 134', 'address2' => null,
			'locality' => 'Woombye', 'state' => 'Qld', 'postcode' => '4559', 'country' => 'Australia',
			'emergencyContact' => 'John Isaacs-Young', 'emergencyPhone1' => '0468 333 137', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'MC , Vollies',
			'commentsInfo' => 'I have been an MC at Woodford for over 20 years, and I have been approached by John Wright after doing MC role at Maleny Music Weekend last year., I also have worked in artist liaison, as a pa for VIP guests, and performer.',
			'discovery' => 'I was approached by John Wright in 2014',
			'id_orig' => 155, 'key_orig' => '2kyo32', 'ip' => '124.171.88.40',
			'created_orig' => '2015-06-24 12:10:28', 'updated_orig' => '2015-06-24 12:10:28',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 61, 'givenName' => 'David', 'familyName' => 'Maynard', 'preferredName' => 'Dave',
			'email' => 'maynard678@gmail.com', 'phone1' => '0459 597 617', 'phone2' => '',
			'address1' => '8 Mellumview Dr', 'address2' => null,
			'locality' => 'Beerwah', 'state' => 'Qld', 'postcode' => '4519', 'country' => 'Australia',
			'emergencyContact' => 'Rose Maynard', 'emergencyPhone1' => '0448 633 470', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'ticketing ,traffic',
			'commentsInfo' => 'im a current member of glasshouse mountains rescue..i hold a current first aid/cpr certificate safety officers cert plus many more..ive also travelled with marches amusements with over 15yrs exp in ticket sales..',
			'discovery' => 'facebook',
			'id_orig' => 158, 'key_orig' => '6dgptn', 'ip' => '124.187.31.191',
			'created_orig' => '2015-06-24 20:04:59', 'updated_orig' => '2015-06-24 20:04:59',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 62, 'givenName' => 'Sharrie', 'familyName' => 'Fair', 'preferredName' => 'Shazzy',
			'email' => 'sharriefair@yahoo.com', 'phone1' => '0413 469 687', 'phone2' => '',
			'address1' => '43A/23 Scholars Dr', 'address2' => null,
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Timothy Sima', 'emergencyPhone1' => '0413 469 687', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Ticketing,Shop,',
			'commentsInfo' => 'I cant lift and carry heavy things. My last place I volunteered for was the WED event. I\'m in Business administration III and have had alot customer service work. I\'ve listed some I can do anything customer service related. Thank you :D',
			'discovery' => 'I found this through an acquaintance Gay Liddington',
			'id_orig' => 160, 'key_orig' => 'aefkbx', 'ip' => '125.253.44.44',
			'created_orig' => '2015-06-24 20:28:01', 'updated_orig' => '2015-06-24 20:28:01',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 63, 'givenName' => 'Timothy', 'familyName' => 'Sima', 'preferredName' => 'Tim',
			'email' => 'timsima@hotmail.com', 'phone1' => '0413 469 687', 'phone2' => '',
			'address1' => '43A/23 Scholars Dr', 'address2' => null,
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Carol Sima', 'emergencyPhone1' => '07 5483 8810', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Tixketin shop bar security',
			'commentsInfo' => 'Currently finishing a bachelor\'s degree in computer based design. Formerly a chef but cannot work as a chef due to a back injury. Would like to work at the same time as my wife sharrie fair as we would both drive there together.',
			'discovery' => 'from my wife sharrie fair',
			'id_orig' => 162, 'key_orig' => 'vf3mjx', 'ip' => '125.253.44.44',
			'created_orig' => '2015-06-24 20:42:44', 'updated_orig' => '2015-06-24 20:42:44',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 64, 'givenName' => 'Joy', 'familyName' => 'Billings', 'preferredName' => 'Joy',
			'email' => 'jbillings477@gmail.com', 'phone1' => '0409 477 651', 'phone2' => '',
			'address1' => '21 Mawarra St', 'address2' => null,
			'locality' => 'Buddina', 'state' => 'Qld', 'postcode' => '4575', 'country' => 'Australia',
			'emergencyContact' => 'Lisa McBurnie', 'emergencyPhone1' => '0405 121 102', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Anything....no heavy lifting...',
			'commentsInfo' => 'People person....old',
			'discovery' => 'From your committee member',
			'id_orig' => 163, 'key_orig' => '84lfcz', 'ip' => '118.208.174.108',
			'created_orig' => '2015-06-24 20:47:36', 'updated_orig' => '2015-06-24 20:47:36',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 65, 'givenName' => 'Lani', 'familyName' => 'Mercer', 'preferredName' => 'Lani',
			'email' => 'jessomine@westnet.com.au', 'phone1' => '0411 076 585', 'phone2' => '',
			'address1' => '44 Buzaki Rd', 'address2' => null,
			'locality' => 'Glass House Mountains', 'state' => 'Qld', 'postcode' => '4518', 'country' => 'Australia',
			'emergencyContact' => 'Craig', 'emergencyPhone1' => '0411 076 586', 'emergencyPhone2' => '07 5438 7795',
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Bars, Vollie Tent, Ticketing, Shop',
			'commentsInfo' => 'I vollied last year at the Caloundra Music festival and will do so again this year. I worked in ticketing and bar ticket sales in the vip area there. I am the volunteer kitchen manager and cook at the Glass House RSL.',
			'discovery' => 'facebook',
			'id_orig' => 166, 'key_orig' => '9ud94s', 'ip' => '124.170.68.94',
			'created_orig' => '2015-06-26 07:04:01', 'updated_orig' => '2015-06-26 07:04:01',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 66, 'givenName' => 'Clayton', 'familyName' => 'O\'Toole', 'preferredName' => '',
			'email' => 'clayton.d.otoole@gmail.com', 'phone1' => '0467 081 178', 'phone2' => '07 5492 9467',
			'address1' => '43 Paget St', 'address2' => null,
			'locality' => 'Mooloolah Valley', 'state' => 'Qld', 'postcode' => '4553', 'country' => 'Australia',
			'emergencyContact' => 'Lynda O\'Toole', 'emergencyPhone1' => '0420 455 260', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'I\'m sure I\'d go fairly well anywhere there, although I might not be cut out out for the Bar Security or Stage Management.',
			'commentsInfo' => 'I\'m into fitness and weightlifting so I know how to lift heavy things which might be an asset when setting up. I\'m generally pretty good in front of a crowd, I\'ve done a bit of public speaking and a few musical performances. I\'m happy to do practically anything, even if it\'s mopping floors etc.',
			'discovery' => 'Through a work colleague who has also volunteered.',
			'id_orig' => 168, 'key_orig' => 'c00fy0', 'ip' => '27.0.80.17',
			'created_orig' => '2015-06-27 15:44:51', 'updated_orig' => '2015-06-27 15:44:51',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 67, 'givenName' => 'Rochelle', 'familyName' => 'Ragless', 'preferredName' => '',
			'email' => 'rl.weston89@gmail.com', 'phone1' => '0423 882 389', 'phone2' => '',
			'address1' => '7 Bidder St', 'address2' => null,
			'locality' => 'Salisbury', 'state' => 'Qld', 'postcode' => '4107', 'country' => 'Australia',
			'emergencyContact' => 'Daniel Ragless', 'emergencyPhone1' => '0447 120 013', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Site Decoration, Ticketing, Shop',
			'commentsInfo' => 'I\'m 26 yrs old & I am an honest hardworking person',
			'discovery' => 'Facebook',
			'id_orig' => 170, 'key_orig' => 'dac7hj', 'ip' => '121.208.128.175',
			'created_orig' => '2015-06-29 18:15:10', 'updated_orig' => '2015-06-29 18:15:10',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 68, 'givenName' => 'Daniel', 'familyName' => 'Ragless', 'preferredName' => 'Danny',
			'email' => 'dp.ragless@gmail.com', 'phone1' => '0447 120 013', 'phone2' => '',
			'address1' => '7 Bidder St', 'address2' => null,
			'locality' => 'Salisbury', 'state' => 'Qld', 'postcode' => '4107', 'country' => 'Australia',
			'emergencyContact' => 'Rochelle Ragless', 'emergencyPhone1' => '0423 882 389', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Stage Management, Ticketing , Shop',
			'commentsInfo' => 'I have a degree in audio engineering & sound technician. My wife Rochelle has applied to volunteer too so it would be great if we got the volunteer jobs that we could be on the same hours. Thankyou',
			'discovery' => 'Facebook',
			'id_orig' => 171, 'key_orig' => 'x2cv87', 'ip' => '121.208.128.175',
			'created_orig' => '2015-06-29 18:18:05', 'updated_orig' => '2015-06-29 18:18:05',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 69, 'givenName' => 'Kendrick', 'familyName' => 'Gleeson', 'preferredName' => 'Ken',
			'email' => 'zenkenmassage@gmail.com', 'phone1' => '0437 738 712', 'phone2' => '',
			'address1' => '1/41 Hynes St', 'address2' => null,
			'locality' => 'Fortitude Valley', 'state' => 'Qld', 'postcode' => '4006', 'country' => 'Australia',
			'emergencyContact' => 'Simon Gleeson', 'emergencyPhone1' => '0448 098 697', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Camp Ground,Cleaning,Set Up/bump out,Site Decoration,Ticketing,Traffic, :) (Vollie Tent) :)',
			'commentsInfo' => 'I have worked in the vollie tent a few years ago as a massage therapist giving vollies a short 10 min massage to help them continue on there day. I would be happy to do this again or something similar if wanted.',
			'discovery' => 'I was living in Maleny for the past 7 years and have been going to the festival when ever I can., So through friends and Facebook.',
			'id_orig' => 172, 'key_orig' => 'ozrlv5', 'ip' => '203.87.13.97',
			'created_orig' => '2015-06-29 18:35:25', 'updated_orig' => '2015-06-29 18:35:25',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 70, 'givenName' => 'Leonie', 'familyName' => 'Wilson', 'preferredName' => 'Le',
			'email' => 'leoniew73@gmail.com', 'phone1' => '0420 929 860', 'phone2' => '07 5456 1525',
			'address1' => '101 Lindsay Rd', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'John Grove', 'emergencyPhone1' => '07 5456 1525', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'All the above',
			'commentsInfo' => null,
			'discovery' => 'Been a member of the Community for 30 yrs and would love to contribute',
			'id_orig' => 173, 'key_orig' => '3ysrh2', 'ip' => '123.211.223.234',
			'created_orig' => '2015-06-29 18:45:32', 'updated_orig' => '2015-06-29 18:45:32',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 71, 'givenName' => 'Carla', 'familyName' => 'Sculthorpe', 'preferredName' => 'Carla',
			'email' => 'carlabananas@hotmail.com', 'phone1' => '0411 577 892', 'phone2' => '',
			'address1' => 'Unit 7/60 Edward St', 'address2' => null,
			'locality' => 'Alexandra Headland', 'state' => 'Qld', 'postcode' => '4572', 'country' => 'Australia',
			'emergencyContact' => 'Joshua Byrne', 'emergencyPhone1' => '0474 728 901', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Traffic',
			'commentsInfo' => 'I am 51, have been a volunteer for Grottofest, Marburg; Caloundra Music Festival & Woodford Folk Festival. I am fit, reliable and enjoy being a volunteer.',
			'discovery' => 'Facebook.',
			'id_orig' => 175, 'key_orig' => 'jk8rvh', 'ip' => '120.22.84.250',
			'created_orig' => '2015-06-29 19:40:02', 'updated_orig' => '2015-06-29 19:40:02',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 72, 'givenName' => 'Andrew', 'familyName' => 'Makin', 'preferredName' => 'Andy',
			'email' => 'andylivesinoz@gmail.com', 'phone1' => '0490 366 148', 'phone2' => '',
			'address1' => '5 Prince St', 'address2' => null,
			'locality' => 'Dinmore', 'state' => 'Qld', 'postcode' => '4303', 'country' => 'Australia',
			'emergencyContact' => 'James Makin', 'emergencyPhone1' => '0457 329 343', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Stage Management',
			'commentsInfo' => 'I have been a volunteer at Woodford in this area, (Duck Venue) and have now been a contractor who does sound for the Poet\'s Breakfast and Ball for last 5 years. , Have previously been an employee stage hand at Bluesfest, I am an experienced but now semi-retired production engineer (both audio and lighting).',
			'discovery' => 'Musician friends told me how good it was and last year was able to get a position at the last minute due to holding RSA.',
			'id_orig' => 177, 'key_orig' => 'zjovia', 'ip' => '124.170.101.38',
			'created_orig' => '2015-06-29 21:04:17', 'updated_orig' => '2015-06-29 21:04:17',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 73, 'givenName' => 'Jennifer', 'familyName' => 'Parenteau', 'preferredName' => 'Jenny',
			'email' => 'jennyparenteau@gmail.com', 'phone1' => '0403 646 899', 'phone2' => '',
			'address1' => '28A Hardy Ave', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => 'Mary Sterling', 'emergencyPhone1' => '0417 605 655', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Stage management, set up/bump out, shop, vollie tent, ticketing, site decoration',
			'commentsInfo' => 'performer, musician, teacher, experience with running conferences.',
			'discovery' => 'internet',
			'id_orig' => 181, 'key_orig' => 'bzlqsy', 'ip' => '58.168.116.139',
			'created_orig' => '2015-06-30 19:34:12', 'updated_orig' => '2015-06-30 19:34:12',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 74, 'givenName' => 'Setphen', 'familyName' => 'Swayne', 'preferredName' => 'Steve',
			'email' => 'steve@serendigity.net', 'phone1' => '0479 041 957', 'phone2' => '07 5435 2685',
			'address1' => '43 Tallowwood St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Karen Arnold', 'emergencyPhone1' => '0479 087 771', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Photography',
			'commentsInfo' => 'Please ask Noel, I have been at the past festivals.',
			'discovery' => 'Past organiser.',
			'id_orig' => 182, 'key_orig' => 'fmwwkt', 'ip' => '82.28.245.100',
			'created_orig' => '2015-06-30 19:45:44', 'updated_orig' => '2015-06-30 19:45:44',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 75, 'givenName' => 'Fiona', 'familyName' => 'Gray', 'preferredName' => '',
			'email' => 'meefeefee@yahoo.co.uk', 'phone1' => '0466 469 228', 'phone2' => '',
			'address1' => '12 Woodville Pl', 'address2' => null,
			'locality' => 'Annerley', 'state' => 'Qld', 'postcode' => '4103', 'country' => 'Australia',
			'emergencyContact' => 'Lawrence Agar', 'emergencyPhone1' => '0421 650 487', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'shop, vollie tent, ticketing, camp ground',
			'commentsInfo' => 'i am a qualified remedial massage therapist',
			'discovery' => 'my partner (musician)',
			'id_orig' => 188, 'key_orig' => '6fe0dr', 'ip' => '122.108.178.88',
			'created_orig' => '2015-07-01 08:41:21', 'updated_orig' => '2015-07-01 08:41:21',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 76, 'givenName' => 'Stephanie', 'familyName' => 'Hicks', 'preferredName' => '',
			'email' => 'hicksstephanie@optusnet.com.au', 'phone1' => '0401 650 704', 'phone2' => '07 3352 5576',
			'address1' => '21 Bally St', 'address2' => null,
			'locality' => 'Kelvin Grove', 'state' => 'Qld', 'postcode' => '4059', 'country' => 'Australia',
			'emergencyContact' => 'Ed Wrigley', 'emergencyPhone1' => '07 3150 7547', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Any.',
			'commentsInfo' => 'I\'m 62 so maybe not anything involving heavy lifting! I live part time at Conondale so almost a local.',
			'discovery' => 'Shez Wright forwarded email',
			'id_orig' => 189, 'key_orig' => '26d7kb', 'ip' => '110.23.53.235',
			'created_orig' => '2015-07-01 10:07:27', 'updated_orig' => '2015-07-01 10:07:27',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 77, 'givenName' => 'Simon', 'familyName' => 'Wells', 'preferredName' => '',
			'email' => 'smnwlls@optusnet.com.au', 'phone1' => '0408 762 473', 'phone2' => '',
			'address1' => '43 Hadley St', 'address2' => null,
			'locality' => 'Pittsworth', 'state' => 'Qld', 'postcode' => '4356', 'country' => 'Australia',
			'emergencyContact' => 'Sally Egan', 'emergencyPhone1' => '0401 089 830', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Set Up, BumpOut; Stage management;MC ; Shop',
			'commentsInfo' => 'I\'ve volunteered for 8 years at the national Folk festival in Canberra, doing bar set-up and stage management.',
			'discovery' => 'email',
			'id_orig' => 190, 'key_orig' => 'w4uans', 'ip' => '1.128.96.232',
			'created_orig' => '2015-07-01 16:35:39', 'updated_orig' => '2015-07-01 16:35:39',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 78, 'givenName' => 'Yazmin', 'familyName' => 'Stemp Yacoubi', 'preferredName' => '',
			'email' => 'yazistemp@gmail.com', 'phone1' => '0435 639 133', 'phone2' => '07 3342 4807',
			'address1' => '18 Joywood St', 'address2' => null,
			'locality' => 'Tarragindi', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => 'Linda Stemp', 'emergencyPhone1' => '0414 505 444', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Bars, Shop happy to do others though :)',
			'commentsInfo' => 'Keen to give it all a go!',
			'discovery' => 'Family that are going to the festival!',
			'id_orig' => 191, 'key_orig' => 'j29xba', 'ip' => '110.23.37.224',
			'created_orig' => '2015-07-01 16:46:29', 'updated_orig' => '2015-07-01 16:46:29',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 347, 'givenName' => 'Tessa', 'familyName' => 'Nelson', 'preferredName' => '',
			'email' => 'tng1@tpg.com.au', 'phone1' => '0401 285 740', 'phone2' => '',
			'address1' => '22 Springfield Ave', 'address2' => null,
			'locality' => 'Coolum Beach', 'state' => 'Qld', 'postcode' => '4573', 'country' => 'Australia',
			'emergencyContact' => 'Les Kirkbride', 'emergencyPhone1' => '0432 062 767', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'set up/bump out',
			'commentsInfo' => null,
			'discovery' => 'via email',
			'id_orig' => 196, 'key_orig' => 'zw9u6c', 'ip' => '14.202.141.104',
			'created_orig' => '2015-07-02 18:16:51', 'updated_orig' => '2015-07-02 18:16:51',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 79, 'givenName' => 'Caroline', 'familyName' => 'Lloyd', 'preferredName' => 'Cass',
			'email' => 'casslloyd2@yahoo.com.au', 'phone1' => '0468 453 344', 'phone2' => '',
			'address1' => 'PO Box 1987', 'address2' => null,
			'locality' => 'Byron Bay', 'state' => 'NSW', 'postcode' => '2481', 'country' => 'Australia',
			'emergencyContact' => 'Jenny Parenteau', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Shop Ticketing Site decoration Traffic',
			'commentsInfo' => 'I am travelling with my friend Jenny Parenteau. who has also volunteered with you ..we are both retired ex teachers/principals and as we are sharing car/accommodation we need to be on same time schedules. We are both very experienced at handling people especially families with young children.',
			'discovery' => 'From my friend Jenny',
			'id_orig' => 199, 'key_orig' => '4cj86e', 'ip' => '110.147.193.69',
			'created_orig' => '2015-07-04 10:00:54', 'updated_orig' => '2015-07-04 10:00:54',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 342, 'givenName' => 'Lenore', 'familyName' => 'Suska', 'preferredName' => '',
			'email' => 'lenore808@gmail.com', 'phone1' => '0422 936 469', 'phone2' => '07 4978 1322',
			'address1' => '49 Butler St', 'address2' => null,
			'locality' => 'New Auckland', 'state' => 'Qld', 'postcode' => '4680', 'country' => 'Australia',
			'emergencyContact' => 'Michael Suska', 'emergencyPhone1' => '0407 859 206', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Set Up Venue Decoration',
			'commentsInfo' => 'Musicians for life',
			'discovery' => 'Maleny local news',
			'id_orig' => 202, 'key_orig' => 'sha4n1', 'ip' => '58.6.134.180',
			'created_orig' => '2015-07-04 10:17:37', 'updated_orig' => '2015-07-04 10:17:37',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 80, 'givenName' => 'Karla', 'familyName' => 'Quinn', 'preferredName' => '',
			'email' => 'karla.quinn@uqconnect.edu.au', 'phone1' => '0419 653 502', 'phone2' => '07 3876 2569',
			'address1' => '4/13 Clermont St', 'address2' => null,
			'locality' => 'Bardon', 'state' => 'Qld', 'postcode' => '4065', 'country' => 'Australia',
			'emergencyContact' => 'Andrea Quinn', 'emergencyPhone1' => '0419 653 340', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Site Decoration, Ticketing, Shop, Vollie Tent',
			'commentsInfo' => 'I have previously volunteered at several functions, including holding stalls for our 4ZZZ local radio station and the University of Queensland\'s Oxfam group, I have performed data entry for Amnesty International, represented USQ as their mascot ( dressed a chicken), helped out at our community garden, just to name a few, and currently volunteer at RSPCA as a Wildlife Ambulance Assistant. I have many skills and take pride in my volunteer work for the great experiences it gives me and the wonderful people I get to meet.',
			'discovery' => 'My mother forwarded an email to me sent via internal mail at where she works, knowing that I\'d probably be interested in taking part.',
			'id_orig' => 203, 'key_orig' => 't4ha1q', 'ip' => '101.162.10.235',
			'created_orig' => '2015-07-06 09:32:40', 'updated_orig' => '2015-07-06 09:32:40',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 81, 'givenName' => 'David', 'familyName' => 'Lapsley', 'preferredName' => '',
			'email' => 'davo101lap@gmail.com', 'phone1' => '07 5494 4827', 'phone2' => '',
			'address1' => '186 Jager Dr', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Cheryl Laizans', 'emergencyPhone1' => '07 5429 6065', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Set up/bump out, Site Decoration, Ticketing, Traffic, Shop, Cleaning, Vollie tent.',
			'commentsInfo' => null,
			'discovery' => 'Friend',
			'id_orig' => 204, 'key_orig' => 'ew7a2i', 'ip' => '125.168.112.213',
			'created_orig' => '2015-07-06 11:48:59', 'updated_orig' => '2015-07-06 11:48:59',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 82, 'givenName' => 'Glenda', 'familyName' => 'Eade', 'preferredName' => '',
			'email' => 'glenda-eade@hotmail.com', 'phone1' => '0432 713 456', 'phone2' => '',
			'address1' => 'PO Box 200', 'address2' => null,
			'locality' => 'Eudlo', 'state' => 'Qld', 'postcode' => '4554', 'country' => 'Australia',
			'emergencyContact' => 'Laura Mahadevan', 'emergencyPhone1' => '0423 437 031', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'camp ground, cleaning, set-up, ticketing shop vollie tent',
			'commentsInfo' => null,
			'discovery' => 'online',
			'id_orig' => 207, 'key_orig' => 'sq75ji', 'ip' => '101.169.42.159',
			'created_orig' => '2015-07-06 17:14:02', 'updated_orig' => '2015-07-06 17:14:02',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 83, 'givenName' => 'Carole', 'familyName' => 'Thomas', 'preferredName' => 'Caz',
			'email' => 'caztpix@gmail.com', 'phone1' => '0402 245 476', 'phone2' => '',
			'address1' => '57 Frederick St', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => 'Matt Thomas', 'emergencyPhone1' => '0414 243 883', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Photography',
			'commentsInfo' => 'I attended last year with the carnivalia performers. , I\'d love to do photography for your event again. , This is the link to last year\'s photos... , https://www.facebook.com/media/set/?set=a.714683998619142.1073741866.143572002397014&type=3, :)',
			'discovery' => 'On your Facebook page.',
			'id_orig' => 209, 'key_orig' => '6c6kk7', 'ip' => '110.23.68.167',
			'created_orig' => '2015-07-09 00:34:07', 'updated_orig' => '2015-07-09 00:34:07',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 84, 'givenName' => 'Tamara', 'familyName' => 'Tilling', 'preferredName' => 'Tamara',
			'email' => 't.maree@hotmail.co.nz', 'phone1' => '0428 821 575', 'phone2' => '',
			'address1' => '34 Water Gum Cr', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sharon Ward', 'emergencyPhone1' => '0411 856 877', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'set up/bump out...site decoration',
			'commentsInfo' => 'I love the festival and would like to help out and feel a part of it. I have experience on stage and back stage with performing arts...backdrops/props/costumes etc',
			'discovery' => 'Through a friend/committee member',
			'id_orig' => 214, 'key_orig' => '6by2zx', 'ip' => '124.185.145.203',
			'created_orig' => '2015-07-09 16:08:44', 'updated_orig' => '2015-07-09 16:08:44',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 85, 'givenName' => 'Kathleen', 'familyName' => 'Davis', 'preferredName' => 'Kath',
			'email' => 'kathydavis1@bigpond.com', 'phone1' => '07 5435 2782', 'phone2' => '',
			'address1' => '14 Ash St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0422 694 079', 'emergencyPhone2' => '07 5435 2782',
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'I am a good front desk meet and greet type person ... so Ticketing or Vollie Tent...Shop???',
			'commentsInfo' => null,
			'discovery' => 'this webpage...and been to most of the Maleny Music Festivals.',
			'id_orig' => 215, 'key_orig' => '4orjt3', 'ip' => '121.222.53.189',
			'created_orig' => '2015-07-10 19:18:57', 'updated_orig' => '2015-07-10 19:18:57',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 86, 'givenName' => 'Suzy', 'familyName' => 'Barry', 'preferredName' => '',
			'email' => 'suzy@freeorganic.com.au', 'phone1' => '0448 002 422', 'phone2' => '07 5435 0045',
			'address1' => '902 Aherns Rd', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Mark Kempster', 'emergencyPhone1' => '0417 722 995', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'ticketing, shop, vollie tent,',
			'commentsInfo' => 'I have experience in retail and customer service. I can do all the other stuff too though if you prefer. :)',
			'discovery' => 'Brett Campbell',
			'id_orig' => 219, 'key_orig' => '1tow4s', 'ip' => '124.170.84.121',
			'created_orig' => '2015-07-12 15:49:52', 'updated_orig' => '2015-07-12 15:49:52',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 87, 'givenName' => 'Trevor', 'familyName' => 'Franklin', 'preferredName' => 'Trev',
			'email' => 'trevjfranklin@gmail.com', 'phone1' => '0419 667 269', 'phone2' => '07 4128 6672',
			'address1' => 'PO Box 5487', 'address2' => null,
			'locality' => 'Torquay', 'state' => 'Qld', 'postcode' => '4655', 'country' => 'Australia',
			'emergencyContact' => 'Erin Franklin', 'emergencyPhone1' => '0458 942 094', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Bars, shop',
			'commentsInfo' => null,
			'discovery' => 'Margaret Chenery, Noel Gardner',
			'id_orig' => 220, 'key_orig' => 'gtp58t', 'ip' => '124.170.65.182',
			'created_orig' => '2015-07-13 11:41:55', 'updated_orig' => '2015-07-13 11:41:55',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 88, 'givenName' => 'Mark', 'familyName' => 'Kempster', 'preferredName' => '',
			'email' => 'mark@foodsourcegroup.com.au', 'phone1' => '0417 722 995', 'phone2' => '07 5435 0045',
			'address1' => '902 Aherns Rd', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Suzy Barry', 'emergencyPhone1' => '0448 002 422', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'on the gate with Brett Campbell',
			'commentsInfo' => null,
			'discovery' => 'Brett',
			'id_orig' => 222, 'key_orig' => 'hfbst6', 'ip' => '124.170.138.157',
			'created_orig' => '2015-07-13 13:58:33', 'updated_orig' => '2015-07-13 13:58:33',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 89, 'givenName' => 'Bibiana', 'familyName' => 'Stanfield', 'preferredName' => 'Bibi',
			'email' => 'bibianastanfield@yahoo.de', 'phone1' => '0437 238 223', 'phone2' => '',
			'address1' => 'Mossybank Rd', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => null,
			'commentsInfo' => 'Hi Gabe, I have talked to John W. the other day and he mentioned that festival and his involvement. I have worked on a bar, security and VIP area previously at the soundwave festival as well on doors and backstage areas. I also have worked in Europe at festivals and conferences, so I don\'t mind which area. You may don\'t need more people but if you do I am happy to help with my skills and qualification. I\'m German and be also a photographer and creative person to solve problems when they occur. I make myself available to be of help. Please contact me at the above mobile number. I am looking forward talking to you. Kind regards Bibiana Stanfield .',
			'discovery' => 'John W.',
			'id_orig' => 225, 'key_orig' => 'lrztqo', 'ip' => '1.128.96.179',
			'created_orig' => '2015-07-14 15:21:51', 'updated_orig' => '2015-07-14 15:21:51',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 90, 'givenName' => 'Rodney', 'familyName' => 'Stoddart', 'preferredName' => '',
			'email' => 'rodneystoddart@gmail.com', 'phone1' => '0420 824 173', 'phone2' => '',
			'address1' => 'PO Box 671', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Pam Dodson', 'emergencyPhone1' => '0407 955 480', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Camp Ground , Parking, Set up Before Festival',
			'commentsInfo' => null,
			'discovery' => 'Im a local',
			'id_orig' => 228, 'key_orig' => 'ofqhdj', 'ip' => '49.195.148.150',
			'created_orig' => '2015-07-15 17:59:35', 'updated_orig' => '2015-07-15 17:59:35',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 91, 'givenName' => 'Barry', 'familyName' => 'Munyard', 'preferredName' => '',
			'email' => 'munyardbarry@gmail.com', 'phone1' => '0447 130 453', 'phone2' => '',
			'address1' => '18 Gardenvale St', 'address2' => null,
			'locality' => 'Holland Park West', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => 'Darcy Munyard', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Cleaning, shop,',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 230, 'key_orig' => 'vyjfjm', 'ip' => '115.30.41.70',
			'created_orig' => '2015-07-15 19:14:10', 'updated_orig' => '2015-07-15 19:14:10',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 92, 'givenName' => 'Kenneth', 'familyName' => 'O\'Flaherty', 'preferredName' => 'Ken',
			'email' => 'kennyo@westnet.com.au', 'phone1' => '0417 646 759', 'phone2' => '07 5476 9533',
			'address1' => 'PO Box 1830', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => 'Lois O\'Flaherty', 'emergencyPhone1' => '07 5476 8533', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'MC, Stage management, traffic, Cleaning.',
			'commentsInfo' => 'I am a musician, Marketing executive, have ran my own business I am available the Friday, Saturday and Sunday',
			'discovery' => 'through music contacts and previously attending the event',
			'id_orig' => 231, 'key_orig' => 'cg96gu', 'ip' => '124.150.69.96',
			'created_orig' => '2015-07-15 21:10:45', 'updated_orig' => '2015-07-15 21:10:45',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 93, 'givenName' => 'Sya', 'familyName' => 'Wiersma', 'preferredName' => '',
			'email' => 'syawruss@yahoo.com.au', 'phone1' => '0432 795 549', 'phone2' => '',
			'address1' => '572 Coolabine Creek Rd', 'address2' => null,
			'locality' => 'Coolabine', 'state' => '', 'postcode' => '4574', 'country' => 'Australia',
			'emergencyContact' => 'Paul Russell', 'emergencyPhone1' => '07 5472 3416', 'emergencyPhone2' => '0432 526 874',
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Ticketing, vollie tent or shop',
			'commentsInfo' => null,
			'discovery' => 'The first year I was working as a massage therapist there',
			'id_orig' => 232, 'key_orig' => 's1uqqh', 'ip' => '49.197.12.193',
			'created_orig' => '2015-07-15 21:15:12', 'updated_orig' => '2015-07-15 21:15:12',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 12, 'givenName' => 'Susan', 'familyName' => 'Ferrar', 'preferredName' => '',
			'email' => 'tropicalday@bigpond.com', 'phone1' => '0419 776 088', 'phone2' => '',
			'address1' => '24 Wirraway St', 'address2' => null,
			'locality' => 'Alexandra Headland', 'state' => 'Qld', 'postcode' => '4572', 'country' => 'Australia',
			'emergencyContact' => 'Lee Nash', 'emergencyPhone1' => '07 4979 4106', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'I don\'t have any specifics. put me where I am needed. only one issue is I cannot stand in one spot. I need to move or sit. preferably move.',
			'commentsInfo' => 'I rely on glasshouse coaches from landsborough to get me to the festival.',
			'discovery' => null,
			'id_orig' => 233, 'key_orig' => 'ifd6df', 'ip' => '124.185.244.62',
			'created_orig' => '2015-07-16 04:57:36', 'updated_orig' => '2015-07-16 04:57:36',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 94, 'givenName' => 'Cecilie', 'familyName' => 'Schiotz', 'preferredName' => '',
			'email' => 'lovefromsarika@hotmail.com', 'phone1' => '0437 080 050', 'phone2' => '07 5429 6670',
			'address1' => '1/10 Cherry St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Peter Schiotz', 'emergencyPhone1' => '0407 942 428', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Ticketing, Shop, Vollie Tent (not exactly sure what this entails)',
			'commentsInfo' => 'I have years of experience of working with the River School Cafe, at various events (including Music Weekend), helping to co-ordinate & organise, prepare food, and general customer service. , , I have also worked at other events, separate from the school, ticketing, decorating, facilitation, service, managing, catering... locally & internationally., , On the creative side, I am a dancer. I have danced for ceremonial purposes (opening of festivals), led dance-based therapy workshops (known as "Wu Tao").',
			'discovery' => 'Being part of Maleny community',
			'id_orig' => 236, 'key_orig' => 'to16vz', 'ip' => '1.128.96.68',
			'created_orig' => '2015-07-16 12:02:56', 'updated_orig' => '2015-07-16 12:02:56',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 95, 'givenName' => 'Joanne', 'familyName' => 'Timbs', 'preferredName' => '',
			'email' => 'wattlebeeblossom@gmsil.com', 'phone1' => '0428 426 243', 'phone2' => '',
			'address1' => 'Lot 65 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Christine Hartley', 'emergencyPhone1' => '0428 426 243', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Site Decoration',
			'commentsInfo' => 'I am a capable and practical individual, with some experience in setting up microphones and sound equipment, and have been invloved in decor creation, building stage areas and setting up and cleaning for some other festivals. i work at the up front club',
			'discovery' => 'By being involved in the Maleny community, i performed at last years festival, Polybot :) YAr',
			'id_orig' => 239, 'key_orig' => 'z1l4fx', 'ip' => '101.183.55.201',
			'created_orig' => '2015-07-17 01:19:27', 'updated_orig' => '2015-07-17 01:19:27',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 96, 'givenName' => 'Alicia', 'familyName' => 'Tuddenham', 'preferredName' => 'Ali',
			'email' => 'a.tuddenham@yahoo.com', 'phone1' => '0434 554 790', 'phone2' => '',
			'address1' => '6/15 Carinya Dr', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => 'Nils Michaelis', 'emergencyPhone1' => '0402 505 613', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Set up, site decoration, ticketing, shop, MC',
			'commentsInfo' => 'I am a friendly Canadian enjoying some time living in Australia and immersing myself in the culture as much as possible!',
			'discovery' => 'Gumtree ad',
			'id_orig' => 241, 'key_orig' => 'ttf3kl', 'ip' => '14.202.50.199',
			'created_orig' => '2015-07-18 23:18:08', 'updated_orig' => '2015-07-18 23:18:08',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 97, 'givenName' => 'Julie', 'familyName' => 'Fauser', 'preferredName' => '',
			'email' => 'juliefauser@bigpond.com', 'phone1' => '07 5499 9313', 'phone2' => '',
			'address1' => '19 Cedar Grove Crt', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Todd Fauser', 'emergencyPhone1' => '07 5499 9313', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Ticketing, shop, campground,mc.',
			'commentsInfo' => 'i am good At keeping things moving along and spotting areas where it could work faster or better. Happy to work anywhere really., My Husband Todd Fauser has volunteered as well so would like to do same shifts obviously. He can work on Friday though, I can not unless it is evening.',
			'discovery' => 'here',
			'id_orig' => 244, 'key_orig' => 'kzkryf', 'ip' => '124.185.25.220',
			'created_orig' => '2015-07-19 09:44:17', 'updated_orig' => '2015-07-19 09:44:17',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 98, 'givenName' => 'Jodie', 'familyName' => 'Rockliff', 'preferredName' => 'Jodie',
			'email' => 'berirock@optusnet.com.au', 'phone1' => '0438 128 038', 'phone2' => '07 5309 5790',
			'address1' => '47 King St', 'address2' => null,
			'locality' => 'Shelly Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Tim Beriman', 'emergencyPhone1' => '0413 435 160', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Site decoration, Stage Management, Ticketing, Traffic, Shop, Vollie Tent, Set up/bump out',
			'commentsInfo' => 'I have volunteered at Caloundra Music Festival. I love being part of community events. I am outgoing, hard working, reliable and honest. I work as a registered nurse.',
			'discovery' => 'Local advertising',
			'id_orig' => 246, 'key_orig' => '8l4b9a', 'ip' => '58.106.16.207',
			'created_orig' => '2015-07-19 17:06:41', 'updated_orig' => '2015-07-19 17:06:41',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 99, 'givenName' => 'Jackson', 'familyName' => 'Whitton', 'preferredName' => '',
			'email' => 'whittojnr@gmail.com', 'phone1' => '0421 777 512', 'phone2' => '07 5445 5799',
			'address1' => '189/52 University Way', 'address2' => null,
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Noela', 'emergencyPhone1' => '07 5445 5799', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'camp ground, cleaning, set up/ bump out, ticketing, traffic, shop',
			'commentsInfo' => null,
			'discovery' => 'gumtree add',
			'id_orig' => 248, 'key_orig' => 'zaeitz', 'ip' => '149.135.1.246',
			'created_orig' => '2015-07-20 09:17:53', 'updated_orig' => '2015-07-20 09:17:53',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 100, 'givenName' => 'Bianka', 'familyName' => 'Paunovic', 'preferredName' => 'B',
			'email' => 'planetbgirl@hotmail.com', 'phone1' => '0467 249 743', 'phone2' => '',
			'address1' => '1965 Stanley River Rd', 'address2' => null,
			'locality' => 'Booroobin', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Terri-Anne Goodreid', 'emergencyPhone1' => '0488 914 101', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Glenn Christies Art Team',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 249, 'key_orig' => 'g6v1kf', 'ip' => '1.128.96.136',
			'created_orig' => '2015-07-20 10:37:49', 'updated_orig' => '2015-07-20 10:37:49',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 101, 'givenName' => 'Skye Leong', 'familyName' => 'Leong', 'preferredName' => 'Skye',
			'email' => 'skye.ba.leong@gmail.com', 'phone1' => '0438 486 666', 'phone2' => '',
			'address1' => '7-19 Beechwood Rd', 'address2' => null,
			'locality' => 'Balmoral Ridge', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'June Leong', 'emergencyPhone1' => '0438 872 571', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'arts bamboo with Glenn',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 250, 'key_orig' => 'femny9', 'ip' => '101.162.51.19',
			'created_orig' => '2015-07-20 10:45:08', 'updated_orig' => '2015-07-20 10:45:08',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 102, 'givenName' => 'Kathleen', 'familyName' => 'McGovern', 'preferredName' => 'Sarah',
			'email' => 'sarah_ann_m@hotmail.com', 'phone1' => '0434 809 316', 'phone2' => '07 5445 6064',
			'address1' => '31 Rim Rd', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Jennifer Sargent', 'emergencyPhone1' => '0407 125 779', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Bars , Ticketing, Shop, Vollie Tent, Cleaning, Set Up',
			'commentsInfo' => 'Have a current clear Police Certificate (no court outcomes), Have a current Certificate in Providing First Aid and CPR, Have experience working in coffee shop & Cert III serving and making espresso coffee, Have experience preparing, making and serving food & food safety practices, Can speak basic Italian and Japanese, I love supporting community initiatives and getting involved. I believe I can represent the spirit of the community and festival and contribute in a positive way. Would love to her back:)',
			'discovery' => 'On the website, which I visited because I heard some good local bands would be playing.',
			'id_orig' => 251, 'key_orig' => 'rj2gjl', 'ip' => '114.78.53.192',
			'created_orig' => '2015-07-20 21:09:05', 'updated_orig' => '2015-07-20 21:09:05',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 103, 'givenName' => 'Leigh Robert', 'familyName' => 'Campbell', 'preferredName' => '',
			'email' => 'leigh.cam@hotmail.com', 'phone1' => '0413 755 850', 'phone2' => '',
			'address1' => '35 Parkyn Parade', 'address2' => null,
			'locality' => 'Mooloolaba', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Georgia Campbell', 'emergencyPhone1' => '0406 007 794', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Stage set up and sound checks',
			'commentsInfo' => 'some musical and working band experience , Retired General Practitioner , could assist first aid . Could do a blackboard gig',
			'discovery' => 'have attended MALENY music weekend twice before',
			'id_orig' => 252, 'key_orig' => 'px03zb', 'ip' => '1.178.14.186',
			'created_orig' => '2015-07-22 10:24:31', 'updated_orig' => '2015-07-22 10:24:31',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 104, 'givenName' => 'Janey', 'familyName' => 'Monaghan', 'preferredName' => 'Janey',
			'email' => 'janeyonearth@yahoo.com', 'phone1' => '0404 119 345', 'phone2' => '07 5429 6502',
			'address1' => 'PO Box 716', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Santosh Broom', 'emergencyPhone1' => '0415 103 882', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Set up site artistry with Glenn',
			'commentsInfo' => null,
			'discovery' => 'through Glenn and Bobbie',
			'id_orig' => 253, 'key_orig' => 'l4z26q', 'ip' => '118.208.106.166',
			'created_orig' => '2015-07-22 12:48:32', 'updated_orig' => '2015-07-22 12:48:32',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 105, 'givenName' => 'Colleen', 'familyName' => 'Verhaaren', 'preferredName' => 'Gumala',
			'email' => 'colleen66cv@gmail.com', 'phone1' => '0448 845 266', 'phone2' => '',
			'address1' => '25 Cedar Grove Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Linda Williams', 'emergencyPhone1' => '0404 012 898', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Worked in bar last two years',
			'commentsInfo' => 'Natty B. Said to write down helping glen n her this time. Art',
			'discovery' => 'People talking couple of years ago',
			'id_orig' => 263, 'key_orig' => 'rmsrv5', 'ip' => '58.108.175.248',
			'created_orig' => '2015-07-24 09:58:31', 'updated_orig' => '2015-07-24 09:58:31',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 106, 'givenName' => 'Brendan', 'familyName' => 'O\'Shea', 'preferredName' => '',
			'email' => 'brendan1968@gmail.com', 'phone1' => '0422 885 954', 'phone2' => '',
			'address1' => '19 Ash St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kerry Laizans', 'emergencyPhone1' => '0411 488 291', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Traffic, Ticketing, Shop. Anywhere really.',
			'commentsInfo' => 'I teach yoga and meditation and am good with computers. I\'m unavailable on Sunday from 9.30am to 12.30pm.',
			'discovery' => 'At the Festival launch at the Upfront Club from Noel Gardener who was onstage and wearing a silly hat.',
			'id_orig' => 264, 'key_orig' => '453z3j', 'ip' => '178.162.205.29',
			'created_orig' => '2015-07-24 12:21:45', 'updated_orig' => '2015-07-24 12:21:45',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 107, 'givenName' => 'Heather', 'familyName' => 'Nurser', 'preferredName' => '',
			'email' => 'purplefeather15@bigpond.com', 'phone1' => '0413 223 031', 'phone2' => '',
			'address1' => '2/25 Iluka Ave', 'address2' => null,
			'locality' => 'Buddina', 'state' => 'Qld', 'postcode' => '4575', 'country' => 'Australia',
			'emergencyContact' => 'Jessica North', 'emergencyPhone1' => '0420 722 028', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Site Decoration, Ticketing, Shop, Vollie Tent',
			'commentsInfo' => 'I have recently bought a campervan and would love to travel around going to music festivals but don\'t have much funds, so volunteering sounds great. A have a background in business administration in the Brisbane City Council and C.A.D.E.T. Training College. Also volunteered at Kawana Library and Buddina State School. Worked part-time at The Pot Place, Warana (unsupervised)., Love gardening, music, art and craft, and meeting new friends. I am reliable and trustworthy and a granny of a beautiful 2 y.o. girl.',
			'discovery' => 'GumTree',
			'id_orig' => 267, 'key_orig' => 'u1qai2', 'ip' => '101.163.95.94',
			'created_orig' => '2015-07-25 12:04:18', 'updated_orig' => '2015-07-25 12:04:18',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 108, 'givenName' => 'Allan', 'familyName' => 'Norman', 'preferredName' => 'Al',
			'email' => 'allan.norman@live.com.au', 'phone1' => '0407 626 246', 'phone2' => '',
			'address1' => 'Lot 308 Arborseven Rd', 'address2' => null,
			'locality' => 'Glenwood', 'state' => 'Qld', 'postcode' => '4570', 'country' => 'Australia',
			'emergencyContact' => 'Debra McKay', 'emergencyPhone1' => '0408 630 477', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'bars, bar security, ticketing, traffic or shop thanks....',
			'commentsInfo' => 'I am a retired carpenter, so any building work, I have a heavy vehicle drivers licence, plus a current open authority to drive a bus, and is also a working with children card, all police checks done.. have past experience working in and managing the upfront club in Maleny',
			'discovery' => 'people I know living in maleny',
			'id_orig' => 268, 'key_orig' => 'weg018', 'ip' => '1.121.98.212',
			'created_orig' => '2015-07-25 17:11:04', 'updated_orig' => '2015-07-25 17:11:04',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 109, 'givenName' => 'Sue', 'familyName' => 'Robson', 'preferredName' => '',
			'email' => 'suerobs43@gmail.com', 'phone1' => '0407 076 555', 'phone2' => '',
			'address1' => '411B', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0407 076 555', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Hello I have many skills that can help you over the festival. My availability is I work Friday 10 - 4 in Montville, therefore I can before or after on that day and I do have Saturday available to help., I enjoy the Bar yet I only have a NSW RSA. I can help with Set Up/Bump out, Site decoration, ticketing, Camp ground or what ever else you think I could help with? I did volunteer on the gate with tickets and traffic direction at the Maleny small Agricultural farmers festival last year.',
			'commentsInfo' => 'I love music and have enjoy community events like this. I moved here to Wootha 2 months ago after several years wanted to settle here, sometimes the Universe has the timing all worked out, that doesn\'t always match our own. Now I am here and wish to meet the community and take part in events like this. I have lived in a one street country town in NSW and loved it, quite the highlight of my life.',
			'discovery' => 'On your website and as I say above I want to learn about this more of the foundations of this beautiful town in which have moved into and help out with events where I can.',
			'id_orig' => 270, 'key_orig' => '9msoh7', 'ip' => '101.169.170.147',
			'created_orig' => '2015-07-25 18:44:38', 'updated_orig' => '2015-07-25 18:44:38',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 110, 'givenName' => 'Carsten Sundby', 'familyName' => 'Nielsen', 'preferredName' => 'Carsten',
			'email' => 'carsten@lifejoy.info', 'phone1' => '07 5315 5445', 'phone2' => '',
			'address1' => '114 Browns Rd', 'address2' => null,
			'locality' => 'Belli Park', 'state' => 'Qld', 'postcode' => '4652', 'country' => 'Australia',
			'emergencyContact' => 'Joan McVilly', 'emergencyPhone1' => '07 5447 0181', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Ticketing, Shop, Vollie tent',
			'commentsInfo' => 'A positive people person who enjoys the interaction. Supportive and welcoming nature.',
			'discovery' => 'Through friends.',
			'id_orig' => 271, 'key_orig' => 'z7pwat', 'ip' => '123.211.224.115',
			'created_orig' => '2015-07-26 01:06:57', 'updated_orig' => '2015-07-26 01:06:57',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 111, 'givenName' => 'Garry', 'familyName' => 'Johnson', 'preferredName' => '',
			'email' => 'garrywayne50@gmail.com', 'phone1' => '0467 272 516', 'phone2' => '07 5429 6492',
			'address1' => '19 Rosella Rd North', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sue Johnson', 'emergencyPhone1' => '0467 244 712', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Set up and bump out, bar, "gofer"',
			'commentsInfo' => null,
			'discovery' => 'Used to be on the committees',
			'id_orig' => 272, 'key_orig' => 'xa5g1f', 'ip' => '101.162.58.186',
			'created_orig' => '2015-07-26 11:01:16', 'updated_orig' => '2015-07-26 11:01:16',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 112, 'givenName' => 'Brenda', 'familyName' => 'Holligan', 'preferredName' => '',
			'email' => 'brendaholligan@yahoo.com.au', 'phone1' => '07 5494 4769', 'phone2' => '',
			'address1' => 'Lot 2 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Neil Commins', 'emergencyPhone1' => '0404 146 319', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'bars or shop or ticketing',
			'commentsInfo' => null,
			'discovery' => 'did it last year',
			'id_orig' => 273, 'key_orig' => '1d8lvr', 'ip' => '110.143.75.188',
			'created_orig' => '2015-07-26 12:23:04', 'updated_orig' => '2015-07-26 12:23:04',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 113, 'givenName' => 'Carmel', 'familyName' => 'Stephenson', 'preferredName' => '',
			'email' => 'carmelstrphenson@gmail.com0', 'phone1' => '0432 605 751', 'phone2' => '',
			'address1' => '99 Yelgun Rd', 'address2' => null,
			'locality' => 'Yelgun', 'state' => 'NSW', 'postcode' => '2483', 'country' => 'Australia',
			'emergencyContact' => 'Rosemary Mitchell', 'emergencyPhone1' => '07 5445 7472', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'oticketing and vollies tents',
			'commentsInfo' => 'I am a feldenkrais practitioneri',
			'discovery' => 'From being at the festivalw',
			'id_orig' => 275, 'key_orig' => 'urdo7e', 'ip' => '1.129.96.130',
			'created_orig' => '2015-07-26 17:33:35', 'updated_orig' => '2015-07-26 17:33:35',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 114, 'givenName' => 'Royden', 'familyName' => 'Fagan', 'preferredName' => '',
			'email' => 'roydenfagan@gmail.com', 'phone1' => '0413 166 198', 'phone2' => '07 3299 4418',
			'address1' => '33 Minoa St', 'address2' => null,
			'locality' => 'Woodridge', 'state' => 'Qld', 'postcode' => '4114', 'country' => 'Australia',
			'emergencyContact' => 'Deanne Minniecon', 'emergencyPhone1' => '0423 072 836', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Traffic & camp ground',
			'commentsInfo' => null,
			'discovery' => 'Facebook',
			'id_orig' => 276, 'key_orig' => 'lamueo', 'ip' => '58.173.242.63',
			'created_orig' => '2015-07-26 17:53:00', 'updated_orig' => '2015-07-26 17:53:00',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 115, 'givenName' => 'Heidi', 'familyName' => 'Lawrence', 'preferredName' => '',
			'email' => 'heidi@eclecticdreams.com.ai', 'phone1' => '0408 740 089', 'phone2' => '',
			'address1' => '14 Graham Dr', 'address2' => null,
			'locality' => 'Landsborough', 'state' => 'Qld', 'postcode' => '4550', 'country' => 'Australia',
			'emergencyContact' => 'Het Warrell', 'emergencyPhone1' => '07 5493 7901', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Mc, Stage management,',
			'commentsInfo' => 'I won\'t let you down.. & I\'m a people person..',
			'discovery' => 'Facebook.. A friend shared you needed more vollies',
			'id_orig' => 278, 'key_orig' => 'p7krrf', 'ip' => '138.130.238.239',
			'created_orig' => '2015-07-26 20:45:00', 'updated_orig' => '2015-07-26 20:45:00',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 116, 'givenName' => 'Lynette', 'familyName' => 'Schofield', 'preferredName' => 'Leah',
			'email' => 'lschofield007@gmail.com', 'phone1' => '0429 680 656', 'phone2' => '',
			'address1' => '130 Havava Rd West', 'address2' => null,
			'locality' => 'Peregian Springs', 'state' => 'Qld', 'postcode' => '4573', 'country' => 'Australia',
			'emergencyContact' => 'Aaron Thomas', 'emergencyPhone1' => '0411 136 925', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'unsure',
			'commentsInfo' => 'i need to have a job where I dint need to be on my feet for 4hrs so maybe ticketing. Your advice is needed.',
			'discovery' => 'FB',
			'id_orig' => 279, 'key_orig' => '3swkgs', 'ip' => '1.128.96.79',
			'created_orig' => '2015-07-26 22:37:48', 'updated_orig' => '2015-07-26 22:37:48',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 117, 'givenName' => 'Nerissa', 'familyName' => 'Dowling', 'preferredName' => 'Neri/ Niz',
			'email' => 'eeco@bikerider.com', 'phone1' => '0420 887 886', 'phone2' => '',
			'address1' => '46B Water St', 'address2' => null,
			'locality' => 'Caringbah South', 'state' => 'NSW', 'postcode' => '2229', 'country' => 'Australia',
			'emergencyContact' => 'Nerissa Dowling', 'emergencyPhone1' => '07 9523 7587', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Hi I would love to help set up or down. I need to sit down fairly often to look after my feet so driving or admin, greeting are good for me. I enjoy them., , I do like physical activity and can do some too- just as long as I can take a break when needed. (even just sitting down on the ground) I am a hard worker but I also have fair skin so have to stay out of the sun as much as I can- as I am not into wearing "sun screen" - I just cover up or go to shady areas instead.',
			'commentsInfo' => 'I am a very natural person,authentic, easy going, humorous',
			'discovery' => 'word of mouth',
			'id_orig' => 282, 'key_orig' => '2s2c35', 'ip' => '110.23.36.62',
			'created_orig' => '2015-07-27 04:10:02', 'updated_orig' => '2015-07-27 04:10:02',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 339, 'givenName' => 'Corrina', 'familyName' => 'Cole', 'preferredName' => 'Corrina',
			'email' => 'cole_foureur@hotmail.com', 'phone1' => '0476 245 023', 'phone2' => '',
			'address1' => '1538 Maleny Kenilworth Rd', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jacki Cole', 'emergencyPhone1' => '07 5496 5086', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'I would be happy to help with any area of the festival except the bar as I don\'t have an RSA.',
			'commentsInfo' => null,
			'discovery' => 'Live locally',
			'id_orig' => 283, 'key_orig' => '9uk46q', 'ip' => '101.169.213.59',
			'created_orig' => '2015-07-27 09:37:24', 'updated_orig' => '2015-07-27 09:37:24',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 118, 'givenName' => 'Deanne', 'familyName' => 'Minniecon', 'preferredName' => 'Deanne',
			'email' => 'deanneminniecon@hotmail.com', 'phone1' => '0423 072 836', 'phone2' => '07 3299 4418',
			'address1' => '33 Minoa St', 'address2' => null,
			'locality' => 'Woodridge', 'state' => 'Qld', 'postcode' => '4114', 'country' => 'Australia',
			'emergencyContact' => 'Royden Fagan', 'emergencyPhone1' => '0413 166 198', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Gates area, which includes a variety of roles including reception of festival goers, artists and volunteers, ticket sales, welcome and soft security at gates, and directing traffic and monitoring campgrounds.',
			'availability' => null,
			'commentsInfo' => 'If successful preference is to work with Royden Fagan who is also volunteering at the event.',
			'discovery' => 'Word of mouth',
			'id_orig' => 285, 'key_orig' => 'd1w7x3', 'ip' => '165.86.81.71',
			'created_orig' => '2015-07-27 14:45:10', 'updated_orig' => '2015-07-27 14:45:10',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 119, 'givenName' => 'Hannah', 'familyName' => 'Condie', 'preferredName' => 'Hannah',
			'email' => 'hannahcondie@gmail.com', 'phone1' => '0475 523 301', 'phone2' => '',
			'address1' => '43C/23 Scholars Dr', 'address2' => null,
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Anne Pickering', 'emergencyPhone1' => '0400 181 107', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Gates, Shop, Cleaning.',
			'availability' => 'Saturday',
			'commentsInfo' => null,
			'discovery' => 'Sharrie Fair',
			'id_orig' => 286, 'key_orig' => 'bshg2j', 'ip' => '125.253.44.44',
			'created_orig' => '2015-07-27 19:23:07', 'updated_orig' => '2015-07-27 19:23:07',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 120, 'givenName' => 'Jenni', 'familyName' => 'Harmony', 'preferredName' => '',
			'email' => 'jenniharmony@hotmail.com', 'phone1' => '0435 128 421', 'phone2' => '07 5435 2357',
			'address1' => '11 Tamarind St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ernie Marcum', 'emergencyPhone1' => '0432 914 469', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Vollie Tent or Gates (ticketing)',
			'availability' => 'Saturday and Sunday (mornings best) - can\'t do Friday as I work that day',
			'commentsInfo' => null,
			'discovery' => 'Free Ads for Maleny fb page',
			'id_orig' => 288, 'key_orig' => 'mbun23', 'ip' => '1.120.102.208',
			'created_orig' => '2015-07-28 14:15:21', 'updated_orig' => '2015-07-28 14:15:21',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 121, 'givenName' => 'Jinny', 'familyName' => 'Roach', 'preferredName' => '',
			'email' => 'jinnyzkec@outlook.com', 'phone1' => '0481 122 173', 'phone2' => '',
			'address1' => '6A Myrtle St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kami', 'emergencyPhone1' => '0423 796 845', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'gates, vollie tent',
			'availability' => 'anytime',
			'commentsInfo' => 'bad back but willing to help where I can, Artist',
			'discovery' => 'face book',
			'id_orig' => 291, 'key_orig' => 'x5ssbn', 'ip' => '101.169.127.251',
			'created_orig' => '2015-07-29 09:16:56', 'updated_orig' => '2015-07-29 09:16:56',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 122, 'givenName' => 'Damion', 'familyName' => 'Star', 'preferredName' => 'Starman',
			'email' => 'damionwhite40@gmail.com', 'phone1' => '', 'phone2' => '',
			'address1' => '44 Tamarind St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'MC',
			'availability' => 'All days except Sunday will have my sun with Me!',
			'commentsInfo' => 'I am fun to work with!',
			'discovery' => 'Gaby!',
			'id_orig' => 297, 'key_orig' => 'xze6js', 'ip' => '165.228.12.246',
			'created_orig' => '2015-07-30 10:25:16', 'updated_orig' => '2015-07-30 10:25:16',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 123, 'givenName' => 'Ode', 'familyName' => 'Claxton-Smith', 'preferredName' => '',
			'email' => 'ode.c.smith@gmail.com', 'phone1' => '0467 753 705', 'phone2' => '',
			'address1' => 'Unit 2/1334 Landsborough-Maleny Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kevin Smith', 'emergencyPhone1' => '0429 621 362', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set Up/Site Deco, Bar, MC, Stage management',
			'availability' => 'everyday',
			'commentsInfo' => 'Im 22. This is my first time volunteering at a festival. But I am excited to learn new things.',
			'discovery' => 'Gaby',
			'id_orig' => 298, 'key_orig' => 'pxe8o3', 'ip' => '165.228.12.246',
			'created_orig' => '2015-07-30 10:32:04', 'updated_orig' => '2015-07-30 10:32:04',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 123, 'givenName' => 'Ode', 'familyName' => 'Claxton-Smith', 'preferredName' => '',
			'email' => 'ode.c.smith@gmail.com', 'phone1' => '0467 753 705', 'phone2' => '',
			'address1' => 'Unit 2/1334 Landsborough-Maleny Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kevin Smith', 'emergencyPhone1' => '0429 621 362', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set Up/Site Deco, Bar, MC, Stage management',
			'availability' => 'everyday',
			'commentsInfo' => 'Im 22. This is my first time volunteering at a festival. But I am excited to learn new things.',
			'discovery' => 'Gaby',
			'id_orig' => 299, 'key_orig' => 'bhwjgg', 'ip' => '165.228.12.246',
			'created_orig' => '2015-07-30 10:32:19', 'updated_orig' => '2015-07-30 10:32:19',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 124, 'givenName' => 'Otto', 'familyName' => 'Lechner', 'preferredName' => '',
			'email' => 'ottolechner52@gmail.com', 'phone1' => '0412 273 211', 'phone2' => '07 5478 6818',
			'address1' => '18 Old Mill Lane', 'address2' => null,
			'locality' => 'Flaxton', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Phillipa Robertson', 'emergencyPhone1' => '0422 411 778', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Stage Management, Gates',
			'availability' => null,
			'commentsInfo' => null,
			'discovery' => 'On your website',
			'id_orig' => 300, 'key_orig' => 'on6oiu', 'ip' => '123.211.209.196',
			'created_orig' => '2015-07-30 14:28:57', 'updated_orig' => '2015-07-30 14:28:57',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 125, 'givenName' => 'Sonja', 'familyName' => 'Andrey', 'preferredName' => 'Sonja',
			'email' => 'annicha09@gmail.com', 'phone1' => '0433 804 389', 'phone2' => '',
			'address1' => 'Lot 25 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Rob Morell', 'emergencyPhone1' => '07 5435 0142', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Gates and or or Stage management',
			'availability' => 'Prefer not too late , get tired',
			'commentsInfo' => null,
			'discovery' => 'Done stage management last year thanks to Tom :-)',
			'id_orig' => 301, 'key_orig' => 'wok9kp', 'ip' => '1.128.96.39',
			'created_orig' => '2015-07-30 19:03:33', 'updated_orig' => '2015-07-30 19:03:33',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 126, 'givenName' => 'Tim', 'familyName' => 'Clark', 'preferredName' => '',
			'email' => 'atccontractors@hotmail.com', 'phone1' => '0412 854 222', 'phone2' => '',
			'address1' => '651 Bald Knob Rd', 'address2' => null,
			'locality' => 'Bald Knob', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sharon Ward', 'emergencyPhone1' => '0411 856 877', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Working with Joan in Bunya on Saturday',
			'availability' => null,
			'commentsInfo' => null,
			'discovery' => 'I heard about volunteering from friends',
			'id_orig' => 303, 'key_orig' => '1xelm4', 'ip' => '124.187.80.9',
			'created_orig' => '2015-07-30 20:32:36', 'updated_orig' => '2015-07-30 20:32:36',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 127, 'givenName' => 'Sharon', 'familyName' => 'Ward', 'preferredName' => '',
			'email' => 'shazward@hotmail.com.au', 'phone1' => '0411 856 877', 'phone2' => '07 5429 6787',
			'address1' => '34 Water Gum Cr', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tim Clark', 'emergencyPhone1' => '0412 854 222', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Working with Joan in Bunya on Saturday',
			'availability' => null,
			'commentsInfo' => null,
			'discovery' => 'Facebook',
			'id_orig' => 304, 'key_orig' => 'wpo6v9', 'ip' => '124.187.80.9',
			'created_orig' => '2015-07-30 20:36:13', 'updated_orig' => '2015-07-30 20:36:13',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 128, 'givenName' => 'Sheila', 'familyName' => 'Duncan', 'preferredName' => '',
			'email' => 'sheiladuncan2010@hotmail.com', 'phone1' => '0453 453 358', 'phone2' => '07 5435 8978',
			'address1' => '120 Schultz Rd', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Heather Cameron', 'emergencyPhone1' => '07 5435 8978', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Security',
			'availability' => 'All weekend',
			'commentsInfo' => null,
			'discovery' => 'Friend',
			'id_orig' => 309, 'key_orig' => 'q0jcr6', 'ip' => '138.130.240.71',
			'created_orig' => '2015-07-30 22:40:53', 'updated_orig' => '2015-07-30 22:40:53',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 343, 'givenName' => 'Leona', 'familyName' => 'Kirby', 'preferredName' => 'Leona',
			'email' => 'leogra@westnet.com.au', 'phone1' => '0407 983 929', 'phone2' => '',
			'address1' => 'PO Box 509', 'address2' => null,
			'locality' => 'Noosaville', 'state' => 'Qld', 'postcode' => '4566', 'country' => 'Australia',
			'emergencyContact' => 'Ash Garvey', 'emergencyPhone1' => '0401 650 226', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Leona - bar, gates, shop, Tony - Stage management, gates, shop, bump out, MC, , We would like to work the same shifts :-)',
			'availability' => 'Thursday and Friday',
			'commentsInfo' => null,
			'discovery' => 'Newsletter',
			'id_orig' => 313, 'key_orig' => 'rfa3x7', 'ip' => '58.7.246.157',
			'created_orig' => '2015-07-31 09:01:22', 'updated_orig' => '2015-07-31 09:01:22',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 129, 'givenName' => 'Ian', 'familyName' => 'Hitchcock', 'preferredName' => 'Ian',
			'email' => 'iangordon2323@yahoo.com.au', 'phone1' => '0435 872 411', 'phone2' => '',
			'address1' => '40 Lamerough Pde', 'address2' => null,
			'locality' => 'Pelican Waters', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Baden Hitchcock', 'emergencyPhone1' => '07 5492 4880', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Could ne available for Set up.',
			'availability' => 'Unemployed at moment so available when needed.',
			'commentsInfo' => 'While out of the industry many years I was a stage lighting tech/ roadie/16 yrs. experience all over Australia. Experience in most aspects of events.',
			'discovery' => 'Artist friend',
			'id_orig' => 316, 'key_orig' => 'q31e6o', 'ip' => '1.120.168.121',
			'created_orig' => '2015-07-31 12:15:11', 'updated_orig' => '2015-07-31 12:15:11',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 130, 'givenName' => 'Lea', 'familyName' => 'Bracker', 'preferredName' => 'Lea',
			'email' => 'lushcottage@gmail.com', 'phone1' => '0488 679 880', 'phone2' => '07 5499 9405',
			'address1' => '2/24 Teak St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sue Johnson', 'emergencyPhone1' => '0467 244 712', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Gate - ticketing',
			'availability' => 'Saturday after 10am, Sunday after 9am',
			'commentsInfo' => null,
			'discovery' => 'Previous treasurer!',
			'id_orig' => 317, 'key_orig' => 'l9df41', 'ip' => '124.170.104.236',
			'created_orig' => '2015-07-31 20:41:04', 'updated_orig' => '2015-07-31 20:41:04',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 131, 'givenName' => 'Richard', 'familyName' => 'Mochelle', 'preferredName' => '',
			'email' => 'mochelle@acenet.net.au', 'phone1' => '07 5435 0378', 'phone2' => '',
			'address1' => 'Lot 7 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sandra Ferguson', 'emergencyPhone1' => '07 5435 0378', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'stage management',
			'availability' => 'Sunday am',
			'commentsInfo' => 'have been stage manager for the last 2 years',
			'discovery' => 'Tom',
			'id_orig' => 318, 'key_orig' => '825fdn', 'ip' => '125.168.115.155',
			'created_orig' => '2015-08-01 09:57:19', 'updated_orig' => '2015-08-01 09:57:19',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 132, 'givenName' => 'Bruce', 'familyName' => 'King', 'preferredName' => '',
			'email' => 'bdk.gardens@gmail.com', 'phone1' => '0418 700 946', 'phone2' => '07 3285 6116',
			'address1' => '31 Rue Montaigne', 'address2' => null,
			'locality' => 'Petrie', 'state' => 'Qld', 'postcode' => '4502', 'country' => 'Australia',
			'emergencyContact' => 'Pauline King', 'emergencyPhone1' => '0418 700 986', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set Up/Site Deco - adequate notice required., Cleaning, Gates, Shop',
			'availability' => 'Not readily available for any pre and post festival shifts unless 1 weeks notice is given.',
			'commentsInfo' => null,
			'discovery' => 'Have been to festival before.',
			'id_orig' => 319, 'key_orig' => '6hvabh', 'ip' => '124.170.108.51',
			'created_orig' => '2015-08-01 10:27:18', 'updated_orig' => '2015-08-01 10:27:18',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 133, 'givenName' => 'Ben', 'familyName' => 'Lyne', 'preferredName' => '',
			'email' => 'gaymliddington@gmail.com', 'phone1' => '0478 065 063', 'phone2' => '',
			'address1' => '1965 Stanley River Rd', 'address2' => null,
			'locality' => 'Booroobin', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Set-up & pack down',
			'availability' => 'Pretty much available anytime. Prefer day time. Also, can do Thursday & Monday if needed.',
			'commentsInfo' => null,
			'discovery' => 'Ref: Gay Liddington',
			'id_orig' => 320, 'key_orig' => '5njrxe', 'ip' => '120.22.94.244',
			'created_orig' => '2015-08-01 11:34:21', 'updated_orig' => '2015-08-01 11:34:21',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 134, 'givenName' => 'Annette', 'familyName' => 'Richardson', 'preferredName' => 'Annie',
			'email' => 'annetterichardson27@gmail.com', 'phone1' => '0409 125 779', 'phone2' => '',
			'address1' => '62 Burgum Rd', 'address2' => null,
			'locality' => 'North Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Gabby Jackson', 'emergencyPhone1' => '0417 337 234', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'I am a registered nurse with emergency skills as well as advanced life support training, I have retail experience and customer service skills, Sewer and general dogs body',
			'availability' => 'From Thursday PM until Tuesday',
			'commentsInfo' => 'Already bought ticket',
			'discovery' => 'Gay Liddington',
			'id_orig' => 321, 'key_orig' => 'snsodx', 'ip' => '60.231.1.82',
			'created_orig' => '2015-08-01 11:43:25', 'updated_orig' => '2015-08-01 11:43:25',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 135, 'givenName' => 'David', 'familyName' => 'Crowden', 'preferredName' => '',
			'email' => 'david.crowden.music@gmail.com', 'phone1' => '0457 311 388', 'phone2' => '07 5429 6653',
			'address1' => '498 Mountain View Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Andrew Crowden', 'emergencyPhone1' => '0429 801 465', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Anything really but: Set Up/Site Deco, MC, Stage Management, Bump Out, also sound tech, performing and community workshops.',
			'availability' => 'All weekend.',
			'commentsInfo' => 'I\'m a musician, producer, song writer, masters in performance of italian baroque trumpet and early opera singing. I\'d love to get involved as a performer, my guitarist at the moment is Owen Van Larkins http://www.vanlarkins.com/ my website is http://www.davidcrowdenmusic.com/ and my producer is Pix Van Mason (archie roach, marcia hynes etc.). It would be great to get a 45-60 minute set somewhere or other if there is space, we will hopefully be doing an album launch around the time of the festival., In any case I\'d love to be involved as a volunteer and would be very happy to get involved as much as required.',
			'discovery' => 'Kerry and Brendan stayed at our house recently and suggested that volunteering might be a great way to get involved in the community. I\'ve been living in London (and europe) for the past year, and Sydney for 5 years before that. I\'m a professional performer and music teacher and at the moment I\'m focusing on doing a masters of teaching through UNE and recording a studio album at Pix Records http://pixrecords.com/ who also mentioned the festival. I may be sitting in on sessions with a few artists on your list including cloud street over the next month. Pretty keen to be involved. I also have experience in sound tech, recording and running community workshops.',
			'id_orig' => 324, 'key_orig' => '6rn6jg', 'ip' => '123.211.255.132',
			'created_orig' => '2015-08-01 15:39:46', 'updated_orig' => '2015-08-01 15:39:46',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 40, 'givenName' => 'Kari', 'familyName' => '-', 'preferredName' => 'Kari',
			'email' => 'kari@karicelebrations.com', 'phone1' => '0437 714 965', 'phone2' => '07 5445 0622',
			'address1' => '39 Jubilee Dr', 'address2' => null,
			'locality' => 'Palmwoods', 'state' => 'Qld', 'postcode' => '4555', 'country' => 'Australia',
			'emergencyContact' => 'Jessi Dunbar', 'emergencyPhone1' => '0402 374 846', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'MC',
			'availability' => 'Already booked in by John Wright',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 325, 'key_orig' => '2lqub5', 'ip' => '58.7.214.246',
			'created_orig' => '2015-08-02 14:29:26', 'updated_orig' => '2015-08-02 14:29:26',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 136, 'givenName' => 'Tom S Pablo', 'familyName' => 'Neira Iturrieta', 'preferredName' => 'Tom S',
			'email' => 'tneira@gmail.com', 'phone1' => '0452 259 280', 'phone2' => '',
			'address1' => '251 Bridge Creek Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kamala Alister', 'emergencyPhone1' => '0400 222 887', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set up-Site Deco',
			'availability' => '26th August to 28th',
			'commentsInfo' => null,
			'discovery' => 'On the internet',
			'id_orig' => 326, 'key_orig' => 'uzplav', 'ip' => '14.202.128.202',
			'created_orig' => '2015-08-02 14:31:26', 'updated_orig' => '2015-08-02 14:31:26',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 137, 'givenName' => 'Stuart', 'familyName' => 'Duncan', 'preferredName' => 'Stu',
			'email' => 'stuart452@gmail.com', 'phone1' => '0434 406 591', 'phone2' => '07 5435 2556',
			'address1' => '9 Mclean Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'David Duncan', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'all areas !',
			'availability' => 'any time',
			'commentsInfo' => null,
			'discovery' => 'other volunteer festival goers',
			'id_orig' => 327, 'key_orig' => 'ehvs9e', 'ip' => '1.120.99.17',
			'created_orig' => '2015-08-02 17:03:43', 'updated_orig' => '2015-08-02 17:03:43',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 138, 'givenName' => 'Elle', 'familyName' => 'Hughes', 'preferredName' => '',
			'email' => 'elleamani@gmail.com', 'phone1' => '0425 151 788', 'phone2' => '',
			'address1' => '43 Stanley River Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Tom has allocated me stage manager',
			'availability' => 'Tom has allocated me 2 shifts as stage manager',
			'commentsInfo' => null,
			'discovery' => 'Previous volunteer',
			'id_orig' => 329, 'key_orig' => 'bqn0hp', 'ip' => '59.101.93.136',
			'created_orig' => '2015-08-03 06:45:38', 'updated_orig' => '2015-08-03 06:45:38',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 139, 'givenName' => 'Suzanne', 'familyName' => 'Mustard', 'preferredName' => 'Suzanne',
			'email' => 'suzannemm01@gmail.com', 'phone1' => '0414 388 499', 'phone2' => '07 5435 2048',
			'address1' => '21 Mary Cairncross Ave', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jeff Mustard', 'emergencyPhone1' => '0405 182 796', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'shop, collie tent and gates',
			'availability' => 'sat and sunday',
			'commentsInfo' => null,
			'discovery' => 'LETS',
			'id_orig' => 331, 'key_orig' => '3efqnk', 'ip' => '58.165.92.233',
			'created_orig' => '2015-08-03 11:11:52', 'updated_orig' => '2015-08-03 11:11:52',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 140, 'givenName' => 'Steven', 'familyName' => 'Novak', 'preferredName' => '',
			'email' => 'snovak@raq.org.au', 'phone1' => '0431 925 771', 'phone2' => '',
			'address1' => '3 Serenity Ct', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Eileen Gilbert', 'emergencyPhone1' => '0413 223 090', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'See below',
			'availability' => null,
			'commentsInfo' => 'Tom Nealson has requested that I stage manage on Saturday 29th August, Bunya Stage: 9pm - 12.00midnight',
			'discovery' => null,
			'id_orig' => 335, 'key_orig' => '7ptqh9', 'ip' => '180.214.92.158',
			'created_orig' => '2015-08-04 15:35:13', 'updated_orig' => '2015-08-04 15:35:13',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 141, 'givenName' => 'Paul', 'familyName' => 'Coughlan', 'preferredName' => '',
			'email' => 'coughlanpa@yahoo.com.au', 'phone1' => '0438 111 525', 'phone2' => '07 5400 1643',
			'address1' => '7/52 School Rd', 'address2' => null,
			'locality' => 'Maroochydore', 'state' => 'Qld', 'postcode' => '4558', 'country' => 'Australia',
			'emergencyContact' => 'Joan Coughlan', 'emergencyPhone1' => '07 5494 7498', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'I\'d like to work in the Treasury again with chris Gwin., The Boss was Barb......., We had agood team last year.',
			'availability' => 'I was thinking Friday night and Saturday would be good. chris and I are a reliable team. So same shifts please. (ie. the two of us on the same shifts.) Many thanks Barb- it will be good to see you again.',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 345, 'key_orig' => 'hqdzm7', 'ip' => '60.240.234.36',
			'created_orig' => '2015-08-08 20:02:00', 'updated_orig' => '2015-08-08 20:02:00',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 142, 'givenName' => 'Lachlan', 'familyName' => 'Smith', 'preferredName' => 'Lachi',
			'email' => 'lachlan.smith184@hotmail.com', 'phone1' => '0413 221 798', 'phone2' => '',
			'address1' => '32 Tallebudgera Dr', 'address2' => null,
			'locality' => 'Palm Beach', 'state' => 'Qld', 'postcode' => '4221', 'country' => 'Australia',
			'emergencyContact' => 'Belinda Hodgkins', 'emergencyPhone1' => '0448 855 204', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Gates. Shop. Stage Management. Vollie Tent',
			'availability' => 'Saturday afternoon. Sunday all day.',
			'commentsInfo' => null,
			'discovery' => 'From a friend who has been to the festival previous years.',
			'id_orig' => 346, 'key_orig' => 'g5pz24', 'ip' => '49.197.128.112',
			'created_orig' => '2015-08-09 08:57:17', 'updated_orig' => '2015-08-09 08:57:17',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 143, 'givenName' => 'Vanessa', 'familyName' => 'Parle', 'preferredName' => 'Vanessa',
			'email' => 'vparl1@yahoo.com.au', 'phone1' => '0434 997 575', 'phone2' => '',
			'address1' => 'PO Box 617', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Amanda Parle', 'emergencyPhone1' => '07 4630 3843', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'MC, Gates, Shop, Vollie Tent',
			'availability' => 'Anytime, but able to do early morning shift (know it may not suit others).',
			'commentsInfo' => 'I have been on the Rego Desk for the Maleny Celtic Winter School for 7 years. I am great with "Meet & Greet" & very reliable with money. For references: John Thompson, Nicole Murray, Steve Cook.',
			'discovery' => 'I have attended since inception and know Noel Gardiner & Pete Illingsworth.',
			'id_orig' => 348, 'key_orig' => 'ko5uma', 'ip' => '101.169.85.59',
			'created_orig' => '2015-08-09 16:21:23', 'updated_orig' => '2015-08-09 16:21:23',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 143, 'givenName' => 'Vanessa', 'familyName' => 'Parle', 'preferredName' => 'Vanessa',
			'email' => 'vparl1@yahoo.com.au', 'phone1' => '0434 997 575', 'phone2' => '',
			'address1' => 'PO Box 617', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Amanda Parle', 'emergencyPhone1' => '07 4630 3843', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Anywhere',
			'availability' => 'Anytime',
			'commentsInfo' => 'Forgot to mention, I have volunteered at Woodford Folk Festival many times, including in Bars (prior to RSA requirements) & setting up/pulling down the Media Centre (references from Pat Miller & Ros Horrocks).',
			'discovery' => 'Noel Gardiner and Pete Illingsworth.',
			'id_orig' => 349, 'key_orig' => 'p1wfv3', 'ip' => '101.169.85.59',
			'created_orig' => '2015-08-09 16:46:02', 'updated_orig' => '2015-08-09 16:46:02',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 144, 'givenName' => 'Ernest', 'familyName' => 'Marcum', 'preferredName' => 'Ernie',
			'email' => 'ecmod123@gmail.com', 'phone1' => '0432 914 469', 'phone2' => '07 5435 2357',
			'address1' => '11 Tamarind St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jenni Harmony', 'emergencyPhone1' => '0435 128 421', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Stage management, shop, vollie tent, MC',
			'availability' => 'My partner (Jenni Harmony) is working Sat 1-5, Sun 2-6, so one or both of those times would be my first choice, otherwise open to discussion.',
			'commentsInfo' => 'I am unable to do heavy lifting or lifting-twisting-bending-reaching activities, especially over my head, due to a pinched nerve in neck and shoulder injuries. I have event coordination and management experience, can give directions, take money, set up mikes and audio equipment and other tasks of that sort. I am also a photographer and videographer and have my own portable audio recording equipment.',
			'discovery' => 'From all the usual sources I guess :)',
			'id_orig' => 353, 'key_orig' => 'mnzaon', 'ip' => '101.162.43.5',
			'created_orig' => '2015-08-10 10:27:19', 'updated_orig' => '2015-08-10 10:27:19',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 145, 'givenName' => 'Jemma', 'familyName' => 'Laurie', 'preferredName' => '',
			'email' => 'jem_laur@hotmail.com', 'phone1' => '0423 138 837', 'phone2' => '',
			'address1' => '21 Ballybritt St', 'address2' => null,
			'locality' => 'The Gap', 'state' => 'Qld', 'postcode' => '4061', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Gates, Shop, Vollie tent',
			'availability' => null,
			'commentsInfo' => null,
			'discovery' => 'Flyer in Landsborough',
			'id_orig' => 354, 'key_orig' => 'o97xeh', 'ip' => '203.219.199.118',
			'created_orig' => '2015-08-10 14:15:26', 'updated_orig' => '2015-08-10 14:15:26',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 146, 'givenName' => 'Emma', 'familyName' => 'Sheppard', 'preferredName' => 'Emma',
			'email' => 'emmasheppard1984@yahoo.co.uk', 'phone1' => '0435 840 991', 'phone2' => '',
			'address1' => '99 Weller Rd', 'address2' => null,
			'locality' => 'Tarragindi', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => 'Matthew Sheppard', 'emergencyPhone1' => '0478 592 543', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set up, shop, volunteer tent',
			'availability' => 'All',
			'commentsInfo' => null,
			'discovery' => 'Friend Kari referred',
			'id_orig' => 355, 'key_orig' => 'fu06wj', 'ip' => '58.7.253.49',
			'created_orig' => '2015-08-10 16:19:18', 'updated_orig' => '2015-08-10 16:19:18',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 147, 'givenName' => 'Morgan', 'familyName' => 'McHugh', 'preferredName' => '',
			'email' => 'morgan.mchugh@hotmail.com', 'phone1' => '0423 180 522', 'phone2' => '',
			'address1' => '108 Schultz Rd', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kim Brooks', 'emergencyPhone1' => '0414 623 734', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Cleaning, shop, gates',
			'availability' => 'Saturday 29th',
			'commentsInfo' => null,
			'discovery' => 'Gumtree',
			'id_orig' => 356, 'key_orig' => 'mjvijk', 'ip' => '49.197.39.113',
			'created_orig' => '2015-08-11 16:26:22', 'updated_orig' => '2015-08-11 16:26:22',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 148, 'givenName' => 'Jan', 'familyName' => 'Duffield', 'preferredName' => '',
			'email' => 'jannyduff@gmail.com', 'phone1' => '0427 834 649', 'phone2' => '07 5429 6570',
			'address1' => '68A Palm St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jon Woodlands', 'emergencyPhone1' => '07 5429 6570', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Decorating the Hall & Bumping Out',
			'availability' => 'from Wed 26th Aug to Friday 28th Aug',
			'commentsInfo' => 'I\'ve done this job for the last 2 years',
			'discovery' => null,
			'id_orig' => 357, 'key_orig' => '878bf2', 'ip' => '58.6.205.203',
			'created_orig' => '2015-08-11 16:30:49', 'updated_orig' => '2015-08-11 16:30:49',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 148, 'givenName' => 'Jan', 'familyName' => 'Duffield', 'preferredName' => '',
			'email' => 'jannyduff@gmail.com', 'phone1' => '0427 834 649', 'phone2' => '07 5429 6570',
			'address1' => '68A Palm St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jon Woodlands', 'emergencyPhone1' => '07 5429 6570', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Decorating the Hall & Bumping Out',
			'availability' => 'from Wed 26th Aug to Friday 28th Aug',
			'commentsInfo' => 'I\'ve done this job for the last 2 years',
			'discovery' => null,
			'id_orig' => 358, 'key_orig' => 'v3kjdi', 'ip' => '58.6.205.203',
			'created_orig' => '2015-08-11 16:32:09', 'updated_orig' => '2015-08-11 16:32:09',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 149, 'givenName' => 'Keira', 'familyName' => 'Peace', 'preferredName' => '',
			'email' => 'keirapeace1@bigpond.com', 'phone1' => '0459 175 111', 'phone2' => '07 5494 4518',
			'address1' => 'Lot xx Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Setup/ Site Deco/Bump Out',
			'availability' => 'Wed 26th Aug - Fri 28th Aug , Monday 31st Aug',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 359, 'key_orig' => 'w88cvm', 'ip' => '58.6.205.203',
			'created_orig' => '2015-08-11 16:42:48', 'updated_orig' => '2015-08-11 16:42:48',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 150, 'givenName' => 'Jade', 'familyName' => 'Nicole', 'preferredName' => 'Jade',
			'email' => 'jadeconboy@hotmail.com', 'phone1' => '0450 979 939', 'phone2' => '',
			'address1' => '', 'address2' => null,
			'locality' => 'Kenilworth', 'state' => 'Qld', 'postcode' => '4574', 'country' => 'Australia',
			'emergencyContact' => 'Shaun', 'emergencyPhone1' => '0450 979 939', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bar, gates',
			'availability' => 'The 3 days the festival is on',
			'commentsInfo' => 'I have had a 3 years experience in bar attending. I also have experience in gates (ticketing) from volunteering at the wallaby creek festival. Would prefer to get a phone call rather then email as my Internet is limited.',
			'discovery' => 'Gumtree',
			'id_orig' => 360, 'key_orig' => 'dc1d3y', 'ip' => '49.197.129.63',
			'created_orig' => '2015-08-11 18:41:55', 'updated_orig' => '2015-08-11 18:41:55',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 151, 'givenName' => 'Jennifer', 'familyName' => 'Smith', 'preferredName' => 'Jenny',
			'email' => 'jennyangel89@hotmail.com', 'phone1' => '0414 976 319', 'phone2' => '',
			'address1' => '26 Peninsular Dr', 'address2' => null,
			'locality' => 'Surfers Paradise', 'state' => 'Qld', 'postcode' => '4217', 'country' => 'Australia',
			'emergencyContact' => 'Daniel Giles', 'emergencyPhone1' => '0415 529 413', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bar work, Gates, Shop, Vollie Tent',
			'availability' => 'All days over the festival',
			'commentsInfo' => 'It\'s my birthday on the 30th August!, Also, whilst being in Australia (on a working holiday visa) I volunteered at Vivid Sydney in June.',
			'discovery' => 'Found on iBackpacker app',
			'id_orig' => 362, 'key_orig' => 'btg95i', 'ip' => '119.63.218.129',
			'created_orig' => '2015-08-12 14:45:42', 'updated_orig' => '2015-08-12 14:45:42',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 152, 'givenName' => 'Danielle', 'familyName' => 'Thomson', 'preferredName' => 'Danielle',
			'email' => 'staceyfamily@hotmail.com', 'phone1' => '0452 389 424', 'phone2' => '',
			'address1' => '8 Chantilly Cr', 'address2' => null,
			'locality' => 'Beerwah', 'state' => 'Qld', 'postcode' => '4519', 'country' => 'Australia',
			'emergencyContact' => 'Tony Reynolds', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Gates & camping, bar , shop, cleaning . These are in order of preference :-)',
			'availability' => 'Friday afternoon after 4pm - Sunday afternoon late',
			'commentsInfo' => 'I have volunteered at Woodford festivals and Woodford small meets',
			'discovery' => 'Woodford volunteers favorite book page.',
			'id_orig' => 363, 'key_orig' => '2rzl5f', 'ip' => '49.182.44.138',
			'created_orig' => '2015-08-12 15:21:01', 'updated_orig' => '2015-08-12 15:21:01',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 153, 'givenName' => 'Po Me', 'familyName' => 'Kwong', 'preferredName' => 'Po Mei',
			'email' => 'pomei2888@gmail.com', 'phone1' => '07 5435 0288', 'phone2' => '',
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Silvia Chan', 'emergencyPhone1' => '0408 781 304', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Set Up, Shop, Vollie Tent, Gates, Prefer from Wed after 3:30pm and sorry, not available for Bump Out',
			'availability' => 'Weds, Thurs n Fridays after 3:30pm, NOT available: 10am till 3pm, , ps. times might change due casual work circumstances',
			'commentsInfo' => 'allergic to propolis (bee thingy)',
			'discovery' => 'gum tree and friends',
			'id_orig' => 365, 'key_orig' => 'p9vabz', 'ip' => '58.165.27.140',
			'created_orig' => '2015-08-13 00:34:02', 'updated_orig' => '2015-08-13 00:34:02',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 154, 'givenName' => 'Alison', 'familyName' => 'MacLean', 'preferredName' => 'Ali',
			'email' => 'ali.maclean@hotmail.com', 'phone1' => '0429 988 100', 'phone2' => '',
			'address1' => '3 Lark Circuit', 'address2' => null,
			'locality' => 'Mountain Creek', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Sam Maclean', 'emergencyPhone1' => '07 4654 8067', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bar, gates',
			'availability' => 'not available to work on friday and saturday from 8pm onwards (working)',
			'commentsInfo' => null,
			'discovery' => 'poster',
			'id_orig' => 368, 'key_orig' => 'hqb5ls', 'ip' => '203.29.104.15',
			'created_orig' => '2015-08-13 11:03:11', 'updated_orig' => '2015-08-13 11:03:11',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 155, 'givenName' => 'Georgia', 'familyName' => 'Sykes', 'preferredName' => 'Georgia',
			'email' => 'georgia_sykes@hotmail.com', 'phone1' => '0439 986 960', 'phone2' => '',
			'address1' => '3 Naroo Ct', 'address2' => null,
			'locality' => 'Mooloolaba', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Kerry Lade', 'emergencyPhone1' => '0488 636 311', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Bar & Gate',
			'availability' => 'Friday and Sunday',
			'commentsInfo' => 'Friendly and I love festivals!',
			'discovery' => 'Friend',
			'id_orig' => 369, 'key_orig' => 'h8tf65', 'ip' => '1.128.97.55',
			'created_orig' => '2015-08-13 11:28:17', 'updated_orig' => '2015-08-13 11:28:17',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 156, 'givenName' => 'Claudia', 'familyName' => 'Oberholzer', 'preferredName' => 'Claudia',
			'email' => 'claudia.oberholzer@yahoo.com.au', 'phone1' => '0448 847 290', 'phone2' => '',
			'address1' => '7 Juan St', 'address2' => null,
			'locality' => 'Alexandra Headland', 'state' => 'Qld', 'postcode' => '4572', 'country' => 'Australia',
			'emergencyContact' => 'Lucas Neilsen', 'emergencyPhone1' => '0428 158 609', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Bar/bar security , Stage management , Gates , Vollie, Shop',
			'availability' => 'I am available for the whole duration of the festival. Whenever I am needed I\'ll be available',
			'commentsInfo' => 'I am studying creative industries at university and working at festivals are a great opportunity for me to get involved with the creative industries ( festivals)',
			'discovery' => 'My friend posted a link on Facebook.',
			'id_orig' => 370, 'key_orig' => 'i988uu', 'ip' => '101.169.170.151',
			'created_orig' => '2015-08-13 11:47:58', 'updated_orig' => '2015-08-13 11:47:58',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 157, 'givenName' => 'Levi', 'familyName' => 'Needham', 'preferredName' => 'Levi/Levius/ Pedro',
			'email' => 'l_n022@student.usc.edu.au', 'phone1' => '0409 619 333', 'phone2' => '',
			'address1' => '87 Creekside Rd', 'address2' => null,
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Madonna Bryant', 'emergencyPhone1' => '0402 564 162', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Bar work , Customer service , Security, Ticket stands',
			'availability' => 'All times Friday to Sunday bar just two hours from 10am to 12 sunday',
			'commentsInfo' => 'I have my rsa and have worked in bars and currently in customer service',
			'discovery' => 'Through a friend',
			'id_orig' => 372, 'key_orig' => 'bgkczp', 'ip' => '101.169.170.157',
			'created_orig' => '2015-08-13 15:54:17', 'updated_orig' => '2015-08-13 15:54:17',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 158, 'givenName' => 'Daniel', 'familyName' => 'Giles', 'preferredName' => 'Dan',
			'email' => 'om3gad@hotmail.com', 'phone1' => '0415 529 413', 'phone2' => '',
			'address1' => '26 Peninsular Dr', 'address2' => null,
			'locality' => 'Surfers Paradise', 'state' => 'Qld', 'postcode' => '4217', 'country' => 'Australia',
			'emergencyContact' => 'Jenny Smith', 'emergencyPhone1' => '0414 976 319', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Cleaning/Bins',
			'availability' => 'All times',
			'commentsInfo' => 'I have previously volunteered at Vivid Sydney 2015, and have previous experience working a festival bar at Mostly Jazz Festival in Birmingham, UK.',
			'discovery' => 'My partner, Jenny Smith, is already volunteering at the festival.',
			'id_orig' => 376, 'key_orig' => 'wrwfpl', 'ip' => '119.63.218.129',
			'created_orig' => '2015-08-13 23:12:11', 'updated_orig' => '2015-08-13 23:12:11',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 159, 'givenName' => 'Barbara', 'familyName' => 'Dancey', 'preferredName' => 'Barb',
			'email' => 'barbie.dee@hotmail.com.au', 'phone1' => '0437 766 659', 'phone2' => '',
			'address1' => '34 Water Gum Cr', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tamara Tilling', 'emergencyPhone1' => '0428 821 575', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'set up / site deco / bump out',
			'availability' => 'Available from M0n 24th Aug onwards',
			'commentsInfo' => 'I\'m a first-time volunteer, I\'m an artist, I\'d like to get involved in helping with community events , Creative, I enjoy being part of a team',
			'discovery' => 'Family members are volunteering - Tamara Tilling Sharon Ward and Tim Clarke - sounds like fun, hope I\'m not too late',
			'id_orig' => 377, 'key_orig' => '5aium', 'ip' => '123.211.37.97',
			'created_orig' => '2015-08-14 11:53:52', 'updated_orig' => '2015-08-14 11:53:52',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 160, 'givenName' => 'Dianne', 'familyName' => 'Collier', 'preferredName' => 'Di',
			'email' => 'dicollier@hotmail.com', 'phone1' => '07 5494 4552', 'phone2' => '',
			'address1' => '430 Policeman Spur Rd', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Zahra Chaudhry', 'emergencyPhone1' => '07 5494 4552', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Vollie tent,, Shop, Gates',
			'availability' => 'Friday afternoon all day Saturday',
			'commentsInfo' => 'Prepared tp work where needed',
			'discovery' => 'Friends, networks, website, worked for upfront t club last year',
			'id_orig' => 378, 'key_orig' => '9jk0ck', 'ip' => '210.10.130.9',
			'created_orig' => '2015-08-14 15:19:51', 'updated_orig' => '2015-08-14 15:19:51',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 161, 'givenName' => 'Soula', 'familyName' => 'Giannitis', 'preferredName' => '',
			'email' => 'soula.giannitis@yahoo.com', 'phone1' => '0416 578 771', 'phone2' => '',
			'address1' => '6 Pacey St', 'address2' => null,
			'locality' => 'Eumundi', 'state' => 'Qld', 'postcode' => '4562', 'country' => 'Australia',
			'emergencyContact' => 'Guenara Meril', 'emergencyPhone1' => '0481 088 853', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Mc',
			'availability' => 'Sat, sun',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 383, 'key_orig' => 'pet6m6', 'ip' => '1.178.136.125',
			'created_orig' => '2015-08-16 08:05:50', 'updated_orig' => '2015-08-16 08:05:50',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 162, 'givenName' => 'Ben', 'familyName' => 'Sheppard', 'preferredName' => '',
			'email' => 'bushy.bensheppard@gmail.com', 'phone1' => '0447 154 580', 'phone2' => '',
			'address1' => '40 Victoria St', 'address2' => null,
			'locality' => 'Kelvin Grove', 'state' => 'Qld', 'postcode' => '4059', 'country' => 'Australia',
			'emergencyContact' => 'Derek & Jo Sheppard', 'emergencyPhone1' => '07 5441 3275', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'I\'d like to help out with anything during festival or prefer help with pack down on the monday. I am quite adaptable to what I can do. I can do a Yoga class for Volunteers too :-)',
			'availability' => 'Friday through to Tuesday of the festival. I am quite open to any time, just give me a call to discuss.',
			'commentsInfo' => 'I have worked with Noel Gardner a fair bit and I have volunteered at the Woodford Folk Festival many many times. Including working with Paul Lawler on the Fire Event. Have done fencing, Tree Huggers etc at Woodford.',
			'discovery' => 'I have always known about it. I have been to the Maleny Music festival twice before and love it!',
			'id_orig' => 384, 'key_orig' => 'gguzt7', 'ip' => '101.169.170.152',
			'created_orig' => '2015-08-16 09:25:09', 'updated_orig' => '2015-08-16 09:25:09',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 163, 'givenName' => 'June', 'familyName' => 'Doyle', 'preferredName' => '',
			'email' => 'fruityjune2@gmail.com', 'phone1' => '0422 617 365', 'phone2' => '',
			'address1' => 'PO Box 664', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Gay Liddington', 'emergencyPhone1' => '0424 379 338', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Happy to fit in where needed. Gay asked if I would be available to assist with clean-up on Monday, 31 August. Happy to commit the day to assist on Monday if required.',
			'availability' => 'Anytime during the day.',
			'commentsInfo' => null,
			'discovery' => 'Gay Liddington',
			'id_orig' => 386, 'key_orig' => 'wworlp', 'ip' => '124.149.31.51',
			'created_orig' => '2015-08-16 21:29:52', 'updated_orig' => '2015-08-16 21:29:52',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 164, 'givenName' => 'Holly', 'familyName' => 'Langfield', 'preferredName' => 'Holly',
			'email' => 'hlangfield1@gmail.com', 'phone1' => '0427 112 174', 'phone2' => '',
			'address1' => '111/15 Esplanade', 'address2' => null,
			'locality' => 'Bulcock Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Tosh Broom', 'emergencyPhone1' => '07 5429 6502', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set up/Site Deco, Gates, Shop, VollieTent',
			'availability' => 'I am available anyday, including the week pre-festival. I am not available after 5pm',
			'commentsInfo' => 'Don\'t like to lift more than 15 kg., , I\'ve recently moved to Caloundra from Melbourne, looking forward to meeting other volunteers.',
			'discovery' => 'From my son (Santosh Broom), who has lived in Maleny for many years and is a regular volunteer at music festivals in the region.',
			'id_orig' => 389, 'key_orig' => 'iu64wb', 'ip' => '1.128.97.55',
			'created_orig' => '2015-08-17 12:10:17', 'updated_orig' => '2015-08-17 12:10:17',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 165, 'givenName' => 'Christine', 'familyName' => 'Golab', 'preferredName' => '',
			'email' => 'christine55g@optusnet.com.au', 'phone1' => '0429 872 268', 'phone2' => '',
			'address1' => '21 Coolana St', 'address2' => null,
			'locality' => 'Lota', 'state' => 'Qld', 'postcode' => '4179', 'country' => 'Australia',
			'emergencyContact' => 'Dave Cleary', 'emergencyPhone1' => '0408 654 807', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Bar, Shop, Gates or Vollie tent,',
			'availability' => 'I will be required to play for the Morris dancers on Saturday during the day. Other than that, I can be available as required from Friday afternoon to Sunday mid-afternoon.',
			'commentsInfo' => 'I am attending the festival as a muso for Ragged Band Morris dancers',
			'discovery' => 'Been to the festival before',
			'id_orig' => 391, 'key_orig' => 'dwj469', 'ip' => '122.108.204.57',
			'created_orig' => '2015-08-17 14:04:22', 'updated_orig' => '2015-08-17 14:04:22',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 341, 'givenName' => 'Mark', 'familyName' => 'Craig', 'preferredName' => 'Mark',
			'email' => 'landmcraig@y7mail.com', 'phone1' => '07 5499 9481', 'phone2' => '',
			'address1' => 'PO Box 669', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => 'Lynda Craig', 'emergencyPhone1' => '07 5499 9481', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'set up/site deco/ Bump out',
			'availability' => '26/8/15 any time. , Friday morning any time., Sunday after 5pm, Monday any time',
			'commentsInfo' => 'Would like to have the experiance and be a help to a great event for Maleny.',
			'discovery' => 'On the Internet',
			'id_orig' => 393, 'key_orig' => '36r2d5', 'ip' => '58.165.98.172',
			'created_orig' => '2015-08-17 15:15:33', 'updated_orig' => '2015-08-17 15:15:33',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 166, 'givenName' => 'Liana', 'familyName' => 'Vermast', 'preferredName' => 'Liana',
			'email' => 'liana.vermast.95@live.com.au', 'phone1' => '0403 436 068', 'phone2' => '',
			'address1' => '27 Koala Ct', 'address2' => null,
			'locality' => 'Little Mountain', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Tanya Vermast', 'emergencyPhone1' => '0412 866 401', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set up, Cleaning, Gates, Shop, Vollie Tent, Bump Out',
			'availability' => 'Not available Thursday 27th from 12pm and Friday 28th until 4pm',
			'commentsInfo' => null,
			'discovery' => 'Gumtree',
			'id_orig' => 396, 'key_orig' => 'uzjbhh', 'ip' => '49.182.15.172',
			'created_orig' => '2015-08-17 21:17:28', 'updated_orig' => '2015-08-17 21:17:28',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 348, 'givenName' => 'Rebecca', 'familyName' => 'Love', 'preferredName' => 'Beccs',
			'email' => 'zuf@hotmail.co.uk', 'phone1' => '0405 387 093', 'phone2' => '',
			'address1' => '26 Peninsular Dr', 'address2' => null,
			'locality' => 'Surfers Paradise', 'state' => 'Qld', 'postcode' => '4217', 'country' => 'Australia',
			'emergencyContact' => 'Jack Lewis', 'emergencyPhone1' => '0432 114 513', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bar/bar security, Cleaning, Gates, Shop, Vollie Tent',
			'availability' => 'All days Friday, Saturday, Sunday',
			'commentsInfo' => 'I have been working for accommodation in a hostel in the Gold Coast, cleaning rooms, making beds, greeting guests. I also worked in France for a season running a holiday chalet. I also have 3 years bar work experience from the UK and Australia, and have a current RSA.',
			'discovery' => 'From Jennifer Smith/Dan Giles',
			'id_orig' => 397, 'key_orig' => 'xw15ps', 'ip' => '119.63.218.129',
			'created_orig' => '2015-08-18 15:46:26', 'updated_orig' => '2015-08-18 15:46:26',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 167, 'givenName' => 'Leeza', 'familyName' => 'Stratford', 'preferredName' => 'Leeza',
			'email' => 'leeza@peacockpaper.com.au', 'phone1' => '0408 065 110', 'phone2' => '',
			'address1' => '464 Maleny-Kenilworth Rd', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Paul Stratford', 'emergencyPhone1' => '0417 643 988', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'art design and art projects-, Wishing Tree project -Glenns team',
			'availability' => 'Friday Saturday Sunday',
			'commentsInfo' => 'Wishing Tree project , Discussed with Glenn',
			'discovery' => 'Live Locally',
			'id_orig' => 400, 'key_orig' => 'w12tr1', 'ip' => '123.211.125.46',
			'created_orig' => '2015-08-18 15:51:36', 'updated_orig' => '2015-08-18 15:51:36',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 337, 'givenName' => 'Karin', 'familyName' => 'Wagner', 'preferredName' => '',
			'email' => 'zarra15@hotmail.com', 'phone1' => '0410 316 940', 'phone2' => '',
			'address1' => '6 Jimna Ct', 'address2' => null,
			'locality' => 'Deception Bay', 'state' => 'Qld', 'postcode' => '4508', 'country' => 'Australia',
			'emergencyContact' => 'Dirk Wagner', 'emergencyPhone1' => '0412 088 326', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Rainer Handyman work, setting up & dismantling or Maintenance work or security!, Karin Gates, Ticketing, Parking, campground or Shop or etc!, We both have valid Blue Cards!',
			'availability' => 'From Wednesday to Monday or Tuesday! We would like to come & stay in our 17\' caravan! , We both would be available the whole time!',
			'commentsInfo' => null,
			'discovery' => 'Sunshine Coast Hinterland Paper!',
			'id_orig' => 405, 'key_orig' => 'fqmxaw', 'ip' => '49.197.150.146',
			'created_orig' => '2015-08-19 11:35:06', 'updated_orig' => '2015-08-19 11:35:06',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 338, 'givenName' => 'Rainer', 'familyName' => 'Wagner', 'preferredName' => '',
			'email' => 'zarra15@hotmail.com', 'phone1' => '0410 316 940', 'phone2' => '',
			'address1' => '6 Jimna Ct', 'address2' => null,
			'locality' => 'Deception Bay', 'state' => 'Qld', 'postcode' => '4508', 'country' => 'Australia',
			'emergencyContact' => 'Dirk Wagner', 'emergencyPhone1' => '0412 088 326', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Rainer Handyman work, setting up & dismantling or Maintenance work or security!, Karin Gates, Ticketing, Parking, campground or Shop or etc!, We both have valid Blue Cards!',
			'availability' => 'From Wednesday to Monday or Tuesday! We would like to come & stay in our 17\' caravan! , We both would be available the whole time!',
			'commentsInfo' => null,
			'discovery' => 'Sunshine Coast Hinterland Paper!',
			'id_orig' => 405, 'key_orig' => 'fqmxaw', 'ip' => '49.197.150.146',
			'created_orig' => '2015-08-19 11:35:06', 'updated_orig' => '2015-08-19 11:35:06',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 168, 'givenName' => 'Christine', 'familyName' => 'Riordan', 'preferredName' => 'Chris',
			'email' => 'chris_riordan@hotmail.com', 'phone1' => '0421 173 868', 'phone2' => '07 4124 2432',
			'address1' => '43 Long St', 'address2' => null,
			'locality' => 'Point Vernon', 'state' => 'Qld', 'postcode' => '4655', 'country' => 'Australia',
			'emergencyContact' => 'Joan Chenery', 'emergencyPhone1' => '0438 401 828', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Helping Joan with bar setup',
			'availability' => 'From Thursday afternoon',
			'commentsInfo' => 'I have been a QFF festival volunteer from the early Maleny days and at Woodford every year',
			'discovery' => 'Post on friend\'s Facebook page',
			'id_orig' => 406, 'key_orig' => 'm0sxr9', 'ip' => '220.244.236.1',
			'created_orig' => '2015-08-19 17:05:28', 'updated_orig' => '2015-08-19 17:05:28',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 169, 'givenName' => 'Tammy', 'familyName' => 'Walker', 'preferredName' => 'Tam',
			'email' => 'tammynyree@hotmail.com', 'phone1' => '0447 353 109', 'phone2' => '',
			'address1' => '5/12 Rakumba Pl', 'address2' => null,
			'locality' => 'Mountain Creek', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Vicki Mitchell', 'emergencyPhone1' => '0405 156 846', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'I have a security licence, RSA, I am happy to help out in any area other then cleaning please. If you can give me more info on times you require and areas still vacant, I happy to compromise my availability., , cheers tam',
			'availability' => 'fri sat',
			'commentsInfo' => null,
			'discovery' => 'facebook',
			'id_orig' => 409, 'key_orig' => 'q1b69f', 'ip' => '124.187.91.178',
			'created_orig' => '2015-08-20 11:20:16', 'updated_orig' => '2015-08-20 11:20:16',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 170, 'givenName' => 'Tyrone', 'familyName' => 'Evans', 'preferredName' => 'Ty',
			'email' => 'contact.ntn@gmail.com', 'phone1' => '0420 308 897', 'phone2' => '',
			'address1' => '5 Hovea Ct', 'address2' => null,
			'locality' => 'Shailer Park', 'state' => 'Qld', 'postcode' => '4128', 'country' => 'Australia',
			'emergencyContact' => 'Gordon', 'emergencyPhone1' => '0428 787 079', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'all of the above',
			'availability' => 'FULLY AVAIL > I have transport and can be there as soon as necessary :)',
			'commentsInfo' => 'I\'ve volunteered at many festivals over the past few years and really enjoy being envolved with the behind the scenes and getting to know the wonderful people who keep these amazing events flowing., Eclipse fest 2012, Earth Freq 2013/14, Island Vibes 2013/14, Wallaby Creek 2014, and a few smaller more rural festivals, I\'ve worked in areas such as, waste management, volly tent, carpark, bars, coffee, set up and pack down, Visuals, decor and campground waste awareness.',
			'discovery' => 'through a friend who is involved., Mimi',
			'id_orig' => 410, 'key_orig' => 'rgtor1', 'ip' => '58.6.211.87',
			'created_orig' => '2015-08-21 12:03:03', 'updated_orig' => '2015-08-21 12:03:03',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 171, 'givenName' => 'Jordan', 'familyName' => 'Austin', 'preferredName' => '',
			'email' => 'jordan.austin27@gmail.com', 'phone1' => '0457 269 350', 'phone2' => '',
			'address1' => '26 Gympie Rd', 'address2' => null,
			'locality' => 'Tin Can Bay', 'state' => 'Qld', 'postcode' => '4580', 'country' => 'Australia',
			'emergencyContact' => 'Cinda Austin', 'emergencyPhone1' => '0428 583 727', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Shop, Gates, Stage management',
			'availability' => 'Available all times, would prefer to work during the event dealing with people. Minimal stage management experience. Available for Set up.',
			'commentsInfo' => 'Interested in camping as I have a van.',
			'discovery' => 'Word of mouth',
			'id_orig' => 411, 'key_orig' => '23rycf', 'ip' => '165.228.12.246',
			'created_orig' => '2015-08-21 12:30:58', 'updated_orig' => '2015-08-21 12:30:58',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 172, 'givenName' => 'Callie', 'familyName' => 'Fitzgibbon', 'preferredName' => 'Victoria',
			'email' => 'fun@playlearnplay.com.au', 'phone1' => '0455 304 313', 'phone2' => '07 5494 3220',
			'address1' => 'PO Box 824', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0455 304 313', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'I will have my 5 year old son volunteering with me, so not bar area please',
			'availability' => 'Flexible',
			'commentsInfo' => 'I will have my son with me for volunteer shifts',
			'discovery' => 'Facebook',
			'id_orig' => 412, 'key_orig' => 'ptk51u', 'ip' => '203.206.186.153',
			'created_orig' => '2015-08-21 14:29:45', 'updated_orig' => '2015-08-21 14:29:45',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 173, 'givenName' => 'Graham', 'familyName' => 'Nott', 'preferredName' => '',
			'email' => 'gnott47@gmail.com', 'phone1' => '0419 020 868', 'phone2' => '07 5494 2343',
			'address1' => '314 Burgum Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Set Up/Site Deco, Bar/Bar Security, Shop, Bump Out',
			'availability' => 'Available Friday morning to Sunday afternoon.',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 413, 'key_orig' => 'ykrko6', 'ip' => '118.208.163.15',
			'created_orig' => '2015-08-21 15:00:54', 'updated_orig' => '2015-08-21 15:00:54',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 174, 'givenName' => 'Carlos', 'familyName' => 'Sanchez', 'preferredName' => '',
			'email' => 'chevera1950@hotmail.com', 'phone1' => '0405 563 749', 'phone2' => '07 5445 9417',
			'address1' => '189 Lower Landershoot Rd', 'address2' => null,
			'locality' => 'Landers Shoot', 'state' => 'Qld', 'postcode' => '4555', 'country' => 'Australia',
			'emergencyContact' => 'Paco Sanchez', 'emergencyPhone1' => '0455 500 223', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'I am a qualified designer .i am also qualifier joiner . Now retired . Have some set design experience. My former business was called Carlos Sanchez Design., Hence my services might be best utilized in your set up and design of venue.',
			'availability' => 'I am available at anytime during the event',
			'commentsInfo' => null,
			'discovery' => 'Locals',
			'id_orig' => 414, 'key_orig' => '3dxo79', 'ip' => '120.151.54.154',
			'created_orig' => '2015-08-21 17:07:04', 'updated_orig' => '2015-08-21 17:07:04',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 175, 'givenName' => 'David', 'familyName' => 'Handley', 'preferredName' => 'Dave',
			'email' => 'callingdave@hotmail.com', 'phone1' => '0417 130 556', 'phone2' => '',
			'address1' => '73 Mountain View Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Diane', 'emergencyPhone1' => '0438 538 389', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'setup/site deco. Bar security. stage management. gates. shop. vollie tent. Bump out Sunday',
			'availability' => 'all times Fri - Sun',
			'commentsInfo' => 'Mature age Volunteer - ex technology teacher.',
			'discovery' => 'website, friends in Maleny',
			'id_orig' => 418, 'key_orig' => '2uigb0', 'ip' => '1.128.96.210',
			'created_orig' => '2015-08-22 12:36:19', 'updated_orig' => '2015-08-22 12:36:19',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 176, 'givenName' => 'Diane', 'familyName' => 'Somers-Cook', 'preferredName' => 'Diane',
			'email' => 'diane.somers-cook@bigpond.com', 'phone1' => '0438 538 389', 'phone2' => '',
			'address1' => 'C/- 13 Cedar Grove Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'David Handley', 'emergencyPhone1' => '0417 130 556', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => null,
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 419, 'key_orig' => 'a8sytc', 'ip' => '123.211.41.251',
			'created_orig' => '2015-08-22 12:41:06', 'updated_orig' => '2015-08-22 12:41:06',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 177, 'givenName' => 'Ninindi', 'familyName' => 'Johnstone', 'preferredName' => '',
			'email' => 'nemiliajohnstone@gmail.com', 'phone1' => '0499 983 902', 'phone2' => '',
			'address1' => '23 Coral St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Nalinya', 'emergencyPhone1' => '0490 455 020', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Art Setup, Vollie tent',
			'availability' => 'Thurs/Fri, Saturday afternoon',
			'commentsInfo' => null,
			'discovery' => 'I live here.',
			'id_orig' => 421, 'key_orig' => 'i4cypa', 'ip' => '120.151.81.108',
			'created_orig' => '2015-08-22 14:41:21', 'updated_orig' => '2015-08-22 14:41:21',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 178, 'givenName' => 'Nicole', 'familyName' => 'Bachler', 'preferredName' => '',
			'email' => 'nicolebachler@live.com.au', 'phone1' => '0422 506 824', 'phone2' => '',
			'address1' => '1734 David Low Way', 'address2' => null,
			'locality' => 'Coolum Beach', 'state' => 'Qld', 'postcode' => '4573', 'country' => 'Australia',
			'emergencyContact' => 'Ray Bachler', 'emergencyPhone1' => '0418 782 0300?', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Happy to be anywhere!',
			'availability' => 'Saturday night - Sunday night',
			'commentsInfo' => null,
			'discovery' => 'Gumtree',
			'id_orig' => 429, 'key_orig' => 'niaquj', 'ip' => '203.45.26.31',
			'created_orig' => '2015-08-24 08:46:52', 'updated_orig' => '2015-08-24 08:46:52',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 179, 'givenName' => 'Lyndelle', 'familyName' => 'Lark', 'preferredName' => '',
			'email' => 'lark19@live.com.au', 'phone1' => '0425 393 014', 'phone2' => '',
			'address1' => '1/252 Alexandra Pde', 'address2' => null,
			'locality' => 'Alexandra Headland', 'state' => 'Qld', 'postcode' => '4572', 'country' => 'Australia',
			'emergencyContact' => 'Michael Recchia', 'emergencyPhone1' => '0410 258 802', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Working on gates taking tickets Bar work',
			'availability' => null,
			'commentsInfo' => null,
			'discovery' => 'Work in with you',
			'id_orig' => 432, 'key_orig' => 'r43sdd', 'ip' => '101.169.85.85',
			'created_orig' => '2015-08-25 03:22:14', 'updated_orig' => '2015-08-25 03:22:14',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 180, 'givenName' => 'Angus', 'familyName' => 'Rotherham', 'preferredName' => '',
			'email' => 'angus.rotherham@live.com', 'phone1' => '0434 876 885', 'phone2' => '',
			'address1' => '6 Carapook Cr', 'address2' => null,
			'locality' => 'Tallebudgera', 'state' => 'Qld', 'postcode' => '4228', 'country' => 'Australia',
			'emergencyContact' => 'Dave Rotherham', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Anywhere, but I\'m especially handy with set-up',
			'availability' => 'Not available Saturday evening during Gaia Love Orchestra gig! Otherwise I\'m very flexible.',
			'commentsInfo' => 'I\'m a friend of Andy and Laurel',
			'discovery' => 'Andy and Laurel',
			'id_orig' => 434, 'key_orig' => '72am2', 'ip' => '124.177.133.52',
			'created_orig' => '2015-08-25 08:57:20', 'updated_orig' => '2015-08-25 08:57:20',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 181, 'givenName' => 'Nikko', 'familyName' => 'Raffin', 'preferredName' => 'Nikko',
			'email' => 'nikkoraffin@hotmail.com', 'phone1' => '0434 004 069', 'phone2' => '',
			'address1' => '12A Myrtle St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'i would love to work behind the bar on Friday eve if possible , I am available to assist with any of the dcreative activities (i.e. Dayle\'s prayerflag making or anything of the like)',
			'availability' => 'i rang Gay earlier - i haven\'t known if i was available this weekend until yesterday (family not well & in syd), i am busy at Lift all day Sunday., , I may be available friday afternoon.',
			'commentsInfo' => 'I can not do heavy lifting',
			'discovery' => '. . volunteered last year , , gratitude & blessings for these opportunities that making being at the festival for some of us a realistic option',
			'id_orig' => 438, 'key_orig' => 'fm6l0q', 'ip' => '120.151.81.108',
			'created_orig' => '2015-08-25 11:48:21', 'updated_orig' => '2015-08-25 11:48:21',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 182, 'givenName' => 'Maxine', 'familyName' => 'Smith', 'preferredName' => '',
			'email' => 'maxinesmith61@hotmail.com', 'phone1' => '0402 202 897', 'phone2' => '',
			'address1' => '200 Petrie Creek Rd', 'address2' => null,
			'locality' => 'Rosemount', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Hannah Fabian', 'emergencyPhone1' => '0423 389 972', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'With Cowboy',
			'availability' => 'When Cowboy needs me',
			'commentsInfo' => 'I have a senior first aid certificate, I am a Bowen therapist/instructor',
			'discovery' => 'Cowboy',
			'id_orig' => 439, 'key_orig' => '4z5riw', 'ip' => '49.197.142.156',
			'created_orig' => '2015-08-25 13:06:43', 'updated_orig' => '2015-08-25 13:06:43',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 183, 'givenName' => 'Kevin', 'familyName' => 'Timney', 'preferredName' => '',
			'email' => 'poweritdown@hotmail.com', 'phone1' => '0458 274 128', 'phone2' => '',
			'address1' => '200 Petrie Creek Rd', 'address2' => null,
			'locality' => 'Rosemount', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Maxine Smith', 'emergencyPhone1' => '0402 202 897', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'With cowboy',
			'availability' => 'When Cowboy needs me',
			'commentsInfo' => 'I can fix anything, I am an engineer',
			'discovery' => 'Cowboy',
			'id_orig' => 440, 'key_orig' => '2rhqi5', 'ip' => '49.197.142.156',
			'created_orig' => '2015-08-25 13:12:12', 'updated_orig' => '2015-08-25 13:12:12',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 184, 'givenName' => 'Peta', 'familyName' => 'Goold', 'preferredName' => 'Peta',
			'email' => 'peta.goold@me.com', 'phone1' => '0474 788 540', 'phone2' => '',
			'address1' => '24 Cedar Grove Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Liz Goold', 'emergencyPhone1' => '07 5426 0100', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Set up and set down... , Art creation and design?',
			'availability' => 'Before and after festival...',
			'commentsInfo' => 'Friendly and enthusiastic, love community spirit, keen to be involved again : )',
			'discovery' => 'Volunteered last year',
			'id_orig' => 444, 'key_orig' => 'f0trb7', 'ip' => '139.130.27.227',
			'created_orig' => '2015-08-25 22:46:22', 'updated_orig' => '2015-08-25 22:46:22',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 184, 'givenName' => 'Peta', 'familyName' => 'Goold', 'preferredName' => 'Peta',
			'email' => 'peta.goold@me.com', 'phone1' => '0474 788 540', 'phone2' => '',
			'address1' => '24 Cedar Grove Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Liz Goold', 'emergencyPhone1' => '07 5426 0100', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Set up and set down... , Art creation and design?',
			'availability' => 'Before and after festival...',
			'commentsInfo' => 'Friendly and enthusiastic, love community spirit, keen to be involved again : )',
			'discovery' => 'Volunteered last year',
			'id_orig' => 446, 'key_orig' => 'ce0r0e', 'ip' => '139.130.27.227',
			'created_orig' => '2015-08-25 22:47:25', 'updated_orig' => '2015-08-25 22:47:25',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 185, 'givenName' => 'Antara', 'familyName' => 'May', 'preferredName' => '',
			'email' => 'aquatic.antara@gmail.com', 'phone1' => '0499 731 666', 'phone2' => '07 5313 8333',
			'address1' => '390 Scotts Rd', 'address2' => null,
			'locality' => 'Booroobin', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Josh May', 'emergencyPhone1' => '0438 988 871', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Working with Glenn in Site Deco',
			'availability' => 'Thursday & Friday',
			'commentsInfo' => 'Please note the mobile phone number above is my daughters as I have recently lost my mobile phone. She doesn\'t have reception at home, so the best way to contact is on the home phone or message me via facebook messenger.',
			'discovery' => 'Asked by Glenn to vollie again',
			'id_orig' => 449, 'key_orig' => 'qd20sv', 'ip' => '116.251.26.9',
			'created_orig' => '2015-08-26 22:12:27', 'updated_orig' => '2015-08-26 22:12:27',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 186, 'givenName' => 'Matthew', 'familyName' => 'Gillis', 'preferredName' => 'Matt',
			'email' => 'matdie@hotmail.com', 'phone1' => '0475 795 939', 'phone2' => '',
			'address1' => '5 Adriano Ct', 'address2' => null,
			'locality' => 'Palmview', 'state' => 'Qld', 'postcode' => '4553', 'country' => 'Australia',
			'emergencyContact' => 'Fiona Croft', 'emergencyPhone1' => '0417 992 086', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'stage management',
			'availability' => 'sat-sun',
			'commentsInfo' => null,
			'discovery' => 'friend',
			'id_orig' => 452, 'key_orig' => '9aefnj', 'ip' => '203.8.131.32',
			'created_orig' => '2015-08-27 07:44:03', 'updated_orig' => '2015-08-27 07:44:03',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 187, 'givenName' => 'Yvonne', 'familyName' => 'Dipold', 'preferredName' => 'Moonbeam',
			'email' => 'moonbeamxox@gmail.com', 'phone1' => '0473 631 852', 'phone2' => '',
			'address1' => '4/1 Cherry St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Andrea Dipold', 'emergencyPhone1' => '0409 463 674', 'emergencyPhone2' => '02 9665 8706',
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Mc stage management bump out after 5pm sunday i have appt mon tues willing to help more hours afterappt gates security vollie tent shop',
			'availability' => 'Any time over weekend esp after 5pm bump out i have commitment mon tue may have somechours after appt',
			'commentsInfo' => null,
			'discovery' => 'Volunteered for woodford 15years ago and have been regular festival volunteer returning volly for mmw from last year',
			'id_orig' => 464, 'key_orig' => 'zf4ouv', 'ip' => '101.169.42.162',
			'created_orig' => '2015-08-28 20:43:13', 'updated_orig' => '2015-08-28 20:43:13',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 187, 'givenName' => 'Yvonne', 'familyName' => 'Dipold', 'preferredName' => 'Moonbeam',
			'email' => 'moonbeamxox@gmail.com', 'phone1' => '0473 631 852', 'phone2' => '',
			'address1' => '4/1 Cherry St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Andrea Dipold', 'emergencyPhone1' => '0409 463 674', 'emergencyPhone2' => '02 9665 8706',
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Mc stage management bump out after 5pm sunday i have appt mon tues willing to help more hours afterappt vollie tent shop gates security',
			'availability' => 'Any time over weekend esp after 5pm bump out i have commitment mon tue may have somechours after appt',
			'commentsInfo' => 'Scissor lift ewp ticket enjoy lighting n sound love performing in character , Enjoy chalkboard and poets breakfast',
			'discovery' => 'Volunteered for woodford 15years ago and have been regular festival volunteer returning volly for mmw from last year',
			'id_orig' => 465, 'key_orig' => '75m4tg', 'ip' => '101.169.42.162',
			'created_orig' => '2015-08-28 20:47:48', 'updated_orig' => '2015-08-28 20:47:48',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 188, 'givenName' => 'Susan', 'familyName' => 'Haley', 'preferredName' => 'Suzy',
			'email' => 'suewashere@hotmail.com', 'phone1' => '0417 635 703', 'phone2' => '07 3366 9078',
			'address1' => '1 Parkland Ct', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Keith Haley', 'emergencyPhone1' => '07 3366 9078', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Shop or bar',
			'availability' => 'day time please',
			'commentsInfo' => null,
			'discovery' => 'girlfriend also I\'m moving to the area',
			'id_orig' => 494, 'key_orig' => 'gdcxi1', 'ip' => '1.120.171.168',
			'created_orig' => '2015-09-10 09:49:14', 'updated_orig' => '2015-09-10 09:49:14',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 189, 'givenName' => 'Catherine', 'familyName' => 'Elder', 'preferredName' => 'Cat',
			'email' => 'catt8151@gmail.com', 'phone1' => '0477 950 876', 'phone2' => '',
			'address1' => '45 Mary Cairncross Ave', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ally Walters', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set up , Gates , Cleaning , Tent',
			'availability' => 'Any day or time',
			'commentsInfo' => 'I am a muso myself and love to meet other like-minded people who love to play music',
			'discovery' => 'Friend who is involved with the festival already',
			'id_orig' => 1434, 'key_orig' => 'fjlcaj', 'ip' => '1.132.96.248',
			'created_orig' => '2016-03-02 15:00:36', 'updated_orig' => '2016-03-02 15:00:36',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 9, 'givenName' => 'Deborah', 'familyName' => 'Watson', 'preferredName' => 'Arabella',
			'email' => 'fringedwellers@live.com', 'phone1' => '0481 541 504', 'phone2' => '',
			'address1' => '27 Bergin St', 'address2' => null,
			'locality' => 'Booval', 'state' => 'Qld', 'postcode' => '4304', 'country' => 'Australia',
			'emergencyContact' => 'Margaret Watson', 'emergencyPhone1' => '07 3282 9148', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Mcing, shop, vollie tent',
			'availability' => 'Available all festival',
			'commentsInfo' => 'I loved this festival last year one of my favourites, I also love Mcing! Happy to help in others areas if needed.',
			'discovery' => 'Previous volunteer',
			'id_orig' => 1442, 'key_orig' => 'nunfjz', 'ip' => '119.225.27.154',
			'created_orig' => '2016-03-03 16:37:40', 'updated_orig' => '2016-03-03 16:37:40',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 11, 'givenName' => 'Christopher', 'familyName' => 'Gwin', 'preferredName' => 'Chris',
			'email' => 'christopher.gwin@bigpond.com', 'phone1' => '07 5494 4743', 'phone2' => '',
			'address1' => 'Lot 46 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ela Linwood', 'emergencyPhone1' => '07 5499 9685', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Since the first Maleny Music Weekend I have worked in TREASURY and would like to do so again.',
			'availability' => 'Friday night...after work...can be there about 6pm,, Sat...afternoon, prefer to do all shifts by Sat but otherwise Sunday midday onward.',
			'commentsInfo' => 'Great festival.',
			'discovery' => 'LOCAL',
			'id_orig' => 1763, 'key_orig' => 'ug9bx', 'ip' => '120.155.168.227',
			'created_orig' => '2016-03-31 12:34:34', 'updated_orig' => '2016-03-31 12:34:34',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 190, 'givenName' => 'Pam', 'familyName' => 'Smith', 'preferredName' => '',
			'email' => 'psmithcontact@gmail.com', 'phone1' => '0410 405 029', 'phone2' => '',
			'address1' => '540 Reeseville Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ian Smith', 'emergencyPhone1' => '0410 405 029', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Shop, Gates - ticketing',
			'availability' => 'Any time',
			'commentsInfo' => null,
			'discovery' => 'Attending Maleny Music Festival in 2015, Maleny Music Festival website',
			'id_orig' => 1764, 'key_orig' => 'e5a42', 'ip' => '1.132.97.114',
			'created_orig' => '2016-03-31 14:13:31', 'updated_orig' => '2016-03-31 14:13:31',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 137, 'givenName' => 'Stuart', 'familyName' => 'Duncan', 'preferredName' => 'Stu',
			'email' => 'stuart452@gmail.com', 'phone1' => '0434 406 591', 'phone2' => '',
			'address1' => '9 Mclean Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Gates , ticketing parking , campground',
			'availability' => null,
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 1786, 'key_orig' => 'mp7gf', 'ip' => '121.222.105.52',
			'created_orig' => '2016-04-04 16:12:55', 'updated_orig' => '2016-04-04 16:12:55',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 125, 'givenName' => 'Sonja', 'familyName' => 'Andrey', 'preferredName' => '',
			'email' => 'annicha09@gmail.com', 'phone1' => '0433 804 389', 'phone2' => '',
			'address1' => 'Lot 25 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Robert Morrel', 'emergencyPhone1' => '07 5435 0142', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Gates, stage management , shop',
			'availability' => 'Sat and Sun -please no late shifts',
			'commentsInfo' => 'Been volunteering twice before',
			'discovery' => 'Through Tom at Crystal Waters where I also live',
			'id_orig' => 1787, 'key_orig' => 'mlo9d', 'ip' => '1.128.97.72',
			'created_orig' => '2016-04-04 16:23:08', 'updated_orig' => '2016-04-04 16:23:08',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 188, 'givenName' => 'Susan', 'familyName' => 'Haley', 'preferredName' => 'Sue',
			'email' => 'suewashere@hotmail.com', 'phone1' => '0417 635 703', 'phone2' => '',
			'address1' => '1 Parkland Ct', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Keith Haley', 'emergencyPhone1' => '0408 981 590', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bar or shop',
			'availability' => 'Sunday and Monday',
			'commentsInfo' => null,
			'discovery' => 'Internet',
			'id_orig' => 1788, 'key_orig' => 'bnbds', 'ip' => '121.222.8.225',
			'created_orig' => '2016-04-04 16:31:53', 'updated_orig' => '2016-04-04 16:31:53',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 91, 'givenName' => 'Barry', 'familyName' => 'Munyard', 'preferredName' => '',
			'email' => 'munyardbarry@gmail.com', 'phone1' => '0421 651 684', 'phone2' => '',
			'address1' => '18 Gardenvale St', 'address2' => null,
			'locality' => 'Holland Park West', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0421 651 684', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'gates parking ticketing',
			'availability' => 'friday to Sunday',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 1789, 'key_orig' => 'njs99', 'ip' => '202.38.139.6',
			'created_orig' => '2016-04-04 16:42:22', 'updated_orig' => '2016-04-04 16:42:22',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 12, 'givenName' => 'Susan', 'familyName' => 'Ferrar', 'preferredName' => '',
			'email' => 'susan.ferrar7@bigpond.com', 'phone1' => '0419 776 088', 'phone2' => '',
			'address1' => '2687 Gympie Rd', 'address2' => null,
			'locality' => 'Beerwah', 'state' => 'Qld', 'postcode' => '4519', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'I cannot stand in one spot for more than a few minutes. Prefer to move. I can do anything needed',
			'availability' => 'both days',
			'commentsInfo' => 'I have to take the Glasshouse Coaches to Maleny so have to work around their times. I will try and find accommodation closer to the time so I don\'t have to be limited by the bus.',
			'discovery' => null,
			'id_orig' => 1790, 'key_orig' => 'uh9x', 'ip' => '60.231.67.197',
			'created_orig' => '2016-04-04 17:12:09', 'updated_orig' => '2016-04-04 17:12:09',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 152, 'givenName' => 'Danielle', 'familyName' => 'Thomson', 'preferredName' => 'Danielle',
			'email' => 'staceyfamily@hotmail.com', 'phone1' => '0452 389 424', 'phone2' => '',
			'address1' => '8 Chantilly Cres', 'address2' => null,
			'locality' => 'Beerwah', 'state' => 'Qld', 'postcode' => '4519', 'country' => 'Australia',
			'emergencyContact' => 'Chloe Stacey', 'emergencyPhone1' => '0473 929 188', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Hey always enjoy the bar last year i had all nights some day shifts would be cool .... i am versatile can help where ever needed',
			'availability' => 'not to sure when festival is this year.. have googled this years dates havent been anounced but i am keen can take time off work if needed',
			'commentsInfo' => 'am a happy person always good to help out',
			'discovery' => null,
			'id_orig' => 1791, 'key_orig' => '2j4ds', 'ip' => '49.197.155.20',
			'created_orig' => '2016-04-04 17:24:13', 'updated_orig' => '2016-04-04 17:24:13',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 8, 'givenName' => 'Ben', 'familyName' => 'Davison', 'preferredName' => '',
			'email' => 'benjiridoo@yahoo.ca', 'phone1' => '', 'phone2' => '',
			'address1' => '69 Remington Shute Rd', 'address2' => null,
			'locality' => 'Montville', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Hi. I did stage management last year for Maleny Folk Fest. , I am looking for paid roles now and have recently been a manager at two "bush doof" including Earth frequency and Rabbits eat lettuce. , Both of these were paid roles. , , However, I\'m still willing to volunteer if knowledge is to be gathered, , I would like to be an assistant to your Site Manager, as this is the direction in which I\'d like to take my skills.',
			'availability' => 'Available',
			'commentsInfo' => 'Good at multi tasking. Many skills.',
			'discovery' => 'Through local knowledge',
			'id_orig' => 1792, 'key_orig' => 'xfky9', 'ip' => '1.132.97.114',
			'created_orig' => '2016-04-04 18:10:34', 'updated_orig' => '2016-04-04 18:10:34',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 80, 'givenName' => 'Karla', 'familyName' => 'Quinn', 'preferredName' => '',
			'email' => 'karla.quinn@uqconnect.edu.au', 'phone1' => '0419 653 502', 'phone2' => '07 3876 2569',
			'address1' => '4/13 Clermont St', 'address2' => null,
			'locality' => 'Bardon', 'state' => 'Qld', 'postcode' => '4065', 'country' => 'Australia',
			'emergencyContact' => 'Andrea Quinn', 'emergencyPhone1' => '0419 653 340', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Bar, Gates, Shop or Vollie Tent - Preferably bar work as I did last year. Really enjoyed it.',
			'availability' => 'No restrictions on availability',
			'commentsInfo' => null,
			'discovery' => 'I volunteered last year and am still on the emailing list.',
			'id_orig' => 1793, 'key_orig' => 'y152e', 'ip' => '121.222.134.153',
			'created_orig' => '2016-04-04 18:59:07', 'updated_orig' => '2016-04-04 18:59:07',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 41, 'givenName' => 'Deborah', 'familyName' => 'Yffer', 'preferredName' => 'Deb',
			'email' => 'deborahnewyou@gmail.com', 'phone1' => '0411 389 727', 'phone2' => '07 5494 2179',
			'address1' => '1 Jabiru Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tony Glazebrook', 'emergencyPhone1' => '0408 684 482', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Shop, Gates, MC, Vollie tent',
			'availability' => 'All weekend',
			'commentsInfo' => 'Very good with groups of people',
			'discovery' => 'initially through Facebook',
			'id_orig' => 1794, 'key_orig' => 'uhgs2', 'ip' => '1.128.96.99',
			'created_orig' => '2016-04-04 19:18:35', 'updated_orig' => '2016-04-04 19:18:35',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 64, 'givenName' => 'Joy', 'familyName' => 'Billings', 'preferredName' => 'Joy',
			'email' => 'jbillings477@gmail.com', 'phone1' => '0409 477 651', 'phone2' => '',
			'address1' => '6 Oceanic Dr', 'address2' => null,
			'locality' => 'Buddina', 'state' => 'Qld', 'postcode' => '4575', 'country' => 'Australia',
			'emergencyContact' => 'Lisa McBurnie', 'emergencyPhone1' => '0405 102 102', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Gates ticketing',
			'availability' => 'Any time',
			'commentsInfo' => null,
			'discovery' => 'Email',
			'id_orig' => 1795, 'key_orig' => '23eba', 'ip' => '103.35.82.196',
			'created_orig' => '2016-04-04 19:40:08', 'updated_orig' => '2016-04-04 19:40:08',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 191, 'givenName' => 'Patricia', 'familyName' => 'Morgan', 'preferredName' => 'Thripence',
			'email' => 'thripence44@gmail.com', 'phone1' => '0421 181 195', 'phone2' => '',
			'address1' => 'Site 213/1 Diura St', 'address2' => null,
			'locality' => 'Maroochydore', 'state' => 'Qld', 'postcode' => '4558', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0408 801 255', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set up. Cleaning. I\'ll do whatever if I\'m shown.',
			'availability' => 'Yes available before and after if I\'m informed in advance',
			'commentsInfo' => 'Never been before. Not sure how it all works and can\'t comment on things I know nothing about. Al new to me.',
			'discovery' => 'Search the net for local things to do.',
			'id_orig' => 1796, 'key_orig' => 'mfnea', 'ip' => '1.144.97.10',
			'created_orig' => '2016-04-04 20:02:23', 'updated_orig' => '2016-04-04 20:02:23',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 85, 'givenName' => 'Kathleen', 'familyName' => 'Davis', 'preferredName' => 'Kathy',
			'email' => 'kathydavis1@bigpond.com', 'phone1' => '0408 833 156', 'phone2' => '07 5435 2782',
			'address1' => '14 Ash St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Luke Grimshaw', 'emergencyPhone1' => '0408 833 156', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Love the Vollie Tent. thanks',
			'availability' => 'can be available from Friday - Sunday',
			'commentsInfo' => null,
			'discovery' => 'have been before..',
			'id_orig' => 1797, 'key_orig' => 'q22sa', 'ip' => '58.165.9.129',
			'created_orig' => '2016-04-04 20:12:01', 'updated_orig' => '2016-04-04 20:12:01',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 338, 'givenName' => 'Rainer', 'familyName' => 'Wagner', 'preferredName' => 'Ron',
			'email' => 'zarra15@hotmail.com', 'phone1' => '0438 303 164', 'phone2' => '',
			'address1' => 'PO Box 485', 'address2' => null,
			'locality' => 'Deception Bay', 'state' => 'Qld', 'postcode' => '4508', 'country' => 'Australia',
			'emergencyContact' => 'Karin Wagner', 'emergencyPhone1' => '0410 316 940', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Set up Stage & dismantled when festival is finished! Rainer was in this team last year 2015! No worries we can be there by Wednesday 26/8/16 or earlier if needed & can stay back until Sunday 5.00 pm or longer! We both had so fun much and absolute loved the festival!',
			'availability' => 'Any time',
			'commentsInfo' => null,
			'discovery' => 'Volunteers last year & enjoyed every minute!',
			'id_orig' => 1798, 'key_orig' => 'maulm', 'ip' => '155.143.221.250',
			'created_orig' => '2016-04-04 20:37:47', 'updated_orig' => '2016-04-04 20:37:47',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 337, 'givenName' => 'Karin Luise', 'familyName' => 'Wagner', 'preferredName' => 'Karin',
			'email' => 'zarra15@hotmail.com', 'phone1' => '0410 316 940', 'phone2' => '',
			'address1' => 'PO Box 485', 'address2' => null,
			'locality' => 'Deception Bay', 'state' => 'Qld', 'postcode' => '4508', 'country' => 'Australia',
			'emergencyContact' => 'Rainer Wagner', 'emergencyPhone1' => '0438 303 164', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Set up Bar Area & deco! Shop or Vollie Tent! Enjoyed every minute last year, happy to help out were ever I am needed!',
			'availability' => 'At any time from 26/8/16 or before & on bump out from Sunday!',
			'commentsInfo' => 'Loved every minute at last years festival!',
			'discovery' => 'Volunteers at 2015',
			'id_orig' => 1799, 'key_orig' => 'y3rvd', 'ip' => '155.143.221.250',
			'created_orig' => '2016-04-04 20:48:50', 'updated_orig' => '2016-04-04 20:48:50',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 110, 'givenName' => 'Carsten', 'familyName' => 'Nielsen', 'preferredName' => 'Carsten',
			'email' => 'carsten@lifejoy.info', 'phone1' => '', 'phone2' => '',
			'address1' => '114 Browns Rd', 'address2' => null,
			'locality' => 'Belli Park', 'state' => 'Qld', 'postcode' => '4652', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Gates, love meet and greet.',
			'availability' => 'During festival',
			'commentsInfo' => 'Loved it last year and look forward to coming back.',
			'discovery' => null,
			'id_orig' => 1800, 'key_orig' => '5tkdr', 'ip' => '122.149.127.73',
			'created_orig' => '2016-04-04 20:49:22', 'updated_orig' => '2016-04-04 20:49:22',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 143, 'givenName' => 'Vanessa', 'familyName' => 'Parle', 'preferredName' => 'Vanessa',
			'email' => 'vparl1@yahoo.com.au', 'phone1' => '0434 997 575', 'phone2' => '',
			'address1' => 'PO Box 617', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Amanda Parle', 'emergencyPhone1' => '07 4630 3843', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Music instrument security',
			'availability' => 'Mornings each day (early shift)',
			'commentsInfo' => 'Nil',
			'discovery' => 'From MMFest Organizers',
			'id_orig' => 1801, 'key_orig' => 'rzfw', 'ip' => '1.128.96.186',
			'created_orig' => '2016-04-04 21:06:55', 'updated_orig' => '2016-04-04 21:06:55',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 37, 'givenName' => 'Andrew', 'familyName' => 'Pedler', 'preferredName' => 'Andrew',
			'email' => 'adpedler@gmail.com', 'phone1' => '0412 122 778', 'phone2' => '07 5435 2856',
			'address1' => '135 Stanley River Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Margaret Longworth', 'emergencyPhone1' => '0438 794 252', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Door security (prev 2015), Ticketing (a bit in 2014, a bit in 2015), Gates / parking (prev 2014)',
			'availability' => 'Not available Friday morning.',
			'commentsInfo' => null,
			'discovery' => 'I live in Maleny. Difficult not to hear about the festival. , Attended the first re-launch of Maleny Music Festival, and subsequent ones.',
			'id_orig' => 1802, 'key_orig' => '9zet5', 'ip' => '106.69.69.54',
			'created_orig' => '2016-04-04 21:32:14', 'updated_orig' => '2016-04-04 21:32:14',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 128, 'givenName' => 'Sheila', 'familyName' => 'Duncan', 'preferredName' => '',
			'email' => 'sheiladuncan2010@hotmail.com', 'phone1' => '0459 453 358', 'phone2' => '',
			'address1' => '7 Russell St', 'address2' => null,
			'locality' => 'Caboolture', 'state' => 'Qld', 'postcode' => '4510', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Front gate',
			'availability' => null,
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 1805, 'key_orig' => '11duh', 'ip' => '1.132.96.111',
			'created_orig' => '2016-04-05 09:19:26', 'updated_orig' => '2016-04-05 09:19:26',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 92, 'givenName' => 'Kenneth', 'familyName' => 'O\'Flaherty', 'preferredName' => 'Ken',
			'email' => 'kennyo@westnet.com.au', 'phone1' => '0417 646 759', 'phone2' => '07 5476 9533',
			'address1' => '58 Townsend Rd', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0417 646 759', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'MC, Stage manager, vollie tent',
			'availability' => 'alltimes except Friday',
			'commentsInfo' => null,
			'discovery' => 'through friends and attending each year',
			'id_orig' => 1809, 'key_orig' => 'js5k3', 'ip' => '58.7.215.24',
			'created_orig' => '2016-04-05 11:38:42', 'updated_orig' => '2016-04-05 11:38:42',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 112, 'givenName' => 'Brenda', 'familyName' => 'Holligan', 'preferredName' => 'Bren',
			'email' => 'brendaholligan@yahoo.com.au', 'phone1' => '07 5494 4769', 'phone2' => '',
			'address1' => 'Lot 2 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Neil Commins', 'emergencyPhone1' => '0404 146 319', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'I have for the last 3 years volunteered selling tickets for the alcohol - this I would love to do again',
			'availability' => 'saturday only - I work friday\'s and sunday\'s',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 1810, 'key_orig' => 'zwtmq', 'ip' => '117.120.18.134',
			'created_orig' => '2016-04-05 12:59:09', 'updated_orig' => '2016-04-05 12:59:09',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 129, 'givenName' => 'Ian', 'familyName' => 'Hitchcock', 'preferredName' => '',
			'email' => 'iangordon2323@yahoo.com.au', 'phone1' => '0435 872 411', 'phone2' => '',
			'address1' => '47 Scotts Rd', 'address2' => null,
			'locality' => 'Wootha', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0435 872 411', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Set up site deco',
			'availability' => 'Sat Sun at this time but maybe Fri arvo',
			'commentsInfo' => 'Stage lighting experience, many yrs! retired now from the industry.',
			'discovery' => 'Gabriel M',
			'id_orig' => 1813, 'key_orig' => 'ys9s0', 'ip' => '1.132.96.8',
			'created_orig' => '2016-04-05 15:55:19', 'updated_orig' => '2016-04-05 15:55:19',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 15, 'givenName' => 'Suzanne', 'familyName' => 'Chumbley', 'preferredName' => 'Suzanne',
			'email' => 'suzannec7@optusnet.com.au', 'phone1' => '0428 745 498', 'phone2' => '07 5309 5710',
			'address1' => '2/11 Suller St', 'address2' => null,
			'locality' => 'Caloundra', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Sam Dougall', 'emergencyPhone1' => '0408 671 583', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Selling bar tickets. I think it was the Platypus Bar last time and I\'m happy to do the same.',
			'availability' => 'I would be available from Sat 27th Aug from 12noon onwards and (ideally) finish up by 6pm on Sun 28th. , , I work late Fri afternoons and would not be available.',
			'commentsInfo' => 'I have a friend (Susan M. Brown) that will be applying (this Saturday 9th) for the same position. Would it be possible for her and I to be able to work the same shifts please?',
			'discovery' => 'Have volunteered at the festival for the last 2 years. :)',
			'id_orig' => 1828, 'key_orig' => 'qli9l', 'ip' => '114.78.38.206',
			'created_orig' => '2016-04-07 12:08:13', 'updated_orig' => '2016-04-07 12:08:13',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 177, 'givenName' => 'Ninindi', 'familyName' => 'Johnstone', 'preferredName' => '',
			'email' => 'nemiliajohnstone@gmail.comp', 'phone1' => '0499 983 902', 'phone2' => '',
			'address1' => '23 Coral St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Nala Johnstone', 'emergencyPhone1' => '0490 455 020', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Setup/ site deco',
			'availability' => null,
			'commentsInfo' => 'Would like to work with Auntie Zpam/Dinnawan who\'s been asked by Glen for some original artwork',
			'discovery' => 'Friend',
			'id_orig' => 1838, 'key_orig' => 'y7tel', 'ip' => '1.132.96.158',
			'created_orig' => '2016-04-10 13:21:16', 'updated_orig' => '2016-04-10 13:21:16',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 192, 'givenName' => 'Susan M', 'familyName' => 'Brown', 'preferredName' => 'Susan',
			'email' => 'smbrown@pghbricks.com.au', 'phone1' => '0434 940 795', 'phone2' => '07 5478 2873',
			'address1' => '5/19 Akeringa Pl', 'address2' => null,
			'locality' => 'Mooloolaba', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Suzanne Chumbley', 'emergencyPhone1' => '0428 745 498', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bar area',
			'availability' => 'NOT available due to work & other commitments: Friday, nor Saturday morning., , Preferred shift times from midday Saturday 27th & up to 6pm Sunday 28th - as I would be travelling up with my friend Suzanne Chumbley, it would be greatly appreciated if we could be rostered same times.',
			'commentsInfo' => 'Hospitality & cash-handling part of my work history prior to this last 25yrs in customer service., Blue card & CPR both current., Have been involved with the Hug Patrol for a number years - incl 2 Maleny Street festivals!, A volunteer with Street Angels - a community safety support group on the Coast - usually attending Caloundra Blue Light Disco & Mooloolaba New Years Eve., Volunteering Woodford Small Events Crew - 3rd year - on the bar - where I met Suzanne!',
			'discovery' => 'Recommended to volunteer by Suzanne Chumbley (returning vollie)',
			'id_orig' => 1840, 'key_orig' => 'kjw5r', 'ip' => '106.69.104.5',
			'created_orig' => '2016-04-10 19:21:33', 'updated_orig' => '2016-04-10 19:21:33',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 94, 'givenName' => 'Cecilie', 'familyName' => 'Schiotz', 'preferredName' => '',
			'email' => 'lovefromsarika@hotmail.com', 'phone1' => '0437 080 050', 'phone2' => '07 5429 6670',
			'address1' => '1/10 Cherry St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Peter Schiotz', 'emergencyPhone1' => '0407 942 428', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Gate (tickets), Shop',
			'availability' => 'Morning shifts work well, Flexible',
			'commentsInfo' => 'When I helped at gate/tickets last year, it was suggested that I do this again as I\'m comfortable with eftpos machine, making decisions on the spot, & general customer service',
			'discovery' => 'Word-of-mouth, Online',
			'id_orig' => 1843, 'key_orig' => 'bcxr5', 'ip' => '144.139.184.48',
			'created_orig' => '2016-04-11 10:00:55', 'updated_orig' => '2016-04-11 10:00:55',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 77, 'givenName' => 'Simon', 'familyName' => 'Wells', 'preferredName' => '',
			'email' => 'smnwlls58@gmail.com', 'phone1' => '0408 762 473', 'phone2' => '',
			'address1' => '88 Cambridge St', 'address2' => null,
			'locality' => 'Carina Heights', 'state' => 'Qld', 'postcode' => '4152', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0408 762 473', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Set Up. Bar.',
			'availability' => 'From Wed before the festival, til end of the event',
			'commentsInfo' => null,
			'discovery' => '88 Cambridge St',
			'id_orig' => 1844, 'key_orig' => 'ntlw2', 'ip' => '211.31.35.132',
			'created_orig' => '2016-04-11 12:36:14', 'updated_orig' => '2016-04-11 12:36:14',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 45, 'givenName' => 'Judith', 'familyName' => 'Bacon', 'preferredName' => 'Juda',
			'email' => 'judithbacon@optusnet.com.au', 'phone1' => '0407 583 490', 'phone2' => '',
			'address1' => '8 Emu Creek Rd', 'address2' => null,
			'locality' => 'Crows Nest', 'state' => 'Qld', 'postcode' => '4355', 'country' => 'Australia',
			'emergencyContact' => 'Ryk Rostron', 'emergencyPhone1' => '07 4698 1831', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'MCing please. My preference would be morning/afternoon and early evening shifts.',
			'availability' => 'Friday through to Sunday',
			'commentsInfo' => 'probably nothing that Noel doesn\'t know already.',
			'discovery' => 'Noel',
			'id_orig' => 1919, 'key_orig' => 'b2ea3', 'ip' => '49.197.20.61',
			'created_orig' => '2016-04-21 11:06:26', 'updated_orig' => '2016-04-21 11:06:26',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 105, 'givenName' => 'Colleen', 'familyName' => 'Verhaaren', 'preferredName' => 'Gumala',
			'email' => 'colleen66cv@gmail.com', 'phone1' => '0448 845 266', 'phone2' => '',
			'address1' => '25 Cedar Grove Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Linda Williams', 'emergencyPhone1' => '0448 845 266', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Set up. Arts with Glen',
			'availability' => 'Pre post n. Sunday afternoon',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 1928, 'key_orig' => 'js19l', 'ip' => '58.108.175.248',
			'created_orig' => '2016-04-21 20:59:16', 'updated_orig' => '2016-04-21 20:59:16',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 40, 'givenName' => 'Kari', 'familyName' => '-', 'preferredName' => '',
			'email' => 'kari@karicelebrations.com', 'phone1' => '0437 714 965', 'phone2' => '',
			'address1' => '39 Jubilee Dr', 'address2' => null,
			'locality' => 'Palmwoods', 'state' => 'Qld', 'postcode' => '4555', 'country' => 'Australia',
			'emergencyContact' => 'Jessi Dunbar', 'emergencyPhone1' => '0402 374 846', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'MC',
			'availability' => 'during festival',
			'commentsInfo' => 'Loved MC work at the previous festival. Would love to again., Thanks John',
			'discovery' => null,
			'id_orig' => 1994, 'key_orig' => 'uo164', 'ip' => '58.7.247.7',
			'created_orig' => '2016-05-04 12:03:04', 'updated_orig' => '2016-05-04 12:03:04',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 36, 'givenName' => 'Arcadia', 'familyName' => 'Love', 'preferredName' => 'Arcadia',
			'email' => 'mail@womenforchange.com', 'phone1' => '0427 296 572', 'phone2' => '',
			'address1' => '14 395 Zillmere Rd', 'address2' => null,
			'locality' => 'Zillmere', 'state' => 'Qld', 'postcode' => '4034', 'country' => 'Australia',
			'emergencyContact' => 'Shaay Menay', 'emergencyPhone1' => '0457 968 875', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'MC - any venue, but would prefer the smaller ones for a change.',
			'availability' => 'Friday pm to Sunday pm',
			'commentsInfo' => 'I think it\'s all on your records - or see John Wright :), MC, DJ, Radio Announcer, Entertainer (poet)',
			'discovery' => 'Have MC\'d at all MMF\'s except last year :)',
			'id_orig' => 2000, 'key_orig' => 'zvqqz', 'ip' => '1.132.97.65',
			'created_orig' => '2016-05-04 17:03:50', 'updated_orig' => '2016-05-04 17:03:50',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 193, 'givenName' => 'Kerry-Anne', 'familyName' => 'Bourke', 'preferredName' => 'Kerry-Anne',
			'email' => 'kerryannebourke@gmail.com', 'phone1' => '0402 139 944', 'phone2' => '07 3161 9683',
			'address1' => 'PO Box 7748', 'address2' => null,
			'locality' => 'East Brisbane', 'state' => 'Qld', 'postcode' => '4169', 'country' => 'Australia',
			'emergencyContact' => 'Kevin Narith', 'emergencyPhone1' => '07 3161 9683', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Gates , , Cleaning, , Shop (but haven\'t used a cash register before)',
			'availability' => 'Can\'t see the shift times listed above? :) but both my partner Ian Brady and I live in Brisbane, so we would, drive up after work on Friday with our tent and drive home late Sunday., , Saturday and Sunday morning shifts would be perfect.',
			'commentsInfo' => 'I have a blue card because some of my students are under 18, so I can help with children.',
			'discovery' => 'My partner and I attended the Elton John fundraiser and we were told to mention that we, wore the ABBA costumes. It was a great night!',
			'id_orig' => 2090, 'key_orig' => '7vvek', 'ip' => '122.105.104.152',
			'created_orig' => '2016-05-14 09:14:58', 'updated_orig' => '2016-05-14 09:14:58',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 194, 'givenName' => 'Ian', 'familyName' => 'Brady', 'preferredName' => 'Ian',
			'email' => 'ianbbrady@gmail.com', 'phone1' => '0400 276 110', 'phone2' => '07 3161 9683',
			'address1' => 'C/- PO Box 7748', 'address2' => null,
			'locality' => 'East Brisbane', 'state' => 'Qld', 'postcode' => '4169', 'country' => 'Australia',
			'emergencyContact' => 'Kevin Narith', 'emergencyPhone1' => '07 3161 9683', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Gates, , Cleaning, , Shop (haven\'t used a cash register before)',
			'availability' => 'My partner Kerry-Anne Bourke and I live in Brisbane and would drive up after work on the Friday with our tent., She has also filled in one of these forms. So Saturday and Sunday morning shifts would be great.',
			'commentsInfo' => null,
			'discovery' => 'Kerry-Anne and I attended the Elton John fundraiser and wore the ABBA outfits.',
			'id_orig' => 2092, 'key_orig' => 'wxbh5', 'ip' => '122.105.104.152',
			'created_orig' => '2016-05-14 09:24:21', 'updated_orig' => '2016-05-14 09:24:21',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 195, 'givenName' => 'Marian', 'familyName' => 'Graham', 'preferredName' => 'Marian',
			'email' => 'marian@keystonearchitects.com', 'phone1' => '0427 769 727', 'phone2' => '',
			'address1' => '43 East St', 'address2' => null,
			'locality' => 'Scarness', 'state' => 'Qld', 'postcode' => '4655', 'country' => 'Australia',
			'emergencyContact' => 'Joan Chenery', 'emergencyPhone1' => '0438 401 828', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Joan would like me to be her 2IC on the bar',
			'availability' => 'During festival.',
			'commentsInfo' => 'Previous bar experience at Woodford and Yagubi Festivals. Cashier.',
			'discovery' => null,
			'id_orig' => 2104, 'key_orig' => 'ily5e', 'ip' => '203.213.83.197',
			'created_orig' => '2016-05-17 17:53:02', 'updated_orig' => '2016-05-17 17:53:02',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 196, 'givenName' => 'Leanne', 'familyName' => 'Philipcollins', 'preferredName' => 'Lea',
			'email' => 'ellcee8@yahoo.com', 'phone1' => '0409 753 790', 'phone2' => '',
			'address1' => '565 Maleny-Montville Rd', 'address2' => null,
			'locality' => 'Balmoral Ridge', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Gavan McKew', 'emergencyPhone1' => '0439 856 890', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Gates, Shop, Vollie Tent',
			'availability' => 'All days',
			'commentsInfo' => 'I have worked in the Tourism Hospitality industry on the Sunshine Coast for over 10 years. I have worked in the Customer Service industry for over 30 years. I have excellent Customer Service skills. I have been a resident of Maleny for 18 months and am passionate about the area.',
			'discovery' => 'Facebook',
			'id_orig' => 2128, 'key_orig' => '3qapf', 'ip' => '1.132.97.118',
			'created_orig' => '2016-05-22 17:45:26', 'updated_orig' => '2016-05-22 17:45:26',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 197, 'givenName' => 'Fiona', 'familyName' => 'Cooke', 'preferredName' => '',
			'email' => 'fiona.cooke92@gmail.com', 'phone1' => '0402 360 444', 'phone2' => '',
			'address1' => '5/105 Vernon St', 'address2' => null,
			'locality' => 'Nundah', 'state' => 'Qld', 'postcode' => '4012', 'country' => 'Australia',
			'emergencyContact' => 'Erica', 'emergencyPhone1' => '0432 339 727', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Shop, Gates, Vollie Tent',
			'availability' => 'Available Saturday and Sunday only',
			'commentsInfo' => 'First Aid Cert, blue card (working with children) , Volunteered both at Woodford Folk Festival and Brisbane Festival in recent years in similar roles.',
			'discovery' => 'Word of mouth about festival and looked up website for option to volunteer',
			'id_orig' => 2131, 'key_orig' => 'rr6nb', 'ip' => '106.71.69.114',
			'created_orig' => '2016-05-22 22:25:53', 'updated_orig' => '2016-05-22 22:25:53',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 7, 'givenName' => 'Ann', 'familyName' => 'Morris', 'preferredName' => '',
			'email' => 'annmorris_oz@yahoo.com', 'phone1' => '0409 629 602', 'phone2' => '',
			'address1' => 'PO Box 257', 'address2' => null,
			'locality' => 'Eudlo', 'state' => 'Qld', 'postcode' => '4554', 'country' => 'Australia',
			'emergencyContact' => 'Bill Ross', 'emergencyPhone1' => '0438 154 144', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Gates with the same people I worked with last year please ...... Sheila & ???',
			'availability' => 'Prefer morning',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2135, 'key_orig' => '1n1tb', 'ip' => '1.132.96.212',
			'created_orig' => '2016-05-23 08:16:04', 'updated_orig' => '2016-05-23 08:16:04',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 198, 'givenName' => 'Gillian Tracy', 'familyName' => 'Lewis', 'preferredName' => 'Tracy',
			'email' => 'tracylewis007@live.com', 'phone1' => '0476 961 932', 'phone2' => '',
			'address1' => '10/4 Meadow Lane', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Steve Markham', 'emergencyPhone1' => '0417 638 636', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'art and decor... have worked with Jan on the entrance to fest, have been at woodford for 3 year volly on the art and decor...experienced at sculpture installation work...Reference for skills please see Brett Campell . , past relevant exp..art teacher at River School.',
			'availability' => 'no other commitments',
			'commentsInfo' => null,
			'discovery' => 'local',
			'id_orig' => 2149, 'key_orig' => 'tpr0d', 'ip' => '1.132.96.60',
			'created_orig' => '2016-05-24 10:50:37', 'updated_orig' => '2016-05-24 10:50:37',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 199, 'givenName' => 'Margaret', 'familyName' => 'Grace', 'preferredName' => 'Margaret',
			'email' => 'marggrace@gmail.com', 'phone1' => '0417 724 253', 'phone2' => '07 5477 1770',
			'address1' => '6 Timbertop St', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Nicholas Hendry', 'emergencyPhone1' => '0413 333 569', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set up/Site Deco, Shop, Gates',
			'availability' => 'Wednesday 24th to Sunday 28th August',
			'commentsInfo' => 'I have worked as a volunteer at the Woodford Folk Festival and The Planting as a workshop assistant, duties included setting up workshop spaces for the artists, cleaning up after the workshops and helping the artists and participants as required., I have experience working as a teachers aide and a volunteer Scout leader, I know a bit of first aid, I\'m comfortable using computers, I have a blue card and an open drivers license., I enjoy music, dancing, arts and crafts and playing drums.',
			'discovery' => 'the website',
			'id_orig' => 2152, 'key_orig' => 'xppr3', 'ip' => '58.106.130.185',
			'created_orig' => '2016-05-24 16:53:34', 'updated_orig' => '2016-05-24 16:53:34',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 200, 'givenName' => 'Shane', 'familyName' => 'Joyce', 'preferredName' => 'Shane',
			'email' => 'sjoyce1@bordernet.com.au', 'phone1' => '0428 931 880', 'phone2' => '',
			'address1' => '252 Mudlo Rd', 'address2' => null,
			'locality' => 'Kilkivan', 'state' => 'Qld', 'postcode' => '4600', 'country' => 'Australia',
			'emergencyContact' => 'Pomei Kwong', 'emergencyPhone1' => '07 5435 0288', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Setup/site deco., MC',
			'availability' => '26,27, 28,29,30.',
			'commentsInfo' => 'Farmer with practical skills. Have done public speaking & MC 1 conference.',
			'discovery' => 'From a friend.',
			'id_orig' => 2184, 'key_orig' => 'p3wn9', 'ip' => '1.120.131.190',
			'created_orig' => '2016-05-26 23:19:44', 'updated_orig' => '2016-05-26 23:19:44',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 187, 'givenName' => 'Yvonne', 'familyName' => 'Dipold', 'preferredName' => 'Moonbeam',
			'email' => 'yvonne.dipold@gmail.com', 'phone1' => '0473 631 852', 'phone2' => '',
			'address1' => '4/1 Cherry St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Andrea Dipold', 'emergencyPhone1' => '0409 463 674', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Set up/ site deco and bump out',
			'availability' => '28th 29th i have yoga teacher training',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2193, 'key_orig' => 'ba5bq', 'ip' => '1.132.96.113',
			'created_orig' => '2016-05-28 10:23:00', 'updated_orig' => '2016-05-28 10:23:00',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 9, 'givenName' => 'Deborah', 'familyName' => 'Watson', 'preferredName' => 'Arabella',
			'email' => 'fringedwellers@live.com', 'phone1' => '0481 541 504', 'phone2' => '',
			'address1' => '27 Bergin St', 'address2' => null,
			'locality' => 'Booval', 'state' => 'Qld', 'postcode' => '4304', 'country' => 'Australia',
			'emergencyContact' => 'Jon Flach', 'emergencyPhone1' => '0434 930 721', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'MCing, enjoy it very much',
			'availability' => 'Saturday/Sunday',
			'commentsInfo' => null,
			'discovery' => 'Through Woodford volunteering and volunteered as an MC last year., Such a wonderful weekend!',
			'id_orig' => 2204, 'key_orig' => 'e4b19', 'ip' => '110.23.72.31',
			'created_orig' => '2016-05-30 13:23:28', 'updated_orig' => '2016-05-30 13:23:28',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 201, 'givenName' => 'Mitchell', 'familyName' => 'Tanner', 'preferredName' => 'Mitch',
			'email' => 'mitch.c.tanner@outlook.com', 'phone1' => '0474 284 549', 'phone2' => '',
			'address1' => '531 Maleny-Kenilworth Rd', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sue Tanner', 'emergencyPhone1' => '07 5435 0348', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set up, gates, cleaning',
			'availability' => 'All weekend (at present)',
			'commentsInfo' => 'I haven\'t been in the area very long and don\'t know many people - this would be a good way of meeting some more',
			'discovery' => 'my mum told me',
			'id_orig' => 2259, 'key_orig' => 'qs8vw', 'ip' => '123.211.147.22',
			'created_orig' => '2016-06-09 16:53:59', 'updated_orig' => '2016-06-09 16:53:59',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 349, 'givenName' => 'Jessica', 'familyName' => 'Riggin', 'preferredName' => '',
			'email' => 'jessica.riggin@gmail.com', 'phone1' => '0421 231 599', 'phone2' => '',
			'address1' => '6 Bloodwood Close', 'address2' => null,
			'locality' => 'Mooloolah Valley', 'state' => 'Qld', 'postcode' => '4553', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'gates, shop, vollie tent',
			'availability' => 'any time',
			'commentsInfo' => 'I volunteered at the gates at Earth Frequency Festival 2016.',
			'discovery' => 'on this website',
			'id_orig' => 2269, 'key_orig' => '8oqsi', 'ip' => '79.136.117.226',
			'created_orig' => '2016-06-10 08:03:26', 'updated_orig' => '2016-06-10 08:03:26',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 202, 'givenName' => 'Deanne', 'familyName' => 'Grace', 'preferredName' => '',
			'email' => 'gracedeanne8@gmail.com', 'phone1' => '0408 756 904', 'phone2' => '07 5435 8614',
			'address1' => '531 Maleny-Kenilworth Rd', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Cashier for bars',
			'availability' => 'Not available Sunday morning',
			'commentsInfo' => null,
			'discovery' => 'Reminder on computer. Have worked as bar cashier every year since first festival.',
			'id_orig' => 2323, 'key_orig' => '3gv5m', 'ip' => '123.211.138.136',
			'created_orig' => '2016-06-14 20:24:17', 'updated_orig' => '2016-06-14 20:24:17',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 177, 'givenName' => 'Ninindi', 'familyName' => 'Johnstone', 'preferredName' => 'Ninindi',
			'email' => 'nemiliajohnstone@gmail.com', 'phone1' => '0499 983 902', 'phone2' => '',
			'address1' => '23 Coral St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Yughali', 'emergencyPhone1' => '0490 178 867', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Setup/ sitedeco',
			'availability' => 'Pre',
			'commentsInfo' => null,
			'discovery' => 'Been before',
			'id_orig' => 2331, 'key_orig' => 'qct4b', 'ip' => '1.132.97.51',
			'created_orig' => '2016-06-15 07:22:01', 'updated_orig' => '2016-06-15 07:22:01',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 203, 'givenName' => 'Lynda', 'familyName' => 'Rush', 'preferredName' => '',
			'email' => 'lynda.rush@bigpond.com', 'phone1' => '0427 700 138', 'phone2' => '',
			'address1' => '16 Hakea Ave', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Skye Rush', 'emergencyPhone1' => '0477 278 921', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bar, set up, cleaning',
			'availability' => 'Most of the time',
			'commentsInfo' => 'I have volunteered for the last 8 years for Caloundra music festival, working the VIP bars, but having recently moved to Maleny, am keen to give it a go up here. Cheers Lynda.',
			'discovery' => 'On the website.',
			'id_orig' => 2336, 'key_orig' => 'ki9mv', 'ip' => '121.222.137.135',
			'created_orig' => '2016-06-15 13:03:17', 'updated_orig' => '2016-06-15 13:03:17',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 204, 'givenName' => 'Sadie', 'familyName' => 'Jones', 'preferredName' => 'Sadie',
			'email' => 'sadiegjones@yahoo.com.au', 'phone1' => '0405 169 745', 'phone2' => '',
			'address1' => '25 Mansfield St', 'address2' => null,
			'locality' => 'Coorparoo', 'state' => 'Qld', 'postcode' => '4151', 'country' => 'Australia',
			'emergencyContact' => 'David Jay Penman', 'emergencyPhone1' => '0420 221 089', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Bar, gates, shop, volley tent',
			'availability' => 'Friday from 5pm through to Sunday pm',
			'commentsInfo' => 'Hi! I am with David JAY Penman who is also applying to volunteer. If we could request our volunteer hours to be "loosely" or "approximately" at the same time so that we can enjoy time off together that would be fab thanks!',
			'discovery' => 'We, "Sadie and Jay" performed at MMW 2015 & 2014. We would like to contribute something back to the festival and take part!',
			'id_orig' => 2347, 'key_orig' => '7q1dx', 'ip' => '58.7.204.236',
			'created_orig' => '2016-06-15 20:34:06', 'updated_orig' => '2016-06-15 20:34:06',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 205, 'givenName' => 'David Jack', 'familyName' => 'Penman', 'preferredName' => 'Jay',
			'email' => 'david.penman@gmail.com', 'phone1' => '0420 221 089', 'phone2' => '',
			'address1' => '25 Mansfield St', 'address2' => null,
			'locality' => 'Coorparoo', 'state' => 'Qld', 'postcode' => '4151', 'country' => 'Australia',
			'emergencyContact' => 'Sadie Jones', 'emergencyPhone1' => '0405 169 745', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'MC, Stage Management, Gates, Shop, Vollie Tent',
			'availability' => 'Friday from 5pm - Sunday pm',
			'commentsInfo' => 'Hi! I am with Sadie Jones who is also applying to volunteer. If we could request our volunteer hours to be "loosely" or "approximately" at the same time so that we can enjoy time off together that would be fab thanks!',
			'discovery' => 'We, "Sadie and Jay" performed at MMW in 2015 & 2014. We would like to contribute something back to the festival and take part!',
			'id_orig' => 2349, 'key_orig' => '7q1dx3', 'ip' => '58.7.204.236',
			'created_orig' => '2016-06-15 20:40:58', 'updated_orig' => '2016-06-15 20:40:58',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 35, 'givenName' => 'Laurel', 'familyName' => 'Wilson', 'preferredName' => 'Laurel',
			'email' => 'goodwills@ozemail.com.au', 'phone1' => '0418 187 104', 'phone2' => '07 5435 2333',
			'address1' => '34 Palm St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Bob Wilson', 'emergencyPhone1' => '0438 525 119', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'MCing',
			'availability' => 'We\'re singing with \'Tapestry\' choir, so won\'t be available when Tapestry is performing (or for an hour or so before and after).',
			'commentsInfo' => 'Already approached by John Wright re: MCing., Happy to take billets - have one room with double bed available and a double bed caravan if necessary.',
			'discovery' => 'word of mouth',
			'id_orig' => 2374, 'key_orig' => 'luw5t', 'ip' => '124.170.93.132',
			'created_orig' => '2016-06-16 18:28:22', 'updated_orig' => '2016-06-16 18:28:22',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 206, 'givenName' => 'Kim Carey', 'familyName' => 'Hinckfuss', 'preferredName' => 'Kimbo',
			'email' => 'k.hinckfuss@gmail.com.au', 'phone1' => '0424 229 020', 'phone2' => '07 5435 8139',
			'address1' => '13 Measberg Rd', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'David Hinckfuss', 'emergencyPhone1' => '0466 332 087', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Fencing, Setup',
			'availability' => 'Anytime',
			'commentsInfo' => 'I love the music weekend :)',
			'discovery' => 'not in the Murdoch press',
			'id_orig' => 2407, 'key_orig' => 'cdrnr', 'ip' => '121.222.5.248',
			'created_orig' => '2016-06-18 11:37:34', 'updated_orig' => '2016-06-18 11:37:34',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 207, 'givenName' => 'Maree', 'familyName' => 'Robertson', 'preferredName' => 'Maree',
			'email' => 'maree1964@yahoo.com', 'phone1' => '0427 122 608', 'phone2' => '',
			'address1' => '6 Pinewood Circuit', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Anne Craven', 'emergencyPhone1' => '0404 768 761', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Vollie Tent',
			'availability' => 'All times needed',
			'commentsInfo' => 'Volunteer Coordinator 2016, Shop Coordinator 2012-2015-',
			'discovery' => 'Noel',
			'id_orig' => 2409, 'key_orig' => '43gwc', 'ip' => '1.132.96.193',
			'created_orig' => '2016-06-18 15:49:12', 'updated_orig' => '2016-06-18 15:49:12',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 208, 'givenName' => 'Maria', 'familyName' => 'Zann', 'preferredName' => 'Maria',
			'email' => 'maria.zann@uqconnect.edu.au', 'phone1' => '0429 799 267', 'phone2' => '',
			'address1' => '318 Albert St', 'address2' => null,
			'locality' => 'Maryborough', 'state' => 'Qld', 'postcode' => '4650', 'country' => 'Australia',
			'emergencyContact' => 'John Mesic', 'emergencyPhone1' => '0490 159 209', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Can help out Joan Chenery - I used to organise workshops & concerts with her at the various Cabarlah Folk Festivals in the 90s, Can help with whatever -on the gate, parking, , Stages, set up etc. as a musician I\'m happy to help with looking after artists or be an offsider there., Could also help MC - if you can\'t get anyone famous instead!, If there are any dance or world music acts I\'d be happy to help set them up especially., The gate would also be OK. Bar is not my preference. , Cleaning up venues - putting up, packing up - Someone else can clean the men\'s toilets.',
			'availability' => 'Could try to get the Thursday or Friday off work to help out in addition to the weekend., Need to ensure I don\'t have shifts when the best sessions are on.',
			'commentsInfo' => 'Anything for a music session as I\'m desperate to play!!! Even Irish stuff I\'m so desperate!! (Australian or Balkan preferred.), Last helped organise festivals in the 1990s with Joan Chenery. I know what festivals are like including mud & crappy toilets that fill up... yuck! Keeping people clean & hygienic is a very high priority., Attended & performed at Palm Creek Festival in 2013 &2014 where the toilet problem was chronic but it\'s such a great small festival., Last performed at the National in 2004. Last performed at Maleny in 2005., Like small festivals where you can talk to people and participate. Never volunteered at Woodford., Helped organise Maleny National in 1988? or was it 89? when it was still a small festival.',
			'discovery' => 'Joan Chenery dobbed me in.',
			'id_orig' => 2412, 'key_orig' => 'oilmt', 'ip' => '120.155.158.108',
			'created_orig' => '2016-06-18 19:00:17', 'updated_orig' => '2016-06-18 19:00:17',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 153, 'givenName' => 'Po Me', 'familyName' => 'Kwong', 'preferredName' => 'Pomei (Paul May)',
			'email' => 'pomei2888@gmail.com', 'phone1' => '07 5435 0288', 'phone2' => '',
			'address1' => 'Lot 38 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Silvia Chan', 'emergencyPhone1' => '0408 781 304', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'MC (did last year at the Platypus - pls refer to John)',
			'availability' => 'All weekend of the festival',
			'commentsInfo' => 'Big Gratitude for everyone involved',
			'discovery' => 'Love',
			'id_orig' => 2421, 'key_orig' => '5anzl', 'ip' => '121.222.250.177',
			'created_orig' => '2016-06-19 21:35:47', 'updated_orig' => '2016-06-19 21:35:47',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 209, 'givenName' => 'Marilyn', 'familyName' => 'Marsh-Booth', 'preferredName' => 'Miss M',
			'email' => 'mazza.727@hotmail.com', 'phone1' => '0419 654 227', 'phone2' => '',
			'address1' => '20 Bilenda Cl', 'address2' => null,
			'locality' => 'Beerwah', 'state' => 'Qld', 'postcode' => '4519', 'country' => 'Australia',
			'emergencyContact' => 'Pat Comerford', 'emergencyPhone1' => '0411 835 579', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Set up, Cleaning, MC, Gates, Shop Vollie tent Bump out',
			'availability' => 'All the times',
			'commentsInfo' => 'I have volunteered at The Cairns Festival, many events in Cairns. I have run events and workshops in Cairns and also presented at conferences., Worked for Sydney Ferries in Customer service, crowd control and cashier roles., And I\'m very outgoing1',
			'discovery' => 'Through my friends in Maleny',
			'id_orig' => 2430, 'key_orig' => '78trb', 'ip' => '120.146.191.252',
			'created_orig' => '2016-06-21 12:14:58', 'updated_orig' => '2016-06-21 12:14:58',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 210, 'givenName' => 'Robert', 'familyName' => 'Wilson', 'preferredName' => 'Bob',
			'email' => 'bobwords@ozemail.com.au', 'phone1' => '0438 525 119', 'phone2' => '07 5435 2333',
			'address1' => '34 Palm St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Laurel Wilson', 'emergencyPhone1' => '0418 187 104', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'MC',
			'availability' => 'All times except when Tapestry performs',
			'commentsInfo' => null,
			'discovery' => 'Direct approach from John Wright',
			'id_orig' => 2435, 'key_orig' => 'ly08d', 'ip' => '106.69.106.213',
			'created_orig' => '2016-06-21 16:14:33', 'updated_orig' => '2016-06-21 16:14:33',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 103, 'givenName' => 'Leigh', 'familyName' => 'Campbell', 'preferredName' => 'Leigh',
			'email' => 'le4igh.cam@hotmail.com', 'phone1' => '0413 755 850', 'phone2' => '',
			'address1' => 'PO Box 1493', 'address2' => null,
			'locality' => 'Mooloolaba', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Georgia Campbell', 'emergencyPhone1' => '0406 007 794', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Set up, stage management , gates',
			'availability' => 'All weekend',
			'commentsInfo' => 'Volunteer last year and enjoyed the experience',
			'discovery' => null,
			'id_orig' => 2437, 'key_orig' => 'ilm1u', 'ip' => '1.178.88.233',
			'created_orig' => '2016-06-22 16:30:40', 'updated_orig' => '2016-06-22 16:30:40',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 27, 'givenName' => 'Kelli', 'familyName' => 'Dendle', 'preferredName' => '',
			'email' => '', 'phone1' => '', 'phone2' => '',
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Stage MCing',
			'availability' => 'I am singing with Tapestry this year but don\'t know when our allocated timeslot is yet.',
			'commentsInfo' => 'I was appraoched by John Wright',
			'discovery' => null,
			'id_orig' => 2460, 'key_orig' => '9sp76', 'ip' => '121.223.3.73',
			'created_orig' => '2016-06-29 18:48:07', 'updated_orig' => '2016-06-29 18:48:07',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 31, 'givenName' => 'Valery', 'familyName' => 'France', 'preferredName' => 'Val',
			'email' => 'marleyfrance1707@gmail.com', 'phone1' => '0419 599 042', 'phone2' => '',
			'address1' => 'Lot 8 349 Balmoral Rd', 'address2' => null,
			'locality' => 'Montville', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Barbara Jones', 'emergencyPhone1' => '0439 660 458', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'I volunteered last year. I was on tickets at main gate and was asked by Brett to supervise my second shift. Brett has asked me to volunteer again this year in the same role but actually be a supervisor this year. If this position is available then this is what I would be happy doing. I would like to be teamed with Sheila Duncan please.',
			'availability' => 'Last year we worked early shift Saturday and Sunday mornings. These would suit again this year but would be happy doing a first shift on the Friday night if Sheila has also said she is available for that. Please let me know if the above is acceptable and if not what other positions you have in mind. Brett will no doubt back up my statement above. Thanks val',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2467, 'key_orig' => 'x0zfp', 'ip' => '1.121.140.104',
			'created_orig' => '2016-07-04 06:54:56', 'updated_orig' => '2016-07-04 06:54:56',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 211, 'givenName' => 'Brenda', 'familyName' => 'McGreevy', 'preferredName' => 'Brenda',
			'email' => 'todd.brenda@bigpond.com', 'phone1' => '', 'phone2' => '',
			'address1' => '3 Cedar Grove Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Shop early shift preferred, Bar Serving drinks- early shift preferred',
			'availability' => null,
			'commentsInfo' => null,
			'discovery' => 'locals',
			'id_orig' => 2468, 'key_orig' => 'ilrel', 'ip' => '165.228.160.22',
			'created_orig' => '2016-07-04 17:53:48', 'updated_orig' => '2016-07-04 17:53:48',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 31, 'givenName' => 'Valery', 'familyName' => 'France', 'preferredName' => 'Val',
			'email' => 'marleyfrance1707@gmail.com', 'phone1' => '0419 599 042', 'phone2' => '',
			'address1' => 'Lot 8 349 Balmoral Rd', 'address2' => null,
			'locality' => 'Montville', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Barbara Jones', 'emergencyPhone1' => '0439 660 458', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'I volunteered last year. I was on tickets at main gate and was asked by Brett to supervise my second shift. Brett has asked me to volunteer again this year in the same role but actually be a supervisor this year. If this position is available then this is what I would be happy doing. I would like to be teamed with Sheila Duncan please.',
			'availability' => 'Last year we worked early shift Saturday and Sunday mornings. These would suit again this year but would be happy doing a first shift on the Friday night if Sheila has also said she is available for that. Please let me know if the above is acceptable and if not what other positions you have in mind. Brett will no doubt back up my statement above. Thanks val',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2469, 'key_orig' => 'rmrad', 'ip' => '1.121.140.104',
			'created_orig' => '2016-07-04 19:51:27', 'updated_orig' => '2016-07-04 19:51:27',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 31, 'givenName' => 'Valery', 'familyName' => 'France', 'preferredName' => 'Val',
			'email' => 'marleyfrance1707@gmail.com', 'phone1' => '0419 599 042', 'phone2' => '',
			'address1' => 'Lot 8 349 Balmoral Rd', 'address2' => null,
			'locality' => 'Montville', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Barbara Jones', 'emergencyPhone1' => '0439 660 458', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'I volunteered last year. I was on tickets at main gate and was asked by Brett to supervise my second shift. Brett has asked me to volunteer again this year in the same role but actually be a supervisor this year. If this position is available then this is what I would be happy doing. I would like to be teamed with Sheila Duncan please.',
			'availability' => 'Last year we worked early shift Saturday and Sunday mornings. These would suit again this year but would be happy doing a first shift on the Friday night if Sheila has also said she is available for that. Please let me know if the above is acceptable and if not what other positions you have in mind. Brett will no doubt back up my statement above. Thanks val',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2471, 'key_orig' => 'ju7pt', 'ip' => '1.121.140.104',
			'created_orig' => '2016-07-05 08:36:01', 'updated_orig' => '2016-07-05 08:36:01',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 212, 'givenName' => 'Sue-Ellen', 'familyName' => 'Stenning', 'preferredName' => 'Sue',
			'email' => 'suesten@gmail.com', 'phone1' => '0428 215 816', 'phone2' => '',
			'address1' => 'PO Box 609', 'address2' => null,
			'locality' => 'Mullumbimby', 'state' => 'NSW', 'postcode' => '2482', 'country' => 'Australia',
			'emergencyContact' => 'Henry Stenning', 'emergencyPhone1' => '0411 456 331', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Shop, Volunteer hospitality., I would like to work with or at the same time as Jenny Perentau (who is MCing)',
			'availability' => 'Whenever Jenny Perentau is working, as I\'m travelling with her.',
			'commentsInfo' => 'I am a performer, singer/songwriter, and occasional ukulele teacher. Our group won the blackboard comp last year. We should probably have put in an application to perform. If you have any vacant slots we could do a mini-Ukeloveys of original songs, accompanied by guitar & ukulele & possibly bassoon.',
			'discovery' => 'Friend Jenny Perentau is a volunteer. I attended the festival last year, and had several friends playing in it.',
			'id_orig' => 2477, 'key_orig' => 'i50dg', 'ip' => '110.146.186.109',
			'created_orig' => '2016-07-07 12:03:15', 'updated_orig' => '2016-07-07 12:03:15',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 213, 'givenName' => 'Fiona', 'familyName' => 'Taylor', 'preferredName' => 'Fee',
			'email' => 'ftay5096@gmail.com', 'phone1' => '0421 464 160', 'phone2' => '',
			'address1' => '38 Parfrey Rd', 'address2' => null,
			'locality' => 'Rochedale', 'state' => 'Qld', 'postcode' => '4123', 'country' => 'Australia',
			'emergencyContact' => 'Rob Taylor', 'emergencyPhone1' => '0427 557 050', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Gates, shop, bar security, volunteer hospitality',
			'availability' => 'Available from sat am to sunday pm only...sorry',
			'commentsInfo' => null,
			'discovery' => 'Friend of Sheila Duncan',
			'id_orig' => 2478, 'key_orig' => 'waao5', 'ip' => '101.165.234.102',
			'created_orig' => '2016-07-07 12:24:52', 'updated_orig' => '2016-07-07 12:24:52',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 73, 'givenName' => 'Jennifer', 'familyName' => 'Parenteau', 'preferredName' => 'Jenny',
			'email' => 'jennyparenteau@gmail.com', 'phone1' => '0403 646 899', 'phone2' => '',
			'address1' => '28A Hardy Ave', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => 'Mary', 'emergencyPhone1' => '0417 605 655', 'emergencyPhone2' => '0403 646 899',
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'M/C or anything you need!',
			'availability' => 'I will be there the whole weekend on site',
			'commentsInfo' => '28A Hardy Ave',
			'discovery' => null,
			'id_orig' => 2479, 'key_orig' => 'mrfeo', 'ip' => '139.218.24.221',
			'created_orig' => '2016-07-07 18:01:19', 'updated_orig' => '2016-07-07 18:01:19',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 91, 'givenName' => 'Barry', 'familyName' => 'Munyard', 'preferredName' => '',
			'email' => 'barrym53@gmail.com', 'phone1' => '0447 130 453', 'phone2' => '',
			'address1' => '18 Gardenvale St', 'address2' => null,
			'locality' => 'Holland Park West', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0447 130 453', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Last year I did parking I am happy to do that again',
			'availability' => 'friday thru sunday',
			'commentsInfo' => '18 gardenvale st',
			'discovery' => null,
			'id_orig' => 2480, 'key_orig' => 'bki84', 'ip' => '115.30.41.70',
			'created_orig' => '2016-07-07 20:32:20', 'updated_orig' => '2016-07-07 20:32:20',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 25, 'givenName' => 'Sheryll', 'familyName' => 'Wright', 'preferredName' => 'Shez',
			'email' => 'shezoffice@gmail.com', 'phone1' => '0407 964 948', 'phone2' => '',
			'address1' => '407 Cedar Creek Rd', 'address2' => null,
			'locality' => 'Cedar Creek', 'state' => 'Qld', 'postcode' => '4520', 'country' => 'Australia',
			'emergencyContact' => 'Laurie Kelly', 'emergencyPhone1' => '0414 671 990', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'MC',
			'availability' => 'prefer to do the whole shift in one hit if possible, but will work with you.',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2486, 'key_orig' => 'pwyym', 'ip' => '110.23.113.247',
			'created_orig' => '2016-07-10 20:42:59', 'updated_orig' => '2016-07-10 20:42:59',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 224, 'givenName' => 'Linda', 'familyName' => 'Scharf', 'preferredName' => 'Linda',
			'email' => 'pdscharf@yahoo.com.au', 'phone1' => '0429 654 033', 'phone2' => '',
			'address1' => '9 Meagan St', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Peter Scharf', 'emergencyPhone1' => '0428 562 615', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Set up Thursday only, Shop, Bump out Monday morning, Gate',
			'availability' => 'All day Friday., Any time over the week-end., Monday morning.',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2489, 'key_orig' => 'g119z', 'ip' => '1.132.97.102',
			'created_orig' => '2016-07-11 07:53:58', 'updated_orig' => '2016-07-11 07:53:58',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 214, 'givenName' => 'Ann', 'familyName' => 'Bermingham', 'preferredName' => '',
			'email' => 'marieb@gil.com.au', 'phone1' => '0401 683 830', 'phone2' => '07 3371 6507',
			'address1' => '4/50 Swann Rd', 'address2' => null,
			'locality' => 'Taringa', 'state' => 'Qld', 'postcode' => '4068', 'country' => 'Australia',
			'emergencyContact' => 'Marie Bermingham', 'emergencyPhone1' => '0400 650 789', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Instrument lockup, Shop',
			'availability' => 'Sunday only.',
			'commentsInfo' => 'I am a regular volunteer stage manager at the Folklorica Stage at Woodford, and have also done past volunteering as an MC, Bar worker, and instrument lockup.',
			'discovery' => 'Multiple ways',
			'id_orig' => 2507, 'key_orig' => 'yo0lv', 'ip' => '59.101.10.197',
			'created_orig' => '2016-07-14 13:23:55', 'updated_orig' => '2016-07-14 13:23:55',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 215, 'givenName' => 'Asta', 'familyName' => 'Joli', 'preferredName' => 'Asta',
			'email' => 'joliasta@hotmail.com', 'phone1' => '0421 191 840', 'phone2' => '',
			'address1' => '741 Eastern Mary River Rd', 'address2' => null,
			'locality' => 'Cambroon', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jenny Evans', 'emergencyPhone1' => '0499 575 062', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Glenn ... dacor',
			'availability' => 'Anytime',
			'commentsInfo' => null,
			'discovery' => 'Through going there meeting other volunteers',
			'id_orig' => 2509, 'key_orig' => 'pzp6', 'ip' => '1.132.96.19',
			'created_orig' => '2016-07-15 19:04:13', 'updated_orig' => '2016-07-15 19:04:13',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 216, 'givenName' => 'Jennifer', 'familyName' => 'Evans', 'preferredName' => 'Jen',
			'email' => 'fugliez78@icloud.com', 'phone1' => '0499 575 062', 'phone2' => '',
			'address1' => '1525 Maleny Kenilworth Rd', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Asta Joli', 'emergencyPhone1' => '0421 191 840', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set up, Glenn daycor',
			'availability' => 'Any time',
			'commentsInfo' => null,
			'discovery' => 'Friend',
			'id_orig' => 2510, 'key_orig' => 'et2fe', 'ip' => '59.101.145.207',
			'created_orig' => '2016-07-15 19:06:43', 'updated_orig' => '2016-07-15 19:06:43',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 344, 'givenName' => 'Deb', 'familyName' => 'Ryan', 'preferredName' => 'Ryno & Deb',
			'email' => 'mickryan65@bigpond.com', 'phone1' => '0407 766 744', 'phone2' => '',
			'address1' => '26 Burns Rd', 'address2' => null,
			'locality' => 'Goomboorian', 'state' => 'Qld', 'postcode' => '4570', 'country' => 'Australia',
			'emergencyContact' => 'Becci Fowler', 'emergencyPhone1' => '0422 403 646', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set up,cleaning,bar security',
			'availability' => 'Any dates from Wed',
			'commentsInfo' => 'Is there space for 21 ft caravan., Love music',
			'discovery' => 'Radio',
			'id_orig' => 2516, 'key_orig' => 'z23qv', 'ip' => '1.132.96.110',
			'created_orig' => '2016-07-17 17:23:03', 'updated_orig' => '2016-07-17 17:23:03',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 217, 'givenName' => 'Judith (Jude)', 'familyName' => 'Venn', 'preferredName' => 'Jude',
			'email' => 'judith.venn@optusnet.com.au', 'phone1' => '0408 459 798', 'phone2' => '07 5445 9791',
			'address1' => '190 Lower Landershute Rd', 'address2' => null,
			'locality' => 'Landers Shoot', 'state' => 'Qld', 'postcode' => '4555', 'country' => 'Australia',
			'emergencyContact' => 'Stuart Venn', 'emergencyPhone1' => '0475 914 240', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Bar ticketing',
			'availability' => 'Friday Saturday',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2517, 'key_orig' => 'ubnwy', 'ip' => '49.197.43.124',
			'created_orig' => '2016-07-17 18:39:05', 'updated_orig' => '2016-07-17 18:39:05',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 218, 'givenName' => 'Stuart', 'familyName' => 'Venn', 'preferredName' => 'Stuey',
			'email' => 'stuartv1@optusnet.com.au', 'phone1' => '0475 914 240', 'phone2' => '07 5445 9791',
			'address1' => '190 Lower Landershute Rd', 'address2' => null,
			'locality' => 'Landers Shoot', 'state' => 'Qld', 'postcode' => '4555', 'country' => 'Australia',
			'emergencyContact' => 'Jude Venn', 'emergencyPhone1' => '0408 459 798', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Bar ticketing',
			'availability' => 'Friday Saturday',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2518, 'key_orig' => '8hgaz', 'ip' => '49.197.43.124',
			'created_orig' => '2016-07-17 18:43:31', 'updated_orig' => '2016-07-17 18:43:31',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 219, 'givenName' => 'Margaret', 'familyName' => 'O\'Connell', 'preferredName' => 'Margi',
			'email' => 'ocohood@gmail.com', 'phone1' => '0468 381 212', 'phone2' => '07 5494 4742',
			'address1' => '1725 Maleny Kenilworth Rd', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Christie O\'Connell', 'emergencyPhone1' => '07 5494 4742', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Volunteer Hospitality, Bars, Cleaning, gates,',
			'availability' => 'Saturday, Saturday night, Sunday, post-festival - not Friday',
			'commentsInfo' => 'Don\'t like handling money or computer work. Like to be part of a team.',
			'discovery' => 'Local. Haven\'t been around in the past - usually travelling. Love volunteering. Used to do it at the Maleny Folk Festival before it went to Woodford.',
			'id_orig' => 2519, 'key_orig' => 'ydpd8', 'ip' => '101.165.230.237',
			'created_orig' => '2016-07-17 19:04:07', 'updated_orig' => '2016-07-17 19:04:07',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 140, 'givenName' => 'Steven', 'familyName' => 'Novak', 'preferredName' => 'Steve',
			'email' => 'snovak@raq.org.au', 'phone1' => '0431 925 771', 'phone2' => '',
			'address1' => '11 Davis St', 'address2' => null,
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Eileen Gilbert', 'emergencyPhone1' => '0413 223 090', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => null,
			'commentsInfo' => 'Already arranged to stage manage (John Wright organised this)',
			'discovery' => null,
			'id_orig' => 2520, 'key_orig' => 'yc93o', 'ip' => '180.214.92.158',
			'created_orig' => '2016-07-18 11:12:33', 'updated_orig' => '2016-07-18 11:12:33',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 125, 'givenName' => 'Sonja', 'familyName' => 'Andrey', 'preferredName' => '',
			'email' => 'annicha09@gmail.com', 'phone1' => '0433 804 389', 'phone2' => '',
			'address1' => 'Lot 25 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Rob Morrell', 'emergencyPhone1' => '07 5435 0142', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Already rostered for Boobook Sat and Sun as stage manager',
			'availability' => 'Sat and Sun as rostered',
			'commentsInfo' => null,
			'discovery' => 'Returning vollie',
			'id_orig' => 2522, 'key_orig' => 'y21ol', 'ip' => '1.132.97.76',
			'created_orig' => '2016-07-18 14:49:35', 'updated_orig' => '2016-07-18 14:49:35',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 220, 'givenName' => 'Caroline', 'familyName' => 'Hammond', 'preferredName' => 'Lina',
			'email' => 'lina.hammond@lizz.com.au', 'phone1' => '0418 794 475', 'phone2' => '07 3366 8867',
			'address1' => 'Unit 10/46 Dalmore St', 'address2' => null,
			'locality' => 'Ashgrove', 'state' => 'Qld', 'postcode' => '4060', 'country' => 'Australia',
			'emergencyContact' => 'Craig Claxton', 'emergencyPhone1' => '0434 951 307', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'MC, stage managing',
			'availability' => 'Available festival',
			'commentsInfo' => 'Recommended by John Wright',
			'discovery' => 'Angela Toohey, friend, performer',
			'id_orig' => 2523, 'key_orig' => 'ehs8t', 'ip' => '202.173.194.72',
			'created_orig' => '2016-07-18 18:25:22', 'updated_orig' => '2016-07-18 18:25:22',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 221, 'givenName' => 'Sharon', 'familyName' => 'Jackson', 'preferredName' => 'Shaz',
			'email' => 'kprfc69@optusnet.com.au', 'phone1' => '0403 935 739', 'phone2' => '',
			'address1' => '69 Norman St', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => 'Jon Whitehead', 'emergencyPhone1' => '0432 122 155', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Volunteer hospitality',
			'availability' => 'sunday',
			'commentsInfo' => null,
			'discovery' => 'Maree Robertson',
			'id_orig' => 2524, 'key_orig' => '6jd1p', 'ip' => '110.23.1.108',
			'created_orig' => '2016-07-19 04:48:04', 'updated_orig' => '2016-07-19 04:48:04',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 222, 'givenName' => 'Cheryl', 'familyName' => 'Laurent', 'preferredName' => 'Cheryl',
			'email' => 'cheryll.62@hotmail.com', 'phone1' => '0422 577 392', 'phone2' => '',
			'address1' => '216 Douglas Rd', 'address2' => null,
			'locality' => 'Salisbury', 'state' => 'Qld', 'postcode' => '4107', 'country' => 'Australia',
			'emergencyContact' => 'Rob Stewart', 'emergencyPhone1' => '0431 200 123', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'I have been ask to do Stage Manager Friday evening., Happy to help out anywhere needed over the weekend.',
			'availability' => '4 hrs Friday evening Confirmed., Not Saturday morning , Other times if needed.',
			'commentsInfo' => 'If you are short of an MC I\'m sure Rob Stewart or Tony Mockeridge (3 Miles from Texas) would be happy to help out.',
			'discovery' => 'On the application/ website',
			'id_orig' => 2525, 'key_orig' => 'ztr9y', 'ip' => '101.184.46.39',
			'created_orig' => '2016-07-19 08:16:37', 'updated_orig' => '2016-07-19 08:16:37',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 223, 'givenName' => 'Andrew', 'familyName' => 'Metcalfe', 'preferredName' => '',
			'email' => 'andymet@gmail.com', 'phone1' => '0447 040 604', 'phone2' => '',
			'address1' => '85 Carter Rd', 'address2' => null,
			'locality' => 'Nambour', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Stage Manager',
			'availability' => 'Whenever',
			'commentsInfo' => 'its cool',
			'discovery' => 'Friends in low places',
			'id_orig' => 2526, 'key_orig' => 'f0lg4', 'ip' => '120.22.144.170',
			'created_orig' => '2016-07-19 16:56:11', 'updated_orig' => '2016-07-19 16:56:11',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 16, 'givenName' => 'Gaby', 'familyName' => 'Luft', 'preferredName' => 'Gaby',
			'email' => 'gabyluft@hotmail.com', 'phone1' => '0434 039 452', 'phone2' => '',
			'address1' => '21 Tamarind St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Koa Wilmott', 'emergencyPhone1' => '0427 608 848', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'volunteer hospitality',
			'availability' => 'Friday -sunday',
			'commentsInfo' => 'i am a local',
			'discovery' => null,
			'id_orig' => 2532, 'key_orig' => 'm78nb', 'ip' => '165.228.12.246',
			'created_orig' => '2016-07-21 12:58:50', 'updated_orig' => '2016-07-21 12:58:50',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 206, 'givenName' => 'Kim', 'familyName' => 'Hinckfuss', 'preferredName' => '',
			'email' => 'k.hinckfuss@gmail.com', 'phone1' => '0424 229 020', 'phone2' => '07 5435 8139',
			'address1' => '', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'SET UP',
			'availability' => null,
			'commentsInfo' => 'Hi Marie, , Please find 2 names and contact details of potential volunteers for the weekend who expressed interest last nite at the Launch. I tried to find you for them to talk directly but you may have already gone by then., , Kim Hinckfuss - k.hinckfuss@gmail.com - 0424 229 020 - Kim would like to help with fencing and set up, Linda Scharf - pdscharf@yahoo.com - 0429 654 033, , I advised you would be in contact. I will also pop this info thru to you on facebook (Brett has given me details), , Many thanks, Lisa Reye, MMWF Treasurer, 0402 455 312',
			'discovery' => null,
			'id_orig' => 2536, 'key_orig' => 'rkfrm', 'ip' => '123.211.194.176',
			'created_orig' => '2016-07-22 11:20:28', 'updated_orig' => '2016-07-22 11:20:28',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 224, 'givenName' => 'Linda', 'familyName' => 'Scharf', 'preferredName' => '',
			'email' => 'pdscharf@yahoo.com', 'phone1' => '0429 654 033', 'phone2' => '',
			'address1' => '', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => null,
			'commentsInfo' => 'Hi Marie, , Please find 2 names and contact details of potential volunteers for the weekend who expressed interest last nite at the Launch. I tried to find you for them to talk directly but you may have already gone by then., , Kim Hinckfuss - k.hinckfuss@gmail.com - 0424 229 020 - Kim would like to help with fencing and set up, Linda Scharf - pdscharf@yahoo.com - 0429 654 033, , I advised you would be in contact. I will also pop this info thru to you on facebook (Brett has given me details), , Many thanks, Lisa Reye, MMWF Treasurer, 0402 455 312',
			'discovery' => null,
			'id_orig' => 2537, 'key_orig' => 'ohorw', 'ip' => '123.211.194.176',
			'created_orig' => '2016-07-22 11:22:22', 'updated_orig' => '2016-07-22 11:22:22',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 225, 'givenName' => 'Jane', 'familyName' => 'Brouet', 'preferredName' => 'Jane',
			'email' => 'janebrouet@westnet.com.au', 'phone1' => '0488 942 553', 'phone2' => '07 5494 4787',
			'address1' => 'Lot 62 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jodie Lyn Brown', 'emergencyPhone1' => '0413 330 406', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Hi, I have spoken to Becky Wandell, children\'s venue organiser and she is keen to have me work with her at the children\'s area.',
			'availability' => 'Only not available when Tapestry and Sweet Chilli choirs are performing!',
			'commentsInfo' => 'Work every year with Becky at the Woodford Children\'s Festival., Stage managed for John Wright previously at Maleny Music Festival., Hold a current Blue Card, for working with Children.',
			'discovery' => null,
			'id_orig' => 2543, 'key_orig' => '5xjqw', 'ip' => '58.7.235.4',
			'created_orig' => '2016-07-23 18:29:54', 'updated_orig' => '2016-07-23 18:29:54',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 198, 'givenName' => 'Gillian Tracy', 'familyName' => 'Lewis', 'preferredName' => 'Tracy',
			'email' => 'tracyleeis007@live.com', 'phone1' => '0476 961 932', 'phone2' => '',
			'address1' => '10/4 Meadow Lane', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Art set up',
			'availability' => 'Any',
			'commentsInfo' => 'Did gate entrance with Jan Freyee previous two years, Experience with large installations/ sculptures ... Woodford art set up team .. 4 yrs , Art teacher @river school .. 11yrs, References Brett Campbell, steve MacLeish',
			'discovery' => null,
			'id_orig' => 2545, 'key_orig' => 'k28yg', 'ip' => '1.132.96.148',
			'created_orig' => '2016-07-25 07:34:11', 'updated_orig' => '2016-07-25 07:34:11',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 203, 'givenName' => 'Lynda', 'familyName' => 'Rush', 'preferredName' => '',
			'email' => 'lynda.rush@bigpond.com', 'phone1' => '0427 700 138', 'phone2' => '',
			'address1' => '28 Coral St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Skye Rush', 'emergencyPhone1' => '0477 278 921', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bars, set up, cleaning, bar security, bump out, oh anything really',
			'availability' => 'Available after 11am Saturday and Sunday, but available all other times',
			'commentsInfo' => 'Volunteered at 7 Caloundra music festivals but have moved to Maleny this year. Have done VIP bars, but will do anything. I also volunteer at the Events Centre, Maleny Neighbourhood Centre,',
			'discovery' => 'The Hillbilly Goats told me about it in March.',
			'id_orig' => 2547, 'key_orig' => '1ik8u', 'ip' => '123.211.85.207',
			'created_orig' => '2016-07-26 08:03:40', 'updated_orig' => '2016-07-26 08:03:40',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 226, 'givenName' => 'Patricia', 'familyName' => 'Jeffery', 'preferredName' => 'Trish',
			'email' => 'pjef2060@gmail.com', 'phone1' => '0401 182 213', 'phone2' => '',
			'address1' => 'C/- 9 Pinewood St', 'address2' => null,
			'locality' => 'Little Mountain', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Morgan Jeffery', 'emergencyPhone1' => '0403 458 559', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Available for set up from Wednesday if needed, Gates, Bump Out',
			'availability' => 'Available from Wednesday to Tuesday',
			'commentsInfo' => '3 times Gate experience at Woodford, Market stall owner at Eumundi and others so heaps of experience in that field',
			'discovery' => 'Picked up a card advertising the festival.',
			'id_orig' => 2548, 'key_orig' => 'f688d', 'ip' => '1.132.96.53',
			'created_orig' => '2016-07-26 11:51:30', 'updated_orig' => '2016-07-26 11:51:30',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 227, 'givenName' => 'Kevin', 'familyName' => 'Edwards', 'preferredName' => '',
			'email' => 'kepaint07@gmail.com', 'phone1' => '0491 841 77?', 'phone2' => '',
			'address1' => '7 Tamarind St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Anything.',
			'availability' => null,
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2550, 'key_orig' => 'kp67q', 'ip' => '123.211.194.176',
			'created_orig' => '2016-07-26 18:26:22', 'updated_orig' => '2016-07-26 18:26:22',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 228, 'givenName' => 'Daniel', 'familyName' => 'Peterson', 'preferredName' => 'Dan',
			'email' => 'aumrah.donash@gmail.com', 'phone1' => '0498 055 440', 'phone2' => '',
			'address1' => '1181 Landsborough-Maleny Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Lisa Marie Fletcher', 'emergencyPhone1' => '0476 511 391', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'set up/ site deco...bar security...rover....',
			'availability' => 'pending work...week leading up to festival if required.',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2552, 'key_orig' => 'pyzqs', 'ip' => '117.120.16.139',
			'created_orig' => '2016-07-27 14:56:23', 'updated_orig' => '2016-07-27 14:56:23',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 68, 'givenName' => 'Daniel', 'familyName' => 'Ragless', 'preferredName' => 'Danny',
			'email' => 'dp.ragless@gmail.com', 'phone1' => '0447 120 013', 'phone2' => '07 3272 7108',
			'address1' => '7 Bidder St', 'address2' => null,
			'locality' => 'Salisbury', 'state' => 'Qld', 'postcode' => '4107', 'country' => 'Australia',
			'emergencyContact' => 'Rochelle Ragless', 'emergencyPhone1' => '0423 882 389', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'bars',
			'availability' => 'Saturday, Sunday',
			'commentsInfo' => 'My wife Rochelle has also applied to volunteer, if we could be rostered on at the same times, that would be sweet. We\'ve been in contact with Joan, she is already sorting times for us and she will be in contact.',
			'discovery' => 'Facebook',
			'id_orig' => 2554, 'key_orig' => 's5gng', 'ip' => '121.208.88.223',
			'created_orig' => '2016-07-27 21:43:46', 'updated_orig' => '2016-07-27 21:43:46',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 67, 'givenName' => 'Rochelle', 'familyName' => 'Ragless', 'preferredName' => 'Shell',
			'email' => 'rl.weston89@gmail.com', 'phone1' => '0423 882 389', 'phone2' => '07 3272 7108',
			'address1' => '7 Bidder St', 'address2' => null,
			'locality' => 'Salisbury', 'state' => 'Qld', 'postcode' => '4107', 'country' => 'Australia',
			'emergencyContact' => 'Danny Ragless', 'emergencyPhone1' => '0447 120 013', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'bars',
			'availability' => 'Saturday, Sunday',
			'commentsInfo' => 'My husband Danny has also applied to volunteer, if we could be rostered on at the same times, that would be sweet. We\'ve been in contact with Joan, she is already sorting times for us and she will be in contact.',
			'discovery' => 'Facebook',
			'id_orig' => 2555, 'key_orig' => 'xd1la', 'ip' => '121.208.88.223',
			'created_orig' => '2016-07-27 21:46:17', 'updated_orig' => '2016-07-27 21:46:17',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 72, 'givenName' => 'Andrew', 'familyName' => 'Makin', 'preferredName' => 'Andy',
			'email' => 'andylivesinoz@gmail.com', 'phone1' => '0490 366 148', 'phone2' => '',
			'address1' => '5 Prince St', 'address2' => null,
			'locality' => 'Dinmore', 'state' => 'Qld', 'postcode' => '4303', 'country' => 'Australia',
			'emergencyContact' => 'James Makin', 'emergencyPhone1' => '0457 329 343', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Stage Management',
			'availability' => 'Thurs to Sunday (approx 1pm as I have gig in Ipswich Sunday 5pm)',
			'commentsInfo' => 'I lost my drivers license but my friend Wes McLaverty can drive me and he is a new application volunteer or else will become a paying patron',
			'discovery' => null,
			'id_orig' => 2557, 'key_orig' => 'fk8tx', 'ip' => '182.239.174.163',
			'created_orig' => '2016-07-28 20:42:16', 'updated_orig' => '2016-07-28 20:42:16',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 229, 'givenName' => 'John', 'familyName' => 'Woods', 'preferredName' => '',
			'email' => 'johndwoods@hotmail.com', 'phone1' => '0478 728 839', 'phone2' => '',
			'address1' => '168 Macdonnell Rd', 'address2' => null,
			'locality' => 'Eagle Heights', 'state' => 'Qld', 'postcode' => '4271', 'country' => 'Australia',
			'emergencyContact' => 'Ken Woods', 'emergencyPhone1' => '0417 726 789', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Experienced muso, tour manager, great experience in sound etc, so stage manager is perfect fit. Also have LR license, so can drive coaster etc, and have a lot of driving experience. Was part of the main stage film crew at the 2104 Gympie Music muster, doing video switching, helping other crew, trouble shooting, looking after logistics. Have a lot of experience in risk management in activities and the workplace.',
			'availability' => 'Friday morning through to Sunday night all OK.',
			'commentsInfo' => 'Would need access to power at night while sleeping, but if not available, then I can work around it.',
			'discovery' => 'Other muso friend and on facebook',
			'id_orig' => 2558, 'key_orig' => 'rfk97', 'ip' => '49.197.108.121',
			'created_orig' => '2016-07-28 20:48:23', 'updated_orig' => '2016-07-28 20:48:23',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 230, 'givenName' => 'Zondrya', 'familyName' => 'Vyncent', 'preferredName' => 'Zondrya',
			'email' => 'perpetualstars1@gmail.com', 'phone1' => '0408 788 873', 'phone2' => '',
			'address1' => '251 Bridge Creek Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Julie Stout', 'emergencyPhone1' => '0429 396 963', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Worked in central operations at Woodford folk festival 2015., , Areas of Interest are customer service, gates, shop. People orientated.',
			'availability' => 'Anytime.',
			'commentsInfo' => 'Gentle natured, charismatic, excellent organisational skills, calm under pressure, friendly, flexible.',
			'discovery' => 'Friend volunteered last year, I moved to Maleny this month, keen to contribute and nourish community.',
			'id_orig' => 2559, 'key_orig' => 'ul6mq', 'ip' => '49.197.15.80',
			'created_orig' => '2016-07-28 22:22:47', 'updated_orig' => '2016-07-28 22:22:47',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 10, 'givenName' => 'Natalie', 'familyName' => 'Brown', 'preferredName' => 'Natty',
			'email' => 'ireallylovethose@gmail.com', 'phone1' => '0467 958 057', 'phone2' => '',
			'address1' => '1/24 Cedar Grove Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Eileen Brown', 'emergencyPhone1' => '0439 413 480', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Decor/Bamboo with Glenn.',
			'availability' => null,
			'commentsInfo' => 'I have already organised to work on the bamboo and decor with Glenn again.',
			'discovery' => null,
			'id_orig' => 2566, 'key_orig' => 'wy4tv', 'ip' => '58.7.214.214',
			'created_orig' => '2016-07-29 18:29:34', 'updated_orig' => '2016-07-29 18:29:34',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 231, 'givenName' => 'Sarah', 'familyName' => 'Calderwood', 'preferredName' => '',
			'email' => 'redcrowband@icloud.com', 'phone1' => '0417 633 212', 'phone2' => '',
			'address1' => '1/5 Norwood St', 'address2' => null,
			'locality' => 'Toowong', 'state' => 'Qld', 'postcode' => '4066', 'country' => 'Australia',
			'emergencyContact' => 'Paul Branodon', 'emergencyPhone1' => '0411 145 313', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'MC - have been confirmed by John Wright',
			'availability' => 'Saturday 27 August on the Platypus Stage from 9:40am - 1:40pm',
			'commentsInfo' => 'I am also performing at the festival with my band RedCrow on the Bunya Stage on Saturday 27 Aug from 3:30pm',
			'discovery' => 'Performer artist application. Of course I said yes :) This is my first time MC-ing!',
			'id_orig' => 2568, 'key_orig' => 'uxsu9', 'ip' => '110.174.192.203',
			'created_orig' => '2016-07-30 14:08:21', 'updated_orig' => '2016-07-30 14:08:21',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 232, 'givenName' => 'Lorraine', 'familyName' => 'Dennis', 'preferredName' => 'Rainee',
			'email' => 'raineedennis.12@hotmail.com', 'phone1' => '0475 000 353', 'phone2' => '',
			'address1' => '6 Macadamia Dr', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Hospitality. Bar security checking tickets . Gates tickets parking ,',
			'availability' => 'Not sunday',
			'commentsInfo' => null,
			'discovery' => 'Facebook',
			'id_orig' => 2573, 'key_orig' => '8vh67', 'ip' => '101.184.245.32',
			'created_orig' => '2016-08-01 00:28:28', 'updated_orig' => '2016-08-01 00:28:28',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 233, 'givenName' => 'Marianne', 'familyName' => 'Voss', 'preferredName' => 'Maz',
			'email' => 'mazziistarr@gmail.com', 'phone1' => '0417 163 004', 'phone2' => '',
			'address1' => '38 Redwood Ave', 'address2' => null,
			'locality' => 'Marcus Beach', 'state' => 'Qld', 'postcode' => '4573', 'country' => 'Australia',
			'emergencyContact' => 'Sally-Ann Keating', 'emergencyPhone1' => '0400 054 413', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bar, ticketing, shop, gates',
			'availability' => 'Available friday evening after 5pm, all day saturday and all day sunday. I work monday to friday during business hrs so will only be avaialble outside that time',
			'commentsInfo' => 'Have volunteered at Roc Race on the sunshine coast in March & worked bar at music festivals in Melbourne',
			'discovery' => 'Facebook',
			'id_orig' => 2574, 'key_orig' => '6h1qt', 'ip' => '49.199.193.27',
			'created_orig' => '2016-08-01 12:16:42', 'updated_orig' => '2016-08-01 12:16:42',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 234, 'givenName' => 'Trang', 'familyName' => 'Pham', 'preferredName' => 'Naveen',
			'email' => 'trangpham.wf@gmail.com', 'phone1' => '0481 713 332', 'phone2' => '',
			'address1' => '53 Valmar St', 'address2' => null,
			'locality' => 'Uppper Mount Gravatt', 'state' => 'Qld', 'postcode' => '4122', 'country' => 'Australia',
			'emergencyContact' => 'Anh Pham', 'emergencyPhone1' => '0410 047 339', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Shop',
			'availability' => 'I cant join on Friday',
			'commentsInfo' => null,
			'discovery' => 'Facebook',
			'id_orig' => 2575, 'key_orig' => 'ph2w5', 'ip' => '137.219.253.53',
			'created_orig' => '2016-08-01 13:45:41', 'updated_orig' => '2016-08-01 13:45:41',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 234, 'givenName' => 'Trang', 'familyName' => 'Pham', 'preferredName' => 'Naveen',
			'email' => 'trangpham.wf@gmail.com', 'phone1' => '0481 713 332', 'phone2' => '',
			'address1' => '53 Valmar St', 'address2' => null,
			'locality' => 'Uppper Mount Gravatt', 'state' => 'Qld', 'postcode' => '4122', 'country' => 'Australia',
			'emergencyContact' => 'Anh Pham', 'emergencyPhone1' => '0410 047 339', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Shop',
			'availability' => 'I cant join on Friday',
			'commentsInfo' => null,
			'discovery' => 'Facebook',
			'id_orig' => 2576, 'key_orig' => 'ywfqk', 'ip' => '137.219.253.53',
			'created_orig' => '2016-08-01 13:45:46', 'updated_orig' => '2016-08-01 13:45:46',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 235, 'givenName' => 'Christine', 'familyName' => 'Radcliffe', 'preferredName' => 'Christine',
			'email' => 'christineradcliffe@yahoo.com', 'phone1' => '0411 414 294', 'phone2' => '07 5446 3416',
			'address1' => '25 Seagull Ave', 'address2' => null,
			'locality' => 'Coolum Beach', 'state' => 'Qld', 'postcode' => '4573', 'country' => 'Australia',
			'emergencyContact' => 'Bruce McKendry', 'emergencyPhone1' => '0401 792 812', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Gates, shop, Volunteer Hospitality (preferred). Previous hospitality and tourism experience.',
			'availability' => 'Fri, Sat, Sun.',
			'commentsInfo' => 'I have a lot of experience dealing with people in tourism and know the local area well. Have also had a lot of retail and telephone experience. Have a first aid certificate and police clearance. Would prefer not to do set up and pack up of equipment.',
			'discovery' => 'Meet up group',
			'id_orig' => 2577, 'key_orig' => 'gfsq2', 'ip' => '101.184.210.224',
			'created_orig' => '2016-08-01 14:02:00', 'updated_orig' => '2016-08-01 14:02:00',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 235, 'givenName' => 'Christine', 'familyName' => 'Radcliffe', 'preferredName' => 'Christine',
			'email' => 'christineradcliffe@yahoo.com', 'phone1' => '0411 414 294', 'phone2' => '07 5446 3416',
			'address1' => '25 Seagull Ave', 'address2' => null,
			'locality' => 'Coolum Beach', 'state' => 'Qld', 'postcode' => '4573', 'country' => 'Australia',
			'emergencyContact' => 'Bruce McKendry', 'emergencyPhone1' => '0401 792 812', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Gates, shop, Volunteer Hospitality (preferred). Previous hospitality and tourism experience.',
			'availability' => 'Fri, Sat, Sun.',
			'commentsInfo' => 'I have a lot of experience dealing with people in tourism and know the local area well. Have also had a lot of retail and telephone experience. Have a first aid certificate and police clearance. Would prefer not to do set up and pack up of equipment.',
			'discovery' => 'Meet up group',
			'id_orig' => 2578, 'key_orig' => '8y5oh', 'ip' => '101.184.210.224',
			'created_orig' => '2016-08-01 14:02:06', 'updated_orig' => '2016-08-01 14:02:06',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 198, 'givenName' => 'Gillian Tracy', 'familyName' => 'Lewis', 'preferredName' => 'Tracy',
			'email' => 'tracylewis007@live.com', 'phone1' => '0476 961 932', 'phone2' => '',
			'address1' => '10/4 Meadow Lane', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Steven Markham', 'emergencyPhone1' => '0417 638 636', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Art and DEcor',
			'availability' => 'no other commitments',
			'commentsInfo' => 'have worked on making front entrance with Jan Freeyee last 2 years., experience at woodford fest , 4 years on art and decor, good at installation sculpture, experienced art teacher , iiyrs at River School',
			'discovery' => null,
			'id_orig' => 2580, 'key_orig' => 'z1w53', 'ip' => '1.132.96.248',
			'created_orig' => '2016-08-01 14:34:56', 'updated_orig' => '2016-08-01 14:34:56',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 212, 'givenName' => 'Sue', 'familyName' => 'Stenning', 'preferredName' => 'Sue',
			'email' => 'suesten@gmail.com', 'phone1' => '0428 215 816', 'phone2' => '',
			'address1' => 'PO Box 609', 'address2' => null,
			'locality' => 'Mullumbimby', 'state' => 'NSW', 'postcode' => '2482', 'country' => 'Australia',
			'emergencyContact' => 'Henry Stenning', 'emergencyPhone1' => '0411 456 331', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Shop , hospitality, MC',
			'availability' => 'Anytime over the weekend. If possible i would like to work with Jenny Patentau',
			'commentsInfo' => 'Singer songwriter. I currently play with the Ukeloveys, a cabaret group from Mullumbimby',
			'discovery' => null,
			'id_orig' => 2581, 'key_orig' => 'mi1o1', 'ip' => '120.22.86.178',
			'created_orig' => '2016-08-01 16:36:54', 'updated_orig' => '2016-08-01 16:36:54',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 236, 'givenName' => 'Denise', 'familyName' => 'Chapple', 'preferredName' => 'Deni',
			'email' => 'awok@bigpond.com', 'phone1' => '0417 740 218', 'phone2' => '07 4170 0731',
			'address1' => 'PO Box 236', 'address2' => null,
			'locality' => 'Blackbutt', 'state' => 'Qld', 'postcode' => '4306', 'country' => 'Australia',
			'emergencyContact' => 'Michael Whiticker', 'emergencyPhone1' => '0419 026 895', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Shop, Volunteer hospitality, Bar security',
			'availability' => 'Friday 26th, Saturday 27th',
			'commentsInfo' => 'Smart and adaptable!',
			'discovery' => 'Leaflet and friend advice., Worked with Marie @ Joan Baez concert previously (had a great day) and was asked to help.',
			'id_orig' => 2583, 'key_orig' => 'yzp3r', 'ip' => '120.155.156.58',
			'created_orig' => '2016-08-02 21:47:04', 'updated_orig' => '2016-08-02 21:47:04',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 237, 'givenName' => 'Emelia', 'familyName' => 'Ebejer', 'preferredName' => 'Mimi',
			'email' => 'mimiebejer@yahoo.com.au', 'phone1' => '', 'phone2' => '',
			'address1' => '7 Teak St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Hello, I\'m free Friday after 2pm and all of Saturday and Sunday after 6pm thanks.',
			'commentsInfo' => 'Hey, two years ago I photographed the Maleny Music Weekend as a Volunteer. Would you be interested in my photography services again this year?, Thanks',
			'discovery' => 'Facebook :) x',
			'id_orig' => 2587, 'key_orig' => 'quc34', 'ip' => '58.165.106.212',
			'created_orig' => '2016-08-03 13:19:49', 'updated_orig' => '2016-08-03 13:19:49',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 238, 'givenName' => 'Jane', 'familyName' => 'Todd', 'preferredName' => '',
			'email' => 'janeedit@gmail.com', 'phone1' => '0412 747 034', 'phone2' => '07 5435 2578',
			'address1' => '15 Tulip St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Michael Todd', 'emergencyPhone1' => '0412 593 547', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Gates, shop, volunteer hospitality',
			'availability' => 'No available for set up or bump out or on Saturday evening or on Sunday. IE I am only available Saturday daytime until 4pm.',
			'commentsInfo' => null,
			'discovery' => 'Friend (Bob Wilson)',
			'id_orig' => 2588, 'key_orig' => 'j90bv', 'ip' => '1.120.165.169',
			'created_orig' => '2016-08-03 14:16:51', 'updated_orig' => '2016-08-03 14:16:51',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 239, 'givenName' => 'Thomas', 'familyName' => 'Nealson', 'preferredName' => 'Tom',
			'email' => 'tnealson@gmail.com', 'phone1' => '0437 279 505', 'phone2' => '07 5494 4590',
			'address1' => 'Lot 81 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sybil Maclure', 'emergencyPhone1' => '07 5494 4590', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Stage Management Co-ordinator as per previous years.',
			'availability' => 'During festival',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2589, 'key_orig' => 'zvo1w', 'ip' => '101.183.82.146',
			'created_orig' => '2016-08-03 14:46:13', 'updated_orig' => '2016-08-03 14:46:13',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 240, 'givenName' => 'Leesa', 'familyName' => 'Fischer', 'preferredName' => '',
			'email' => 'poolrenovation@bigpond.com', 'phone1' => '0417 716 016', 'phone2' => '',
			'address1' => '7 Alstonville Way', 'address2' => null,
			'locality' => 'Currimundi', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Tony Fischer', 'emergencyPhone1' => '0407 577 527', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bars, gate, shop',
			'availability' => 'Any time',
			'commentsInfo' => 'Have worked in customer service my entire working life and love it',
			'discovery' => 'Facebook',
			'id_orig' => 2590, 'key_orig' => 'lwso0', 'ip' => '49.197.188.158',
			'created_orig' => '2016-08-03 15:50:45', 'updated_orig' => '2016-08-03 15:50:45',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 241, 'givenName' => 'Denise', 'familyName' => 'Smith-Anderson', 'preferredName' => 'Sky',
			'email' => 'skyfox@live.com.au', 'phone1' => '0450 153 057', 'phone2' => '07 5447 0656',
			'address1' => '39 Jorgensens Rd', 'address2' => null,
			'locality' => 'Ridgewood', 'state' => 'Qld', 'postcode' => '4563', 'country' => 'Australia',
			'emergencyContact' => 'Robyn Humphries', 'emergencyPhone1' => '07 5485 3585', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'gates;volunteer hospitality',
			'availability' => 'festival period',
			'commentsInfo' => 'I\'m a regular volunteer at WFF in Elders Tea House',
			'discovery' => 'facebook',
			'id_orig' => 2591, 'key_orig' => '82ls2', 'ip' => '122.129.141.1',
			'created_orig' => '2016-08-03 16:50:59', 'updated_orig' => '2016-08-03 16:50:59',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 49, 'givenName' => 'Becky', 'familyName' => 'Wandell', 'preferredName' => '',
			'email' => 'becky@woodfordia.com', 'phone1' => '0418 782 489', 'phone2' => '',
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => 'Zak Burvill', 'emergencyPhone1' => '0411 846 561', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Managing Kids programme',
			'availability' => 'Friday/saturday/sunday',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2592, 'key_orig' => 'ja7ql', 'ip' => '1.132.96.29',
			'created_orig' => '2016-08-03 20:30:15', 'updated_orig' => '2016-08-03 20:30:15',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 242, 'givenName' => 'Patrick', 'familyName' => 'Craigie', 'preferredName' => 'Pat',
			'email' => 'patcraigie@gmail.com', 'phone1' => '0417 207 642', 'phone2' => '',
			'address1' => '106 Evans Rd', 'address2' => null,
			'locality' => 'Black Mountain', 'state' => 'Qld', 'postcode' => '4563', 'country' => 'Australia',
			'emergencyContact' => 'Becky Wandell', 'emergencyPhone1' => '0418 782 489', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'MC in kids area. Have confirmed this with Becky',
			'availability' => 'Friday afternoon/Saturday and Sunday',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2593, 'key_orig' => '82bms', 'ip' => '1.132.96.29',
			'created_orig' => '2016-08-03 21:08:21', 'updated_orig' => '2016-08-03 21:08:21',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 5, 'givenName' => 'Pedro', 'familyName' => 'Plowman', 'preferredName' => 'Pedro',
			'email' => 'me+fest@pedro.id.au', 'phone1' => '0400 473 376', 'phone2' => '07 5476 0901',
			'address1' => '42 Reilly Rd', 'address2' => null,
			'locality' => 'Nambour', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Jacqui Plowman', 'emergencyPhone1' => '07 5476 0901', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Use me however you think you best can. In my 11 years of volunteering at Woodford Folk Festival & other Woodfordia events I have mostly done artist transport, & do enjoy being in a role that has me engaged with artists. However I\'m happy just to be contributing, & won\'t be a job snob about how that might be.',
			'availability' => 'Set up, during festival, bump out, are all good to me. Having worked too many years of nights, I\'m almost nocturnal, so you\'ll get better out of me by rostering me for afternoons & nights than mornings.',
			'commentsInfo' => 'There\'s a good chance that whoever is looking at this knows who I am, & that\'s ok. I\'m a creative individual, passionate about music & grassroots culture (but mot myself a musician). In the last year I have been developing sewing skills, which I mention just in case they may be useful.',
			'discovery' => 'facebook',
			'id_orig' => 2594, 'key_orig' => 'fus9e', 'ip' => '139.218.184.133',
			'created_orig' => '2016-08-03 23:22:45', 'updated_orig' => '2016-08-03 23:22:45',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 243, 'givenName' => 'Tanya', 'familyName' => 'Denholm', 'preferredName' => 'Tahnz',
			'email' => 'tanyas_a_star@hotmail.com', 'phone1' => '0421 621 624', 'phone2' => '',
			'address1' => '40 Aspland St', 'address2' => null,
			'locality' => 'Nambour', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Trish Denholm', 'emergencyPhone1' => '0420 282 533', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set up Thursday and Friday, cleaning, gates, shop,',
			'availability' => 'Thursday -Monday',
			'commentsInfo' => 'I will have my 3.5 year old son with me',
			'discovery' => 'Facebook',
			'id_orig' => 2595, 'key_orig' => 'sf9s3', 'ip' => '49.197.15.223',
			'created_orig' => '2016-08-04 07:17:05', 'updated_orig' => '2016-08-04 07:17:05',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 244, 'givenName' => 'Veronica', 'familyName' => 'Sheather', 'preferredName' => 'Roni',
			'email' => 'foodthatsings@gmail.com', 'phone1' => '0420 310 202', 'phone2' => '',
			'address1' => '3 Roberts St', 'address2' => null,
			'locality' => 'Palmwoods', 'state' => 'Qld', 'postcode' => '4555', 'country' => 'Australia',
			'emergencyContact' => 'Dayne Morley', 'emergencyPhone1' => '0433 916 994', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Hospitality',
			'availability' => 'Any time ( except Saturday night)',
			'commentsInfo' => null,
			'discovery' => 'Facebook',
			'id_orig' => 2596, 'key_orig' => '1symq', 'ip' => '120.22.20.143',
			'created_orig' => '2016-08-04 07:25:33', 'updated_orig' => '2016-08-04 07:25:33',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 245, 'givenName' => 'Joanne', 'familyName' => 'Fleming', 'preferredName' => 'Jo',
			'email' => 'jofleming48@gmail.com', 'phone1' => '0403 686 028', 'phone2' => '',
			'address1' => '22 Sutherland St', 'address2' => null,
			'locality' => 'Dicky Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Veronica Sheather', 'emergencyPhone1' => '0420 310 202', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Prefer Shop, checking tickets at entrances, volunteer light hospitality.',
			'availability' => 'Not available, sat night and it would appreciated if we could sinc times with Veronica Sheather and Pamela Stanely, for transportation reasons with thanks',
			'commentsInfo' => 'Light duties please - prefer standing not sitting',
			'discovery' => 'Friend - Veronica Sheather',
			'id_orig' => 2597, 'key_orig' => '7wt67', 'ip' => '144.138.75.143',
			'created_orig' => '2016-08-04 08:25:24', 'updated_orig' => '2016-08-04 08:25:24',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 246, 'givenName' => 'Michelle', 'familyName' => 'McLucas', 'preferredName' => '',
			'email' => 'rrrr27au@yahoo.com', 'phone1' => '0406 754 640', 'phone2' => '',
			'address1' => '9 Montague Ct', 'address2' => null,
			'locality' => 'Everton Hills', 'state' => 'Qld', 'postcode' => '4053', 'country' => 'Australia',
			'emergencyContact' => 'Anna', 'emergencyPhone1' => '0406 754 640', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Merchandise,Some Photography experience,Customer Service',
			'availability' => 'Friday 26th 12-4pm, Saturday upto 6 pm, Sunday up to 6pm, Can do upto 10 hrs in total',
			'commentsInfo' => 'I have Rheumatoid Arthritis...sitting intermittently maybe required.I have volunteered at The big pineapple music festival,Caloundra Music Festival twice.Originals Music Festival.',
			'discovery' => 'Facebook',
			'id_orig' => 2598, 'key_orig' => '61cj7', 'ip' => '49.197.111.10',
			'created_orig' => '2016-08-04 08:50:21', 'updated_orig' => '2016-08-04 08:50:21',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 22, 'givenName' => 'Michaela Rose', 'familyName' => 'Walker', 'preferredName' => 'Mikayla',
			'email' => 'lotussseed@gmail.com', 'phone1' => '0468 326 962', 'phone2' => '07 5641 4624',
			'address1' => '776 Browns Creek Rd', 'address2' => null,
			'locality' => 'Eerwah Vale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Peter Walker', 'emergencyPhone1' => '0458 487 865', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Stage Management',
			'availability' => 'Saturday afternoon shift already assigned',
			'commentsInfo' => null,
			'discovery' => 'friend',
			'id_orig' => 2600, 'key_orig' => 'ws7wm', 'ip' => '101.184.173.152',
			'created_orig' => '2016-08-04 10:23:35', 'updated_orig' => '2016-08-04 10:23:35',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 247, 'givenName' => 'Susan', 'familyName' => 'Tindall', 'preferredName' => 'Su',
			'email' => 'su@wellnessonthemove.com.au', 'phone1' => '0409 637 082', 'phone2' => '',
			'address1' => '1019 Winn Rd', 'address2' => null,
			'locality' => 'Mount Samson', 'state' => 'Qld', 'postcode' => '4520', 'country' => 'Australia',
			'emergencyContact' => 'Graham Finney', 'emergencyPhone1' => '0418 881 891', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Setup, shop, hospitality',
			'availability' => 'any',
			'commentsInfo' => 'flexible, responsible',
			'discovery' => 'Facebook',
			'id_orig' => 2603, 'key_orig' => 'z28h7', 'ip' => '120.22.67.233',
			'created_orig' => '2016-08-04 20:24:14', 'updated_orig' => '2016-08-04 20:24:14',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 55, 'givenName' => 'Susan', 'familyName' => 'Collins', 'preferredName' => 'Sue',
			'email' => 'suec28@gmail.com', 'phone1' => '0405 558 153', 'phone2' => '07 5442 3441',
			'address1' => '40 Reids Rd', 'address2' => null,
			'locality' => 'Woombye', 'state' => 'Qld', 'postcode' => '4559', 'country' => 'Australia',
			'emergencyContact' => 'Daniel Collins', 'emergencyPhone1' => '07 5442 3441', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Spoke with Becky Wandell earlier tonight. She is after workers in the kids area. Have helped her many times at Woodford and early Maleny , Folk Fests. Could you put me in with her please.',
			'availability' => 'Any times suit me.',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2604, 'key_orig' => 'zjruf', 'ip' => '58.7.254.12',
			'created_orig' => '2016-08-04 22:19:41', 'updated_orig' => '2016-08-04 22:19:41',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 248, 'givenName' => 'Mark', 'familyName' => 'Powlesland', 'preferredName' => '',
			'email' => 'markingtime@iinet.net.au', 'phone1' => '0401 869 190', 'phone2' => '07 5491 5360',
			'address1' => '20 Ridgehaven Ct', 'address2' => null,
			'locality' => 'Aroona', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Ingrid', 'emergencyPhone1' => '0403 550 136', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Public speaking MC, Cleaning, Shop, Stage m/ ment',
			'availability' => 'All day sat sun possibly fri from 7pm',
			'commentsInfo' => 'I work full time at MooloolabaMusic and am very conversant with most instruments, & limited PA system / stage work., I have spoken in public numerous times and have a good "stage presence."',
			'discovery' => 'F/book',
			'id_orig' => 2605, 'key_orig' => '7h916', 'ip' => '121.223.65.173',
			'created_orig' => '2016-08-05 09:56:02', 'updated_orig' => '2016-08-05 09:56:02',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 249, 'givenName' => 'Troy', 'familyName' => 'Baxter', 'preferredName' => '',
			'email' => 'troybaxter@gmail.com', 'phone1' => '0417 720 038', 'phone2' => '07 5496 3435',
			'address1' => '669 Bellthorpe Range Rd', 'address2' => null,
			'locality' => 'Stanmore', 'state' => 'Qld', 'postcode' => '4514', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Childrens festival',
			'availability' => 'late fri,sat and sun',
			'commentsInfo' => 'I have volunteeered with Becky at other ferstivals and look forward to working with her again.',
			'discovery' => 'After Speaking with John and Becky decided to volunteer at the festival in the childrens festival.',
			'id_orig' => 2608, 'key_orig' => '22tob', 'ip' => '125.253.27.102',
			'created_orig' => '2016-08-05 14:07:59', 'updated_orig' => '2016-08-05 14:07:59',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 250, 'givenName' => 'Ian', 'familyName' => 'Pollard', 'preferredName' => 'Ian',
			'email' => 'ian@f3-design.com.au', 'phone1' => '0432 611 386', 'phone2' => '07 5499 9549',
			'address1' => '44 Meadow Rd', 'address2' => null,
			'locality' => 'Reesville', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Michele Crocker', 'emergencyPhone1' => '0413 470 913', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Set up, Cleaning, Bump out',
			'availability' => 'Wednesday, Friday, Monday.',
			'commentsInfo' => 'Was a licensed electrician but no longer registered. Frustrated musician who can\'t play so I get my fix this way., Can do some work during the festival but want Saturday night free.',
			'discovery' => 'friend',
			'id_orig' => 2609, 'key_orig' => 'y9iw', 'ip' => '203.45.86.209',
			'created_orig' => '2016-08-05 14:22:49', 'updated_orig' => '2016-08-05 14:22:49',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 251, 'givenName' => 'Brian', 'familyName' => 'Curry', 'preferredName' => 'Brian',
			'email' => 'find.briancurry@gmail.com', 'phone1' => '0414 544 661', 'phone2' => '07 5472 8163',
			'address1' => 'Starlight Community', 'address2' => '405 Browns Creek Rd',
			'locality' => 'Cooloolabin', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Lisa Williams', 'emergencyPhone1' => '0412 305 645', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'I am available from Thurs 27th Till late Mon before and after festival',
			'commentsInfo' => 'My wife and I have already purchased tickets and are not wanting a refund just williang to help before and after if you need us',
			'discovery' => 'friends and we have attended each festival',
			'id_orig' => 2611, 'key_orig' => 'e1rpr', 'ip' => '101.183.14.129',
			'created_orig' => '2016-08-05 18:32:06', 'updated_orig' => '2016-08-05 18:32:06',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 345, 'givenName' => 'Lorena', 'familyName' => 'Oldfield', 'preferredName' => 'Lori',
			'email' => 'scott.oldfield2@bigpond.com', 'phone1' => '0438 688 466', 'phone2' => '07 4170 0340',
			'address1' => 'Sutherland Dr', 'address2' => null,
			'locality' => 'Strathpine', 'state' => 'Qld', 'postcode' => '4500', 'country' => 'Australia',
			'emergencyContact' => 'Steve Simpson', 'emergencyPhone1' => '0419 010 234', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Childrens Festival , with Troy and Becky',
			'availability' => 'late Friday, Saturday and Sunday',
			'commentsInfo' => null,
			'discovery' => 'Troy',
			'id_orig' => 2613, 'key_orig' => 's4pos', 'ip' => '123.211.179.209',
			'created_orig' => '2016-08-06 13:58:26', 'updated_orig' => '2016-08-06 13:58:26',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 252, 'givenName' => 'Jade', 'familyName' => 'Cromwell', 'preferredName' => '',
			'email' => 'jade.cromwell@uqconnect.edu.au', 'phone1' => '0413 633 582', 'phone2' => '',
			'address1' => '4/159 Fairfield Rd', 'address2' => null,
			'locality' => 'Fairfield Brisbane', 'state' => 'Qld', 'postcode' => '4103', 'country' => 'Australia',
			'emergencyContact' => 'Karen', 'emergencyPhone1' => '0419 323 806', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Volunteer hospitality, Bump Out, Gates, parking, campground.',
			'availability' => 'Friday 27 to Monday 29',
			'commentsInfo' => null,
			'discovery' => 'Google search Maleny Music festival and noticed volunteers tab',
			'id_orig' => 2615, 'key_orig' => '2kkew', 'ip' => '101.162.7.65',
			'created_orig' => '2016-08-07 10:50:28', 'updated_orig' => '2016-08-07 10:50:28',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 253, 'givenName' => 'Hannah', 'familyName' => 'Young', 'preferredName' => '',
			'email' => 'jeerunt@gmail.com', 'phone1' => '', 'phone2' => '',
			'address1' => '41 Centenary Dr', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jodie Lyn', 'emergencyPhone1' => '0413 330 406', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Gates, Cleaning, Volunteer hospitality',
			'availability' => null,
			'commentsInfo' => 'with Maleny Flexi school',
			'discovery' => 'friend',
			'id_orig' => 2616, 'key_orig' => 'kduol', 'ip' => '60.231.84.190',
			'created_orig' => '2016-08-07 11:08:16', 'updated_orig' => '2016-08-07 11:08:16',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 340, 'givenName' => 'Paul', 'familyName' => 'Wightman', 'preferredName' => '',
			'email' => 'jennypaul@activ8.net.au', 'phone1' => '07 5435 0313', 'phone2' => '',
			'address1' => 'Lot 69 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => '1st-Set up, 2nd-shop, 3rd-Vol hospitality, 4th-Bump out, , just want to be involved this year - both myself and my son(lived at Crystal Waters for 10 years now)',
			'availability' => 'Available from the Wed lunchtime to late on the Monday.',
			'commentsInfo' => 'Have volunteered for 7 years at the Woodford Folk Festival, driving, shop service, info tent, camping area\'s.',
			'discovery' => 'Friends',
			'id_orig' => 2617, 'key_orig' => '3drh1', 'ip' => '116.250.105.40',
			'created_orig' => '2016-08-07 11:57:57', 'updated_orig' => '2016-08-07 11:57:57',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 254, 'givenName' => 'Travis', 'familyName' => 'Earsman', 'preferredName' => 'Travis',
			'email' => 'travis@earsman.com', 'phone1' => '0468 518 896', 'phone2' => '07 5435 2047',
			'address1' => '211 Bridge Creek Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kathy Earsman', 'emergencyPhone1' => '0405 204 044', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'I\'d be keen to work in Set-Up/Bump Out as I am working musician and have been involved in crewing and organisation of events for many years. I have also worked as a cleaner and in stage management, so any of these roles I would be more than capable of fulfilling.',
			'availability' => 'In the week leading up to the festival an the week after it, I am available between the hours of 10-1 Monday to Friday. I would prefer if possible to work in Set-Up/Bump Out between these hours. I am not available on the night of August 26 however I am available for the rest of the duration of the festival.',
			'commentsInfo' => 'I am a Maleny local, and a muscian and event-coordinator. I have a lot of experience is events and as such I would be en efficiet and hard-worker who would not need to be given directions more than once.',
			'discovery' => 'My mother suggested it. I really want to go to this year\'s festival so if it turns out to be possible to work for my ticket then that is all the better :)',
			'id_orig' => 2618, 'key_orig' => 'old3l', 'ip' => '58.7.249.62',
			'created_orig' => '2016-08-07 16:04:20', 'updated_orig' => '2016-08-07 16:04:20',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 255, 'givenName' => 'Lauren', 'familyName' => 'Manns', 'preferredName' => 'Lauren',
			'email' => 'peterri@live.com.au', 'phone1' => '0454 399 961', 'phone2' => '',
			'address1' => '65 Calderwood Rd', 'address2' => null,
			'locality' => 'Landsborough', 'state' => 'Qld', 'postcode' => '4550', 'country' => 'Australia',
			'emergencyContact' => 'Terri Manns', 'emergencyPhone1' => '0410 499 978', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set up, cleaning, gates',
			'availability' => 'After 3pm on Monday, Tuesday, Thursday. Unavailable on Wednesday\'s. Free all day Friday, Saturday, Sunday.',
			'commentsInfo' => null,
			'discovery' => 'Facebook and friends',
			'id_orig' => 2619, 'key_orig' => 'vzy73', 'ip' => '123.211.177.2',
			'created_orig' => '2016-08-07 19:25:57', 'updated_orig' => '2016-08-07 19:25:57',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 256, 'givenName' => 'Amelia', 'familyName' => 'Shirley', 'preferredName' => 'Amelia',
			'email' => 'aliciabryant13@gmail.com', 'phone1' => '07 5492 9378', 'phone2' => '',
			'address1' => '16 Clancy Ct', 'address2' => null,
			'locality' => 'Mooloolah', 'state' => 'Qld', 'postcode' => '4553', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'setup , cleaning , gate',
			'availability' => null,
			'commentsInfo' => 'Maleny flexi school',
			'discovery' => 'Hannah young',
			'id_orig' => 2621, 'key_orig' => 'yla72', 'ip' => '165.228.12.246',
			'created_orig' => '2016-08-08 09:43:09', 'updated_orig' => '2016-08-08 09:43:09',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 257, 'givenName' => 'Tameka', 'familyName' => 'Allen', 'preferredName' => 'Timtam',
			'email' => 'timtam124@hotmail.com.au', 'phone1' => '0458 369 434', 'phone2' => '07 5435 0187',
			'address1' => '29 Kennedy Rd', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Fiona Small', 'emergencyPhone1' => '0419 193 101', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Gates , Shop',
			'availability' => 'Friday 8am - 5pm',
			'commentsInfo' => 'Maleny Flexi School',
			'discovery' => 'Friend - Hannah young',
			'id_orig' => 2622, 'key_orig' => 'ww6gh', 'ip' => '165.228.12.246',
			'created_orig' => '2016-08-08 09:43:39', 'updated_orig' => '2016-08-08 09:43:39',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 258, 'givenName' => 'Ancily', 'familyName' => 'Shaji', 'preferredName' => 'Ammu',
			'email' => 'ancilytreesashaji222@gmail.com', 'phone1' => '0470 088 055', 'phone2' => '07 5429 6885',
			'address1' => '2/21 Fig St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Nisha Shaji', 'emergencyPhone1' => '0469 268 255', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Gate, Shop',
			'availability' => 'Friday 8am -4pm',
			'commentsInfo' => 'Maleny Flexi School',
			'discovery' => 'Friend - Hannah Young',
			'id_orig' => 2623, 'key_orig' => 'znbg6', 'ip' => '165.228.12.246',
			'created_orig' => '2016-08-08 09:48:20', 'updated_orig' => '2016-08-08 09:48:20',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 259, 'givenName' => 'Allison', 'familyName' => 'Knowles', 'preferredName' => 'Allie',
			'email' => 'allie.knowles18@gmail.com', 'phone1' => '0415 233 771', 'phone2' => '07 5446 9278',
			'address1' => '618 Obi Obi Rd', 'address2' => null,
			'locality' => 'Obi Obi', 'state' => 'Qld', 'postcode' => '4574', 'country' => 'Australia',
			'emergencyContact' => 'Tom Ryan', 'emergencyPhone1' => '0418 730 64?', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => null,
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2624, 'key_orig' => 'a5gx5', 'ip' => '203.189.127.54',
			'created_orig' => '2016-08-08 09:52:38', 'updated_orig' => '2016-08-08 09:52:38',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 259, 'givenName' => 'Allison', 'familyName' => 'Knowles', 'preferredName' => 'Allie',
			'email' => 'allie.knowles18@gmail.com', 'phone1' => '0415 233 771', 'phone2' => '07 5446 9278',
			'address1' => '618 Obi Obi Rd', 'address2' => null,
			'locality' => 'Obi Obi', 'state' => 'Qld', 'postcode' => '4574', 'country' => 'Australia',
			'emergencyContact' => 'Tom Ryan', 'emergencyPhone1' => '0418 730 649', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bar, gates, shop, hospitality',
			'availability' => 'Fri,Sat,Sun anytime',
			'commentsInfo' => null,
			'discovery' => 'Hinterland Times newspaper',
			'id_orig' => 2625, 'key_orig' => 'i65dg', 'ip' => '203.189.127.54',
			'created_orig' => '2016-08-08 09:55:20', 'updated_orig' => '2016-08-08 09:55:20',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 206, 'givenName' => 'Kim', 'familyName' => 'Hinckfuss', 'preferredName' => 'Kimbo',
			'email' => 'k.hinckfuss@gmail.com.au', 'phone1' => '0424 229 020', 'phone2' => '07 5435 8139',
			'address1' => '13 Measberg Rd', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'David Hinckfuss', 'emergencyPhone1' => '0466 332 087', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'fencing and setup.I want to be free to dance:)',
			'availability' => 'anytime before',
			'commentsInfo' => null,
			'discovery' => 'Friends',
			'id_orig' => 2629, 'key_orig' => '7qukg', 'ip' => '144.140.230.80',
			'created_orig' => '2016-08-09 11:12:35', 'updated_orig' => '2016-08-09 11:12:35',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 260, 'givenName' => 'Claire', 'familyName' => 'Meraki', 'preferredName' => 'Claire',
			'email' => 'clairemeraki@gmail.com', 'phone1' => '0421 205 672', 'phone2' => '',
			'address1' => '40 Rosella Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kevin Babbage', 'emergencyPhone1' => '0438 006 055', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'I would love to be able to help set up or bump out please :) . Pref Wed 26th if possible. Is there any way I can bring my 7yo son with me? We homeschool... We\'re good friends with Lynda Simpson if you wanted to chat w her... ? Thankyou!',
			'availability' => 'Would really prefer before or after the event. Night shifts wouldn\'t work.',
			'commentsInfo' => null,
			'discovery' => 'Friends w Lynda Simpson, and live in Maleny :)',
			'id_orig' => 2631, 'key_orig' => 'z24xy', 'ip' => '106.69.105.1',
			'created_orig' => '2016-08-09 16:03:21', 'updated_orig' => '2016-08-09 16:03:21',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 261, 'givenName' => 'Bruno', 'familyName' => 'Azevedo', 'preferredName' => 'Bruno',
			'email' => 'bfpio88@gmail.com', 'phone1' => '5511 99875 2506', 'phone2' => '',
			'address1' => 'Rua Joao Junior 900', 'address2' => null,
			'locality' => 'Sao Paulo', 'state' => '', 'postcode' => '', 'country' => 'Brazil',
			'emergencyContact' => 'Ivan Azevedo', 'emergencyPhone1' => '5511 98261 0087', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set Up and Bump Out. Me and my wife are travelling through the world (she is aplying to volunteer as well). I am a carpenter and she is an architect, so we have a good experience in setting up structures and putting then down. Other opcion to us would be helping in the cleaning.',
			'availability' => 'from Wed 24 to Tuesday 30',
			'commentsInfo' => 'I am 27, from Brazil and traveling with my wife (so, I can just volunteer if she volunteer too). We both have good experience in constroction and bioconstrocuture. I do speak a good english, and would love to help you guys. We already worked in others music festivals back home.',
			'discovery' => 'We heared from our wwoof in Crystal Waters, Po Mei.',
			'id_orig' => 2632, 'key_orig' => 'en2eq', 'ip' => '103.53.200.156',
			'created_orig' => '2016-08-09 16:49:07', 'updated_orig' => '2016-08-09 16:49:07',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 262, 'givenName' => 'Mayara', 'familyName' => 'Pattoli', 'preferredName' => 'Maya',
			'email' => 'mayara.pattoli@yahoo.com.br', 'phone1' => '5511 99875 2506', 'phone2' => '',
			'address1' => 'Rua Joao Junior 900', 'address2' => null,
			'locality' => 'Sao Paulo', 'state' => '', 'postcode' => '', 'country' => 'Brazil',
			'emergencyContact' => 'Ivan Azevedo', 'emergencyPhone1' => '5511 98261 0087', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set Up and Bump Out, is here I have some experience in other festivals back in Brazil. Another option is Cleaning',
			'availability' => 'Wed 24th until Tuesday 30th',
			'commentsInfo' => 'I am 29, from Brazil and traveling with my husband (so, I can just volunteer if he volunteers too). We both have good experience in construction and bioconstruction. I am learning english, so I do understand must of it, but have some problems to talk, but my husband speak perfect english. We would love to help you guys. We already worked in others music festivals back home.',
			'discovery' => 'Our wwoof host in Crystal Waters, Po Mei',
			'id_orig' => 2633, 'key_orig' => 'brc15', 'ip' => '103.53.200.156',
			'created_orig' => '2016-08-09 16:54:45', 'updated_orig' => '2016-08-09 16:54:45',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 121, 'givenName' => 'Jeanette', 'familyName' => 'Roach', 'preferredName' => 'Jinny',
			'email' => 'jinnyzkec@outlook.com', 'phone1' => '0481 122 173', 'phone2' => '',
			'address1' => '6A Myrtle St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kami Blok', 'emergencyPhone1' => '0423 796 845', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set up',
			'availability' => 'Whenever',
			'commentsInfo' => 'Physical issues, can\'t stand for long periods or lift objects',
			'discovery' => 'Friend',
			'id_orig' => 2635, 'key_orig' => 'y5nqt', 'ip' => '1.128.96.141',
			'created_orig' => '2016-08-10 15:17:28', 'updated_orig' => '2016-08-10 15:17:28',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 263, 'givenName' => 'Adam', 'familyName' => 'Gunton', 'preferredName' => '',
			'email' => 'agunt7@yahoo.com', 'phone1' => '0409 373 457', 'phone2' => '',
			'address1' => '36 Tamarind St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Leisa Gunton', 'emergencyPhone1' => '07 5446 0657', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Stage Managment',
			'availability' => null,
			'commentsInfo' => 'Nope, all good :)',
			'discovery' => 'Friend',
			'id_orig' => 2636, 'key_orig' => 'go573', 'ip' => '60.231.56.220',
			'created_orig' => '2016-08-10 19:55:05', 'updated_orig' => '2016-08-10 19:55:05',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 264, 'givenName' => 'Alexander', 'familyName' => 'Hendry', 'preferredName' => 'Alexander',
			'email' => 'alexanderhendry1@gmail.com', 'phone1' => '0421 622 796', 'phone2' => '',
			'address1' => '6 Timbertop St', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Margaret Grace', 'emergencyPhone1' => '0417 724 253', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'I would be interested in working in the hospitality areas; the bar, the shop and volunteer hospitality.',
			'availability' => 'Four days from Thursday the 25th to Sunday the 28th.',
			'commentsInfo' => 'I have the certificate II in hospitality and I volunteered in the festival shop at the Woodford Folk Festival last year.',
			'discovery' => 'My mum who is attending told me about volunteering.',
			'id_orig' => 2640, 'key_orig' => 'flaqu', 'ip' => '58.106.138.88',
			'created_orig' => '2016-08-11 15:35:22', 'updated_orig' => '2016-08-11 15:35:22',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 265, 'givenName' => 'Jacquie', 'familyName' => 'Brydon', 'preferredName' => 'Jacquie',
			'email' => 'jacquie.brydon@gmail.com', 'phone1' => '0468 918 120', 'phone2' => '',
			'address1' => '22 Yaraan St', 'address2' => null,
			'locality' => 'Bracken Ridge', 'state' => 'Qld', 'postcode' => '4017', 'country' => 'Australia',
			'emergencyContact' => 'Mick Brydon', 'emergencyPhone1' => '0411 567 140', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bar',
			'availability' => 'Sat and Sunday',
			'commentsInfo' => 'I speak Japanese. French German Spanish and English',
			'discovery' => 'Internet',
			'id_orig' => 2645, 'key_orig' => 'n8w7l', 'ip' => '49.197.176.26',
			'created_orig' => '2016-08-12 22:08:50', 'updated_orig' => '2016-08-12 22:08:50',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 266, 'givenName' => 'Campbell', 'familyName' => 'Yvonne', 'preferredName' => 'Yvonne',
			'email' => 'yvcampbell@eftel.net.au', 'phone1' => '0423 954 180', 'phone2' => '07 5445 7774',
			'address1' => '26 Allara St', 'address2' => null,
			'locality' => 'Flaxton', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Sabine Vogel', 'emergencyPhone1' => '0426 094 441', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Gates, Ticketing, shop, campground, volunteer hospitality',
			'availability' => 'Thursday to Sunday',
			'commentsInfo' => 'I have volunteered at Woodford Folk Festival in the accounting area in previous years. I volunteer monthly at the Montville Markets as order taking / cashier for the pancake breakfast. I help with ayurvedic food cooking and serving in Maleny.',
			'discovery' => 'I looked it up on the website',
			'id_orig' => 2647, 'key_orig' => '7uovn', 'ip' => '202.168.109.29',
			'created_orig' => '2016-08-13 12:25:52', 'updated_orig' => '2016-08-13 12:25:52',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 267, 'givenName' => 'Tina', 'familyName' => 'Terry', 'preferredName' => 'Tina',
			'email' => 'tinaterry@live.com.au', 'phone1' => '0424 447 054', 'phone2' => '',
			'address1' => '25 North St', 'address2' => null,
			'locality' => 'Woorim', 'state' => 'Qld', 'postcode' => '4507', 'country' => 'Australia',
			'emergencyContact' => 'Mark Lugg', 'emergencyPhone1' => '0407 211 906', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set up Friday, Bar security, Gates, Shop, Volunteer hospitality',
			'availability' => 'Friday till Saturday afternoon only',
			'commentsInfo' => null,
			'discovery' => 'Facebook',
			'id_orig' => 2651, 'key_orig' => 't9wrx', 'ip' => '49.183.73.225',
			'created_orig' => '2016-08-15 06:46:23', 'updated_orig' => '2016-08-15 06:46:23',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 268, 'givenName' => 'Bree-Anna', 'familyName' => 'Roberts', 'preferredName' => 'Bree',
			'email' => 'sahajadesigns@gmail.com', 'phone1' => '', 'phone2' => '',
			'address1' => '69 Remington Shute Rd', 'address2' => null,
			'locality' => 'Montville', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Vicki Roberts', 'emergencyPhone1' => '07 6646 0208', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Set up, bar security, gates, shop, hospitality...',
			'availability' => 'Available any day except Sunday sorry',
			'commentsInfo' => 'Reliable and trustworthy',
			'discovery' => 'Friend',
			'id_orig' => 2655, 'key_orig' => '7pd7h', 'ip' => '1.132.96.124',
			'created_orig' => '2016-08-15 19:44:18', 'updated_orig' => '2016-08-15 19:44:18',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 269, 'givenName' => 'Jo-Anne', 'familyName' => 'Fratus', 'preferredName' => 'Jo',
			'email' => 'joannefratus@gmail.com', 'phone1' => '0477 992 777', 'phone2' => '',
			'address1' => '13 Greenfields Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Egidio & Kerri Fratus', 'emergencyPhone1' => '07 5442 1909', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'i/m good at checking tickets so gates, parking campground, administrative work, customer and hospitality service, just don\'t have an RSA.',
			'availability' => 'all weekend.just not good exposed to the midday sun so 11am - 2pm unless I am undercover.',
			'commentsInfo' => 'friendly personality, people find me easily approachable apparently, and excellent communicator.',
			'discovery' => 'Brett Campbell\'s post on the Free Ads for Maleny Facebook site.',
			'id_orig' => 2656, 'key_orig' => 'rw7xf', 'ip' => '101.162.30.203',
			'created_orig' => '2016-08-16 00:00:28', 'updated_orig' => '2016-08-16 00:00:28',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 270, 'givenName' => 'Roger', 'familyName' => 'Brand', 'preferredName' => 'Roger',
			'email' => 'rogergb33@hotmail.com', 'phone1' => '0434 287 633', 'phone2' => '',
			'address1' => '23 Burnham Rd', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => 'Peter Brand', 'emergencyPhone1' => '0423 494 822', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Bars, Stage Management, anything really',
			'availability' => 'Friday 6pm till Tuesday 9am',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2657, 'key_orig' => 'opk04', 'ip' => '123.243.190.87',
			'created_orig' => '2016-08-16 08:21:31', 'updated_orig' => '2016-08-16 08:21:31',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 271, 'givenName' => 'Ava Kim', 'familyName' => 'Rosenberg', 'preferredName' => 'Kim Or Ava',
			'email' => 'rosenberg.kim@gmail.com', 'phone1' => '0415 164 176', 'phone2' => '07 5435 0065',
			'address1' => 'Lot 4 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Debra Rosenberg', 'emergencyPhone1' => '0404 250 965', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Gates, Bar Security.',
			'availability' => 'After 10, After 5pm, nights.',
			'commentsInfo' => 'I volunteered at this year\'s Woodwork Expo, Maleny.',
			'discovery' => 'Have known about it for years. Many of my friends volunteer at the festival.',
			'id_orig' => 2660, 'key_orig' => 'aihhz', 'ip' => '106.69.77.141',
			'created_orig' => '2016-08-16 20:35:47', 'updated_orig' => '2016-08-16 20:35:47',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 272, 'givenName' => 'Han', 'familyName' => 'Mai', 'preferredName' => '',
			'email' => 'khahan1809@gmail.com', 'phone1' => '0420 689 698', 'phone2' => '',
			'address1' => '58 Leopard St', 'address2' => null,
			'locality' => 'Kangaroo Point', 'state' => 'Qld', 'postcode' => '4169', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Shop',
			'availability' => null,
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2663, 'key_orig' => 'cav2v', 'ip' => '101.165.7.98',
			'created_orig' => '2016-08-17 12:40:54', 'updated_orig' => '2016-08-17 12:40:54',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 273, 'givenName' => 'Lex', 'familyName' => 'Kocsis', 'preferredName' => 'Lex',
			'email' => 'scopesponge@gmail.com', 'phone1' => '0431 680 014', 'phone2' => '',
			'address1' => '42 Aspland St', 'address2' => null,
			'locality' => 'Nambour', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Janis Lee', 'emergencyPhone1' => '0431 680 014', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Any other than bar',
			'availability' => 'Set up,during all good',
			'commentsInfo' => 'Lots of experience with festivals',
			'discovery' => 'Friends',
			'id_orig' => 2664, 'key_orig' => 'jn7p2', 'ip' => '49.197.116.74',
			'created_orig' => '2016-08-17 15:57:24', 'updated_orig' => '2016-08-17 15:57:24',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 274, 'givenName' => 'Barbara', 'familyName' => 'Salathiel', 'preferredName' => 'Willow',
			'email' => 'willowjoy11@gmail.com', 'phone1' => '0427 566 583', 'phone2' => '',
			'address1' => '8 Parkglen Ave', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ellen Salathiel', 'emergencyPhone1' => '03 5447 8696', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set up (although only available from lunch time friday), Bars, Gates (either), shop, hospitality , or bump out',
			'availability' => 'Friday afternoon and Monday (set up and bump out), sat morning and sun morning',
			'commentsInfo' => null,
			'discovery' => 'friends',
			'id_orig' => 2669, 'key_orig' => 'b0zpm', 'ip' => '1.129.96.180',
			'created_orig' => '2016-08-19 08:13:57', 'updated_orig' => '2016-08-19 08:13:57',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 203, 'givenName' => 'Lynda', 'familyName' => 'Rush', 'preferredName' => '',
			'email' => 'lynda.rush@bigpond.com', 'phone1' => '0427 700 138', 'phone2' => '',
			'address1' => '28 Coral St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Skye Rush', 'emergencyPhone1' => '0477 278 921', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Anything',
			'availability' => 'Setup, pull down, after 11 sat and sun',
			'commentsInfo' => '10 yrs volunteering for various organisations including neighbourhood centre, events centre, Caloundra music festival. This is my 3rd app for position.',
			'discovery' => 'Hillbilly goats told me about it earlier in the year',
			'id_orig' => 2670, 'key_orig' => 'f48vn', 'ip' => '101.163.72.28',
			'created_orig' => '2016-08-19 08:42:03', 'updated_orig' => '2016-08-19 08:42:03',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 275, 'givenName' => 'Jasmine', 'familyName' => 'Ross', 'preferredName' => '',
			'email' => 'j.ross@uqconnect.edu.au', 'phone1' => '0427 006 274', 'phone2' => '',
			'address1' => '1 Water Gum Cr', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'retail shop, hospitality, ticketing, bars',
			'availability' => 'not available Sunday 8am-1pm',
			'commentsInfo' => 'Experienced in cash handling, retail',
			'discovery' => 'friend',
			'id_orig' => 2671, 'key_orig' => 'kdo3d', 'ip' => '1.128.96.13',
			'created_orig' => '2016-08-19 13:12:05', 'updated_orig' => '2016-08-19 13:12:05',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 276, 'givenName' => 'Angela', 'familyName' => 'Mulgrew', 'preferredName' => 'Angie',
			'email' => 'am-qld@hotmail.com', 'phone1' => '0421 764 978', 'phone2' => '',
			'address1' => '4 Azalea Ct', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Brenda Mason', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'I have many years experienced as a WFF vollie in December event & Plantings in areas of Admin/Welcome/MC but was unavailable the past few years. , As a resident I\'d like to give some support to the Maleny MF as indicated in Availability , Possible Areas:, Set Up (no heavy lifting), Bar Security , Gates (Ticketing), Shop, Volunteer Hospitality',
			'availability' => 'Flexible with advance notice for a few hours Wednesday - Friday and all Friday evening. NOT Saturday (out of town). Then Available on Sunday. , As an older person I won\'t be able to risk lifting anything heavy or awkward, nor being outside unnecessarily for long periods in the cold of evening. Otherwise then I\'m ready and willing to give a hand.',
			'commentsInfo' => 'I had hoped to help last year but the event clashed with other priorities. But it\'s looking possible for this year!',
			'discovery' => 'Local promo',
			'id_orig' => 2672, 'key_orig' => 's10i3', 'ip' => '49.182.141.177',
			'created_orig' => '2016-08-19 16:14:46', 'updated_orig' => '2016-08-19 16:14:46',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 277, 'givenName' => 'Tracie', 'familyName' => 'Blazely', 'preferredName' => 'Tracie',
			'email' => 'traciejb8@gmail.com', 'phone1' => '0418 715 650', 'phone2' => '',
			'address1' => '26 Slaughter Yard Rd', 'address2' => null,
			'locality' => 'Eudlo', 'state' => 'Qld', 'postcode' => '4554', 'country' => 'Australia',
			'emergencyContact' => 'Penny', 'emergencyPhone1' => '0436 722 439', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Stage management OR wherever is in dire nerd :)',
			'availability' => 'Thurs - Sat night',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2675, 'key_orig' => 'yv3dv', 'ip' => '49.182.8.166',
			'created_orig' => '2016-08-19 22:00:30', 'updated_orig' => '2016-08-19 22:00:30',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 278, 'givenName' => 'Andrew', 'familyName' => 'Sanderson', 'preferredName' => 'Drew',
			'email' => 'phylos.fett@gmail.com', 'phone1' => '07 5494 3896', 'phone2' => '',
			'address1' => '6 Jacaranda Pl', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bars, Gates, Shop.',
			'availability' => 'Unless I get a job between now and then, I should be available for the whole time.',
			'commentsInfo' => null,
			'discovery' => 'Facebook',
			'id_orig' => 2676, 'key_orig' => 'i0kg7', 'ip' => '101.162.49.205',
			'created_orig' => '2016-08-20 09:35:35', 'updated_orig' => '2016-08-20 09:35:35',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 279, 'givenName' => 'Bernard', 'familyName' => 'Hort', 'preferredName' => 'Bernie',
			'email' => 'bernardhort4876@gmail.com', 'phone1' => '0490 436 464', 'phone2' => '',
			'address1' => '234 Avondale Rd', 'address2' => null,
			'locality' => 'Shelley', 'state' => 'Vic', 'postcode' => '3701', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'setup, gates',
			'availability' => 'as required',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2677, 'key_orig' => 'p8yor', 'ip' => '1.128.96.55',
			'created_orig' => '2016-08-21 16:27:33', 'updated_orig' => '2016-08-21 16:27:33',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 335, 'givenName' => 'Phillip', 'familyName' => 'Boyle', 'preferredName' => 'Phil',
			'email' => 'fineearthfoods@iprimus.com.au', 'phone1' => '0419 701 396', 'phone2' => '07 5496 4305',
			'address1' => '6 Buckingham Rd', 'address2' => null,
			'locality' => 'Delaneys Creek', 'state' => 'Qld', 'postcode' => '4514', 'country' => 'Australia',
			'emergencyContact' => 'Michelle Coates', 'emergencyPhone1' => '0437 830 273', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bars, Volunteer Hospitality',
			'availability' => 'Friday am until Sunday pm',
			'commentsInfo' => 'Back of house work would suit a little better I run my own cafe at Woodford Folk Festival with 20 staff. Not too bad at food prep, construction, problem solving at festivals (a vital skill). Am applying with Partner Michelle Coates.',
			'discovery' => 'Facebook',
			'id_orig' => 2678, 'key_orig' => 'kcdpi', 'ip' => '211.26.7.125',
			'created_orig' => '2016-08-21 16:56:35', 'updated_orig' => '2016-08-21 16:56:35',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 336, 'givenName' => 'Michelle', 'familyName' => 'Coates', 'preferredName' => 'Michelle',
			'email' => 'fineearthfoods@iprimus.com.au', 'phone1' => '0419 701 396', 'phone2' => '',
			'address1' => '6 Buckingham Rd', 'address2' => null,
			'locality' => 'Delaneys Creek', 'state' => 'Qld', 'postcode' => '4514', 'country' => 'Australia',
			'emergencyContact' => 'Phil Boyle', 'emergencyPhone1' => '0419 701 396', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Shop Volunteer hospitality',
			'availability' => 'Friday PM until Sunday PM',
			'commentsInfo' => 'Good organisational skills, plenty of enthusiasm. Currently have a slight sciatica problem so may need a seated position I can stand up for around an hour at a time. Owner of Woodfloria Natural Therapies Centre Woodford. Partner is Phil Boyle who has also applied',
			'discovery' => 'facebook',
			'id_orig' => 2679, 'key_orig' => 'flkcn', 'ip' => '211.26.7.125',
			'created_orig' => '2016-08-21 17:03:36', 'updated_orig' => '2016-08-21 17:03:36',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 280, 'givenName' => 'Brittany', 'familyName' => 'White', 'preferredName' => 'Britt',
			'email' => 'brittanymanaia@gmail.com', 'phone1' => '0499 365 963', 'phone2' => '',
			'address1' => '68A Palm St', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Thomas Pugh', 'emergencyPhone1' => '0448 192 258', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bars- serving drinks',
			'availability' => 'Saturday and Sunday anytime',
			'commentsInfo' => null,
			'discovery' => 'A facebook post on Free Ads for Maleny and Surronds',
			'id_orig' => 2680, 'key_orig' => '37jfe', 'ip' => '124.186.97.75',
			'created_orig' => '2016-08-21 18:09:01', 'updated_orig' => '2016-08-21 18:09:01',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 281, 'givenName' => 'Fritz', 'familyName' => 'Dummermuth', 'preferredName' => 'Fritz',
			'email' => 'fritzdummermuth@hotmail.com', 'phone1' => '07 5429 6273', 'phone2' => '',
			'address1' => '62 Mc Carthy Shute Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Claire Booth', 'emergencyPhone1' => '0409 595 7007?', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Construction and take down of temporary structures. ... crowd contrl..... trafic management... wheel chair service.... help desk...',
			'availability' => 'Civil engineering background. .. 12 years esp., WA Trafic controler certificate (exp.), Certificate 3 in Aged care and Disability. , Language ; English, German, plus European German dialects, some Italien and Spanish.',
			'commentsInfo' => 'Best to contact me on Internet...., fritzdummermuth@hotmail.com',
			'discovery' => 'Friend',
			'id_orig' => 2681, 'key_orig' => 'n4phu', 'ip' => '202.76.159.110',
			'created_orig' => '2016-08-21 18:32:36', 'updated_orig' => '2016-08-21 18:32:36',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 282, 'givenName' => 'Kenneth Ross', 'familyName' => 'Herniman', 'preferredName' => 'Known As Ross',
			'email' => 'ross517@yahoo.com.au', 'phone1' => '0417 695 114', 'phone2' => '',
			'address1' => '14 Blaxland St', 'address2' => null,
			'locality' => 'Golden Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => null,
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2684, 'key_orig' => 'piid9', 'ip' => '1.128.97.42',
			'created_orig' => '2016-08-22 10:38:49', 'updated_orig' => '2016-08-22 10:38:49',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 282, 'givenName' => 'Kenneth Ross', 'familyName' => 'Herniman', 'preferredName' => 'Known As Ross',
			'email' => 'ross517@yahoo.com.au', 'phone1' => '0417 695 114', 'phone2' => '',
			'address1' => '14 Blaxland St', 'address2' => null,
			'locality' => 'Golden Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Sally Herniman', 'emergencyPhone1' => '0427 005 676', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'set up parking',
			'availability' => '24/7',
			'commentsInfo' => 'currently unemployed',
			'discovery' => 'Daughter lives in Maleny she had leaflet Banner at the Maleny showgrounds',
			'id_orig' => 2685, 'key_orig' => 'i4bb7', 'ip' => '1.128.97.42',
			'created_orig' => '2016-08-22 10:45:01', 'updated_orig' => '2016-08-22 10:45:01',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 283, 'givenName' => 'Susan', 'familyName' => 'Ireland', 'preferredName' => 'Sky',
			'email' => 'soaringskyeorganics@gmail.com', 'phone1' => '0419 743 163', 'phone2' => '07 5485 4368',
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Bar security , Bump out or wherever need',
			'availability' => 'Fri til tues',
			'commentsInfo' => 'Submitted ages ago havnt heard back',
			'discovery' => null,
			'id_orig' => 2687, 'key_orig' => 'hgvft', 'ip' => '203.213.236.32',
			'created_orig' => '2016-08-22 12:10:51', 'updated_orig' => '2016-08-22 12:10:51',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 284, 'givenName' => 'Keeley', 'familyName' => 'Norman', 'preferredName' => 'Keeley',
			'email' => 'keeleynorman@gmail.com', 'phone1' => '0473 784 840', 'phone2' => '',
			'address1' => '1/21 Qualtrough St', 'address2' => null,
			'locality' => 'Woolloongabba', 'state' => 'Qld', 'postcode' => '4102', 'country' => 'Australia',
			'emergencyContact' => 'Corby Orford', 'emergencyPhone1' => '0418 700 006', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'I would prefer to work in the bars, although I am happy to consider other jobs.',
			'availability' => 'Fully available from Friday through Sunday (happy to extend early or as late as needed). Happy to work night shifts in bars.',
			'commentsInfo' => 'I am a happy Woodford spirit and I would love to be a part of this festival. I have volunteered twice at Woodford: 2015-16 New years and 2016 midyear The Planting Festival, I worked in the bars both times. I have a big smile and customers are always happy to see me!',
			'discovery' => 'A dear Woodford friend of mine who is also volunteering recommended this festival to me.',
			'id_orig' => 2689, 'key_orig' => 'cfiga', 'ip' => '218.215.69.161',
			'created_orig' => '2016-08-22 14:43:13', 'updated_orig' => '2016-08-22 14:43:13',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 285, 'givenName' => 'Esad', 'familyName' => 'Dipic', 'preferredName' => 'Esko',
			'email' => 'dipadesign@gmail.com', 'phone1' => '0437 539 809', 'phone2' => '07 3269 4725',
			'address1' => '12/24 Flinders Pde', 'address2' => null,
			'locality' => 'Sandgate', 'state' => 'Qld', 'postcode' => '4017', 'country' => 'Australia',
			'emergencyContact' => 'Esko', 'emergencyPhone1' => '0424 708 205', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'I am a retired architect (European one) so can help in that domain.',
			'availability' => 'Any time.',
			'commentsInfo' => 'An artist, as well as an architect., Yet, the best cook among architect and the best architect among cooks.',
			'discovery' => 'My friend Kate Eagles told me.',
			'id_orig' => 2690, 'key_orig' => '760gb', 'ip' => '101.165.135.48',
			'created_orig' => '2016-08-22 17:10:15', 'updated_orig' => '2016-08-22 17:10:15',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 340, 'givenName' => 'Paul', 'familyName' => 'Wightman', 'preferredName' => '',
			'email' => 'jennypaul@activ8.net.au', 'phone1' => '07 5435 0313', 'phone2' => '',
			'address1' => 'Lot 69 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'set up-bump out',
			'availability' => 'Thursday-Friday-late Sunday-Monday',
			'commentsInfo' => 'We have already applied a week or more ago, heard nothing yet, but my friend Chis Gwin sayes tonight he is confirmed and that you are looking for more vol\'s, get in touch if you want us to help this year.',
			'discovery' => 'flyer',
			'id_orig' => 2693, 'key_orig' => 'dt97o', 'ip' => '116.250.105.40',
			'created_orig' => '2016-08-22 22:35:19', 'updated_orig' => '2016-08-22 22:35:19',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 286, 'givenName' => 'Jenny', 'familyName' => 'Xiong', 'preferredName' => '',
			'email' => 'jennyx2804@yahoo.com', 'phone1' => '0455 365 595', 'phone2' => '',
			'address1' => '5 Melody St', 'address2' => null,
			'locality' => 'Marsden', 'state' => 'Qld', 'postcode' => '4132', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Stage management',
			'availability' => 'Not able to work all day Friday.',
			'commentsInfo' => null,
			'discovery' => 'Friend',
			'id_orig' => 2694, 'key_orig' => 'c4poj', 'ip' => '124.186.98.44',
			'created_orig' => '2016-08-22 22:35:31', 'updated_orig' => '2016-08-22 22:35:31',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 287, 'givenName' => 'Haider', 'familyName' => 'Ali', 'preferredName' => 'Haider',
			'email' => 'haider_ha@hotmail.com', 'phone1' => '0426 138 372', 'phone2' => '',
			'address1' => '12 Dulwich Rd', 'address2' => null,
			'locality' => 'Yeronga', 'state' => 'Qld', 'postcode' => '4104', 'country' => 'Australia',
			'emergencyContact' => 'Abdullah Jutt', 'emergencyPhone1' => '0405 942 551', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bars, Bar Security, Volunteer Hospitality, Gates',
			'availability' => 'Saturday 9am-midnight, Sunday early morning-5pm',
			'commentsInfo' => null,
			'discovery' => 'Friend',
			'id_orig' => 2695, 'key_orig' => 'cmzh2', 'ip' => '49.197.92.5',
			'created_orig' => '2016-08-22 23:53:19', 'updated_orig' => '2016-08-22 23:53:19',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 288, 'givenName' => 'Zahra', 'familyName' => 'Batool', 'preferredName' => 'Zahra',
			'email' => 'zbato1@gmail.com', 'phone1' => '0422 023 458', 'phone2' => '',
			'address1' => '29 Devonhill St', 'address2' => null,
			'locality' => 'The Gap', 'state' => 'Qld', 'postcode' => '4061', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Set up, bars, bar security, cleaning, volunteer hospitality,',
			'availability' => 'Friday afternoon till Sunday late afternoon',
			'commentsInfo' => 'Have volunteered for Brisbane street art festival in Feb 2016, have volunteered at community centre teaching English, have volunteered at native plant nursery.',
			'discovery' => 'Friend.',
			'id_orig' => 2696, 'key_orig' => 'x86pj', 'ip' => '49.187.33.240',
			'created_orig' => '2016-08-23 06:22:24', 'updated_orig' => '2016-08-23 06:22:24',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 289, 'givenName' => 'Crystal', 'familyName' => 'MacKay', 'preferredName' => 'Crystal',
			'email' => 'crissie.m@hotmail.com', 'phone1' => '0427 141 264', 'phone2' => '',
			'address1' => '34 Pinto Dr', 'address2' => null,
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Calli Mackay', 'emergencyPhone1' => '07 5435 0399', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'gates- ticketing/parking/campground, shop, volunteer hospitality',
			'availability' => 'saturday morning',
			'commentsInfo' => null,
			'discovery' => 'facebook',
			'id_orig' => 2697, 'key_orig' => 'tk58', 'ip' => '123.211.139.243',
			'created_orig' => '2016-08-23 08:12:44', 'updated_orig' => '2016-08-23 08:12:44',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 290, 'givenName' => 'Juliette', 'familyName' => 'Sharp', 'preferredName' => '',
			'email' => 'jules.g.sharp@gmail.com', 'phone1' => '', 'phone2' => '',
			'address1' => '56 Baroon Pocket Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ron Sharp', 'emergencyPhone1' => '0409 928 656', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Prefer to work with Gaby Luft if possible.',
			'availability' => null,
			'commentsInfo' => null,
			'discovery' => 'Friend gaby Luft',
			'id_orig' => 2698, 'key_orig' => 'lclg2', 'ip' => '218.214.127.209',
			'created_orig' => '2016-08-23 10:22:05', 'updated_orig' => '2016-08-23 10:22:05',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 291, 'givenName' => 'Gavin', 'familyName' => 'Moss', 'preferredName' => 'Gav',
			'email' => 'circleoflove@outlook.com', 'phone1' => '0431 130 502', 'phone2' => '',
			'address1' => '', 'address2' => null,
			'locality' => 'Mapleton', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Setup, Gates, Shop, Volunteer Hospitality, Bump Out',
			'availability' => 'Thursday - From Early AM until 2pm, Friday - From Early AM All Day, Saturday - From Early AM All Day, Sunday - From Early AM until 1pm, Monday - From Early AM until 2pm',
			'commentsInfo' => 'Hello :) Last Minute I know... Love to lend a hand if there is still need - Would be a pleasure to contribute to such a Wonderful Community Event - Have a Happy Day',
			'discovery' => 'Just assumed - How else do festivals happen :) Was involved with WFF once upon a time...',
			'id_orig' => 2701, 'key_orig' => 'tkjmn', 'ip' => '58.96.47.62',
			'created_orig' => '2016-08-23 20:57:37', 'updated_orig' => '2016-08-23 20:57:37',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 292, 'givenName' => 'Luke', 'familyName' => 'McLaverty', 'preferredName' => '',
			'email' => 'karma30m@yahoo.com', 'phone1' => '0488 582 846', 'phone2' => '',
			'address1' => '11 Walsh St', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => 'Kat French', 'emergencyPhone1' => '07 3812 713?', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Stage and sound assistant with drainage design experience, traffic management, level 2 and level 2 first aid',
			'availability' => 'Fri evening 6pm -sun lunch',
			'commentsInfo' => 'Driving Andy Makin with RSA [ though injuries)',
			'discovery' => 'Andy Makin..my work 0730274713 best no to ring',
			'id_orig' => 2703, 'key_orig' => 'iounr', 'ip' => '149.135.146.29',
			'created_orig' => '2016-08-24 08:22:17', 'updated_orig' => '2016-08-24 08:22:17',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 293, 'givenName' => 'Claire', 'familyName' => 'Smith', 'preferredName' => '',
			'email' => 'eclairee@yahoo.com', 'phone1' => '0410 503 767', 'phone2' => '',
			'address1' => '30 Gumland Dr', 'address2' => null,
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jorj Watt', 'emergencyPhone1' => '0416 039 603', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Bar security, gates and tickets, volunteer hospitality.',
			'availability' => 'Mornings',
			'commentsInfo' => 'Am a health therapist.',
			'discovery' => 'I live here.',
			'id_orig' => 2705, 'key_orig' => '9gn6m', 'ip' => '60.231.85.248',
			'created_orig' => '2016-08-24 11:49:05', 'updated_orig' => '2016-08-24 11:49:05',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 294, 'givenName' => 'Lucia', 'familyName' => 'Gibson', 'preferredName' => 'Lucia',
			'email' => 'tome.88@live.com', 'phone1' => '0412 869 354', 'phone2' => '',
			'address1' => '', 'address2' => null,
			'locality' => 'Maroochydore', 'state' => 'Qld', 'postcode' => '4558', 'country' => 'Australia',
			'emergencyContact' => 'Ginetta', 'emergencyPhone1' => '0488 228 483', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Any',
			'availability' => 'Sunday',
			'commentsInfo' => 'Have volunteered many times at green room at Woodford folk festival',
			'discovery' => 'Internet',
			'id_orig' => 2707, 'key_orig' => 'aa849', 'ip' => '1.120.155.111',
			'created_orig' => '2016-08-24 16:07:29', 'updated_orig' => '2016-08-24 16:07:29',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 295, 'givenName' => 'Atlanta', 'familyName' => 'Wessberg', 'preferredName' => '',
			'email' => 'atlantarosewessberg@gmail.com', 'phone1' => '0421 373 256', 'phone2' => '',
			'address1' => 'Unit 1/24 Murray Ave', 'address2' => null,
			'locality' => 'Enoggera', 'state' => 'Qld', 'postcode' => '4051', 'country' => 'Australia',
			'emergencyContact' => 'James Van de Grift', 'emergencyPhone1' => '0466 398 194', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Cleaning, gates, shop, volunteer hospitality',
			'availability' => 'I\'m available during the whole weekend of the festival.',
			'commentsInfo' => 'I have lots of experience from a young age working for markets and music festivals and I would love to be involved with this event. Kerry Ley-Smith (my step mum) Sent you an email also.',
			'discovery' => 'A family friend of mine (Lynda Simpson) is associated and working for the festival.',
			'id_orig' => 2708, 'key_orig' => 'xqjd2', 'ip' => '124.170.213.27',
			'created_orig' => '2016-08-24 16:42:04', 'updated_orig' => '2016-08-24 16:42:04',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 346, 'givenName' => 'Austin', 'familyName' => 'Kerry', 'preferredName' => 'Kerry',
			'email' => 'synergymoon1@gmail.com', 'phone1' => '0413 663 619', 'phone2' => '07 3342 4836',
			'address1' => '44 Landor St', 'address2' => null,
			'locality' => 'Tarragindi', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => 'Iris Lane', 'emergencyPhone1' => '07 3356 2386', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Gates (ticketing, parking, campground), Shop, Volunteer hospitality',
			'availability' => 'all days of festival',
			'commentsInfo' => 'I would love to come and work with you guys',
			'discovery' => 'I saw on facebook',
			'id_orig' => 2712, 'key_orig' => '21ti12', 'ip' => '14.202.54.253',
			'created_orig' => '2016-08-25 12:25:43', 'updated_orig' => '2016-08-25 12:25:43',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 346, 'givenName' => 'Austin', 'familyName' => 'Kerry', 'preferredName' => 'Kerry',
			'email' => 'synergymoon1@gmail.com', 'phone1' => '0413 663 619', 'phone2' => '07 3342 4836',
			'address1' => '44 Landor St', 'address2' => null,
			'locality' => 'Tarragindi', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => 'Iris Lane', 'emergencyPhone1' => '07 3356 2386', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Gates (ticketing, parking, campground), Shop, Volunteer hospitality',
			'availability' => 'all days of festival',
			'commentsInfo' => 'I would love to come and work with you guys',
			'discovery' => 'I saw on facebook',
			'id_orig' => 2713, 'key_orig' => '21ti13', 'ip' => '14.202.54.253',
			'created_orig' => '2016-08-25 12:30:36', 'updated_orig' => '2016-08-25 12:30:36',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 296, 'givenName' => 'John Rpy', 'familyName' => 'Wright', 'preferredName' => 'John',
			'email' => 'artistmcsm@gmail.com', 'phone1' => '0424 936 432', 'phone2' => '07 5435 0278',
			'address1' => 'Lot 62 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tom Neilsen', 'emergencyPhone1' => '07 5494 4590', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'general trouble shooting- organising Stages (non sound aspects)- MCs and stage managers.',
			'availability' => 'All year- 25-28/8/16',
			'commentsInfo' => 'I have been on the committee for the last 4 years.',
			'discovery' => 'Noel told me about his idea for a festival in 2012 outside the Upfront club.',
			'id_orig' => 2718, 'key_orig' => 'zl94v', 'ip' => '106.69.81.176',
			'created_orig' => '2016-08-25 23:57:38', 'updated_orig' => '2016-08-25 23:57:38',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 297, 'givenName' => 'Jeffery', 'familyName' => 'Sheather', 'preferredName' => 'Jeff',
			'email' => 'jeff@coomooroo.net', 'phone1' => '0488 007 099', 'phone2' => '',
			'address1' => '6 Browning Boulevard', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Veronica Sheather', 'emergencyPhone1' => '0420 310 202', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Challenge me.',
			'availability' => 'Friday, Saturday and Sunday only.',
			'commentsInfo' => 'Looking forward to it.',
			'discovery' => 'My sister.',
			'id_orig' => 2720, 'key_orig' => '4o1up', 'ip' => '122.148.190.100',
			'created_orig' => '2016-08-26 06:31:10', 'updated_orig' => '2016-08-26 06:31:10',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 298, 'givenName' => 'Glenda', 'familyName' => 'Sawtell', 'preferredName' => '',
			'email' => 'glenda@abeo.com.au', 'phone1' => '0410 606 821', 'phone2' => '07 5445 4292',
			'address1' => '76 Stringybark Rd', 'address2' => null,
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Joel Davis', 'emergencyPhone1' => '0410 944 786', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => 'Any time Sunday',
			'commentsInfo' => null,
			'discovery' => 'from Roni Sheather another volunteer',
			'id_orig' => 2725, 'key_orig' => 'n2qzv', 'ip' => '58.106.9.177',
			'created_orig' => '2016-08-27 15:11:00', 'updated_orig' => '2016-08-27 15:11:00',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 299, 'givenName' => 'Emma', 'familyName' => 'Silverthorne', 'preferredName' => '',
			'email' => 'emsilverthorne@hotmail.com', 'phone1' => '0414 634 890', 'phone2' => '',
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'Bars..or Friday set up..',
			'availability' => 'Friday, Monday but not Sat evening',
			'commentsInfo' => null,
			'discovery' => null,
			'id_orig' => 2726, 'key_orig' => 'tayfs', 'ip' => '60.240.235.64',
			'created_orig' => '2016-08-28 07:45:15', 'updated_orig' => '2016-08-28 07:45:15',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 260, 'givenName' => 'Claire', 'familyName' => 'Meraki', 'preferredName' => 'Claire',
			'email' => 'clairemeraki@gmail.com', 'phone1' => '0421 205 672', 'phone2' => '07 5494 3472',
			'address1' => '40 Rosella Rd', 'address2' => null,
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kevin Babbage', 'emergencyPhone1' => '0438 006 055', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => null,
			'availability' => null,
			'commentsInfo' => null,
			'discovery' => 'Live here',
			'id_orig' => 2809, 'key_orig' => 'd38o1', 'ip' => '106.69.80.140',
			'created_orig' => '2017-02-02 10:35:56', 'updated_orig' => '2017-02-02 10:35:56',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 9, 'givenName' => 'Deborah', 'familyName' => 'Watson', 'preferredName' => '',
			'email' => 'fringedwellers@live.com', 'phone1' => '0481 541 504', 'phone2' => '',
			'address1' => '', 'address2' => null,
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => 'Margaret', 'emergencyPhone1' => '07 3282 9148', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1,
			'preferredJobs' => 'MC',
			'availability' => 'All festival',
			'commentsInfo' => 'Experienced MC including Woodford and many others ( 2 years at Maleny music weekend)',
			'discovery' => null,
			'id_orig' => 2837, 'key_orig' => 'c3wdv', 'ip' => '114.77.245.119',
			'created_orig' => '2017-02-26 14:19:35', 'updated_orig' => '2017-02-26 14:19:35',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 208, 'givenName' => 'Maria', 'familyName' => 'Zann', 'preferredName' => '',
			'email' => 'maria.zann@uqconnect.edu.au', 'phone1' => '0429 799 267', 'phone2' => '',
			'address1' => '318 Albert St', 'address2' => null,
			'locality' => 'Maryborough', 'state' => 'Qld', 'postcode' => '4650', 'country' => 'Australia',
			'emergencyContact' => 'Salko Mesic', 'emergencyPhone1' => '0490 159 209', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Session tent, gates,',
			'availability' => 'Yes',
			'commentsInfo' => 'Long. term folky and experienced session musician of old time traditional Australian European music. Understand folkies',
			'discovery' => 'Joan Chenery',
			'id_orig' => 2845, 'key_orig' => '78xnk', 'ip' => '120.155.158.108',
			'created_orig' => '2017-03-05 04:51:14', 'updated_orig' => '2017-03-05 04:51:14',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 300, 'givenName' => 'Helen', 'familyName' => 'Graham', 'preferredName' => '',
			'email' => 'catbirdgal@gmail.com', 'phone1' => '0428 923 448', 'phone2' => '',
			'address1' => '127 Kemp St', 'address2' => null,
			'locality' => 'Hamilton South', 'state' => 'NSW', 'postcode' => '2303', 'country' => 'Australia',
			'emergencyContact' => 'Emmanuel McClintock', 'emergencyPhone1' => '0413 896 525', 'emergencyPhone2' => null,
			'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Bars, shop, gates,stage management,',
			'availability' => 'Thursday- monday',
			'commentsInfo' => 'I\'m a registered nurse., Have organised numerous gigs over the years as husband a muso., Have owned an art gallery and shop.',
			'discovery' => 'My sister Marian Graham is a volunteer and she told me about it.',
			'id_orig' => 2860, 'key_orig' => 'wowtn', 'ip' => '123.100.46.33',
			'created_orig' => '2017-03-07 18:51:38', 'updated_orig' => '2017-03-07 18:51:38',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 301, 'givenName' => 'Pierre', 'familyName' => 'Nicol', 'preferredName' => 'Pierre',
			'email' => 'punyaji@gmail.com', 'phone1' => '0418 782 784', 'phone2' => '',
			'address1' => '92 Gillies St', 'address2' => null,
			'locality' => 'Zillmere', 'state' => 'Qld', 'postcode' => '4034', 'country' => 'Australia',
			'emergencyContact' => 'Mr Renzo Nicol', 'emergencyPhone1' => '07 3846 3114', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'preferredJobs' => 'Assisting Stage management',
			'availability' => 'Saturday 2 September 2017',
			'commentsInfo' => 'I have been part of community theatre since 2002. Although I do have back problems and is managed by medication I do have strategies to cope with this issue.',
			'discovery' => 'Via a Facebook post.',
			'id_orig' => 2861, 'key_orig' => 'tu0ts', 'ip' => '120.22.113.217',
			'created_orig' => '2017-03-07 19:57:55', 'updated_orig' => '2017-03-07 19:57:55',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%history}}', [
			'user_id' => 15, 'givenName' => 'Suzanne', 'familyName' => 'Chumbley', 'preferredName' => 'Suzanne',
			'email' => 'suzannec7@optusnet.com.au', 'phone1' => '0428 745 498', 'phone2' => '',
			'address1' => '2/11 Suller St', 'address2' => null,
			'locality' => 'Caloundra', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Sam Dougall', 'emergencyPhone1' => '0408 671 583', 'emergencyPhone2' => null,
			'rsa' => 0, 'dl_c' => 1, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'preferredJobs' => 'Selling drinks tickets if that still exists., My friend and I did this job last year and we would both like to do it again, if possible. Her name is Susan M. Brown.',
			'availability' => 'I don\'t think i will be available on Friday, however that may change.',
			'commentsInfo' => null,
			'discovery' => 'I am a repeat volunteer at the festival.',
			'id_orig' => 2871, 'key_orig' => '944z1', 'ip' => '114.78.35.126',
			'created_orig' => '2017-03-08 20:54:55', 'updated_orig' => '2017-03-08 20:54:55',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
	}
}
