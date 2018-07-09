<?php
defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_add_product extends CI_Migration {

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
				'constraint' => '40',
			),
			'sub_id' => array(
				'type' => 'INT',
				'unsigned' => TRUE
				
			),
			'price'=> array(
			      'type'=>'INT'    
			   ),
			'description'=> array(
			      'type'=> 'CHAR',
			      'unsigned' => TRUE,

			   ),
			'image'=>array(
			      'type'=> 'VARCHAR',
			      'unsigned' => TRUE,
			      'constraint' => '70'

			 ),

			'location'=>array(
				'type'=>'VARCHAR',
				'constraint' => '50'
			),

			'data_of_put'=>array(
				'type'=>'TIMESTAMP'

			),

			'data_of_update'=>array(
				'type'=>'TIMESTAMP'
			),

			'info_array'=>array(
			     'type'=>'VARCHAR',
			     'constraint' => '50'

			 ),
			'us_id'=>array(
			       'Type'=>'INT'
			   )

		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('products');
	}

	public function down()
	{
		$this->dbforge->drop_table('products');
	}
}