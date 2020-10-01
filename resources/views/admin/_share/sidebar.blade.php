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
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-tshirt"></i> Sản phẩm</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#"><i class="fas fa-list"></i> Danh sách sản phẩm</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-plus-circle"></i> Thêm sản phẩm</a>
                </li>
            </ul>
        </li>

        <li class="@yield('active_3')">
            <a href="#categoriesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-chart-pie"></i> Danh mục</a>
            <ul class="collapse list-unstyled" id="categoriesSubmenu">
                <li>
                    <a href="#"><i class="fas fa-list"></i> Danh mục sản phẩm</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-plus-circle"></i> Thêm danh mục</a>
                </li>
            </ul>
        </li>

        <li class="@yield('active_4')">
            <a href="#gallerySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-folder-open"></i> Ảnh sản phẩm</a>
            <ul class="collapse list-unstyled" id="gallerySubmenu">
                <li>
                    <a href="galleries"><i class="fas fa-list"></i> Danh mục ảnh sản phẩm</a>
                </li>
                <li>
                    <a href="galleries_add"><i class="fas fa-plus-circle"></i> Thêm ảnh</a>
                </li>
            </ul>
        </li>

        <li class="@yield('active_5')">
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
            <a href="#"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
        </li>
    </ul>
</nav>
