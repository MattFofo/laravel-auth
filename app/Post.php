<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Post extends Model
{

    //metodo per utilizare lo slug (o quello ceh si vuole) come identificativo del post per la route
    public function getRouteKeyName() {
        return 'slug';
    }


    protected $fillable = [
        'title',
        'content',
        'slug',
        'user_id'
    ];

    //metodo per generare slug unico da stringa
    static public function generateSlug($fromThisStr) {
        $baseSlug = Str::slug($fromThisStr, '-');
        $slug = $baseSlug;
        $i = 1;

        while (self::where('slug', $slug)->first()) {
            $slug = "$baseSlug-$i";
            $i++;
        }
        return $slug;
    }


    //relazione con tabella users

    public function user() {
        return $this->belongsTo('App\User');
    }
}
