<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // index //

    public function index(){

        $c_list = Category::all();

        return view('admin.Category.list_category', compact('c_list'));

    }

    // create//

    public function create(){
        return view('admin.Category.Create_category');
    }

    //store//

    public function store(Request $request){
        $product = new Category();
        $product->category_name = $request-> category_name;
        $product-> category_description = $request -> category_description;
        $product -> save();
        return redirect()->route('list.category');
    }

    // delete //
    // another syestem//

    
    // public function delete($id){
    //    Category::where('id','=', $id)->delete();
    //     return redirect()->back()->with('success','Supplier Delete successful');
    // }

    public function delete($id){
        $product = Category::find($id);
        $product->delete();
        return redirect()->back()->with('success','Supplier Delete successful');

    }


}
