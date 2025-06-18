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
<?php
$countries = [['img' => '1.svg', 'name' => 'Việt Nam'], ['img' => '2.svg', 'name' => 'English'], ['img' => '3.svg', 'name' => 'Deutsch'], ['img' => '4.svg', 'name' => 'India'], ['img' => '5.svg', 'name' => 'Korea'], ['img' => '6.svg', 'name' => 'Japan'], ['img' => '7.svg', 'name' => 'ThaiLand'], ['img' => '8.svg', 'name' => 'Indonesia'], ['img' => '9.svg', 'name' => 'Singapor'], ['img' => '1.svg', 'name' => 'Français'], ['img' => '1.svg', 'name' => 'Nederlands'], ['img' => '1.svg', 'name' => 'Ελληνικά'], ['img' => '1.svg', 'name' => 'Turk'], ['img' => '1.svg', 'name' => 'China'], ['img' => '1.svg', 'name' => 'Tailwan'], ['img' => '1.svg', 'name' => 'Svenska']];
?>

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
            <?php foreach ($countries as $country): ?>
            <div class="country-item">
                <div class="flag-container">
                    <img src="./images/<?= htmlspecialchars($country['img']) ?>" alt="">
                </div>
                <div class="country-name"><?= htmlspecialchars($country['name']) ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>
