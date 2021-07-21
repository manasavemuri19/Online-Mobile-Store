<?php
    require "db/connection.php";
    require "db/functions.php";
    // To retrieve all the records
    $result = retrieve($conn);
?>

<?php  foreach($result as $r){ ?>
<div class="col-4">
<div class="card" >
    <img src="<?php echo $r['image']; ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><?php echo $r['name']; ?></h5>
        <p class="card-text"><?php echo $r['description']; ?></p>
        <a href="product.php?id=<?php echo $r['id']; ?>" class="btn btn-primary">VIEW</a>
    </div>
</div>
</div>
<?php } ?>