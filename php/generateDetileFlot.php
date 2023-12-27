<?php
function generateDetileHTML($row)
{
    $html = '<div class="col-12 slider-photos">';
    $html .= '<div id="carouselExampleIndicators" class="carousel slide">';
    $html .= '<div class="carousel-indicators">';
    $html .= '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
    $html .= '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>';
    $html .= '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>';
    $html .= '</div>';
    $html .= '<div class="carousel-inner">';
    $html .= '<div class="carousel-item active">';
    $html .= '<img src="' . $row['Photo'] . '" class="d-block w-100" alt="11">';
    $html .= '</div>';
    $html .= '<div class="carousel-item">';
    $html .= '<img src="' . $row['Photo'] . '" class="d-block w-100" alt="22">';
    $html .= '</div>';
    $html .= '<div class="carousel-item">';
    $html .= '<img src="' . $row['Photo'] . '" class="d-block w-100" alt="33">';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">';
    $html .= '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
    $html .= '<span class="visually-hidden">Previous</span>';
    $html .= '</button>';
    $html .= '<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">';
    $html .= '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
    $html .= '<span class="visually-hidden">Next</span>';
    $html .= '</button>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '<div class="row main-info">';
    $html .= '<div class="col-6 info-detile">';
    $html .= '<h1 class="title-info">' . $row['Price'] . ' ₽</h1>';
    $html .= '<h5 class="subtitle-info">xxx ₽/м²</h5>';
    $html .= '</div>';
    $html .= '<div class="col-6 info-detile">';
    $html .= '<h1 class="title-info">Адрес</h1>';
    $html .= '<h5 class="subtitle-info">' . $row['Adres'] . '2</h5>';
    $html .= '</div>';
    $html .= '<div class="col-3 info-item">Тип недвижемости <br> <p class="info-text">Квартира</p></div>';
    $html .= '<div class="col-3 info-item">Площадь <br> <p class="info-text">' . $row['Square'] . '</p></div>';
    $html .= '<div class="col-3 info-item">Количество комнат <br> <p class="info-text">' . $row['Room'] . '</p></div>';
    $html .= '<div class="col-3 info-item">Этаж <br><p class="info-text">' . $row['Floor'] . ' из ' . $row['AllFloor'] . '</p></div>';
    $html .= '</div>';
    $html .= '<div class="row detile-discription">';
    $html .= '<div class="col-12 info-detile__discription">';
    $html .= '<h1 class="title-info">Описание</h1>';
    $html .= '</div>';
    $html .= '<div class="col-12 info-detile__discription"><p class="info-text">' . $row['Discription'] . '</p></div>';
    $html .= '</div>';

    return $html;
}























