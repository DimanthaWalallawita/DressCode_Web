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
                <li><a href="shop.php">Shop</a></li>
                <li><a class="active" href="blog.php">Block</a></li>
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

    <section id="page-header" class="blog-header">
        <h2>#Readmore</h2>
        <p>Read about products & brands!</p>
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/Blog/b2.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>GUCCI</h4>
                <p>Gucci is a renowned luxury fashion brand that has established itself as an icon of sophistication and style. 
                    Founded in 1921 by Guccio Gucci in Florence, Italy, Gucci has become synonymous with high-end fashion, exquisite 
                    craftsmanship, and innovative designs.</p>
            </div>
            <h1>10/01</h1>
        </div>

        <div class="blog-box">
            <div class="blog-img">
                <img src="img/Blog/b1.png" alt="">
            </div>
            <div class="blog-details">
                <h4>EMBARK</h4>
                <p>Embark is a well-known brand in Sri Lanka that focuses on ethical and sustainable fashion. It is primarily 
                    recognized for its line of clothing and accessories made from recycled materials, specifically repurposed saris. 
                    The brand's mission is to promote eco-friendly practices, empower local artisans, and support animal welfare causes.</p>
            </div>
            <h1>16/02</h1>
        </div>

        <div class="blog-box">
            <div class="blog-img">
                <img src="img/Blog/b3.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>NIKE</h4>
                <p>Nike is a globally recognized brand that is synonymous with sports and athletic footwear, apparel, and equipment. 
                    Established in 1964 as Blue Ribbon Sports by Bill Bowerman and Phil Knight, the company officially became Nike, 
                    Inc. in 1971. Since then, Nike has grown to become one of the world's largest and most influential sports brands.</p>
            </div>
            <h1>12/08</h1>
        </div>

        <div class="blog-box">
            <div class="blog-img">
                <img src="img/Blog/b4.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>ADIDAS</h4>
                <p>Adidas has successfully made a mark in the fashion industry by blending sports and streetwear influences to create
                     fashionable and trendy apparel and footwear. The brand's fashion offerings cater to both athletes and fashion-conscious 
                     individuals who appreciate the combination of style and functionality.</p>
            </div>
            <h1>12/04</h1>
        </div>

        <div class="blog-box">
            <div class="blog-img">
                <img src="img/Blog/b5.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>LACOSTE</h4>
                <p>
                    Lacoste is a well-known fashion brand that was founded in 1933 by tennis player René Lacoste. Initially recognized 
                    for its iconic polo shirts featuring the crocodile logo, Lacoste has evolved into a comprehensive lifestyle brand with 
                    a wide range of clothing, footwear, accessories, and fragrances.</p>
            </div>
            <h1>17/02</h1>
        </div>

        <?php
		    $query = "SELECT * FROM tblblog ORDER BY advertisementID ASC";
		    $result = mysqli_query($connect, $query);
		    if(mysqli_num_rows($result) > 0)
		    {
			    while($row = mysqli_fetch_array($result))
		        {
	    ?>

<form method="post" action="index.php?action=add&id=<?php echo $row["advertisementID"]; ?>">
        <div class="blog-box">

            

                <div class="blog-img">
                    <img src="<?php echo $row["imagePath"]?>" alt="">
                </div>

                <div class="blog-details">
                    <h4><?php echo $row["brand"]?></h4>
                    <p>
                        <?php echo $row["description"]?>
                    </p>
                </div>

                <h1><?php echo $row["advertisementID"]?>/16</h1>

            </form>
        </div>

        <?php
				}
		    }
	    ?>

    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
    </section>

    <section id="advertisment" class="section-p1 section-m1">
        <div>
            <h4>Sell your Products & Publish your Brand</h4>
            <p>Create your own advertisments & <span>post it in here !</span></p>
        </div>

        <div class="form">
            <button class="normal"><a href="addblog.php">Create your Advertisment</a></button>
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