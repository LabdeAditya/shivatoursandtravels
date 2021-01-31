<!DoctypeHTML>
<html>
<head>
<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
<title>Book-a-car</title>
<style>
  p{
  	color: black;
  }
}
*{
text-align: center;
/*background-image: url('travel.jpg');*/
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
}
input{
	cursor: text;

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
}
.main-div{
	background-color: silver;
    filter: opacity(90%);
    font-family: cursive;
    border-radius: 10px;
    margin: 0px;
    padding: 0px;
}
body{
	background-image: url(shiva.jpg);
}
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
.flexbox{
	background-image: shiva.jpg;
	text-align: center;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;
}
.form{
	align-items: center;
}	
</style>
</head>
<body> 
<div class="flexbox">
 <div class="main-div"><div class="heading"><h1 >Welcome to booking section of Shiva Tours And Travels</h1></div></div> 
 <div class="form">
<form method="POST" enctype="multipart/form-data">
<p>Name:<input type="text" placeholder="Name"         name="username" required> <br></p>
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
<p>Pickup Location:<input type="text" placeholder="Pickup Location" name="pickupl"required><br></p>
<p>Drop Location:<input type="text" placeholder="Drop Location" name="dropl" required><br></p>
<p>Arrival Date:<input type="date" placeholder="Arrival Date" name="arrivald" required><br></p>
<p>Departure Date:<input type="date" placeholder="Arrival Date" name="departured" required><br></p>
<p>Arrival Time:<input type="time" name="arrivalt" required><br></p>
<p>Departure Time:<input type="time" name="departuret" required><br></p>
<p><input type="submit" class="submit" name="submit" required></p>
</form>
</body>
</html>
</div>
</div>
<?php

$username = "root";
$password = "";
$server ='localhost';
$db = 'shivatoursandtravels';

$con = mysqli_connect($server,$username,$password,$db);

if (isset($_POST['submit'])) {
	$name = $_POST['username'];
	$email = $_POST['email'];
	$pn = $_POST['pn'];
	$nop = $_POST['nop'];
	$pl = $_POST['pickupl'];
	$dl = $_POST['dropl'];
	$ad = $_POST['arrivald'];
	$dd = $_POST['departured'];
	$at = $_POST['arrivalt'];
	$dt = $_POST['departuret'];
	//the subject
	$sub = "Your subject";
	//the message
	$msg = "You got enquiry from $name  Phone no. $pn And Email-$email .booking info- timing $at date -$ad departure date is-$dt ";
	//recipient email here
	$rec = "labdeshivnath@gmail.com";
	//send email
	mail($rec,$sub,$msg);
	
	$insertquery = "INSERT INTO `booking`(`name`, `email`, `pn`,`nop`, `pl`, `dl`, `ad`, `dd`, `at`, `dt`) VALUES ('$name','$email','$pn','$nop','$pl','$dl','$ad','$dd','$at','$dt')";
	
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

<!-- <?php 

$name = $_POST['username'];
$email = $_POST['email'];
$pn = $_POST['pn'];
$nop = $_POST['nop'];
$pl = $_POST['pickupl'];
$dl = $_POST['dropl'];
$ad = $_POST['arrivald'];
$dd = $_POST['departured'];
$at = $_POST['arrivalt'];
$dt = $_POST['departuret'];

$to_email = "labdeshivnath@gmail.com";
$subject = "You got enquiry";
$body = "Name is ".$name."<br>"."Phone no is ".$pn."  Email is ".$email." want to go to ".$dl." from ".$pl." on ".$ad." to ".$dd." time ".$at."to".$dt ;
$headers = "From: labdeaditya345@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
} 
?> -->