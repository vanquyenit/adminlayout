@extends('admin.layouts.master')
@section('main')

    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>Add</small>
                </h1>
            </div>

            <div class="col-lg-8" style="padding-bottom:120px">
                @if(count($errors) > 0)
                    <div class="alert alert-danger alert_msg">
                        <ul>
                            @foreach($errors->all() as $er)
                                <li>{{ $er }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('getCateAdd') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Category Parent</label>
                        <select class="form-control" name="sltParent">
                            <option value="0">Please Choose Category</option>
                            <?php cate_parent($parent);?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" />
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm Danh Mục</button>
                    <form>
            </div>
        </div>
    </section>
@stop