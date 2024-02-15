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
    <title>Document</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<?php
include 'topbar.php';
?>

<table class="tableth redtable">
<form action="post1.php" method="post" id="formpost">
<tr><td><label for="name" class="col1">Name:</label></td><td><input class="col2" type="text" name="name" placeholder="Enter your name" required></td></tr>
<tr><td><label class="col1" for="number">Number:</label></td><td><input  class="col2" type="number" name="number" placeholder="Enter your number" required></td></tr>
<tr><td class="col2x" colspan="2"><button type="button"   id="btpost">Enviar</button ></td></tr>
</form>
</table>

<script>

document.addEventListener('keydown', function(event) {
    // Check if the Enter key is pressed and not in a textarea or input[type=submit]
    if (event.key === 'Enter' && event.target.tagName.toLowerCase() !== 'textarea' && event.target.type !== 'submit') {
        event.preventDefault();
        return false;
    }

});

document.getElementById('btpost').addEventListener('click',function(){
    
    if (confirm("Are you sure you want to perform this action?")) {
        if(document.getElementById('formpost').checkValidity()){
            const form=document.getElementById('formpost');
            form.submit();
        }else{
            alert('Please fill all fields');
            return false;
        }
    
    } else {
        return false;
    
    }
});
</script>
    
</body>
</html>