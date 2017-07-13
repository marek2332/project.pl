<?php
require  "db.php";
session_start();


?>

<?php if( isset($_SESSION['logged_user']) ) : ?>
 Użytkownik został autoryzowany

    <hr>
    <a href="/logout.php">Wyjśćie</a>
<?php else : ?>
    <a href="/login.php">Logowanie</a><br>
    <a href="/signup.php">Rejestracja</a><br>
<?php endif ; ?>

