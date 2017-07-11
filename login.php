<?php
session_start();
require "db.php";


$data = $_POST;

if (isset($data['do_login']))
{
    $err = array();

    $user = R::findOne('users', 'login = ?', array($data['login']));

    if( $user )

    {

        if(password_verify($data['password'], $user->password))

        {

            $_SESSION['logged_user'] = $user;
            echo '<div style="color: green;">Użytkownik został zalogowany<br/> 
                       Przejście na <a href="/index.php"> strone</a> głowną</div><hr>';


        }else
        {

            $err[] = "Nieprawidlowe hasłó";

        }

    }else

    {

        $err[] = "Nazwa użytkownika nie istnieje";

    }

    if (!empty($err))
    {

        echo '<div style="color: red;">' . array_shift($err) . '</div><hr>';

    }



}

?>

<form action="login.php" method="post">

    <p>
    <p><strong>Nazwa użytkownika</strong></p>
    <input type="text" name="login" value="<?php echo @$data['login']; ?>">
    </p>

    <p>
    <p><strong>Hasło</strong></p>
    <input type="password" name="password" value="<?php echo @$data['password']; ?>">
    </p>

    <p>
        <button type="submit" name="do_login">Logowanie</button>
    </p>

</form>
