<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECExchange</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
    </style>
</head>

<!-- Header -->
<header class="header">
    <span class="menu-toggle" onclick="toggleSidebar()" style="color: black;">☰</span>
    <h1><a class="header-glitch" href="index.php" style="text-decoration: none;">
        <span class="plain-text">
            <img src="img/header_logo.png" style="height: 50px; width: auto; position: relative; top: 10px; left: 7px;">
            ECExchange
        </span>
    </a></h1>

        <!-- Navbar -->
        <nav>
            <ul class="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Login <img class="drop-arrow" src="img/down.png"></a>
                    <ul class="dropdown-content">
                        <li style="height: 30px; width:auto"><a href="login.php">Log In</a></li>
                        <li style="height: 25px; width:auto"><a href="signup.php">Sign Up</a></li>
                    </ul>
                </li>
            </ul>
        </nav>


</header>


<!-- Navbar & Dropdown CSS -->
<style>

/*
    Flickering animation
    @keyframes flicker {
        0% { opacity: 1; text-shadow: 0 0 5px #fff, 0 0 10px #4CAF50, 0 0 15px #4CAF50; }
        10% { opacity: 0.8; text-shadow: none; }
        20% { opacity: 1; text-shadow: 0 0 5px #fff, 0 0 10px #4CAF50, 0 0 15px #4CAF50; }
        30% { opacity: 0.6; text-shadow: none; }
        40% { opacity: 1; text-shadow: 0 0 5px #fff, 0 0 10px #4CAF50, 0 0 15px #4CAF50; }
        50% { opacity: 0.7; text-shadow: none; }
        60% { opacity: 1; text-shadow: 0 0 5px #fff, 0 0 10px #4CAF50, 0 0 15px #4CAF50; }
        70% { opacity: 0.9; text-shadow: none; }
        80% { opacity: 1; text-shadow: 0 0 5px #fff, 0 0 10px #4CAF50, 0 0 15px #4CAF50; }
        90% { opacity: 0.5; text-shadow: none; }
        100% { opacity: 1; text-shadow: 0 0 5px #fff, 0 0 10px #4CAF50, 0 0 15px #4CAF50; }
    }

        .header-flick {
        animation: flicker 23s infinite alternate;
    }
*/

    /* Glitch Animation */


    
    @keyframes glitch {
        0% { transform: translate(0, 0); opacity: 1; }
        10% { transform: translate(-2px, 2px); opacity: 0.8; }
        20% { transform: translate(2px, -2px); opacity: 1; }
        30% { transform: translate(-3px, 3px); opacity: 0.9; }
        40% { transform: translate(3px, -3px); opacity: 0.7; }
        50% { transform: translate(-2px, 2px); opacity: 1; }
        60% { transform: translate(2px, -2px); opacity: 0.9; }
        70% { transform: translate(-1px, 1px); opacity: 1; }
        80% { transform: translate(1px, -1px); opacity: 0.8; }
        90% { transform: translate(-3px, 3px); opacity: 1; }
        100% { transform: translate(0, 0); opacity: 1; }
    }

    @keyframes glitch-color {
        0% { text-shadow: 2px 0 red, -2px 0 blue; }
        25% { text-shadow: -2px 0 red, 2px 0 blue; }
        50% { text-shadow: 2px 2px green, -2px -2px yellow; }
        75% { text-shadow: -2px -2px green, 2px 2px yellow; }
        100% { text-shadow: 0 0 white; }
    }


    /* Apply glitch effect */
    .header-glitch:hover {
        animation: glitch 2s infinite ease-in-out, glitch-color 1s infinite ease-in-out;
        animation-delay: 0s;
    }


    /* Navbar */
    .navbar {
        list-style: none;
        display: flex;
        gap: 20px;
        margin-top: 29px;
        padding: auto;
    }

    .navbar li {
        position: relative;
    }

    /* Navbar links */
    .navbar a {
        text-decoration: none;
        color: black;
        font-size: 14px;
        font-weight: bold;
        padding: 10px;
        display: block;
        transition: 0.3s ease;
    }

    .navbar a:hover {
        color: #ffeb3b;
    }

    /* Dropdown Menu */
    .dropdown {
        position: relative;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #4CAF50; /* Match header color */
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
        min-width: 150px;
        top: 100%;
        left: 0;
        border-radius: 5px;
        overflow: hidden;
        z-index: 999;
    }

    .dropdown-content li {
        display: block;
    }

    .dropdown-content a {
        padding: 10px;
        color: black;
        display: block;
        font-size: 16px;
        text-align: left;
    }

    .dropdown-content a:hover {
        background: #4CAF50;;
        color: yellow;
    }

    /* Show dropdown on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    .drop-arrow {
        padding-top: 6px;
        height: 15px;
        width: auto;
    }

</style>

