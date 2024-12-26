@extends("client.layouts.layout")
@section("title","Dịch vụ homestay Y Tý")
@section("content")
    <div class="rts__section service py-5 has__background has__shape">
        <div class="section__shape wow fadeInRight" data-wow-delay=".5s">
            <img src="/client/assets/images/index-3/service/sec-bg.svg" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay=".3s">
                    <div class="section__topbar">
                        <span class="h6 subtitle__icon__three mx-auto">Tiện ích Homestay</span>
                        <h2 class="section__title">Y Tý Đại Ngàn</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($services as $service)
                    <div
                            class="single__service__item {{ $loop->index % 2 == 0 ? 'if__is__default' : 'if__is__reverse' }}">
                        <div class="service__thumb jarallax">
                            <img class="jarallax-img" src="{{ $service->thumbnail }}" width="605"
                                 height="535"
                                 alt="{{ $service->title }}">
                        </div>
                        <div class="service__content">
                            <div class="section__content__left">
                                <span class="h6 subtitle__icon__two d-block wow fadeInUp">{{ $service->type }}</span>
                                <h2 class="content__title h3 lh-1">{{ $service->title }}</h2>
                            </div>
                            <p class="font-sm mt-30 wow fadeInUp">{{ $service->description }}</p>
                            <p class="font-sm mt-10 wow fadeInUp">{{ $service->details }}</p>
                            <p class="font-sm mt-10 wow fadeInUp">
                                <strong>Giá:</strong> {{ number_format($service->price, 0, ',', '.') }} VND</p>
                            <a href="{{ route('client.dich_vu_chi_tiet',$service->id) }}"
                               class="underline__style wow fadeInUp" data-wow-delay=".4s">Xem chi tiết</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
