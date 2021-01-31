<!DoctypeHTML>
<html>
<head>
<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
<title>Book-a-car</title>
<style>
body{
text-align: center;
background-image: url('shiva.jpg');
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
input{
color: yellow;
margin: 20px;
border: solid 1px yellow ;
background: red;
padding: 5px; 
border-radius: 25px;
}
</style>
</head>
<body>  
<form method="POST">
<p>Name:<input type="text" placeholder="Name" name="username"> <br></p>
<p>Email:<input type="text" placeholder="Email" name="email"><br></p>
<p>Phone no:<input type="text" placeholder="Phone no." name="pn"><br> </p>
<p>Pickup Location:<input type="text" placeholder="Pickup Location" name="pickupl"><br></p>
<p>Drop Location:<input type="text" placeholder="Drop Location" name="dropl"><br></p>
<p>Arrival Date:<input type="date" placeholder="Arrival Date" name="arrivald"><br></p>
<p>Departure Date:<input type="date" placeholder="Arrival Date" name="departured"><br></p>
<p>Arrival Time:<input type="time" name="arrivalt"><br></p>
<p>Departure Time:<input type="time" name="departuret"><br></p>
<p><input type="submit" class="submit" name="submit"></p>
</form>
</body>
</html>