<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us - ECExchange</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #1a1a1a;
      color: white;
    }

    .contact-container {
      max-width: 1100px;
      margin: 0 auto;
      padding: 60px 20px;
      
    }

    h1 {
      text-align: center;
      font-size: 42px;
      margin-bottom: 30px;
      z-index: 10;
    }

    .contact-wrapper {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: center;
    }

    .contact-form {
      flex: 1;
      min-width: 300px;
      background: rgba(255, 255, 255, 0.05);
      padding: 30px;
      border-radius: 10px;
      backdrop-filter: blur(5px);
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border-radius: 6px;
      border: none;
      background: #f0f0f0;
      color: #333;
      font-size: 14px;
    }

    .contact-form textarea {
      resize: vertical;
      height: 120px;
    }

    .contact-form button {
      background: #4CAF50;
      color: white;
      padding: 12px;
      width: 100%;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }

    .contact-form button:hover {
      background: #388e3c;
    }

    #map {
      flex: 1;
      min-width: 300px;
      height: 400px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
    }

    @media screen and (max-width: 768px) {
      .contact-wrapper {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

  <?php include 'header.php'; ?>
  <?php include 'sidebar.php'; ?>
  <?php include 'hexagons.php'; ?>

  <div class="contact-container">
    <h1>Contact Us</h1>

    <div class="contact-wrapper">
      <form class="contact-form" method="POST" action="">
        <input type="text" name="name" placeholder="Your Name" required />
        <input type="text" name="name" placeholder="Your ID" required />
        <input type="email" name="email" placeholder="Your Email" required />
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
      </form>

      <div id="map"></div>
    </div>
  </div>

  <?php include 'footer.php'; ?>

  <script
    src="https://maps.googleapis.com/maps/api/js?key=<?= $googleMapsApiKey ?>&callback=initMap"
    async defer>
  </script>

  <script>
    function initMap() {
      const ruetECE = { lat: 24.364257906768593, lng: 88.6298803441791 }; // ECE coordinates
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 16,
        center: ruetECE,
      });

      new google.maps.Marker({
        position: ruetECE,
        map: map,
        title: "ECE Dept - RUET"
      });
    }
  </script>
</body>
</html>