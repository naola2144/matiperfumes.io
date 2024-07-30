<?php
include 'config/db.php';
$result = $conn->query("SELECT * FROM perfumes");


?>

<h1>Perfume Shop</h1>
<div class="perfumes">
    <?php while($row = $result->fetch_assoc()): ?>
    <div class="perfume">
        <h2><?php echo $row['name']; ?></h2>
        <p><?php echo $row['brand']; ?></p>
        <p><?php echo $row['price']; ?></p>
        <p><?php echo $row['description']; ?></p>
        <img src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['name']; ?>">
    </div>
    <?php endwhile; ?>
</div>

<?php include 'includes/footer.php'; ?>