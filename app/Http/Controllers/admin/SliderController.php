<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Models\WebsiteSlider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = WebsiteSlider::all();
        return view ('admin.slider.list')->with('sliders', $sliders);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.slider.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->toArray());
        $request->validate([

            'image' => 'required|image|max:2048',
            'heading' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);


        //dd($request);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);
        //2nd image

        $slider = new WebsiteSlider;
        $slider->image = $imageName;
        $slider->heading = $request->heading;
        $slider->description = $request->description;
        $slider->link_name = $request->link_name;
        $slider->link = $request->link;
        $slider->status = $request->status ? "1" : "0";
        $slider->save();
        Session::flash('message', "New Slider has been Added successfully");
        return redirect ('/admin/slider');

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
        $slider_id = $id;
        $slider = WebsiteSlider::find($slider_id);
        //dd($category->toArray());

      return view ('admin/slider/edit')->with('slider', $slider);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $slider_id = $id;
        $slider = WebsiteSlider::find($slider_id);
            //$product->category_id = $request->category_id;

            //$product->category_id = $request->category_id;
            $slider->heading = $request->heading;
            $slider->description = $request->description;
            $slider->link_name = $request->link_name;
            $slider->link = $request->link;
            $slider->status = $request->status ? "1" : "0";

            //dd($request->all());
            if ($request->hasFile('image')) {
                $destination = public_path('uploads') .$slider->image;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads'), $imageName);
                $slider->image = $imageName;
            }

            $slider->update();
            Session::flash('message', "Slider Updated successfully");
            return redirect ('/admin/slider');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        WebsiteSlider::where('id',$id)->delete();
        Session::flash('message', "Slider Deleted successfully");

        return redirect ('/admin/slider');
    }
}
