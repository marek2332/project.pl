<?php
require "db.php";
session_start();

$data = $_POST;

if (isset($data['group_list']) )
{
    header("Location: userList.php");
}

if (isset($data['group_edit']) )
{
    header("Location: groupEdit.php");
}

if (isset($data['group_delete']) )
{
    header("Location: groupDelete.php");
}
if (isset($data['add_group']) )
{
    header("Location: groupAdd.php");
}

?>

<form action="/groupMenu.php" method="post">

    <p>
        <button type="submit" name="group_list">List of Users who belong to the Group</button>
    </p>

    <p>
        <button type="submit" name="group_edit">Editing user group</button>
    </p>

    <p>
        <button type="submit" name="group_delete">Deleting a user group</button>
    </p>

    <p>
        <button type="submit" name="add_group">Adding a user group</button>
    </p>

</form>
