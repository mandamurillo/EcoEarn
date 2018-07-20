<!--//updating info-->
<!--UPDATE `user_info` SET `glass` = '3' WHERE `user_info`.`username` = 'code2040'-->

<!--//creating new users-->
<!--INSERT INTO `user_info` (`user_info_id`, `username`, `password`, `plastic`, `glass`, `aluminum`) VALUES (NULL, 'user1', 'user1', '1', '2', '3');-->

<?php

include 'dbConnect.php';
$connect = connectToDB();

function insertRecordIntoDB($connect) {
    $sql = "INSERT INTO yes (date) VALUES (NOW())"; 
    $stmt = $connect->prepare($sql); 
    $stmt->execute($data); 
}



function getLatestCount($connect) {
    $sql = "SELECT count(*) times FROM yes"; 
    $stmt = $connect->prepare($sql); 
    
    
    $stmt->execute($data); 
    $result = $stmt->fetch(PDO::FETCH_ASSOC); 
    
    return $result['times']; 

}

function getLatestTimeStamp($connect) {
    $sql = "SELECT date FROM `yes` WHERE 1 ORDER BY date DESC LIMIT 1"; 
    $stmt = $connect->prepare($sql); 
    
    
    $stmt->execute($data); 
    $result = $stmt->fetch(PDO::FETCH_ASSOC); 
    return $result['date']; 
}


insertRecordIntoDB($connect); 
$numYes = getLatestCount($connect); 
echo json_encode(array(
    "countYes" => $numYes, 
    "latestTime" => getLatestTimeStamp($connect)
)); 




// function getLatestTime() {
//     $connect = getDBConnection();
//     $sql = "SELECT * FROM `records` WHERE 1 ORDER BY date DESC LIMIT 1"; 
//     $stmt = $connect->prepare($sql); 
    
//     $stmt->execute($data); 
//     $result = $stmt->fetch(PDO::FETCH_ASSOC); 
//     print_r($result); 
//     return $result["date"]; 

// }

//Encoding data using JSON
//echo json_encode($result); 




?>