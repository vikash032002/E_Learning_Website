<?php
$servername="localhost";
$username="root";
$password="";
$database_name="login";
//create connection
$conn=mysqli_connect($servername,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['signup']))
{	
	 $email=$_POST['email'];
	 $pass= $_POST['pass'];
     $conpwd=$_POST['conpwd'];
     $sql_query = " INSERT INTO login_details (email, password, ConfirmPwd) VALUES ('$email', '$pass', '$conpwd' ) ";
     if (mysqli_query($conn, $sql_query)) 
	    {
		        
            header("location:home.html");
	     } 
	 else
        {
		  echo 'connectivity problem ';
		  echo 'Error: ' . $sql_query . '' . mysqli_error($conn);
	     } 
	 mysqli_close($conn);
}
?>