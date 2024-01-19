<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mucofaco - Your Ultimate Online Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Add any additional stylesheets, fonts, or scripts as needed -->
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(45deg, #4CAF50, #FFFF00);
            color: white;
        }

        nav {
            padding: 10px;
            text-align: right;
        }

        .btn-logout {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .btn-logout:hover {
            background-color: #555;
        }

        section {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(45deg, #4CAF50, #FFFF00);
            color: white;
        }

        .container-fluid {
            text-align: center;
        }

        .logo img {
            max-width: 100%;
            height: auto;
        }

        .hero-content {
            text-align: center;
        }

        .hero-content h1 {
            font-size: 3rem; /* Increased font size */
            margin-bottom: 20px;
            font-weight: bold; /* Added bold style */
            color: #ff6600; /* Orange color */
        }

        .hero-content p {
            font-size: 1.5rem; /* Increased font size */
            margin-bottom: 30px;
            color: #fff; /* White color */
        }

        .btn-shop {
            display: inline-block;
            padding: 15px 30px; /* Increased padding */
            background-color: #e04d00;
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.5rem; /* Increased font size */
            border-radius: 8px; /* Increased border radius */
            transition: background-color 0.3s ease;
        }

        .btn-shop:hover {
            background-color: #cc3f00; /* Darker shade on hover */
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }

        /* Container for Modal */
        .modal-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        /* Modal Content */
        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        /* Close Button */
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
            color: #555; /* Dark gray color */
        }

        /* Logout Button */
        .btn-logout {
            background-color: #dc3545;
            color: #fff;
            padding: 15px 30px; /* Increased padding */
            border: none;
            border-radius: 8px; /* Increased border radius */
            cursor: pointer;
            font-size: 1.5rem; /* Increased font size */
            transition: background-color 0.3s ease;
        }

        .btn-logout:hover {
            background-color: #b02a37; /* Darker shade on hover */
        }

        .modal-content p {
            margin-bottom: 15px;
            font-size: 1.6rem; /* Increased font size */
            color: #000; /* Black color */
        }

        /* Override default styles for links */
        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>

<body>

    <nav>
        <a href="#" id="logoutBtn" class="btn btn-logout">Logout</a>
    </nav>

    <!-- Container for Modal -->
    <div id="logoutModal" class="modal-container">
        <!-- Modal Content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Are you sure you want to logout?</p>
            <button id="confirmLogout" class="btn btn-logout">Logout</button>
        </div>
    </div>

    <section>

        <div class="container-fluid">
            <div class="logo">
                <img src="/logo.png" alt="Mucofaco Logo" class="img-fluid">
            </div>
        </div>

        <div class="container">
            <div class="hero-content">
                <h1>Welcome to Mucofaco</h1>
                <p>Your Ultimate Agri Partner</p>
                <a href="/Home" class="btn btn-shop">Explore Our Shop</a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Add any additional scripts as needed -->

    <script>
        // Get the modal and logout button elements
        const logoutModal = document.getElementById("logoutModal");
        const logoutBtn = document.getElementById("logoutBtn");
        const confirmLogout = document.getElementById("confirmLogout");

        // When the user clicks the logout button, open the modal
        logoutBtn.addEventListener("click", () => {
            logoutModal.style.display = "block";
        });

        // When the user clicks on <span> (x), close the modal
        logoutModal.querySelector(".close").addEventListener("click", () => {
            logoutModal.style.display = "none";
        });

        // When the user clicks the confirm logout button, perform the logout action
        confirmLogout.addEventListener("click", () => {
            // Perform your logout logic here (e.g., redirect to a logout page)
            window.location.href = "/"; // Example redirection
        });
    </script>
</body>

</html>
