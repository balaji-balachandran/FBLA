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
    <script>
    function orderPlaced(){
        if(document.getElementById("totalTag").innerHTML != ""){
          alert("Your Order was placed successfully!");
        }
        else{
          alert("Order unsuccessful, please fill out all required fields");
        }

    }
    </script>
  </head>

  <body>
    <?php
    include 'navbar.php'; ?>
      <div class="orderContainer">
        <h1 id="orderTitle">Start Your Order</h1>
        <h1>Choose a size: </h1>
        <div class="options" id = "size">
          <?php
            $ids = array("singleScoop","doubleScoop","tripleScoop");
            $names = array("Single Scoop","Double Scoop","Triple Scoop");
            $prices = array(2.99,3.99,4.49);
            $category = "size";
            for($i = 0;$i<count($ids);$i++){
              $id = $ids[$i];
              $name = $names[$i];
              $price = $prices[$i];
              $string = "<input type=\"radio\" name=\"$category\" id=\"$id\" value=\"$name\" onclick=\"displayChange()\" hidden>
                      <label for=\"$id\" style=\"background-image: url(img/$id.png)\">
                        <div class=\"description\" >
                          <h3>$name</h3>

                          <p>$$price</p>
                        </div>
                      </label>";

                echo $string;
            }
            echo "</div>";
           ?>
        <h1>Choose a flavor: </h1>
        <div class="options" id = "flavor">
          <?php
            $ids = array("chocolate","matcha","mint","vanilla","ube","eggnog");
            $names = array("Chocolate","Matcha","Mint","Vanilla","Ube","Eggnog");
            $category = "flavor";
            for($i = 0;$i<count($ids);$i++){
              $id = $ids[$i];
              $name = $names[$i];

              $string = "<input type=\"radio\" name=\"$category\" id=\"$id\" value=\"$name\" onclick=\"displayChange()\" hidden>
                      <label for=\"$id\" style=\"background-image: url(img/$id.png)\">
                        <div class=\"description\" >
                          <h3>$name Ice Cream</h3>
                        </div>
                      </label>";

                echo $string;
            }
            echo "</div>";
           ?>

           <h1>Choose a holder: </h1>
           <div class="options" id = "holder">
             <?php
               $ids = array("bowl","cone","waffleBowl");
               $names = array("Standard Bowl","Plain Cone","Waffle Bowl");
               $prices = array("","+$0.30","+$0.75");
               $category = "holder";
               for($i = 0;$i<count($ids);$i++){
                 $id = $ids[$i];
                 $name = $names[$i];
                 $price = $prices[$i];

                 $string = "<input type=\"radio\" name=\"$category\" id=\"$id\" value=\"$name\" onclick=\"displayChange()\" hidden>
                         <label for=\"$id\" style=\"background-image: url(img/$id.png)\">
                           <div class=\"description\" >
                             <h3>$name</h3>
                             <p>$price<p>
                           </div>
                         </label>";

                   echo $string;
               }
               echo "</div>";
              ?>

      </div>

  <div class="receipt">
    <table>
      <tr>
          <th id = "receiptTitle1"></th>
          <th id = "receiptTitle2"></th>
      </tr>
      <tr>
        <td id="selectedScoop"></td>
        <td id="priceScoop"></td>
      </tr>
      <tr>
        <td id="selectedFlavor"></td>
        <td id="priceFlavor"></td>
      </tr>
      <tr>
        <td id="selectedHolder"></td>
        <td id="priceHolder"></td>
      </tr>
      <tr>
        <th id="totalTag"></th>
        <th id="totalAmount"></th>
      </tr>
    </table>

    <button type="button" name="button" onclick="orderPlaced()" id="orderButton">Order</button>
    </div>

  <!--  <input type="submit" name="" value="WPAS"> -->

    <script>
            function displayChange() {
                document.getElementsByClassName("receipt")[0].style.visibility = "visible";
                document.getElementById("receiptTitle1").innerHTML = "Item";
                document.getElementById("receiptTitle2").innerHTML = "Price";
                var valid = false;
                <?php
                $total = 0;

                $changed = "Scoop";
                $ids = array("singleScoop","doubleScoop","tripleScoop");
                $names = array("Single Scoop","Double Scoop","Triple Scoop");
                $prices = array(2.99,3.99,4.49);
                for($i = 0;$i<count($ids);$i++){
                  $id = $ids[$i];
                  $name = $names[$i];
                  $price = $prices[$i];
                  echo "if(document.getElementById(\"$id\").checked){
                    document.getElementById(\"selected$changed\").innerHTML = \"$name\";
                    document.getElementById(\"price$changed\").innerHTML = \"$$price\";
                  }";
                };

                $total += $price;

                $changed = "Flavor";
                $ids = array("chocolate","matcha","mint","vanilla","ube","eggnog");
                $names = array("Chocolate","Matcha","Mint","Vanilla","Ube","Eggnog");
                for($i = 0;$i<count($ids);$i++){
                  $id = $ids[$i];
                  $name = $names[$i];
                  $price = 0;
                  echo "if(document.getElementById(\"$id\").checked){
                    document.getElementById(\"selected$changed\").innerHTML = \"$name Ice Cream\";
                    document.getElementById(\"price$changed\").innerHTML = \"--\";
                  }";
                  }

                  $changed = "Holder";
                  $ids = array("bowl","cone","waffleBowl");
                  $names = array("Standard Bowl","Plain Cone","Waffle Bowl");
                  $prices = array("0.00","0.30","0.75");
                  for($i = 0;$i<count($ids);$i++){
                    $id = $ids[$i];
                    $name = $names[$i];
                    $price = $prices[$i];
                    echo "if(document.getElementById(\"$id\").checked){
                      document.getElementById(\"selected$changed\").innerHTML = \"$name\";
                      document.getElementById(\"price$changed\").innerHTML = \"$$price\";
                    }";
                  }

                  /*
                  $arr = array(array("singleScoop", 2.99),array("doubleScoop",3.99),array("tripleScoop",4.49),array("bowl",0),array("cone",0.3),array("waffleBowl",0.75));
                  for($p = 0; $p < count($arr); $p++){
                    $id = $arr[$p][0];
                    $price = $arr[$p][1];
                    echo "if(document.getElementById(\"$id\").checked){
                      console.log($price);
                      total += $price;
                    }";
                  }
                  */
                  echo "if(document.getElementById(\"selectedScoop\").innerHTML != \"\" && document.getElementById(\"selectedFlavor\").innerHTML != \"\" && document.getElementById(\"selectedHolder\").innerHTML != \"\"){
                    let total = parseFloat(document.getElementById(\"priceScoop\").innerHTML.replace(\"$\",\"\")) + parseFloat(document.getElementById(\"priceHolder\").innerHTML.replace(\"$\",\"\"));

                    document.getElementById(\"totalTag\").innerHTML = \"Total:\";
                    document.getElementById(\"totalAmount\").innerHTML = \"$\"+ total;
                    document.getElementById(\"orderButton\").style.visibility = \"visible\"
                  }";

                 ?>
          }
  </script>

  </div>
    <?php
    include 'footer.php'; ?>
  </body>
</html>
