<!-- Connection to Database: -->
<?php include 'config/database.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS: -->
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="APIcall.css">
    
    <!-- Link to Fontawesome.com open source icons: -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    

    <title>Ryan Bills</title>
</head>

<body>
    <nav class="navbar">
            
            <!-- Name: -->
            <div class="myname">
                <h4>Ryan Bills</h4>
            </div>
            
            <!-- Page Links: -->
            <div class="links" id="links">
                    <a class="nav-link" href="/resume/index.php"> Welcome </a>
                    <a class="nav-link" href="/resume/about.php"> About Me </a>
                    <a class="nav-link" href="/resume/military.php"> Military Career </a>
                    <a class="nav-link" href="/resume/projects.php"> Projects </a>
            </div>

            <!-- Contact: -->
            <div class="nav-item" id="nav-item">
                <a class="contact" href="/resume/contact.php"><h4>Contact Me!</h4></a>
            </div>
            <button class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </button>
    </nav>
    <script src="scripts.js"></script>
<main>
  <div class="content">