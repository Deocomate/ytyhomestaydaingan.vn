@extends("client.layouts.layout")
@section("title","Liên hệ")
@section("content")
    <!-- page header -->
    <div class="rts__section page__hero__height page__hero__bg"
         style="background-image: url(/client/assets/images/pages/header__bg.webp);">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="page__hero__content">
                        <h1 class="wow fadeInUp">Liên hệ</h1>
                        <p class="wow fadeInUp font-sm">Liên hệ ngay với chúng tôi để nhận được nhiều ưu đại nhất</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page header end -->

    <!-- contact area -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row g-30 align-items-center">
                <div class="col-lg-6">
                    <div class="rts__contact">
                        <span class="h4 d-block mb-30 text-center">Gửi thông tin cho chúng tôi!</span>
                        <form action="https://html.themewant.com/moonlit/mailer.php" method="post"
                              class="rts__contact__form" id="contact-form">
                            <div class="form-input">
                                <label for="name">Tên của bạn</label>
                                <div class="pr">
                                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                                    <i class="flaticon-user"></i>
                                </div>
                            </div>
                            <div class="form-input">
                                <label for="email">Email của bạn</label>
                                <div class="pr">
                                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                                    <i class="flaticon-envelope"></i>
                                </div>
                            </div>
                            <div class="form-input">
                                <label for="msg">Tin nhắn</label>
                                <div class="pr">
                                    <textarea id="msg" name="msg" placeholder="Message" required></textarea>
                                    <img src="/client/assets/images/icon/message.svg" width="20" height="20" alt="">
                                </div>
                            </div>
                            <button type="submit" class="theme-btn btn-style fill w-100">
                                <span>Gửi ngay</span>
                            </button>
                        </form>
                        <div id="form-messages" class="mt-20"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__image">
                        <img class="rounded-2 w-100 img-fluid" src="/client/assets/images/pages/contact.webp"
                             width="645"
                             height="560" alt="contact__image">
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-120">
            <div class="row g-30 align-items-center">
                <div class="col-lg-6">
                    <div class="contact__map">
                        <iframe class="w-100" height="560"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.8351593522357!2d103.60557240000001!3d22.6599338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36cd7d272c6c9821%3A0x2f1725653de3941!2zSG9tc3RheSBZIFTDvSDEkOG6oWkgTmfDoG4!5e0!3m2!1svi!2s!4v1734938706959!5m2!1svi!2s"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact__info">

                        <div class="contact__info__item">
                            <h4>{{ $homestayInfo->name }}</h4>
                            <p>
                                Địa chỉ: {{ $homestayInfo->address }} <br>
                                Số điện thoại: {{ $homestayInfo->contact_phone }} <br>
                                Hotline: {{ $homestayInfo->contact_hotline }} <br>
                                Email: {{ $homestayInfo->contact_email }}
                            </p>
                        </div>
                        <div class="contact__info__item">
                            <h4>Theo dõi chúng tôi</h4>
                            <p>
                                <a href="{{ $homestayInfo->facebook_link }}" target="_blank">Facebook</a><br>
                                <a href="{{ $homestayInfo->zalo_link }}" target="_blank">Zalo</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->
@endsection
