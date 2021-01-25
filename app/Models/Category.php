<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'category';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable = ['name','status','slug'];

    public function products(){
        return $this->hasMany(Product::class,'category_id','id')->where('status',1);
    }
    protected $hidden = ["created_at", "updated_at"];
}
