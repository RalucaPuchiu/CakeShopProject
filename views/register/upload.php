<?php

error_reporting(0);
$output = NULL;
?>
<?php
  $msg = "";
  
  

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $image = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "images/".$image;
          
    $db = mysqli_connect("localhost", "root", "", "cakeshop");
   
   
    $name= $db->real_escape_string($_POST['name']);
    $description = $db->real_escape_string($_POST['description']);
    $price = $db->real_escape_string($_POST['price']);
    $weight = $db->real_escape_string($_POST['weight']);
    $stock = $db->real_escape_string($_POST['stock']);
    $sql = $db->query("INSERT INTO product(name, description, price, weight, stock, image) VALUES ('$name', '$description', '$price', '$weight', '$stock','$image')");
      
   
    
    
    // Get all the submitted data from the form
        // $sql = "INSERT INTO product (image) VALUES ('$image')";
  
        // Execute query
        mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
  $result = mysqli_query($db, "SELECT * FROM product");
while($data = mysqli_fetch_array($result))
{
  echo "<h2>{$data['name']}</h2>";
  echo "<h2>{$data['description']}</h2>";
  echo "<h2>{$data['price']}</h2>";
  echo "<h2>{$data['weight']}</h2>";
  echo "<h2>{$data['stock']}</h2>";


      ?>


<div class="imaginedatabase"><img src="images/<?php echo $data['image']; ?>"width="150" height="100"> </div>
  
<?php
}
?>
 

  <style>


.imaginedatabase{
    display: inline-block;
    }
</style>


<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
<section class="upload">
<div id="content">
 
  <form method="POST" action="" enctype="multipart/form-data">
      <input type="file" name="uploadfile" value=""/>
      <div class="form-item">
                        
             <input type="TEXT" name ="name" required placeholder="Nume produs:"/>
						
       </div>
       <div class="form-item">
                        
             <input type="TEXT" name ="description" required placeholder="Descriere:"/>
						
       </div>
       <div class="form-item">
                        
             <input type="TEXT" name ="price" required placeholder="Pret:"/>
						
       </div>
       <div class="form-item">
                        
             <input type="TEXT" name ="weight" required placeholder="Gramaj:"/>
						
       </div>
       <div class="form-item">
                        
             <input type="TEXT" name ="stock" required placeholder="Stoc:"/>
						
      
      <div>
          <button type="submit" name="upload">UPLOAD</button>
        </div>
  </form>
  
</div>
</section>
</body>
</html>

<style>
.upload {
  margin-top: 8rem;
  text-align: center;
}
  </style>