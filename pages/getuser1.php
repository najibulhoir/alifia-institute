<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','kampung-inggris');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"kampung-inggris");
$sql="SELECT * FROM asrama WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result)) {
   
    echo "<input type='text' class='required form-control' name='hargaK' value='".$row['HargaP']."'> <br>" ;
   
}

mysqli_close($con);
?>
<br>


</body>
</html>