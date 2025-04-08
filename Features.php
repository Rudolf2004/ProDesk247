<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js Library -->
    <link rel="stylesheet" href="asserts/css/style.css">
</head>

 <!--Navbar-->

 <?php include 'includes/header.php' ?>



    <!-- Dashboard Section -->
<section class="dashboard-section">
    <h2>Dashboard Overview</h2>
    <p>Our intuitive dashboard provides a centralized view of all key metrics and tools to streamline your workflow.</p>
    <div class="chart-container">
        <!-- Line Chart -->
        <div class="chart-card">
            <h4>Monthly Performance</h4>
            <canvas id="lineChart"></canvas>
        </div>
        <!-- Bar Chart -->
        <div class="chart-card">
            <h4>Department Ratings</h4>
            <canvas id="barChart"></canvas>
        </div>
        <!-- Pie Chart -->
        <div class="chart-card">
            <h4>Task Distribution</h4>
            <canvas id="pieChart"></canvas>
        </div>
        <!-- Doughnut Chart -->
        <div class="chart-card">
            <h4>Resource Allocation</h4>
            <canvas id="doughnutChart"></canvas>
        </div>
    </div>
</section>


<!--features-->
    <section class="features">
        <h1 class="key">Key Features</h1>
        <hr class="custom-hr">
    </section>


 <div class="container-rap">
    <a href="pages/feature-inventory.php" class="icon-text-container">
        <img src="asserts/images/Hr.png" alt="Icon" class="icon">
        <div class="text">
            <h3>Human <br>Resource <br>Management</h3>
           
        </div>
    </a>
    <a href="pages/feature-payroll.php" class="icon-text-container">
        <img src="asserts/images/Hr - Copy.png" alt="Icon" class="icon">
        <div class="text">
            <h3>Client<br>Relation<br>Management</h3>
            
        </div>
    </a>
    <a href="pages/feature-marketing.php" class="icon-text-container">
        <img src="asserts/images/Hr2.png" alt="Icon" class="icon">
        <div class="text">
            <h3>Marketing<br>Department<br>Management</h3>
            
        </div>
    </a>
    <a href="pages/feature-procurement.php" class="icon-text-container">
        <img src="asserts/images/Hr3.png" alt="Icon" class="icon">
        <div class="text">
            <h3>Procurment<br>with<br>Inventory<br>Management</h3>
            
        </div>
    </a>
</div>

<div class="container-rap">
    <a href="pages/feature-assets.php" class="icon-text-container">
        <img src="asserts/images/c.png" alt="Icon" class="icon">
        <div class="text">
            <h3>Company <br>Asserts <br>Management</h3>
            
        </div>
    </a>
    <a href="pages/feature-payroll.php" class="icon-text-container">
        <img src="asserts/images/c1.png" alt="Icon" class="icon">
        <div class="text">
            <h3>Payroll<br>Management<br>& Reports</h3>
            
        </div>
    </a>
    <a href="pages/feature-remote-staff.php" class="icon-text-container">
        <img src="asserts/images/c2.png" alt="Icon" class="icon">
        <div class="text">
            <h3>Recruitement<br>Management</h3>
            
        </div>
    </a>
    <a href="#" class="icon-text-container">
        <img src="asserts/images/c3.png" alt="Icon" class="icon">
        <div class="text">
            <h3>Virtual<br>Meeting<br>Management</h3>
            
        </div>
    </a>
</div>

<div class="container-rap">
    <a href="pages/feature-project.php" class="icon-text-container">
        <img src="asserts/images/p.png" alt="Icon" class="icon">
        <div class="text">
            <h3>Project<br>Management<br>& Project<br>Roadmap</h3>
           
        </div>
    </a>
    <a href="pages/feature-remote-staff.php" class="icon-text-container">
        <img src="asserts/images/p1.png" alt="Icon" class="icon">
        <div class="text">
            <h3>Remote<br>Staff<br>Management</h3>
            
        </div>
    </a>
    <a href="pages/feature-finance.php" class="icon-text-container">
        <img src="asserts/images/p2.png" alt="Icon" class="icon">
        <div class="text">
            <h3>Finance<br>Accounting<br>Management</h3>
            
        </div>
    </a>
    <a href="pages/feature-overall.php" class="icon-text-container">
        <img src="asserts/images/p3.png" alt="Icon" class="icon">
        <div class="text">
            <h3>Overall<br>Administration<br>All Department</h3>
            
        </div>
    </a>
</div>



 <?php include 'includes/footer.php' ?>




<script src="asserts/js/index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>