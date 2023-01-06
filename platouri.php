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


$result = mysqli_query($db, "SELECT * FROM product where category_id=4");
while($data = mysqli_fetch_array($result))
{
   ?>
   <section class="cakes">
        <div class="card">
            <div class="imaginedatabase"><img src="image/<?php echo $data['image']; ?>"width="200" height="200"> </div>
            
            <h2> <?php echo $data['name']; ?></h2>
            <p class="price">Pret: <?php echo $data['price']; ?></p>
            <p><?php echo $data['description']; ?></p>
            <p>Gramaj: <?php echo $data['weight']; ?></p>
            <p>Stoc: <?php echo $data['stock']; ?></p>
        </div>
    </section>

    <?php
}
?>

</body>

