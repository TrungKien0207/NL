<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\User;
use App\category;
use App\type;
use App\product;
use App\detail;
use App\material;
use App\spice;
use App\timeCook;
use App\level;
use App\comment;

class PageController extends Controller {
	function __construct() {

      $category = category::all();
      $type = type::all();
      $cate = category::all();
      $typ = type::all();
      view::share('category', $category);
      view::share('type', $type);
      view::share('cate', $cate);
      view::share('typ', $typ);

		if(Auth::check()) {

         view()->share('user', Auth::user());

      }

   }

   function homePage(Request $request) {

      return view('pages.homepage');

   }

   public function getListProduct(Request $request){

      $url = $request->segment(2);
      $url = preg_split('/(-)/i', $url);

      if ($id = array_pop($url)) {
         $productDetails =  product::where('id',$id)->get();
         $postProduct = product::find($id);
         $getDetails = detail::where('idproduct',$id)->get();
         $getMaterials = material::where('idProduct', $id)->get();
         $getSpices = spice::where('idPD', $id)->get();
         $timecooks = timecook::where('idProD', $id)->get();
         $levels = level::where('idPDuct', $id)->get();
         $category = category::where('id', $id)->get();
         $commentDetails = comment::where('idPro',$id)->paginate(12);

         $viewdata = [
            'productDetails' => $productDetails,
            'getDetails' => $getDetails,
            'getMaterials' => $getMaterials,
            'getSpices' => $getSpices,
            'timecooks' => $timecooks,
            'levels' => $levels,
            'category' => $category,
            'postProduct' => $postProduct,
            'commentDetails' => $commentDetails
         ];

         return view('pages.detail', $viewdata);
      }
   }

   public function getListCategory(Request $request){

      $url = $request->segment(2);
      $url = preg_split('/(-)/i', $url);

      if ($id = array_pop($url)) {

         $category = category::find($id);

         $products = product::where([
            'idCategory'=>$id
         ])->get();
         // dd($category);
         $viewdata = [
            'category' => $category,
            'products' => $products
         ];

         return view('pages.category', $viewdata);

      }

   }

   public function getListType(Request $request){

      $url = $request->segment(2);
      $url = preg_split('/(-)/i', $url);

      if ($id = array_pop($url)) {

         $type = type::find($id);

         $productsss = product::where([
            'idType'=>$id
         ])->get();
         // dd($type);
         $viewdata = [
            'type' => $type,
            'productsss' => $productsss
         ];
         // dd($type);
         return view('pages.type', $viewdata);

      }

   }

   public function getMenuCate(Request $request) {

      $url = $request->segment(2);
      $url = preg_split('/(-)/i', $url);

      if ($id = array_pop($url)) {

         $cates = category::find($id);
         $productss = product::where([
            'idCategory'=>$id
         ])->get();

         $viewdata = [
            'cates' => $cates,
            'productss' => $productss
         ];

         return view('pages.cate', $viewdata);

      }

   }

   public function getMenuTyp(Request $request) {

      $url = $request->segment(2);
      $url = preg_split('/(-)/i', $url);

      if ($id = array_pop($url)) {

         $typs = type::find($id);
         $productt = product::where([
            'idType'=>$id
         ])->get();
         // dd($cate);
         $viewdata = [
            'typs' => $typs,
            'productt' => $productt
         ];

         // dd($cate);
         return view('pages.typ', $viewdata);

      }

   }

   public function getLogin() {

      return view('pages.login');

   }

   public function postLogin(Request $request) {

      $this->validate($request,
      [
         'email' => 'required|email',
         'password' => 'required'
      ],
      [
         'email.required' => 'Bạn chưa nhập email',
         'email.email' => 'Bạn chưa nhập đúng định dạng email',

         'password.required' => 'Bạn chưa nhập password!!',
      ]);

      if ( Auth::attempt([ 'email'=>$request->email, 'password'=>$request->password ])) {

         return redirect('homepage');

      }
      else {

         return redirect('login')->with('thongbao', 'Email hoặc mật khẩu không đúng!');

      }
   }

   public function getLogout() {

      \Auth::logout();
      return redirect()->back();

   }

   public function getUserProfile($id) {

      $users = DB::table('users')->find($id);
      return view('pages.user',compact('users'));

   }

   public function postUserProfile(Request $request,$id) {

      $users = User::find($id);
      if($request->customSwitch1 == "on"){
         $this->validate($request,
         [
            'email' => 'required|email',
            'pdag' => 'same:pd'
         ],
         [
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Bạn chưa nhập đúng định dạng email',

            'pdag.same' => 'Mật khẩu không đúng!!',
         ]);
         $users->password = bcrypt($request->password);
         $users->level = $request->quyen;
      }

      $users->name = $request->ten;
      $users->email = $request->email;
      $users->save();
      return redirect()->back()->with('thongbao', 'Sửa thành công.');
   }

   public function getDangki() {
      return view('pages.register');
   }

   public function postDangki(Request $request) {

      $this->validate($request,
      [
         'name' => 'required|unique:users,name|min:4',
         'email' => 'required|email|unique:users,email',
         'password' => 'required|min:6|max:32',
         'repassword' => 'required|same:password'
      ],
      [
         'name.required' => 'Bạn chưa nhập tên người dùng',
         'name.min' => 'Tên người dùng phải có tối thiểu 4 kí tự!',
         'name.unique' => 'Tên người dùng đã tồn tại đã tồn tại',

         'email.required' => 'Bạn chưa nhập email',
         'email.email' => 'Bạn chưa nhập đúng định dạng email',
         'email.unique' => 'Email đã tồn tại',

         'password.required' => 'Bạn chưa nhập mật khẩu',
         'password.min' => 'Mật khẩu phải có ít nhất 6 kí tự',
         'password.max' => 'Mật khẩu phải có tối đa 32 kí tự',

         'repassword.required' => 'Mật khẩu không đúng!',
         'repassword.same' => 'Mật khẩu không đúng!!'
      ]);

      $users = new User();
      $users->name = $request->name;
      $users->email = $request->email;
      $users->password = bcrypt($request->password);
      $users->level = 0;
      $users->save();
      return redirect('signup')->with('thongbao', 'Đăng kí thành công.');

   }

   public function findProduct(request $request) {

      $productAll = product::all();
      $keyword = $request->keyword;
      $productLists = product::where('ten_sp','like','%'.$keyword.'%')->orWhere('content','like','%'.$keyword.'%')->get();

      $viewdata = [
         'productLists' => $productLists,
         'productAll' => $productAll,
         'keyword' => $keyword
      ];

      return view('pages.find', $viewdata);

   }
}