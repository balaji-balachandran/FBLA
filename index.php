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
<div class="splash">
    <div class="splashLeft">
      <h1>Great New Flavors!</h1>

    </div>
    <div class="splashRight">
      <div class="splashRightContent">
        <p>32 below, the premiere ice Cream Shop with one location in Aurora, Illinois. <br><br> We're dedicated to offering our fantastic flavors and sharing our love of ice cream with the world, one scoop at a time!<br><br>Opening Day Prices Are Half Off!</p>
        <a href="order.php">
          <img src="img/firstcone.png" alt="" id= "leftSplashImage" title="Order">
        </a>
        <a href="about.php">
          <img src="img/secondcone.png" alt="" id = "rightSplashImage" title = "About Us">
        </a>
      </div>
    </div>

</div>

<h1 class="mealHeader">Explore our flavors!</h1>

<div class="slider">
  <div class="slider-inner">

    <?php
    $imglist = array('chocolate','matcha','mint','Vanilla','Ube','Eggnog');
    $names = array('Chocolate',"Matcha","Mint","Vanilla","Ube","Eggnog");
    $prices = array(3.99,4.99,2.99,2.99,3.49,2.49);
    $num = 6;

    for($i = 0;$i< $num; $i++){
    $img = $imglist[$i];
    $name = $names[$i];
    $price = $prices[$i];
    $string =     "<div class=\"recipe\" onclick=\"\" style=\"background-image: url('img/$img.png');\">
          <div class=\"description\" >
            <h3>$name Ice Cream</h3>

          </div>
        </div>
        ";

        //<a href=\"order.php\"></a>
      echo $string;
    } ?>

    <?php /*
    <div class="recipe" onclick="myfunc()">
      <!--<img src="img/saladtopDown.jpg" alt="Salad Top Down View" id="splashImage"> -->
      <div class="description">
        <h3>Zesty Chicken Salad</h3>
        <!--
        <i class="fa-solid fa-check fa-2x"></i>
        <i class="fa-regular fa-clock fa-2x" style="float:right; margin-right: 10px; margin-bottom: 10px;"></i>
      -->
      </div>
    </div>
    */ ?>
  </div>
</div>

<?php
include 'footer.php'; ?>

<script src="js/page.js?<?php echo time(); ?>"></script>
</body>

</html>
