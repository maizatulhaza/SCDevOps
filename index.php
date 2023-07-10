<!--
********************************************************
* WEB PROGRAMMING PROJECT                              *
*                                                      *
*                                                      *
* TEAM : Indigo                                        *
*                                                      *
********************************************************
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>VogueValet</title>
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
   
<div class="topnav">
<a class="active" href="index.php" >VOGUE VALET</a>
<a href="newarrival_out.php">NEW ARRIVAL</a>
<div class="dropdown">
    <button class="dropbtn">BRANDS 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tudungpeople_out.php">Tudung People</a>
      <a href="duck_out.php">Duck</a>
      <a href="calaqisya_out.php">Calaqisya</a>
      <a href="nealofar_out.php">Nealofar</a>
    </div>
  </div>
    
  
<div class="iconbar">
    <a href="login.php"><i class="fa fa-fw fa-shopping-cart"></i></a>
    <div class="dropdown">
    <button class="dropbtn"> 
      <i class="fa fa-fw fa-user"></i>
    </button>
    <div class="dropdown-content-login">
      <a href="login.php" class="log">Log In</a>
      <a href="registration.php" class="log">Register</a>
    </div>
  </div>
</div>
</div>

<div class="body">
<div class="gallerywrapper">
<div class="gallery">
		    <div id="pic1">
			    <img src="../3-Project/imageproject/tudungpeople.png" alt="Image 1">
			    <a class="previous" href="#pic4">&lt;</a>
			    <a class="next" href="#pic2">&gt;</a>
		    </div>
		    <div id="pic2">
			    <img src="../3-Project/imageproject/duck.png" alt="Image 2">
			    <a class="previous" href="#pic1">&lt;</a>
			    <a class="next" href="#pic3">&gt;</a>
		    </div>
		    <div id="pic3">
			    <img src="../3-Project/imageproject/calaqisya.png" alt="Image 3">
			    <a class="previous" href="#pic2">&lt;</a>
			    <a class="next" href="#pic4">&gt;</a>
		    </div>
		    <div id="pic4">
			    <img src="../3-Project/imageproject/neelofar.png" alt="Image 4">
			    <a class="previous" href="#pic3">&lt;</a>
			    <a class="next" href="#pic1">&gt;</a>
		    </div>
</div>
</div>

<div class="topbutton">
    <a href="tudungpeople_out.php" class="button" style="color: #aa6f5d">Tudung People</a>
    <a href="duck_out.php" class="button" style="color: #aa6f5d">Duck</a>
    <a href="calaqisya_out.php" class="button" style="color: #aa6f5d">Calaqisya</a>
    <a href="nealofar_out.php" class="button" style="color: #aa6f5d">Nealofar</a>
</div>  
 
<div class="announcement">
    
    <img src="../3-Project/imageproject/annc.png" alt="annoucement">

</div>  

<div class="middle">
  <div class="column">
      <a href="tudungpeople_out.php"><img src="../3-Project/imageproject/tudungpeoplemain.png" alt="Tudung People" ></a>
  </div>
  <div class="column">
      <a href="index.php"><img src="../3-Project/imageproject/pic2.png" alt="Shipping" ></a>
  </div>
  <div class="column">
      <a href="duck_out.php"><img src="../3-Project/imageproject/duckmain.png" alt="Duck" ></a>
  </div>
    <div class="column">
      <a href="calaqisya_out.php"><img src="../3-Project/imageproject/calaqisyamain.png" alt="Calaqisya" ></a>
  </div>
  <div class="column">
      <a href="index.php"><img src="../3-Project/imageproject/voguevaletmain.png" alt="Vogue Valet" ></a>
  </div>
  <div class="column">
      <a href="nealofar_out.php"><img src="../3-Project/imageproject/nealofarmain.png" alt="Nealofar" ></a>
  </div>
</div>
</div>   
    
<div class="footer">
  <h2>Vogue Valet Shopping Centre</h2>
  <p>Monday - Thursday : 9am - 5pm</p>
  <p>Friday: 9am - 1pm</p>
  <p>Meal Break: 1 pm - 2 pm</p>

<p>CUSTOMER SERVICE: help@voguevalet.com </p>
<p>TEL: 03 - 33412486</p>

<p>HR : career.voguevalet@gmail.com </p>

    <div class="socials">
        <h3>Follow us</h3>
        <a href="#"><i class="fa fa-fw fa-instagram"></i></a>
        <a href="#"><i class="fa fa-fw fa-twitter"></i></a>
        <a href="http://www.utm.my"><i class="fa fa-fw fa-facebook-f"></i></a>
    </div>
    
</div>
    
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
    
</body>
</html