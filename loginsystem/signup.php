<?php
$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $email = $_POST["email"];
    
    // Check if the username already exists in the database
    $usernameCheckQuery = "SELECT * FROM `users` WHERE `username` = '$username'";
    $usernameCheckResult = mysqli_query($conn, $usernameCheckQuery);
    
    // Check if the email already exists in the database
    $emailCheckQuery = "SELECT * FROM `users` WHERE `email` = '$email'";
    $emailCheckResult = mysqli_query($conn, $emailCheckQuery);
    
    if (mysqli_num_rows($usernameCheckResult) > 0) {
        $showError = "Username already exists. Please choose a different username.";
    } elseif (mysqli_num_rows($emailCheckResult) > 0) {
        $showError = "Email already exists. Please choose a different email.";
    } else {
        if ($password == $cpassword) {
            $sql = "INSERT INTO `users` (`username`, `password`, `email`, `dt`) VALUES ('$username', '$password', '$email', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
                // Redirect to login.php after successful registration
                header("Location: login.php");
                exit();
            }
        } else {
            $showError = "Passwords do not match";
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>SignUp</title>
</head>
<body>
<?php require 'index.php' ?>
<?php
if ($showAlert) {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
}
if ($showError) {
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
}
?>

<div class="container my-4">
    <h1 class="text-center">Signup to our website</h1>
    <form action="/loginsystem/signup.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="Enter your username" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">View</button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm your password" required>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="toggleCPassword">View</button>
                </div>
            </div>
        </div>
       
        <button type="submit" class="btn btn-primary">SignUp</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const togglePassword = document.querySelector("#togglePassword");
    const toggleCPassword = document.querySelector("#toggleCPassword");
    const passwordField = document.querySelector("#password");
    const cpasswordField = document.querySelector("#cpassword");

    togglePassword.addEventListener("click", function () {
        const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
        passwordField.setAttribute("type", type);
        this.textContent = type === "password" ? "View" : "Hide";
    });

    toggleCPassword.addEventListener("click", function () {
        const type = cpasswordField.getAttribute("type") === "password" ? "text" : "password";
        cpasswordField.setAttribute("type", type);
        this.textContent = type === "password" ? "View" : "Hide";
    });
});
</script>
</body>
</html>