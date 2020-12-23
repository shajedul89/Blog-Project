<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function tags(){
        return $this -> belongsToMany('App\Models\tag');
    }

    public function categories(){
        return $this -> belongsToMany('App\Models\postCat','cat_post','post_id','cat_id');
    }
}
