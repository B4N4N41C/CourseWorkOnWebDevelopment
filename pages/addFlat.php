<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/iconsfont.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Title</title>
</head>
<body>
<a href="../index.php"><div class="back-btn"><i class="fa-solid fa-arrow-left"></i></div></a>
<div class="container">
    <div class="row">
        <div class="col-12 input-section">
            <?php
            require '../php/db.php';
            $id = $_GET['id'] ?? null;

            if ($id) {
            $flot = selectOne('apartamens', ['Id' => $id]);
            echo '<form action="../php/update.php?id=' . $id . '" method="post" enctype="multipart/form-data">';
                echo '<input class="input-add" value="' . $flot['Photo'] . '" name="photo" type="file"><br>';
                echo '<input class="input-add" value="' . $flot['Price'] . '" name="price" type="text" placeholder="Цена"><br>';
                echo '<input class="input-add" value="' . $flot['Square'] . '" name="sqare" type="text" placeholder="Площадь"><br>';
                echo '<input class="input-add" value="' . $flot['Room'] . '" name="room" type="text" placeholder="Сколько комнат"><br>';
                echo '<input class="input-add" value="' . $flot['Floor'] . '" name="floor" type="text" placeholder="Этаж"><br>';
                echo '<input class="input-add" value="' . $flot['AllFloor'] . '" name="allFloor" type="text" placeholder="Сколько всего этажей"><br>';
                echo '<input class="input-add" value="' . $flot['Adres'] . '" name="adres" type="text" placeholder="Адрес"><br>';
                echo '<input class="input-add" value="' . $flot['Discription'] . '" name="discription" type="text" placeholder="Описание"><br>';
            } else {
            echo '<form action="../php/add.php" method="post" enctype="multipart/form-data">';
                echo '<input class="input-add" name="photo" type="file"><br>';
                echo '<input class="input-add" name="price" type="text" placeholder="Цена"><br>';
                echo '<input class="input-add" name="sqare" type="text" placeholder="Площадь"><br>';
                echo '<input class="input-add" name="room" type="text" placeholder="Сколько комнат"><br>';
                echo '<input class="input-add" name="floor" type="text" placeholder="Этаж"><br>';
                echo '<input class="input-add" name="allFloor" type="text" placeholder="Сколько всего этажей"><br>';
                echo '<input class="input-add" name="adres" type="text" placeholder="Адрес"><br>';
                echo '<input class="input-add" name="discription" type="text" placeholder="Описание"><br>';
            }
            echo '<input type="submit">';
            echo '</form>';
            ?>

        </div>
    </div>
</div>
</body>
</html>