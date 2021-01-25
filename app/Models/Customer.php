<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Customer as Authenticatable;
use Illuminate\Database\Eloquent\Model;



class Customer extends Model
{

    use Notifiable;

    protected $table = 'customer';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable = ['name','email','phone','address'];
    function billDetails(){
        return $this->hasMany('App\Models\Order_detail');
    }
}
