<!doctype html>
<html lang="en">
<head>

    <title><?php echo $this->title; ?></title>
    <?php require_once "views/layouts/css.php"?>
    <style>
        body{
            font-family: "Times New Roman";
            font-size: 18px;
        }
    </style>
</head>
<body>


<!--header-->
    <?php require_once "views/layouts/header.php"?>
<!--end header-->

<!--   menu-->
<?php
    // khai báo menu
        $products_model = new Product();
        $products = $products_model->getAll();

        $category_model = new Category();
        $categories = $category_model->getAll();
    require_once "views/layouts/menu.php"?>
<!--end menu-->

    <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="harmic-offcanvas-body">
            <div class="inner-body">

                <div class="harmic-offcanvas-top">
                    <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                </div>

                <div class="offcanvas-user-info text-center px-6 pb-5">

                    <ul class="dropdown-wrap justify-content-center text-silver">


                        <li class="dropdown dropup">
                            <a class="btn btn-link  ht-btn p-0" href="login.html">
                                <i class="pe-7s-users"></i>
                                <span
                                        style=" color: #797676; padding-left: 7px; font-size: 16px; padding-top: 3px;">Đăng
                                        nhập </span>
                            </a>




                        </li>

                    </ul>
                </div>
                <div class="offcanvas-menu_area">
                    <nav class="offcanvas-navigation">
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children">
                                <a href="/">
                                    <i class="pe-7s-home" style="font-size:20px"></i>
                                    Home
                                </a>

                            </li>
                            <li>
                                <a href="">
                                    <span class="mm-text">Giới thiệu</span>
                                </a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">
                                        <span class="mm-text">
                                            Danh mục sản phẩm
                                            <i class="pe-7s-angle-down"></i>
                                        </span>
                                </a>
                                <ul class="sub-menu">

                                    <li>
                                        <a href="category.html">

                                            <span class="mm-text">Danh mục 1</span>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="category.html">

                                            <span class="mm-text">Danh mục 2</span>

                                        </a>
                                    </li>

                                    <li>
                                        <a href="category.html">

                                            <span class="mm-text">Danh mục 3</span>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="category.html">

                                            <span class="mm-text">Danh mục 4</span>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="category.html">

                                            <span class="mm-text">Danh mục 5</span>

                                        </a>
                                    </li>


                                </ul>
                            </li>

                            <li>
                                <a href="#">Khuyến mãi</a>
                            </li>
                            <li>
                                <a href="#">Tin tức</a>
                            </li>
                            <li>
                                <a href="#">Hình ảnh</a>
                            </li>

                            <li>
                                <a href="#">Liên hệ</a>
                            </li>
                            <li style="padding-left:70px">
                                <a href="#" style="color:red; font-weight:bold">Hotline: 038.464.0190</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas-search_wrapper" id="searchBar">
        <div class="harmic-offcanvas-body">
            <div class="container h-100">
                <div class="offcanvas-search">
                    <div class="harmic-offcanvas-top">
                        <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                    </div>
                    <span class="searchbox-info">Nhập từ bạn muốn tìm và nhấn Enter</span>

                    <div class="hm-searchbox">
                        <input type="text" placeholder="Tìm kiếm.....">
                        <button class="search-btn" type="submit" onclick="onSearch()"><i
                                    class="pe-7s-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End menu mobile -->
<!--end header-->

<!--content-->
<!--thông báo lỗi-->
<section class="content-header">
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger">
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($this->error)): ?>
        <div class="alert alert-danger">
            <?php
            echo $this->error;
            ?>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['alert'])): ?>
        <div class="alert alert-success">
            <?php
            echo $_SESSION['alert'];
            unset($_SESSION['alert']);
            ?>
        </div>
    <?php endif; ?>

    <!--        <div class="alert alert-danger">Lỗi validate</div>-->
    <!--        <p class="alert alert-success">Thành công</p>-->
</section>
    <?php echo $this->content;?>
<!--end content-->

