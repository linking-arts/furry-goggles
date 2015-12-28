<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'role' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hash_change_password' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'work_phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'phone_type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 14, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'street_address' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'additional_address' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'city' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'state' => array('type' => 'string', 'null' => true, 'default' => 'LA', 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'zip' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'country' => array('type' => 'string', 'null' => true, 'default' => 'USA', 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'race' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ethnicity' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gender' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'trep_company' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'trep_title' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'trep_founder' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'industry_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'stage_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'professional_company' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'professional_title' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'professional_industry' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'investor_company' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'investor_title' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'investor_type_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'investor_nola' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'investor_nola_details' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'investor_angellist' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'investor_has_invested' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'investor_has_invested_nola' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'investor_accreditation' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'student_education_level' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'student_insitution' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'student_institution_city' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'student_institution_state' => array('type' => 'string', 'null' => true, 'default' => 'LA', 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'who' => array('type' => 'string', 'null' => true, 'default' => 'null', 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'other' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'completed_registration' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'how_heard' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'bio' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'partner_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'badge_type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'email' => array('column' => 'email', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'role' => 'Lorem ipsum dolor sit amet',
			'hash_change_password' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-12-28 04:13:48',
			'modified' => '2015-12-28 04:13:48',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'work_phone' => 'Lorem ipsum ',
			'phone_type' => 'Lorem ipsum ',
			'street_address' => 'Lorem ipsum dolor sit amet',
			'additional_address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'state' => 'L',
			'zip' => 'Lorem ipsu',
			'country' => 'L',
			'race' => 'Lorem ipsum dolor sit a',
			'ethnicity' => 'Lorem ipsum dolor sit a',
			'gender' => 'Lorem ipsu',
			'trep_company' => 'Lorem ipsum dolor sit amet',
			'trep_title' => 'Lorem ipsum dolor sit amet',
			'trep_founder' => 1,
			'industry_id' => 'Lorem ipsum dolor sit ame',
			'stage_id' => 1,
			'professional_company' => 'Lorem ipsum dolor sit amet',
			'professional_title' => 'Lorem ipsum dolor sit amet',
			'professional_industry' => 1,
			'investor_company' => 'Lorem ipsum dolor sit amet',
			'investor_title' => 'Lorem ipsum dolor sit amet',
			'investor_type_id' => 'Lorem ipsum dolor ',
			'investor_nola' => 1,
			'investor_nola_details' => 'Lorem ipsum dolor sit amet',
			'investor_angellist' => 'Lorem ipsum dolor sit amet',
			'investor_has_invested' => 1,
			'investor_has_invested_nola' => 1,
			'investor_accreditation' => 1,
			'student_education_level' => 'Lorem ipsum dolor sit amet',
			'student_insitution' => 'Lorem ipsum dolor sit amet',
			'student_institution_city' => 'Lorem ipsum dolor sit amet',
			'student_institution_state' => 'L',
			'who' => 'Lorem ipsum dolor sit amet',
			'other' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'completed_registration' => '2015-12-28 04:13:48',
			'how_heard' => 'Lorem ipsum dolor sit amet',
			'bio' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'partner_id' => 1,
			'badge_type_id' => 1
		),
	);

}
