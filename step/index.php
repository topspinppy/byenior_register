
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
                    โต๊ะที่ <?php echo $_GET["id"]; ?>
                </div>
                <div class="card-body">
                    <form action="index.php?id=<?php echo $_GET['id'];?>" method="post">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">กรุณาเลือกประเภทที่ต้องการจอง</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="table" id="" value="single">
                                <label class="form-check-label" for="exampleRadios1">
                                    จองโต๊ะเดี่ยว (1 คน)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="table" id="" value="all">
                                <label class="form-check-label" for="exampleRadios2">
                                    จองโต๊ะเหมา (10 ที่นั่ง)
                                </label>
                            </div>
                            <button type="submit" class="btn btn-outline-success">ถัดไป</button>

                        </div>
                    
                    </form>
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