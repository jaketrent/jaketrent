
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

</body>
</html>