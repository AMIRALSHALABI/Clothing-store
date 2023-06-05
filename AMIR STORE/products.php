<?php
    session_start();
    include ("connection.php");
    $query = "SELECT * FROM product";

?>



<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
    <title>AMIR STOR</title>
    <script src="https://kit.fontawesome.com/9269e9eed4.js" crossorigin="anonymous"></script>
    <script>
    function stickyMenu() {
        var sticky = document.getElementById('sticky');
        if (window.pageXOffset > 220) {
            sticky.classList.add('sticky');
        } else {
            sticky.classList.remove('sticky');
        }
    }
    window.onscroll = function() {
        stickyMenu();
    }
    </script>
</head>

<body>
    <div class="parallax">
        <div class="page-title"> <img src="images/logo.png"> AMIR STORE</div>
    </div>
    <?php include ('usermenu.php') ?>
    <h3 class="title-2">All Products</h3>
    <div class="container">
        <?php if (isset($_SESSION['success_cart'])) : ?>
        <h4 style="color: green; font-weight: bold">
            <?php 
                echo $_SESSION['success_cart']; 
                unset($_SESSION['success_cart']);
                ?></h4> <br>
        <?php endif ?>
        <?php if (isset($_SESSION['checkout_success'])) : ?>
        <h4 style="color: green; font-weight: bold">
            <?php 
                echo $_SESSION['checkout_success']; 
                unset($_SESSION['checkout_success']);
                ?></h4> <br>
        <?php endif ?>
        <?php 
        $result = mysqli_query($db, $query);
        while($data = mysqli_fetch_assoc($result)){ ?>
        <div class="categories">
            <img src="images/products/<?=$data['image']?>" class="item-image">
            <h4><?= $data['name']?></h4>
            <div class="rating">
                <?php for($i=1; $i<=$data['rating']; $i++){?>
                <i class="fa fa-star"></i>
                <?php } ?>
                <?php for($i=1; $i<=5-$data['rating']; $i++){?>
                <i class="fa fa-star-o"></i>
                <?php } ?>
            </div>
            <p>$ <?= $data['price']?></p>
            <form action="server.php" method="post">
                Quantity:
                <select name="quantity" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br><br>
                <input type="hidden" name="p_id" value="<?=$data['id']?>">
                <input type="hidden" name="p_name" value="<?=$data['name']?>">
                <input type="hidden" name="p_category" value="<?=$data['category']?>">
                <input type="hidden" name="p_price" value="<?=$data['price']?>">
                <input type="hidden" name="p_image" value="<?=$data['image']?>">
                <input type="hidden" name="from_products" value="from_products">
                <input type="submit" name="add_to_cart" value="Shop Now">
            </form>
        </div>
        <?php 
        }?>
    </div>


    <!--Home Page Ends-->

    <!--footer starts-->
    <div class="parallax">
        <div class="footer">
            <div class="quick-links">
                <div>Locations</div>
                <ul>
                    <li><a href="https://goo.gl/maps/ZKY1qT2Cf6yfJoSk9" class="a-links">AMIR STORE</a></li>

                </ul>
            </div>
            <div class="quick-links">
                <div>Careers</div>
                <ul>
                    <li><a href="" class="a-links">Packing staff</a></li>
                    <li><a href="" class="a-links">Delivery person</a></li>
                    <li><a href="" class="a-links">Shelf Fillers</a></li>
                </ul>
            </div>
            <div class="quick-links">
                <div>Quick Links</div>
                <ul>
                    <li><a href="FAQ.html" class="a-links">FAQ</a></li>
                    <li><a href=" mailto:amir2020046@gmail.com" class="a-links">Help</a></li>
                    <li><a href="privacyPolicy.html" class="a-links">Privacy Policy</a></li>
                    <li><a href="T&A.html" class="a-links">Terms and Conditions</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <i class="fas fa-copyright"></i>2023 By Amir store
    </div>
    <!--footer ends-->
</body>

</html>