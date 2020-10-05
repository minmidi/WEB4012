@extends('admin.master')
@section('title','Danh sách học sinh')
@section('folder','Danh sách học sinh')
@section('active_2','active')
@section('url','Danh sách học sinh')
@section('main')

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
                <td>{{ $student->is_active == 1 ? 'yes' : 'no' }}</td>
            </tr>
            
        @endforeach
    </tbody>
  </table>

@stop