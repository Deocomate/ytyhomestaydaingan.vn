DROP TABLE IF EXISTS homestay_info;
CREATE TABLE IF NOT EXISTS homestay_info
(
    id              INT AUTO_INCREMENT PRIMARY KEY,
    name            varchar(1000),
    title           varchar(1000),
    description     longtext,
    video_link      varchar(1000),
    food_menu       longtext,
    address         varchar(1000),
    contact_email   varchar(1000),
    contact_phone   varchar(1000),
    contact_hotline varchar(1000),
    facebook_link   varchar(1000),
    zalo_link       varchar(1000),
    map_link        varchar(1000)
);

DROP TABLE IF EXISTS services;
CREATE TABLE IF NOT EXISTS services
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    title       varchar(1000),
    thumbnail   varchar(1000),
    type        varchar(1000),
    description longtext,
    price       bigint,
    details     longtext
);

DROP TABLE IF EXISTS rooms;
CREATE TABLE IF NOT EXISTS rooms
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    title       varchar(1000),
    thumbnail   varchar(1000),
    type        varchar(1000),
    description longtext,
    price       BIGINT,
    details     longtext
);

DROP TABLE IF EXISTS reviews;
CREATE TABLE IF NOT EXISTS reviews
(
    id                 INT AUTO_INCREMENT PRIMARY KEY,
    customer_thumbnail varchar(1000),
    customer_name      varchar(1000),
    customer_review    varchar(1000),
    customer_address   varchar(1000),
    customer_rating    INT
);

DROP TABLE IF EXISTS posts;
CREATE TABLE IF NOT EXISTS posts
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    title       varchar(1000),
    description longtext,
    thumbnail   varchar(1000),
    url         varchar(100),
    author      varchar(1000),
    created_at  timestamp
);

DROP TABLE IF EXISTS blogs;
CREATE TABLE IF NOT EXISTS blogs
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    title       varchar(1000),
    description longtext,
    thumbnail   varchar(1000),
    detail      longtext,
    author      varchar(1000),
    created_at  timestamp
);

DROP TABLE IF EXISTS locations;
CREATE TABLE IF NOT EXISTS locations
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    title       varchar(1000),
    description longtext,
    thumbnail   varchar(1000),
    price       int
);

-- Seeding Database

INSERT INTO reviews (customer_thumbnail, customer_name, customer_review, customer_address, customer_rating)
VALUES ('http://127.0.0.1:8000/userfiles/images/thumnail/thumb1.jpg', 'Nguyễn Văn A',
        'Homestay rất tuyệt vời, không gian yên tĩnh và thoải mái.', 'Hà Nội', 5),
       ('http://127.0.0.1:8000/userfiles/images/thumnail/thumb2.jpg', 'Trần Thị B',
        'Tôi rất hài lòng với dịch vụ của homestay, nhân viên thân thiện và nhiệt tình.', 'TP.HCM', 4),
       ('http://127.0.0.1:8000/userfiles/images/thumnail/thumb3.jpg', 'Lê Văn C',
        'Phòng ốc sạch sẽ, bữa ăn ngon miệng, tôi sẽ quay lại vào lần sau.', 'Đà Nẵng', 5),
       ('http://127.0.0.1:8000/userfiles/images/thumnail/thumb4.jpg', 'Phạm Thị D',
        'Không gian đẹp, nhiều góc sống ảo, rất thích hợp cho các bạn trẻ.', 'Huế', 4),
       ('http://127.0.0.1:8000/userfiles/images/thumnail/thumb5.jpg', 'Hoàng Văn E',
        'Chủ nhà nhiệt tình, chu đáo, tôi cảm thấy như đang ở nhà.', 'Nha Trang', 5),
       ('http://127.0.0.1:8000/userfiles/images/thumnail/thumb6.jpg', 'Vũ Thị F',
        'Cảnh quan đẹp, không khí trong lành, tôi đã có một kỳ nghỉ đáng nhớ.', 'Hải Phòng', 4),
       ('http://127.0.0.1:8000/userfiles/images/thumnail/thumb7.jpg', 'Đỗ Văn G',
        'Homestay có nhiều hoạt động thú vị, tôi sẽ giới thiệu cho bạn bè.', 'Cần Thơ', 5),
       ('http://127.0.0.1:8000/userfiles/images/thumnail/thumb1.jpg', 'Nguyễn Thị H',
        'Giá cả hợp lý, chất lượng tốt, tôi đánh giá 5 sao.', 'Quảng Ninh', 5),
       ('http://127.0.0.1:8000/userfiles/images/thumnail/thumb2.jpg', 'Trần Văn I',
        'Địa điểm tuyệt vời để thư giãn và hòa mình vào thiên nhiên.', 'Vũng Tàu', 4),
       ('http://127.0.0.1:8000/userfiles/images/thumnail/thumb3.jpg', 'Lê Thị K',
        'Tôi rất thích không gian yên tĩnh và riêng tư của homestay.', 'Hà Nam', 5),
       ('http://127.0.0.1:8000/userfiles/images/thumnail/thumb4.jpg', 'Phạm Văn L',
        'Homestay rất sạch sẽ và được trang bị đầy đủ tiện nghi.', 'Thái Bình', 4),
       ('http://127.0.0.1:8000/userfiles/images/thumnail/thumb5.jpg', 'Hoàng Thị M',
        'Bữa sáng tại homestay rất ngon, tôi rất hài lòng.', 'Nam Định', 5),
       ('http://127.0.0.1:8000/userfiles/images/thumnail/thumb6.jpg', 'Vũ Văn N',
        'Tôi đã có một kỳ nghỉ tuyệt vời tại homestay, cảm ơn!', 'Nghệ An', 4),
       ('http://127.0.0.1:8000/userfiles/images/thumnail/thumb7.jpg', 'Đỗ Thị O',
        'Homestay có nhiều hoạt động ngoài trời thú vị.', 'Thanh Hóa', 5),
       ('http://127.0.0.1:8000/userfiles/images/thumnail/thumb1.jpg', 'Nguyễn Văn P',
        'Tôi sẽ quay lại homestay này vào một ngày gần nhất.', 'Hải Dương', 5),
       ('http://127.0.0.1:8000/userfiles/images/thumnail/thumb2.jpg', 'Trần Thị Q',
        'Tôi cảm thấy rất thoải mái và thư giãn tại homestay.', 'Bắc Ninh', 4);

