<?php
defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_add_subcategories extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
				
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'cat_id' => array(
				'type' => 'INT',
				'unsigned' => TRUE
				
			),
			'bajin'=>array(
			      'type'=>'varchar',
			       'constraint'=>'30'
			   )
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('subcategories');
	}

	public function down()
	{
		$this->dbforge->drop_table('subcategories');
	}
}