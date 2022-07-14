<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>32 Below</title>
  <link rel="stylesheet" href="css/mainStyling.css?<?php echo time(); ?>">
  <link rel="stylesheet" media="screen and (max-width: 1400px)" href="css/mainStylingTablet.css?<?php echo time(); ?>">
  <link rel="stylesheet" media="screen and (max-width: 1000px)" href="css/mainStylingPhone.css?<?php echo time(); ?>">
  <link rel="stylesheet" media="screen and (max-width: 600px)" href="css/smallscreen.css">
  <link rel="stylesheet" href="css/footer.css?<?php echo time(); ?>">
  <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/0fa1645008.js" crossorigin="anonymous"></script>
  </script>

  <script>
    function submitForm(){
      alert('Your Message has been successfully submitted!');
    }
  </script>
</head>

<body>
<?php
include 'navbar.php'; ?>
<div class="contactContainer">
  <div class= "splash" style="background-image:url(img/contactBackground.png);">
    <div class="splashLeft">
      <h1 style="margin-left: 60vw; margin-right: 12vw; margin-top: 10vw;color: white;">Contact Us</h1>
    </div>
  </div>
  <h2 id="contactSubtitle">We'd Love To Hear From You</h2>
  <fieldset>
    <div class="field">
      <label for="firstName">First Name: </label>
      <input type="text" name="firstName" value="">
    </div>
    <div class="field">
      <label for="lastName">Last Name: </label>
      <input type="text" name="lastName" value="">
    </div>
    <div class="field">
      <label for="email">Email: </label>
      <input type="email" name="email" value="">
    </div>
    <div class="field">
      <label for="subject">Subject: </label>
      <input type="text" name="subject" value="" id = "subject">
    </div>
    <div class="field">
      <label for="message">Message: </label>
      <textarea id="w3review" name="w3review" rows="7" cols="200"></textarea>
    </div>

    <button type="button" name="button" onclick="submitForm()">Submit</button>
  </fieldset>
</div>
<?php
include 'footer.php'; ?>
</body>
</html>
