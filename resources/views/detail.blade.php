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
    @vite(['resources/css/detail.css'])
</head>


<body>
    <div
        style="
  height: 174px;
  background-image: url('./images/bg-vouched.svg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
">
        {{-- <img src="./images/bg-vouched.svg" alt="" style="width: 100%; display: block;"> --}}

        <div class="custom-wrapper">
            <div class="custom-arrow">
                <a href="/"><img src="./images/cta.svg" alt=""></a>
            </div>
            <div class="menu-button">
                <div class="menu-icon">
                    <img src="./images/menu-icon.svg" alt="" width="20px" height="20px">
                </div>
                <div class="line-button">|</div>
                <div class="remove-icon">
                    <img src="./images/remove-icon.svg" alt="" width="20px" height="20px">
                </div>
            </div>
        </div>
        <div class="voucher-card">
            <div class="main-content">
                <div class="header-section">
                    <div class="brand-info">
                        <div class="brand-icon">
                            <img src="./images/kfc.svg" alt="KFC Logo" />
                        </div>
                        <div class="brand-name">KFC</div>
                    </div>
                    <div class="voucher-content">
                        <div class="voucher-text">
                            <span class="main-text"> Voucher hot giảm 40k cho hóa đơn từ 120k chỉ trong hôm nay </span>
                            <span class="brand-tag"> [KFC]</span>
                        </div>
                    </div>
                </div>
                <div class="price-section">
                    <div class="price-container">
                        <div class="price-wrapper">
                            <div class="price-inner">
                                <div class="price-text">20.000đ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="divider">
                <div class="round">
                </div>
                <div class="round1">
                </div>
                <div class="custom-divider"></div>
            </div>

            <div class="country-section">
                <div class="country-text">
                    <span class="label">Quốc gia áp dụng: </span>
                    <span class="count">123 quốc gia</span>
                </div>
                <div onclick="window.location.href = '/country';" class="country-flags">
                    <div class="flag-circle">
                        <img src="./images/vn.svg" alt=""
                            style=" width: 28px;
                     height: 28px;">
                    </div>
                    <div class="flag-circle">
                        <img src="./images/kr.svg" alt=""
                            style=" width: 28px;
                     height: 28px;">
                    </div>
                    <div class="flag-circle">
                        <img src="./images/us.svg" alt="" style=" width: 28px; height: 28px;">
                    </div>
                    <div class="more-countries">
                        <div class="more-countries-text">+99</div>

                    </div>
                </div>
            </div>

            <button class="add-to-cart-btn">
                <div class="btn-text">Thêm vào giỏ hàng</div>
            </button>
        </div>

    </div>

    <div class="voucher-container">
        <div class="tab-container">
            <div class="tab tab-inactive">
                <div class="tab-text tab-text-inactive">Điều khoản</div>
            </div>
            <div class="tab tab-active">
                <div class="tab-text tab-text-active">Hướng dẫn</div>
            </div>
            <div class="tab tab-inactive">
                <div class="tab-text tab-text-inactive">Mô tả</div>
            </div>
        </div>

        <div class="content-container">
            <div class="header-section">
                <div class="header-title">Hướng dẫn sử dụng</div>
                <div class="header-subtitle">Thanh toán dịch vụ online bằng mã code trên website hoặc ứng dụng của nhãn
                    hàng</div>
            </div>

            <div class="steps-container">

                <div class="step">
                    <img src="./images/step1.svg" alt="">
                    <div class="step-text">
                        <span class="step-text-bold">Bước 1:</span>
                        <span class="step-text-normal"> Chọn voucher ưu đãi muốn sử dụng, ấn </span>
                        <span class="step-text-bold">"Sử dụng ngay"</span>
                        <span class="step-text-normal"> để xem chi tiết mã Code giảm giá</span>
                    </div>
                </div>
                <div class="vertical-line"></div>

                <div class="step">
                    <img src="./images/step2.svg" alt="">
                    <div class="step-text">
                        <span class="step-text-bold">Bước 2:</span>
                        <span class="step-text-normal"> Chọn </span>
                        <span class="step-text-bold">Sao chép</span>
                        <span class="step-text-normal"> mã khuyến mãi</span>
                    </div>
                </div>
                <div class="vertical-line1"></div>
                <div class="step">
                    <img src="./images/step3.svg" alt="">
                    <div class="step-text">
                        <span class="step-text-bold">Bước 3:</span>
                        <span class="step-text-normal"> Dán mã tại trang thanh toán trên website hoặc ứng dụng của nhãn
                            hàng/thương hiệu để áp dụng ưu đãi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="payment-container">
        <div class="icon-container">
            <div class="shopping-icon">
                <img src="./images/shopping.svg" alt="Shopping icon">
            </div>
            <div class="notification-badge">
                <div class="badge-text">1</div>
            </div>
        </div>
        <div class="right-section">
            <div class="purchase-info">
                <div class="purchase-label">Purchase</div>
                <div class="amount-container">
                    <div class="amount-wrapper">
                        <div class="amount-text">1.00.202</div>
                        <img class="currency-icon" src="./images/hyra.svg" alt="Currency" />
                    </div>
                </div>
            </div>
            <button class="payment-button">
                <div class="button-content">
                    <div class="button-text-wrapper">
                        <a href="detail" class="button-text">Thanh toán</a>
                    </div>
                </div>
            </button>
        </div>
    </div>
    <div class="modal-overlay">
        <div class="cart-modal">
            <div class="cart-header">
                <div class="cart-title-container">
                    <div class="cart-title">Giỏ hàng</div>
                </div>
                <div class="cart-close">
                    <img src="./images/close.svg" alt="">
                </div>
            </div>
            <?php
            $cartItems = [
                [
                    'image' => 'image-fashion.svg',
                    'brand_icon' => 'starbucks.svg',
                    'brand_name' => 'Starbucks',
                    'quantity' => 'x1',
                    'description' => 'Voucher mua KFC với giá 19.000đ',
                    'price' => '30.000đ',
                    'purchase' => '200.000',
                    'currency_icon' => 'hyra.svg',
                ],
                [
                    'image' => 'image-fashion.svg',
                    'brand_icon' => 'starbucks.svg',
                    'brand_name' => 'Highlands',
                    'quantity' => 'x2',
                    'description' => 'Voucher Highlands 50%',
                    'price' => '50.000đ',
                    'purchase' => '300.000',
                    'currency_icon' => 'hyra.svg',
                ],
                [
                    'image' => 'image-fashion.svg',
                    'brand_icon' => 'starbucks.svg',
                    'brand_name' => 'KFC',
                    'quantity' => 'x1',
                    'description' => 'Combo gà rán ưu đãi 70k',
                    'price' => '70.000đ',
                    'purchase' => '400.000',
                    'currency_icon' => 'hyra.svg',
                ],
                [
                    'image' => 'image-fashion.svg',
                    'brand_icon' => 'starbucks.svg',
                    'brand_name' => 'The Coffee House',
                    'quantity' => 'x3',
                    'description' => 'Tặng trà sữa size lớn',
                    'price' => '40.000đ',
                    'purchase' => '250.000',
                    'currency_icon' => 'hyra.svg',
                ],
                [
                    'image' => 'image-fashion.svg',
                    'brand_icon' => 'starbucks.svg',
                    'brand_name' => 'Phúc Long',
                    'quantity' => 'x1',
                    'description' => 'Mua 1 tặng 1 món bất kỳ',
                    'price' => '60.000đ',
                    'purchase' => '350.000',
                    'currency_icon' => 'hyra.svg',
                ],
                [
                    'image' => 'image-fashion.svg',
                    'brand_icon' => 'starbucks.svg',
                    'brand_name' => 'Lotteria',
                    'quantity' => 'x2',
                    'description' => 'Ưu đãi burger + nước',
                    'price' => '45.000đ',
                    'purchase' => '150.000',
                    'currency_icon' => 'hyra.svg',
                ],
                [
                    'image' => 'image-fashion.svg',
                    'brand_icon' => 'starbucks.svg',
                    'brand_name' => 'CGV',
                    'quantity' => 'x1',
                    'description' => 'Vé xem phim 2D giá rẻ',
                    'price' => '75.000đ',
                    'purchase' => '500.000',
                    'currency_icon' => 'hyra.svg',
                ],
                [
                    'image' => 'image-fashion.svg',
                    'brand_icon' => 'starbucks.svg',
                    'brand_name' => 'Vincom',
                    'quantity' => 'x1',
                    'description' => 'Voucher giảm giá mua sắm',
                    'price' => '90.000đ',
                    'purchase' => '600.000',
                    'currency_icon' => 'hyra.svg',
                ],
            ];
            ?>
            <div class="cart-modal-content">
                <!-- Cart Item 1 -->
                <?php foreach ($cartItems as $item): ?>
                <div class="cart-item-wrapper">
                    <div class="cart-item">
                        <div class="cart-item-scrollable">
                            <div class="cart-item-content">
                                <div class="item-image">
                                    <img class="item-img" src="./images/<?= htmlspecialchars($item['image']) ?>"
                                        alt="<?= htmlspecialchars($item['brand_name']) ?>" />
                                </div>
                                <div class="item-details">
                                    <div class="item-info">
                                        <div class="item-brand-info">
                                            <div class="item-brand-header">
                                                <div class="item-brand-row">
                                                    <div class="item-brand-icon">
                                                        <img src="./images/<?= htmlspecialchars($item['brand_icon']) ?>"
                                                            alt="<?= htmlspecialchars($item['brand_name']) ?>"
                                                            width="16px" height="16px" />
                                                    </div>
                                                    <div class="item-brand-name">
                                                        <?= htmlspecialchars($item['brand_name']) ?>
                                                    </div>
                                                    <div class="item-quantity">
                                                        <?= htmlspecialchars($item['quantity']) ?></div>
                                                </div>
                                                <div class="item-description">
                                                    <div class="item-desc-text">
                                                        <?= htmlspecialchars($item['description']) ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-pricing">
                                        <div class="price-section-left">
                                            <div class="price-label">Price:</div>
                                            <div class="price-value-cart"><?= htmlspecialchars($item['price']) ?></div>
                                        </div>
                                        <div class="purchase-section">
                                            <div class="purchase-label">Purchase:</div>
                                            <div class="purchase-value">
                                                <div class="purchase-amount"><?= htmlspecialchars($item['purchase']) ?>
                                                </div>
                                                <img class="currency-icon"
                                                    src="./images/<?= htmlspecialchars($item['currency_icon']) ?>"
                                                    alt="Currency" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-remove">
                                <span>Xóa</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</body>

</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Lấy các elements
        const addToCartBtn = document.querySelector('.add-to-cart-btn');
        const modalOverlay = document.querySelector('.modal-overlay');
        const cartClose = document.querySelector('.cart-close');

        addToCartBtn.addEventListener('click', function() {
            modalOverlay.classList.add('show');
            document.body.style.overflow = 'hidden';
        });

        cartClose.addEventListener('click', function() {
            modalOverlay.classList.remove('show');
            document.body.style.overflow = 'auto';
        });

        modalOverlay.addEventListener('click', function(e) {
            if (e.target === modalOverlay) {
                modalOverlay.classList.remove('show');
                document.body.style.overflow = 'auto';
            }
        });
    });
</script>

