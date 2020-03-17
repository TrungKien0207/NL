<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;

use App\comment;
use App\product;

class commentController extends Controller
{
    public function getDelete($id) {
        $comment = comment::find($id);

        if($comment != null){
        	$comment->delete();
        	return redirect('admin/product/list')->with('thongbao', 'Xóa thành công.');
        }

    }

    public function postComment(Request $request,$id ) {
    	$idPro = $id;
    	$product = product::find($id);
    	$comment = new comment;
    	$comment->idPro = $idPro;
    	$comment->idUser = Auth::user()->id;
    	$comment->contentC = $request->content;
    	$comment->save();

    	return redirect()->back();

    }
}
