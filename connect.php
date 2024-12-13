<?php

$mysqli = new mysqli("localhost","root","","rachata");

if($mysqli->connect_error){
    die("เชื่อมต่อฐานข้อมูลไม่สำเร็จ".$mysqli->connect_error."\n");
}

?>