<!--footer-->
<!-- Begin Shipping Area -->
<div class="shipping-area " style="padding-bottom:100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="shipping-item">
                    <div class="shipping-img">
                        <img src="https://cuahangdongho.vn/wp-content/uploads/2020/06/xe-tai.png"
                             alt="Shipping Icon">
                    </div>
                    <div class="shipping-content">
                        <h5 class="title">Miễn phí vận chuyển</h5>
                        <p class="short-desc mb-0">Ưu đãi giao hàng tận nhà miễn phí</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                <div class="shipping-item">
                    <div class="shipping-img">
                        <img src="https://cuahangdongho.vn/wp-content/uploads/2020/06/logo1.png"
                             alt="Shipping Icon">
                    </div>
                    <div class="shipping-content">
                        <h5 class="title">Hỗ trợ trực tuyến</h5>
                        <p class="short-desc mb-0">Hỗ trợ trực tuyến 24/7</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                <div class="shipping-item">
                    <div class="shipping-img">
                        <img src="https://cuahangdongho.vn/wp-content/uploads/2020/06/the-besst.png"
                             alt="Shipping Icon">
                    </div>
                    <div class="shipping-content">
                        <h5 class="title">Bảo đảm chất lượng</h5>
                        <p class="short-desc mb-0">Sản phẩm bảo đảm chất lượng</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Shipping Area End Here -->
<!-- Begin Product Area -->

<!-- Begin Footer Area -->
<div class="footer-area" style="border-top: 2px solid #f15b67;">
    <div class="footer-top section-space-y-axis-100 text-black" data-bg-color="#fff" style="padding-bottom:30px">
        <div class="container">
            <div class="row">


                <div class="col-lg-3 col-md-3">
                    <div class="widget-item">
                        <div class="footer-logo pb-4">
                            <a href="index.html">
                                <img src="assets/images/logo/vascra.png" alt="Logo"
                                     style="max-height:116px">
                            </a>
                        </div>
                        <p class="short-desc mb-2">
                            <b>Vascara | Thương hiệu thời trang balo túi xách, giày dép, bóp ví nữ đẹp</b>
                        </p>
                        <div class="widget-contact-info pb-6">
                            <ul>
                                <li>
                                    <i class="pe-7s-map-marker"></i>
                                    Số 298 Đ. Cầu Diễn, Minh Khai, Bắc Từ Liêm, Hà Nội
                                </li>
                                <li>
                                    <i class="pe-7s-mail"></i>
                                    <a href="mailto:vascara.com.vn">vascara.com.vn</a>
                                </li>
                                <li>
                                    <i class="pe-7s-phone"></i>
                                    <a href="tel:0384640190">038.464.0190</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>




                <div class="col-lg-3  col-md-3 pt-10 pt-lg-0">
                    <div class="widget-item">
                        <h3 class="widget-title mb-5">Tài khoản</h3>
                        <ul class="widget-list-item">

                            <li>
                                <a href="index.php?controller=auth&action=logout">Đăng Nhập</a>
                            </li>
                            <li>
                                <a href="index.php?controller=auth&action=register">Đăng Kí</a>
                            </li>
                            <li>
                                <a href="index.php?controller=auth&action=logout"> Đăng Xuất</a>
                            </li>
                            <li>
                                <a href="index.php?controller=cart&action=index"> Giỏ Hàng</a>
                            </li>
                            <li>
                                <a href="index.php?controller=user&action=profile"> Quản lí tài khoản</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-3  col-md-3 pt-10 pt-lg-0">
                    <div class="widget-item">
                        <h3 class="widget-title mb-5">Danh mục sản phẩm</h3>
                        <ul class="widget-list-item">

                            <?php foreach ($categories as $category){?>
                                <li>
                                    <a href="index.php?controller=product&action=get_products_by_category&id=<?php echo $category['id']?>"><?php echo $category['name']?></a>
                                </li>

                            <?php }?>

                        </ul>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3 pt-10 pt-lg-0">
                    <div class="widget-item">
                        <h3 class="widget-title mb-5">Newsletters</h3>
                        <p class="short-desc">
                            <iframe name="f1ebba1d63f9ea8" width="1000px" height="1000px"
                                    data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin"
                                    frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                    allow="encrypted-media"
                                    src="https://www.facebook.com/v4.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1110e43cd6ac88%26domain%3Dgiaynhatchinhhang.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fgiaynhatchinhhang.vn%252Ff313b0f43bf51f%26relation%3Dparent.parent&amp;container_width=270&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fgiaynhatxachtaychinhhang%2F%3Fref%3Dbr_rs&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"
                                    style="border: none; visibility: visible; width: 270px; height: 130px;"
                                    class=""></iframe>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom py-3" data-bg-color="#000">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                            <span class="copyright-text text-white">
                                © 2021 Vascara Made with <i class="fa fa-heart text-danger"></i> by Phạm Thị Mỹ Linh
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Area End Here -->
<!-- Begin Scroll To Top -->
<a class="scroll-to-top" href="#">
    <i class="fa fa-chevron-up"></i>
</a>
<!--end footer-->
    <?php require_once "views/layouts/script.php";?>
<script>
    function alert(message, type='info', detail ){
        Swal.fire(
            message,
            detail,
            type
        )
    }
</script>
</body>
</html>
