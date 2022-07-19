<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style\style.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .sidebar {
                margin: 0;
                margin-top: 54px;
                padding: 0;
                width: 200px;
                background-color: #f1f1f1;
                position: fixed;
                height: 100%;
                overflow: auto;
            }
            
            /* Sidebar links */
            .sidebar a {
                display: block;
                color: black;
                padding: 16px;
                text-decoration: none;
            }
            
            /* Active/current link */
            .sidebar a.active {
                background-color: #04AA6D;
                color: white;
            }
            
            /* Links on mouse-over */
            .sidebar a:hover:not(.active) {
                background-color: #555;
                color: white;
            }
            
            /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
            div.content {
                margin-top: 70px;
                margin-left: 200px;
                padding: 1px 16px;
                height: 1000px;
            }
            
            /* On screens that are less than 700px wide, make the sidebar into a topbar */
            @media screen and (max-width: 700px) {
                .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                }
                .sidebar a {float: left;}
                div.content {margin-left: 0;}
            }
            
            /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
            @media screen and (max-width: 400px) {
                .sidebar a {
                text-align: center;
                float: none;
                }
            }
            .navbar{
                overflow: hidden;
                background-color: #333;
                position: fixed;
                top: 0;
                width: 100%;
            }
        </style>
        <title>Dashboard</title>
    </head>
    <body>
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Admin Dashboard</a>
                    
                    <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                    </div>-->
                </div>
            </nav>
        </div>

        <div class="sidebar">
            <a class="active" href="index.php">Jobs</a>
            <a href="jobs.php">Candidates Applied</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>