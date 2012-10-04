
	<footer id="colophon" role="contentinfo">
       <div class="footer-wrap">
		<div id="site-generator">
			<?php do_action( 'livingjournal_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'living-journal' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'living-journal' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'living-journal' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'http://citizenjournal.net/living-journal-theme/', 'living-journal' ) ); ?>" rel="designer"><?php printf( __( '%1$s Theme by %2$s', 'living-journal' ), 'Living Journal', 'Citizen Journal' ); ?></a> 
		</div>
      </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-16224416-4']);
_gaq.push(['_setDomainName', 'jaketrent.com']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>

</body>
</html>