



 <!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap Theme Company Page</title>
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
      <a class="navbar-brand" href="#myPage"><img src="jambopaylogo.png"></a>
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
    <h1>Login</h1>
    <form method="post">
    <div id="error_info" style="text-align: center;"></div>

	<label for="uname">Name</label>
      <p><input type="text" name="username" value=" " id="username" style="<?php echo $error_css; ?>"></p>
      <label for="password">Password</label> 
      <p><input type="password" name="password" value="" id="password" style="<?php echo $error_css; ?>"></p>
      <p class="remember_me">
        <label>
         <label>
          <input type="checkbox" name="remember_me" id="remember_me">
          Remember me on this computer
        </label>
        </label>
      </p>
      <p class="submit"><input onclick="login()" type="button" name="commit" value="Login"></p>
      <!--  <span class="error">*<echo $errMsg;?></span>
  <br><br> -->
    </form>
  </div>
 
  <div class="login-help">
    <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
  </div>
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

<script>
$(document).ready(function(){

  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
   
    if (this.hash !== "") {
 
      event.preventDefault();

      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        window.location.hash = hash;
      });
    } 
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})

function login(){
  var username = $('#username').val(); 
  var password = $('#password').val();

  if(username === ''){
    $('#error_info').html('Please enter your username.');
    $('#username').focus();
  }
  else if(password === ''){
    $('#error_info').html('Please enter your password.');
    $('#password').focus();
  }
  else{
    var dataString = 'username='+username+ '&password='+password;
    console.log(dataString);

    $.ajax({
      type: "POST",
      url: "configDb.php",
      data: dataString,
      beforeSend:function(){
        $('#error_info').html('Authenticating...');
      },
      success:function(response){
        $('#error_info').html(response);
      }

    });

  }
}

</script>



</body>
</div>
</html>
