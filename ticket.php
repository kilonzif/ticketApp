<!Doctype>
<!DOCTYPE html>
<html>
<head>

  <title>Purchase Ticket</title>
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
<br><br>
<div class="Logincontainer">
  <div class="login">
<center><h1><b>Purchase Ticket</b></h1></center><br>


	<FORM ACTION=confirmPayment.php METHOD=POST>
	    <label for="ticketType">Type of Ticket:</label> <br>
      <select name="ticketType" style="width: 100%;padding: 16px 20px;border-radius: 4px;background-color: #f1f1f1;">
        <option selected="selected" value="normal" name="normal">NORMAL</option>
        <option value="vip" name="vip">VIP</option>
        <option value="vvip" name="vvip">VVIP</option>
      </select>
      <br>
	   Number of tickets: <INPUT TYPE=text NAME="Number"><br>
	  <center><P><INPUT TYPE=SUBMIT NAME='submit' VALUE="submit"></center>


		</FORM>
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
</div>

</body>
</div>
</html>