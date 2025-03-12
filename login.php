<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to ECExchange</title>
    <link rel="stylesheet" href="css/login-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
    </style>
</head>
<body>

    <!-- Hexagons for Background -->
    <div class="hexagon" style="top: 20%; left: 10%;"></div>
    <div class="hexagon" style="top: 30%; left: 25%;"></div>
    <div class="hexagon" style="top: 50%; left: 30%;"></div>
    <div class="hexagon" style="top: 80%; left: 50%;"></div>
    <div class="hexagon" style="top: 30%; left: 70%;"></div>
    <div class="hexagon" style="top: 90%; left: 85%;"></div>
    <div class="hexagon" style="top: 60%; left: 90%;"></div>
    <div class="hexagon" style="top: 20%; left: 95%;"></div>

    <!-- Header -->

    <?php include 'header.php'; ?>

    <!-- Main Layout -->
    <div class="container">    
        <!-- Sidebar -->

        <?php include 'sidebar.php'?>

        <!-- Login Box -->
        <div class="container" id=signup>
            <h1 class="formtitle">Register</h1>
            <form method="post" action="">
                <div class="inputgroup>">
                    <i class="fas fa-user"></i>
                    <input type="text" name="fName" id="fName" placeholder="First Name" required>
                    <label for="fName">First Name</label>
                </div>
                <div class="inputgroup>">
                    <i class="fas fa-user"></i>
                    <input type="text" name="lName" id="lName" placeholder="Last Name">
                    <label for="lName">Last Name</label>
                </div>
                <div class="inputgroup">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="lName">Email</label>                    
                </div>
                <div class="inputgroup">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>                    
                </div>
                <input type="submit" class="btn" value="Sign Up" name="signUp"></input>
            </form>
            <p class="or">
                ----------or-----------
            </p>
            <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
            </div>
            <div class="links">
                <p>Already Have Account ?</p>
                <button id="signInButton">Sign In</button>
            </div>
        </div>

        <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
          ----------or--------
        </p>
        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
      </div>

    <?php include 'footer.php'?>
    <script src="js/script.js"></script>

</body>
</html>