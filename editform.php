<?php include "connect.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $stmt = $pdo->prepare("DELETE FROM member WHERE username=?");
    $stmt->bindParam(1,$_GET["username"]);
    if($stmt->execute())
        header("location:index.php");
        ?>

    
</body>
</html>