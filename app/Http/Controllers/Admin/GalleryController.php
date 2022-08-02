<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Gallery;
use DB;
use Image;

class GalleryController extends Controller
{
    public function gallery() {
        $galleries = Gallery::latest()->get();
        $event = Event::latest()->get();
        return view('pages.admin.gallery.index', compact('galleries', 'event'));
    }
    public function galleryInsert(Request $request) {
        return $request;
        $validatedData = $request->validate([
            'event_id' => 'required',
            'title' => 'required|min:4',
            'image' => 'required|Image|mimes:jpeg,jpg,png,gif',
        ]);
        

        try {
            DB::beginTransaction();

            $gallery = new Gallery;
            //image upload
            $image = $request->file('image');
            $nameGen = hexdec(uniqid());
            $imgExt = strtolower($image->getClientOriginalExtension());
            $imgName = $nameGen. '.' . $imgExt;
            $upLocation = 'uploads/gallery/';
            Image::make($image)->resize(720,480)->save($upLocation . $imgName);
            //close image upload
            $gallery->event_id = $request->event_id;
            $gallery->title = $request->title;
            $gallery->image = $imgName;
            $gallery->save();
            DB::commit();
            return redirect()->back()->with('success', 'photo Inserted!');
        } catch (\Exception $e) {
            DB::rollback();           
		    return ["error" => $e->getMessage()];
            // return Redirect()->back()->with('Failed', 'Photo insertion failed!');
        }
    }
    public function galleryEdit($id) {
        $event = Event::latest()->get();
        $gallery = Gallery::find($id);
        return view('pages.admin.gallery.edit', compact('gallery', 'event'));
    }

    public function galleryUpdate(Request $request, $id) {
        $validatedData = $request->validate([
            'event_id' => 'required',
            'title' => 'required|min:4'
        ]);

        try {
            DB::beginTransaction();
            $gallery = Gallery::find($id);
            $gallery->event_id = $request->event_id;
            $gallery->title = $request->title;
            $image = $request->file('image');
            if($image) {
                $imageName = date('YmdHi').$image->getClientOriginalName();
                // $image->move('img/gallery', $imageName);
                Image::make($image)->resize(720,480)->save('uploads/gallery/' . $imageName);
                if(file_exists('uploads/gallery/'. $gallery->image) && !empty($gallery->image)) {
                    unlink('uploads/gallery/' . $gallery->image);
                }
                $gallery['image'] = $imageName;
            }
            $gallery->save();
            DB::commit();
            return Redirect()->back()->with("success", "Update Successfull");
        } catch(\Exception $e) {
            DB::rollback();         
		    // return ["error" => $e->getMessage()];
            return redirect()->back()->with('error', 'Team insert failed!');
        }
    }
    public function galleryDelete($id) {
        $gallery = Gallery::find($id);
        if(file_exists('uploads/gallery/'.$gallery->image) AND !empty($gallery->image)){
            unlink('uploads/gallery/'.$gallery->image);
        }
        $gallery->delete();
        return Redirect()->back()->with("success", "Photo Deleted Successfully");
    }
}
