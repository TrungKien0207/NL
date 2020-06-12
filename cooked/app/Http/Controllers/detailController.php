<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\detail;
use App\product;

class detailController extends Controller
{
    public function getList() {
    	$detail = detail::all();
    	return view('admin.detail.list', ['detail'=> $detail]);
    }

    public function getEdit($id) {
        $product = product::select('id','ten_sp')->get();
    	$detail = detail::find($id);
        return view('admin.detail.edit',compact('detail', 'product'));
    }

    public function postEdit(Request $request, $id) {
        $detail = detail::find($id);
        $this->validate($request,
            [
                'content' => 'required|min:2',
                'idproduct' => 'required',
            ],
            [
                'content.required' => 'Bạn chưa nhập nội dung món ăn',
                'content.min' => 'Nội dung món ăn phải có tối thiểu 2 kí tự!',

                'idproduct.required' => 'Bạn chưa chọn món ăn',

            ]);

        $detail->idproduct = $request->idproduct;
        $detail->content = $request->content;
        $detail->contentkd = str::slug($request->content);
        $detail->note = $request->note;
        $detail->bg = $request->bg;
        $detail->step = $request->step;
        $detail->img1 = $request->image1;
        $detail->img2 = $request->image2;
        $detail->img3 = $request->image3;
        $detail->img4 = $request->image4;
        $detail->img5 = $request->image5;
        $detail->img6 = $request->image6;
        $detail->save();

        return redirect('admin/detail/edit/'.$id)->with('thongbao', 'Sửa thành công.');
    }

    public function getInsert() {
        $product = product::all();
    	return view('admin.detail.insert',['product'=> $product]);
    }

    public function postInsert(Request $request) {
        // dd($request->all());
    	$this->validate($request,
    		[
                'content' => 'required|unique:detail,content|min:2',
                'idproduct' => 'required',
            ],
            [
                'content.required' => 'Bạn chưa nhập Nội dung món ăn',
                'content.unique' => 'Nội dung món ăn đã tồn tại',
                'content.min' => 'Nội dung món ăn phải có tối thiểu 2 kí tự!',

                'idproduct.required' => 'Bạn chưa chọn món ăn',

            ]);
    	$detail = new detail();
        $detail->idproduct = $request->idproduct;
        $detail->content = $request->content;
        $detail->contentkd = str::slug($request->content);
        $detail->step = $request->step;
        $detail->note = $request->note;
        $detail->bg = $request->bg;
        $detail->img1 = $request->image1;
        $detail->img2 = $request->image2;
        $detail->img3 = $request->image3;
        $detail->img4 = $request->image4;
        $detail->img5 = $request->image5;
        $detail->img6 = $request->image6;
        $detail->save();

    	return redirect('admin/detail/insert')->with('thongbao', 'Thêm thành công.');
    }

    public function getDelete($id) {
        $detail = detail::find($id);
        $detail->delete();

        return redirect('admin/detail/list')->with('thongbao', 'Xóa thành công.');
    }
}
