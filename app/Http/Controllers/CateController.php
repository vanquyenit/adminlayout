<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Http\Requests\CateAddRequest;

class CateController extends Controller
{
    public function getCateAdd(){
        $parent = Category::all();
        return view('admin.module.category.add', compact('parent'));
    }

    public function postCateAdd(CateAddRequest $request){
        $cate = new Category;
        $cate->name = $request->txtCateName;
        $cate->alias = str_slug($request->txtCateName);
        $cate->parent_id = $request->sltParent;
        $cate->save();
        return redirect()->route('getCateList')->with('thongbao', 'Thêm Thể Loại Thành Công');
    }

    public function getCateList(){
        $cate = Category::all();
        return view('admin.module.category.list', compact('cate'));
    }
}
