<?php
class Migration_kapitalisasi extends CI_Migration {

	public function up() {
		$this->dbforge->add_field(array(
			'id' => array('type' => 'INT', 'constraint' => 11, 'auto_increment' => TRUE),
			'id_kategori' => array('type' => 'INT', 'constraint' => 11),
			'id_spk' => array('type' => 'INT', 'constraint' => 11),
			'log_action' => array('type' => 'VARCHAR', 'constraint' => 255, 'default' => null),
			'log_user' => array('type' => 'VARCHAR', 'constraint' => 255, 'default' => null),
			'log_time' => array('type' => 'DATETIME', 'default' => null),
			'is_deleted' => array('type' => 'TINYINT', 'constraint' => 1, 'default' => 0),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('kapitalisasi');
	}

	public function down() {
		$this->dbforge->drop_table('kapitalisasi');
	}
}