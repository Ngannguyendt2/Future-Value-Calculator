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
<?php
$amount = $_POST['amount'];
$rate = $_POST['rate'];
$year = $_POST['year'];
for ($i = 1; $i <= $year; $i++) {
    $amount = $amount + ($amount * $rate);
    echo "Year" . $i . "future value " . $amount . "<br>";
}
?>
</body>
</html>
