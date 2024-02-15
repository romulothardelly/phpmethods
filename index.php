<?php
    if(session_status() == 1){
        session_start();
    }
    $_SESSION['afterpost']=false;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <link rel="stylesheet" href="mystyle.css">

</head>
<body>
<?php
include 'topbar.php';
?>

<table class="tableth">
<form action="post1.php" method="post">
<tr><td><label for="name" class="col1">Name:</label></td><td><input class="col2" type="text" name="name" placeholder="Enter your name" required></td></tr>
<tr><td><label class="col1" for="number">Number:</label></td><td><input  class="col2" type="number" name="number" placeholder="Enter your number" required></td></tr>
<tr><td class="col2x" colspan="2"><input type="submit" value="Enviar"></td></tr>
</form>
</table>

</body>
</html>