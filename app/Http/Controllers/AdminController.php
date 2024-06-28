<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class AdminController extends Controller
{
    public function index()
    {
        // Handle GET request
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    
     public function add_slider(){
        return view('admin.slider.add_slider');
     }
    
    public function upload_slider(Request $request)
    {
        // Handle POST request
        $slider = new Slider();
        $slider->title = $request->input('title');
        $slider->subtitle = $request->input('subtitle');
       
        $image = $request->image;
       

        if($image){

            $imagename = time() .'.'. $image->getClientOriginalExtension();
            $request->image->move('slider', $imagename);

            $slider->image = $imagename;
        }
        $slider->save();

        return redirect()->back();
    }

   public function view_slider(){
    $Slider = Slider::paginate(3);
    return view('admin.slider.view_slider',compact('Slider'));    
    }


 public function delete_slider($id){
    $data = Slider::find($id);

    $data->delete(); 
    return redirect()->back();

 }

public function edit_slider($id){

    
         $data = Slider::find($id);

    return view('admin.slider.edit' ,compact('data'));
}


public function edit__slider(Request $request, $id){

$data = Slider::find($id);
$data->title = $request->input('title');
$data->subtitle = $request->input('subtitle');
$data->image = $request->image;

$image = $request->image;

 if($image){

 $imagename = time() .'.'. $image->getClientOriginalExtension(); $request->image->move('slider', $imagename); $data->image = $imagename;
 }

 
 $data->save() ;
 
 return redirect()->back();

}



}



























































    

       
    


