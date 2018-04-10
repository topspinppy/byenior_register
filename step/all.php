
<?php
    if(isset($_GET["id"]))
    {
        $id = $_GET['id'];
?>
    <?php 
        include("../header.php");
    ?>
        <?php
            if(isset($_POST["id_student"]))
            {
                $idstudent = @$_POST["id_student"];
                $name_student = @$_POST["name_student"];
                $surname_student = @$_POST["surname_student"];
                $year_student = @$_POST["year_student"];
                $email_student = @$_POST["email_student"];

                header( "location: result.php?type=single&tableid=$id&stdid=$idstudent&name=$name_student&surname=$surname_student&year=$year_student&email=$email_student" );
            }
        ?>
            <div class="container" style="padding:50px;">
                <div class="card">
                <div class="card-header">
                    โต๊ะที่ <?php echo $_GET["id"]; ?> | ประเภทเหมา 
                </div>
                <div class="card-body">
                    <form method="post" id="insert_form">
                        <div class="table-repsonsive">
                            <span id="error"></span>
                            <table class="table" id="item_table">
                                <tr>
                                    <th>Enter Item Name</th>
                                    <th>Enter Quantity</th>
                                    <th>Select Unit</th>
                                    <th><button onclick="addbox()" class="btn btn-success btn-sm add">+</button></th>
                                </tr>
                            </table>
                            <div align="center">
                                <input type="submit" name="submit" class="btn btn-info" value="Insert" />
                            </div>
                        </div>
                    </form>
                </div> 
                </div>
            </div>

            <script>
                function addbox()
                {
                        var html = '';
                        html += '<tr>';
                        html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
                        html += '<td><input type="text" name="item_quantity[]" class="form-control item_quantity" /></td>';
                        html += '<td><select name="item_unit[]" class="form-control item_unit"><option value="">Select Unit</option>/select></td>';
                        html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
                        document.getElementById('insert_form').appendChild(html);
                }
            </script>
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