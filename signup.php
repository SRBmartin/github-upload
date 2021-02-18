<?php
include_once "header.php";
?>
    <section class="signup-form">
        <h2>Sign up</h2>
        <center><form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full name..">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Repeat password">
            <button type="submit" name="submit">Sign up</button>
        </form></center>
<?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all the fields.</p>";
        }
        else if($_GET["error"] == "invaliduid"){
            echo "<p>Choose the proper username.</p>";
        }
        else if($_GET["error"] == "invalidemail"){
            echo "<p>Choose the proper email.</p>";
        }
        else if($_GET["error"] == "passwordsdontmatch"){
            echo "<p>Passwords dont match.</p>";
        }
        else if($_GET["error"] == "stmtfailed"){
            echo "<p>Something went wrong. Try again later.</p>";
        }
        else if($_GET["error"] == "usernametaken"){
            echo "<p>Choose another username.</p>";
        }
        else if($_GET["error"] == "none"){
            echo "<p>You have singed up.</p>";
        }
    }
?>
    </section>


<?php
include_once "footer.php";
?>