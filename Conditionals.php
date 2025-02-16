<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
</head>
<body>
<?php

$name = "Dark Matter";
$read = false;
if ($read){
    $message = "You have read the book $name";
}else{
    $message = "You have not read the book $name";
}
?>

<h1>
    <?= $message ?>
</h1>


</body>
</html>