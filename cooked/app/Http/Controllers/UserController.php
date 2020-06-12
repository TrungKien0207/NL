<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\User;

class UserController extends Controller
{

    public function getList() {
    	$users = User::all();
    	return view('admin.User.list', ['users'=> $users]);
    }

    public function getInsert() {
    	return view('admin.User.insert');
    }

    public function postInsert(Request $request) {

    	$this->validate($request,
    		[
                'name' => 'required|unique:users,name|min:4',
                'email' => 'required|email|unique:users,email',
                'pd' => 'required|min:6|max:32',
                'pdag' => 'required|same:pd'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên người dùng',
                'name.min' => 'Tên người dùng phải có tối thiểu 4 kí tự!',
                'name.unique' => 'Tên người dùng đã tồn tại đã tồn tại',

                'email.required' => 'Bạn chưa nhập email',
                'email.email' => 'Bạn chưa nhập đúng định dạng email',
                'email.unique' => 'Email đã tồn tại',

                'pd.required' => 'Bạn chưa nhập mật khẩu',
                'pd.min' => 'Mật khẩu phải có ít nhất 6 kí tự',
                'pd.max' => 'Mật khẩu phải có tối đa 32 kí tự',

                'pdag.required' => 'Mật khẩu không đúng!',
                'pdag.same' => 'Mật khẩu không đúng!!',

            ]);
    	$users = new User();
    	$users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->pd);
        $users->level = $request->quyen;
        $users->save();


    	return redirect('admin/User/insert')->with('thongbao', 'Thêm thành công.');
    }

    public function getEdit($id) {
      	$users = User::find($id);
        return view('admin.User.edit',compact('users'));
    }

    public function postEdit(Request $request, $id) {
        $users = User::find($id);
        $this->validate($request,
    		[
                'name' => 'required|unique:users,name|min:1',
                'email' => 'required|email',
                'pdag' => 'same:pd'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên người dùng',
                'name.min' => 'Tên người dùng phải có tối thiểu 1 kí tự!',
                'name.unique' => 'Tên người dùng đã tồn tại đã tồn tại',

                'email.required' => 'Bạn chưa nhập email',
                'email.email' => 'Bạn chưa nhập đúng định dạng email',

                'pdag.same' => 'Mật khẩu không đúng!!',
            ]);

    	$users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->pd);
        $users->level = $request->quyen;
        $users->save();


    	return redirect('admin/User/list')->with('thongbao', 'Sửa thành công.');
    }

    public function getDelete($id) {
        $users = User::find($id);
        $users->delete();

        return redirect('admin/User/list')->with('thongbao', 'Xóa thành công.');
    }


    public function getLoginAdmin() {
    	return view('admin/login');
    }

    public function postLoginAdmin(Request $request) {
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
            return redirect('admin/product/list');
        } else {
            return redirect('admin/login')->with('thongbao', 'Email hoặc mật khẩu không đúng!');
        }
    }

    public function getLogoutAdmin() {
        Auth::logout();
        return redirect('admin/login');
    }
}
