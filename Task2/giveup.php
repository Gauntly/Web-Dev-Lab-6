//Giveup writes a new value to number and clears the attempt count.
<?php
session_start();
if(isset($_SESSION["number"])){
    $number = $_SESSION["number"];
    $number = rand(1,100);
    $_SESSION["number"] = $number;
    $_SESSION["counter"] = -1;
}
header("location:guessinggame.php")
?>
