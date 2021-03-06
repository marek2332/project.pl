<?php
require "db.php";
session_start();




$data = $_POST;

if (isset($data['do_sigup'])) {
    //rejestracja
    $err = array();
    if (trim($data['login']) == '') {
        $err[] = 'Podaj nazwę użytkownika';
    }

    if ($data['password'] == '') {
        $err[] = 'Podaj hasło';
    }

    if ($data['password_2'] != $data['password']) {
        $err[] = 'Podane hasła nie są jednakowe.';
    }
    if (R::count('users', "login = ?", array($data['login'])) > 0) {
        $err[] = 'Podana nazwa użytkownika już istnieje';
    }

    if (empty($err)) {

        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        $user->name = $data['name'];
        $user->surname = $data['surname'];
        $user->birth_date = $data['birth_date'];


        R::store($user);


        echo '<div style="color: green;">Rejestracja ukończona</bt> Link to <a href="login.php"> main</a> page</div><hr>';
    } else {
        echo '<div style="color: red;">' . array_shift($err) . '</div><hr>';
    }


}

?>

<form action="/signup.php" method="post">

    <p>
    <p><strong>Nazwa użytkownika</strong></p>
    <input type="text" name="login" value="<?php echo @$data['login']; ?>">
    </p>

    <p>
    <p><strong>Hasło</strong></p>
    <input type="password" name="password">
    </p>

    <p>
    <p><strong>Powtórzenie hasła</strong></p>
    <input type="password" name="password_2">
    </p>

    <p>
    <p><strong>Imię</strong></p>
    <input type="text" name="name">
    </p>

    <p>
    <p><strong>Nazwisko</strong></p>
    <input type="text" name="surname">
    </p>

    <p>
    <p><strong>Data urodzenia</strong></p>
    <input type="date" name="birth_date">
    </p>

    <p>
        <button type="submit" name="do_sigup">Rejestracja</button>
    </p>

</form>
