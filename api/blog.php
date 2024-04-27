<?php 

    header("Content-Type: application/json");

    include_once('./conn.php');

    // establishing the connection to a database
    $obj = new Database();
    $conn = $obj->getConnString();

    $response = [];

    if($_SERVER['REQUEST_METHOD']==='POST' ){
        $title = $_POST["title"];
        $description = $_POST["description"];
        $file = $_FILES["fileUpload"];

        $target_dir = "uploads/";
        $target_file = $target_dir . time().".".strtolower(pathinfo(basename($_FILES["fileUpload"]["name"]),PATHINFO_EXTENSION));
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            $response["status"] = "Failed";
            $response["message"] ="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";            
        }

        if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
            $response["status"] = "success";
            $response["upload"] = "The file  has been uploaded.";
          } else {
            $response["status"] = "Failed";
            $response["upload"]  = "Sorry, there was an error uploading your file.";
          }

          $query = "INSERT INTO blogs(`title`,`description`,`image`)VALUES(?,?,?)";
          $stmt = $conn->prepare($query);
          
          $stmt->bind_param("sss", $title,$description,$target_dir);
          $stmt->execute();

          
        }else{
            $response["status"] = "Failed";
            $response["serverMessage"] = "Method not allowed.";
        }
        
        echo json_encode($response);
    // echo time();

?>