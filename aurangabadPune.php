<!DOCTYPE html>
<html>
<head>
	<title>Taxi Aurangabad Pune</title>
	<meta name="heading" content="width=device-width, initial-scale=1.0">
	<style>
  * {
  box-sizing: border-box;
}
  body {
    background-image: url('shiva.jpg');
    
  }
  p, h1{
  	text-align: center;
  }
  h1{
  	color: red;

  }
.submit{
background-color: red;
border:1px solid yellow;
color: yellow;
border-radius: 40px;
padding: 10px;
}
form{
	filter: opacity(80%);
 filter: contrast(200%)
color: yellow;
}
input,select{
color: yellow;
margin: 20px;
border: solid 1px yellow ;
background: red;
padding: 5px; 
border-radius: 25px;
cursor: pointer;
}
.heading {
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation: 
    typing 3.5s steps(40, end),
    blink-caret .75s step-end infinite;
    width: 95%;
  float: center;
}
.main-div{
	background-color: silver;
    filter: opacity(90%);
    font-family: cursive;
    width: 100%;
    padding: 10px;
    margin: 10px; 
    border-radius: 10px;
    width: auto%;
  float: center;
}
input , label{
	text-align: center;
}

.shiva{

}
/* The typing effect */
@keyframes typing {
 from { width: 0; color: red; }
  to { width: 100%; color: black;}
}


/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange; }
}
label{
	font-family: cursive;
}	
</style>
</head>
<body>
<div>
<div class="main-div" ><div class="heading"><h1 name="heading">Welcome to Aurangabad Pune </h1>
	<h1 name="heading"> Passenger section of</h1>
<h1 name="heading">Shiva Tours And Tarvels</h1></div> </div>

<p>Price 600rs Per Person</p>

<form method="POST">
<p>Name:<input type="text" placeholder="Name" name="username" required> <br></p>
<p>Email:<input type="email" placeholder="Email" name="email" ><br></p>
<p>Phone no:<input type="text" placeholder="Phone no." name="pn" required><br> </p>
<p>No of Person:<select name="nop" id="nop">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
</select></p><br>
<p><input type="radio" id="atp" name="service" value="Aurangabad to Pune"> <label for="service">Aurangabad to Pune</label>  <br></p>
<p><input type="radio"  id="pta" name="service" value="Pune to Aurangabad"><label for="service">Pune to Aurangabad</label></p>
<p>Date:<input type="date" placeholder="Arrival Date" name="departured" required><br></p>
<p><input type="submit" class="submit" name="submit" required></p>
</form>
</div>
</body>
</html>
<?php

$username = "root";
$password = "";
$server ='localhost';
$db = 'shivatoursandtravels';

$con = mysqli_connect($server,$username,$password,$db);
if (isset($_POST['submit'])) {
	$name = $_POST['username'];
	$email = $_POST['email'];
	$service = $_POST['service'];
	$pn = $_POST['pn'];
	$nop = $_POST['nop'];
	$dd = $_POST['departured'];

	$insertquery = "INSERT INTO `aurangabadandpune`(`name`, `email`, `aurangabadorpune`, `pn`, `nop`, `dd`) VALUES ($name,$email,$service,$pn,$nop,$dd)";
	
	$res = mysqli_query($con,$insertquery);

	if ($res) {
		?>
		<script>
			alert("You Will Get Call For Verification")
		</script>
		<?php
	}

}

?>
<?php 
$to_email = "labdeshivnath@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: labdeaditya345@gmail.com";
?>