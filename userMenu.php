<?php
require "db.php";
session_start();


$data = $_POST;

if (isset($data['user_edit']) )

{
    header("Location: userEdit.php");
}

if (isset($data['user_list']) )
{
    header("Location: userList.php");
}

if (isset($data['user_delete']) )
{
    header("Location: userDelete.php");
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