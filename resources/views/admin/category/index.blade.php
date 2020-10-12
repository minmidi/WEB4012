@extends('admin.master')
@section('title','Danh mục')
@section('folder','Danh mục')
@section('active_5','active')
@section('url','Danh mục')
@section('main')

<form action="" method="GET" class="form-inline mb-2" role="form">
    <div class="form-group mr-2">
        <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
    </div>
    <button type="submit" class="btn btn-primary mr-2">
        <i class="fas fa-search"></i>
    </button>
    <a href="{{ route('category.create') }}" class="btn btn-success"> thêm mới</a>
</form>

<div class="jumbotron">
    <h1 class="display-4">Tổng số bài viết</h1>
    <p class="lead">
        {{ $posts->count()}}
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên danh mục</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Chi tiết</th>
        <th scope="col">Sửa</th>
        <th scope="col">Xoá</th>
      </tr>
    </thead>

    <tbody>
        @foreach ( $categorys as $category )
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->status == 1 ? 'active' : 'not active' }}</td>


                <td>
                    <a href="{{ route('category.show', $category->id) }}" class="btn btn-xs btn-primary">Chi tiết</a>
                </td>

                <td>
                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-xs btn-primary">Sửa</a>
                </td>
                <td>
                    <form
                      action="{{ route('category.destroy', $category->id) }}"
                      method="category"
                    >
                      @csrf
                      <input type='hidden' name='_method' value='DELETE'></input>
                      <button class="btn btn-xs btn-danger" type='submit'>Xoá</button>
                    </form>
                </td>

            </tr>  
        @endforeach
    </tbody>
  </table>
    <div class="clearfix float-right">
        {{ $categorys -> links() }}
    </div>
@stop