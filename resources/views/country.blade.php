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
    @vite(['resources/css/country.css'])

</head>

<body>
    <div class="container">
        <div class="header">
            <div class="header-content">
                <div class="header-title">KFC</div>
                <div class="header-subtitle">Các quốc gia được áp dụng</div>
            </div>
            <div onclick="window.location.href='/detail'" class="header-icon">
                <div class="icon-container">
                    <img src="./images/close.svg" alt="" class="close-icon">
                </div>
            </div>
        </div>

        <div class="search-container">
            <div class="search-box">
                <img src="./images/search-icon.svg" alt="">
                <div class="search-placeholder">Search your country</div>
            </div>
        </div>

        <div class="country-list">
            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/1.svg" alt="">
                </div>
                <div class="country-name">Việt Nam</div>
            </div>

            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/2.svg" alt="">
                </div>
                <div class="country-name">English</div>
            </div>

            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/3.svg" alt="">
                </div>
                <div class="country-name">Deutsch</div>
            </div>

            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/4.svg" alt="">
                </div>
                <div class="country-name">India</div>
            </div>

            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/5.svg" alt="">
                </div>
                <div class="country-name">Korea</div>
            </div>

            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/6.svg" alt="">
                </div>
                <div class="country-name">Japan</div>
            </div>

            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/7.svg" alt="">
                </div>
                <div class="country-name">ThaiLand</div>
            </div>

            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/8.svg" alt="">
                </div>
                <div class="country-name">Indonesia</div>
            </div>

            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/9.svg" alt="">
                </div>
                <div class="country-name">Singapor</div>
            </div>

            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/1.svg" alt="">
                </div>
                <div class="country-name">Français</div>
            </div>

            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/1.svg" alt="">
                </div>
                <div class="country-name">Nederlands</div>
            </div>

            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/1.svg" alt="">
                </div>
                <div class="country-name">Ελληνικά</div>
            </div>

            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/1.svg" alt="">
                </div>
                <div class="country-name">Turk</div>
            </div>

            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/1.svg" alt="">
                </div>
                <div class="country-name">China</div>
            </div>

            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/1.svg" alt="">
                </div>
                <div class="country-name">Tailwan</div>
            </div>

            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/1.svg" alt="">
                </div>
                <div class="country-name">Svenska</div>
            </div>
        </div>
    </div>
</body>

</html>
