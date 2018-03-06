<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
class UsuarioTabaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<10; $i++)
        {
            // $id = DB::table('users')->insertGetId(array(  //Cuando se desea crear seeder para todas las tablas en una sola ejecucion
            DB::table('users')->insert(array(
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => \Hash::make('marvin123'),
                'id_cat' => $faker->numberBetween($min = 1, $max = 3)

            ));
           /* DB::table('otraTabla')->insert(array(
                'campo' => $faker->name(),
                'id_relacion' => $id //Se puede utilizar los id que guarda cuando inserta nuevo registro,variable declarada arriba
            ));*/
        }

    }
}
