<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Ectomobile For Sale</title>
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
            <img src="/images/ghostbusters.jpg" class= "productImage">
            <h2 style="font-weight: normal">Ectomobile</h2>
            <h1>$79, 000</h1>
            <p>923,874 miles</p>

            <br>
            <hr style="width: 95%; float: left;">
            <br>

            <h2>Seller's Notes</h2>
            <p class="info">Try a test drive to feel what it is like to own your very own Ectomobile!<br><br>
                <span id="dots">For more details, fill out the Contact Seller section, or read more!</span><span id="more"> This car is a 1959 Cadillac Miller-Meteor Futura Duplex limo-style endloader combination car, which you can probably find somewhere on the internet. The information listed below is completely fictional; it is all made it up so that I was able to see how text would look in the container as well as if my Read More button worked.
        </span></p>
            <a class="info" onclick="readMore()" id="notesBtn">Read more</a>

            <h2>Basics</h2>
            <div class="row">
                <div class="column">
                    <p><b>Fuel Type: </b>Gasoline</p>
                    <p><b>Exterior Color: </b>White</p>
                    <p><b>Interior Color: </b>Black</p>
                </div>
                <div class="column">
                    <p><b>Transmission: </b>Manual</p>
                    <p><b>Drivetrain: </b>FWD</p>
                    <p><b>Engine: </b>N/A</p>
                </div>
            </div>

            <h2>Safety</h2>
            <ul>
                <li>Backup Camera</li>
                <li>Brake Assist</li>
                <li>Stability Control</li>
            </ul>
        </div>
        <div class="contactColumn">
            <h1 style="margin-top: 5px" class="centered">Contact Seller</h1>
            <form name="productContact" action="#">
                <div class="contactInfo centered">
                    <input type="text" name="fname" placeholder="First Name" required>
                    <input type="text" name="lname" placeholder="Last Name" required>
                    <br>
                    <input type="text" name="email" placeholder="Email" required>
                    <input type="text" name="phone" placeholder="Phone (optional)">
                </div>
                <div class="checkButton">
                    <input type="check" value="Check Availability" onclick="ValidateEmail(document.productContact.email)"/>
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
</html>v