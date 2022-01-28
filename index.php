<?php
session_start();
include_once 'dbh.inc.php';
$result = mysqli_query($conn,"SELECT * FROM users");
$totalprice = 0;
$totaluser = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="CSS/home.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top bg">
            <div class="container">
                <a class="navbar-brand" href="#"><u>HungerJustice</u></a>
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
                            <a class="nav-link ml-5" href="donation.php">Give</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-5" href="contact.php">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-5" href="about">About</a>
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

    <section id="home">
        <img id="img" src="src-img/cover.jpg" alt="homeimg">

        <div class="container">
            <div class="row">
                <div class="home-text col-md-8 col-sm-12">
                    <h1>Let's move  </h1>
                    <p>towards ending global hunger. Hunger is not an issue of charity, it is an issue of justice. </p>
                    <ul class="section-btn">
                        <a href="#insecurity"><span data-hover="Explore More">More Info</span></a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <section id="about">
        <div class="container py-5" id="insecurity">
            <div class="row ">
                <div class="about-text text-center py-5 col-md-14 col-sm-18 mx-auto">
                    <h1 class="pb-3"><b>Global food insecurity</b></h1>
                    <h3>Almost 690 million people around the world went hungry in 2019. High costs and low affordability also mean billions cannot eat healthily or nutritiously. As progress in fighting hunger stalls, the COVID-19 pandemic is intensifying the vulnerabilities and inadequacies of global food systems. While it is too early to assess the full impact of the lockdowns and other containment measures, at least another 83 million to 132 million people may go hungry in 2020. If recent trends continue, the Zero Hunger target of the Sustainable Development Goals will not be achieved by 2030.</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="pkg" id="pkg">
        <div class="container">
            <h4 class="heading">Need of help!!</h4>
            <div class="box-container">
                <div class="box">
                    <div class="place-more">
                        <img src="src-img/afgan1.jpeg" alt="">
                        <div class="project-overlay">
                            <div class="project-info">
                                <a href="country.php"><input type="button" class="seeall text-right" value="See All"></a>
                                <h1 class="info">Afganistan</h1>
                                <a href="allcountries/afgan.html" class="info"><h3>More Info</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Afganistan</h3>
                        <p>Nearly 23 million people—that is 55 percent of the population—are facing extreme levels of hunger, and nearly nine million of them are at risk of famine.</p>
                        <a href="donation.php" class="btn">Give Now</a>
                    </div>
                </div>
    
                <div class="box">
                    <div class="place-more">
                        <img src="src-img/yemen1.jpeg" alt="">
                        <div class="project-overlay">
                            <div class="project-info">
                                <a href="country.php"><input type="button" class="seeall text-right" value="See All"></a>
                                <h1 class="info">Yemen</h1>
                                <a class="info" href="allcountries/yemen.html"><h3>More Info</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Yemen</h3>
                        <p>16.2 million Yemenis are food insecure. ... Malnutrition rates among women and children in Yemen remain among the highest in the world. </p>
                        <a href="donation.php" class="btn">Give Now</a>
                    </div>
                </div>
    
                <div class="box">
                    <div class="place-more">
                        <img src="src-img/somalia1.jpeg" alt="">
                        <div class="project-overlay">
                            <div class="project-info">
                                <a href="country.php"><input type="button" class="seeall text-right" value="See All"></a>
                                <h1 class="info">Somalia</h1>
                                <a class="info" href="allcountries/somalia.html"><h3>More Info</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Somalia</h3>
                        <p>Out of a population of 12.3 million in Somalia, 5.6 million people were estimated as food insecure and a fifth of the population, 2.8 million people, could not meet their daily food requirements.</p>
                        <a href="donation.php" class="btn">Give Now</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <img src="src-img/worldmap.jpg" class="img-responsve center-block d-block mx-auto center" alt="Sample Image">
                <a href="https://hungermap.wfp.org/"><p class="livemap"><strong>Click to view LIVE HUNGER MAP</strong></p></a>
                <div class="text-block">
                        
<?php
if (mysqli_num_rows($result) > 0) {
$i=0;
while($row = mysqli_fetch_array($result)) {
$totaluser += $row['usersId']; 
$i++;
}
}
?>
                        <p class="first-txt">
                            Users: <?php echo $totaluser; ?>
                        </p>
<?php                   
include_once 'dbpay.inc.php';
$priceresult = mysqli_query($conn,"SELECT * FROM donates");

if (mysqli_num_rows($priceresult) > 0) {
while($row = mysqli_fetch_array($priceresult)) 
{
  $i=0;
  $totalprice += $row["price"];
  $i++;
}
}
?>                         
                        <p class="second-txt">
                            Total Amount: <?php echo $totalprice; ?>
                        </p>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-con container">
            <div class="footer-row row">
                <div class="footer-col about-footer">
                    <h4>Address Info</h4>
                    <ul>
                        <li><a href="#" ><i class="fa fa-map-marker" aria-hidden="true">  Satara, Karad</i></a></li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>  fscharity@gmail.com</a></li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>  +91 6546546546</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="donation.php">Donate Fund</a></li>
                        <li><a href="fooddonate.php">Donate Food</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="about.php">About</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <!-- Facebook -->
                        <a href="#!"><i class="fa fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a href="#!"><i class="fa fa-twitter"></i></a>

                        <!-- Google -->
                        <a href="#!"><i class="fa fa-linkedin"></i></a>

                        <!-- Instagram -->
                        <a href="#!"><i class="fa fa-instagram"></i></a>
                    
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"crossorigin="anonymous"></script>

    <script>
        $(window).scroll(function () {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 50)
        })
    </script>

</body>
</html>