<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mastercv extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'name' => [
				'type'           => 'VARCHAR',
				'constraint'     => 85,
			],
			'title' => [
				'type'           => 'VARCHAR',
				'constraint'     => 85,
			],
			'description' => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'phone' => [
				'type'           => 'VARCHAR',
				'constraint'     => 20,
			],
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'     => 85,
			],
			'address' => [
				'type'           => 'TEXT',
				'null'     		 => true
			],
			'photo' => [
				'type'           => 'VARCHAR',
				'constraint'     => 85,
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('master_cvs');
	}

	public function down()
	{
		//
	}
}
