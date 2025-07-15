function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('active');
}


document.addEventListener('click', function (event) {
    const sidebar = document.querySelector('.sidebar');
    const toggleButton = document.querySelector('.menu-toggle');

    
    if (!sidebar.contains(event.target) && !toggleButton.contains(event.target)) {
        sidebar.classList.remove('active');
    }
});

function openAndFocusSearch(event) {
  event.preventDefault();

  const sidebar = document.querySelector('.sidebar');
  const searchInput = document.getElementById('sidebar-search');

  sidebar.classList.add('active');

  setTimeout(() => {
    searchInput.focus();
  }, 300);
}

function openAndFocusSearch(event) {
    event.preventDefault(); // Prevent link reload
    const sidebar = document.querySelector('.sidebar');
    const searchInput = document.getElementById('sidebar-search');

    
    if (!sidebar.classList.contains('active')) {
        sidebar.classList.add('active');
    }

    
    setTimeout(() => {
        searchInput.focus();
    }, 100);
}


