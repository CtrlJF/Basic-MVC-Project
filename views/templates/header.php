<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Define the character set used: -->
        <meta charset="UTF-8">
        <!-- Define keywords for search engines: -->
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MYSQL">
        <!-- Define a description of your web page: -->
        <meta name="description" content="Basic Web System">
        <!-- Define the author of a page: -->
        <meta name="author" content="John Doe">
        <!-- Refresh document every 10 seconds: -->
        <!-- <meta http-equiv="refresh" content="10"> -->
        <!-- Setting the viewport to make your website look good on all devices: -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Defines the title of a document -->
        <title>BWS</title>
        <!-- Standard favicon -->
        <link rel="icon" href="public/img/mvc1.jpg" type="image/x-icon"> <!-- type="image/png" -->
        <!-- For Apple devices -->
        <link rel="apple-touch-icon" href="public/img/mvc1.jpg">
        <!-- For high-resolution displays -->
        <link rel="icon" sizes="192x192" href="public/img/mvc1.jpg">
        <link rel="icon" sizes="512x512" href="public/img/mvc1.jpg">
        <!-- Defines the relationship between a document and an external resource -->
        <link rel="stylesheet" href="public/css/mystyle.css">
        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
        <!-- Font Awesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body class="bg-light">
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">MVC Project</a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php?action=index&module=users" class="nav-link btn btn-dark">Users</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?action=index&module=products" class="nav-link btn btn-dark">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?action=logout&module=login" class="nav-link btn btn-dark">Logout</a>
                    </li>
                </ul>
                
            </div>
        </nav>
