<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komentar extends Migration
{
	private $table = 'komentar';
	public function up()
	{
		$this->forge->addField([
			'id_komentar'          => [
				'type'           	 => 'INT',
				'unsigned'		=> true,
				'null'			 => false,		
                'auto_increment' => true
			],
			'id_user'          => [
				'type'           	 => 'INT',
				'unsigned'		 => true,
			],
			'id_resep'          => [
				'type'           	 => 'INT',
				'unsigned'		 => true,
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
