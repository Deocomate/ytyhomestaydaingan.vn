@extends("client.layouts.layout")
@section("title","Các loại phòng")
@section("content")
    <!-- single rooms -->
    <div class="rts__section py-3">
        <div class="container">
            <div class="row gy-5">
                <!-- single rooms -->
                <div class="room__wrapper">
                    @foreach($rooms as $room)
                        <div class="room__card is__style__four">
                            <div class="room__card__top">
                                <div class="room__card__image">
                                    <a href="{{ route('client.phong_nghi_chi_tiet', $room->id) }}">
                                        <img src="{{ $room->thumbnail }}"
                                             style="width: 100%;height: 300px;object-fit: cover"
                                             alt="{{ $room->title }}">
                                    </a>
                                </div>
                            </div>
                            <div class="room__card__meta">
                                <a href="{{ route('client.phong_nghi_chi_tiet', $room->id) }}"
                                   class="room__card__title h4">{{ $room->title }}</a>
                                <p class="font-sm">{{ $room->description }}</p>
                                <div class="room__price__tag">
                                    <span class="h5 d-block">{{ number_format($room->price, 0, ',', '.') }}₫</span>
                                </div>
                                <a href="{{ route('client.phong_nghi_chi_tiet', ['id'=>$room->id]) }}"
                                   class="room__card__link">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- single rooms end -->
@endsection
