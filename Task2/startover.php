//Start over simply clears the session.
<?php
session_start();
$_SESSION = array();
session_destroy();
unset($_SESSION);
header("location:guessinggame.php");
?>