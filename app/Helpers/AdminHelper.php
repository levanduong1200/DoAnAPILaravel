<?php
use App\Models\Product;
use App\Models\Order;
use App\User;

function count_item_product(){
    return $product_cnt = Product::where('status','=',1)->count();
}
function count_item_orders(){
    return $or = Order::where('status','=',0)->count();
}

function count_item_1(){
    return $or_1 = Order::where('status','=',1)->count();
}
function count_user(){
    return $us = User::where('id','>=',1)->count();
}
function inc_number(&$i = 0){
    $i++;
    return $i;
}
?>
