<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <?php
        include("connect.php");
    ?>
    <title>Document</title>
    <style media="screen">
  .image{
    width:100%;
    display: box;
    padding: 5%;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .2s ease-in-out;
    transition: .2s ease-in-out;
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
  }
  .image:hover{
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
  }
  .image .tt{
    font-size: 15px;
    color:white;
    top:40px;
    right:3%;
    text-align: center;
    position: absolute;
    width:100%;
  }
  .image .ttt{
    font-size: 20px;
    color:white;
    top:60px;
    right:3%;
    text-align: center;
    position: absolute;
    width:100%;
  }
  @media screen and (max-width:360px){
    .image .tt{
      text-indent: 100%;
      white-space: nowrap;
      overflow: hidden;
    }
    .image .ttt{
      font-size: 0.5em;
      top:30%;
      right:0%;
      color:white;
    }
  }
  @media screen and (min-width: 361px) and (max-width: 400px){
    .image .tt{
      text-indent: 100%;
      white-space: nowrap;
      overflow: hidden;
    }
    .image .ttt{
      font-size: 0.6em;
      top:30%;
      right:0%;
      color:white;
    }
  }
  @media screen and (min-width: 401px) and (max-width: 460px){
    .image .tt{
      text-indent: 100%;
      white-space: nowrap;
      overflow: hidden;
    }
    .image .ttt{
      font-size: 0.7em;
      top:30%;
      right:0%;
      color:white;
    }
  }
  @media screen and (min-width: 461px) and (max-width: 570px){
    .image .tt{
      text-indent: 100%;
      white-space: nowrap;
      overflow: hidden;
    }
    .image .ttt{
      font-size: 0.9em;
      top:30%;
      right:0%;
      color:white;
    }
  }
  @media screen and (min-width: 571px) and (max-width: 640px){
    .image .tt{
      font-size: 0.5em;
      top:30%;
      right:0%;
      color:white;
    }
    .image .ttt{
      font-size: 0.9em;
      top:45%;
      right:0%;
      color:white;
    }
  }
  /* #### Tablets Portrait or Landscape #### */
  @media screen and (min-width: 641px) and (max-width: 1200px){
    .image .tt{
      font-size: 0.7em;
      top:30%;
      right:0%;
      color:white;
    }
    .image .ttt{
      font-size: 1em;
      top:45%;
      right:0%;
      color:white;
    }
  }
  </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            
            GOODBYE SENIOR IT'16
        </a>
    </nav>
    <div class="container">
        <br>
        <div class="card bg-faded">
            <div class="card-block" style="padding:20px;">
                <strong>คำชี้แจง</strong>
                <br>
                - บัตรเหมาจองโต๊ะนั้นๆ โต๊ะนั่งได้ทั้งหมด 10 คน ราคา 4,700 บาท (ตกคนละ 480 บาท) โดยจะต้องจ่ายเต็มจำนวน<br>
                - โต๊ะรวม จะเป็นโต๊ะที่นั่งกับคนอื่น ราคา 500 บาท<br>
                - โดยหากโต๊ะใดในระบบถูกจองด้วยโต๊ะรวม แล้วจะไม่มีสิทธิ์เปลี่ยนสถานะเป็นจองโต๊ะเหมา ให้เลือกโต๊ะที่ว่างเท่านั้น<br>
                <span style="color:red">
                * หากชำระเงินแล้วให้พิมพ์บัตรออกจากระบบ นำไปยื่นเพื่อเข้างานหน้าห้องพวงแสด ตั้งแต่เวลา 17.00 น. เป็นต้นไป<br>
                </span>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="table-responsive" style="border:0px;">
            <table width="100%">
                <tbody>
                    <tr>                
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/success.png" class="img-responsive" name="button">
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">1</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/success.png" class="img-responsive" name="button" >
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">2</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/success.png" class="img-responsive" name="button">
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">3</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            blank
                        </td>
                        <td width="12.5%">
                            blank
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/success.png" class="img-responsive" name="button">
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">4</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/success.png" class="img-responsive" name="button">
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">5</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/success.png" class="img-responsive" name="button">
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">6</span>
                                </figure>
                            </div>
                        </td>
                    </tr>
                    
                    <?php
                    $k = 7;
                    for($i = 0 ; $i < 3 ; $i++)
                    {
                    ?>
                    <tr>
                        <?php
                        for($j = 0 ; $j < 6 ; $j++)
                        {
                        ?>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                <?php
                                        $sql7 = "select * from tables where table_id='$k'";
                                        $sqlquery7 = mysqli_query($connect,$sql7);
                                        $result7 = mysqli_fetch_array($sqlquery7,MYSQLI_ASSOC);
                                        if($result7["table_status"] == "notempty")
                                        {
                                    ?>
                                            <?php
                                                $sqlcount7 = "SELECT count(*) as tablecount FROM `booked` WHERE `table_id` = $k";
                                                $sqlquerycount7 = mysqli_query($connect,$sqlcount7);
                                                $resultcount7 = mysqli_fetch_array($sqlquerycount7,MYSQLI_ASSOC);
                                                $count = $resultcount7["tablecount"];

                                                if($count == "10")
                                                {
                                            ?>
                                                    <input type="image" src="img/table/success.png" class="img-responsive" name="button">  
                                            <?php
                                                }
                                                else
                                                {
                                            ?>
                                                    <a href="step/single.php?id=<?php echo $k; ?>">
                                                        <input type="image" src="img/table/not_full.png" class="img-responsive" name="button">
                                                    </a>
                                            <?php
                                                }
                                            ?>
                                    <?php
                                        }
                                        else if($result7["table_status"] == "full")
                                        {
                                    ?>   
                                            <input type="image" src="img/table/success.png" class="img-responsive" name="button">  
                                    <?php
                                        }
                                        else
                                        {
                                    ?> 
                                            <a href="step/index.php?id=<?php echo $k; ?>">
                                                <input type="image" src="img/table/empty.png" class="img-responsive" name="button">
                                            </a>
                                    <?php
                                        }
                                    ?>
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;"><?php echo $k; ?></span>
                                </figure>
                            </div>
                        </td>
                       
                        <?php
                            
                            if($j == "2")
                            {
                        ?>
                                <td width="12.5%">
                                    blank
                                </td>
                                <td width="12.5%">
                                    blank
                                </td>
                        <?php
                            }
                            $k++;
                        }
                        ?>
                        <br>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
    </div>




    <script>

    </script>
    
</body>
</html>