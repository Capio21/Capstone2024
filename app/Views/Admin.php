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
  <style> body {
     
      background: linear-gradient(45deg, #4CAF50, #FFFF00);
      
    }
    .modal-content {
            background-color: #fefefe;
            margin: 0 auto;
            padding: 20px;
            border: 2px solid #000;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 400px;
            text-align: center;
        }

        .close {
            color: #000;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: #555;
        }

        #logoutBtn {
            padding: 10px 15px;
            border: 2px solid #000;
            background-color: #000;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            align-items: center;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        #logoutBtn:hover {
            background-color: #555;
            border-color: #555;
        }
        
    


</style>
  <body>
  </ul>



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
            <a href="#"><span class="fa fa-home mr-3"></span> Dashboard</a>
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
          <a href="#" onclick="openLogoutModal()"><span class="fa fa-sign-out mr-3"></span> Logout</a>
          </li>


          <div id="logoutModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeLogoutModal()">&times;</span>
        <h2>Logout Confirmation</h2>
        <p>Are you sure you want to logout?</p>
        <button id="logoutBtn" onclick="logout()">Logout</button>
    </div>
</div>
          
         <!-- Button trigger modal -->
<!-- Button trigger modal -->

        
    <!-- Logout Modal -->

    



    	</nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5 mx-auto text-center">
    <h2 class="mb-4">Hi mga Ka-MocuFaco</h2>
    <img src="/logo.png" alt="Mucofaco Logo" class="img-fluid">
    
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