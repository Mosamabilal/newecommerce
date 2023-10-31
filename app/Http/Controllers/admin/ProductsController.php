<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            //dd(Categories::all()->toArray());
            $products = Products::all();

            return view ('admin.products.list')->with('products', $products);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view ('admin.products.add')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        //dd($request->toArray());
        $request->validate([

            'image' => 'required|image|max:2048',
            'name' => 'required|unique:products|max:255',
            'price' => 'numeric|required',
            'description' => 'required',
        ]);


        //dd($request);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);
        //2nd image

        $imageName2 = time().'.'.$request->image_2->extension();
        $request->image_2->move(public_path('uploads'), $imageName2);

        $product = new Products;
        $product->image = $imageName;
        $product->image_2 = $imageName2;
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->status = $request->status ? "1" : "0";
        $product->save();
        Session::flash('message', "New Products has been Added successfully");
        return redirect ('/admin/products');

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
       //dd($id);

       $categories = Categories::all();
        //dd($categories->toArray());

       $category_id = $id;
       //dd($category_id);
       $product_id = $id;

       $product = Products::find($product_id);
       $category = Categories::find($category_id);
       //dd($category);

     //return view ('admin/products/edit')->with('product', $product);



     $categories = Categories::all();

     return view ('admin/products/edit')->with([

         'categories' => $categories,
         'product' => $product

     ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
     {

//dd($request->toArray());


        $product_id = $id;
        $product = Products::find($product_id);
        //$product->category_id = $request->category_id;

        //$product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->status = $request->status ? "1" : "0";

        //dd($request->all());
        if ($request->hasFile('image')) {
            $destination = public_path('uploads') .$product->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $product->image = $imageName;
      }

              //dd($request->all());
              if ($request->hasFile('image_2')) {
                $destination2 = public_path('uploads') .$product->image_2;
                if(File::exists($destination2))
                {
                    File::delete($destination2);
                }
                $imageName2 = time().'.'.$request->image_2->extension();
                $request->image_2->move(public_path('uploads'), $imageName2);
                $product->image_2 = $imageName2;
          }




        $product->update();
        Session::flash('message', "Product has been Updated successfully");
        return redirect ('/admin/products');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Products::where('id',$id)->delete();
        Session::flash('message', "Product has been Deleted successfully");

        return redirect ('/admin/products');
    }
}
