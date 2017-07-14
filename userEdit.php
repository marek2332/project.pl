<?php
require "db.php";
session_start();

$data= $_POST;

if (isset($data['change_login']) ) {

    $user = R::load( 'users', $_SESSION['logged_user']->id );
    $user->login = $data['edit_login'];
    R::store( $user );

}if (isset($data['change_name']) ) {

    $user = R::load( 'users', $_SESSION['logged_user']->id );
    $user->name = $data['edit_name'];
    R::store( $user );

}if (isset($data['change_surname']) ) {

    $user = R::load( 'users', $_SESSION['logged_user']->id );
    $user->surname = $data['edit_surname'];
    R::store( $user );

}if (isset($data['change_date']) ) {

    $user = R::load( 'users', $_SESSION['logged_user']->id );
    $user->birth_date = $data['edit_date'];
    R::store( $user );

}if (isset($data['change_name']) ) {

    $user = R::load( 'users', $_SESSION['logged_user']->id );
    $user->name = $data['edit_password'];
    R::store( $user );

}if (isset($data['go_back']) ) {

    header("Location: userMenu.php");

}
?>


<form action="/userEdit.php" method="post">

    <input type="text" name="edit_login" >
    <p>
        <button type="submit" name="change_login">Change Login</button>
    </p>

    <input type="text" name="edit_name" >

    <p>
        <button type="submit" name="change_name">Change Name</button>
    </p>

    <input type="text" name="edit_surname" >

    <p>
        <button type="submit" name="change_surname">Change Surname</button>
    </p>

    <input type="date" name="edit_date" >

    <p>
        <button type="submit" name="change_date">Change Date of Birth</button>
    </p>

    <input type="password" name="edit_password" >

    <p>
        <button type="submit" name="change_password">Change Password</button>
    </p>

    <p>
        <button type="submit" name="go_back">Back to the user menu</button>
    </p>


</form>




