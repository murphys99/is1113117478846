<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>RECEIPT</title>
    
    <link rel="icon" href="https://www.cubsucc.com/contentFiles/staffProfileImages/CUBSLogoColCMYK16.png">
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One" rel="stylesheet">
    <link rel="stylesheet" href="ebus.css" type="text/css"/>
    <meta charset= "utf-8">
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
        <h4>RECEIPT</h4>
    
    <?php
    //Echo variables that were set on previous page echo "total is " . $_SESSION["total"] . ".";
     echo "Name is " . $_POST["name"] . "." . "<br>";
    
     
     
     echo "Email is " . $_POST["email"] . "." . "<br>";
    
     
     echo "Total is " . $_SESSION["total"] . ".";
     
     
    ?>
      <a href="Ebus2.php" class="back">
              <img src= "../images/back.png" alt="back" height=75 width=75></a>
              
    </div>

</body>
</html>