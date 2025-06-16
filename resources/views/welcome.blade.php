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

    <!-- FOOD -->

    <div class="food-section">
        <div class="section-header">
            <div class="section-title">
                <span class="section-title-icon"><img src="./images/food-icon.svg" alt="" width="24px"
                        height="24px"></span>
                <span class="section-title-text">Ẩm thực</span>
            </div>
            <a href="#" class="view-all-link">Xem tất cả</a>
        </div>

        <!-- Voucher Cards -->
        <div class="voucher-flex">
            <div class="cart">
                <img src="./images/content.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/starbucks.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">Starbucks</span>
                    </div>
                    <div class="offer-title">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">20.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/content.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/mixue.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">MIXUE</span>
                    </div>
                    <div class="offer-title">Chỉ từ 28K một ly MIXUE với mùa hè cực chill</div>
                    <div class="price-info">
                        <span class="sale-price">20.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/content.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/hightland.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">Starbucks</span>
                    </div>
                    <div class="offer-title">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">20.000đ</span>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Travel     -->
    <div class="food-section">
        <div class="section-header">
            <div class="section-title">
                <span class="section-title-icon"><img src="./images/travel-icon.svg" alt="" width="24px"
                        height="24px"></span>
                <span class="section-title-text">Du lịch</span>
            </div>
            <a href="#" class="view-all-link">Xem tất cả</a>
        </div>
        <!-- Voucher Cards -->
        <div class="voucher-flex">
            <div class="cart">
                <img src="./images/image-travel1.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/travel-icon1.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">Starbucks</span>
                    </div>
                    <div class="offer-title">Dalat City Tour 1 Day với giá chỉ từ 400.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">400.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/image-travel1.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/travel-icon1.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">MIXUE</span>
                    </div>
                    <div class="offer-title">Sapa City Tour 1 Day với giá chỉ từ 300.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">300.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/content.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/travel-icon1.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">Starbucks</span>
                    </div>
                    <div class="offer-title">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">20.000đ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Game -->
    <div class="food-section">
        <div class="section-header">
            <div class="section-title">
                <span class="section-title-icon"><img src="./images/game-icon.svg" alt="" width="24px"
                        height="24px"></span>
                <span class="section-title-text">Giải trí</span>
            </div>
            <a href="#" class="view-all-link">Xem tất cả</a>
        </div>
        <!-- Voucher Cards -->
        <div class="voucher-flex">
            <div class="cart">
                <img src="./images/image-game.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/beta-icon.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">Beta</span>
                    </div>
                    <div class="offer-title">Dalat City Tour 1 Day với giá chỉ từ 400.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">400.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/image-game1.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/cgv-icon.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">CGV</span>
                    </div>
                    <div class="offer-title">Sapa City Tour 1 Day với giá chỉ từ 300.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">300.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/content.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/hightland.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">Starbucks</span>
                    </div>
                    <div class="offer-title">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">20.000đ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Heart -->

    <div class="food-section">
        <div class="section-header">
            <div class="section-title">
                <span class="section-title-icon"><img src="./images/heart-icon.svg" alt="" width="24px"
                        height="24px"></span>
                <span class="section-title-text">Sức khỏe</span>
            </div>
            <a href="#" class="view-all-link">Xem tất cả</a>
        </div>
        <!-- Voucher Cards -->
        <div class="voucher-flex">
            <div class="cart">
                <img src="./images/image-heart.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/beta-icon.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">Beta</span>
                    </div>
                    <div class="offer-title">Dalat City Tour 1 Day với giá chỉ từ 400.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">400.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/image-heart1.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/cgv-icon.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">CGV</span>
                    </div>
                    <div class="offer-title">Sapa City Tour 1 Day với giá chỉ từ 300.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">300.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/content.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/hightland.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">Starbucks</span>
                    </div>
                    <div class="offer-title">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">20.000đ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Study -->
    <div class="food-section">
        <div class="section-header">
            <div class="section-title">
                <span class="section-title-icon"><img src="./images/study.svg" alt="" width="24px" height="24px"></span>
                <span class="section-title-text">Giáo dục</span>
            </div>
            <a href="#" class="view-all-link">Xem tất cả</a>
        </div>
        <!-- Voucher Cards -->
        <div class="voucher-flex">
            <div class="cart">
                <img src="./images/image-study.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/beta-icon.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">Beta</span>
                    </div>
                    <div class="offer-title">Dalat City Tour 1 Day với giá chỉ từ 400.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">400.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/image-study1.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/cgv-icon.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">CGV</span>
                    </div>
                    <div class="offer-title">Sapa City Tour 1 Day với giá chỉ từ 300.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">300.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/content.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/hightland.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">Starbucks</span>
                    </div>
                    <div class="offer-title">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">20.000đ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fashion -->

    <div class="food-section">
        <div class="section-header">
            <div class="section-title">
                <span class="section-title-icon"><img src="./images/fashion.svg" alt="" width="24px"
                        height="24px"></span>
                <span class="section-title-text">Thời trang</span>
            </div>
            <a href="#" class="view-all-link">Xem tất cả</a>
        </div>
        <!-- Voucher Cards -->
        <div class="voucher-flex">
            <div class="cart">
                <img src="./images/image-fashion.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/beta-icon.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">Beta</span>
                    </div>
                    <div class="offer-title">Dalat City Tour 1 Day với giá chỉ từ 400.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">400.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/image-fashion1.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/cgv-icon.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">CGV</span>
                    </div>
                    <div class="offer-title">Sapa City Tour 1 Day với giá chỉ từ 300.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">300.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/content.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/hightland.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">Starbucks</span>
                    </div>
                    <div class="offer-title">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">20.000đ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Beautiful -->

    <div class="food-section">
        <div class="section-header">
            <div class="section-title">
                <span class="section-title-icon"><img src="./images/beatiful.svg" alt="" width="24px"
                        height="24px"></span>
                <span class="section-title-text">Làm đẹp</span>
            </div>
            <a href="#" class="view-all-link">Xem tất cả</a>
        </div>
        <!-- Voucher Cards -->
        <div class="voucher-flex">
            <div class="cart">
                <img src="./images/image-beautifull.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/beta-icon.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">Beta</span>
                    </div>
                    <div class="offer-title">Dalat City Tour 1 Day với giá chỉ từ 400.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">400.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/image-beautifull1.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/cgv-icon.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">CGV</span>
                    </div>
                    <div class="offer-title">Sapa City Tour 1 Day với giá chỉ từ 300.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">300.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/content.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/hightland.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">Starbucks</span>
                    </div>
                    <div class="offer-title">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">20.000đ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Phone -->

    <div class="food-section" style="margin-bottom: 110px;">
        <div class="section-header">
            <div class="section-title">
                <span class="section-title-icon"><img src="./images/phone.svg" alt="" width="24px" height="24px"></span>
                <span class="section-title-text">Nạp thẻ điện thoại</span>
            </div>
            <a href="#" class="view-all-link">Xem tất cả</a>
        </div>
        <!-- Voucher Cards -->
        <div class="voucher-flex">
            <div class="cart">
                <img src="./images/image-phone2.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/beta-icon.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">Beta</span>
                    </div>
                    <div class="offer-title">Dalat City Tour 1 Day với giá chỉ từ 400.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">400.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/image-phone1.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/cgv-icon.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">CGV</span>
                    </div>
                    <div class="offer-title">Sapa City Tour 1 Day với giá chỉ từ 300.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">300.000đ</span>
                    </div>
                </div>
            </div>
            <div class="cart">
                <img src="./images/content.svg" alt="" style="padding-bottom: 8px" width="156px">
                <div class="brand-item">
                    <div class="brand-header">
                        <img src="./images/hightland.svg" alt="" width="18px" height="18px">
                        <span class="brand-name">Starbucks</span>
                    </div>
                    <div class="offer-title">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="price-info">
                        <span class="sale-price">20.000đ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shopping Cart -->
    <div class="custom-box">
        <div class="custom-flex">
            <div class="custom-container">
                <div data-style="Outlined" class="w-5 h-5 relative overflow-hidden">
                    <img src="./images/shopping.svg" alt="">
                </div>
            </div>
            <div class="custom-text">4 sản phẩm</div>
        </div>
        <div class="price">
            <div class="price-container">
                <div class="price-text">
                    <div class="price-value">20.000</div>
                </div>
                <img class="w-4 h-4" src="./images/hyra.svg" />
            </div>
        </div>
    </div>

    <!-- Bottom Navigation -->
    <div class="nav-container">
        <div class="nav-item active" data-active="On" data-name="Home">
            <div class="icon-wrapper">
                <div class="icon">
                    <img src="./images/home.svg" alt="">
                </div>
            </div>
            <div class="label red">Trang chủ</div>
        </div>

        <div class="nav-item" data-active="Off" data-name="Voucher">
            <div class="icon-wrapper">
                <div class="icon">
                    <img src="./images/voucher.svg" alt="">
                </div>
            </div>
            <div class="label gray">Voucher của tôi</div>
        </div>

        <div class="nav-item" data-active="Off" data-name="Account">
            <div class="icon-wrapper">
                <div class="icon">
                    <img src="./images/user.svg" alt="">
                </div>
            </div>
            <div class="label gray">Tài khoản</div>
        </div>
    </div>

</body>


</html>