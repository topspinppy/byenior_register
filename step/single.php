
<?php
    if(isset($_GET["id"]))
    {
        $id = $_GET['id'];
?>
    <?php 
        include("../header.php");
    ?>
        <?php
            if(isset($_POST["table"]))
            {
                
                if($_POST["table"] == "single")
                {
                    header( "location: single.php?type=single&id=$id" );
                }
                else if($_POST["table"] == "all")
                {
                    header( "location: all.php?type=all&id=$id");
                }
            }
        ?>
            <div class="container" style="padding:50px;">
                <div class="card">
                <div class="card-header">
                    โต๊ะที่ <?php echo $_GET["id"]; ?> | ประเภทเดี่ยว
                </div>
                <div class="card-body">
                    <form action="index.php?id=<?php echo $_GET['id'];?>" method="post">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">รหัสประจำตัวนักศึกษา</label>
                                <input type="number" class="form-control" name="id_student" id="exampleFormControlInput1" placeholder="ตัวอย่าง : 5806021600000" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">ชื่อ</label>
                                <input type="text" class="form-control" name="name_student" id="exampleFormControlInput1" placeholder="ตัวอย่าง : นาย A" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">นามสกุล</label>
                                <input type="text" class="form-control" name="surname_student" id="exampleFormControlInput1" placeholder="ตัวอย่าง : B" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">ชั้นปี</label>
                                <select multiple class="form-control" id="exampleFormControlSelect2" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">อีเมล์</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                            </div>
                        <button type="submit" class="btn btn-outline-success">ถัดไป</button>
                    </form>
                    <hr>
                    สมาชิกโต๊ะล่าสุด คุณเป็นคนที่ 

                </div> 
                </div>
            </div>
<?php
    }
    else
    {
?>
        <script>
            window.location="../reservation.php?error=1";
        </script>
<?php
    }
?>