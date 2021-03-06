<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\UserInfo;

class UserInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /* // ? Prendo tutti i diversi id da User e li trasformo in un array
        $user_ids = User::pluck('id')->toArray();

        for ($i=0; $i < count($user_ids); $i++) {
            $newUser = new UserInfo();
            $newUser->user_id = $faker->unique()->randomElement($user_ids);
            $newUser->phone = $faker->phoneNumber();
            $newUser->address = $faker->streetAddress();
            $newUser->avatar = $faker->imageUrl(250,250);
            $newUser->save();
        } */

        $users = User::all();
        for ($i = 0; $i < count($users); $i++) {
            $new_UserInfo = new UserInfo();
            $new_UserInfo->user_id = $i + 1;
            $new_UserInfo->ruolo = $faker->text(50);
            $new_UserInfo->costo_orario = rand(1, 1000)/100;

            $new_UserInfo->save();
        }
        //
    }
}
