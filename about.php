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

    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Hexagons for Background -->
    <?php include 'hexagons.php'; ?>

<!-- Header -->


    <!-- Main Layout -->
    <div class="container">
        
        <!-- Sidebar -->
        <?php include 'sidebar.php' ?>

        <!-- Scrollable Content -->
        <div class="main-content">
          
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px;">
            <div class="card-container">
                <div class="card">
                    <div class="card-face front">
                    <i class="fa fa-info-circle" aria-hidden="true"><div> About Website</div></i>
                    </div>
                    <div class="card-face back">
                        This is a platform for the members of
                        department of<i> ECE @ RUET </i>that allows 
                        files and resource sharing between students and
                        teachers and beyond. 
                    </div>
                 </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-face front">
                    <i class="fa fa-fast-backward" aria-hidden="true"><div> How it started?</div></i>
                    </div>
                    <div class="card-face back" style="text-decoration: none;">

                        <img src="img/header_logo.png" style="height: 50px; width: auto; position: relative; top: 10px; left: 7px;">
                        This page was started as a software project assigned in the third semester of ECE@RUET curriculam 
                        by a<a href="https://github.com/nnfuad/" target="_blank" style="text-decoration: none;">student</a>
                        and was advised by
                        <a href="https://ruet.ac.bd/omaerfaruq" target="_blank" style="text-decoration: none;">Md. Omaer Faruq Goni</a>

                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="card-face front"></div>
                    <div class="card-face back"></div>
                </div>
            </div>
        </div>

        </div>

    </div>

        <!-- Footer -->
        <?php include 'footer.php'; ?>
        <script src="js/script.js"></script>

</body>
</html>

