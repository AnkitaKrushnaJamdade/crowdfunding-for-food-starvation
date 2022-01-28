<?php
session_start();
include_once 'navigation.php';
include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/food.css">
    <!-- <link rel="stylesheet" href="home.css"> -->
    <title>Donate Food</title>
</script>  
</head>
<body>
    <section id="food-sec">
        <div class="food-con">
            <h1>Food Donation</h1>
            <!-- javascript:sendmail() fooddonate.inc.php-->
        <form type="myForm"  id="myform" action="fooddonate.inc.php" method="post">
            <div class='control'>
              <input type='text' id='dname' name='dname' placeholder='Full Name' required>
            </div>
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
              <input id="food" type="text" name="food" placeholder="Food Amount" required>
            </div>           
            <div class="control">
              <input id="address" type="text" name="address" placeholder="Full Address/Location" required>
            </div>
            <div class="control">
              <input placeholder="Donation Date" id="date" name="date" type="text"
                  onfocus="(this.type='date')" required>
            </div>
            <div class="control">
              <input placeholder="Donation time" id="time" name="time" type="text"
                  onfocus="(this.type='time')" required>
            </div>
<?php
    if(isset($_GET["error"])) {
        if($_GET["error"] == "none") {
            echo "<p>Submitted Successfully!</p>";
        }
    } 
?>

            <div class="controls">
            <button type="submit" id="submit" class="btn" name="submit">Submit</button>
            </div>
            <div class="control control-link">
            Are you Wants to <a href="donation.php"><strong>Donate Fund?</strong></a>
            </div> <br>
            <div class="controls">
               <p id="reply"></p>
            </div> 
        </form>
        </div>

    </section>
    
<!-- <script>

    const form = document.getElementById('myform');
    form.addEventListener('submit', sendmail);

    function sendmail() {
      var dname = $('#dname').val();
      var demail = $('#demail').val();
      var phone = $('#phone').val();
      var food = $('#food').val();
      var address = $('#address').val();
      var date = $('#date').val();
      var time = $('#time').val();

      // var body = $('#body').val();

      var Body = 'Name: ' + dname + '<br>Email: ' + demail + '<br>Mobile: ' + phone + '<br>Adress: ' + address + '<br>Food Amount: ' + food + '<br>Date: ' + date + '<br>Time: ' + time;
      //console.log(name, phone, email, message);

      Email.send({
        SecureToken: "f753fc91-014d-45a9-a32c-9ad55b0a6753",
        To: "pratikshagund13@gmail.com",
        From: "pratikshagund13@gmail.com",
        Subject: "New message on contact from " + name,
        Body: Body
      }).then(
        message => {
          //console.log (message);
          if (message == 'OK') {
            alert('Your message has been send. Thank you for connecting.');
            document.getElementById("myForm").reset();
          }
          else {
            console.error(message);
            alert('There is error at sending message. ');
          }
        }
      );
    }
</script> -->

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

<?php
  include_once 'footer.php';
?>