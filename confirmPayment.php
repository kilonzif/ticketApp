<html>
 <head>

  <title>Confirm Purchase Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="myStyle.css" rel="stylesheet" type="text/css" />

</head>
<div id="wrapper">

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">Login</a></li>
        <li><a href="#services">Buy Ticket</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>jamboPay</h1> 
  <p>Simple and Secure ...</p> 
</div>
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
  <div class="Logincontainer">
   

  <div class="login">
      

  <table border="1" style="color: black;border: 2px solid #e7e7e7; width: 100%; align-content: center">
             <p style="align-content: right;"><b>Ticket Details</b></p><br>
    <tbody>
		
  <?php
          $ticketNumber=$_POST['Number'];
          $total;
     

          if ($_POST["ticketType"] =="normal") {
                $total=$ticketNumber * 1000;
}
elseif ( $_POST["ticketType"] === "vip" ) {

   $total=$ticketNumber * 2000;
}
elseif ($_POST["ticketType"] ==="vvip") {

   $total=$ticketNumber * 3000;
}
else{
  echo "nothing selected";
}

?>
       <tr>
          <td> Ticket Type </td>
          <td>#<?php echo $_POST['ticketType']?></td>
          
       </tr>

        <tr>
          <td> Nu# </td>
          <td><?php echo $_POST['Number'] ?></td>
          
       </tr>

        <tr>
          <td> amount# </td>
          <td><?php echo $total ?></td>
          
       </tr>


<?php
?>
</tbody>

</table>
<br>

    <center><form action="" method="post">
       <input type="submit" name="completeTrans" value="completeTrans">
       <input type="submit" name="cancelTrans" value="cancelTrans">
    </form>
    </center>
    </div>
    </div>
    <article>
       <?php
           if (isset($_POST['completeTrans'])) {
                header("location: complete.php");
               echo "This happens if you click hello";
           }
           if (isset($_POST['cancelTrans'])) {
              header("location: ticket.php");
               echo "This happens if you click goodBye";
           }
        ?>
        <?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



        </article>
        </div>
        </div>
        </div>
        <footer class="container-fluid text-center">
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
   
  </div>
</div>

  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  
</footer>
  </body>
  </div>
</html>