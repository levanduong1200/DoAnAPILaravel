<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'product';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable = ['name','status','slug','image','price','sale_price','category_id','content'];
    
    function OrderDetails(){
        return $this->hasMany('App\Models\Order_detail');
    }
    public function cat(){
        return $this->hasOne(Category::class,'id','category_id');
    }
}


?>
