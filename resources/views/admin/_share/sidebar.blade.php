<nav id="sidebar">
    <div class="sidebar-header">
        <div class="pull-left image">
            <img src="#" class="img-circle" alt="User Image">
        </div>

        <div class="pull-left info">
            <p>name</p>
            <a href="#"><i class="fa fa-circle text-success fa-xs"></i> Online</a>
        </div>
    </div>

    <ul class="list-unstyled components">
        <li class="@yield('active_1')">
            <a href="#"><i class="fas fa-tachometer-alt"></i> Trang chủ</a>
        </li>
        <li class="@yield('active_2')">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user-graduate"></i> Học sinh</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{{ route('student.index') }}"><i class="fas fa-list"></i> Danh sách học sinh</a>
                </li>
                <li>
                    <a href="{{ route('student.create') }}"><i class="fas fa-plus-circle"></i> Thêm học sinh</a>
                </li>
            </ul>
        </li>

        <li class="@yield('active_3')">
            <a href="#categoriesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-book-open"></i> Môn học</a>
            <ul class="collapse list-unstyled" id="categoriesSubmenu">
                <li>
                    <a href="{{ route('subject.index') }}"><i class="fas fa-list"></i> Danh sách môn học</a>
                </li>
                <li>
                    <a href="{{ route('subject.create') }}"><i class="fas fa-plus-circle"></i> Thêm môn học</a>
                </li>
            </ul>
        </li>

        <li class="@yield('active_4')">
            <a href="#postSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-edit"></i> Bài viết</a>
            <ul class="collapse list-unstyled" id="postSubmenu">
                <li>
                    <a href="{{ route('post.index') }}"><i class="fas fa-list"></i> Danh sách bài viết</a>
                </li>
                <li>
                    <a href="{{ route('post.create') }}"><i class="fas fa-plus-circle"></i> Thêm bài viết</a>
                </li>
            </ul>
        </li>

        <li class="@yield('active_5')">
            <a href="#categorySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-th-list"></i> Danh mục</a>
            <ul class="collapse list-unstyled" id="categorySubmenu">
                <li>
                    <a href="{{ route('category.index') }}"><i class="fas fa-list"></i> Danh mục</a>
                </li>
                <li>
                    <a href="{{ route('category.create') }}"><i class="fas fa-plus-circle"></i> Thêm danh mục</a>
                </li>
            </ul>
        </li>

        <li class="@yield('active_6')">
            <a href="#commentSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-comments"></i> Bình luận</a>
            <ul class="collapse list-unstyled" id="commentSubmenu">
                <li>
                    <a href="{{ route('comment.index') }}"><i class="fas fa-list"></i> Danh sách bình luận</a>
                </li>
                <li>
                    <a href="{{ route('comment.create') }}"><i class="fas fa-plus-circle"></i> Thêm bình luận</a>
                </li>
            </ul>
        </li>

        <li class="@yield('active_7')">
            <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user-cog"></i> Tài khoản</a>
            <ul class="collapse list-unstyled" id="userSubmenu">
                <li>
                    <a href="#"><i class="fas fa-list"></i> Danh sách tài khoản</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-plus-circle"></i> Thêm tài khoản</a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="{{ route('logout') }}" 
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
            >
                <i class="fas fa-sign-out-alt"></i> Đăng xuất
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>
