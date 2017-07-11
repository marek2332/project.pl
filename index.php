
<?php

require  "db.php";

?>

<?php if( isset($_SESSION['logged_user']) ) : ?>
 Użytkownik został autoryzowany
 Witamy, <?php echo $_SESSION['logged_user']->login; ?>
    <hr>
    <a href="logout.php">Wyjśćie</a>
<?php else : ?>
<a href="/login.php">Logowanie</a><br>
<a href="/signup.php">Rejestracja</a><br>
<?php endif ; ?>

