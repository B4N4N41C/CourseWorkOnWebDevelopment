<?php

function generateFlotHTML($row) {
    $html = '<div class="col-4">';
    $html .= '<a href="/pages/detailsForFlat.php?id=' . $row['Id'] . '" class="announcement-link">';
    $html .= '<div class="announcement">';
    $html .= '<img class="img-house" src="' . $row['Photo'] . '" alt="house">';
    $html .= '<p class="announcement__text">';
    $html .= '<b>' . $row['Price'] . '  &#8381</b><br>';
    $html .= $row['Square'] . 'м<sup>2</sup>&nbsp;&nbsp;&nbsp;' . '&nbsp;&nbsp;&nbsp;' . $row['Floor'];
    $html .= '<br>';
    $html .= $row['Adres'];
    $html .= '</p>';
    if (isset($_SESSION['user'])) {
        $html .= '<a href="../pages/addFlat.php?id=' . $row['Id'] . '">';
        $html .= '<div class="button-for-admin"><i class="fa-regular fa-pen-to-square"></i></div>';
        $html .= '</a>';
        $html .= '<a href="#">';
        $html .= '<a href="../php/delete.php?id=' . $row['Id'] . '">';
        $html .= '<div class="button-for-admin"><i class="fa-solid fa-trash-can"></i></div>';
        $html .= '</a>';
        $html .= '</a>';
    }
    $html .= '</div>';
    $html .= '</a>';
    $html .= '</div>';
    return $html;
}




















