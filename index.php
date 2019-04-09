<?php
// pengaman method get
@$key = $_GET['key'];
if($key != ''){
    exit();
}
$servername = "localhost";
$username = "root";
$password = "";
$database = "sakila";
//create connection
$conn = mysqli_connect($servername, $username, $password, $database);
//check connection
if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}
$sql = "SELECT * FROM actor";
@$key = $_GET ['table'];
if($key === 'actor'){
    $sql = "SELECT * FROM actor";
}
else{
    $error = [
        "result" => "tabel tidak diketahui",
        "data" => "null",
    ];
    $error = json_encode($error);
    echo $error;
    die();
}

$result = $conn->query($sql);
// print_r($result);
$rows = array();
while($it = mysqli_fetch_assoc($result)){
    $rows[] = $it;
}
// print_r($rows);
$rows = json_encode($rows);
print_r($rows);


?>