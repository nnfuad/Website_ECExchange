    <!-- Hexagons for Background -->
    <div class="hexagon" style="top: 20%; left: 10%;"></div>
    <div class="hexagon" style="top: 30%; left: 25%;"></div>
    <div class="hexagon" style="top: 50%; left: 30%;"></div>
    <div class="hexagon" style="top: 80%; left: 50%;"></div>
    <div class="hexagon" style="top: 80%; left: 60%;"></div>
    <div class="hexagon" style="top: 30%; left: 80%;"></div>
    <div class="hexagon" style="top: 90%; left: 85%;"></div>
    <div class="hexagon" style="top: 60%; left: 90%;"></div>
    <div class="hexagon" style="top: 20%; left: 95%;"></div>
    <div class="hexagon" style="top: 10%; left: 5%;"></div>
    <div class="hexagon" style="top: 30%; left: 95%;"></div>
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
        let ySpeed = 1 + Math.random() * 1; // Random speed on y-axis

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
</script>