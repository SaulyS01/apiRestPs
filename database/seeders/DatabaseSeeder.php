<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Miembro;
use App\Models\Equipo;
use Illuminate\Database\Seeder;
use Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $equipo1 = Equipo::create(['equipo' => $faker->word, 'estado' => '1']);
        $equipo2 = Equipo::create(['equipo' => $faker->word, 'estado' => '1']);

        $miembro1 = Miembro::create(['nombres' => $faker->name, 'edad' => $faker->numberBetween(18, 50), 'feNacimiento' => $faker->date('Y-m-d', 'now'), 'idEquipo' => $equipo1->id]);
        $miembro2 = Miembro::create(['nombres' => $faker->name, 'edad' => $faker->numberBetween(18, 50), 'feNacimiento' => $faker->date('Y-m-d', 'now'), 'idEquipo' => $equipo1->id]);
        $miembro3 = Miembro::create(['nombres' => $faker->name, 'edad' => $faker->numberBetween(18, 50), 'feNacimiento' => $faker->date('Y-m-d', 'now'), 'idEquipo' => $equipo1->id]);
        $miembro4 = Miembro::create(['nombres' => $faker->name, 'edad' => $faker->numberBetween(18, 50), 'feNacimiento' => $faker->date('Y-m-d', 'now'), 'idEquipo' => $equipo2->id]);
        $miembro5 = Miembro::create(['nombres' => $faker->name, 'edad' => $faker->numberBetween(18, 50), 'feNacimiento' => $faker->date('Y-m-d', 'now'), 'idEquipo' => $equipo2->id]);
        $miembro6 = Miembro::create(['nombres' => $faker->name, 'edad' => $faker->numberBetween(18, 50), 'feNacimiento' => $faker->date('Y-m-d', 'now'), 'idEquipo' => $equipo2->id]);
        
    }
}
