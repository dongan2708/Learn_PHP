<?php

require_once 'login.php';

$conn = mysqli_connect($hn,$un,$pw,$db);
if(!$conn)
    die(mysqli_connect_error());

$query = "SELECT * FROM drink";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['image']."<br>".$row['name']."<br>Size:".$row['size']."<br>Price:".$row['price']."VND<br>";
    }
}
else
    echo "0 result";
mysqli_close($conn);
?>