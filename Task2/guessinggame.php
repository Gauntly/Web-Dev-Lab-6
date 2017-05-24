<html>
<h1>Guessing Game</h1>
<p>Enter a number between 1 and 100 then press the Guess Button.</p>
<form id="guess" action="guessinggame.php" method="post" >
    Guess: <input type="number" name="guess">
    <input type="submit">
</form>
<button><a href="giveup.php">Giveup</a></button>
<button><a href="startover.php">startover</a></button>
</html>

<?php
session_start();
if(!isset ($_SESSION["number"])){
    $_SESSION["number"] = rand(0,100);

}else{
    $number = $_SESSION["number"];
}
if(!isset($_SESSION["counter"])){
    $counter = 0;
    $_SESSION["counter"] = $counter;
}else{
    $counter = $_SESSION["counter"]++;
    $counter++;
    $_SESSION["counter"] = $counter;
}
if(isset($_POST["guess"])) {
    $guess = $_POST["guess"];
    echo "Your guess was: " .$guess . "<br>";

    if($number == $guess){
        echo "You did it! You guessed the hidden number." . "<br>";
    }else{
        echo "Your guess of " . $guess . " was incorrect." . "<br>";
    }
    echo "Number of guesses: " . $counter . "<br>";
    echo "The hidden number is: " . $number;

}

?>


