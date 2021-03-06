@extends('admin.master')
@section('title','Danh sách học sinh')
@section('folder','Danh sách học sinh')
@section('active_2','active')
@section('url','Danh sách học sinh')
@section('main')


<form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data" role="form" >
    @csrf
    <!-- Tên sản phẩm-->
    <div class="form-group m-3">
        <label for="name" class="mt-3">Nhập tên học sinh</label>
        <input type="text" class="form-control" name="name" id='name' placeholder="Nhập tên học sinh">
    </div>

    <div class="form-group m-3">
        <label for="phone" class="mt-3">Số điện thoại</label>
        <input type="text" class="form-control" name="phone" id='phone' placeholder="Nhập số điện thoại">
    </div>

    <div class="form-group m-3">
        <label for="age" class="mt-3">Tuổi</label>
        <input type="number" class="form-control" name="age" id='age' placeholder="Nhập tuổi">
    </div>

    <div class="form-group m-3">
        <label for="address" class="mt-3">Địa chỉ</label>
        <input type="text" class="form-control" name="address" id='address' placeholder="Nhập địa chỉ">
    </div>

    <div class="form-group m-3">
        <label class="mt-3">Giới tính</label>
        <div class="row">
            <div class="form-check ml-3">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="0" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Nam
                </label>
            </div>
    
            <div class="form-check ml-3">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="1" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Nữ
                </label>
            </div>
    
            <div class="form-check ml-3">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="2" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Không xác định
                </label>
            </div>
        </div>  
    </div>

    <div class="form-group m-3">
        <label class="mt-3">Trạng thái</label>
        <div class="row">
            <div class="form-check ml-3">
                <input class="form-check-input" type="radio" name="is_active" id="is_active" value="0" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Không kích hoạt
                </label>
            </div>
    
            <div class="form-check ml-3">
                <input class="form-check-input" type="radio" name="is_active" id="is_active" value="1" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Kích hoạt
                </label>
            </div>
        </div>  
    </div>

  



    <button type="submit" class="btn btn-primary m-3">Thêm mới</button>
</form>

@stop