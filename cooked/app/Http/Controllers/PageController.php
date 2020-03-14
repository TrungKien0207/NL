<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\category;
use App\type;
use App\product;
// use App\detail;

class PageController extends Controller
{
	function __construct() {
    	$category = category::all();
    	$type = type::all();
    	$product = product::all();
    	
		view::share('category', $category);
		view::share('type', $type);
		view::share('product', $product);
	}
    function homePage() {
    	return view('pages.homepage');
    }

    // function detail() {
    //     $detail = detail::find($id);

    //     return view('pages.detailPage', ['detail'=>$detail]);
    // }
    public function getListProduct(Request $request){
         $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);
        // dd($url);
        if ($id = array_pop($url)) {
            $productDetail =  product::where(['idType'=> $id])->get();
           // dd($productDetail);
            $viewdata = [
                'productDetail' => $productDetail
            ];
            return view('pages.detail', $viewdata);
        }
    }
}
