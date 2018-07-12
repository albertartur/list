<?php

defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_add_admin extends CI_Migration {

	public function up()
	{
	if(!$this->db->table_exists('admin')){
		$this->dbforge->add_field(array(
			'password' => array(
				'type' => 'varchar',
				'constraint' => '30',
				'unsigned' => TRUE	
			),
			'login' => array(
				'type' => 'VARCHAR',
				'constraint' => '30'
	    	)
			
		));
		
		$this->dbforge->create_table('admin');
	}
}
	public function down()
	{
		$this->dbforge->drop_table('admin');
	}
}