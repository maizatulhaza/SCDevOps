<?php
include('session.php');

// Include config file
$database = include('config/database.php');

/* Attempt to connect to MySQL database */
$link = mysqli_connect($database['host'], $database['user'], $database['pass'], $database['name']);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = $fullname = $office = $email = $role = "";
$username_err = $password_err = $confirm_password_err = "";
$status = "1"; // 1 = active, 0 = inactive

// Processing form data when form is loaded
if ($_GET['token'] !== $_SESSION['token']){          
   // If no token, redirect to admin page.
    header("location: admin.php");      
}
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['token'] == $_SESSION['token']){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }
    
    // Set parameters
    $fullname = trim($_POST['fullname']);
    $office = trim($_POST['office']);
    $email = trim($_POST['email']);
    if (trim($_POST['role']) == "Administrator"){
      $role = "A0";                         
    } elseif (trim($_POST['role']) == "Data Editor"){
      $role = "A1";                          
    } elseif (trim($_POST['role']) == "User"){
      $role = "A2";                          
    }    
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, fullname, office, email, role, status) VALUES (?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $param_username, $param_password, $param_fullname, $param_office, $param_email, $param_role, $param_status);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_fullname = $fullname;
            $param_office = $office;
            $param_email = $email;
            $param_role = $role;
            $param_status = $status;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to admin page
                header("location: admin.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
    
    header("location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">              
  <head>                        
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">                        
    <!-- Meta, title, CSS, favicons, etc. -->                            
    <meta charset="utf-8">                        
    <meta http-equiv="X-UA-Compatible" content="IE=edge">                        
    <meta name="viewport" content="width=device-width, initial-scale=1">                        
    <title>PBT Pengerang | Register                    
    </title>	 	                     
    <!-- jQuery (need early for loading icon)-->           
<script src="../vendors/jquery/dist/jquery.min.js"></script>     	    
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>     	 	    
<script>		
		$(window).load(function() {			
			// Animate loader off screen
			$(".se-pre-con").fadeOut("slow");			
			console.log( "windows ready!" );
		});
</script>                             
    <!-- Bootstrap -->                             
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">                        
    <!-- Font Awesome -->                            
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">                        
    <!-- NProgress -->                            
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">                        
    <!-- iCheck -->                            
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">	                         
    <!-- bootstrap-progressbar -->                             
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->     	                         
    <link href="../build/css/custom.min.css" rel="stylesheet">	                    
    <link rel="stylesheet" href="../build/css/style.css">
                   
  </head>              
  <body class="nav-md">                      
    <!-- Paste this code after body tag for loading icon -->    	                    
    <div class="se-pre-con">                   
    </div>	                    
    <!-- Ends -->                            
    <div class="container body">                                  
      <div class="main_container">                                            
        <!-- side navigation -->
        <?php
          include('side_nav.php');
        ?>
        <!-- /side navigation -->
                                                            
        <!-- top navigation -->
        <?php
          include('top_nav.php');
        ?>
        <!-- /top navigation -->
                    		                                             
        <!-- page content -->                                                 
        <div class="right_col" role="main">		 		                                              
          <div id="page-body" class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Registration</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>

                      <p>Register a user to the Pengerang Disaster Management System (PDMS).</p>
                      <span class="section">Personal Info</span>

                      <div class="item form-group">                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" id="token" name="token" class="form-control col-md-7 col-xs-12" value="<?php echo $token; ?>">                          
                        </div>
                      </div>
                      <div class="item form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="username" name="username" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $username; ?>">
                          <span class="help-block"><?php echo $username_err; ?></span>
                        </div>
                      </div>
                      <div class="item form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label for="password" class="control-label col-md-3">Password </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="password" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $password; ?>">
                          <span class="help-block"><?php echo $password_err; ?></span>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="confirm_password" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="confirm_password" type="password" name="confirm_password" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="fullname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="fullname" placeholder="full name(s) e.g Ahmad Bin Abdullah" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="office">Office </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="office" name="office" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="role">Access Role </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                          
                          <select id="role" name="role" required="required" class="form-control col-md-7 col-xs-12">
                            <option>User</option>
                            <option>Data Editor</option>
                            <option>Administrator</option>
                          </select>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="cancel" type="button" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>                                            
          </div>                                            
        </div>                                            
        <!-- /page content -->                                                        
        <!-- footer content -->                                                
        <?php
          include('footer_nav.php');
        ?>                                           
        <!-- /footer content -->                                      
      </div>                        
    </div>                            
    <!-- Bootstrap -->            
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>                            
    <!-- FastClick -->            
    <script src="../vendors/fastclick/lib/fastclick.js"></script>                            
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>
    <!-- Custom Theme Scripts -->             
    <script src="../build/js/custom.min.js"></script>
    
    <script type="text/javascript">

      $(document).on('click', '#cancel', function(){
        location.href = "admin.php";        
      });      

    </script>
                  
  </body>
</html>