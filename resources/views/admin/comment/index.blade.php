@extends('admin.master')
@section('title','Danh sách bình luận')
@section('folder','Danh sách bình luận')
@section('active_6','active')
@section('url','Danh sách bình luận')
@section('main')

<form action="" method="GET" class="form-inline mb-2" role="form">
    <div class="form-group mr-2">
        <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
    </div>
    <button type="submit" class="btn btn-primary mr-2">
        <i class="fas fa-search"></i>
    </button>
    <a href="{{ route('comment.create') }}" class="btn btn-success"> thêm mới</a>
</form>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nội dung</th>
        <th scope="col">Bài viết</th>
        <th scope="col">Sửa</th>
        <th scope="col">Xoá</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $comments as $comment )
            <tr>
                <td>{{ $comment->id }}</td>
                <td>{{ $comment->content }}</td>
                <td>{{ $comment->post->desc }}</td>
            
                <td>
                    <a href="{{ route('comment.edit', $comment->id) }}" class="btn btn-xs btn-primary">Sửa</a>
                </td>
                <td>
                    <form
                      action="{{ route('comment.destroy', $comment->id) }}"
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
        {{ $comments -> links() }}
    </div>
@stop