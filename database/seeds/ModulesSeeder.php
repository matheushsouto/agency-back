<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            ['id' => 1, 'name' => 'Hóspede', 'slug' => 'persona/guest'],
            ['id' => 2, 'name' => 'Atendente de Hotel', 'slug' => 'persona/attendant'],
            ['id' => 3, 'name' => 'Gerente de Hotel', 'slug' => 'persona/manager'],
            ['id' => 4, 'name' => 'Agente de Viagens', 'slug' => 'persona/agent'],
            ['id' => 5, 'name' => 'Hoteis', 'slug' => 'booking/hotel'],
            ['id' => 6, 'name' => 'Quartos', 'slug' => 'booking/bedroom'],
            ['id' => 7, 'name' => 'Reservas', 'slug' => 'booking/reserva'],
        ];

        DB::connection('mysql')->table('modules')->insert($users);
    }
}
