<?php

namespace App\Http\Controllers\Admin;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Order;

class OrdersController extends Controller
{

    public function index()
    {
        $top_order = Order::limit(10)->orderBy('id','DESC')->get();

        $order = Order::paginate(10);
        return view('admin.order.index',[
            'order' => $order,compact('top_order')
        ]);
    }


    public function edit($id)
    {


    }
    public function show($id){

    }


    public function destroy($id)
    {

    }

    public function create()
    {


    }


    public function store(ProductRequest $request)
    {

    }
    public function update($id, ProductRequest $request)
    {
    }

}
?>
