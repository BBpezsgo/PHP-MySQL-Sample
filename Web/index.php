<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Server</title>
</head>
<body>
      <?php
        $mysqli = new mysqli("127.0.0.1", "root", "admin");
        echo($mysqli->host_info . "\n");
      ?>
</body>
</html>
