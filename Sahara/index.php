<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sahara</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="data.js"></script>
  <script type="text/javascript" src="cart.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            max-height: 500px;
            margin:auto;
        }
        </style>

</head>

<body>
    <?php
    //Conect to local mySQL installation.
    $db = mysqli_connect("localhost", "c2375a15", "c2375aU!");
    if (mysqli_errno($db))
        exit("Error - Could not connect to MySQL");
    //Select the database to use
    $er = mysqli_select_db($db,"c2375a15test");
    if (!$er)
        exit("Error - Could not select the database!");
    //Issue SQL request.
    $query = "select idProduct, nameProduct, priceProduct, detailsProduct, quantityProduct from product";
    $result = mysqli_query($db, $query);
    if (!$result) {
      print "Error - query cannot be processed: ";
      $error = mysqli_error($db);
      print "$error";
      exit;
    }
    //Process the result.
    //Create arrays to store information
    $idArr = array();
    $nameArr = array();
    $priceArr = array();
    $detailsArr = array();

    $num_rows = mysqli_num_rows($result);
    for($i = 0; $i < $num_rows; $i++){
      $row = mysqli_fetch_row($result);
      $idArr[] = $row[0];
      $nameArr[] = $row[1];
      $priceArr[] = $row[2];
      $detailsArr[] = $row[3];
      $quantityArr[] = $row[4];
    }
  
  ?>
  <script>
    //Convert PHP Arrays into JS arrays
    var pId = <?php echo json_encode($idArr) ?>;
    var pName = <?php echo json_encode($nameArr) ?>;
    var pPrice = <?php echo json_encode($priceArr) ?>;
    var pDetails = <?php echo json_encode($detailsArr) ?>;
    var pQuantity = <?php echo json_encode($quantityArr) ?>;
    //setVariables('<?php echo $idArr ?>','<?php echo $nameArr ?>','<?php echo $priceArr ?>','<?php echo $detailsArr ?>','<?php echo $quantityArr ?>');
    //Save Variables to Cache
    saveCache();
  </script>

    <nav class="navbar navbar-expand-sm justify-content-center bg-dark navbar-dark">
            <!--LOGO-->
            <a class="navbar-brand" href="#">
                <img src="camel.jpg" alt="Logo of Camel" style="width:40px;">
            </a>
            <ul class="navbar-nav">
                <!--NavBar LINKS-->
                <li class="nav-item">
                    <a class="nav-link disabled" href="index.html">Home</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="computers.html">Computers</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="tablets.html">Tablets</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="peripherals.html">Peripherals</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="cellphones.html">Cellphones</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="consoles.html">Consoles</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.html">Cart</a>
                    </li>
                
            </ul>
            <!--Search Bar-->
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <form class="form-inline" action="/action_page.php">
                      <input class="form-control mr-sm-2" type="text" placeholder="Search">
                      <button class="btn btn-primary " type="submit">Search</button>
                    </form>
                  </nav>
    </nav>
    

<h1>SAHARA</h1>
<h2>The Ultimate Electronic Shopping Experience</h2>


    <!--Carousel-->
    <!--
    <div id="myCarousel" class="carousel slide bg-inverse w-50 h-80 ml-auto mr-auto" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block w-100" src="inv/xbox.JPG" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-55" src="inv/razer.JPG" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-25" src="inv/phone.JPG" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
  -->
</body>