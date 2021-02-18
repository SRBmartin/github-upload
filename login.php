<?php
include_once "header.php";
?>
    <section class="signup-form">
        <h2>Log in</h2>
        <center><form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username/Email..">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Log in</button>
        </form></center>
        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<p>Fill in all the fields.</p>";
                }
                else if($_GET["error"] == "wronglogin"){
                    echo "<p>Incorrect login information.</p>";
                }
            }
        ?>
    </section>
<?php
include_once "footer.php";
?>