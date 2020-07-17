<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $password = $_GET['password'];
        if($password === '1111'){
            echo '안녕하세요';
        } else{
            echo '다시 입력하세요';
        }
    ?>
</body>
</html>