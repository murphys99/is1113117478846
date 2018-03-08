<?php
//Start the session
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <link rel="icon" href="https://www.cubsucc.com/contentFiles/staffProfileImages/CUBSLogoColCMYK16.png">
        <link href="https://fonts.googleapis.com/css?family=Leckerli+One" rel="stylesheet">
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
        <meta charset= "utf-8">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="Ebus2_validator.js"></script>
    </head>
    <body>
        
     
         
         
         
          <ul>
         
               <li><a href="../homepage.html">Homepage</a></li>
               <li><a href="../cv_page1.html">CV</a></li>
               <li><a href="../interests/interests-menu.html">Interests</a></li>
               <li><a href="skysales.html">Sky Sales</a></li>
               <li><a href="info.html">About Cloud</a></li>
                <li><a href="Ebus1.php">Products</a></li>
               
     </ul>
        <div class="main">
            <h4>enter your payment details</h4>
            
            <form action="Ebus3.php" method="POST">
                
                <label for="name">
                    Name
                <input type="text" id="name" name="name" placeholder="enter name" maxlength="30">
                </label>
                
                <br>
                <br>
                
                <label for="email_address">
                    E-mail
                <input type="email" id="email_address" name="email" placeholder="your@email.com" maxlength="50">
                </label>
                
                <br>
                <br>
                
                <label for="user_pin">PIN
                <input type="password" id="user_pin" placeholder="CARD PIN" maxlength="4">
                </label>
                
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                
            </form>
            
            <br/>
            <button onClick="validateName()">Validate</button>
            <script type="text/javascript" src="Ebus2_validator.js"></script>
              <a href="Ebus1.php" class="back">
              <img src= "../images/back.png" height=75 width=75></a>
        <?php
        //set the session variables
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["total"] = $_POST["total"];
        ?>
    <div/>
</body>
    
    
</html>