<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permissions = [
            ['id' => '1', 'name' => 'Web Master'],
            ['id' => '2','name' => 'Gerente'],
            ['id' => '3','name' => 'Atendente'],
            ['id' => '4','name' => 'Hospede'],
        ];

        DB::connection('mysql')->table('permissions')->insert($permissions);
    }
}
