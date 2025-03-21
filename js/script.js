function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('active');
}

// Close sidebar when clicking outside of it
document.addEventListener('click', function (event) {
    const sidebar = document.querySelector('.sidebar');
    const toggleButton = document.querySelector('.menu-toggle');

    // If click is outside the sidebar and toggle button, close the sidebar
    if (!sidebar.contains(event.target) && !toggleButton.contains(event.target)) {
        sidebar.classList.remove('active');
    }
});

function filterNavItems() {
    const input = document.querySelector('.search-bar');
    const filter = input.value.toLowerCase();
    const navItems = document.querySelectorAll('.nav-list a');

    navItems.forEach(item => {
        const text = item.textContent || item.innerText;
        item.style.display = text.toLowerCase().includes(filter) ? "" : "none";
    });
}


// const hexagons = document.querySelectorAll('.hexagon');
// const body = document.body;

// hexagons.forEach(hexagon => {
//     hexagon.addEventListener('mouseenter', () => {
// body.classList.add('theme-yellow');
//     });

//     hexagon.addEventListener('mouseleave', () => {
//         body.classList.remove('theme-yellow');
//     });
// });
