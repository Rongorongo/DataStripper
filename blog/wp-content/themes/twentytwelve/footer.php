<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	
	<section id="otherassets" class="row ">
		<h2 class="color">Analyze Prices</h2>
		<nav class="nav-pills">
			<ul>
				<li><a href="../chart-oil-price">Oil</a></li>
				<li><a href="../chart-chicken-price">Chicken</a></li>
				<li><a href="../chart-wheat-price">Wheat</a></li>
				<li><a href="../chart-rice-price">Rice</a></li>
				<li><a href="../chart-rubber-price">Rubber</a></li>
				<li><a href="../chart-apple-price">Apple Stock</a></li>
				<li><a href="../about">Suggest Data</a></li>
			</ul>
		</nav>

	</section> <!--end assetnav section-->
	

	<script>
		  var _gaq = _gaq || [];
		  var pluginUrl =  '//www.google-analytics.com/plugins/ga/inpage_linkid.js'; 
		  _gaq.push(['_require', 'inpage_linkid', pluginUrl]);
		  _gaq.push(['_setAccount', 'UA-36719164-1']);
		  _gaq.push(['_trackPageview']);
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
	</script>
	

<!-- 		<span>
			<a href="../about" class="toe">About</a><span class="toe">&middot;</span>	
			<a href="/../blog/" class="toe">Blog</a><span class="toe">&middot;</span>
			<a href="/" class="toe">Home</a>
		</span> -->

	<footer class="foot">
		<span >
			<a href="../about" class="toe">About</a><span class="toe"> / </span>
			<a href="/../blog/" class="toe">Blog</a><span class="toe"> / </span>
			<a href="/" class="toe">Home</a>
		</span>
	</footer>

</div><!-- #page -->

<?php// wp_footer(); ?>
</body>
</html>