<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(45deg, #4CAF50, #FFFF00);
            color: black; /* Change the font color to black */
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

        /* Use Bootstrap's grid system for the container */
        .register-container {
            max-width: 600px; /* Adjust the maximum width as needed */
            width: 100%;
            padding: 15px;
            background-color: #ffffff; /* Add a background color for the container */
            border-radius: 10px; /* Add rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
        }

        /* Add cool font and bold style to the logo */
        .logo img {
            font-family: 'Cool Font'; /* Replace with your preferred cool font */
            font-weight: bold;
            color: black; /* Change the font color to black */
        }
    </style>
    <title>Codeigniter Auth User Registration Example</title>
</head>

<body>
    
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

            <p class="text-center">Already have an account? <a href="/signin">Login</a></p>
        </div>
    </div>
</body>

</html>
