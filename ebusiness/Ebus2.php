<?php
//Start the session
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="Ebus2_validator.js"></script>
    </head>
    <body>
        <h4>enter your payment details</h4>
        
        <form action="Ebus3.php" method="POST">
            
            <label for="name">Name</label>
            <input type="text" id="name" placeholder="enter name" maxlength="30"            
            
            <label for="email_address">E-mail</label>
            <input type="email" id="email_address" placeholder="your@email.com" maxlength="50"/>
            
            
            <label for-"user_pin">PIN</label>
            <input type="password" id="user_pin" placeholder="CARD PIN" maxlength="4">
            
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            
        </form>
        
        <br/>
        <button onClick="validateName()">Validate</button>
        <script type="text/javascript" src="Ebus2_validator.js"></script>
    
    <?php
    //set the session variables
    $_SESSION["total"] = $_POST["total"];
    ?>
    
    </body>
    
    
</html>