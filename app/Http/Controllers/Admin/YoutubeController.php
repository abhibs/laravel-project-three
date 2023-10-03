<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Youtube;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    public function index()
    {
        $data = Youtube::find(1);
        return view('admin.youtube.index', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'url' => 'required',
        ], [
            'url.required' => 'url is Required',
        ]);
        $id = $request->id;

        Youtube::findOrFail($id)->update([
            'url' => $request->url,
        ]);

        $notification = array(
            'message' => 'Youtube Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('youtube')->with($notification);

    }
}