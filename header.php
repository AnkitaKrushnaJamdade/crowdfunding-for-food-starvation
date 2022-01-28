<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/navfot.css">

</head>

<body>

        <nav class="navbar navbar-expand-lg navbar-light py-3 bg">
            <div class="container">
                <a class="navbar-brand" href="#"><u>CWFFS</u></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-bars text-light"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto float-right text-right">

                        <li class="nav-item">
                            <a class="nav-link ml-5" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-5" href="donation.html">Give</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-5" href="#">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-5" href="#">About</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