INSERT INTO blogs (title, description, thumbnail, detail, author, created_at)
VALUES ('Khám phá Y Tý mùa lúa chín', 'Bài viết giới thiệu về vẻ đẹp của Y Tý vào mùa lúa chín.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb1.jpg',
        'Chi tiết về trải nghiệm du lịch Y Tý vào mùa lúa chín.', 'Nguyễn Văn A', NOW()),
       ('Ẩm thực Y Tý - Những món ăn không thể bỏ qua', 'Khám phá ẩm thực đặc sắc của Y Tý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb2.jpg', 'Chi tiết về các món ăn đặc sản của Y Tý.',
        'Trần Thị B', NOW()),
       ('Cắm trại tại Y Tý - Trải nghiệm đáng nhớ', 'Chia sẻ kinh nghiệm cắm trại tại Y Tý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb3.jpg',
        'Chi tiết về địa điểm và chuẩn bị khi cắm trại tại Y Tý.', 'Lê Văn C', NOW()),
       ('Chợ phiên Y Tý - Nét văn hóa đặc sắc', 'Tìm hiểu về chợ phiên Y Tý và những nét văn hóa độc đáo.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb4.jpg', 'Chi tiết về chợ phiên Y Tý.', 'Phạm Thị D',
        NOW()),
       ('Những homestay tuyệt vời ở Y Tý', 'Giới thiệu các homestay nổi tiếng và chất lượng ở Y Tý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb5.jpg', 'Chi tiết về các homestay ở Y Tý.', 'Hoàng Văn E',
        NOW()),
       ('Trekking Y Tý - Những cung đường đẹp nhất', 'Khám phá các cung đường trekking tuyệt đẹp ở Y Tý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb6.jpg', 'Chi tiết về các cung đường trekking ở Y Tý.',
        'Vũ Thị F', NOW()),
       ('Lễ hội ở Y Tý - Trải nghiệm văn hóa địa phương', 'Tìm hiểu về các lễ hội truyền thống của người dân Y Tý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb7.jpg', 'Chi tiết về các lễ hội ở Y Tý.', 'Đỗ Văn G',
        NOW()),
       ('Du lịch Y Tý mùa nào đẹp nhất?', 'Tư vấn thời điểm thích hợp nhất để du lịch Y Tý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb1.jpg',
        'Chi tiết về thời tiết và cảnh quan Y Tý theo mùa.', 'Nguyễn Thị H', NOW()),
       ('Những hoạt động thú vị khi đến Y Tý', 'Gợi ý các hoạt động không thể bỏ qua khi du lịch Y Tý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb2.jpg', 'Chi tiết về các hoạt động du lịch ở Y Tý.',
        'Trần Văn I', NOW()),
       ('Kinh nghiệm di chuyển đến Y Tý', 'Hướng dẫn cách di chuyển đến Y Tý một cách thuận tiện.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb3.jpg', 'Chi tiết về các phương tiện di chuyển đến Y Tý.',
        'Lê Thị K', NOW()),
       ('Chuẩn bị gì cho chuyến đi Y Tý?', 'Tư vấn các vật dụng cần thiết cho chuyến đi Y Tý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb4.jpg',
        'Chi tiết về những thứ cần chuẩn bị cho chuyến đi.', 'Phạm Văn L', NOW()),
       ('Những điều cần lưu ý khi du lịch Y Tý', 'Chia sẻ những lưu ý quan trọng khi du lịch Y Tý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb5.jpg',
        'Chi tiết về những điều cần lưu ý khi du lịch Y Tý.', 'Hoàng Thị M', NOW()),
       ('Trải nghiệm homestay Y Tý cùng gia đình', 'Chia sẻ trải nghiệm ở homestay Y Tý cùng gia đình.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb6.jpg', 'Chi tiết về trải nghiệm ở homestay.', 'Vũ Văn N',
        NOW()),
       ('Giao lưu văn hóa với người dân Y Tý', 'Tìm hiểu về văn hóa và phong tục tập quán của người dân địa phương.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb7.jpg', 'Chi tiết về văn hóa của người dân Y Tý.',
        'Đỗ Thị O', NOW());

