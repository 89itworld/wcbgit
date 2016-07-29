<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Retailers;
use App\Models\Coupons;
use Illuminate\Support\Facades\DB;
use DateTime;
use App\Library\Userfunctions;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /*public function __construct()
    {
        $this->middleware('auth');

    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function getIndex()
    {
       
        //$this->pr($cat_retailers);
        /*  $cashback = WhitecashbackRetailers::limit(12)->where('featured', '=', 1)
              ->where('end_date', '=', "0000-00-00 00:00:00")
              ->orWhere('end_date', '>', 'NOW()')
              ->where('status', '=', "'".'active'."'")
              ->get();*/
        /* echo "<pre>";
        print_r($cashback);exit;*/
        return view('homes.index');
    }
    /*
    * Created At: 19-July-2016
    *Author: Yasar Khan
    *Description:Function to get Coupons
   */
    public function getCoupons(){
        $exclusive_coupons_total=Coupons::where('exclusive', 1)->where('status','active')->count();
        $to_date= new DateTime();
        $from_date=new DateTime();
        $expiring_coupons_total=Coupons::where('end_date','!=','0000-00-00 00:00:00')->where(function($inner) use($from_date,$to_date){ return $inner->where('end_date','>=',$from_date)->where('end_date','<=',$to_date->modify('+3 days'));})->where('status','active')->count();
        $date= new DateTime();
        $all_coupon_data=Coupons::query()->leftjoin('retailers as r','coupons.retailer_id', '=', 'r.retailer_id')
            ->where('start_date','<=',$date)->where(function($inner_query) use ($date){return $inner_query->where('coupons.end_date','0000-00-00 00:00:00')->orWhere('coupons.end_date','>=',$date); })->where('coupons.status','active')->where(function($retailers_inner) use($date){return $retailers_inner->where('r.end_date','0000-00-00 00:00:00')->orWhere('r.end_date','>',$date);})->where('r.status','active')
            ->select(array('coupons.*','coupons.end_date as coupon_end_date','coupons.title as coupon_title','r.image','r.slug', 'r.title',
                DB::raw("UNIX_TIMESTAMP(coupons.end_date)-UNIX_TIMESTAMP() AS time_left")))->orderBy('coupons.visits', 'desc')->paginate(5);

        $popular_coupon_data=Coupons::query()->leftjoin('retailers as r','coupons.retailer_id', '=', 'r.retailer_id')
            ->where('start_date','<=',$date)->where(function($inner_query) use ($date){return $inner_query->where('coupons.end_date','0000-00-00 00:00:00')->orWhere('coupons.end_date','>=',$date); })->where('coupons.status','active')->where(function($retailers_inner) use($date){return $retailers_inner->where('r.end_date','0000-00-00 00:00:00')->orWhere('r.end_date','>',$date);})->where('r.status','active')
            ->select(array('coupons.*','coupons.end_date as coupon_end_date','coupons.title as coupon_title','r.image','r.slug', 'r.title',
                DB::raw("UNIX_TIMESTAMP(coupons.end_date)-UNIX_TIMESTAMP() AS time_left")))->orderBy('coupons.added', 'desc')->paginate(5);

        $exclusive_coupon_data=Coupons::query()->leftjoin('retailers as r','coupons.retailer_id', '=', 'r.retailer_id')
            ->where('start_date','<=',$date)->where(function($inner_query) use ($date){return $inner_query->where('coupons.end_date','0000-00-00 00:00:00')->orWhere('coupons.end_date','>=',$date); })->where('coupons.status','active')->where('coupons.exclusive',1)->where(function($retailers_inner) use($date){return $retailers_inner->where('r.end_date','0000-00-00 00:00:00')->orWhere('r.end_date','>',$date);})->where('r.status','active')
            ->select(array('coupons.*','coupons.end_date as coupon_end_date','coupons.title as coupon_title','r.image','r.slug', 'r.title',
                DB::raw("UNIX_TIMESTAMP(coupons.end_date)-UNIX_TIMESTAMP() AS time_left")))->orderBy('coupons.added', 'desc')->paginate(5);

        $latest_coupon_data=Coupons::query()->leftjoin('retailers as r','coupons.retailer_id', '=', 'r.retailer_id')
            ->where('start_date','<=',$date)->where(function($inner_query) use ($date){return $inner_query->where('coupons.end_date','0000-00-00 00:00:00')->orWhere('coupons.end_date','>=',$date); })->where('coupons.status','active')->where(function($retailers_inner) use($date){return $retailers_inner->where('r.end_date','0000-00-00 00:00:00')->orWhere('r.end_date','>',$date);})->where('r.status','active')
            ->select(array('coupons.*','coupons.end_date as coupon_end_date','coupons.title as coupon_title','r.image','r.slug', 'r.title',
                DB::raw("UNIX_TIMESTAMP(coupons.end_date)-UNIX_TIMESTAMP() AS time_left")))->orderBy('coupons.added', 'desc')->paginate(5);

        $expiring_coupon_data=Coupons::query()->leftjoin('retailers as r','coupons.retailer_id', '=', 'r.retailer_id')
            ->where('start_date','<=',$date)->where(function($inner_query) use ($to_date,$from_date){return $inner_query->where('coupons.end_date','>=',$from_date)->where('coupons.end_date','<=',$to_date->modify('+3 days')); })->where('coupons.end_date','!=','0000-00-00 00:00:00')->where('coupons.status','active')->where(function($retailers_inner) use($date){return $retailers_inner->where('r.end_date','0000-00-00 00:00:00')->orWhere('r.end_date','>',$date);})->where('r.status','active')
            ->select(array('coupons.*','coupons.end_date as coupon_end_date','coupons.title as coupon_title','r.image','r.slug', 'r.title',
                DB::raw("UNIX_TIMESTAMP(coupons.end_date)-UNIX_TIMESTAMP() AS time_left")))->orderBy('coupons.added', 'desc')->paginate(5);

       /* echo "<pre>";
        print_r($all_coupon_data);exit;*/
        return view('homes.coupons')->with('exclusive_coupons_total',$exclusive_coupons_total)->with('expiring_coupons_total',$expiring_coupons_total)->with('all_coupons',$all_coupon_data)->with('most_popular',$popular_coupon_data)->with('latest_coupons',$latest_coupon_data)->with('exclusive_coupons',$exclusive_coupon_data)->with('expiring_coupons',$expiring_coupon_data);

    }
   /*
    * Created At: 20-July-2016
    *Author: Yasar Khan
    *Description:Function to get Retailes details
   */
    public function getViewRetailer($retailers){
        $date= new DateTime();
        $retailers=Retailers::where('slug',$retailers)->where(function($inner_query) use($date){return $inner_query->where('end_date','0000-00-00 00:00:00')->orWhere('end_date','>',$date);})->where('status','active')
            ->select('retailers.*','added as date_added')->first();
        $retailer_id=$retailers->retailer_id;
        $reviews=Userfunctions::GetStoreReviewsTotal($retailer_id);
        $coupon_total=Userfunctions::GetStoreCouponsTotal($retailer_id);
        $retailers->reviews=$reviews;
        $retailers->total_coupons=$coupon_total;
       /* $retailes_coupons=Retailers::with(['coupons'=>function($q){
            return $q->paginate(5);
        }])->where('retailer_id',$retailer_id)->get();*/
        $retailes_coupons=Coupons::where('retailer_id',$retailer_id)->where('status','active')->paginate(5);

/*
        echo "<pre>";
        print_r($retailes_coupons);exit;*/
        return view('homes.view_retailers')->with('retailers',$retailers)->with('coupons',$retailes_coupons);
    }
}
