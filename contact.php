<?php
$servername="localhost";
$username="root";
$password="";
$database_name="contact";
//create connection
$conn=mysqli_connect($servername,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}
if(isset($_POST['submit']))
          {	
               $name= $_POST['name'];
               $email=$_POST['email'];
               $msg=$_POST['msg'];
               $sql_query = " INSERT INTO info (name, email, msg) VALUES ('$name', '$email', '$msg' ) ";
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
