<?php 
    session_start();
    include ("connection.php");
    $query = "SELECT * FROM product";
    $cart = $_SESSION;

?>


<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
    <title>Amir store</title>
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
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>

<body>
    <div class="parallax">
        <div class="page-title"> <img src="images/logo.png"> AMIR STORE
            <div class="col-2">
                <h1><br><br>
                    <h1></h1>
                    <h2> </h2>
            </div>
        </div>
    </div>
    <?php include ('usermenu.php') ?>
    <!--Home Page Begins-->

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
        <div class="categories">
            <a href="#caps">
                <img src="images/103.jpg" class="item-image" />
                <div class="image-title">Caps</div>
            </a>
        </div>

        <div class="categories">
            <a href="#chains">
                <img src="images/chain1.jpg" class="item-image" />
                <div class="image-title">Chains</div>
        </div>

        <div class="categories">
            <a href="#shirts">
                <img src="images/101.jpg" class="item-image" />
                <div class="image-title">Shirts</div>
        </div>

        <div class="categories">
            <a href="#watches">
                <img src="images/watch1.jpg" class="item-image" />
                <div class="image-title">Watches</div>
        </div>

        <div class="categories">
            <a href="#pants">
                <img src="images/105.jpg" class="item-image" />
                <div class="image-title">Pants</div>
        </div>

        <div class="categories">
            <a href="#socks">
                <img src="images/socks1.png" class="item-image" />
                <div class="image-title">Socks</div>
        </div>

        <div class="categories">
            <a href="#shoes">
                <img src="images/102.jpg" class="item-image" />
                <div class="image-title">Shoes</div>
        </div>
    </div>
    <!---caps--->
    <div class="container" id="caps">
        <h3 class="title">Caps</h3>
        <?php 
        $result = mysqli_query($db, $query);
        while($data = mysqli_fetch_assoc($result)){ 
            if($data['category'] == 'Cap') { ?>
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
                <input type="submit" name="add_to_cart" value="Shop Now">
            </form>
        </div>
        <?php } 
        }?>
    </div>
    <!---chains--->
    <div class="container" id="chains">
        <h3 class="title">Chains</h3>
        <?php 
        $result = mysqli_query($db, $query);
        while($data = mysqli_fetch_assoc($result)){ 
            if($data['category'] == 'Chain') { ?>
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
                <input type="submit" name="add_to_cart" value="Shop Now">
            </form>
        </div>
        <?php } 
        }?>
    </div>
    <!---Shirts--->
    <div class="container" id="shirts">
        <h3 class="title">Shirts</h3>
        <?php 
        $result = mysqli_query($db, $query);
        while($data = mysqli_fetch_assoc($result)){ 
            if($data['category'] == 'Shirt') { ?>
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
                <input type="submit" name="add_to_cart" value="Shop Now">
            </form>
        </div>
        <?php } 
        }?>
    </div>

    <!---watches--->
    <div class="container" id="watches">
        <h3 class="title">Watches</h3>
        <?php 
        $result = mysqli_query($db, $query);
        while($data = mysqli_fetch_assoc($result)){ 
            if($data['category'] == 'Watch') { ?>
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
                <input type="submit" name="add_to_cart" value="Shop Now">
            </form>
        </div>
        <?php } 
        }?>
    </div>
    <!---Pants--->
    <div class="container" id="pants">
        <h3 class="title">Pants</h3>
        <?php 
        $result = mysqli_query($db, $query);
        while($data = mysqli_fetch_assoc($result)){ 
            if($data['category'] == 'Pant') { ?>
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
                <input type="submit" name="add_to_cart" value="Shop Now">
            </form>
        </div>
        <?php } 
        }?>
    </div>

    <!---Socks--->
    <div class="container" id="socks">
        <h3 class="title">Socks</h3>
        <?php 
        $result = mysqli_query($db, $query);
        while($data = mysqli_fetch_assoc($result)){ 
            if($data['category'] == 'Socks') { ?>
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
                <input type="submit" name="add_to_cart" value="Shop Now">
            </form>
        </div>
        <?php } 
        }?>
    </div>

    <!---Shoes--->
    <div class="container" id="shoes">
        <h3 class="title">Shoes</h3>
        <?php 
        $result = mysqli_query($db, $query);
        while($data = mysqli_fetch_assoc($result)){ 
            if($data['category'] == 'Shoes') { ?>
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
                <input type="submit" name="add_to_cart" value="Shop Now">
            </form>
        </div>
        <?php } 
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
                    <li><a href="mailto:amir2020046@gmail.com" class="a-links">Help</a></li>
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