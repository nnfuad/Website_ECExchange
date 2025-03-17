<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About ECExchange</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="js/script.js"></script>

</head>
<body>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Hexagons for Background -->
    <?php include 'hexagons.php'; ?>

<!-- Header -->


    <!-- Main Layout -->
    <div class="container">
        
        <!-- Sidebar -->
        <nav class="sidebar">
            <input type="text" class="search-bar" placeholder="Search..." onkeyup="filterNavItems()">
            <ul class="nav-list">
                <li ><a href="index.php" ><i class="fa-solid fa-house-chimney"></i><span class="nav-text"> Home</span></a></li>
                <li ><a href="#" ><i class="fas fa-tools"></i><span class="nav-text"> Tools</span></a></li>
                <li><a href="#"><i class="fas fa-cogs"></i><span class="nav-text"> Services</span></a></li>
                <li><a href="login.php"><i class="fa-solid fa-right-to-bracket"></i><span class="nav-text">Student Login</span></a></li>
                <li><a href="#"><i class="fas fa-info-circle"></i><span class="nav-text"> About</span></a></li>
                <!-- <li><a href="#">< i class="fas fa-search"></><span class="nav-text"> Search</span></a></li> -->
            </ul>
        </nav>

        <!-- Scrollable Content -->
        <div class="main-content">
            <h2>This is ECExchange, a notes and resources sharing website for dept of ECE.</h2>
            <p>This is a scrollable area with some sample text.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed quam ac risus eleifend lacinia.</p>
            <p>More content goes here...</p>
            <p>Scroll down to see more content.</p>
            <p>More content goes here...</p>
            <p>More content goes here...</p>
            <p>More content goes here...</p>
            <p>More content goes here...</p>
            <p>More content goes here...</p>
            <p>More content goes here...</p>
            <p>More content goes here...</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui autem officia nulla aliquam nam assumenda illo voluptatum, animi veritatis delectus laudantium suscipit corrupti id veniam esse iure odit et excepturi doloribus rem adipisci voluptas. Earum consequuntur repudiandae fugit tempora porro esse laboriosam eum harum eius cupiditate facilis, dignissimos explicabo mollitia aut magni veniam et repellat voluptas quam sapiente voluptatibus doloribus aliquam. Obcaecati recusandae ex reprehenderit! Reiciendis, officia tempora quae alias, nihil veritatis ipsam itaque est et deleniti dolorum quas asperiores placeat ducimus soluta cumque dignissimos sequi perferendis illo voluptates nesciunt. Dolorum non porro nobis corrupti maiores fuga mollitia dolorem necessitatibus. Tempore unde vero ab est quo aliquid expedita officiis, dolore nulla, quam magni odit fugiat aliquam et in odio perspiciatis praesentium. Explicabo pariatur voluptatem numquam quas excepturi molestias modi hic labore, quos error. Illo facilis, eum labore molestias ullam laborum magnam asperiores dicta repudiandae odio ex, error modi debitis iusto? Quibusdam reprehenderit corporis, perspiciatis officia repudiandae totam ad dolores maxime veritatis eius ex odit deserunt facere dolore ipsam. Hic tenetur doloremque nemo nam aut. Saepe officia tenetur rem perspiciatis quaerat tempora voluptas reprehenderit pariatur omnis temporibus nostrum neque porro hic qui laboriosam, voluptates doloribus vitae facere sunt autem ea nisi.</p>
        </div>

    </div>

        <!-- Footer -->
        <?php include 'footer.php'; ?>
        <script src="js/script.js"></script>

</body>
</html>