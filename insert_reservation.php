<?php
    $stdid = $_POST["std_id"];
    echo $type = $_POST["type"];
    $name = $_POST["name_single"];
    $surname = $_POST["surname_single"];
    $email = $_POST["email"];
    $yearstd = $_POST["yearstd"];
    $tableid = $_POST["tableid"];

    include("connect.php");

    $bookedquery = "insert into booked value (null,'$tableid','$type')";
    if(mysqli_query($connect,$bookedquery))
    {
        $idbooked = "select * from booked";
        $querybooked = mysqli_query($connect,$idbooked);
        $result = mysqli_fetch_array($querybooked,MYSQLI_ASSOC);
        $idbookquery = $result["book_id"];

        $studentquery = "insert into student value ('$stdid','$name','$surname','$email','$yearstd','$idbookquery')";
        $tablequery = "insert into tables value ('$tableid','notfull')";
        if(mysqli_query($connect, $tablequery) && mysqli_query($connect,$studentquery))
        {
            echo "complete";
        }
        else
        {
            echo mysqli_error($connect);
        }
    }
    else
    {
        echo "error";
        echo mysqli_error($connect);
    }
    mysqli_close($connect);
?>