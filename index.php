<?php include ('includes/head.html'); ?>
	
	<title>DataStripper - Charts of Commodities Priced in Gold, Silver and USD.</title>
	<meta name="description" content="Analyze oil, wheat and other commodities priced in gold, silver, working hours and USD. Play with interactive charts and download the data.">	
	<link rel="canonical" href="http://www.datastripper.com">
	<link rel="stylesheet" href="/css/slider.1.min.css">
<?php include ('includes/header.html'); ?>
	<div class="row">	
		<section id="welcome" class="row">
			<div class="half">
				<h2 class="color">Analyze Prices</h2>
				<p><img id="introimg1" src="/img/relative-prices-analyze.png" alt="analyze relative prices">Want to know the oil price measured in gold or wheat priced in silver? DataStripper has the answer and offers the best place on the web to analyze relative prices.</p>
			</div>
			<div class="half" id="welcome2">
				<h2 class="color">Explore Data</h2>
				<p><img id="introimg2" src="/img/chart-prices.png" alt="chart prices">Analyze relative commodity prices by exploring the charts on the page. Featured below is wheat priced in USD, gold, silver or hourly salaries. Check it out!</p>
			</div>		
		</section> <!--end welcome section -->
		<section class="width-100">		
			<div class="custom-wrap" id="default">
				<div id="slider1" class="slider">
					<div class="slider-box">			
						<div class="slider-item text-box">
							<br><h1 class="color">Falling Wheat Prices</h1>
							<br><p>Since the 1960's the relative wheat price measured in gold or silver has been falling throughout the years.</p> 
							<p>In comparison the nominal wheat price measured in USD tells a different story as wheat priced in USD has been increasing over the years.</p>								
							<a href="chart-wheat-price" class="clickme">Analyze Wheat Prices</a>
						</div>
						<figure>
							<a href="chart-wheat-price"><img class="slideimg slider-item" src="/img/chart/chart-wheat-gold-silver.png" alt="wheat prices gold silver"/></a>
							<figcaption class="caption">Wheat price, gold/silver, 1964 - 2012</figcaption>
						</figure>		
						<div class="slider-item text-box">
							<br><h1 class="color">Steady Oil Price</h1> 
							<br><p>The chart depicts the price of one barrel of crude oil measured in gram gold since the 1970's.</p> 
							<p>Priced in gold the oil price has been steady for the last 40 years around 1-2 gram for one barrel of crude oil.</p>
							<a href="chart-oil-price" class="clickme">Analyze Oil Prices</a>		
						</div>	
						<figure>					
							<a href="chart-oil-price"><img class="slideimg slider-item" src="/img/chart/chart-oil-gold-price.png" alt="oil price gold"/></a>
							<figcaption class="caption" id="caption2">Oil Price, gold, 1975 - 2011 </figcaption>
						</figure>
						<div class="slider-item text-box">
							<br><h1 class="color">Price of Oranges</h1>
							<br><p>The price of oranges measured in gold has been falling for several years.</p> 
							<p>In comparison if you measure the price of oranges in terms of USD you get a different picture and prices has been increasing.</p>								
							<a href="chart-oranges-price" class="clickme">Analyze Orange Prices</a>
						</div>	
						<figure>
							<a href="chart-oranges-price"><img class="slideimg slider-item" src="/img/chart/chart-oranges-gold-price.png" alt="price oranges gold usd"/></a>
							<figcaption class="caption" id="caption3">Price of Oranges, gold, 1970 - 2011</figcaption>
						</figure>							
					</div>		
					<div class="slider-nav">
						<a href="#"></a><a href="#"></a><a href="#"></a>
					</div>					
				</div>
			</div>		
		</section> <!--end slider section -->	
		<section id="chartcases" class="row">
			<div class="quarter"><h3><a href="chart-chicken-price" class="color">Chicken Price in Hours</a></h3>
				<p class="italic">Chicken Price, hours/kg</p>
				<a href="chart-chicken-price"><img class="chartimg" src="/img/chart/chart-chicken-price-gold-thumb.png" alt="chart price chicken"></a>
			</div>
			<div class="quarter"><h3 ><a href="/chart-oranges-price" class="color">Decreasing Orange Prices</a></h3>
				<p class="italic">Orange Price, gold/kg</p>
				<a href="chart-oranges-price"><img class="chartimg" src="/img/chart/chart-oranges-gold-usd-thumb.png" alt="chart organges gold usd"></a>
			</div>	
			<div class="quarter"><h3><a href="/chart-oil-price" class="color">Inflationary USD Oil Price</a></h3>
				<p class="italic">Oil Price, usd/bbl</p>
				<a href="chart-oil-price"><img class="chartimg" src="/img/chart/chart-oil-inflation-usd-thumb.png" alt="chart inflation oil"></a>
			</div>
			<div class="quarter"><h3 ><a href="/chart-oil-price" class="color">Steady Oil Price in Gold</a></h3>
				<p class="italic">Oil Price, gold/bbl</p>
				<a href="chart-oil-price"><img class="chartimg" src="/img/chart/chart-oil-gold-price-thumb.png" alt="oil price gold"></a>
			</div>
		</section> <!--end cases section -->	
		<section class="why row greybackground">
			<h2 class="color">Why DataStripper?</h2>
			<p>	When analyzing prices one can analyze nominal or relative prices. The nominal price are what we see in supermarkets. The relative price is the value in terms of some other item. In everyday speak we talk about nominal prices, but what matters are relative prices. DataStripper adresses this.</p>
			<div class="half" id="why1">
				<h4>Analyze Relative Prices</h4>
				<p><img class="introimg" src="/img/relative-price-inflation.png" alt="Inflation Relative Prices">When we say that the price of computers has fallen, we mean that the price of computers relative to other goods has fallen. DataStripper makes it easy to analyze these relative prices.</p>
			</div>
			<div class="half" id="why2">
				<h4>Examine Purchasing Power</h4>
				<p><img class="introimg" src="/img/purchasing-power-inflation.png" alt="Purchasing Power Inflation">If the price of an item increase but wages don't we are losing purchasing power. DataStripper shows this relationship and makes it easy to analyze price changes in relation to wages.</p>
			</div>	
			<div class="half" id="why3">
				<h4>Strip Inflation from Prices</h4>
				<p><img class="introimg" src="/img/calculate-inflation.png" alt="Calculate Prices Inflation">Due to inflation nominal prices might increase while relative prices are falling. With DataStripper you can strip off inflation by measuring prices in relation to fixed assets such as gold.</p>
			</div>	
			<div class="half" id="why4">
				<h4>Commodities Priced in Gold</h4>
				<p><img class="introimg" src="/img/prices-in-gold.png" alt="Prices in gold silver">The Consumer Price Index (CPI) is a common way to measure inflation. By analysing prices in gold DataStripper provides a complimentary analysis to traditional CPI calculations.</p>
			</div>	
		</section><!--end whydatastripper section -->
    </div> 
	<?php include ('includes/footer.html');?>
	<footer class="foot">
		<span ><a href="about" class="toe">About</a></span>
	</footer>
</div> <!-- end div page -->	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="/js/slider.1.min.js"></script>
</body>
</html>