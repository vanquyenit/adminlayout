@extends('admin.layout.master')
@section('header.title')
    Edit Category
@endsection
@section('main')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thể Loại
                        <small>Sửa</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->

                <div class="col-lg-7" style="padding-bottom:120px">
                    @include('admin.layout.error')
                    <form action="" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Category Parent</label>
                            <select class="form-control" name="sltParent">
                                <option value="0">Please Choose Category</option>
                                <?php cate_parent($parent,0,"--", $data->parent_id);?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Category Name</label>
                            <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" value="{!! old('txtCateName', isset($data["name"]) ? $data["name"] : null) !!}" />
                        </div>
                        <div class="form-group">
                            <label>Category Order</label>
                            <input class="form-control" name="txtOrder" placeholder="Please Enter Category Order" value="{!! old('txtOrder', isset($data["order"]) ? $data["order"] : null) !!}" />
                        </div>
                        <div class="form-group">
                            <label>Category Keywords</label>
                            <input class="form-control" name="txtKeyword" placeholder="Please Enter Category Keywords" value="{!! old('txtKeyword', isset($data["keywords"]) ? $data["keywords"] : null) !!}"  />
                        </div>
                        <div class="form-group">
                            <label>Category Description</label>
                            <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription', isset($data["description"]) ? $data["description"] : null) !!}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm Danh Mục</button>
                    <form>
                </div>
            </div>
        </div>
    </div>

@endsection
