<?php
       require_once 'dbh.inc.php';    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="CSS/navfot.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light py-3 bg">
            <div class="container">
                <a class="navbar-brand" href="index.php"><u>HungerJustice</u></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-bars text-light"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto float-right text-right">

                        <li class="nav-item">
                            <a class="nav-link ml-5" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-5" href="donation.php">Give</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-5" href="contact.php">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-5" href="about.php">About</a>
                        </li>
        <?php
          if(isset($_SESSION["userid"])) {
           echo "<li class='nav-item'><a class='nav-link ml-5' href='prof.php'>Profile</a></li>";
           echo "<li class='nav-item'><a class='nav-link ml-5' href='logout.inc.php'>Logout</a></li>";
          }
          else {
            echo "<li class='nav-item'><a class='nav-link ml-5' href='Signup.php'>Sign Up</a></li>";
            echo "<li class='nav-item'><a class='nav-link ml-5' href='login.php'>Login</a></li>";
           }
        ?> 

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
