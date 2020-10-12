@extends('admin.master')
@section('title','Danh sách môn học')
@section('folder','Danh sách môn học')
@section('active_3','active')
@section('url','Danh sách môn học')
@section('main')

<form action="" method="GET" class="form-inline mb-2" role="form">
    <div class="form-group mr-2">
        <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
    </div>
    <button type="submit" class="btn btn-primary mr-2">
        <i class="fas fa-search"></i>
    </button>
    <a href="{{ route('subject.create') }}" class="btn btn-success"> thêm mới</a>
</form>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên môn học</th>
        <th scope="col">Hoạt động</th>
        <th scope="col">Sửa</th>
        <th scope="col">Xoá</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $subjects as $subject )
            <tr>
                <td>{{ $subject->id }}</td>
                <td>{{ $subject->name }}</td>
                <td>{{ $subject->is_active == 1 ? 'active' : 'not active' }}</td>

                <td>
                    <a href="{{ route('subject.edit', $subject->id) }}" class="btn btn-xs btn-primary">Sửa</a>
                </td>
                <td>
                    <form
                      action="{{ route('subject.destroy', $subject->id) }}"
                      method="POST"
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
    {{ $subjects -> links() }}
  </div>

@stop