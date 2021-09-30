<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'ci'=>"101010",
            'nombre'=>"ALBERTO",
            'celular'=>"101010",
            'salario'=>"5000",
            'direccion'=>"calle x",
        ]);
    }
}
