<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About ECExchange</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<style>

</style>
<body>

    <?php include 'header.php'; ?>

    <?php include 'hexagons.php'; ?>

<div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px;">
  
  <!-- About Website -->
  <div class="card-container">
    <div class="card">
      <div class="card-face front">
        <i class="fa fa-info-circle" aria-hidden="true"><div> About Website</div></i>
      </div>
      <div class="card-face back">
        This is a platform for the members of
        department of <i>ECE @ RUET</i> that allows 
        file and resource sharing between students and
        teachers — and beyond.
      </div>
    </div>
  </div>

  <!-- How it Started -->
  <div class="card-container">
    <div class="card">
      <div class="card-face front">
        <i class="fa fa-fast-backward" aria-hidden="true"><div> How it started?</div></i>
      </div>
      <div class="card-face back">
        <img src="img/header_logo.png" style="height: 50px; width: auto;">
        This page was started as a software project during the 3rd semester of ECE@RUET curriculum 
        by a <a href="https://github.com/nnfuad/" target="_blank" style="text-decoration: none;">student</a> advised by
        <a href="https://ruet.ac.bd/omaerfaruq" target="_blank" style="text-decoration: none;">Md. Omaer Faruq Goni</a>.
      </div>
    </div>
  </div>

  <!-- Why ECExchange? -->
  <div class="card-container">
    <div class="card">
      <div class="card-face front">
        <i class="fas fa-question-circle"></i>
        <div> Why ECExchange?</div>
      </div>
      <div class="card-face back">
        To simplify how ECE students access notes, slides, and questions. It removes dependency 
        on social media groups or offline sharing.
      </div>
    </div>
  </div>

  <!-- Features at a Glance -->
  <div class="card-container">
    <div class="card">
      <div class="card-face front">
        <i class="fas fa-star"></i>
        <div> Features at a Glance</div>
      </div>
      <div class="card-face back">
        ✔️ Course-wise folders<br>
        ✔️ Upload PDFs & slides<br>
        ✔️ Searchable sidebar<br>
        ✔️ Community resource sharing<br>
        ✔️ Clean, responsive design
      </div>
    </div>
  </div>

  <!-- Who can contribute? -->
  <div class="card-container">
    <div class="card">
      <div class="card-face front">
        <i class="fas fa-user-friends"></i>
        <div> Who can contribute?</div>
      </div>
      <div class="card-face back">
        Any student or teacher of ECE@RUET can upload, manage, and browse content.
        Contributions from juniors and seniors are both welcome!
      </div>
    </div>
  </div>

</div>

        <?php include 'footer.php'; ?>
        <script src="js/script.js"></script>

</body>
</html>

