<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            /**
             * Permission Web Master.
             */
            ['user_id' => 1, 'module_id' => 1, 'read' => 1, 'write' => 1, 'delete' => 1],
            ['user_id' => 1, 'module_id' => 2, 'read' => 1, 'write' => 1, 'delete' => 1],
            ['user_id' => 1, 'module_id' => 3, 'read' => 1, 'write' => 1, 'delete' => 1],
            ['user_id' => 1, 'module_id' => 4, 'read' => 1, 'write' => 1, 'delete' => 1],
            ['user_id' => 1, 'module_id' => 5, 'read' => 1, 'write' => 1, 'delete' => 1],
            ['user_id' => 1, 'module_id' => 6, 'read' => 1, 'write' => 1, 'delete' => 1],
            ['user_id' => 1, 'module_id' => 6, 'read' => 1, 'write' => 1, 'delete' => 1],
            ['user_id' => 1, 'module_id' => 7, 'read' => 1, 'write' => 1, 'delete' => 1],
            /**
             * Permission Manager.
             */
            ['user_id' => 2, 'module_id' => 5, 'read' => 1, 'write' => 1, 'delete' => 1],
            ['user_id' => 2, 'module_id' => 6, 'read' => 1, 'write' => 1, 'delete' => 1],
            /**
             * Permission Atendent.
             */
            ['user_id' => 3, 'module_id' => 1, 'read' => 1, 'write' => 1, 'delete' => 1],
            ['user_id' => 3, 'module_id' => 7, 'read' => 1, 'write' => 1, 'delete' => 1],
        ];

        DB::connection('mysql')->table('module_user')->insert($users);
    }
}
