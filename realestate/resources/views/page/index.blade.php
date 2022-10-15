@extends("layout.layout")
@section("content")
<div class="hero-slide">
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="hero-slide__img" src="{{url("frontend/images/banner-chinh02_1637566294.jpg")}}" alt="">
            </div>
            <div class="swiper-slide"><img class="hero-slide__img" src="{{url("frontend/images/z3098519956317_8ca7704ce0349940c87110ed6c1fde32-1_1641828071.jpg")}}" alt="">
            </div>
            <div class="swiper-slide"> <img class="hero-slide__img" class="img-old img-responsive " alt="" src="{{url("frontend/images/capturepng_1645534231.png")}}">
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="search">
        <div class="container">
            <h4 class="search__title">Tìm kiếm bất động sản</h4>
            <div class="search__group">
                <ul class="search__tabs ">
                    <li><a href="">Bất động sản bán</a></li>
                    <li><a href="">Bất động sản cho thuê</a></li>

                </ul>


                <div class="search__content">
                    <div class="search__head">
                        <div class="search__text ">
                            <input type="text" placeholder="Nhập từ khóa tìm kiếm...">
                            <button type="button" class="btn"><i class="fa-solid fa-magnifying-glass"></i>Tìm
                                kiếm</button>

                        </div>
                    </div>
                    <div class="search__bottom pt-4">
                        <div class="search__options">
                            <section id="popper-section">
                                <button id="popper-button">
                                    <span>Trên toàn quốc</span>
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div id="popper-popup">
                                    <div class="popper-popup__title">
                                        <span>Khu vực & Dự án</span>
                                    </div>
                                    <div class="popper-popup__content">
                                        <span>Tỉnh/Thành</span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </div>
                                    <div class="popper-popup__content">
                                        <span>Quận/Huyện</span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </div>
                                    <div class="popper-popup__content">
                                        <span>Phường/Xã</span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </div>
                                    <div class="popper-popup__content">
                                        <span>Đường/Phố</span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </div>
                                    <div class="popper-popup__content">
                                        <span>Dự án</span>
                                        <i class="fa-solid fa-angle-right"></i>
                                    </div>
                                    <hr>
                                    <div class="popper-popup__footer">
                                        <button class="popper-popup__refresh">
                                            <i class="fa-solid fa-arrows-rotate"></i>
                                            <span>Đặt lại</span>
                                        </button>
                                        <button class="popper-popup__apply">
                                            Áp dụng
                                        </button>

                                    </div>
                                    <div id="popper-arrow"></div>
                                </div>

                            </section>
                            <section id="popper-section">
                                <button id="popper-button">
                                    <span>Trên toàn quốc</span>
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>

                                <div id="popper-popup">
                                    <div class="popper__item">
                                        <span>menu item</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>

                                    <div id="popper-arrow"></div>
                                </div>

                            </section>
                            <section id="popper-section">
                                <button id="popper-button">
                                    <span>Trên toàn quốc</span>
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>

                                <div id="popper-popup">
                                    <div class="popper__item">
                                        <span>menu item</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>

                                    <div id="popper-arrow"></div>
                                </div>

                            </section>
                            <section id="popper-section">
                                <button id="popper-button">
                                    <span>Lọc thêm</span>
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>

                                <div id="popper-popup">
                                    <div class="popper__item">
                                        <span>Số phòng ngủ</span>
                                        <div class="">
                                            <div class="">
                                                <div class=" " data-value="1">1</div>
                                                <div class=" " data-value="2">2</div>
                                                <div class=" " data-value="3">3</div>
                                                <div class=" " data-value="4">4</div>
                                                <div class=" " data-value="5">5+</div>
                                            </div>
                                            <input id="RoomNumersAsString" name="RoomNumersAsString" type="hidden"
                                                value="">
                                        </div>
                                    </div>

                                    <div id="popper-arrow"></div>
                                </div>

                            </section>

                        </div>
                        <div class="search-icon__refresh ">
                            <span><i class="fa-solid fa-arrows-rotate"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- new start -->
