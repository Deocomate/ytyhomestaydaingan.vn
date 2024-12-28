@extends("client.layouts.layout")
@section("title","Home Stay Y Tý Đại Ngàn")
@section("content")
    <!-- blog -->
    <div class="rts__section py-3">
        <div class="container">
            <div class="row g-30 sticky-wrap">
                <div class="col-lg-7">
                    <div class="blog__list__item ">
                        <!-- Vòng lặp để hiển thị từng blog -->
                        @foreach($blogs as $blog)
                            <div class="single__blog p-3 p-md-4">
                                <div class="single__blog__thumb">
                                    <a href="{{ route('client.bai_viet_chi_tiet', ['id' => $blog->id]) }}">
                                        <img src="{{ $blog->thumbnail }}"
                                             style="width: 100%;height: 300px;object-fit: cover"
                                             alt="{{ $blog->title }}">
                                    </a>
                                </div>
                                <div class="single__blog__meta">
                                    <!-- Nếu có category trong dữ liệu, hãy thay thế -->
                                    <a href="{{ route('client.bai_viet_chi_tiet', ['id' => $blog->id]) }}"
                                       class="h5">{{ $blog->title }}</a>
                                    <p>{{ $blog->description }}</p>
                                    <div class="single__blog__meta__main">
                                        <div class="author__meta">
                                            <a href="#">{{ $blog->author }}</a>
                                            <span><img src="/client/assets/images/icon/clock.svg" alt=""> {{ \Carbon\Carbon::parse($blog->created_at)->format('d-m-20y') }}</span>
                                        </div>
                                        <div class="readmore">
                                            <a href="{{ route('client.bai_viet_chi_tiet', ['id' => $blog->id]) }}">
                                                Đọc thêm
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-5 sticky-item">
                    <div class="blog__sidebar__section">
                        <h6 class="mb-4">Bài viết mới</h6>
                        <div class="latest__post mb-30">
                            @foreach($blogs->take(3) as $latestBlog)
                                <!-- Lấy 3 bài viết mới nhất -->
                                <div class="single__post">
                                    <div class="single__post__thumb">
                                        <a href="{{ route('client.bai_viet_chi_tiet', ['id' => $latestBlog->id]) }}">
                                            <img src="{{ $latestBlog->thumbnail }}" height="106" width="110"
                                                 alt="{{ $latestBlog->title }}">
                                        </a>
                                    </div>
                                    <div class="single__post__meta">
                                        <a href="{{ route('client.bai_viet_chi_tiet', ['id' => $latestBlog->id]) }}"
                                           class="font-sm">{{ $latestBlog->title }}</a>
                                        <span><img src="/client/assets/images/icon/clock.svg" alt=""> {{ \Carbon\Carbon::parse($latestBlog->created_at)->format('d-m-Y') }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog end -->
@endsection
