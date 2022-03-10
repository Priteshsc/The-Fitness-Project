<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="bootstrap.min.js.download"></script>
<script src="jquery.min.js.download"></script>
<title>Admission Form</title>
<style type="text/css">
.container{
    padding: 3%;
}
.register{
    background: -webkit-linear-gradient(left,#d0d7d9, #00c6ff);
    border-radius: 11px;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 75%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}

.register-right{
    background: #f8f9fa;
    border-radius: 5px;
  
}

@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}

.btnRegister{
    float: right;
    margin-top: 10%;
     margin-bottom: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
table{

    text-align: left;
    margin-top: 15px;
}
h5{
margin-top:30px;
}
.form-group {
    margin-bottom: 0px !important;
}
.commerce_para {
  color: Black;
  font-family: courier;
  font-size: 160%;
  text-align: center;
  font-weight: bold;
}
.commerce_para2{
  color: Black;
  font-family: arial;
  font-size: 100%;
  text-align: center;
  font-weight: bold;
}
.commerce_para3{
 color: Black;
  font-family: arial;
  font-size: 85%;
  text-align: center;
  font-weight: bold;
}

ol {
  padding-left: 100px; // Or whatever padding your font size needs
}
hr.new4 {
  border: 1px solid #123e75;
}
</style>
</head>
<body class="container">
<div class="container register">
	<form name="adform" action="registration_submit.php" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-3 register-left">
                <img src="The-Fitness-Project.png" alt="image" style="border-radius:10px;">
                <h2 style="color: #0b355e;"><b>Registration Form</b></h2>
            </div>
			<div class="col-md-9 register-right">
			<center><p class="pt-2 fas fa-dumbbell"><b></b></p>
			    <h2 class="alert alert-danger"><b>THE FITNESS PROJECT</b></h2>
				<h6 class="alert alert-info">Anand Complex, Station Road, Varangaon, 425305 Jalgaon.</h6>
                <img class="mySlides w3-animate-top" src="slider.jpeg" width="320px">
                <img class="mySlides w3-animate-top" src="slider2.jpeg" width="320px">
                <!--<img src="slider.jpeg" alt="Girl in a jacket"  />-->
			</center>
                <h3 align="center"><b>GYM ADMISSION FORM</b></h3><br>
				<hr class="new4">
							 
					<div class="row">
					<div class="form-group required col-md-12">
                        <label class="lable"><span class="required"  style="color: red">*</span>First Name</label><br>
                        <input type="text" class="form-control" name="fname" value="" required="">
                    </div>
					<div class="form-group required col-md-12">
                        <br><label class="lable"><span class="required" style="color: red">*</span>Last Name</label>
                        <input type="text" class="form-control" name="lname" value="" required="">
                    </div>
					<div class="form-group required col-md-12">
                        <br><label class="lable"><span class="required" style="color: red">*</span>Phone No</label>
                        <input type="text" class="form-control" name="mobile1" value="" required="">
                    </div>
					<div class="form-group required col-md-12">
                        <br><label class="lable"><span class="required" style="color: red">*</span>Email</label>
                        <input type="text" class="form-control" name="email"  value="" required="">
                    </div>
					<div class="form-group required col-md-12">
                        <br><label class="lable">Residential Address</label>
                        <input type="text" class="form-control" name="address" value="" required="">
                    </div>
					<div class="form-group col-md-12 mt-3">
                        <label class="lable">Gender</label>
                        <input type="text" class="form-control" name="gender" value="" required="">
                    </div>

                   <div class="form-group required col-md-12">
                        <br><label class="lable">Age</label>
                        <input type="text" class="form-control" name="age" value="" required="">
                    </div>
					<div class="form-group required col-md-12">
                        <br><label class="lable">Weight</label>
                        <input type="text" class="form-control" placeholder="50 Pounds or 70kg" name="weight" value="" required="">
                    </div>
                    <div class="form-group required col-md-12">
                        <br><label class="lable">Weight Goal</label>
                        <input type="text" class="form-control" placeholder="50 Pounds or 70kg" name="weight_goal" value="" required="">
                    </div>
                    <div class="form-group required col-md-12">
                        <br><label class="lable">Height</label>
                        <input type="text" class="form-control" name="height" value="" required="">
                    </div>
					<div class="form-group col-md-12 mt-3">
                        <label class="lable">Do you Need a Personal Trainer </label>
                        <input type="text" class="form-control" name="personal"  value="" required="">
                    </div>
                    
                    <div class="form-group required col-md-12">
                        <br><label class="lable">Emergency Contact No</label>
                        <input type="text" class="form-control" name="emergency"  value="" required="">
                    </div>
					<div class="form-group required col-md-12">
                        <br><label class="lable">Relationship with This Person</label>
                        <input type="text" class="form-control" name="relationship"  value="" required="">
                    </div>
															
						<div class="col-md-12">
                            <?php
                                $entrycd=time();
                            ?>
                            <input type="hidden" name="entrycd" value="<?php echo $entrycd;?>">
                            <input type="submit" name="submit" class="btnRegister" value="Submit">
                        </div>
					</div>
			</div>
		</div>
	</form>
</div>
<center> <b>Developed by Pritesh Chuadhari</b></center>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
         myIndex++;
         if (myIndex > x.length) {myIndex = 1}    
         x[myIndex-1].style.display = "block";  
         setTimeout(carousel, 3000);    
        }
        </script>
</body>
</html>