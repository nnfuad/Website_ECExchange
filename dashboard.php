<?php
session_start();

// OPTIONAL: If using dummy login session
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - ECExchange</title>
  <link rel="stylesheet" href="css/styles.css">
  <style>
    .dashboard-container {
      padding: 50px;
      color: white;
    }
    .logout-button {
      padding: 10px 20px;
      border: none;
      background: #e53935;
      color: white;
      border-radius: 6px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <?php include 'header.php'; ?>
  <?php include 'sidebar.php'; ?>
  <?php include 'hexagons.php'; ?>

  <div class="dashboard-container">
    <h1>Welcome to the Dashboard!</h1>
    <p>You are now logged in.</p>

    <button class="logout-button" onclick="logout()">Logout</button>
  </div>

  <?php include 'footer.php'; ?>

  <script type="module">
    import { getAuth, signOut } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-auth.js";
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-app.js";

    const firebaseConfig = {
      apiKey: "AIzaSyDNRIJc8td0k03lKHnJ6lHAHlWXdY6yhbM",
      authDomain: "ecexchange-b6fd4.firebaseapp.com",
      projectId: "ecexchange-b6fd4",
      storageBucket: "ecexchange-b6fd4.appspot.com",
      messagingSenderId: "702935738337",
      appId: "1:702935738337:web:8419f6f6c7dd8644db54a0"
    };

    const app = initializeApp(firebaseConfig);
    const auth = getAuth(app);

    function logout() {
      signOut(auth).then(() => {
        alert("Logged out!");
        window.location.href = "login.php";
      }).catch((error) => {
        console.error("Logout failed:", error);
      });
    }

    window.logout = logout; // Make it available globally
  </script>
</body>
</html>