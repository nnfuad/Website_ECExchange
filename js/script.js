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

function openAndFocusSearch(event) {
  event.preventDefault();

  const sidebar = document.querySelector('.sidebar');
  const searchInput = document.getElementById('sidebar-search');

  sidebar.classList.add('active');

  setTimeout(() => {
    searchInput.focus();
  }, 300); // Delay for smooth transition
}

function openAndFocusSearch(event) {
    event.preventDefault(); // Prevent link reload
    const sidebar = document.querySelector('.sidebar');
    const searchInput = document.getElementById('sidebar-search');

    // Open the sidebar if not already open
    if (!sidebar.classList.contains('active')) {
        sidebar.classList.add('active');
    }

    // Focus the input after slight delay to ensure it's visible
    setTimeout(() => {
        searchInput.focus();
    }, 100);
}
