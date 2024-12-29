@extends("client.layouts.layout")
@section("title","Home Stay Y Tý Đại Ngàn")
@section("content")
    <!-- Banner Homestay -->
    <div class="rts__section banner__area is__home__one banner__height banner__center">
        <div class="banner__slider w-100 overflow-hidden">
            <div class="swiper-wrapper">
                <!-- single slider item -->
                <div class="swiper-slide">
                    <div class="banner__slider__image w-100">
                        <img src="{{asset("/client/assets/fixed-images/banner.jpg")}}" alt="Homestay Y Tý Đại Ngàn">
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="banner__slide__content">
                                    <span class="h6 subtitle__icon">Chào mừng đến với Homestay Y Tý Đại Ngàn</span>
                                    <h1>Homestay Y Tý Đại Ngàn <br> Thiên đường nghỉ dưỡng giữa núi rừng</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!-- Banner Homestay End -->

    <!-- Gioi thieu co ban homestay -->
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
                                <img style="object-fit: cover" src="{{asset("/client/assets/fixed-images/head-1.jpg")}}"
                                     class="jarallax-img"
                                     alt="Homestay Y Tý Đại Ngàn">
                            </div>
                        </div>
                        <div class="image__card__image wow fadeInUp">
                            <img src="{{asset("/client/assets/fixed-images/head-2.jpg")}}" width="312" height="230"
                                 alt="Bản làng Y Tý">
                        </div>
                    </div>
                    <div class="content">
                        <span class="h6 subtitle__icon__two d-block wow fadeInUp">Giới thiệu</span>
                        <h2 class="content__title wow fadeInUp">{{$homestayInfo->title}}</h2>
                        <p class="content__subtitle wow fadeInUp" data-wow-delay=".3s">
                            {!! $homestayInfo->description !!}
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Gioi thieu co ban homestay end -->

    <!-- Tien ich va dich vu homestay -->
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
                @foreach($services as $service)
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div style="height: 100%" class="card rts__card no-border is__home radius-6" id="phong-nghi">
                            <div class="card-body">
                                <div class="mb-3">
                                    <img style="height: 250px;width: 100%;object-fit: cover"
                                         src="{{$service->thumbnail}}" alt="">
                                </div>
                                <a href="{{ route('client.dich_vu_chi_tiet',$service->id) }}">
                                    <h6 class="card-title h6 mb-3">{{$service->title}}</h6>
                                </a>
                                <p class="card-text">{{str($service->description)->limit()}} <br> <a
                                            href="{{ route('client.dich_vu_chi_tiet',$service->id) }}">Xem thêm</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Tien ich va dich vu homestay end -->

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
                        @foreach($rooms as $room)
                            <!-- single room slider -->
                            <div class="swiper-slide">
                                <div class="room__slide__box radius-6">
                                    <div class="room__thumbnail jara-mask-2 jarallax">
                                        <img height="585" width="420" class="radius-6 jarallax-img"
                                             src="{{$room->thumbnail}}" alt="Phòng đơn">
                                    </div>
                                    <div class="room__content">
                                        <a href="{{ route('client.chi_tiet_phong',$room->id) }}"
                                           class="room__title">
                                            <h5>{{$room->title}}</h5>
                                        </a>
                                        <div class="room__content__meta">
                                            <span><i class="flaticon-user"></i>{{$room->type}}</span>
                                        </div>
                                        <span
                                                class="h4 rent mb-0 mt-15 d-block">{{number_format($room->price)}}đ/đêm</span>
                                    </div>
                                </div>
                            </div>
                            <!-- single room slider end -->
                        @endforeach
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

    <!-- Trải nghiệm khách hàng -->
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
                            @foreach($reviews as $review)
                                <div class="swiper-slide">
                                    <div class="testimonial__item__content">
                                        <div class="author__icon">
                                            <img style="width:300px;height:300px;object-fit: cover"
                                                 src="{{$review->customer_thumbnail}}" alt="">
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
                                                <span class="slider__text d-block">"{{$review->customer_review}}"</span>
                                                <div class="slider__author__info">
                                                    <div class="slider__author__info__content">
                                                        <h6 class="mb-0">{{$review->customer_name}}</h6>
                                                        <span>{{$review->customer_address}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Y Tý Video -->
    <div class="rts__section pb-120 video video__full" id="video">
        <div class="container-full">
            <div class="row">
                <div class="col-12">
                    <div class="video__area position-relative wow fadeInUp">
                        <div class="video__area__image jara-mask-2 jarallax rounded-0">
                            <img class="radius-none jarallax-img"
                                 src="{{asset("client/assets/fixed-images/head-2.jpg")}}"
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
                                    <a href="{{$homestayInfo->video_link}}" class="video-play">
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
    <!-- END -->

    <!-- Ảnh Y Tý Homestay -->
    <div class="rts__section is__home__main mb-5" id="gallery">
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
                        @for($i=0;$i<199;$i++)
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

    <!-- Địa điểm du lịch -->
    <div class="rts__section room has__background has__shape section__padding">
        <div class="section__shape">
            <div class="shape__1 wow fadeInLeft">
                <img src="/client/assets/images/shape/room-3.svg" alt="">
            </div>
            <div class="shape__2 wow fadeInRight">
                <img src="/client/assets/images/shape/room-4.svg" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row position-relative justify-content-center text-center mb-60">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="section__topbar is__home__two">
                        <span class="h6 subtitle__icon__three mx-auto text-white">Địa điểm tham quan</span>
                        <h2 class="section__title text-white">Các địa điểm tham quan ở Y Tý</h2>
                    </div>
                </div>
                <div class="full__width__nav is__room__slider">
                    <div class="rts__slide">
                        <div class="next slider-button-prev">
                            <svg width="41" height="22" viewBox="0 0 41 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M1.25536 9.75546H39.0408C39.7335 9.75546 40.2931 10.3151 40.2931 11.0078C40.2931 11.7005 39.7335 12.2601 39.0408 12.2601H4.28054L11.8807 19.8603C12.3699 20.3495 12.3699 21.1439 11.8807 21.6331C11.3915 22.1223 10.597 22.1223 10.1078 21.6331L0.366985 11.8923C0.00693893 11.5322 -0.098732 10.9961 0.0969467 10.5264C0.292625 10.0607 0.750515 9.75546 1.25536 9.75546Z"
                                        fill="#65676B"/>
                                <path
                                        d="M11.0079 0.0028038C11.3288 0.0028038 11.6497 0.124125 11.8924 0.370679C12.3816 0.859874 12.3816 1.65432 11.8924 2.14352L2.13979 11.8961C1.6506 12.3853 0.856151 12.3853 0.366956 11.8961C-0.122239 11.4069 -0.122239 10.6125 0.366956 10.1233L10.1195 0.370679C10.3661 0.124125 10.687 0.0028038 11.0079 0.0028038Z"
                                        fill="#65676B"/>
                            </svg>

                        </div>
                    </div>
                    <div class="rts__slide">
                        <div class="prev slider-button-next">
                            <svg width="41" height="22" viewBox="0 0 41 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M39.0374 12.2499L1.25198 12.245C0.55928 12.2449 -0.000286104 11.6852 -0.000196778 10.9925C-0.000107452 10.2998 0.559603 9.74024 1.2523 9.74033L36.0125 9.74481L28.4134 2.14371C27.9242 1.65445 27.9243 0.859997 28.4136 0.370865C28.9029 -0.118267 29.6973 -0.118164 30.1864 0.371094L39.926 10.1132C40.286 10.4733 40.3916 11.0095 40.1959 11.4791C40.0001 11.9447 39.5422 12.2499 39.0374 12.2499Z"
                                        fill="#65676B"/>
                                <path
                                        d="M29.2835 22.0013C28.9626 22.0012 28.6417 21.8799 28.3991 21.6333C27.9099 21.144 27.91 20.3496 28.3993 19.8604L38.1531 10.1091C38.6424 9.61998 39.4368 9.62008 39.926 10.1093C40.4151 10.5986 40.415 11.393 39.9257 11.8822L30.1719 21.6335C29.9253 21.88 29.6044 22.0013 29.2835 22.0013Z"
                                        fill="#65676B"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <div class="row">
                <div class="room__slider is__home__four">
                    <div class="swiper-wrapper" style="align-items: stretch">
                        @foreach($locations as $location)
                            <div class="swiper-slide" style="height: auto">
                                <div class="room__slider__box p-3 p-md-4" style="height: 100%">
                                    <div class="room__slider__thumb">
                                        <div class="link__item">
                                            <figure class="w-100">
                                                <img style="width:100%;height: 250px;object-fit: cover"
                                                     src="{{$location->thumbnail}}" alt="{{$location->title}}">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="room__slide__content">
                                        <div class="slider__meta">
                                            <a href="#" class="room__title">
                                                <h5>{{$location->title}}</h5>
                                            </a>
                                            <div class="room__content__meta">
                                                <span>{{$location->description}}</span>
                                            </div>
                                        </div>
                                        <span class="price h4">{{number_format($location->price)}}VND</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
@endsection
