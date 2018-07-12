<?php
defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_add_products extends CI_Migration {

	public function up()
	{
	if(!$this->db->table_exists('products')){
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
				
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '40',
			),
			'sub_id' => array(
				'type' => 'INT',
				'unsigned' => TRUE
				
			),
			'description'=> array(
			      'type'=> 'CHAR',
			      'unsigned' => TRUE,

			   ),
			
			'location'=>array(
				'type'=>'VARCHAR',
				'constraint' => '50'
			),

			'data_of_put TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',

			'data_of_update TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
			
			'info_array'=>array(
			     'type'=>'VARCHAR',
			     'constraint' => '200'

			 ),
			'us_id'=>array(
			       'Type'=>'INT'
			   )

		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('products');
	}
}
	public function down()
	{
		$this->dbforge->drop_table('products');
	}
}