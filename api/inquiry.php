<?php 

    header("Content-Type: application/json");

    include_once('./conn.php');

    // establishing the connection to a database
    $obj = new Database();
    $conn = $obj->getConnString();

    $response =[];

    if($_SERVER['REQUEST_METHOD']==='POST' ){
        $firstname = $_POST["firstname"];
        $surname = $_POST["surname"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        $query = "INSERT INTO inquries(`firstname`,`surname`,`email`,`message`)VALUES(?,?,?,?)";
        $stmt = $conn->prepare($query);
        
        $stmt->bind_param("ssss", $firstname,$surname,$email,$message);
        $stmt->execute();
        header('location:./../index.php');
    }else{
        $response["error"] = true;
        $response["status"] = "failure";
        $response["message"] = "Have no permissions to access this api";
    }

?>