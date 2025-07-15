<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up - ECExchange</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body, html {
      height: 100%;
      width: 100%;
      overflow-x: hidden;
      background: #1a1a1a;
      position: relative;
    }

    .container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 140px);
      margin: 100px;
    }

    .login-card {
      display: flex;
      margin: 3%;
      width: 800px;
      justify-self: center;
      max-width: 95%;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 8px 30px rgba(0,0,0,0.1);
      background: rgba(255, 255, 255, 0.09);
      z-index: 2;
      backdrop-filter: blur(6px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .welcome-panel {
      background: #4CAF50;
      color: white;
      width: 40%;
      padding: 30% 20px;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .welcome-panel h3 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .welcome-panel p {
      margin-bottom: 20px;
      font-size: 14px;
    }

    .welcome-panel button {
      padding: 10px 20px;
      border: 2px solid white;
      background: transparent;
      color: white;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s;
    }

    .welcome-panel button:hover {
      background: white;
      color: black;
    }

    .login-form {
      width: 60%;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .login-form h2 {
      margin-bottom: 20px;
      color: white;
      font-size: 28px;
    }

    .input-group {
      position: relative;
      margin-bottom: 20px;
    }

    .input-group input {
      width: 100%;
      padding: 12px 40px 12px 14px;
      border-radius: 8px;
      border: 1px solid #ccc;
      background: #f5f5f5;
      font-size: 14px;
      outline: none;
    }

    .input-group i {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: #999;
    }

    .login-button {
      background:  #4CAF50;
      padding: 12px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
      border: 2px solid white;
      background: transparent;
      color: white;
      font-weight: bold;
    }

    .login-button:hover {
      background: rgb(89, 201, 94);
    }

    .login-button:active {
      background: #3e8e41;
    }

    .or-divider {
      text-align: center;
      margin: 20px 0 10px;
      font-size: 12px;
      color: #FFFFFF;
    }

    .social-icons {
      display: flex;
      justify-content: center;
      gap: 12px;
    }

    .social-icons button {
      border: 1px solid #ccc;
      border-radius: 50%;
      width: 38px;
      height: 38px;
      display: flex;
      justify-content: center;
      align-items: center;
      background: white;
      cursor: pointer;
      transition: 0.3s;
    }

    .social-icons button:hover {
      background: black;
      color: white;
    }
  </style>
</head>
<body>
  <?php include 'header.php'; ?>
  <?php include 'sidebar.php'; ?>
  <?php include 'hexagons.php'; ?>

  <div class="login-card">
    <div class="welcome-panel">
      <h3>Welcome Back!</h3>
      <p>Already have an account?</p>
      <a href="login.php"><button>Login</button></a>
    </div>

    <form class="login-form">
      <h2>Sign Up</h2>

      <div class="input-group">
        <input type="text" placeholder="Full Name" required />
        <i class="fas fa-user"></i>
      </div>

      <div class="input-group">
        <input type="email" placeholder="Email" required />
        <i class="fas fa-envelope"></i>
      </div>

      <div class="input-group">
        <input type="text" placeholder="Student ID" required />
        <i class="fas fa-book"></i>
      </div>

      <div class="input-group">
        <input type="password" placeholder="Password" required />
        <i class="fas fa-lock"></i>
      </div>

      <div class="input-group">
        <input type="password" placeholder="Confirm Password" required />
        <i class="fas fa-lock"></i>
      </div>

      <button type="submit" class="login-button">Sign Up</button>

      <p class="or-divider">or sign up with</p>

      <div class="social-icons">
        <button type="button"><i class="fab fa-google"></i></button>
        <button type="button"><i class="fab fa-facebook-f"></i></button>
        <button type="button"><i class="fab fa-github"></i></button>
        <button type="button"><i class="fab fa-linkedin-in"></i></button>
      </div>
    </form>
  </div>

  <?php include 'footer.php'; ?>
<script type="module">
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-app.js";
  import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-auth.js";

  const firebaseConfig = {
    apiKey: "AIzaSyDNRIJc8td0k03lKHnJ6lHAHlWXdY6yhbM",
    authDomain: "ecexchange-b6fd4.firebaseapp.com",
    projectId: "ecexchange-b6fd4",
    storageBucket: "ecexchange-b6fd4.firebasestorage.app",
    messagingSenderId: "702935738337",
    appId: "1:702935738337:web:8419f6f6c7dd8644db54a0"
  };

  const app = initializeApp(firebaseConfig);
  const auth = getAuth(app);

  const form = document.querySelector('.login-form');
  const emailInput = form.querySelector('input[type="email"]');
  const passwordInput = form.querySelectorAll('input[type="password"]')[0];
  const confirmPasswordInput = form.querySelectorAll('input[type="password"]')[1];

  form.addEventListener('submit', (e) => {
    e.preventDefault();

    const email = emailInput.value.trim();
    const password = passwordInput.value;
    const confirmPassword = confirmPasswordInput.value;

    if (password !== confirmPassword) {
      alert("Passwords do not match.");
      return;
    }

    createUserWithEmailAndPassword(auth, email, password)
      .then((userCredential) => {
        alert("Signup successful!");
        window.location.href = "login.php"; // Redirect to login page
      })
      .catch((error) => {
        alert("Error: " + error.message);
      });
  });
</script>
</body>
</html>