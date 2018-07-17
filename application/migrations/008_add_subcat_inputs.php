<?php
defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_add_subcat_inputs extends CI_Migration {

	public function up()
	{
	if(!$this->db->table_exists('subcat_inputs')){
		$this->dbforge->add_field(array(
			'sub_id' => array(
				'type' => 'INT',
				'unsigned' => TRUE
				
			),
            'sub_input'=>array(
            	'type'=>'VARCHAR',
            	'constraint'=>'50'
            )
		));
		// $this->dbforge->add_key('sub_id', TRUE);
		$this->dbforge->create_table('subcat_inputs');
	}
}
	public function down()
	{
		$this->dbforge->drop_table('subcat_inputs');
	}
}