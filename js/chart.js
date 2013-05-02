/*jslint vars: true, white: true */
/*jslint browser: true*/
/*global $, jQuery, google, handleRangeChange, alert */

	//Pick up $asset variable determined from url in php.
var asset = document.getElementById('assetID').innerHTML;

function round(number, decimals) {
	return parseFloat(number.toFixed(decimals));
}

//Fix link underline for IE for data download
if($.browser.msie){
		$('.download a').css('text-decoration', 'none');	
}


	//Start the Google API for drawing chart with the params from URL.
var chart, color1, qTable, qPrice_1, qPrice_2, qPrice_3, qPrice_4, qResponseDataRow1, qResponseDataRow2, qResponseDataRow3, qResponseDataRow4;
qTable = "1dDMPAWx1pgXvOjRujkwGjuaRYNPHb3mN3MTHEIU";	//

if (asset === "oil") {
	color1 = "black";
	$('.usd.colorchart').css('color', color1);
	qPrice_1 = "Oil_USD";
	qResponseDataRow1 = 2;
	qPrice_2 = "Oil_Gold";
	qResponseDataRow2 = 3;
	qPrice_3 = "Oil_Hours";
	qResponseDataRow4 = 4;
	qPrice_4 = "Oil_Silver";
	qResponseDataRow3 = 5;		
}
	
if (asset === "oranges") {
	color1 = "#55B96B";	
	$('.usd.colorchart').css('color', color1);
	qPrice_1 = "Oranges_USD";
	qResponseDataRow1 = 6;
	qPrice_2 = "Oranges_Gold";
	qResponseDataRow2 = 7;
	qPrice_3 = "Oranges_Hours";
	qResponseDataRow4 = 8;
	qPrice_4 = "Oranges_Silver";
	qResponseDataRow3 = 9;
}

if (asset === "chicken") {
	color1 = "#E05A6D";
	$('.usd.colorchart').css('color', color1);
	qPrice_1 = "Chicken_USD";
	qResponseDataRow1 = 10;
	qPrice_2 = "Chicken_Gold";
	qResponseDataRow2 = 11;
	qPrice_3 = "Chicken_Hours";
	qResponseDataRow4 = 12;
	qPrice_4 = "Chicken_Silver";
	qResponseDataRow3 = 13;
}
	
if (asset === "wheat") {
	color1 = "#AA437C";	
	$('.usd.colorchart').css('color', color1);
	qPrice_1 = "Wheat_USD";
	qResponseDataRow1 = 14;
	qPrice_2 = "Wheat_Gold";
	qResponseDataRow2 = 15;
	qPrice_3 = "Wheat_Hours";
	qResponseDataRow4 = 16;
	qPrice_4 = "Wheat_Silver";
	qResponseDataRow3 = 17;	
}

google.load('visualization', '1', {'packages': ['annotatedtimeline']});

function drawChart() {
	var query = "SELECT YMD," + qPrice_1 + "," + qPrice_2 + "," + qPrice_3 + ","+ qPrice_4 + " FROM " + qTable;
	var queryText = encodeURIComponent(query);
    var gvizQuery = new google.visualization.Query('http://www.google.com/fusiontables/gvizdata?tq=' + queryText);
	gvizQuery.send(function(response) {
		chart = new google.visualization.AnnotatedTimeLine(document.getElementById('chart_div'));
		google.visualization.events.addListener(chart, "rangechange", handleRangeChange);
		google.visualization.events.addListener(chart, "ready", handleRangeChange);
        chart.draw(response.getDataTable(), {
			'displayAnnotations': false,
			'colors': [color1, '#F5B857', '#1B6FAF', 'silver'],
			'displayExactValues': false,
			'displayDateBarSeparator': true,
			'legendPosition': 'sameRow',
			'fill': 0,
			'thickness': 1,
			'allowRedraw': true,
			'displayRangeSelector': true,
			'displayZoomButtons' : true
		});
    });
}

