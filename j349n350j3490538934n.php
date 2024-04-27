<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Tufaayo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tufaayo Foundation is a youth led organisation geared at improving the lively hood of all community members.">
    <meta name="author" content="Tufaayo foundation">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Tufaayo | Foundation</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="assets/images/tufaayologo.png" type="image/x-icon">
    <meta property="og:image" content="assets/images/tufaayologo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>
<body>

<div class="row">
    <div class="col-md-6 col-lg-6 col-sm-6">
        <form action="./api/blog.php" method="post" enctype="multipart/form-data">
            <h2>Add a blog</h2>
            <label for="">Title</label>
            <input type="text" name="title" placeholder="Enter the blog title" class="form-control">
            
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Enter the blog title" class="form-control">
            
            <label for="">Image</label>
            <input type="file" name="fileUpload" placeholder="Enter the blog title" class="form-control">

            <br>
            <input type="submit" class="btn btn-danger">
        </form>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-6">
        <h2>Top section</h2>

        <form action="">

        </form>
    </div>
</div>
    
</body>
</html>