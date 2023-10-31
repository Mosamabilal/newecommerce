<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                //dd(Categories::all()->toArray());
        $categories = Categories::all();
        return view ('admin.categories.list')->with('categories', $categories);

       }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

        {
            $request->validate([
                'name' => 'required|unique:categories|max:255',
                'description' => 'required',
            ]);
            //dd($request->all());

        $category = new Categories;
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') ? "1" : "0";
        $category->save();
        Session::flash('message', "New Category has been created successfully");


        return redirect ('/admin/categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category_id = $id;
        $category = Categories::find($category_id);
        //dd($category->toArray());

      return view ('admin/categories/edit')->with('category', $category);



    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $category = Categories::find($id);

        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') ? "1" : "0";
        $category->update();
        Session::flash('message', "Category has been Updated successfully");

        return redirect ('/admin/categories');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Categories::where('id',$id)->delete();
        Session::flash('message', "Category has been Deleted successfully");

        return redirect ('/admin/categories');
    }
}
