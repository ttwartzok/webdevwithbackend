<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="/immortal.css">
	    <meta charset="utf-8">
		<title>Products</title>
		<script src="/immortal.js"></script>
	</head>
	<body>
	  <header>
	  <h1><a href="/index.html" class="storeName">Immortal Cars</a></h1>
	  <strong>the cars of your dreams</strong>
	  
	  </header>
	  <?php @include 'navbar.php' ?>
		<div class="background">
			<div class="parent" align="center">
				
				<div class="carTile">
					<img src="images/kitt.jpg" alt="nada">
					  <aside class="information">
						<p class="productName"><a href="products/kitt.html">Kitt</a></p>
						<p class="price">$ 45,000</p>
						<p class="miles">320,000 miles</p>
					</aside>
				</div>
				<div class="carTile">
					<img src="images/mario.jpg" alt="nada">
					   <aside class="information">
						<p class="productName"><a href="products/mario.html">Mario's Gokart</a></p>
						<p class="price">$ 3,000</p>
						<p class="miles">6,000 miles</p>
					</aside>
				</div>
				<div class="carTile">
					<img src="images/warthog.jpg" alt="nada">
					 <aside class="information">
						<p class="productName"><a href="products/warthog.html">Warthog</a></p>
						<p class="price">$ 120,000</p>
						<p class="miles">220,000 miles</p>
					</aside>
				</div>
				<div class="carTile">
					<img src="images/mysterymachine.jpg" alt="">
				  <aside class="information">
				  	<p class="productName"><a href="products/mysterymachine.html">Mystery Machine</a></p>
				  	<p class="price">$ 25,000</p>
				  	<p class="miles">310,000 miles</p>
				  </aside>
				</div>
				<div class="carTile">
					<img src="images/mcqueen.jpg" alt="">
				<aside class="information">
			     	<p class="productName"><a href="products/mcqueen.html">Lightning Mqueen</a></p>
			     	<p class="price">$ 250,000</p>
					<p class="miles">12,000 miles</p>
				</aside>
				</div>
				<div class="carTile">
					<img src="images/jetsons.jpg" alt="">
				<aside class="information">
					<p class="productName"><a href="products/jetsons.html">Jetson's flying car</a></p>
					<p class="price">$ 1,200,000</p>
					<p class="miles">900,000 miles</p>
			   </aside>
				</div>
				<div class="carTile">
					<img src="images/griswalds.jpg" alt="">
				<aside class="information">
					<p class="productName"><a href="products/griswalds.html">Griswalds StationWagon</a></p>
					<p class="price">$ 35,000</p>
					<p class="miles">280,000 miles</p>
			   </aside>
				</div>
				<div class="carTile">
					<img src="images/greenhornet.jpg" alt="">
				<aside class="information">
					<p class="productName"><a href="products/greenhornet.html">The Black Beauty</a></p>
					<p class="price">$ 800,000</p>
					<p class="miles">90,000 miles</p>
			   </aside>
				</div>
				<div class="carTile">
					<img src="images/batmobile.jpeg" alt="">
				<aside class="information">
			   		<p class="productName"><a href="products/batmobile.html">The Bat Mobile</a></p>
			   		<p class="price">$ 2,500,000</p>
			   		<p class="miles">1,000 miles</p>
			   </aside>
				</div>
				<div class="carTile">
					<img src="images/backtothefuture.jpg" alt="">
			<aside class="information">
				<p class="productName"><a href="products/delorean.html">Doc's Delorean</a></p>
				<p class="price">$ 5,000,000</p>
				<p class="miles">-12,000 miles</p>
		    </aside>
				</div>
				<div class="carTile">
					<img src="images/77transam.jpg" alt="">
			<aside class="information">
				<p class="productName"><a href="products/transam.html">Smokey's Transam</a></p>
				<p class="price">$ 65,000</p>
				<p class="miles">225,000 miles</p>
		   </aside>
				</div>
				<div class="carTile">
					<img src="images/ghostbusters.jpg" alt="">
			<aside class="information">
	    		<p class="productName"><a href="products/ghostbusters.html">Ghost Buster Hurse</a></p>
				<p class="price">$ 100,000</p>
				<p class="miles">80,000 miles</p>
		   </aside>
				</div>
				</div>
			</div>
		
		
		
	   <footer>Immortal Cars Distributions LLC</footer>
	</body>
</html>
<script>
	function searchFunction() {
		var input, filter, ul, li, a, i, txtValue;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		ul = document.getElementById("myUL");
		cn = ul.getElementsByClassName("carTile");
		for (i = 0; i < cn.length; i++) {
			a = cn[i].getElementsByTagName("a")[0];
			txtValue = a.textContent || a.innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
				cn[i].style.display = "";
			} else {
				cn[i].style.display = "none";
			}
		}
	}
	</script>