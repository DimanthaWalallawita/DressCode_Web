<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "ppaproject");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
                'item_size' 		=>	$_POST["size"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
            'item_size' 		=>	$_POST["size"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DessCode</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>

    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Block</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>

        <div id="mobile">
            <a href="#"><i class="fa fa-shopping-bag"></i></a>
            <i id="bar" class="fa fa-outdent"></i>
        </div>
    </section>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off!</p>
        <button onclick = "window.location.href='shop.php';">Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>

        <div class="fe-box">
            <img src="img/f2.png" alt="">
            <h6>Online Order</h6>
        </div>

        <div class="fe-box">
            <img src="img/f3.png" alt="">
            <h6>Save Money</h6>
        </div>

        <div class="fe-box">
            <img src="img/f4.png" alt="">
            <h6>Promotions</h6>
        </div>

        <div class="fe-box">
            <img src="img/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>

        <div class="fe-box">
            <img src="img/f6.png" alt="">
            <h6>Support</h6>
        </div>
    </section>

    
    <section id="product1" class="section-p1">

        <h2>Feature Products</h2>
        <p>Summer Collection New Morden Design</p>
        
        <div class="pro-container">
        <?php
		    $query = "SELECT * FROM tblitems ORDER BY advertisementID ASC LIMIT 8";
		    $result = mysqli_query($connect, $query);
		    if(mysqli_num_rows($result) > 0)
		    {
			    while($row = mysqli_fetch_array($result))
		        {
	    ?>
                <div class = "pro" >
				
                    <form method="post" action="index.php?action=add&id=<?php echo $row["advertisementID"]; ?>">
						    <img src="<?php echo $row["imagePath"]?>" class="img-responsive" /><br>
                            <div class="des">
                            <span><?php echo $row["productName"]?></span>
                                <h5><?php echo $row["description"]?></h5>

                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>

                                <h4>$ <?php echo $row["item_price"]?></h4>

                                <div class="single-pro-details">
                                    <select name="size" style="margin-top:7px; padding: 4px 20px;">
                                        <option>Select Size</option>
                                        <option>XXL</option>
                                        <option>XL</option>
                                        <option>Large</option>
                                        <option>Medium</option>
                                        <option>Small</option>
                                    </select>
                                    <input style="margin-top:7px; padding: 4px 20px;" type="number" name="quantity" value="1" placeholder="Quantity">
                                </div>

						        <input type="hidden" name="hidden_name" value="<?php echo $row["productName"]; ?>" />

						        <input type="hidden" name="hidden_price" value="<?php echo $row["item_price"]; ?>" />         
                            </div>
                            
                            <button type="submit" name="add_to_cart" style="margin-top:5px; background-color: white; border-radius: 50%; border: none;color: blue;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px; " class="btn btn-success"><i class="fal fa-shopping-cart cart"></i></button>
				    </form>
                </div>
		<?php
				}
		    }
	    ?>

    </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% off</span> - All t-Shirt & Accessories</h2>
        <button onclick = "window.location.href='shop.php';" class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
        <?php
		    $query = "SELECT * FROM tblitems ORDER BY advertisementID DESC LIMIT 8";
		    $result = mysqli_query($connect, $query);
		    if(mysqli_num_rows($result) > 0)
		    {
			    while($row = mysqli_fetch_array($result))
		        {
	    ?>
                <div class = "pro" >
				
                    <form method="post" action="index.php?action=add&id=<?php echo $row["advertisementID"]; ?>">
						    <img src="<?php echo $row["imagePath"]?>" class="img-responsive" /><br>
                            <div class="des">
                            <span><?php echo $row["productName"]?></span>
                                <h5><?php echo $row["description"]?></h5>

                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>

                                <h4>$ <?php echo $row["item_price"]?></h4>

                                <div class="single-pro-details">
                                    <select name="size" style="margin-top:7px; padding: 4px 20px;">
                                        <option>Select Size</option>
                                        <option>XXL</option>
                                        <option>XL</option>
                                        <option>Large</option>
                                        <option>Medium</option>
                                        <option>Small</option>
                                    </select>
                                    <input style="margin-top:7px; padding: 4px 20px;" type="number" name="quantity" value="1" placeholder="Quantity">
                                </div>

						        <input type="hidden" name="hidden_name" value="<?php echo $row["productName"]; ?>" />

						        <input type="hidden" name="hidden_price" value="<?php echo $row["item_price"]; ?>" />         
                            </div>
                            
                            <button type="submit" name="add_to_cart" style="margin-top:5px; background-color: white; border-radius: 50%; border: none;color: blue;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px; " class="btn btn-success"><i class="fal fa-shopping-cart cart"></i></button>
				    </form>
                </div>
		<?php
				}
		    }
	    ?>
        </div>

    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy deals</h4>
            <h2>Buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at care</span>
            <button class="white">Learn More</button>
        </div>

        <div class="banner-box banner-box2">
            <h4>Spring/Summer</h4>
            <h2>Upcomming season</h2>
            <span>The best classic dress is on sale at care</span>
            <button class="black">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection - 50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW JACKET COLLECTION</h2>
            <h3>Spring/Summer</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trandy Collection</h3>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div>
            <h4>Sign Up For DressCode</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers</span></p>
        </div>

        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 268/9, 5th mile post, Kandy, Sri Lanka</p>
            <p><strong>Phone:</strong> (+94)715869875 / (+94)778459635</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="about.php">About us</a>
            <a href="cart.php">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="contact.php">Contact us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="items.php">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/Icons/app.jpg" alt="">
                <img src="img/Icons/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/Icons/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>© 2023 May 08, DressCode Textile Company - Official Website</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>