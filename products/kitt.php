<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>KITT For Sale</title>
    <link rel="stylesheet" type="text/css" href="/productpages.css">
    <script src="/immortal.js"></script>
</head>

<body>
<header>
    <a href="/index.php"><img src="/images/logo.png" class= "headerImage"></a>
    <strong class="headerSub">the cars of your dreams</strong>
</header>

<?php @include '../navbar.php' ?>

<div class="productContainer">
<div class="row">
    <div class="column">
        <img src="/images/kitt.jpg" class= "productImage">
        <h2 style="font-weight: normal">Knight Industries Two Thousand (KITT)</h2>
        <h1>$580, 000</h1>
        <p>31,233 miles</p>

        <br>
        <hr style="width: 95%; float: left;">
        <br>

        <h2>Seller's Notes</h2>
        <p class="info">Try a test drive to feel what it is like to own your very own 1982 KITT car!<br><br>
            <span id="dots">For more details, fill out the Contact Seller section, or read more!</span><span id="more"> This isn't a real car but is based off of the 1982 Pontiac Firebird Trans Am, which you can probably find somewhere on the internet. The information listed below is completely fictional; it is all made it up so that I was able to see how text would look in the container as well as if my Read More button worked.
        </span></p>
        <a class="info" onclick="readMore()" id="notesBtn">Read more</a>

        <h2>Basics</h2>
        <div class="row">
        <div class="column">
            <p><b>Fuel Type: </b>Gasoline</p>
            <p><b>Exterior Color: </b>Black</p>
            <p><b>Interior Color: </b>Black</p>
        </div>
        <div class="column">
            <p><b>Transmission: </b>Automatic</p>
            <p><b>Drivetrain: </b>FWD</p>
            <p><b>Engine: </b>6-cylinder</p>
        </div>
        </div>

        <h2>Safety</h2>
        <ul>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</li>
            <li>Sed do eiusmod tempor incididunt</li>
            <li>Ut labore et dolore magna aliqua</li>
        </ul>
    </div>
    <div class="contactColumn">
    <h1 style="margin-top: 5px" class="centered">Contact Seller</h1>
        <form action="#">
                <div class="contactInfo centered">
                    <input type="text" name="fname" placeholder="First Name" required>
                    <input type="text" name="lname" placeholder="Last Name" required>
                    <br>
                    <input type="text" name="email" placeholder="Email" required>
                    <input type="text" name="phone" placeholder="Phone (optional)">
                </div>
                <div class="checkButton">
                    <input type="check" value="Check Availability">
                </div>
        </form>
        <hr style="width: 80%">
        <p style="font-size: 12px; margin: 15px; color: #a9a9a9; text-align: justify;">
            By submitting above, you authorize ImmortalCars.com and its sellers/partners to contact you by texts/calls which may include marketing and be by autodialer. Calls may be pre-recorded. You also agree to our Privacy Statement. Consent is not required to purchase goods/services.
        </p>
        <p style="font-size: 12px; margin: 15px; color: #a9a9a9; text-align: justify;">We value your privacy</p>
    </div>
</div>
</div>

<footer>
    <p>Immortal Cars Distributions LLC</p>
</footer>

</body>
</html>