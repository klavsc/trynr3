<?php

require_once 'Person.php';
require_once 'Data.php';
require_once 'Chat.php';
require_once 'ChatData.php';

session_start();

$user = new Data();
$chat = new ChatData();

if (isset($_POST['pin']) && $user->logIn($_POST['pin']) != null) {
    $_SESSION['user'] = $user->logIn($_POST['pin'])->getUsername();
}

if (isset($_POST['message'])) {
    $chat->addMessage(new Chat(
        $user->findByUsername($_SESSION['user'])->getID(),
        $_POST['message']));
}

if (isset($_POST['logout'])) {
    session_unset();
}
?>

<html>
<body>

<?php if (!isset($_SESSION['user'])) : ?>
    <form method="post" action="/">
        Enter your PIN: <input name="pin" type="number">
        <input type="submit">
    </form>
<?php endif; ?>

<?php if (isset($_SESSION['user'])) : ?>
    <?= "<h3>You are currently logged in as {$_SESSION['user']}</h3>"; ?>
    <h2>Create new message</h2>
    <form method="post" action="/">
        Enter new message: <input name="message">
        <input type="submit">
    </form>
    <form method="post" action="/">
        <button type="submit" name="logout">Log out</button>
    </form>

<?php elseif (isset($_POST['pin']) && $user->logIn($_POST['pin']) == null) : ?>
    <h3>Incorrect PIN</h3>
<?php endif; ?>

</body>

</html>