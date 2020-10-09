<?php

require_once 'Person.php';
require_once 'PersonData.php';

$personData = new PersonData();

$name = $_POST['name'] ?? 'Klavs';

$person = $personData->getByName($name);

echo $person->getName() . ' | ' . $person->getAge() . ' | ' . $person->getCount();

?>


<html>
<body>
<form action="/" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" />
    <button type="submit">
        Submit
    </button>
</form>
</body>
</html>
