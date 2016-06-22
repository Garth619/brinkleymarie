</div><!-- zinnias-main-wrap -->
</div><!-- col-md-12 -->
</div><!-- row -->

<div class="footer-copy-right">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<?php
				$copyright    = get_theme_mod( 'copy_right_text' );
				$allowed_tags = array(
					'strong' => array(),
					'a'      => array(
						'href'  => array(),
						'title' => array()
					)
				);
				echo wp_kses( $copyright, $allowed_tags ); ?>
			</div>
		</div>
	</div>
</div><!-- footer-copy-right -->

</div><!-- container -->

<?php wp_footer(); ?>
</body>
</html>