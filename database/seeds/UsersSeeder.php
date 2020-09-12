<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            ['id' => 1, 'login' => 'webmaster', 'password' => bcrypt('123456'), 'status' => 1, 'permission_id' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 2, 'login' => 'gerente', 'password' => bcrypt('123456'), 'status' => 1, 'permission_id' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 3, 'login' => 'atendente', 'password' => bcrypt('123456'), 'status' => 1, 'permission_id' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 4, 'login' => 'hospede', 'password' => bcrypt('123456'), 'status' => 1, 'permission_id' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ];

        DB::connection('mysql')->table('users')->insert($users);
    }
}
