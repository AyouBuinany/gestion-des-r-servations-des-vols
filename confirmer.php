<?php
include 'action.php';
$id_reserver="";
$IdReservation="";
$fullName= "";
$numTelephone="";
$email= "";
$numPassport="";
$departingDate= "";
$returningDate="";
$Adult= "";
$children="";
$TravelClass= "";
$Price= "";
$flyingFrom= "";
$flyingTo= "";
$seats= "";
$idAir="";
if(isset($_SESSION["id"])){
$id_reserver= $_SESSION["id"] ;
$request="select *, (Adult+children) as 'seats' from reservation,flights_list where flights_list.id=reservation.id_flight  AND reservation.id_reservation=$id_reserver";
$fetchRow=request($request);
if(isset($fetchRow)){
$readRow=mysqli_fetch_row($fetchRow);
$IdReservation=$readRow[0];
$fullName= $readRow[1];
$numTelephone=$readRow[2];
$email= $readRow[3];
$numPassport=$readRow[4];
$departingDate= $readRow[5];
$returningDate=$readRow[6];
$Adult= $readRow[7];
$children= $readRow[8];
$TravelClass= $readRow[9];
$Price= $readRow[10];
$idAir=$readRow[12];
$flyingFrom= $readRow[13];
$flyingTo= $readRow[14];
$seats=$readRow[18];
}
}
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

<br>
<br>
<br>

<div id="up"><a href="#top"><i class="fa fa-chevron-circle-up"></i></a></div>
<?php  if($ajouter):
    echo "<div class='add'> Your welcome mister $fullName</div>";
endif; ?>
<br>
<br>
<br>

<div class="about-container">
            <div id="about-description">
               <p>
               <p>    Id Reservation : <strong><?php echo $IdReservation;?></strong></p>
          <p>    Full Name : <strong><?php  echo $fullName;?></strong></p>
          <p>    numero Telephone : <strong><?php echo $numTelephone;?></strong></p>
          <p>    email : <strong> <?php echo $email;?></strong></p>
          <p>    numero Passport : <strong> <?php echo $numPassport;?></strong></p>
          <p>       flying From : <strong> <?php echo $flyingFrom;?></strong></p>
          <p>     flying To : <strong> <?php echo $flyingTo;?></strong></p>
          <p>    departing Date : <strong> <?php echo $departingDate;?></strong></p>
          <p>    returning Date : <strong> <?php echo $returningDate;?></strong></p>
          <p>   Seats Adult : <strong> <?php echo $Adult;?></strong></p>
          <p>   Seats children : <strong> <?php echo $children;?></strong></p>
          <p>    travel class: <strong> <?php echo $TravelClass;?></strong></p>
          <p>    price : <strong> <?php echo $Price;?></strong></p>
          <?php if($modifier==false){?>
          <p>    <a href="confirmer.php?idAir=<?php echo $idAir;?>&seats=<?php echo $seats ;?>" name="congirmer" id="confirmer">Confirmer</a></p>
          <?php }else{?>
          <p>    <a href="about_us.php" name="congirmer" id="confirmer">Bien Confirmer</a></p>
          <?php }?>
        </p>
            </div>
            <div id="about-image">
                <img src="https://www.traveldailymedia.com/assets/2019/09/shutterstock_591363956.png" alt="">
            </div>
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