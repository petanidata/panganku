<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Artikel extends Migration
{
	private $table = 'artikel';
	public function up()
	{
		$this->forge->addField([
			'id_artikel'          => [
				'type'           	 => 'VARCHAR',
				'constraint'     	 => '10',
				'auto_increment' 	 => true,
			],
			'id_user'          => [
					'type'           => 'VARCHAR',
					'constraint'     => '20',
					'default'		 => 'id_user'
			],
			'judul'          => [
				'type'         		 => 'VARCHAR',
				'constraint'    	 => '100',
				'default'		 => 'judul'
			],
			'isi' => [
					'type'           => 'TEXT',	
					'default'		 => 'isi'
			],
			'gambar' => [
				'type'           	=> 'TEXT',	
				'null'         		=> true,
			]
	]);
	$this->forge->addKey('id_artikel', true);
	$this->forge->addForeignKey('id_user','User','id_user','CASCADE','CASCADE');
	$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
