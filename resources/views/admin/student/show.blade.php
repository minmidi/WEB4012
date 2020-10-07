@extends('admin.master')
@section('title','Danh sách học sinh')
@section('folder','Danh sách học sinh')
@section('active_2','active')
@section('url','Danh sách học sinh')
@section('main')

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Danh mục</th>
            <th scope="col">Thông tin chi tiết</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Họ tên</th>
            <td>{{ $student->name }}</td>
        </tr>
        <tr>
            <th scope="row">Số điện thoại</th>
            <td>{{ $student->phone }}</td>
        </tr>
        <tr>
            <th scope="row">Tuổi</th>
            <td>{{ $student->age }}</td>
        </tr>
        <tr>
            <th scope="row">Giới tính</th>
            <td>
                @if ($student->gender === 0)
                        Nam
                @elseif ($student->gender === 1)
                    Nữ
                @else
                Giới tính khác
                @endif
            </td>
        </tr>

        <tr>
            <th scope="row">Trạng thái</th>
            <td>
                {{ $student->is_active == 1 ? 'active' : 'not active' }}
            </td>
        </tr>
        </tbody>
    </table>


@stop