<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>32 Below</title>
  <link rel="stylesheet" href="css/mainStyling.css?<?php echo time(); ?>">
  <link rel="stylesheet" media="screen and (max-width: 1400px)" href="css/mainStylingTablet.css?<?php echo time(); ?>">
  <link rel="stylesheet" media="screen and (max-width: 1000px)" href="css/mainStylingPhone.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="css/footer.css?<?php echo time(); ?>">
  <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/0fa1645008.js" crossorigin="anonymous"></script>
  </script>
</head>

<body>
<?php
include 'navbar.php'; ?>
<div class= "splash" style="background-image:url(img/aboutBackground.jpg);">
  <div class="splashLeft">
    <h1 style="margin-left: 6vw; margin-right: 12vw; margin-top: 20vh;">About Us</h1>
  </div>
</div>

<div class="founders">
  <h1>Meet the Website Creators</h1>
  <div class="founder" id="balaji">
    <img src="img/balaji.jpg" alt="">
    <p>Balaji Balachandran</p>
  </div>
  <div class="founder" id="kavin">
    <img src="img/kavin.jpg" alt="">
    <p>Kavin Suhirtharen</p>

  </div>

</div>

<div class = "mission">
  <h1>Our Mission</h1>
  <div class="missionLeft">
    <img src="img/shop.jpg" alt="">
  </div>
  <div class="missionRight">
    <p>Kavin and Balaji are current seniors at the Illinois Mathematics and Science Academy originally from Algonquin and Naperville, respectively. After first meeting each other in the local creamery munching on a flurry of various ice cream flavors, they instantly became best friends. Fueled by a shared love for ice cream, the duo founded 32 Below, an Aurora-based ice cream shop with the goal of curating various high-quality yet affordable ice cream flavors for everyone to enjoy.
<br>
<br>
It’s our mission to create tasty ice cream flavors that you’ll never forget, no matter how many times you eat them. We spent months developing the perfect formula for an ice cream base and found that the key secret to high-quality ice cream was through organic cane sugar and farm-fresh, sustainably sourced dairy - the real stuff.
<br>
<br>
Our current menu showcases both the originals and more unique products through 32 Below’s six flavors, and we can’t wait to continue creating many more flavors for everyone to enjoy!
</p>
  </div>
</div>

<?php
include 'footer.php'; ?>
</body>
</html>
