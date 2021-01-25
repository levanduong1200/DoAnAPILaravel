<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'category';

    protected $fillable = ['name','status','link','ordering','image'];

}
