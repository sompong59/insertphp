<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
  $conn = new PDO("mysql:host=$servername;dbname=mysql", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "ເຊື່ອມຕໍ່ຖານຂໍ້ມູນສຳເລັດ";
} catch(PDOException $e) {
  echo "ຕິດຕໍ່ຖານຂໍ້ມູນບໍ່ສຳເລັດ: " . $e->getMessage();
}
?>