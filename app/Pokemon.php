<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $fillable = array('user_id', 'title', 'content', 'image_url', 'slug');
    protected $table = 'pokemons';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
