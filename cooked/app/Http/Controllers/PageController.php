<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


use App\category;

class PageController extends Controller
{
	function __construct() {
    	$category = category::all();
		view::share('category', $category);
	}

    function homePage () {
    	return view('pages.homepage');
    }
}
