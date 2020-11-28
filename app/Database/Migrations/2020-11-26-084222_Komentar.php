<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komentar extends Migration
{
	private $table = 'komentar';
	public function up()
	{
		$this->forge->addField([
			'id_komentar'          => [
				'type'           	 => 'VARCHAR',
				'constraint'     	 => '10',
				'auto_increment' 	 => true,
			],
			'id_user'          => [
					'type'           => 'VARCHAR',
					'constraint'     => '20',
					'default'		 => 'id_user'
			],
			'id_resep'          => [
				'type'         		 => 'VARCHAR',
				'constraint'    	 => '10'
			],
			'waktu_komen'       => [
					'type'           => 'DATETIME',					
			],
			'komentar' => [
					'type'           => 'TEXT',	
					'null'           => true,
			],
			'gambar' => [
				'type'           	=> 'TEXT',	
				'null'         		=> true,
			]
	]);
	$this->forge->addKey('id_komentar', true);
	$this->forge->addForeignKey('id_user','User','id_user','CASCADE','CASCADE');
	$this->forge->addForeignKey('id_resep','Resep','id_resep','CASCADE','CASCADE');
	$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