<section class="new" id="">
    <div class="container">
        <h2 class="new__heading">
            TIN XEM NHIỀU
        </h2>
        <div class="new__content row gx-5">
            <div class="col-sm-6">
                <div class="new__primary">
                    <div class="new__img">
                        <img src="{{url("frontend/images/20210104090853-b8b5-5cce.png")}}" alt="">
                    </div>
                    <div class="new__info--lg">
                        <h3 class="new__title--lg">
                            [Infographic] So sánh ưu nhược điểm để chọn mua căn hộ tầng cao hay tầng thấp
                        </h3>
                        <div class="new__time">
                            <i class="fa-regular fa-calendar"></i>
                            <span>04/01/2021</span>
                        </div>
                        <p class="new__desc">
                            Khi mua nhà chung cư, đứng trước lựa chọn giữa căn hộ tầng thấp hay tầng cao nhiều khi
                            cũng
                            khiến các gia đình tốn nhiều thời ...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="new__list">
                    <div class="new__item row  pb-4">
                        <div class="new__img col-sm-4">
                            <img src="{{url("frontend/images/20201230082752-67af-ab04.png")}}" alt=" ">
                        </div>
                        <div class="new__info col-sm-8  ">
                            <h3 class="new__title ">
                                [Infographic] Mua nhà xây sẵn hay mua đất rồi tự xây?
                            </h3>
                            <div class="new__time ">
                                <i class="fa-regular fa-calendar "></i>
                                <span>04/01/2021</span>
                            </div>
                            <p class="new__desc">
                                Nếu vẫn còn phân vân lựa chọn giữa việc mua nhà xây sẵn hay mua đất rồi tự xây, bạn
                                có
                                thể tham khảo ...
                            </p>
                        </div>
                    </div>
                    <div class="new__item row  pb-4">
                        <div class="new__img col-sm-4">
                            <img src="{{url("frontend/images/20201230082752-67af-ab04.png")}}" alt=" ">
                        </div>
                        <div class="new__info col-sm-8">
                            <h3 class="new__title ">
                                [Infographic] Mua nhà xây sẵn hay mua đất rồi tự xây?
                            </h3>
                            <div class="new__time ">
                                <i class="fa-regular fa-calendar "></i>
                                <span>04/01/2021</span>
                            </div>
                            <p class="new__desc">
                                Nếu vẫn còn phân vân lựa chọn giữa việc mua nhà xây sẵn hay mua đất rồi tự xây, bạn
                                có
                                thể tham khảo ...
                            </p>
                        </div>
                    </div>
                    <div class="new__item row  pb-4">
                        <div class="new__img col-sm-4">
                            <img src="{{url("frontend/images/20201230082752-67af-ab04.png")}}" alt=" ">
                        </div>
                        <div class="new__info col-sm-8">
                            <h3 class="new__title ">
                                [Infographic] Mua nhà xây sẵn hay mua đất rồi tự xây?
                            </h3>
                            <div class="new__time ">
                                <i class="fa-regular fa-calendar "></i>
                                <span>04/01/2021</span>
                            </div>
                            <p class="new__desc">
                                Nếu vẫn còn phân vân lựa chọn giữa việc mua nhà xây sẵn hay mua đất rồi tự xây, bạn
                                có
                                thể tham khảo ...
                            </p>
                        </div>
                    </div>
                    <div class="new__item row">
                        <div class="new__img col-sm-4">
                            <img src="{{url("frontend/images/20201230082752-67af-ab04.png")}}" alt=" ">
                        </div>
                        <div class="new__info col-sm-8">
                            <h3 class="new__title ">
                                [Infographic] Mua nhà xây sẵn hay mua đất rồi tự xây?
                            </h3>
                            <div class="new__time ">
                                <i class="fa-regular fa-calendar "></i>
                                <span>04/01/2021</span>
                            </div>
                            <p class="new__desc">
                                Nếu vẫn còn phân vân lựa chọn giữa việc mua nhà xây sẵn hay mua đất rồi tự xây, bạn
                                có
                                thể tham khảo ...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- new end -->
<section class="article">
    <div class="container">
        <div class="article__head">
            <h2 class="heading">TIN RAO DÀNH CHO BẠN</h2>
            <a class="article__see-more" href="/nha-dat-ban">
                <span>Xem thêm </span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
        <div class="row g-4 ">
            <div class="col-sm-3 ">
                <div class="article__card">
                    <div class="article-card__top ">
                        <img width="100px "
                            src="https://batdongsanhome.com.vn/images/products/2022/07/large/z3550585934763_b7e51b14839188d92df572439ee1ba1b.jpg "
                            alt=" ">
                        <span class="article-card__price ">
                            <i class="fa-solid fa-tag"></i>
                            5.3tỷ
                        </span>
                        <span class="article-card__area "><i class="fa fa-arrows-alt hint mg-right-5"></i> 30
                            m²</span>
                    </div>
                    <div class="article-card__middle ">
                        <p class="article-card__desc ">
                            NÓNG ???. NHÀ ĐẸP ,TRUNG TÂM LÊ ĐỨC THỌ, MỸ ĐÌNH, NAM TỪ LIÊM. 30M2, 5T, MT4.6M, GIÁ
                            5.35
                            TỶ.
                        </p>
                        <div class="article-card__location ">
                            <i class="fa-solid fa-location-crosshairs "></i>
                            <span>Quận Hà Đông - Hà Nội</span>
                        </div>
                    </div>
                    <div class="article-card__bottom ">
                        <span class="article-card__date ">Hôm nay</span>
                        <span class="article-card__btn-like "> <i class="fa-regular fa-heart "></i></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- new project -->
