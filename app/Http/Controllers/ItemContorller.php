<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemContorller extends Controller
{
   
    public function index()

    {    
        $items = Item::all(); 
        return view("admin.item.index",compact("items"));
    }

  
    public function create()
    {
        $categorys = Category::all();
        return view("admin.item.create",compact("categorys"));
    }

    
     
    public function add_item(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category' => 'required|exists:categories,id',
            'details' => 'required|string',
        ]);

      $item = new Item;
  
    $item->name = $request->name;
    $item->price = $request->price;
    $item->category_id = $request->category;
    $item->details = $request->details;
    $item->save();
    return redirect()->back( );
    }
 
    public function delete_item($id)
    {
        $item = Item::find($id);

        if ($item) {
            $item->delete();
            return redirect()->back()->with('success', 'Item deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Item not found.');
        }
    }
}
   
   
