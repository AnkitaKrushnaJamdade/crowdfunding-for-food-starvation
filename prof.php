<?php
session_start();
include_once 'dbh.inc.php';
$userid = $_SESSION['userid'];
$result = mysqli_query($conn,"SELECT * FROM users WHERE usersId = '$userid'");

$reseid =  mysqli_query($conn,"SELECT usersEmail FROM users WHERE usersId = '$userid'");
while($r = $reseid->fetch_assoc()){
    $res = $r['usersEmail'];
}
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/profstyle.css">
    <title>Profile Page</title>
</head>
<body>
    <div class="back-close">
        <div class="back"> <a href="index.php"><i class="fa fa-angle-left"></i></a></div>
        <div class="closed"><a href="logout.inc.php"><p id="logout">LOGOUT</p></a></div>
    </div>
    <div class="modal">
        <img src="src-img/profileimg.jpg" alt="">
        <div class="close"></div>
    </div>
    
    <div class="container">
        <div class="card">
            <div class="header">
                <div class="main">
                    <div class="image">
                        <div class="hover">
                            <i class="fas fa-camera fa-2x"></i>
                        </div>
                    </div>
<?php
if (mysqli_num_rows($result) > 0) {
$i=0;
while($row = mysqli_fetch_array($result)) {
?>


                    <h3 class="name"><?php echo $row["usersUid"]; ?><br></h3>
                    <h3 class="sub-name"><?php echo $row["usersEmail"]; ?><br></h3>
                    </div>
            </div>
<?php                   
include_once 'dbpay.inc.php';
$priceresult = mysqli_query($conn,"SELECT price FROM donates WHERE demail = '$res'");
$i++;
}
}
?>
<?php
if (mysqli_num_rows($priceresult) > 0) {
while($row = mysqli_fetch_array($priceresult)) 
{
  $j=0;
  $total += $row["price"];
  $j++;
}
?> 
            <div class="content">
                <div class="left">
                    <div class="about-container">
                        <p class="text">Donated Amount: <?php echo $total; ?></p>
                    </div>
<?php              
}
?>
                </div>
            </div>
        </div>
    </div>
<script>
const image = document.querySelector('.image');
const hover = document.querySelector('.hover');
const modal = document.querySelector('.modal');
const close = document.querySelector('.close');

function show(){
    hover.classList.add('active');
    modal.classList.add('show');
}

function hide(){
    hover.classList.remove('active');
    modal.classList.remove('show');
}

image.addEventListener('click', show);
close.addEventListener('click', hide);
</script>
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