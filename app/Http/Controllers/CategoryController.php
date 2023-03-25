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
        $request->validate([
            'category_name' => 'required',
            'category_description' => 'required'

        ]);
        $product = new Category();
        $product->category_name = $request-> category_name;
        $product-> category_description = $request -> category_description;
        $product -> save();
        return redirect()->back()->with('success','Successfully Add Category');
    }


    public function show($id){
        $product = Category::find($id);
        return view('admin.Category.show_category',compact('product'));


    }

    // edit //

    public function edit($id){
        $product = Category::where('id','=', $id)->first();
        return view('admin.Category.edit_category',compact('product'));

    }

    public function update(Request $request, $id){
        $request->validate([
            'category_name' => 'required','max|1400',
            'category_description' => 'required','max|1400'

        ]);
        $product = Category::find($id);
        $product->category_name = $request-> category_name;
        $product-> category_description = $request -> category_description;
        $product -> save();
        return redirect()->route('index.category')->with('success','Successfully Update');


    }


    // delete //
    // another syestem//


    // public function delete($id){
    //    Category::where('id','=', $id)->delete();
    //     return redirect()->back()->with('success','Category Delete successfully');
    // }

    public function delete($id){
        $product = Category::find($id);
        $product->delete();
        return redirect()->back()->with('success','Category Delete successfully');

    }


}
