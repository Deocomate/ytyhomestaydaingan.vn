@extends("client.layouts.layout")
@section("title","Chi tiết dịch vụ homestay Y Tý")
@section("content")
    <!-- blog -->
    <div class="rts__section py-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="blog__details">
                        <div class="blog__details__content">
                            <h2 class="mb-4">{{ $room->title }}</h2>
                            <img class="rounded-3 my-4 img-fluid" style="width: 100%;height: 400px;object-fit: cover"
                                 src="{{ $room->thumbnail }}" alt="{{ $room->title }}">
                            <h6 class="mb-4">Loại dịch vụ: {{ $room->type }}</h6>
                            <p class="description">{{ $room->description }}</p>
                            <h6 class="mb-4">Giá: {{ number_format($room->price, 0, ',', '.') }} VND</h6>
                            <h6 class="mb-4">Chi tiết:</h6>
                            <p class="description">{!! $room->details !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog end -->
@endsection
