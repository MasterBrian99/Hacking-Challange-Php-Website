<?php

  session_start(); /* Starts the session */

  if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
    header("location:login.php");
    exit;
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Level 1</title>
</head>
<style>
	
     body{
     	background-image: url(images/z.jpeg);
        background-color: black;
        background-repeat: no-repeat;
        background-position: 5px 20px;
     }

	h1{
		text-align: center;
		font-size: 50px;
		color: white;
		font-style: oblique;
	}

   button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  margin:auto;
  display:block;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
}

</style>
<body>
 <h1>You Have Successfully Completed <br> Level 1</h1>
  <br>
  <br>
   <a href="login2.php">
   <button class="button" style="vertical-align:middle" type="button"><span>Next Level</span></button> 
   </a>




</body>
</html>