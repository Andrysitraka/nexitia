<?php
/**
 * Footer template.
 *
 * @package sanjose
 * @since 1.0.0
 *
 */



// Footer copyright
$footer_copyright = cs_get_option('footer_copyright');
$footer_subscribe_shortcode = cs_get_option('footer_subscribe_shortcode');

$footer = true;
if ( is_page() ) {
	$meta_data = get_post_meta( get_the_ID(), 'sanjose_page_options', true );
	if ( isset( $meta_data['page_footer'] ) && $meta_data['page_footer'] === false ) {
		$footer = false;
	}
}

	if ( $footer ) : ?>

		

        <!-- Footer bottom -->
        <div class="footer-bottom" style="height:50px;">
            <div class="container">
                <div class="row">
                    <!-- Footer copyright -->
                    <div class="col-md-12">
                       <p style="text-align:center;text-decoration:none;text-transform: lowercase;color:white;font-size:16px;top:-10px"> copyright nexitia 2018 </p>
                    </div>

                    <!-- Footer links -->
                    
                </div>
            </div>
        </div>
    </div>
	<?php endif;

	wp_footer(); ?>
	</body>
</html>
