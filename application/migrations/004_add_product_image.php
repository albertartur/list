<?php
defined('BASEPATH') OR exit('Доступ к скриптам запрещен.');

class Migration_add_product_image extends CI_Migration {

	public function up()
	{
	if(!$this->db->table_exists('image')){
		$this->dbforge->add_field(array(
			'product_id' => array(
				'type' => 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
				
			),
			'image'=>array(
			      'type'=>'Varchar',
			      'constraint' => '60'
			       )

		));
		$this->dbforge->add_key('product_id', TRUE);
		$this->dbforge->create_table('image');
	}
}
	public function down()
	{
		$this->dbforge->drop_table('image');
	}
}