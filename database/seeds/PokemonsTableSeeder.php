
<?php

use App\Models\Pokemon;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;

class PokemonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $pokemonList = json_decode(config('pokemons'));
        $user_ids = User::pluck('id')->toArray();

        foreach( $pokemonList as $pokemon){
            $newPokemon = new Pokemon();
            $newPokemon->user_id = $faker->randomElement($user_ids);
            $newPokemon->name = $pokemon->name;
            $newPokemon->main_type = $pokemon->type1;
            $newPokemon->additional_type = $pokemon->type2;
            $newPokemon->save();
        }
	}
}
