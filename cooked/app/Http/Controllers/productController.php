<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\product;
use App\category;
use App\type;
use App\comment;

class productController extends Controller
{
    public function getList() {
    	$product = product::all();
        $comments = comment::with('getComment:id,name')->paginate(12);
        $viewdata = [
            'product' => $product,
            'comments' => $comments
        ];
    	return view('admin.product.list', $viewdata);
    }

    public function getEdit($id) {
        $category = category::select('id','c_ten')->get();
        $type = type::select('id','ten_ty')->get();
    	$product = product::find($id);
        return view('admin.product.edit',compact('product', 'category', 'type'));
    }

    public function postEdit(Request $request, $id) {
        $product = product::find($id);
        $this->validate($request, 
            [
                'name' => 'required|unique:product,ten_sp|min:2|max:50',
                'idCategory' => 'required',
                'idCategory' => 'required',
                
                'content' => 'required|unique:product,content',
                'img' => 'required|unique:product,anh_sp',
            ], 
            [
                'name.required' => 'Bạn chưa nhập tên món ăn',
                'name.unique' => 'Tên món ăn đã tồn tại',
                'name.min' => 'Tên món ăn phải có tối thiểu 2 kí tự!',
                'name.max' => 'Tên món ăn phải có tối đa 50 kí tự!',

                'idCategory.required' => 'Bạn chưa chọn loại món ăn',

               

                'content.required' => 'Bạn chưa nhập nội dung.',
                'content.unique' => 'Nội dung món ăn đã tồn tại',

                'img.required' => 'Bạn chưa chọn hình ảnh',
                'img.unique' => 'Hình ảnh đã tồn tại',

            ]);

        $product->idType = $request->idType;
        $product->idCategory = $request->idCategory;
        $product->ten_sp = $request->name;
        $product->anh_sp = $request->img;
        $product->content = $request->content;
        $product->tenkd = str::slug($request->name);
        $product->save();

        return redirect('admin/product/edit/'.$id)->with('thongbao', 'Sửa thành công.'); 
    }

    public function getInsert() {
        $category = category::select('id','c_ten')->get();
        $type = type::select('id','ten_ty')->get();
    	return view('admin.product.insert',compact('category', 'type'));
    }

    public function postInsert(Request $request) {
    	$this->validate($request, 
            [
                'name' => 'required|unique:product,ten_sp|min:2|max:50',
                'idCategory' => 'required',
                'idCategory' => 'required',
                
                'content' => 'required|unique:product,content',
                'img' => 'required|unique:product,anh_sp',
            ], 
            [
                'name.required' => 'Bạn chưa nhập tên món ăn',
                'name.unique' => 'Tên món ăn đã tồn tại',
                'name.min' => 'Tên món ăn phải có tối thiểu 2 kí tự!',
                'name.max' => 'Tên món ăn phải có tối đa 50 kí tự!',

                'idCategory.required' => 'Bạn chưa chọn loại món ăn',

                

                'content.required' => 'Bạn chưa nhập nội dung.',
                'content.unique' => 'Nội dung món ăn đã tồn tại',

                'img.required' => 'Bạn chưa chọn hình ảnh',
                'img.unique' => 'Hình ảnh đã tồn tại',

            ]);

    	$product = new product;
        $product->idType = $request->idType;
        $product->idCategory = $request->idCategory;
        $product->ten_sp = $request->name;
        $product->anh_sp = $request->img;
        $product->content = $request->content;
        $product->tenkd = str::slug($request->name);
        $product->save();

    	return redirect('admin/product/insert')->with('thongbao', 'Thêm thành công.');
    }

    public function getDelete($id) {
        $product = product::find($id);
        $product->delete();

        return redirect('admin/product/list')->with('thongbao', 'Xóa thành công.');
    }
}
