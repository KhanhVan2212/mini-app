<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <!-- Styles / Scripts -->
    @vite(['resources/css/home.css'])
</head>

<body>

    <!-- Header -->
    <div class="background-header">
    </div>
    <div style="position: relative">
        <div class="header">
            <h1 class="header-title">Gift Card</h1>
            <div class="menu-button">
                <div class="menu-icon">
                    <img src="./images/menu-icon.svg" alt="" width="20px" height="20px">
                </div>
                <div class="line-button">
                    |
                </div>
                <div class="remove-icon">
                    <img src="./images/remove-icon.svg" alt="" width="20px" height="20px">
                </div>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="search-container">
            <div class="search-bar">
                <img src="./images/search-icon.svg" alt="">
                <input type="text" class="search-input" placeholder="Search voucher, brand,...">
            </div>
        </div>

        <!-- Categories -->
        <div class="categories">
            <div>
                <div class="category-grid">
                    <a href="#" class="category-item">
                        <div class="category-icon all"><img src="./images/all-icon.svg" alt=""></div>
                        <span class="category-label">Tất cả</span>
                    </a>
                    <a href="#" class="category-item">
                        <div class="category-icon all"><img src="./images/food-icon.svg" alt=""></div>
                        <span class="category-label">Ẩm thực</span>
                    </a>
                    <a href="#" class="category-item">
                        <div class="category-icon all"><img src="./images/travel-icon.svg" alt=""></div>
                        <span class="category-label">Du lịch</span>
                    </a>
                    <a href="#" class="category-item">
                        <div class="category-icon all"><img src="./images/game-icon.svg" alt=""></div>
                        <span class="category-label">Giải trí</span>
                    </a>
                    <a href="#" class="category-item">
                        <div class="category-icon all"><img src="./images/heart-icon.svg" alt=""></div>
                        <span class="category-label">Sức khỏe</span>
                    </a>
                </div>
                <!-- Indicator -->
                <div class="indicator">
                    <div class="indicator-dot">
                        <div class="indicator-ab"></div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- Banner --}}
    <div class="banner">
        <img src="./images/banner.png" alt="">
        <div class="indicator-banner">
            <div class="dot-banner"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    <div class="food-section">
        <div class="section-header">
            <div class="section-title">
                <span class="section-title-icon"><img src="./images/food-icon.svg" alt="" width="24px"
                        height="24px"></span>
                <span>Ẩm thực</span>
            </div>
            <a href="#" class="view-all-link">Xem tất cả</a>
        </div>

        <!-- Voucher Cards -->
        <div class="voucher-flex">
            <div class="cart">
                <img src="./images/content.svg" alt="" style="padding-bottom: 8px">
                <div class="brand-item">
                    <div class="brand-header">
                        <div class="brand-logo starbucks-logo">★</div>
                        <span class="brand-name">Starbucks</span>
                    </div>
                    <div class="offer-title">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="price-info">
                        <span class="original-price">20.000đ</span>
                        <span class="sale-price">20.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/content.svg" alt="" style="padding-bottom: 8px">
                <div class="brand-item">
                    <div class="brand-header">
                        <div class="brand-logo starbucks-logo">★</div>
                        <span class="brand-name">Starbucks</span>
                    </div>
                    <div class="offer-title">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="price-info">
                        <span class="original-price">20.000đ</span>
                        <span class="sale-price">20.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/content.svg" alt="" style="padding-bottom: 8px">
                <div class="brand-item">
                    <div class="brand-header">
                        <div class="brand-logo starbucks-logo">★</div>
                        <span class="brand-name">Starbucks</span>
                    </div>
                    <div class="offer-title">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="price-info">
                        <span class="original-price">20.000đ</span>
                        <span class="sale-price">20.000đ</span>
                    </div>
                </div>
            </div>
        </div>


    </div>



</body>


</html>
