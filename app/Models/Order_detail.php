<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Customer as Authenticatable;
use Illuminate\Database\Eloquent\Model;



class Order_detail extends Model
{

    use Notifiable;

    protected $table = 'order_detail';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    function products(){
        return $this->belongsTo('App\Models\Product','product_id');
    }

    function orders(){
        return $this->belongsTo('App\Models\Order','order_id');
    }

    protected $fillable = ['order_id','product_id','quantity','price'];

}
