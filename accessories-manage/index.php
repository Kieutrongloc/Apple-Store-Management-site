<?php include("accessories-connection.php") ?>

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
                <a style="text-decoration: none;color: #f5f5f7;" href="http://localhost/www/manage_product/Apple-Store-Management-site/"><i style="padding: 0px 6px;" class="fa-brands fa-apple"></i> Apple Store</a>
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
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th style="width: 12%;">Status</th>
                        <th style="width: 12%;">Price</th>
                        <th style="width:18%">Action</th>
                    </tr>
                    
                <?php
                    require 'accessories-connection.php';
                    $sql = "SELECT * FROM accessories ORDER BY id";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    $count = 0;
                    while ($row = $result->fetch_assoc()) {
                        $count++;
                ?>  
                    <tr class="accessories-cell-list"> 
                        <td class="accessories-cell-name"> <?php echo $row["name"] ?></td>
                        <td><img style="height: 200px;width: 200px;" class="accessories-cell-img" src="<?php echo $row["image"] ?>" alt="Img demo"></td>
                        <td class="accessories-cell-status"><?php echo $row["status"] ?></td>
                        <td class="accessories-cell-price"><?php echo $row["price"]?></td>
                        <td>
                            <a style="color: black;" href="http://localhost/www/manage_product/Apple-Store-Management-site/accessories-manage/accessories-update.php?id=<?php echo $row["id"] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a style="color: red;" href="http://localhost/www/manage_product/Apple-Store-Management-site/accessories-manage/accessories-delete.php/?id=<?php echo $row["id"]?>"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php }} ?>
                </table>
                

                <form class="accessories-input" action="accessories-add.php" method="post">
                    <div class="accessories-input-group">
                        <label for="product name">Product Name:</label>
                        <input name="accessories-name" id="accessories-name" class="accinput-name" style="width: 300px;" type="text" required>
                    </div>
                    <div class="accessories-input-group">
                        <label for="image link">Image link:</label>
                        <input name="accessories-image" id="accessories-image" class="accinput-img" style="width: 300px;" type="text" required>                        
                    </div>
                    <div class="accessories-input-group">
                        <label for="status">Status:</label>
                        <div>
                            <input name="accessories-status" type="radio" checked id="New" value="New">
                            <label for="New">New</label>
                        </div>
                        <div>
                            <input name="accessories-status" type="radio" checked id="Free-Engraving" value="Free-Engraving">
                            <label for="Free-Engraving">Free Engraving</label>
                        </div>
                    </div>
                    <div class="accessories-input-group">                        
                        <label for="price">Price:</label>
                        <input name="accessories-price" id="accessories-price" type="number" class="accinput-price" style="width: 80px;" type="number" required>                        
                    </div>
                    <input name="accessories-submit" class="accessories-submit" type="submit" value="Submit">
                </form>
            </div>

            <div class="article-category-loudandclear">
                <h2 style="padding: 0px 0px 20px 20px;">Loud and clear</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th style="width: 12%;">Status</th>
                        <th style="width: 12%;">Price</th>
                        <th style="width:18%">Action</th>
                    </tr>

                    <tr class="loudandclear-cell-list">
                        <td class="loudandclear-cell-name">Name Demo</td>
                        <td><img class="loudandclear-cell-img" src="" alt="Img demo"></td>
                        <td class="loudandclear-cell-status">Status Demo - check</td>
                        <td class="loudandclear-cell-price">99$ Demo</td>
                        <td><button class="loudandclear-btn-edit">Edit</button><button class="accessories-btn-remove" style="color: red;">Remove</button></td>
                    </tr>
                </table>
                <form class="accessories-input" action="add.php" method="post">
                    <div class="loudandclear-input-group">
                        <label for="product name">Product Name:</label>
                        <input class="accinput-name" style="width: 300px;" type="text" required>
                    </div>
                    <div class="loudandclear-input-group">
                        <label for="image link">Image link:</label>
                        <input class="accinput-img" style="width: 300px;" type="text" required>                        
                    </div>
                    <div class="loudandclear-input-group">
                        <label for="status">Status:</label>
                        <select class="accinput-status" style="width:fit-content;" name="Status" id="status">
                            <option value="New">New</option>
                            <option value="Free Engraving">Free Engraving</option>
                        </select>                        
                    </div>
                    <div class="loudandclear-input-group">
                        
                        <label for="price">Price:</label>
                        <input type="number" class="accinput-price" style="width: 80px;" type="number" required>                        
                    </div>
                    <input class="loudandclear-submit" type="submit" value="Submit">
                </form>
            </div>
            
        </article>

    </nav>
    <!-- <script src="main.js"></script> -->
</body>
</html>