<?php
    include("../connect.php");
    $type= @$_GET["type"];

    if($type == "single")
    {   
        $stdid = $_GET["stdid"];
        $tableid = $_GET["tableid"];
        $name = $_GET["name"];
        $surname = $_GET["surname"];
        $year = $_GET["year"];
        $email = $_GET["email"];
        $typeid = "1";
        $bookedquery = "insert into booked value (null,'$tableid','$typeid')";
        if(mysqli_query($connect,$bookedquery))
        {
            $idbooked = "select * from booked";
            $querybooked = mysqli_query($connect,$idbooked);
            $result = mysqli_fetch_array($querybooked,MYSQLI_ASSOC);
            $idbookquery = $result["book_id"];

            $studentquery = "insert into student value ('$stdid','$name','$surname','$email','$year','$idbookquery','waitpay')";
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
    }
    else
    {
        
    }
?>