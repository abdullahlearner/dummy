<?php 
include_once('conn.php');

function createRecord($table,$data,$page){
    $conn = getDBConnection();

    $columns = implode(", ",array_keys($data));
    $values = implode("', '",array_values($data));

   

    $sql = "INSERT INTO $table($columns) VALUES ('$values')";

    if($conn->query($sql)  === TRUE ) {

        print_r($page);
        $msg =  "Record created successfully";
        header("location:$page?mesg=".$msg);

    }else{
        echo "Error";
    }
    $conn->close();

}


function readRecords($table, $condition = "1"){
    $conn = getDBConnection();

    $sql = "SELECT * FROM $table WHERE $condition";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = [];
        while($row = $result->fetch_assoc()) {
            $rows[] =  $row;
        }
        return $rows;
    }else{
        return [];
    }
    $conn->close();    
}

function delteRecord($table,$condition,$page){
    $conn = getDBConnection();
    $sql = "DELETE FROM $table where $condition";

    if($conn->query($sql)  === TRUE ) {

        print_r($page);
        $msg =  "Record Deleted successfully";
        header("location:$page?mesg=".$msg);

    }else{
        echo "Error";
    }
    $conn->close();
}


?>
