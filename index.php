<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cferdinandi.github.io/smooth-scroll/dist/js/smooth-scroll.polyfills.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script>
        var easeInOutQuart = new SmoothScroll('[data-easing="easeInOutQuart"]', {easing: 'easeInOutQuart'});
    </script>
    <title>Document</title>
</head>
<body style="font-family: 'Prompt', sans-serif;">
    <div id="fullpage">
        <div class="section">
            <div class="bgfirstsection">
                <video autoplay muted loop id="myVideo">
                    <source src="video/video.mp4" type="video/mp4">
                </video>
                <div class="container">
                        <h1 class="headerfont">
                            <center class="animated flipInX" style="color: white;">
                                BYENIOR IT16
                            </center>
                        </h1>
                        <h4>
                            <center>
                                <b>
                                    <h4 class="headtext" id="text1" style="color: white;">TONIGHT I WANNA BE</h4>
                                    <h4 class="headtext" id="text2" style="color: white;">"คืนนี้ฉันจะเป็น"</h4>
                                </b>
                            </center>
                        </h1>
                        <br>
                        <center>
                            <div id="introdate" style="display: block; color: white;">
                                <i class="fa fa-calendar"></i>&nbsp;&nbsp;28/4/2018
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-clock-o"></i>&nbsp;&nbsp;17.30-22.00<br>
                                <i class="fa fa-map-marker"></i>&nbsp;&nbsp;PUANGSAD HALL KMUTNB<br><br>
                                <b class="smooth-scroll list-unstyled">
                                    <a data-easing="easeInOutQuart" href="#test1">
                                        <i class="fa fa-angle-down" style="font-size:50px" class="animated infinite bounce"></i>
                                    </a>
                                </b>
                            </div>
                        </center>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="bgsecondsection" id="test1">
                <div class="headsecond">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-2">
                            <center>
                                <img class="img-fluid" src="img/sign-in.png" alt="">
                            </center>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="p-5">
                            <h2 class="display-4">ลงทะเบียนจองโต๊ะ</h2>
                            <h6>เพื่อเข้าร่วมงาน Byenior พี่ IT'16</h6>
                            <a href="reservation.php"><button type="button" class="btn btn-primary btn-lg">คลิกเพื่อเข้าสู่ระบบ</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="bgthirdsection" id="test1">
                <div class="row" style="margin-right:0px; padding-top:40px;">
                        <div class="col-lg-6">
                            <center>
                                <img class="img-fluid" src="img/growth.png" width="50%" style="margin-bottom:5px;" alt="">
                            </center>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <h2 class="display-4 animated bounceInRight">ค้นประวัติการทำรายการ</h2>
                                <h6>กรุณาใส่รหัสประจำตัวนักศึกษาเพื่อตรวจสอบสถานะ</h6>
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
</div>
            </div>
        </div>
    </div>
</body>
</html>