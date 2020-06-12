<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\level;
use App\product;

class levelController extends Controller
{
     public function getList() {
    	$level = level::all();
    	return view('admin.level.list', ['level'=> $level]);
    }

    public function getEdit($id) {
        $product = product::select('id','ten_sp')->get();
    	$level = level::find($id);
        return view('admin.level.edit',compact('level', 'product'));
    }

    public function postEdit(Request $request, $id) {
        $level = level::find($id);
        $this->validate($request,
            [
                'l_ten' => 'required',
                'idPDuct' => 'required',
            ],
            [
                'l_ten.required' => 'Bạn chưa chọn mức độ',

                'idPDuct.required' => 'Bạn chưa chọn món ăn',

            ]);

        $level->idPDuct = $request->idPDuct;
        $level->l_ten = $request->l_ten;
        $level->l_tenkd = str::slug($request->l_ten);
        $level->save();

        return redirect('admin/level/edit/'.$id)->with('thongbao', 'Sửa thành công.');
    }

    public function getInsert() {
        $product = product::all();
    	return view('admin.level.insert',['product'=> $product]);
    }

    public function postInsert(Request $request) {
    	$this->validate($request,
    		[
                'name' => 'required',
                'idPDuct' => 'required',
            ],
            [
                'name.required' => 'Bạn chưa chọn mức độ',

                'idPDuct.required' => 'Bạn chưa chọn món ăn',

            ]);
    	$level = new level();
        $level->idPDuct = $request->idPDuct;
        $level->l_ten = $request->name;
        $level->l_tenkd = str::slug($request->name);
        $level->save();


    	return redirect('admin/level/insert')->with('thongbao', 'Thêm thành công.');
    }

    public function getDelete($id) {
        $level = level::find($id);
        $level->delete();

        return redirect('admin/level/list')->with('thongbao', 'Xóa thành công.');
    }
}
