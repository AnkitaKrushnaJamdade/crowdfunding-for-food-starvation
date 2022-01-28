<?php
session_start();
include_once 'dbh.inc.php';
include_once 'navigation.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/food.css">
    <title>Donate Fund</title>
</script>  
</head>
<body>
    <section id="food-sec">
        <div class="form-container">
            <h1>Fund Donation</h1>
        <form name="myform" action="pay.php" method="post">
        <?php
          if(isset($_SESSION['userid'])) {
            $userid = $_SESSION['userid'];
            $result = mysqli_query($conn,"SELECT * FROM users WHERE usersId = '$userid'");    
            if (mysqli_num_rows($result) > 0) {
              $i=0;
              while($row = mysqli_fetch_array($result)) {
              $res = $row['usersEmail'];
              echo "<div class='control'><input type='email' id='demail' name='demail' value='$res' required></div>";
         
            }
            }
          }
          else{
            echo "<div class='control'><input type='email' id='demail' name='demail' placeholder='Email Address' required></div>";

          } 
          ?>
          
            <div class="control">
              <input id="phone" type="number" name="phone" placeholder="Contact No" required>
            </div>             
            <div class="control">
              <input id="price" type="text" name="price" placeholder="Amount" required>
            </div>
            <div class="controls">
            <button type="submit" class="btn" name="submit">Donate Now</button>
            </div>
            <div class="control control-link">
            Are you Wants to <a href="fooddonate.php"><strong>Donate Food?</strong></a>
            </div>  
        </form>
        </div>
    </section>
    
</body>
</html>
<?php
  include_once 'footer.php';
?>