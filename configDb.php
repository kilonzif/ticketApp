<?php


//db
  $con = mysqli_connect("localhost","root","","ticketapp");

// Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


    $user=$_POST['username'];
    $pass=$_POST['password'];    
  
   
   $query = "SELECT * FROM accounts WHERE userName = '$user' AND passWord = '$pass'";// AND password = $userPass";

   $result = mysqli_query( $con, $query);

      $row = mysqli_fetch_array($result);

        if(!$row){
          echo "Incorrect Username or Password.";
        }else{
          echo "Login Successful...";
          header("location: ticket.php");
          exit(); 
        }

   
?>