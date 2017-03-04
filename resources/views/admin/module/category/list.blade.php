@extends('admin.layouts.master')
@section('main')
    <section class="content">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thể Loại
                <small>danh sách</small>
            </h1>
        </div>
        <div class="col-lg-12">
            @if(session('thongbao'))
                <div class="alert alert-success alert_msg text-center">
                    {!! session('thongbao') !!}
                </div>
            @endif
        </div>
        <!-- /.col-lg-12 -->
        <table class="table table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr class="danger">
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Category Parent</th>
                    <th class="text-center">Delete</th>
                    <th class="text-center">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cate as $value)
                    <tr class="even gradeC" align="center">
                        <td>{!! $value->id !!}</td>
                        <td>{!! $value->name !!}</td>
                        <td>
                            @if($value->parent_id == 0)
                                {{ "None" }}
                            @else
                                <?php
                                    $paren = DB::table('categories')->where('id', $value->parent_id)->first();
                                    echo $paren->name;
                                ?>
                            @endif
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('getCateDelete',['id' => $value->id]) }}" onclick="return delcate('Bạn có muốn xóa thể loại?')"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('getCateEdit',['id' => $value->id]) }}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </section>
@endsection