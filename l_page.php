<?php
session_start();
$N=1;
$_SESSION['N']=$N;

?>

<!DOCTYPE html>


<html>

<head>
    <meta charset="utf-8" />
    <title> Landing page</title>
    
</head>

<body>
    <h2>
    <form action="php_page.php" method="post" enctype="multipart/form-data">
        <div style="padding-top:80px;">
        <label for="Cname" style="padding-left:500px;">City Name: </label>
        <input type="text" name="c_name"><br><br>
        </div>
        <div style="text-align:center">  
    <input type="submit" />  
         </div>  
        
    </form>
    </h2>
    
    <h2> Προηγούμενη αναζήτηση</h2>

</body>

</html>

<?php
$max=sizeof($_SESSION['myarray']);
for($i=0; $i<$max; $i++) { 

while (list ($key, $val) = each ($_SESSION['myarray'][$i])) { 
echo " $val "; 
}
echo "<br>";
} ?>