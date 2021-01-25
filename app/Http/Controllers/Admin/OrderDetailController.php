<?php

namespace App\Http\Controllers\Admin;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Order;
use App\Models\Order_detail;

class OrderDetailController extends Controller
{

    public function index()
    {

        $order_detail = Order_detail::paginate(10);
        return view('admin.order_detail.index',[
            'order_detail' => $order_detail
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
