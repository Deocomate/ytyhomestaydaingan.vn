@extends("client.layouts.layout")
@section("title","Home Stay Y Tý Đại Ngàn")
@section("content")
    <!-- banner area -->
    <div class="rts__section banner__area is__home__one banner__height banner__center">
        <div class="banner__slider overflow-hidden">
            <div class="swiper-wrapper">
                <!-- single slider item -->
                <div class="swiper-slide">
                    <div class="banner__slider__image">
                        <img src="/client/assets/imgs/homestay-1.jpg" alt="Homestay Y Tý Đại Ngàn">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="banner__slide__content">
                                    <span class="h6 subtitle__icon">Chào mừng đến với Homestay Y Tý Đại Ngàn</span>
                                    <h1>Trải nghiệm Y Tý - Thiên đường trên mây</h1>
                                    <p class="sub__text">Y Tý là một bản làng với khí hậu mát mẻ dễ chịu quanh năm, 4
                                        mùa đều đẹp. Hòa mình với thiên nhiên hoang dã, cổ tích, thư giãn sau những ngày
                                        mệt mỏi.</p>
                                    <a href="#phong-nghi" class="theme-btn btn-style fill no-border "><span>Khám phá phòng nghỉ</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item end -->

                <!-- single slider item -->
                <div class="swiper-slide">
                    <div class="banner__slider__image">
                        <img src="/client/assets/imgs/homestay-2.jpg" alt="Ẩm thực Y Tý">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="banner__slide__content">
                                    <span class="h6 subtitle__icon">Hương vị Y Tý</span>
                                    <h1>Khám phá ẩm thực đặc sắc vùng cao</h1>
                                    <p class="sub__text">Thưởng thức những món ăn đặc sản mang đậm hương vị núi rừng Y
                                        Tý, được chế biến từ nguồn thực phẩm sạch.</p>
                                    <a href="#do-an"
                                       class="theme-btn btn-style fill no-border "><span>Khám phá ẩm thực</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item end -->

                <!-- single slider item -->
                <div class="swiper-slide">
                    <div class="banner__slider__image">
                        <img src="/client/assets/imgs/homestay-3.jpg" alt="Vẻ đẹp Y Tý">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="banner__slide__content">
                                    <span class="h6 subtitle__icon">Y Tý huyền ảo</span>
                                    <h1>Săn mây, ngắm ruộng bậc thang</h1>
                                    <p class="sub__text">Khám phá vẻ đẹp hùng vĩ của núi rừng, những thửa ruộng bậc
                                        thang tuyệt đẹp và trải nghiệm săn mây.</p>
                                    <a href="#tham-quan" class="theme-btn btn-style fill no-border"><span>Khám phá địa điểm</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item end -->

            </div>
            <div class="rts__slider__nav">
                <div class="rts__slide">
                    <div class="next">
                        <svg>...</svg>
                    </div>
                </div>
                <div class="rts__slide">
                    <div class="prev">
                        <svg>...</svg>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- banner area end -->

    <!-- advance search -->
    <div class="rts__section advance__search__section is__home__one">
        <div class="container">
            <div class="row">
                <form action="#" method="post" class="advance__search">
                    <div class="advance__search__wrapper wow fadeInUp">

                        <div class="query__input">
                            <label for="check__in" class="query__label">Nhận phòng</label>
                            <input type="text" id="check__in" name="check__in" placeholder="15 Jun 2024" required>
                            <div class="query__input__icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                        </div>

                        <div class="query__input">
                            <label for="check__out" class="query__label">Trả phòng</label>
                            <input type="text" id="check__out" name="check__out" placeholder="15 May 2024" required>
                            <div class="query__input__icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                        </div>


                        <div class="query__input">
                            <label for="adult" class="query__label ">Người lớn</label>
                            <select name="adult" id="adult" class="form-select">
                                <option value="1">1 người</option>
                                <option value="2">2 người</option>
                            </select>
                            <div class="query__input__icon">
                                <i class="flaticon-user"></i>
                            </div>
                        </div>
                        <div class="query__input">
                            <label for="child" class="query__label ">Trẻ em</label>
                            <select name="child" id="child" class="form-select">
                                <option value="0">0 trẻ em</option>
                                <option value="1">1 trẻ em</option>
                            </select>
                            <div class="query__input__icon">
                                <i class="flaticon-user"></i>
                            </div>
                        </div>

                        <button class="theme-btn btn-style fill no-border search__btn">
                            <span>Đặt phòng</span>
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- advance search end -->


    <!-- about us -->
    <div class="rts__section about__area is__home__main section__padding" id="gioi-thieu">
        <div class="section__shape d-none d-xl-block">
            <img src="/client/assets/images/about/section__shape.svg" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="about__wrapper">
                    <div class="image ">
                        <div class="position-relative  wow fadeInUp" data-wow-delay=".3s">
                            <div class="jara-mask-1 jarallax image-height">
                                <img src="/client/assets/imgs/homestay-4.jpg" class="jarallax-img"
                                     alt="Homestay Y Tý Đại Ngàn">
                            </div>
                        </div>
                        <div class="image__card__image wow fadeInUp">
                            <img src="/client/assets/imgs/homestay-5.jpg" width="312" height="230" alt="Bản làng Y Tý">
                        </div>
                    </div>
                    <div class="content">
                        <span class="h6 subtitle__icon__two d-block wow fadeInUp">Giới thiệu</span>
                        <h2 class="content__title wow fadeInUp">Homestay Y Tý Đại Ngàn - Thiên đường nghỉ dưỡng giữa núi
                            rừng</h2>
                        <p class="content__subtitle wow fadeInUp" data-wow-delay=".3s">Vùng Cao Y Tý là một sự trải
                            nghiệm thú vị mà ai cũng mong đến một lần trong đời. Y tý là một bản làng với khí hậu mát mẻ
                            dễ chịu quanh năm, 4 mùa đều đẹp. Quý khách đến chỉ cần hòa mình với thiên nhiên hoang dã,
                            cổ tích, thư giãn sau những ngày mệt mỏi ở Thành Phố xô bồ. Quý khách đến Y Tý được thăm
                            quan bản Người dân tộc Hà Nhì, bản làng 300 năm tuổi,Được thăm quan và tìm hiểu về văn hoá
                            các dân tộc, Hà Nhì đen, người H-Mông, người Dao... Homestay Y Tý Đại Ngàn - Một khu nghỉ
                            dưỡng đẹp với đầy đủ dịch vụ cho du khách đến với núi rừng Đại Ngàn Y Tý, Homestay có view
                            nhìn ra thung lũng với những đám mây bồng bềnh và ruộng bậc thang giữa lòng thung lũng.</p>
                        <p>Liên hệ: 0866686388 - 0964633628</p>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- about us end -->

    <!-- facilities -->
    <div class="rts__section facilities__area has__background has__shape py-90" id="dich-vu">
        <div class="section__shape">
            <img src="/client/assets/images/shape/facility-1.svg" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="section__topbar">
                        <span class="h6 subtitle__icon__three mx-auto">Dịch vụ</span>
                        <h2 class="section__title">Dịch vụ tại Homestay</h2>
                    </div>
                </div>
            </div>

            <div class="row g-4 wow fadeInUp" data-wow-delay=".5s">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card rts__card no-border is__home radius-6" id="phong-nghi">
                        <div class="card-body">
                            <div class="icon"><img src="/client/assets/imgs/homestay-6.jpg" alt=""></div>
                            <a href="#phong-nghi">
                                <h6 class="card-title h6 mb-15">Phòng nghỉ</h6>
                            </a>
                            <p class="card-text">Phòng nghỉ đẹp , sạch sẽ mang âm hưởng dân tộc bản địa, Có cả phòng
                                khép kín và phòng cộng đồng cho quý khách thoải mái lựa chọn.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card rts__card no-border is__home radius-6" id="do-an">
                        <div class="card-body">
                            <div class="icon"><img src="/client/assets/imgs/homestay-7.jpg" alt=""></div>
                            <a href="#do-an">
                                <h6 class="card-title h6 mb-15">Ẩm thực</h6>
                            </a>
                            <p class="card-text">Món ăn ngon mang đậm hương vị bản sắc dân tộc, được nấu bằng thực phẩm
                                sạch. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card rts__card no-border is__home radius-6">
                        <div class="card-body">
                            <div class="icon"><img src="/client/assets/imgs/homestay-8.jpg" alt=""></div>
                            <a href="#">
                                <h6 class="card-title h6 mb-15">Tắm lá thuốc</h6>
                            </a>
                            <p class="card-text">Tắm lá thuốc Dao đỏ được đun thủ công với 12 loại thảo dược, giúp lưu
                                thông khí huyết, giảm đau nhức.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card rts__card no-border is__home radius-6" id="tham-quan">
                        <div class="card-body">
                            <div class="icon"><img src="/client/assets/imgs/homestay-9.jpg" alt=""></div>
                            <a href="#tham-quan">
                                <h6 class="card-title h6 mb-15">Tham quan</h6>
                            </a>
                            <p class="card-text">Hướng dẫn khách các địa điểm tham quan check in đẹp như Bản Choản Thèn,
                                cây hạnh phúc, Bản Lao Chải....</p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card rts__card no-border is__home radius-6">
                        <div class="card-body">
                            <div class="icon"><img src="/client/assets/imgs/homestay-10.jpg" alt=""></div>
                            <a href="#">
                                <h6 class="card-title h6 mb-15">Cho thuê xe máy</h6>
                            </a>
                            <p class="card-text">Dịch vụ cho thuê xe máy giúp bạn tự do khám phá Y Tý.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card rts__card no-border is__home radius-6">
                        <div class="card-body">
                            <div class="icon"><img src="/client/assets/imgs/homestay-11.jpg" alt=""></div>
                            <a href="#">
                                <h6 class="card-title h6 mb-15">Lửa trại & Văn nghệ</h6>
                            </a>
                            <p class="card-text">Đốt lửa trại và tổ chức văn nghệ dân tộc Hà Nhì bản địa đặc sắc.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card rts__card no-border is__home radius-6">
                        <div class="card-body">
                            <div class="icon"><img src="/client/assets/imgs/homestay-12.jpg" alt=""></div>
                            <a href="#">
                                <h6 class="card-title h6 mb-15">Cafe & Nước uống</h6>
                            </a>
                            <p class="card-text">Phục vụ cafe- nước uống đủ loại.</p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card rts__card no-border is__home radius-6">
                        <div class="card-body">
                            <div class="icon"><img src="/client/assets/imgs/homestay-13.jpg" alt=""></div>
                            <a href="#">
                                <h6 class="card-title h6 mb-15">Taxi & Leo núi</h6>
                            </a>
                            <p class="card-text">Dịch vụ taxi đưa đón toàn miền bắc. Tổ chức leo núi Trecking núi Lảo
                                Thẩn- Thác Ong Chúa- Nhìu Cồ San.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- facilities end -->

    <!-- our room -->
    <div class="rts__section pt-120" id="phong-nghi-chi-tiet">
        <div class="container">
            <div class="row">
                <div class="section__wrapper mb-40 wow fadeInUp">
                    <div class="section__content__left">
                        <span class="h6 subtitle__icon__two d-block wow fadeInUp">Phòng nghỉ</span>
                        <h2 class="content__title h2 lh-1">Các loại phòng</h2>
                    </div>
                    <div class="section__content__right">
                        <p>Phòng nghỉ tại Homestay Y Tý Đại Ngàn được thiết kế mang đậm âm hưởng dân tộc, kết hợp hài
                            hòa giữa nét truyền thống và tiện nghi hiện đại, đảm bảo mang đến cho quý khách sự thoải mái
                            và ấm cúng như đang ở chính ngôi nhà của mình.</p>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <div class="row">
                <div class="main__room__slider overflow-hidden wow fadeInUp" data-wow-delay=".5s">
                    <div class="swiper-wrapper">
                        <!-- single room slider -->
                        <div class="swiper-slide">
                            <div class="room__slide__box radius-6">
                                <div class="room__thumbnail jara-mask-2 jarallax">
                                    <img height="585" width="420" class="radius-6 jarallax-img"
                                         src="/client/assets/imgs/homestay-14.jpg" alt="Phòng đơn">
                                </div>
                                <div class="room__content">
                                    <a href="#" class="room__title">
                                        <h5>Phòng đơn</h5>
                                    </a>
                                    <div class="room__content__meta">
                                        <span><i class="flaticon-user"></i> 1 người</span>
                                    </div>
                                    <span class="h4 rent mb-0 mt-15 d-block">200.000đ/đêm</span>
                                </div>
                            </div>
                        </div>
                        <!-- single room slider end -->

                        <!-- single room slider -->
                        <div class="swiper-slide">
                            <div class="room__slide__box radius-6">
                                <div class="room__thumbnail jara-mask-2 jarallax">
                                    <img height="585" width="420" class="radius-6 jarallax-img"
                                         src="/client/assets/imgs/homestay-15.jpg" alt="Phòng đôi">
                                </div>
                                <div class="room__content">
                                    <a href="#" class="room__title">
                                        <h5>Phòng đôi</h5>
                                    </a>
                                    <div class="room__content__meta">
                                        <span><i class="flaticon-user"></i> 2 người</span>
                                    </div>
                                    <span class="h4 rent mb-0 mt-15 d-block">300.000đ/đêm</span>
                                </div>
                            </div>
                        </div>
                        <!-- single room slider end -->

                        <!-- single room slider -->
                        <div class="swiper-slide">
                            <div class="room__slide__box radius-6">
                                <div class="room__thumbnail jara-mask-2 jarallax">
                                    <img height="585" width="420" class="radius-6 jarallax-img"
                                         src="/client/assets/imgs/homestay-16.jpg" alt="Phòng gia đình">
                                </div>
                                <div class="room__content">
                                    <a href="#" class="room__title">
                                        <h5>Phòng gia đình</h5>
                                    </a>
                                    <div class="room__content__meta">
                                        <span><i class="flaticon-user"></i> 4-6 người</span>
                                    </div>
                                    <span class="h4 rent mb-0 mt-15 d-block">500.000đ/đêm</span>
                                </div>
                            </div>
                        </div>
                        <!-- single room slider end -->


                    </div>
                </div>

                <!-- pagination button -->
                <div class="rts__pagination">
                    <div class="rts-pagination"></div>
                </div>
                <!-- pagination button end -->
            </div>
        </div>
    </div>
    <!-- our room end -->

    <!-- client testimonial  -->
    <div class="rts__section section__padding testimonial has__shape" id="khach-hang-noi">
        <div class="container">
            <div class="row mb-40">
                <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="section__content__left">
                        <span class="h6 subtitle__icon__two d-block wow fadeInUp">Khách hàng nói</span>
                        <h2 class="content__title h2 lh-1">Đánh giá của khách hàng</h2>
                    </div>
                    <div class="slider__navigation">
                        <div class="nav__btn button-next">
                            <img src="/client/assets/images/icon/arrow-left-short.svg" alt="">
                        </div>
                        <div class="nav__btn button-prev">
                            <img src="/client/assets/images/icon/arrow-right-short.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11">
                    <div class="testimonial__slider overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial__item__content">
                                    <div class="author__icon">
                                        <img src="/client/assets/imgs/homestay-17.jpg" alt="">
                                    </div>
                                    <div class="testimonial__content">
                                        <div class="single__slider__item ">
                                            <div class="slider__rating mb-20">
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star-sharp-half-stroke"></i>
                                            </div>
                                            <span class="slider__text d-block">"Homestay Y Tý Đại Ngàn là một trải nghiệm tuyệt vời! Phòng ốc sạch sẽ, ấm cúng, đồ ăn ngon và phong cảnh thì khỏi phải bàn.  Chắc chắn sẽ quay lại!"</span>
                                            <div class="slider__author__info">
                                                <div class="slider__author__info__content">
                                                    <h6 class="mb-0">Nguyễn Văn A</h6>
                                                    <span>Hà Nội</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__item__content">
                                    <div class="author__icon">
                                        <img src="/client/assets/imgs/homestay-18.jpg" alt="">
                                    </div>
                                    <div class="testimonial__content">
                                        <div class="single__slider__item ">
                                            <div class="slider__rating mb-20">
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                            </div>
                                            <span class="slider__text d-block">"Dịch vụ tại homestay rất chu đáo, ân cần.  Mình rất hài lòng với chuyến đi này!"</span>
                                            <div class="slider__author__info">
                                                <div class="slider__author__info__content">
                                                    <h6 class="mb-0">Trần Thị B</h6>
                                                    <span>TP. Hồ Chí Minh</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client testimonial  end -->

    <!-- video section start -->
    <div class="rts__section pb-120 video video__full" id="video">
        <div class="container-full">
            <div class="row">
                <div class="col-12">
                    <div class="video__area position-relative wow fadeInUp">
                        <div class="video__area__image jara-mask-2 jarallax rounded-0">
                            <img class="radius-none jarallax-img" src="/client/assets/imgs/homestay-19.jpg"
                                 alt="Video Y Tý">
                        </div>
                        <div class="video--spinner__wrapper ">
                            <div class="rts__circle">
                                <svg class="spinner" viewBox="0 0 100 100">
                                    <defs>
                                        <path id="circle-2" d="M50,50 m-37,0a37,37 0 1,1 74,0a37,37 0 1,1 -74,0"></path>
                                    </defs>
                                    <text>
                                        <textPath xlink:href="#circle-2">Xem Video * Xem Video * Xem Video *</textPath>
                                    </text>
                                </svg>
                                <div class="rts__circle--icon">
                                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="video-play">
                                        <!---  thay link video ở đây -->
                                        <i class="flaticon-play"></i>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video section end -->

    <!-- special section start -->
    <div class="rts__section offer__area is__home__one has__shape" id="uu-dai">
        <div class="container">
            <div class="row position-relative justify-content-center text-center mb-30">
                <div class="col-lg-6 wow fadeInUp">
                    <div class="section__topbar">
                        <span class="h6 subtitle__icon__three mx-auto">Ưu đãi đặc biệt</span>
                        <h2 class="section__title">Ưu đãi đặc biệt</h2>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <div class="row justify-content-center g-30">
                <div class="col-lg-10 col-xl-6 col-xxl-5">
                    <div class="single__offer__card">
                        <a href="#">
                            <img src="/client/assets/imgs/homestay-20.jpg" alt="">
                        </a>
                        <div class="single__offer__card__content">
                            <a href="#" class="h4">Ưu đãi mùa lúa chín</a>
                            <ul class="offer__included list-unstyled">
                                <li><i class="flaticon-check-circle"></i> Giảm 10% giá phòng</li>
                                <li><i class="flaticon-check-circle"></i> Miễn phí bữa sáng</li>
                            </ul>
                            <h3 class="offer__price mb-0">Áp dụng đến hết tháng 10</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-xl-6 col-xxl-7">
                    <div class="d-flex flex-column gap-30">

                        <div class="single__offer__card is__flex">
                            <a href="#">
                                <img src="/client/assets/imgs/homestay-21.jpg" width="265" height="310" alt="">
                            </a>
                            <div class="single__offer__card__content">
                                <a href="#" class="h5">Ưu đãi nhóm đông</a>
                                <ul class="offer__included list-unstyled">
                                    <li><i class="flaticon-check-circle"></i> Giảm giá đặc biệt cho nhóm từ 10 người trở
                                        lên
                                    </li>
                                </ul>

                                <h4 class="offer__price mb-0">Liên hệ để biết thêm chi tiết</h4>
                            </div>
                        </div>

                        <div class="single__offer__card is__flex">
                            <a href="#">
                                <img src="/client/assets/imgs/homestay-22.jpg" width="265" height="310" alt="">
                            </a>
                            <div class="single__offer__card__content">
                                <a href="#" class="h5">Ưu đãi đặt phòng sớm</a>
                                <ul class="offer__included list-unstyled">
                                    <li><i class="flaticon-check-circle"></i> Giảm 5% khi đặt phòng trước 1 tháng</li>
                                </ul>
                                <h4 class="offer__price mb-0">Áp dụng cho tất cả các loại phòng</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- special section end -->

    <!-- gallery -->
    <div class="rts__section is__home__main" id="gallery">
        <div class="container-fluid">
            <div class="row position-relative justify-content-center text-center mb-30">
                <div class="col-lg-6 wow fadeInUp">
                    <div class="section__topbar">
                        <span class="h6 subtitle__icon__three mx-auto">Hình ảnh</span>
                        <h2 class="section__title">Khoảnh khắc Y Tý</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="insta__gallery__slider overflow-hidden">
                    <div class="swiper-wrapper gallery">

                        @for($i=0;$i<100;$i++)
                            <!-- single gallery image -->
                            <div class="swiper-slide">
                                <div class="gallery__item">
                                    <img src="/client/assets/imgs/homestay-{{$i}}.jpg" height="300" width="100%"
                                         alt="Y Tý 2" style="object-fit: cover">
                                    <a href="/client/assets/imgs/homestay-{{$i}}.jpg" class="gallery__popup">
                                        <img src="/client/assets/icons/eye.svg" height="40" width="40"
                                             alt="">
                                    </a>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery end -->

    <div class="rts__section about__area is__home__main section__padding" id="do-an-chi-tiet">
        <div class="container">
            <div class="row">
                <div class="about__wrapper">

                    <div class="content">
                        <span class="h6 subtitle__icon__two d-block wow fadeInUp">Ẩm thực</span>
                        <h2 class="content__title wow fadeInUp">Thực đơn</h2>
                        <p class="content__subtitle wow fadeInUp">Món ăn ngon mang đậm hương vị bản sắc dân tộc, được
                            nấu bằng thực phẩm sạch do bà con nơi đây nuôi trồng kết hợp những dược liệu quý từ các loại
                            sâm và rau rừng mà chỉ có vùng cao Y Tý mới có như:</p>
                        <ul>
                            <li><b>Cá Hồi ,Cá Tầm:</b> Gỏi shasimi tươi , Nướng mầm thảo quả , Chiên giòn , Lẩu ...</li>
                            <li><b>Dê bản:</b> Nướng ,hấp, xào lăn ,bóp gỏi ,lòng xào dứa,tiết canh ,pịa, nấu canh ,
                                Quay cả con
                            </li>
                            <li><b>Lợn cắp nách bản:</b> Nướng,hấp ,lòng lợn, xào lăn ,giả cầy ,canh xương ,Quay cả con
                            </li>
                            <li><b>Các món thịt gác bếp:</b> Lạp sườn , ba chỉ gác bếp xào cải mèo/mầm thảo quả , trâu
                                khô gác bếp...
                            </li>
                            <li><b>Các món từ rau rừng:</b> Trâu /bò/ngựa xào rau đương quy, Trâu /bò/ngựa xào rau pạ
                                phì
                            </li>
                            <li><b>Gà bản đen:</b> Hầm canh sâm hoặc làm lẩu hầm sâm Đương Quy</li>
                            <li><b>Vịt bản:</b> Làm đủ món ,lẩu măng chua....</li>
                            <li><b>Đặc sản khác:</b> Nhộng ong rừng, Xôi ngũ sắc, Rau rớn nộm chua cay</li>
                        </ul>

                        <p>Ngoài đồ ăn hấp dẫn còn có cả rượu bia đặc sản : Bia Hà Nhì , Rượu ngâm hoa quả rừng (Lê rừng
                            ,na rừng, anh đào rừng, táo mèo rừng , Nấm linh chi , Sâm đương quy, mận máu, kiwi
                            rừng...)</p>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