INSERT INTO posts (title, description, thumbnail, url, author, created_at)
VALUES ('Y Tý mùa xuân: Sắc hoa rực rỡ', 'Bài viết về vẻ đẹp của hoa đào, hoa mận nở rộ ở Y Tý vào mùa xuân.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb1.jpg', '/y-ty-mua-xuan', 'Nguyễn Văn A', NOW()),
       ('Kinh nghiệm trekking đỉnh Lảo Thẩn', 'Chia sẻ kinh nghiệm leo núi Lảo Thẩn, ngắm biển mây tuyệt đẹp.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb2.jpg', '/trekking-lao-than', 'Trần Thị B', NOW()),
       ('Top 5 món ăn ngon nhất định phải thử ở Y Tý', 'Gợi ý các món ăn đặc sản của Y Tý mà bạn không nên bỏ qua.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb3.jpg', '/mon-ngon-y-ty', 'Lê Văn C', NOW()),
       ('Lịch trình 3 ngày 2 đêm khám phá Y Tý', 'Gợi ý lịch trình chi tiết cho chuyến đi Y Tý 3 ngày 2 đêm.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb4.jpg', '/lich-trinh-y-ty', 'Phạm Thị D', NOW()),
       ('Homestay gần gũi thiên nhiên ở Y Tý', 'Giới thiệu các homestay có không gian đẹp, hòa mình vào thiên nhiên.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb5.jpg', '/homestay-y-ty', 'Hoàng Văn E', NOW()),
       ('Chợ phiên Y Tý: Nơi giao thoa văn hóa', 'Khám phá nét văn hóa đặc sắc tại chợ phiên Y Tý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb6.jpg', '/cho-phien-y-ty', 'Vũ Thị F', NOW()),
       ('Mùa săn mây đẹp nhất ở Y Tý', 'Chia sẻ kinh nghiệm săn mây và thời điểm săn mây lý tưởng ở Y Tý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb7.jpg', '/san-may-y-ty', 'Đỗ Văn G', NOW()),
       ('Những điều cần chuẩn bị khi đến Y Tý', 'Tư vấn các vật dụng cần thiết cho chuyến đi Y Tý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb1.jpg', '/chuan-bi-y-ty', 'Nguyễn Thị H', NOW()),
       ('Giao lưu văn hóa với người Hà Nhì ở Y Tý', 'Tìm hiểu về văn hóa, phong tục tập quán của người Hà Nhì.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb2.jpg', '/van-hoa-ha-nhi', 'Trần Văn I', NOW()),
       ('Trải nghiệm tắm lá thuốc của người Dao đỏ',
        'Giới thiệu về dịch vụ tắm lá thuốc cổ truyền của người Dao đỏ ở Y Tý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb3.jpg', '/tam-la-thuoc', 'Lê Thị K', NOW()),
       ('Ngắm hoàng hôn trên đỉnh núi Y Tý', 'Chia sẻ kinh nghiệm ngắm hoàng hôn tuyệt đẹp từ đỉnh núi Y Tý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb4.jpg', '/hoang-hon-y-ty', 'Phạm Văn L', NOW()),
       ('Thưởng thức trà Shan tuyết cổ thụ ở Y Tý', 'Giới thiệu về trà Shan tuyết cổ thụ và cách thưởng thức.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb5.jpg', '/tra-shan-tuyet', 'Hoàng Thị M', NOW()),
       ('Kinh nghiệm thuê xe máy tự lái ở Y Tý', 'Chia sẻ kinh nghiệm thuê xe máy tự lái và những điều cần lưu ý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb6.jpg', '/thue-xe-y-ty', 'Vũ Văn N', NOW()),
       ('Gợi ý các món quà lưu niệm từ Y Tý', 'Gợi ý những món quà lưu niệm độc đáo từ Y Tý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb7.jpg', '/qua-luu-niem-y-ty', 'Đỗ Thị O', NOW()),
       ('Mẹo tiết kiệm chi phí khi du lịch Y Tý', 'Chia sẻ những mẹo tiết kiệm chi phí cho chuyến đi Y Tý.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb1.jpg', '/meo-tiet-kiem-y-ty', 'Nguyễn Văn P', NOW()),
       ('Những điểm check-in sống ảo ở Y Tý', 'Gợi ý các địa điểm đẹp để bạn có những bức ảnh sống ảo.',
        'http://127.0.0.1:8000/userfiles/images/thumnail/thumb2.jpg', '/check-in-y-ty', 'Trần Thị Q', NOW());

