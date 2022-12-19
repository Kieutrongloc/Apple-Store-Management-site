<?php
require "accessories-connection.php";
$name = "";
$image = "";
$status = "";
$price = 0;

if(isset($_GET["id"])){
  $id = $_GET["id"];
  $sqlGetId = "SELECT * FROM accessories WHERE id = ".$id;
  $result = mysqli_query($conn, $sqlGetId);
  $row = mysqli_fetch_row($result);
  $name = $row[1];
  $image = $row[2];
  $status = $row[3];
  $price = $row[4];
}

// Cho nay la update nhung no lai create new
if(isset($_POST["accessories-submit"])){
  $name = $_POST['accessories-name'];
  $image = $_POST['accessories-image'];
  $status = $_POST['accessories-status'];
  $price = $_POST['accessories-price'];
  $sql = "UPDATE accessories SET name = '$name', image = '$image', status = '$status', price = '$price' WHERE id=".$_POST["accessories-id"];
  if ($conn->query($sql) === TRUE) {
    // echo "Record updated successfully";
    header("Location: http://localhost/www/manage_product/Apple-Store-Management-site/accessories-manage");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  // mysqli_query($conn,$sql) or die("Update Error");
//   header('Location: http://localhost/www/manage_product/Apple-Store-Management-site/');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Addict - Store Management</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- <link rel="stylesheet" href="assets/font/themify-icons/Themify IconFonts 5-23-2014.json"> -->
    <link rel="stylesheet" href="assets/font/fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
</head>
<body>
    <!-- header -->
    <header>
        <div class="header-bar">
            <div class="header-nav">
                <i style="padding: 0px 6px;" class="fa-brands fa-apple"></i>
                <p>Home</p>
                <p>/</p>
                <p>Products</p>
            </div>
            <div class="header-button">
                <a style="text-decoration: none;color: #f5f5f7;" href=""><i style="padding: 0px 6px;" class="fa-brands fa-apple"></i> Apple Store Products Management</a>
                <i href=""><i class="fa-solid fa-bell"></i></i>
                <a style="border: solid 1px gray;border-radius: 10px;padding: 3px; font-size: 14px;">Support Center</a>
            </div>
        </div>
    </header>

    <!-- navigation -->
    <nav class="nav-body">
        <aside class="nav-body-sidebar">
            <div class="sidebar-list">
                <div class="list-functions">
                    <div class="list-function-parent">
                        <p class="function-item"><i style="padding-right: 10px;" class="fa-solid fa-book"></i>Order Management</p>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <ul class="list-function-child"></ul>
                </div>
                <div class="list-functions">
                    <div class="list-function-parent">
                        <p class="function-item"><i style="padding-right: 10px;" class="fa-solid fa-cube"></i>Product Management</p>
                        <i class="fa-solid fa-chevron-up"></i>
                    </div>
                    <ul class="list-function-child">
                        <li style="list-style: none;padding:16px 26px 0px;color: blue;font-weight: bold;">Manage products</li>
                        <li style="list-style: none;padding:16px 26px 0px;">Products in stock</li>
                    </ul>
                </div>
                <div class="list-functions">
                    <div class="list-function-parent">
                        <p class="function-item"><i style="padding-right: 10px;" class="fa-solid fa-bullhorn"></i>Marketing Channel</p>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <ul class="list-function-child"></ul>
                </div>
                <div class="list-functions">
                    <div class="list-function-parent">
                        <p class="function-item"><i style="padding-right: 10px;" class="fa-solid fa-message"></i>Promotion Message</p>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <ul class="list-function-child"></ul>
                </div>
                <div class="list-functions">
                    <div class="list-function-parent">
                        <p class="function-item"><i style="padding-right: 10px;" class="fa-solid fa-wallet"></i>Finance</p>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <ul class="list-function-child"></ul>
                </div>
                <div class="list-functions">
                    <div class="list-function-parent">
                        <p class="function-item"><i style="padding-right: 10px;" class="fa-solid fa-chart-simple"></i>Data</p>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <ul class="list-function-child"></ul>
                </div>
                <div class="list-functions">
                    <div class="list-function-parent">
                        <p class="function-item"><i style="padding-right: 10px;" class="fa-solid fa-gear"></i>Setting</p>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <ul class="list-function-child"></ul>
                </div>
            </div>
        </aside>

        <!-- Main article -->
        <article class="nav-body-products-article">
            <div class="article-nav">
                <p style="color: blue;font-weight: bolder;border-bottom: solid 2px blue;padding-bottom: 10px;">All products</p>
                <p>Available</p>
                <p>Out of stock</p>
            </div>
            <h1 style="font-size: 30px;">Product list</h1>
            <div class="article-category-accessories">
                <h2 style="padding: 0px 0px 20px 20px;">Accessories</h2>

                <form class="accessories-input" action="accessories-update.php" method="post">
                    <input value="<?php echo $id ?>" name="accessories-id" id="accessories-id" class="accinput-name" type="hidden">
                    <div class="accessories-input-group">
                        <label for="product name">Product Name:</label>
                        <input value="<?php echo $name ?>" name="accessories-name" id="accessories-name" class="accinput-name" style="width: 300px;" type="text" required>
                    </div>
                    <div class="accessories-input-group">
                        <label for="image link">Image link:</label>
                        <input value="<?php echo $image ?>" name="accessories-image" id="accessories-image" class="accinput-img" style="width: 300px;" type="text" required>                        
                    </div>
                    <div class="accessories-input-group">
                        <label for="status">Status:</label>
                        <div>
                            <input name="accessories-status" type="radio" id="New" value="New" <?php echo $status === 'New' ? 'checked' : ''; ?> />
                            <label for="New">New</label>
                        </div>
                        <div>
                            <input name="accessories-status" type="radio" id="Free-Engraving" value="Free-Engraving"  <?php echo $status === 'Free-Engraving' ? 'checked' : ''; ?>/>
                            <label for="Free-Engraving">Free Engraving</label>
                        </div>
                    </div>
                    <div class="accessories-input-group">                        
                        <label for="price">Price:</label>
                        <input value="<?php echo $price ?>" name="accessories-price" id="accessories-price" type="number" class="accinput-price" style="width: 80px;" type="number" required>                        
                    </div>
                    <input name="accessories-submit" class="accessories-submit" type="submit" value="Update">
                </form>
            </div>
        </article>

    </nav>
    <!-- <script src="main.js"></script> -->
</body>
</html>
