<?php
// Determine the base path dynamically
$basePath = (strpos($_SERVER['PHP_SELF'], 'pages') !== false) ? '../' : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" href="<?php echo $basePath; ?>styles.css"> <!-- Dynamic path for CSS -->
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
  <nav class="navbar">
    <!-- Brand Image -->
    <div class="brand">
      <img src="<?php echo $basePath; ?>asserts/images/Brand.webp" alt="Brand Logo" class="brand-image"> <!-- Dynamic path for image -->
    </div>
    <!-- Hamburger Menu Icon (for mobile) -->
    <div class="menu-toggle" id="mobile-menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>

    <!-- Navigation Links -->
    <ul class="nav-links">
      <li><a href="<?php echo $basePath; ?>index.php">Home</a></li>
     
      <li class="featured-popup">
        <a href="<?php echo $basePath; ?>Features.php">Features</a>
        <!-- Pop-up container inside the list item -->
        <div class="popup-container">
          <div class="popup-content">
            <!-- Left Section -->
            <div class="popup-left">
              <a href="<?php echo $basePath; ?>pages/feature-inventory.php" class="popup-item">
                <i class="fas fa-users icon"></i>
                <span>Human Resource Management</span>
              </a>
              <a href="<?php echo $basePath; ?>pages/feature-payroll.php" class="popup-item">
                <i class="fas fa-money-bill-wave icon"></i>
                <span>Payroll Management</span>
              </a>
              <a href="<?php echo $basePath; ?>pages/feature-procurement.php" class="popup-item">
                <i class="fas fa-box icon"></i>
                <span>Procurement Management</span>
              </a>
              <a href="<?php echo $basePath; ?>pages/feature-project.php" class="popup-item">
                <i class="fas fa-tasks icon"></i>
                <span>Project Management</span>
              </a>
            </div>

            <!-- Divider -->
            <div class="popup-divider"></div>

            <!-- Right Section -->
            <div class="popup-right">
              <a href="<?php echo $basePath; ?>pages/feature-finance.php" class="popup-item">
                <i class="fas fa-coins icon"></i>
                <span>Finance Management</span>
              </a>
              <a href="<?php echo $basePath; ?>pages/feature-remote-staff.php" class="popup-item">
                <i class="fas fa-user-tie icon"></i>
                <span>Remote Staff Management</span>
              </a>
              <a href="<?php echo $basePath; ?>pages/feature-remote-staff.php" class="popup-item">
                <i class="fas fa-briefcase icon"></i>
                <span>Asset Management</span>
              </a>
              <a href="<?php echo $basePath; ?>pages/feature-client-relation.php" class="popup-item">
                <i class="fas fa-handshake icon"></i>
                <span>Client Relation Management</span>
              </a>
            </div>
          </div>

          <!-- Small Bottom Box -->
          <a href="<?php echo $basePath; ?>features.php" class="bottom-box-link">
            <div class="bottom-box">
              <i class="fas fa-info-circle"></i>
              <p>Explore all Features</p>
            </div>
          </a>
        </div>
      </li>

      <li><a href="<?php echo $basePath; ?>Roadmap.php">Roadmap</a></li>
      <li><a href="<?php echo $basePath; ?>Contact.php">Contact</a></li>
    </ul>

    <!--Demo-->
    <div class="request-demo">
      <a href="<?php echo $basePath; ?>contact.php">
        <button id="requestDemobutton">REQUEST A DEMO</button>
      </a>
    </div>
  </nav>

  <script src="<?php echo $basePath; ?>script.js"></script>
</body>
</html>