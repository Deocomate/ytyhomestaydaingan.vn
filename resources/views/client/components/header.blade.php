<!-- header area -->
<div class="header__top">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6 col-md-6">
                <div class="social__links">
                    <a class="link__item gap-10" href="tel:{{$homestayInfo->contact_phone}}"><i
                            class="flaticon-phone-flip"></i></a>{{$homestayInfo->contact_phone}}
                    <a class="link__item gap-10" href="mailto:{{$homestayInfo->contact_email}}"><i
                            class="flaticon-envelope"></i>{{$homestayInfo->contact_email}}
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="location">
                    <a class="link__item gap-10" href="#">
                        <i class="flaticon-marker"></i>
                        {{$homestayInfo->address}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="main__header header__function py-3 shadow">
    <div class="container">
        <div class="row">
            <div class="d-flex align-items-center justify-content-between">
                <div class="main__nav">
                    <div class="navigation d-none d-lg-block">
                        @include("client.components.menu")
                    </div>
                </div>
                <div class="main__right">
                    <button class="theme-btn btn-style sm-btn fill menu__btn d-lg-none" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <span><img src="/client/assets/images/icon/menu-icon.svg" alt=""></span>
                    </button>
                    <button data-bs-toggle="modal" data-bs-target="#bookRoomModal"
                            class="theme-btn btn-style sm-btn fill"><span>Đặt phòng</span></button>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->

<!-- Mobile Menu -->
<div class="offcanvas offcanvas-start" id="offcanvasRight">
    <div class="rts__btstrp__offcanvase">
        <div class="offcanvase__wrapper">
            <div class="left__side mobile__menu">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                <div class="offcanvase__top mb-0">
                    <div class="offcanvase__logo mb-0">
                        <a href="{{ route('client.trang_chu') }}">
                            <img src="{{asset("/client/assets/fixed-images/logo-white.png")}}" style="width: 100px"
                                 alt="logo">
                        </a>
                    </div>
                </div>
                <div class="offcanvase__mobile__menu">
                    <nav class="navigation__menu" id="mobile__menu">
                        <ul class="list-unstyled flex-column">
                            <li class="navigation__menu--item">
                                <a href="{{ route('client.trang_chu') }}" class="navigation__menu--item__link">
                                    Trang chủ
                                </a>
                            </li>
                            <li class="navigation__menu--item">
                                <a href="{{ route('client.phong_nghi') }}" class="navigation__menu--item__link">
                                    Phòng nghỉ
                                </a>
                            </li>
                            <li class="navigation__menu--item">
                                <a href="{{ route('client.dich_vu') }}" class="navigation__menu--item__link">
                                    Dịch vụ
                                </a>
                            </li>
                            <li class="navigation__menu--item">
                                <a href="{{ route('client.bai_viet') }}" class="navigation__menu--item__link">
                                    Cẩm nang Y Tý
                                </a>
                            </li>
                            <li class="navigation__menu--item">
                                <a href="{{ route('client.bai_bao') }}" class="navigation__menu--item__link">
                                    Bài báo liên quan
                                </a>
                            </li>
                            <li class="navigation__menu--item">
                                <a href="{{ route('client.lien_he') }}" class="navigation__menu--item__link">
                                    Liên hệ
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="offcanvase__bottom">
                    <div class="offcanvase__address">

                        <div class="item">
                            <span class="h6">Điện thoại</span>
                            <a href="tel:{{$homestayInfo->contact_phone}}"><i
                                    class="flaticon-phone-flip"></i> {{$homestayInfo->contact_phone}}</a>

                        </div>
                        <div class="item">
                            <span class="h6">Email</span>
                            <a href="mailto:{{$homestayInfo->contact_email}}"><i
                                    class="flaticon-envelope"></i>{{$homestayInfo->contact_email}}
                                <!--- Thay đổi email --->
                            </a>
                        </div>
                        <div class="item">
                            <span class="h6">Địa chỉ</span>
                            <a href="{{$homestayInfo->map_link}}"><i
                                    class="flaticon-marker"></i> {{$homestayInfo->address}}
                                <!--- Thay đổi địa chỉ --->
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Mobile Menu End -->

<div class="modal fade" id="bookRoomModal" tabindex="-1" aria-labelledby="bookRoomModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="bookingForm" action="{{ route('client.booking') }}" method="post">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="bookRoomModalLabel">Thông tin đặt phòng</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="checkInDate" class="form-label">Ngày nhận phòng</label>
                        <input type="date" class="form-control" id="checkInDate" name="checkInDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="checkOutDate" class="form-label">Ngày trả phòng</label>
                        <input type="date" class="form-control" id="checkOutDate" name="checkOutDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Họ tên người đặt phòng</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" required>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Số điện thoại</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="adults" class="form-label">Số người lớn</label>
                        <input type="number" class="form-control" id="adults" min="1" value="1" name="adults" required>
                    </div>
                    <div class="mb-3">
                        <label for="children" class="form-label">Số trẻ em</label>
                        <input type="number" class="form-control" id="children" min="0" value="0" name="children"
                               required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng
                    </button>
                    <button type="submit" class="btn btn-primary">Đặt phòng</button>
                </div>
            </form>
        </div>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-3 shadow-lg"
         style="z-index: 1050;" role="alert">
        <strong>Thành công!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@push("scripts")
    <script>
        function submitModal() {
            console.log("Submit Form")
            let bookingForm = document.getElementById("bookingForm")
            bookingForm.submit()
        }
    </script>

    <script>
        document.getElementById("bookingForm").addEventListener("submit", function (event) {
            let isValid = true;

            // Lấy các input từ form
            const phoneNumber = document.getElementById("phoneNumber");
            const checkInDate = document.getElementById("checkInDate");
            const checkOutDate = document.getElementById("checkOutDate");

            // Reset lỗi trước khi kiểm tra
            phoneNumber.classList.remove("is-invalid");
            checkInDate.classList.remove("is-invalid");
            checkOutDate.classList.remove("is-invalid");

            // Kiểm tra số điện thoại (10 số, bắt đầu bằng 0)
            const phoneRegex = /^0[0-9]{9}$/;
            if (!phoneRegex.test(phoneNumber.value)) {
                phoneNumber.classList.add("is-invalid");
                isValid = false;
            }

            // Kiểm tra ngày nhận phòng và trả phòng
            const today = new Date();
            const checkIn = new Date(checkInDate.value);
            const checkOut = new Date(checkOutDate.value);

            // Nếu không hợp lệ, ngăn form submit
            if (!isValid) {
                event.preventDefault();
                alert("Hãy kiểm tra lại thông tin của bạn!!!");
            }
        });
    </script>

@endpush
