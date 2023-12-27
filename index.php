<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/iconsfont.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row first-section">
        <div class="left-sector col-6">
            <h1 class="title">
                Заинтересовал объект?<br> Нужна консультация?<br>Бесплатная консультаци по номеру<br><label
                    class="label">89040662832</label>
            </h1>
        </div>

        <div class="right-sector col-6">
            <img class="col-6" src="img/logo-lider.png" style="width: 600px">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="title-list">Список квартир</h2>
        </div>
    </div>

    <div class="row filter">
        <div class="col-2">
            <p>Тип недвижимости</p>
            <div class="dropdown">
                <button class="dropdown__button">Все</button>
                <ul class="dropdown__list">
                    <li class="dropdown__list-item" data-value="plot">Участок</li>
                    <li class="dropdown__list-item" data-value="apartment">Квартира</li>
                    <li class="dropdown__list-item" data-value="house">Дом</li>
                    <li class="dropdown__list-item" data-value="dormitory">Комерческая</li>
                    <li class="dropdown__list-item" data-value="dormitory">Общежитие</li>
                    <li class="dropdown__list-item" data-value="dormitory">Гараж</li>
                </ul>
                <input type="text" name="select-category" value="" class="dropdown__input-hidden">
            </div>
        </div>
        <div class="col-2">
            <p>Количество комнат</p>
            <div class="dropdown">
                <button class="dropdown__button">Все</button>
                <ul class="dropdown__list">
                    <li class="dropdown__list-item" data-value="plot">1 комната</li>
                    <li class="dropdown__list-item" data-value="apartment">2 комнаты</li>
                    <li class="dropdown__list-item" data-value="house">3 комнаты</li>
                    <li class="dropdown__list-item" data-value="dormitory">4 комнаты</li>
                </ul>
                <input type="text" name="select-category" value="" class="dropdown__input-hidden">
            </div>
        </div>
        <div class="col-2">
            <p class="title-filter">Район</p><br>
            <div class="dropdown">
                <button class="dropdown__button">Все</button>
                <ul class="dropdown__list">
                    <li class="dropdown__list-item" data-value="plot">Антоповка</li>
                    <li class="dropdown__list-item" data-value="apartment">Проволочное</li>
                    <li class="dropdown__list-item" data-value="house">Юбилейный</li>
                    <li class="dropdown__list-item" data-value="dormitory">Гоголя</li>
                    <li class="dropdown__list-item" data-value="dormitory">Грязная</li>
                    <li class="dropdown__list-item" data-value="dormitory">Шиморское</li>
                </ul>
                <input type="text" name="select-category" value="" class="dropdown__input-hidden">
            </div>
        </div>
        <div class="col-2">
            <p class="title-filter">Этаж</p><br>
            <div class="dropdown">
                <button class="dropdown__button">5</button>
                <ul class="dropdown__list">
                    <li class="dropdown__list-item" data-value="plot">Участок</li>
                    <li class="dropdown__list-item" data-value="apartment">Квартира</li>
                    <li class="dropdown__list-item" data-value="house">Дом</li>
                    <li class="dropdown__list-item" data-value="dormitory">Общежитие</li>
                </ul>
                <input type="text" name="select-category" value="" class="dropdown__input-hidden">
            </div>
        </div>
        <div class="col-2">
            <p class="title-filter">Ремонт</p>
            <br>
            <div class="dropdown">
                <button class="dropdown__button">Все</button>
                <ul class="dropdown__list">
                    <li class="dropdown__list-item" data-value="plot">Без ремонта</li>
                    <li class="dropdown__list-item" data-value="apartment">Евроремонт</li>
                    <li class="dropdown__list-item" data-value="house">Дизайнерский ремонт</li>
                    <li class="dropdown__list-item" data-value="dormitory">Косметический ремонт</li>
                </ul>
                <input type="text" name="select-category" value="" class="dropdown__input-hidden">
            </div>
        </div>
        <div class="col-2">
            <p class="title-filter">Цена</p>
            <br>
            <div class="dropdown">
                <button class="dropdown__button">от 1000000 до 200000</button>
                <ul class="dropdown__list">
                    <li class="dropdown__list-item" data-value="plot">Участок</li>
                    <li class="dropdown__list-item" data-value="apartment">Квартира</li>
                    <li class="dropdown__list-item" data-value="house">Дом</li>
                    <li class="dropdown__list-item" data-value="dormitory">Общежитие</li>
                </ul>
                <input type="text" name="select-category" value="" class="dropdown__input-hidden">
            </div>
        </div>

    </div>
    <div class="row dask">
        <div class="col-4">

            <a href="/pages/detailsForFlat.html" class="announcement-link">
                <div class="announcement">

                    <img class="img-house" src="img/exampleHouse.jpg" alt="house">

                    <p class="announcement__text ">
                        <b>63 000 000 &#8381</b><br>
                        Дом 330м<sup>2</sup>&nbsp;&nbsp;&nbsp;&nbsp; Участок 41 сотка
                        <br>
                        Выкса, посёлок Шиморское, дом 1
                    </p>
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo '<a href="pages/updateFlat.html">
                    <div class="button-for-admin"><i class="fa-regular fa-pen-to-square"></i></div>
            </a>
            <a href="#">
                <div class="button-for-admin"><i class="fa-solid fa-trash-can"></i></div>
            </a>';
            }
            ?>

        </div>
        </a>
    </div>
    <div class="col-4">
        <div class="announcement">
            <img class="img-house" src="img/vertical-shot-of-a-white-building-under-the-clear-sky.jpg" alt="house">
            <p class="announcement__text">
                <b>7 900 000 &#8381</b><br>
                40,5м<sup>2</sup>&nbsp;&nbsp;&nbsp;2-комнатная квартира&nbsp;&nbsp;&nbsp;4/5 этаж
                <br>
                Выкса, микрарайон Юбилейный, дом 20
            </p>
        </div>
    </div>
    <div class="col-4">
        <div class="announcement">
            <img class="img-house" src="img/ucastok.webp" alt="house">
            <p class="announcement__text">
                <b>800000 &#8381</b><br>
                Участок 6 сотка
                <br>
                Выкса, посёлок Проволочное
            </p>
        </div>
    </div>
    <div class="col-4">
        <div class="announcement">
            <img class="img-house" src="img/obhaga.jpeg" alt="house">
            <p class="announcement__text">
                <b>2 200 000 &#8381</b><br>
                22м<sup>2</sup>&nbsp;&nbsp;&nbsp;1 комната&nbsp;&nbsp;&nbsp;3/5 этаж
                <br>
                Выкса, микрарайон Гоголя, дом 6
            </p>
        </div>
    </div>
    <div class="col-4">
        <div class="announcement">
            <img class="img-house" src="img/garaj.jpeg" alt="house">
            <p class="announcement__text">
                <b>200000 &#8381</b><br>
                10м<sup>2</sup>&nbsp;&nbsp;&nbsp;&nbsp; Гараж
                <br>
                Выкса, посёлок Проволочное
            </p>
        </div>
    </div>
    <div class="col-4">
        <div class="announcement">
            <img class="img-house" src="img/enterprice.jpeg" alt="house">
            <p class="announcement__text">
                <b>19 000 000 &#8381</b><br>
                92,2м<sup>2</sup>&nbsp;&nbsp;&nbsp;Офис&nbsp;&nbsp;&nbsp; 2/8 этаж
                <br>
                Выкса, микрорайон Антоповка, дом 90
            </p>
        </div>
    </div>
</div>
</div>
<footer class="container">
    <div class="col-12">
        <a href="/pages/authorization.html">Вход для риелторов</a>
    </div>
</footer>

<script src="js/selector.js"></script>
</body>
</html>
































