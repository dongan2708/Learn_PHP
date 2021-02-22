<?php
require_once 'login.php';
$conn = new mysqli($hn,$db,$un,$pw);
if($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM classics";
$result = $conn->query($query);
if(!$result) die($conn->error);
$rows = $result ->num_rows;
for($j = 0;$j < $rows;++$j){
    $result ->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    echo 'Author: '.$row['author']."<br>";
    echo 'Title: '.$row['title']."<br>";
    echo 'Type: '.$row['type']."<br>";
    echo 'Year: '.$row['year']."<br>";
    echo 'ISBN: '.$row['isbn']."<br>";

}
$result->close();
$conn->close();
?>