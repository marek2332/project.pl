<?php
require "db.php";
session_start();

$data = $_POST;

if (isset($data['add_group']))
{
    $user = $_SESSION['logged_user'];
    $group = R::dispense('groups');
    $group->title = "group1";

    R::store($group);

    $group->users = $user;

    R::store($group);

    echo '<div style="color: green;">A new group was added<br/></div><hr>';

}

?>

Enter name of a new group:<input type="text" name="edit_group">

<p>
    <button type="submit" name="add_group">Submit</button>
</p>
