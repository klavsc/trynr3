<?php

require_once 'Code.php';
session_start();
$code = new Code(1234);

if (isset($_POST['code'])) {
    $_SESSION['code'] .= $_POST['code'];
}

if (strlen($_SESSION['code']) >= 4) {
    $info = $code->unlock($_SESSION['code']);
    session_destroy();
}


?>

<html>
<body>
<div class="container">
    <div class="attempts">

        <?php if (isset($_SESSION['code'])) {
            for ($i = 0; $i < strlen($_SESSION['code']); $i++) {
                echo 'X';
            }
        } ?>
        <br>
        <?php if (isset($info)) {
            echo $info;
        } ?>

    </div>

    <div class="buttons">
        <form method="post" action="/">
            <button class="button" type="submit" name="code" value="1">1</button>
            <button class="button" type="submit" name="code" value="2">2</button>
            <button class="button" type="submit" name="code" value="3">3</button>
            <button class="button" type="submit" name="code" value="4">4</button>
            <button class="button" type="submit" name="code" value="5">5</button>
            <button class="button" type="submit" name="code" value="6">6</button>
            <button class="button" type="submit" name="code" value="7">7</button>
            <button class="button" type="submit" name="code" value="8">8</button>
            <button class="button" type="submit" name="code" value="9">9</button>
        </form>
    </div>
</div>
</body>
</html>
