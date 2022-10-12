<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartkowka</title>
</head>
<body>
    <?php
    $DB_HOST = "51.123.43.245";
    $DB_USER = "admin";
    $DB_PASS = "123456";
    $DB_NAME = "quiz";
    $db = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

    $sql = "SELECT `id`, `content` FROM `questions` WHERE 1";
    if($res = $db->query($sql)){
        while($row = $res->fetch_assoc()){
            echo "ID question: ".$row["id"]."<br>";
            echo "Content: ".$row["content"]."<br><br>";
        }
    }

    $sql = "SELECT `id`, `content` FROM `answers` WHERE 1";
    if($res = $db->query($sql)){
        while($row = $res->fetch_assoc()){
            echo "ID answer: ".$row["id"]."<br>";
            echo "Content: ".$row["content"]."<br><br>";
        }
    }
    ?>
</body>
</html>
