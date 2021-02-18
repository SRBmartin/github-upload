<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP project</title>
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <a href="index.php"><img id="logo-img" src="img/logo.png" alt="logo brand"></a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="discover.php">About us</a></li>
                    <li><a href="blog.php">Find Blogs</a></li>
                    <?php 
                        if(isset($_SESSION["userid"])){
                            echo "<li><a href='signup.php'>Profile page</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                        }
                        else{
                            echo "<li><a href='signup.php'>Sign up</a></li>";
                            echo "<li><a href='login.php'>Login</a></li>";
                        }
                    ?>
                    
                </ul>
            </div> 
    </nav>
    <section class="wrap">