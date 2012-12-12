<?php include ('/includes/head.html');?>
	<title>DataStripper - About and Feedback</title>
	<meta name="description" content="About Datastripper. Contact, feedback and suggest data to DataStripper">
	<link rel="canonical" href="http://www.datastripper.com/about">
<?php include ('/includes/header.html'); ?>
	
	<section class="about ">
		<h2 class="color">About</h2>	
		<p>DataStripper arose to provide an easy tool to analyze prices without distorition from inflation. The nominal prices we observe in supermarkets are easy to relate to but because of inflation these prices aren't reliable over time. Therefore DataStripper was build to expose real price movements by <em>stripping</em> the <em>data</em> for inflation, in order to analyze the real underlying price movements. <br><br>We want to make DataStripper better and we will continue to expand the data availability. Help us improve the site and let us know what we can do better.</p>
	</section>	
	<section class="feedback greybackground">
		<h2 class="color">Feedback</h2>		
		<div id="thankyou"></div>
		<script> var submitted = false </script>
		<iframe name="hidden_iframe" id="hidden_iframe"	style="display:none;" onload="if(submitted==true){window.location='about?form=submitted';}"></iframe>
		<form action="https://docs.google.com/spreadsheet/formResponse?formkey=dG5FOXY2RXpLMERiUllFYTdjUllVb2c6MQ&amp;ifq" method="post" target="hidden_iframe" onsubmit="submitted=true;" class="forms" id="feedback">
			<ul>
				<li>
					<label for="user_name" class="bold">Name</label>
					<input type="text" name="entry.0.single" id="user_name" value=""  placeholder="Your Name"  pattern="^([A-Za-z0-9-]+).+?" required>	
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
		<span ><a href="https://github.com/Rongorongo" class="toe" target="_blank">Made By Jake</a></span>
	</footer>
</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="/js/about.1.min.js"></script>	
</body>
</html>