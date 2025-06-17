<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/filter.css'])
</head>

<body>
    <div class="filter">
        <div class="filter-title">Bộ lọc nâng cao</div>
        <div class="close-container">
            <div class="icon-wrapper">
                <a href="/category"> <img src="./images/close.svg" alt="" class="close-icon"></a>
            </div>
        </div>
    </div>

    <div class="filter-container">
        <div class="filter-section">
            <div class="section-header">
                <div class="section-title">Loại ưu đãi</div>
            </div>
            <div class="button-group">
                <div class="location-button active">
                    <div class="text">Tất cả</div>
                </div>
                <div class="location-button">
                    <div class="text">Deal Hot</div>
                </div>
                <div class="location-button">
                    <div class="text">Ưu đãi độc quyền</div>
                </div>
                <div class="location-button">
                    <div class="text">Ưu đãi gần bạn</div>
                </div>
                <div class="location-button">
                    <div class="text">Có thể bạn thích</div>
                </div>
                <div class="location-button">
                    <div class="text">Flash Sale</div>
                </div>
            </div>
        </div>

        <!-- Categories Section -->
        <div class="filter-section">
            <div class="section-header">
                <div class="section-title">Danh mục</div>
            </div>
            <div class="button-group">
                <div class="filter-button">
                    <div class="text">Tất cả</div>
                </div>
                <div class="filter-button">
                    <div class="text">Độc quyền</div>
                </div>
                <div class="filter-button active">
                    <div class="text">Ẩm thực</div>
                </div>
                <div class="filter-button">
                    <div class="text">Di chuyển</div>
                </div>
                <div class="filter-button">
                    <div class="text">Làm đẹp</div>
                </div>
                <div class="filter-button">
                    <div class="text">Viễn thông</div>
                </div>
                <div class="filter-button">
                    <div class="text">Giải trí</div>
                </div>
                <div class="filter-button active">
                    <div class="text">Giáo dục</div>
                </div>
                <div class="filter-button">
                    <div class="text">Du lịch</div>
                </div>
                <div class="filter-button active">
                    <div class="text">Mua sắm</div>
                </div>
                <div class="filter-button">
                    <div class="text">Sức khỏe</div>
                </div>
                <div class="filter-button">
                    <div class="text">Khách sạn</div>
                </div>
            </div>
        </div>

        <!-- Location Section -->
        <div class="filter-section">
            <div class="section-header">
                <div class="section-title">Vị trí</div>
                <div class="view-more">Xem thêm</div>
            </div>
            <div class="button-group">
                <div class="location-button active">
                    <div class="text">Toàn cầu</div>
                </div>
                <div class="location-button">
                    <div class="text">VietNam</div>
                </div>
                <div class="location-button">
                    <div class="text">Thái Lan</div>
                </div>
                <div class="location-button">
                    <div class="text">Mỹ</div>
                </div>
            </div>
        </div>

        <!-- Price Range Section -->
        <div class="filter-section">
            <div class="section-header">
                <div class="section-title">Khoảng giá</div>
            </div>
            <div class="price-section">
                <div class="currency-dropdown">
                    <div class="currency-text">United States Dollars ($)</div>
                    <div class="dropdown-icon"><img src="./images/down.svg" alt=""></div>
                </div>
                <div class="price-range">
                    <div class="slider-container">
                        <div class="slider-track"></div>
                        <div class="slider-handle"></div>
                        <div class="slider-handle"></div>
                    </div>
                    <div class="price-labels">
                        <div class="price-label">$0</div>
                        <div class="price-label">$200.000+</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sort Section -->
        <div class="filter-section">
            <div class="section-header">
                <div class="section-title">Sắp xếp</div>
            </div>
            <div class="button-group">
                <div class="sort-button active">
                    <div class="text">Đề xuất</div>
                </div>
                <div class="sort-button">
                    <div class="text">Mới nhất</div>
                </div>
                <div class="sort-button">
                    <div class="text">Giá tiền rẻ nhất</div>
                </div>
                <div class="sort-button">
                    <div class="text">Giá điểm rẻ nhất</div>
                </div>
                <div class="sort-button">
                    <div class="text">Bán chạy nhất</div>
                </div>
            </div>
        </div>
    </div>

    <div class="button-container">
        <button class="button button-reset">
            <span class="button-text">Đặt lại</span>
        </button>
        <button class="button button-confirm">
            <span class="button-text">Xác nhận</span>
        </button>
    </div>

    </div>
</body>

</html>
