<?php
    // json header to make the return value an allowed json format
    header("Content-Type: application/json");

    include_once('./conn.php');

    // establishing the connection to a database
    $obj = new Database();
    $conn = $obj->getConnString();

    $response = array();

    if($_SERVER['REQUEST_METHOD']==='POST' ){
        $email = $_POST["email"];
    
        $is_already_existing = "SELECT * FROM subscribers WHERE email = ?";
        $stmt = $conn->prepare($is_already_existing);

        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $response["error"] = true;
            $response["status"] = "failure";
            $response["message"] = "Email was already taken. Consider trying with another email address";
            // close database connection
            $stmt->close();
            $conn->close();
            echo json_encode($response);
        }else{
            $query = "INSERT INTO subscribers(`email`)VALUES(?)";
            $stmt1 = $conn->prepare($query);
                
            $stmt1->bind_param("s",$email);
            $stmt1->execute();

            if ($stmt1->affected_rows > 0) {
                header('location:./../index.php');
            }else{
                echo "Error";
            }

        }

    }else{
        $response["error"] = true;
        $response["status"] = "failure";
        $response["message"] = "Have no permissions to access this api";
    }