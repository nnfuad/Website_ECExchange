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
                    <div class="card-face front"></div>
                    <div class="card-face back"></div>
                 </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-face front"></div>
                    <div class="card-face back"></div>
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

