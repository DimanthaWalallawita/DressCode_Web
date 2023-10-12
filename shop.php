<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "ppaproject");
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
</head>

<body>

    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
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

    <section id="page-header">
        <h2>#StyleDressCode</h2>
        <p>Save more with coupons & up to 70% off!</p>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">
        <?php
		    $query = "SELECT * FROM tblitems";
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

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
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
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
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