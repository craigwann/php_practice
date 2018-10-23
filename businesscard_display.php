<?php 
    $first_name = $_GET["first_name"];
    $middle_name = $_GET["middle_name"];
    $last_name = $_GET["last_name"];
    $occupation = $_GET["occupation"];
    $slogan = $_GET["slogan"];
    $email = $_GET["email"];
    $card_header = $first_name . " " . $middle_name . " "  . $last_name;
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="styles.css" rel="stylesheet" type="text/css">
    <title>Create a Business Card</title>
</head>
<body>
    <div class="container">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div id="card">
                <h3 class="card_header"><?php echo $card_header; ?></h3>
                <h4 class="card_header"><?php echo $occupation; ?></h4>
                <h5 class="card_text"><?php echo $slogan; ?></h5>
                <h5 class="contact"><?php echo $email; ?></h5>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>