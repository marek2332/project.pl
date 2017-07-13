<?php
session_start();
require "db.php";

$data= $_POST;

if (isset($data['change_name']) ) {


  echo $_SESSION['logged_user']->name;


}

?>


<form action="/userEdit.php" method="post">

    <p>
        <button type="submit" name="change_login">Change Login</button>
    </p>

    <p>
        <button type="submit" name="change_name">Change Name</button>
    </p>

    <p>
        <button type="submit" name="change_surname">Change Surname</button>
    </p>

    <p>
        <button type="submit" name="change_date">Change Date of Birth</button>
    </p>

</form>




