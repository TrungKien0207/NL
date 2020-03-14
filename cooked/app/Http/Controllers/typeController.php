<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\type;
use Illuminate\Support\Str;

class typeController extends Controller
{
    public function getList() {
    	$type = type::all();
    	return view('admin.type.list', ['type'=>$type]);
    }

    public function getEdit($id) {
    	$type = type::find($id);
        return view('admin.type.edit',compact('type'));
    }

    public function postEdit(Request $request, $id) {
        $type = type::find($id);
        $this->validate($request, 
            [
                'name' => 'required|unique:type,ten_ty|min:2|max:50'
            ], 
            [
                'name.required' => 'Bạn chưa nhập tên loại món ăn',
                'name.unique' => 'Tên loại món ăn đã tồn tại',
                'name.min' => 'Tên loại món ăn phải có tối thiểu 2 kí tự!',
                'name.max' => 'Tên loại món ăn phải có tối đa 50 kí tự!',
            ]);

        $type->ten_ty = $request->name;
        $type->tenkd = str::slug($request->name);
        $type->save();

        return redirect('admin/type/edit/'.$id)->with('thongbao', 'Sửa thành công.'); 
    }

    public function getInsert() {
    	return view('admin.type.insert');
    }

    public function postInsert(Request $request) {
    	$this->validate($request, 
    		[
    			'name' => 'required|unique:type,ten_ty|min:2|max:50'
    		],
    		[
    			'name.required' => 'Bạn chưa nhập tên thể loại!',
                'name.unique' => 'Tên loại món ăn đã tồn tại',
    			'name.min' => 'Tên loại món ăn phải có tối thiểu 2 kí tự!',
    			'name.max' => 'Tên loại món ăn phải có tối đa 50 kí tự!',
    		]);

    	$type = new type;
    	$type->ten_ty = $request->name;
    	$type->tenkd = str::slug($request->name);
    	$type->save();

    	return redirect('admin/type/insert')->with('thongbao', 'Thêm thành công.');
    }

    public function getDelete($id) {
        $type = type::find($id);
        $type->delete();

        return redirect('admin/type/list')->with('thongbao', 'Xóa thành công.');
    }
}
