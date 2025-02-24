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
      
         $email = mysqli_real_escape_string($conn, $_POST['email']);
         $password = mysqli_real_escape_string($conn, $_POST['pwd']);
       
         $sql = "select * from login_details where email = '$email' and password = '$password'";  
         $result = mysqli_query($conn, $sql);  
         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
         $count = mysqli_num_rows($result);  
              
         if($count == 1)
              {  
                  
                
                   header("location:home.html");
                   
                 
              }  
         else
              {  
                  echo "<h1> Login failed. Invalid username or password.</h1>";  
              }     
         
?>