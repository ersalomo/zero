<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {;
        $this->forge->addField([
            'id'=> [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'username' => [
                'type' => 'varchar',
                'unique' =>  true,
                'constraint' => '16'
            ],
            'password'=> [
                'type' => 'varchar',
                'constraint' => '255'
            ],
            'email' => [
                'type' => 'varchar',
                'unique' =>  true,
                'constraint' => '30',
            ],
            'name' => [
                'type' => 'varchar',
                'constraint' => '30',
            ],
            'picture' => [
                'type' => 'varchar',
                'constraint' => '255',
            ],
            'created_at timestamp default current_timestamp',
            'updated_at timestamp default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');

    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
