<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::find(1);
        return view('admin.about.index', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'url' => 'required',
        ], [
            'name.required' => 'Name is Required',
            'url.required' => 'Url is Required',
            'content.required' => 'Content is Required',
        ]);

        $id = $request->id;

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg

        Image::make($image)->resize(636, 477)->save('storage/about/' . $name_gen);
        $save_url = 'storage/about/' . $name_gen;


        $image = $request->file('youtube');
        $name_gen1 = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg

        Image::make($image)->resize(588, 441)->save('storage/youtube/' . $name_gen1);
        $save_url1 = 'storage/youtube/' . $name_gen1;

        About::findOrFail($id)->update([
            'name' => $request->name,
            'image' => $save_url,
            'content' => $request->content,
            'youtube' => $save_url1,
            'url' => $request->url,
        ]);
        $notification = array(
            'message' => 'About Us Updated Successfully',
            'alert-type' => 'success'
        );


        return redirect()->route('about')->with($notification);



    }
}