<section class="project">
    <div class="container">
        <div class="project__head">
            <h2 class="heading">TIN TỨC DỰ ÁN</h2>
            <a class="project__see-more" href="/du-an-bat-dong-san">
                <span>Xem thêm</span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

        <div class="row g-4 ">
            <div class="col-sm-3 ">
                <div class="project__card">
                    <div class="project-card__img">
                        <img width="100px"
                            src="https://batdongsanhome.com.vn/images/products/2022/07/large/z3550585934763_b7e51b14839188d92df572439ee1ba1b.jpg "
                            alt=" ">

                    </div>
                    <div class="project-card__info ">
                        <div class="project-card__tag">
                            <label>Đang mở bán</label>
                            <span>11/9/2022: mở bán giai đoạn 1. Đã bán hết 96% rổ hàng</span>
                        </div>
                        <h3 class="project-card__name">
                            The Classia
                        </h3>
                        <div class="project-card__meta">
                            <span class="project-card__price ">195 triệu/m²</span><span
                                class="project-card__dot ">·</span>
                            <span class="project-card__area ">4.3 ha</span>
                        </div>
                        <div class="project-card__location" title="Quận 9, Hồ Chí Minh ">
                            <i class="fa-solid fa-location-crosshairs "></i>
                            <span> Quận 9, Hồ Chí Minh</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- end project -->
<section class="banners__area ">
    <div class="container ">
        <h2 class="heading ">Tin Rao Theo Địa Điểm</h2>
        <div class="banner__grid ">
            <div class="banner__item1 ">
                <img src="{{(" frontend/images/hcmm_1591157562_1594887982.jpg")}} " alt=" ">
                <span class=" text-area01 ">Nhà đất</span>
                <span class=" text-area02 ">Tp Hồ Chí Minh</span>
            </div>
            <div class=" banner__item2 ">
                <img src=" {{(" frontend/images/hn_1591156188_1594888017.jpg")}} " alt=" ">
                <span class=" text-area01 ">Nhà đất</span>
                <span class=" text-area02 ">Hà Nội</span>
            </div>
            <div class=" banner__item3 ">
                <img src=" {{("frontend/images/dn_1591156527_1594888044.jpg")}} " alt=" ">
                <span class=" text-area01 ">Nhà đất</span>
                <span class=" text-area02 ">Đà Nẵng</span>
            </div>
            <div class=" banner__item4 ">
                <img src=" {{("frontend/images/bd_1591157396_1594888072.jpg")}} " alt=" ">
                <span class=" text-area01 ">Nhà đất</span>
                <span class=" text-area02 ">Bình Dương</span>
            </div>
            <div class=" banner__item5 ">
                <img src=" {{("frontend/images/dl_1591157804_1594888101.jpg")}} " alt=" ">
                <span class=" text-area01 ">Nhà đất</span>
                <span class=" text-area02 ">Đồng Nai</span>
            </div>
        </div>
        <div class=" banner__default ">
            <a href="
                    http://imperiasmartcity.com/?cpa_tid=01FWGWRWGHTAA0K15AV7DX28KP&amp;_tp=11&amp;tpn=4&amp;dmn=cafebiz.vn&amp;utm_source=admicro&amp;utm_medium=adx_pc "
                title=" Banner Giữa dự án - tin tức 01 " id=" banner_item_58 ">
                <img class=" img-old img-responsive " alt=" Banner Giữa dự án - tin tức 01 "
                    src=" https://batdongsanhome.com.vn/images/banners/original/capturegif_1664301677.gif ">
            </a>

            <a href=" " title=" Banner Giữa dự án - tin tức " id=" banner_item_92 ">
                <img class=" img-old img-responsive " alt=" Banner Giữa dự án - tin tức "
                    src=" https://batdongsanhome.com.vn/images/banners/original/capturejpg_1664301956.jpg ">
            </a>


            <div class=" clear "></div>
        </div>
    </div>
    </div>
</section>

<section class=" ">
    <div class=" container ">
        <h3 class=" heading ">Doanh Nghiệp Tiêu Biểu</h3>
        <div class=" swiper tin ">
            <div class=" swiper-wrapper ">
                <div class=" swiper-slide ">
                    <img src=" {{("frontend/images/doitac01_1594961222.jpg")}}" alt="">
            </div>
            <div class="swiper-slide ">
                <img src="{{(" frontend/images/doitac02_1594961241.jpg")}}" alt="">
            </div>
            <div class="swiper-slide ">
                <img src="{{(" frontend/images/doitac03_1594961254.jpg")}}" alt="">
            </div>
            <div class="swiper-slide ">
                <img src="{{(" frontend/images/doitac04_1594961271.jpg")}}" alt="">
            </div>
            <div class="swiper-slide ">
                <img src="{{(" frontend/images/doitac05_1594961291.jpg")}}" alt="">
            </div>
            <div class="swiper-slide ">
                <img src="{{(" frontend/images/doitac07_1594961325.jpg")}}" alt="">
            </div>
            <div class="swiper-slide ">
                <img src="{{(" frontend/images/doitac09_1594961360.jpg")}}" alt="">
            </div>
        </div>
        <div class="swiper-button-next "></div>
        <div class="swiper-button-prev "></div>
    </div>
    </div>
</section>
@endsection