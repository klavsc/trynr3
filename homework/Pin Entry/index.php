<?php

require_once 'Data.php';
require_once 'Person.php';

$database = new Data();

if (isset($_POST['pin']) && $database->logIn($_POST['pin']) != null) {
    $_SESSION['user'] = $database->logIn($_POST['pin'])->getUsername();
}


?>

<html>
<body>

<form method="post" action="/">
    Enter your PIN: <input name="pin" type="number">
    <input type="submit">
</form>

<?php if (isset($_SESSION['user'])) :?>
    <?= "<h3>You are currently logged in as {$_SESSION['user']}</h3>";?>

<?php elseif (isset($_POST['pin']) && $database->logIn($_POST['pin']) == null) :?>
    <h3>Incorrect PIN</h3>
<?php endif;?>

</body>

</html>