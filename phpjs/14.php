<?php
    $conn = mysqli_connect("localhost", "root", 'rkdud4578');
    mysqli_select_db($conn, "opentutorials");
    $name = mysqli_real_escape_string($conn, $_GET['name']);
    $password = mysqli_real_escape_string($conn, $_GET['password']);
    $sql = "SELECT * FROM user WHERE name='".$name."' AND password='".$password."'";
    echo $sql;
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        if($result -> num_rows == "1"){
            echo '다시 입력하세요';
        } else{
            echo '안녕하세요';
        }
    ?>
</body>
</html>