<?php 
    $first_number = $_GET["first_number"];
    $second_number = $_GET["second_number"]; 
    $solution = $first_number + $second_number;
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Your Answer Below</title>
</head>
<body>
    <h1>Arithmetic in PHP is easy!</h1>
    <p>The sum of <?php echo $first_number; ?> and <?php echo $second_number; ?> is: </p>
    <p><?php echo $solution; ?></p>
</body>
</html>