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
		<ul id="listassets" class="small">
			<li  class="fifth">
				<p>Oil</p>
				<a href="../chart-oil-price" ><img src="/img/button-chart-oil.png" alt="chart price oil inflation" id="otherassets1"></a>
			</li>
			<li  class="fifth">	
				<p>Oranges</p>
				<a href="../chart-oranges-price"><img src="/img/button-chart-oranges.png" alt="chart price oranges" id="otherassets2"></a>
			</li>
			<li class="fifth">
				<p>Chickens</p>
				<a href=../chart-chicken-price"><img src="/img/button-chart-chicken.jpg" alt="chart chicken price"  id="otherassets3"></a>
			</li>
			<li class="fifth">
				<p>Wheat</p>
				<a href="../chart-wheat-price"><img src="/img/button-chart-wheat.png" alt="chart wheat price"  id="otherassets4"></a>
			</li>	
			<li class="fifth last">
				<p>Suggest Data</p>
				<a href="../about"><img src="/img/button-data-suggest.png" alt="suggest data analysis " id="otherassets5"></a>
			</li>			
		</ul>
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
	
	<footer class="foot">
		<span>
			<a href="../about" class="toe">About</a><span class="toe">&middot;</span>	
			<a href="/../blog/" class="toe">Blog</a><span class="toe">&middot;</span>
			<a href="/" class="toe">Home</a>
		</span>
	</footer>
</div><!-- #paage -->

<?php// wp_footer(); ?>
</body>
</html>