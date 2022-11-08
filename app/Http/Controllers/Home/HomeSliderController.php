<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeSlide;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;
use Illuminate\Support\Str;

class HomeSliderController extends Controller
{
    public function AddHomeSlider(){

        $homeslide = HomeSlide::find(1);
        return view('admin.home_slide.home_slide_add',compact('homeslide'));
    }

    //    store method
    public function StoreSlider(Request $request){
        $request->validate([
            'title' => 'required',
            'short_description' => 'string',
            'slider_image'=> 'required',
        ],[
            'title.required' => 'Title is Required',
            'short_description.required' => 'Short Description is Required',
        ]);
        $image = $request->file('slider_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

       Image::make($image)->resize(1020,519)->save('public/upload/homeSlide/'.$name_gen);
        $save_url = 'public/upload/homeSlide/'.$name_gen;

//        Eloquent ORM
        HomeSlide::insert([
            'title'=>$request->title,
            'short_description'=>$request->short_description,
            'slider_image'=>$save_url,
        ]);
        $notification=array('message' => 'Slider Inserted!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    //all Slide
    public function AllSlider(){
        $slide = HomeSlide::latest()->get();
//        $slide->description = Str::limit($slide->description, 50);

        return view('admin.home_slide.home_slide_all',compact('slide'));
    } // End Method




}
