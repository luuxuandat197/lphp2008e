<?php
/**
 * @Author Lưu xuân Đạt -
 * @create 11/23/20 6:43 PM
 */
$email = $_POST['email'];
$position = strpos($email, '@');
$email = substr($email, 0, $position);
echo $email;

$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);

print_r($arr1);
print_r($arr2);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="email">Email</label><br>
    <input type="email" name="email" id="email"><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
