<style>
  .sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 240px;
    height: 100%;
    background: #3be477;
    padding-top: 60px;
    transition: 0.3s;
    display: none;
    z-index: 1000;
  }

  .sidebar.active {
    display: block;
    opacity: 0.95;
  }

  .search-bar {
    padding: 10px;
    margin: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: calc(100% - 20px);
  }

  .nav-list {
    list-style: none;
    padding: 0;
    margin: 0;
    justify-self: center;

  }

  .nav-list li {
    margin: 5px;
  }

  .nav-list a {
    display: flex;
    align-items: center;
    padding: 10px;
    text-decoration: none;
    color: black;
    font-weight: bold;
    transition: background 0.3s;
  }

  .nav-list a:hover {
    background:rgba(0, 0, 0, 0.7);
    color: white;
    border-radius: 5px;
  }

  .nav-list i {
    font-size: 20px;
    width: 30px;
    text-align: center;
  }

  .nav-text {
    opacity: 1;
    transition: 0.3s;
  }
</style>

<nav class="sidebar" id="sidebar">
    <form action="search.php" method="GET">
        <input type="text" name="q" class="search-bar" placeholder="Search..." />
    </form>
  <ul class="nav-list">
    <li><a href="index.php"><i class="fa-solid fa-house-chimney"></i><span class="nav-text"> Home</span></a></li>
    <li><a href="https://ecebooks-71501.web.app/" target="_blank"><i class="fa fa-book"></i><span class="nav-text"> Books</span></a></li>
    <li><a href="resources.php"><i class="fas fa-cogs"></i><span class="nav-text"> Resources</span></a></li>
    <li><a href="#"><i class="fas fa-cogs"></i><span class="nav-text"> Services</span></a></li>
    <li><a href="login.php"><i class="fa-solid fa-right-to-bracket"></i><span class="nav-text"> Student Login</span></a></li>
    <li><a href="login.php"><i class="fa-solid fa-chalkboard-user"></i><span class="nav-text"> Teacher Login</span></a></li>
    <li><a href="about.php"><i class="fas fa-info-circle"></i><span class="nav-text"> About</span></a></li>
    <li><a href="#" onclick="openAndFocusSearch(event)"><i class="fas fa-search"></i><span class="nav-text"> Search</span></a></li>
  </ul>
</nav>

<!-- Sidebar Script -->
<script>

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


  function filterNavItems() {
    const input = document.getElementById('sidebar-search');
    const filter = input.value.toLowerCase();
    const navItems = document.querySelectorAll('.nav-list li');

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
    }, 200);
  }
</script>