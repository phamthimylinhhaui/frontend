<div class="slider-area">

    <!-- Main Slider -->
    <div class="swiper-container main-slider-2 swiper-arrow with-bg_white">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="slide-inner bg-height" data-bg-image="assets/images/banner/banner1.png">
                </div>
            </div>

            <div class="swiper-slide ">
                <div class="slide-inner bg-height" data-bg-image="assets/images/banner/banner2.png">

                </div>
            </div>

            <div class="swiper-slide ">
                <div class="slide-inner bg-height" data-bg-image="assets/images/banner/banner3.jpg">

                </div>
            </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination with-bg d-md-none"></div>

        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

</div>

<!-- Slider Area End Here -->
<div class="about-banner different-bg-position section-space-y-axis-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-5">
                <div class="parallax-img-wrap">
                    <div class="papaya">
                        <div class="scene fill"
                             style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; position: relative; pointer-events: none;">
                            <div class="expand-width" data-depth="0.2"
                                 style="transform: translate3d(5.9px, -7.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                                <img src="assets/images/banner/BLACK_FRIDAY_2019_LP_BANNER_MOBILE.png"
                                     alt="Banner Images" style="border-radius:32px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 align-self-center" style="padding-left:40px">
                <div class="about-banner-content">
                    <div class="section-title">
                        <span class="sub-title main-color-vascara">ABOUT ME</span>
                        <h2 class="title font-size-60 mb-6" style="font-size:34px !important">V??? TH????NG HI???U <span
                                class="main-color-vascara">VASCARA</span></h2>
                        <p class="short-desc mb-0">
                            Th????ng hi???u gi??y d??p, t??i x??ch, v?? b??p, balo n??? th???i trang cao c???p Ki???u d??ng tr??? trung,
                            thanh l???ch ph?? h???p v???i phong c??ch th???i trang c??ng s???, d??? ti???c,
                            ??i ch??i. Giao h??ng nhanh to??n qu???c. Mi???n ph?? ?????i s???n ph???m trong 7 ng??y. B???o h??nh tr???n
                            ?????i
                            Khuy???n m??i, gi???m gi?? l??? t???t l??n ?????n 40%.
                        </p>
                        <div class="button-wrap pt-8">
                            <a class="btn btn-custom-size lg-size btn-primary btn-dark-hover rounded-0 main-bg-vascara btn-main-vascara"
                               href="index.php?controller=new&action=detail_logo">Xem Th??m</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Begin Product Area -->
<div class="product-area product-style-2 section-space-y-axis-100" style="padding-top:10px">
    <div class="container">
        <div class="section-title text-center pb-55">
            <span class="sub-title text-primary main-color-vascara">OUR PRODUCTS</span>
            <h2 class="title mb-0">S???n ph???m m???i nh???t</h2>
        </div>
        <div class="row">
        <?php
            foreach ($products AS $product){
        ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                <div class="product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="index.php?controller=product&action=detail&id=<?php echo $product['id'] ?>">
                            <img class="img-full"
                                 src="<?php echo $product['avatar']; ?>"
                                 alt="S???n ph???m 1 ">
                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li class="add-to-cart" data-id="<?php echo $product['id']; ?>"  >
                                    <a type="button" href="#"  title="Th??m v??o gi???" class="product-add"><i class="pe-7s-cart"></i></a>                                   </a>
                                </li>

                                <li >
                                    <a href="index.php?controller=product&action=detail&id=<?php echo $product['id'] ?>">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="product-content">
                        <a class="product-name dieuchinhcss main-color-vascara" href="index.php?controller=product&action=detail&id=<?php echo $product['id'] ?>"><?php echo $product['name']?></a>
                        <div class="price-box pb-1">
                            <span class="new-price">Gi??: <?php echo number_format($product['price'])?> vn??</span>
                        </div>

                    </div>


                </div>
            </div>
            <?php
            }
            ?>
<!--        <table class="col-4" style="margin: 30px auto"><tr>-->
<!--                <td colspan="7" >1</td>-->
<!--                <td colspan="7" >2</td>-->
<!--                <td colspan="7" >3</td>-->
<!--                <td colspan="7" >Next</td>-->
<!--            </tr></table>-->



<!--            <div class="col-lg-12">-->
<!--                <div class="pagination-area pt-10">-->
<!--                    <nav aria-label="Page navigation example">-->
<!--                        <ul class="pagination justify-content-center">-->
<!--                            <div class="pagination-container">-->
<!--                                <ul class="pagination">-->
<!--                                    <li class="page-link page-item active"><a>1</a></li>-->
<!--                                    <li class="page-link page-item"><a href="/?page=2">2</a></li>-->
<!--                                    <li class="page-link page-item"><a href="/?page=3">3</a></li>-->
<!--                                    <li class="page-link page-item"><a href="/?page=4">4</a></li>-->
<!--                                    <li class="page-link page-item"><a href="/?page=5">5</a></li>-->
<!--                                    <li class="page-link page-item PagedList-skipToNext"><a href="/?page=2"-->
<!--                                                                                            rel="next">??</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!---->
<!--                        </ul>-->
<!--                    </nav>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</div>