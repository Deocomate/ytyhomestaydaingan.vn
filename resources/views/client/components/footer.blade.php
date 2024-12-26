


<footer class="rts__section rts__footer is__common__footer footer__background has__shape">

    <div class="container">
        <div class="row">
            <div class="footer__widget__wrapper">
                <div class="rts__widget">
                    {{--                    <a href="#">--}}
                    {{--                        <img class="footer__logo" src="/client/assets/images/logo/logo.svg" alt="footer logo">--}}
                    {{--                    </a>--}}
                    <p class="font-sm max-290 mt-20">
                        {{$homestayInfo->title}}
                    </p>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d920.4587898380589!2d103.60449909968389!3d22.6599338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36cd7d272c6c9821%3A0x2f1725653de3941!2zSG9tc3RheSBZIFTDvSDEkOG6oWkgTmfDoG4!5e0!3m2!1svi!2s!4v1734518009580!5m2!1svi!2s"
                        height="200" style="border:0;width: 100%" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="rts__widget">
                    <span class="widget__title">Liên kết nhanh</span>
                    <ul>
                        <li><a href="#gioi-thieu" aria-label="footer__link">Giới thiệu</a></li>
                        <li><a href="#dich-vu" aria-label="footer__link">Dịch vụ</a></li>
                        <li><a href="#phong-nghi-chi-tiet" aria-label="footer__link">Phòng nghỉ</a></li>
                    </ul>
                </div>
                <div class="rts__widget">
                    <span class="widget__title">Dịch vụ</span>
                    <ul>
                        <li>Phòng nghỉ</li>
                        <li>Ăn uống</li>
                        <li>Tắm lá thuốc</li>
                        <li>Cho thuê xe máy</li>
                        <li>Đưa đón</li>
                    </ul>
                </div>
                <div class="rts__widget">
                    <span class="widget__title">Liên hệ</span>
                    <ul>
                        <li>
                            <a aria-label="footer__contact" href="tel:{{$homestayInfo->contact_phone}}">
                                <i class="flaticon-phone-flip"></i>
                                {{$homestayInfo->contact_phone}}
                            </a>
                        </li>
                        <li><a aria-label="footer__contact" href="tel:{{$homestayInfo->contact_hotline}}"><i
                                    class="flaticon-phone-flip"></i>
                                {{$homestayInfo->contact_hotline}}</a></li>
                        <li><a aria-label="footer__contact" href="mailto:{{$homestayInfo->contact_email}}"><i
                                    class="flaticon-envelope"></i> {{$homestayInfo->contact_email}} <!--- Thay email --->
                            </a></li>
                        <li>
                            <a aria-label="footer__contact" href="#">
                                <i class="flaticon-marker"></i>
                                {{$homestayInfo->address}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright__text">
        <div class="container">
            <div class="row">
                <div class="copyright__wrapper">
                    <p class="mb-0">Copyright © 2024 Homestay Y Tý Đại Ngàn. All rights reserved.</p>
                    <div class="footer__social__link">
                        <a href="{{$homestayInfo->facebook_link}}" aria-label="footer__social" class="link__item">Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
