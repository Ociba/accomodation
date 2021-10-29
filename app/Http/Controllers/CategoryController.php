<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DB;
use Auth;

class CategoryController extends Controller
{
    /**
     * This function fetches the category details
     */
    protected function getCategory(){
        $get_category =DB::table('categories')->get();
        return view('admin.category', compact('get_category'));
    }
    /** 
     * This function creates the category
    */
    private function createCategory(){
        $category_obj =new Category;
        $category_obj ->category_name       =request()->category_name;
        $category_obj ->created_by =Auth::user()->id;
        $category_obj ->save();
        return redirect()->back()->with('msg','You have successfully created category successfully');
    }
    /** 
     * This function validates category
    */
    protected function validateCreateCategory(){
        if(empty(request()->category_name)){
            return redirect()->back()->withErrors('Enter category name to continue');
        }else{
            return $this->createCategory();
        }
    }
    /**
     * This function edits the category
     */
    protected function editCategory($category_id){
        $edit_category =DB::table('categories')->where('id',$category_id)->get();
        return view('admin.edit_category', compact('edit_category'));
    }
    /** 
     * This function updates category
    */
    protected function updateCategory($category_id){
        Category::where('id',$category_id)->update(array(
            'category_name' =>request()->category_name
        ));
        return redirect()->back()->with('msg','You have successfully updated the category');
    }
    /** 
     * This function deletes the category permanently
    */
    protected function deleteCategory($category_id){
        Category::where('id',$category_id)->delete();
        return redirect()->back()->with('msg','You have successfully deleted the category successfully');
    }
}
