<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Customer as Authenticatable;
use Illuminate\Database\Eloquent\Model;



class Order extends Model
{

    use Notifiable;

    protected $table = 'orders';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    function orderDetails(){
        return $this->hasMany('App\Models\Order_detail');
    }
    function customers(){
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
    function users(){
        return $this->belongsTo('App\User','user_id');
    }

    protected $fillable = ['id','customer_id','email','phone','address'];

}
