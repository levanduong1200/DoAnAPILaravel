<?php

namespace App\Http\Controllers\Admin;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    public function index()
    {

        // $cats = Category::all();
        $product = Product::paginate(5);
        return view('admin.product.index',[
            'products' => $product
        ]);
    }


    public function edit($id)
    {
        $cats = Category::all();
        $model = Product::find($id);

        return view('admin/product/edit',[
            'model' => $model,
            'cats' => $cats
        ]);
    }
    public function show($id){
        echo 'showw';
    }


    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->back();

    }

    public function create()
    {
        $cats = Category::all();

        return view('admin.product.add',compact('cats'));

    }


    public function store(ProductRequest $request)
    {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $file->move(public_path('uploads'), $fileName);
        
        $name = $request->name;
        $slug = $request->slug;
        $price = $request->price;
        $sale_price = $request->sale_price;
        $content = $request->content;
        $category_id = $request->category_id;

        $product = new Product();
        $product->image = $fileName;
        $product ->name = $name;
        $product ->slug = $slug;
        $product ->price = $price;
        $product ->sale_price = $sale_price;
        $product ->content = $content;
        $product ->category_id = $category_id;

        $product->save();


        return redirect()->route('product.index');
    }
    public function update($id, ProductRequest $request)
    {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $file->move(public_path('uploads'), $fileName);
        $request->offsetUnset('_token');
        $request->offsetUnset('_method');


        $rs = $request->all();
        $rs['image']=$fileName;

        Product::where(['id'=>$id])->update($rs);
        // $product = Product::find($id);
        // $product->image = $fileName;
        // $product->save();
        return redirect()->route('product.index');

    }
}
?>
