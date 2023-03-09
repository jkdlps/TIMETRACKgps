<?php
session_start();
include "../control/functions.php";
db();
head("Login");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $decoded = password_verify($password, PASSWORD_DEFAULT);

    $query = "SELECT * FROM users WHERE email='$email' AND password='$decoded'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        header('Location: dashboard.php');
        exit();
    } else {
        echo 'Invalid email or password';
        header("location: ../loginpage.php");
        exit();
    }

    mysqli_close($con);
}

?>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid" src="./images/login.png" />
            </div>
            <div class="col-md-10 mx-auto col-lg-6">
                <form class="p-4 p-md-5  rounded-3" method="post" action="../control/login.php" >
                    <h1 class="my-2">Login</h1>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Login</button>
                    <small class="text-muted">Don't have an account?<a href="./signuppage.php"> Sign Up </a></small>
                    <hr class="my-4">
                    <small class="text-muted mb-3">By using this service, you understood and agree to the Timetrack: GPS Timekeeping System <a href="terms.php"> Terms of Use and Privacy Statement</small>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>