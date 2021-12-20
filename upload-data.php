<?php

include 'includes/db_connx.php';
include 'includes/errors.php';


//set up variables form POST

$product_type = ucfirst($_POST["product_type"]);
$product_brand = $_POST["product_brand"];
$product_cost = $_POST["product_cost"];
$product_condition = $_POST["product_condition"];
$product_age= $_POST["product_age"];
$product_desc = $_POST["product_desc"];



// comments go here
$target_dir = "images/"; //target directory for images
// comments go here
$target_file = $target_dir . basename($_FILES["uploaded"]["name"]);
// comments go here
$uploadOk = 1;
// comments go here
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {
// comments go here - fully document this conditional statement
    $check = getimagesize($_FILES["uploaded"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } 
// comments go here - fully document this conditional statement
	else {
        echo "File is not an image.";
        $uploadOk = 0;
        exit();
    }
}
// comments go here - fully document this conditional statement
if (file_exists($target_file)) {
    echo "File already exists.";
    $uploadOk = 0;
    exit();
}
// comments go here - fully document this conditional statement
if ($_FILES["uploaded"]["size"] > 100000) {
    echo "The file exceeds 100Kb. Please upload a smaller filesize.";
    $uploadOk = 0;
    exit();
}
// comments go here - fully document this conditional statement
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    exit();
}
// comments go here - fully document this conditional statement
if ($uploadOk == 0) {
    echo " <p>Your file was not uploaded.</p>";
    exit();
// comments go here - fully document this conditional statement
} else {
    if (move_uploaded_file($_FILES["uploaded"]["tmp_name"], $target_file)) {

        $target_file; //you can use $imagePathName var to store path name in the database
       
          
    } 
// comments go here - fully document this conditional statement
	else {
        echo "There was an error uploading your file.";
        exit();
    }
}

$sql = "INSERT INTO products (product_type, product_brand, product_cost,product_condition, product_age, product_desc, product_img )VALUES ('$product_type','$product_brand','$product_cost','$product_condition', '$product_age', '$product_desc','$target_file')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>

