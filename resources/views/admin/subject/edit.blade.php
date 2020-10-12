@extends('admin.master')
@section('title','Sửa môn học')
@section('folder','Sửa môn học')
@section('active_3','active')
@section('url','Sửa môn học')
@section('main')


<form action="{{ route('subject.store') }}" method="POST" enctype="multipart/form-data" role="form" >
    @csrf
    <div class="form-group m-3">
        <label for="name" class="mt-3">Nhập tên môn học</label>
        <input type="text" class="form-control" name="name" id='name' placeholder="Nhập tên môn học" value="{{$subject->name }}">
    </div>

    <div class="form-group m-3">
        <label class="mt-3">Trạng thái</label>
        <div class="row">
            <div class="form-check ml-3">
                <input class="form-check-input" type="radio" name="is_active" id="is_active" value="0" {{$subject->is_active === 0 ? "checked" : ""}}>
                <label class="form-check-label" for="exampleRadios1">
                  Không kích hoạt
                </label>
            </div>
    
            <div class="form-check ml-3">
                <input class="form-check-input" type="radio" name="is_active" id="is_active" value="1" {{$subject->is_active === 1 ? "checked" : ""}}>
                <label class="form-check-label" for="exampleRadios1">
                  Kích hoạt
                </label>
            </div>
        </div>  
    </div>
    <button type="submit" class="btn btn-primary m-3">Thêm mới</button>
</form>

@stop