<?php
include 'config.php';
//affiche

$msg=false;
if($_SERVER["PHP_SELF"]==='/air_plane-master/home.php'){

  $msg=true;
$query = "SELECT DISTINCT flyingFrom, flyingTo from flights_list;";
$l=request($query);
 $rows=mysqli_num_rows($l);
}
//get Session

if(isset($_POST["Show_Flights"])){
    $_SESSION["flying_from"]=$_POST["flying_from"];
    $_SESSION["flying_to"]=$_POST["flying_to"];
}


$messageSession="";
  if(isset($_SESSION["flying_from"]) && isset($_SESSION["flying_to"])){
    $flying_to= $_SESSION["flying_to"];
    $flying_from=$_SESSION["flying_from"];
    $query = "SELECT * FROM flights_list WHERE flyingFrom='$flying_from' AND flyingTo='$flying_to'";
    $req=request($query) or die("request ne pas valid tester request");
  $row=mysqli_num_rows($req);
  $messageSession="
<h3 style='margin: auto;
text-align: center;'> Welcome To Morocco AirLines  From ". $flying_from ." To ". $flying_to.
" </h3>" ;
  }

  //reservation
  $ajouter=false;
  $messageExist=false;
  if(isset($_POST["reservation"])){
    $id_reservation=$_POST["id_reserver"];
    $fullName=$_POST["f_name"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $num_passport=$_POST["num_passport"];
    $departing=$_POST["departing"];
    $returning=$_POST["returning"];
    $adults=$_POST["adults"];
    $children=$_POST["children"];
    $travel_class=$_POST["travel_class"];
    $price=$_POST["price"];
    $idAir=$_POST["id_air"];
    $_SESSION["id"]=$_POST["id_reserver"];
    $request="INSERT INTO `reservation` VALUES(60,'kamal chokran','06121898998','ayoub.elbouinany99@gmail.fr','pKKjj','2020-05-29','2020-05-31',1,1,'Bussness Class','1100 DH',2)";

    $request="INSERT INTO `reservation` VALUES($id_reservation,'$fullName','$phone','$email','$num_passport','$departing','$returning',$adults,$children,'$travel_class','$price','$idAir')";
     request($request) or die("<div style='background-color: #e04c4c;text-align: center;padding: 20px;margin: 10%;color: white;font-family: fantasy;'>Sorry mister $fullName your id déja exist </div>");
     $ajouter=true;
      sleep(1.5);
  }
  //Modifier seats in table flights_list;
  $modifier=false;
  if( isset($_GET["seats"]) &&  isset($_GET["idAir"]) ){
    $seats=$_GET["seats"];
    $idAir=$_GET["idAir"];
     $update= "UPDATE flights_list set seats=seats-$seats where id=$idAir";
     request($update);
     $modifier=true;
  }
?>