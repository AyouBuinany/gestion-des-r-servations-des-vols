<?php
include 'action.php';
 //echo "hello".$_SERVER["PHP_SELF"]."?reserver=".$_GET["reserver"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maroc airlines</title>
    <link rel="stylesheet" href="Style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<div id="up"><a href="#top"><i class="fa fa-chevron-circle-up"></i></a></div>
    <br><br><br><br>
<div  id="inpContainer" class="inputs-container2">
        <div class="error"></div>
        <br>
        <form action="confirmer.php" method="POST">
        <div id="zero-row">
        <input type="hidden" name="id_air"  id="air" value="<?php echo $_GET["reserver"];?>">
                <input type="radio" name="trips" id="round_trip" value="round_trip" class="trip-type" required><span>Round trip</span>
                <input type="radio" name="trips" id="one_way" class="trip-type" value="one_way"  required><span>One way</span>
            </div>
            <br>
            <div id="first-row">
               <input type="text" name="f_name" id="f_name" required placeholder="Enter your Full name">
               <input type="tel"  id="phone" required name="phone" placeholder="Enter your phone" >
            </div>
            <br>
            <div id="second-row">
                <input type="email" id="email" required name="email" placeholder="Enter your email">
                <input type="text" name="num_passport" id="num_passport" required placeholder="Enter your numero passport">

            </div>
            <br>
            <div id="second-row">
                <input type="date" id="departing" required name="departing" placeholder="departing">
                <input type="date"  id="returning" required name="returning" placeholder="returning" >
            </div>
            <br>
            <div id="third-row">
                <input type="number" placeholder="Adults(+18)" id="adults" required name="adults">
                <input type="number"  placeholder="Children(0-17)" id="children" required name="children">
                <select name="travel_class" id="travel_class" required>
                    <optgroup Label="TRAVEL CLASSES"></optgroup>
                    <option value="First Class">First Class</option>
                    <option value="Bussness Class">Bussness Class</option>
                    <option value="Econemy Class">Econemy Class</option>
                </select>
            </div>
            <br>
            <input type="hidden" name="price"  id="price">
            <button type="submit" name="reservation" id="reserve">Reserve now</button>
        </form>
    </div>
    <div class="footer-div">
               <div class="footer-item">
                    <div id="icon">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-linkedin"></i>
                        <i class="fa fa-instagram"></i>
                    </div>
                    <br>
                    <p>all right reseverd from youcode</p>
              </div>
              <div class="footer-item">
                  <input type="text"  placeholder="Enter your name" id="feedback-sender"><br><br>
                  <textarea name="" id="feedback-area" placeholder="enter your feedback"></textarea><br>
                  <div id="feedback-error"><p></p></div><br>
                  <button type="submit" id="btn-feedback">submit feedback</button>
              </div>
    </div>


 <!-- jquery link -->
  <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <script>

  </script>
</body>
</html>