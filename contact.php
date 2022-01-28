<?php
include_once 'navigation.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&family=Titillium+Web:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/contact.css">
    <title>Contact Us</title>
</head>
</body>
<section class="location">
    <iframe class="locframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243294.66052110944!2d73.87817192303494!3d17.674814856050336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc239be08d96bbd%3A0x5f4adf559fb4b19a!2z4KS44KS-4KSk4KS-4KSw4KS-LCDgpK7gpLngpL7gpLDgpL7gpLfgpY3gpJ_gpY3gpLA!5e0!3m2!1smr!2sin!4v1641912471297!5m2!1smr!2sin"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</section>

<section class="contact-us">
<div class="container">
<!-- javascript:sendmail() -->
  <form action="https://smartforms.dev/submit/61ddd5537a195017922dc8de" class="myForm" method="post">
    <div class="con-center">
    <h2 class="query">Contact For any Query!!</h2>
    <div class="row">
      <div class="col-75">
        <input type="text" name="name" class="name" id="name" placeholder="Enter your name" required>
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <input type="email" name="email" class="email" id="email" placeholder="Enter Email address" required>
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <input type="text" name="subject" class="subject" id="subject" placeholder="Enter subject" required>
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <textarea rows="8" name="msg" class="msg" id="msg" placeholder="Message" required></textarea>
      </div>
    </div>
    <div class="row">
       <button type="submit" class="info-btn">Send <i class="fab fa-telegram-plane"></i></button>
    </div>
    </div>
  </form>
</div>
</section>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>

<script>
function sendmail() {
  var name = $('#name').val();
      var email = $('#email').val();
      var subject = $('#subject').val();
      var msg = $('#msg').val();

  var body = 'Name: ' + name + '<br>Email: ' + email + '<br>Subject: ' + subject + '<br>Message: ' + msg;

  Email.send({
    SecureToken: "f753fc91-014d-45a9-a32c-9ad55b0a6753",
    To: "pratikshagund13@gmail.com",
    From: "pratikshagund13@gmail.com",
    Subject: "New message from " + name,
    Body: body
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
</script>
</body>
</html>
<?php
include_once 'footer.php';
?>