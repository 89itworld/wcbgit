<?php

namespace App\Helpers;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;


class MyHlp {

   public static  function getCategories(){
          $categories = Categories::all();
          return $categories;
      }
    public static function getCashBacks(){
        $cashback=DB::select("SELECT title, slug, url, image FROM retailers WHERE featured='1' AND (end_date='0000-00-00 00:00:00' OR end_date > NOW()) AND status='active' ORDER BY RAND() LIMIT 12");
        return $cashback;
    }
    public static function getRetailers(){
        $home_category=array('21'=>'Other','17'=>'Shoes','7'=>'Electronics','35'=>'Mobile Phones','34'=>'Travel','2'=>'Clothes and Fashion');
        $i=0;
        $where="" ;
        $temp_arr=$home_category;
        $retailers_per_category=array();
        $categoryIds="";
        for($j=0;$j<count($temp_arr);$j++){
            $cat_id=array_pop($home_category);
            $key = array_search($cat_id, $temp_arr);
            if($i>0){
                $where = "retailer_to_category.retailer_id NOT IN (" .$categoryIds.") AND";
            }
            $row_retailers_per_category=DB::select("SELECT retailer_to_category.retailer_id FROM retailer_to_category inner join retailers on retailer_to_category.retailer_id=retailers.retailer_id WHERE retailers.status='active' AND $where category_id='$key' limit 4");
            foreach($row_retailers_per_category as $retailer_id){
                $retailers_per_category[$i][] = $retailer_id->retailer_id;
            }
            if($i>=1&&$i<6) {
                $categoryIds .= ",";
            }
            $categoryIds.=implode(",", $retailers_per_category[$i]);
            $i=$i+1;
        }
        // $this->pr($retailers_per_category,1);
        $cat_retailers=array();
        foreach($retailers_per_category as $retailer){
            $new_where = "retailer_id  IN (" .implode(",",$retailer).")";
            $cat_retailers[array_pop($temp_arr)]=DB::select("SELECT retailer_id, title, slug, url, image,cashback FROM retailers WHERE $new_where ");

        }
        return $cat_retailers;
    }
}
