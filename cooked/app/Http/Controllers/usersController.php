<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\users;

class usersController extends Controller
{
    public function getList() {
    	$users = users::all();
    	return view('admin.users.list', ['users'=> $users]);
    }

    public function getInsert() {
    	return view('admin.users.insert');
    }

    public function postInsert(Request $request) {
        // dd($request->all());
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
    	$users = new users();
    	$users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->pd);
        $users->level = $request->quyen;
        $users->save();
        

    	return redirect('admin/users/insert')->with('thongbao', 'Thêm thành công.');
    }
}
