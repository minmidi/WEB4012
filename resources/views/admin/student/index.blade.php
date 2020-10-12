@extends('admin.master')
@section('title','Danh sách học sinh')
@section('folder','Danh sách học sinh')
@section('active_2','active')
@section('url','Danh sách học sinh')
@section('main')

<form action="" method="GET" class="form-inline mb-2" role="form">
    <div class="form-group mr-2">
        <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
    </div>
    <button type="submit" class="btn btn-primary mr-2">
        <i class="fas fa-search"></i>
    </button>
    <a href="{{ route('student.create') }}" class="btn btn-success"> thêm mới</a>
</form>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên</th>
        <th scope="col">SĐT</th>
        <th scope="col">Tuổi</th>
        <th scope="col">Giới tính</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Hoạt động</th>
        <th scope="col">Chi tiết</th>
        <th scope="col">Sửa</th>
        <th scope="col">Xoá</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $students as $student )
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->age }}</td>
                <td>
                    @if ($student->gender === 0)
                        Nam
                    @elseif ($student->gender === 1)
                        Nữ
                    @else
                    Giới tính khác
                    @endif
                </td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->is_active == 1 ? 'active' : 'not active' }}</td>

                <td>
                    <a href="{{ route('student.show', $student->id) }}" class="btn btn-xs btn-primary">Chi tiết</a>
                </td>

                <td>
                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-xs btn-primary">Sửa</a>
                </td>
                <td>
                    <form
                      action="{{ route('student.destroy', $student->id) }}"
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
        {{ $students -> links() }}
    </div>
@stop