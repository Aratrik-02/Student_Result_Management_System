
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   
<body>
  <div style="display: fixed;">
   <?php include('topbar.php');?>
 </div>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">West Bengal, India</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+9123 4567 8910</div>
          <div class="text-two">+9109 8765 4321</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">spryaratrik.basak@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>In case of any query do reach out to us.</p>
      <form action="https://formsubmit.co/babai.basak1107@gmail.com" method="POST">
        <div class="input-box">
          <input type="text" name="name" placeholder="Name">
        </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="Email address">
          <input type="hidden" name="_next" value="https://aratrik-02.github.io/Portfolio/thanks.html">
        </div>
        <div class="input-box message-box">
          <textarea rows="4" cols="50" name="message" placeholder="Message..."></textarea>
        </div>
        <div class="button">
          <input type="submit" value="Send Message" >
          <input type="hidden" name="_autoresponse" value="Thanks for your valuable feedback!!">
        </div>
      </form>
    </div>
    </div>
  </div>
  <footer>
    <p class="text-center"><small>Copyright © Aratrik 2022</small></p>
  </footer>
</body>
</html>
