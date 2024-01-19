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
            color: black;
            height: 100vh;
            display: flex;
            align-items: left;
            justify-content: center;
        }

        .container-fluid {
            display: flex;
            align-items: center;
            justify-content: center; /* Center the form horizontally */
            height: 100vh;
            /* Remove margin-left property */
        }

        .logo {
            text-align: center;
            margin-right: px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-container {
            max-width: 500px;
            width: 100%; /* Change width to 100% */
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0);
            /* Remove margin auto property */
            align-items: left;
        }

        /* Font and border color modifications */
        .register-container input,
        .register-container button {
            color: black !important;
            border: 1px solid black !important;
        }

        .register-container input::placeholder {
            color: black !important;
        }

        .register-container h2 {
            color: black;
        }
        .floating-container {
            position: fixed;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        /* Rest of the styles remain unchanged */
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
            <a href="members"><span class="fa fa-trophy mr-3"></span> Members list Create</a>
          </li>
        
          <li>
            <a href="/signup"><span class="fa fa-trophy mr-3"></span> Registation Confirmation</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
        
          <li>
          <a href="#" onclick="openLogoutModal()"><span class="fa fa-sign-out mr-3"></span> Logout</a>
          </li>
        </ul>
        


          <div id="logoutModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeLogoutModal()">&times;</span>
        <h2>Logout Confirmation</h2>
        <p>Are you sure you want to logout?</p>
        <button id="logoutBtn" onclick="logout()">Logout</button>
    </div>
</div>

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
  <script>
 // Function to display the logout modal
 function openLogoutModal() {
        var logoutModal = document.getElementById('logoutModal');
        logoutModal.style.display = 'block';
    }

    // Function to close the logout modal
    function closeLogoutModal() {
        var logoutModal = document.getElementById('logoutModal');
        logoutModal.style.display = 'none';
    }

    // Function to handle the logout action (you can customize this based on your needs)
    function logout() {
        // Add your logout logic here
        // For example, redirect to a logout page or perform an AJAX request to log the user out
        
        // Replace the following line with your actual logout logic
        alert('Logout successful'); 

        // Redirect to the home page after logout
        window.location.href = '/';
    }

  </script>
</html>