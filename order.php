<?php
include_once('connect.php');

$table = "CREATE TABLE Orders (
order_id int AUTO_INCREMENT COMMENT 'เลขที่ใบสั่งซื้อ',
 order_m_id varchar(5) NOT NULL COMMENT'รหัสสมาชิก',
 order_date varchar(50) NOT NULL COMMENT'วันที่สั่งซื้อ',
 order_time varchar(20) NOT NULL COMMENT'เวลา',
PRIMARY KEY (order_id)
 )";

if($mysqli->query($table) === TRUE){
    echo"สร้างตารางฐานข้อมูลสำเร็จ";
}else {
    echo"ไม่สามารถสร้างตารางฐานข้อมูลได้:".$mysqli->error;
}

$mysqli->close();


?>