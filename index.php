<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$pass="admin";
 echo $pass;
 echo "<br>";
 echo md5($pass);
?>
<br>
<?php
$txt = "PHP";
echo "I love $txt!";
?>



<ul>
    <li>
        <a href="index.php">
            Index page 
        </a>
    </li>
 </ul>    
 <ul>
    <li>
        <a href="about.php">
            About page 
        </a>
    </li>
 </ul>    













    <?php echo "red";?>    

<br>
    <?php
    $a=5;
    $b=23;
    $cem=$a+$b;
    echo $cem;
    ?>
 <br>
    <?php


    $s="234";
   
    var_dump($s);
    echo "<br>";
     echo $s;
    ?>
</body>
</html>
<script>
    alert("demo")
</script>