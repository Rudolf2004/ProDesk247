<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" href="styles.css">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
  <nav class="navbar">
    <!-- Brand Name -->
    <div class="brand">ProDesk247</div>

    <!-- Hamburger Menu Icon (for mobile) -->
    <div class="menu-toggle" id="mobile-menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>

    <!-- Navigation Links -->
    <ul class="nav-links">
      <li><a href="#">Home</a></li>
      <li><a href="#">Features</a></li>
      <li><a href="#">Roadmap</a></li>
      <li><a href="#">Contact</a></li>
    </ul>

    <!-- Search Bar -->
    <div class="search-bar">
      <input type="text" placeholder="Search...">
      <button><i class="fas fa-search"></i></button>
    </div>
  </nav>

  <script src="script.js"></script>
</body>
</html>