<?php
session_start();
?>

<!DOCTYPE html>
<html><head>
    <title>RECEIPT</title>
</head>
<body>
    <h4>RECEIPT</h4>

<?php
//Echo variables that were set on previous page echo "total is " . $_SESSION["total"] . ".";
 echo "Total is " . $_SESSION["total"] . ".";
?>

    </body>
</html>