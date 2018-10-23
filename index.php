<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="styles.css" rel="stylesheet" type="text/css">
        <title>First PHP page</title>
    </head>
<body>
<div class="container">
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">My first PHP page</h4>

    <?php
        date_default_timezone_set('America/Los_Angeles');
        echo date('h:i:s a, l, F jS Y e');

    ?>
    </div>

    <div class="container">

        <div class = "card">
        <h4 class = "card-title">Fill in two numbers to add them together...</h4>
        <form action="calculator_results.php" method="get">
            <div class="form-group">
                <label for="first_number">First number</label>
                <input id="first_number" name="first_number" class="form-control" type="number">
            </div>
            <div class="form-group">
                <label for="second_number">Second number</label>
                <input id="second_number" name="second_number" class="form-control" type="number">
            </div>
            <button type="submit" class="btn btn-success">Go!</button>
        </form>
        </div>

        <div class="card">
        <h4>Please fill in the text you'd like for your business card!</h4>

        <form action="businesscard_display.php">
            <div class="form-group">
                <label for="first_name">First name</label>
                <input id="first_name" name="first_name" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="middle_name">Middle name</label>
                <input id="middle_name" name="middle_name" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input id="last_name" name="last_name" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="occupation">Occupation</label>
                <input id="occupation" name="occupation" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="slogan">Slogan</label>
                <input id="slogan" name="slogan" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" class="form-control" type="text">
            </div>
            <button type="submit" class="btn-success">Submit</button>
        </form>

    </div>
        


    </div>


</div>
</body>
</html>