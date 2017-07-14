<?php
require  "db.php";
session_start();

$user = R::load( 'users', $_SESSION['logged_user']->id );
R::trash( $user );
echo '<div style="color: green;">User was deleted<br/> Link to <a href="/"> main</a> page </div><hr>';
