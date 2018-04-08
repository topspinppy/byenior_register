<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">


<link href="css/step.css" rel="stylesheet"/>


<div class="container">
        <form action="save.php" method="post">
            <div class="wizards">
                <div class="progressbar">
                    <div class="progress-line" data-now-value="12.11" data-number-of-steps="3" style="width: 12.11%;"></div> <!-- 19.66% -->
                </div>
                <div class="form-wizard active">
                    <div class="wizard-icon"><i class="fa fa-file-text-o"></i></div>
                    <p>ประเภท</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-user"></i></div>
                    <p>จองโต๊ะเดี่ยว</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-globe"></i></div>
                    <p>จองโต๊ะเหมา</p>
                </div>
                <div class="form-wizard">
                    <div class="wizard-icon"><i class="fa fa-check-circle"></i></div>
                    <p>Finish</p>
                </div>
            </div>
            <fieldset>
                 <legend>กรุณาเลือกประเภทโต๊ะที่ต้องการ</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="opttypetable" id="opttypetable1" value="1">
                        โต๊ะเดี่ยว 
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="opttypetable" id="opttypetable2" value="2">
                        โต๊ะเหมา
                    </label>
                </div>
                <br>
                <br>
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="yes"> ยืนยันการเลือก
                </label>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset>
                <h4>- กรุณาใส่ข้อมูลประจำตัว -</h4>
                <div class="form-group">
                    <label>รหัสประจำตัวนักศึกษา</label>
                    <input type="text" name="id" id="#idsingle" class="form-control" placeholder="Nama anda"/>
                </div>
                <div class="form-group">
                    <label>ชื่อ</label>
                    <input type="text" name="name" id="#namesingle" class="form-control" placeholder="Nama anda"/>
                </div>
                <div class="form-group">
                    <label>นามสกุล</label>
                    <input type="text" name="surname" id="#surnamesingle" class="form-control" placeholder="Surel anda"/>
                </div>
                <div class="form-group">
                    <label>อีเมล์</label>
                    <input type="email" name="email" id="#emailsingle" class="form-control" placeholder="Nomor telpon anda"/>
                </div>
                <div class="form-group">
                    <label>ชั้นปี</label>
                    <select id="year" class="form-control" name="year">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset>
                <h4>- กรุณาใส่ข้อมูลประจำตัวและข้อมูลสมาชิกโต๊ะ -</h4>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Nama pengguna"/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Kata sandi"/>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset>
                <div class="jumbotron text-center">
                <h1>Please click submit button to save your data</h1>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="submit" name="save" class="btn btn-primary btn-submit">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>