<?php
require 'db.php';
$id = $_GET['id'];
delete('apartamens', $id);
header('Location: ../index.php');