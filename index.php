<?php

    $error = "";

    if($_POST) {
        if (!$_POST["subject"]) {
            $error .= "The subject field is required.<br />";
        }

        if (!$_POST["content"]) {
            $error .= "The content field is required.<br />";
        }

        if (!$_POST["address"]) {
            $error .= "The address field is required.<br />";
        } else if (!filter_var($_POST["address"], FILTER_VALIDATE_EMAIL)) {
            $error .= "Invalid email format.<br />";
        }

        $error = "<div class='alert alert-danger' role='alert'>"."<strong>Error Info:</strong><br />".$error."</div>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email Sender</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <h1>Email Sender</h1>
    <div class="container"><div id="error"><?php echo $error; ?></div></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <div class="container">
    <form method="post">
        <div class="form-group">
            <label for="address">Address</label>
            <input type="email" class="form-control" id="address" name="address" aria-describedby="emailHelp" placeholder="Enter an email address">
            <small id="addressHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject">
        </div>
        <div class="form-group">
            <label for="Content">Content</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>
        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>