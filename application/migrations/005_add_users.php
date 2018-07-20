<?php
defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_add_users extends CI_Migration {

	public function up()
	{
	if(!$this->db->table_exists('users')){
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
				
			),
			'user_name' => array(
				'type' => 'VARCHAR',
				'constraint' => '40',
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint'=>'20',
				'unsigned' => TRUE
				
			),
			
			'mail'=> array(
			      'type'=> 'VARCHAR',
			      'constraint'=>'40',
			      'unsigned' => TRUE,

			   ),
			'image'=>array(
			      'type'=> 'VARCHAR',
			      'unsigned' => TRUE,
			      'constraint' => '150'

			 ),
			'data_of_signup TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',

			'wallet_number'=>array(
			        'type'=>'INT',
			         'constraint'=>'6',
			         // 'auto_increment' => TRUE
			         
			),
			'contact_information'=>array(
			         'type' => 'VARCHAR',
				    'constraint' => '300'
				),
			'location_user'=>array(
				'type'=>'VARCHAR',
				'constraint' => '70'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('users');
	}
}
	public function down()
	{
		$this->dbforge->drop_table('users');
	}
}