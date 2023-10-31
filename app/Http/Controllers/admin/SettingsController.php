<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function settings(){
        return view ('admin.settings.edit');
    }

    public function update(Request $request, string $id){
        //dd($id);
        $settings_id = $id;
        $settings = Settings::find($settings_id);
        //$product->category_id = $request->category_id;

        //$product->category_id = $request->category_id;
        $settings->name = $request->name;
        $settings->about = $request->about;
        $settings->email = $request->email;
        $settings->phone = $request->phone;
        $settings->facebook = $request->facebook;
        $settings->twitter = $request->twitter;
        $settings->youtube = $request->youtube;
        $settings->insta = $request->insta;


        //dd($request->all());
        if ($request->hasFile('image')) {
            $destination = public_path('uploads') .$settings->logo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $imageName = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('uploads'), $imageName);
            $settings->logo = $imageName;
      }

        $settings->update();
        Session::flash('message', "Updated successfully");
        return redirect ('/admin/settings');
      }
}
