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
                            <h2 class="mb-4">{{ $service->title }}</h2>
                            <img class="rounded-3 my-4 img-fluid" style="width: 100%;height: 400px;object-fit: cover"
                                 src="{{ $service->thumbnail }}" alt="{{ $service->title }}">
                            <h6 class="mb-4">Loại dịch vụ: {{ $service->type }}</h6>
                            <p class="description">{{ $service->description }}</p>
                            <h6 class="mb-4">Chi tiết:</h6>
                            <p class="description">{!! $service->details !!}</p>
                            <h6 class="mb-4">Giá: {{ number_format($service->price, 0, ',', '.') }} VND</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog end -->
@endsection
