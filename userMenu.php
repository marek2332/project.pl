<?php
session_start();
require "db.php";

$data = $_POST;

if (isset($data['user_delete']) )

{
    $user = R::findOne('users', 'login = ?', array($data['login']));

    if($user){
    R::trash( $user );
        }
}




?>


<form action="/userMenu.php" method="post">

    <p>
        <button type="submit" name="user_list">Lista użytkowników</button>
    </p>

    <p>
        <button type="submit" name="user_edit">Edycja użytkownika</button>
    </p>

    <p>
        <button type="submit" name="user_delete">Usuwanie użytkownika</button>
    </p>

</form>