google.setOnLoadCallback(drawChart);

 
function handleRangeChange(event) {
	var range = chart.getVisibleChartRange(); 
	var startRange = range.start; 
	var endRange = range.end;
	var diffYear = ((endRange - startRange) /86400000/365);
	var formatter_qDate = new google.visualization.DateFormat({pattern: "MM/yy"});
	var formater_year = new google.visualization.DateFormat({pattern: "MMM yyyy"});
	var qStartDate = formatter_qDate.formatValue(startRange);
	var qEndDate = formatter_qDate.formatValue(endRange);
	var startYear = formater_year.formatValue(startRange);
	var endYear = formater_year.formatValue(endRange);
	
	//Update of Start Year and Price in table KPI
	var query2 = "SELECT * FROM " + qTable + " WHERE Myyyy IN (" + "'" + qStartDate + "'," + "'" + qEndDate + "')";
	var queryText2 = encodeURIComponent(query2);
	var gvizQuery2 = new google.visualization.Query('http://www.google.com/fusiontables/gvizdata?tq=' + queryText2);
	gvizQuery2.send(handleQueryResponseStart);
	function handleQueryResponseStart(response) {
		if (response.isError()) {
		alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
		return;
		}
	
	
	var data = response.getDataTable();
		  
	//Determine if the startDate in the query is not in the first result row in the response. Is this a bug?
	var verifyDate = data.getValue(0,0);
	var variableResponse1 = 0; var variableResponse2 = 1;	  
	if(qStartDate !== verifyDate){
		variableResponse1 = 1; variableResponse2 = 0;
	} 
	
	var priceStartVar1 = round(data.getValue(variableResponse1,qResponseDataRow1),2);
	var priceStartVar2 = round(data.getValue(variableResponse1,qResponseDataRow2),2);
	var priceStartVar3 = round(data.getValue(variableResponse1,qResponseDataRow3),2);
	var priceStartVar4 = round(data.getValue(variableResponse1,qResponseDataRow4),2);
	  
	var priceEndVar1 = round(data.getValue(variableResponse2,qResponseDataRow1),2);		  
	var priceEndVar2 = round(data.getValue(variableResponse2,qResponseDataRow2),2);
	var priceEndVar3 = round(data.getValue(variableResponse2,qResponseDataRow3),2);
	var priceEndVar4 = round(data.getValue(variableResponse2,qResponseDataRow4),2);
			  
	//Calculate KPI based priceStartVars and PriceEndVars
	var absChangeVar1 = round((priceEndVar1 - priceStartVar1),2);
	var absChangeVar2 = round((priceEndVar2 - priceStartVar2),2);
	var absChangeVar3 = round((priceEndVar3 - priceStartVar3),2);
	var absChangeVar4 = round((priceEndVar4 - priceStartVar4),2);
	var pctChangeVar1 = round(((absChangeVar1/priceStartVar1)*100));
	var pctChangeVar2 = round(((absChangeVar2/priceStartVar2)*100));
	var pctChangeVar3 = round(((absChangeVar3/priceStartVar3)*100));
	var pctChangeVar4 = round(((absChangeVar4/priceStartVar4)*100));
	var avYearPctVar1 = round((((Math.pow((priceEndVar1/priceStartVar1),(1/diffYear)))-1)*100),2);//((103.41/1.45)^(1/48.78))
	var avYearPctVar2 = round((((Math.pow((priceEndVar2/priceStartVar2),(1/diffYear)))-1)*100),2);
	var avYearPctVar3 = round((((Math.pow((priceEndVar3/priceStartVar3),(1/diffYear)))-1)*100),2);
	var avYearPctVar4 = round((((Math.pow((priceEndVar4/priceStartVar4),(1/diffYear)))-1)*100),2);	
			  
	//arrow up/down in kpi table
	if(absChangeVar1 > 0){$('.arrowVar1').attr('src', 'img/arrow-price-up.png');}
	if(absChangeVar1 < 0){$('.arrowVar1').attr('src', 'img/arrow-price-down.png');}
	if(absChangeVar2 > 0){$('.arrowVar2').attr('src', 'img/arrow-price-up.png');}
	if(absChangeVar2 < 0){$('.arrowVar2').attr('src', 'img/arrow-price-down.png');}
	if(absChangeVar3 > 0){$('.arrowVar3').attr('src', 'img/arrow-price-up.png');}
	if(absChangeVar3 < 0){$('.arrowVar3').attr('src', 'img/arrow-price-down.png');}
	if(absChangeVar4 > 0){$('.arrowVar4').attr('src', 'img/arrow-price-up.png');}
	if(absChangeVar4 < 0){$('.arrowVar4').attr('src', 'img/arrow-price-down.png');}	  
	//Insert the updated price into the respective ID from the html table.
	document.getElementById('priceStartVar1').innerHTML = priceStartVar1;
	document.getElementById('priceStartVar2').innerHTML = priceStartVar2;
	document.getElementById('priceStartVar3').innerHTML = priceStartVar3;
	document.getElementById('priceStartVar4').innerHTML = priceStartVar4;  
	document.getElementById('priceEndVar1').innerHTML = priceEndVar1;
	document.getElementById('priceEndVar2').innerHTML = priceEndVar2;
	document.getElementById('priceEndVar3').innerHTML = priceEndVar3;
	document.getElementById('priceEndVar4').innerHTML = priceEndVar4;
	document.getElementById('absChangeVar1').innerHTML = absChangeVar1;
	document.getElementById('absChangeVar2').innerHTML = absChangeVar2;
	document.getElementById('absChangeVar3').innerHTML = absChangeVar3;
	document.getElementById('absChangeVar4').innerHTML = absChangeVar4;
	document.getElementById('pctChangeVar1').innerHTML = pctChangeVar1;
	document.getElementById('pctChangeVar2').innerHTML = pctChangeVar2;
	document.getElementById('pctChangeVar3').innerHTML = pctChangeVar3;
	document.getElementById('pctChangeVar4').innerHTML = pctChangeVar4;
	
	document.getElementById('avYearPctVar1').innerHTML = avYearPctVar1;
	document.getElementById('avYearPctVar2').innerHTML = avYearPctVar2;
	document.getElementById('avYearPctVar3').innerHTML = avYearPctVar3;
	document.getElementById('avYearPctVar4').innerHTML = avYearPctVar4;
	}
	document.getElementById('date1').innerHTML = startYear;
	document.getElementById('date2').innerHTML = endYear;	
}		
		

