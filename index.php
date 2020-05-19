<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="/immortal.css">
	    <meta charset="utf-8">
		<title>Immortal Cars</title>
		<script src="/immortal.js"></script>
	</head>
	<body>
	  <header>
	  <h1><a href="/index.php" class="storeName">Immortal Cars</a></h1>
	  <strong>the cars of your dreams</strong>
	  </header>
		<?php @include 'navbar.php' ?>
		<div class="banner">
			<p class="heroPhrase">Drive your dream</p>
    		<p class="lead"><a href="/products.html">View our current selection</a></p>
		</div>
		<div class="centered">
			<p class="sponsorMessage">Check out our prefered partners:</p>
		</div>
		
			
		<table class="sponsors">
			<tr>
				<td class="tablecell">
					<img class="icon" src="symbols/wheel.png" alt="tire">
					<p class="lead"><a href="https://www.michelinman.com/">Michelin Tires</a></p>
					<p>Proven to last. Durability tested on rainbow road, over one thousand laps!</p>
					
				</td>
				<td class="tablecell">
					<img class="icon" src="symbols/disc-brake.png" alt="brakes">
					<p class="lead"><a href="https://www.brembo.com/en/">Brembo Brakes</a></p>
					<p>Stop on a dime, even if you are going 88 miles per hour.</p>
				</td>
				<td class="tablecell">
					<img class="icon" src="symbols/oil.png" alt="oil">
					<p class="lead"><a href="https://www.jiffylube.com/">Jiffy Lube</a></p>
					<p>Going on a family vacation? Stop by for an oil change before the long drive.</p>
				</td>
				<td class="tablecell">
					<img class="icon" src="symbols/car.png" alt="carwash">
					<p class="lead"><a href="https://mistercarwash.com/2018/12/10/mister-car-wash-announces-acquisition-of-prime-shine-car-wash/">Prime Shine</a></p>
					<p>Is your whip covered in ectoplasm? Head to primeshine for the fresh detailed look youre missing</p>
				</td>
			
		</tr>
	</table>
	<div class="promise">
		<div class="promiseData">
			<p class="heroPhrase">Our Promise</p>
			<p style="margin-right: 36px;">We promise that, our products are fake. We do not actually have any of these cars.
			   This site is a project for our introduction to web development class at SFSU. We are an honest site
			   with nothing to hide. I am sure that if you look around on the internet you may find some of these Cars
			   or replicas that are similar. We cannot garuntee that our pricing will match theirs. Nor can we offer a price 
			   match garuntee. At this point im just typing to make the paragraph looks better and for design accuracy. I dont know what 
			   else to say this is not filling up nearly as quick as i thought it would.We promise that, our products are fake. We do not actually have any of these cars.
			   This site is a project for our introduction to web development class at SFSU. We are an honest site
			   with nothing to hide. I am sure that if you look around on the internet you may find some of these Cars
			   or replicas that are similar. We cannot garuntee that our pricing will match theirs. Nor can we offer a price 
			   match garuntee. At this point im just typing to make the paragraph looks better and for design accuracy. I dont know what 
			   else to say this is not filling up nearly as quick as i thought it would.
			</p>
		</div>
		
	</div>
		
			
		
		
	   <footer>Immortal Cars Distributions LLC</footer>
	</body>
</html>