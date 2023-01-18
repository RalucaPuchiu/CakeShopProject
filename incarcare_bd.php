<?php
  $msg = "";
  include('conn.php');
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $image = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "images/".$image;
   
    $name= $conn->real_escape_string($_POST['name']);
    $description = $conn->real_escape_string($_POST['description']);
    $price = $conn->real_escape_string($_POST['price']);
    $weight = $conn->real_escape_string($_POST['weight']);
    $stock = $conn->real_escape_string($_POST['stock']);
    $category_id = $conn->real_escape_string($_POST['category_id']);

    
    $sql = $conn->query("INSERT INTO product(name, description, price, weight, stock, image, category_id) VALUES ('$name', '$description', '$price', '$weight', '$stock','$image', '$category_id')");
      
   mysqli_query($conn, $sql);
          
      if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
      }else{
            $msg = "Failed to upload image";
      }
  }
$result = mysqli_query($conn, "SELECT * FROM product");
while($data = mysqli_fetch_array($result))
{
  echo "<h2>{$data['name']}</h2>";
  echo "<h2>{$data['description']}</h2>";
  echo "<h2>{$data['price']}</h2>";
  echo "<h2>{$data['weight']}</h2>";
  echo "<h2>{$data['stock']}</h2>";

      ?>


<div class="img_display"><img src="images/<?php echo $data['image']; ?>"width="100" height="100"> </div>
  
<?php
}
?>
 

<!DOCTYPE html>
<html>
<head>
<title>Incarca date</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
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
      </div>
      <div class="form-item">          
             <input type="TEXT" name ="category_id" required placeholder="Categorie:"/>				
      </div>

      <div>
          <button type="submit" name="upload">Incarca</button>
        </div>
  </form>
  
</body>
</html>

<style>

.img_display{
    display: inline-block;
    }

    
.incarcare_bd {
  margin-top: 8rem;
  text-align: center;
}
</style>