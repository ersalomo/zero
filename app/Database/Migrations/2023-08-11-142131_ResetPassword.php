<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ResetPassword extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '25',
                'unique' => true,
            ],
            'token' => [
                'type'=>'VARCHAR',
                'constraint' => '64',
            ],
            'created_at timestamp default current_timestamp',
        ]);

        $this->forge->createTable('reset_passwords');
    }

    public function down()
    {
        $this->forge->dropTable('reset_passwords');
    }
}
