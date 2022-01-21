<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>
<body class="container-fluid">
  <center>
  <div class="row">
    <div class="col-md-2">
      <img src="logo.png" width="70">
    </div>
    <div>
      <div class="col-md-10">
    <h1  style="color: #b33b06; font-size: 40px;"><b>AGAPE INTERNATIONAL CHILDREN'S MINISTRIES DATABASE</b></h1>
  </div>
  </div>
  
</div>
</center>
  <div class="container-fluid" style=" background-image: url('g3.jpg');   background-position: center;
  background-repeat: no-repeat;
  background-size: cover; height: 100vh;">
    <div class="row">

       <div class="col-md-8">
        
      </div>
      <div class="col-md-4"style="background-color: #b33b06; padding: 50px; height: 50vh; margin-top: 100px;" >
      <h1 class="login-box-msg" style="color: white;">Sign in</h1>

      <form action="login.php" method="POST">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="email" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
          <div class="col-xs-12">
                <button type="submit" class="btn btn-dark btn-block btn-flat" style="background-color: black; color: white;" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
            </div>
          </div>
      </form>
      </div>

     
      
    </div>
    
  </div>

  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>