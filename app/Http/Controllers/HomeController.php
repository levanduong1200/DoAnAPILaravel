<?php

namespace App\Http\Controllers;

use App\Helper\CartHelper;

use App\Jobs\SendReminderEmail;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_detail;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function SendReminderEmail()
    {
        $user = new User();
        $user->name = "BiTi";
        $user->email = "bitgi@gmail.com";
        $user->password = "3243asff";
        $job = (new SendReminderEmail($user))->delay(60);
        // dd($job);
        dispatch($job);
        return "Successed";
    }

    public function index()
    {
        $top_product = Product::limit(6)->orderBy('id', 'DESC')->get();
        $top_product = Product::Paginate(6);
        // cau hinh hang so trong file env
        $sale_product = Product::where('sale_price', '>', 0)->where('status', 1)->limit(10)->orderBy('id', 'DESC')->get();

        return view('index', compact('top_product', 'sale_product'));
    }
    public function allproduct()
    {
        $top_product = Product::limit(12)->orderBy('id', 'DESC')->get();
        // cau hinh hang so trong file env
        $sale_product = Product::where('sale_price', '>', 0)->where('status', 1)->limit(10)->orderBy('id', 'DESC')->get();

        return view('allproduct', compact('top_product', 'sale_product'));
    }

    public function view($slug)
    {
        $model = Category::where('slug', $slug)->first();
        $product = Product::where('slug', $slug)->first();


        if ($model) {
            return view('product', ['model' => $model]);
        } else if ($product) {
            return view('product-detail', ['model' => $product]);
        } else {
            return redirect()->route('home');
        }
    }

    public function dangxuat()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function dathang()
    {

        return view('dathang');
    }
    public function postdathang(Request $req, CartHelper $cart)
    {

        $this->validate($req, [
            'email' => 'required|email',
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ], [
            'email.required' => 'vui long nhap lai',
            'email.email' => 'email ko dung',
            'name.required' => 'vui long nhap ho ten',
            'phone.required' => 'vui long nhap sdt',
            'address.required' => 'vui long nhap dia chi'
        ]);

        $cus = new Customer();
        $cus->name = $req->name;
        $cus->email = $req->email;
        $cus->phone = $req->phone;
        $cus->address = $req->address;
        $cus->save();

        $order = new Order();
        $order->id = $req->id;
        $order->customer_id = $cus->id;
        $order->email = $req->email;
        $order->phone = $req->phone;
        $order->address = $req->address;
        $order->save();

        foreach ($cart->items as $product_id => $item) {
            if (($item['quantity'] ?? 1) < 1)
                $quantity = 1;
            else
                $quantity = $item['quantity'];
            $price = $item['price'] * $item['quantity'];
            $order_id = $order->id;
            Order_detail::create([
                'order_id' => $order_id,
                'product_id' => $product_id,
                'price' => $price,
                'quantity' => $quantity
            ]);
        }
        session(['cart' => '']);



        return redirect()->route('thanhcong');
    }
    public function thanhcong()
    {
        return view('thanhcong');
    }


    public function search(Request $req)
    {
        $query = $req->input('query');
        $product = Product::where('name', 'like', '%' . $query . '%')->get();
        return view('search')->with('product', $product);
    }
    public function unactive($id)
    {
        DB::table('orders')->where('id', $id)->update(['status' => 0]);
        return redirect()->route('order.index');
    }
    public function active($id)
    {
        DB::table('orders')->where('id', $id)->update(['status' => 1]);
        return redirect()->route('order.index');
    }
}
