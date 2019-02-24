<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
</head>
<body>
<div class="r-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <header><h3>REGISTRATION FORM</h3></header>
                <form action="function.php" method="post">
                    <label class="f-name">First Name:</label>
                    <input type="text" name="fname"><br>
                    <label class="l-name">Last Name</label>
                    <input type="text" name="lname"><br>
                    <label class="email">Email</label>
                    <input type="email" name="mail"><br>
                    <label class="phone">Phone</label>
                    <input type="phone" name="phone"><br>
                    <label class="password">Passowrd</label>
                    <input type="password" name="pass"><br>
                    <input type="submit" value="REGISTER" name="submit">
                    <a href="login.php" class="link">LOG IN</a>



                </form>
            </div>
        </div>
    </div>
</div>


<?php



?>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>