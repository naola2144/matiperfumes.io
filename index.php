<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mati Perfumes</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>MATI PERFUMES</h1>
           
          
       
                        
                       
                <a href="https://t.me/naolatr" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                <a href="https://www.instagram.com/your-instagram-handle" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/yna.ol.169" target="_blank"><i class="fab fa-facebook"></i></a>
                <head>
          




                    
          <meta name="viewport" >
          <title>Link to Tiktok account</title>
        </head>
        <body>
          <a href="https://www.tiktok.com/@hawi_tr" target="_blank"><i class="fab fa-tiktok social-icon"></i></a>
        </body>
        </html>
        <head>
            </div>
        </div>
        </div>
    </header>


    <section id="shop">
        <div class="container">
            
            <div class="product-list" id="product-list">
                <!-- Products will be loaded here dynamically -->
                <body>
    <header class="headerr">
        <video autoplay muted loop>
            <source src="images/cc.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
            <h2>Always Feel Fresh</h2>
        </video>
        <div class="headerr-content">
        
       
            
        </div>
    </header>

    
        </div>
    </section>
            </div>
        </div>
    </section>

    
   
        

    <script src="scripts.js"></script>
</body>
</html>




            
						
            
				
			</tbody>
		</table>
	</div>
</body>
</html>

              





  




                <?php
include 'config/db.php';
$result = $conn->query("SELECT * FROM perfumes");


?>

<h1>Always Feel Fresh</h1>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h2>Always Feel Fresh</h2>
     <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

<!--
  - custom css link
-->
<link rel="stylesheet" href="./assets/css/style-prefix.css">

<!--
  - google font link
-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleprefix.css">
</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mati Perfumes</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

</html>
