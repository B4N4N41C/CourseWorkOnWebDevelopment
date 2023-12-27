<?php
require 'db.php';
$id = $_GET['id'];
$filePathInDatabase = '';
$ff = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDirectory = "../uploads/"; // Директория для сохранения загруженных файлов
    $targetFile = $targetDirectory . basename($_FILES["photo"]["name"]); // Полный путь к файлу

    // Сохранение файла на сервере
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
        // Файл успешно сохранен на сервере
        // Сохранение пути к файлу в базе данных
        $filePathInDatabase = $targetFile; // Пример: сохранение пути к файлу в базе данных
        $ff = true;
        //Далее выполните код для сохранения $filePathInDatabase в вашей базе данных
    } else {
        // Обработка ошибки сохранения файла
        echo "Sorry, there was an error uploading your file.";
    }
    $price = trim($_POST['price']);
    $sqare = trim($_POST['sqare']);
    $room = trim($_POST['room']);
    $floor = trim($_POST['floor']);
    $allFloor = trim($_POST['allFloor']);
    $adres = trim($_POST['adres']);
    $discription = trim($_POST['discription']);



    if ($price === '' || $sqare === '' || $room === '' || $floor === '' || $allFloor === '' || $adres === '' || $discription === '') {
        $errorMessage = 'Не все поля заполнены';
    } else {
        if(!$ff){
            $post = [
                'Floor' => $floor,
                'Price' => $price,
                'Square' => $sqare,
                'Room' => $room,
                'AllFloor' => $allFloor,
                'Adres' => $adres,
                'Discription' => $discription,
            ];
        } else {
            $post = [
                'Floor' => $floor,
                'Price' => $price,
                'Square' => $sqare,
                'Room' => $room,
                'AllFloor' => $allFloor,
                'Adres' => $adres,
                'Discription' => $discription,
                'Photo' => $filePathInDatabase
            ];
        }
        $isSubmit = true;
        update('apartamens', $id, $post);
    }
    header('Location: ../pages/addFlat.php');
}

header('Location: ../index.php');