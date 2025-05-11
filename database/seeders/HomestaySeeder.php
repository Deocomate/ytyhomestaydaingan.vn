<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Thêm dòng này để sử dụng DB facade
use Illuminate\Support\Carbon; // Thêm dòng này để sử dụng Carbon cho thời gian

class HomestaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Xóa dữ liệu cũ (tùy chọn, cẩn thận khi dùng ở production)
        DB::table('reviews')->delete();
        DB::table('blogs')->delete();
        DB::table('posts')->delete();
        DB::table('locations')->delete();
        DB::table('homestay_info')->delete(); // Thêm nếu bạn có dữ liệu mẫu cho bảng này
        DB::table('services')->delete(); // Thêm nếu bạn có dữ liệu mẫu cho bảng này
        DB::table('rooms')->delete(); // Thêm nếu bạn có dữ liệu mẫu cho bảng này


        // Seeding cho bảng reviews
        DB::table('reviews')->insert([
            [
                'customer_thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb1.jpg',
                'customer_name' => 'Nguyễn Văn A',
                'customer_review' => 'Homestay rất tuyệt vời, không gian yên tĩnh và thoải mái.',
                'customer_address' => 'Hà Nội',
                'customer_rating' => 5
            ],
            [
                'customer_thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb2.jpg',
                'customer_name' => 'Trần Thị B',
                'customer_review' => 'Tôi rất hài lòng với dịch vụ của homestay, nhân viên thân thiện và nhiệt tình.',
                'customer_address' => 'TP.HCM',
                'customer_rating' => 4
            ],
            [
                'customer_thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb3.jpg',
                'customer_name' => 'Lê Văn C',
                'customer_review' => 'Phòng ốc sạch sẽ, bữa ăn ngon miệng, tôi sẽ quay lại vào lần sau.',
                'customer_address' => 'Đà Nẵng',
                'customer_rating' => 5
            ],
            [
                'customer_thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb4.jpg',
                'customer_name' => 'Phạm Thị D',
                'customer_review' => 'Không gian đẹp, nhiều góc sống ảo, rất thích hợp cho các bạn trẻ.',
                'customer_address' => 'Huế',
                'customer_rating' => 4
            ],
            [
                'customer_thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb5.jpg',
                'customer_name' => 'Hoàng Văn E',
                'customer_review' => 'Chủ nhà nhiệt tình, chu đáo, tôi cảm thấy như đang ở nhà.',
                'customer_address' => 'Nha Trang',
                'customer_rating' => 5
            ],
            [
                'customer_thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb6.jpg',
                'customer_name' => 'Vũ Thị F',
                'customer_review' => 'Cảnh quan đẹp, không khí trong lành, tôi đã có một kỳ nghỉ đáng nhớ.',
                'customer_address' => 'Hải Phòng',
                'customer_rating' => 4
            ],
            [
                'customer_thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb7.jpg',
                'customer_name' => 'Đỗ Văn G',
                'customer_review' => 'Homestay có nhiều hoạt động thú vị, tôi sẽ giới thiệu cho bạn bè.',
                'customer_address' => 'Cần Thơ',
                'customer_rating' => 5
            ],
            [
                'customer_thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb1.jpg',
                'customer_name' => 'Nguyễn Thị H',
                'customer_review' => 'Giá cả hợp lý, chất lượng tốt, tôi đánh giá 5 sao.',
                'customer_address' => 'Quảng Ninh',
                'customer_rating' => 5
            ],
            [
                'customer_thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb2.jpg',
                'customer_name' => 'Trần Văn I',
                'customer_review' => 'Địa điểm tuyệt vời để thư giãn và hòa mình vào thiên nhiên.',
                'customer_address' => 'Vũng Tàu',
                'customer_rating' => 4
            ],
            [
                'customer_thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb3.jpg',
                'customer_name' => 'Lê Thị K',
                'customer_review' => 'Tôi rất thích không gian yên tĩnh và riêng tư của homestay.',
                'customer_address' => 'Hà Nam',
                'customer_rating' => 5
            ],
            [
                'customer_thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb4.jpg',
                'customer_name' => 'Phạm Văn L',
                'customer_review' => 'Homestay rất sạch sẽ và được trang bị đầy đủ tiện nghi.',
                'customer_address' => 'Thái Bình',
                'customer_rating' => 4
            ],
            [
                'customer_thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb5.jpg',
                'customer_name' => 'Hoàng Thị M',
                'customer_review' => 'Bữa sáng tại homestay rất ngon, tôi rất hài lòng.',
                'customer_address' => 'Nam Định',
                'customer_rating' => 5
            ],
            [
                'customer_thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb6.jpg',
                'customer_name' => 'Vũ Văn N',
                'customer_review' => 'Tôi đã có một kỳ nghỉ tuyệt vời tại homestay, cảm ơn!',
                'customer_address' => 'Nghệ An',
                'customer_rating' => 4
            ],
            [
                'customer_thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb7.jpg',
                'customer_name' => 'Đỗ Thị O',
                'customer_review' => 'Homestay có nhiều hoạt động ngoài trời thú vị.',
                'customer_address' => 'Thanh Hóa',
                'customer_rating' => 5
            ],
            [
                'customer_thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb1.jpg',
                'customer_name' => 'Nguyễn Văn P',
                'customer_review' => 'Tôi sẽ quay lại homestay này vào một ngày gần nhất.',
                'customer_address' => 'Hải Dương',
                'customer_rating' => 5
            ],
            [
                'customer_thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb2.jpg',
                'customer_name' => 'Trần Thị Q',
                'customer_review' => 'Tôi cảm thấy rất thoải mái và thư giãn tại homestay.',
                'customer_address' => 'Bắc Ninh',
                'customer_rating' => 4
            ],
        ]);

        // Seeding cho bảng blogs
        DB::table('blogs')->insert([
            [
                'title' => 'Khám phá Y Tý mùa lúa chín',
                'description' => 'Bài viết giới thiệu về vẻ đẹp của Y Tý vào mùa lúa chín.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb1.jpg',
                'detail' => 'Chi tiết về trải nghiệm du lịch Y Tý vào mùa lúa chín.',
                'author' => 'Nguyễn Văn A',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Ẩm thực Y Tý - Những món ăn không thể bỏ qua',
                'description' => 'Khám phá ẩm thực đặc sắc của Y Tý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb2.jpg',
                'detail' => 'Chi tiết về các món ăn đặc sản của Y Tý.',
                'author' => 'Trần Thị B',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Cắm trại tại Y Tý - Trải nghiệm đáng nhớ',
                'description' => 'Chia sẻ kinh nghiệm cắm trại tại Y Tý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb3.jpg',
                'detail' => 'Chi tiết về địa điểm và chuẩn bị khi cắm trại tại Y Tý.',
                'author' => 'Lê Văn C',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Chợ phiên Y Tý - Nét văn hóa đặc sắc',
                'description' => 'Tìm hiểu về chợ phiên Y Tý và những nét văn hóa độc đáo.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb4.jpg',
                'detail' => 'Chi tiết về chợ phiên Y Tý.',
                'author' => 'Phạm Thị D',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Những homestay tuyệt vời ở Y Tý',
                'description' => 'Giới thiệu các homestay nổi tiếng và chất lượng ở Y Tý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb5.jpg',
                'detail' => 'Chi tiết về các homestay ở Y Tý.',
                'author' => 'Hoàng Văn E',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Trekking Y Tý - Những cung đường đẹp nhất',
                'description' => 'Khám phá các cung đường trekking tuyệt đẹp ở Y Tý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb6.jpg',
                'detail' => 'Chi tiết về các cung đường trekking ở Y Tý.',
                'author' => 'Vũ Thị F',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Lễ hội ở Y Tý - Trải nghiệm văn hóa địa phương',
                'description' => 'Tìm hiểu về các lễ hội truyền thống của người dân Y Tý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb7.jpg',
                'detail' => 'Chi tiết về các lễ hội ở Y Tý.',
                'author' => 'Đỗ Văn G',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Du lịch Y Tý mùa nào đẹp nhất?',
                'description' => 'Tư vấn thời điểm thích hợp nhất để du lịch Y Tý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb1.jpg',
                'detail' => 'Chi tiết về thời tiết và cảnh quan Y Tý theo mùa.',
                'author' => 'Nguyễn Thị H',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Những hoạt động thú vị khi đến Y Tý',
                'description' => 'Gợi ý các hoạt động không thể bỏ qua khi du lịch Y Tý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb2.jpg',
                'detail' => 'Chi tiết về các hoạt động du lịch ở Y Tý.',
                'author' => 'Trần Văn I',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Kinh nghiệm di chuyển đến Y Tý',
                'description' => 'Hướng dẫn cách di chuyển đến Y Tý một cách thuận tiện.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb3.jpg',
                'detail' => 'Chi tiết về các phương tiện di chuyển đến Y Tý.',
                'author' => 'Lê Thị K',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Chuẩn bị gì cho chuyến đi Y Tý?',
                'description' => 'Tư vấn các vật dụng cần thiết cho chuyến đi Y Tý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb4.jpg',
                'detail' => 'Chi tiết về những thứ cần chuẩn bị cho chuyến đi.',
                'author' => 'Phạm Văn L',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Những điều cần lưu ý khi du lịch Y Tý',
                'description' => 'Chia sẻ những lưu ý quan trọng khi du lịch Y Tý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb5.jpg',
                'detail' => 'Chi tiết về những điều cần lưu ý khi du lịch Y Tý.',
                'author' => 'Hoàng Thị M',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Trải nghiệm homestay Y Tý cùng gia đình',
                'description' => 'Chia sẻ trải nghiệm ở homestay Y Tý cùng gia đình.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb6.jpg',
                'detail' => 'Chi tiết về trải nghiệm ở homestay.',
                'author' => 'Vũ Văn N',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Giao lưu văn hóa với người dân Y Tý',
                'description' => 'Tìm hiểu về văn hóa và phong tục tập quán của người dân địa phương.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb7.jpg',
                'detail' => 'Chi tiết về văn hóa của người dân Y Tý.',
                'author' => 'Đỗ Thị O',
                'created_at' => Carbon::now()
            ],
        ]);

        // Seeding cho bảng posts
        DB::table('posts')->insert([
            [
                'title' => 'Y Tý mùa xuân: Sắc hoa rực rỡ',
                'description' => 'Bài viết về vẻ đẹp của hoa đào, hoa mận nở rộ ở Y Tý vào mùa xuân.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb1.jpg',
                'url' => '/y-ty-mua-xuan',
                'author' => 'Nguyễn Văn A',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Kinh nghiệm trekking đỉnh Lảo Thẩn',
                'description' => 'Chia sẻ kinh nghiệm leo núi Lảo Thẩn, ngắm biển mây tuyệt đẹp.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb2.jpg',
                'url' => '/trekking-lao-than',
                'author' => 'Trần Thị B',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Top 5 món ăn ngon nhất định phải thử ở Y Tý',
                'description' => 'Gợi ý các món ăn đặc sản của Y Tý mà bạn không nên bỏ qua.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb3.jpg',
                'url' => '/mon-ngon-y-ty',
                'author' => 'Lê Văn C',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Lịch trình 3 ngày 2 đêm khám phá Y Tý',
                'description' => 'Gợi ý lịch trình chi tiết cho chuyến đi Y Tý 3 ngày 2 đêm.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb4.jpg',
                'url' => '/lich-trinh-y-ty',
                'author' => 'Phạm Thị D',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Homestay gần gũi thiên nhiên ở Y Tý',
                'description' => 'Giới thiệu các homestay có không gian đẹp, hòa mình vào thiên nhiên.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb5.jpg',
                'url' => '/homestay-y-ty',
                'author' => 'Hoàng Văn E',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Chợ phiên Y Tý: Nơi giao thoa văn hóa',
                'description' => 'Khám phá nét văn hóa đặc sắc tại chợ phiên Y Tý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb6.jpg',
                'url' => '/cho-phien-y-ty',
                'author' => 'Vũ Thị F',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Mùa săn mây đẹp nhất ở Y Tý',
                'description' => 'Chia sẻ kinh nghiệm săn mây và thời điểm săn mây lý tưởng ở Y Tý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb7.jpg',
                'url' => '/san-may-y-ty',
                'author' => 'Đỗ Văn G',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Những điều cần chuẩn bị khi đến Y Tý',
                'description' => 'Tư vấn các vật dụng cần thiết cho chuyến đi Y Tý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb1.jpg',
                'url' => '/chuan-bi-y-ty',
                'author' => 'Nguyễn Thị H',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Giao lưu văn hóa với người Hà Nhì ở Y Tý',
                'description' => 'Tìm hiểu về văn hóa, phong tục tập quán của người Hà Nhì.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb2.jpg',
                'url' => '/van-hoa-ha-nhi',
                'author' => 'Trần Văn I',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Trải nghiệm tắm lá thuốc của người Dao đỏ',
                'description' => 'Giới thiệu về dịch vụ tắm lá thuốc cổ truyền của người Dao đỏ ở Y Tý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb3.jpg',
                'url' => '/tam-la-thuoc',
                'author' => 'Lê Thị K',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Ngắm hoàng hôn trên đỉnh núi Y Tý',
                'description' => 'Chia sẻ kinh nghiệm ngắm hoàng hôn tuyệt đẹp từ đỉnh núi Y Tý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb4.jpg',
                'url' => '/hoang-hon-y-ty',
                'author' => 'Phạm Văn L',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Thưởng thức trà Shan tuyết cổ thụ ở Y Tý',
                'description' => 'Giới thiệu về trà Shan tuyết cổ thụ và cách thưởng thức.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb5.jpg',
                'url' => '/tra-shan-tuyet',
                'author' => 'Hoàng Thị M',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Kinh nghiệm thuê xe máy tự lái ở Y Tý',
                'description' => 'Chia sẻ kinh nghiệm thuê xe máy tự lái và những điều cần lưu ý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb6.jpg',
                'url' => '/thue-xe-y-ty',
                'author' => 'Vũ Văn N',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Gợi ý các món quà lưu niệm từ Y Tý',
                'description' => 'Gợi ý những món quà lưu niệm độc đáo từ Y Tý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb7.jpg',
                'url' => '/qua-luu-niem-y-ty',
                'author' => 'Đỗ Thị O',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Mẹo tiết kiệm chi phí khi du lịch Y Tý',
                'description' => 'Chia sẻ những mẹo tiết kiệm chi phí cho chuyến đi Y Tý.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb1.jpg',
                'url' => '/meo-tiet-kiem-y-ty',
                'author' => 'Nguyễn Văn P',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Những điểm check-in sống ảo ở Y Tý',
                'description' => 'Gợi ý các địa điểm đẹp để bạn có những bức ảnh sống ảo.',
                'thumbnail' => 'http://127.0.0.1:8000/userfiles/images/thumnail/thumb2.jpg',
                'url' => '/check-in-y-ty',
                'author' => 'Trần Thị Q',
                'created_at' => Carbon::now()
            ],
        ]);

        // Seeding cho bảng locations
        DB::table('locations')->insert([
            [
                'title' => 'Đồi chè Trái Tim',
                'description' => 'Đồi chè nổi tiếng với hình dáng trái tim, là điểm check-in không thể bỏ lỡ ở Mộc Châu.',
                'thumbnail' => '/userfiles/images/thumbnail/thumb3.jpg',
                'price' => 20
            ],
            [
                'title' => 'Thác Dải Yếm',
                'description' => 'Thác nước hùng vĩ được ví như "chiếc khăn" của nàng thiếu nữ trong truyền thuyết.',
                'thumbnail' => '/userfiles/images/thumbnail/thumb5.jpg',
                'price' => 50
            ],
            [
                'title' => 'Rừng thông Bản Áng',
                'description' => 'Khu rừng thông tuyệt đẹp nằm trên những ngọn đồi thoai thoải bên hồ nước trong xanh.',
                'thumbnail' => '/userfiles/images/thumbnail/thumb7.jpg',
                'price' => 30
            ],
            [
                'title' => 'Hang Dơi',
                'description' => 'Động tự nhiên với các thạch nhũ kỳ ảo, được mệnh danh là "Tây Thiên đệ nhất động".',
                'thumbnail' => '/userfiles/images/thumbnail/thumb1.jpg',
                'price' => 40
            ],
            [
                'title' => 'Thung lũng mận Nà Ka',
                'description' => 'Thung lũng rộng lớn với những cây mận nở trắng xóa vào mùa xuân.',
                'thumbnail' => '/userfiles/images/thumbnail/thumb4.jpg',
                'price' => 10
            ],
            [
                'title' => 'Cao nguyên Mộc Châu',
                'description' => 'Một trong những cao nguyên đẹp nhất Việt Nam với khí hậu mát mẻ và phong cảnh hữu tình.',
                'thumbnail' => '/userfiles/images/thumbnail/thumb6.jpg',
                'price' => 60
            ],
            [
                'title' => 'Đỉnh Pha Luông',
                'description' => 'Địa điểm dành cho những người yêu thích trekking với cảnh núi non hùng vĩ.',
                'thumbnail' => '/userfiles/images/thumbnail/thumb2.jpg',
                'price' => 35
            ],
            [
                'title' => 'Vườn hoa Happy Land',
                'description' => 'Khu du lịch với những cánh đồng hoa rực rỡ sắc màu và không gian vui chơi hấp dẫn.',
                'thumbnail' => '/userfiles/images/thumbnail/thumb7.jpg',
                'price' => 25
            ],
            [
                'title' => 'Bản Pa Phách',
                'description' => 'Bản làng của người H’Mông, nổi tiếng với những ngôi nhà đơn sơ giữa thiên nhiên.',
                'thumbnail' => '/userfiles/images/thumbnail/thumb3.jpg',
                'price' => 55
            ],
            [
                'title' => 'Ngũ động Bản Ôn',
                'description' => 'Quần thể hang động độc đáo nằm giữa núi rừng hoang sơ.',
                'thumbnail' => '/userfiles/images/thumbnail/thumb5.jpg',
                'price' => 45
            ],
        ]);

        // Bạn có thể thêm seeding cho các bảng homestay_info, services, rooms nếu có dữ liệu mẫu
        // Ví dụ cho homestay_info (điền thông tin thực tế của bạn)

        DB::table('homestay_info')->insert([
            [
                'name' => 'Homestay Y Tý View',
                'title' => 'Homestay Y Tý View - Ngắm trọn biển mây',
                'description' => 'Mô tả chi tiết về Homestay Y Tý View...',
                'video_link' => 'https://youtube.com/example_video',
                'food_menu' => 'Thực đơn gồm các món đặc sản Y Tý...',
                'address' => 'Thôn Mò Phú Chải, Y Tý, Bát Xát, Lào Cai',
                'contact_email' => 'ytyview@example.com',
                'contact_phone' => '0987654321',
                'contact_hotline' => '0123456789',
                'facebook_link' => 'https://facebook.com/ytyview',
                'zalo_link' => 'https://zalo.me/0987654321',
                'map_link' => 'https://goo.gl/maps/example'
            ]
        ]);

    }
}
