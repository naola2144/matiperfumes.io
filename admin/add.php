<?php
include '../config/db.php';

// Ensure the uploads directory exists
$target_dir = dirname(__DIR__) . "/uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0755, true);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Handle file upload
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) { // 500KB limit
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image_url = "uploads/" . basename($_FILES["image"]["name"]); // Save relative path to database
            $sql = "INSERT INTO perfumes (name, brand, price, description, image_url) VALUES ('$name', '$brand', '$price', '$description', '$image_url')";
            if ($conn->query($sql) === TRUE) {
                // Redirect to avoid form resubmission on refresh
                header("Location: add.php");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

include '../includes/header.php';
?>
<element class= "add">
<h1>Add New Perfume</h1>
<form action="add.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="brand" placeholder="Brand" required>
    <input type="number" name="price" step="0.01" placeholder="Price" required>
    <textarea name="description" placeholder="Description"></textarea>
    <input type="file" name="image" required>
    <button type="submit">Add Perfume</button>
</form>

<h2>Available Perfumes</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Description</th>
        <th>Image</th>
    </tr>
    </
    <?php
    $result = $conn->query("SELECT * FROM perfumes");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['brand'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td><img src='../" . $row['image_url'] . "' width='100'></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No perfumes available</td></tr>";
    }
    ?>
</table>
</element>
<?php include '../includes/footer.php'; ?>
body {

}