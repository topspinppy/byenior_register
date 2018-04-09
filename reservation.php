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

                    <tr>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <?php
                                    $sql = "SELECT * FROM booktype join (SELECT * FROM `booked` join tables using (table_id)) as a using (booktype_id)";
                                    ?>
                                    <a href="step/index.php?id=7">
                                        <input type="image" src="img/table/empty.png" class="img-responsive" name="button">
                                    </a>
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">7</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/empty.png" class="img-responsive" name="button"  onclick="edit(8);">
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">8</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/empty.png" class="img-responsive" name="button"  onclick="edit(9);">
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">9</span>
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
                                    <input type="image" src="img/table/empty.png" class="img-responsive" name="button"  onclick="edit(10);">
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">10</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/empty.png" class="img-responsive" name="button"  onclick="edit(11);">
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">11</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/empty.png" class="img-responsive" name="button"  onclick="edit(12);">
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">12</span>
                                </figure>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>                
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/empty.png" class="img-responsive" name="button"  onclick="edit(13);">
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">13</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/empty.png" class="img-responsive" name="button"  onclick="edit(14);">
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">14</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/empty.png" class="img-responsive" name="button"  onclick="edit(15);">
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">15</span>
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
                                    <input type="image" src="img/table/empty.png" class="img-responsive" name="button"  onclick="edit(16);">
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">16</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/empty.png" class="img-responsive" name="button"  onclick="edit(17);">
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">17</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/empty.png" class="img-responsive" name="button"  onclick="edit(18);">
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">18</span>
                                </figure>
                            </div>
                        </td>
                    </tr>

                    <tr>                
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/empty.png" class="img-responsive" name="button" >
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">19</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/empty.png" class="img-responsive" name="button" >
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">20</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/empty.png" class="img-responsive" name="button" >
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">21</span>
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
                                    <input type="image" src="img/table/empty.png" class="img-responsive" name="button" >
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">22</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/empty.png" class="img-responsive" value="23" name="button" >
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">23</span>
                                </figure>
                            </div>
                        </td>
                        <td width="12.5%">
                            <div class="image">
                                <figure>
                                    <input type="image" src="img/table/empty.png" class="img-responsive" value="24" name="button" >
                                    <span class="tt" style="pointer-events: none;">โต๊ะที่</span>
                                    <span class="ttt" style="pointer-events: none;">24</span>
                                </figure>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
    </div>




    <script>

    </script>
    
</body>
</html>