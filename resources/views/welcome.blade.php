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
            <?php
            $categories = [['href' => '/category', 'icon' => 'all-icon.svg', 'label' => 'Tất cả'], ['href' => '#', 'icon' => 'food-icon.svg', 'label' => 'Ẩm thực'], ['href' => '#', 'icon' => 'travel-icon.svg', 'label' => 'Du lịch'], ['href' => '#', 'icon' => 'game-icon.svg', 'label' => 'Giải trí'], ['href' => '#', 'icon' => 'heart-icon.svg', 'label' => 'Sức khỏe'], ['href' => '#', 'icon' => 'study.svg', 'label' => 'Giáo dục', 'size' => true], ['href' => '#', 'icon' => 'fashion.svg', 'label' => 'Thời trang', 'size' => true], ['href' => '#', 'icon' => 'beatiful.svg', 'label' => 'Làm đẹp', 'size' => true]];
            ?>

            <div class="category-grid" id="categoryGrid">
                <?php foreach ($categories as $cat): ?>
                <a href="<?= htmlspecialchars($cat['href']) ?>" class="category-item">
                    <div class="category-icon all">
                        <img src="./images/<?= htmlspecialchars($cat['icon']) ?>"
                            alt="<?= htmlspecialchars($cat['label']) ?>"
                            <?= !empty($cat['size']) ? 'width="33px" height="32px"' : '' ?> />
                    </div>
                    <span class="category-label"><?= htmlspecialchars($cat['label']) ?></span>
                </a>
                <?php endforeach; ?>
            </div>
            <!-- Indicator -->
            <div class="indicator">
                <div class="indicator-dot">
                    <div class="indicator-ab" id="indicatorAb"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- Banner --}}
    <div class="banner">
        <div class="banner-container">
            <div class="banner-slider" id="bannerSlider">
                <div class="banner-slide">
                    <img src="./images/banner.png" alt="Banner 1">
                </div>
                <div class="banner-slide">
                    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=800&h=400&fit=crop"
                        alt="Banner 2">
                </div>
                <div class="banner-slide">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&h=400&fit=crop"
                        alt="Banner 3">
                </div>
                <div class="banner-slide">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800&h=400&fit=crop"
                        alt="Banner 4">
                </div>
            </div>


        </div>

        <!-- Indicators -->
        <div class="indicator-banner" id="indicators">
            <div class="dot active" data-slide="0"></div>
            <div class="dot" data-slide="1"></div>
            <div class="dot" data-slide="2"></div>
            <div class="dot" data-slide="3"></div>
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
        <div onclick="window.location.href = '/detail'" class="voucher-flex">
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
    <div onclick="window.location.href = '/detail'" class="food-section">
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
                <img src="./images/image-game1.svg" alt="" style="padding-bottom: 8px" width="156px">
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
    <div onclick="window.location.href = '/detail'" class="food-section">
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
                <img src="./images/image-game1.svg" alt="" style="padding-bottom: 8px" width="156px">
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

    <div onclick="window.location.href = '/detail'" class="food-section">
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
                <img src="./images/image-game1.svg" alt="" style="padding-bottom: 8px" width="156px">
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
    <div onclick="window.location.href = '/detail'" class="food-section">
        <div class="section-header">
            <div class="section-title">
                <span class="section-title-icon"><img src="./images/study.svg" alt="" width="24px"
                        height="24px"></span>
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
                <img src="./images/image-game1.svg" alt="" style="padding-bottom: 8px" width="156px">
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

    <div onclick="window.location.href = '/detail'" class="food-section">
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
                <img src="./images/image-game1.svg" alt="" style="padding-bottom: 8px" width="156px">
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

    <div onclick="window.location.href = '/detail'" class="food-section">
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
                <img src="./images/image-game1.svg" alt="" style="padding-bottom: 8px" width="156px">
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

    <div onclick="window.location.href = '/detail'" class="food-section" style="margin-bottom: 90px;">
        <div class="section-header">
            <div class="section-title">
                <span class="section-title-icon"><img src="./images/phone.svg" alt="" width="24px"
                        height="24px"></span>
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
                <img src="./images/image-game1.svg" alt="" style="padding-bottom: 8px" width="156px">
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
<script>
    class BannerSlider {
        constructor() {
            this.currentSlide = 0;
            this.totalSlides = 4;
            this.slider = document.getElementById('bannerSlider');
            this.container = document.querySelector('.banner-container');
            this.indicators = document.querySelectorAll('.dot');
            this.autoSlideInterval = null;
            this.autoSlideDelay = 5000; // 5 giây

            // Drag properties
            this.isDragging = false;
            this.startX = 0;
            this.currentX = 0;
            this.initialTransform = 0;
            this.dragThreshold = 50; // Minimum drag distance to trigger slide change

            this.init();
        }

        init() {
            // Event listeners cho indicators
            this.indicators.forEach((dot, index) => {
                dot.addEventListener('click', () => this.goToSlide(index));
            });

            // Mouse drag support
            this.addMouseDragSupport();

            // Touch/swipe support
            this.addTouchSupport();

            // Auto slide
            this.startAutoSlide();

            // Pause auto slide on hover
            this.container.addEventListener('mouseenter', () => this.stopAutoSlide());
            this.container.addEventListener('mouseleave', () => this.startAutoSlide());
        }

        addMouseDragSupport() {
            this.container.addEventListener('mousedown', (e) => {
                this.isDragging = true;
                this.startX = e.clientX;
                this.initialTransform = -this.currentSlide * 25;
                this.container.classList.add('dragging');

                // Prevent text selection while dragging
                e.preventDefault();
            });

            document.addEventListener('mousemove', (e) => {
                if (!this.isDragging) return;

                e.preventDefault();
                this.currentX = e.clientX;
                const deltaX = this.currentX - this.startX;
                const dragPercentage = (deltaX / this.container.offsetWidth) * 100;

                // Update slider position while dragging
                const newTransform = this.initialTransform + dragPercentage;
                this.slider.style.transform = `translateX(${newTransform}%)`;
            });

            document.addEventListener('mouseup', () => {
                if (!this.isDragging) return;

                this.isDragging = false;
                this.container.classList.remove('dragging');

                const deltaX = this.currentX - this.startX;

                // Determine if drag was significant enough to change slide
                if (Math.abs(deltaX) > this.dragThreshold) {
                    if (deltaX > 0) {
                        // Dragged right - go to previous slide
                        this.prevSlide();
                    } else {
                        // Dragged left - go to next slide
                        this.nextSlide();
                    }
                } else {
                    // Snap back to current slide
                    this.updateSlider();
                }
            });

            // Prevent dragging images
            this.container.addEventListener('dragstart', (e) => {
                e.preventDefault();
            });
        }

        goToSlide(slideIndex) {
            this.currentSlide = slideIndex;
            this.updateSlider();
            this.updateIndicators();
        }

        nextSlide() {
            this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
            this.updateSlider();
            this.updateIndicators();
        }

        prevSlide() {
            this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
            this.updateSlider();
            this.updateIndicators();
        }

        updateSlider() {
            // Re-enable transition
            this.slider.style.transition = 'transform 0.5s ease-in-out';

            const translateX = -this.currentSlide * 25; // 25% per slide
            this.slider.style.transform = `translateX(${translateX}%)`;
        }

        updateIndicators() {
            this.indicators.forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentSlide);
            });
        }

        startAutoSlide() {
            this.stopAutoSlide();
            this.autoSlideInterval = setInterval(() => {
                if (!this.isDragging) { // Don't auto-slide while dragging
                    this.nextSlide();
                }
            }, this.autoSlideDelay);
        }

        stopAutoSlide() {
            if (this.autoSlideInterval) {
                clearInterval(this.autoSlideInterval);
                this.autoSlideInterval = null;
            }
        }

        addTouchSupport() {
            let startX = 0;
            let startY = 0;
            let endX = 0;
            let endY = 0;

            this.container.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
                startY = e.touches[0].clientY;
            }, {
                passive: true
            });

            this.container.addEventListener('touchend', (e) => {
                endX = e.changedTouches[0].clientX;
                endY = e.changedTouches[0].clientY;
                this.handleSwipe();
            }, {
                passive: true
            });

            const handleSwipe = () => {
                const deltaX = startX - endX;
                const deltaY = startY - endY;

                // Check if horizontal swipe is more significant than vertical
                if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > 50) {
                    if (deltaX > 0) {
                        this.nextSlide(); // Swipe left - next slide
                    } else {
                        this.prevSlide(); // Swipe right - previous slide
                    }
                }
            };

            this.handleSwipe = handleSwipe;
        }
    }

    // Initialize banner slider when DOM is loaded
    document.addEventListener('DOMContentLoaded', () => {
        new BannerSlider();
    });
    const grid = document.getElementById('categoryGrid');
    const indicator = document.getElementById('indicatorAb');
    const indicatorTrackWidth = 40; // bằng với .indicator-dot width
    const indicatorWidth = 14; // bằng với .indicator-ab width

    grid.addEventListener('scroll', () => {
        const scrollLeft = grid.scrollLeft;
        const maxScroll = grid.scrollWidth - grid.clientWidth;
        const percent = scrollLeft / maxScroll;

        const maxTranslate = indicatorTrackWidth - indicatorWidth;
        indicator.style.left = `${percent * maxTranslate}px`;
    });
</script>
