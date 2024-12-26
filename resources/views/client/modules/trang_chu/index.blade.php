@extends("client.layouts.layout")
@section("title","Home Stay Y Tý Đại Ngàn")
@section("content")
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
                                    <h1>Trải nghiệm Y Tý - Thiên đường trên mây</h1>
                                    <p class="sub__text">
                                        {{$homestayInfo->title}}
                                    </p>
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
                                <a href="#phong-nghi">
                                    <h6 class="card-title h6 mb-3">{{$service->title}}</h6>
                                </a>
                                <p class="card-text">{{$service->description}}</p>
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
    <!-- video section end -->

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

@endsection
