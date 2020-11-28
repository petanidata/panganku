<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	private $table = 'user';
	public function up()
	{
		$this->forge->addField([
			'id_user'          => [
					'type'           => 'VARCHAR',
					'constraint'     => '20',
					'auto_increment' => true,
			],
			'username'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '20',
					'default'		 => 'nama_pengguna',
					
			],
			'nama_lengkap' => [
					'type'           => 'VARCHAR',
					'constraint'     => '50',	
					'default'		 => 'Nama_Lengkap'
			],
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
				'default'		 => 'Email'
			],
			'password' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'default'		 => 'Password'
			],
			'jenis_kelamin' => [
				'type'           => 'VARCHAR',
				'constraint'     => '1'
			],
			'alamat' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'gambar_profile' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true,
				'default'		 => 'img/default.jpg',
			],
			'bio' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true,
				'default'		 => 'img/default.jpg',
			],
			'is_admin' => [
				'type'           => 'VARCHAR',
				'constraint'     => '1',
				'null'           => true,
				'default'		 => 'N',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]

	]);
	$this->forge->addKey('id_user', true);
	$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
