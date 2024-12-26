@extends("client.layouts.layout")
@section("title", $blog->title . " - Home Stay Y Tý Đại Ngàn")
@section("content")
    <!-- blog -->
    <div class="rts__section py-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="blog__details">
                        <div class="blog__details__content">
                            <!-- Tiêu đề bài viết -->
                            <h1 class="mb-4">{{ $blog->title }}</h1>

                            <!-- Hình ảnh chính của bài viết -->
                            <div class="blog__thumbnail mb-4">
                                <img class="rounded-3 img-fluid" style="width: 100%;height: 400px;object-fit: cover"
                                     src="{{ $blog->thumbnail }}" alt="{{ $blog->title }}">
                            </div>

                            <!-- Mô tả ngắn gọn -->
                            <p class="description">
                                {{ $blog->description }}
                            </p>

                            <!-- Nội dung chi tiết bài viết -->
                            <div class="blog__detail__content">
                                {!! $blog->detail !!}
                            </div>

                            <!-- Thông tin tác giả và ngày đăng -->
                            <div class="blog__meta d-flex align-items-center mt-4">
                                <div class="author__info">
                                    <h6 class="font-20 mb-0">{{ $blog->author }}</h6>
                                    <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d-m-Y') }}</span>
                                </div>
                            </div>

                            <!-- Các thẻ (Tags) - Nếu có dữ liệu tags, hãy thay thế phần này bằng vòng lặp -->
                            <h6 class="mb-4 mt-4">Tags</h6>
                            <div class="tag__list mb-30">
                                <div class="tags__list">
                                    <!-- Ví dụ thẻ tĩnh, bạn có thể thay thế bằng dữ liệu động nếu có -->
                                    <a href="#">Hotel Stay</a>
                                    <a href="#">Travel Blog</a>
                                    <a href="#">Guest Experience</a>
                                    <a href="#">Hotel Guide</a>
                                    <a href="#">Hotel Review</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog end -->
@endsection
