<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$conn = new mysqli('achi-mysql', 'root', '123456', 'devops');
if ($conn->connect_error) {
  die("Connection failed :( : " . $conn->connect_error);
}

$sql = "SELECT * FROM `phrase`";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
           // echo $row['phrase'];
    //$response = array();
    $response =  $row['phrase'];
<<<<<<< HEAD
echo json_encode($response);
=======

echo json_encode($response."ramy2223312321321321321");

>>>>>>> 4949515c11e1e76dcde1ea59829fdd8df467da20


    }
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}