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
        <?php
        require '../php/db.php';
        require '../php/generateDetileFlot.php';
        $id = $_GET['id'];
        $flot = selectOne('apartamens', ['Id' => $id]); // Предполагается, что у вас есть функция selectAll, возвращающая данные из базы
            echo generateDetileHTML($flot);
        ?>
</div>
</body>
<script src="../js/bootstrap.bundle.js"></script>
</html>





































