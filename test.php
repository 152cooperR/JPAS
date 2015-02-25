<html>
<head>
    <?php

    define("ENCRYPTION_KEY", "!@#$%^&*()");

    require("api/api.php");

    ?>
</head>
<body>
<form action="<?php addService($_POST['type'], $_POST['FirstName'], $_POST['LastName'],
    $_POST['date']); ?>" method="post">

    <input type="text" name="type" value="<?php $type ?>">
    <input type="text" name="FirstName" value="<?php $FirstName ?>">
    <input type="text" name="LastName" value="<?php $LastName ?>">
    <input type="text" name="date" value="<?php $date ?>">
    <input type="submit" value="Create user">


</form>

</body>
</html>