function handleButtonClick1() {
	if (document.getElementById('usd').checked) {
		chart.showDataColumns(0);
	} else {chart.hideDataColumns(0);}
}	
	
function handleButtonClick2() {
	if(document.getElementById('gold').checked){
		chart.showDataColumns(1);			
	} else {chart.hideDataColumns(1);}	
}
	
function handleButtonClick3() {
	if(document.getElementById('hours').checked){
		chart.showDataColumns(2);			
	} else {chart.hideDataColumns(2);}	
}
	
function handleButtonClick4() {
	if(document.getElementById('silver').checked){
		chart.showDataColumns(3);			
	} else {chart.hideDataColumns(3);}	
}


	google.load('visualization', '1', {packages: ['corechart']});
	function drawVisualization() {
      google.visualization.drawChart({
        "containerId": "chart_div2",
	    "dataSourceUrl": 'http://www.google.com/fusiontables/gvizdata?tq=',
        "query":"SELECT YMD, " + qPrice_1 + "," + qPrice_2 + "," + qPrice_3 + ","+ qPrice_4 + " FROM 1dDMPAWx1pgXvOjRujkwGjuaRYNPHb3mN3MTHEIU",
        "refreshInterval": 5,
        "chartType": "LineChart",
        "options": { 
			chartArea:{left:10,top:20,width:"100%",height:"90%"},
			colors: [color1, '#F5B857', '#1B6FAF', 'silver'],
			legend: {position: 'top', textStyle: {color: 'black', fontSize: 12}, alignment:'end'},
			lineWidth: 1,
			hAxis:  {titleTextStyle: {color: '#FF0000'}},
			vAxis:  {textPosition: 'none'}
        }
      });
    }
	
if ($.browser.flash === false) {	
    google.setOnLoadCallback(drawVisualization);
	$(".buttons").hide();  
	$("#kpi").hide(); 
	$("#chart_div").hide(); 
	$("#chart_div2").show(); 
	$("#alertflash").text("Ups! We noticed you don't have flash enabled - For the ubercool interactive charts, you need to install the Adobe Flash Player"); 
}
