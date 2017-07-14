<?php
require  "db.php";
session_start();

$users = R::getAll('SELECT name FROM `users` WHERE id IN          
(SELECT `users_id` FROM groups WHERE users_id IS NOT NULL) ');


foreach ($users as $user){
    echo $user['name']."</br>" ;
}



/*
var_dump($users = R::findAll( 'users', 'id = ?', array($group->users_id)));

foreach ($users as $user){
    echo $user->name;
}
$groups = R::findAll ('groups',' WHERE users_id IS NOT NULL ');
*/