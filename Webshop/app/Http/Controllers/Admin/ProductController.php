<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index(Request $request)
    {
        $dataCategory = Category::all();
        $data = Product::where('name', 'like', '%' . $request->search . '%')->paginate(10)->appends(['search' => $request->search]);
        return view('admin.product.product', compact('data', 'dataCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataCategory = Category::all();
        return view('admin.product.create', compact('dataCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products',
            'category_id' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg'
        ], [
            'name.required' => 'Tên sản phẩm không được để trống',
            'name.unique' => 'Tên sản phẩm này bị trùng',
            'category_id.required' => 'Hãy chọn loại sản phẩm',
            'price.required' => 'Giá sản phẩm không được để trống',
            'image.image' => 'Không phải file ảnh',
            'image.mines' => 'File không đúng định dạng'
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        if ($request->hasFile('image')) {
            //get file
            $file = $request->file('image');
            //đặt tên
            $filename = time() . '' . $file->getClientOriginalName();
            //đặt đường dẫn
            $filepath = 'img/product/';
            $request->file('image')->move($filepath, $filename);
            $product->image = $filepath . $filename;
        }
        $product->save();
        return redirect()->route('product.index')->with('mess', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::find($id);
        $dataCategory = Category::find($data->category_id);
        return view('admin.product.show', compact('data', 'dataCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataCategory = Category::all();
        $data = Product::find($id);
        return view('admin.product.edit', compact('data', 'dataCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg'
        ], [
            'name.required' => 'Tên sản phẩm không được để trống',
            'category_id.required' => 'Hãy chọn loại sản phẩm',
            'price.required' => 'Giá sản phẩm không được để trống',
            'image.image' => 'Không phải file ảnh',
            'image.mines' => 'File không đúng định dạng'
        ]);
        $product = Product::findorFail($id);
        $product->name = $request->input('name');
        $product->slug = str_slug($request->input('name'));
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        if ($request->hasFile('new_image')) {
            @unlink(public_path($product->image));
            //get file
            $file = $request->file('new_image');
            //đặt tên
            $filename = time() . '_' . $file->getClientOriginalName();
            //đặt đường dẫn
            $filepath = 'img/product/';
            $request->file('new_image')->move($filepath, $filename);
            $product->image = $filepath . $filename;
        }
        $product->save();
        return redirect()->route('product.index')->with('mess', 'Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::destroy($id);
        if ($product) {
            return redirect()->route('product.index')->with('mess', 'Xoá thành công');
        }
    }
    public function order()
    {

    }
}