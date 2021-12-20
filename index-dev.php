<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A short description of the web page purpose/ intent">
    <meta name="author" content="Your name 2021">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   

    <style>

h4{color:red;margin-top: 10vh;}
label{position:relative;width:200px;}
input[type=text]{
  position: relative;
  
}

input[type=submit]{
  position: relative;
  border: none;
  padding:20px;

  
}

    
    </style>
</head>
<body>

<div class="container">
<div class="row">



<header><h1>Upload product details to database and upload image to directory</h1>


</header>


<form enctype="multipart/form-data" action="upload-data.php" method="POST">

<label for= "product_type">Product Type</label>
<input name="product_type" type="text" id="product_type"><br>

<label for= "product_brand">Product Brand</label>
<input name="product_brand" type="text" id="product_brand"><br>

<label for= "product_cost">Product Cost</label>
<input name="product_cost" type="text" id="product_cost"><br>

<label for= "product_condition">Product Condition</label>
<input name="product_condition" type="text" id="product_condition"><br>

<label for= "product_age">Product Age</label>
<input name="product_age" type="text" id="product_age"><br>

<label for= "product_desc">Product Description</label>
<textarea name="product_desc" type="text" id="product_desc"></textarea><br>



<input name="uploaded" type="file" id="uploaded"><br>
  
 <input type="submit" value="Add Record" class="bg-success text-white">
 </form> 

</div>
<footer class="footer mt-auto py-3 bg-light navbar-fixed-bottom text-center">
  <div class="container">
    <span class="text-muted">Upload Image</span>
  </div>
</footer>
</div>





</body>
</html>