<?php
session_start();
require_once 'db.php'; 

$id = base64_decode($_GET['id']);
$dbcon->query("DELETE FROM logo WHERE id=$id");
$_SESSION['logo_delete'] = 'Амжилттай устгалаа!';
header('location: logo.php');


?>