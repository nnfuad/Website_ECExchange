<style>
        /* Hexagon Background */
        .hexagon {
        position: fixed !important;
        width: 60px;
        height: 34.64px;
        background-color: #3be477; /* Default color */
        margin: 17.32px 0;
        transform: rotate(90deg);
        z-index: 0; /* Set z-index lower than content */
    }
    
    /* Hexagon shape using :before and :after */
    .hexagon:before,
    .hexagon:after {
        content: "";
        position: absolute;
        width: 0;
        border-left: 30px solid transparent;
        border-right: 30px solid transparent;
        transition: border-color 0.2s ease;
    }
    
    .hexagon:before {
        bottom: 100%;
        border-bottom: 17.32px solid #3be477; /* Default color */
    }
    
    .hexagon:after {
        top: 100%;
        width: 0;
        border-top: 17.32px solid #3be477; /* Default color */
    }
    
    .hexagon:hover{
        animation: none;
        background-color: #ffff00ea; /* Change to yellow on hover */

    }
   
    .hexagon:hover:before {
        border-bottom-color: #ffff00ea; /* Change to yellow on hover */

    }
    
    .hexagon:hover:after {
        border-top-color: #ffff00ea; /* Change to yellow on hover */


    }


/* Change colors on body hover */
body.theme-yellow .hexagon,
body.theme-yellow .header,
body.theme-yellow .footer,
body.theme-yellow .sidebar,
body.theme-yellow .login-box button {
    background: #ffff00ea !important;
    color: black !important;
}

body.theme-yellow .hexagon::after,
body.theme-yellow .hexagon::before{
    border-bottom-color: #ffff00ea;
    border-top-color: #ffff00ea;
}
</style>

<!-- Hexagons for Background -->
    <div class="hexagon" style="top: 20%; left: 10%;"></div>
    <div class="hexagon" style="top: 30%; left: 25%;"></div>
    <div class="hexagon" style="top: 50%; left: 30%;"></div>
    <div class="hexagon" style="top: 80%; left: 50%;"></div>
    <div class="hexagon" style="top: 80%; left: 60%;"></div>
    <div class="hexagon" style="top: 30%; left: 80%;"></div>
    <div class="hexagon" style="top: 90%; left: 85%;"></div>
    <div class="hexagon" style="top: 60%; left: 90%;"></div>
    <div class="hexagon" style="top: 20%; left: 9%;"></div>
    <div class="hexagon" style="top: 10%; left: 5%;"></div>
    <div class="hexagon" style="top: 30%; left: 80%;"></div>
    <div class="hexagon" style="top: 10%; left: 50%;"></div>

<script>
    // Function to move hexagons like DVD logo animation
function startHexagonMovement() {
    // Select all hexagons
    const hexagons = document.querySelectorAll('.hexagon');
    
    hexagons.forEach(hexagon => {
        // Get the initial position from inline styles
        let xPos = parseFloat(hexagon.style.left);  // Initial horizontal position (percentage value)
        let yPos = parseFloat(hexagon.style.top);   // Initial vertical position (percentage value)

        // Convert percentage values to actual pixel positions based on the window size
        xPos = (xPos / 100) * window.innerWidth;
        yPos = (yPos / 100) * window.innerHeight;

        let xSpeed = 3 + Math.random() * 3; // Random speed on x-axis
        let ySpeed = 1 + Math.random() * 2; // Random speed on y-axis

        // Function to move the hexagon
        function moveHexagon() {
            // Update position
            xPos += xSpeed;
            yPos += ySpeed;

            // Check for horizontal boundary collision (left and right)
            if (xPos + 60 > window.innerWidth || xPos < 0) {
                xSpeed = -xSpeed; // Reverse the horizontal speed to bounce off
            }

            // Check for vertical boundary collision (top and bottom)
            if (yPos + 34.64 > window.innerHeight || yPos < 0) {
                ySpeed = -ySpeed; // Reverse the vertical speed to bounce off
            }

            // Apply new position to the hexagon (convert back to percentage)
            hexagon.style.left = `${(xPos / window.innerWidth) * 100}%`;
            hexagon.style.top = `${(yPos / window.innerHeight) * 100}%`;

            // Keep the hexagon moving
            requestAnimationFrame(moveHexagon);
        }

        // Start the movement for this hexagon
        moveHexagon();
    });
}

// Call the function to start the movement after page load
window.onload = startHexagonMovement;


const hexagons = document.querySelectorAll('.hexagon');
const body = document.body;

hexagons.forEach(hexagon => {
    hexagon.addEventListener('mouseenter', () => {
body.classList.add('theme-yellow');
    });

    hexagon.addEventListener('mouseleave', () => {
        body.classList.remove('theme-yellow');
    });
});

</script>