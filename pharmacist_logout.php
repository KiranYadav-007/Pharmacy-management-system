<!DOCTYPE html>
<?php
session_start();
?>

<head>
    <title>Login</title>
</head>
<body>

    
<?php
    $_SESSION["pharmacistid"] = "";
    header("Location: home.php");
?>
</body>
</html>