<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>



<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cookie = $_POST["keuze"];

setcookie("Cookie", $cookie);
    header("Location: cart.php");
}

$cookie_name = "Cookie";
if(!isset($_COOKIE[$cookie_name])) {
    echo '<form action="#" method="POST"> <label for="name"><h4>Keuze:</h4></label> <input min="1" max="3" size="1" type="number" id="keuze" name="keuze"> <input type="submit" value="submit" name="submit"> </form>';
} 
else {
    echo "<h1>Gekozen item: #" . $_COOKIE[$cookie_name] . "</h1>";
    setcookie("Cookie", "", time() - 3600); 
}
?>

    </body>
</html>