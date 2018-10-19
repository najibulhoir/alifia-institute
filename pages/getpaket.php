<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
<?php
$a = intval($_GET['a']);

$con = mysqli_connect('localhost','root','','kampung-inggris');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"kampung-inggris");
$sql="SELECT * FROM Paket WHERE id_paket = '".$a."'";
$result = mysqli_query($con,$sql);

echo "<br>";

while($row = mysqli_fetch_array($result)) {
    echo "<input type='text' class='required form-control' name='hargaP' value='".$row['HargaK']."'> <br>" ;
}
mysqli_close($con);
?>