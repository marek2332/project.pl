<?php
session_start();
    require('libs/rb.php');

    unset($_SESSION['logged_user']);
    header('Location: /');


