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
    <meta charset="UTP-8">
    <title>Brands</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="C:/Users/haza/Downloads/styles.css">
</head>
<body>
    
<div class="topnav">
<a class="active" href="index.php">VOGUE VALET</a>
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
    <h1>DUCK</h1>

<div class="brands">
  <div class="column">
      <form action="login.php">
      <a href="#"><img src="https://www.fashionvalet.com/pub/media/catalog/product/1/2/12814062103_a.jpg" alt="Cotton" ></a>
      <p>The Palestine dUCk Shawl in Black</p>
      <p><b>RM300</b></p>
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form action="login.php">
      <a href="#"><img src="https://www.fashionvalet.com/pub/media/catalog/product/1/2/12809062103_a.jpg" alt="Cotton" ></a>
      <p>The Modern Lines dUCk Shawl - Heyday</p>
      <p><b>RM200</b></p>
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form action="login.php">
      <a href="#"><img src="https://www.fashionvalet.com/pub/media/catalog/product/1/2/12803062103_a.jpg" alt="Cotton" ></a>
      <p>Textured Georgette Shawl with Nanotechnology - Bahulu</p>
      <p><b>RM130</b></p>
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form action="login.php">
      <a href="#"><img src="https://www.fashionvalet.com/pub/media/catalog/product/1/2/12803062105_a.jpg" alt="Cotton" ></a>
      <p>Textured Georgette Shawl with Nanotechnology - Apam Balik</p>
      <p><b>RM130</b></p>
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
     <form action="login.php">
      <a href="#"><img src="https://www.fashionvalet.com/pub/media/catalog/product/1/2/12828052110_a.jpg" alt="Cotton" ></a>
      <p>The Anyaman dUCk Square Scarf - Saltwater</p>
      <p><b>RM200</b></p>
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form action="login.php">
      <a href="#"><img src="https://www.fashionvalet.com/pub/media/catalog/product/1/2/12828052116_a.jpg" alt="Cotton" ></a>
      <p>The Anyaman dUCk Square Scarf - Sugarcane</p>
      <p><b>RM200</b></p>
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form action="login.php">
      <a href="#"><img src="https://www.fashionvalet.com/pub/media/catalog/product/1/2/12821052110_aaa.jpg" alt="Cotton" ></a>
      <p>Frappe Blossom Square Scarf with nanotechnology in Purple Haze</p>
      <p><b>RM130</b></p>
      <input type="submit" value="Add To Cart" class="button1">
      </form>
  </div>
  <div class="column">
      <form action="login.php">
      <a href="#"><img src="https://www.fashionvalet.com/pub/media/catalog/product/1/2/12821052113_aa.jpg" alt="Cotton" ></a>
      <p>Frappe Blossom Square Scarf with nanotechnology in Berry Blue</p>
      <p><b>RM130</b></p>
      <input type="submit" value="Add To Cart" class="button1">
      </form>
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
    

</html>