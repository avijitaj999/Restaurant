<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
     public function view_category(){

   $data = Category::all();

        return view("admin.category.view_category",compact('data'));
     }

     public function add_category(Request $request){
      $category = new Category();
      $category->name = $request->C_name;
      $category->slug = $request->C_name;
      $category->save();
      return redirect()->back()->with('success', 'Category added successfully!');


     }
     public function delete_category($id)
     {
         $cetagory =Category ::find($id);
 
         if ($cetagory) {
             $cetagory->delete();
             return redirect()->back()->with('success', 'Item deleted successfully.');
         } else {
             return redirect()->back()->with('error', 'Item not found.');
         }
     }

 


}
