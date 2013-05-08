<?php include ('/includes/head.html');?>
	<title>DataStripper - About and Feedback</title>	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://blockchain.info//Resources/wallet/pay-now-button.js"></script>

	<meta name="description" content="About Datastripper. Contact, feedback and suggest data to DataStripper">
	<link rel="canonical" href="http://www.datastripper.com/about">
<?php include ('/includes/header.html'); ?>
	
	<section class="about ">
		<h2 class="color">About</h2>	
		<p>DataStripper arose to provide an easy tool to analyze prices without distorition from inflation. The nominal prices we observe in supermarkets are easy to relate to but because of inflation these prices aren't reliable over time. Therefore DataStripper was build to expose real price movements by <em>stripping</em> the <em>data</em> for inflation, in order to analyze the real underlying prices.

		<br><br>DataStripper is made and run by volunteers. If you like the site maybe you should consider donating some lovely <a style="color:grey; text-decoration:none;" href="https://blockchain.info/wallet/" target="_blank">bitcoins</a> to the team behind.</p>
		
		<div style="font-size:16px;width:300px; margin-right:auto; margin-left:auto;" class="blockchain-btn"
		     data-address="1AH46AKhaYAS1f1z2FxGrTYNdsxcwUYZ4b">
		    <div class="blockchain stage-begin">
		        <img src="https://blockchain.info//Resources/buttons/donate_64.png">
		    </div>
		    <div class="blockchain stage-loading" style="text-align:center">
		        <img src="https://blockchain.info//Resources/loading-large.gif">
		    </div>
		    <div class="blockchain stage-ready">
		        Please send payment to bitcoin address <b>[[address]]</b>
		        <p align="center" class="qr-code"></p>
		    </div>
		    <div class="blockchain stage-paid">
		        Payment Received <b>[[value]] BTC</b>. Thank You.
		    </div>
		    <div class="blockchain stage-error">
		        <font color="red">[[error]]</font>
		    </div>
		    
		</div>
	</section>	
	
	<br>
	<section class="feedback greybackground">
		<h2 class="color">Feedback</h2>	
		<p>We want to improve DataStripper and we will continue to expand the data availability. Give us a hand and let us know what we can do better by using the feedback form below.</p>	
		
		<div id="thankyou"></div>
		<script> var submitted = false </script>
		<iframe name="hidden_iframe" id="hidden_iframe"	style="display:none;" onload="if(submitted==true){window.location='about?form=submitted';}"></iframe>
		
		<form action="https://docs.google.com/spreadsheet/formResponse?formkey=dGNZQ2t3Sm13Y2pYWG9vWDBPMW11ZFE6MQ&amp;ifq" method="post" target="hidden_iframe" onsubmit="submitted=true;" class="forms" id="feedback">
			<ul>
				<li>
					<label for="user_name" class="bold">Name</label>
					<input type="text" name="entry.0.single" id="user_name" value=""  placeholder="Your Name"  pattern="^(([A-Za-z0-9-]+).([A-Za-z0-9-]+).([A-Za-z0-9-]+)/?$)" required>	
				</li>
				<li>
					<label for="user_email" class="bold" >Email</label>
					<input type="email" name="entry.1.single" id="user_email" value="" placeholder="example@mail.com" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required> 	 
				</li>
				<li>	
					<label for="user_comments" class="bold">Feedback</label>
					<textarea name="entry.2.single" id="user_comments" rows="10" cols="80" placeholder="Please let us know your comments or data suggestions which DataStripper should pick up."></textarea>
				</li>
				<li>
					<input type="submit" name="submit" value="Submit" >
				</li>	
			</ul>
		</form>	
	</section>
		
<?php include ('/includes/footer.html');?>
	<footer class="foot">
		<span ><a href="https://github.com/Rongorongo" class="toe" target="_blank">Made By Jake</a><span class="toe"> / </span><a href="blog" class="toe">Blog</a></span></span>
	</footer>
</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="/js/about.1.min.js"></script>	
</body>
</html>