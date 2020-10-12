@extends('admin.master')
@section('title','Danh sách bài viết')
@section('folder','Danh sách bài viết')
@section('active_4','active')
@section('url','Danh sách bài viết')
@section('main')

<form action="" method="GET" class="form-inline mb-2" role="form">
    <div class="form-group mr-2">
        <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
    </div>
    <button type="submit" class="btn btn-primary mr-2">
        <i class="fas fa-search"></i>
    </button>
    <a href="{{ route('post.create') }}" class="btn btn-success"> thêm mới</a>
</form>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Ghi chú</th>
        <th scope="col">Nội dung</th>
        <th scope="col">Hình ảnh</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Sinh viên</th>
        <th scope="col">Chi tiết</th>
        <th scope="col">Sửa</th>
        <th scope="col">Xoá</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $posts as $post )
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->desc }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->image_url }}</td>
                <td>{{ $post->is_active == 1 ? 'active' : 'not active' }}</td>
                <td>{{ $post->student->name }}</td>


                <td>
                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-xs btn-primary">Chi tiết</a>
                </td>

                <td>
                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-xs btn-primary">Sửa</a>
                </td>
                <td>
                    <form
                      action="{{ route('post.destroy', $post->id) }}"
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
        {{ $posts -> links() }}
    </div>
@stop