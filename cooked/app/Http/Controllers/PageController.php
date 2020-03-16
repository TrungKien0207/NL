<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\category;
use App\type;
use App\product;
use App\detail;
use App\material;
use App\spice;
use App\timeCook;
use App\level;

class PageController extends Controller
{
	function __construct() {
    	$category = category::all();
    	$type = type::all();
    	// $product = product::all();
    	
		view::share('category', $category);
		view::share('type', $type);
		// view::share('product', $product);
	}
    function homePage() {
    	return view('pages.homepage');
    }
    
    public function getListProduct(Request $request){
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);
        // dd($url);
        if ($id = array_pop($url)) {
            // dd($id);
            // id cua product
            // id ==== id
            // $productDetail =  product::where(['idType'=> $id])->get();
           $productDetails =  product::where('id',$id)->get();

           // dd($productDetails);
           $getDetails = detail::where('idproduct',$id)->get();

           $getMaterials = material::where('idProduct', $id)->get();
           // dd($getMaterials);
           
           $getSpices = spice::where('idPD', $id)->get();

           $timecooks = timecook::where('idProD', $id)->get();

           $levels = level::where('idPDuct', $id)->get();

           $category = category::where('id', $id)->get();

            $viewdata = [
                'productDetails' => $productDetails,
                'getDetails' => $getDetails,
                'getMaterials' => $getMaterials,
                'getSpices' => $getSpices,
                'timecooks' => $timecooks,
                'levels' => $levels,
                'category' => $category,
            ];
            return view('pages.detail', $viewdata);
        }
    }

    public function getListCategory(Request $request){
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);
        // dd($url);
        if ($id = array_pop($url)) {
           $category = category::find($id);
           $products = product::where([
            'idCategory'=>$id
           ])->get();

            $viewdata = [
                'category' => $category,
                'products' => $products
            ];
            return view('pages.category', $viewdata);
        }
    }

}
