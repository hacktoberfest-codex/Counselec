<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Custom CSS styles for Counselec */
        .navbar {
            background-color: #343a40; /* Dark background color */
        }

        .navbar-brand {
            font-size: 24px; /* Brand font size */
            font-weight: bold;
            color: #28a745; /* Brand text color */
        }

        .navbar-toggler {
            border: 1px solid #28a745; /* Toggle button border */
        }

        .navbar-toggler-icon {
            background-color: #28a745; /* Toggle button color */
        }

        .navbar-nav .nav-item {
            margin-right: 10px; /* Adjust spacing between menu items */
        }

        .nav-link {
            color: #fff; /* Menu item text color */
            font-weight: bold;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #28a745; /* Change menu item color on hover */
        }

        .form-control {
            border-radius: 0;
            border: 1px solid #28a745; /* Search input border */
            color: #343a40; /* Search input text color */
        }

        .btn-outline-success {
            border-color: #28a745;
            color: #28a745;
            border-radius: 0; /* Button border radius */
        }

        .btn-outline-success:hover {
            background-color: #28a745; /* Button background color on hover */
            color: #fff; /* Button text color on hover */
        }

        /* Custom CSS for a professional look */
        body {
            background-color: #f8f9fa; /* Page background color */
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .container {
            padding: 20px;
        }

        /* Center the brand on mobile devices */
        @media (max-width: 768px) {
            .navbar-brand {
                text-align: center;
                padding: 10px 0;
            }
        }
    </style>
    <title>Counselec</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/loginsystem">Counselec</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/loginsystem/welcome.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/loginsystem/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/loginsystem/signup.php">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/loginsystem/logout.php">Logout</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Your content goes here -->
</body>
</html>
