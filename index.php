<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form name="form" action="" method="post">
    <input type="text" name="subject" id="subject" value="Car Loan">
</form>
<?php
$message = "Salut!!";
mail("secrieru2302@gmail.com","Test",$message);
?>
</body>
</html>