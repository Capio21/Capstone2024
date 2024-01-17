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
            font-family: 'Cool Font', sans-serif; /* Replace with your preferred cool font */
            background: linear-gradient(45deg, #4CAF50, #FFFF00);
            color: black; /* Change the font color to black */
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 15px;
            background-color: #ffffff; /* Add a background color for the container */
            border-radius: 10px; /* Add rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
        }

        /* Make the font bold */
        h2 {
            font-weight: bold;
        }

        /* Style for the login form */
        .form-control {
            border-radius: 5px; /* Add a slight border radius for form inputs */
        }

        /* Style for the sign-in button */
        .btn-success {
            background-color: #28a745; /* Change the button background color */
            border-color: #28a745; /* Change the button border color */
            font-weight: bold; /* Make the button text bold */
        }

        /* Style for the sign-up link */
        .text-center a {
            color: black; /* Change the link color to black */
            font-weight: bold; /* Make the link text bold */
        }
    </style>
    <title>Codeigniter Login with Email/Password Example</title>
</head>

<body>
    <div class="container login-container">
        <div class="row justify-content-md-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="text-center mb-4">Login</h2>
                
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
                
                <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                    <div class="mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    
                    <div class="d-grid mb-3">
                         <button type="submit" class="btn btn-success">Sign in</button>
                    </div>
                    
                    <p class="text-center">Don't have an account? <a href="/signup">Sign up</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
