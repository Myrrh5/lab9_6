<?php include "connect.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
    function confirmDelete(username){
        var ans = confirm("ต้องการลบ username"+username);
        if(ans==true)
            document.location = "delete.php?username=" + username;
    }
    </script>
    </head>
     <body>
    <?php
        $stmt = $pdo->prepare("SELECT *FROM member");
        $stmt->execute();
        while($row = $stmt->fetch())
        {
    ?>
            ชื่อสมาชิก: <?=$row["name"]?><br>
            ที่อยู่:<?=$row["address"]?><br>
            email:<?=$row["email"]?><br>
            <a href="editform.php?username=<?=$row["username"]?>
            " onclick='confirmDelete("<?=$row["username"]?>")'>ลบ</a>
            <hr>
                      
        <?php } ?>
    </body>
    </html>
