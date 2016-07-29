<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


Class StoreController extends Controller{

    public function getIndex(){
       // $cat_slug=Input::get('cat');
        $categories = $this->getCategories();
      //  $cat_result=DB::select("SELECT * FROM cashbackengine_categories WHERE category_url='$cat_slug' LIMIT 1");
      //  print_r($cat_result);exit;
        return view('stores.index', ['categories' => $categories]);
    }

}