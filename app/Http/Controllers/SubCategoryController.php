<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Sub_Category;

class SubCategoryController extends Controller
{

    public function index(){
        $sub_cat = Sub_Category::all();
        return view('admin.subCategory.index',compact('sub_cat'));
    }



    public function create(){
        $categories = Category::all();

        return view('admin.subCategory.create',compact('categories'));
    }

    public function store (Request $request){
         $request->validate([
            // 'category_name' => 'required',
            'subcategory_name' => 'required|max:255',
            'subcategory_description' => 'required|max:500',
        ]);

        $sub_category = new Sub_Category();
        $sub_category->subcategory_name = $request->subcategory_name;
        $sub_category->subcategory_description= $request->subcategory_description;
        $sub_category->category_id = $request->category_id;
        $sub_category->save();
        // dd($request->all());
        return redirect()->back()->with('success','Sub Category added successful');
//        return redirect(route('admin.subCategory.index'));
    }


    public function delete ($id){
        $sub_category = Sub_Category::find($id);
        $sub_category->delete();
        return redirect()->back()->with('success','Sub-Category Delete successfully');


    }


    public function edit ($id){
        $categories = Category::all();
        $sub_category = Sub_Category::find($id);
        return view('admin.subCategory.edit',compact('sub_category','categories'));
    }


    public function update(Request $request,$id){
        $request->validate([

            'subcategory_name' => 'required|max:255',
            'subcategory_description' => 'required|max:500',
        ]);

        $sub_category = Sub_Category::find($id);

        $sub_category->subcategory_name = $request->subcategory_name;
        $sub_category->subcategory_description = $request->subcategory_description;
        $sub_category->category_id = $request->category_id;
        $sub_category->save();
        return redirect()->route('subcategory.index')->with('success','Sub Category Update Successful');




    }

}
