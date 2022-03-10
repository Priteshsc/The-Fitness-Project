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
    background: -webkit-linear-gradient(left, #d0d7d9, #00c6ff);
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
    <form name="adform" action="#" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="The-Fitness-Project.png" alt="image" style="border-radius:10px;">
                <h2 style="color: #0b355e;"><b>Registration Form</b></h2>
            </div>
            <div class="col-md-9 register-right">
            <center><p class="pt-2"><b></b></p>
                <h2 class="alert alert-danger"><b>The Fitness Project</b></h2>
                <h6 class="alert alert-info">Anand Complex, Station Road, Varangaon, 425305 Jalgaon.</h6></center>
                <h5 align="center"><b></b></h5><br>
                <center><a href="export_excel.php"><button type="button" class="btn btn-info">Export Your Excel Data</button></a></center>


        <br><br><br>
        <center><b> Developed by Pritesh Chaudhari<b></center>
</body>
</html>
 