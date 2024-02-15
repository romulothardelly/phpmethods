<?php
    if(session_status() == 1){
        session_start();
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Metho Post 1</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<?php
include 'topbar.php';

var_dump($_SERVER["HTTP_REFERER"]);
echo "<br>";
var_dump($_SERVER['REQUEST_METHOD']);

if(isset($_POST['name']) && isset($_POST['number']) && $_SESSION['afterpost'] == false){
    echo "<p>Name: ".$_POST['name'].". <br>Number: ".$_POST['number']."</p>";
    $_SESSION['afterpost'] = true;
    var_dump($_POST);
}
else{
    echo "<p>Hi, guest. Please enter your name and number</p>";
}
?>
    
</body>
</html>