<?php
defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_add_statement extends CI_Migration {

	public function up()
	{
	if(!$this->db->table_exists('statement')){
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
				
			),
			'sub_id' => array(
				'type' => 'INT',
				'unsigned' => TRUE
				
			),
			'us_id'=>array(
			       'Type'=>'INT'
			   ),

			'data_of_put TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
			
			'info_array'=>array(
			     'type'=>'TEXT',
			     'constraint' => '50000'
			 ),
			'done'=>array(
				'type'=>'int',
				'constraint'=>'1',
				'default'=>'0'
			)

		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('statement');
	}
}
	public function down()
	{
		$this->dbforge->drop_table('statement');
	}
}