INSERT INTO locations (title, description, thumbnail, price)
VALUES ('Đồi chè Trái Tim', 'Đồi chè nổi tiếng với hình dáng trái tim, là điểm check-in không thể bỏ lỡ ở Mộc Châu.',
        '/userfiles/images/thumbnail/thumb3.jpg', 20),
       ('Thác Dải Yếm', 'Thác nước hùng vĩ được ví như "chiếc khăn" của nàng thiếu nữ trong truyền thuyết.',
        '/userfiles/images/thumbnail/thumb5.jpg', 50),
       ('Rừng thông Bản Áng', 'Khu rừng thông tuyệt đẹp nằm trên những ngọn đồi thoai thoải bên hồ nước trong xanh.',
        '/userfiles/images/thumbnail/thumb7.jpg', 30),
       ('Hang Dơi', 'Động tự nhiên với các thạch nhũ kỳ ảo, được mệnh danh là "Tây Thiên đệ nhất động".',
        '/userfiles/images/thumbnail/thumb1.jpg', 40),
       ('Thung lũng mận Nà Ka', 'Thung lũng rộng lớn với những cây mận nở trắng xóa vào mùa xuân.',
        '/userfiles/images/thumbnail/thumb4.jpg', 10),
       ('Cao nguyên Mộc Châu',
        'Một trong những cao nguyên đẹp nhất Việt Nam với khí hậu mát mẻ và phong cảnh hữu tình.',
        '/userfiles/images/thumbnail/thumb6.jpg', 60),
       ('Đỉnh Pha Luông', 'Địa điểm dành cho những người yêu thích trekking với cảnh núi non hùng vĩ.',
        '/userfiles/images/thumbnail/thumb2.jpg', 35),
       ('Vườn hoa Happy Land', 'Khu du lịch với những cánh đồng hoa rực rỡ sắc màu và không gian vui chơi hấp dẫn.',
        '/userfiles/images/thumbnail/thumb7.jpg', 25),
       ('Bản Pa Phách', 'Bản làng của người H’Mông, nổi tiếng với những ngôi nhà đơn sơ giữa thiên nhiên.',
        '/userfiles/images/thumbnail/thumb3.jpg', 55),
       ('Ngũ động Bản Ôn', 'Quần thể hang động độc đáo nằm giữa núi rừng hoang sơ.',
        '/userfiles/images/thumbnail/thumb5.jpg', 45);
