
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../sidebar/css/style.css">
  </head>
  <style>
    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
      background: linear-gradient(45deg, #4CAF50, #FFFF00);
      color: black; /* Font color set to black */
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container-fluid {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .logo {
      text-align: center;
      margin-right: 20px; /* Adjust the margin as needed */
      display: flex;
      align-items: center; /* Center vertically */
      justify-content: center; /* Center horizontally */
    }

    .logo img {
      max-width: 100%;
      max-height: 100%;
    }

    .register-container {
      max-width: 600px; /* Adjust the maximum width as needed */
      width: 100%;
      padding: 15px;
      background-color: #ffffff; /* Background color for the container */
      border-radius: 10px; /* Rounded corners */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle box shadow */
    }

    /* Font and border color modifications */
    .register-container input,
    .register-container button {
      color: black !important; /* Set font color to black */
      border: 1px solid black !important; /* Set border color to black */
    }

    .register-container input::placeholder {
      color: black !important; /* Set placeholder color to black */
    }

    .register-container h2 {
      color: black; /* Set heading color to black */
    }
  </style>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				
	  				<h3>MocuAdmin</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="/admin"><span class="fa fa-home mr-3"></span> Dashboard</a>
          </li>
          <li>
              <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Download</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-gift mr-3"></span> Gift Code</a>
          </li>
          <li>
            <a href="/signup"><span class="fa fa-trophy mr-3"></span> Registation Confirmation</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
          </li>
          <li>
            <a href="/"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
        <div class="container-fluid">
        

        <!-- Use Bootstrap's grid system for the container -->
        <div class="container register-container">
            
            <h2 class="text-center">Register User</h2>
            <?php if(isset($validation)):?>
            <div class="alert alert-warning">
                <?= $validation->listErrors() ?>
            </div>
            <?php endif;?>
            
            <form action="<?php echo base_url(); ?>/SignupController/store" method="post">
                <div class="mb-3">
                    <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control">
                </div>
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-dark">Signup</button>
                </div>
            </form>

            
        </div>
    </div>

    <script src="../sidebar/js/jquery.min.js"></script>
    <script src="../sidebar/js/popper.js"></script>
    <script src="../sidebar/js/bootstrap.min.js"></script>
    <script src="../sidebar/js/main.js"></script>
  </body>
</html>