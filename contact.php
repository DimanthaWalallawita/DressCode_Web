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
                <li><a href="blog.php">Block</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>

        <div id="mobile">
            <a href="#"><i class="fa fa-shopping-bag"></i></a>
            <i id="bar" class="fa fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="contact-header">
        <h2>#Let's_talk</h2>
        <p>LEAVE A MESSAGE, We love to hear from you!</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>267/9, 5th mile post, Kandy, Sri Lanka</p>
                </li>

                <li>
                    <i class="fal fa-envelope"></i>
                    <p>dresscode@gmail.com</p>
                </li>

                <li>
                    <i class="fal fa-phone-alt"></i>
                    <p>(+94)71-5862987</p>
                </li>

                <li>
                    <i class="fal fa-clock"></i>
                    <p>Monday to Saturday: 9.00 am to 16.00 pm</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63320.430107951724!2d80.58458143888708!3d7.
            294543434417338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae366266498acd3%3A0x411a3818a1e03c35!2sKandy!
            5e0!3m2!1sen!2slk!4v1683562064702!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" 
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="mail.php" method="POST">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>

            <label for="name">From:</label>
            <input type="text" name="fromEmail" id="fromEmail" class="form-control"  value="walallawitat@gmail.com" readonly required autofocus>

            <label for="email">To:</label>
            <input type="text" name="toEmail" id="toEmail" class="form-control" placeholder="Email address" required autofocus>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>

            <label for="message">Message</label>
            <textarea  id="message" name="message" class="form-control" placeholder="Message" required ></textarea>

            <input class="normal" name="sendMailBtn" type="submit" value="Send">
           
        </form>

        <div class="people">
            <div>
                <img src="img/people/1.png" alt="">
                <p><span>John Doe</span> Senior Marketing Manager <br>Phone: (+94)71-5862987 <br>
                E-mail: Johndoe@gmail.com</p>
            </div>

            <div>
                <img src="img/people/2.png" alt="">
                <p><span>William Smith</span> HR Manager <br>Phone: (+94)71-7858963 <br>
                E-mail: williamsmith@gmail.com</p>
            </div>

            <div>
                <img src="img/people/3.png" alt="">
                <p><span>Emma Stone</span> Senior Supervisor <br>Phone: (+94)71-5862987 <br>
                E-mail: Johndoe@gmail.com</p>
            </div>
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