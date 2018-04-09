<?php
    include("../../connect.php");
    $bookid = $_GET["bookid"];
    $idbooked = "select * from student join booked using (book_id) where book_id = '$id'";
?>