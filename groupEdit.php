<?php
require "db.php";
session_start();

$data= $_POST;


if (isset($data['change_group']) ) {

    $group = R::findOne ('groups', 'users_id = ?', array($_SESSION['logged_user']->id));
    $group->title = $data['edit_name'];
    R::store($group);

}
?>

<form method="post" action="groupEdit.php">
<input type="text" name="edit_name" >

<p>
    <button type="submit" name="change_group">Change Name of Group</button>
</p>
</form>