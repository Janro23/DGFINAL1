<?php
session_start();
?>
<html>
<style>
    
body {  
background-size: 100% 100%;
background-position: 40px right;
background-repeat: no-repeat;  
background-color: #f1f2f7;
}

.DG {
overflow: hidden;
background-color: #93C572;
height: 9.8%;
width: 200px;
position: fixed;
z-index: 2;
top: 0;
left: 0px;
}

.topnav {
overflow: hidden;
background-color: white;
height: 9.8%;
width: 100%;
position: fixed;
z-index: 1;
top: 0;
left: 0;
}
    
.topnav a img {
width: 19px;
height: 19px;
margin-right: 2px;
margin-left: -20px;
vertical-align: middle;
}

.topnav a {
float: right;
color: #69b864;
text-align: right;
padding: 21px 20px;
 text-decoration: none;
font-size: 16px;
display: inline-block;
line-height: -2.5;
}


.topnav a:hover {
border: 1px solid #f44336;
padding: 21px 30px;
height: 19px;
background: #f44336;
color: white;
z-index: 99;
transition: 0.5s;
}

.topnav a.active {
background-color: #000000;
color: white;
}
    
.sidenav {
height: 100%;
width: 200px;
position: fixed;
z-index: 1;
top: 63px;
left: 0;
background-color: #272727;
letter-spacing: 1.5px;
text-shadow: 1px 1px 3px rgba(0, 0, 0, 4.7);
overflow-x: hidden;
}

.sidenav a 
{
padding: 10px 10px 10px 32px;
text-decoration: none;
background-color: #272727;
font-size: 14px;
color:#aeb2b7 ;
letter-spacing: 1.5px;
text-shadow: 1px 1px 3px rgba(0, 0, 0, 4.7);
display: block;
}
    
.sidenav a img {
width: 19px; 
height: 19px;
margin-right: 2px;
margin-left: -20px;
}
    
.sidenav a:hover {
background-color: #35404d;
coLor: #efefef;
}

.sidenav a.active {
  background-color: #303030;
  color: white;
}

.container {
width: 55%;
margin: 10px;
padding: 10px;
text-align: justify;
border: 1px solid #ccc;
margin-left: 200px;
margin-top: 120px;
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;  
color: white;
}

.logocontainer {
position: fixed;
top: 70px;
left: 940px;
}
    
.logocontainer img {
width: 90%;
height: auto;
}
  
.ads {
position: fixed;
top: 330px;
left: 10px;
z-index:99;
}
    
.ads img {
width: 110%;
height: auto;
}
    
.titleheader 
{
position: absolute;
top: 50px;
left: 620px;
}

.power img {
width: 60%;
height: auto;
}

.power {
width: 15%;
height: 30%;
padding: 15px;
backdrop-filter: blur(5px) brightness(1.2);
background-color: rgba(255, 255, 255, 0.2);
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
color: white;
text-align: center;
position: absolute;
top: 360px; 
left: 970px;
}
    
.contents {
position: fixed;
width: 28%;
height: 20%;
padding : 20px;
backdrop-filter: blur(5px) brightness(1.2);
background-color: rgba(255, 255, 255, 0.2);
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
color: black;
text-align: center; 
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
border-radius: 8px;
top: 48%; 
left: 57%;
transform: translate(-50%, -50%);    
}

.button {
background-color: #4CAF50;
border: none;
color: white;
padding: 8px 15px;
text-decoration: none;
display: inline-block;
font-size: 16px;
border-radius: 8px;
cursor: pointer;
margin: 4px 2px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); 
}

.button:hover {
  background-color: #cccccc;
coLor: #000;
}
    
.button-container {
    text-align: center;
}

.ads {
  position: fixed;
  top: 330px;
  left: 10px;
  z-index:99;
}
    
.ads img {
  width: 110%;
  height: auto;
}  
    
 .forgotpass a {
    text-decoration: none;
    color: black;
}
    
</style>
<head>
<title>Forgot Password Page</title>
</head>

<body>
    
<!--<div class="ads">
<a href="https://www.leagueoflegends.com/en-ph/" target="_blank"><img src="Assets/ads.png" alt="ads"></a>
</div>--> 
    
<div class="titleheader">
  <h1 style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;font-size: 30px; font-weight: bold; color: #4F4F4F">FORGOT PASSWORD</h1>
</div>
    
    

<div class="DG">
<img src="Assets/DGLOGO1.png" width="190px" height="auto" style="margin-left: 5px; margin-top: 9px;">
</div>

<div class="topnav">
  <a i class="fa fa-power-off" href="index.php" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;  font-size: 16px; font-weight: bold;"></i><img src="Assets/navicons/power.png" alt="Power Button">  Logout</a>
</div> 
    
<form action="OfficeSpecialistForgotPasswordPage.php" method="post">
<div align="center">
<b>Office Specialist Account Creation Page</b>
</div>

</head>
<body>

<div class="sidenav">
  <a href="OfficeSpecialistHomePage.php" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; " ><img src="Assets/navicons/home1.png" alt="Home Icon"> Home</a>
    
  <a href="OfficeSpecialistRequestPage.php" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; " ><img src="Assets/navicons/queue1.png" alt="Request Icon"> Queue</a>
  <a href="OfficeSpecialistApprovedRequestPage.php" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; " ><img src="Assets/navicons/request1.png" alt="Request Icon"> Approved Requests</a>
  <a href="OfficeSpecialistOperationReportsPage.php" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; " ><img src="Assets/navicons/operation1.png" alt="Operation Report Icon"> Catalogs</a>
    
  <a href="OfficeSpecialistRecordsPage.php" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; " ><img src="Assets/navicons/report1.png" alt="Records Icon"> Records</a>
    
  <a href="OfficeSpecialistCreationPage.php" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; " ><img src="Assets/navicons/acc1.png" alt="Account creation Icon"> Acc & Dep Creation</a>
   
  <a class="active" href="OfficeSpecialistForgotPasswordPage.php" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; " ><img src="Assets/navicons/activepass.png" alt="Account creation Icon"> Forgot Password</a>  
  
  <a href="table2.php" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;" ><img src="Assets/navicons/inventory1.png" alt="Account creation Icon"> Inventory</a>    
</div>
        
<form action="ForgotPasswordPage.php" method="post">

<div class="contents">

 <br>
          
       

<a>Email:</a>
<input type="email" size="35" maxlength="30" name="email" required/>

<br>

    <br>
    
<div class="buttons">
<input type="submit" name="submit" value="FORGOT PASSWORD" class="button" >
<input type="reset" name="clear" value="Clear" class="button">
</div>
<br>


<?php
//if Submit
if (isset($_POST['submit']))
{
  //Connect to Database
  $username ="root";
  $password="";
  $database="lycorisdb";
  $conn = mysqli_connect("localhost",$username,$password,$database) or die ("Unable to select database"); 
  
  //Get inputted user and pass
  $email = $_POST['email'];
  $_SESSION["email"] = $email;
  
  //fetch database account for department
  $query = "SELECT email FROM lyco_account WHERE email ='$email'";
  $result = @mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
    
  //Check if inputted was empty
  if(!empty($_POST['email']))
  {
    if($row)
    {
        echo'<script> window.location="NewPasswordPage.php"; </script> ';
       
    }
    else
    {
        //error wrong username or pass
        echo '<script>  alert("The Email You Entered was Incorrect."); </script> ';//add
    }
  }
  mysqli_close($conn);
}
?>

</div>
</form>
</body>
</html>

