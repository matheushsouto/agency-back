<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            ['module_id' => 1, 'permission_id' => 2],
            ['module_id' => 2, 'permission_id' => 2],
            ['module_id' => 3, 'permission_id' => 2],
        ];

        DB::connection('mysql')->table('module_permission')->insert($users);
    }
}
