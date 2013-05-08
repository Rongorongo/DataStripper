<?php include ('includes/head.html');?> 
<?php include ('includes/asset.php');?> 
	<title>Chart of <?php echo $assetId ?> Priced in USD, Gold, Silver and Hours</title>
	<meta name="description" content="Interactive chart of relative <?php print $assetH ?> prices. Priced in gold, silver, working hours and USD. Download the data.">
	<link rel="canonical" href="http://www.datastripper.com/chart-<?php print $assetH ?>-price">
<?php include ('includes/header.html');?>
	<h1 class="color asset" id="headerchart1">Chart <span id="assetID"><?php print $assetH ?></span> Price</h1>
	<h2 id="headerchart2"><span class="asset"><?php print $assetH ?></span> Price in Gold, Silver, USD and Hours.</h2>
	<section class="width-100">
		<figure>
			<div id='chart_div'></div>
			<div id='chart_div2'></div>
			<form name="selectform" class="small buttons">
				<span id="button1">USD <input id='usd' type = "checkbox"  name = "usd" checked="" onclick="handleButtonClick1(); _gaq.push(['_trackEvent', 'selectchart', 'Click', 'USD']);"/></span>
				<span id="button2">Gold <input id='gold' type = "checkbox" name = "gold" checked="" onclick="handleButtonClick2(); _gaq.push(['_trackEvent', 'selectchart', 'Click', 'Gold']);" /></span>
				<span id="button3">Hours <input id='hours' type = "checkbox" name = "hours" checked="" onclick="handleButtonClick3(); _gaq.push(['_trackEvent', 'selectchart', 'Click', 'hours']);" /></span>
				<span id="button4">Silver <input id='silver' type = "checkbox" name = "silver" checked="" onclick="handleButtonClick4(); _gaq.push(['_trackEvent', 'selectchart', 'Click', 'silver']);" /></span>				
			</form>
		</figure>
	</section><br>
	<section class="row">
		<table id="kpi" class="hovered width-100">
			<caption></caption>
			<thead class="thead-gray small">
				<tr>
					<th class="tablecol"></th>
					<th class="colorchart"></th>
					<th>Price <span id="date1">1964</span> </th>
					<th>Price <span id="date2">2012</span></th>
					<th>Abs. Change</th>
					<th>% Change</th>
					<th>Yearly % Change</th>				
				</tr>
			</thead>	
				<tr class="small">
					<td class="tablecol"><?php echo $assetId ?> / USD</td>
					<td class="colorchart usd">&#8212; </td>
					<td class="right"><span id="priceStartVar1"></span> </td>
					<td class="right"><span id="priceEndVar1"></span> </td>
					<td class="right"><img class="arrowVar1" src="/img/arrow-price-up.png" alt="arrow price change"><span id="absChangeVar1"></span> </td>
					<td class="right"><img class="arrowVar1" src="/img/arrow-price-up.png" alt="arrow price change"><span id="pctChangeVar1"></span> %</td>
					<td class="right"><img class="arrowVar1" src="/img/arrow-price-up.png" alt="arrow price change"><span id="avYearPctVar1"></span> %</td>					
				</tr>
				<tr class="small">
					<td class="tablecol"><?php echo $assetId ?> / Gold</td>
					<td class="colorchart gold"> &#8212; </td>
					<td class="right"><span id="priceStartVar2"></span> </td>
					<td class="right"><span id="priceEndVar2"></span> </td>
					<td class="right"><img class="arrowVar2" src="/img/arrow-price-up.png" alt="arrow price change"><span id="absChangeVar2"></span> </td>
					<td class="right"><img class="arrowVar2" src="/img/arrow-price-up.png" alt="arrow price change"><span id="pctChangeVar2"></span> %</td>
					<td class="right"><img class="arrowVar2" src="/img/arrow-price-up.png" alt="arrow price change"><span id="avYearPctVar2"></span> %</td>
				</tr>		
				<tr class="small">
					<td class="tablecol"><?php echo $assetId ?> / Hours</td>
					<td class="colorchart hours"> &#8212; </td>
					<td class="right"><span id="priceStartVar3"></span> </td>
					<td class="right"><span id="priceEndVar3"></span> </td>
					<td class="right"><img class="arrowVar3" src="/img/arrow-price-up.png" alt="arrow price change"><span id="absChangeVar3"></span> </td>
					<td class="right"><img class="arrowVar3" src="/img/arrow-price-up.png" alt="arrow price change"><span id="pctChangeVar3"></span> %</td>
					<td class="right"><img class="arrowVar3" src="/img/arrow-price-up.png" alt="arrow price change"><span id="avYearPctVar3"></span> %</td>
				</tr>	
				<tr class="small">
					<td class="tablecol"><?php echo $assetId ?> / Silver</td>
					<td class="colorchart silver"> &#8212;</td>
					<td class="right"><span id="priceStartVar4"></span> </td>
					<td class="right"><span id="priceEndVar4"></span> </td>
					<td class="right"><img class="arrowVar4" src="/img/arrow-price-up.png" alt="arrow price change"><span id="absChangeVar4"></span> </td>
					<td class="right"><img class="arrowVar4" src="/img/arrow-price-up.png" alt="arrow price change"><span id="pctChangeVar4"></span> %</td>
					<td class="right"><img class="arrowVar4" src="/img/arrow-price-up.png" alt="arrow price change"><span id="avYearPctVar4"></span> %</td>
				</tr>	
		</table>
		<span id="alertflash"></span>
		<span class="download"><a href="https://www.google.com/fusiontables/DataSource?docid=1dDMPAWx1pgXvOjRujkwGjuaRYNPHb3mN3MTHEIU" target="_blank">Data<img src="/img/download-data-historic-prices.png" alt="download historic data prices" onClick="_gaq.push(['_trackEvent', 'ViewRawData', 'Click', 'Fusion Tables']);"></a></span>
	</section>
	<section class="aboutdata greybackground">
		<h2 class="color">About the Data</h2>
			<div>
				<?php								
					//make the query
					$q = "SELECT keyfigure, description FROM  `aboutdata` WHERE  `asset` =  '$asset'";
					$r = @mysqli_query ($dbc, $q);

					while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
						echo '<span class="bold">'.$row['keyfigure'].'</span>';
						echo '<p class="small">'.$row['description'].'</p>';
					};		
				?>	
			</div>			
			<div class="row bold">
				<div class="fifth source1">DataSet</div>
				<div class="threefifth source2">Description</div>
				<div class="fifth source3">Source</div>		
			</div>	
			<?php
				$q = "SELECT dataset, datadescription, datasource FROM  `dataset` WHERE  `asset` =  '$asset'";
				$r = @mysqli_query ($dbc, $q); //run the query
				
				while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
						echo '<div class="row small" id="oilsource">';
							echo '<div class="fifth source1">'.$row['dataset'].'</div>';
							echo '<div class="threefifth source2">'.$row['datadescription'].'</div>';
							echo '<div class="fifth source3">'.$row['datasource'].'</div>';
						echo '</div>';
					};
			?>				
			<div class="row small">
				<div class="fifth source1">Gold Price</div>
				<div class="threefifth source2">Gold price, US$/gr, nominal$, monthly</div>
				<div class="fifth source3"><a href="http://data.worldbank.org/data-catalog/commodity-price-data"  target="_blank">The World Bank</a></div>		
			</div>
			
			<div class="row small">
				<div class="fifth source1">Silver Price</div>
				<div class="threefifth source2">Silver price, spot, US$/100gr, nominal$, monthly</div>
				<div class="fifth source3"><a href="http://data.worldbank.org/data-catalog/commodity-price-data"  target="_blank">The World Bank</a></div>		
			</div>
			
			<div class="row small">
				<div class="fifth source1">Average Hourly Earnings</div>
				<div class="threefifth source2">Earnings production empl., US$/hr, avg, nominal$, monthly, season adj.</div>
				<div class="fifth source3"><a href="http://research.stlouisfed.org/fred2/series/AHETPI" target="_blank">U.S. Department of Labor</a></div>		
			</div>
		<br>
	</section>

<?php include ('includes/footer.html'); ?>

	<footer class="foot">
		<span ><a href="about" class="toe">About</a><span class="toe"> / </span><a href="blog" class="toe">Blog</a></span></span>
	</footer>
</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type='text/javascript' src='http://www.google.com/jsapi'></script>
	<script src="/js/jqplugin.1.0.2.min.js"></script>
	<script src="/js/chart.2.min.js"></script>
</body>
</html>