<?php include_once('header.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <title>Prajituri</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css\produse.css">
    
        
</head>

<body>

<?php
$db = mysqli_connect("localhost", "root", "", "cakeshop");


$result = mysqli_query($db, "SELECT * FROM product where category_id=3");
while($data = mysqli_fetch_array($result))
{
   ?>
<div class="row">
    <div class="column">
        <div class="card">
            <div class="img_display"><img src="images/<?php echo $data['image']; ?>"width="200" height="200"> </div>
            <div class="card-body">
            <h2><?php echo $data['name']; ?></h2>
            <p class="pret">Pret: <?php echo $data['price']; ?>lei/kg</p>
            <p><?php echo $data['description']; ?></p>
            <p>Gramaj: <?php echo $data['weight']; ?>g</p>
            <p>Stoc: <?php echo $data['stock']; ?></p></div>
            <div class="myDiv"  style="position:relative;  right:20px"><a style="text-decoration:none" href="cart.php" >Adauga in cos</a></div>
        </div>
</div>

  
<?php
}
?>
</body>

