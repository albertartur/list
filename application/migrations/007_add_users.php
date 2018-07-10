<?php
defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_add_users extends CI_Migration {

	public function up()
	{
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
				'type' => 'INT',
				'unsigned' => TRUE
				
			),
			
			'mail'=> array(
			      'type'=> 'CHAR',
			      'unsigned' => TRUE,

			   ),
			'image'=>array(
			      'type'=> 'VARCHAR',
			      'unsigned' => TRUE,
			      'constraint' => '70'

			 ),
			'data_of_signup'=>array(
				'type'=>'TIMESTAMP'

			),
			// 'sequarity'=>array(
			//       'type'  )

		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('users');
	}

	public function down()
	{
		$this->dbforge->drop_table('users');
	}
}