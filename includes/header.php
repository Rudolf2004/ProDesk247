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
    <!-- Brand Image -->
    <div class="brand">
      <img src="logo.png" alt="Brand Logo" class="brand-image">
    </div>
    <!-- Hamburger Menu Icon (for mobile) -->
    <div class="menu-toggle" id="mobile-menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>

    <!-- Navigation Links -->
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
     
      <li class="featured-popup">
  <a href="Features.php">Features</a>
  <!-- Pop-up container inside the list item -->
  <div class="popup-container">
    <div class="popup-content">
      <!-- Left Section -->
      <div class="popup-left">
        <a href="#" class="popup-item">
          <i class="fas fa-users icon"></i>
          <span>Human Resource Management</span>
        </a>
        <a href="#" class="popup-item">
          <i class="fas fa-money-bill-wave icon"></i>
          <span>Payroll Management</span>
        </a>
        <a href="#" class="popup-item">
          <i class="fas fa-box icon"></i>
          <span>Procurement Management</span>
        </a>
        <a href="#" class="popup-item">
          <i class="fas fa-tasks icon"></i>
          <span>Project Management</span>
        </a>
      </div>

      <!-- Divider -->
      <div class="popup-divider"></div>

      <!-- Right Section -->
      <div class="popup-right">
        <a href="#" class="popup-item">
          <i class="fas fa-coins icon"></i>
          <span>Finance Management</span>
        </a>
        <a href="#" class="popup-item">
          <i class="fas fa-user-tie icon"></i>
          <span>Remote Staff Management</span>
        </a>
        <a href="#" class="popup-item">
          <i class="fas fa-briefcase icon"></i>
          <span>Asset Management</span>
        </a>
        <a href="#" class="popup-item">
          <i class="fas fa-handshake icon"></i>
          <span>Client Relation Management</span>
        </a>
      </div>
    </div>

    <!-- Small Bottom Box -->
    <div class="bottom-box">
      <i class="fas fa-info-circle"></i>
      <p>More Features Coming Soon</p>
    </div>
  </div>
</li

      <li><a href="#">Roadmap</a></li>
      <li><a href="#">Contact</a></li>
    </ul>

    <!--Demo-->
    <div class="request-demo">
      <button id="requestDemobutton">REQUEST A DEMO</button>
    </div>
  </nav>

  <script src="script.js"></script>
</body>
</html>