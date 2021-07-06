<!DOCTYPE html>
<html>
<head>
	<title>control</title>

	<style>

		#h1{
			text-align:center;
			color: rgb(0, 0, 0);
			text-transform: capitalize;
		    }

        body{
			margin-top: 28vh;
        	background-color:#82dbd4;
        	color: rgb(0, 0, 0);      	
        }

        button{
			margin: 5px;
        	border:#E5EEC1;
			font-size: x-large;
        	background-color: #7a4188;
        }
		#forward{
			text-align: center;
			margin-left: 99vh;
			color: rgb(0, 0, 0);

		}
		#contol{

			text-align: center;
			margin-left: 1vh;
		}
		#backward{
			text-align: center;
			margin-left: 99vh;
		}




	</style>

</head>

<body>
<form action="" method="post">
<h1 id="h1">Contorl</h1>



<button type="submit" name="forward" id="forward" >Forward</button>



<p id="contol">
<button type="submit" name="left" >Left</button>
<button type="submit" name="stop" >stop</button>
<button type="submit" name="right" >Right</button>

</p>

<button type="submit" name="backward" id="backward" >backward</button>




</form>




</body>


</html>








<?php
$servername = "localhost";
$database = "iot2";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 

if(isset($_POST['left'])){
	


	$sql = "UPDATE iot2 SET L='L',R='',F='',B='',S='' WHERE 1";
	if (mysqli_query($conn, $sql)) {
		  echo "  update left successfully";
	} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}			  
	mysqli_close($conn);

  
    


}
	
if(isset($_POST['right'])){
	

	$sql = "UPDATE iot2 SET L='',R='R',F='',B='',S='' WHERE 1";
	if (mysqli_query($conn, $sql)) {
		  echo "  update right successfully";
	} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}			  
	mysqli_close($conn);
 
   }
   
if(isset($_POST['stop'])){
	

	$sql = "UPDATE iot2 SET L='',R='',F='',B='',S='S' WHERE 1";
	if (mysqli_query($conn, $sql)) {
		  echo "  update stop successfully";
	} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}			  
	mysqli_close($conn);
 
   }
   
if(isset($_POST['forward'])){
	

	$sql = "UPDATE iot2 SET L='',R='',F='F',B='',S='' WHERE 1";
	if (mysqli_query($conn, $sql)) {
		  echo " update forward successfully";
	} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}			  
	mysqli_close($conn);
 
   }
   
if(isset($_POST['backward'])){
	

	$sql = "UPDATE iot2 SET L='',R='',F='',B='B',S='' WHERE 1";
	if (mysqli_query($conn, $sql)) {
		  echo "  update backward successfully";
	} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}			  
	mysqli_close($conn);
 
   }




?>







