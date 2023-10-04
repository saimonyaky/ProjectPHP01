<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index(Request $request)
    {
        $data = Category::where('name','like','%'.$request->search.'%')
        ->paginate(10);
        // ->appends(['search'=>$request->search]);
        return view('admin.category.category',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'name'=>'required|unique:categories'
        ],[
            'name.required'=>'Tên danh mục không được để trống',
            'name.unique'=>'Tên danh mục này bị trùng'
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->save();
        return redirect()->route('category.index')->with('mess','Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Category::find($id);
        return view('admin.category.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::find($id);
        return view('admin.category.edit',compact('data'));
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
            'name'=>'required|unique:categories'
        ],[
            'name.required'=>'Tên danh mục không được để trống',
            'name.unique'=>'Tên danh mục này bị trùng'
        ]);
        $category = Category::findorFail($id);
        $category->name = $request->input('name');
        $category->slug = str_slug($request->input('name'));
        $category->save();
        return redirect()->route('category.index')->with('mess','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::destroy($id);
        if($category){
            return redirect()->route('category.index')->with('mess','Xoá thành công');
        }
    }
}
