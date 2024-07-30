<?php
include '../config/db.php';
$result = $conn->query("SELECT * FROM perfumes");

include '../includes/header.php';
?>

<h1>Admin Panel</h1>
<a href="add.php">Add New Perfume</a>
<table>
    <tr>
        <th>Name</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['brand']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td>
            <form action="delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<?php include '../includes/footer.php'; ?>