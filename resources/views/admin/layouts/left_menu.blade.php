<aside>
    <div id="sidebar" class="nav-collapse">
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="{{ @url('admin') }}">
                        <i class="fa fa-tachometer"></i>
                        <span>Bảng điều khiển</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-users"></i>
                        <span>Người dùng</span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="{{ @url('admin/users') }}">
                                <i class="fa fa-list"></i>
                                <span>Danh sách</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ @url('admin/users/create') }}">
                                <i class="fa fa-plus"></i>
                                <span>Thêm</span>
                            </a>
                        </li>
                    </ul>
                </li>
               {{--  <li>
                    <a href="javascript:;">
                        <i class="fa fa-image"></i>
                        <span>Slide trang chủ</span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="{{ @url('admin/slides') }}">
                                <i class="fa fa-list"></i>
                                <span>Danh sách</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ @url('admin/slides/create') }}">
                                <i class="fa fa-plus"></i>
                                <span>Thêm</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-image"></i>
                        <span>Thương hiệu</span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="{{ @url('admin/brands') }}">
                                <i class="fa fa-list"></i>
                                <span>Danh sách</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ @url('admin/brands/create') }}">
                                <i class="fa fa-plus"></i>
                                <span>Thêm</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-list"></i>
                        <span>Danh mục</span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="{{ @url('admin/categories') }}">
                                <i class="fa fa-list"></i>
                                <span>Danh sách</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ @url('admin/categories/create') }}">
                                <i class="fa fa-plus"></i>
                                <span>Thêm</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-list"></i>
                        <span>Thông tin các chi nhánh</span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="{{ @url('admin/footerInfos') }}">
                                <i class="fa fa-list"></i>
                                <span>Danh sách</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ @url('admin/footerInfos/create') }}">
                                <i class="fa fa-plus"></i>
                                <span>Thêm</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-list"></i>
                        <span>Sản phẩm</span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="{{ @url('admin/products') }}">
                                <i class="fa fa-list"></i>
                                <span>Danh sách</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ @url('admin/products/create') }}">
                                <i class="fa fa-plus"></i>
                                <span>Thêm</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-list"></i>
                        <span>Tin tức</span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="{{ @url('admin/news') }}">
                                <i class="fa fa-list"></i>
                                <span>Danh sách</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ @url('admin/news/create') }}">
                                <i class="fa fa-plus"></i>
                                <span>Thêm</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-list"></i>
                        <span>Đơn hàng</span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="{{ @url('admin/orders') }}">
                                <i class="fa fa-list"></i>
                                <span>Danh sách</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ @url('admin/orders/create') }}">
                                <i class="fa fa-plus"></i>
                                <span>Thêm</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-list"></i>
                        <span>Các trang bổ xung</span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="{{ @url('admin/pages') }}">
                                <i class="fa fa-list"></i>
                                <span>Danh sách</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ @url('admin/pages/create') }}">
                                <i class="fa fa-plus"></i>
                                <span>Thêm</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-list"></i>
                        <span>Cài đặt</span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="{{ @url('admin/settings') }}">
                                <i class="fa fa-cogs"></i>
                                <span>Thông tin chung</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ @url('admin/settings/navs') }}">
                                <i class="fa fa-list"></i>
                                <span>Thanh điều hướng</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ @url('admin/settings/footer') }}">
                                <i class="fa fa-list"></i>
                                <span>Chân trang</span>
                            </a>
                    </ul>
                </li>
                <li>
                    <a href="tel:0326152310">
                        <i class="fa fa-phone"></i>
                        <span>Báo lỗi</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
