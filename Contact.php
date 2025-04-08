<!DOCTYPE html>
<ht lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features</title>
    <title>ProDesk247</title>
    <meta charset="utf-8" />
    <meta name="viewport"content="width=device-width, initial-scale=1" />
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="asserts/css/style.css">
</head>

 <!--Navbar-->

 <?php include 'includes/header.php' ?>

<div class="content-x">
    <h1>ProDesk247</h1>
    <h1>We’re here to help you grow</h1>
    <p>Feel free to reach out to us through your preferred method of contact. We are eager to connect with you and explore how our comprehensive solutions can contribute to your success.</p>
</div>

<div class="container">
        <!-- Left Column: Contact Info -->
        <div class="left-column">
            <h2>Contact Us</h2>
            <p><span class="icon">📞</span> Phone: +123 0307014195/ 0246254602</p>
            <p><span class="icon">📍</span> E-mail Address: info@prodesk247.com<br>hello@nunyasolutions.com</p>
            <p><span class="icon">📍</span> Address: 52 North Industrial Dadeban Road,<br> Greater Accra</p>
            <p><span class="icon">🌍</span> Location: <a href="#" style="color: #fff; text-decoration: none;">View on Map</a></p>
            
            <!-- Google Map Embed -->
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8354345093747!2d144.9537353153166!3d-37.816279742021665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d2a5d5f0d4f5!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sus!4v1622549402996!5m2!1sen!2sus"
                    allowfullscreen
                    loading="lazy">
                </iframe>
                <h1>ProDesk247</h1>
                <p>Your Number One System Management Control Panel</p>
            </div>

        </div>

        <!-- Right Column: Form -->
        <div class="right-column">
            <h2>Get in Touch</h2>
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="company">Company Name</label>
                    <input type="text" id="company" name="company" placeholder="Enter your company name">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
                </div>
                <div class="form-group">
                    <label for="request">How can we help you?</label>
                    <textarea id="request" name="request" placeholder="Enter your request" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">GET IN TOUCH</button>
                </div>
            </form>
        </div>
    </div>


 <?php include 'includes/footer.php' ?>




<script src="asserts/js/index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>