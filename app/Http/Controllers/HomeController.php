<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Reservation;


class HomeController extends Controller
{
   public function index()
   {
    return view('admin.slider.index');
   }




    public function home()

      {
         $sliders = Slider::all();
         $category =Category::all();  
         $item = Item::all();
         $resarve = Reservation::all();   

         return view('home.index', compact('sliders','category','item','resarve'));
      }

}
