<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //? costruisco prima il mio profilo admin
        $newUser = new User();
        $newUser->name = "admin";
        $newUser->email = "admin@mail.it";
        $newUser->password = Hash::make("admin");
        $newUser->save();

        for ($i=0; $i < 10 ; $i++) {
            $newUser = new User();
            $newUser->name = $faker->userName();
            $newUser->email = $faker->email();
            $newUser->password = Hash::make("admin" . $i) ;
            $newUser->save();
        }
    }
}
