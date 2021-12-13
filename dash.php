<?php
    session_start();
?>

<html> 
    <head>
        <title>web dev oe 5</title>
    </head>
<body>
    <div class = "box">
    <h1> WELCOME </h1> <?php
    echo $_SESSION['Email'];
    ?>
    <br><br>
    <h2> <a href = "login.php">Logout</a></h2> </div>
</body>
</hmtl>