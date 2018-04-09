<?php
    include("../../connect.php");
    $bookid = $_POST["bookid"];
    $idbooked = "select * from student JOIN booked USING (BOOK_ID) WHERE TABLE_ID = '$bookid'";
    $querybooked = mysqli_query($connect,$idbooked);
    while($result = mysqli_fetch_array($querybooked,MYSQLI_ASSOC))
    {
        echo $result["student_name"];
    }
    echo mysqli_error($connect);
?>